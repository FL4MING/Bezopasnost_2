<?php
	function ContentLoad($searchElem, $id){
		include("Php_connect.PHP");
		$content_select="SELECT `$searchElem` FROM `content` WHERE `id`='$id'";
		$Load=mysqli_query($conn, $content_select);
		while ($obj = mysqli_fetch_object($Load)) {
	    	echo($obj->$searchElem);
		}
		mysqli_close($conn);
	}
?>