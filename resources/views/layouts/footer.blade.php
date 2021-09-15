<div class="container">
  <footer class="row row-cols-1 row-cols-sm-3 row-cols-md-5 justify-content-center justify-content-md-end py-5 my-5 border-top gy-3">
    <div class="col">
      <a href="/" class="d-flex align-items-center mb-3 link-dark text-decoration-none">
        <!-- <img src="/images/himed_logo.png" alt="Himed Logo"> -->
        <h6 class="t-size-md t-semibold t-color-primary">MyCar</h6>
      </a>
      <p class="text-muted">&copy; 2019-{{ date("Y") }}</p>
    </div>

    <div class="col">
    </div>

    <div class="col">
      <h6 class="t-size t-color-primary t-semibold">Navigations</h6>
      <ul class="nav flex-column">
        @foreach($section1 as $item => $url)
        <li class="nav-item mb-2"><a href="{{ $url }}" class="nav-link p-0 t-color-lightgray hover-text-secondary">{{ $item }}</a></li>
        @endforeach
      </ul>
    </div>

    <div class="col">
    </div>

    <div class="col">
    </div>
  </footer>
</div>