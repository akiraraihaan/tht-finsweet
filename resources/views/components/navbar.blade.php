<div class="min-h-20 bg-[#232536] max-w-screen flex items-center justify-between px-24">
    <div class="">
        <a href="#" class="font-bold text-3xl text-white">{Finsweet</a>
    </div>
    <div>
        <div class="text-white flex gap-4 items-center">
            <x-nav-link :href="route('home')" :active="request()->routeIs('home')">
                {{ __('Home') }}
            </x-nav-link>
            <x-nav-link :href="route('blogs')" :active="request()->routeIs('blogs')">
                {{ __('Blogs') }}
            </x-nav-link>
            <x-nav-link :href="route('about-us')" :active="request()->routeIs('about-us')">
                {{ __('About Us') }}
            </x-nav-link>
            <x-nav-link :href="route('contact-us')" :active="request()->routeIs('contact-us')">
                {{ __('Contact Us') }}
            </x-nav-link>
            <button class="w-fit px-8 py-3 bg-white text-[#232536] font-bold hover:bg-slate-300 transition duration-300">Subscribe</button>
        </div>
    </div>
</div>
