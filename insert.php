<?php


$name = filter_input(INPUT_POST,'name');

$nam = hash('sha512', $name);


$birth = filter_input(INPUT_POST,'birth');

$birt = hash('sha512', $birth);


$gender = filter_input(INPUT_POST,'gender');

$gende = hash('sha512', $gender);


$username = filter_input(INPUT_POST,'username');

$usernam = hash('sha512', $username);


$password = filter_input(INPUT_POST,'password');

$refcode = filter_input(INPUT_POST,'refcode');

$refcod = hash('sha512', $refcode);


$hash = hash('sha512', $password);


if(!empty($name)||!empty($birth)||!empty($gender)||!empty($username)||!empty($password)) {


	$host="localhost";


	$dbUsername="root";


	$dbPassword="";


	$dbname="e-med+";


	$conn= new mysqli($host,$dbUsername,$dbPassword,$dbname);


	if(mysqli_connect_error($conn)) {


		die('Connect Error('.mysqli_connect_errno().')'.$mysqli_connect_error());


	}


	else {


		$sql="INSERT INTO signup (name, birth, gender, username, password, refcode) values('$nam','$birt','$gende','$usernam','$hash','$refcod')";


		//$stmt=$conn->prepare($SELECT);


		//$stmt->bind_param("s",$username);


		//$stmt->execute();


		//$stmt->bind_result($username);


		//$stmt->store_result();


		//$rnum=$stmt->num_rows;


		//if($rnum==0) {


		//	$stmt->close();


		//	$stmt=$conn->prepare($INSERT);


		//	$stmt->bind_param("sissss",$name,$birthday,$gender,$username,$password,$refcode);


		//	$stmt->execute();


		//	echo "Signed up successfully! :)";


		//}


		

		//	echo "Someone already register using this gmail";


		//}

		if($conn->query($sql)) {

			echo "Signed up Successfully";

		//$stmt->close();


		$conn->close();

		}
	

	}


}


else {


	echo "All field(s) are required";


	die();


}

?>