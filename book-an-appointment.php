<?php include('data/config.php') ?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php echo $link_icon ?>
    <title><?php echo $title ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
      <!-- aos link css -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <!-- end aos link css -->
    <link rel="stylesheet" href="css/style.css">
      <!-- font family css -->
<link rel="stylesheet" href="css/font.css">

<!-- end font family css -->
  </head>

  
  <body style="background-color: rgb(199 235 251)">
   
 <div class="container-fluid p-5 my-5  py-4 rounded-4 " >
    <div class="mx-3">
 <!-- Button Tabs -->
        <div class="d-lg-flex justify-content-between align-items-center " style="font-family:Hero">
            <!-- <div class="border border-secondary rounded d-flex  text-center " > -->
                <div class="      m-0 p-0 " >
                 
 <h2 class="hero fw-bold nunito-sans lh-sm " >Book an Appointment</h2>
              
                       <p class=" text-lg  text-muted lh-base fs-6 m-0 p-0 nunito-sans  ">
       Select a doctor by speciality and preferred location to book your appointment.
        </p>
                </div>
                <div class="text-info  hover-color text-muted fs-6  lh-sm  px-md-3 px-md-3 "
                  >
                   <span class="nunito-sans fw-semibold cutsom-font-size-lg " ><i class="bi bi-calendar"></i> Manage Appointments</span>
                </div>
            <!-- </div> -->
        </div>

        <!-- Subtext -->
     

        <!-- Search Form -->
        <div class="d-flex flex-fill algin-items-center pt-4 pb-2 gap-3 flex-wrap g-2 my-3 px-auto ">
            <!-- <div class="d-grid" style="grid-template-columns: repeat(auto-fit, minmax(200px, 1fr)); gap: 1rem;"> -->
            <!-- Specialty Search -->
            <div class="col-12 col-md-5 col-lg-6 col-xl-7 ">
                <div class="input-group rounded py-1 border border-secondary-subtle bg-white ">
                    <span class="input-group-text bg-white border-0">
                        <i class="bi bi-search"></i>
                    </span>
                    <input type="text" class="form-control form-control-lg py-2 flex-fill fs-6 fa-md-5 border-0 text-muted placeholder-text-muted"
                        placeholder="Find by speciality, doctor, clinic or hospital">
                </div>

                
                
            </div>

            <!-- Location Input -->
            <div class=" col-12 col-md-3 col-lg-3 flex-fill " >
                <div class="input-group bg-white rounded py-1 border border-secondary-subtle ">
                    <span class="input-group-text bg-white border-0">
                        <i class="fa-solid fa-location-dot text-secondary"></i>
                    </span>
                    <input type="text" class="form-control form-control-lg py-2 border-0 fs-6 fs-md-5 flex-fill nunito-sans "
                        placeholder="United Arab Emirates">
                    <span class="input-group-text bg-white border-0 ms-2">
                        <i class="fa-solid fa-location-crosshairs text-secondary"></i>
                    </span>
                </div>
            </div>

            <!-- Button -->
            <div class="col-12 col-md-auto   col-lg-auto  ">
                  <div class="input-group bg-info rounded py-1 btn-info-hover">
                     <!-- <input type="button" value="Find Doctor" class="form-control nunito-sans btn-info-hover form-control-lg py-2 px-4 bg-info  text-white border-0 fs-6 fs-md-5 flex-fill"
                        placeholder="United Arab Emirates"> -->
                        <div class="py-2 px-4 text-center flex-fill ">
                            <span class="nunito-sans  " style="font-size:18px"> Find Doctor</span>
                        </div>
</div>
               
<!-- <div class="btn btn-info text-white btn-lg py-1 rounded btn-info-hover" style="font-size:18px">
    <span class="">Find Doctor</span> -->
</div>
      
            </div>
        </div>
    </div>
       
    </div>
  
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js" integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous"></script>
   
  </body>
</html>