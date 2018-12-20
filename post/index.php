<?php
    session_start();
    if (isset($_SESSION['login']) && isset($_SESSION['loggedin']) && $_SESSION['loggedin'] ==true ) {
        //hiển thị trang index
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Trang chủ-Admin</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
</head>
<body>
    <div class="container">
        <div class="container page-header">
            <div class="row">
                <div class="col-xs-6">
                    Welcome: <?php echo $_SESSION['login']; ?>
                </div>
                <div class="col-xs-6">
                    <a href="logout.php">Logout</a>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-xs-3" style="border:1px solid green;height:400px;">
                    Category
                </div>
                <div class="col-xs-9" style="border:1px solid red;height:400px;">
                    Content
                </div>
            </div>
        </div>
    </div>
</body>
</html>

<?php
    }else{
        //điều hướng về login
        header("location:login.php");
    }
?>