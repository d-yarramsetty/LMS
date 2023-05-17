<?php
include("setting.php");
session_start();
if(!isset($_SESSION['aid']))
{
    header("location:index.php");
}
$aid=$_SESSION['aid'];
$a=mysqli_query($set,"SELECT * FROM admin WHERE aid='$aid'");
$b=mysqli_fetch_array($a);
$name=$b['name'];

?>
<!DOCTYPE html >
<html >
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Library Management System</title>
<link href="style.css" rel="stylesheet" type="text/css" />
</head>

<body>
<div id="banner">
<span class="head">Library Management System</span><br />
<marquee class="clg" direction="right" behavior="alternate" scrollamount="1">DYVVT Library</marquee>
</div>
<br />

<div align="center">
<div id="wrapper">
<br />
<br />

<span class="SubHead">Books Request From Users</span>
<br />
<br />

<table border="0" class="table" cellpadding="10" cellspacing="10">
<tr class="labels" style="text-decoration:underline;"><th>Book Name</th><th>Author</th><th>Requested by<br>(User ID) </th><th>Name</th></tr>
<?php
$x=mysqli_query($set,"SELECT * FROM request");

while($y=mysqli_fetch_array($x))
{$id=$y['sid'];
    $z=mysqli_query($set,"SELECT * FROM students WHERE sid=$id");
    $m=mysqli_fetch_array($z);
    ?>
    
<tr class="labels" style="font-size:14px;"><td><?php echo $y['name'];?></td><td><?php echo $y['author'];?></td><td><?php echo $y['sid'];?></td><td><?php echo $m['name'];?></td>?></tr>
<?php
}
?>
</table><br />
<br />
<a href="adminpage.php" class="link">Go Back</a>
<br />
<br />

</div>
</div>
</body>
</html>
