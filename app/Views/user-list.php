<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>User List</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
    </head>
    <body>
    <div class="container pt-2 p-5">
		<div class="card-title d-flex justify-content-center"><h2>CRUD Operation using CodeIgniter 4</h2></div>
        <h4 class="card-title d-flex justify-content-center">User List</h4>
    <div class="card">
        
        <?php if(!empty($users)):?>
            <table class="table">
                <thead class="thead-light">
                    <tr>
                        <th>#</th>
                        <th>Firstname</th>
                        <th>Lastname</th>
                        <th>Email</th>
                        <th>Password</th>
                    </tr>`
            </thead>
            <?php foreach($users as $user):?>
            <tr>
                <td><?= $user->id;?></td>
                <td><?= $user->firstname;?></td>
                <td><?= $user->lastname;?></td>
                <td><?= $user->email;?></td>
                <td><?= $user->password;?></td>
            </tr>
            <?php endforeach;?>
            
        </table>
        <?php else:?>
            <div class="card-body">
        <h1 class="d-flex justify-content-center">Sorry! &#x1F641; userlist is empty</h1>
        </div>
        
        <?php endif;?>
        
        </div>
        <form action="/" method="post">
        <div class="d-flex justify-content-center card-body">
            <input type="submit" class="btn btn-outline-danger" value="Back"/>
            </div>
        </form>

        </div>
        <footer>
	<div class="card-footer d-flex justify-content-center">
	<p>&copy; <?= date('Y') ?> S M Samnoon Abrar</p>
	</div>

</footer>
    </body>
</html>