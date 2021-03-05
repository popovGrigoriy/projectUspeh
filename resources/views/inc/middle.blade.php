<div class="row">
  <div class="col-md-8 order-last order-md-first" >
    @yield('content')
  </div>
  <div class="col-md-4 order-first order-md-last content">
    @include('inc.filter')
  </div>
</div>
