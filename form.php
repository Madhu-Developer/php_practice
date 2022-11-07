<html>
<body><center>
<h1>login form</h1>
<form method="post" action="checkform.php">

<label for="name">Name:</label>
<input type="text" id="name" name="name">
<br>
<label for="mail">email id:</label>
<input type="email" id="mail" name="email">
<br>
<label for="pass">password:</label>
<input type="password" id="pass" name="pass">
<br>
<label for="date">DOB:</label>
<input type="date" id="date" name="date">
<br>
<label for="cars">Choose a course:</label>
<select id="cars" name="COURSE"> 
  <option value="BCA">BCA</option>
  <option value="Bsc">Bsc</option>
  <option value="MATHS">MATHS</option>
  <option value="PHYSICS">PHYSICS</option>
</select> 
 <br>
<label for="color">Choose your favorate color </label>
<input type="color" id="color" name="color">
<br> 
<label>select blood group</label>
<input type="radio" name="radio" value="o+" id="o+"><label for="o+">O+</label>
<input type="radio" name="radio" value="b+" id="b+"><label for="b+">B+</label>
<input type="radio" name="radio" value="o-" id="o-"><label for="o-">O-</label>
<br>

<input type="submit" value="sumbit">

</center></form>
</body>
</html>