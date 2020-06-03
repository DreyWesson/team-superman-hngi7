<?php 
  //Prints JSON IF REQUESTED
  if(isset($_GET['json'])){
    header('Content-Type: application/json');
    echo json_encode($scripts);
    die();
  }
?>

<!--Now for some UI-->

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>HNG Internship task 2</title>
    <style>
      body {
        margin: 0;
        padding: 0;
        font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto,
          Oxygen, Ubuntu, Cantarell, "Open Sans", "Helvetica Neue", sans-serif;
      }
      * {
        box-sizing: border-box;
      }
      .container {
        width: 90%;
        margin: auto;
        padding: 50px 0;
      }
      p {
        line-height: 1em;
        margin: 5px 0;
        font-weight: 500;
        color: rgb(102, 231, 102);
        font-size: 14px;
      }
      p span {
        font-weight: bold;
        font-family: monospace;
        font-size: 1.2em;
        color: rgb(10, 182, 250);
      }
      .module.failed p:not(.test):not(.badge) {
        color: rgba(211, 69, 3, 0.507);
      }
      .module {
        box-shadow: 1px 1px 3px 0 rgb(102, 231, 102);
        border-radius: 10px;
        padding: 15px;
        border: 1px solid rgb(102, 231, 102);
        background-color: #fff;
      }
      .module.failed {
        box-shadow: 1px 1px 3px 0 rgba(211, 69, 3, 0.507);
        border-color: rgba(211, 69, 3, 0.507);
      }
      @media (min-width: 768px) {
        .container {
          display: flex;
          flex-flow: column wrap;
        }
        .module {
          width: 48%;
          margin-right: 2%;
          margin-bottom: 2%;
        }
        div.info {
          display: flex;
          flex-flow: row wrap;
          justify-content: space-between;
        }
      }
      @media (min-width: 992px) {
        .module {
          width: 31.3%;
          margin-right: 20px;
          margin-bottom: 20px;
        }
        .container {
          padding-top: 100px;
        }
      }
      .output {
        text-align: center;
        margin: 8px 0;
      }
      .test {
        color: #333;
        font-size: 16px;
        line-height: 1.5em;
        width: 90%;
        margin: auto;
      }
      .badge {
        background-color: rgb(102, 231, 102);
        color: #fff;
        display: inline-flex;
        padding: 10px 15px;
        border-radius: 5px;
        margin: 10px 5%;
      }
      .module.failed .badge {
        background-color: rgba(211, 69, 3, 0.507);
      }
      .decor {
        position: fixed;
        left: 0;
        top: 0;
        width: 100%;
        height: 100%;
        z-index: -1;
      }
      .decor div {
        width: 50px;
        position: fixed;
        height: 50px;
        background-color: rgba(10, 182, 250, 0.329);
        border-radius: 50%;
      }
      .decor div:first-child {
        width: 500px;
        height: 500px;
        right: -250px;
        bottom: -250px;
      }
      .decor div:nth-child(2) {
        width: 300px;
        height: 300px;
        bottom: 100px;
        left: 10px;
      }
      .decor div:nth-child(3) {
        right: 200px;
        width: 500px;
        height: 500px;
        top: -250px;
        border: 5px solid rgba(10, 182, 250, 0.329);
        background-color: transparent;
      }
      html::-webkit-scrollbar {
        width: 10px;
      }
      html::-webkit-scrollbar-thumb {
        background: rgba(10, 182, 250, 0.329);
        border-radius: 60px;
      }
    </style>
  </head>
  <body>
    <div class="decor">
      <div></div>
      <div></div>
      <div></div>
    </div>
    <div class="container">
      <?php 
        foreach($scripts as $key => $value):
      ?>
      <div class="module <?php echo $value['Result']? '':'failed' ?>">
        <div class="info">
          <p><span>File Name:</span> <?php echo isset($value['file'])? $value['file']:''; ?></p>
          <p><span>NAME: </span> <?php echo isset($value['Name'])? $value['Name']:''; ?></p>
          <p><span>HNGi7 ID: </span> <?php echo isset($value['HNGi7 ID'])? $value['HNGi7 ID']:''; ?></p>
          <p><span>LANGUAGE: </span> <?php echo isset($value['Language'])? $value['Language']:'' ; ?></p>
        </div>
        <p class="output"><span>OUTPUT</span></p>
        <p class="test">
          <?php echo isset($value['output'])? $value['output']:''; ?>
        </p>
        <p class="badge"><?php echo $value['Result']? 'PASSED':'FAILED' ?></p>
      </div>
      <?php
        endforeach;
      ?>
    </div>
    <script>
      //Little javascript for masonry effect.
      function masonry(grid, gridCell, gridGutter, dGridCol, tGridCol) {
        var g = document.querySelector(grid),
          gc = document.querySelectorAll(gridCell),
          gcLength = gc.length,
          gHeight = 0,
          i;
        for (i = 0; i < gcLength; ++i) {
          gHeight += gc[i].offsetHeight + parseInt(gridGutter);
        }
        if (window.screen.width >= 1024) {
          g.style.height =
            gHeight / dGridCol + gHeight / (gcLength + 1) + 200 + "px";
        } else if (window.screen.width < 1024 && window.screen.width >= 768) {
          g.style.height = gHeight / tGridCol + gHeight / (gcLength + 1) + "px";
        }
      }

      ["resize", "load"].forEach(function (event) {
        window.addEventListener(event, function () {
          masonry(".container", ".module", 20, 3, 2);
        });
      });
    </script>
  </body>
</html>

