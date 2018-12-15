<?php include('server.php'); ?>
<!DOCTYPE html>
<html>
<head>
    <title>Student Grade</title>
    <link rel = "stylesheet" type = "text/css" href="style.css">
</head>
<body>
    <div class = "header">
        <h2>Student Grade</h2> 
    </div>       
		<div>
		    <input type="hidden" name= "token" value= "<?php echo $token;?>" >
		</div>
		<label> My Grades: </label>
		<style  type = "text/css">
 table {
      background-color: white;
   }
   th {
   width: 150px;
   text-align: middle;
   }
</style>

<?php 
include('Access Control.php');
	$query2 = "SELECT * FROM student_grades WHERE username ='$username'";
	$result2 = mysqli_query($db2, $query2) or die();

?>
</body>
</html>