<div class="row">
  <div class="col-md-8 order-last order-md-first content" >
    @yield('content')
  </div>
  <div class="col-md-4 order-first order-md-last">
    @include('inc.filter')
  </div>
</div>
