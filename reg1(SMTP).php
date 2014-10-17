
<html>

<head><link rel='shortcut icon' href='favicon.ico' type='image/x-icon'>
<title> Teachmate - Contact Us
        
</title>  

<link rel="stylesheet" type="text/css" href="css/main.css">
<link rel="stylesheet" type="text/css" href="css/scroll.css">

<meta charset="utf-8">
</head>

<body>
<a href = "index.php"><img src = "data/homebutton.png" width = 50 height = 50 style="position:fixed;right:40px;" alt="Home" title="Home" >
    </a>
<?php
//if "email" variable is filled out, send email
  if (isset($_REQUEST['email']))  {
  
  //Email information
  $admin_email = "someone@example.com";
  $email = $_REQUEST['email'];
  $subject = $_REQUEST['subject'];
  $comment = $_REQUEST['comment'];
  
  //send email
  mail($admin_email, "$subject", $comment, "From:" . $email);
  
  //Email response
  echo "Thank you for contacting us!";
  }
  
  //if "email" variable is not filled out, display the form
  else  {
?>

 <form method="post" align ='center'>
  Email: <input name="email" type="text" /><br />
  Subject: <input name="subject" type="text" /><br />
  Message:<br />
  <textarea name="comment" rows="15" cols="40"></textarea><br />
  <input type="submit" value="Submit" />
  </form>
  
<?php
  }
?>