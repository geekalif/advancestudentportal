<?php
	$db=new mysqli("localhost","root","","advancestudentportal");
	if(!$db)
	{
		echo "failed";
    }
    else{
        echo "connected";
    }
	
?>