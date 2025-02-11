@extends('layouts.main')

@section('title')
    room
@endsection

@section('style')
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    @vite('resources/css/room/room.css')
@endsection


@section('contents')
    <section class=" w-full h-auto relative z-50">
        <div
            class="absolute inset-0 z-50  flex flex-col justify-center items-center gap-y-4  max-sm:gap-y-1 max-w-[1536px] m-auto">
            <p class="text-white text-6xl max-xl:text-3xl  font-bold text-center" data-aos="zoom-in" data-aos-duration="1000">
            <div class="flex flex-col sm:gap-y-8">
                <p class="xl:text-8xl ss:text-6xl text-4xl  uppercase text-white font-[700] ss:tracking-[8px] tracking-widest"
                    data-aos="zoom-in" data-aos-duration="1000" style="text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.7);">
                    Room detail
                </p>
            </div>
            </p>
        </div>

        <div class="relative w-full h-[600px] max-2xl:h-[500px] max-lg:h-[350px] max-md:h-[250px]">
            <img src="/images/banner/ddvdb.png" alt="Banner Image" class="w-full h-full object-cover">
            <div class="absolute top-0 left-0 w-full h-full bg-black opacity-50"></div>
        </div>
    </section>

    <section class="z-50 lg:py-16 py-10  overflow-hidden">
        <div class="max-w-[1536px] m-auto xl:pb-12 pb-8 px-4 relative z-50 flex flex-col gap-y-8">
            {{-- 111 --}}
            <div class="flex gap-4 lg:flex-row flex-col gap-y-4">
                <div class="flex sm:flex-col flex-col justify-start gap-4 w-full" data-aos="fade-right"
                    data-aos-duration="1000">
                    <!-- img main -->
                    <div class="w-full">
                        <div class="relative 2xl:w-[990px] xl:w-[750px] lg:w-[650px] w-full 2xl:h-[580px] lg:h-[500px]  sm:h-[400px] h-[250px]"
                            style="box-shadow: rgba(99, 99, 99, 0.2) 0px 2px 8px 0px;">
                            <img id="img-main" src="/images/img/sddfsdf.png" alt=""
                                class="w-full h-full rounded-sm shadow-md">
                            <!-- Navigation Buttons -->
                            <button id="prev-btn"
                                class="absolute top-1/2 left-0 -translate-y-1/2 bg-opacity-40 p-1 rounded-sm shadow-md hover:hover:scale-105 max-w-12 w-12 h-auto">
                                <img src="/images/icon/prev.png" alt="" class="w-full h-full">
                            </button>
                            <button id="next-btn"
                                class="absolute top-1/2 right-0 -translate-y-1/2 bg-opacity-40 p-1 rounded-sm shadow-md hover:scale-105 max-w-12 w-12 h-auto">
                                <img src="/images/icon/next.png" alt="" class="w-full h-full">
                            </button>
                        </div>
                    </div>
                    <!-- img more -->
                    <div class="flex flex-col justify-between">
                        <div class="w-full flex justify-between gap-2 sm:flex-row pb-6 ">
                            <div class="max-w-[320px] xl:h-[180px] sm:h-[120px] max-ss:max-h-[80px] h-auto w-full hover:scale-95 cursor-pointer"
                                style="box-shadow: rgba(99, 99, 99, 0.2) 0px 2px 8px 0px;">
                                <img src="/images/img/sddfsdf.png" alt=""
                                    class="w-full h-full rounded-sm shadow-md img-more">
                            </div>
                            <div class="max-w-[320px] xl:h-[180px] sm:h-[120px] max-ss:max-h-[80px] h-auto  w-full hover:scale-95 cursor-pointer"
                                style="box-shadow: rgba(99, 99, 99, 0.2) 0px 2px 8px 0px;">
                                <img src="/images/img/dfdsfgdfr.png" alt=""
                                    class="w-full h-full rounded-sm shadow-md img-more">
                            </div>
                            <div class="max-w-[320px] xl:h-[180px] sm:h-[120px] max-ss:max-h-[80px] h-auto  w-full hover:scale-95 cursor-pointer"
                                style="box-shadow: rgba(99, 99, 99, 0.2) 0px 2px 8px 0px;">
                                <img src="/images/img/lkhl.png" alt=""
                                    class="w-full h-full rounded-sm shadow-md img-more">
                            </div>
                        </div>

                        <div class="border-b border-[#03203E80]"></div>
                    </div>
                </div>

                <div class="w-full text-black flex flex-col gap-4" data-aos="fade-left" data-aos-duration="1000">
                    {{-- 1 --}}
                    <div class="w-full 2xl:h-[580px] h-full rounded-sm xl:p-8 p-4 flex flex-col justify-between gap-4 "
                        style="box-shadow: rgba(99, 99, 99, 0.2) 0px 2px 8px 0px;">
                        <div class="flex flex-col gap-4">
                            <p class="text-[#03203E] ss:text-3xl text-2xl font-[700] capitalize">Deluxe Room</p>
                            <div class="border-b border-[#03203E80] rounded-full"></div>
                            <p class="text-[#C39963] ss:text-2xl text-xl font-[700] capitalize">1,500 ฿ / Nigth</p>
                            <p class="break-words xl:text-lg text-base font-[400] text-[#3E3E3E]">
                                Lorem ipsum dolor sit amet consectetur. Porttitor semper bibendum eu pharetra porttitor sed
                                aliquet consectetur pretium. Leo ornare cursus magna eget. Lacus tristique pellentesque
                                aliquet
                                bibendum. Nisl enim fames arcu.
                            </p>
                        </div>

                        <div
                            class="lg:w-full w-[150px] rounded-full bg-[#03203E] text-white border border-[#03203E] p-2 flex justify-center items-center shadow-md hover:bg-white hover:text-[#03203E] ">
                            <a href="/contact" class="w-full text-center ss:text-lg text-base">Book Now</a>
                        </div>
                    </div>

                    {{-- 2 --}}
                    <div class="w-full max-h-[350px] rounded-sm drop-shadow-sm xl:p-8 p-4 flex flex-col justify-between gap-4 "
                        style="box-shadow: rgba(99, 99, 99, 0.2) 0px 2px 8px 0px;">
                        <div class="flex flex-col gap-4">
                            <p class="text-[#03203E] ss:text-3xl text-2xl font-[700] capitalize">Deluxe Room</p>
                            <div class="border-b border-[#03203E80] rounded-full"></div>

                            <div class="flex justify-start items-center gap-2 flex-wrap">
                                <div class="flex justify-center gap-1 bg-[#F8F8F8] p-1 px-2 rounded-full items-center ">
                                    <div class="w-[30px] h-auto">
                                        <img src="/images/icon/Group 4721.png" alt="">
                                    </div>
                                    <p class="text-black ss:text-base text-sm font-[500]">1-2 Person</p>
                                </div>

                                <div class="flex justify-center gap-1 bg-[#F8F8F8] p-1 px-2 rounded-full items-center">
                                    <div class="w-[30px] h-auto">
                                        <img src="/images/icon/Group 4701.png" alt="">
                                    </div>
                                    <p class="text-black ss:text-base text-sm font-[500]">2 Beds</p>
                                </div>

                                <div class="flex justify-center gap-1 bg-[#F8F8F8] p-1 px-2 rounded-full items-center">
                                    <div class="w-[20px] h-auto">
                                        <img src="/images/icon/Group 471 (1).png" alt="">
                                    </div>
                                    <p class="text-black ss:text-base text-sm font-[500]">53 sq.m.</p>
                                </div>
                                <div class="flex justify-center gap-1 bg-[#F8F8F8] p-1 px-2 rounded-full items-center">
                                    <div class="w-[30px] h-auto">
                                        <img src="/images/icon/Vector (1).png" alt="">
                                    </div>
                                    <p class="text-black ss:text-base text-sm font-[500]">Free Wifi</p>
                                </div>

                                <div class="flex justify-center gap-1 bg-[#F8F8F8] p-1 px-2 rounded-full items-center">
                                    <div class="w-[30px] h-auto">
                                        <img src="/images/icon/uil_coffee1.png" alt="">
                                    </div>
                                    <p class="text-black ss:text-base text-sm font-[500]">Breakfast</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            {{-- 222 --}}
            <div class="flex justify-between lg:gap-4 gap-y-8  lg:flex-row flex-col xl:p-0  ">
                <div class="w-full flex flex-col gap-4" data-aos="fade-right" data-aos-duration="1000">
                    <div class="2xl:w-[990px] xl:w-[750px] lg:w-[650px] w-full h-auto flex flex-col gap-4">
                        <p class="text-[#03203E] ss:text-3xl text-2xl font-[700] capitalize">House Rules</p>
                        <p class="break-words max-w-[850px] ss:text-lg text-base font-[400] text-[#3E3E3E]">
                            Lorem ipsum dolor sit amet consectetur. Sapien turpis mauris cursus et. Sed elit id dolor
                            facilisis
                            urna pellentesque facilisis. Felis hac enim velit lorem at. Lacus ultricies mollis laoreet sed
                            elementum viverra ante.
                            Et morbi gravida habitant pretium. Leo enim risus maecenas nulla.
                        </p>
                    </div>

                </div>

                <div class="w-full flex xl:flex-row lg:flex-col ss:flex-row flex-col lg:justify-between  ss:gap-8 gap-y-6"
                    data-aos="fade-left" data-aos-duration="1000">

                    <div class="flex gap-4 flex-col lg:items-start md:items-center items-start">
                        <div class="flex gap-2 justify-start items-center">
                            <div class="w-[30px] h-auto">
                                <img src="/images/icon/check-in.png" alt="">
                            </div>
                            <p class="text-[#03203E] ss:text-3xl text-2xl font-[700] capitalize">Check in</p>
                        </div>
                        <div class="flex gap-2 justify-start items-center">
                            <div class="w-[20px] h-auto">
                                <img src="/images/icon/rivet-icons_check.png" alt="">
                            </div>
                            <p class="text-black ss:text-base text-sm font-[500] capitalize">Lorem ipsum dolor sit amet</p>
                        </div>
                        <div class="flex gap-2 justify-start items-center">
                            <div class="w-[20px] h-auto">
                                <img src="/images/icon/rivet-icons_check.png" alt="">
                            </div>
                            <p class="text-black ss:text-base text-sm font-[500] capitalize">Lorem ipsum dolor sit amet</p>
                        </div>

                    </div>


                    <div class="flex gap-4 flex-col lg:items-start md:items-center items-start">
                        <div class="flex gap-2 justify-start items-center">
                            <div class="w-[30px] h-auto">
                                <img src="/images/icon/check-in.png" alt="">
                            </div>
                            <p class="text-[#03203E] ss:text-3xl text-2xl font-[700] capitalize">Check out</p>
                        </div>
                        <div class="flex gap-2 justify-start items-center">
                            <div class="w-[20px] h-auto">
                                <img src="/images/icon/rivet-icons_check.png" alt="">
                            </div>
                            <p class="text-black ss:text-base text-sm font-[500] capitalize">Lorem ipsum dolor sit amet</p>
                        </div>
                        <div class="flex gap-2 justify-start items-center">
                            <div class="w-[20px] h-auto">
                                <img src="/images/icon/rivet-icons_check.png" alt="">
                            </div>
                            <p class="text-black ss:text-base text-sm font-[500] capitalize">Lorem ipsum dolor sit amet</p>
                        </div>

                    </div>

                </div>

            </div>
        </div>

        <div class="bg-[#03203E] p-6 flex flex-col gap-6 justify-center items-center z-50">
            <p class="font-[700] ss:tracking-[8px] tracking-widest ss:text-3xl text-2xl uppercase text-center text-white"
                style="text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.2);">
                Related Rooms
            </p>

            {{-- img --}}
            <div class="swiper swiper-room h-auto items-center relative max-w-[1320px] w-full">
                <div class="swiper-wrapper items-center">
                    {{-- 1 --}}
                    <div class="swiper-slide flex flex-col" data-aos="flip-left" data-aos-easing="ease-out-cubic"
                        data-aos-duration="1500">
                        <a href="/room/detail" class="rounded-sm block">
                            <div
                                class="group relative w-full h-[270px] cursor-pointer overflow-hidden shadow-md hover:shadow-2xl rounded-t-sm">
                                <img class="absolute inset-0 h-full w-full object-cover opacity-90 transition-opacity duration-300 ease-out group-hover:opacity-100 group-hover:transition-opacity group-hover:duration-300"
                                    src="/images/img/sddfsdf.png" alt="" />

                                <div
                                    class="absolute inset-0 bg-gradient-to-t from-black/0 to-transparent to-90% text-white transition-all duration-300 group-hover:bg-black group-hover:bg-opacity-45 group-hover:transition-all group-hover:duration-300">
                                    <div class="absolute w-full bottom-0 opacity-0 transition-opacity duration-300 ease-out group-hover:opacity-100 group-hover:delay-300 group-hover:duration-300"
                                        style="text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.7);">
                                        <button
                                            class="flex justify-center transition-all ease-in-out duration-300 text-white sm:text-lg text-base items-center shadow-md font-light w-full h-full p-3 bg-[#0F1D20]/50 hover:bg-[#0F1D20] backdrop-blur-xs "
                                            style="text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.7);">
                                            Book Now
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div class="p-4 flex flex-col gap-4 bg-white w-full rounded-b-sm">
                                <div class="flex justify-between items-center">
                                    <p class="text-black ss:text-xl text-xl font-[700] capitalize">Family Room</p>
                                    <div class="text-white bg-[#C39963] p-1 px-2 rounded-sm items-center">
                                        1,500 ฿ / Night
                                    </div>
                                </div>
                                <p class="break-words xl:text-base text-sm font-[400] text-[#3E3E3E] text-left">
                                    Lorem ipsum dolor sit amet consectetur. Porttitor semper bibendum eu pharetra porttitor
                                    sed aliquet consectetur pretium. Leo ornare cursus magna eget.
                                </p>
                                <div class="flex justify-start items-center gap-2 flex-wrap">
                                    <div class="flex justify-center gap-1 bg-[#D9D9D9] p-1 px-3 rounded-full items-center">
                                        <div class="w-[30px] h-auto">
                                            <img src="/images/icon/Group 472 (1).png" alt="">
                                        </div>
                                        <p class="text-black ss:text-base text-sm font-[500]">1-2 Person</p>
                                    </div>
                                    <div class="flex justify-center gap-1 bg-[#D9D9D9] p-1 px-3 rounded-full items-center">
                                        <div class="w-[30px] h-auto">
                                            <img src="/images/icon/Group 470 (1).png" alt="">
                                        </div>
                                        <p class="text-black ss:text-base text-sm font-[500]">2 Beds</p>
                                    </div>
                                    <div class="flex justify-center gap-1 bg-[#D9D9D9] p-1 px-3 rounded-full items-center">
                                        <div class="w-[20px] h-auto">
                                            <img src="/images/icon/material-symbols.png" alt="">
                                        </div>
                                        <p class="text-black ss:text-base text-sm font-[500]">53 sq.m.</p>
                                    </div>
                                </div>
                            </div>
                        </a>

                    </div>

                    {{-- 2 --}}
                    <div class="swiper-slide flex flex-col" data-aos="flip-left"
                        data-aos-easing="ease-out-cubic" data-aos-duration="1500">
                        <a href="/room/detail" class="rounded-sm block">
                            <div class="group relative w-full h-[270px] cursor-pointer overflow-hidden shadow-md hover:shadow-2xl rounded-t-sm">
                                <img class="absolute inset-0 h-full w-full object-cover opacity-90 transition-opacity duration-300 ease-out group-hover:opacity-100" src="/images/img/lkhl.png" alt="" />
                        
                                <div class="absolute inset-0 bg-gradient-to-t from-black/0 to-transparent to-90% text-white transition-all duration-300 group-hover:bg-black group-hover:bg-opacity-45">
                                    <!-- Description -->
                                    <div class="absolute w-full bottom-0 opacity-0 transition-opacity duration-300 ease-out group-hover:opacity-100 group-hover:delay-300">
                                        <button onclick="window.location.href='/room/detail'" class="flex justify-center transition-all ease-in-out duration-300 text-white sm:text-lg text-base items-center shadow-md font-light w-full h-full p-3 bg-[#0F1D20]/50 hover:bg-[#0F1D20] backdrop-blur-xs">
                                            Book Now
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div class="p-4 flex flex-col gap-4 bg-white w-full rounded-b-sm">
                                <div class="flex justify-between items-center">
                                    <p class="text-black ss:text-xl text-xl font-[700] capitalize">Double Room</p>
                                    <div class="text-white bg-[#C39963] p-1 px-2 rounded-sm items-center">
                                        1,500 ฿ / Night
                                    </div>
                                </div>
                                <p class="break-words xl:text-base text-sm font-[400] text-[#3E3E3E] text-left">
                                    Lorem ipsum dolor sit amet consectetur. Porttitor semper bibendum eu pharetra porttitor sed aliquet consectetur pretium. Leo ornare cursus magna eget.
                                </p>
                                <div class="flex justify-start items-center gap-2 flex-wrap">
                                    <div class="flex justify-center gap-1 bg-[#D9D9D9] p-1 px-3 rounded-full items-center">
                                        <div class="w-[30px] h-auto">
                                            <img src="/images/icon/Group 472 (1).png" alt="">
                                        </div>
                                        <p class="text-black ss:text-base text-sm font-[500]">1-2 Person</p>
                                    </div>
                        
                                    <div class="flex justify-center gap-1 bg-[#D9D9D9] p-1 px-3 rounded-full items-center">
                                        <div class="w-[30px] h-auto">
                                            <img src="/images/icon/Group 470 (1).png" alt="">
                                        </div>
                                        <p class="text-black ss:text-base text-sm font-[500]">2 Beds</p>
                                    </div>
                        
                                    <div class="flex justify-center gap-1 bg-[#D9D9D9] p-1 px-3 rounded-full items-center">
                                        <div class="w-[30px] h-auto">
                                            <img src="/images/icon/material-symbols.png" alt="">
                                        </div>
                                        <p class="text-black ss:text-base text-sm font-[500]">53 sq.m.</p>
                                    </div>
                                </div>
                            </div>
                        </a>
                        
                    </div>

                    {{-- 3 --}}
                    <div class="swiper-slide flex flex-col" data-aos="flip-left"
                        data-aos-easing="ease-out-cubic" data-aos-duration="1500">
                        <a href="/room/detail" class="rounded-sm block">
                            <div
                                class="group relative w-full h-[270px] cursor-pointer overflow-hidden  shadow-md hover:shadow-2xl rounded-t-sm">
                                <img class="absolute inset-0 h-full w-full object-cover opacity-90 transition-opacity duration-300 ease-out group-hover:opacity-100 group-hover:transition-opacity group-hover:duration-300"
                                    src="/images/img/bfghnjyt.png" alt="" />

                                <div
                                    class="absolute inset-0 bg-gradient-to-t from-black/0 to-transparent to-90% text-white transition-all duration-300 group-hover:bg-black group-hover:bg-opacity-45 group-hover:transition-all group-hover:duration-300">

                                    <!-- Description -->
                                    <div class="absolute w-full bottom-0  opacity-0 transition-opacity duration-300 ease-out group-hover:opacity-100 group-hover:delay-300 group-hover:duration-300"
                                        style="text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.7);">
                                        <button onclick="window.location.href='/room/detail'" class="flex justify-center transition-all ease-in-out duration-300 text-white sm:text-lg text-base items-center shadow-md font-light w-full h-full p-3 bg-[#0F1D20]/50 hover:bg-[#0F1D20] backdrop-blur-xs">
                                            Book Now
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div class="p-4 flex flex-col gap-4 bg-white w-full rounded-b-sm">
                                <div class="flex justify-between items-center ">
                                    <p class="text-black ss:text-xl text-xl font-[700] capitalize">luxury Room</p>
                                    <div class="text-white bg-[#C39963] p-1 px-2 rounded-sm items-center">
                                        1,500 ฿ / Nigth
                                    </div>
                                </div>
                                <p class="break-words xl:text-base text-sm font-[400] text-[#3E3E3E] text-left">
                                    Lorem ipsum dolor sit amet consectetur. Porttitor semper bibendum eu pharetra porttitor
                                    sed
                                    aliquet consectetur pretium. Leo ornare cursus magna eget.
                                </p>
                                <div class="flex justify-start items-center gap-2 flex-wrap">
                                    <div
                                        class="flex justify-center gap-1 bg-[#D9D9D9] p-1 px-3 rounded-full items-center ">
                                        <div class="w-[30px] h-auto">
                                            <img src="/images/icon/Group 472 (1).png" alt="">
                                        </div>
                                        <p class="text-black ss:text-base text-sm font-[500]">1-2 Person</p>
                                    </div>

                                    <div class="flex justify-center gap-1 bg-[#D9D9D9] p-1 px-3 rounded-full items-center">
                                        <div class="w-[30px] h-auto">
                                            <img src="/images/icon/Group 470 (1).png" alt="">
                                        </div>
                                        <p class="text-black ss:text-base text-sm font-[500]">2 Beds</p>
                                    </div>

                                    <div class="flex justify-center gap-1 bg-[#D9D9D9] p-1 px-3 rounded-full items-center">
                                        <div class="w-[30px] h-auto">
                                            <img src="/images/icon/material-symbols.png" alt="">
                                        </div>
                                        <p class="text-black ss:text-base text-sm font-[500]">53 sq.m.</p>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>

                </div>
            </div>

            <!-- Navigation Buttons -->
            <div class="flex justify-center items-center gap-4 overflow-hidden" data-aos="zoom-in"
                data-aos-duration="500">
                <div
                    class="room-prev-btn bg-[#3E3E3E] bg-opacity-30 p-2 rounded-full shadow-md hover:bg-white hover:bg-opacity-30 w-10 h-10 flex items-center justify-center border">
                    <img src="/images/icon/prev.png" alt="" class="w-6 h-6">
                </div>
                <div
                    class="room-next-btn bg-[#3E3E3E] bg-opacity-40 p-2 rounded-full shadow-md hover:bg-white hover:bg-opacity-30 w-10 h-10 flex items-center justify-center border">
                    <img src="/images/icon/next.png" alt="" class="w-6 h-6">
                </div>
            </div>
        </div>

    </section>
@endsection

@section('script')
    @vite('resources/js/room/swiper-img.js')
    {{-- @vite('resources/js/room/swiper.js') --}}
@endsection
