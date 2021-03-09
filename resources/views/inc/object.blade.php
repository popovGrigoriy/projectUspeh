<h3>Найдено</h3>
<div style="display:none">
  {{ $sells = "notsells" }}
</div>
@if(!isset($fullID))
  <div style="display:none">
    {{ $fullID = 111 }}
  </div>
@endif
@isset($data)
@if(!$data->isEmpty())
  <div class="alert alert-secondary">
    <div class="row">
      <div class="col">
        <h2>

          @if(substr($fullID, 0, 1) == 1) Дом
          @elseif(substr($fullID, 0, 1) == 2) Квартира
          @elseif(substr($fullID, 0, 1) == 3) Участок
          @endif
        </h2>
      </div>
    </div>
    <div class="sticky">
    <div class="row squareMain bggg">
      <div class="col-md-1">id</div>
      <div class="col-md-1">Район</div>
      <div class="col-md-2">Улица</div>
      <div class="col-md-1">Дом</div>
      <div class="col-md-1">Цена</div>
      <div class="col-md-1">Состояние</div>
      <div class="col-md-2">Описание</div>
      <div class="col-md-2">Изменено</div>
      <div class="col-md-1">Статус</div>
    </div>
    </div>
    <div style="display:none">
      {{ $full = substr($fullID, 0, 1) }}
    </div>
    @foreach($data as $el)
    <div style="display:none">
      {{ $fullID =  $full . $el->id }}
      {{ $fullDescription = $el->description }}
    </div>
    <a href="javascript:;" onclick="javascript:
document.getElementById('form{{$fullID}}').submit()">

  @if($el->status == 0)

  <div style="display:none">
    {{ $sells = "sells" }}
  </div>
  @else
  <div style="display:none">
    {{ $sells = "notsells" }}
  </div>
  @endif
      <div class="row square {{ $sells }}">
        <div class="col-md-1">{{$fullID}}</div>
        <div class="col-md-1">@if($el->landmark) {{$el->landmark}} @else Нет @endif</div>
        <div class="col-md-2">{{ $el->street }}</div>
        <div class="col-md-1">{{ $el->number }}</div>
        <div class="col-md-1">{{ $el->price }}</div>
        <div class="col-md-1">{{ $el->conditions }}</div>
        <div class="col-md-2">@if($el->description) {!! substr($fullDescription, 0, 35) !!}... @else Нет описания @endif</div>
        <div class="col-md-2">{{ $el->updated_at }}</div>
        <div class="col-md-1">@if($el->status == 1) Активно @else Продан @endif
        </div>
      </div>
    </a>
    <form action="{{ route('findObject') }}" id="form{{$fullID}}" method="post" style="display: none;">
      @csrf
    <input type="hidden" name="searchId" value="{{$fullID}}" />
    <input type="hidden" name="full" value="true" />
    </form>
    @endforeach
  </div>
