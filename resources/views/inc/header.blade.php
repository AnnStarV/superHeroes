<header class="d-flex justify-content-center py-3">
      <ul class="nav nav-pills">
        <li class="nav-item"><a href="/" class="{{ request()->is('/*') ? 'nav-link active' : 'nav-link' }}"> Все герои</a></li>
        <li class="nav-item"><a href="/addheroe" class="{{ request()->is('addheroe*') ? 'nav-link active' : 'nav-link' }}"> Добавить героя</a></li>
        <li class="nav-item"><a href="/modify" class="{{ request()->is('modify*') ? 'nav-link active' : 'nav-link' }}"> Изменить героя</a></li>
      </ul>
</header>