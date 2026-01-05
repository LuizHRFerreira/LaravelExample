<div>
	@if ($message = Session::get('success'))
	<div class="alert mt-4 alert-success alert-block">
		<button type="button" class="close" data-dismiss="alert"></button>	
			<strong>{{ $message }}</strong>
	</div>
	@endif


	@if ($message = Session::get('error'))
	<div class="alert mt-4 alert-danger alert-block">
		<button type="button" class="close" data-dismiss="alert"></button>	
		<strong>{{ $message }}</strong>
	</div>
	@endif


	@if ($message = Session::get('warning'))
	<div class="alert mt-4 alert-warning alert-block">
		<button type="button" class="close" data-dismiss="alert"></button>	
		<strong>{{ $message }}</strong>
	</div>
	@endif


	@if ($message = Session::get('info'))
	<div class="alert mt-4 alert-info alert-block">
		<button type="button" class="close" data-dismiss="alert"></button>	
		<strong>{{ $message }}</strong>
	</div>
	@endif


	@if ($errors->any())
	<div class="alert mt-4 alert-danger">
		<button type="button" class="close" data-dismiss="alert"></button>	
		Verifique se há erros no formulário abaixo
		<ul>
			@foreach ($errors->all() as $error)
				<li>{{ $error }}</li>
			@endforeach
		</ul>
	</div>
	@endif
</div>