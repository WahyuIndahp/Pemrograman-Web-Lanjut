<!doctype html>
<html lang="en" dir="ltr">
    <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="{{asset('/css/lgn.css')}}">
    <title>Login</title>
    </head>
    <body>
    <nav>
        <div class="logo">
            <a href="">talꓘᴋdrama</a>
        </div>
    </nav>
    <div class="contain">
    <div class="form-box">
        <div class="button-box">
            <div id="btn"></div>
            <button type="button" class="toggle-btn">Login</button>
        </div> 
        <form class="input-group" action="{{route('postlogin')}}" method="post">
        @csrf
        @method('POST')
            <input type="email" class="input-field" name="email" placeholder="Email" required>
            <input type="password" class="input-field" name="email" placeholder="Password" required>
            <button type="submit" class="submit-btn">LOGIN</button>
        </form>
    </div>
</div>
</body>
</html>