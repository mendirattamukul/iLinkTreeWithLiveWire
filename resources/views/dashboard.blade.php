<x-app-layout>

    <div class="text-gray-900 flex flex-row w-screen h-screen">
        <div class="border-r-gray-300 border-2 w-screen md:w-4/5  text-center" x-data="{ show: false }">
            @livewire('Url')
            <button @click="show=true"
                class=" font-bold text-xl bg-blue-500 w-4/5 rounded-2xl text-white p-4 hover:bg-blue-600">+ Add
                Link</button>
            <div x-show="show">
                @livewire('add-link-form')
            </div>
            <div>
          @livewire('link-container')
            </div>
        </div>
        <div class="lg:flex hidden justify-center w-1/5">
            <div class="w-2/3 mt-4">
                <div class=" h-2/3 border-8 border-black  rounded-3xl  bg-gradient-to-b from-gray-400 to-gray-600 ">
                    @livewire('link-component')
                </div>
            </div>
        </div>
    </div>
    </div>




    <div>

    </div>

</x-app-layout>