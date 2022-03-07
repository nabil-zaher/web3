<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php</title>
    <style>
        body {
            background-color: #f5f5f5;
            font-size:28px;
            font-weight:bold;
            color:#FF7200;
        }
        .box{
            background:#FF7200;
            color:#fff;
        }
        .box2{
            background:#fff;
            color:#000;
        }
    </style>
</head>
<body>
    <?php
        $i=3;
        $count=1;
        for($i;$i>=1;$i--){
           $count*=$i;
        }
        echo $count;
    ?>
    <div class="box">
        <?php
        $n = 3;
        echo $n*$n.'<br>';
        echo $n*$n*$n.'<br>';
        echo $n*$n*$n*$n.'<br>';
       ?>
    </div>

    <div class="box2">
        <?php
        $n = 3;
        echo pow($n,2).'<br>';
        echo pow($n,3).'<br>';
        echo pow($n,4).'<br>';
       ?>
    </div>

    <div class="box">
        <?php
        $n = 2;
        $m = 4;
        $result=1;
        for ($i = $m; $i > 0; $i--) {
            $result *= $n;
        }
            echo $result.'<br>';
       ?>
    </div>
</body>
</html>
