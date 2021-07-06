<?php
include 'init.php';
include '../src/Encryptionphp.php';
/**
 * Database class object
 */
$obj = new Base_class();
/**
 * Encryption class object
 */
$encryption = new Encryptionphp('bZKn8iklVOQr7eC8ONvnCeRFBJwWo1PG');


if(isset($_POST['submit'])){
    $iv = $encryption->iv();
    $name = $obj->security($_POST['name']);
    $email = $obj->security($_POST['email']);
    $name = $encryption->encrypt($name, $iv);
    $email = $encryption->encrypt($email, $iv);

    $iv = $encryption->binerytohex($iv);

    if($obj->Normal_Query("INSERT into form (name, email, iv) VALUES (?, ?, ?)",[$name, $email, $iv])){

    if($obj->Count_Rows() > 0){
        echo "Thank you for providing information";
    }else{
        echo "Please try after sometime";
    }

    }
}

?>

<form method="post">
	<table>
		<tr>
			<td>Name</td>
			<td><input type="text" name="name" required></td>
		</tr>
		<tr>
			<td>Email</td>
			<td><input type="email" name="email" required></td> 
		</tr>
		<tr>
			<td></td>
			<td><input type="submit" name="submit"></td> 
		</tr>
	</table>
</form>
