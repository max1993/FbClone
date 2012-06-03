<?
	include("b.php");
	$r = mysql_query("select * from user",$c);
	while($row = mysql_fetch_assoc($r)){
		$uid = $row['id'];
		$name['first'] =$row['fname'];
		$name['last'] = $row['sname'];
	}
	include("h.php");
	include("le.php");
	include("m.php");
	include("r.php");
	include("f.php");
?>
