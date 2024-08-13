<div>


    <div class="card">





        <div class="logo">
            <img src="/img/YouPlan2.png" alt="">
        </div>
        <p>Enter the email address associated with your account and we'll send you a link to reset your password.
        </p>

        @if (session()->has('errorStatus'))
            <span class="status ">
                We can't find a user with that email address.
            </span>
        @endif
        @if (session()->has('status'))
            <span class="status success">We have emailed your password reset link.</span>
        @endif



        <form wire:submit="resetPassword" method="POST">
            <div class="email">
                <label for="email">Email</label>
                <input type="email" class="passInput" name="email" id="email" wire:model.live="email" required
                    placeholder="Email address">
            </div>
            @error('email')
                <span class="error">{{ $message }}</span>
            @enderror
            <div class="content-button">
                <a href="/login">
                    <button type="button" class="back"><svg xmlns="http://www.w3.org/2000/svg" width="0.8em"
                            height="1.2em" viewBox="0 0 12 24">
                            <path fill="white" fill-rule="evenodd"
                                d="m3.343 12l7.071 7.071L9 20.485l-7.778-7.778a1 1 0 0 1 0-1.414L9 3.515l1.414 1.414z" />
                        </svg>Back</button>
                </a>
                <button type="submit" class="save" id="submit">Send a Link<svg xmlns="http://www.w3.org/2000/svg"
                        width="18px" height="18px" viewBox="0 0 24 24">
                        <path fill="white"
                            d="m21.426 11.095l-17-8A.999.999 0 0 0 3.03 4.242L4.969 12L3.03 19.758a.998.998 0 0 0 1.396 1.147l17-8a1 1 0 0 0 0-1.81M5.481 18.197l.839-3.357L12 12L6.32 9.16l-.839-3.357L18.651 12z" />
                    </svg></button>
            </div>
        </form>
    </div>
</div>
