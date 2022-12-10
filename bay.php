   <html>
<head>
    <link rel='stylesheet' type='text/css' media='screen' href='site.css'>
<body style="background-image: url('555.jpg');background-size: cover;">
<br><br>
<center>
		<fieldset>
			<legend style="font-size:40"> Buying </legend>
   <html> <body> <?php // define variables and set to empty values
 $name = $email ="";
 if ($_SERVER["REQUEST_METHOD"] == "POST") {    $name = test_input($_POST["name"]);    
 $email = test_input($_POST["email"]);} 
function test_input($data) {    
$data = trim($data);    
$data = stripslashes($data);    
$data = htmlspecialchars($data);  
  return $data; }
 ?> 
 
 <?php 
 $Address=$Password="";
 if ($_SERVER["REQUEST_METHOD"] == "POST") {$Address = test_input($_POST["Address"]);
$Password = test_input($_POST["Password"]);}  

  ?>
 <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
   		<label style="font-size:25" >Name: </label>
   <input type="text" name="name" placeholder="Enter Here Your name">  
   <br><br>  
		<label style="font-size:25"  > E-mail: </label>
		<input type="text" name="email" placeholder="Enter Here Your Email"><br><br> 
   <label style="font-size:25">Location  </label>
			<input type="text" name="address" placeholder="Enter Here Your Address"><br>
			<br>
			
			<br>
			<br>
      <label>Payment Info</label><br>
			<br>
			<input type="radio" name="pay">Visa
			<input type="radio" name="pay">MasterCard
			<input type="radio" name="pay">Bank Account<br>
			<br>
   <div class="profile__cta"><input type="submit" name="submit" value="BAY" class="button"> </div>

   <button><a href="bay2.php" >bay</a>
	</button>	
		</fieldset>
   <?php echo "<h2>Your Input:</h2>";
   $user=$_POST["user"];
   $email=$_POST["email"]; 
   $Address=$_POST["Address"];
   $Password=$_POST["Password"];    
   echo $name; echo "<br>"; echo $email; echo "<br>"; echo $Address; echo "<br>"; echo $Password; ?>  
   <main>
<div class="profile__cta"><a  href="welcome 1.php" class="button">
    Back to home
</a></div>
</main>
</body>
</head>
</html>
</body> </html> 