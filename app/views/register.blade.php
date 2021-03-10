<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <link rel="stylesheet" href="css/contact.css">
    <title>Đăng kí</title>

</head>
<style>
    * {
        margin: 0px;
        padding: 0px;
        box-sizing: border-box;
    }
    body {
        font-size: 13px;

    }

    #container {
        width: 100%;
        margin: 0 auto;
    }
    .header {
        width: 100%;
        min-height: 150px;
        position: relative;

    }

    .contacts {
        width: 100%;
        min-height: 300px;
        display: grid;
        grid-template-columns: 60% 40%;
        margin-top: 35px;

    }


    .forms {
        /*position: relative;*/

    }
    .forms img {
        opacity: .9;
    }
    .forms form {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        color: white;
        font-family: sans-serif;
    }
    .send {
        color: white;
        font-size: 25px;
        border-bottom: 4px solid rgb(19, 201, 140);
        margin-bottom: 20px;
        padding: 13px 0;

    }
    .textbox {
        width: 100%;
        overflow: hidden;
        font-size: 20px;
        padding: 8px 0;
        margin: 8px 0 ;
        border-bottom: 1px solid rgb(19, 201, 140);
    }
    .textbox i {
        width: 26px;
        text-align: center;
        padding-right: 10px;
    }
    .textbox input {
        border: none;
        background: none;
        outline: none;
        color: white;
    }
    textarea {
        background: none;
        outline: none;
        border: 1px solid rgb(19, 201, 140);
        color: white;
    }
    .btn {
        width: 100%;
        background: none;
        padding: 5px;
        color: white;
        font-family: sans-serif;
        font-size: 18px;
        cursor: pointer;
        margin: 5px 0px;
        border: 2px solid ;
        transition: .5s;
        border: 2px solid rgb(92, 122, 219);
    }
    .btn:hover {
        transition: .5s;
        background-color: rgb(26, 245, 216);

    }

    .bg {
        transform: translate(35%, -25%);

    }
    input {
        width: 250px;
        line-height: 25px;
    }


</style>

<body>
<section id="container">
    <header class="header">




    </header>

    <section class="contacts">
        <div class="forms">

            <img class="bg" src="{{THEME_ASSET_URL}}img/bg.jpg" alt="" style="width: 100%; height:120%">
            <form action="" method="POST" enctype="multipart/form-data">
                <h3 class="send">Đăng kí</h3>

                <div class="textbox">
                    <i class="far fa-user"></i>
                    <input  type="text" name="name" placeholder="Tên tài khoản" value="{{@$_POST['name']}}" >

                </div>
                <p style="color: white">{{@$error['name']}}</p>
                <div class="textbox">
                    <i class="fas fa-envelope-open"></i>
                    <input type="email" name="email" placeholder="Your Email" value="{{@$_POST['email']}}">
                </div>
                <p style="color: white">{{@$error['email']}}</p>
                <p style="color: white">{{@$error['emails']}}</p>

                <div class="textbox">
                    <i class="fas fa-key"></i>
                    <input value="{{@$_POST['password']}}" type="password" name="password" placeholder="Mật khẩu">
                </div>
                <p style="color: white">{{@$error['password']}}</p>

                <div class="textbox">
                    <i class="fas fa-lock"></i>
                    <input value="{{@$_POST['confirm']}}" type="password" name="confirm" placeholder="Xác nhận mật khẩu">
                </div>
                <p style="color: white">{{@$error['confirm']}}</p>
                <p style="color: white">{{@$error['check']}}</p>

                <div class="textbox">
                    <i class="fas fa-user-tie"></i>
                    <input type="file" name="avatar" placeholder="">

                </div>
                <p style="color: white">{{@$error['avatar']}}</p>

{{--                <textarea name="" id="" cols="40" rows="10">--}}

{{--               </textarea>--}}
                <br>
                <input class="btn" name="reg" type="submit" value="REGISTER">

                <a href="{{BASE_ULR }}"><input class="btn" type="button" value="COME BACK"></a>
                <a href="{{BASE_ULR . "login" }}"><input class="btn" type="button" value="ĐĂNG NHẬP"></a>
            </form>
        </div>


    </section>

</section>
</body>

</html>