<?php
if(isset($_POST['submit'])){
 $username = filter_input(INPUT_POST, 'username',
 FILTER_SANITIZE_SPECIAL_CHARS);
 $password = $_POST['password'];

 if($username == 'john' && $password == 'password'){
   $_SESSION['username'] = $username;
 }
}

?>

<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
<div>
  <label for="name">Name:</label>
  <input type="text" name= "name">
</div>
<div>
  <label for="Age">age:</label>
  <input type="text" name= "age">
</div>
<input type="submit" value="Submit" name="submit">
</form>