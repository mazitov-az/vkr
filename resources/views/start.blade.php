@extends('layouts.app')

@section('title-cables')
	Расчет массы кабеля
@endsection

@section('content')
<div class="input-group" style="width: 500px;">
  <span class="input-group-text">Наименование кабеля</span>
  <input type="text" class="form-control" placeholder="Кабель К1">
</div>
<br>
<p>Выберети тип соединителя и укажите его количество в штуках</p>
<form class="row g-2 needs-validation">
	<div class="col-md-5">
		<select class="form-select form-select-sm mb-3">
			<option value="Тип соединителя">Тип соединителя</option>
			@foreach($cons as $con)
			<option value="{{ $con->id }}">{{ $con->title }}</option>
			@endforeach
		</select>
	</div>
	<div class="col-md-5">	
		<select class="form-select form-select-sm mb-3">
			<option value="Количество">Количество</option>
			@for($i=1; $i<10; $i++)
			<option value="{{ $i }}">{{ $i }}</option>
			@endfor
		</select>
	</div>					
</form>

<p>Выберети тип марку провода и укажите количество в метрах</p>
<form class="row g-2 needs-validation">
	<div class="col-md-5">
		<select class="form-select form-select-sm mb-3">
			<option value="Марка провода">Марка провода</option>
			@foreach($wires as $wire)
			<option value="{{ $wire->id }}">{{ $wire->title }} {{ $wire->section }}</option>
			@endforeach
		</select>
	</div>
	<div class="col-md-5">	
		<select class="form-select form-select-sm mb-3">
			<option value="Количество">Количество</option>
			@for($i=1; $i<10; $i++)
			<option value="{{ $i }}">{{ $i }}</option>
			@endfor
		</select>
	</div>					
</form>	

<p>Выберети тип экранирующей оплетки и укажите количество в метрах</p>
<form class="row g-2 needs-validation">
	<div class="col-md-5">
		<select class="form-select form-select-sm mb-3">
			<option value="Тип оплетки">Тип оплетки</option>
			@foreach($shields as $shield)
			<option value="{{ $shield->id }}">{{ $shield->title }} {{ $shield->diameter }}</option>
			@endforeach
		</select>
	</div>
	<div class="col-md-5">	
		<select class="form-select form-select-sm mb-3">
			<option value="Количество">Количество</option>
			@for($i=1; $i<10; $i++)
			<option value="{{ $i }}">{{ $i }}</option>
			@endfor
		</select>
	</div>					
</form>

<p>Выберети тип изолирующей трубки и укажите количество в метрах</p>
<form class="row g-2 needs-validation">
	<div class="col-md-5">
		<select class="form-select form-select-sm mb-3">
			<option value="Тип оплетки">Тип оплетки</option>
			@foreach($tubes as $tube)
			<option value="{{ $tube->id }}">{{ $tube->title }} {{ $tube->diameter }}</option>
			@endforeach
		</select>
	</div>
	<div class="col-md-5">	
		<select class="form-select form-select-sm mb-3">
			<option value="Количество">Количество</option>
			@for($i=1; $i<10; $i++)
			<option value="{{ $i }}">{{ $i }}</option>
			@endfor
		</select>
	</div>					
</form>

<button type="submit" class="btn btn-success" style="position: relative; float: left;">Добавить</button>
@endsection

@section('aside')
	@parent
	<h4>Список кабелей</h4>

@endsection