@endif
  @endisset

  @isset($data2)
  @if(!$data2->isEmpty())
    <div class="alert alert-secondary">
      <div class="row">
        <div class="col">
          <h2>
            <div style="display:none">
              {{$full2 = 222}}
            </div>
            @if(substr($full2, 0, 1) == 1) Дом
            @elseif(substr($full2, 0, 1) == 2) Квартира
            @elseif(substr($full2, 0, 1) == 3) Участок
            @endif
          </h2>
        </div>
      </div>

      <div class="row squareMain bggg">
        <div class="col-md-1">id</div>
        <div class="col-md-1">Район</div>
        <div class="col-md-2">Улица</div>
        <div class="col-md-1">Дом</div>
        <div class="col-md-1">Цена</div>
        <div class="col-md-1">Состояние</div>
        <div class="col-md-2">Описание</div>
        <div class="col-md-2">Изменено</div>
        <div class="col-md-1">Статус</div>
      </div>
      <div style="display:none">
        {{$full2 = substr($full2, 0, 1)}}
      </div>
      @foreach($data2 as $el)
      <div style="display:none">
        {{$fullID =  $full2 . $el->id}}
        {{ $fullDescription = $el->description }}
      </div>
      <a href="javascript:;" onclick="javascript:
  document.getElementById('form{{$fullID}}').submit()">
    @if($el->status == 0)
    <div style="display:none">
      {{ $sells = "sells" }}
    </div>
    @else
    <div style="display:none">
      {{ $sells = "notsells" }}
    </div>
    @endif
      <div class="row square {{ $sells }}">
          <div class="col-md-1">{{$fullID}}</div>
          <div class="col-md-1">@if($el->landmark) {{$el->landmark}} @else Нет @endif</div>
          <div class="col-md-2">{{ $el->street }}</div>
          <div class="col-md-1">{{ $el->number }}</div>
          <div class="col-md-1">{{ $el->price }}</div>
          <div class="col-md-1">{{ $el->conditions }}</div>
          <div class="col-md-2">@if($el->description) {!! substr($fullDescription, 0, 35) !!}... @else Нет описания @endif</div>
          <div class="col-md-2">{{ $el->updated_at }}</div>
          <div class="col-md-1">@if($el->status == 1) Активно @else Продан @endif
          </div>
        </div>
      </a>
      <form action="{{ route('findObject') }}" id="form{{$fullID}}" method="post" style="display: none;">
        @csrf
      <input type="hidden" name="searchId" value="{{$fullID}}" />
      <input type="hidden" name="full" value="true" />
      </form>
      @endforeach
    </div>
    @endif
    @endisset
    @isset($data3)
    @if(!$data3->isEmpty())
      <div class="alert alert-secondary">
        <div class="row">
          <div class="col">
            <h2>
              <div style="display:none">
                {{$full3 = 333}}
              </div>
              @if(substr($full3, 0, 1) == 1) Дом
              @elseif(substr($full3, 0, 1) == 2) Квартира
              @elseif(substr($full3, 0, 1) == 3) Участок
              @endif
            </h2>
          </div>
        </div>

        <div class="row squareMain bggg">
          <div class="col-md-1">id</div>
          <div class="col-md-1">Район</div>
          <div class="col-md-2">Улица</div>
          <div class="col-md-1">Дом</div>
          <div class="col-md-1">Цена</div>
          <div class="col-md-1">Состояние</div>
          <div class="col-md-2">Описание</div>
          <div class="col-md-2">Изменено</div>
          <div class="col-md-1">Статус</div>
        </div>
        <div style="display:none">
          {{$full3 = substr($full3, 0, 1)}}
        </div>
        @foreach($data3 as $el)
        <div style="display:none">
          {{$fullID =  $full3 . $el->id}}
          {{ $fullDescription = $el->description }}
        </div>
        <a href="javascript:;" onclick="javascript:
    document.getElementById('form{{$fullID}}').submit()">

      @if($el->status == 0)
      <div style="display:none">
        {{ $sells = "sells" }}
      </div>
      @else
      <div style="display:none">
        {{ $sells = "notsells" }}
      </div>
      @endif
        <div class="row square {{ $sells }}">
            <div class="col-md-1">{{$fullID}}</div>
            <div class="col-md-1">@if($el->landmark) {{$el->landmark}} @else Нет @endif</div>
            <div class="col-md-2">{{ $el->street }}</div>
            <div class="col-md-1">{{ $el->number }}</div>
            <div class="col-md-1">{{ $el->price }}</div>
            <div class="col-md-1">{{ $el->conditions }}</div>
            <div class="col-md-2">@if($el->description) {!! substr($fullDescription, 0, 35) !!}... @else Нет описания @endif</div>
            <div class="col-md-2">{{ $el->updated_at }}</div>
            <div class="col-md-1">@if($el->status == 1) Активно @else Продан @endif</div>
          </div>
        </a>
        <form action="{{ route('findObject') }}" id="form{{$fullID}}" method="post" style="display: none;">
          @csrf
        <input type="hidden" name="searchId" value="{{$fullID}}" />
        <input type="hidden" name="full" value="true" />
        </form>
        @endforeach
      </div>
      @endif
      @endisset
