<div class="mt-5  w-2/4">
<div class="h-fit flex justify-center">
    <div class="bg-gray-200 border-gray-500 rounded w-2/3 p-4">
        <div>
            <div class="flex justify-center">
                <h1 class="font-semibold">Add Link</h1>
            </div>
            <form wire:submit="addLink">
                @csrf
                <div class="w-full">
                    <input wire:model="title" class="w-full mt-2 border-gray-400  rounded" type="text"
                        placeholder="Title">
                    @error("title")
                    <span class="text-red-500 mt-1 mb-1">{{$message}}</span>
                    @enderror

                </div>
                <div class="w-full">
                    <input wire:model="url" class="w-full mt-2 border-gray-400  rounded" type="text" placeholder="Url">
                    @error("url")
                    <span class="text-red-500 mt-1 mb-1">{{$message}}</span>
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
                    <span class="text-red-500 mt-1 mb-1">{{$message}}</span>
                    @enderror

                </div>

                <div class="w-full grid justify-items-end">
                    <button
                        class="w-36 mt-2 bg-green-700 text-white hover:bg-green-800 hover:text-black rounded">Add</input>
                </div>
            </form>
        </div>
    </div>
</div>
<div x-data="{show:true}" x-int="setTimeout(()=>show=false,3000)" x-show="show" class="text-green-700 flex justify-center">
    @if(session("success"))
    <span>{{session("success")}}</span>
    @endif
</div>
</div>