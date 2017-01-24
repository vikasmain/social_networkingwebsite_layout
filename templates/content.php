<div id="content">
<div><img src="images/3.jpg" style="float:left;margin:10px;"/>
</div>
<div id="form2">
<form action="" method="post">
<h2>Sign up today</h2>
<table>
<tr>
<td align="right"><strong>Name:</strong></td>
<td><input type="text" name="u_name" required="required" placeholder="username"/></td><!-- name given here are used for recieving data from php-->
</tr>
<tr>
<td align="right"><strong>Email:</strong></td>
<td><input type="email" name="u_email" required="required" placeholder="emailid"/></td>
</tr>
<tr>
<td align="right"><strong>Password:</strong></td>
<td><input type="password" name="u_pass" required="required" placeholder="enter a password"/></td>
</tr>
<tr>
<td align="right"><strong>Country:</strong></td>
<td><input type="text" name="u_country" required="required" placeholder="enter your country"/></td>
</tr>
<tr>
<td align="right"><strong>Gender:</strong></td>
<td><select name="u_gender">
<option>Male</option>
<option>Female</option>

</select>
</tr>
<tr>
<td align="right"><strong>Birthday:</strong></td>
<td><input type="date" name="u_birthday" required="required" placeholder="enter your birth date"/></td>
</tr>
<td colspan="2">
<button name="sign_up"><b>Sign up</b></button>
</td>
</table>
</form>
<?php


include("insert_user.php");
?>
</div>
</div>