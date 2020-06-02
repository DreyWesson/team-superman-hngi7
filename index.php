<?php
// Emulate the header BigPipe sends so we can test through Varnish.
header('Surrogate-Control: BigPipe/1.0');

// Explicitly disable caching so Varnish and other upstreams won't cache.
header("Cache-Control: no-cache, must-revalidate");

// Setting this header instructs Nginx to disable fastcgi_buffering and disable
// gzip for this request.
header('X-Accel-Buffering: no');

// regex pattern for validation
$pattern = '/^(Hello\sWorld,\sthis\sis)\s([a-zA-Z]+)\s([a-zA-Z]+)\s(with\sHNGi7\sID)\s(HNG-[0-9]{5})\s(using)\s([a-zA-Z.]+)\s(for\sstage\s2\stask)$/';
$result = [];

$dir = 'scripts';
if ($dh = opendir($dir)) {
  $files = scandir($dir);
  for ($i = 2; $i < count($files); $i++) {
    $filename = "$dir/$files[$i]";
    $fileType = pathinfo($filename, PATHINFO_EXTENSION);
    if ($fileType == 'js') {
      $output = shell_exec(" node $filename");
      if (preg_match($pattern, $output)) {
        $result[$output] = 'pass';
      } else {
        $result[$output] = 'fail';
      }
    } elseif ($fileType == 'py') {
      $output = shell_exec(" python $filename");
      if (preg_match($pattern, $output)) {
        $result[$output] = 'pass';
      } else {
        $result[$output] = 'fail';
      }
    } elseif ($fileType == 'php') {
      $content = file_get_contents($filename);
      $output = eval("?>$content");
      if (preg_match($pattern, $output)) {
        $result[$output] = 'pass';
      } else {
        $result[$output] = 'fail';
      }
    }
  }
}

if (isset($_GET['json'])) {
  // Set a valid header so browsers pick it up correctly.
  header('Content-type:  application/json;');
  echo json_encode($result);
} else {
    // Set a valid header so browsers pick it up correctly.
    header('Content-type:  text/html;');
  foreach ($result as $key => $value) {
    echo "$key - $value<br>";
  } 
}
