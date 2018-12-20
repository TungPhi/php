<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
    <style>
        form{
            margin-top:20px;
        }
        label{
            display: inline-block;
            width: 100px;
            margin-bottom: 10px;
        }
        input [type='text'], input [type='password']{
            width: 250px;
            /* line-height: 25px; */
        }
    </style>
</head>
<body>
    <form action="process.php" method="POST">
        <label>Username</label>
        <input type="text" name="txtUser" ><br>
        <label>Password</label>
        <input type="password" name="txtPass" ><br>
        <label></label>
        <input type="submit" name="btnLogin" value="Login">
    </form>

    
</body>
</html>