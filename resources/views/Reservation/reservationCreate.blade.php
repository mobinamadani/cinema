<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>رزرو</title>
    <link rel="stylesheet" href="../../css/userRegister.css">
</head>

<body>
<form class="login-form" action="{{route('reservation.store')}}" method="post">
    @csrf

    <h2 class="m-top1 m-left4">رزرو بلیط</h2>

        <div class="form-group m-left4">
            <label class="text-size" for="movie">:انتخاب فیلم</label>
            <select  name="movie_id" id="movie" class="form-control custom-select"  required>
                <option value="">-- Select a Movie --</option>
                @foreach($movies as $movie)
                    <option value="{{ $movie->id }}">{{ $movie->title }}</option>
                @endforeach
            </select>
        </div>

        <div class="m-left1 p-top2">
            <button type="submit" class="button:hover">رزرو</button>
        </div>
    </form>



</body>
</html>


