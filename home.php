<?php include('data/config.php') ?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="icon" type="image/png" href="/VRH/img/image.png" size="164x164"> 
    <title><?php echo  $title ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css"
        integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <!-- aos link css -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <!-- end aos link css -->
    <link rel="stylesheet" href="css/style.css">


    <!-- font family css -->
    <link rel="stylesheet" href="css/font.css">

    <!-- end font family css -->

    <!-- <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script> -->
</head>

<body>

    <?php include('header.php')?>

    <?php  //include('help-desk.php')?>
    <div class="position-relative border">

        <!-- carouselSlidesOnly -->
        <div id="carouselExampleIndicators " class="carousel slide" data-bs-ride="carousel" data-bs-interval="2000">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
                    aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                    aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                    aria-label="Slide 3"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3"
                    aria-label="Slide 4"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="4"
                    aria-label="Slide 5"></button>


            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">

                    <picture>

                        <source media="(min-width: 768px)" srcset="img/hd-b-1.webp" type="image/webp">


                        <source media="(max-width: 767px)" srcset="img/banner-1.jpeg" type="image/jpeg">


                        <img src="img/banner-1.jpeg" class="img-fluid w-100" alt="Responsive Banner">
                    </picture>

                </div>
                <div class="carousel-item">

                    <picture>

                        <source media="(min-width: 768px)" srcset="img/hd-b-2.webp" type="image/webp">


                        <source media="(max-width: 767px)" srcset="img/banner-2.jpeg" type="image/jpeg">


                        <img src="img/banner-2.jpeg" class="img-fluid w-100" alt="Responsive Banner">
                    </picture>
                </div>
                <div class="carousel-item">

                    <picture>

                        <source media="(min-width: 768px)" srcset="img/hd-b-3.webp" type="image/webp">


                        <source media="(max-width: 767px)" srcset="img/banner-3.jpeg" type="image/jpeg">


                        <img src="img/banner-3.jpeg" class="img-fluid w-100" alt="Responsive Banner">
                    </picture>
                </div>

                <div class="carousel-item">

                    <picture>

                        <source media="(min-width: 768px)" srcset="img/hd-b-4.jpg">

                        <source media="(max-width: 767px)" srcset="img/banner-4.jpeg">


                        <img src="img/banner-4.jpeg" class="img-fluid w-100" alt="Responsive Banner">
                    </picture>
                </div>
                <div class="carousel-item">

                    <picture>

                        <source media="(min-width: 768px)" srcset="img/hd-b-5.webp" type="image/webp">


                        <source media="(max-width: 767px)" srcset="img/banner-5.jpeg" type="image/jpeg">


                        <img src="img/banner-5.jpeg" class="img-fluid w-100" alt="Responsive Banner">
                    </picture>
                </div>

            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>

        </div>
        <!-- end carouselSlidesOnly -->

        <!-- specialization -->


       



        <!-- end specialization -->
    </div>



    <!-- Appointment Section -->
    <?php include('section-Appointment.php') ?>
    <!--end  Appointment Section -->

    <!-- Hospitals & Clinics Section -->
    <div class="container py-5 ">
        <h3 class="text-center pb-4" style="font-family:hero;font-size:32px">Our Hospitals & Clinics</h3>
        <div class="image-container" data-aos="fade-up" data-aos-duration="3000">
            <?php include('section-hospital-clinic.php') ?>
        </div>

    </div>


    <!-- end Hospitals & Clinics Section  -->


    <!-- Counter Section -->
    <?php include('section-counter.php') ?>
    <!-- end Counter Section -->


    <!-- News and Events -->
    <?php include('section-news.php') ?>
    <!-- end new and envents -->

    <?php include('Footer.php')?>


    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <!-- Waypoints -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.min.js"></script>

    <!-- Counter-Up v2 -->
    <script src="https://cdn.jsdelivr.net/npm/jquery.counterup@2.1.0/jquery.counterup.min.js"></script>
    <script src="script.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous">
    </script>
    <!-- aos.js -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
    AOS.init()
    </script>
    <!-- end aos.js -->
</body>

</html>