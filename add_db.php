<?php 

    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "blog";

    $conn = mysqli_connect($servername, $username, $password, $dbname);

    session_start();
    
    if(isset($_POST['post'])) {
        $title = mysqli_real_escape_string($conn, $_POST['title']);
        $photo = mysqli_real_escape_string($conn, $_POST['thumbnail']);
        $tag = mysqli_real_escape_string($conn, $_POST['tag']);
        $content = mysqli_real_escape_string($conn, $_POST['content']);

        $query = "INSERT INTO post VALUES (NULL,'$title', '$photo',  '$content', '$tag', CURRENT_TIMESTAMP)";
        $result = mysqli_query($conn,$query);
        header('location:Home_edit.php');
       
    }

    
?>