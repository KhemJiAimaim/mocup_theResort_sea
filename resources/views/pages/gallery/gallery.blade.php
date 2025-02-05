@extends('layouts.main')

@section('title')
    gallery
@endsection

@section('style')
    @vite('resources/css/gallery/preview_img.css')
@endsection


@section('contents')
    <section class=" w-full h-auto relative z-50">
        <div
            class="absolute inset-0 z-50  flex flex-col justify-center items-center gap-y-4  max-sm:gap-y-1 max-w-[1536px] m-auto">
            <p class="text-white text-6xl max-xl:text-3xl  font-bold text-center" data-aos="zoom-in" data-aos-duration="3000">
            <div class="flex flex-col sm:gap-y-8">
                <p class="xl:text-8xl ss:text-6xl text-4xl  uppercase text-white font-[700] ss:tracking-[8px] tracking-widest"
                    data-aos="zoom-in" data-aos-duration="3000" style="text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.7);">
                    our GALLERY
                </p>
            </div>
            </p>
        </div>

        <div class="relative w-full h-[600px] max-2xl:h-[500px] max-lg:h-[350px] max-md:h-[250px]">
            <img src="/images/banner/45353.png" alt="Banner Image" class="w-full h-full object-cover">
            <div class="absolute top-0 left-0 w-full h-full bg-black opacity-50"></div>
        </div>
    </section>

    <section class="">
        <div class="max-w-[1536px] m-auto p-4">
            {{-- GALLERY --}}
            <div class="2xl:py-6 lg:mt-16 mt-4">
                <div
                    class="max-w-[1536px] m-auto grid sm:grid-cols-3 grid-cols-2 sm:gap-6 gap-4 my-6 image-gallery transition-all ease-in-out duration-500">

                    @for ($i = 0; $i < 2; $i++)
                        {{-- 1 --}}
                        <div class="max-w-full xl:h-[300px] ss:h-[200px] h-[150px] z-50 relative cursor-pointer image-container"
                            data-aos="zoom-in" data-aos-duration="3000">
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
                            data-aos="zoom-in" data-aos-duration="3000">
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
                            data-aos="zoom-in" data-aos-duration="3000">
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
                            data-aos="zoom-in" data-aos-duration="3000">
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
                            data-aos="zoom-in" data-aos-duration="3000">
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
                            data-aos="zoom-in" data-aos-duration="3000">
                            <img src="/images/img/6666.png" alt="Image"
                                class="w-full h-full rounded-md hover:opacity-70 gallery-image">
                            <div
                                class="absolute inset-0 text-white rounded-md bg-gradient-to-b from-[#224e4e] to-[#012020] opacity-0 hover:opacity-70 flex justify-center items-center transition-opacity duration-300">
                                <img src="/images/icon/eye.png" alt="View Icon"
                                    class="w-auto h-auto max-w-12 max-h-12 opacity-100 view-icon">
                                VIEW
                            </div>
                        </div>
                    @endfor
                </div>

                {{-- pagination --}}
                <div class="flex flex-row gap-x-8 justify-center items-center pt-12 cursor-pointer">
                    <div class="w-[15px] h-[30px] hover:scale-110 transition-all duration-300 ease-in">
                        <img src="/images/icon/weui_arrow-outlined (1).png" alt="" class="w-full h-full">
                    </div>

                    <div class="flex gap-4">
                        <p class="text-black border-b border-black font-[700] ss:text-lg text-base"> 1 </p>
                        <p
                            class="text-black  font-[500] hover:font-[700] ss:text-lg text-base hover:border-b border-black transition-all duration-300 ease-in ">
                            2 </p>
                        <p
                            class="text-black  font-[500] hover:font-[700] ss:text-lg text-base hover:border-b border-black transition-all duration-300 ease-in ">
                            3 </p>
                        <p class="text-black  font-[500] ss:text-lg text-base"> ... </p>
                    </div>
                    <div class="w-[15px] h-[30px] hover:scale-110 transition-all duration-300 ease-in">
                        <img src="/images/icon/weui_arrow-outlined.png" alt="" class="w-full h-full">
                    </div>

                </div>


            </div>
        </div>

    </section>


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

            <div class="flex justify-center items-center cursor-pointer group mt-2" id="popup-close">
                <p
                    class="border-2 flex justify-center items-center sm:w-10 sm:h-10 w-8 h-8 bg-white rounded-full text-black group-hover:text-red-500 group-hover:border-red-500 transition-all duration-300 ease-in-out">
                    X</p>
            </div>
        </div>
    </div>
@endsection

@section('script')
    @vite('resources/js/gallery/swiper.js')
@endsection
