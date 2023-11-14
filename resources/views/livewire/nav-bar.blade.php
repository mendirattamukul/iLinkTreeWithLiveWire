<nav x-data={show:false}>
    <div class="justify-between bg-white p-2  flex rounded-xl mt-5 ml-5 mr-5">

        <div>

            <ul class=" justify-between  flex">
                <li class="p-1">
                    <a href="/dashboard">
                        <img src="{{asset('linktreeicon.png')}}" class="w-5  h-5">
                    </a>
                </li>
                <li
                    class="font-medium px-3 hover:bg-gray-200 hover:border-2 rounded-xl text-gray-500  p-1 cursor-pointer">
                    <a href="/dashboard">Home</a>

                </li>
                <li
                    class="font-medium px-3 hover:bg-gray-200 hover:border-2 rounded-xl text-gray-500  p-1 cursor-pointer">
                    About Us</li>
                <li
                    class="font-medium px-3 hover:bg-gray-200 hover:border-2 rounded-xl text-gray-500  p-1 cursor-pointer">
                    Contact Us</li>
            </ul>
        </div>
        <div>

            <div class="flex justify-center  cursor-pointer  ">
                <div class=" h-10 w-10 bg-gray-600 hover:bg-gray-700 grid place-content-center rounded-full" @click="show=!show"
                    x-on:click.away="show=false">
                    <h1 class="text-white text-xl font-bold  cursor-pointer">{{$ProfileInitial}}</h1>
                </div>


            </div>

        </div>
    </div>
    <!-- Navbar ends here -->
    <div class="flex justify-end" x-show="show">
        <div class=" mr-5  flex flex-col bg-white drop-shadow-md">
            <x-responsive-nav-link>
                <button wire:click="logout" class="px-5 py-3 hover:bg-gray-300 border-b border-gray-200">Logout</button>
            </x-responsive-nav-link>

            <x-responsive-nav-link :href="route('profile')" wire:navigate>
                <button class="px-5 py-3 hover:bg-gray-300 border-b border-gray-200">Profile</button>
            </x-responsive-nav-link>



        </div>
    </div>
  

</nav>