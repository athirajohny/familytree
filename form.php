<?php require_once('connect.php'); ?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form method='post' action='form.php'>

<table>
    <tr>
        <td> Name:</td>
        <td><input type='text' name='name' /></td>
    </tr>
    <tr>
        <td>Gender: </td>
        <td><select name='gender'>
                <option value='M'>Male</option>
                <option value='F'>Female</option>
            </select>
        </td>
    </tr>
    <tr>
        <td>Partner: </td>
        <td><input type='text' name='partner' /></td>
    </tr>



    <tr>
        <td>Parents </td>
        <td name="parents">
        <?php
								
								$query = "SELECT id, name, partner FROM member"; 

								$set = mysqli_query($conn, $query); 

								echo "<select name='parents'>"; 
								echo "<option value='0'>Unknown</option>"; 

								while($row = mysqli_fetch_array($set))
								{
									echo "<option value=" . $row['id'] .">" . $row['name'] . " -" . $row['partner']  . "</option>"; 
								}

								echo "</select>"; 

							?>

        </td>
    </tr>


    
    <tr>
        <td><input type='submit' value='submit' name="submit" /></td>
    </tr>

</table>







</form>
<script>
    if ( window.history.replaceState ) {
        window.history.replaceState( null, null, window.location.href );
    }
</script>
</body>

</html>