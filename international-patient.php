<!doctype html>
<html lang="en" x-data="{navbarOpen:false,scrolled:false}">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Vishwa Raj Hospital</title>
     <link rel="icon" type="image/x-icon" href="/VRH/img/chatbot-icon.png">
     <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
<script  defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.14.8/dist/cdn.min.js" ></script>

<link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css"
      integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />

    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css"
    />
     
    <!-- aos link css -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet" />
    <!-- end aos link css -->


   
<!-- <link rel="stylesheet" href="css/font.css"> -->

 <!-- font family css -->
    <link rel="stylesheet" href="css/font.css" />
    <link rel="stylesheet" href="css/customfonts.css" />
    <link rel="stylesheet" href="internaional-patient/style.css" />
    <!-- end font family css -->
    
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" />

  </head>
  <body  
   @scroll.window="window.pageYOffset > 60 ?scrolled = true : scrolled =false">
  <?php  include('internaional-patient/header-1.php') ?>
 <?php include('internaional-patient/hero.php') ?>
 <?php include('internaional-patient/about.php') ?>
   <?php  include('internaional-patient/specialites.php') ?>
     <?php include('internaional-patient/hospital.php') ?>
    <?php include('internaional-patient/video-sec.php') ?>
    
  <?php include('internaional-patient/international-agines.php') ?>
    <?php  include('internaional-patient/faq.php') ?>

   
    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js" integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous"></script> -->
    <script src="https://cdn.jsdelivr.net/npm/flowbite@3.1.2/dist/flowbite.min.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
      AOS.init();
    </script>
     <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

  <!-- ✅ Owl Carousel JS -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>

  <!-- ✅ Init Script -->
  <script>
    $(document).ready(function(){
      $('.owl-carousel').owlCarousel({
        loop: true,
        margin: 15,
        nav: true,
        dots: false,
        responsive: {
          0: { items: 1 },
          768: { items: 2 },
          1024: { items: 2 }
        },
        slideBy: 1
      });
       AOS.refresh(); 
    });
  </script>
  
  </body>
</html>