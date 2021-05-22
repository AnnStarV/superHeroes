@extends('layouts.app')

@section('title-block')Все герои@endsection

@section('content')
<div class="block-name">
  <div id = "container"> 
    <h1>Все герои</h1>
    </div>
</div>


<div class="items-block">
<div class="wrapper">
@foreach($data as $el)

        <div class="item">
            <h3 class="item-name">{{ $el->nickname }}</h3>
           <p class="item-image"><a href="{{route('homeCurpost',['id'=>$el->hero_id])}}"><img src="{{ asset('/storage/' . $el->image) }}"/></a></p>
        </div>
       
@endforeach
</div>

</div>
<div id = "container"> 
    {{ $data->links() }}
</div>
@endsection