<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php
        //kiểm tra sự tồn tại 'id' và 'catid' trên URL
        //Nếu tồn tại đồng thời thì hiển thị chi tiết SP
        //Nếu không tồn tịa, thì điều hướng về 'index.php'
        if (isset($_GET['id']) && isset($_GET['catid'])) {
           //lấy giá rị của tham số trên url
                $masp = $_GET['id'];
                $madm = $_GET['catid'];
                echo "Mã sản phẩm: ". $masp;
                if ($madm==1) {
                    echo "<br>Sản phẩm thuộc danh mục Laptop"; 
                }elseif ($madm==2) {
                    echo "<br>Sản phẩm thuộc danh mục Computer"; 
            }

        }else {
            header("location:index.php");
        }
        
        
    ?>
</body>
</html>