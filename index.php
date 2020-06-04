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
      $output = exec('php -f scripts/' . $file . ' 2>&1');
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
        $script['email'] = $result[5];
        $script['output'] = substr($output, 0, strpos($output, "."));
        $passes++;
      } else {
        $script['name'] = "";
        $script['id'] = "";
        $script['language'] = "";
        $script['status'] = 'Fail';
        $script['email'] = '';
        $script['output'] = substr($output, 0, strpos($output, "."));
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
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.css">

  </head>

  <body>
    <!-- styles -->
    <style>
      table {
        border-collapse: collapse;
      }

      td,
      th {
        padding: 6px;
        border: 1px solid #ccc;
        text-align: left;
      }

      main {
        margin-bottom: 20px;
      }

      .dataTables_wrapper .dataTables_paginate .paginate_button.current,
      .dataTables_wrapper .dataTables_paginate .paginate_button.current:hover {
        color: white;
        background: lightblue;
        border-radius: 50%
      }

      .dataTables_wrapper .dataTables_paginate .paginate_button {
        border-radius: 50%
      }

      @media only screen and (max-width: 760px),
      (min-device-width: 768px) and (max-device-width: 1024px) {

        table,
        thead,
        tbody,
        th,
        td,
        tr {
          display: block;
        }

        #table-row {
          margin-bottom: 5px
        }

        .heading {
          display: flex;
          flex-direction: column
        }

        .heading span {
          margin-bottom: 5px
        }

        thead tr {
          position: absolute;
          top: -9999px;
          left: -9999px;
        }

        tr {
          border: 1px solid #ccc;
        }

        td {
          border: none;
          border-bottom: 1px solid #eee;
          position: relative;
          padding-left: 50%;
        }

        td:before {
          top: 6px;
          left: 6px;
          width: 45%;
          padding-right: 10px;
          white-space: nowrap;
          font-size: 16px;
          font-weight: 800
        }

        td:nth-of-type(1):before {
          content: "Status";
        }

        td:nth-of-type(2):before {
          content: "Output";
        }

        td:nth-of-type(3):before {
          content: "File Name";
        }

        td:nth-of-type(4):before {
          content: "Name";
        }

        td:nth-of-type(5):before {
          content: "Language";
        }

        td:nth-of-type(6):before {
          content: "ID";
        }

        .dataTables_length label,
        .dataTables_filter label {
          text-align: left;
          float: left
        }
      }
    </style>
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg static-top navbar-dark bg-dark ">
      <div class="container">
        <a class="navbar-brand" href="#">Team Superman- Task 2</a>
      </div>
    </nav>

    <!-- Page Content -->
    <main role="main" class="container">
      <div class="my-3 p-3 bg-white rounded shadow-sm">
        <h4 class="border-bottom border-gray pb-2 mb-0 text-center">
          Scripts Results
        </h4>
        <div class='text-center heading mt-2'>
          <span class="btn btn-sm btn-primary" style="font-size: 16px;">Submitted: <?php echo $submitted ?></span>
          <span class="btn btn-sm btn-success" style="font-size: 16px;">Passed: <?php echo $passes ?></span>
          <span class="btn btn-sm btn-danger" style="font-size: 16px;">Failed: <?php echo $fails ?></span>
        </div>
      </div>
      <table id="table" class="table table-hover table-sm table-bordered">
        <thead class="thead-dark">
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
            <tr id="table-row" <?= $script['status'] == 'Pass' ? 'class="table-success"' : 'class="table-danger"' ?>>
              <td><?= $script['status'] == 'Pass' ? '<span class="badge badge-success">Pass</span>' : '<span class="badge badge-danger">Fail</span>' ?></td>
              <td><?= $script['output'] ?></td>
              <td><?= $script['file'] ?></td>
              <td><?= $script['name'] ?></td>
              <td><?= $script['language'] ?></td>
              <td><?= $script['id'] ?></td>
            </tr>
          <?php } ?>
        </tbody>
      </table>
    </main>

    <!-- Bootstrap core JavaScript -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha256-4+XzXVhsDmqanXGHaHvgh1gMQKX40OUvDEBTu8JcmNs=" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.js"></script>
    <script>
      $(document).ready(function() {
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
