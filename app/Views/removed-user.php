<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    </head>
    <body>
        <div class="container col-md-12">
            
            <div class="card-body">
            <div class="card-title">
                <div class="d-flex justify-content-center">Deleted Successfully</div>
                <div class="d-flex justify-content-center"><h4>Info for Deleted User ID = <?= $id ?></h4></div>

            </div>
                <form action="/" method="post" class="card-box d-flex-row">
                    <div class="form-group">
                        <div class="d-flex justify-content-center">First Name: <?= $firstname; ?></div>
                    </div>
                    <div class="form-group">
                        <div  class="d-flex justify-content-center">Last Name: <?= $lastname; ?></div>
                    </div>
                    <div class="form-group">
                        <div  class="d-flex justify-content-center">Email: <?= $email; ?></div>
                    </div>
                    <div class="form-group">
                        <div  class="d-flex justify-content-center">Password: <?= $password; ?></div>
                    </div>
                    <div class="d-flex justify-content-center">
                    <input type="submit" class="btn btn-info" value="Back" />
                    </div>
                </form>
            </div>
        </div>
    </body>
</html>