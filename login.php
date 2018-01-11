 
<?php

	
	if (($_POST['name']=='username') && ($_POST['pwd'] == 'password'))
	{
		$message = "success";
	}
	else
	{
		$message = "failure";	
	}
	
	echo json_encode($message);
	
	exit();

?>