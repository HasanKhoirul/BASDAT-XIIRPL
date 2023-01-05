<html>
    <head>
        <title>Login</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    </head>
    <body>
    <section class="vh-100">
        <div class="container py-5 h-100">
        <div class="row d-flex align-items-center justify-content-center h-100">
        <div class="col-md-8 col-lg-7 col-xl-6">
        <img src="background1.png" class="img-fluid"></div>
        <div class="col-md-7 col-lg-5 col-xl-5 offset-xl-1">
        <form action="../admin/proses_admin.php" method="post">
        <form>

            <!-- Text Login -->
            <div class="text-center">
                <h1 class="mt-1 mb-5 pb-1">Login Admin Aplikasi</h1>
            </div>

            <!-- Admin  -->
            <div class="form-outline mb-4">
                <input type="text" name="admin" id="admin" class="form-control form-control-lg" />
                <label class="form-label" for="admin">Masukan Username Admin</label>
            </div>

            <!-- Password -->
            <div class="form-outline mb-4">
                <input type="password" name="password" id="password" class="form-control form-control-lg" />
                <label class="form-label" for="password">Masukan Password Anda</label>
            </div>

            <div class="d-flex justify-content-around align-items-center mb-4">
            <!-- Checkbox -->
            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="form1Example3" checked />
                <label class="form-check-label" for="form1Example3"> Remember me </label>
            </div>
            <a href="#!">Forgot password?</a>
            </div>

            <!-- Submit Button -->
            <button type="submit" value="LOGIN" class="btn btn-primary btn-lg btn-block">LOGIN</button>

            <!-- Halaman Utama -->
            <a href="../index.php" class="btn btn-danger btn-lg btn-block" href="#!" role="button">
            <i class="fab fa-twitter me-2"></i>Kembali Ke halaman Utama</a>

        </form>
        </div>
        </div>
        </div>
        
        <!-- Footer Copyright -->
        <div class="d-flex flex-column flex-md-row text-center text-md-start justify-content-between py-4 px-4 px-xl-5 bg-primary">
            <div class="text-white mb-3 mb-md-0">
                Copyright © 2023. By Hasan Khoirul Ari Setiyawan.
            </div>
        </div>
        
    </section>



    </body>
</html>