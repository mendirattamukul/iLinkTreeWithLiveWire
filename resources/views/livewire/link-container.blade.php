<div>
    @foreach ( $links as $link )
    @livewire('link-tile' ,['link'=>$link])
    @endforeach
</div>