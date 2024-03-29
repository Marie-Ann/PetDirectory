<!DOCTYPE html>
<?php 
    include 'C:\xampp\htdocs\PetDirectory\src\inc\header.php';
    include 'C:\xampp\htdocs\PetDirectory\src\inc\footer.php';
?>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>New User Registration</title>

        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
        <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
        <link rel="stylesheet" type="text/css" href="css/registration.css" />

    </head>

    <body>
        <nav class="navbar navbar-expand-lg bg-info">
            <div class="container-fluid">
                <div class="collapse navbar-collapse">
                    <ul class="navbar-nav mb-2 mb-lg-10">
                        <li class="nav-item">
                            <a class="nav-link active" href="index.html">Home</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <div class="container">
            <form>
                <div class="form-group">
                    <label for="firstname">First Name: </label>
                    <input type="text" class="form-control" />
                    <label for="lastname">Last Name: </label>
                    <input type="text" class="form-control" />
                    <label for="pwd">Password: </label>
                    <input type="password" class="form-control" aria-describedby="passwordRule" />
                    <div id="passwordRule" class="form-text">Passwords must be 8-25 characters and contain at least one uppercase character, number, and special character.</div>
                    <label for="retypePwd">Re-type Password: </label>
                    <input type="password" class="form-control" />
                    <label for="phone">Phone Number: </label>
                    <input type="text" class="form-control" />
                    <label for="address">Address: </label>
                    <input for="address" class="form-control" />
                </div>
                <button type="submit" class="btn btn-info">Submit</button>
            </form>
        </div>
    </body>
</html>