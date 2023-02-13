<?php
  session_start();
  $connection = mysqli_connect("localhost","root","");
  $db = mysqli_select_db($connection," portal-app-db");

  if(isset($_POST['login'])){
    $query = "select * from users where email = '$_POST[email]' AND password = '$_POST[password]'";
    $query_run = mysqli_query($connection,$query);
    if(mysqli_num_rows($query_run)){
      $_SESSION['email'] = $_POST['email'];
      while($row = mysqli_fetch_assoc($query_run)){
        $_SESSION['password'] = $row['password'];
        echo "<script>
        window.location.href = index.php';
        </script>";
      }
    }
    else{
      echo "<script>alert('Please Enter correct email id and password');

      </script>";
    }
  }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge, chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- -------------- CSS File for form ---------------- -->
    <link rel="stylesheet" href="form.css">

      <!-- --------- Boxicons CSS icons --------- -->
      <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

</head>
<body>
    <main>
        <i class='bx bx-moon toggle-btn' ></i>
        <div class="container">
            <div class="inner-box">
                <div class="forms-wrap">
                    <form action="index.php" class="sign-in-form" autocomplete="off">
                        <div class="logo">
                            <a href="home.php"><img src="images/su_alt.png" alt="TDL iON"></a>
                        </div>

                        <div class="heading">
                            <h2>Welcome Back</h2>
                            <h6>Not registered yet?</h6>
                            <a href="#" class="toggle">Sign Up</a>
                        </div>

                        <div class="start-form">
                           <div class="input-wrap">
                                <input
                                type="text"
                                minlength="6"
                                maxlength="15"
                                class="input-field"
                                autocomplete="off"
                                required
                                />
                                <label>Username</label>

                           </div> 

                           <div class="input-wrap">
                            <input
                            type="password"
                            minlength="5"
                            maxlength="8"
                            class="input-field"
                            autocomplete="off"
                            required
                            />
                            <label>Password</label>

                       </div> 

                       <input type="submit" value="Sign In" class="sign-btn">
                       <p class="text">
                        Forgot Password or your login details?
                        <a href="#">Get Help</a> signing in
                       </p>
                        </div>
                    </form>

                    <form action="index.php" class="sign-up-form" autocomplete="off">
                        <div class="logo">
                            <a href="home.php"><img src="images/su_alt.png" alt="TDL iON"></a>
                        </div>

                        <div class="heading">
                            <h2>Get Started</h2>
                            <h6>Already have an Account?</h6>
                            <a href="#" class="toggle">Sign In</a>
                        </div>

                        <div class="start-form">
                           <div class="input-wrap">
                                <input
                                type="text"
                                minlength="6"
                                maxlength="15"
                                class="input-field"
                                autocomplete="off"
                                required
                                />
                                <label>Username</label>

                           </div>
                           
                           <div class="input-wrap">
                            <input
                            type="email"
                            class="input-field"
                            autocomplete="off"
                            required
                            />
                            <label>Email</label>

                       </div>

                           <div class="input-wrap">
                            <input
                            type="password"
                            minlength="6"
                            maxlength="8"
                            class="input-field"
                            autocomplete="off"
                            required
                            />
                            <label>Password</label>

                       </div> 

                       <input type="submit" value="Sign Up" class="sign-btn">
                       <p class="text">
                        By signing up, I agree to the <a href="#">Terms of Services</a> and
                        <a href="#">Privacy Policies</a>
                       </p>
                        </div>
                    </form>
                </div>

                <div class="carousel">
                        <div class="images-wrapper">
                            <img src="images/image1.png" class="image img-1 show" alt="" />
                            <img src="images/image2.png" class="image img-2" alt="" />
                            <img src="images/image3.png" class="image img-3" alt="" />
                        </div>

                        <div class="text-slider">
                                <div class="text-wrap">
                                    <div class="text-group">
                                        <h2>Choose from a variety of courses</h2>
                                        <h2>Keep track of your progress</h2>
                                        <h2>Interact with the teachers directly</h2>
                                    </div>
                                </div>

                                <div class="bullets">
                                    <span class="active" data-value="1"></span>
                                    <span data-value="2"></span>
                                    <span data-value="3"></span>
                                </div>
                        </div>
                </div>
            </div>
        </div>
    </main>



<!-- ---------------- JS File for form --------------------- -->
    <script src="form.js"></script>
</body>

</html>