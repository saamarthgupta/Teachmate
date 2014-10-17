<!DOCTYPE HTML>

<?php
    include 'map/courses.php';
    $course_id = $_GET['id'];
    $course_name = $course_map[$course_id];
    $lec_names = $lec_map[$course_id];
?>

<html>

<head>
<link rel='shortcut icon' href='favicon.ico' type='image/x-icon'>
    <title>Teachmate - <?= $course_name ?>
    
</title>

<link rel="stylesheet" type="text/css" href="css/main.css">
<link rel="stylesheet" type="text/css" href="css/scroll.css">

<meta charset="utf-8">
</head>


<body style="background-image:url(data/back.jpg)">

    <a href = "index.php"><img src = "data/homebutton.png" width = 50 height = 50 style="position:fixed;right:40px;" alt="Home" title="Home" >
    </a>
    <h1 id='course_name' align=center><?= $course_name ?></h1>
    <h3 align=center><font size=+2>Modules</font></h3>
    <ul id='lectures'>

<?php 
    $files = glob('courses/'. $course_id . '/*.{mp4,avi,webm}', GLOB_BRACE);
    for ($lec_no = 1; $lec_no <= count($files); $lec_no++) {
        $lec_name = $lec_names[$lec_no];
            echo "<li><font size = +1> <a href='player.php?course=$course_id&lec=$lec_no'>".
            "Module $lec_no - $lec_name</a></font></li>\n";
    }
?>

    </ul>
</body>

</html>
