<!DOCTYPE html>
<html lang="en">
<head>
	@include('partials._mhead')

	<link rel="stylesheet" href="{{ asset('css/mcustom.css') }}">
	{{-- <link rel="stylesheet" href="{{ asset('js/mcustom.js') }}"> --}}
</head>
<body>
	<header>
		@include('partials._mnav')
	</header>

	<main class="section">
		<div class="row">
			<div class="col s12 m4 l3">
				@include('partials._msidenav')
			</div>
			<div class="col s12 m8 l9">
				@include('partials._msearch')
				<div class="section">
					@yield('content')
				</div>
			</div>
		</div>
	</main>

	@include('partials._mfooter')
	@include('partials._mjavascript')
	@include('partials._messages')
	@yield('scripts')
</body>
</html>