
<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Contact US</title>
        <link rel="stylesheet" href="CSS/login.css">
        <style>

        </style>
    </head>

    <body>
        <!--section header starts here-->
        <div class="header">
            <div class="inner_header">
                <div class="logo_container">
                    <h1>Restaurant<span>ELITE</span></h1>
                </div>
                <ul class ="navigation">
                    <li><a href="Menu.php">Menu</a></li>
                    <li><a href="about.php">About Us</a></li>
                    <li><a href="gallery.php">Gallery</a></li>
                </ul>
            </div>
        </div>

<section class="login first grey">
                    <div class="container">

                        <form method="post" action="register.php" enctype="multipart/form-data">
                            <fieldset>
                                <legend><h5 style="font-family: Noto Sans;">Login to </h5><h4 style="font-family: Noto Sans;">Ordering food</h4></legend>
                                    <div>
                                        <label for="userEmail">Email Address</label>
                                        <input type="email" id="userEmail" name="userEmail" placeholder="placeholde@fake.com" required="required" maxlength="100" />
                                    </div>
                                    <div>
                                        <label for="Password">Password</label>
                                        <input type="password" id="password" name="password" placeholder="Enter Password" required="required" />
                                    </div>

                                    <div class="form-group text-right">
                                        <button class="btn btn-primary btn-block"  name="submit">Login</button>
                                    </div><br>
                                    
                                </fieldset>
                        </form>
                         
          
                    </div>
    <aside>
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6302.915618762757!2d-73.6365748269147!3d45.4999671648263!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4cc919ea02702a25%3A0xaaa5e01761f7e67!2s3706%20Avenue%20de%20Kent%2C%20Montr%C3%A9al%2C%20QC%20H3S%201N3!5e0!3m2!1sen!2sca!4v1586306405583!5m2!1sen!2sca"
                width="100%" height="395px" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false"
                tabindex="0">
                    
      </iframe>
        </aside>
                </section>
        <?php
        require('database.php');
        session_start();
        if (isset($_SESSION["email"])) {
            session_destroy();
        }

        $ref = @$_GET['q'];
        if (isset($_POST['submit'])) {
            $email = $_POST['email'];
            $pass = $_POST['password'];
            $email = stripslashes($email);
            $email = addslashes($email);
            $pass = stripslashes($pass);
            $pass = addslashes($pass);
            $email = mysqli_real_escape_string($con, $email);
            $pass = mysqli_real_escape_string($con, $pass);
            $str = "SELECT * FROM user WHERE email='$email' and password='$pass'";
            $result = mysqli_query($con, $str);
            if ((mysqli_num_rows($result)) != 1) {
                echo "<center><h3><script>alert('Sorry.. Wrong Username (or) Password');</script></h3></center>";
                header("refresh:0;url=order.php");
            } else {
                $_SESSION['logged'] = $email;
                $row = mysqli_fetch_array($result);
                $_SESSION['name'] = $row[1];
                $_SESSION['id'] = $row[0];
                $_SESSION['email'] = $row[2];
                $_SESSION['password'] = $row[3];
                header('location:order.php?q=1');
            }
        }
        ?>

       
        <!--section for map ends here-->

        <!--section for form and map ends here-->

        <!--section footer starts here-->
        <div class ="footer">
            <div class="footer_center">
                <p><span>© 2020 RESTAURANT ELITE, Montreal, QC, +1 514-576-1407</p>
            </div>
        </div>
        <!--section footer ends here-->
    </body>

</html>

