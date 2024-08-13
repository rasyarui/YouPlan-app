<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" type="image/png" href="/img/YouPlan.png" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">



    <style>
        @import url('https://fonts.googleapis.com/css2?family=Quicksand:wght@300..700&display=swap');
    </style>

    <link rel="stylesheet" href="/css/style.css">
    <title>Reset-Password</title>
</head>

<body>

    <div class="reset-password">
        <div class="login">
            <div class="content-login needs-validation">
                <div class="logo">
                    <img src="/img/YouPlan2.png" alt="">
                </div>
                @if (session()->has('errorStatus'))
                <span class="status ">
                    We can't find a user with that email address.
                </span>
            @endif
            @if (session()->has('status'))
                <span class="status success">We have emailed your password reset link.</span>
            @endif
                <form action="{{ route('password.update') }}" method="POST">
                    @csrf
                    <input type="hidden" name="token" value="{{ request()->token }}">
                    <input type="hidden" name="email" value="{{ request()->email }}">

                    <div class="password">
                        <label for="password">New Password</label>
                        <input type="password" value="" class="@error('password') invalid @enderror"
                            name="password" id="password" placeholder="Password" required>
                        @error('password')
                            <span class="error">{{ $message }}</span>
                        @enderror

                    </div>
                    <div class="password">
                        <label for="password_confirmation">Confirmation New Password</label>
                        <input type="password" class="@error('password_confirmation') invalid @enderror"
                            name="password_confirmation" id="password_confirmation" placeholder="Password Confirmation"
                            required>
                        @error('password_confirmation')
                            <span class="error">{{ $message }}</span>
                        @enderror

                    </div>
                    <br>
                    <button class="regis">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20px" height="20px" viewBox="0 0 24 24">
                            <path fill="white"
                                d="M22 12c0 5.523-4.477 10-10 10S2 17.523 2 12S6.477 2 12 2v2a8 8 0 1 0 5.135 1.865L15 8V2h6l-2.447 2.447A9.98 9.98 0 0 1 22 12" />
                        </svg>
                        Update Password</button>
                    @if (session()->has('success'))
                        <span class="success">{{ session('success') }}.</span>
                    @endif
                </form>
            </div>
        </div>
    </div>


</body>

</html>
