<!DOCTYPE html>
<html>
    <head>
        <title>Add User</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    </head>
    <body>
        <div class="container col-md-12">
            
            <div class="card-body">
            <div class="card-title">
            <div class="card-title d-flex justify-content-center"><h2>CRUD Operation using CodeIgniter 4</h2></div>

                <div class="d-flex justify-content-center"><h3>Add User</h3></div>
            </div>
                <form action="user-submit" method="post">
                    <div class="card-body">
                    <div class="form-row">
                        <label for="firstname" class="col-sm-2 col-form-label">First Name</label>
                        <input name="firstname" type="text" class="form-control col-sm-10" placeholder="enter first name.." />
                    </div>
                    </div>
                    <div class="card-body">
                    <div class="form-row">
                        <label for="lastname" class="col-sm-2 col-form-label">Last Name</label>
                        <input name="lastname" type="text" class="form-control col-sm-10" placeholder="enter last name.." />
                    </div>
                    </div>
                    <div class="card-body">
                    <div class="form-row">
                        <label for="email" class="col-sm-2 col-form-label">Email</label>
                        <input name="email" type="email" class="form-control col-sm-10" placeholder="enter email.." />
                    </div>
                    </div>
                    <div class="card-body">
                    <div class="form-row">
                        <label for="password" class="col-sm-2 col-form-label">Password</label>
                        <input name="password" type="password" class="form-control col-sm-10" placeholder="enter password.." />
                    </div>
                    </div>
                    <div class="d-flex justify-content-center card-body">
                    <input type="submit" class="btn btn-primary" value="Submit" />
                    </div>
                </form>
                <form action="/" method="post">
                <div class="card-body d-flex justify-content-center">

                    <input type="submit" class="btn btn-outline-danger" value="Back" />
                </div>
            </form>
            </div>
            
        </div>
        <footer>
	<div class="card-footer d-flex justify-content-center">
	<p>&copy; <?= date('Y') ?> S M Samnoon Abrar</p>
	</div>

</footer>
    </body>
</html>