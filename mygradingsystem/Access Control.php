<?php 
include('server.php'); 

  $grade = "";
	  
     // connect to the database
	$db2 = mysqli_connect('localhost', 'root', '','stud_grades');
		
	// ensure that form fields are filled properly
	if (empty($username)) {
			array_push($errors, "Username is required");
		}
		if (empty($grade)) {
			array_push($errors, "Grade is required");
		}
		
		// if there are no errors, save user to database
		if (count($errors) == 0){
            $sql2 = "INSERT INTO student_grades (username, grade) VALUES ('$username', '$grade')";
			mysqli_query($db2, $sql2);
			$_SESSION['username'] = $username;
			$_SESSION['success'] = "Grade is added";
		}
		
?>