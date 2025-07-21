<div class="container mt-2 px-xl-0  pt-2">
    <small class="text-muted dinot py-2 mt-2">Home &bull; <span class="text-dark"> Doctors</span> </small>
    <div class="d-flex justify-content-between align-items-center">
        <h1 class="py-4 hero fs-2 ">Our Doctors</h1>
        <button class="btn btn-light btn-lg  fs-6 fs-md-5 border d-block d-lg-none" type="button"
            data-bs-toggle="offcanvas" data-bs-target="#offcanvasScrolling" aria-controls="offcanvasScrolling">
            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="none" stroke="#202124"
                        class="me-2">
                        <path
                            d="M4 10a2 2 0 1 1 4 0 2 2 0 0 1-4 0Zm2-6v4m0 2v8m4-4a2 2 0 1 1 4 0 2 2 0 0 1-4 0Zm2-12v10m0 4v2m4-13a2 2 0 1 1 4 0 2 2 0 0 1-4 0Zm2 1v1m0 4v8" />
                    </svg>
            </button>
    </div>
    <div id="filter-template" class="filter-template d-none">
        <div class="col  p-xl-0 p-lg-0 py-3 " id="city">

            <select class="form-select form-select-lg fs-6 fs-md-5 " name="" id=""
                style="height:50px">
                <option value="">City</option>
                <option value="Abu Dhabi">Abu Dhabi</option>
                <option value="Ajman">Ajman</option>
                <option value="AL Ain">Al Ain</option>
                <option value="Dubai">Dubai</option>
                <option value="Fujarih">Fujairh</option>
                <option value="Ras Al Khaimah">Ras Al Khaimah</option>
                <option value="Sharjah">Sharjah</option>
            </select>

        </div>
        <div class=" py-3  col p-xl-0 p-lg-0" id="hospital">
            <select class="form-select form-select-lg fs-6 fs-md-5 " name="" id=""
                style="height:50px">
                <option value="">Hospital</option>
                <option value=">NMC Marina Medical Center,Dubai">NMC Marina Medical Center,Dubai </option>
                <option value="NMC  Medical Center Jebel,Ali Duba">NMC Medical Center Jebel,Ali Dubai</option>
                <option value="NMC  Royal Hospital Khalifa City,Abu Dhabi">NMC Royal Hospital Khalifa City,Abu Dhabi
                </option>
                <option value="NMC  Royal Hospital DIP,Dhabi">NMC Royal Hospital DIP,Dhabi</option>
                <option value="NMC  Royal Hospital Khalifa">NMC Royal Hospital Khalifa</option>

            </select>
        </div>
        <div class=" col py-3 p-xl-0 p-lg-0" id="specially">

            <select class="form-select form-select-lg fs-6 fs-md-5  " name="" id=""
                style="height:50px">
                <option value="">Specially</option>
                <option value="Aesthetic, Reconstructive and Plastic Surgery">Aesthetic, Reconstructive and Plastic
                    Surgery</option>
                <option value="Allergy and Immunology">Allergy and Immunology</option>
                <option value="Anaesthesiology">Anaesthesiology</option>
            </select>
        </div>
    </div>

    <div class="mb-3">
        <div class="offcanvas offcanvas-end " data-bs-scroll="true" data-bs-backdrop="false" tabindex="-1"
            id="offcanvasScrolling" aria-labelledby="offcanvasScrollingLabel">
            <div class="offcanvas-header">
                <h5 class="offcanvas-title" id="offcanvasScrollingLabel"></h5>
                <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body">

                <div id="offcanvas-mobile" class=""></div>

                <!-- gender -->
                <div>
                    <div class="d-flex justify-content-between align-items-center border-bottom py-2 mb-2">
                        <h3 class="fs-5 hero ">Gender</h3>
                        <a class="btn btn-transparent border-0" data-bs-toggle="collapse" href="#multiCollapseExample1"
                            role="button" aria-expanded="false" aria-controls="multiCollapseExample1">
                            <span class="toogle-plus-minus-icon"></span>
                        </a>
                    </div>

                </div>
                <div class="row">
                    <div class="col">
                        <div class="collapse multi-collapse" id="multiCollapseExample1">
                            <div class="card card-body border-0 fs-6 dinot">
                                <div><input type="checkbox" class="me-2"><span>Male</span></div>
                                <div><input type="checkbox" class="me-2"><span>Female</span></div>
                            </div>
                        </div>
                    </div>
                </div>



                <!-- end gender -->
                <!-- languages -->
                <div>
                    <div class="d-flex justify-content-between align-items-center border-bottom py-2 mb-2">
                        <h3 class="fs-5 hero">Languages</h3>
                        <a class="btn btn-transparent border-0" data-bs-toggle="collapse" href="#multiCollapseExample2"
                            role="button" aria-expanded="false" aria-controls="multiCollapseExample2">
                            <span class="toogle-plus-minus-icon"></span> </a>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="collapse multi-collapse" id="multiCollapseExample2">
                                <div class="card card-body border-0 fs-6 dinot">

                                    <div>
                                        <div class="input-group border rounded mb-4">
                                            <span class="input-group-text bg-white border-0">
                                                <i class="bi bi-search"></i>
                                            </span>
                                            <input type="text"
                                                class="form-control py-2 flex-fill fs-6 fa-md-5 border-0 text-muted "
                                                placeholder="Language">
                                        </div>
                                    </div>

                                    <div><input type="checkbox" class="me-2"><span>Hindi</span></div>
                                    <div><input type="checkbox" class="me-2"><span>English</span></div>
                                    <div><input type="checkbox" class="me-2"><span>Tamil</span></div>
                                    <div><input type="checkbox" class="me-2"><span>Urdu</span></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end languages -->
                <!-- Nationality -->
                <div>
                    <div class="d-flex justify-content-between align-items-center border-bottom py-2 mb-2">
                        <h3 class="hero fs-5 ">Nationality</h3>
                        <a class="btn btn-transparent border-0" data-bs-toggle="collapse" href="#multiCollapseExample3"
                            role="button" aria-expanded="false" aria-controls="multiCollapseExample2">
                            <span class="toogle-plus-minus-icon"></span> </a>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="collapse multi-collapse" id="multiCollapseExample3">
                                <div class="card card-body border-0 fs-6 dinot">

                                    <div>
                                        <div class="input-group border rounded mb-4">
                                            <span class="input-group-text bg-white border-0">
                                                <i class="bi bi-search"></i>
                                            </span>
                                            <input type="text"
                                                class="form-control py-2 flex-fill fs-6 fa-md-5 border-0 text-muted "
                                                placeholder="Nationality">
                                        </div>
                                    </div>
                                    <div><input type="checkbox" class="me-2"><span>Indian</span></div>
                                    <div><input type="checkbox" class="me-2"><span>Egyptian</span></div>
                                    <div><input type="checkbox" class="me-2"><span>Emirati</span></div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end Nantionality -->
            </div>
        </div>

        <div class=" row gap-2   m-0 p-0 ">
            <div id="desktop-mode-filter" class="col-xl-8   m-0 p-0 row gap-2"></div>
            
            <div class="m-0 p-0  col-xl-auto  col-lg-8  flex-grow-1">
                <div class="input-group rounded m-0 border  bg-white ">
                    <span class="input-group-text bg-white border-0 ">
                        <i class="bi bi-search"></i>
                    </span>
                    <input type="text" class="form-control form-control-lg  p-0 border-0 dinot"
                        placeHolder="Keyword Search" style="height:50px;font-size:0.9375rem !important">
                </div>

            </div>

        <div class=" mb-4  d-none d-lg-block   col-xl-auto col-lg-3 p-0">
                <button class="btn btn-light w-100 btn-lg fs-6 fs-md-5 border p-2 dinot" style="height:50px" type="button"
                    data-bs-toggle="offcanvas" data-bs-target="#offcanvasScrolling" aria-controls="offcanvasScrolling">
                    <!-- <i  class="fa-solid fa-sliders me-2"></i>  -->
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="none" stroke="#202124"
                        class="me-2">
                        <path
                            d="M4 10a2 2 0 1 1 4 0 2 2 0 0 1-4 0Zm2-6v4m0 2v8m4-4a2 2 0 1 1 4 0 2 2 0 0 1-4 0Zm2-12v10m0 4v2m4-13a2 2 0 1 1 4 0 2 2 0 0 1-4 0Zm2 1v1m0 4v8" />
                    </svg>
                    <span class="pe-2 small " style="color:#606062;font-size:16px">More Filters</span>
                </button>

            </div>



        </div>



    </div>
