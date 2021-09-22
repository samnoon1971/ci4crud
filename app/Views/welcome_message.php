<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>CRUD APP</title>
	<meta name="description" content="The small framework with powerful features">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="shortcut icon" type="image/png" href="/favicon.ico"/>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>



</head>
<body>
	<div class="container pt-2 p-5">
	<div class="card-title d-flex justify-content-center"><h2>CRUD Operation using CodeIgniter 4</h2></div>
	<div class="card">
		<div class="card-body btn-group flex-column">
			<a href="user-view" class="btn btn-outline-info">View Users</a>
			<a href="user-add" class="btn btn-outline-primary">Add User</a>
			<a href="user-remove" class="btn btn-outline-danger">Delete User</a>
			<a href="#" class="btn btn-outline-success">Update User</a>
		</div>
	</div>
	</div>
<!-- FOOTER: DEBUG INFO + COPYRIGHTS -->

<footer>
	<div class="card-footer d-flex justify-content-center">
	<p>&copy; <?= date('Y') ?> S M Samnoon Abrar</p>
	</div>

</footer>

<!-- SCRIPTS -->

<script>
	function toggleMenu() {
		var menuItems = document.getElementsByClassName('menu-item');
		for (var i = 0; i < menuItems.length; i++) {
			var menuItem = menuItems[i];
			menuItem.classList.toggle("hidden");
		}
	}
</script>

<!-- -->

</body>
</html>
