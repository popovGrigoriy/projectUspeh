<div class="container">
  <form action="{{ route('addObjectPost') }}" method="post">
    @csrf
    <div class="form-group">
      <div class="row">
        <h2 align = "center">Добавление Участка</h2>
      </div>
      <hr>

      <div class="row">
        <div class="col">
          <label for="type">Тип объекта:</label>
        </div>
        <div class="col">
          <input type="text" name="type" id="type" value="Участок"><br>
        </div>
      </div>
      <hr>

      <div class="row">
        <div class="col">
          <label for="landMark">Район:</label>
        </div>
        <div class="col">
          <select name = "landMark" style="height: 30px; width: 182px;">
            <option selected>СЖМ</option>
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
          <label for="conditions">Состояние:</label>
        </div>
        <div class="col">
          <input type="text" name="conditions" value=""><br>
        </div>
      </div>
      <hr>

      <div class="row">
        <div class="col">
          <label for="size">Площадь участка:</label>
        </div>
        <div class="col">
          <input type="text" name="size" value="" size = "16">сот.<br>
        </div>
      </div>
      <hr>

      <div class="row">
        <div class="col">
          <label for="percentage">Доля?:</label>
        </div>
        <div class="col">
          <input type="text" name="percentage" value=""><br>
        </div>
      </div>
      <hr>

      <div class="row">
        <div class="col">
          <label for="facade">Ширина фасада:</label>
        </div>
        <div class="col">
          <input type="text" name="facade" value=""><br>
        </div>
      </div>
      <hr>

      <div class="row">
        <div class="col">
          <label for="gas">Газ?:</label>
        </div>
        <div class="col">
          <input type="text" name="gas" value=""><br>
        </div>
      </div>
      <hr>

      <div class="row">
        <div class="col">
          <label for="sewerage">канализация?:</label>
        </div>
        <div class="col">
          <input type="text" name="sewerage" value=""><br>
        </div>
      </div>
      <hr>

      <div class="row">
        <div class="col">
          <label for="slope">Уклон участка:</label>
        </div>
        <div class="col">
          <input type="text" name="slope" value="" size = "11">градусов<br>
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
