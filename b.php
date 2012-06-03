<?
	$c = mysql_connect("localhost","root","");
	mysql_select_db("fb_db",$c);
	//fetch user data and accign them to vars
	$r = mysql_query("select * from user",$c);
	while($row = mysql_fetch_assoc($r)){
		$uid = $row['id'];
		$name['first'] =$row['fname'];
		$name['last'] = $row['sname'];
	}
	