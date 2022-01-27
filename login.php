<html>
<head>
    <title>Login</title>
    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="style.css">

    </head>
    <body>
         <h1>Login</h1>
    <div class="frame login">
        <form method="post" action="login.php">
            <div class="form-row">
                <input class="form-control" type="text" name="username" id="username" placeholder="Enter Username">
            </div>
            <div class="form-row">
                <input class="form-control" type="password" name="password" id="password" placeholder="Enter Password">
            </div>
            <div class="form-row">
                <button type="submit" name="btn-login" class="btn btn-dark form-control">Login</button>
            </div>
            <div class="form-row">
                <a href="register.php" class="btn btn-light form-control">Register Page</a>
            </div>
        </form>
        <?php
                    require('config.php');
                        if(isset($_POST['btn-login'])){
                $username=$_POST['username'];
                $password=$_POST['password'];

                $query="SELECT * FROM `people` WHERE `username`='$username' && `password`='$password'";
                $result=mysqli_query($conn,$query);
                if(mysqli_num_rows($result)>0){
                    header('Location:view.php');
                }else{
                    echo'<div class="alert alert-danger mt-2" role="alert">Please enter the correct username and password</div>';
                }

            }
        
        
        ?>
    
    </div>
        
    
    
        <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>

    
    </body>
</html>