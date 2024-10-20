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
                    <li><a href="#">کاربران</a></li>
                    <li><a href="#">رزرو ها</a></li>
                    <li><a href="{{route('admin.logout')}}">خروج</a></li>
                </ul>
            </div>
        </aside>

        <main class="main-content">
            <div>
                <div class="instruction-box m-top1 m-right1">

                    <div>
                        <h4 class="p-left3">لیست فیلم ها</h4>


                        <table class="p-left2">
                            <tr class="instruction-box1">
                                <th>نام</th>
                                <th>تاریخ ایجاد</th>
                                <th>اکشن</th>
                            </tr>
                            @foreach($movies as $key => $movie)
                                <tr>
                                    <td>{{$movie->title}}</td>
                                    <td>{{$movie->created_at}}</td>
                                    <td>
                                        <ul>
                                            <li>
                                                <form action="{{ route('movie.destroy', $movie->id)}}" method="post">
                                                    @method('DELETE')
                                                    @csrf
                                                    <input type="hidden" value="{{ $movie->id }}" name="id">
                                                    <input type="submit" class="button button:hover" value="حذف" >
                                                </form>
                                            </li>
                                            <li><a href="{{ route('movie.edit' , $movie->id) }}" class="text-black m-right2">ویرایش</a></li>
                                                 </form>
                                        </ul>
                                    </td>
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


