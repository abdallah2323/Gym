<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/admin.css">
    <link rel="stylesheet" href="../css/all.min.css">
    <link rel="stylesheet" href="../css/fontawesome.min.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
</head>
<body>
<input type="checkbox" name="" id="check">

<header>

    <label for="check">
        <i class="fal fa-bars" id="btn"></i>
    </label>

    <div class="left_area">
        <h3> trainer <span>Dashboard</span></h3>
        <div class="right_area">
            <a href="logout.php" class="logout_btn">Logout</a>
        </div>
    </div> 

</header>

<div class="sidebar">
    <center>
        <img src="https://images.pexels.com/photos/3838699/pexels-photo-3838699.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940" class="image" width="300" height= "300" alt="">
    </center>
    <br>
    <br>
    <a href="dashboard.php"><i class="fal fa-desktop"></i><span>Dashboard</span></a>
    <a href="joiners.php"><i class="fad fa-users"></i><span>Joiners</span></a>
    <a href="programs.php"><i class="far fa-dumbbell"></i><span>Programs</span></a>
    <a href="settings.php"><i class="fas fa-sliders-h"></i><span>Settings</span></a>
</div>
</body>
</html>