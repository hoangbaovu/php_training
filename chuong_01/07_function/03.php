<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        * {
            padding: 0;
            margin: 0;
        }

        .content {
            border: 1px solid #222;
            height: auto;
            margin: 20px auto;
            padding: 20px;
            width: 800px;
        }

        .content .div {
            border: 1px solid red;
            padding: 5px;
            text-align: center;
            margin-bottom: 10px;
        }
    </style>
</head>
<body>
    <div class="content">

    <!-- Hàm trả về giá trị true false -->
    <?php
        function checkNumber(){
            $value = 2;
            if($value % 2 == 0) {
                return true;
            } else {
                return false;
            }
        }
        
        $result = checkNumber();
        if($result) {
            echo "Số Chẳn";
        } else {
            echo "Số Lẻ";
        }
        echo $result;
    ?>
    </div>
</body>
</html>