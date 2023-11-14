<div class="bg-blue-100 border flex  rounded-3xl p-4 justify-between flex-wrap m-6">
    <div class="">
        <div class="flex">
            <div class=" h-5 w-5 border-gray-500 border rounded-full grid place-content-center">
                <p class=" text-xs mb-1">&#161;</p>
            </div>
            <div class="ml-1 flex flex-col ">
                <div class="flex text-xs md:text-sm">
                    <p class="font-bold">Your Linktree is live:</p>
                    <a href="{{request()->getSchemeAndHttpHost()}}/links/{{request()->user()->slug}}" class="underline cursor-pointer ml-1" target="_blank">{{request()->getSchemeAndHttpHost()}}/links/{{request()->user()->slug}}</a>
                </div>
                <p class="text-xs md:text-sm flex  justify-start">Share your Linktree to your socials</p>
            </div>
        </div>

    </div>

    <div>
        <button class="md:tracking-normal mt-4 md:mt-0 rounded-lg md:rounded-2xl p-2 md:text-xl bg-white font-extrabold hover:bg-gray-100">Copy URL</button>
    </div>


</div>