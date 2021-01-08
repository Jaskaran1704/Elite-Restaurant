<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>
    <style>
        *{
    margin:0;
    padding:0;
    list-style: none;
    text-decoration: none;
}
.header{
    width:100%;
    height:80px;
    display:block;
    background-color: #101010;
    position: relative;
}

 

.inner_header{
    width:1000px;
    height:100%;
    display:block;
    margin:0 auto;
}
 
.logo_container{
    height:100%;
    display:table;
    float:left;
}

.logo_container > h1{
    color:white;
    height:100%;
    display:table-cell;
    vertical-align: middle;
    font-family:'Montserrat';
    font-size:32px;
    font-weight: 200;
}

.logo_container > h1 > span{
    font-weight:800;
}

 

.navigation{
    float:right;
    height:100%;
}

.navigation > li > a{
    height:50%;
    display:table;
    float:left;
    color:white;
}

.navigation > a:last-child{
    padding-right:0px;
}

.navigation> li:last-child:hover{
  background-color: #ddd;
  border: none;
  color: black;
  text-align: center;
  font-size: 16px;
  transition: 0.3s;
  background-color: #3e8e41;
  color: white;
}



.navigation > li{
    display: table-cell;
    vertical-align: middle;
    height:100px;
    font-family:'Montserrat';
    font-size: 18px;
   padding:5px 15px 3px 15px;
}

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
                <li><a href="about.php">About</a></li>
                <li><a href="contact.php">Contact Us</a></li>
                <li><a href="gallery.php">Order now</a></li>
            </ul>
            <?php
            include "exam.php";
                            if(isset($_SESSION["uid"])){
                                $sql = "SELECT first_name FROM user_info WHERE user_id='$_SESSION[uid]'";
                                $query = mysqli_query($con,$sql);
                                $row=mysqli_fetch_array($query);
                                
                                echo '
                               <div class="dropdownn">
                                  <a href="#" class="dropdownn" data-toggle="modal" data-target="#myModal" ><i class="fa fa-user-o"></i> HI '.$row["first_name"].'</a>
                                  <div class="dropdownn-content">
                                    <a href="" data-toggle="modal" data-target="#profile"><i class="fa fa-user-circle" aria-hidden="true" ></i>My Profile</a>
                                    <a href="logout.php"  ><i class="fa fa-sign-in" aria-hidden="true"></i>Log out</a>
                                    
                                  </div>
                                </div>';

                            }else{ 
                                echo '
                                <div class="dropdownn">
                                  <a href="#" class="dropdownn" data-toggle="modal" data-target="#myModal" ><i class="fa fa-user-o"></i> My Account</a>
                                  <div class="dropdownn-content">
                                    <a href="" data-toggle="modal" data-target="#Modal_login"><i class="fa fa-sign-in" aria-hidden="true" ></i>Login</a>
                                    <a href="" data-toggle="modal" data-target="#Modal_register"><i class="fa fa-user-plus" aria-hidden="true"></i>Register</a>
                                    
                                  </div>
                                </div>';
                                
                            }
                            ?>
            
        </div>
    </div>
    
</body>
</html>