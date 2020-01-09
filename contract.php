<!DOCTYPE html>
<html>
<head>
<title>LIBRARY</title>
<link rel="stylesheet" href="exam.css" type="text/css"/>
</head>
<body>
<div id="center_maker">
<div id="header">
<img src="Pabna_Science_and_Technology_University_logo.jpg" alt="PUST"  title="PUST" height="55" width="55"/>
<h1>CENTRAL LIBRARY OF PUST</h1>
</div>

<div id="nav">
<ul>
<li><a href="index.php">HOME</a></li>
<li><a href="#">CATAGORY</a>
<ul>
<li><a href="tech.php">TECH</a></li>
<li><a href="#">SCIENCE</a></li>
<li><a href="#">HISTORY</a></li>
<li><a href="#">MATHEMATICS</a></li>
</ul>
</li>

<li><a href="policy.php">LIBRARY POLICY</a>

</li>
<li><a href="about.php">ABOUT</a></li>

<li><a href="photo.html">PHOTO GALLARY</a></li>
</ul>
</div>

<div id="head">NOTICE BOARD:</div>
<div id="news"><marquee>This is notice board...</marquee></div>



<div id="aside">
<h4><a href="#">HOME</a></h4>
<h4><a href="policy.php">LIBRARY POLICY</a></h4>
<h4><a href="#">CATAGORY</a></h4>
<ul>
<li><a href="tech.php">TECH</a></li>
<li><a href="#">SCIENCE</a></li>
<li><a href="#">HISTORY</a></li>
<li><a href="#">MATHEMATICS</a></li>
</ul>
<h4><a href="about.php">ABOUT</a></h4>
<h4><a href="#">CONTRACT</a></h4>
<h4><a href="#">PHOTO GALLARY</a></h4>

</div>



<div id="section">



<pre>
<u>Basic Facts</u>

<form id="form" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
<table>
<tr>
    <td>USERNAME:</td>
	<td><input type="text" name="username"/></td>
</tr>
<tr>
    <td>QUERY:</td>
	<td><input type="text" name="password"/></td>
</tr>
<tr>
    <td></td>
	<td><input type="submit" value="SIGN IN"/></td>
</tr>
</table>
<?php
    if($_SERVER['REQUEST_METHOD']=='POST'){
	$username=validate($_POST["username"]);
	$password=validate($_POST["password"]);
	
	
	echo "NAME: ".$username."<br>";
	echo "PASSWORD: ".$password."<br>";
	}
	
	function validate($data){
	$data=trim($data);
	$data=stripcslashes($data);
	$data=htmlspecialchars($data);
	return $data;
	}

?>
</form>

</pre>
<h3>LIBRARY OFFICERS</h3>
<ul style="list-style-type: none">
<li>
NAME:JUI
</li>
<li>
CONTRACT NUMBER:02362626
</li>
</ul>
</div>

<div id="footer">
    &copy; COPYRIGHT &nbsp; JUI
</div>
</div>
</body>
</html>