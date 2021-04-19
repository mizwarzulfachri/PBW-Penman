<?php 
    session_start();
    if(isset($_SESSION['id']) && isset($_SESSION['Username'])) {
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8"> <!--Mengubah bahasa-->
        <title>Sign in</title>
        <!-- navbar cuman bisa digunakan dengan ini -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
        <link rel="stylesheet" href="../SignIn/style.css?v=<?php echo time(); ?>">
        <link rel="shortcut icon" type="image/png" href="assets/Logo.png"/>
    </head>
    <body>
    <!-- navbar -->
    <nav class="navbar navbar-light" style="background-color: rgba(137, 98, 248, 1);">
        <div class="container-fluid collapse navbar-collapse" id="navbarNavAltMarkup">
          <a class="navbar-brand" href="#">
            <img src="assets/logo-penman.png" alt="" width="100px" class="d-inline-block align-text-top">
          </a>
          <ul class="nav nav-pills">
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false"><img src="assets/User.png" widht="100px"></a>
              <ul class="dropdown-menu dropdown-menu-end">
                <li><a class="dropdown-item" href="#">Home</a></li>
                <li><a class="dropdown-item" href="#">See Stories</a></li>
                <li><hr class="dropdown-divider"></li>
                <li><a class="dropdown-item" href="#">Log Out</a></li>
              </ul>
            </li>
        </ul> 
        </div>
    </nav>
       <h1>Hello there! </br><?php echo $_SESSION['Username']; ?></h1>
        <!-- untuk keluar dari akun -->
       <form class="box" action="LogOut.php" method="post">
       <input type="submit" name="" value="Logout">
       </form>
    </body>
</html>

<?php 
} else {
    header("Location: SignIn.php");
    exit();
} 
?>