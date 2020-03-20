<html>
    <head>
        <title> processing </title>
    </head>
    <body>
        <?php
        require 'dbconfig.php';
        
        $id=$_POST['id'];
        $name=$_POST['name'];
        $fathername=$_POST['fathername'];
        $mothername=$_POST['mothername'];
        $address=$_POST['address'];
        $email=$_POST['email'];
        $phone=$_POST['phone'];
        
        //echo "name is $name";
        
        $tbl='input';
        $sql="UPDATE $tbl SET name='$name',fathername='$fathername',mothername='$mothername',address='$address',email='$email',phone='$phone' WHERE id=$id";
        $query=$conn->query($sql);
        
        if ($query === TRUE) {
			echo "New record created successfully";
		} else {
			echo "Error: " . $sql . "<br>" . $conn->error;
		}
		//echo exit();
		//$conn->close();
		//new commect
        ?>  
        <script>
		window.location="index.php";
	   </script>
    </body>
</html>