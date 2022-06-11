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

<style>


.rgtDiv {
    text-align:left;
  position: relative;
  overflow: hidden;
  min-height: 200px;
  border: solid 1px #ccc;
}
    .textinput {
            float: left;
            width: 100%;
            min-height: 75px;
            outline: none;
            resize: none;
            border: 1px solid grey;
        }
</style>

<body>

<nav class="navbar navbar-expand-lg navbar-light" style="padding:2%;padding-left:7%">
  <a class="navbar-brand" href="index.php" style="font-family:Cursive;font-size:20px">Progress</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav" style="padding-left:30%">
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
      <button class="btn btn-outline-success my-2 my-sm-0" type="button" style="margin-left:12%" >Write</button>
     
    </ul>
  </div>
</nav>

  
<div class="container p-3 my-3 border text-center jumbotron">
    <form action="add_db.php" method="POST">
        
        <div class="col-sm-4;"><br>
            <label>Title</label>
            <input name="title" style="width:300px;height:25px" />
            <br><br>
            <label>Thumbnail</label>
            <input name="thumbnail" type="file" />
            <br><br>
                  <label class="control-label">Tag</label>
                    <select class="form-control" name="tag">
                      <option value="programming">programming</option>
                      <option value="lifestyle">lifestyle</option>
                    </select>
            <br><br>
            <label>Content</label>

           
            <textarea class="textinput" name="content" rows="10" cols="140" type="text" placeholder=""></textarea>
            
            </textarea>

        </div>
        <br><br><br><br><br><br><br><br><br><br><br><br>
        <button class="btn btn-outline-primary my-2 my-sm-0" type="submit" name="post">POST</button>
    </form>
</div>

    
</body>


</html>