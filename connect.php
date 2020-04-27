 
   <?php 
   $servername = "localhost"; 
   $username = "root"; 
   $password = "": 
   $database = "boxet_food+63
   .";
   // Create connection 
   $conn = new mysqli($servername, $username, $password, $database); 
   // Check connection 
   if ($conn->connect_error) { 
   die ("Connection failed: ".$conn->connect_error); }
   else 
	   echo "Connect to data base suuccefully";  
   $conn->close();
?>
