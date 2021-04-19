<?php 
    session_start();
    include "database.php";

    if(isset($_POST['Username']) && isset($_POST['Password'])) {
        function validate($data){
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
        }

        $Username = validate($_POST['Username']);
        $Password = validate($_POST['Password']);
        
        if(empty($Username)) {
            header('Location: SignIn.php?error=Username is required');
            exit();
        } else if (empty($Password)) {
            header('Location: SignIn.php?error=Password is required');
            exit();
        } else {
            $sql = "SELECT * FROM user WHERE username='$Username' AND password='$Password'";

            $result= mysqli_query($conn, $sql);

            if(mysqli_num_rows($result) === 1) {
                $row = mysqli_fetch_assoc($result);
                //print_r($row);
                if($row['Username'] === $Username && $row['Password'] === $Password) {
                    $_SESSION['Username'] = $row['Username'];
                    $_SESSION['id'] = $row['id'];
                    header("Location: home.php"); //Redirect after login
                    exit();

                    //echo "\nLogged in";
                } else {
                    header("Location: SignIn.php?error=Incorrect Username or Password");
                    exit();
                }
            } else {
                header('Location: SignIn.php?error=Incorrect Username or Password');
                exit();
            }
        }
    } else {
        header('Location: SignIn.php');
        exit();
    }
?>