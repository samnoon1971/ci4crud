<!DOCTYPE html>
<html>
    <head>
        <title>View User</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    </head>
    <body>
        <div class="container">
            <h3>Not Submitted, Input Details</h3>
        </div>
        <div class="container col-md-12">
            <div class="card">
                <div class="card-body">
                    <label>First Name:  </label>
                <?= $firstname ?>
                </div>
            </div>
            <div class="card">
                <div class="card-body">
                <label>Last Name:   </label>
                <?= $lastname ?>
                </div>
            </div>
            <div class="card">
                <div class="card-body">
                <label>Email:   </label>
                <?= $email ?>
                </div>
            </div>
             
        </div>
    </body>
</html>