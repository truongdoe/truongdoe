
<head>
    <link rel="stylesheet" href="{{url('backend')}}/asset/css/Regester.css">
</head>

<form action="" method="POST" style="border:1px solid #ccc">
    @csrf
  <div class="container">
    <label for="email"><b>Name</b></label>
    <input type="text" placeholder="Enter Email" name="name" required>

    <label for="email"><b>Email</b></label>
    <input type="text" placeholder="Enter Email" name="email" required>

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="password" required>


    <label>
      <input type="checkbox" checked="checked" name="remember" style="margin-bottom:15px"> Remember me
    </label>

    {{-- <p>By creating an account you agree to our <a href="#" style="color:dodgerblue">Terms & Privacy</a>.</p> --}}

    <div class="clearfix text-center container">
   
      <button type="submit" class="signupbtn">Sign Up</button>
    </div>
  </div>
</form>