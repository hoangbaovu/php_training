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

    $image = "";
    $name  = "";
    $time  = "";

    $result = "";

    if( isset($_POST["day"]) && isset($_POST["month"]) ) {
        $day = $_POST["day"];
        $month = $_POST["month"];
        $flagShow = true;

        if( is_numeric($day) && is_numeric($month) ) {
            /*
			 * Capricorn 	23/12 - 19/01	Ma kết
			 * Aquarius		20/01 - 19/02	Bảo Bình
			 * Pisces		20/02 - 21/03	Song Ngư
			 * Aries 		22/03 - 20/04	Bạch Dương
			 * Taurus 		21/04 - 21/05	Kim Ngưu
			 * Gemini		22/05 - 22/06	Song Tử
			 * Cancer		23/06 - 23/07	Cự Giải
			 * Leo			24/07 - 23/08	Sư Tử
			 * Virgo		24/08 - 23/09	Xử Nữ
			 * Libra		24/09 - 23/10	Thiên Xứng
			 * Scorpio 		24/10 - 22/11	Hổ Cáp
			 * Sagittarius	23/11 - 22/12	Nhân Mã
			 */

            switch($month) {
                case 1:
                    if($day <= 19) {
                        $image = "capricorn";
                        $name  = "Ma Kết";
                        $time  = "23/12 - 19/01";
                    }

                    if($day >= 20) {
                        $image = "aquarius";
                        $name  = "Bảo Bình";
                        $time  = "20/01 - 19/02";
                    }

                    if($day < 1 || $day > 31) $flagShow = false;
                    break;
                case 2:
                    if($day <= 19) {
                        $image = "aquarius";
                        $name  = "Bảo Bình";
                        $time  = "20/01 - 19/02";
                    }

                    if($day >= 20) {
                        $image = "pisces";
                        $name  = "Song Ngư";
                        $time  = "20/02 - 21/03";
                    }

                    if($day < 1 || $day > 29) $flagShow = false;

                    break;
                default:
                    $flagShow = false;
                    break;
            }

            if($flagShow == true) {
                $result = '<div class="result">
                                <img src="images/'. $image . '.jpg" alt="'. $name .'">
                                <p>'. $name .' ('. ucfirst($image) .' : ' . $time . ')</p>
                        </div>';
            } else {
                $result = "Dữ liệu không hợp lệ";
            }

        } else {
            $flagShow = false;
            $result = "Dữ liệu không hợp lệ";
        }
    }
?>
    <div class="content">
        <h1>Bạn thuộc chòm sao gì?</h1>
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

        <?php
            echo $result;
        ?>

        <!--<div class="result">
            <img src="//placehold.it/100x100" alt="">
            <p>Cung Bạch Dương (22/03 - 20/04)</p>
        </div>-->
    </div>
</body>
</html>