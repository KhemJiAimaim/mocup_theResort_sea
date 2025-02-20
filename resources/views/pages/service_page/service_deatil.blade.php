@extends('layouts.main')

@section('title')
    service
@endsection

@section('style')
    {{-- @vite('resources/css/home/preview_img.css') --}}
@endsection


@section('contents')
    <section class=" w-full h-auto relative z-50">
        <div class="relative w-full h-[600px] max-2xl:h-[500px] max-lg:h-[350px] max-md:h-[250px]">
            <img src="/images/banner/Restaurant.png" alt="Banner Image" class="w-full h-full object-cover">
            <div class="absolute top-0 left-0 w-full h-full bg-black opacity-30"></div>
        </div>
    </section>
<div class="py-8">
    <section class="pb-8 overflow-hidden">
        <div class="max-w-[1320px] m-auto  px-4 flex flex-col ss:gap-y-12 gap-y-8">
            <div class="flex flex-row items-center justify-start gap-4">
                <div class="max-w-[50px] h-auto">
                    <img src="/images/icon/ion_restaurant-outline (1).png" alt="">
                </div>
                <div class="flex flex-col">
                    <p class="text-black font-[700] md:text-3xl ss:text-2xl text-xl capitalize">{{$title}}
                    </p>
                    <p class="text-black ss:text-xl text-lg font-light capitalize">
                        An Experience for the Senses
                    </p>
                </div>
            </div>

            <p class="text-black ss:text-base text-sm font-light capitalize">Lorem ipsum dolor sit amet consectetur. Ornare
                enim aliquam praesent mi interdum. Orci accumsan mi turpis
                duis sagittis. Eget turpis ac dictum vitae. Facilisis semper vel dis enim mauris fermentum sit et. Ultrices
                venenatis quam phasellus in mauris. Quis cras donec proin magna ac. Ultricies in purus viverra tristique
                pretium mi ut morbi.
                Nulla magna vitae aenean porttitor morbi est sem. Scelerisque consectetur turpis rhoncus aenean. Ornare
                hendrerit id vel fringilla aliquam tempor rutrum adipiscing. Amet vitae felis in enim viverra. Ut fames quis
                ullamcorper enim velit integer potenti venenatis convallis. Vitae pellentesque aliquam nisi molestie cras
                tortor sed magna. Condimentum justo massa porttitor nisl vulputate tellus vel integer a.
            </p>

            <div class="flex flex-col gap-y-4">
                <p class="txet-black text-2xl font-[500]">
                    Hours
                </p>
                @for ($i = 0; $i < 3; $i++)
                    <div class="flex gap-x-4 flex-row">
                        <div class="max-w-[25px] h-auto">
                            <img src="/images/icon/Vector (3).png" alt="">
                        </div>
                        <p class="text-black ss:text-base text-sm font-light capitalize">
                            Lorem ipsum dolor sit amet consectetur. Dolor est.
                        </p>
                    </div>
                @endfor

            </div>
        </div>
    </section>


    <section class="relative  overflow-hidden">
        <div class="absolute w-full h-full">
            <img src="/images/img/Mask group.png" alt="Banner Image" class="w-full h-full object-cover">
            <div class="absolute top-0 left-0 w-full h-full bg-black opacity-20"></div>
        </div>

        <div  class="relative text-white max-w-[1536px] mx-auto pt-12 pb-6 z-50 flex flex-col gap-y-8 justify-center items-center">
            <div class="flex gap-y-4 flex-col justify-center items-center" data-aos="zoom-in" data-aos-duration="500">
                <p class="text-[#03203E] xltext-2xl ss:text-lg text-base tracking-widest uppercase">BOOK NOW!</p>
                <p class="text-black xl:text-4xl ss:text-2xl text-lg tracking-widest capitalize font-[600]">Welcome To The Resort</p>
                <p class="text-black xl:text-4xl ss:text-2xl text-lg tracking-widest capitalize font-[600]">Book Your Stay Today.</p>
            </div>

            <div class="" data-aos="zoom-in" data-aos-duration="500">
                <a href="{{route('room.index')}}"
                    class="transition-all bg-transparent ease-in-out duration-300 text-[#03203E] hover:text-white sm:text-lg text-base rounded-full flex justify-center uppercase border border-[#03203E] items-center text-center shadow-md font-light p-2 w-52 font-[500] m-auto hover:bg-[#03203E] hover:border-[#03203E]"
                    style="text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.2);">book YOUR ROOM</a>
            </div>
        </div>
    </section></div>
    
@endsection

@section('script')
    {{-- @vite('resources/js/home/swiper.js') --}}
@endsection
