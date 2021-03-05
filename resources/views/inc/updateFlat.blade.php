<div class="container">
  @foreach($data as $el)
    <form action="{{ route('updateData') }}" method="post">
      @csrf
      <div class="form-group">
        <div class="row">
          <h2 align = "center">Изменение квартиры</h2>
        </div>
        <hr>


        <input type="hidden" name="type" value="Квартира">
        <input type="hidden" name="full" value="true">
        <input type="hidden" name="searchId" value="{{$fullID}}">

        <div class="row">
          <div class="col-md-6">
            <div class="row">
              <div class="col-md-5"> <label for="landMark">Район:</label> </div>
              <div class="col-md-7">
                <select name="landMark" style="height: 30px; width: 182px;">
                  <option>{{$el->landmark}}</option>
                  <option>СЖМ</option>
                  <option>ВЖМ</option>
                  <option>ЗЖМ</option>
                  <option>Центр</option>
                  <option>РДВС</option>
                  <option>Наливная</option>
                  <option>Авиагородок</option>
                  <option>Гайдара</option>
                </select>
                <br>
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="row">
              <div class="col-md-5"> <label for="street">Улица:</label> </div>
              <div class="col-md-7"> <input type="text" name="street" value="{{$el->street}}"><br> </div>
            </div>
          </div>
        </div>
        <hr>

        <div class="row">
          <div class="col-md-6">
            <div class="row">
              <div class="col-md-5"> <label for="number">Номер дома:</label> </div>
              <div class="col-md-7"> <input type="text" name="number" value="{{$el->number}}"><br> </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="row">
              <div class="col-md-5"> <label for="numberFlat">Номер квартиры:</label> </div>
              <div class="col-md-7"> <input type="text" name="numberFlat" value="{{$el->numberFlat}}"><br> </div>
            </div>
          </div>
        </div>
        <hr>

        <div class="row">
          <div class="col-md-6">
            <div class="row">
              <div class="col-md-5"> <label for="square">Общая площадь:</label> </div>
              <div class="col-md-7"> <input type="text" name="square" value="{{$el->square}}" size = "15">кв.м.<br> </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="row">
              <div class="col-md-5"> <label for="livingSquare">Жилая площадь:</label> </div>
              <div class="col-md-7"> <input type="text" name="livingSquare" value="{{$el->livingSquare}}" size = "15">кв.м.<br> </div>
            </div>
          </div>
        </div>
        <hr>

        <div class="row">
          <div class="col-md-6">
            <div class="row">
              <div class="col-md-5"> <label for="kitchen">Площадь кухни:</label> </div>
              <div class="col-md-7"> <input type="text" name="kitchen" value="{{$el->kitchen}}" size = "15">кв.м.<br> </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="row">
              <div class="col-md-5"> <label for="rooms">Количество комнат:</label> </div>
              <div class="col-md-7"> <input type="text" name="rooms" value="{{$el->rooms}}"><br> </div>
            </div>
          </div>
        </div>
        <hr>

        <div class="row">
          <div class="col-md-6">
            <div class="row">
              <div class="col-md-5"> <label for="floor">Этаж:</label> </div>
              <div class="col-md-7"> <input type="text" name="floor" value="{{$el->floor}}"><br> </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="row">
              <div class="col-md-5"> <label for="typeHouse">Тип дома:</label> </div>
              <div class="col-md-7"> <input type="text" name="typeHouse" value="{{$el->typeHouse}}"><br> </div>
            </div>
          </div>
        </div>
        <hr>

        <div class="row">
          <div class="col-md-6">
            <div class="row">
              <div class="col-md-5"> <label for="conditions">Состояние:</label> </div>
              <div class="col-md-7"> <input type="text" name="conditions" value="{{$el->conditions}}"><br> </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="row">
              <div class="col-md-5"> <label for="balcony">Балкон:</label> </div>
              <div class="col-md-7"> <input type="text" name="balcony" value="{{$el->balcony}}"><br> </div>
            </div>
          </div>
        </div>
        <hr>

        <div class="row">
          <div class="col-md-6">
            <div class="row">
              <div class="col-md-5"> <label for="layout">Планировка:</label> </div>
              <div class="col-md-7"> <input type="text" name="layout" value="{{$el->layout}}"><br> </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="row">
              <div class="col-md-5"> <label for="agent">Агент:</label> </div>
              <div class="col-md-7"> <input type="text" name="agent" value="{{$el->agent}}"><br> </div>
            </div>
          </div>
        </div>
        <hr>

        <div class="row">
          <div class="col-md-6">
            <div class="row">
              <div class="col-md-5"> <label for="sellers_name">Имя продовца:</label> </div>
              <div class="col-md-7"> <input type="text" name="sellers_name" value="{{$el->sellers_name}}"><br> </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="row">
              <div class="col-md-5"> <label for="phone">Телефон продовца:</label> </div>
              <div class="col-md-7"> <input type="text" name="phone" value="{{$el->phone}}"><br> </div>
            </div>
          </div>
        </div>
        <hr>

        <div class="row">
          <div class="col">
            <label for="description">Описание:</label>
            <br>
            <textarea name="description" rows="3" cols="60">{{$el->description}}</textarea>
          </div>
        </div>
        <hr>

        <div class="row">
          <div class="col"> <label for="price">Цена:</label> </div>
          <div class="col"> <input type="text" name="price" value="{{$el->price}}" size = "11">Тыс.руб.<br> </div>
        </div>
        <hr>

        <div class="row">
          <div class="col">
            <input class = "btn btn-success" type="submit" name="btn_submit" value="Изменить">
          </div>
        </div>
      </div>
    </form>
  @endforeach
</div>
