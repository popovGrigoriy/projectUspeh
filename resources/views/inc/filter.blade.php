<form class="" action="{{ route('findObject') }}" method="post">

  <div class="form-group">
    <div class="row">
      <div class="col">
        <label for="typeObject">Что ищем?</label>
      </div>
      <div class="col">
        <select class="form-control form-control-sm" id="typeObject" name="typeObject" aria-required="true" onChange="Selected(this)">
          <option value="1">Дома</option>
          <option value="2">Квартиры</option>
          <option value="3">Участки</option>
        </select>
      </div>
    </div>
    <hr>




    <div id='1' style='display: block;'>

      <div class="row">
        <div class="col">
          <label for="area">Район</label>
        </div>
        <div class="col">
          <select class="form-control form-control-sm" id="lendmark" name="lendmark">
            <option>СЖМ</option>
            <option>ЗЖМ</option>
            <option>ВЖМ</option>
          </select>
        </div>
      </div>
      <hr>

      <div class="row">
        <div class="col">
          <label for="street">Улица</label>
        </div>
        <div class="col">
          <input class="form-control form-control-sm" type="text" placeholder="Улица" name="street" id="street">
        </div>
      </div>
      <hr>

      <div class="row">
        <div class="col">
          <label for="area">Состояние</label>
        </div>
        <div class="col">
          <select class="form-control form-control-sm" id="conditions" name="conditions">
            <option>Хорошее</option>
            <option>Жилое</option>
            <option>Ремонт</option>
          </select>
        </div>
      </div>
      <hr>

      <label for="street">Площадь участка</label>
      <div class="row">
        <div class="col">
          <input class="form-control form-control-sm" type="text" placeholder="от" name="street" id="street">
        </div>
        <div class="col">
          <input class="form-control form-control-sm" type="text" placeholder="до" name="street" id="street">
        </div>
      </div>
      <hr>

      <label for="street">Год постройки</label>
      <div class="row">
        <div class="col">
          <input class="form-control form-control-sm" type="text" placeholder="от" name="street" id="street">
        </div>
        <div class="col">
          <input class="form-control form-control-sm" type="text" placeholder="до" name="street" id="street">
        </div>
      </div>
      <hr>

      <label for="street">Комнат</label>
      <div class="row">
        <div class="col">
          <input class="form-control form-control-sm" type="text" placeholder="от" name="street" id="street">
        </div>
        <div class="col">
          <input class="form-control form-control-sm" type="text" placeholder="до" name="street" id="street">
        </div>
      </div>
      <hr>

      <div class="row">
        <div class="col">
          <label for="area">Стены</label>
        </div>
        <div class="col">
          <select class="form-control form-control-sm" id="area" name="area">
            <option>Кирпич</option>
            <option>Саман</option>
            <option>Газоблок</option>
          </select>
        </div>
      </div>
      <hr>

      <div class="row">
        <div class="col">
          <label for="area">Крыша</label>
        </div>
        <div class="col">
          <select class="form-control form-control-sm" id="area" name="area">
            <option>шифер</option>
            <option>Металл</option>
            <option>Плоская</option>
          </select>
        </div>
      </div>
      <hr>

      <label for="street">Этажность</label>
      <div class="row">
        <div class="col">
          <input class="form-control form-control-sm" type="text" placeholder="от" name="street" id="street">
        </div>
        <div class="col">
          <input class="form-control form-control-sm" type="text" placeholder="до" name="street" id="street">
        </div>
      </div>
      <hr>

      <label for="street">Фасад</label>
      <div class="row">
        <div class="col">
          <input class="form-control form-control-sm" type="text" placeholder="от" name="street" id="street">
        </div>
        <div class="col">
          <input class="form-control form-control-sm" type="text" placeholder="до" name="street" id="street">
        </div>
      </div>
      <hr>

      <div class="row">
        <div class="col">
          <label for="area">Газ</label>
        </div>
        <div class="col">
          <select class="form-control form-control-sm" id="area" name="area">
            <option>Есть</option>
            <option>Нет</option>
          </select>
        </div>
      </div>
      <hr>

      <div class="row">
        <div class="col">
          <label for="area">Канализация</label>
        </div>
        <div class="col">
          <select class="form-control form-control-sm" id="area" name="area">
            <option>Центральная</option>
            <option>Сливная яма</option>
            <option>На участке</option>
          </select>
        </div>
      </div>

    </div>





    <div id='2' style='display: none;'>
      <div class="row">
        <div class="col">
          <label for="landmarkFlat">Район</label>
        </div>
        <div class="col">
          <select class="form-control form-control-sm" id="landmarkFlat" name="landmarkFlat">
            <option>СЖМ</option>
            <option>ЗЖМ</option>
            <option>ВЖМ</option>
          </select>
        </div>
      </div>
        <hr>

        <div class="row">
          <div class="col">
            <label for="price">Цена</label>
          </div>
          <div class="col">
            <input class="form-control form-control-sm" type="text" placeholder="от" name="priceFlatMin" id="priceFlatMin">
          </div>
          <div class="col">
            <input class="form-control form-control-sm" type="text" placeholder="до" name="priceFlatMax" id="priceFlatMax">
          </div>
        </div>
        <hr>

        <div class="row">
          <div class="col">
            <label for="streetFlat">Улица</label>
          </div>
          <div class="col">
            <input class="form-control" type="text" placeholder="Улица" name="streetFlat" id="streetFlat">
          </div>
        </div>
      <hr>

      <div class="row">
        <div class="col">
          <label for="floorsFlat">Этаж</label>
        </div>
        <div class="col">
          <input class="form-control form-control-sm" type="text" placeholder="от" name="floorsFlatMin" id="floorsFlatMin">
        </div>
        <div class="col">
          <input class="form-control form-control-sm" type="text" placeholder="до" name="floorsFlatMax" id="floorsFlatMax">
        </div>
      </div>
      <hr>

      <div class="row">
        <div class="col">
          <label for="roomsFlat">Кол-во комнат</label>
        </div>
        <div class="col">
          <input class="form-control form-control-sm" type="text" placeholder="от" name="roomsFlatMin" id="roomsFlatMin">
        </div>
        <div class="col">
          <input class="form-control form-control-sm" type="text" placeholder="до" name="roomsFlatMax" id="roomsFlatMax">
        </div>
      </div>
      <hr>

      <div class="row">
        <div class="col">
          <label for="conditionsFlat">Состояние</label>
        </div>
        <div class="col">
          <select class="form-control form-control-sm" id="conditionsFlat" name="conditionsFlat">
            <option>Хорошее</option>
            <option>Жилое</option>
            <option>Ремонт</option>
          </select>
        </div>
      </div>
      <hr>


      <div class="row">
        <div class="col">
          <label for="squareFlatMin">Площадь квартиры</label>
        </div>
        <div class="col">
          <input class="form-control form-control-sm" type="text" placeholder="от" name="squareFlatMin" id="squareFlatMin">
        </div>
        <div class="col">
          <input class="form-control form-control-sm" type="text" placeholder="до" name="squareFlatMax" id="squareFlatMax">
        </div>
      </div>
      <hr>

      <div class="row">
        <div class="col">
          <label for="updated_at">Дата изменения</label>
        </div>
        <div class="col">
          <input class="form-control form-control-sm" type="text" placeholder="от" name="updated_at" id="updated_at">
        </div>
      </div>
      <hr>

      <button type="submit" class="btn btn-primary w-100">Искать</button>
  </div>





    <div id='3' style='display: none;'>
        Перечисляешь "Оборудование для мероприятий"
    </div>
  </div>

</form>
<script type="text/javascript">
  function Selected(a) {
    var label = a.value;

    if (label==1) {
      document.getElementById("1").style.display='block';
      document.getElementById("2").style.display='none';
      document.getElementById("3").style.display='none';

    } else if (label==2) {
      document.getElementById("1").style.display='none';
      document.getElementById("2").style.display='block';
      document.getElementById("l3").style.display='none';

    } else if (label==3) {
      document.getElementById("1").style.display='none';
      document.getElementById("2").style.display='none';
      document.getElementById("3").style.display='block';

    } else {
      document.getElementById("1").style.display='block';
      document.getElementById("2").style.display='none';
      document.getElementById("3").style.display='none';
    }

  }
</script>
