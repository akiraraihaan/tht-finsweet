<x-layout>

    {{-- ini hero section --}}
    <div class="h-[50vh] max-w-screen bg-[#F4F0F8] flex justify-between items-center">
        <div class="w-1/2 m-24">
            <p style="font-family: inter" class="text-[#232536] font-[500] mb-4 tracking-widest">FEATURED POST</p>
            <h1 class="text-4xl text-[#232536] font-bold tracking-tight mb-4">
                <a href="{{ route('blog') }}" class="hover:underline">Step-by-step guide to choosing great font pairs</a>
            </h1>
            <p style="font-family: inter" class="text-slate-600 mb-4 text-[14px]">By <a href="#" class="text-purple-900 hover:underline">John Doe</a>   |   May 23, 2022</p>
            <p style="font-family: inter" class="text-slate-500 text-[16px]">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident.</p>
            <button class="py-4 px-12 bg-[#FFD050] font-bold hover:bg-[#FFD000] mx-2 my-6">Read More &gt;</button>
        </div>
        <div class="w-1/2 flex justify-end m-24">
            <img class="max-w-[40vw] max-h-[40vh]" src="./img/main.png">
        </div>
    </div>

    <div class="max-w-screen">
        <h1 class="ml-24 mt-12 mb-4 text-2xl font-bold text-[#232536]">All Posts</h1>
        <div class="h-[1px] opacity-20 bg-[#6D6E76] w-[90%] mx-auto"></div>
    </div>

    @foreach ($blogs as $blog)
    <div class="flex">
        <div class="max-w-[490px] max-h-[318px] ml-24 my-12 shadow-sm hover:shadow-xl hover:opacity-80 transition duration-900">
            <a href="#"><img src="{{ $blog['image'] }}"></a>
        </div>
        <div class="m-12">
            <p style="font-family: inter" class="text-[16px] font-[600] text-[#592EA9] tracking-widest mb-4 mt-12">
                <a href="#" class="hover:text-purple-600">{{ $blog['category'] }}</a>
            </p>
            <p class="text-[#232536] font-[700] text-[36px] max-w-[640px] leading-tight tracking-tighter mb-4">
                <a href="#" class="hover:underline">{{ $blog['title'] }}</a>
            </p>
            <p style="font-family: inter" class="text-[16px] font-[400] text-[#6D6E76] max-w-[640px]">{{ $blog['text-summary'] }}</p>
        </div>
    </div>
    @endforeach

    <div class="flex justify-center items-center mb-4">
        <button class="text-[24px] font-[700] text-[#6D6E76] m-2 hover:text-[#232536] hover:text-[28px] transition duration-500 w-[100px] h-[50px] flex items-center justify-center">&lt; Prev</button>
        <button class="text-[24px] font-[700] text-[#6D6E76] m-2 hover:text-[#232536] hover:text-[28px] transition duration-500 w-[100px] h-[50px] flex items-center justify-center">Next &gt;</button>
    </div>

    <div class="max-w-screen">
        <h1 class="ml-24 mt-12 mb-[48px] text-[36px] font-bold text-[#232536]">All Categories</h1>
    </div>

    {{-- category cards --}}
    <div class="flex justify-between items-center gap-8 mx-24">
        @foreach ($categories as $category)
            <x-category-card :category="$category" ></x-category-card>
        @endforeach
    </div>

    <div class="flex flex-col items-center justify-center my-[128px]">
        <h1 class="text-[36px] font-[700] text-[#232536] tracking-tighter max-w-[414px] text-center  mb-[16px]">Join our team to be a part of our story</h1>
        <p style="font-family: inter" class="text-[16px] font-[400] text-[#6D6E76] max-w-[400px] text-center mb-[32px]">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.</p>
        <button class="py-4 px-12 bg-[#FFD050] font-bold hover:bg-[#FFD000] mx-2 my-6 text-[#232536]">Join Now</button>
    </div>

</x-layout>
