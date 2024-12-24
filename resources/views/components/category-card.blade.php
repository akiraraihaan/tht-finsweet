<a href="{{ route('blogs', ['name' => $category['name']]) }}" class="max-w-[300px] min-h-[230px] border border-2 border-[#E5E5E5] flex flex-col justify-center hover:bg-[#FFD050] hover:border-transparent transition duration-500">
    <img src="{{ $category['image'] }}" class="w-[50px] h-[50px] mx-8 mb-2 p-2 bg-[#FBF6EA] rounded-xl">
    <h3 class="text-[28px] font-[700] text-[#232536] mx-8 mb-2">{{ $category['name'] }}</h3>
    <p style="font-family: inter" class="text-[16px] font-[400] text-[#6D6E76] mx-8">{{ $category['desc'] }}</p>
</a>
