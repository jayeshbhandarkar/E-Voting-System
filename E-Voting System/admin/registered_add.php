<?php
	include 'includes/session.php';

	if(isset($_POST['add'])){
		$firstname = $_POST['firstname'];
		$lastname = $_POST['lastname'];
		$email_id = $_POST['email_id'];
		$id_proof = $_POST['id_proof'];
		$filename = $_FILES['photo']['name'];
		if(!empty($filename)){
			move_uploaded_file($_FILES['photo']['tmp_name'], '../images/'.$filename);	
		}
		$birth_date = $_POST['birth_date'];
		$gender = $_POST['gender'];
		$phone_no = $_POST['phone_no'];
		$address = $_POST['address'];
		
		$sql = "INSERT INTO registered (firstname, lastname, email_id, id_proof, photo, birth_date, gender, phone_no, address) VALUES ('$firstname', '$lastname', '$email_id', '$id_proof', '$filename', '$birth_date', '$gender', '$phone_no', '$address')";
		if($conn->query($sql)){
			$_SESSION['success'] = 'User added successfully';
		}
		else{
			$_SESSION['error'] = $conn->error;
		}

	}
	else{
		$_SESSION['error'] = 'Fill up add form first';
	}

	header('location: registered.php');
?>