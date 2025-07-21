 <nav 
      class="fixed top-0 w-full   z-[41]   max-w-xl-screen"
   :class="scrolled ? 'bg-white shadow py-2'  : 'bg-transparent py-4'"
    >
      <div
        class="container  flex  items-center justify-between mx-auto p-4 md:p-0"
        
      >
        <!-- logo  -->
        <a
          href="/VRH"
          class="flex items-center space-x-3 rtl:space-x-reverse"
          style="width: 200px"
        >
          <img src="/VRH/img/VRH_logo.png" class="img-fluid" alt="VRH" />
          <!-- <span class="self-center text-2xl font-semibold whitespace-nowrap dark:text-white">Flowbite</span> -->
        </a>
        <!-- end logo -->
        <!-- toogle button -->
        <button
          data-collapse-toggle="navbar-solid-bg"
          type="button"
          class="inline-flex
           items-center
          space-x-3 
          ltr:space-x-reverse
          border-2
            w-10
             h-10
             mr-10
              justify-center
               text-sm
                text-[var(--blue)]
                hover:bg-[var(--blue)]
                 rounded-lg
                  md:hidden
                   hover:text-green-800
                    focus:outline-none"
          aria-controls="navbar-solid-bg"
          aria-expanded="false"
        >
          
          <svg
            class="w-5 h-5"
            aria-hidden="true"
            xmlns="http://www.w3.org/2000/svg"
            fill="none"
            viewBox="0 0 17 14"
          >
            <path
              stroke="currentColor"
              stroke-linecap="round"
              stroke-linejoin="round"
              stroke-width="2"
              d="M1 1h15M1 7h15M1 13h15"
            />
          </svg>
        </button>
        <!-- end toogle -->

        <!-- menus -->
        <div
          class="md:flex
           md:justify-between
            md:items-center
             md:flex-grow-1
              w-full
               md:block
                md:w-auto
                 bg-gray-100
                  md:bg-transparent
                  md:min-h-auto

                   min-h-screen
                    fixed
                     top-0
                      left-0
                       md:relative 
                       gap-12"
          id="navbar-solid-bg"
        >
          <ul
            class="
            md:border-b-0
             border-b-1
              border-slate-300 
              rounded-none
               md:flex md:flex-grow-1 
               md:justify-end 
               flex-col
               
               font-medium 
               rounded-lg 
               md:bg-transparent
                sm:space-x-0 
                md:space-x-12  
                 rtl:space-x-reverse
                  md:flex-row 
                  md:mt-0 
                  md:border-0 
                  md:bg-transparent 
                   dinot-m 
                   md:mb-0
                    pb-5 
                    md:pb-0
                     mb-4 
           
            "
          >
      
            <li class="md:hidden bg-white text-dark-500">
              <div
                class=" flex flex-wrap items-center justify-between mx-auto p-4"
              >
                <a
                  href="#"
                  class="flex items-center space-x-3 rtl:space-x-reverse"
                >
                  <img src="/VRH/img/VRH_logo.png" class="h-12" alt="VRH" />
                  <!-- <span class="self-center text-2xl font-semibold whitespace-nowrap dark:text-white">Flowbite</span> -->
                </a>
                <button
                  data-collapse-toggle="navbar-solid-bg"
                  type="button"
                  class="inline-flex items-center p-2 w-10 h-10  mr-10 justify-center text-sm text-[var(--blue)] rounded-lg md:hidden hover:text-green-800 bg-gray-100 focus:outline-none rounded-full"
                  aria-controls="navbar-solid-bg"
                  aria-expanded="false"
                >
                  <i class="bi bi-x-lg size-6"></i>
                </button>
              </div>
            </li>

            <li>
              <a
               data-collapse-toggle="navbar-solid-bg"
                href="#about"
                class="block py-4 px-3 md:p-0 hover:text-[var(--blue)] rounded-sm md:bg-transparent"
                aria-current="page"
                >About us</a
              >
            </li>
            <li>
              <a
                data-collapse-toggle="navbar-solid-bg"
                href="#hospital"
                class="block py-4 px-3 md:p-0 hover:text-[var(--blue)] rounded-sm md:bg-transparent"
                >Hospitals</a
              >
            </li>
            <li>
              <a
                data-collapse-toggle="navbar-solid-bg"
                href="#Specialities"
                class="block py-4 px-3 md:p-0 hover:text-[var(--blue)] rounded-sm md:bg-transparent"
                >Specialities</a
              >
            </li>
            <li>
              <a
                data-collapse-toggle="navbar-solid-bg"
                href="#faq"
                class="block py-4 px-3 md:p-0 hover:text-[var(--blue)] rounded-sm md:bg-transparent"
                >FAQ</a
              >
            </li>
            <li>
              <div class="flex justify-between items-center px-3">
                <div class="md:hidden">
                  <span class="dinot">Language</span>
                </div>
                <div
                  class="language-switcher ms-4 xl:ms-6 px-1 bg-[var(--blue)] w-[60px] h-[30px] rounded-full text-xs text-white font-mediam flex justify-between items-center"
                >
                  <span
                    class="w-6 h-6 rounded-full justify-center items-center flex cursor-pointer bg-white text-[var(--blue)]"
                    >EN</span
                  >
                  <span
                    class="w-6 h-6 rounded-full justify-center items-center flex cursor-pointer"
                    >AR</span
                  >
                </div>
              </div>
            </li>
          </ul>

          <!-- cotnact menu -->
          <div class="relative   group inline-block">
            <!-- Contact Button -->
            <button
              class="text-[var(--blue)] border-[var(--blue)] border-2 hover:bg-[var(--blue)] hover:text-[var(--white)] focus:outline-none font-medium rounded-lg text-sm px-5 py-2.5 text-center hidden md:inline-flex items-center mb-2"
              type="button"
            >
              <svg
                class="me-3 size-6"
                xmlns="http://www.w3.org/2000/svg"
                fill="none"
                viewBox="0 0 24 24"
                stroke-width="1.5"
                stroke="currentColor"
              >
                <path
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  d="M2.25 6.75c0 8.284 6.716 15 15 15h2.25a2.25 2.25 0 0 0 2.25-2.25v-1.372c0-.516-.351-.966-.852-1.091l-4.423-1.106c-.44-.11-.902.055-1.173.417l-.97 1.293c-.282.376-.769.542-1.21.38a12.035 12.035 0 0 1-7.143-7.143c-.162-.441.004-.928.38-1.21l1.293-.97c.363-.271.527-.734.417-1.173L6.963 3.102a1.125 1.125 0 0 0-1.091-.852H4.5A2.25 2.25 0 0 0 2.25 4.5v2.25Z"
                />
              </svg>
              Contact
            </button>

            <!-- Dropdown -->
            <div
              class="absolute left-[-25px] mt-1 z-10 md:hidden group-hover:block group-focus-within:block bg-transparent md:bg-white w-screen md:w-44 divide-y divide-gray-100 rounded-lg md:shadow-md"
            >
              <ul class="py-2 text-sm text-gray-700 dinot-m">
                <li>
                  <a href="#" class="block px-4 py-2 hover:bg-gray-100">
                    <i
                      class="bi bi-chat-left-dots-fill me-3 size-6 text-[var(--blue)]"
                    ></i>
                    nvh.message
                  </a>
                </li>
                <li>
                  <a href="#" class="block px-4 py-2 hover:bg-gray-100">
                    <i class="bi bi-whatsapp me-3 size-6 text-green-500"></i>
                    +91 8886-606060

                  </a>
                </li>
              </ul>
            </div>
          </div>

          <!-- end contact menu -->
        </div>

        <!-- end menus -->
      </div>
    </nav>

 