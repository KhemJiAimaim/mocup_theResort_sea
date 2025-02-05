<footer class="uppercase">
    <div class="bg-[#03203E]">

        <!-- Content -->
        <div class="relative max-w-[1536px] m-auto z-10 flex justify-center  text-white lg:py-6 py-4">
            <div
                class="sm:grid place-items-center lg:grid-cols-4 ss:grid-cols-3 grid-cols-1 gap-2 flex flex-col w-full items-start px-4">
                <div class="lg:p-4 ss:p-0 p-4 flex flex-col justify-start sm:items-start items-center w-full gap-2 ">
                    <p class="sm:text-2xl text-xl">Logo here</p>
                    <p class="font-[300] lg:text-base text-sm sm:text-left text-center w-full lg:py-4 py-2">
                        Lorem ipsum dolor sit amet consectetur. Facilisis vel pellentesque pretium fringilla venenatis
                        sed. Maecenas id urna curabitur consequat. Dictumst nisl lacus volutpat.
                    </p>

                    <div class="border-b border border-white my-2 w-full m-auto rounded-full "></div>

                    <div class="flex sm:justify-start justify-center  gap-4">
                        <a href="https://www.facebook.com/" title="Facebook"
                            class="w-8 h-auto cursor-pointer hover:scale-110" target="_balnk">
                            <img src="/images/icon/Group 272.png" alt="Icon" class="w-full">
                        </a>

                        <a href="#" title="Line" class="w-8 h-auto hover:scale-110 cursor-pointer"
                            target="_balnk">
                            <img src="/images/icon/Group 269.png" alt="Icon" class="w-full">
                        </a>

                        <a href="#" title="Instagram" class="w-8 h-auto hover:scale-110 cursor-pointer"
                            target="_balnk">
                            <img src="/images/icon/Group 271.png" alt="Icon" class="w-full">
                        </a>

                        <a href="https://www.youtube.com/" title="Youtube"
                            class="w-8 h-auto cursor-pointer hover:scale-110" target="_balnk">
                            <img src="/images/icon/Group 270.png" alt="Icon" class="w-full">
                        </a>

                    </div>
                </div>

                <div
                    class="lg:p-4 ss:p-0 p-4 grid sm:grid-cols-1 grid-cols-2 place-items-center w-full h-full items-start">
                    <a href="/"
                        class="{{ request()->is('/') ? 'border-b-2 border-white' : '' }} w-36 font-[500] tracking-widest sm:text-base text-sm uppercase relative text-white hover:text-white cursor-pointer transition-all ease-in-out before:transition-[width] before:ease-in-out before:duration-700 before:absolute before:bg-white  before:origin-center before:h-[2px] before:w-0 hover:before:w-[50%] before:bottom-0 before:left-[50%] after:transition-[width] after:ease-in-out after:duration-700 after:absolute after:bg-white after:origin-center after:h-[2px] after:w-0 hover:after:w-[50%] after:bottom-0 after:right-[50%]">Home</a>
                    <a href="/room"
                        class="{{ request()->routeIs('room*') ? 'border-b-2 border-white' : '' }} w-36  font-[500] tracking-widest sm:text-base text-sm uppercase relative text-white hover:text-white cursor-pointer transition-all ease-in-out before:transition-[width] before:ease-in-out before:duration-700 before:absolute before:bg-white  before:origin-center before:h-[2px] before:w-0 hover:before:w-[50%] before:bottom-0 before:left-[50%] after:transition-[width] after:ease-in-out after:duration-700 after:absolute after:bg-white after:origin-center after:h-[2px] after:w-0 hover:after:w-[50%] after:bottom-0 after:right-[50%]">ROOM</a>
                    <a href="/service"
                        class="{{ request()->is('service*') ? 'border-b-2 border-white' : '' }} w-36  font-[500] tracking-widest sm:text-base text-sm uppercase relative text-white hover:text-white cursor-pointer transition-all ease-in-out before:transition-[width] before:ease-in-out before:duration-700 before:absolute before:bg-white  before:origin-center before:h-[2px] before:w-0 hover:before:w-[50%] before:bottom-0 before:left-[50%] after:transition-[width] after:ease-in-out after:duration-700 after:absolute after:bg-white after:origin-center after:h-[2px] after:w-0 hover:after:w-[50%] after:bottom-0 after:right-[50%]">SERVICE</a>

                    <a href="/contact"
                        class="{{ request()->is('contact') ? 'border-b-2 border-white' : '' }} w-36  font-[500] tracking-widest sm:text-base text-sm uppercase relative text-white hover:text-white cursor-pointer transition-all ease-in-out before:transition-[width] before:ease-in-out before:duration-700 before:absolute before:bg-white  before:origin-center before:h-[2px] before:w-0 hover:before:w-[50%] before:bottom-0 before:left-[50%] after:transition-[width] after:ease-in-out after:duration-700 after:absolute after:bg-white after:origin-center after:h-[2px] after:w-0 hover:after:w-[50%] after:bottom-0 after:right-[50%]">contact</a>
                    <a href="/gallery"
                        class="{{ request()->is('gallery') ? 'border-b-2 border-white' : '' }} w-36  font-[500] tracking-widest sm:text-base text-sm uppercase relative text-white hover:text-white cursor-pointer transition-all ease-in-out before:transition-[width] before:ease-in-out before:duration-700 before:absolute before:bg-white  before:origin-center before:h-[2px] before:w-0 hover:before:w-[50%] before:bottom-0 before:left-[50%] after:transition-[width] after:ease-in-out after:duration-700 after:absolute after:bg-white after:origin-center after:h-[2px] after:w-0 hover:after:w-[50%] after:bottom-0 after:right-[50%]">GALLERY</a>
                    <a href="/about-us"
                        class="{{ request()->is('about-us') ? 'border-b-2 border-white' : '' }} w-36  font-[500] tracking-widest sm:text-base text-sm uppercase relative text-white hover:text-white cursor-pointer transition-all ease-in-out before:transition-[width] before:ease-in-out before:duration-700 before:absolute before:bg-white  before:origin-center before:h-[2px] before:w-0 hover:before:w-[50%] before:bottom-0 before:left-[50%] after:transition-[width] after:ease-in-out after:duration-700 after:absolute after:bg-white after:origin-center after:h-[2px] after:w-0 hover:after:w-[50%] after:bottom-0 after:right-[50%]">ABOUT
                        US</a>
                </div>

                <div
                    class="lg:p-4 ss:p-0 p-4 flex flex-col lg:items-start items-center justify-center gap-4 ss:w-full mx-auto ">
                    <p class="font-[500] tracking-widest lg::text-xl text-lg uppercase">CONTACT INFORMATION
                    </p>
                    <a href="tel:000-000-0000"
                        class="flex ss:justify-start justify-center items-center gap-4 max-lg:w-full cursor-pointer ">
                        <div class="w-[25px] h-[25px]">
                            <img src="/images/icon/Group 451.png" alt="" class="w-full h-full">
                        </div>
                        <p
                            class="tracking-widest font-[300] sm:text-base text-sm text-left  w-full relative text-white hover:text-white cursor-pointer transition-all ease-in-out before:transition-[width] before:ease-in-out before:duration-700 before:absolute before:bg-white  before:origin-center before:h-[2px] before:w-0 hover:before:w-[50%] before:bottom-0 before:left-[50%] after:transition-[width] after:ease-in-out after:duration-700 after:absolute after:bg-white after:origin-center after:h-[2px] after:w-0 hover:after:w-[50%] after:bottom-0 after:right-[50%]">
                            099-999-xxxx</p>
                    </a>
                    <a href="mailto:THeresort@gmail.com"
                        class="flex ss:justify-start justify-center items-center gap-4 max-lg:w-full cursor-pointer">
                        <div class="w-[25px] h-[25px]">
                            <img src="/images/icon/mail.png" alt="" class="w-full h-full">
                        </div>
                        <p
                            class="font-[300] sm:text-base text-sm text-left  w-full relative text-white hover:text-white cursor-pointer transition-all ease-in-out before:transition-[width] before:ease-in-out before:duration-700 before:absolute before:bg-white  before:origin-center before:h-[2px] before:w-0 hover:before:w-[50%] before:bottom-0 before:left-[50%] after:transition-[width] after:ease-in-out after:duration-700 after:absolute after:bg-white after:origin-center after:h-[2px] after:w-0 hover:after:w-[50%] after:bottom-0 after:right-[50%]">
                            THeresort@GMAIL.COM</p>
                    </a>
                </div>

                <div class="p-4 flex flex-col sm:items-start items-center gap-2 w-full max-lg:hidden ">
                    <div class="border-b border border-white my-2 w-full m-auto rounded-full lg:hidden"></div>
                    <p class="font-[500] tracking-widest lg::text-xl text-lg uppercase">Location
                    </p>
                    <p class="font-[300] sm:text-base text-sm sm:text-left text-center w-full py-4">
                        Lorem ipsum dolor sit amet consectetur. Facilisis vel pellentesque pretium
                    </p>
                    <div class="">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3825.7658682734395!2d102.83243147514484!3d16.48738888425428!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31228ae99b598b43%3A0x56b4538d2ace7037!2z4Lij4Lix4Lia4LiX4Liz4LmA4Lin4LmH4Lia4LmE4LiL4LiV4LmMIOC4guC4reC4meC5geC4geC5iOC4mSBXWU5OU09GVCBTT0xVVElPTiBDTy4sTFRELg!5e0!3m2!1sth!2sth!4v1738038360926!5m2!1sth!2sth"
                            width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="relative w-full p-1 bg-[#001326] flex justify-center items-center">
        <p class="text-white sm:text-lg text-base font-[300] uppercase">
            COPYRIGHT © 2025 Theresort.com
        </p>
    </div>
</footer>
