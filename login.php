<?php
?>

<head>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
</head>
<div class="container-fluid jumbotron">
    <h1 class="text-center">Hike Management System</h1>
</div>
<div class="container">
	<div class="row">
		<div class="col-md-6">
			<h3 class="text-center">Login For DWIT Student</h3>
			<form method="post"class="form" class="border">
                <div class="form-group">
    				<label>Email</label>
    				<input type="email" name="email" class="form-control">
    			</div>
    			<div class="form-group">
    				<label>Password</label>
    				<input type="Password" name="Password" class="form-control">
    			</div>
    			<div class="form-group" class="form-control">
    				<label>Role</label>
    				<select class="form-control">
    				<option value="admin">Admin</option>
                    <option value="member">Member</option>
                    <option value="student">Student</option>
                    </select>
    			</div>
    			<div class="form-group">
    				<center><input type="submit" name="submit" class="btn btn-primary" class="form-control"></center>
    			</div>
    		</form>
		</div>
	</div>
</div>