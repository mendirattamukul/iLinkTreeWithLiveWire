<div class="mt-5 ">
    <div class="h-fit flex justify-center">
        <div class="bg-white border-gray-500 rounded-xl  lg:w-2/3 p-4 relative">
            <div class="absolute right-1 top-2  cursor-pointer " @click="show=false">
                <p class="text-gray-500 text-xl hover:text-gray-700 ">X</p>
            </div>
            <div class="mt-4" x-show="show">

                <form wire:submit="addLink">
                    @csrf
                    <div class="w-full">
                        <input wire:model="title" class="w-full mt-2 border-gray-400  rounded" type="text"
                            placeholder="Title">
                        @error("title")
                        <span class="text-red-500 mt-1 mb-1 flex justify-start">{{$message}}</span>
                        @enderror

                    </div>
                    <div class="w-full">
                        <input wire:model="url" class="w-full mt-2 border-gray-400  rounded" type="text"
                            placeholder="Url">
                        @error("url")
                        <span class="text-red-500 mt-1 mb-1 flex justify-start">{{$message}}</span>
                        @enderror
                    </div>
                    <div class="w-full">
                        <select wire:model="category_id" class="w-full  mt-2 border-gray-400 rounded"
                            placeholder="Select Category" name="category_id" id="category_id">
                            <option value="" selected>Select Category</option>
                            @foreach ($categories as $category)
                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                            @endforeach
                        </select>
                        @error("category_id")
                        <span class="text-red-500 mt-1 mb-1 flex justify-start">{{$message}}</span>
                        @enderror

                    </div>

                    <div class="w-full grid justify-items-end">
                        <button  class="p-3 w-36 mt-2 bg-green-700 text-white hover:bg-green-800  rounded-xl">Add</input>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div x-data="{show:true}" x-int="setTimeout(()=>show=false,3000)" x-show="show"
        class="text-green-700 flex justify-center">
        @if(session("success"))
        <span x-show=false>{{session("success")}}</span>
        @endif
    </div>
</div>