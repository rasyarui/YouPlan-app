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
    


    <div class="register-main">
        <div class="register">
            <div class="content-login needs-validation">
                <h1>You <span class="logo">Plan</span></h1>
                <form action="{{ route('password.update') }}" method="POST">
                    @csrf
                    <input type="hidden" name="token" value="{{ request()->token }}">
                    <input type="hidden" name="email" value="{{ request()->email }}">

                    <div class="password">
                        <label for="password">Password</label>
                        <input type="password" value="" class="@error('password') invalid @enderror" name="password"
                            id="password" placeholder="Password" required>
                        @error('password')
                            <span class="error">{{ $message }}</span>
                        @enderror

                    </div>
                    <div class="password">
                        <label for="password_confirmation">Confirmation Password</label>
                        <input type="password" class="@error('password_confirmation') invalid @enderror"
                            name="password_confirmation"
                            id="password_confirmation" placeholder="Password Confirmation" required>
                        @error('password_confirmation')
                            <span class="error">{{ $message }}</span>
                        @enderror

                    </div>
                    <br>
                    <button class="regis">
                        <svg style="margin-bottom: 5px;" xmlns="http://www.w3.org/2000/svg" width="22px" height="22px" viewBox="0 0 24 24">
                            <g fill="none" stroke="white">
                                <path stroke-linejoin="round"
                                    d="M4 18a4 4 0 0 1 4-4h8a4 4 0 0 1 4 4a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2z" />
                                <circle cx="12" cy="7" r="3" />
                            </g>
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