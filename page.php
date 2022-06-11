<?php 

    session_start();
    
    $connect = new mysqli('localhost', 'root', '', 'Blog');

    if ($connect->connect_error) {
        die("Something wrong.: " . $connect->connect_error);
      }

    $url = $_SERVER['REQUEST_URI'];
    $components = parse_url($url);
    parse_str($components['query'], $results);
    $ID = $results['ID']; 

    $sql = "SELECT * FROM post WHERE ID=$ID";
    $result = $connect->query($sql);
    
    

?> 

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
    <title>Document</title>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-light" style="padding:2%;padding-left:7%">
  <a class="navbar-brand" href="index.php" style="font-family:Cursive;font-size:20px">Progress</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav" style="padding-left:38%">
    <ul class="navbar-nav">
      <li class="nav-item " style="padding-left:12%">
        <a class="nav-link" href="index.php" > Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item" style="padding-left:12%">
        <a class="nav-link" href="programming.php">Programming</a>
      </li>
      <li class="nav-item" style="padding-left:12%">
        <a class="nav-link" href="Lifestyle.php">Lifestyle</a>
      </li>
      <button class="btn btn-outline-danger my-2 my-sm-0" type="button" style="margin-left:12%" >About&nbsp;Me</button>
     
    </ul>
  </div>
</nav>

<div class="container text-center" style="padding-top:20px;padding-bottom:40px;margin-bottom:60px">

     
    <?php while($row = $result->fetch_assoc()): ?>
    
        
       <?php echo "<img src=".$row['photo']." width='350px' height='400px' class='card-img-top'> "?>
        <div class="card-body">
            <span><?php echo  "Date: ". $row['t']; ?></span><span><?php echo "  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Tag: ". $row['tag']; ?></span><br><br>
            <h5 class="card-title"><?php echo $row['title']; ?></h5>
            <p class="card-text"><?php echo $row['content']; ?></p>
            
        </div>
   
    <?php endwhile ?>
    
    
</div>
    
</body>
</html>