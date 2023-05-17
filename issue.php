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
$bn=$_POST['name'];
$sid=$y['sid'];
$bid=$y['bid'];
mysqli_query($set,"DELETE FROM issue WHERE sid='$sid' and bid='$bid'");

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
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
<div id="wrapper" style="width:60%">
<br />
<br />
<span class="SubHead">Books Issued to Users</span>
<br />
<br />
<table border="0" class="table" cellpadding="10" cellspacing="10">
<tr class="labels" style="text-decoration:underline;"><th>Book Name</th><th>Author</th><th>Borrowed By<br>User ID</th><th>Book ID</th><th>Date</th><th>Return Status</th><th>Due</th></tr>
<?php
$x=mysqli_query($set,"SELECT * FROM issue");
while($y=mysqli_fetch_array($x))
{
    ?>
<tr class="labels" style="font-size:14px;">
<td><?php echo $y['name'];?></td>
<td><?php echo $y['author'];?></td>
<td><?php echo $y['sid'];?></td>
<td><?php echo $y['bid'];?></td>
<td><?php echo $y['date'];?></td>
<td><button type="button" id='return' class="fields" onclick="change(this,'RETURNED')" >Yet To RETURN</button></td>
<td><?php echo $y['rent'];?></td>
<!-- <td><a href="return.php?r=// echo $y['id'];?>" class="link">Return</a></td> -->
</tr>
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
<<script>
    function change(ele,x){
        ele.innerHTML = x;
    }
</script>
</body>
</html>

