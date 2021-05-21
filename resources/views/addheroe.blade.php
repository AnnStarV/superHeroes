@extends('layouts.app')

@section('title-block')Новый герой@endsection

@section('content')
<div class="block-name">
  <div id = "container"> 
    <h1>Новый герой</h1>
  </div>
</div>

  @if($errors->any())
  
  <div id = "container"> 
  <div class="alert alert-danger">

    <ul>
      @foreach($errors->all() as $error)
        <li>{{ $error }}</li>
      @endforeach
    </ul>
    </div>
  </div>
  @endif

    <div class="container-fluid">
        <div class="row" id = "container">
        <form action="{{route('addheroe-form')}}" method="post" enctype="multipart/form-data" class="add-form needs-validation" novalidate="">
         @csrf
          <div class="row g-3">
            <div class="col-sm-6">
              <label for="nickname" class="form-label">Никнейм</label>
              <div class="input-group">
                <input name="nickname" type="text" class="form-control" id="nickname" placeholder="Наруто" value="" required="">          
                </div>
            </div>

            <div class="col-sm-6">
              <label for="fullname" class="form-label">Настоящее имя</label>
              <div class="input-group">
                <input name="fullname" type="text" class="form-control" id="fullname" placeholder="Наруто Узумаки" value="" required="">
              </div>
            </div>

            <div class="col-12">
              <label for="discription" class="form-label">Описание</label>
              <div class="input-group">
                <span class="input-group-text"><img src="../assets/images/disc.png" width = 20px/></span>
                <textarea name="discription" class="form-control" id="discription" rows="4" placeholder="Наруто Узумаки (яп. うずまきナルト, Узумаки Наруто) — шиноби Деревни Скрытого Листа..." required=""></textarea> 
              </div>
            </div>

            <div class="col-12">
              <label for="tecniq" class="form-label">Владеет техниками</label>
                <textarea name="tecniq" class="form-control" id="tecniq" rows="2" placeholder="Техника соблазнения..." required=""></textarea> 
            </div>

            <div class="col-12">
              <label for="phrase" class="form-label">Девиз</label>
              <div class="input-group">
                <textarea  name="phrase" class="form-control" id="phrase" rows="3" placeholder="Никогда не сдаваться... Встать, когда все рухнуло — вот настоящая сила." required=""></textarea> 
              </div>
            </div>
            
            <div class="col-12">
              <label for="photo" class="form-label">Выбрать фото</label>
              <div class="input-group">
                <input name="photos[]" type="file" class="form-control-file" id="photos[]" multiple>
              </div>
            </div>

          <hr class="my-4">

          <button class="w-100 btn btn-primary btn-lg"  id="btn-add" type="submit">Добавить</button>
        </form>
      </div>
</div>
@endsection