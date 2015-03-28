<?php
$uploadOk = 1;
// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
	
	$uploaddir = dirname(__FILE__);
	$uploadfile = $uploaddir . '\\' . basename($_FILES['userfile']['name']);

	if (move_uploaded_file($_FILES['userfile']['tmp_name'], $uploadfile)) {
		//extract data from the post

         $description = $_POST["description"];
         $user_id = $_POST["user_id"];
         $job_id = $_POST["job_id"];

		//set POST variables
		$url = 'https://api.wallyjobs.com/applications';
		$fields = array(
								'description' => urlencode($description),
								'cv_url' => urlencode($uploadfile),
								'user_id' => urlencode($user_id),
								'job_id' => urlencode($job_id)
						);

		//url-ify the data for the POST
		$fields_string = "";
		foreach($fields as $key=>$value) { 
			$fields_string .= $key.'='.$value.'&'; 
		}
		rtrim($fields_string, '&');

		//open connection
		$ch = curl_init();

		//set the url, number of POST vars, POST data
		curl_setopt($ch,CURLOPT_URL, $url);
		curl_setopt($ch,CURLOPT_POST, count($fields));
		curl_setopt($ch,CURLOPT_POSTFIELDS, $fields_string);

		//execute post
		$result = curl_exec($ch);

		//close connection
		curl_close($ch);

	    header('Location: https://mutualfriends.wallyjobs.com/?id_job='.$job_id.'&user_id='.$user_id);
	} else {
	    header('Location: index.html');
	}
}

?> 