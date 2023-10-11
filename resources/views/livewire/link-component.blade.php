<div class="flex justify-center">
<div class="mt-2 w-4/5">
  <div class="rounded grid justify-items-center" style="height:15rem;overflow:hidden;background-color:#5F9EA0;">
    <div class="" >
        <img src="/images/default.png"  class="rounded-full p-2" width="200rem" alt="user"></img>
   </div>
        <h3 class="text-white">{{$username}}</h3>
    </div>
    
    <div class="grid justify-items-center mt-5">
      @foreach ($links as $link)
      <a  class="flex text-white hover:bg-green-800  bg-green-700 mt-2 w-full rounded p-2"  target="_blank" href="{{$link->url}}">
      <img src="{{asset($link->category->image)}}" width="25rem" alt="category"/>
      {{$link->title}}</a>
     </a>
      @endforeach
      {{$links->links(data: ['scrollTo' => false])}}
</div>
</div>
