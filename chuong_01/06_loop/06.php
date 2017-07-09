<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Break - Continue</title>
    <style>
        * {
            margin: 0; padding: 0;
        }

        .content {
            margin: 20px auto;
            width: 600px;
            padding: 20px;
        }

        .content h1 {
            text-align: center;
        }

        .content .image {
            margin: 20px 0;
            text-align: center;
        }

        .content .image img {
            margin: 10px 0;
            width: 100%;
        }

        .btn {
            background: #232323;
            color: #fff;
            display: inline-block;
            text-decoration: none;
            padding: 20px;
            text-align: center;
            -webkit-transition: background .3s;
            -moz-transition: background .3s;
            transition: background .3s;
        }

        .btn:hover {
            background: #141414;
        }

    </style>
</head>
<body>
    <div class="content">
        <h1>Break</h1>
        <?php
            $n = 0;
            for($i = 0; $i <= 100; $i+=8) {
                if($n < 3) {
                    if($i % 8 == 0 && $i > 0) {
                        echo $i . "<br>";
                        $n++;
                    }
                } else {
                    break;
                }
                
            }
        ?>
    </div>
</body>
</html>