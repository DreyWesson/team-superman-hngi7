<?php
$files = array_filter(scandir('scripts'), function ($script) {
    return !is_dir('scripts/' . $script);
}); // To remove "." and  ".." from the array output os scabdir

$final = [];
if ($files) {
    $submitted = 0;
    $passes = 0;
    $fails = 0;
    foreach ($files as $file) {
        $submitted++;
        $script = [];
        $script['file'] = $file;
        if (preg_match('/.php$/i', $file)) {
            $output = exec('php -f scripts/' . $file .' 2>&1');
        } elseif (preg_match('/.py$/i', $file)) {
            $output = exec('python scripts/' . $file);
        } elseif (preg_match('/.js$/i', $file)) {
            $output = exec('node scripts/' . $file);
        }

        if (isset($output)) {
            $result = [];
            preg_match('/^Hello World, this is ([a-zA-Z -]*) with HNGi7 ID ((HNG-|)[0-9]{1,5}) using (Python|PHP|JavaScript|Node.js) for stage 2 task.(([a-zA-Z0-9_\-\.]+)@([a-zA-Z0-9_\-\.]+)\.([a-zA-Z]{2,5}))$/i', $output, $result);
            if (count($result) > 0) {
                $script['name'] = $result[1];
                $script['id'] = $result[2];
                $script['language'] = $result[4];
                $script['status'] = 'Pass';
                $script['email']= $result[5];
                $script['output'] = substr($output,0,strpos($output,"."));
                $passes++;
            } else {
                $script['name'] = "";
                $script['id'] = "";
                $script['language'] = "";
                $script['status'] = 'Fail';
                $script['email']='';
                $script['output'] = '';
                $fails++;
            }

            array_push($final, $script);
        }
    }
}

if (!isset($_GET['json'])) {
    ?>
    <!DOCTYPE html>
    <html lang="en">

    <head>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>Team Superman- Task 2</title>

        <!-- Bootstrap core CSS -->
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" rel="stylesheet">
        <link href="//cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css" rel="stylesheet">

    </head>

    <body>

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark static-top">
        <div class="container">
            <a class="navbar-brand" href="#">Team Superman- Task 2</a>
        </div>
    </nav>

    <!-- Page Content -->
    <main role="main" class="container">
        <div class="my-3 p-3 bg-white rounded shadow-sm">
            <h6 class="border-bottom border-gray pb-2 mb-0">
                Scripts Results
                <span class="badge badge-primary">Submitted <?php echo $submitted ?></span>
                <span class="badge badge-success">Passes <?php echo $passes ?></span>
                <span class="badge badge-danger">Fails <?php echo $fails ?></span>
            </h6>
            <table id="table" class="table table-striped table-bordered">
                <thead>
                <tr>
                    <th>Status</th>
                    <th>Output</th>
                    <th>File Name</th>
                    <th>Name</th>
                    <th>Language</th>
                    <th>ID</th>
                </tr>
                </thead>
                <tbody>
                <?php foreach ($final as $script) { ?>
                    <tr>
                        <td><?=$script['status']=='Pass'? '<span class="badge badge-success">Pass</span>': '<span class="badge badge-danger">Fail</span>' ?></td>
                        <td><?=$script['output']?></td>
                        <td><?=$script['file']?></td>
                        <td><?=$script['name']?></td>
                        <td><?=$script['language']?></td>
                        <td><?=$script['id']?></td>

                    </tr>
                <?php } ?>
                </tbody>
            </table>
        </div>
    </main>

    <!-- Bootstrap core JavaScript -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
            integrity="sha256-4+XzXVhsDmqanXGHaHvgh1gMQKX40OUvDEBTu8JcmNs=" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <script src="//cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
    <script>
        $(document).ready(function () {
            $('#table').DataTable();
        });
    </script>
    </body>

    </html>
    <?php
} else {
    header('Content-Type: application/json');  // <-- header declaration
    echo json_encode($final, true);    // <--- encode
}