@extends('layouts.app')

@section('title-block')Изменить героя@endsection

@section('content')
<div class="block-name">
  <div id = "container"> 
    <h1>Изменить героя</h1>
  </div>
</div>

<div class="container-fluid">
        <div class="row" id = "container">
        <form  method="post" enctype="multipart/form-data" class="add-form needs-validation" novalidate="">
         @csrf
          <div class="row g-3">
            <div class="col-sm-6">
              <label for="nickname" class="form-label">Никнейм</label>
              <div class="input-group">
                <input name="nickname" type="text" class="form-control" id="nickname" placeholder="Наруто" value="{{ $data->nickname }}" required="">          
                </div>
            </div>

            <div class="col-sm-6">
              <label for="fullname" class="form-label">Настоящее имя</label>
              <div class="input-group">
                <input name="fullname" type="text" class="form-control" id="fullname" placeholder="Наруто Узумаки" value="{{ $data->real_name }}" required="">
              </div>
            </div>

            <div class="col-12">
              <label for="discription" class="form-label">Описание</label>
              <div class="input-group">
                <span class="input-group-text"><img src="{{asset('/assets/images/disc.png') }}" width = 20px/></span>
                <textarea name="discription" class="form-control" id="discription" rows="4" placeholder="Наруто Узумаки (яп. うずまきナルト, Узумаки Наруто) — шиноби Деревни Скрытого Листа..." required="">{{ $data->origin_description }}</textarea> 
              </div>
            </div>

            <div class="col-12">
              <label for="tecniq" class="form-label">Владеет техниками</label>
                <textarea name="tecniq" class="form-control" id="tecniq" rows="2"  placeholder="Техника соблазнения..." required="">{{ $data->superpowers }}</textarea> 
            </div>

            <div class="col-12">
              <label for="phrase" class="form-label">Девиз</label>
              <div class="input-group">
                <textarea  name="phrase" class="form-control" id="phrase" rows="3"  placeholder="Никогда не сдаваться... Встать, когда все рухнуло — вот настоящая сила." required="">{{ $data->catch_phrase }}</textarea> 
              </div>
            </div>
            
            <div class="col-12">
            <label for="photo" class="form-label">Текущее фото</label>
            <?php $conter = 0;?>
            @foreach($data->image as $key=> $el)
            <?php $conter+=1;?>
            <div class="block-image">
            <p class="item-image"><img src="{{ asset('/storage/' . $el) }}"/></p>
            <div class="modfy-image">
              <label for="photo" class="form-label">Выбрать фото</label>
              <div class="input-group">
                <input name="image-last-{{$conter}}" value="{{ $el }}" type="hidden" class="form-control-file" id="images">
                </div>
                <div class="input-group">
                <input name="image-{{$conter}}[]" type="file" class="form-control-file" id="images">
                <button class="w-100 btn btn-primary btn-lg" name="action" id="btn-add" type="submit" formaction="{{route('deleteimage',['id'=>$data->hero_id,'curr_image'=>$key])}}">Удалить</button>
                <!--<p class="item-modify"><a href="{{route('deleteimage',['id'=>$data->hero_id,'curr_image'=>$el])}}">Удалить</a></p>-->
              </div>
              
              </div>  
              </div>
            @endforeach
            </div>
            <div class="col-12">
              <label for="photo" class="form-label">Добавить еще фото</label>
              <div class="input-group">
                <input name="image[]" type="file" class="form-control-file" id="images" multiple>
              </div>
            </div>
          <hr class="my-4">

          <button class="w-100 btn btn-primary btn-lg" name="action" formaction="{{route('modify-form', ['id'=>$data->hero_id])}}"  id="btn-add" type="submit">Изменить</button>
        </form>
      </div>
</div>
@endsection