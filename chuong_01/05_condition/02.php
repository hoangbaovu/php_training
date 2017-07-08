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
    $n1         = "";
    $n2         = "";
    $caculate   = "";  
    if(isset($_POST["number1"]) && isset($_POST["number2"]) && isset($_POST["caculate"])) {
        $n1         = $_POST["number1"];
        $n2         = $_POST["number2"];
        $caculate   = $_POST["caculate"];   
        $flag       = true;
    }

    if( is_numeric($n1) && is_numeric($n2) ) {
        switch($caculate) {
            case "+":
                $result = $n1 + $n2;
                break;
            case "-":
                $result = $n1 - $n2;
                break;
            case "x":
            case "*":
                $result = $n1 * $n2;
                break;
            case "/":
                $result = $n1 / $n2;
                break;
            default:
                $result = $n1 + $n2;
                $caculate = "+";
            break;
        }
    } else {
        $result = "Khong thuc hien duoc";
        $flag = false;
    }
?>
    <div class="content">
        <h1>Mo Phong May Tinh</h1>
        <form action="#" method="POST" name="main-form">
            <div class="row">
                <span>So Thu Nhat</span>
                <input type="text" name="number1" value="<?php echo $n1; ?>">
            </div>
            <div class="row">
                <span>Phep Toan</span>
                <input type="text" name="caculate" value="<?php echo $caculate; ?>">
            </div>
            <div class="row">
                <span>So Thu Hai</span>
                <input type="text" name="number2" value="<?php echo $n2; ?>">
            </div>
            <button class="btn" type="submit">Xem Ket Qua</button>
            <div class="row">
                <?php
                    if($flag) {
                        echo "Ket qua: " . $n1 . " " . $caculate . " " . $n2 . " = " . $result;
                    } else {
                        echo $result;
                    }
                ?>
            </div>
        </form>
    </div>
</body>
</html>