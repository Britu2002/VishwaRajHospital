<header class=" bg-white  border-bottom">



    <nav class="navbar navbar-expand-lg bg-body-light  ">
        <div class="container-fluid m-0 p-0">


            <a class="navbar-brand m-0 p-0 " href="home.php">
                <div class="">
                    <img src="img/logo_svg.svg" alt="Logo" style="height:80px">

                </div>
            </a>


            <div class="d-flex justify-content-center align-items-center ">

                <i class="fas fa-search  d-block d-lg-none  "></i>


                <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false"
                    aria-label="Toggle navigation"
                     onclick="hideAllSections()"
                    >
                    <span class="navbar-toggler-icon "></span>
<!-- <i class="fas fa-cross    "></i> -->
                </button>
                <!-- <button class="btn btn-primary d-block d-lg-none" type="button" data-bs-toggle="offcanvas"
                    data-bs-target="#offcanvasRight" aria-controls="offcanvasRight"> <span
                        class="navbar-toggler-icon "></span></button> -->
            </div>

            <div class="collapse navbar-collapse " id="navbarNavDropdown">
                <ul class="navbar-nav fw-normal     align-items-lg-center flex-grow-1 gap-2  p-3"
                    style="font-size:14px;line-height:20px;font-family:DINOT-m">
                    <li class="nav-item   text-info  flex-fill">
                        <a class="nav-link active d-flex align-items-center justify-content-between" aria-current="page"
                            href="book-an-appointment.php">
                            <div class="d-flex align-items-center">
                                <div class="icon-bg">
                                    <i class="fa-regular fa-calendar-minus  "></i><i class="fa fa-heart heart"
                                        aria-hidden="true"></i>
                                </div> <span class="text-body">Book an Appointment</span>
                            </div>
                            <div class="d-block d-lg-none me-3">
                                <svg width="7" height="12" viewBox="0 0 7 12" fill="none"
                                    xmlns="http://www.w3.org/2000/svg" class="lg:hidden rtl:rotate-180">
                                    <path
                                        d="M1.26751 1.45482e-06L7 5.625L1.26752 11.25L0.249999 10.2516L4.96497 5.625L0.249998 0.998439L1.26751 1.45482e-06Z"
                                        fill="#202124"></path>
                                </svg>
                            </div>
                        </a>
                    </li>
                    <li class="nav-item   flex-fill ">

                        <a class="nav-link d-flex align-items-center justify-content-between " href="Doctor.php">
                            <div class="d-flex align-items-center">
                                <div class="icon-bg"><i class="fa-solid fa-user-doctor"></i><i class="fa fa-heart heart"
                                        aria-hidden="true"></i></div>
                                <span class="text-body">Doctors</span>
                            </div>
                            <div class="d-block d-lg-none me-3">
                                <svg width="7" height="12" viewBox="0 0 7 12" fill="none"
                                    xmlns="http://www.w3.org/2000/svg" class="lg:hidden rtl:rotate-180">
                                    <path
                                        d="M1.26751 1.45482e-06L7 5.625L1.26752 11.25L0.249999 10.2516L4.96497 5.625L0.249998 0.998439L1.26751 1.45482e-06Z"
                                        fill="#202124"></path>
                                </svg>
                            </div>
                        </a>
                    </li>
                    <li class="nav-item  flex-fill ">

                        <a class="nav-link d-flex align-items-center justify-content-between " href="#"
                            onclick="showSection('section-1')">
                            <div class="d-flex align-items-center">
                                <div class="icon-bg"><i class="bi bi-building"></i> <i class="fa fa-heart heart"
                                        aria-hidden="true"></i></div>

                                <span class="text-body">Hospitals & Clinics</span>
                            </div class="d-flex align-items-center">

                            <div class="d-block d-lg-none me-3">
                                <svg width="7" height="12" viewBox="0 0 7 12" fill="none"
                                    xmlns="http://www.w3.org/2000/svg" class="lg:hidden rtl:rotate-180">
                                    <path
                                        d="M1.26751 1.45482e-06L7 5.625L1.26752 11.25L0.249999 10.2516L4.96497 5.625L0.249998 0.998439L1.26751 1.45482e-06Z"
                                        fill="#202124"></path>
                                </svg>
                            </div>
                        </a>
                    </li>

                    <li class="nav-item  flex-fill">

                        <a class="nav-link d-flex align-items-center  justify-content-between" href="#"
                            onclick="showSection('section-2')" style="display:none">
                            <div class="d-flex align-items-center">
                                <div class="icon-bg"><i class="fa fa-stethoscope" aria-hidden="true"></i> <i
                                        class="fa fa-heart heart" aria-hidden="true"></i></div>



                                <span class="text-body">Specialties</span>
                            </div>
                            <div class="d-block d-lg-none me-3">
                                <svg width="7" height="12" viewBox="0 0 7 12" fill="none"
                                    xmlns="http://www.w3.org/2000/svg" class="lg:hidden rtl:rotate-180">
                                    <path
                                        d="M1.26751 1.45482e-06L7 5.625L1.26752 11.25L0.249999 10.2516L4.96497 5.625L0.249998 0.998439L1.26751 1.45482e-06Z"
                                        fill="#202124"></path>
                                </svg>
                            </div>
                        </a>
                    </li>

                    <li class="nav-item   flex-fill ">

                        <a class="nav-link d-flex align-items-center justify-content-between " href="international-patient.php">
                            <div class="d-flex align-items-center">
                                <div class="icon-bg"><i class="bi bi-globe"></i><i class="fa fa-heart heart"
                                        aria-hidden="true"></i></div>
                                <span class="text-body">International Patients</span>
                            </div>

                            <div class="d-block d-lg-none me-3">
                                <svg width="7" height="12" viewBox="0 0 7 12" fill="none"
                                    xmlns="http://www.w3.org/2000/svg" class="lg:hidden rtl:rotate-180">
                                    <path
                                        d="M1.26751 1.45482e-06L7 5.625L1.26752 11.25L0.249999 10.2516L4.96497 5.625L0.249998 0.998439L1.26751 1.45482e-06Z"
                                        fill="#202124"></path>
                                </svg>
                            </div>
                        </a>
                    </li>

                    <li class="nav-item   flex-fill">

                        <a class="nav-link d-flex align-items-between justify-content-between " href="#"
                            onclick="showSection('section-3')"  >
                            <div class="d-flex align-items-center">
                                <div class="icon-bg"><i class="bi bi-flower2"></i><i class="fa fa-heart heart"
                                        aria-hidden="true"></i></div>
                                <span class="text-body">About Us</span>
                            </div>

                            <div class="d-block d-lg-none me-3">
                                <svg width="7" height="12" viewBox="0 0 7 12" fill="none"
                                    xmlns="http://www.w3.org/2000/svg" class="lg:hidden rtl:rotate-180">
                                    <path
                                        d="M1.26751 1.45482e-06L7 5.625L1.26752 11.25L0.249999 10.2516L4.96497 5.625L0.249998 0.998439L1.26751 1.45482e-06Z"
                                        fill="#202124"></path>
                                </svg>
                            </div>

                        </a>
                    </li>


                    <li class="nav-item  flex-fill d-none d-lg-block ">

                        <a class="nav-link d-flex align-items-center justify-content-between" href="#">
                            <div class="icon-bg">
                                <i class="fa fa-search" aria-hidden="true"></i>
                            </div>
                        </a>
                    </li>

                    <li class="nav-item  flex-fill  d-flex justify-content-between align-items-center">
                        <a class="nav-link d-flex align-items-center justify-content-between m-0 p-0 flex-grow-1 "
                            href="#">
                            <div class="icon-bg d-flex justify-content-between align-items-center flex-grow-1">
                                <div class=" fs-6 d-lg-none dinot"><span>Language</span></div>
                                <div
                                    class="toogle nav-item btn-info-hover cursor-pointer  bg-info rounded-pill px-2 py-1 d-flex justify-content-between gap-1 align-items-center ">

                                    <small class="rounded-circle bg-white text-info p-1 me-1">EN</small>
                                    <small class="text-white ">AR</small>
                                </div>
                            </div>
                        </a>

                    </li>
                </ul>
            </div>


        </div>
    </nav>
