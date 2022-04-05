<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <title>login</title>
</head>
<body>


    <header>
        <nav>
           <div id="mySidenav" class="sidenav">
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
        <a href="#">BitPlease</a>
        <a href="#">Join us</a>
        <a href="#">Sign in</a>
        <a href="#">Product Management</a>
        <a href="#">Product Design</a>
        <a href="#">UI/UX design</a>
        <a href="#">Front-End Development</a>
        <a href="#">Back-End Development</a>
      </div>
      <div id="main">
      </div>
            <ul>
                <li>
                    <h1>Bits<span onclick="openNav()">Please</span></h1>
                </li>
                 
                <div class="rightnav">
                <li class="rm">FAQ</li>
                <li><button>Join us</button></li>
            </div>

            </ul>
        </nav>
    </header>
<!-- =========nav end============== -->



<div class="mobileimgcontainer">
    <img src="./Hero Sectio Image.png " alt="">
</div>
    
    <div class="container">

        <div class="container-text">
            <h2>
                Transition into the world of IT easily with Us.
            </h2>
            <p class="text-p">
                We have a step-by-step guide, dedicated mentors, curious learners and resources to help you achieve your goals. 
            </p>
            <nav class="btn"> 
            <a href="{{ route('login') }}"> sign in</a>
            <a href="{{ route('register-user') }}">join us</a>
                <!-- <button class="sign-btn" onclick="signIn()"> Sign in</button> -->
                <!-- <form method="post"login action=""> -->
                <!-- <button class="join-btn" onclick="joinUs()">Join us now</button> -->
            <!-- </form> -->
            </nav>

            <div class="chat">

                <div class="chat-img">
                    <img src="./heroicons-solid_chat-alt-2.png" alt=""></div>

                <p>We know you want to chat, what is it about?</p>
            </div>
        </div>



        <div class="container-img">
            <div class="img-group">
                <img src="/Group 3.png" alt="">
            </div>
            
            <div class="imgcontainer">
            <img src="{{asset('/imgfolder/Hero Sectio Image.png')}}" alt="Image"/>
            <!-- <img src="/Hero Sectio Image.png" alt=""> -->
</div>
        </div>


    </div>
  <!-- ========Join us========== -->
    
    <div class="container-join-us" style="display: none">
        <nav class="navsignin"> 
            <h2 id="welcome">We're glad you came!</h2> 
            <h5 id="welcome">Don't wait anylonger. Sign up!</h5>
            <button id="cancelbutton" onclick="closeJoinUs()">X</button></br>
        </nav>
     </div>

 



<!-- ========sign in========== -->


<div class="containersignin">
        
    <nav class="navsignin"> 
        <h2 id="welcome">Welcome back Fellow!</h2> 
        <button id="cancelbutton" onclick="closeSignIn()">X</button></br>
    </nav>
    <div>
        <div class="form">
            <form action="">

            <p class="text">Email Address</p>
            <input type="text" class="input-box" name="email" placeholder="Enter your email address">
            <p class="text">Password</p>
            <input type="password" class="input-box" name="password" placeholder="Create password">
            <p  class="pass">Forgot password?</p>
            </form>
        </div>

        <div class="fellow">
            <button class="just-btn">Login</button>
            <p>Alternatively</p>
            <button class="google-btn"> 
             <input class="google-img" type="Image" src="./flat-color-icons_google.png" height="30" width="30">
                 Continue with Google
                </button>
            <p>Not yet a fellow? <span><a href=""> Join Us</a></span></p>
            <p><span><a href="">Forgot Password?</a></span></p>
        </div>
    </div>

</div>
<!-- ========sign in end======= -->
<script>
 function openNav() {
  document.getElementById("mySidenav").style.width = "250px";
  document.getElementById("main").style.marginLeft = "250px";
}

function closeNav() {
  document.getElementById("mySidenav").style.width = "0";
  document.getElementById("main").style.marginLeft = "0";
}

function signIn() {
    document.querySelector('.containersignin').style.display = "block";
}

function joinUs() {
    console.log("sign up")
    document.querySelector('.container-join-us').style.display = "block";
}
function closeSignIn() {
    document.querySelector('.containersignin').style.display ="none";
}

function closeJoinUs() {
    console.log("sign up")
    document.querySelector('.container-join-us').style.display = "none";
}
</script>
</body>
</html>