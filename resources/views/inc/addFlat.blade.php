<div class="container">
  <form action="{{ route('addObjectPost') }}" method="post">
    @csrf
    <div class="form-group">
      <div class="row">
        <h2 align = "center">Добавление Квартиры</h2>
      </div>
      <hr>

      <div class="row">
        <div class="col">
          <label for="type">Тип объекта:</label>
        </div>
        <div class="col">
          <input type="text" name="type" value="Квартира"><br>
        </div>
      </div>
      <hr>

      <div class="row">
        <div class="col">
          <label for="landMark">Район:</label>
        </div>
        <div class="col">
          <select name = "landMark" style="height: 30px; width: 182px;">
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
      <hr>

      <div class="row">
        <div class="col">
          <label for="street">Улица:</label>
        </div>
        <div class="col">
          <input type="text" name="street" value=""><br>
        </div>
      </div>
      <hr>

      <div class="row">
        <div class="col">
          <label for="number">Номер дома:</label>
        </div>
        <div class="col">
          <input type="text" name="number" value=""><br>
        </div>
      </div>
      <hr>

      <div class="row">
        <div class="col">
          <label for="numberFlat">Номер квартиры:</label>
        </div>
        <div class="col">
          <input type="text" name="numberFlat" value=""><br>
        </div>
      </div>
      <hr>

      <div class="row">
        <div class="col">
          <label for="square">Общая площадь:</label>
        </div>
        <div class="col">
          <input type="text" name="square" value="" size = "15">кв.м.<br>
        </div>
      </div>
      <hr>

      <div class="row">
        <div class="col">
          <label for="livingSquare">Жилая площадь:</label>
        </div>
        <div class="col">
          <input type="text" name="livingSquare" value="" size = "15">кв.м.<br>
        </div>
      </div>
      <hr>

      <div class="row">
        <div class="col">
          <label for="kitchen">Площадь кухни:</label>
        </div>
        <div class="col">
          <input type="text" name="kitchen" value="" size = "15">кв.м.<br>
        </div>
      </div>
      <hr>

      <div class="row">
        <div class="col">
          <label for="rooms">Количество комнат:</label>
        </div>
        <div class="col">
          <input type="text" name="rooms" value=""><br>
        </div>
      </div>
      <hr>

      <div class="row">
        <div class="col">
          <label for="floor">Этаж:</label>
        </div>
        <div class="col">
          <input type="text" name="floor" value=""><br>
        </div>
      </div>
      <hr>

      <div class="row">
        <div class="col">
          <label for="typeHouse">Тип дома:</label>
        </div>
        <div class="col">
          <input type="text" name="typeHouse" value=""><br>
        </div>
      </div>
      <hr>

      <div class="row">
        <div class="col">
          <label for="conditions">Состояние:</label>
        </div>
        <div class="col">
          <input type="text" name="conditions" value=""><br>
        </div>
      </div>
      <hr>

      <div class="row">
        <div class="col">
          <label for="balcony">Балкон:</label>
        </div>
        <div class="col">
          <input type="text" name="balcony" value=""><br>
        </div>
      </div>
      <hr>

      <div class="row">
        <div class="col">
          <label for="layout">Планировка:</label>
        </div>
        <div class="col">
          <input type="text" name="layout" value=""><br>
        </div>
      </div>
      <hr>

      <div class="row">
        <div class="col">
          <label for="description">Описание:</label>
        </div>
        <div class="col">
          <textarea name="description" rows="3" cols="60"></textarea>
          <br>
        </div>
      </div>
      <hr>

      <div class="row">
        <div class="col">
          <label for="price">Цена:</label>
        </div>
        <div class="col">
          <input type="text" name="price" value="" size = "11">Тыс.руб.<br>
        </div>
      </div>
      <hr>

      <div class="row">
        <div class="col">
          <label for="agent">Агент:</label>
        </div>
        <div class="col">
          <input type="text" name="agent" value=""><br>
        </div>
      </div>
      <hr>

      <div class="row">
        <div class="col">
          <label for="sellers_name">Имя продовца:</label>
        </div>
        <div class="col">
          <input type="text" name="sellers_name" value=""><br>
        </div>
      </div>
      <hr>

      <div class="row">
        <div class="col">
          <label for="phone">Телефон продовца:</label>
        </div>
        <div class="col">
          <input type="text" name="phone" value=""><br>
        </div>
      </div>
      <hr>

      <div class="row">
        <div class="col">
          <input class = "btn btn-success" type="submit" name="btn_submit" value="Добавить">
        </div>
      </div>
    </div>
  </form>
</div>
