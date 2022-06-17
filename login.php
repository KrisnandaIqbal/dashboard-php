<?php
error_reporting(0);

session_start();


$koneksi = new mysqli("localhost", "root", "", "db_perpustakaan");

if ($_SESSION['admin'] || $_SESSION['user']) {
    header("location:index.php");
} else {

?>

    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />

        <!-- Css Connect -->
        <link rel="stylesheet" href="./css/style1.css" />

        <!-- Fonts -->

        <link rel="preconnect" href="https://fonts.googleapis.com" />
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap" rel="stylesheet" />

        <title>Login</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous" />
    </head>

    <body>
        <section class="login d-flex">
            <div class="login-left w-50 h-100 dark">
                <div class="row justify-content-center align-items-center h-100">
                    <div class="col-6">
                        <div class="header">
                            <h1>Welcome <span class="green">Back</span></h1>
                            <p>Masukan Username dan Password.</p>
                        </div>
                        <div class="login-form">
                            <form method="POST" action="" name="login">
                                <label for="username" class="form-label">Username</label>
                                <input type="username" class="form-control" id="email" placeholder="Your Username" name="nama" />

                                <label for="password" class="form-label">Password</label>
                                <input type="password" class="form-control" id="password" placeholder="Your Password" name="pass" />

                                <!-- <button class="login">Sign In</button>
                                <div class="text-center"></div> -->

                                <div class="form-group input-group">
                                    <button id="login" type="submit" class="signin" name="login">
                                        Login
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="login-right w-50 h-100">
                <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img class="d-block w-100" style="height: 100vh;" src="img/image 2.png" alt="First slide" />
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" style="height: 100vh;" src="img/image 3.png" alt="Second slide" />
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" style="height: 100vh;" src="img/image 4.png" alt="Third slide" />
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only"></span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only"></span>
                    </a>
                </div>
            </div>
        </section>

        <!-- Bootstrap Bundle with Popper -->
        <!-- <script type="text/javascript">
            const id = document.getElementById("login");
            id.addEventListener("click", function(e) {
                e.preventDefault()
            })

        </script> -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    </body>

    </html>

    <?php

    if (isset($_POST['login'])) {

        $nama = $_POST['nama'];
        $pass = $_POST['pass'];

        $ambil = $koneksi->query("select * from tb_user where username='$nama' and password='$pass'");
        $data = $ambil->fetch_assoc();
        $ketemu = $ambil->num_rows;

        if ($ketemu > 0) {

            session_start();

            $_SESSION['username'] = $data['username'];
            $_SESSION['pass'] = $data['password'];
            $_SESSION['level'] = $data['level'];


            if ($data['level'] == "admin") {
                $_SESSION['admin'] = $data['id'];
                header("location:index.php");
            } else if ($data['level'] == "user") {
                $_SESSION['user'] = $data['id'];
                header("location:index.php");
            }
        } else {
    ?>
            <script type="text/javascript">
                alert("Username dan Password Anda Salah");
            </script> 
<?php
        }
    }
}
?>