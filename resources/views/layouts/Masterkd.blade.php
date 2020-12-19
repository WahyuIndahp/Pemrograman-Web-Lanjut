<!doctype html>
<html lang="en" dir="ltr">
    <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('title')</title>
    </head>
    <body>
    <nav>
        <div class="logo">
            <a href="/kdrama">talꓘᴋdrama</a>
        </div>

        <ul>
            <li>
                <a href="/romance">ROMANCE</a>
            </li>
            <li>
                <a href="/action">ACTION</a>
            </li>
            <li>
                <a href="/melo">MELODRAMA</a>
            </li>
            <li>
                <a href="/Comedy">COMEDY</a>
            </li>
            <li>
                <a href="/history">HISTORY</a>
            </li>
            <li>
                <a href="/crudDrama">EDIT DRAMA</a>
            </li>
            <li>
                <a href="/kategori">KATEGORI</a>
            </li>  
            <li>
                <a href="/aboutkd">ABOUT ME</a>
            </li>
            <li>
                <a href="/loginta">LOGOUT</a>
            </li>
        </ul>
    </nav>
    
    <section class="greeting">
    @yield('greeting')
    </section>

    <section>
    @yield('content')
    </section>
</body>
</html>