<!DOCTYPE HTML>

<?php
    include 'map/courses.php';
    $course_id = $_GET["course"];
    $lec = $_GET["lec"];
    $lec_name = $lec_map[$course_id][$lec];
?>

<html>

<head><link rel='shortcut icon' href='favicon.ico' type='image/x-icon'>
    <title>Teachmate - Module Player</title>
    <style>
        #player {
            width: 60%;
            

            margin-left: auto;
            margin-right: auto;
            #border: solid #222 20px;
            #border-radius: 15px;
        }
        #prev_button {
            float: left;
        }
        #next_button {
            float: right;
        }
        .navbutton {
            padding: 5px;
            background: #136;
            border: solid #ddd 2px;
            border-radius: 2px;
        }
        #player a:link, #player a:visited, #player a:hover {
            color: #ddd;
            text-decoration: none;
        }
        body {
            background: #0a0a0a;
            color: #ddd;
            font-family: 'Lucida Sans'
        }
        a:link{ COLOR:#FFFFFF;
        }
        a:visited {
                COLOR: #FFFFFF;
        }
        a:hover {
                COLOR: #FFFFFF;
        }
        a:active {
                COLOR: #FFFFFF;
        }
        a      {
            text-decoration:none
        }
    </style>
    <link rel="stylesheet" type="text/css" href="css/scroll.css">

</head>

<body>
    <a href = "index.php"><img src = "data/homebutton.png" width = 50 height = 50 alt="Home" title="Home" style="position:fixed;right:40px;" >
    </a>
    <h2 style="text-align:center;"><a href='course.php?id=<?=$course_id?>' style='text-decoration:none'><?= $course_map[$course_id] ?></a></h2>

    <h3 style="text-align:center;">Module <?= $lec ?> - <?= $lec_name ?></h3>

    <div id='player'>
<?php
    $src = "courses/$course_id/$lec.mp4";

    echo "<video width=100% src='$src' controls autoplay>";
    echo "</video>\n";

    $lec_prev = $lec - 1;
    $href = "player.php?course=$course_id&lec=$lec_prev";
    if (file_exists("courses/$course_id/$lec_prev.mp4")) {
        echo "<a href='$href' class='navbutton' id='prev_button'>&larr; Previous</a>";
    }
    $lec_next = $lec + 1;
    $href = "player.php?course=$course_id&lec=$lec_next";
    if (file_exists("courses/$course_id/$lec_next.mp4")) {
        echo "<a href='$href' class='navbutton' id='next_button'>Next &rarr;</a>";
    }
?>

    </div>
    <br>
<p align="center" style="font-family:'Lucida Sans'"><font size=2 color="#FFFFFF">Video Courtesy (c) Khan Academy</font></p>
</body>

</html>
