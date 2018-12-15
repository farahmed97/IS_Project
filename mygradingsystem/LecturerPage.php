<!DOCTYPE html>
<html>
<head>
    <title>Students Grades</title>
    <link rel = "stylesheet" type = "text/css" href="style.css">
</head>
<body>
    <div class = "header">
        <h2>Add Grade</h2> 
    </div>       
    <form method="post" action="LecturerPage.php">
        <!-- display validation errors here -->       
		<div class = "input-group">
            <label>Username</label>
            <input type ="text" name="username">
        </div>
        <div class = "input-group">
            <label>Grade</label>
            <input type ="grade" name="grade">
        </div>
		<div>
		    <input type="hidden" name= "token" value= "<?php echo $token;?>" >
		</div>
        <div class = "input-group">
            <button type = "submit" name="add" class="btn">add</button>
        </div>  
    </form>
</body>
</html>

<html>
<head>
<style  type = "text/css">
 table {
      background-color: white;
   }
   th {
   width: 150px;
   text-align: middle;
   }
</style>
</head>
<body>
<form method= "post" action= "LecturerPage.php">
<input type="hidden" name= "add" value= "true" />
<label> All Students Grades: </label>
</form>

<?php 
include('Access Control.php');
if(isset($_POST['add']))
{
	include('Access Control.php');
	$username = $_POST['username'];
	$grade = $_POST['grade'];
	$query2 = "SELECT * FROM student_grades ";
	$result2 = mysqli_query($db2, $query2) or die();
}

?>
</body>
</html>