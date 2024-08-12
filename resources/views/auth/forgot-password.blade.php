<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Font Awesome Icons  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css"
        integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA=="
        crossorigin="anonymous" />

    <!-- Google Fonts  -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/css/forgotpassword.css">

    <title>Forgot Password UI Using CSS - @code.scientist x @codingtorque</title>
</head>

<body>

    <div class="incoming">
      
        <span>
            <h1>Sorry fitur ini berbayar. bayarin dong <svg xmlns="http://www.w3.org/2000/svg" width="25px" height="25px"
                viewBox="0 0 2048 2048">
                <path fill="black"
                    d="M640 896q-27 0-50-10t-40-27t-28-41t-10-50q0-27 10-50t27-40t41-28t50-10q27 0 50 10t40 27t28 41t10 50q0 27-10 50t-27 40t-41 28t-50 10m768-256q27 0 50 10t40 27t28 41t10 50q0 27-10 50t-27 40t-41 28t-50 10q-27 0-50-10t-40-27t-28-41t-10-50q0-27 10-50t27-40t41-28t50-10M1024 0q141 0 272 36t245 103t207 160t160 208t103 245t37 272q0 141-36 272t-103 245t-160 207t-208 160t-245 103t-272 37q-141 0-272-36t-245-103t-207-160t-160-208t-103-244t-37-273q0-141 36-272t103-245t160-207t208-160T751 37t273-37m0 1920q123 0 237-32t214-90t182-141t140-181t91-214t32-238q0-123-32-237t-90-214t-141-182t-181-140t-214-91t-238-32q-123 0-237 32t-214 90t-182 141t-140 181t-91 214t-32 238q0 123 32 237t90 214t141 182t181 140t214 91t238 32m0-640q138 0 261 56t216 160l-96 85q-74-83-171-128t-210-45q-112 0-209 45t-172 128l-96-85q92-103 215-159t262-57" />
            </svg></h1>
        </span>


        <a href="/login">Back to login </a>

    </div>


    <div class="card">
        @if (session()->has('success'))
        <span class="success">{{ session('success') }}.</span>
    @endif
        <p class="lock-icon"><i class="fas fa-lock"></i></p>
        <h2>Forgot Password?</h2>
        <p>You can reset your Password here</p>
        <form action="{{ route('password.email') }}" method="POST">
            @csrf
            <input type="email" class="passInput" name="email" id="email" placeholder="Email address">
            @error('email')
            <span class="error">{{ $message }}</span>
        @enderror
            <button type="submit">Send My Password</button>
        </form>
    </div>
</body>

</html>
