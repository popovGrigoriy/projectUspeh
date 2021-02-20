<form class="" action="index.html" method="post">

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
          <select class="form-control form-control-sm" id="area" name="area">
            <option value="1">СЖМ</option>
            <option value="2">ЗЖМ</option>
            <option value="3">ВЖМ</option>
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
          <select class="form-control form-control-sm" id="area" name="area">
            <option value="1">Хорошее</option>
            <option value="2">Жилое</option>
            <option value="3">Ремонт</option>
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
            <option value="1">Кирпич</option>
            <option value="2">Саман</option>
            <option value="3">Газоблок</option>
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
            <option value="1">шифер</option>
            <option value="2">Металл</option>
            <option value="3">Плоская</option>
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
            <option value="1">Есть</option>
            <option value="2">Нет</option>
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
            <option value="1">Центральная</option>
            <option value="2">Сливная яма</option>
            <option value="3">На участке</option>
          </select>
        </div>
      </div>

    </div>
    <div id='2' style='display: none;'>
      <label for="area">Район</label>
      <select class="form-control form-control-sm" id="area" name="area">
        <option value="1">СЖМ</option>
        <option value="2">ЗЖМ</option>
        <option value="3">ВЖМ</option>
      </select>
      <label for="street">Улица</label>
      <input class="form-control" type="text" placeholder="Улица" name="street" id="street">
      <label for="area">Состояние</label>
      <select class="form-control form-control-sm" id="area" name="area">
        <option value="1">Хорошее</option>
        <option value="2">Жилое</option>
        <option value="3">Ремонт</option>
      </select>
      <label for="street">Площадь участка</label>
      <div class="row">
        <div class="col">
        <input class="form-control form-control-sm" type="text" placeholder="от" name="street" id="street">
        </div>
        <div class="col">
        <input class="form-control form-control-sm" type="text" placeholder="до" name="street" id="street">
        </div>
      </div>
      <label for="street">Год постройки</label>
      <div class="row">
        <div class="col">
        <input class="form-control form-control-sm" type="text" placeholder="от" name="street" id="street">
        </div>
        <div class="col">
        <input class="form-control form-control-sm" type="text" placeholder="до" name="street" id="street">
        </div>
      </div>
      <label for="street">Комнат</label>
      <div class="row">
        <div class="col">
        <input class="form-control form-control-sm" type="text" placeholder="от" name="street" id="street">
        </div>
        <div class="col">
        <input class="form-control form-control-sm" type="text" placeholder="до" name="street" id="street">
        </div>
      </div>
      <label for="area">Стены</label>
      <select class="form-control form-control-sm" id="area" name="area">
        <option value="1">Кирпич</option>
        <option value="2">Саман</option>
        <option value="3">Газоблок</option>
      </select>
      <label for="area">Крыша</label>
      <select class="form-control form-control-sm" id="area" name="area">
        <option value="1">шифер</option>
        <option value="2">Металл</option>
        <option value="3">Плоская</option>
      </select>
      <label for="street">Этажность</label>
      <div class="row">
        <div class="col">
        <input class="form-control form-control-sm" type="text" placeholder="от" name="street" id="street">
        </div>
        <div class="col">
        <input class="form-control form-control-sm" type="text" placeholder="до" name="street" id="street">
        </div>
      </div>
      <label for="street">Фасад</label>
      <div class="row">
        <div class="col">
        <input class="form-control form-control-sm" type="text" placeholder="от" name="street" id="street">
        </div>
        <div class="col">
        <input class="form-control form-control-sm" type="text" placeholder="до" name="street" id="street">
        </div>
      </div>
      <label for="area">Газ</label>
      <select class="form-control form-control-sm" id="area" name="area">
        <option value="1">Есть</option>
        <option value="2">Нет</option>
      </select>
      <label for="area">Канализация</label>
      <select class="form-control form-control-sm" id="area" name="area">
        <option value="1">Центральная</option>
        <option value="2">Сливная яма</option>
        <option value="3">На участке</option>
      </select>
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
