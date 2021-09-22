<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="css/all.min.css" rel="stylesheet">
    <link href="css/Normalize.css" rel="stylesheet">
    <link href="css/res.css" rel="stylesheet">
</head>
<body>
  <?php

if(isset($_POST['hiddename']) && isset($_POST['backend']) && isset($_POST['html']) && isset($_POST['php']) && isset($_POST['css']))
{
    $hiddename = $_POST['hiddename'];
    $backend = $_POST['backend'];
    $html = $_POST['html'];
    $php = $_POST['php'];
    $css = $_POST['css'];

    echo "<h1>Thank you <span>$hiddename</span> you finished the quiz</h1>";

    $point1 = 0;
    $point2 = 0;
    $point3 = 0;
    $point4 = 0;
    $result = 0;

    if($backend == "PHP")
    {
      $point1 = 15;
    }
    if($html == "Hyper Text")
    {
      $point2 = 15;
    }
    if($php == "Output")
    {
      $point3 = 15;
    }
    if($css == "web pages")
    {
      $point4 = 15;
    }


    if($point1<15)
    {
        $point1 =0;
    }
        if($point2<15)
    {
        $point2 =0;
    }
    if($point3<15)
    {
        $point3 =0;
    }
    if($point4<15)
    {
        $point4 =0;
    }


    $result = ($point1 + $point2 + $point3 + $point4);
    echo "<div><p><br>Result Is: <span>$result/60</span></p></div>"; 
}

else
{
  echo "<h1>Not Found</h1>";
}
?>
<div class="imge">
<img src="img/quiz.jfif">
</div>
</body>
</html>
