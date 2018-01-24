@if (Session::has('success'))

		<script type="text/javascript">
			
			Materialize.toast('{{Session::get('success')}}', 4000, 'rounded'); 

		</script> 

@endif
