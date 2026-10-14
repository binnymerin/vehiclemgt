<?php require_once("header.php");  ?>

<div class="one-half">
    <div class="heading_bg">
      <h2>Login</h2>
    </div>
	<form method="post" action="login_exe.php">
    <table border="0">
      <tbody>
	  <tr>
        <td>Username</td>
        <td>
			<input  placeholder="Enter Username" name="username" type="text" class="form-control" required="">
		</td>
      </tr>
      <tr>
        <td>Password</td>
        <td>							
			<input  placeholder="Enter Password" name="password" type="password" class="form-control" required="">
		</td>
      </tr>
      <tr>
        <td>User Type</td>
        <td>							
			<select class="form-control" name="usertype" required="">
				<option></option>
				<option>Customer</option>
				<option>Admin</option>	
				<option>Employee</option>					
			</select>
		</td>
      </tr>
	  <tr>
		<td colspan=2>
		<input type="submit" value="Login">
		</td>
	  </tr>
    </tbody>
	</table>
	</form>
 </div>
  
  
  <!-- END First Column -->
  <div class="one-half last">
    <div class="heading_bg">
      <h2>Register</h2>
    </div>
<form method="post" action="customer/customer_ADD_exe.php">
    <table border="0">
      <tbody>
	  <tr>
        <td>Name</td>
        <td>
			<input  placeholder="Enter Name" name="cust_name" type="text" class="form-control" required="">
		</td>
      </tr>
      <tr>
        <td>Address</td>
        <td>							
			<textarea  placeholder="Enter Address" name="address"  class="form-control" required=""></textarea>
		</td>
      </tr>
	   <tr>
        <td>Phone</td>
        <td>
			<input placeholder="10 Digits" pattern="[0-9]{10}"  name="phone" type="tel" class="form-control" required="">
		</td>
      </tr>
	  	  <tr>
        <td>Email</td>
        <td>
			<input  placeholder="Enter Name" name="email" type="email" class="form-control" required="">
		</td>
      </tr>
      <tr>
        <td>Password</td>
        <td>							
			<input  placeholder="Enter Password" name="password" type="password" class="form-control" required="">
		</td>
      </tr>
	  <tr>
		<td colspan=2>
		<input type="submit" value="Register">
		</td>
	  </tr>
    </tbody>
	</table>
</form>
 </div>
  <!-- END Second Column -->
  <div style="clear:both; height: 40px"></div>


<?php require_once("footer.php");  ?>