<html>

<head>
    <title>Register</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
    <h1>Register</h1>
    <div class="frame register">
        <form method="post" action="backend.php">
            <div class="form-row">
                <input class="form-control" type="text" name="name" id="name" placeholder="Enter Name">
            </div>
            <div class="form-row">
                <input class="form-control" type="text" name="username" id="username" placeholder="Enter Username">
            </div>
            <div class="form-row">
                <input class="form-control" type="password" name="password" id="password" placeholder="Enter Password">
            </div>
            <div class="form-row">
                <button type="submit" name="btn-register" class="btn btn-dark form-control">Register</button>
            </div>
            <div class="form-row">
                <a href="login.php" class="btn btn-light form-control">Login Page</a>
            </div>
        </form>
    
    </div>



    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>


</body>

</html>
