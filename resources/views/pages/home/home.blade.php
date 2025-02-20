@extends('layouts.main')

@section('title')
    home
@endsection

@section('style')
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1" />

    @vite('resources/css/home/swiper.css')
    {{-- @vite('resources/css/home/preview_img.css') --}}
@endsection

@section('contents')
    @include('pages.home.swiper')

    <section class="max-w-[1536px] z-50 mx-auto py-[30px] pb-8 px-4 overflow-hidden">
        <div class="flex flex-rows max-lg:flex-col justify-center items-center 2xl:py-12 gap-6 h-auto" data-aos="fade-up"
            data-aos-duration="500">
            {{-- 1  --}}
            <div class="w-full grid grid-cols-2 items-center max-lg:order-2 place-items-center lg:gap-4 gap-2 max-h-full xl:h-[500px] md:h-[400px] ss:h-[350px] h-[250px]">

                <div class="relative w-full h-full">
                    <div class="lg:h-[80%] h-full absolute top-0 right-0 ">
                        <img src="/images/img/sscaf.png" alt="" class="w-full h-full shadow-md">
                    </div>
                </div>

                <div class="relative w-full h-full">
                    <div class="lg:h-[80%] h-full absolute bottom-0 left-0">
                        <img src="/images/img/dsvsd.png" alt="" class="w-full h-full shadow-md">
                    </div>
                </div>
            </div>

            {{-- 2 --}}
            <div
                class="w-full flex flex-col justify-center items-start max-lg:items-center sm:gap-y-6 gap-y-4 max-lg:order-1">

                <p class="font-[300] tracking-widest sm:text-2xl text-sm text-[#03203E]"
                    style="text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.2);">
                    welcome to the resort
                </p>
                <p class="font-[700] tracking-widest sm:text-3xl text-xl text-left max-lg:text-center uppercase text-black"
                    style="text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.2);">
                    THE PERFECT <br>
                    HOTEL FOR YOU
                </p>

                <p class="font-light ss:text-base text-sm text-left w-full text-[#3E3E3E]">
                    Lorem ipsum dolor sit amet consectetur. Elementum et pellentesque habitant id. Id feugiat eget
                    bibendum felis eget. Velit aliquam cras non elementum nunc luctus duis vitae sem. Quam iaculis velit
                    commodo aliquam vitae dignissim sit. Sed id adipiscing.
                </p>
                <p class="font-light ss:text-base text-sm text-left w-full text-[#3E3E3E]">
                    Lorem ipsum dolor sit amet consectetur. Elementum et pellentesque habitant id. Id feugiat eget
                    bibendum felis eget. Velit aliquam cras non elementum nunc luctus duis vitae sem. Quam iaculis velit
                    commodo aliquam vitae dignissim sit. Sed id adipiscing.
                </p>
            </div>
        </div>
    </section>

    <section class="max-w-[1536px] mx-auto pb-6 overflow-hidden flex flex-col lg:gap-y-8 gap-y-4 px-4">
        <div class="flex gap-6 flex-col" data-aos="zoom-in" data-aos-duration="500">

            <div class="flex items-center justify-center gap-2 max-w-[80%] w-full mx-auto">
                <span class="ss:w-40 xx:w-14 w-6 h-[1px] bg-black rounded-full "></span>
                <p
                    class="ss:w-[350px] w-full text-center font-[400] xl:text-xl ss:text-lg text-base text-[#03203E] ss:tracking-[8px] tracking-widest">
                    Discover Our Room
                </p>
                <span class="ss:w-40 xx:w-14 w-6 h-[1px] bg-black rounded-full"></span>
            </div>

            <p class="font-[700] ss:tracking-[8px] tracking-widest sm:text-3xl text-xl text-center uppercase text-black"
                style="text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.2);">
                A Gander At Our Rooms
            </p>

        </div>

        {{-- img --}}
        <div class="swiper swiper2 h-auto items-center relative">
            <div class="swiper-wrapper items-center">
                {{-- 1 --}}
                <div class="swiper-slide flex flex-col gap-4">
                    <div class="group relative ss:w-full  lg:h-[450px] w-[350px] h-[380px] cursor-pointer overflow-hidden rounded-sm shadow-md hover:shadow-2xl"
                        data-aos="flip-left" data-aos-easing="ease-out-cubic" data-aos-duration="500">
                        <img class="absolute inset-0 h-full w-full object-cover opacity-90 transition-opacity duration-300 ease-out group-hover:opacity-100 group-hover:transition-opacity group-hover:duration-300"
                            src="/images/img/sddfsdf.png" alt="" />

                        <div
                            class="absolute inset-0 bg-gradient-to-t from-black/0 to-transparent to-90% text-white transition-all duration-300 group-hover:bg-black group-hover:bg-opacity-45 group-hover:transition-all group-hover:duration-300">

                            <!-- Title -->
                            <div class="flex justify-start flex-col gap-4 items-start px-4 w-full absolute bottom-4 left-2 transform transition-all delay-300 duration-300 ease-out group-hover:hidden group-hover:translate-y-0 group-hover:duration-300"
                                style="text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.7);">
                                <div
                                    class="bg-[#03203E] p-1 px-2 items-start rounded-sm text-center shadow-md text-xl max-w-[150px]">
                                    <p class="ss:text-lg text-base">1,500 ฿ / night</p>
                                </div>
                                <p class="text-left xl:text-2xl text-lg uppercase">Double Twin Room</p>
                            </div>

                            <!-- Description -->
                            <div class="absolute break-words text-white xl:text-lg sm:text-base text-sm font-extralight px-4 left-2 top-2 line-clamp-4 max-w-[90%] pt-4 opacity-0 transition-opacity duration-300 ease-out group-hover:opacity-100 group-hover:delay-300 group-hover:duration-300"
                                style="text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.7);">
                                <div class="flex flex-col justify-between lg:gap-8 xs:gap-4 gap-8 lg:h-[400px] h-full">

                                    <div class="flex flex-col ss:gap-4 gap-2">
                                        <p class="text-left xl:text-2xl text-lg uppercase font-[500]">
                                            Double Twin Room</p>
                                        <p class="text-left lg:text-lg text-base">Lorem ipsum dolor sit amet
                                            consectetur. Egestas tristique.</p>
                                    </div>

                                    <div class="flex flex-col gap-2">
                                        <div class="flex gap-2 justify-start items-center">
                                            <div class="h-[20px] w-auto">
                                                <img src="/images/icon/Group 472.png" alt="" class="w-full h-full">
                                            </div>
                                            <p class="sm:text-lg text-base">1-2 person</p>
                                        </div>
                                        <div class="flex gap-2 justify-start items-center">
                                            <div class="h-[23px] w-auto">
                                                <img src="/images/icon/Group 470.png" alt="" class="w-full h-full">
                                            </div>
                                            <p class="sm:text-lg text-base">Twin bed</p>
                                        </div>
                                        <div class="flex gap-2 justify-start items-center">
                                            <div class="h-[30px] w-auto">
                                                <img src="/images/icon/wifi.png" alt="" class="w-full h-full">
                                            </div>
                                            <p class="sm:text-lg text-base">Free wifi</p>
                                        </div>
                                        <div class="flex gap-2 justify-start items-center">
                                            <div class="h-[30px] w-auto">
                                                <img src="/images/icon/uil_coffee.png" alt="" class="w-full h-full">
                                            </div>
                                            <p class="sm:text-lg text-base">Breakfast</p>
                                        </div>
                                    </div>


                                    <div class="flex justify-center items-center">
                                        <a href="/room/detail"
                                            class="max-ss:hidden transition-all ease-in-out duration-300 text-white sm:text-lg text-base rounded-full border items-center shadow-md font-light max-w-52 p-1 px-4 bg-white/10 hover:bg-[#03203E] hover:border-[#03203E]/50 backdrop-blur-xs "
                                            style="text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.7);"> Book Now </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <a href="/room/detail"
                        class="ss:hidden transition-all ease-in-out duration-300 text-white sm:text-lg text-base rounded-full items-center shadow-md font-light max-w-52 p-1 px-4 border-2 bg-[#03203E] hover:text-[#03203E] hover:bg-white hover:border-[#03203E]  backdrop-blur-xs "
                        style="text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.2);"> Book Now </a>
                </div>

                {{-- 2 --}}
                <div class="swiper-slide flex flex-col gap-4">
                    <div class="group relative ss:w-full lg:h-[450px] w-[350px] h-[380px] cursor-pointer overflow-hidden rounded-sm shadow-md hover:shadow-2xl"
                        data-aos="flip-left" data-aos-easing="ease-out-cubic" data-aos-duration="500">
                        <img class="absolute inset-0 h-full w-full object-cover opacity-90 transition-opacity duration-300 ease-out group-hover:opacity-100 group-hover:transition-opacity group-hover:duration-300"
                            src="/images/img/ffgju.png" alt="" />

                        <div
                            class="absolute inset-0 bg-gradient-to-t from-black/0 to-transparent to-90% text-white transition-all duration-300 group-hover:bg-black group-hover:bg-opacity-45 group-hover:transition-all group-hover:duration-300">

                            <!-- Title -->
                            <div class="flex justify-start flex-col gap-4 items-start px-4 w-full absolute bottom-4 left-2 transform transition-all delay-300 duration-300 ease-out group-hover:hidden group-hover:translate-y-0 group-hover:duration-300"
                                style="text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.7);">
                                <div
                                    class="bg-[#03203E] p-1 px-2 items-start rounded-sm text-center shadow-md text-xl max-w-[150px]">
                                    <p class="ss:text-lg text-base">2,500 ฿ / night</p>
                                </div>
                                <p class="text-left xl:text-2xl text-lg uppercase">Family Room</p>
                            </div>

                            <!-- Description -->
                            <div class="absolute break-words text-white xl:text-lg sm:text-base text-sm font-extralight px-4 left-2 top-2 line-clamp-4 max-w-[90%] pt-4 opacity-0 transition-opacity duration-300 ease-out group-hover:opacity-100 group-hover:delay-300 group-hover:duration-300"
                                style="text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.7);">
                                <div class="flex flex-col justify-between lg:gap-8 xs:gap-4 gap-8 lg:h-[400px] h-full">
                                    <div class="flex flex-col ss:gap-4 gap-2">
                                        <p class="text-left xl:text-2xl text-lg uppercase font-[500]">
                                            Family Room</p>
                                        <p class="text-left lg:text-lg text-base">Lorem ipsum dolor sit amet
                                            consectetur. Egestas tristique.</p>
                                    </div>

                                    <div class="flex flex-col gap-2">
                                        <div class="flex gap-2 justify-start items-center">
                                            <div class="h-[20px] w-auto">
                                                <img src="/images/icon/Group 472.png" alt=""
                                                    class="w-full h-full">
                                            </div>
                                            <p class="sm:text-lg text-base">1-2 person</p>
                                        </div>
                                        <div class="flex gap-2 justify-start items-center">
                                            <div class="h-[23px] w-auto">
                                                <img src="/images/icon/Group 470.png" alt=""
                                                    class="w-full h-full">
                                            </div>
                                            <p class="sm:text-lg text-base">Twin bed</p>
                                        </div>
                                        <div class="flex gap-2 justify-start items-center">
                                            <div class="h-[30px] w-auto">
                                                <img src="/images/icon/wifi.png" alt="" class="w-full h-full">
                                            </div>
                                            <p class="sm:text-lg text-base">Free wifi</p>
                                        </div>
                                        <div class="flex gap-2 justify-start items-center">
                                            <div class="h-[30px] w-auto">
                                                <img src="/images/icon/uil_coffee.png" alt=""
                                                    class="w-full h-full">
                                            </div>
                                            <p class="sm:text-lg text-base">Breakfast</p>
                                        </div>
                                    </div>

                                    <div class="flex justify-center items-center">
                                        <a href="/room/detail"
                                            class="max-ss:hidden transition-all ease-in-out duration-300 text-white sm:text-lg text-base rounded-full border items-center shadow-md font-light max-w-52 p-1 px-4 bg-white/10 hover:bg-[#03203E] hover:border-[#03203E]/50  backdrop-blur-xs "
                                            style="text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.7);"> Book Now </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <a href="/room/detail"
                        class="ss:hidden transition-all ease-in-out duration-300 text-white sm:text-lg text-base rounded-full items-center shadow-md font-light max-w-52 p-1 px-4 border-2 bg-[#03203E] hover:text-[#03203E] hover:bg-white hover:border-[#03203E]  backdrop-blur-xs "
                        style="text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.2);"> Book Now </a>
                </div>

                {{-- 3 --}}
                <div class="swiper-slide flex flex-col gap-4">
                    <div class="group relative ss:w-full lg:h-[450px] w-[350px] h-[380px] cursor-pointer overflow-hidden rounded-sm shadow-md hover:shadow-2xl"
                        data-aos="flip-left" data-aos-easing="ease-out-cubic" data-aos-duration="500">
                        <img class="absolute inset-0 h-full w-full object-cover opacity-90 transition-opacity duration-300 ease-out group-hover:opacity-100 group-hover:transition-opacity group-hover:duration-300"
                            src="/images/img/jhnghft.png" alt="" />

                        <div
                            class="absolute inset-0 bg-gradient-to-t from-black/0 to-transparent to-90% text-white transition-all duration-300 group-hover:bg-black group-hover:bg-opacity-45 group-hover:transition-all group-hover:duration-300">

                            <!-- Title -->
                            <div class="flex justify-start flex-col gap-4 items-start px-4 w-full absolute bottom-4 left-2 transform transition-all delay-300 duration-300 ease-out group-hover:hidden group-hover:translate-y-0 group-hover:duration-300"
                                style="text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.7);">
                                <div
                                    class="bg-[#03203E] p-1 px-2 items-start rounded-sm text-center shadow-md text-xl max-w-[150px]">
                                    <p class="ss:text-lg text-base">2,000 ฿ / night</p>
                                </div>
                                <p class="text-left xl:text-2xl text-lg uppercase">Double Room</p>
                            </div>

                            <!-- Description -->
                            <div class="absolute break-words text-white xl:text-lg sm:text-base text-sm font-extralight px-4 left-2 top-2 line-clamp-4 max-w-[90%] pt-4 opacity-0 transition-opacity duration-300 ease-out group-hover:opacity-100 group-hover:delay-300 group-hover:duration-300"
                                style="text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.7);">
                                <div class="flex flex-col justify-between lg:gap-8 xs:gap-4 gap-8 lg:h-[400px] h-full">
                                    <div class="flex flex-col ss:gap-4 gap-2">
                                        <p class="text-left xl:text-2xl text-lg uppercase font-[500]">
                                            Double Room</p>
                                        <p class="text-left lg:text-lg text-base">Lorem ipsum dolor sit amet
                                            consectetur. Egestas tristique.</p>
                                    </div>

                                    <div class="flex flex-col gap-2">
                                        <div class="flex gap-2 justify-start items-center">
                                            <div class="h-[20px] w-auto">
                                                <img src="/images/icon/Group 472.png" alt=""
                                                    class="w-full h-full">
                                            </div>
                                            <p class="sm:text-lg text-base">1-2 person</p>
                                        </div>
                                        <div class="flex gap-2 justify-start items-center">
                                            <div class="h-[23px] w-auto">
                                                <img src="/images/icon/Group 470.png" alt=""
                                                    class="w-full h-full">
                                            </div>
                                            <p class="sm:text-lg text-base">Twin bed</p>
                                        </div>
                                        <div class="flex gap-2 justify-start items-center">
                                            <div class="h-[30px] w-auto">
                                                <img src="/images/icon/wifi.png" alt="" class="w-full h-full">
                                            </div>
                                            <p class="sm:text-lg text-base">Free wifi</p>
                                        </div>
                                        <div class="flex gap-2 justify-start items-center">
                                            <div class="h-[30px] w-auto">
                                                <img src="/images/icon/uil_coffee.png" alt=""
                                                    class="w-full h-full">
                                            </div>
                                            <p class="sm:text-lg text-base">Breakfast</p>
                                        </div>
                                    </div>

                                    <div class="flex justify-center items-center">
                                        <a href="/room/detail"
                                            class="max-ss:hidden transition-all ease-in-out duration-300 text-white sm:text-lg text-base rounded-full border items-center shadow-md font-light max-w-52 p-1 px-4 bg-white/10 hover:bg-[#03203E] hover:border-[#03203E]/50  backdrop-blur-xs "
                                            style="text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.7);"> Book Now </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <a href="/room/detail"
                        class="ss:hidden transition-all ease-in-out duration-300 text-white sm:text-lg text-base rounded-full items-center shadow-md font-light max-w-52 p-1 px-4 border-2 bg-[#03203E] hover:text-[#03203E] hover:bg-white hover:border-[#03203E]  backdrop-blur-xs "
                        style="text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.2);"> Book Now </a>
                </div>

                {{-- 4 --}}
                <div class="swiper-slide flex flex-col gap-4">
                    <div class="group relative ss:w-full lg:h-[450px] w-[350px] h-[380px] cursor-pointer overflow-hidden rounded-sm shadow-md hover:shadow-2xl"
                        data-aos="flip-left" data-aos-easing="ease-out-cubic" data-aos-duration="500">
                        <img class="absolute inset-0 h-full w-full object-cover opacity-90 transition-opacity duration-300 ease-out group-hover:opacity-100 group-hover:transition-opacity group-hover:duration-300"
                            src="/images/img/bfghnjyt.png" alt="" />

                        <div
                            class="absolute inset-0 bg-gradient-to-t from-black/0 to-transparent to-90% text-white transition-all duration-300 group-hover:bg-black group-hover:bg-opacity-45 group-hover:transition-all group-hover:duration-300">

                            <!-- Title -->
                            <div class="flex justify-start flex-col gap-4 items-start px-4 w-full absolute bottom-4 left-2 transform transition-all delay-300 duration-300 ease-out group-hover:hidden group-hover:translate-y-0 group-hover:duration-300"
                                style="text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.7);">
                                <div
                                    class="bg-[#03203E] p-1 px-2 items-start rounded-sm text-center shadow-md text-xl max-w-[150px]">
                                    <p class="ss:text-lg text-base">6,000 ฿ / night</p>
                                </div>
                                <p class="text-left xl:text-2xl text-lg  uppercase">Luxury Room</p>
                            </div>

                            <!-- Description -->
                            <div class="absolute break-words text-white xl:text-lg sm:text-base text-sm font-extralight px-4 left-2 top-2 line-clamp-4 max-w-[90%] pt-4 opacity-0 transition-opacity duration-300 ease-out group-hover:opacity-100 group-hover:delay-300 group-hover:duration-300"
                                style="text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.7);">
                                <div class="flex flex-col justify-between lg:gap-8 xs:gap-4 gap-8 lg:h-[400px] h-full">
                                    <div class="flex flex-col ss:gap-4 gap-2">
                                        <p class="text-left xl:text-2xl text-lg uppercase font-[500]">
                                            Luxury Room</p>
                                        <p class="text-left lg:text-lg text-base">Lorem ipsum dolor sit amet
                                            consectetur. Egestas tristique.</p>
                                    </div>

                                    <div class="flex flex-col gap-2">
                                        <div class="flex gap-2 justify-start items-center">
                                            <div class="h-[20px] w-auto">
                                                <img src="/images/icon/Group 472.png" alt=""
                                                    class="w-full h-full">
                                            </div>
                                            <p class="sm:text-lg text-base">1-2 person</p>
                                        </div>
                                        <div class="flex gap-2 justify-start items-center">
                                            <div class="h-[23px] w-auto">
                                                <img src="/images/icon/Group 470.png" alt=""
                                                    class="w-full h-full">
                                            </div>
                                            <p class="sm:text-lg text-base">Twin bed</p>
                                        </div>
                                        <div class="flex gap-2 justify-start items-center">
                                            <div class="h-[30px] w-auto">
                                                <img src="/images/icon/wifi.png" alt="" class="w-full h-full">
                                            </div>
                                            <p class="sm:text-lg text-base">Free wifi</p>
                                        </div>
                                        <div class="flex gap-2 justify-start items-center">
                                            <div class="h-[30px] w-auto">
                                                <img src="/images/icon/uil_coffee.png" alt=""
                                                    class="w-full h-full">
                                            </div>
                                            <p class="sm:text-lg text-base">Breakfast</p>
                                        </div>
                                    </div>

                                    <div class="flex justify-center items-center">
                                        <a href="/room/detail"
                                            class="max-ss:hidden transition-all ease-in-out duration-300 text-white sm:text-lg text-base rounded-full border items-center shadow-md font-light max-w-52 p-1 px-4 bg-white/10 hover:bg-[#03203E] hover:border-[#03203E]/50  backdrop-blur-xs "
                                            style="text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.7);"> Book Now </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <a href="/room/detail"
                        class="ss:hidden transition-all ease-in-out duration-300 text-white sm:text-lg text-base rounded-full items-center shadow-md font-light max-w-52 p-1 px-4 border-2 bg-[#03203E] hover:text-[#03203E] hover:bg-white hover:border-[#03203E]  backdrop-blur-xs "
                        style="text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.2);"> Book Now </a>
                </div>
            </div>
        </div>

        <!-- Navigation Buttons -->
        <div class="flex justify-center items-center gap-4 z-50" data-aos="zoom-in" data-aos-duration="500">
            <div
                class="prev-btn bg-[#03203E] bg-opacity-30 p-2 rounded-full shadow-md hover:bg-[#03203E] w-10 h-10 flex items-center justify-center">
                <img src="/images/icon/prev.png" alt="" class="w-6 h-6">
            </div>
            <div
                class="next-btn bg-[#03203E] bg-opacity-40 p-2 rounded-full shadow-md hover:bg-[#03203E] w-10 h-10 flex items-center justify-center">
                <img src="/images/icon/next.png" alt="" class="w-6 h-6">
            </div>
        </div>
    </section>

    <section class="relative mb-12 overflow-hidden">
        <div class="absolute w-full h-full">
            <img src="/images/img/dfsddffdsfds.png" alt="Banner Image" class="w-full h-full object-cover">
            <div class="absolute top-0 left-0 w-full h-full bg-black opacity-50"></div>
        </div>

        <div
            class="relative text-white max-w-[1536px] mx-auto pt-12 pb-6 z-50 flex flex-col justify-center items-center gap-y-6">
            <div class="flex gap-2" data-aos="zoom-in" data-aos-duration="500">
                @for ($i = 0; $i < 5; $i++)
                    <div class="h-auto w-[25px] ">
                        <img src="/images/icon/Vector.png" alt="" class="w-full h-full shadow-md">
                    </div>
                @endfor
            </div>

            <div class="flex gap-2 flex-col justify-center items-center" data-aos="zoom-in" data-aos-duration="500">
                <p class="text-white xltext-2xl ss:text-lg text-base tracking-widest capitalize">Beach Resort Hotel</p>
                <p class="text-white xl:text-3xl ss:text-xl text-lg tracking-widest capitalize">Promotional Video</p>
            </div>

            <div class="" data-aos="zoom-in" data-aos-duration="500">
                <div class="transition-all ease-in-out duration-300 max-h-[100px] w-auto cursor-pointer overflow-hidden hover:scale-110"
                    id="video-open">
                    <img src="/images/icon/Group 442.png" alt="" class="w-full h-full  ">
                </div>
            </div>
        </div>
    </section>

    <section class="ss:py-12 py-6 bg-slate-100 overflow-hidden">
        <div class="max-w-[1536px] mx-auto px-4 flex flex-col justify-center items-center md:gap-12 gap-6">
            <div class="flex justify-center items-center w-full gap-6 flex-col" data-aos="zoom-in"
                data-aos-duration="500">
                <div class="flex items-center justify-center gap-2 max-w-[80%] w-full mx-auto">
                    <span class="ss:w-40 xx:w-14 w-6 h-[1px] bg-black rounded-full "></span>
                    <p
                        class="ss:w-[400px] w-full text-center font-[400] xl:text-xl ss:text-lg text-base text-[#03203E] ss:tracking-[8px] tracking-widest">
                        Enjoy a perfect vacation
                    </p>
                    <span class="ss:w-40 xx:w-14 w-6 h-[1px] bg-black rounded-full"></span>
                </div>

                <p class="font-[700] ss:tracking-[8px] tracking-widest sm:text-3xl text-xl text-center uppercase text-[#03203E]"
                    style="text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.2);">
                    Our Services
                </p>

                <p
                    class="font-[300] ss:text-base text-sm text-center text-[#3E3E3E] ss:max-w-[70%] w-full text-wrap break-words overflow-hidden text-ellipsis ">
                    Lorem ipsum dolor sit amet consectetur. Aenean at a morbi facilisis vel ultrices Gravida. Netus
                    nullam bibendum purus sed vitae ac erat mattis mauris.
                </p>

            </div>


            <div class="max-w-[1320px] m-auto w-full z-50 grid md:grid-cols-3 grid-cols-2 ss:gap-6 gap-4">
                {{-- 1 --}}
                <a href="{{ route('service.restaurant') }}"
                    class="group relative w-full xl:h-[300px]  xx:h-[200px] h-[160px]  cursor-pointer overflow-hidden rounded-md hover:shadow-2xl bg-slate-100"
                    data-aos="flip-left" data-aos-easing="ease-out-cubic" data-aos-duration="500"
                    style="box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;">

                    <!-- Background Image -->
                    <img class="absolute inset-0 h-full w-full object-cover opacity-0 transition-opacity duration-300 ease-out group-hover:opacity-100"
                        src="/images/img/Restaurant.png" alt="Room Image" />

                    <!-- Gradient Overlay -->
                    <div class="absolute inset-0 bg-white transition-all duration-300 group-hover:bg-black/50"> </div>

                    <!-- Title -->
                    <div
                        class="absolute xl:p-8 p-4 transition-all duration-300 ease-out flex flex-col xl:gap-4 xx:gap-2 gap-1">
                        <div class="xx:w-[40px] w-[30px] h-auto">
                            <img src="/images/icon/ion_restaurant-outline.png" alt=""
                                class="w-full h-full filter invert group-hover:invert-0 ">
                        </div>

                        <p class="text-black text-left xl:text-2xl lg:text-lg xx:text-base text-sm uppercase mt-2 group-hover:text-white font-[700]"
                            style="text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.2);">
                            Restaurant
                        </p>

                        <p
                            class="text-left xl:text-lg xs:text-base text-sm text-black group-hover:text-white font-[300] xx:line-clamp-3 line-clamp-2 capitalize">
                            Lorem ipsum dolor sit amet consectetur. Molestie at id odio tincidunt massa nullam tortor. At
                            amet dignissim integer id quis vestibulum mi turpis quam.
                        </p>
                    </div>

                    <!-- Description -->
                    {{-- <div class="absolute inset-0 flex flex-col justify-center px-4 opacity-0 transition-opacity duration-300 ease-out group-hover:opacity-100">
                        </div> --}}
                </a>
                {{-- 2 --}}
                <a href="{{ route('service.swimming') }}"
                    class="group relative w-full xl:h-[300px]  xx:h-[200px] h-[160px] cursor-pointer overflow-hidden rounded-md hover:shadow-2xl bg-slate-100"
                    data-aos="flip-left" data-aos-easing="ease-out-cubic" data-aos-duration="500"
                    style="box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;">

                    <!-- Background Image -->
                    <img class="absolute inset-0 h-full w-full object-cover opacity-0 transition-opacity duration-300 ease-out group-hover:opacity-100"
                        src="/images/img/Swimming.png" alt="Room Image" />

                    <!-- Gradient Overlay -->
                    <div class="absolute inset-0 bg-white transition-all duration-300 group-hover:bg-black/50"> </div>

                    <!-- Title -->
                    <div
                        class="absolute xl:p-8 p-4 transition-all duration-300 ease-out flex flex-col xl:gap-4 xx:gap-2 gap-1">
                        <div class="xx:w-[40px] w-[30px] h-auto">
                            <img src="/images/icon/fluent_swimming-pool-32-filled.png" alt=""
                                class="w-full h-full filter  group-hover:invert ">
                        </div>

                        <p class="text-black text-left xl:text-2xl lg:text-lg xx:text-base text-sm capitalize mt-2 group-hover:text-white font-[700]"
                            style="text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.2);">
                            Swimming pool
                        </p>

                        <p
                            class="text-left xl:text-lg xs:text-base text-sm text-black group-hover:text-white font-[300] xx:line-clamp-3 line-clamp-2 capitalize">
                            Lorem ipsum dolor sit amet consectetur. Molestie at id odio tincidunt massa nullam tortor. At
                            amet dignissim integer id quis vestibulum mi turpis quam.
                        </p>
                    </div>

                    <!-- Description -->
                    {{-- <div class="absolute inset-0 flex flex-col justify-center px-4 opacity-0 transition-opacity duration-300 ease-out group-hover:opacity-100">
                        </div> --}}
                </a>
                {{-- 3 --}}
                <a href="{{ route('service.wellness') }}"
                    class="group relative w-full xl:h-[300px]  xx:h-[200px] h-[160px]  cursor-pointer overflow-hidden rounded-md hover:shadow-2xl bg-slate-100"
                    data-aos="flip-left" data-aos-easing="ease-out-cubic" data-aos-duration="500"
                    style="box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;">

                    <!-- Background Image -->
                    <img class="absolute inset-0 h-full w-full object-cover opacity-0 transition-opacity duration-300 ease-out group-hover:opacity-100"
                        src="/images/img/wellness.png" alt="Room Image" />

                    <!-- Gradient Overlay -->
                    <div class="absolute inset-0 bg-white transition-all duration-300 group-hover:bg-black/50"> </div>

                    <!-- Title -->
                    <div
                        class="absolute xl:p-8 p-4 transition-all duration-300 ease-out flex flex-col xl:gap-4 xx:gap-2 gap-1">
                        <div class="xx:w-[40px] w-[30px] h-auto">
                            <img src="/images/icon/map_spa.png" alt=""
                                class="w-full h-full filter group-hover:invert ">
                        </div>

                        <p class="text-black text-left xl:text-2xl lg:text-lg xx:text-base text-sm capitalize mt-2 group-hover:text-white font-[700]"
                            style="text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.2);">
                            wellness & spa
                        </p>

                        <p
                            class="text-left xl:text-lg xs:text-base text-sm text-black group-hover:text-white font-[300] xx:line-clamp-3 line-clamp-2 capitalize">
                            Lorem ipsum dolor sit amet consectetur. Molestie at id odio tincidunt massa nullam tortor. At
                            amet dignissim integer id quis vestibulum mi turpis quam.
                        </p>
                    </div>

                    <!-- Description -->
                    {{-- <div class="absolute inset-0 flex flex-col justify-center px-4 opacity-0 transition-opacity duration-300 ease-out group-hover:opacity-100">
                        </div> --}}
                </a>
                {{-- 4 --}}
                <a href="{{ route('service.bars') }}"
                    class="group relative w-full xl:h-[300px]  xx:h-[200px] h-[160px]  cursor-pointer overflow-hidden rounded-md hover:shadow-2xl bg-slate-100"
                    data-aos="flip-left" data-aos-easing="ease-out-cubic" data-aos-duration="500"
                    style="box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;">

                    <!-- Background Image -->
                    <img class="absolute inset-0 h-full w-full object-cover opacity-0 transition-opacity duration-300 ease-out group-hover:opacity-100"
                        src="/images/img/Bars.png" alt="Room Image" />

                    <!-- Gradient Overlay -->
                    <div class="absolute inset-0 bg-white transition-all duration-300 group-hover:bg-black/50"> </div>

                    <!-- Title -->
                    <div
                        class="absolute xl:p-8 p-4 transition-all duration-300 ease-out flex flex-col xl:gap-4 xx:gap-2 gap-1">
                        <div class="xx:w-[40px] w-[30px] h-auto">
                            <img src="/images/icon/guidance_bar.png" alt=""
                                class="w-full h-full filter group-hover:invert">
                        </div>

                        <p class="text-black text-left xl:text-2xl lg:text-lg xx:text-base text-sm capitalize mt-2 group-hover:text-white font-[700]"
                            style="text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.2);">
                            Bars
                        </p>

                        <p
                            class="text-left xl:text-lg xs:text-base text-sm text-black group-hover:text-white font-[300] xx:line-clamp-3 line-clamp-2 capitalize">
                            Lorem ipsum dolor sit amet consectetur. Molestie at id odio tincidunt massa nullam tortor. At
                            amet dignissim integer id quis vestibulum mi turpis quam.
                        </p>
                    </div>

                    <!-- Description -->
                    {{-- <div class="absolute inset-0 flex flex-col justify-center px-4 opacity-0 transition-opacity duration-300 ease-out group-hover:opacity-100">
                        </div> --}}
                </a>
                {{-- 5 --}}
                <a href="{{ route('service.gardens') }}"
                    class="group relative w-full xl:h-[300px]  xx:h-[200px] h-[160px]  cursor-pointer overflow-hidden rounded-md hover:shadow-2xl bg-slate-100"
                    data-aos="flip-left" data-aos-easing="ease-out-cubic" data-aos-duration="500"
                    style="box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;">

                    <!-- Background Image -->
                    <img class="absolute inset-0 h-full w-full object-cover opacity-0 transition-opacity duration-300 ease-out group-hover:opacity-100"
                        src="/images/img/Gardens.png" alt="Room Image" />

                    <!-- Gradient Overlay -->
                    <div class="absolute inset-0 bg-white transition-all duration-300 group-hover:bg-black/50"> </div>

                    <!-- Title -->
                    <div
                        class="absolute xl:p-8 p-4 transition-all duration-300 ease-out flex flex-col xl:gap-4 xx:gap-2 gap-1">
                        <div class="xx:w-[40px] w-[30px] h-auto">
                            <img src="/images/icon/ph_tree.png" alt=""
                                class="w-full h-full filter group-hover:invert">
                        </div>

                        <p class="text-black text-left xl:text-2xl lg:text-lg xx:text-base text-sm capitalize mt-2 group-hover:text-white font-[700]"
                            style="text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.2);">
                            Open Gardens
                        </p>

                        <p
                            class="text-left xl:text-lg xs:text-base text-sm text-black group-hover:text-white font-[300] xx:line-clamp-3 line-clamp-2 capitalize">
                            Lorem ipsum dolor sit amet consectetur. Molestie at id odio tincidunt massa nullam tortor. At
                            amet dignissim integer id quis vestibulum mi turpis quam.
                        </p>
                    </div>

                    <!-- Description -->
                    {{-- <div class="absolute inset-0 flex flex-col justify-center px-4 opacity-0 transition-opacity duration-300 ease-out group-hover:opacity-100">
                        </div> --}}
                </a>
                {{-- 6 --}}
                <a href="{{ route('service.meeting') }}"
                    class="group relative w-full xl:h-[300px]  xx:h-[200px] h-[160px]  cursor-pointer overflow-hidden rounded-md hover:shadow-2xl bg-slate-100"
                    data-aos="flip-left" data-aos-easing="ease-out-cubic" data-aos-duration="500"
                    style="box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;">

                    <!-- Background Image -->
                    <img class="absolute inset-0 h-full w-full object-cover opacity-0 transition-opacity duration-300 ease-out group-hover:opacity-100"
                        src="/images/img/Meeting.png" alt="Room Image" />

                    <!-- Gradient Overlay -->
                    <div class="absolute inset-0 bg-white transition-all duration-300 group-hover:bg-black/50"> </div>

                    <!-- Title -->
                    <div
                        class="absolute xl:p-8 p-4 transition-all duration-300 ease-out flex flex-col xl:gap-4 xx:gap-2 gap-1">
                        <div class="xx:w-[40px] w-[30px] h-auto">
                            <img src="/images/icon/streamline_group-meeting-call.png" alt=""
                                class="w-full h-full filter group-hover:invert ">
                        </div>

                        <p class="text-black text-left xl:text-2xl lg:text-lg xx:text-base text-sm capitalize mt-2 group-hover:text-white font-[700]"
                            style="text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.2);">
                            Meeting rooms
                        </p>

                        <p
                            class="text-left xl:text-lg xs:text-base text-sm text-black group-hover:text-white font-[300] xx:line-clamp-3 line-clamp-2 capitalize">
                            Lorem ipsum dolor sit amet consectetur. Molestie at id odio tincidunt massa nullam tortor. At
                            amet dignissim integer id quis vestibulum mi turpis quam.
                        </p>
                    </div>

                    <!-- Description -->
                    {{-- <div class="absolute inset-0 flex flex-col justify-center px-4 opacity-0 transition-opacity duration-300 ease-out group-hover:opacity-100">
                        </div> --}}
                </a>
            </div>

            <div class="" data-aos="zoom-in" data-aos-duration="500">
                <a href="{{ route('service.index') }}"
                    class="transition-all ease-in-out duration-300 text-[#03203E] hover:text-white sm:text-lg text-base rounded-full flex justify-center capitalize border border-[#03203E] items-center text-center shadow-md font-light p-2 w-40 m-auto bg-transparent hover:bg-[#03203E] hover:border-[#03203E]"
                    style="text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.2);">view all service</a>
            </div>

        </div>
    </section>

    <section
        class="max-w-[1536px] mx-auto lg:my-12 my-6  overflow-hidden items-center flex flex-col justify-center md:gap-12 gap-6">
        <div class="flex gap-6 flex-col" data-aos="zoom-in" data-aos-duration="500">

            <div class="flex items-center justify-center gap-2 max-w-[80%] w-full mx-auto">
                <span class="w-40 h-[1px] bg-black rounded-full "></span>
                <p
                    class="ss:w-[300px] w-full text-center font-[400] xl:text-xl ss:text-lg text-base text-[#03203E] ss:tracking-[8px] tracking-widest">
                    OUR GALLRY
                </p>
                <span class="w-40 h-[1px] bg-black rounded-full"></span>
            </div>

            <p class="font-[700] ss:tracking-[8px] sm:text-3xl text-xl text-center uppercase text-black"
                style="text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.2);">
                The happiest place on earth
            </p>
        </div>

        {{-- img --}}
        <div class="max-w-[1320px] m-auto px-4 grid sm:grid-cols-3 grid-cols-2 sm:gap-4 gap-2 my-6 image-gallery">
            {{-- 1 --}}
            <div class="max-w-full xl:h-[300px] ss:h-[200px] h-[150px] z-50 relative cursor-pointer image-container"
                data-aos="zoom-in" data-aos-duration="500">
                <img src="/images/img/1111.png" alt="Image"
                    class="w-full h-full rounded-md hover:opacity-70 gallery-image">
                <div
                    class="absolute inset-0 text-white rounded-md bg-gradient-to-b from-[#224e4e] to-[#012020] opacity-0 hover:opacity-70 flex justify-center items-center transition-opacity duration-300">
                    <img src="/images/icon/eye.png" alt="View Icon"
                        class="w-auto h-auto max-w-12 max-h-12 opacity-100 view-icon">
                    VIEW
                </div>
            </div>

            {{-- 2 --}}
            <div class="max-w-full xl:h-[300px] ss:h-[200px] h-[150px] z-50 relative cursor-pointer image-container"
                data-aos="zoom-in" data-aos-duration="500">
                <img src="/images/img/2222.png" alt="Image"
                    class="w-full h-full rounded-md hover:opacity-70 gallery-image">
                <div
                    class="absolute inset-0 text-white rounded-md bg-gradient-to-b from-[#224e4e] to-[#012020] opacity-0 hover:opacity-70 flex justify-center items-center transition-opacity duration-300">
                    <img src="/images/icon/eye.png" alt="View Icon"
                        class="w-auto h-auto max-w-12 max-h-12 opacity-100 view-icon">
                    VIEW
                </div>
            </div>

            {{-- 3 --}}
            <div class="max-w-full xl:h-[300px] ss:h-[200px] h-[150px] z-50 relative cursor-pointer image-container"
                data-aos="zoom-in" data-aos-duration="500">
                <img src="/images/img/3333.png" alt="Image"
                    class="w-full h-full rounded-md hover:opacity-70 gallery-image">
                <div
                    class="absolute inset-0 text-white rounded-md bg-gradient-to-b from-[#224e4e] to-[#012020] opacity-0 hover:opacity-70 flex justify-center items-center transition-opacity duration-300">
                    <img src="/images/icon/eye.png" alt="View Icon"
                        class="w-auto h-auto max-w-12 max-h-12 opacity-100 view-icon">
                    VIEW
                </div>
            </div>

            {{-- 4 --}}
            <div class="max-w-full xl:h-[300px] ss:h-[200px] h-[150px] z-50 relative cursor-pointer image-container"
                data-aos="zoom-in" data-aos-duration="500">
                <img src="/images/img/4444.png" alt="Image"
                    class="w-full h-full rounded-md hover:opacity-70 gallery-image">
                <div
                    class="absolute inset-0 text-white rounded-md bg-gradient-to-b from-[#224e4e] to-[#012020] opacity-0 hover:opacity-70 flex justify-center items-center transition-opacity duration-300">
                    <img src="/images/icon/eye.png" alt="View Icon"
                        class="w-auto h-auto max-w-12 max-h-12 opacity-100 view-icon">
                    VIEW
                </div>
            </div>

            {{-- 5 --}}
            <div class="max-w-full xl:h-[300px] ss:h-[200px] h-[150px] z-50 relative cursor-pointer image-container"
                data-aos="zoom-in" data-aos-duration="500">
                <img src="/images/img/5555.png" alt="Image"
                    class="w-full h-full rounded-md hover:opacity-70 gallery-image">
                <div
                    class="absolute inset-0 text-white rounded-md bg-gradient-to-b from-[#224e4e] to-[#012020] opacity-0 hover:opacity-70 flex justify-center items-center transition-opacity duration-300">
                    <img src="/images/icon/eye.png" alt="View Icon"
                        class="w-auto h-auto max-w-12 max-h-12 opacity-100 view-icon">
                    VIEW
                </div>
            </div>

            {{-- 6 --}}
            <div class="max-w-full xl:h-[300px] ss:h-[200px] h-[150px] z-50 relative cursor-pointer image-container"
                data-aos="zoom-in" data-aos-duration="500">
                <img src="/images/img/6666.png" alt="Image"
                    class="w-full h-full rounded-md hover:opacity-70 gallery-image">
                <div
                    class="absolute inset-0 text-white rounded-md bg-gradient-to-b from-[#224e4e] to-[#012020] opacity-0 hover:opacity-70 flex justify-center items-center transition-opacity duration-300">
                    <img src="/images/icon/eye.png" alt="View Icon"
                        class="w-auto h-auto max-w-12 max-h-12 opacity-100 view-icon">
                    VIEW
                </div>
            </div>
        </div>

        {{-- btn --}}
        <div class="" data-aos="zoom-in" data-aos-duration="500">
            <a href="/gallery"
                class="transition-all ease-in-out duration-300 text-[#03203E] hover:text-white sm:text-lg text-base rounded-full flex justify-center capitalize border border-[#03203E] items-center text-center shadow-md font-light p-2 w-40 m-auto bg-white hover:bg-[#03203E] hover:border-[#03203E]"
                style="text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.2);">view all</a>
        </div>
    </section>

    <section class="relative  overflow-hidden">
        <div class="absolute w-full h-full">
            <img src="/images/img/Mask group.png" alt="Banner Image" class="w-full h-full object-cover">
            <div class="absolute top-0 left-0 w-full h-full bg-black opacity-20"></div>
        </div>

        <div
            class="relative text-white max-w-[1536px] mx-auto pt-12 pb-6 z-50 flex flex-col gap-y-8 justify-center items-center">
            <div class="flex gap-y-4 flex-col justify-center items-center" data-aos="zoom-in" data-aos-duration="500">
                <p class="text-[#03203E] xltext-2xl ss:text-lg text-base tracking-widest uppercase">BOOK NOW!</p>
                <p class="text-black xl:text-4xl ss:text-2xl text-lg tracking-widest capitalize font-[600]">Welcome To The
                    Resort</p>
                <p class="text-black xl:text-4xl ss:text-2xl text-lg tracking-widest capitalize font-[600]">Book Your Stay
                    Today.</p>
            </div>

            <div class="" data-aos="zoom-in" data-aos-duration="500">
                <a href="{{ route('room.index') }}"
                    class="transition-all bg-transparent ease-in-out duration-300 text-[#03203E] hover:text-white sm:text-lg text-base rounded-full flex justify-center uppercase border border-[#03203E] items-center text-center shadow-md font-light p-2 w-52 font-[500] m-auto hover:bg-[#03203E] hover:border-[#03203E]"
                    style="text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.2);">book YOUR ROOM</a>
            </div>
        </div>
    </section>


    <!-- Popup แสดงวิดีโอ -->
    <div id="video-modal"
        class="fixed inset-0 bg-black bg-opacity-50 flex justify-center items-center hidden z-[100] w-full">
        <div
            class="relative bg-transparent xl:w-[950px] sm:w-[700px] ss:w-[500px] w-[380px] h-[650px] max-xl:h-[500px] max-md:h-[350px] p-4">
            <!-- วิดีโอ -->

            <iframe id="video-frame" class="w-full h-full" frameborder="0" allow="autoplay; encrypted-media"
                allowfullscreen></iframe>
            <!-- ปุ่มปิด -->
            <div class="flex justify-center items-center cursor-pointer group mt-2 " id="video-close">

                <div class="w-12 h-12 cursor-pointer border-2 flex justify-center items-center bg-white rounded-full p-2 
                 group-hover:border-[#03203E] transition-all duration-300 ease-in-out"
                    id="close-cate">
                    <img src="/images/icon/close-bold-svgrepo-com.png" alt="Close Icon" class="w-full h-full">
                </div>
            </div>
        </div>
    </div>

    <!-- Popup GALLERY -->
    <div id="image-popup" class="fixed inset-0 flex items-center justify-center bg-black bg-opacity-50 hidden z-[100] ">
        <div
            class="relative bg-transparent  xl:w-[900px] sm:w-[700px] w-full 2xl:h-[600px] xl:h-[600px] md:h-[450px] xs:h-[400px] h-[260px] px-4">
            <div class="swiper mySwiper_img text-black ">
                <div class="swiper-wrapper  ">
                    <!-- ใส่รูปในแต่ละ slide -->
                    @for ($i = 0; $i < 2; $i++)
                        <div class="swiper-slide ">
                            <img src="/images/img/1111.png" alt="Image" class="w-full h-full ">
                        </div>
                        <div class="swiper-slide">
                            <img src="/images/img/2222.png" alt="Image" class="w-full h-full">
                        </div>
                        <div class="swiper-slide">
                            <img src="/images/img/3333.png" alt="Image" class="w-full h-full">
                        </div>
                        <div class="swiper-slide">
                            <img src="/images/img/4444.png" alt="Image" class="w-full h-full">
                        </div>
                        <div class="swiper-slide">
                            <img src="/images/img/5555.png" alt="Image" class="w-full h-full">
                        </div>
                        <div class="swiper-slide">
                            <img src="/images/img/6666.png" alt="Image" class="w-full h-full">
                        </div>
                    @endfor
                </div>

                <div
                    class="swiper-button-next bg-[#03203E] bg-opacity-30 p-2 rounded-full shadow-md hover:bg-[#03203E] w-10 h-10 flex items-center justify-center">
                </div>
                <div
                    class="swiper-button-prev bg-[#03203E] bg-opacity-30 p-2 rounded-full shadow-md hover:bg-[#03203E] w-10 h-10 flex items-center justify-center">
                </div>
            </div>

            <div class="flex absolute justify-end items-end cursor-pointer group right-2 top-2 z-[101]" id="popup-close">
                <div class="md:w-12 md:h-12 w-8 h-8 cursor-pointer border-2 flex justify-end items-end bg-white rounded-full md:p-2 mx-4
                     group-hover:border-[#03203E] transition-all duration-300 ease-in-out"
                    id="close-cate">
                    <img src="/images/icon/close-bold-svgrepo-com.png" alt="Close Icon" class="w-full h-full">
                </div>
            </div>
        </div>
    </div>
@endsection

@section('script')
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-element-bundle.min.js"></script>
    @vite('resources/js/home/swiper.js')
    @vite('resources/js/home/dropdown.js')
@endsection
