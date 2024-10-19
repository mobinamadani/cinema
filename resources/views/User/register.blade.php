<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>کاربر</title>
    <link rel="stylesheet" href="../../css/userRegister.css">
</head>

<body>
<form class="login-form" action="{{route('user.store')}}" method="post">
    @csrf

    <h3 class="m-top1 m-left3">ایجاد حساب کاربری</h3>

    <div class="m-r form-group">
        <input type="email" id="email" name="email"  placeholder="ایمیل"  class="text-right m-left2"  required>
    </div>

    <div class="form-group m-r ">
        <input type="password" id="password" name="password" placeholder="رمزعبور" class="text-right m-left2" required>
    </div>

    <div class="m-left1">
        <button type="submit" class="button:hover">ورود</button>
    </div>

</form>
</body>

</html>

