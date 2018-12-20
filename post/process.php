<?php
    session_start();
    //tạo một CSDL giả lập chứa các tk người dùng
    $account = array(
        'admin' => '123456',
        'manager' => '123',
        'member' => 'abc123',
        'tung' => 'ahihidongok'
    );
    //kiểm tra người dùng có click vào nút 'btnLogin'
    if (isset($_POST["btnLogin"])) {
        //Tiến hành lấy dữ liệu trên form và xử lý
        $user = $_POST['txtUser'];
        $pass = $_POST['txtPass'];
        //kiểm tra sự tồn tại của người dùng trong mảng account
        $status=0;
            foreach ($account as $key => $value) {
                if ($user == $key && $pass==$value) {
                    $status=1;break;
                }else {
                    $status=0;
                }
            }

            if ($status==1) {
                //Cập nhật phiên làm việc cho user và điều hướng về index
                $_SESSION['login'] = $user;
                $_SESSION['loggedin'] = true;
                //điều hướng về index
                header("location:index.php");
            } else {
                header("location:login.php");
            }
            
    }
    else {
        header("location:login.php");
    }

    
?>