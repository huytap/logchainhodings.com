<x-clients.banner photo="{{asset('uploads/'. $menu->banner)}}" mobile="{{asset('uploads/'. ($menu->banner_mobile??$menu->banner))}}" class="{{$class??''}}">
    {!!$menu->banner_title!!}
</x-clients.banner>