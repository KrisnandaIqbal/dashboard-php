<?php
error_reporting(0);
ob_start();

session_start();
$koneksi = new mysqli("localhost", "root", "", "db_perpustakaan");

if (isset($_POST['submit'])) {

   $name = mysqli_real_escape_string($conn, $_POST['name']);
   $email = mysqli_real_escape_string($conn, $_POST['email']);
   $number = $_POST['number'];
   $date = $_POST['date'];

   $insert = mysqli_query($conn, "INSERT INTO `contact_form`(name, email, number, date) VALUES('$name','$email','$number','$date')") or die('query failed');

   if ($insert) {
      $message[] = 'appointment made successfully!';
   } else {
      $message[] = 'appointment failed';
   }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Nameless - Monitoring Magang</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

   <!-- bootstrap cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/4.6.1/css/bootstrap.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>

<body>

   <!-- header section starts  -->

   <header class="header fixed-top">

      <div class="container">

         <div class="row align-items-center justify-content-between">

            <a href="#home" class="logo">Name<span>Less.</span></a>

            <nav class="nav">
               <a href="#home">home</a>
               <a href="#about">about</a>
               <a href="#services">services</a>
               <a href="#reviews">reviews</a>
               <a href="#contact">register</a>
            </nav>

            <a href="/perpustakaan/login.php" class="link-btn">Log In</a>

            <div id="menu-btn" class="fas fa-bars"></div>

         </div>

      </div>

   </header>

   <!-- header section ends -->

   <!-- home section starts  -->

   <section class="home" id="home">

      <div class="container">

         <div class="d-flex  row min-vh-100 align-items-center justify-content-around">
            <div class="content text-center text-md-left">
               <h3>Sistem Monitoring <span class="green">Magang</span></h3>
               <p>Program praktek kerja magang adalah suatu kegiatan pembelajaran dilapangan yang bertujuan untuk memperkenalkan dan menumbuhkan kemampuan mahasiswa/i dalam dunia kerja nyata.</p>
               <a href="#contact" class="link-btn">Register Now</a>
            </div>
            <div>
               <img src="./images/uin-white.png" width="250">
            </div>
         </div>

      </div>

   </section>

   <!-- home section ends -->

   <!-- about section starts  -->

   <section class="about" id="about">

      <div class="container">

         <div class="row align-items-center">

            <div class="col-md-6 image">
               <img src="images/uinws.jpg" class="w-100 mb-5 mb-md-0" alt="">
            </div>

            <div class="col-md-6 content">
               <span>about us</span>
               <h3>UIN <span class="green h3">Walisongo</span> </h3>
               <p>Universitas Islam Negeri (UIN) Walisongo merupakan sebuah perguruan tinggi negeri agama Islam yang berlokasi di Kota Semarang, Provinsi Jawa Tengah. UIN Walisongo didirikan sejak 6 April 1970 dengan nama awal Institut Agama Islam Negeri (IAIN) Walisongo. Selain itu, kampus ini bertempat di 3 lokasi berbeda, di antaranya Kampus 1 berada di Jl. Walisongo No. 3-5 Semarang, Kampus 2 terletak di Jl. Prof. Hamka, Ngaliyan, Semarang, serta Kampus 3 di Jl. Prof. Hamka, Ngaliyan, Semarang.</p>
               <a href="#contact" class="link-btn">Register Now</a>
            </div>

         </div>

      </div>

   </section>

   <!-- about section ends -->

   <!-- services section starts  -->

   <section class="services" id="services">

      <h1 class="heading">our <span class="green">SERVICES</span></h1>

      <div class="box-container container">

         <div class="box">
            <i class="fa fa-calendar-check-o display-4 green" aria-hidden="true"></i>
            <h3>Absensi</h3>
            <p>Kami menyediakan fitur absensi agar mahasiswa bisa absen, dan dosen bisa menilainya</p>
         </div>

         <div class="box">
            <i class="fa fa-address-book-o display-4 green" aria-hidden="true"></i>
            <h3>Diary</h3>
            <p>Mahasiswa bisa menulis kegiatan sehari- hari mereka mengenai apa saja yang telah dia dapatkan selama magang</p>
         </div>

         <div class="box">
            <i class="fa fa-tasks display-4 green" aria-hidden="true"></i>
            <h3>Daftar Nilai</h3>
            <p>Mahasiswa bisa melihat nilai mereka selama magang.</p>
         </div>

         <div class="box">
            <i class="fa fa-file-code-o display-4 green" aria-hidden="true"></i>
            <h3>Tugas dan Project</h3>
            <p>Mahasiswa bisa melakukan pengumpulan tugas atau project disini</p>
         </div>

      </div>

   </section>

   <!-- services section ends -->

   <!-- reviews section starts  -->

   <section class="reviews" id="reviews">

      <h1 class="heading"> satisfied <span class="green">CLIENTS</span> </h1>

      <div class="box-container container">

         <div class="box">
            <img src="images/pic-1.png" alt="">
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Eos, iure? Nemo est aspernatur voluptatum id, laboriosam asperiores iure omnis alias?</p>
            <div class="stars">
               <i class="fa fa-star" aria-hidden="true"></i>
               <i class="fa fa-star" aria-hidden="true"></i>
               <i class="fa fa-star" aria-hidden="true"></i>
               <i class="fa fa-star" aria-hidden="true"></i>
               <i class="fa fa-star" aria-hidden="true"></i>
            </div>
            <h3>john deo</h3>
            <span>satisfied client</span>
         </div>

         <div class="box">
            <img src="images/pic-2.png" alt="">
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Eos, iure? Nemo est aspernatur voluptatum id, laboriosam asperiores iure omnis alias?</p>
            <div class="stars">
               <i class="fa fa-star" aria-hidden="true"></i>
               <i class="fa fa-star" aria-hidden="true"></i>
               <i class="fa fa-star" aria-hidden="true"></i>
               <i class="fa fa-star" aria-hidden="true"></i>
               <i class="fa fa-star" aria-hidden="true"></i>
            </div>
            <h3>john deo</h3>
            <span>satisfied client</span>
         </div>

         <div class="box">
            <img src="images/pic-3.png" alt="">
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Eos, iure? Nemo est aspernatur voluptatum id, laboriosam asperiores iure omnis alias?</p>
            <div class="stars">
               <i class="fa fa-star" aria-hidden="true"></i>
               <i class="fa fa-star" aria-hidden="true"></i>
               <i class="fa fa-star" aria-hidden="true"></i>
               <i class="fa fa-star" aria-hidden="true"></i>
               <i class="fa fa-star" aria-hidden="true"></i>
            </div>
            <h3>john deo</h3>
            <span>satisfied client</span>
         </div>

      </div>

   </section>

   <!-- reviews section ends -->

   <!-- contact section starts  -->

   <section class="contact" id="contact">

      <h1 class="heading">Register <span class="green">ACCOUNT</span></h1>

      <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
         <?php
         if (isset($message)) {
            foreach ($message as $message) {
               echo '<p class="message">' . $message . '</p>';
            }
         }
         ?>
         <span>your name :</span>
         <input type="text" name="name" placeholder="enter your name" class="box" required>
         <span>your email :</span>
         <input type="email" name="email" placeholder="enter your email" class="box" required>
         <span>your password :</span>
         <input type="password" name="password" placeholder="enter your password" class="box" required>
         <a href="#contact" class="link-btn d-block mx-auto text-center mt-4">Register</a>
         <div id="menu-btn" class="fas fa-bars"></div>
      </form>

   </section>

   <!-- contact section ends -->

   <!-- footer section starts  -->

   <section class="footer">

      <div class="box-container container">

         <div class="box">
            <i class="fa fa-phone display-4 green" aria-hidden="true"></i>
            <h3>phone number</h3>
            <p>+62 82838485868</p>
            <p>+62 82737475767</p>
            <p>+62 82636465666</p>
         </div>

         <div class="box">
            <i class="fa fa-location-arrow display-4 green" aria-hidden="true"></i>
            <h3>our address</h3>
            <p>Jl. Prof. Dr. Hamka No.3 - 5, Tambakaji, Kec. Ngaliyan, Kota Semarang, Jawa Tengah 50185</p>
         </div>

         <div class="box">
            <i class="fa fa-clock-o display-4 green" aria-hidden="true"></i>
            <h3>opening hours</h3>
            <p>24 hours</p>
         </div>

         <div class="box">
            <i class="fa fa-envelope-open display-4 green" aria-hidden="true"></i>
            <h3>email address</h3>
            <p>iqbal19250@gmail.com</p>
            <p>rabbanidwiputra@gmail.com</p>
            <p>yudaez87@gmail.com</p>
         </div>
         <?php
         $page = $_GET['page'];
         $aksi = $_GET['aksi'];


         if ($page == "hal") {
            if ($aksi == "") {
               include "page/hal.php";
            }
         }
         ?>


      </div>

      <div class="credit"> &copy; copyright @ <?php echo date('Y'); ?> by <span>Nameless</span> </div>


   </section>



   <!-- footer section ends -->

   <!-- <script href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/js/all.min.js"></script> -->
</body>

</html>