</div>

<div class="bg-light py-5 border-bottom">
    <div class="container">
        <h4 class="text-muted py-4 fs-5   hero">Found 8 Doctors</h4>

        <div class="d-grid" style="grid-template-columns: repeat(auto-fit, minmax(250px, 1fr)); gap: 1rem;">
            <!-- cards -->

            <!-- card1 -->
            <div class="card border-0 " data-aos="fade-up">
                <div class="card-header bg-white border-0">
                    <img src="img/doc-1.png" alt="" class="card-img-top">
                </div>
                <div class="card-body d-flex flex-column">
                    <h6 class="card-title text-info hero fs-5">Dr Mah Sheena K Mohammed</h6>
                    <p class="card-text text-muted dinot-m"> <small>Pathology</small></p>
                    <p class="card-text text-muted dinot"> <i class="fa-solid fa-location-dot text-info "></i> NMC Royal
                        Hospital Sharjah, Sharjah</p>
                    <a href="#" class="btn btn-info w-100 mt-auto dinot text-white btn-info-hover">Book on Appointment</a>
                </div>
            </div>
            <!-- end card1 -->

            <!-- card2 -->
            <div class="card border-0  " data-aos="fade-up">
                <div class="card-header bg-white border-0">
                    <img src="img/doc-2.jpeg" alt="" class="card-img-top">
                </div>
                <div class="card-body d-flex flex-column">
                    <h6 class="card-title text-info  hero fs-5">Dr Aaia Mohamed Taha Salih</h6>
                    <p class="card-text text-muted dinot-m"> <small>General Medicine Primary Care</small></p>
                    <p class="card-text text-muted dinot"> <i class="fa-solid fa-location-dot text-info "></i> NMC
                        Specialty
                        Hospital, Abu Dhabi </p>
                    <a href="#" class="btn btn-info w-100 mt-auto dinot text-white  btn-info-hover">Book on Appointment</a>
                </div>
            </div>
            <!--end card2 -->

            <!-- card3 -->
            <div class="card border-0  " data-aos="fade-up">
                <div class="card-header bg-white border-0">
                    <img src="img/doc-3.jpeg" alt="" class="card-img-top">
                </div>
                <div class="card-body d-flex flex-column">
                    <h6 class="card-title text-info  hero fs-5">Dr Aamir Yassin Aamir Yassin</h6>
                    <p class="card-text dinot-m text-muted"><small>Paediatrics Pulmonology</small></p>
                    <p class="card-text text-muted dinot "> <i class="fa-solid fa-location-dot text-info "></i> NMC
                        Royal
                        Hospital, Khalifa City </p>
                    <a href="#" class="btn btn-info w-100 mt-auto dinot text-white  btn-info-hover">Book on Appointment</a>
                </div>
            </div>
            <!-- end card3 -->

            <!-- card4 -->
            <div class="card border-0 " data-aos="fade-up">
                <div class="card-header bg-white border-0">
                    <img src="img/doc-4.jpeg" alt="" class="card-img-top">
                </div>
                <div class="card-body d-flex flex-column">
                    <h6 class="card-title text-info  hero fs-5">Dr Aarti Desai</h6>
                    <p class="card-text dinot-m text-muted"><small>Dentistry</small></p>
                    <p class="card-text text-muted dinot"> <i class="fa-solid fa-location-dot text-info "></i> NMC Royal
                        Hospital, DIP </p>
                    <a href="#" class="btn btn-info w-100 mt-auto dinot text-white  btn-info-hover">Book on Appointment</a>
                </div>
            </div>
            <!-- end card4 -->

            <!--  card5 -->
            <div class="card border-0 " data-aos="fade-up">
                <div class="card-header bg-white border-0">
                    <img src="img/doc-5.jpeg" alt="" class="card-img-top">
                </div>
                <div class="card-body d-flex flex-column">
                    <h6 class="card-title text-info  hero fs-5">Dr Abdel Razaq Ahmad Alyasin</h6>
                    <p class="card-text dinot-m text-muted"><small>Paediatrics Endocrinology, Diabetology and Metabolic
                            Disorders</small></p>
                    <p class="card-text text-muted dinot"> <i class="fa-solid fa-location-dot text-info "></i> NMC Royal
                        Hospital, Khalifa City </p>
                    <a href="#" class="btn btn-info w-100 mt-auto dinot text-white  btn-info-hover">Book on Appointment</a>
                </div>
            </div>
            <!--  end card5 -->


            <!--   card6 -->
            <div class="card border-0 " data-aos="fade-up">
                <div class="card-header bg-white border-0">
                    <img src="img/doc-6.png" alt="" class="card-img-top">
                </div>
                <div class="card-body d-flex flex-column">
                    <h6 class="card-title text-info  hero fs-5">Dr Abdelhameed Mostafa Elmesery</h6>
                    <p class="card-text dinot-m text-muted"><small>Paediatrics</small></p>
                    <p class="card-text text-muted dinot"> <i class="fa-solid fa-location-dot text-info "></i>NMC Royal
                        Hospital, Khalifa City </p>
                    <a href="#" class="btn btn-info w-100 mt-auto dinot text-white  btn-info-hover">Book on Appointment</a>
                </div>
            </div>
            <!--  end card6 -->

            <!--   card7 -->
            <div class="card border-0 " data-aos="fade-up">
                <div class="card-header bg-white border-0">
                    <img src="img/doc-7.png" alt="" class="card-img-top">
                </div>
                <div class="card-body d-flex flex-column">
                    <h6 class="card-title text-info  hero fs-5">Dr Abdul Matheen Ganguli</h6>
                    <p class="card-text text-muted"><small>General Medicine</small></p>
                    <p class="card-text text-muted"> <i class="fa-solid fa-location-dot text-info "></i>NMC Medical
                        Centre, Shahba </p>
                    <a href="#" class="btn btn-info w-100 mt-auto dinot text-white  btn-info-hover">Book on Appointment</a>
                </div>
            </div>
            <!--  end card 7 -->

            <!--   card8 -->
            <div class="card border-0 " data-aos="fade-up">
                <div class="card-header bg-white border-0">
                    <img src="img/doc-8.png" alt="" class="card-img-top">
                </div>
                <div class="card-body d-flex flex-column">
                    <h6 class="card-title text-info  hero fs-5">Dr Abdul Mujeer</h6>
                    <p class="card-text text-muted"><small>Cardiac Sciences</small></p>
                    <p class="card-text text-muted"> <i class="fa-solid fa-location-dot text-info "></i>NMC Specialty
                        Hospital, Al Ain</p>
                    <a href="#" class="btn btn-info w-100 mt-auto dinot text-white  btn-info-hover">Book on Appointment</a>
                </div>
                <!--  end card8 -->
            </div>

        </div>
        <!-- end cards -->

    </div>

    <script>
    function updateScreenInfo() {
        const width = window.innerWidth;
        const filterTemplate = document.getElementById('filter-template').innerHTML;
        const containerText = document.getElementById('desktop-mode-filter').innerHTML;
        console.log(containerText)
        const container = document.getElementById('desktop-mode-filter');

        const Mobilecontainer = document.getElementById('offcanvas-mobile');

        if (width <= 992) {
            // Desktop screen - show filter

            Mobilecontainer.innerHTML = filterTemplate;
            container.innerHTML = ''
            console.log(container)
        } else {
            // Mobile screen - remove filter
            Mobilecontainer.innerHTML = '';
            container.innerHTML = filterTemplate;
        }
    }

    // Run on page load and screen resize
    window.addEventListener('load', updateScreenInfo);
    window.addEventListener('resize', updateScreenInfo);
    </script>


    <!-- Repeat for more doctors -->
</div>

</div>