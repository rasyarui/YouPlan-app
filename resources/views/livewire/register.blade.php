<div>

    <div class="register-main">
        <div class="register">
            <div class="content-login needs-validation">
                <div class="logo">
                    <img src="/img/YouPlan2.png" alt="">
                    </div>
                <form wire:submit.prevent="store()">
                    <div class="username">
                        <label for="name">Name</label>
                        <input type="text" name="name" id="name" wire:model.live="name" placeholder="Name"
                            class="@error('name') is-invalid @enderror" required>
                        @error('name')
                            <span class="error">{{ $message }}</span>
                        @enderror

                    </div>
                    <div class="username">
                        <label for="username">Username</label>
                        <input type="text" class="@error('username') invalid @enderror" name="username"
                            id="username" wire:model.live="username" placeholder="Username" required>
                        @error('username')
                            <span class="error">{{ $message }}</span>
                        @enderror

                    </div>
                    <div class="username">
                        <label for="email">Email</label>
                        <input type="text" class="@error('email') invalid @enderror" name="email" id="email"
                            wire:model.live="email" placeholder="Email" required>
                        @error('email')
                            <span class="error">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="password">
                        <label for="password">Password</label>
                        <input type="password" class="@error('password') invalid @enderror" name="password"
                            id="password" wire:model.live="password" placeholder="Password" required>
                        @error('password')
                            <span class="error">{{ $message }}</span>
                        @enderror

                    </div>
                    <div class="password">
                        <label for="password_confirmation">Confirmation Password</label>
                        <input type="password" class="@error('password_confirmation') invalid @enderror"
                            name="password_confirmation" wire:model.live="password_confirmation"
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
                        Register</button>
                </form>
                <div class="already">

                    <p>Already have account? <a href="/login">Login</a></p>
                </div>
            </div>
        </div>
    </div>


</div>
