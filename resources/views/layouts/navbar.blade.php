<nav id="navbar"
    class="fixed w-full z-[80] mx-auto bg-[#03203E]/50 backdrop-blur-sm text-white items-center py-2 max-xl:px-2 transition-all duration-100 ">
    <div class="max-w-[1536px] m-auto flex justify-between gap-2 items-center">
        <div class="flex justify-start sm:text-xl text-base font-light sm:p-4 lg:hidden">
            <a href="/">LOGO HERE</a>
        </div>

        <button data-collapse-toggle="navbar-dropdown" type="button"
            class="mobile-menu-button inline-flex items-center py-2 w-12 h-10 justify-center lg:hidden"
            aria-controls="navbar-dropdown" aria-expanded="false">
            <span class="sr-only">Open main menu</span>
            <svg class="ham hamRotate ham1" viewBox="0 0 100 100" width="80"
                onclick="this.classList.toggle('active')">
                <path class="line top"
                    d="m 30,33 h 40 c 0,0 9.044436,-0.654587 9.044436,-8.508902 0,-7.854315 -8.024349,-11.958003 -14.89975,-10.85914 -6.875401,1.098863 -13.637059,4.171617 -13.637059,16.368042 v 40" />
                <path class="line middle" d="m 30,50 h 40" />
                <path class="line bottom"
                    d="m 30,67 h 40 c 12.796276,0 15.357889,-11.717785 15.357889,-26.851538 0,-15.133752 -4.786586,-27.274118 -16.667516,-27.274118 -11.88093,0 -18.499247,6.994427 -18.435284,17.125656 l 0.252538,40" />
            </svg>
        </button>


        {{-- MENU --}}
        <div
            class="flex max-w-7xl m-auto w-full mx-auto justify-between xl:text-lg text-sm items-center max-lg:hidden font-[300] ">
            <div class="w-full flex flex-row justify-between">
                <a href="/" class="flex justify-center min-w-[100px] basis-24">
                    <div id="text_menu" style="text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.7);"
                        class="{{ request()->is('/') ? 'border-b-2 border-white' : '' }} relative text-white hover:text-white cursor-pointer transition-all ease-in-out before:transition-[width] before:ease-in-out before:duration-700 before:absolute before:bg-white  before:origin-center before:h-[2px] before:w-0 hover:before:w-[50%] before:bottom-0 before:left-[50%] after:transition-[width] after:ease-in-out after:duration-700 after:absolute after:bg-white after:origin-center after:h-[2px] after:w-0 hover:after:w-[50%] after:bottom-0 after:right-[50%]  {{ request()->is('/') ? 'border-b-2 border-white' : '' }}">
                        HOME
                    </div>
                </a>
                <a href="/room" class="flex justify-center basis-24">
                    <div style="text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.7);"
                        class="{{ request()->routeIs('room.index') || request()->routeIs('room.detail') ? 'border-b-2 border-white' : '' }} relative text-white hover:text-white cursor-pointer transition-all ease-in-out before:transition-[width] before:ease-in-out before:duration-700 before:absolute before:bg-white  before:origin-center before:h-[2px] before:w-0 hover:before:w-[50%] before:bottom-0 before:left-[50%] after:transition-[width] after:ease-in-out after:duration-700 after:absolute after:bg-white after:origin-center after:h-[2px] after:w-0 hover:after:w-[50%] after:bottom-0 after:right-[50%]">

                        ROOM
                    </div>
                </a>
                <div class="relative">
                    <div class="flex justify-between items-center gap-4 {{ request()->is('service*') ? 'border-b-2 border-white' : '' }} relative text-white hover:text-white cursor-pointer transition-all ease-in-out before:transition-[width] before:ease-in-out before:duration-700 before:absolute before:bg-white before:origin-center before:h-[2px] before:w-0 hover:before:w-[50%] before:bottom-0 before:left-[50%] after:transition-[width] after:ease-in-out after:duration-700 after:absolute after:bg-white after:origin-center after:h-[2px] after:w-0 hover:after:w-[50%] after:bottom-0 after:right-[50%]">
                        <a href="/service" class="flex justify-center basis-24"
                            style="text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.7);">
                            SERVICE
                        </a>
                        <div class="w-[20px] h-auto flex justify-center items-center  hover:scale-110"
                            id="open-submenu">
                            <img src="/images/icon/ep_arrow-up.png" alt="" class="w-full h-full transition-transform duration-300 ease-in-out" id="arrow-up">
                        </div> 
                    </div>

                    <div id="submenu"
                        class="hidden w-[200px] border-y border-[#D9D9D9] rounded-sm bg-white absolute top-full left-0 mt-2 z-10 scale-95  flex flex-col text-[#3E3E3E] font-[500] ss:text-lg text-base capitalize">
                        <a href="{{ route('service.restaurant') }}"
                            class="p-3 hover:text-white hover:bg-[#03203E] {{ request()->routeIs('service.restaurant') ? 'bg-[#03203E] text-white' : '' }}">
                            Restaurant
                        </a>
                        <hr>
                        <a href="{{ route('service.swimming') }}"
                            class="p-3 hover:text-white hover:bg-[#03203E] {{ request()->routeIs('service.swimming') ? 'bg-[#03203E] text-white' : '' }}">
                            Swimming pool
                        </a>
                        <hr>
                        <a href="{{ route('service.wellness') }}"
                            class="p-3 hover:text-white hover:bg-[#03203E] {{ request()->routeIs('service.wellness') ? 'bg-[#03203E] text-white' : '' }}">
                            Wellness & Spa
                        </a>
                        <hr>
                        <a href="{{ route('service.bars') }}"
                            class="p-3 hover:text-white hover:bg-[#03203E] {{ request()->routeIs('service.bars') ? 'bg-[#03203E] text-white' : '' }}">
                            Bars
                        </a>
                        <hr>
                        <a href="{{ route('service.gardens') }}"
                            class="p-3 hover:text-white hover:bg-[#03203E] {{ request()->routeIs('service.gardens') ? 'bg-[#03203E] text-white' : '' }}">
                            Open Gardens
                        </a>
                        <hr>
                        <a href="{{ route('service.meeting') }}"
                            class="p-3 hover:text-white hover:bg-[#03203E] {{ request()->routeIs('service.meeting') ? 'bg-[#03203E] text-white' : '' }}">
                            Meeting rooms
                        </a>
                        <hr>

                    </div>
                </div>
            </div>

            <div class="lg:w-full m-auto flex justify-center sm:text-xl text-base font-light sm:p-4 ทป">
                <a href="/" class="text-2xl font-[500]" style="text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.7);">LOGO
                    HERE</a>
            </div>

            <div class="w-full flex flex-row justify-between">
                <a href="/contact" class="flex justify-center basis-24"
                    style="text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.7);">
                    <div
                        class="{{ request()->is('contact') ? 'border-b-2 border-white' : '' }} relative text-white hover:text-white cursor-pointer transition-all ease-in-out before:transition-[width] before:ease-in-out before:duration-700 before:absolute before:bg-white  before:origin-center before:h-[2px] before:w-0 hover:before:w-[50%] before:bottom-0 before:left-[50%] after:transition-[width] after:ease-in-out after:duration-700 after:absolute after:bg-white after:origin-center after:h-[2px] after:w-0 hover:after:w-[50%] after:bottom-0 after:right-[50%]">

                        CONTACT
                    </div>
                </a>
                <a href="/gallery" class="flex justify-center basis-24"
                    style="text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.7);">
                    <div
                        class="{{ request()->is('gallery') ? 'border-b-2 border-white' : '' }} relative text-white hover:text-white cursor-pointer transition-all ease-in-out before:transition-[width] before:ease-in-out before:duration-700 before:absolute before:bg-white  before:origin-center before:h-[2px] before:w-0 hover:before:w-[50%] before:bottom-0 before:left-[50%] after:transition-[width] after:ease-in-out after:duration-700 after:absolute after:bg-white after:origin-center after:h-[2px] after:w-0 hover:after:w-[50%] after:bottom-0 after:right-[50%]">

                        GALLERY
                    </div>
                </a>
                <a href="/about-us" class="flex justify-center basis-24"
                    style="text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.7);">
                    <div
                        class="{{ request()->is('about-us') ? 'border-b-2 border-white' : '' }} relative text-white hover:text-white cursor-pointer transition-all ease-in-out before:transition-[width] before:ease-in-out before:duration-700 before:absolute before:bg-white  before:origin-center before:h-[2px] before:w-0 hover:before:w-[50%] before:bottom-0 before:left-[50%] after:transition-[width] after:ease-in-out after:duration-700 after:absolute after:bg-white after:origin-center after:h-[2px] after:w-0 hover:after:w-[50%] after:bottom-0 after:right-[50%]">

                        ABOUT US
                    </div>
                </a>
            </div>
        </div>


    </div>
    </div>
