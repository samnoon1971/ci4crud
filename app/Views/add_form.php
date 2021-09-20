<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    </head>
    <body>
        <div class="container col-md-12">
            <div class="card-body">
                <form action="calculator/submit" method="post">
                    <div class="form-group">
                        <label for="firstname">First Name</lablel>
                        <input type="text" class="form-control" placeholder="enter first name.." />
                    </div>
                    <div class="form-group">
                        <label for="lastname">Last Name</lablel>
                        <input type="text" class="form-control" placeholder="enter last name.." />
                    </div>
                    <div class="form-group">
                        <label for="email">Email</lablel>
                        <input type="email" class="form-control" placeholder="enter email.." />
                    </div>
                    <div class="form-group">
                        <label for="">Password</lablel>
                        <input type="password" class="form-control" placeholder="enter password.." />
                    </div>
                    <input type="submit" class="btn btn-primary" value="Submit" />
                </form>
            </div>
        </div>
    </body>
</html>