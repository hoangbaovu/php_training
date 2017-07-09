<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Image gallery</title>
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
        <h1>Image gallery</h1>
        <div class="image">
            <?php
                $i = 1;

                do {
                    echo '<img src="images/nature-0' . $i .'.jpg" alt="">';
                    $flagShow = 0;
                    if( isset($_GET["show"]) ){
                        $flagShow = $_GET["show"];
                        $i++;
                    }
                } while( $i <= 4 && $flagShow == 1 );
            ?>
            <a class="btn" href="05.php?show=1">Show All</a>
        </div>
    </div>
</body>
</html>