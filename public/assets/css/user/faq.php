<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Sports Area</title>
    <link rel="stylesheet" href="assets/css/user/style.css">
    <link rel="stylesheet" href="assets/css/user/styles.css">
    <link rel="stylesheet" href="assets/css/user/font-face.css">
    <link href="assets/css/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <!-- <link rel="stylesheet" href="assets/css/flickity.css" type="text/css"> -->
    <link href="assets/css/user/bootstrap.min.css" rel="stylesheet" type="text/css">

    <style media="screen">

    </style>
  </head>
 <body >
    <div class="header-2">
      <div class="menu-space">

      </div>
      <div class="offset">

      </div>

        <!--    primary menu-->
       <div class="nav">
           <div id="logo">
               <a href="index.php">
                   <img src="assets/img/sa.png">
               </a>
           </div>
           <nav class="navbar">
               <ul>
                    <li>
                        <a href="index.php">
                          Beranda
                        </a>
                   </li>
                   <li>
                       <a href="cara-pesan.php">
                           Cara Pesan
                        </a>
                   </li>
                    <li>
                        <a href="blog.php">
                           Blog
                        </a>
                   </li>
                    <li>
                        <a href="faq.php">
                            FAQ
                        </a>
                   </li>
                   <li>
                     <a class="register" href="login.php">Login</a>
                   </li>
                    <li><a class="tes" href="javascript:void(0)">
                          ☰
                        </a></li>
               </ul>
           </nav>
       </div>
       <div class="head-text-2">
         <h1>Frequently Asked Question</h1>
        <h3>Apa sih yang sering mereka tanyakan?</h3>

       </div>
     </div>

     <!--isi-->
     <div class="containers">
     <div class="accordion">
       <div class="accordion-item">
         <a>Apa itu SportsArea?</a>
         <div class="content">
           <p>SportsArea adalah aplikasi pemesanan tempat olahraga dan penyedia berita seputar olahraga</p>
         </div>
       </div>
       <div class="accordion-item">
         <a>Why this is so complicated?</a>
         <div class="content">
           <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Elementum sagittis vitae et leo duis ut. Ut tortor pretium viverra suspendisse potenti.</p>
         </div>
       </div>
     </div>
   </div>


     <!--end-->
     <!-- Footer -->
     <div class="footer4">
         <div class="box4">

         <ul>
             <li>
               <a href="#">TENTANG KAMI</a>
             </li>
             <li>
               <a href="#">
                 Tentang
               </a>
             </li>
              <li>
                <a href="#">
                 Kebijakan dan Privasi
               </a>
             </li>
              <li>
                <a href="#">
                 Syarat dan Ketentuan
                 </a>
             </li>
             <li>
               <a href="#">
                 Login
                </a>
            </li>
         </ul>

         <ul>
             <li>
               <a href="#">KONTAK KAMI</a>
             </li>
             <li>
               <a href="#">
                 twitter.com/sportsarea
               </a>
             </li>
              <li>
                <a href="#">
                 instagram.com/sportsarea
               </a>
             </li>

         </ul>
             <ul>
             <li>
                 SPORTS AREA
             </li>
             <li>
                 Website penyedia berita dan pemesanan tempat olahraga
             </li>
         </ul>
         </div>

     </div>
     <!-- Copyright -->
     <div class="copy4">
         Copyright © 2017 All Right Reserved
       </div>
     </body>
    <!-- <script src="assets/js/flickity-docs.min.js"></script> -->
        <script src="assets/js/jquery.js"></script>
        <script type="text/javascript">
        $(document).ready(function() {
$('.accordion a').click(function(){
  $(this).toggleClass('active');
  $(this).next('.content').slideToggle(400);
 });
});
        </script>
   </html>
