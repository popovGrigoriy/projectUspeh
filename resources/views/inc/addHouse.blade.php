<div class="container">
  <form action="{{ route('addObjectPost') }}" method="post" autocomplete="off">
    @csrf
    <div class="form-group">
      <div class="row">
        <h2 align = "center">Добавление Дома</h2>
      </div>
      <hr>

      <input type="hidden" name="type" value="Дом">

      <div class="row">
        <div class="col-md-6">
          <div class="row">
            <div class="col-md-5 fontStatic"> <label for="landMark">Район:</label> </div>
            <div class="col-md-7">
              <select name="landMark" style="height: 30px; width: 182px;">
                <option value = ''>Не указанно</option>
                <option>СЖМ</option>
                <option>ЗЖМ</option>
                <option>ВЖМ</option>
                <option>РДВС</option>
                <option>Центр</option>
                <option>Красныйсад</option>
                <option>Гайдарапос.</option>
                <option>Наливная</option>
                <option>Азовский</option>
                <option>Соленоеозеро</option>
                <option>Залесье</option>
                <option>Овощной</option>
                <option>Солнечный</option>
                <option>ПЧЛ</option>
                <option>Вет.личебница</option>
                <option>Авиагородок</option>
                <option>Авиаторовсквер</option>
              </select>
              <br>
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="row">
            <div class="col-md-5"> <label for="street">Улица:</label> </div>
            <div class="col-md-7"> <input type="text" name="street" value=""><br> </div>
          </div>
        </div>
      </div>
      <hr>

      <div class="row">
        <div class="col-md-6">
          <div class="row">
            <div class="col-md-5"> <label for="number">Номер дома:</label> </div>
            <div class="col-md-7"> <input type="text" name="number" value=""><br> </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="row">
            <div class="col-md-5"> <label for="conditions">Состояние:</label> </div>
            <div class="col-md-7">
              <select name="conditions">
                <option value="">Не указанно</option>
                <option>Строй вариант</option>
                <option>Чистовая отделка</option>
                <option>Жилое</option>
                <option>Хорошее</option>
                <option>Отличное</option>
                <option>Требуется кап.ремонт</option>
                <option>Требуется косметич.ремонт</option>
              </select>
            </div>
          </div>
        </div>
      </div>
      <hr>

      <div class="row">
        <div class="col-md-6">
          <div class="row">
            <div class="col-md-5"> <label for="size">Площадь участка:</label> </div>
            <div class="col-md-7"> <input type="text" name="size" value="" size = "16">сот.<br> </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="row">
            <div class="col-md-5"> <label for="year">Год постройки:</label> </div>
            <div class="col-md-7"> <input type="text" name="year" value=""><br> </div>
          </div>
        </div>
      </div>
      <hr>

      <div class="row">
        <div class="col-md-6">
          <div class="row">
            <div class="col-md-5"> <label for="square">Общая площадь:</label> </div>
            <div class="col-md-7"> <input type="text" name="square" value="" size = "15">кв.м.<br> </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="row">
            <div class="col-md-5"> <label for="livingSquare">Жилая площадь:</label> </div>
            <div class="col-md-7"> <input type="text" name="livingSquare" value="" size = "15">кв.м.<br> </div>
          </div>
        </div>
      </div>
      <hr>

      <div class="row">
        <div class="col-md-6">
          <div class="row">
            <div class="col-md-5"> <label for="kitchen">Площадь кухни:</label> </div>
            <div class="col-md-7"> <input type="text" name="kitchen" value="" size = "15">кв.м.<br> </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="row">
            <div class="col-md-5"> <label for="rooms">Количество комнат:</label> </div>
            <div class="col-md-7"> <input type="text" name="rooms" value=""><br> </div>
          </div>
        </div>
      </div>
      <hr>

      <div class="row">
        <div class="col-md-6">
          <div class="row">
            <div class="col-md-5"> <label for="kitchen">Площадь кухни:</label> </div>
            <div class="col-md-7"> <input type="text" name="kitchen" value="" size = "15">кв.м.<br> </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="row">
            <div class="col-md-5"> <label for="rooms">Количество комнат:</label> </div>
            <div class="col-md-7"> <input type="text" name="rooms" value=""><br> </div>
          </div>
        </div>
      </div>
      <hr>

      <div class="row">
        <div class="col-md-6">
          <div class="row">
            <div class="col-md-5"> <label for="wall">Материал стен:</label> </div>
            <div class="col-md-7">
              <select name="wall">
                <option value="">Не указанно</option>
                <option>Панельный</option>
                <option>Кирпичный</option>
                <option>Сайдинг</option>
                <option>Газоблок</option>
                <option>Оштукатуренный</option>
                <option>Шелеванный</option>
                <option>Саман+Кирпич</option>
                <option>Канадская технология</option>
              </select>
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="row">
            <div class="col-md-5"> <label for="roof">Материал крышы:</label> </div>
            <div class="col-md-7"> <input type="text" name="roof" value=""><br> </div>
          </div>
        </div>
      </div>
      <hr>

      <div class="row">
        <div class="col-md-6">
          <div class="row">
            <div class="col-md-5"> <label for="floors">Количество этажей:</label> </div>
            <div class="col-md-7"> <input type="text" name="floors" value=""><br> </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="row">
            <div class="col-md-5"> <label for="facade">Ширина фасада:</label> </div>
            <div class="col-md-7"> <input type="text" name="facade" value=""><br> </div>
          </div>
        </div>
      </div>
      <hr>

      <div class="row">
        <div class="col-md-6">
          <div class="row">
            <div class="col-md-5"> <label for="gas">Газ:</label> </div>
            <div class="col-md-7">
              <select name="gas">
                <option value="">Не указанно</option>
                <option>Да</option>
                <option>Нет</option>
                <option>По меже</option>
              </select>
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="row">
            <div class="col-md-5"> <label for="sewerage">Канализация:</label> </div>
            <div class="col-md-7">
              <select name="sewerage">
                <option value="">Не указанно</option>
                <option>Сливная яма</option>
                <option>Городская</option>
                <option>Нет</option>
              </select>
            </div>
          </div>
        </div>
      </div>
      <hr>

      <div class="row">
        <div class="col-md-6">
          <div class="row">
            <div class="col-md-5"> <label for="percentage">Доля:</label> </div>
            <div class="col-md-7"> <input type="text" name="percentage" value=""><br> </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="row">
            <div class="col-md-5"> <label for="slope">Уклон участка:</label> </div>
            <div class="col-md-7"> <input type="text" name="slope" value="" size = "11">градусов<br> </div>
          </div>
        </div>
      </div>
      <hr>

      <div class="row">
        <div class="col-md-6">
          <div class="row">
            <div class="col-md-5"> <label for="sellers_name">Имя продовца:</label> </div>
            <div class="col-md-7"> <input type="text" name="sellers_name" value=""><br> </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="row">
            <div class="col-md-5"> <label for="phone">Телефон продовца:</label> </div>
            <div class="col-md-7"> <input type="text" name="phone" value=""><br> </div>
          </div>
        </div>
      </div>
      <hr>

      <div class="row">
        <div class="col">
          <label for="description">Описание:</label>
          <br>
          <textarea name="description" rows="3" cols="60"></textarea>
        </div>
      </div>
      <hr>

      <div class="row">
        <div class="col-md-6">
          <div class="row">
            <div class="col-md-5"> <label for="agent">Агент:</label> </div>
            <div class="col-md-7"> <input type="text" name="agent" value=""><br> </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="row">
            <div class="col-md-5"> <label for="price">Цена:</label> </div>
            <div class="col-md-7"> <input type="text" name="price" value="" size = "11">Тыс.руб.<br> </div>
          </div>
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
