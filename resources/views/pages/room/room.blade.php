@extends('layouts.main')

@section('title')
    room
@endsection

@section('style')
    {{-- @vite('resources/css/home/preview_img.css') --}}
@endsection


@section('contents')
    <section class=" w-full h-auto relative z-50">
        <div
            class="absolute inset-0 z-50  flex flex-col justify-center items-center gap-y-4  max-sm:gap-y-1 max-w-[1536px] m-auto">
            <p class="text-white text-6xl max-xl:text-3xl  font-bold text-center" data-aos="zoom-in" data-aos-duration="500">
            <div class="flex flex-col sm:gap-y-8">
                <p class="xl:text-8xl ss:text-6xl text-4xl  uppercase text-white font-[700] ss:tracking-[8px] tracking-widest"
                    data-aos="zoom-in" data-aos-duration="500" style="text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.7);">
                    our room
                </p>
            </div>
            </p>
        </div>

        <div class="relative w-full h-[600px] max-2xl:h-[500px] max-lg:h-[350px] max-md:h-[250px]">
            <img src="/images/banner/253.png" alt="Banner Image" class="w-full h-full object-cover">
            <div class="absolute top-0 left-0 w-full h-full bg-black opacity-50"></div>
        </div>
    </section>

    <section class="z-50 md:py-16 py-[30px]">
        <div class="max-w-[1536px] m-auto p-4">
            <div class="flex flex-col sm:gap-y-16 gap-y-8">
                {{-- img --}}
                <div
                    class="max-w-[1320px] mx-auto w-full grid sm:grid-cols-2 grid-cols-1 place-items-center sm:gap-6 ss:gap-6 gap-4">
                    {{-- 1 --}}
                    <div class="flex flex-col bg-[#03203E] rounded-md" data-aos="zoom-in" data-aos-duration="500">

                        <div class="slider-container xl:h-[350px] lg:h-[300px] h-[250px]">
                            <div class="slider relative w-full h-full overflow-hidden">
                                <div class="slider-content flex w-full transition-transform duration-300 ease-in-out ">
                                    <img src="/images/img/sddfsdf.png"
                                        class="w-full h-full object-cover rounded-t-md shadow-md">
                                </div>

                                <button
                                    class="prev-btn absolute top-1/2 left-1 -translate-y-1/2 bg-transparent p-1 hover:scale-105 rounded-sm max-w-12 w-10 h-auto">
                                    <img src="/images/icon/prev.png" alt="" class="w-full h-full">
                                </button>
                                <button
                                    class="next-btn absolute top-1/2 right-1 -translate-y-1/2 p-1 hover:scale-105 bg-transparent rounded-sm max-w-12 w-10 h-auto">
                                    <img src="/images/icon/next.png" alt="" class="w-full h-full">
                                </button>
                            </div>
                        </div>
                        <div class="p-4 flex flex-col  relative gap-6">
                            <p class=" text-white ss:text-2xl text-lg font-[700] capitalize">Deluxe Room </p>

                            <div class="flex justify-start items-center gap-2 flex-wrap">
                                <div class="flex justify-center gap-1 bg-white p-1 px-2 rounded-full items-center ">
                                    <div class="w-[30px] h-auto">
                                        <img src="/images/icon/Group 4721.png" alt="">
                                    </div>
                                    <p class="text-black ss:text-base text-sm font-[500]">1-2 Person</p>
                                </div>

                                <div class="flex justify-center gap-1 bg-white p-1 px-2 rounded-full items-center">
                                    <div class="w-[30px] h-auto">
                                        <img src="/images/icon/Group 4701.png" alt="">
                                    </div>
                                    <p class="text-black ss:text-base text-sm font-[500]">2 Beds</p>
                                </div>

                                <div class="flex justify-center gap-1 bg-white p-1 px-2 rounded-full items-center">
                                    <div class="w-[20px] h-auto">
                                        <img src="/images/icon/Group 471 (1).png" alt="">
                                    </div>
                                    <p class="text-black ss:text-base text-sm font-[500]">53 sq.m.</p>
                                </div>
                            </div>

                            <p class="w-full ss:text-base text-sm text-white max-lg:line-clamp-3">Lorem ipsum dolor sit
                                amet consectetur.
                                Ornare
                                massa eget nec sit nibh ridiculus et in
                                mauris. Accumsan amet sit eget eu nunc ac sapien enim donec. Tincidunt urna donec in ac
                                penatibus.</p>



                            <div class="flex justify-center items-center">
                                <a href="/room/detail"
                                    class="transition-all ease-in-out duration-300 font-[500] text-white hover:text-[#03203E] sm:text-lg text-base rounded-full flex justify-center capitalize border border-white items-center text-center shadow-md p-2 w-40 bg-transparent hover:bg-white hover:border-white"
                                    style="text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.2);">Book Now</a>
                            </div>

                            <div
                                class="absolute top-4 right-0 p-1 px-2 w-40 items-center flex justify-center font-[700] bg-[#C39963] text-white ss:text-xl text-lg ">
                                1,500 ฿ / Nigth
                            </div>
                        </div>
                    </div>

                    {{-- 2 --}}
                    <div class="flex flex-col bg-[#03203E] rounded-md" data-aos="zoom-in" data-aos-duration="500">
                        <div class="slider-container w-full xl:h-[350px] lg:h-[300px] h-[250px]">
                            <div class="slider relative w-full h-full overflow-hidden">
                                <div class="slider-content flex w-full transition-transform duration-300 ease-in-out">
                                    <img src="/images/img/dfdsfgdfr.png"
                                        class="w-full h-full object-cover rounded-t-md shadow-md">
                                    <img src="/images/img/dfdsfgdfr.png"
                                        class="w-full h-full object-cover rounded-t-md shadow-md">
                                </div>

                                <button
                                    class="prev-btn absolute top-1/2 left-0 -translate-y-1/2 bg-transparent p-1 hover:scale-105 rounded-sm max-w-12 w-10 h-auto">
                                    <img src="/images/icon/prev.png" alt="" class="w-full h-full">
                                </button>
                                <button
                                    class="next-btn absolute top-1/2 right-0 -translate-y-1/2 p-1 hover:scale-105 bg-transparent rounded-sm max-w-12 w-10 h-auto">
                                    <img src="/images/icon/next.png" alt="" class="w-full h-full">
                                </button>
                            </div>
                        </div>
                        <div class="p-4 flex flex-col  relative gap-6">
                            <p class=" text-white ss:text-2xl text-lg font-[700] capitalize">Family Room </p>

                            <div class="flex justify-start items-center gap-2 flex-wrap">
                                <div class="flex justify-center gap-1 bg-white p-1 px-2 rounded-full items-center ">
                                    <div class="w-[30px] h-auto">
                                        <img src="/images/icon/Group 4721.png" alt="">
                                    </div>
                                    <p class="text-black ss:text-base text-sm font-[500]">2-4 Person</p>
                                </div>

                                <div class="flex justify-center gap-1 bg-white p-1 px-2 rounded-full items-center">
                                    <div class="w-[30px] h-auto">
                                        <img src="/images/icon/Group 4701.png" alt="">
                                    </div>
                                    <p class="text-black ss:text-base text-sm font-[500]">2 Beds</p>
                                </div>

                                <div class="flex justify-center gap-1 bg-white p-1 px-2 rounded-full items-center">
                                    <div class="w-[20px] h-auto">
                                        <img src="/images/icon/Group 471 (1).png" alt="">
                                    </div>
                                    <p class="text-black ss:text-base text-sm font-[500]">53 sq.m.</p>
                                </div>
                            </div>

                            <p class="w-full ss:text-base text-sm text-white max-lg:line-clamp-3">Lorem ipsum dolor sit
                                amet consectetur.
                                Ornare
                                massa eget nec sit nibh ridiculus et in
                                mauris. Accumsan amet sit eget eu nunc ac sapien enim donec. Tincidunt urna donec in ac
                                penatibus.</p>



                                <div class="flex justify-center items-center">
                                    <a href="/room/detail"
                                        class="transition-all ease-in-out duration-300 font-[500] text-white hover:text-[#03203E] sm:text-lg text-base rounded-full flex justify-center capitalize border border-white items-center text-center shadow-md p-2 w-40 bg-transparent hover:bg-white hover:border-white"
                                        style="text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.2);">Book Now</a>
                                </div>


                            <div
                                class="absolute top-4 right-0 p-1 px-2 w-40 items-center flex justify-center font-[700] bg-[#C39963] text-white ss:text-xl text-lg ">
                                2,500 ฿ / Nigth
                            </div>
                        </div>
                    </div>

                    {{-- 3 --}}
                    <div class="flex flex-col bg-[#03203E] rounded-md" data-aos="zoom-in" data-aos-duration="500">

                        <div class="slider-container w-full xl:h-[350px] lg:h-[300px] h-[250px]">
                            <div class="slider relative w-full h-full overflow-hidden">
                                <div class="slider-content flex w-full transition-transform duration-300 ease-in-out">
                                    <img src="/images/img/lkhl.png"
                                        class="w-full h-full object-cover rounded-t-md shadow-md">
                                    <img src="/images/img/lkhl.png"
                                        class="w-full h-full object-cover rounded-t-md shadow-md">
                                </div>

                                <button
                                    class="prev-btn absolute top-1/2 left-0 -translate-y-1/2 bg-transparent p-1 hover:scale-105 rounded-sm max-w-12 w-10 h-auto">
                                    <img src="/images/icon/prev.png" alt="" class="w-full h-full">
                                </button>
                                <button
                                    class="next-btn absolute top-1/2 right-0 -translate-y-1/2 p-1 hover:scale-105 bg-transparent rounded-sm max-w-12 w-10 h-auto">
                                    <img src="/images/icon/next.png" alt="" class="w-full h-full">
                                </button>
                            </div>
                        </div>
                        <div class="p-4 flex flex-col  relative gap-6">
                            <p class=" text-white ss:text-2xl text-lg font-[700] capitalize">Double Room</p>

                            <div class="flex justify-start items-center gap-2 flex-wrap">
                                <div class="flex justify-center gap-1 bg-white p-1 px-2 rounded-full items-center ">
                                    <div class="w-[30px] h-auto">
                                        <img src="/images/icon/Group 4721.png" alt="">
                                    </div>
                                    <p class="text-black ss:text-base text-sm font-[500]">1-2 Person</p>
                                </div>

                                <div class="flex justify-center gap-1 bg-white p-1 px-2 rounded-full items-center">
                                    <div class="w-[30px] h-auto">
                                        <img src="/images/icon/Group 4701.png" alt="">
                                    </div>
                                    <p class="text-black ss:text-base text-sm font-[500]">2 Beds</p>
                                </div>

                                <div class="flex justify-center gap-1 bg-white p-1 px-2 rounded-full items-center">
                                    <div class="w-[20px] h-auto">
                                        <img src="/images/icon/Group 471 (1).png" alt="">
                                    </div>
                                    <p class="text-black ss:text-base text-sm font-[500]">53 sq.m.</p>
                                </div>
                            </div>

                            <p class="w-full ss:text-base text-sm text-white max-lg:line-clamp-3">Lorem ipsum dolor sit
                                amet consectetur.
                                Ornare
                                massa eget nec sit nibh ridiculus et in
                                mauris. Accumsan amet sit eget eu nunc ac sapien enim donec. Tincidunt urna donec in ac
                                penatibus.</p>




                                <div class="flex justify-center items-center">
                                    <a href="/room/detail"
                                        class="transition-all ease-in-out duration-300 font-[500] text-white hover:text-[#03203E] sm:text-lg text-base rounded-full flex justify-center capitalize border border-white items-center text-center shadow-md p-2 w-40 bg-transparent hover:bg-white hover:border-white"
                                        style="text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.2);">Book Now</a>
                                </div>


                            <div
                                class="absolute top-4 right-0 p-1 px-2 w-40 items-center flex justify-center font-[700] bg-[#C39963] text-white ss:text-xl text-lg ">
                                3,000 ฿ / Nigth
                            </div>
                        </div>
                    </div>

                    {{-- 4 --}}
                    <div class="flex flex-col bg-[#03203E] rounded-md" data-aos="zoom-in" data-aos-duration="500">

                        <div class="slider-container w-full xl:h-[350px] lg:h-[300px] h-[250px]">
                            <div class="slider relative w-full h-full overflow-hidden">
                                <div class="slider-content flex w-full transition-transform duration-300 ease-in-out">
                                    <img src="/images/img/bfghnjyt.png" class="w-full h-full rounded-t-md shadow-md">
                                </div>

                                <button
                                    class="prev-btn absolute top-1/2 left-0 -translate-y-1/2 bg-transparent p-1 hover:scale-105 rounded-sm max-w-12 w-10 h-auto">
                                    <img src="/images/icon/prev.png" alt="" class="w-full h-full">
                                </button>
                                <button
                                    class="next-btn absolute top-1/2 right-0 -translate-y-1/2 p-1 hover:scale-105 bg-transparent rounded-sm max-w-12 w-10 h-auto">
                                    <img src="/images/icon/next.png" alt="" class="w-full h-full">
                                </button>
                            </div>
                        </div>
                        <div class="p-4 flex flex-col relative gap-6">
                            <p class=" text-white ss:text-2xl text-lg font-[700] capitalize">luxury Room</p>

                            <div class="flex justify-start items-center gap-2 flex-wrap">
                                <div class="flex justify-center gap-1 bg-white p-1 px-2 rounded-full items-center ">
                                    <div class="w-[30px] h-auto">
                                        <img src="/images/icon/Group 4721.png" alt="">
                                    </div>
                                    <p class="text-black ss:text-base text-sm font-[500]">1-2 Person</p>
                                </div>

                                <div class="flex justify-center gap-1 bg-white p-1 px-2 rounded-full items-center">
                                    <div class="w-[30px] h-auto">
                                        <img src="/images/icon/Group 4701.png" alt="">
                                    </div>
                                    <p class="text-black ss:text-base text-sm font-[500]">2 Beds</p>
                                </div>

                                <div class="flex justify-center gap-1 bg-white p-1 px-2 rounded-full items-center">
                                    <div class="w-[20px] h-auto">
                                        <img src="/images/icon/Group 471 (1).png" alt="">
                                    </div>
                                    <p class="text-black ss:text-base text-sm font-[500]">53 sq.m.</p>
                                </div>
                            </div>

                            <p class="w-full ss:text-base text-sm text-white max-lg:line-clamp-3">Lorem ipsum dolor sit
                                amet consectetur.
                                Ornare
                                massa eget nec sit nibh ridiculus et in
                                mauris. Accumsan amet sit eget eu nunc ac sapien enim donec. Tincidunt urna donec in ac
                                penatibus.</p>




                                <div class="flex justify-center items-center">
                                    <a href="/room/detail"
                                        class="transition-all ease-in-out duration-300 font-[500] text-white hover:text-[#03203E] sm:text-lg text-base rounded-full flex justify-center capitalize border border-white items-center text-center shadow-md p-2 w-40 bg-transparent hover:bg-white hover:border-white"
                                        style="text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.2);">Book Now</a>
                                </div>


                            <div
                                class="absolute top-4 right-0 p-1 px-2 w-40 items-center flex justify-center font-[700] bg-[#C39963] text-white ss:text-xl text-lg ">
                                1,500 ฿ / Nigth
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
@endsection

@section('script')
    @vite('resources/js/room/swiper.js')
@endsection
