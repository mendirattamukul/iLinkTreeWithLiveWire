<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Home') }}
        </h2>
    </x-slot>

    <div class=" text-gray-900 flex flex-row">
        @livewire('add-link-form')
        <div class="w-1/2 mt-6 mb-6">
            <div class="flex justify-center">
            <h3 class="font-medium underline">
                <a class="hover:font-semibold"
                    href="{{request()->getSchemeAndHttpHost()}}/links/{{request()->user()->slug}}">{{request()->getSchemeAndHttpHost()}}/links/{{request()->user()->slug}}</a>
            </h3>
            </div>
            <div class="mt-6">
                @livewire('link-component')
            </div>
        </div>
    </div>
    </div>



    <div class="text-center w-full text-white mb-1 bg-gray-500">
        <h3>Copyright 2023 | All Rights Reserved</h3>
    </div>

</x-app-layout>