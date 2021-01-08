<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Contact US</title>
        <link rel="stylesheet" href="CSS/contact.css">
        <style>
        </style>
    </head>
    <?php
include 'header.php';
include 'footer.php';
?>
    <body>
        <!--section header starts here-->
        
        <!--section header starts here-->
        <!--section for form and map starts here-->
        <section>
            <h2>Contact Us</h2>
            <!--section for form starts here-->
            <article class="form">
                <?php
                if (isset($_POST['submit'])) {
                    $name = $_POST['name'];
                    $name = stripslashes($name);
                    $name = addslashes($name);
                    $email = $_POST['email'];
                    $email = stripslashes($email);
                    $email = addslashes($email);
                    $password = $_POST['password'];
                    $password = stripslashes($password);
                    $password = addslashes($password);
                    $confirmpassword = $_POST['onfirmpassword'];
                    $confirmpassword = stripslashes($confirmpassword);
                    $confirmpassword = addslashes($confirmpassword);
                    $str = "SELECT email from user WHERE email='$email'";
                    $result = mysqli_query($con, $str);
                    if ((mysqli_num_rows($result)) > 0) {
                        echo "<center><h3><script>alert('Sorry.. This email is already registered !!');</script></h3></center>";
                        header("refresh:0;url=login.php");
                    } else {
                        $str = "insert into user set name='$name',email='$email',password='$password',confirmpassword='$confirmpassword'";
                        if ((mysqli_query($con, $str)))
                            echo "<center><h3><script>alert('Congrats.. You have successfully registered !!');</script></h3></center>";
                        header('location:order.php?q=1');
                    }
                }
                ?>
                <section class="login first grey">
                    <div class="container">
                        <form method="post" action="register.php" enctype="multipart/form-data">
                            <fieldset>
                                <legend>
                                    <h5><style>Register to </h5>
                                            <h4>Ordering food</h4></legend>
                                <div>
                                    <label for="Name">Name</label>
                                    <input type="text" id="firstName" name="Name" placeholder="Enter Name" required="required" maxlength="50" />
                                </div>
                                <div>
                                    <label for="userEmail">Email Address</label>
                                    <input type="email" id="userEmail" name="userEmail" placeholder="placeholde@fake.com" required="required" maxlength="100" />
                                </div>
                                <div>
                                    <label for="Password">Password</label>
                                    <input type="password" id="password" name="password" placeholder="Enter Password" required="required" />
                                </div>
                                <div>
                                    <label for="password">Conform password</label>
                                    <input type="password" id="passsword" name="password" required="required" placeholder="Conform Password" />
                                </div><br><br>
                                <div class="form-group text-right">
                                    <button class="btn btn-primary btn-block" name="submit">Register</button>
                                </div><br>
                                <div class="form-group text-center">
                                    <span class="text-muted">Already have an account! </span> <a href="login.php">Login </a> Here..
                                </div>
                            </fieldset>
                        </form>
                    </div>
                </section>
            </article>
            <!--section for form ends here-->
            <!--section for map starts here-->
            <aside class="map">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6302.915618762757!2d-73.6365748269147!3d45.4999671648263!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4cc919ea02702a25%3A0xaaa5e01761f7e67!2s3706%20Avenue%20de%20Kent%2C%20Montr%C3%A9al%2C%20QC%20H3S%201N3!5e0!3m2!1sen!2sca!4v1586306405583!5m2!1sen!2sca"
                    width="100%" height="395px" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false"
                    tabindex="0"></iframe>
            </aside>
            <!--section for map ends here-->
        </section>
        <!--section for form and map ends here-->
        <!--section footer starts here-->
       
        <!--section footer ends here-->
    </body>
</html>