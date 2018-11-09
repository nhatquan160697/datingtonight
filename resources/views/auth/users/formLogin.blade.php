<form action="{{ route('auth.users.default') }}" method="post">
	{{ csrf_field() }}
	@if (session('alert'))
	    <script type="text/javascript" charset="utf-8">
	    	alert("{{ session('alert') }}");
	    </script>
	@endif
	<div class="form-left-w3l">
		<input type="text" class="top-up" name="username" placeholder="Username" required="">
	</div>
	<div class="form-right-w3ls ">
		<input type="password" name="password" placeholder="Password" required="">
	</div>
	<div class="btnn">
		<button type="submit">LOGIN</button><br>
	</div>
</form>