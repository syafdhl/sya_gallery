<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Website Galeri Foto</title>
    <link rel="stylesheet" type="text/css" href="assets/css/index.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <style>
        body {
            background: linear-gradient(135deg, #ff9a9e, #fad0c4);
            color: black;
        }
        .navbar {
            background: rgba(255, 255, 255, 0.2);
        }
        .bt {
            color: white;
            margin-left: 15px;
        }
        .card-loreg {
            background: rgba(255, 255, 255, 0.8);
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
        }
        .form-control {
            color: black; /* Black text for input fields */
        }
        .btn-primary {
            background-color: #ff6f91; /* Pink button */
            border: none; /* Remove border */
        }
        footer {
            background: rgba(255, 255, 255, 0.2);
            color: white;
        }
    </style>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light">
    <div class="container justify-content-center">
        <a class="navbar-brand" href="index.php">Sawik Gallery</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse mt-2" id="navbarNavAltMarkup">
            <div class="navbar-nav me-auto"></div>
            <a href="register.php" class="bt">Daftar</a>
            <a href="login.php" class="bt">Masuk</a>
        </div>
    </div>
</nav>

<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-md-4">
            <div class="card-loreg">
                <div class="text-center">
                    <h5>Daftar Akun Baru</h5>
                </div>
                <form action="config/aksi_register.php" method="POST">
                    <label class="form-label">Username</label>
                    <input type="text" name="username" class="form-control" required>
                    <label class="form-label">Password</label>
                    <input type="password" name="password" class="form-control" required>
                    <label class="form-label">Email</label>
                    <input type="email" name="email" class="form-control" required>
                    <label class="form-label">Nama Lengkap</label>
                    <input type="text" name="namalengkap" class="form-control" required>
                    <label class="form-label">Alamat</label>
                    <input type="text" name="alamat" class="form-control" required>
                    <div class="d-grid mt-2">
                        <button class="btn btn-primary" type="submit" name="kirim">DAFTAR</button>
                    </div>
                </form>
                <hr>
                <p>Sudah punya akun? <a href="login.php" class="text-primary">Login di sini!</a></p>
            </div>
        </div>
    </div>
</div>

<footer class="d-flex justify-content-center border-top mt-3">
    <p>&copy; SAWIK SAWIK</p>
</footer> 

</body>
</html>
