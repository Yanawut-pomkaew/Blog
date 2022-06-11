<?php 
    ini_set('session.gc_maxlifetime', 1200);
    session_start();
    include('db.php');

    $errors = array();
    $MID;
    if(isset($_POST['login'])) {
        $username = mysqli_real_escape_string($conn, $_POST['username']);
        $password = mysqli_real_escape_string($conn, $_POST['password']);
       
    }

    if(count($errors)==0){

        $password = md5($password);
        $query = "SELECT * FROM `login` WHERE username = '$username' AND md5(Password) = '$password' ";
        $result = mysqli_query($conn,$query);

        if (mysqli_num_rows($result)==1) {

            $sql = "SELECT * FROM `login` WHERE username = '$username'";
            $result = $conn->query($sql);
            $row = $result->fetch_assoc();
            $Username = $row['Username'];
            $_SESSION['Username'] = $Username;
           
  
            // $_SESSION['success'] = "You are now logged in";
            header('location: home_edit.php');
            
        } else {
            array_push($errors, "Wrong ID/password combination");
            $_SESSION['error'] = "Wrong ID/password, Please try again!!";
            header('location: index.php');
        }

        
    }

    
?>