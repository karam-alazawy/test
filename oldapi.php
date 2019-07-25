<?php
include 'config.php';
$action=$_GET['action'];

if (isset($_GET['action']) and $action=='login') {
	# code...
$information=array();
if (isset($_GET['username']) and isset($_GET['password'])) {
	# code...
	if ($_GET['action']=="login") {
		# code...
		$username=$_GET['username'];
		$password=$_GET['password'];
		$result= mysqli_query($conn,"SELECT * FROM `user` WHERE username='$username' and password='$password'");
		if (mysqli_num_rows($result)>0) {
			# code...
			$res=mysqli_fetch_array($result);
			$information = array("access"=>'1',
				"id"=>$res["id"] ,
				"username"=>$res["username"],
				 "password"=>$res["password"]);
			echo json_encode($information,JSON_PRETTY_PRINT)."\n";
		$_SESSION["id"] = $res['id'];
		$_SESSION["username"] = $res['username'];
		}
		else {
			$error= "Please Insert Correct Information !!";
			$information=array("access"=>'0',"error"=>$error);
	    echo json_encode($information,JSON_PRETTY_PRINT)."\n";
		
		}

	}
	elseif ($_GET['action']=="signup") {
		# code...
		$username=$_GET['username'];
		$password=$_GET['password'];
		$result= mysqli_query($conn,"SELECT * FROM `user` WHERE username='$username'");
		if (mysqli_num_rows($result)>0) {
			# code...
			$error= "This username is already taken.";
			$information=array("access"=>'0',"error"=>$error);
	    echo json_encode($information,JSON_PRETTY_PRINT)."\n";
		

		}
		else {
			
					$result= mysqli_query($conn,"INSERT INTO `user` ( `username`, `password`) VALUES ('$username', '$password');");
    	$last_id = $conn->insert_id;
    			$result= mysqli_query($conn,"SELECT * FROM `user` WHERE id='$last_id'");
			$res=mysqli_fetch_array($result);

			$information = array("access"=>'1',"id"=>$res["id"] ,"username"=>$res["username"], "password"=>$res["password"] , "type"=>$res["type"] , "date_add"=>$res["date_add"]);	
					echo json_encode($information,JSON_PRETTY_PRINT)."\n";
					$_SESSION["id"] = $res['id'];
		$_SESSION["username"] = $res['username'];
		$_SESSION["type"] = $res['type'];
				$_SESSION["token"] = $res['token'];


		}
	}
}
}else{
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



	case 'search_for_client':
		if (isset($_GET['client_name']) and !empty($_GET['client_name'])) {
			# code...
			$client_name=$_GET['client_name'];
		
        $result= mysqli_query($conn,"SELECT * FROM `client` WHERE name like '%$client_name%'");

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


	

	case 'deleteclient':
		if (isset($_GET['client_id'])) {
			# code...
			$client_id=$_GET['client_id'];
			
			$result=mysqli_query($conn, "DELETE FROM client WHERE id='".$client_id."'");

       

		$information = array("access"=>'1');	
					echo json_encode($information,JSON_PRETTY_PRINT)."\n";
		}else{
			$error= "Some information is Required !!";
			$information=array("access"=>'0',"error"=>$error);
	}
		echo json_encode($information,JSON_PRETTY_PRINT)."\n";	
		break;



	case 'addbill':
		$amount=$_GET['amount'];
		$name=$_GET['name'];
		$user=$_GET['user'];
		$amount_paid=$_GET['amount_paid'];
		# code...
		if (isset($amount) and isset($name) ) {
		# code...
			$result= mysqli_query($conn,"INSERT INTO `client` ( `amount`, `name`, `user`,`amount_paid`) VALUES ('$amount','$name','$user','$amount_paid')");
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


	case 'get_bill':
		if (isset($_GET['bill_id']) and !empty($_GET['bill_id'])) {
			# code...
			$bill_id=$_GET['bill_id'];
		
        $result= mysqli_query($conn,"SELECT * FROM `client` WHERE id='$bill_id'");

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