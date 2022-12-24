<x-guest-layout>
    <section class="mt-20 lg:mt-[60px] pb10">
        <h1 class="heading-tertiory text-center mb-10 md:bm-16">
            {{$title}}
        </h1>
        <div class="max-w-[400px] sm:max-w-[700px] lg:max-w-7xl w-full sm:px-6 lg:px-8 mx-auto grid sm:grid-cols-2 lg:grid-cols-3 gap-5 lg:gap-10">
            {{-- <div class="bg-white rounded overflow-hidden shadow-card"> --}}
            @foreach ($courses as $item)
                @include('components.course-box',['item' =>$item])
            @endforeach
            {{-- </div> --}}
        </div>
       <div class="w-full" style="padding:10px 5%">
        {{$courses->links()}}
       </div>
    </section>
</x-guest-layout>

