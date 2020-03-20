<html>
    <head>
        <title> Edit:work </title>
		<link type="text/css" rel="stylesheet" href="style.css">
    </head>
    <body>
        <?php
        require 'dbconfig.php';
        
        $id=$_GET['id'];        
        //echo 'ID: ' .$id; exit();
        
        
		$tbl= 'input';
		$sql= "SELECT * FROM $tbl WHERE id = $id ";
		$query=$conn->query($sql);
		
		$row = $query->fetch_assoc();
		
		$conn->close();	
		
        ?> 
            <form action="update.php" method="post">
            <input type="hidden" name="id" value="<?php echo $row['id']?>" />
            Name<input type="text" value="<?php echo $row['name']?>" name="name">
            FatherName<input type="text" value="<?php echo $row['fathername']?>" name="fathername">
            MotherName<input type="text" value="<?php echo $row['mothername']?>" name="mothername">
            Address<input type="text" value="<?php echo $row['address']?>" name="address">
            Email<input type="email" value="<?php echo $row['email']?>" name="email">
            phone<input type="number" value="<?php echo $row['phone']?>" name="phone">
            <button class="btn" type="submit" name="update" style="background: #556B2F;" >update</button>

			
            </form>
               
    </body>
</html>