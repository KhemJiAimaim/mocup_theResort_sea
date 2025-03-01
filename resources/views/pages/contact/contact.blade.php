@extends('layouts.main')

@section('title')
    contact
@endsection

@section('style')
    @vite('resources/css/home/preview_img.css')
@endsection


@section('contents')
    <section class=" w-full h-auto relative z-50">
        <div
            class="absolute inset-0 z-50  flex flex-col justify-center items-center gap-y-4  max-sm:gap-y-1 max-w-[1536px] m-auto">
            <div  class="text-white text-6xl max-xl:text-3xl  font-bold text-center animate__animated animate__zoomIn">
            <div class="flex flex-col sm:gap-y-8">
                <p class="xl:text-8xl ss:text-6xl text-4xl  uppercase text-white font-[700] ss:tracking-[8px] tracking-widest"
                    style="text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.7);">
                    contact us
                </p>
            </div>
            </div>
        </div>

        <div class="relative w-full h-[600px] max-2xl:h-[500px] max-lg:h-[350px] max-md:h-[250px]">
            <img src="/images/banner/45353.png" alt="Banner Image" class="w-full h-full object-cover">
            <div class="absolute top-0 left-0 w-full h-full bg-black opacity-50"></div>
        </div>
    </section>

    <section class="max-w-[1320px] m-auto px-4 overflow-hidden">
        <div class="bg-white rounded-2xl flex justify-between xl:items-start items-center md:flex-row flex-col gap-6" data-aos="zoom-in"
        data-aos-duration="500">
            {{-- 1 --}}
            <div class="flex flex-col justify-center w-full gap-y-6 md:pt-12 pt-6" >
                <div class="flex flex-col justify-center items-start max-lg:items-center gap-4">
                    <p class="text-black font-[600] md:text-3xl ss:text-2xl text-xl ">The Resort</p>
                    <p class="text-black sm:text-base text-sm font-extralight">Lorem ipsum dolor sit amet consectetur.
                        Facilisis vel
                        pellentesque pretium fringilla venenatis sed. Maecenas id urna curabitur consequat. Dictumst nisl
                        lacus
                        volutpat.
                    </p>
                </div>

                <div class="flex flex-col justify-center pt-2 gap-4">
                    <div class="flex gap-x-6 items-start">
                        <div class="ss:max-w-10 max-w-8  w-full h-auto">
                            <img src="images/icon/solar_phone-outline.png" alt="" class="w-full h-wull">
                        </div>
                        <div class="flex flex-col">
                            <p class="text-black font-[600] md:text-xl ss:text-lg text-base capitalize">Reservation</p>
                            <p class="text-black sm:text-base text-sm font-extralight">000-000-0000</p>
                        </div>
                    </div>

                    <div class="flex gap-x-6 items-start">
                        <div class="ss:max-w-10 max-w-8 w-full h-auto">
                            <img src="images/icon/Group 557.png" alt="" class="w-full h-wull">
                        </div>
                        <div class="flex flex-col">
                            <p class="text-black font-[600] md:text-xl ss:text-lg text-base capitalize">Email info</p>
                            <p class="text-black sm:text-base text-sm uppercase font-extralight">THeresort@GMAIL.COM</p>
                        </div>
                    </div>

                    <div class="flex gap-x-6 items-start">
                        <div class="ss:max-w-10 max-w-8 w-full h-auto">
                            <img src="images/icon/hugeicons_location-04.png" alt="" class="w-full h-wull">
                        </div>
                        <div class="flex flex-col">
                            <p class="text-black font-[600] md:text-xl ss:text-lg text-base capitalize">Address</p>
                            <p class="text-black sm:text-base text-sm font-extralight">Lorem ipsum dolor sit amet
                                consectetur. Amet ultrices aliquam gravida massa. Enim.</p>
                        </div>
                    </div>
                </div>
            </div>

            {{-- 2 --}}
            <div class="w-full flex justify-end xl:items-start items-center ss:flex-row flex-col gap-4" >

                <div class="w-full h-auto z-50  cursor-pointer image-container">
                    <img src="/images/img/kjghjg.png" alt="Image" class="w-full h-auto hover:opacity-70 gallery-image">

                </div>

            </div>

        </div>
    </section>

    <div class="md:pt-12 pt-6 ss:h-[400px] h-[300px]">
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3825.7658682734395!2d102.83243147514484!3d16.48738888425428!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31228ae99b598b43%3A0x56b4538d2ace7037!2z4Lij4Lix4Lia4LiX4Liz4LmA4Lin4LmH4Lia4LmE4LiL4LiV4LmMIOC4guC4reC4meC5geC4geC5iOC4mSBXWU5OU09GVCBTT0xVVElPTiBDTy4sTFRELg!5e0!3m2!1sth!2sth!4v1738038360926!5m2!1sth!2sth"
            width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"
            referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>

    <section class="relative  overflow-hidden z-50">
        <div class="absolute w-full h-full">
            <img src="/images/banner/426.png" alt="Banner Image" class="w-full h-full object-cover">
            <div class="absolute top-0 left-0 w-full h-full bg-white opacity-60"></div>
        </div>

        <div
            class="relative text-white pt-12 pb-6 z-50 flex flex-col gap-y-8 justify-center items-center max-w-[1000px] m-auto px-4">
            <p class="text-black xl:text-4xl ss:text-2xl text-xl tracking-widest capitalize font-[700]" data-aos="zoom-in"
                data-aos-duration="500">Get in touch</p>

            <div class="flex flex-row justify-between max-sm:flex-col gap-y-4 gap-x-4 w-full">
                <div class="flex flex-col justify-between w-full gap-y-4 " data-aos="fade-right" data-aos-duration="500">
                    <div class="flex flex-col justify-start gap-y-2">
                        <p class="ss:tex-lg text-base text-black uppercase">Name*</p>
                        <input type="text"
                            class="w-full text-black sm:text-base text-sm font-extralight rounded-md p-2 outline-none"
                            placeholder="Lorem ipsum dolor">
                    </div>
                    <div class="flex flex-col justify-start gap-y-2">
                        <p class="ss:tex-lg text-base text-black uppercase">EMAIL*</p>
                        <input type="email"
                            class="w-full text-black sm:text-base text-sm font-extralight rounded-md p-2 outline-none"
                            placeholder="Lorem@gmail.com">
                    </div>
                    <div class="flex flex-col justify-start gap-y-2">
                        <p class="ss:tex-lg text-base text-black uppercase">Phone number*</p>
                        <input type="tel"
                            class="w-full text-black sm:text-base text-sm font-extralight rounded-md p-2 outline-none"
                            placeholder="000-000-0000">
                    </div>
                </div>


                <div class="w-full flex flex-col justify-start gap-y-2" data-aos="fade-left" data-aos-duration="500">
                    <p class="ss:tex-lg text-base text-black uppercase">massage*</p>
                    <textarea name="" id="" cols="30" rows="10"
                        class="w-full text-black sm:text-base text-sm font-extralight rounded-md p-4 outline-none"
                        placeholder="your massage"></textarea>
                </div>

            </div>
            <div class="" data-aos="zoom-in" data-aos-duration="500">
                <div id="s-massage" 
                    class="cursor-pointer uppercase p-2 bg-[#03203E] text-white rounded-sm text-center max-w-52 hover:text-[#03203E] hover:bg-transparent border border-[#03203E] ss:text-base text-sm">send
                    massage</div>
            </div>
        </div>
    </section>
@endsection

@section('script')
    @vite('resources/js/contact/swl.js')
@endsection
