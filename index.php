<html>
    <head>
        <title> HOME </title>
		<link type="text/css" rel="stylesheet" href="style.css">
    </head>
    <body>
        <center>
            <form action="process.php" method="post">
            Name<input type="text" name="name">
            FatherName<input type="text" name="fathername">
            MotherName<input type="text" name="mothername">
            Address<input type="text" name="address">
            Email<input type="email" name="email">
            phone<input type="number" name="phone">
            <button class="btn" type="submit" name="submit" style="background: #556B2F;" >submit</button>
            </form>
        </center>
        <center>
            <?php
		require 'dbconfig.php';
		
        $tbl= 'input';
		$sql= "SELECT * FROM $tbl";
		$q=$conn->query($sql);
        
        $conn->close();
        ?>
        <center>
            <table border="2">
                <tr>
                    <th>id</th>
                    <th>name</th>
                    <th>fathername</th>
                    <th>mothername</th>
                    <th>address</th>
                    <th>email</th>
                    <th>phone</th>
					<th colspan="2">Action</th>
                </tr>
                <?php while($row=$q->fetch_assoc()){?>
                <tr>
                    <td><?php echo $row['id']; ?></td>
                    <td><?php echo $row['name']; ?></td>
                    <td><?php echo $row['fathername']; ?></td>
                    <td><?php echo $row['mothername']; ?></td>
                    <td><?php echo $row['address']; ?></td>
                    <td><?php echo $row['email']; ?></td>
                    <td><?php echo $row['phone']; ?></td>
                    <td><a href="edit.php?id=<?php echo $row['id']; ?>"class="edit_btn">Edit</a> |<a href="delete.php?id=<?php echo $row['id']; ?>" class="del_btn"> Delete</td>
                </tr>
				<?php } ?>
            </table>
        </center>
    </body>
</html>