<?php
 include "cctek_config.php";
if(count($_POST)>0){
	if($_POST['type']==1){
		$name			=$_POST['name'];
		$client			=$_POST['client'];
		$insert_date	=$_POST['insert_date'];
		$hope_dateline	=$_POST['hope_dateline'];
		$sql = "INSERT INTO `PM`( `name`, `client`,`insert_date`,`hope_dateline`) 
		VALUES ('$name','$client','$insert_date','$hope_dateline')";
		if (mysqli_query($con, $sql)) {
			echo json_encode(array("statusCode"=>200));
		} 
		else {
			echo "Error: " . $sql . "<br>" . mysqli_error($con);
		}
		mysqli_close($con);
	}
}
if(count($_POST)>0){
	if($_POST['type']==2){
		$id				=$_POST['id'];
		$name			=$_POST['name'];
		$client			=$_POST['client'];
		$insert_date	=$_POST['insert_date'];
		$hope_dateline	=$_POST['hope_dateline'];
		$sql = "UPDATE `PM` SET `name`='$name',`client`='$client',`insert_date`='$insert_date',`hope_dateline`='$hope_dateline' WHERE id=$id";
		if (mysqli_query($con, $sql)) {
			echo json_encode(array("statusCode"=>200));
		} 
		else {
			echo "Error: " . $sql . "<br>" . mysqli_error($con);
		}
		mysqli_close($con);
	}
}
if(count($_POST)>0){
	if($_POST['type']==3){
		$id=$_POST['id'];
		$sql = "DELETE FROM `PM` WHERE id=$id ";
		if (mysqli_query($con, $sql)) {
			echo $id;
		} 
		else {
			echo "Error: " . $sql . "<br>" . mysqli_error($con);
		}
		mysqli_close($con);
	}
}
if(count($_POST)>0){
	if($_POST['type']==4){
		$id=$_POST['id'];
		$sql = "DELETE FROM PM WHERE id in ($id)";
		if (mysqli_query($con, $sql)) {
			echo $id;
		} 
		else {
			echo "Error: " . $sql . "<br>" . mysqli_error($con);
		}
		mysqli_close($con);
	}
}

?>
