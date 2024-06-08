<!DOCTYPE HTML>
<html>
    <head>
        <title>Halaman Login</title>
        <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.css">
        <link rel="stylesheet" href="assets/bootstrap/css/style.css">

    </head>

    <body>
        <div class="container">
            <div class="row justify-content-center mt-5">
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-header bg-transparent mb-0"><h5 class="text-center">Please <span class="font-weight-bold text-primary">LOGIN</span></h5></div></div>
                        <div class="card-body">
                            <form method="post" action="cek_login.php">
                                <div class="form-group">
                                    <label>Username</label><br>
                                    <input type="text" name="user" class="form-control"><br>
                                </div>
                                <div class="form-group">
                                    <label>Password</label><br>
                                    <input type="password" name="pass" class="form-control"><br>
                                </div>
                                <div class="form-group">
                                    <button type="submit"  name="submit" class="btn btn-primary btn-block">Log in</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>     
    </body>
</html>