<head>
	<link rel="stylesheet" href="{{url('backend')}}/asset/css/login.css">
</head>

<article class="col-sm-12">
	<div class="row">
		<div class="col-sm-3"></div>
		<div class="col-sm-6">
			<form action="{{route('post_login')}}" method="post">
				@csrf
			  <div class="row">
				<div class="col-md-6">
					<label for="uname"><b>Email</b></label>
					<input type="text" placeholder="Enter Username" name="email" required>
				
					<label for="psw"><b>Password</b></label>
					<input type="password" placeholder="Enter Password" name="password" required>
				
					<button type="submit">Login</button>
					<label>
					  <input type="checkbox" checked="checked" name="remember"> Remember me
					</label>
				  </div>
				
				  <div class="col-md-6" style="background-color:#f1f1f1">
					<button type="button" class="cancelbtn">Cancel</button>
					<span class="psw">Forgot <a href="{{route('regester')}}">Registration</a></span>
				  </div>
			  </div>
				
			  </form>
		</div>
		<div class="col-sm-3"></div>
	</div>
</article>
