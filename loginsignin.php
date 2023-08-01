<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
<meta charset="utf-8">
    <title>NorlitzBatoFilms | Cedrick Gwapo</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>

    <style>
@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap');
*{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: Arial, Helvetica, sans-serif;
}
body{
    min-height: 100vh;
    display: flex;
    align-items: center;
    justify-content: center;
    background: white;
    padding: 30px;
}
.container{
    position: relative;
    max-width: 850px;
    width: 100%;
    background: #fff;
    padding: 40px 30px;
    box-shadow: 0 5px 10px #3299FF;
    perspective: 2700px;
    border-radius: 8px;
}
.container .cover{
    position: absolute;
    height: 100%;
    width: 50%;
    z-index: 98;
    top: 0%;
    left: 50%;
    transition: all 1s ease;
    transform-origin: left;
    transform-style: preserve-3d;
}
.container .cover:before{
    content: '';
    position: absolute;
    height: 100%;
    width: 100%;
    background: #fff;
}
.container .cover img{
    position: absolute;
    height: 100%;
    width: 100%;
    z-index: 12;
}
.container #flip:checked ~ .cover{
    transform: rotateY(-180deg);
}
.container form{
    height: 100%;
    width: 100%;
    background: #fff;
}
.container .form-content{
    display: flex;
    align-items: center;
    justify-content: space-between;
}
.form-content .login-form,
.form-content .signup-form{
    width: cacl(100% / 2 - 25px);
}
form .form-content .title{
    position: relative;
    font-size: 24px;
    font-weight: bold;
    color: #000000;
}
form .form-content .title:before{
    content: '';
    position: absolute;
    left: 0;
    bottom: 0;
    height: 3px;
    width: 25px;
    background: white;
}
form .signup-form .title:before{
    width: 20px;
}
form .form-content .input-boxes{
    margin-top: 30px;
}
form .form-content .input-box{
    display: flex;
    align-items: center;
    height: 50px;
    width: 100%;
    margin: 10px 0;
    position: relative;
}
.form-content .input-box input{
    height: 100%;
    width: 100%;
    outline: none;
    border: 1px solid #007FFF;
    border-radius: 10px;
    padding: 0 30px;
    font-size: 15px;
    font-weight: 200;
    transition: all 0.3s ease;
}
.form-content .input-box input:focus,
.form-content .input-box input:valid{
    border-color: #3299FF;
}
.form-content .input-box i{
    position: absolute;
    color: #3299FF;
    left: 10px
}
form .form-content .text{
    font-size: 14px;
    font-weight: 500;
    color: #000000;
}
form .form-content .text a{
    text-decoration: none;
}
form .form-content .text a:hover{
    text-decoration: underline;
}
form .form-content .button {
    display: flex;
    justify-content: center;
    margin-top: 30px;
}
form .form-content .button input{
    color: #000000;
    background: #66B2FF;
    font-weight: bold;
    padding: 0;
    border-radius: 25px;
    width: 120px;
    height: 40px;
    cursor: pointer;
    transition: all 0.4s ease;
}
form .form-content .button input:hover{
    background: #fff;
}
form .form-content label{
    color: #007FFF;
}
form .form-content label:hover{
    text-decoration: underline;
    cursor: pointer;
}
form .form-content .login-text,
form .form-content .signup-text{
    text-align: center;
    margin-top: 25px;
}
.container #flip{
    display: none;
}
@media (max-width: 730px){
    .container .cover{
        display: none;
    }
    .form-content .login-form,
    .form-content .signup-form{
        width: 100%;
    }
    .form-content .signup-form{
        display: none;
    }
    .container #flip:checked ~ form .signup-form{
        display: block;
    }
    .container #flip:checked ~ form .login-form{
        display: none;
    }
}
    </style>
</head>
<body>
    <div class="container">
        <input type="checkbox" id="flip">
        <div class="cover">
            <div class="front">
                <img src="./images/lahi.png"alt="lahi">
            </div>
        </div>
            <form action="#">
             <div class="form-content">
             <div class="login-form">
                <div class="title">WELCOME BACK!</div>
                <div class="input-boxes">
                    <div class="input-box">
                    <i class="fas fa-envelope"></i>
                        <input type="text" placeholder="Enter your email" required>
                    </div>
                    <div class="input-box">
                    <i class="fas fa-lock"></i>
                        <input type="password" placeholder="Enter your password" required>
                    </div>
                    <div class="text"><a href="#">Forgot password?</a></div>
                    <div class="button input-box">
                        <input type="submit" value="Login">
                    </div>
                    <div class="text sign-up-text">Don't have an account? <label for="flip">Signup now</label></div>
                </div>
            </div>

            <div class="signup-form">
                <div class="title">Register to Book!</div>
                <div class="input-boxes">
                    <div class="input-box">
                    <i class="fas fa-user"></i>
                        <input type="text" placeholder="Enter your fullname" required>
                    </div>
                    <div class="input-box">
                    <i class="fas fa-envelope"></i>
                        <input type="text" placeholder="Enter your email" required>
                    </div>
                    <div class="input-box">
                    <i class="fas fa-phone"></i>
                        <input type="text" placeholder="Enter your phonenumber" required>
                    </div>
                    <div class="input-box">
                    <i class="fas fa-lock"></i>
                        <input type="password" placeholder="Enter your password" required>
                    </div>
                    <div class="button input-box">
                        <input type="submit" value="Signup">
                    </div>
                    <div class="text sign-up-text">Already have an account? <label for="flip">Login now</label></div>
                </div>
            </div> 
       </form>
    </div>
</body>
</html>