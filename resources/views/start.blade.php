@extends('layouts.base')

@section('title-cables')
	Расчет массы кабеля
@endsection

@section('content')
<div class="input-group" style="width: 500px;">
  <span class="input-group-text">Наименование кабеля</span>
  <input id="nameCable" type="text" class="form-control" placeholder="Кабель К1">
</div>
<br>
<p>Выберети тип соединителя и укажите его количество в штуках</p>
<form class="row g-3 needs-validation">
	<div class="col-md-5">
		<select class="form-select form-select-sm mb-3">
			<option value="Тип соединителя">Тип соединителя</option>
			@foreach($cons as $con)
			<option value="{{ $con->id }}">{{ $con->title }}</option>
			@endforeach
		</select>
	</div>
	<div class="col-md-3">	
		<input type="text" class="form-control-sm" id="numConnect1" placeholder="Количество, шт" required >
	</div>
	<div class="col-md-4">	
		<button type="button" class="btn btn-outline-success btn-sm">+</button>
	</div>											
</form>

<p>Выберети тип марку провода и укажите количество в метрах</p>
<form class="row g-3 needs-validation">
	<div class="col-md-5">
		<select class="form-select form-select-sm mb-3">
			<option value="Марка провода">Марка провода</option>
			@foreach($wires as $wire)
			<option value="{{ $wire->id }}">{{ $wire->title }} {{ $wire->section }}</option>
			@endforeach
		</select>
	</div>
	<div class="col-md-3">	
		<input type="text" class="form-control-sm" id="numWire1" placeholder="Количество, м" required >
	</div>
	<div class="col-md-4">	
		<button type="button" class="btn btn-outline-success btn-sm">+</button>
	</div>					
</form>	

<p>Выберети тип экранирующей оплетки и укажите количество в метрах</p>
<form class="row g-3 needs-validation">
	<div class="col-md-5">
		<select class="form-select form-select-sm mb-3">
			<option value="Тип оплетки">Тип оплетки</option>
			@foreach($shields as $shield)
			<option value="{{ $shield->id }}">{{ $shield->title }} {{ $shield->diameter }}</option>
			@endforeach
		</select>
	</div>
	<div class="col-md-3">	
		<input type="text" class="form-control-sm" id="numShield1" placeholder="Количество, м" required >
	</div>
	<div class="col-md-4">	
		<button type="button" class="btn btn-outline-success btn-sm">+</button>
	</div>					
</form>

<p>Выберети тип изолирующей трубки и укажите количество в метрах</p>
<form class="row g-3 needs-validation">
	<div class="col-md-5">
		<select class="form-select form-select-sm mb-3">
			<option value="Тип оплетки">Тип оплетки</option>
			@foreach($tubes as $tube)
			<option value="{{ $tube->id }}">{{ $tube->title }} {{ $tube->diameter }}</option>
			@endforeach
		</select>
	</div>
	<div class="col-md-3">	
		<input type="text" class="form-control-sm" id="numTube1" placeholder="Количество, м" required >
	</div>
	<div class="col-md-4">	
		<button type="button" class="btn btn-outline-success btn-sm">+</button>
	</div>	
</form>
  <button class="btn btn-success btn-sm" type="button">Добавить в список</button>

@endsection

@section('aside')
	@parent
	<h4>Список кабелей</h4>
	<table class="table table-bordered border-success" style="font-size: 80%;">
		<thead>
			<tr>
				<th scope="col">Наименование</th>
				<th scope="col">Наименование</th>
				<th scope="col">Вес, кг</th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td>Кабель К1</td>
				<td>соединитель, провод, трубка, плетенка</td>
				<td>вес</td>
				<td><a href="">Изменить</a></td>
                <td><a href="">Удалить</a></td>
			</tr>
		</tbody>
	</table>
	<button class="btn btn-success btn-sm" type="button" style="position: relative; float: right;">Очистить список</button>
@endsection