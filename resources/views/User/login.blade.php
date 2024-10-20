<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>کاربر</title>
    <link rel="stylesheet" href="../../css/userLogin.css">
</head>

<body>
    <form class="login-form" action="{{ route('user.login') }}" method="post">
        @csrf

        <section class="flex">
            <a  href="{{route('user.register')}}" class="btn btn:hover m-top2">ایجاد حساب کاربری</a>
            <h4 class="m-left5 text-bold">.اگر در سینماتایم حساب کاربری ندارید، ثبت نام کنید</h4>
        </section>

        <section class="m-left7 text-bold">
            <h4>.اگر در سینماتایم حساب کاربری دارید، وارد شوید</h4>
        </section>

        <article>
            <section class="flex">
                <div class="m-top3">
                    <button type="submit" class="box box:hover">ورود</button>
                </div>

                <div class="form-group m-top3">
                    <input type="email" id="email" name="email" placeholder="...ایمیل" class="text-right m-left2" required>
                </div>
            </section>

            <section>
                <div class="form-group m-top3">
                    <input type="password" id="password" name="password" placeholder="...رمزعبور" class="text-right m-bottom1 m-left9" required>
                </div>
            </section>
        </article>
    </form>
</body>
</html>

