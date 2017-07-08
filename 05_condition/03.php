<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        * {
            margin: 0; padding: 0;
        }

        .content {
            margin: 0 auto;
            width: 400px;
        }

        .content .row {
            margin-top: 20px;
        }
        .content .row span {
            display: inline-block;
            width: 100px;
            text-align: left;
        }

        .content .result {
            margin-top: 20px;
        }

        .content .result img {
            width: 100px;
            height: 100px;
            float: left;
        }

        .content .result p {
            height: 100px;
            line-height: 100px;
            text-align: justify;
        }

        .btn {
            background: red;
            border: 1px solid red;
            padding: 10px;
            margin-top: 20px;
        }
    </style>
</head>
<body>

<?php
    $day = "";
    $month ="";

    if( isset($_POST["day"]) && iseet($_POST["month"]) ) {
        $day = $_POST["day"];
        $month = $_POST["month"];

        if( is_numeric($day) && is_numeric($month) ) {

        }
    }
?>
    <div class="content">
        <h1>Lấy chòm sao</h1>
        <form action="#" method="POST" name="main-form">
            <div class="row">
                <span>Ngày Sinh</span>
                <input type="text" name="day" value="<?php echo $day; ?>">
            </div>
            <div class="row">
                <span>Tháng Sinh</span>
                <input type="text" name="month" value="<?php echo $month; ?>">
            </div>

            <button class="btn" type="submit">Xem Ket Qua</button>
        </form>

        <div class="result">
            <img src="//placehold.it/100x100" alt="">
            <p>Cung Bạch Dương (22/03 - 20/04)</p>
        </div>
    </div>
</body>
</html>