</nav>


{{-- mobile --}}
<div class="m-nav inset-0 shadow-md overflow-hidden z-[1000] flex justify-end fixed bg-[#03203E]/50 backdrop-blur-sm ">
    <div class="w-[50%] max-sm:w-[80%] h-full bg-slate-50 p-2 px-4 flex flex-col ">
        <div class="flex justify-end">
            <div class="w-6 h-6 cursor-pointer hover:scale-110 transition-opacity duration-200" id="close-cate">
                <img src="/images/icon/close-bold-svgrepo-com.png" alt="Close Icon" class="w-full h-full">
            </div>
        </div>
        <div class="flex flex-col gap-y-8 flex-grow mt-4">
            {{-- MENU --}}
            <div class="w-full flex justify-start flex-col text-base gap-y-2 font-normal">
                <a href="/"
                    class="{{ request()->is('/') ? 'bg-[#03203E] text-white ' : '' }} flex justify-start p-2 rounded-md hover:text-white hover:bg-[#03203E]">
                    <div class="">
                        HOME
                    </div>
                </a>
                <hr>
                <a href="/room"
                    class="{{ request()->is('room*') ? 'bg-[#03203E] text-white' : '' }} flex justify-start p-2 rounded-md hover:text-white hover:bg-[#03203E]">
                    <div class="">

                        ROOM
                    </div>
                </a>
                <hr>
                <div class="flex flex-col z-[1000]">
                    <div class="flex justify-between items-center gap-4 w-full {{ request()->is('service*') ? 'bg-[#03203E] text-white ' : '' }} hover:text-white hover:bg-[#03203E] p-2 rounded-md group">
                        <a href="/service"
                            class=" flex justify-start   ">
                            <div class="">
                                SERVICE
                            </div>
                        </a>
                        <div class="w-[20px] h-auto flex justify-center items-center  hover:scale-110"
                            id="open-submenu-m">
                            <img src="/images/icon/ep_arrow-up.png" alt=""
                                class="w-full h-full transition-transform duration-300 ease-in-out filter invert group-hover:invert-0 {{ request()->is('service*') ? 'bg-[#03203E] text-white filter invert-0' : '' }}" id="arrow-up-m">
                        </div>
                    </div>

                    <div id="submenu-m"
                        class="hidden w-full rounded-sm pl-8 mt-2 scale-95 transition-transform ease-in-out duration-300 flex flex-col text-[#3E3E3E] font-[500] ss:text-lg text-base capitalize">
                        <a href="{{ route('service.restaurant') }}"
                            class="p-1 hover:text-white rounded-md hover:bg-[#03203E] {{ request()->routeIs('service.restaurant') ? 'bg-[#03203E] text-white' : '' }}">
                            Restaurant
                        </a>
                        <hr>
                        <a href="{{ route('service.swimming') }}"
                            class="p-1 hover:text-white rounded-md hover:bg-[#03203E] {{ request()->routeIs('service.swimming') ? 'bg-[#03203E] text-white' : '' }}">
                            Swimming pool
                        </a>
                        <hr>
                        <a href="{{ route('service.wellness') }}"
                            class="p-1 hover:text-white rounded-md hover:bg-[#03203E] {{ request()->routeIs('service.wellness') ? 'bg-[#03203E] text-white' : '' }}">
                            Wellness & Spa
                        </a>
                        <hr>
                        <a href="{{ route('service.bars') }}"
                            class="p-1 hover:text-white rounded-md hover:bg-[#03203E] {{ request()->routeIs('service.bars') ? 'bg-[#03203E] text-white' : '' }}">
                            Bars
                        </a>
                        <hr>
                        <a href="{{ route('service.gardens') }}"
                            class="p-1 hover:text-white rounded-md hover:bg-[#03203E] {{ request()->routeIs('service.gardens') ? 'bg-[#03203E] text-white' : '' }}">
                            Open Gardens
                        </a>
                        <hr>
                        <a href="{{ route('service.meeting') }}"
                            class="p-1 hover:text-white rounded-md hover:bg-[#03203E] {{ request()->routeIs('service.meeting') ? 'bg-[#03203E] text-white' : '' }}">
                            Meeting rooms
                        </a>

                    </div>
                </div>


                <hr>
                <a href="/contact"
                    class="{{ request()->is('contact') ? 'bg-[#03203E] text-white ' : '' }} flex justify-start p-2 rounded-md hover:text-white hover:bg-[#03203E] ">
                    <div class="">

                        CONTACT
                    </div>
                </a>
                <hr>
                <a href="/gallery"
                    class="{{ request()->is('gallery') ? 'bg-[#03203E] text-white ' : '' }} flex justify-start p-2 rounded-md hover:text-white hover:bg-[#03203E] ">
                    <div class="">

                        GALLERY
                    </div>
                </a>
                <hr>
                <a href="/about-us"
                    class="{{ request()->is('about-us') ? 'bg-[#03203E] text-white ' : '' }} flex justify-start p-2 rounded-md hover:text-white hover:bg-[#03203E] ">
                    <div class="">

                        ABOUT US
                    </div>
                </a>
                <hr>
            </div>

        </div>
    </div>
</div>

@vite('resources/js/navbar/navbarM.js')
@vite('resources/js/navbar/navbar.js')
