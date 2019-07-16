<?php
    include 'conect_db.php';
?>

<!DOCTYPE html>
<html>
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- Page title -->
    <title>LOGIN</title>

    <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
    <!--<link rel="shortcut icon" type="image/ico" href="favicon.ico" />-->

    <!-- Vendor styles -->
    <link rel="stylesheet" href="vendor/fontawesome/css/font-awesome.css" />
    <link rel="stylesheet" href="vendor/metisMenu/dist/metisMenu.css" />
    <link rel="stylesheet" href="vendor/animate.css/animate.css" />
    <link rel="stylesheet" href="vendor/bootstrap/dist/css/bootstrap.css" />

    <!-- App styles -->
    <link rel="stylesheet" href="fonts/pe-icon-7-stroke/css/pe-icon-7-stroke.css" />
    <link rel="stylesheet" href="fonts/pe-icon-7-stroke/css/helper.css" />
    <link rel="stylesheet" href="styles/style.css">
    <style>
    
        .imgsiz{
            
            background-image: url(cover.jpg);
            background-repeat: no-repeat;
            background-size: 100%x100%;
        }
        .hcolor{
            
            color: white;
        }
    </style>
</head>
<body class="blank imgsiz">
<div class="color-line"></div>
<div class="login-container ">
    <div class="row ">
        <div class="col-md-12">
            <div class="text-center m-b-md">
                <h3 class="hcolor">LOG IN HERE</h3>
            </div>
            <div class="hpanel">
                <div class="panel-body">
                        <form action="" method="post"> 
                            <div class="form-group">
                                <label class="control-label" for="username">Username</label>
                                <input type="text" placeholder="Your Username" title="Please enter you username" required="" value="" name="txtUseremail" id="username" class="form-control">
                            </div>
                            <div class="form-group">
                                <label class="control-label" for="password">Password</label>
                                <input type="password" title="Please enter your password" placeholder="******" required="" value="" name="password" id="password" class="form-control">
                                
                            </div>
                            <button class="btn btn-success btn-block" name="login">Login</button>
                            <?php
                            
                                if(isset($_POST['login'])){
                                    
                                    $email=$_POST["txtUseremail"];
                                    $passwor=$_POST["password"];
                                    
                                    
                                    $sql = mysqli_query($connect,"SELECT `id`, `username`,email, `password`,type FROM `tbl_user` 
                                    WHERE email='$email' AND password='$passwor'");
                                    if(mysqli_num_rows($sql)>0)
                                        {
                                        while($row = mysqli_fetch_assoc($sql))
                                        {
                                            $userid = $row["id"];
                                            $username = $row["username"];
                                            $Type = $row["type"];
                                            $Email = $row["email"];

                                            session_start();
                                            $_SESSION["id"]= $userid;
                                            $_SESSION["name"]= $username;
                                            $_SESSION["type"]= $Type;
                                            $_SESSION["email"]= $Email;
                                            

                                           if($Type=="Admin")
                                           {
                                                echo "<meta http-equiv=refresh content='0; url=dashboard.php'>";
                                           }
                                           else if($Type=="Staff")
                                           {
                                                echo "<meta http-equiv=refresh content='0; url=dashboard.php'>";
                                           }
                                        }
                                    }
                                    
                                    else{
                                        
                                        echo "Login Failed";
                                    }
                                    
                                }
                            ?>
                            
                        </form>
                </div>
            </div>
        </div>
    </div>
</div>


<!-- Vendor scripts -->
<script src="vendor/jquery/dist/jquery.min.js"></script>
<script src="vendor/jquery-ui/jquery-ui.min.js"></script>
<script src="vendor/slimScroll/jquery.slimscroll.min.js"></script>
<script src="vendor/bootstrap/dist/js/bootstrap.min.js"></script>
<script src="vendor/metisMenu/dist/metisMenu.min.js"></script>
<script src="vendor/iCheck/icheck.min.js"></script>
<script src="vendor/sparkline/index.js"></script>

<!-- App scripts -->
<script src="scripts/homer.js"></script>

</body>
</html>