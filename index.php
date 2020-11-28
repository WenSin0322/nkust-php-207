<?php
require("dbinfo.php");
?>

<!doctype html>
<html lang="en">
  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <title>沈文鑫</title>
    <style>
        body { font-family: 微軟正黑體; }
    </style>
  </head>


  <body>
    <div class="container">
    <h1>沈文鑫的php網站</h1>
<hr>
    <ul class="nav">
      <li class="nav-item">
        <a class="nav-link active" href="https:\\mis.nkust.edu.tw">高科資訊系</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="exchange.php">匯率換算</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="exchange2.php">自訂匯率換算</a>
      </li>
    </ul>
<hr>
  <form action="insert.php" method="post">
  訊息內容: <input type="text" name="name" size=40>
  <input type="submit" value ="送出" >
  </form>

    <?php
        $sql = "SELECT * FROM news";
        $result = $conn->query($sql);
        
        if ($result->num_rows > 0) {
          // output data of each row
          echo "<table class='table table-striped'> ";
          echo "<tr><th>編號</th><th>馬路編號</th><th>張貼日期</th><th>管理</th></tr>";
          while($row = $result->fetch_assoc()) {
          echo "<tr>" ;
          echo "<td>". $row["id"]. "</td>" .
               "<td>". $row["title"]. "</td>" .
               "<td>". $row["pub_date"]."</td>".
               "<td><a href='deleteit.php?id=".
                $row["id"]. "'>刪除</a></td>";
          echo "</tr>" ;
          }     
          echo "</table>";
        } else {       
          echo "0 results";     
        }
        $conn->close();
    ?>
</div> 
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

    
  </body>
</html>