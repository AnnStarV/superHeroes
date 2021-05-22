@extends('layouts.app')

@section('title-block')Выбранный герой@endsection

@section('content')
<div class="block-name">
  <div id = "container"> 
    <h1>Выбранный герой</h1>
    </div>
</div>


<div class="items-block">
<div class="wrapper">
        <div class="item">
            <h3 class="item-name">{{ $data->nickname }}</h3>
            <p class="item-fullname">{{ $data->real_name }}</p>
            <p class="item-disc">{{ $data->origin_description }}</p>
            <p class="item-tecniq">Техники: {{ $data->superpowers }}</p>
            <blockquote>
            <p class="item-phrase">{{ $data->catch_phrase }}</p>
            </blockquote>
           <p class="item-image"><img src="{{ asset('/storage/' . $data->image) }}"/></p>
           <div class = "item-buttons">
                <p class="item-back"><a href="{{route('home')}}">Вернуться</a></p>
                <p class="item-modify"><a href="{{route('modify',['id'=>$data->hero_id])}}">Изменить</a></p>
                <p class="item-delete"><a href="{{route('delete',['id'=>$data->hero_id])}}">Удалить</a></p>
            </div>
        </div>

</div>

</div>
@endsection