</header>

<?php include('aboutus.php') ?>
 <?php include('section-Specialties.php') ?>
  <div id="section-1" class="border-0  position-absolute top-0 w-100 z-3 m-0 p-0 my-section" style="display:none">
            <div class="position-sticky  border-0 bg-white animate-bottom-to-top" style="height:auto;z-index:60;">
                <div
                    class="d-block  dinot-m px-4 py-4 w-100 mb-4 d-lg-none d-flex justify-content-between align-items-center border-bottom border-start-0 border-end-0 border-top-0 bg-light">
                    <h5 onclick="hideAllSections()"><i class="bi bi-arrow-left"></i> back to menu</h5>
                    <button type="button" class="btn-close" aria-label="Close" onclick="hideAllSections()"></button>
                </div>
                <div class="container py-5 ">
                    <h3 class="text-center pb-4" style="font-family:hero;font-size:32px">select Hospitals & Clinics</h3>

                    <div class="image-container ">
                        <div class="image-wrapper" style="width:170px;height:250px">
                            <img src="img/hc-1.png" class="zoom-img" alt="Image 1">
                        </div>
                        <div class="image-wrapper" style="width:170px;height:250px">
                            <img src="img/hc-2.png" class="zoom-img" alt="Image 2">
                        </div>
                        <div class="image-wrapper" style="width:170px;height:250px">
                            <img src="img/hc-3.png" class="zoom-img" alt="Image 3">
                        </div>

                    </div>

                </div>


            </div>
            <div class="position-fixed  start-0 w-100 bg-black bg-opacity-75 " style="z-index:40;height:100vh;top:120px"
                onclick="hideAllSections()"></div>

        </div>