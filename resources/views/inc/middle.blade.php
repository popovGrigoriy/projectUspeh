<div class="row">
  <div class="col-md-9 order-last order-md-first" >
    @yield('content')
  </div>
  <div class="col-md-3 order-first order-md-last content">
    @include('inc.filter')
  </div>
</div>
