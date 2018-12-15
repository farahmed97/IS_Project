<!DOCTYPE html>
<html>
<head>
    <title>User registeration system</title>
    <link rel = "stylesheet" type = "text/css" href="style.css">
</head>
<body>
    <div class = "header">
        <h2>Calcutor</h2>
    </div>
    <div>
        <form id = form1 name = "form1" method ="post" action="">
    	    <table width ="294" height="152" border="1">
    		    <tr>
    			    <td width="123">Username</td>
    			    <td width="155"><input type = "text" name="stid" id="stid" /></td></td>
    		    </tr>
    		    <tr>
    			    <td>Math</td>
    			    <td><input type="text" name="math" id="math" /></td>
    		    </tr>
    		    <tr>
    			    <td>English</td>
    			    <td><input type="text" name="english" id="english" /></td>
    		    </tr>
    		    <tr>
    		    	<td>Science</td>
    			    <td><input type="text" name="science" id="science" /></td>
    		    </tr>
    		    <tr>
    			    <td></td>
    			    <td><input type="submit" name="submit" id="button" value="submit" /></td>
    		    </tr>
        	</table>
         </form>
    </div>
</body>
</html>

<?php
        if(isset($_POST['submit'])){

            $Username = $_POST['stid'];
            $Math = $_POST['math'];
            $English = $_POST['english'];
            $Science = $_POST['science'];
        



            $tot = $Math+$English+$Science;

                echo "Your total is = " . $tot . "</br>" . "</br>";
    

            $avg = $tot/3 . "</br>" .  "</br>";

                echo "Your Avg is = " . $avg;


            if($avg>75){

                echo "You have got an A";
            }
             else if($avg>65){

                echo "You have got a B";
            }
            else if($avg>55){

                echo " You have got a C";
            }
            else if($avg>50){

                echo "You have got a D";
            }
            else {

                echo "Sorry, you failed, take a make up or redo the course ";
            }
        }
?>
