<div>
    <script>
        function toggle() {
            var modal = document.getElementById("modal-delete");
            modal.classList.toggle('show');
            var modal2 = document.getElementById("modal-delete-content");
            modal2.classList.toggle('show');
        }
    </script>

    <div class="modal-delete" id="modal-delete">
        <div class="modal-delete-content" id="modal-delete-content">
            <h1>Confirmation</h1>
            <p>are you sure you want to delete account? </p>
           <div class="modal-delete-footer">
            <button onclick="toggle()">Close</button>
            <button id="close" wire:click="destroy">Delete</button>
           </div>
        </div>
    </div>


    <div class="main-profile">

        <div class="atas">

            @livewire('navbar')
            @auth
                <h1 class="profile-judul">Profile</h1>
                <p class="profile-jd">Hii.. {{ auth()->user()->username }}</p>
            @endauth

        </div>


        <div class="bawah-profile">
            <div class="login-aca">
                <div class="bawah-login">
                    <div class="form-profile">
                        <div class="informasi-profile">
                            <div class="title">
                                <svg xmlns="http://www.w3.org/2000/svg" width="26px" height="26px"
                                    viewBox="0 0 24 24">
                                    <path fill="black"
                                        d="M19 18.75H5A1.76 1.76 0 0 1 3.25 17V7A1.76 1.76 0 0 1 5 5.25h14A1.76 1.76 0 0 1 20.75 7v10A1.76 1.76 0 0 1 19 18.75m-14-12a.25.25 0 0 0-.25.25v10a.25.25 0 0 0 .25.25h14a.25.25 0 0 0 .25-.25V7a.25.25 0 0 0-.25-.25Z" />
                                    <path fill="black"
                                        d="M9 11.75a2 2 0 1 1 2-2a2 2 0 0 1-2 2m0-2.5a.5.5 0 1 0 .5.5a.5.5 0 0 0-.5-.5m3 6.5a.76.76 0 0 1-.75-.75c0-.68-.17-1.25-2.25-1.25s-2.25.57-2.25 1.25a.75.75 0 0 1-1.5 0c0-2.75 2.82-2.75 3.75-2.75s3.75 0 3.75 2.75a.76.76 0 0 1-.75.75m5-5h-3a.75.75 0 0 1 0-1.5h3a.75.75 0 0 1 0 1.5m-1 3h-2a.75.75 0 0 1 0-1.5h2a.75.75 0 0 1 0 1.5" />
                                </svg>
                                <p>
                                    Information Profile
                                </p>
                            </div>

                            {{-- <form wire:submit.prevent="editUser"> --}}
                            <div class="input">
                                <label for="name">Name</label>
                                <input type="text" name="name" class="@error('name') invalid @enderror"
                                    id="name" wire:model.live="name">
                                @error('name')
                                    <span class="error">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="input not">
                                <label for="username">User Name</label>
                                <input type="text" name="username" id="username" readonly
                                    wire:model.live="username">
                            </div>
                            <div class="input">
                                <label for="email">Email</label>
                                <input type="text" class="@error('email') invalid @enderror" name="email"
                                    id="email" wire:model.live="email">
                                @error('email')
                                    <span class="error">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="bawah-form">
                                <button class="simpan" wire:click="editUser">
                                    Save Profile
                                </button>
                                @if (session()->has('success'))
                                    <span class="success">{{ session('success') }}.</span>
                                @endif
                            </div>

                        </div>
                        {{-- </form> --}}
                        {{-- @endauth --}}



                        <div class="informasi-profile">
                            <div class="title">
                                <svg style="margin-top: 4px" xmlns="http://www.w3.org/2000/svg" width="21px"
                                    height="21px" viewBox="0 0 24 24">
                                    <path fill="black" fill-rule="evenodd"
                                        d="M22 8.293c0 3.476-2.83 6.294-6.32 6.294c-.636 0-2.086-.146-2.791-.732l-.882.878c-.519.517-.379.669-.148.919c.096.105.208.226.295.399c0 0 .735 1.024 0 2.049c-.441.585-1.676 1.404-3.086 0l-.294.292s.881 1.025.147 2.05c-.441.585-1.617 1.17-2.646.146l-1.028 1.024c-.706.703-1.568.293-1.91 0l-.883-.878c-.823-.82-.343-1.708 0-2.05l7.642-7.61s-.735-1.17-.735-2.78c0-3.476 2.83-6.294 6.32-6.294S22 4.818 22 8.293m-6.319 2.196a2.2 2.2 0 0 0 2.204-2.195a2.2 2.2 0 0 0-2.204-2.196a2.2 2.2 0 0 0-2.204 2.196a2.2 2.2 0 0 0 2.204 2.195"
                                        clip-rule="evenodd" />
                                </svg>
                                <p>Change Password</p>
                            </div>
                            <div class="input">
                                <label for="current_password">Current Password</label>
                                <input type="password" class="@error('current_password') invalid @enderror"
                                    name="current_password" id="current_password" wire:model="current_password">
                                @error('current_password')
                                    <span class="error">{{ $message }}</span>
                                @enderror

                            </div>
                            <div class="input">
                                <label for="password">New Password</label>
                                <input type="password" class="@error('password') invalid @enderror" name="password"
                                    id="password" wire:model="password">
                                @error('password')
                                    <span class="error">{{ $message }}</span>
                                @enderror

                            </div>
                            <div class="input">
                                <label for="password_confirmation">Confirmation New Password</label>
                                <input type="password" class="@error('email') invalid @enderror"
                                    name="password_confirmation" id="password_confirmation"
                                    wire:model.live="password_confirmation">
                                @error('password_confirmation')
                                    <span class="error">{{ $message }}</span>
                                @enderror

                            </div>
                            <div class="bawah-form">
                                <button class="simpan-password" wire:click="changePassword">Save Password</button>
                                @if (session()->has('successPassword'))
                                    <span class="success">{{ session('successPassword') }}.</span>
                                @endif
                            </div>
                        </div>
                    </div>
                    <div class="delete">
                        <div class="delete-user-title">
                            <span>
                                <svg xmlns="http://www.w3.org/2000/svg" width="22px" height="22px"
                                    viewBox="0 0 24 24">
                                    <path fill="black"
                                        d="M7 4a2 2 0 0 1 2-2h6a2 2 0 0 1 2 2v2h4a1 1 0 1 1 0 2h-1.069l-.867 12.142A2 2 0 0 1 17.069 22H6.93a2 2 0 0 1-1.995-1.858L4.07 8H3a1 1 0 0 1 0-2h4zm2 2h6V4H9zM6.074 8l.857 12H17.07l.857-12zM10 10a1 1 0 0 1 1 1v6a1 1 0 1 1-2 0v-6a1 1 0 0 1 1-1m4 0a1 1 0 0 1 1 1v6a1 1 0 1 1-2 0v-6a1 1 0 0 1 1-1" />
                                </svg>
                                <p>Delete Account</p>
                            </span>
                        </div>
                        <p>Once your account is deleted, all data will be permanently deleted.
                        </p>

                        <button class="delete-btn" onclick="toggle()" id="open">Delete Account</button>
                    </div>
                </div>
               
            </div>
            
            <div class="footer-content">
                <div class="footer">
                    <p>
                        © 2024 <span class="bold">You Plan</span> ·  Created with ❤️️ by <a href="https://rasya-design.vercel.app/" target="blank"
                            class="bold">Rasya</a>

                    </p>
                </div>
            </div>
        </div>
        
    </div>



    <div class="bottom-nav">
        <a href="/todo" class="{{ Request::is('todo*') ? 'active' : '' }}">
            <div class="bottom-nav-list">
                <svg xmlns="http://www.w3.org/2000/svg" width="23px" height="23px" viewBox="0 0 24 24">
                    <path fill="none" stroke="white" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M11 6h10m-10 6h10m-10 6h10M3 7.393S4 8.045 4.5 9C4.5 9 6 5.25 8 4M3 18.393S4 19.045 4.5 20c0 0 1.5-3.75 3.5-5"
                        color="white" />
                </svg>
                <p>Todo List</p>
            </div>
        </a>

        <a href="/note" class="{{ Request::is('note') ? 'active' : '' }}">
            <div class="bottom-nav-list">
                <svg xmlns="http://www.w3.org/2000/svg" width="23px" height="23px" viewBox="0 0 24 24">
                    <path fill="none" stroke="white" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M17 2v2m-5-2v2M7 2v2m-3.5 6c0-3.3 0-4.95 1.025-5.975S7.2 3 10.5 3h3c3.3 0 4.95 0 5.975 1.025S20.5 6.7 20.5 10v5c0 3.3 0 4.95-1.025 5.975S16.8 22 13.5 22h-3c-3.3 0-4.95 0-5.975-1.025S3.5 18.3 3.5 15zM8 15h4m-4-5h8"
                        color="white" />
                </svg>
                <p>Note</p>
            </div>
        </a>
    </div>

</div>
