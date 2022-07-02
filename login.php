<?php 
    $msg = "";
    $css_class = "";
    
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "gym";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
    if(isset($_POST['submit'])){

        $username = $_POST['user'];
        $password = $_POST['password'];

    $sql = "SELECT username, password FROM `users` where username='".$username."' AND password='".$password."' limit 1";

    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while($row = mysqli_fetch_assoc($result)) {
            $msg = "Login successfully";
            $css_class = "alert-success";
        }
        }else{
            $msg = "Wrong username or password !";
            $css_class = "alert-danger";
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<style>
    body 
    {
        height : 85vh;
    }
    .container 
    {
        margin-top: 120px
    }
</style>
<body>
<div class="container" style="width: 600px">
        <form action="" method="post">
            <h3 class="text-center">Login</h3>
            <?php if(!empty($msg)): ?>
                <div class="alert <?php echo $css_class; ?>">
                    <?php echo $msg; ?>
                </div>
                    <?php endif; ?>
            <div class="form-group">
                <label for="">Username:</label>
                <input type="text" name="user" class="form-control" placeholder="Enter Username">
                <br>
            </div>
            <div class="form-group">
                <label for="">Password:</label>
                <input type="password" name="password" class="form-control" placeholder="Enter Password">
                <br>
            </div>
            <div class="form-group">
                <input type="submit" value="Confirm" name="submit" style="font-weight: 500" class="btn btn-primary">
                <br>
            </div>
        </form>
        <br>
        <p class="text-center">Don't have an account? <a href="sign.php"">Signup</a></p>
    </div>
</body>
</html>