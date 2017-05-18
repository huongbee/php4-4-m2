<?php

include('connect.php');

/*select no parameter
	$sql = "SELECT * FROM user";
	//C1
		// $result = $dbh->query($sql);
		// foreach($result as $row){
		// 		print_r($row);
		// }
	//C2
		$sth = $dbh->prepare($sql);
		$sth->execute();
		$result = $sth->fetchAll();
		print_r($result);

*/
//Select with parameter
	/*$stmt = $dbh->prepare("SELECT * FROM user where name like '%?%'");
	if ($stmt->execute(array($_GET['name']))) {
	  	while ($row = $stmt->fetch()) {
	    	print_r($row);
	  	}
	}*/
//Insert
	//C1
		/*$sql = "INSERT INTO user(name,email) VALUES (?,?)";
		$sth = $dbh->prepare($sql);
		$sth->bindParam(1, $name);
		$sth->bindParam(2, $email);
		// insert one row
		$name = 'one';
		$email = 1;
		$sth->execute();

		// insert another row with different values
		$name = 'two';
		$email = 2;
		$sth->execute();*/

	//C2
		// $sql = "INSERT INTO user(name,email) VALUES (:name,:email)";
		// $sth = $dbh->prepare($sql);
		// $sth->bindParam(":name", $name);
		// $sth->bindParam(':email', $email);
		// // insert one row
		// $name = 'one a';
		// $email = 3;
		// $sth->execute();

		// // insert another row with different values
		// $name = 'two a';
		// $email = 4;
		// $sth->execute();
//Update
	//noparam
		$sql = "UPDATE user SET lastname='Huong' WHERE id=2";

	    // Prepare statement
	    $stmt = $conn->prepare($sql);

	    // execute the query
	    $stmt->execute();

	    // echo a message to say the UPDATE succeeded
	    echo $stmt->rowCount() . " đã update";

	//with param
	    $b=$a->prepare("UPDATE `users` SET user=?");
		$b->bindParam("1",$var);
		$b->execute();


//Delete
	$count = $dbh->exec("DELETE FROM users WHERE id = 1");

	/* Return number of rows that were deleted */
	print("Deleted $count rows.\n");
?>