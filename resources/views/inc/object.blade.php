<h3>Найдено</h3>
@foreach($data as $el)
  <div class="alert alert-info">
    <div class="row">
      <div class="col">
        <h3>{{ $el->id }}</h3>
      </div>
    </div>
  </div>
@endforeach
