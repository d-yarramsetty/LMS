<?php
include("setting.php");
session_start();
if(!isset($_SESSION['sid']))
{
    header("location:index.php");
}
$sid=$_SESSION['sid'];
$a=mysqli_query($set,"SELECT * FROM students WHERE sid='$sid'");
$b=mysqli_fetch_array($a);
$name=$b['name'];
$date=date('Y-m-d',strtotime("today"));
$dt=strtotime("today");
$dl=strtotime('+1 month',$dt);
$bn=$_POST['name'];
if($bn!=NULL)
{
    $p=mysqli_query($set,"SELECT * FROM books WHERE id='$bn'");
    $q=mysqli_fetch_array($p);
    $bk=$q['name'];
    $ba=$q['author'];
    $bid=$q['id'];
    $br=$q['rent'];
    $sql=mysqli_query($set,"INSERT INTO issue(sid,bid,name,author,date,rent,deadline) VALUES('$sid','$bid','$bk','$ba','$date','$br','$dl')");
    if($sql)
    {
        $msg="Successfully Issued";
    }
    else
    {
        $msg="Error Please Try Later";
    }
}
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
<div id="wrapper">
<br />
<br />

<span class="SubHead">Borrow Book</span>
<br />
<br />
<form method="post" action="">
<table border="0" class="table" cellpadding="10" cellspacing="10">
<tr><td colspan="2" align="center" class="msg"><?php echo $msg;?></td></tr>
<tr><td class="labels">Book : </td><td><select name="name" class="fields" required >
<option value="" selected="selected" disabled="disabled" > - - Select Book - - </option>
<?php
$x=mysqli_query($set,"SELECT * FROM books");
while($y=mysqli_fetch_array($x))
{
    ?>
<option value="<?php echo $y['id'];?>"><?php echo $y['name']."- Author: ".$y['author'];?></option>
<?php
}
?>
</select></td></tr>
<tr><td colspan="2" align="center"><input type="submit" value="BORROW" class="fields" /></td></tr>
</table>
</form>

<br />
<br />
<a href="home.php" class="link">Go Back</a>
<br />
<br />
</div>
</div>
<br />
<div align="center">
<table cellspacing="30"style="width: 100%;">
<tr><h1 style="color:White;font-weight:bold">New Arrivals</h1></tr>
            <tr >
                <th ><img src="book2.jpg" ></th>
                <th ><img src="book3.jpg" ></th>
                <th ><img src="book4.jpg" ></th>
                <th style="width:25px;height: 50px;;"><img src="book5.jpg" ></th>
                <th ><img src="book3.jpg" ></th>

            </tr>
            <tr >
                <th ><img src="book4.jpg" ></th>
                <th ><img src="book3.jpg" ></th>
                <th ><img src="book2.jpg" ></th>
                <th style="width:25px;height: 50px;;"><img src="book5.jpg" ></th>
                <th ><img src="book3.jpg" ></th>
                            
            </tr>
            <!--<tr ><th ><img src="book2.jpg" ></th>
                <th ><img src="book3.jpg" ></th>
                <th ><img src="book4.jpg" ></th>
                <th ><img src="book3.jpg" ></th>
                <th style="width:25px;height: 50px;;"><img src="book5.jpg" ></th>

            </tr>-->
            </table>
            <a href="home.php" class="link">Go Back</a>
</div>
<br />
</body>
</html>
