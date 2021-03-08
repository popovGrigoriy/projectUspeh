<div class="container">
  @foreach($data as $el)
    <form action="{{ route('updateData') }}" method="post" class="styleAdd" autocomplete="off">
      @csrf
      <div class="form-group">
        <div class="row">
          <h2 align = "center">Изменение участка</h2>
        </div>
        <hr>


        <input type="hidden" name="type" id="type" value="Участок">
        <input type="hidden" name="full" value="true">
        <input type="hidden" name="searchId" value="{{$fullID}}">

        <div class="row">
          <div class="col-md-6">
            <div class="row">
              <div class="col-md-5"> <label for="landMark">Район:</label> </div>
              <div class="col-md-7">
                <select name="landMark" style="height: 30px; width: 182px;">
                  <option>{{$el->landmark}}</option>
                  <option value = ''>Любой</option>
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
              <div class="col-md-5"> <label for="conditions">Состояние:</label> </div>
              <div class="col-md-7"> <input type="text" name="conditions" value="{{$el->conditions}}"><br> </div>
            </div>
          </div>
        </div>
        <hr>

        <div class="row">
          <div class="col-md-6">
            <div class="row">
              <div class="col-md-5"> <label for="size">Площадь участка:</label> </div>
              <div class="col-md-7"> <input type="text" name="size" value="{{$el->size}}" size = "16">сот.<br> </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="row">
              <div class="col-md-5"> <label for="facade">Ширина фасада:</label> </div>
              <div class="col-md-7"> <input type="text" name="facade" value="{{$el->facade}}"><br> </div>
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
                  <option>{{$el->gas}}</option>
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
                  <option>{{$el->sewerage}}</option>
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
              <div class="col-md-7"> <input type="text" name="percentage" value="{{$el->percentage}}"><br> </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="row">
              <div class="col-md-5"> <label for="slope">Уклон участка:</label> </div>
              <div class="col-md-7"> <input type="text" name="slope" value="{{$el->slope}}" size = "11">градусов<br> </div>
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
          <div class="col-md-6">
            <div class="row">
              <div class="col-md-5"> <label for="agent">Агент:</label> </div>
              <div class="col-md-7"> <input type="text" name="agent" value="{{$el->agent}}"><br> </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="row">
              <div class="col-md-5"> <label for="price">Цена:</label> </div>
              <div class="col-md-7"> <input type="text" name="price" value="{{$el->price}}" size = "11">Тыс.руб.<br> </div>
            </div>
          </div>
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
