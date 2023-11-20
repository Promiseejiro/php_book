<?php
?>
<html>
  
  <form action="printdetail.php"method="post">
    <fieldset><legend>Enter your 
information in the form below:</legend>
<input type="name"name="firstname"/>
<div align=”center”><input type="submit" name="submit" value="SubmitMy Information"/></div>
<p>Gender</p>
<input type="radio" name="male">Male</input>
<input type="radio" name="female">Female</input>
<p>Age</p>
<select value="60-70">
  <option>under 10</option>
  <option>under 30</option>
  <option>above 30</option>
</select>
<p>Comments</p>
<textarea style="width:20rem; height:6rem;"name="comments"></textarea>
</fieldset>
  </form>
</html>