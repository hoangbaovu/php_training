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

    <!-- Hàm một thông số -->
    <!-- <?php
        // function createBox($content){
        //     $result = '<div class="div" style="width: 300px; height: 200px">';
        //     $result .= '<p>'. $content .' <span>300x200</span></p>';
        //     $result .= '</div>';
        //     return $result;
        // }
        
        // $boxA = createBox("Box A");
        // $boxB = createBox("Box B");
        // echo $boxA;
        // echo $boxB;
    ?> -->

    <!-- Hàm nhiều thông số & gán giá trị mặc định -->
     <?php
        function createBox($content, $width = 150, $height = 150){
            $result = '<div class="div" style="width: '.$width.'px; height: '.$height.'px">';
            $result .= '<p>'. $content .' <span>'.$width.'x'.$height.'</span></p>';
            $result .= '</div>';
            return $result;
        }
        
        $boxA = createBox("Box A", 300, 200);
        $boxB = createBox("Box B");
        echo $boxA;
        echo $boxB;
    ?> 
    </div>
</body>
</html>