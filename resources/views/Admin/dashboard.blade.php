<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="../../css/style.css">
</head>
<body>
<div class="container">
    <aside class="sidebar">
        <div class="flex p-top3">
            <img src="../../img/avatar-face-05.webp" class="icon-1">
            <p class="p-top1 p-right1">David Green</p>
        </div>

        <div class="p-top2">
            <h2>Dashboard</h2>
        </div>

        <div>
            <ul>
                <li><a href="#">خانه</a></li>
                <li><a href="{{route('movie.create')}}">افزودن فیلم</a></li>
                <li><a href="{{route('movie.index')}}">فیلم ها</a></li>
                <li><a href="{{route('user.show')}}">کاربران</a></li>
                <li><a href="{{route('reservation.show')}}">رزرو ها</a></li>
                <li><a href="{{route('admin.logout')}}">خروج</a></li>
            </ul>
        </div>

    </aside>

    <main class="main-content p-top4">
        <header class="black">
            <h3>Welcome to the Dashboard </h3>
        </header>

    </main>
</div>

</body>
</html>
