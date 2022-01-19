<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>@yield('title-cables')</title>
	<link rel="stylesheet" href="/css/app.css">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</head>
<body>
	@include('inc.header')

	@if(Request::is('/'))
	@include('inc.hero')
	@endif

	<div class="container mt-3">
		@include('inc.messages')
		<div class="row">
			<div class="col-8">
				@yield('content')
			</div>
			<div class="col-4">
				@include('inc.aside')
			</div>
		</div>
	</div>

	@include('inc.footer')
</body>
</html>