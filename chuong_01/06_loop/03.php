<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Vẽ tam giác</title>
    <style>
        * {
            margin: 0; padding: 0;
        }

        .content {
            margin: 20px auto;
            width: 800px;
            padding: 20px;
        }

        .content h1 {
            text-align: center;
        }

        .list {
            margin: 35px 80px;
        }

        .list__item {
            display: inline-block;
            list-style: none;
            margin: 6px 15px;
        }

        .list__item a {
            display: block;
            width: 210px;
            height: 198px;
        }
    </style>
</head>
<body>
    <div class="content">
        <h1>Vẽ tam giác</h1>
        <ul class="list">
            <li class="list__item">
                <a href="03.php?type=1">
                    <img src="images/01.png" alt="">
                </a>
            </li>
            <li class="list__item">
                <a href="03.php?type=2">
                    <img src="images/02.png" alt="">
                </a>
            </li>
            <li class="list__item">
                <a href="03.php?type=3">
                    <img src="images/03.png" alt="">
                </a>
            </li>
        </ul>
        <div class="result">
            <?php
                $result = "";
                if(isset($_GET["type"])) {
                    $type = $_GET["type"];

                    switch ($type) {
                        case 1:
                            // *    i = 1
                            // **   i = 2
                            // ***  i = 3
                            // **** i = 4

                            $i = 1;
                            $n = 6;

                            while($i <= $n){
                                $result .= str_repeat("*", $i) . "<br>";
                                $i++;
                            }
                            break;
                        case 2:
                            // **** i = 4
                            // ***  i = 3
                            // **   i = 2
                            // *    i = 1

                            $i = 6;
                            $n = 1;

                            while($i >= $n){
                                $result .= str_repeat("*", $i) . "<br>";
                                $i--;
                            }
                            break;
                        case 3:
                            //      *       i = 1, space = 5, * = 1 (space = n - i) (* = i * 2 - 1)
                            //     ***      i = 2, space = 4, * = 3
                            //    *****
                            //   *******
                            //  *********
                            // ***********

                            $i = 1;
                            $n = 6;

                            while($i <= $n){
                                $space      = str_repeat("&nbsp;&nbsp;", $n - $i);
                                $character  = str_repeat("*", 2*$i - 1);
                                $result .= $space . $character . "<br>";
                                $i++;
                            }

                            break;
                        default:
                            # code...
                            break;
                    }
                }
                
                echo $result;
            ?>
        </div>
    </div>
</body>
</html>