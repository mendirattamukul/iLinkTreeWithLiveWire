<div class="flex justify-center mt-3">

    <div class="bg-white p-4 w-4/5 rounded-xl flex justify-between ">
        <div class="">
            <div class="flex ">
                <p class=" font-bold md:text-xl">{{$link->title}}</p>
                
            </div>
            <div  class="flex mt-2  "> 
            <div class=" break-words">
                <p class="text-gray-500 text-xs md:text-sm">{{$link->url}}</p>
              
            </div>
            <div>
           
            </div>
</div>
        </div>


        <div class="flex flex-col">

            <label class="relative inline-flex items-center cursor-pointer">
                <input type="checkbox"   wire:model="isActive" {{$isActive?"checked":""}} value="" class="sr-only peer" wire:click="onToggleButtonClick">
                <div
                    class="w-11 h-6 bg-gray-200 peer-focus:outline-none    rounded-full peer dark:bg-gray-700 peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all dark:border-gray-100 peer-checked:bg-green-700">
                </div>
            </label>

            <button class="mt-10 hover:text-lg" wire:click="deleteLink">&#128465;</button>


        </div>

    </div>
</div>