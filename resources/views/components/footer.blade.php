<div class="min-h-80 bg-[#232536] max-w-screen flex flex-col items-center">
    <div class="my-20 w-full flex items-start justify-between px-24">
        <div class="">
            <a href="{{ route('home') }}" class="font-bold text-3xl text-white">{Finsweet</a>
        </div>
        <div>
            <div class="text-white flex gap-8 items-center">
                <a href="{{ route('home') }}" class="hover:text-slate-400 transition duration-300">Home</a>
                <a href="{{ route('blogs') }}" class="hover:text-slate-400 transition duration-300">Blog</a>
                <a href="{{ route('about-us') }}" class="hover:text-slate-400 transition duration-300">About Us</a>
                <a href="{{ route('contact-us') }}" class="hover:text-slate-400 transition duration-300">Contact Us</a>
                <a href="{{ route('home') }}" class="hover:text-slate-400 transition duration-300">Privacy Policy</a>
            </div>
        </div>
    </div>

    <div class="w-[87vw] min-h-80 bg-white bg-opacity-5 flex flex-row justify-between items-center px-16">
        <div class="max-w-[40vw]">
            <p class="text-white font-bold text-[36px]">Subscribe to our news letter to get latest updates and news</p>
        </div>
        <div class="flex flex-row gap-4">
            <input type="text" name="email" class="bg-transparent border border-gray-500 h-[7vh] w-[20vw] flex items-center px-4 font-light text-gray-500" placeholder="Enter Your Email">
            </input>
            <button class="h-[7vh] w-[10vw] flex items-center justify-center bg-[#FFD050] font-bold hover:bg-[#FFD000]">Subscribe</button>
        </div>
    </div>

    <div class="mt-20 mb-12 w-full flex items-center justify-between px-24">
        <div class="" style="font-family: inter">
            <p class="text-gray-300">Finstreet 118 2561 Fintown</p>
            <p class="text-gray-300">Hello@finsweet.com  020 7993 2905</p>
        </div>
        <div class="text-white flex gap-8 items-center">
            <a href="#" class="hover:opacity-50 transition duration-400"><img class="w-8 h-8" src="./img/facebook.png"></a>
            <a href="#" class="hover:opacity-50 transition duration-400"><img class="w-8 h-8" src="./img/twitter.png"></a>
            <a href="#" class="hover:opacity-50 transition duration-400"><img class="w-8 h-8" src="./img/instagram.png"></a>
            <a href="#" class="hover:opacity-50 transition duration-400"><img class="w-8 h-8" src="./img/linkedin.png"></a>
        </div>
    </div>
</div>
