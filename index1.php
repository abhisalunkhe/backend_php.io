<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>Login Here</title>
</head>
<body>
    <div class="container justify-content-center">
        <div class="row">
            <div class="card justify-content-center">
                <div class="card w-125">
                    <div class="card-header text-center">
                        <h3>Login Form</h3>
                    </div>
                    <div class="card-body">
                        <form action="login.php" method="post">
                            <div class="form-group">
                                <label for="Username">Username</label>
                                <input type="text" name="username" id="username" class="form-control" name="username">
                            </div>
                            <div class="form-group">
                                <label for="Password">Password</label>
                                <input type="password" name="password" id="password" class="form-control" name="password">
                            </div>
                            <input type="submit" name="submit" class="btn btn-primary w-100" value="login" id="submit">
                        </form>
                    </div>
                    <div class="card-footer text-center">
                        &copy; AbhijitSalunkhe
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>