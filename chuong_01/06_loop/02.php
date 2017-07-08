<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Chép phạt</title>
    <style>
        * {
            margin: 0; padding: 0;
        }

        .content {
            background: url("images/notebook_background.jpg") no-repeat;
            min-height: 200px;
            margin: 20px auto;
            width: 600px;
            padding: 20px;
        }

        .content h1 {
            text-align: center;
        }

        .list {
            list-style: decimal inside;
            margin: 35px 80px;
        }

        .list__item {
            margin-top: 6px;
        }
    </style>
</head>
<body>
    <div class="content">
        <h1>Chép phạt</h1>
        <ul class="list">
            <?php
                $i = 1;
                while($i <= 10){
                    echo '<li class="list__item">Em hứa sẽ làm bài tập ở nhà đầy đủ</li>';
                    $i++;
                }
            ?>
        
        </ul>
    </div>
</body>
</html>