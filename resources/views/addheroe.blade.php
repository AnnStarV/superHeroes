@extends('layouts.app')

@section('title-block')Новый герой@endsection

@section('content')
<div class="block-name">
  <div id = "container"> 
    <h1>Новый герой</h1>
  </div>
</div>
    <div class="container-fluid">
        <div class="row" id = "container">
        <form class="add-form needs-validation" novalidate="">
          <div class="row g-3">
            <div class="col-sm-6">
              <label for="firstName" class="form-label">Никнейм</label>
              <input type="text" class="form-control" id="firstName" placeholder="Наруто" value="" required="">
              <div class="invalid-feedback">
                Это обязательное поле.
              </div>
            </div>

            <div class="col-sm-6">
              <label for="lastName" class="form-label">Настоящее имя</label>
              <input type="text" class="form-control" id="lastName" placeholder="Наруто Узумаки" value="" required="">
              <div class="invalid-feedback">
              Это обязательное поле.
              </div>
            </div>

            <div class="col-12">
              <label for="username" class="form-label">Описание</label>
              <div class="input-group has-validation">
                <span class="input-group-text"><img src="../assets/images/disc.png" width = 20px/></span>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="4" placeholder="Наруто Узумаки (яп. うずまきナルト, Узумаки Наруто) — шиноби Деревни Скрытого Листа..." required=""></textarea> 
              <div class="invalid-feedback">
              Это обязательное поле.
                </div>
              </div>
            </div>

            <div class="col-12">
              <label for="username" class="form-label">Владеет техниками</label>
              <div class="input-group has-validation">
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="2" placeholder="Техника соблазнения..." required=""></textarea> 
              <div class="invalid-feedback">
              Это обязательное поле.
                </div>
              </div>
            </div>

            <div class="col-12">
              <label for="username" class="form-label">Девиз</label>
              <div class="input-group has-validation">
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Никогда не сдаваться... Встать, когда все рухнуло — вот настоящая сила." required=""></textarea> 
              <div class="invalid-feedback">
              Это обязательное поле.
                </div>
              </div>
            </div>
            
            <div class="col-12">
              <label for="username" class="form-label">Выбрать фото</label>
              <input type="file" class="form-control-file" id="lastName">
              <div class="invalid-feedback">
              Это обязательное поле.
              </div>
            </div>

          <hr class="my-4">

          <button class="w-100 btn btn-primary btn-lg"  id="btn-add" type="submit">Добавить</button>
        </form>
      </div>
</div>
@endsection