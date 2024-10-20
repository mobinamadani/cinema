<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="../../css/movieCreate.css">
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
                <li><a href="#">کاربران</a></li>
                <li><a href="#">رزرو ها</a></li>
                <li><a href="{{route('admin.logout')}}">خروج</a></li>
            </ul>
        </div>
    </aside>

    <main class="main-content">
        <div>
            <div class="instruction-box m-top1 m-right1">
                <form  action="{{route('movie.update', $movie->id)}}" method="post">
                    @method('PUT')
                    @csrf

                    <div class="p-left2">
                        <h4>ویرایش فیلم</h4>
                    </div>

                    <div class="p-left2 p-top2">
                        <input type="text" name="title" id="title" placeholder="نام">
                    </div>

                    <div class="p-left2 p-top2">
                        <button type="submit" class="button button:hover">ویرایش</button>
                    </div>
                </form>


            </div>

        </div>
    </main>

</div>

</body>
</html>


