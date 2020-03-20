<html>
    <head>
        <title> processing </title>
    </head>
    <body>
        <?php
        require 'dbconfig.php';
        
        $name=$_POST['name'];
        $fathername=$_POST['fathername'];
        $mothername=$_POST['mothername'];
        $address=$_POST['address'];
        $email=$_POST['email'];
        $phone=$_POST['phone'];
        
        //echo "name is $name";
        
        $tbl='input';
        $sql="INSERT INTO $tbl(name,fathername,mothername,address,email,phone) VALUES('" . $name . "','" . $fathername . "','" . $mothername . "','" . $address . "','" . $email . "','" . $phone . "')";
        $query=$conn->query($sql);
        
        if ($query === TRUE) {
			echo "New record created successfully";
		} else {
			echo "Error: " . $sql . "<br>" . $conn->error;
		}
		//echo exit();
		$conn->close();
        ?>  
        <script>
			window.location="index.php";
		</script>
        
    </body>
</html>