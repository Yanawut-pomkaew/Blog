<?php 
    session_start();
    
    $connect = new mysqli('localhost', 'root', '', 'blog');

    // Check Connection

    if ($connect->connect_error) {
        die("Something wrong.: " . $connect->connect_error);
      }

    $sql = "SELECT * FROM post";
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
    <title>Progress</title>
</head>

<body>

<nav class="navbar navbar-expand-lg navbar-light" style="padding:2%;padding-left:7%">
  <a class="navbar-brand" href="home_edit.php" style="font-family:Cursive;font-size:20px">Progress</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav" style="padding-left:30%">
    <ul class="navbar-nav">
      <li class="nav-item " style="padding-left:12%">
        <a class="nav-link" href="home_edit.php" > Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item" style="padding-left:12%">
        <a class="nav-link" href="programming_edit.php">Programming</a>
      </li>
      <li class="nav-item" style="padding-left:12%">
        <a class="nav-link" href="lifestyle_edit.php">Lifestyle</a>
      </li>
      <button class="btn btn-outline-danger my-2 my-sm-0" type="button" style="margin-left:12%" >About&nbsp;Me</button>
      <button class="btn btn-outline-success my-2 my-sm-0" type="button" style="margin-left:12%" onclick="location.href='add.php'">Write</button>
     
    </ul>
  </div>
</nav>

  
<div class="container">
  <div class="row">
    <?php while($row = $result->fetch_assoc()): ?>
    <div class="col-sm-4" style="width: 5rem;margin-bottom:4%">
        
       <?php echo "<img src=".$row['photo']." height='190' class='card-img-top'> "?>
        <div class="card-body">
            <span><?php echo  "Date: ". $row['t']; ?></span><br><span><?php echo "   Tag: ". $row['tag']; ?></span><br><br>
            <h5 class="card-title"><?php echo $row['title']; ?></h5>
            <p class="card-text"><?php echo mb_strimwidth($row['content'], 0, 45, ' ....'); ?></p>
            <a href="page.php?ID=<?php echo $row['ID']; ?>" class="btn btn-danger stretched-link">Read Info</a>
        </div>
    </div>
    <?php endwhile ?>
    
    
   
    
  </div>
</div>

    
</body>
</html>