@extends('layouts.main')

@section('title')
    service
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
                <p class="xl:text-8xl ss:text-6xl text-4xl uppercase ss:tracking-[8px] tracking-widest text-white"
                    data-aos="zoom-in" data-aos-duration="500" style="text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.7);">
                    our sERvices
                </p>
            </div>
            </p>
        </div>

        <div class="relative w-full h-[600px] max-2xl:h-[500px] max-lg:h-[350px] max-md:h-[250px]">
            <img src="/images/banner/thuu.png" alt="Banner Image" class="w-full h-full object-cover">
            <div class="absolute top-0 left-0 w-full h-full bg-black opacity-50"></div>
        </div>
    </section>

    <section class="md:py-12 py-6 overflow-hidden">
        <div class="max-w-[1536px] m-auto py-8 px-4">
            <div
                class="flex flex-col max-sm:gap-4 max-w-[1320px] m-auto items-center justify-between bg-transparent bg-[#F8F8F8] z-50 rounded-sm">
                {{-- 1 --}}
                <div class="flex max-sm:flex-col max-sm:gap-4 justify-between rounded-sm w-full " data-aos="fade-right"
                    data-aos-duration="500">
                    <div
                        class="w-full lg:h-[400px] ss:h-[300px] h-[250px] m-auto rounded-md flex justify-center items-center">
                        <img src="/images/img/Restaurant.png" alt=""
                            class="w-full h-full rounded-sm shadow-md object-cover">
                    </div>

                    <div class="w-full lg:my-8 my-2">
                        <div class="h-full flex flex-col justify-between gap-y-6 gap-x-4 max-sm:gap-y-2 md:px-4">
                            <div class="flex lg:flex-col flex-row  lg:items-start items-center gap-4">
                                <div class="max-w-[50px] h-auto">
                                    <img src="/images/icon/ion_restaurant-outline (1).png" alt="">
                                </div>
                                <p class="text-black font-[700] md:text-3xl ss:text-2xl text-xl capitalize">Restaurant
                                </p>
                            </div>

                            <p
                                class="text-[#3E3E3E] ss:text-base text-sm font-light capitalize lg:line-clamp-5 line-clamp-4">
                                Lorem
                                ipsum
                                dolor sit
                                amet
                                consectetur. Id
                                lobortis
                                elementum in at arcu a placerat vivamus. Platea ultricies tellus nibh nullam
                                pellentesque vitae aliquet gravida. Ultricies tellus blandit vitae cursus justo
                                pellentesque amet elementum lorem. Dignissim.</p>

                            <a href="{{ route('service.restaurant') }}"
                                class="uppercase p-2 bg-[#03203E] text-white rounded-sm text-center max-w-52 hover:text-[#03203E] hover:bg-white border border-[#03203E] ss:text-base text-sm">learn
                                more</a>

                        </div>
                    </div>
                </div>

                {{-- 2 --}}
                <div class="flex max-sm:flex-col max-sm:gap-4 justify-between rounded-sm w-full " data-aos="fade-left"
                    data-aos-duration="500">
                    <div class="w-full lg:my-8 my-2 max-sm:order-2">
                        <div class="h-full flex flex-col justify-between gap-y-6 gap-x-4 max-sm:gap-y-2 md:px-4 ">
                            <div class="flex lg:flex-col flex-row lg:items-start items-center gap-4 pt-3">
                                <div class="max-w-[50px] h-auto">
                                    <img src="/images/icon/Group 532.png" alt="">
                                </div>
                                <p class="text-black font-[700] md:text-3xl ss:text-2xl text-xl capitalize">Swimming
                                    pool
                                </p>
                            </div>
                            <p
                                class="text-[#3E3E3E] ss:text-base text-sm font-light capitalize  lg:line-clamp-5 line-clamp-4">
                                Lorem
                                ipsum dolor sit
                                amet
                                consectetur. Id
                                lobortis
                                elementum in at arcu a placerat vivamus. Platea ultricies tellus nibh nullam
                                pellentesque vitae aliquet gravida. Ultricies tellus blandit vitae cursus justo
                                pellentesque amet elementum lorem. Dignissim.
                            </p>

                            <a href="{{ route('service.swimming') }}"
                                class="uppercase p-2 bg-[#03203E] text-white rounded-sm text-center max-w-52 hover:text-[#03203E] hover:bg-white border border-[#03203E] ss:text-base text-sm">learn
                                more
                            </a>

                        </div>
                    </div>

                    <div
                        class="w-full lg:h-[400px] ss:h-[300px] h-[250px] m-auto rounded-md flex justify-center items-center max-sm:order-1">
                        <img src="/images/img/Swimming.png" alt=""
                            class="w-full h-full rounded-sm shadow-md object-cover">
                    </div>
                </div>

                {{-- 3 --}}
                <div class="flex max-sm:flex-col max-sm:gap-4 justify-between rounded-sm w-full " data-aos="fade-right"
                    data-aos-duration="500">
                    <div
                        class="w-full lg:h-[400px] ss:h-[300px] h-[250px] m-auto rounded-md flex justify-center items-center">
                        <img src="/images/img/wellness.png" alt=""
                            class="w-full h-full rounded-sm shadow-md object-cover">
                    </div>

                    <div class="w-full lg:my-8 my-2">
                        <div class="h-full flex flex-col justify-between gap-y-6 gap-x-4 max-sm:gap-y-2 md:px-4">
                            <div class="flex lg:flex-col flex-row  lg:items-start items-center gap-4">
                                <div class="max-w-[50px] h-auto">
                                    <img src="/images/icon/Group 533.png" alt="">
                                </div>
                                <p class="text-black font-[700] md:text-3xl ss:text-2xl text-xl capitalize">wellness &
                                    spa
                                </p>
                            </div>

                            <p
                                class="text-[#3E3E3E] ss:text-base text-sm font-light capitalize lg:line-clamp-5 line-clamp-4">
                                Lorem
                                ipsum dolor sit
                                amet
                                consectetur. Id
                                lobortis
                                elementum in at arcu a placerat vivamus. Platea ultricies tellus nibh nullam
                                pellentesque vitae aliquet gravida. Ultricies tellus blandit vitae cursus justo
                                pellentesque amet elementum lorem. Dignissim.</p>

                            <a href="{{ route('service.wellness') }}"
                                class="uppercase p-2 bg-[#03203E] text-white rounded-sm text-center max-w-52 hover:text-[#03203E] hover:bg-white border border-[#03203E] ss:text-base text-sm">learn
                                more</a>

                        </div>
                    </div>
                </div>

                {{-- 4  --}}
                <div class="flex max-sm:flex-col max-sm:gap-4 justify-between rounded-sm w-full " data-aos="fade-left"
                    data-aos-duration="500">
                    <div class="w-full lg:my-8 my-2 max-sm:order-2">
                        <div class="h-full flex flex-col justify-between gap-y-6 gap-x-4 max-sm:gap-y-2 md:px-4">
                            <div class="flex lg:flex-col flex-row lg:items-start items-center gap-4 pt-3">
                                <div class="max-w-[50px] h-auto">
                                    <img src="/images/icon/Group 530.png" alt="">
                                </div>
                                <p class="text-black font-[700] md:text-3xl ss:text-2xl text-xl capitalize">Bars
                                </p>
                            </div>
                            <p
                                class="text-[#3E3E3E] ss:text-base text-sm font-light capitalize  lg:line-clamp-5 line-clamp-4">
                                Lorem
                                ipsum
                                dolor sit
                                amet
                                consectetur. Id
                                lobortis
                                elementum in at arcu a placerat vivamus. Platea ultricies tellus nibh nullam
                                pellentesque vitae aliquet gravida. Ultricies tellus blandit vitae cursus justo
                                pellentesque amet elementum lorem. Dignissim.</p>

                            <a href="{{ route('service.bars') }}"
                                class="uppercase p-2 bg-[#03203E] text-white rounded-sm text-center max-w-52 hover:text-[#03203E] hover:bg-white border border-[#03203E] ss:text-base text-sm">learn
                                more</a>

                        </div>
                    </div>

                    <div
                        class="w-full lg:h-[400px] ss:h-[300px] h-[250px] m-auto rounded-md flex justify-center items-center max-sm:order-1">
                        <img src="/images/img/Bars.png" alt=""
                            class="w-full h-full rounded-sm shadow-md object-cover">
                    </div>
                </div>

                {{-- 5  --}}
                <div class="flex max-sm:flex-col max-sm:gap-4 justify-between rounded-sm w-full " data-aos="fade-right"
                    data-aos-duration="500">
                    <div
                        class="w-full lg:h-[400px] ss:h-[300px] h-[250px] m-auto rounded-md flex justify-center items-center">
                        <img src="/images/img/Gardens.png" alt=""
                            class="w-full h-full rounded-sm shadow-md object-cover">
                    </div>

                    <div class="w-full lg:my-8 my-2">
                        <div class="h-full flex flex-col justify-between gap-y-6 gap-x-4 max-sm:gap-y-2 md:px-4">
                            <div class="flex lg:flex-col flex-row  lg:items-start items-center gap-4">
                                <div class="max-w-[50px] h-auto">
                                    <img src="/images/icon/Vector (2).png" alt="">
                                </div>
                                <p class="text-black font-[700] md:text-3xl ss:text-2xl text-xl capitalize">Open
                                    Gardens
                                </p>
                            </div>

                            <p
                                class="text-[#3E3E3E] ss:text-base text-sm font-light capitalize lg:line-clamp-5 line-clamp-4">
                                Lorem
                                ipsum
                                dolor sit
                                amet
                                consectetur. Id
                                lobortis
                                elementum in at arcu a placerat vivamus. Platea ultricies tellus nibh nullam
                                pellentesque vitae aliquet gravida. Ultricies tellus blandit vitae cursus justo
                                pellentesque amet elementum lorem. Dignissim.</p>

                            <a href="{{ route('service.gardens') }}"
                                class="uppercase p-2 bg-[#03203E] text-white rounded-sm text-center max-w-52 hover:text-[#03203E] hover:bg-white border border-[#03203E] ss:text-base text-sm">learn
                                more</a>

                        </div>
                    </div>
                </div>

                {{-- 6 --}}
                <div class="flex max-sm:flex-col max-sm:gap-4 justify-between rounded-sm w-full " data-aos="fade-left"
                    data-aos-duration="500">
                    <div class="w-full lg:my-8 my-2 max-sm:order-2">
                        <div class="h-full flex flex-col justify-between gap-y-6 gap-x-4 max-sm:gap-y-2 md:px-4 ">
                            <div class="flex lg:flex-col flex-row lg:items-start items-center gap-4 pt-3">
                                <div class="max-w-[50px] h-auto">
                                    <img src="/images/icon/streamline_group-meeting-call (1).png" alt="">
                                </div>
                                <p class="text-black font-[700] md:text-3xl ss:text-2xl text-xl capitalize">Meeting
                                    rooms
                                </p>
                            </div>
                            <p
                                class="text-[#3E3E3E] ss:text-base text-sm font-light capitalize  lg:line-clamp-5 line-clamp-4">
                                Lorem
                                ipsum
                                dolor sit
                                amet
                                consectetur. Id
                                lobortis
                                elementum in at arcu a placerat vivamus. Platea ultricies tellus nibh nullam
                                pellentesque vitae aliquet gravida. Ultricies tellus blandit vitae cursus justo
                                pellentesque amet elementum lorem. Dignissim.</p>

                            <a href="{{ route('service.meeting') }}"
                                class="uppercase p-2 bg-[#03203E] text-white rounded-sm text-center max-w-52 hover:text-[#03203E] hover:bg-white border border-[#03203E] ss:text-base text-sm">learn
                                more</a>

                        </div>
                    </div>

                    <div
                        class="w-full lg:h-[400px] ss:h-[300px] h-[250px] m-auto rounded-md flex justify-center items-center max-sm:order-1">
                        <img src="/images/img/Meeting.png" alt=""
                            class="w-full h-full rounded-sm shadow-md object-cover">
                    </div>
                </div>

                {{-- end --}}

            </div>
    </section>
@endsection

@section('script')
    {{-- @vite('resources/js/home/swiper.js') --}}
@endsection
