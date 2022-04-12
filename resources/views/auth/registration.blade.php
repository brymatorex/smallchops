<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="good.css">
    <title>Document</title>
</head>
<body>
  
<div class="header">
            <h2 id="welcome">We're glad you came!</h2> 
            <h5 id="welcome">Don't wait anylonger. Sign up!</h5>
</div>

    
    <div class="cardcontainer">
    <div class="card">
    
    <form action="{{ route('register.custom') }}" method="POST">
    @csrf
<div class="inputform">
<label for="">full name</label>
    <input type="text" placeholder="Enter Name in Full" id="name" class="form-control" name="name"
                                    required autofocus>
                                @if ($errors->has('name'))
        <span class="text-danger">{{ $errors->first('name') }}</span>
                                @endif
                            </div>

            <div class="inputform">
            <label for="">email</label>
                                <input type="text" placeholder="Enter Email Address" id="email_address" class="form-control"
                                    name="email" required autofocus>
                                @if ($errors->has('email'))
                                <span class="text-danger">{{ $errors->first('email') }}</span>
                                @endif
                            </div>

                            <div class="inputform">
                            <label for="">password</label>
        <input type="password" placeholder="Enter Your Password" id="password" class="form-control"
                                    name="password" required>
                                @if ($errors->has('password'))
                    <span class="text-danger">{{ $errors->first('password') }}</span>
                                @endif
                            </div>

        <div class="checkbox">
         <label><input type="checkbox" name="remember"> Remember Me</label>
        </div>
                            
        
                            <div class="btn">
        <button type="submit" class="btncard">Sign up</button>
                            </div>
                        </form>

                        <div class="alternative">
  <div class="righthand"></div>
  <p>alternative</p>
  <div class="lefthand"></div>
                    </div>

                      <div class="googlecontainer">
                          <div class="googleimg">
                              <img src="{{asset('/image/google.png')}}" alt="">
                          </div>
                          <p>continue with google</p>
                      </div>
                    
                    <div class="fellow">
                        <p style="margin-bottom:10px;">Not yet a fellow <a href="{{ route('register-user') }}" style="font-weight: bold;font-size: 18px;
                        text-transform: capitalize;
                         ">join us</a></p>
                        <p><a href="" style="font-size: 18px;
                        text-transform: capitalize;
                         ">forgot password?</a></p>
                    </div>
                    </div>
        </div>

</body>
</html>