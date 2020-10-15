<?php
	$servername = 'localhost';
	$user = 'root';
	$pass = '';
	$dbname = 'tsf';

	$conn = mysqli_connect($servername,$user,$pass,$dbname);

	if(!$conn){
		die("Could Not Connect to the database".mysqli_connect_error());
	}

	$sql = "INSERT INTO users(id,name,email,credits)
			VALUES('1','Anima','amina@gmail.com','50000'),
				  ('2','Krishna','krishnaa@gmail.com','60090'),
			  	  ('3','Priya','priya@gmail.com','100090'),
				  ('4','Shruthi','shruthi@gmail.com','45500'),
				  ('5','Surya','surya@gmail.com','47500'),
				  ('6','Sam','sam@gmail.com','95000'),
				  ('7','Irene','irene@gmail.com','90030'),
				  ('8','Mahen','mahen@gmail.com','98000'),
				  ('9','Hari','hari@gmail.com','22700'),
				  ('10','Prasath','prasath@gmail.com','87000')";

	if($conn->query($sql) === TRUE){
		echo "New Record Create Successfully.";
	}
	else{
		echo "Error!!!".$sql."<br>".$conn->error;
	}
	$conn->close();
?>
