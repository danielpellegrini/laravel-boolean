@foreach ($cars as $car)
Id_car =>      {{$car->id}} <br>
               {{$car->brand}} 
               {{$car->model}} <br> 
  Shift:       {{$car->shift}} <br>
  Horse power: {{$car->hp}} hp <br>
  Model year: {{$car->year}} <br><br>
@endforeach