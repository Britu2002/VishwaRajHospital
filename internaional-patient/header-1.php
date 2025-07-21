  
        <header class="fixed 
       
        top-0
         w-full
          duration-500
         py-2
      
            z-[41]
           " :class="scrolled ? ' bg-white ' : 'bg-transparent'">
            <div class="md:container
        
         md:mx-auto grid grid-cols-12 items-center">
                <!-- logo  -->
                <div class="md:col-span-3 col-span-6 ">
                    <a href="/VRH/home.php" style="cursor: pointer">
                        <img src="/VRH/img/VRH_logo.png" alt="" class="h-[60px] w-[200px]" />

                    </a>
                </div>
                <!-- end logo -->

                <!-- toogle button -->
                <div
                    class="  md:hidden block   col-span-6    text-right inline-flex    flex justify-end  items-center z-[41]  ">
                    <i class="bi bi-list text-[24px] h-12 mx-3  text-[var(--blue)]"
                        @click="navbarOpen =! navbarOpen"></i>
                </div>
                <!-- end toogle -->

                <!-- menu  -->
                <div class="col-span-12 md:col-span-9      md:block   md:bg-transparent   md:static  md:w-auto   md:shadow-none"
                    :class="navbarOpen ? 'fixed top-0 left-0 w-full  z-[99] block bg-white shadow-md' : 'hidden'">

                    <ul class="
                  
                    flex  md:flex-row   md:justify-end md:items-center   
                
                    md:gap-x-8
                    lg:gap-x-12
                    xl:gap-x-14
                    2xl:gap-x-16

                    
                    lg:gap-x-8xl:gap-x-15 md:h-auto   md:bg-transparent flex-col
                      gap-y-6
                    
                     

                        font-medium
                         dinot-m 
                          w-full
                          h-screen
                           bg-gray-50">
                        <li class="md:hidden  bg-white py-4">
                            <div class="bg-white  grid grid-cols-12 ">


                                <div class="col-span-6 ">
                                    <img src="/VRH/img/logo_svg.svg" alt="" class="h-[60px] w-[200px]" />

                                </div>
                                <div @click="navbarOpen =! navbarOpen"
                                    class="col-span-6   flex justify-end items-center">
                                    <i class="bi bi-x-circle text-[24px] h-12 mx-3 md:hidden text-[var(--blue)]"></i>
                                </div>
                            </div>
                        </li>

                        <li class="px-4 md:px-0">
                            <a href="#about" class="hover:text-[var(--blue)]" @click="navbarOpen =! navbarOpen">About
                                us</a>
                        </li>

                        <li class="px-4 md:px-0">
                            <a href="#hospital" class="hover:text-[var(--blue)]" @click="navbarOpen =! navbarOpen">Hospital</a>
                        </li>
                        <li class="px-4 md:px-0">
                            <a href="#Specialities" class="hover:text-[var(--blue)]"
                                @click="navbarOpen =! navbarOpen">Specialites</a>
                        </li>

                        <li class="px-4 md:px-0">
                            <a href="#faq" class="hover:text-[var(--blue)]" @click="navbarOpen =! navbarOpen">FAQ</a>
                        </li>
                        <li class="px-4 md:px-0">
                            <div class="flex justify-between items-center">
                                <div class="md:hidden">
                                    <span class="dinot">Language</span>
                                </div>
                                <div
                                    class="language-switcher ms-4 xl:ms-6 px-1 bg-[var(--blue)] w-[60px] h-[30px] rounded-full text-xs text-white font-mediam flex justify-between items-center">
                                    <span
                                        class="w-6 h-6 rounded-full justify-center items-center flex cursor-pointer bg-white text-[var(--blue)]">EN</span>
                                    <span
                                        class="w-6 h-6 rounded-full justify-center items-center flex cursor-pointer">AR</span>
                                </div>
                            </div>
                        </li>



                        <li class="px-4 md:px-0  border-t-1 border-slate-300 ">
                            <div class="relative group   ">
                                <button class=" md:block   hidden relative
                 group 
                 transition-all
                  duration-700
                   text-md
                    text-center 
                    flex justify-center items-center
                     px-6
                      rounded-md
                       w-full
                        leading-tight
                         overflow-hidden
                          isolate
                           h-[42px]
                            border-2
                             border-[var(--blue)]
                              text-md font-medium 
                              text-[var(--blue)]
                               hover:bg-[var(--blue)] 
                               hover:text-white 
                               md:inline-flex 
                               w-auto 
                               lg:px-7 
                               md:px-2
                                !py-0 
                                ">
                                    <span class="relative z-30 mr-2">
                                        <i class="bi bi-telephone"></i>
                                    </span>
                                    <span class="relative z-30">Contact</span>
                                </button>
                                <div class="
                md:bg-white
                 md:px-4
                  py-2
                   md:arrow-before
                    md:rounded 
                    md:absolute
                     md:ltr:right-0
                      md:rtl:left-0 
                      md:opacity-0 
                      md:transition-all
                       md:group-hover:opacity-100
                        md:top-14 before:-top-2 
                        md:before:left-1/2 
                        md:before:-ml-1 
                        md:before:w-0 
                        md:before:h-0
                         md:before:block 
                         md:before:absolute">
                                    <a href="#" class="font-medium flex items-center mb-2"><span
                                            class="w-5 ltr:mr-2 rtl:ml-2"><i
                                                class="bi bi-envelope-fill text-[var(--blue)]"></i>
                                        </span><span>info@vrhpune.com</span></a>
                                    <a href="#" target="_blank" class="font-medium flex items-center"
                                        style="direction: ltr"><span class="w-5 ltr:mr-2 rtl:ml-2"><i
                                                class="bi bi-whatsapp text-green-500"></i></span>+971 502268149</a>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>


            </div>
        </header>
   