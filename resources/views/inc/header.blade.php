<header class="d-flex justify-content-center py-3">
      <ul class="nav nav-pills">
        <li class="nav-item"><a href="/home" class="{{ request()->is('home*') ? 'nav-link active' : 'nav-link' }}"> Все герои</a></li>
        <li class="nav-item"><a href="/" class="{{ request()->is('/*') ? 'nav-link active' : 'nav-link' }}"> Добавить героя</a></li>
      </ul>
</header>