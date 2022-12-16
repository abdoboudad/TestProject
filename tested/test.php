<?php   
    $host = 'localhost';
    $user = 'root';
    $pass = 'root';
    $db = 'links';
    $conn = mysqli_connect($host,$user,$pass,$db);
    $l = mysqli_query($conn,'select * from user_link');



?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
  <div class="container">
        <nav class="navbar navbar-expand-md navbar-dark bg-black p-2">
        <a class="navbar-brand text-white"  href="#">AlfhaTub</a>
        <button class="navbar-toggler" data-bs-toggle='collapse' data-bs-target='#a'><span class="navbar-toggler-icon"></span></button>
        <ul id="a" class="navbar-nav collapse navbar-collapse">
          <li class="nav-item"><a class="nav-link" href="#">Home</a></li>
        </ul>
      </nav>
  </div>

    <div class="container table-responsive">
      <center>
          <h1>Share your link now</h1>
      </center>
      <table id="table" class="table table-striped">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">First</th>
            <th scope="col">Subscribe</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            
            <?php
            $num = 1;
            while($link = mysqli_fetch_array($l)){
                  echo '<tr>';
                  echo '<th scope="row">'.$num++;
                  echo '<td >'.$link['link'].'</td>';
                  echo "<td ><a href='".$link['link']."'class='btn btn-danger' type='text'>Subscribe<a></td>";
                  echo '</th>';
                  echo '</tr>';
                  
                }
              ?>
          </tr>
        </tbody>
    </table>
    </div>

<script src="js/bootstrap.bundle.min.js"></script>
</body>
</html>