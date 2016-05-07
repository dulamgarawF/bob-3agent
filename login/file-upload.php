<?php 

class ImageUpload{

	function __construct(){
		// C:\wamp\www\bob-3agent-system\bob-3agent\users\images
			$uploaddir = 'C:wamp/www/bob-3agent-system/bob-3agent/users/images/';
			$uploadfile = $uploaddir . basename($_FILES['userfile']['name']);

			echo '<pre>';
			if (move_uploaded_file($_FILES['userfile']['tmp_name'], $uploadfile)) {
			    echo "File is valid, and was successfully uploaded.\n";
			} else {
			    echo "Possible file upload attack!\n";
			}

			echo 'Here is some more debugging info:';
			print_r($_FILES);
			$temp = explode(".", $_FILES['userfile']['name']);
			$oname = $uploaddir.$temp;
			rename($oname['name'], $uploaddir."naranmandakh".$temp['name']);
			print "</pre>";
	}
}

$iu = new ImageUpload();
 ?>