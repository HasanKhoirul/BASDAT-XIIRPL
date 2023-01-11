<html>
    <head>
        <title>Login Ges</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    </head>
    </head>
    <body>

    <section class="vh-100" style="background-color: #508bfc;">
        <div class="container py-1 h-100">
        <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-8 col-md-5 col-lg-6 col-xl-5">
        <div class="card shadow-5-strong" style="border-radius: 2rem;">
        <div class="card-body p-5 text-center">

            <!-- Text Login -->
            <h2 class="fw-bold mb-2 text-uppercase">Login Anggota Aplikasi</h2>
            <p class="text-white-50 mb-5">Please enter your email and password!</p>

        <form action="proses.php" method="post">

            <!-- Email -->
            <div class="form-outline form-white mb-4">
                <input type="text" name="email" id="email" class="form-control form-control-lg" />
                <label class="form-label" for="email">Masukan Email Anda</label>
            </div>

            <!-- Passowrd -->
            <div class="form-outline form-white mb-4">
                <input type="password" name="pass" id="pass" class="form-control form-control-lg" />
                <label class="form-label" for="password">Masukan Password Anda</label>
            </div>

            <!-- Forgot Password -->
            <p class="small mb-5 pb-lg-2"><a class="text-white-50" href="#!">Forgot password?</a></p>

            <!-- Login & Reset -->
            <button class="btn btn-outline-dark btn-lg px-5" type="submit">Login</button>
            <button class="btn btn-outline-dark btn-lg px-5" type="reset">Reset</button>
            <br>
            
            <!-- Halaman Utama -->
            <div>
                <h5 class="mb-0">Belum Punya Akun? <a href="daftar.php" class="text-red-50 fw-bold">Daftar Disini</a></h5>
                <h6 class="mb-0">Mau kembali kehalaman utama? <a href="../index.php" class="text-blue-50 fw-bold">Klik Sini</a></h6>
            </div>

        </div>
        </div>
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

        </form>
    </body>
</html>