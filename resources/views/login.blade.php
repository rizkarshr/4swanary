<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE-edge" />
    <link rel="icon" type="image/x-icon" href="/images/l.png">
    <title>Login Admin</title>
    <link rel="stylesheet" href="text/css">
    <meta name="viewport" content="width=device-width,initial-scale=1.0" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <style>
        a {
            text-decoration: none;
        }

        body {
            background-image: url(/images/b.png);
            background-repeat: no-repeat;
            background-size: cover;
            color: #25262B;
        }

        label {
            font-family:  'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
        }

        #card {
            background-color: rgba(255, 255, 255, 0.851);
            border-radius: 10px;
            box-shadow: 1px 2px 8px rgba(0, 0, 0, 65);
            height: 435px;
            margin: 5rem auto 5rem auto;
            width: 380px;
        }

        #card-content {
            padding: 22px 44px;
        }

        #card-title {
            letter-spacing: 0px;
            padding-bottom: 8px;
            padding-top: 13px;
            text-align: center;
            font-family: 'helvetica';
        }

        #submit-btn {
            background-color: #35110a;
            border-radius: 10px;
            border: none;
            box-shadow: 0px 1px 8px #2d2c2c;
            cursor: pointer;
            color: rgb(255, 255, 255);
            font-family: 'helvetica';
            height: 42.3px;
            margin: 0 auto;
            margin-top: 30px;
            transition: 0.50s;
            width: 153px;
        }

        .form {
            align-items: left;
            display: flex;
            flex-direction: column;
            padding-top: 20px;
        }

        .form-border {
            border-radius: 30px;
            height: 1px;
            width: 100%;

        }

        .form-content {
            background: #c6c6c6;
            border-radius: 10px;
            border: none;
            outline: none;
            padding-bottom: 10px;
            padding-left: 15px;
            font-size: 15px;
        }
    </style>
</head>

<body>
    <div id="card">
        <div id="card-content">
            <div id="card-title">
                <image src="/images/l.png" width="60%" align="center"></image><br><br>
                <label><b>Welcome To Aswana.ry!</b></label>
            </div>
            <form method="post" class="form" onsubmit="actionLogin(this,event)">
                <input style="padding-top: 10px;" type="text" id="username" class="form-content" name="usernamee" autocomplete="on" placeholder="enter your username..." required />
                <div class="form-border"></div> <br>

                <input style="padding-top: 10px;" type="password" id="password" class="form-content" name="pass" autocomplete="on" placeholder="enter your password..." required />
                <div class="form-border"></div>
                <input id="submit-btn" type="submit" name="submit" value="L O G I N">
            </form>
        </div>
    </div>

</body>
<script src="{{asset('app/build/app.js')}}"></script>
<script src="{{asset('app/build/auth.js')}}" type="text/javascript"></script>

</html>