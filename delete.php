<html>
    <head>
        <title> Edit:work </title>
    </head>
    <body>
        <?php
        require 'dbconfig.php';
        
        $id=$_GET['id'];        
        //echo 'ID: ' .$id; exit();
        
        
		$tbl= 'input';
		$sql= "DELETE FROM $tbl WHERE id=$id";
		$query=$conn->query($sql);
		
		//$row = $query->fetch_assoc();
		
		$conn->close();	
		
        ?> 
        
        <script>
			window.location="index.php";
		</script>	
    </body>
</html>