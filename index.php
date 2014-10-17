
<?php
    include 'map/courses.php';
?>

<html>

<head><link rel='shortcut icon' href='favicon.ico' type='image/x-icon'>
<title> Teachmate
        
</title>  

<link rel="stylesheet" type="text/css" href="css/main.css">
<link rel="stylesheet" type="text/css" href="css/scroll.css">


<meta charset="utf-8">
</head>

<body>
    
    <a href = "reg.php"><img src = "data/contact.png" width = 100 height = 100 align=right alt="Contact Us" title="Contact Us" >
    </a>
    <h1 id='brand' style="text-align:left;"><img src = "data/logo.png" width = "160" height = "110" align=center >
    <font face = "Comic Sans MS" color="#FFFFFF" > Teachmate</font></h1>
    <h3 id='tagline' style="text-align:center;"><font face="Lucida Grande, Lucida Sans Unicode, Lucida Sans, DejaVu Sans, Verdana, sans-serif" </font></h3>

    <p><font size = '+1'>
        Welcome to <b>Teachmate</b>.
        Watch video lectures from a range of topics.
    </font></p>                                         <!..ADD Contact Us..>
    <br>
    <table border = "2" width = "750" height = "45" border color = "black" align="center" >
        <caption><font size="+3"> Available Courses
        </font></caption>
        <tr colspan = 2 align = center bgcolor = orange>
			<?php
			    $courses = glob('courses/*', GLOB_ONLYDIR);
			    foreach ($courses as $course) {
			        $course_id = pathinfo($course)['basename'];
			        $course_name = $course_map[$course_id];
			        echo "<td ><a style='color:black;' href='course.php?id=$course_id' style='text-decoration:none'>$course_name</a></td>\n";
			    }
			?>
        </tr>
    </table>
    <br><br><br>
    <p>         <!...about>
    </p>

    <img src = "gif/key.gif" align=right alt = "Working of a Key" title="Working of a Key" width = 250 height = 200>
    <img src = "gif/leverlock.gif" align=left alt = "Lever Lock" title="Lever Lock" width = 250 height = 200>
</body>

</html>
