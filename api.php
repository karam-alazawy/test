<?php
include 'config.php';
echo "string";
$action=$_GET['action'];
if (isset($_GET['action']) and $action=="login" or $action=="signup") {
	# code...
$information=array();
if (isset($_GET['email']) and isset($_GET['password'])) {
	# code...
	if ($_GET['action']=="login") {
		# code...
		$email=$_GET['email'];
		$password=$_GET['password'];
		$result= mysqli_query($conn,"SELECT * FROM `login` WHERE email='$email' and password='$password'");
		if (mysqli_num_rows($result)>0) {
			# code...
			$res=mysqli_fetch_array($result);
			$information = array("access"=>'1',
				"id"=>$res["id"] ,
				"email"=>$res["email"],
				 "password"=>$res["password"]);
			echo json_encode($information,JSON_PRETTY_PRINT)."\n";
				$_SESSION["id"] = $res['id'];
		$_SESSION["email"] = $res['email'];
		$_SESSION["firstname"] = $res['firstname'];
		$_SESSION["lastname"] = $res['lastname'];
		}
		else {
			$error= "Please Insert Correct Information !!";
			$information=array("access"=>'0',"error"=>$error);
	    echo json_encode($information,JSON_PRETTY_PRINT)."\n";
		
		}

	}
	elseif ($action=="signup") {
		# code...
		$firstname=$_GET['firstname'];
		$lastname=$_GET['lastname'];
		$email=$_GET['email'];
		$password=$_GET['password'];
		$result= mysqli_query($conn,"SELECT * FROM `login` WHERE email='$email'");
		if (mysqli_num_rows($result)>0) {
			# code...
			$error= "This email is already taken.";
			$information=array("access"=>'0',"error"=>$error);
	    echo json_encode($information,JSON_PRETTY_PRINT)."\n";
		

		}
		else {
			
					$result= mysqli_query($conn,"INSERT INTO `login` ( `email`, `password`, `firstname`, `lastname`) VALUES ('$email', '$password', '$firstname', '$lastname');");
    	$last_id = $conn->insert_id;
    			$result= mysqli_query($conn,"SELECT * FROM `login` WHERE id='$last_id'");
			$res=mysqli_fetch_array($result);

			$information = array("access"=>'1',"id"=>$res["id"] ,"email"=>$res["email"] ,"firstname"=>$res["firstname"] ,"lastname"=>$res["lastname"] , "date_added"=>$res["date_added"]);	
					echo json_encode($information,JSON_PRETTY_PRINT)."\n";
					$_SESSION["id"] = $res['id'];
		$_SESSION["email"] = $res['email'];
		$_SESSION["firstname"] = $res['firstname'];
		$_SESSION["lastname"] = $res['lastname'];
			


		}
	}
}
}
	else{
$information=array();
$check=1;
if (isset($_GET['token'])) {
	# code...
	if (!empty($_GET['token'])) {
		# code...
		$token=$_GET['token'];
        $result= mysqli_query($conn,"SELECT * FROM `user` WHERE token='$token'");
		if (mysqli_num_rows($result)>0) {
			$check=1;
		}
	}
}
if ($check==1) {
switch ($action) {
	case 'adduserinfo':
		$loginid=$_GET['id'];
		$country=$_GET['country'];
		$city=$_GET['city'];
		$address=$_GET['address'];	
		$nationality=$_GET['nationality'];	
		$idnum=$_GET['idnum'];	
		# code...
		if (isset($loginid) and isset($country)  and isset($city) and isset($nationality)  and isset($idnum) 
		 and !empty($loginid) and !empty($country) and !empty($city) and !empty($nationality) and !empty($idnum) ) {
		# code...
			$result= mysqli_query($conn,"INSERT INTO `user_information` ( `login_id`, `country`, `city`,`address`,`nationality`,`id_number`) VALUES ('$loginid','$country','$city','$address','$nationality','$idnum')");
			$lastid = mysqli_insert_id($conn); 
		$information = array("access"=>'1',"id"=>$lastid);	
	}else{
			$error= "Some information is Required !!";
			$information=array("access"=>'0',"error"=>$error);
	}
		echo json_encode($information,JSON_PRETTY_PRINT)."\n";	
		break;




	case 'checkuserinfo':
		if (isset($_GET['id']) and !empty($_GET['id'])) {
			# code...
			$id=$_GET['id'];
		
        $result= mysqli_query($conn,"SELECT * FROM `user_information` WHERE login_id='$id'");

         if (mysqli_num_rows($result)>0) {
			# code...
			$error= "This username is already taken.";
			$information=array("access"=>'1',"found"=>'1');
		

		}else
			$information=array("access"=>'1',"found"=>'0');

		}else{
			$error= "Some information is Required !!";
			$information=array("access"=>'0',"error"=>$error);
	         }
		echo json_encode($information,JSON_PRETTY_PRINT)."\n";	
		break;


case 'checkusercampaign':
		if (isset($_GET['id']) and !empty($_GET['id'])) {
			# code...
			$id=$_GET['id'];
		
        $result= mysqli_query($conn,"SELECT * FROM `campaigns` WHERE userid='$id'");

         if (mysqli_num_rows($result)>0) {
			# code...
			$error= "You already Have campaign !!";
			$information=array("access"=>'1',"found"=>'1');
		

		}else
			$information=array("access"=>'1',"found"=>'0');

		}else{
			$error= "Some information is Required !!";
			$information=array("access"=>'0',"error"=>$error);
	         }
		echo json_encode($information,JSON_PRETTY_PRINT)."\n";	
		break;


case 'addcampaign':
$sec=md5(uniqid(rand(), true));

		$userid=$_GET['id'];
		$title=$_GET['title'];
		$description=$_GET['description'];
		$story=$_POST['story'];
		$img1=$_GET['img1'];
		$img2=$_GET['img2'];
		$img3=$_GET['img3'];
		$img4=$_GET['img4'];
		$location=$_GET['location'];	
		$amount=$_GET['amount'];	
		$youtube_url=$_GET['youtube_url'];	
		# code...
		/* Getting file name */
		$filename = $_FILES['file']['name'];

		/* Location */
		$img1 = "upload/".$sec.$filename;
		$uploadOk = 1;
		$imageFileType = pathinfo($img1,PATHINFO_EXTENSION);

		/* Valid extensions */
		$valid_extensions = array("jpg","jpeg","png");

		/* Check file extension */
		if(!in_array(strtolower($imageFileType), $valid_extensions)) {
		   $uploadOk = 0;
		}

		if($uploadOk == 0){
		   echo "";
		}else{
		   /* Upload file */
		   if(move_uploaded_file($_FILES['file']['tmp_name'],$img1)){
		     echo "";
		   }else{
		     echo "";
		   }
		}


		/* Getting file name */
		$filename = $_FILES['file2']['name'];

		/* Location */
		$img2 = "upload/".$sec.$filename;
		$uploadOk = 1;
		$imageFileType = pathinfo($img2,PATHINFO_EXTENSION);

		/* Valid extensions */
		$valid_extensions = array("jpg","jpeg","png");

		/* Check file extension */
		if(!in_array(strtolower($imageFileType), $valid_extensions)) {
		   $uploadOk = 0;
		}

		if($uploadOk == 0){
		   echo "";
		}else{
		   /* Upload file */
		   if(move_uploaded_file($_FILES['file2']['tmp_name'],$img2)){
		     echo "";
		   }else{
		     echo "";
		   }
		}



		/* Getting file name */
		$filename = $_FILES['file3']['name'];

		/* Location */
		$img3 = "upload/".$sec.$filename;
		$uploadOk = 1;
		$imageFileType = pathinfo($img3,PATHINFO_EXTENSION);

		/* Valid extensions */
		$valid_extensions = array("jpg","jpeg","png");

		/* Check file extension */
		if(!in_array(strtolower($imageFileType), $valid_extensions)) {
		   $uploadOk = 0;
		}

		if($uploadOk == 0){
		   echo "";
		}else{
		   /* Upload file */
		   if(move_uploaded_file($_FILES['file3']['tmp_name'],$img3)){
		     echo "";
		   }else{
		     echo "";
		   }
		}

				/* Getting file name */
		$filename = $_FILES['file4']['name'];

		/* Location */
		$img4 = "upload/aa".$sec.$filename;
		$uploadOk = 1;
		$imageFileType = pathinfo($img4,PATHINFO_EXTENSION);

		/* Valid extensions */
		$valid_extensions = array("jpg","jpeg","png");

		/* Check file extension */
		if(!in_array(strtolower($imageFileType), $valid_extensions)) {
		   $uploadOk = 0;
		}

		if($uploadOk == 0){
		   echo "";
		}else{
		   /* Upload file */
		   if(move_uploaded_file($_FILES['file4']['tmp_name'],$img4)){
		     echo "";
		   }else{
		     echo "";
		   }
		}

		if (isset($title) and isset($img1)  and isset($img2) and isset($story)  and isset($description)  and isset($amount) 
		 and !empty($title) and !empty($img1) and !empty($img2) and !empty($description)and !empty($amount) ) {
		# code...
			$result= mysqli_query($conn,"INSERT INTO `campaigns` ( `userid`, `title`, `description`,`story`,`img1`,`img2`,`img3`,`img4`,`location`,`youtube_url`,`amount`) VALUES ('$userid','$title','$description','$story','$img1','$img2','$img3','$img4','$location','$youtube_url','$amount')");
			$lastid = mysqli_insert_id($conn); 
		$information = array("access"=>'1',"id"=>$lastid);	



	}else{
			$error= "Some information is Required !!";
			$information=array("access"=>'0',"error"=>$error);
	}
		echo json_encode($information,JSON_PRETTY_PRINT)."\n";	
		break;





	//update bill
	case 'update_bill':
		$amount=$_GET['amount'];
		$name=$_GET['name'];
		$user=$_GET['user'];
		$amount_paid=$_GET['amount_paid'];
				$bill_id=$_GET['id'];

		# code...
		if (isset($amount) and isset($bill_id) ) {
		# code...
			$result= mysqli_query($conn,"UPDATE `client` SET `amount` = '$amount', `name` = '$name', `user` = '$user' WHERE `client`.`id` = $bill_id");
		$information = array("access"=>'1');	
	}else{
			$error= "Some information is Required !!";
			$information=array("access"=>'0',"error"=>$error);
	}
		echo json_encode($information,JSON_PRETTY_PRINT)."\n";	
		break;


	//delete bill
	case 'delete_bill':

		$bill_id=$_GET['bill_id'];
		# code...
		if (isset($bill_id) and !empty($bill_id)) {
		# code...
			$result=mysqli_query($conn, "DELETE FROM bill WHERE id='".$bill_id."'");
		$information = array("access"=>'1');	
	}else{
			$error= "Id is Required !!";
			$information=array("access"=>'0',"error"=>$error);
	}
		echo json_encode($information,JSON_PRETTY_PRINT)."\n";	
		break;


		case 'get_campaigns':
        $result= mysqli_query($conn,"SELECT * FROM `campaigns` WHERE approve='1'  ORDER BY `campaigns`.`date_approved` DESC LIMIT 20");

         $information = array("access"=>'1');	

					while ($res=mysqli_fetch_array($result)) {
						# code...
						array_push($information, $res);
					}
		echo json_encode($information,JSON_PRETTY_PRINT)."\n";	
		break;

	case 'get_campaign':
		if (isset($_GET['id']) and !empty($_GET['id'])) {
			# code...
			$id=$_GET['id'];
		
        $result= mysqli_query($conn,"SELECT * FROM `campaigns` WHERE id='$id' and approve='1'");

         $information = array("access"=>'1');	

					while ($res=mysqli_fetch_array($result)) {
						# code...
						array_push($information, $res);
					}
		}else{
			$error= "Some information is Required !!";
			$information=array("access"=>'0',"error"=>$error);
	         }
		echo json_encode($information,JSON_PRETTY_PRINT)."\n";	
		break;

}	
}
		else{
			$error= "Access Token is Required !!";
			$information=array("access"=>'0',"error"=>$error);
	    echo json_encode($information,JSON_PRETTY_PRINT)."\n";
		
		}
	}
?>