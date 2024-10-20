<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="../../css/movieIndex.css">
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

    <main class="main-content">
        <div>
            <div class="instruction-box m-top1 m-right1">

                <div>
                    <h4 class="p-left3">لیست رزرو ها</h4>

                    <table class="p-left2">
                        <tr class="instruction-box1">
                            <th>ایمیل کاربر</th>
                            <th>نام فیلم</th>
                        </tr>
                        @foreach($reservations as $key => $reservation)
                            <tr>
                                <td>{{$reservation->user->email}}</td>
                                <td>{{$reservation->movie->title}}</td>
                            </tr>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </main>
</div>
</div>

</body>
</html>



