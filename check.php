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
			<h3 class="text-center">Check For Comfortable Hike</h3>
			<form method="post" class="form">
    			<div class="form-group">
    				<label>Name</label>
    				<input type="text" name="name" class="form-control">
    			</div>
    			<div class="form-group">
    				<label>Age</label>
    				<input type="number" name="age" class="form-control">
    			</div>
    			<div class="form-group">
    				<label>Weight in Kg</label>
    				<input type="number" name="weight" class="form-control">
    			</div>
                <div>
                    <label>Season</label>
                    <label>gender</label>
                    
                </div>
    			<div class="form-group">
    				<center><input type="submit" name="submit" class="btn btn-primary"></center>
    			</div>
    		</form>
		</div>
    </div>
</div>