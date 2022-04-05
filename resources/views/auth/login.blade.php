<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
                  <main class="login-form">
                <div class="card">
                    <h3 class="card-header">Login</h3>
                    <div class="card-body">
                        <form method="POST" action="{{ route('login.custom') }}">
                            @csrf
    <div class="inputform">
    <input type="text" placeholder="Email" id="email" class="form-control" name="email" required autofocus>
                                @if ($errors->has('email'))
     <span class="text">{{ $errors->first('email') }}</span>
                                @endif
                            </div>

<div class="inputform">
<input type="password" placeholder="Password" id="password" class="form-control" name="password" required>
                                @if ($errors->has('password'))
<span class="text">{{ $errors->first('password') }}</span>
                                @endif
                            </div>

                            
                                <div class="checkbox">
                                    <label>
<input type="checkbox" name="remember"> Remember Me
                                    </label>
                                </div>
                           

                            <div class="btn">
            <button type="submit" class="btncard">Signin</button>
                            </div>

                        </form>
                    </div> </div>
</main> 
</body>
</html>