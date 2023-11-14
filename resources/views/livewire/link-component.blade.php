<div class=" w-full flex justify-center h-full">
    <div class=" w-full relative">
        <div class="absolute top-2 right-2">
            <div class=" h-9 w-9 bg-gray-100 rounded-full grid  place-content-center hover:bg-gray-200 cursor-pointer">
                <p class=" font-bold">...</p>
            </div>
        </div>


        <div class="flex justify-center mt-5">
            <div class=" h-20 w-20 bg-gray-600 grid place-content-center rounded-full">
                <h1 class="text-white text-4xl font-bold">{{$ProfileInitial}}</h1>
            </div>
        </div>
        <div class="mt-4 flex justify-center">
            <h1 class="text-2xl font-bold">@ {{$username}}</h1>
        </div>

        <div class=" mt-6 w-full">
            @foreach ($links as $link)
            <div class="flex justify-center ">
                <a target="_blank" href="{{$link->url}}"
                    class="bg-white w-3/4  hover:bg-gray-100 mt-2   p-4  font-semibold hover:p-5 hover:font-bold cursor-pointer rounded">
                    {{$link->title}}
                </a>
            </div>
            @endforeach
        </div>


        <div class="bottom-5 left-0 right-0 m-auto absolute">
            <a href="/" class="flex justify-center">
                <img src="{{asset('linktreeicon.png')}}" class=" w-7 h-7"></img>
                <h1 class="ml-3 text-2xl font-extrabold">iLinkTree</h1>
            </a>
        </div>

    </div>
</div>