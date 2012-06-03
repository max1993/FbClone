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
?>
<style>
	*{padding: 0;margin: 0}
	#header{background:blue}
	/*#header{}*/
</style>
<div id="header">
	<div class="left"style="float:left;background:red">
		<div>logo</div>
		<div>icon 1</div>
		<div>icon 2</div>
		<div>icon 3</div>
		<div>search</div>

	</div>
	<div style="float:right">profile</div>
</div>