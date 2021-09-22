<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>User List</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
    </head>
    <body>

    <div class="card-body">
    <div class="card-title d-flex justify-content-center"><h2>CRUD Operation using CodeIgniter 4</h2></div>
        <h4 class="card-title d-flex justify-content-center">Delete User</h4>
        <div class="card-box d-flex justify-content-center">
            <form action="user-delete" method="post" class="d-flex justify-content-center">
                <input type="number" placeholder="Enter ID..." name="search" class="form-control"/>
                <input type="submit" value="Delete" class="btn btn-danger" />
            </form>
            
        </div>
        <div class="card-body">
        <form action="/" method="post" class="d-flex justify-content-center">
                <input type="submit" value="Back" class="btn btn-info" />
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