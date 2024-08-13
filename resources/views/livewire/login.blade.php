<div>
    

    <div class="login">
        <div class="content-login">
            <div class="logo">
                <img src="/img/YouPlan2.png" alt="">
                </div>
                @if (session()->has('status'))
                <span class="status success">Your password has been reset.
                </span>
            @endif

            <form wire:submit.prevent="loginUser()">

                <div class="username">
                    <label for="username">Username</label>
                    <input type="text" name="username" id="username" placeholder="Username" wire:model.live="username"
                        required>
                    @error('username')
                        <span class="error">{{ $message }}</span>
                    @enderror

                </div>
                <div class="password">
                    <label for="password">Password</label>
                    <input type="password" name="password" id="password" placeholder="Password"
                        wire:model.live="password" required>
                    @error('password')
                        <span class="error">{{ $message }}</span>
                    @enderror

                </div>
                <div class="lp">
                    <label for="checkbox">
                        <input type="checkbox" name="checkbox" id="checkbox" wire:model.live="remember">
                        <span class="input-check"></span>
                        <p>Remember Me</p>
                    </label>
                    <a href="/forgot-password">Lupa Password?</a>
                </div>
                <button class="masuk">
                    <svg style="margin-bottom: 4px;" cxmlns="http://www.w3.org/2000/svg" width="20px" height="20px"
                        viewBox="0 0 24 24">
                        <g fill="none" stroke="white" stroke-linecap="round" stroke-linejoin="round"
                            stroke-width="2">
                            <path d="M13.496 21H6.5c-1.105 0-2-1.151-2-2.571V5.57c0-1.419.895-2.57 2-2.57h7" />
                            <path d="M13 15.5L9.5 12L13 8.5m6.5 3.496h-10" />
                        </g>
                    </svg>
                    Login</button>
                <div class="or">
                    <p>Or</p>
                </div>
            </form>
            <a href="{{ route('auth.github') }}">
                <button class="masuk2">
                    <svg xmlns="http://www.w3.org/2000/svg" width="23px" height="23px" viewBox="0 0 24 24">
                        <path fill="white"
                            d="M12 2A10 10 0 0 0 2 12c0 4.42 2.87 8.17 6.84 9.5c.5.08.66-.23.66-.5v-1.69c-2.77.6-3.36-1.34-3.36-1.34c-.46-1.16-1.11-1.47-1.11-1.47c-.91-.62.07-.6.07-.6c1 .07 1.53 1.03 1.53 1.03c.87 1.52 2.34 1.07 2.91.83c.09-.65.35-1.09.63-1.34c-2.22-.25-4.55-1.11-4.55-4.92c0-1.11.38-2 1.03-2.71c-.1-.25-.45-1.29.1-2.64c0 0 .84-.27 2.75 1.02c.79-.22 1.65-.33 2.5-.33s1.71.11 2.5.33c1.91-1.29 2.75-1.02 2.75-1.02c.55 1.35.2 2.39.1 2.64c.65.71 1.03 1.6 1.03 2.71c0 3.82-2.34 4.66-4.57 4.91c.36.31.69.92.69 1.85V21c0 .27.16.59.67.5C19.14 20.16 22 16.42 22 12A10 10 0 0 0 12 2" />
                    </svg>
                    Login With Github</button>
            </a>
            <a href="{{ route('auth.google') }}">
                <button class="masuk3">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20px" height="20px" viewBox="0 0 16 16">
                        <path fill="white"
                            d="M15.545 6.558a9.4 9.4 0 0 1 .139 1.626c0 2.434-.87 4.492-2.384 5.885h.002C11.978 15.292 10.158 16 8 16A8 8 0 1 1 8 0a7.7 7.7 0 0 1 5.352 2.082l-2.284 2.284A4.35 4.35 0 0 0 8 3.166c-2.087 0-3.86 1.408-4.492 3.304a4.8 4.8 0 0 0 0 3.063h.003c.635 1.893 2.405 3.301 4.492 3.301c1.078 0 2.004-.276 2.722-.764h-.003a3.7 3.7 0 0 0 1.599-2.431H8v-3.08z" />
                    </svg>
                    Login With Google</button>
            </a>
            <div class="already">
                <p>Dont have account? <a href="/register">SignUp</a></p>
            </div>
        </div>
    </div>
</div>
