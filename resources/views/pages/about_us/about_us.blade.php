@extends('layouts.main')

@section('title')
    about us
@endsection

@section('style')
    @vite('resources/css/gallery/preview_img.css')
@endsection


@section('contents')
    <section class=" w-full h-auto relative z-50">
        <div
            class="absolute inset-0 z-50  flex flex-col justify-center items-center gap-y-4  max-sm:gap-y-1 max-w-[1536px] m-auto">
            <p class="text-white text-6xl max-xl:text-3xl  font-bold text-center" data-aos="zoom-in" data-aos-duration="1000">
            <div class="flex flex-col sm:gap-y-8">
                <p class="xl:text-8xl ss:text-6xl text-4xl uppercase text-white font-[700] ss:tracking-[8px] tracking-widest"
                    data-aos="zoom-in" data-aos-duration="1000" style="text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.7);">
                    about us
                </p>
            </div>
            </p>
        </div>

        <div class="relative w-full h-[600px] max-2xl:h-[500px] max-lg:h-[350px] max-md:h-[250px]">
            <img src="/images/banner/5678.png" alt="Banner Image" class="w-full h-full object-cover">
            <div class="absolute top-0 left-0 w-full h-full bg-black opacity-50"></div>
        </div>
    </section>

    <div class="xl:my-12 my-6">
        <section class=" overflow-hidden">
            <div class="max-w-[1536px] m-auto p-4 flex flex-col ss:gap-y-16 gap-y-8">
                <div class="flex gap-y-8 flex-col justify-center items-center" data-aos="zoom-in" data-aos-duration="1000">
                    <p
                        class="w-full text-center font-[400] ss:text-lg text-base text-black ss:tracking-[8px] tracking-widest">
                        WELCOME TO CARMELINA HOTEL
                    </p>

                    <div class="flex items-center justify-center gap-2 w-full mx-auto">
                        <span class="ss:w-40 xx:w-14 w-6 h-[1px] bg-black rounded-full "></span>
                        <p class="font-[700] ss:tracking-[8px] tracking-widest lg:text-3xl ss:text-xl text-xl text-center uppercase text-black "
                            style="text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.2);">
                            WE ALWAYS CARE ABOUT YOUR EXPERIENCE
                        </p>
                        <span class="ss:w-40 xx:w-14 w-6 h-[1px] bg-black rounded-full"></span>
                    </div>

                    <p class="font-light ss:text-base text-sm text-center w-full text-[#3E3E3E] ss:max-w-[80%] "> Lorem
                        ipsum dolor sit amet
                        consectetur. Potenti scelerisque aliquet pellentesque volutpat
                        tempor et. Nulla cras sit tempus at porta auctor dictum erat eu. 
                    </p>

                </div>


                <div class="swiper swiper-about-us h-auto items-center relative max-w-[1320px] w-full mb-6">
                    <div class="swiper-wrapper items-center">
                        {{-- 1 --}}
                        <div class="swiper-slide flex flex-col rounded-sm w-full md:h-[440px] h-[300px]"
                            data-aos="flip-left" data-aos-easing="ease-out-cubic" data-aos-duration="1000">
                            <img src="/images/img/1111.png" alt="">
                        </div>

                        {{-- 2 --}}
                        <div class="swiper-slide flex flex-col rounded-sm w-full md:h-[440px] h-[300px]"
                            data-aos="flip-left" data-aos-easing="ease-out-cubic" data-aos-duration="1000">
                            <img src="/images/img/2222.png" alt="">
                        </div>

                        {{-- 3 --}}
                        <div class="swiper-slide flex flex-col rounded-sm w-full md:h-[440px] h-[300px]"
                            data-aos="flip-left" data-aos-easing="ease-out-cubic" data-aos-duration="1000">
                            <img src="/images/img/3333.png" alt="">
                        </div>

                        {{-- 4 --}}
                        <div class="swiper-slide flex flex-col rounded-sm w-full md:h-[440px] h-[300px]"
                            data-aos="flip-left" data-aos-easing="ease-out-cubic" data-aos-duration="1000">
                            <img src="/images/img/4444.png" alt="">
                        </div>

                    </div>

                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                </div>

            </div>

        </section>

        <section class="relative xl:mb-12 overflow-hidden">
            <div class="absolute w-full h-full">
                <img src="/images/img/dfsddffdsfds.png" alt="Banner Image" class="w-full h-full object-cover">
                <div class="absolute top-0 left-0 w-full h-full bg-black opacity-50"></div>
            </div>

            <div
                class="relative text-white max-w-[1536px] mx-auto pt-12 pb-6 z-50 flex flex-col justify-center items-center gap-y-6">
                <div class="flex gap-2" data-aos="zoom-in" data-aos-duration="800">
                    @for ($i = 0; $i < 5; $i++)
                        <div class="h-auto w-[25px] ">
                            <img src="/images/icon/Vector.png" alt="" class="w-full h-full shadow-md">
                        </div>
                    @endfor
                </div>

                <div class="flex gap-2 flex-col justify-center items-center" data-aos="zoom-in" data-aos-duration="1000">
                    <p class="text-white xltext-2xl ss:text-lg text-base tracking-widest capitalize">Beach Resort Hotel</p>
                    <p class="text-white xl:text-3xl ss:text-xl text-lg tracking-widest capitalize">Promotional Video</p>
                </div>

                <div class="" data-aos="zoom-in" data-aos-duration="1000">
                    <div class="transition-all ease-in-out duration-300 max-h-[100px] w-auto cursor-pointer overflow-hidden hover:scale-110"
                        id="video-open">
                        <img src="/images/icon/Group 442.png" alt="" class="w-full h-full  ">
                    </div>
                </div>
            </div>
        </section>

        <section class="overflow-hidden">
            <div class="max-w-[1536px] m-auto py-8 px-4 flex flex-col justify-center gap-y-8 relative">
                <p class="w-full text-center font-[400] ss:text-lg text-sm text-black ss:tracking-[8px] tracking-widest"
                    data-aos="zoom-in" data-aos-duration="1000">
                    F.A.QS
                </p>
                <p class="font-[700] ss:tracking-[8px] sm:text-3xl text-xl text-center capitalize text-black "
                    style="text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.2);" data-aos="zoom-in" data-aos-duration="1000">
                    Popular Questions
                </p>

                <div class="w-full max-md:pt-4 flex flex-col gap-y-6 ss:mt-6" data-aos="fade-up" data-aos-duration="1000">
                    @for ($i = 0; $i < 6; $i++)
                        <div class="flex flex-col items-center py-4 bg-white shadow-md rounded-md p-6"
                            style="box-shadow: rgba(99, 99, 99, 0.2) 0px 2px 8px 0px;">
                            <div class="flex justify-between w-full items-center open_q_detail cursor-pointer">
                                <p class="text-[#03203E] font-[500] sm:text-lg text-base text-left uppercase">
                                    Lorem ipsum dolor sit amet consectetur. Nunc ut quam.
                                </p>

                                <div class="w-[30px] h-auto">
                                    <img src="/images/icon/Group 575.png" alt=""
                                        class="w-full arrow-icon transition-all duration-300 ease-in-out">
                                </div>
                            </div>

                            <div
                                class="transition-all duration-300 ease-in-out max-h-0 opacity-0 overflow-hidden q_detail">
                                <p class="font-[300] sm:text-base text-sm text-left w-full text-[#3E3E3E] pt-6">
                                    Lorem ipsum dolor sit amet consectetur. Quisque id in tempor pellentesque vestibulum
                                    vulputate egestas fermentum. Mi odio magna lobortis adipiscing sit egestas. Id pharetra
                                    facilisi metus commodo tortor egestas. Odio cursus elit vitae maecenas imperdiet ut
                                    egestas
                                    orci. Amet at enim proin lacus ut quis. Amet phasellus risus viverra sed in malesuada
                                    nec.
                                </p>
                            </div>

                        </div>
                    @endfor
                </div>

            </div>
        </section>

    </div>

    <!-- Popup แสดงวิดีโอ -->
    <div id="video-modal"
        class="fixed inset-0 bg-black bg-opacity-50 flex justify-center items-center hidden z-[100] w-full">
        <div
            class="relative bg-transparent xl:w-[950px] sm:w-[700px] ss:w-[500px] w-[380px] h-[650px] max-xl:h-[500px] max-md:h-[350px] p-4">
            <!-- วิดีโอ -->

            <iframe id="video-frame" class="w-full h-full" frameborder="0" allow="autoplay; encrypted-media"
                allowfullscreen></iframe>
            <!-- ปุ่มปิด -->
            <div class="flex justify-center items-center cursor-pointer group mt-2" id="video-close">
                <div class="w-12 h-12 cursor-pointer border-2 flex justify-center items-center bg-white rounded-full p-2 
                 group-hover:border-[#03203E] transition-all duration-300 ease-in-out"
                    id="close-cate">
                    <img src="/images/icon/close-bold-svgrepo-com.png" alt="Close Icon" class="w-full h-full">
                </div>
            </div>
        </div>
    </div>
@endsection

@section('script')
    @vite('resources/js/about-us/swiper.js')
    @vite('resources/js/home/dropdown.js')
@endsection
