<?php
	include 'includes/session.php';

	if(isset($_POST['edit'])){
		$id = $_POST['id'];
		$firstname = $_POST['firstname'];
		$lastname = $_POST['lastname'];
		$email_id = $_POST['email_id'];
		$id_proof = $_POST['id_proof'];
		$birth_date = $_POST['birth_date'];
		$gender = $_POST['gender'];
		$phone_no = $_POST['phone_no'];
		$address = $_POST['address'];

		$sql = "UPDATE registered SET firstname = '$firstname', lastname = '$lastname', email_id = '$email_id', id_proof = '$id_proof', birth_date = '$birth_date', gender = '$gender', phone_no = '$phone_no', address = '$address' WHERE id = '$id'";
		if($conn->query($sql)){
			$_SESSION['success'] = 'User updated successfully';
		}
		else{
			$_SESSION['error'] = $conn->error;
		}
	}
	else{
		$_SESSION['error'] = 'Fill up edit form first';
	}

	header('location: registered.php');

?>