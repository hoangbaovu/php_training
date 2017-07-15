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

    <!-- Biến toàn cục -->

    <?php
        $value = "ABC";
        function createBox($content, $width = 150, $height = 150){
            $result = '<div class="div" style="width: '.$width.'px; height: '.$height.'px">';
            $result .= '<p>'. $content .' <span>'.$width.'x'.$height.'</span></p>';
            $result .= '</div>';

            // Cách 01
            // global $value;
            // echo $value . "<br>";

            // Cách 02
            echo $GLOBALS["value"];
            return $result;
        }
        
        $boxA = createBox("Box A");
        echo $boxA;
    ?> 
    </div>
</body>
</html>
<?php
    echo $value;
?>