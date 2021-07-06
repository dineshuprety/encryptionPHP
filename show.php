<?php
include 'init.php';

/**
 * Database class object
 */
$obj = new Base_class();
/**
 * Encryption class object
 */
$encryption = new Encryptionphp('bZKn8iklVOQr7eC8ONvnCeRFBJwWo1PG');


if($obj->Normal_Query("select * from form order by id desc")){

    echo "<table border='1'>";
	echo "<tr><td>Id</td><td>Name</td><td>Email</td></tr>";
    while($row = $obj->Single_Result()){
        $iv    = $row->iv;
        // $iv    = $encryption->hextobinery($iv);
        $id    = $row->id;
        $name  = $encryption->decrypt($row->name, $iv);
        $email =  $encryption->decrypt($row->email, $iv);

        echo "<tr><td>".$id."</td><td>".$name."</td><td>".$email."</td></tr>";
    }
    echo "</table>";
}