<?php
session_start();
$success=false;
include "server.php";
if(isset($_POST['signup'])){
  $email=$_POST['email'];
  $name=$_POST['name'];
  $password=$_POST['password'];
  $sql="INSERT INTO `mlogin` (`id`, `name`, `mail`, `pass`) VALUES (NULL, '$name', '$email', '$password');";
  $result=mysqli_query($conn,$sql);
  if($result){
    $success=true;
  }
  
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SignIn</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css">
</head>
<body>
  <div class="container">
    <section class="vh-100 gradient-custom">
        <div class="container py-5 h-100">
          <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-12 col-md-8 col-lg-6 col-xl-5">
              <div class="card bg-dark text-white" style="border-radius: 1rem;">
                <div class="card-body p-5 text-center">
      
                  <div class="mb-md-5 mt-md-4 pb-5">
      
                    <h2 class="fw-bold mb-2 text-uppercase">Login</h2>
                    <!-- <p class="text-white-50 mb-5">Please enter your login and password!</p> -->
                    <?php
                    if($success){
                    echo '<p  class="text-white-50 mb-5">Your Accout Is Created</p>';
                    }
                    ?>
                    <form action="signup.php" method="post">
                    <div class="form-outline form-white mb-4">
                      <input type="text" name="name" id="typeEmailX" class="form-control form-control-lg" />
                      <label class="form-label" for="typeEmailX">Name</label>
                    </div>
                    <div class="form-outline form-white mb-4">
                      <input type="email" name="email" id="typeEmailX" class="form-control form-control-lg" />
                      <label class="form-label" for="typeEmailX">Email</label>
                    </div>
      
                    <div class="form-outline form-white mb-4">
                      <input type="password" name="password" id="typePasswordX" class="form-control form-control-lg" />
                      <label class="form-label" for="typePasswordX">Password</label>
                    </div>
      
                    <!-- <p class="small mb-5 pb-lg-2"><a class="text-white-50" href="#!">Forgot password?</a></p> -->
      
                    <button class="btn btn-outline-light btn-lg px-5" name="signup" type="submit">SignUp</button>
                    </form>
                    <div class="d-flex justify-content-center text-center mt-4 pt-1">
                      <a href="#!" class="text-white"><i class="fab fa-facebook-f fa-lg"></i></a>
                      <a href="#!" class="text-white"><i class="fab fa-twitter fa-lg mx-4 px-2"></i></a>
                      <a href="#!" class="text-white"><i class="fab fa-google fa-lg"></i></a>
                    </div>
      
                  </div>
      
                  <div>
                    <p class="mb-0">have an account? <a href="login.php" class="text-white-50 fw-bold">Sign In</a>
                    </p>
                  </div>
      
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
    </div>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js" integrity="sha384-zYPOMqeu1DAVkHiLqWBUTcbYfZ8osu1Nd6Z89ify25QV9guujx43ITvfi12/QExE" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.min.js" integrity="sha384-Y4oOpwW3duJdCWv5ly8SCFYWqFDsfob/3GkgExXKV4idmbt98QcxXYs9UoXAB7BZ" crossorigin="anonymous"></script>
</body>
</html>