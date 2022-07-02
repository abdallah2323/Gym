<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/sign.css">
    <link rel="stylesheet" href="../css/bootstrap.css">
    <script src="../js/bootstrap.js"></script>
</head>
<body>
    <div class="container" style="width: 500px; padding: 50px; margin-top: 80px;">
        <form action="index.php" method="post">
            <h3 class="text-center">Trainer Login </h3>
            <?php if(!empty($msg)): ?>
                <div class="alert <?php echo $css_class; ?>">
                    <?php echo $msg; ?>
                </div>
                    <?php endif; ?>
                    <br>
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
                <input type="checkbox" id="chk" name="remember">
                <label for="chk" style="transform: translatey(-17px);">Remember me</label><br/><br/>
            </div>
            <div class="form-group">
                <input type="submit" value="Confirm" name="submit" style="font-weight: 500" class="btn btn-primary">
                <br>
            </div>
        </form>
        <br>
    </div>
</body>
</html>