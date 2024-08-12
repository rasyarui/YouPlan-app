<div>


    <script>
        function toggle2() {
            var modal = document.getElementById("modal-delete2");
            modal.classList.toggle('show');
            var modal2 = document.getElementById("modal-delete-content2");
            modal2.classList.toggle('show');
        }
    </script>

    <div class="modal-delete" id="modal-delete2">
        <div class="modal-delete-content" id="modal-delete-content2">
            <h1 class="jud">Confirmation</h1>
            <p class="log">are you sure you want to logout? </p>
            <div class="modal-delete-footer">
                <button onclick="toggle2()">Close</button>
                <button id="close" wire:click="logout">logout</button>
            </div>
        </div>
    </div>

    <div class="navbar">
        <a href="/todo">
            <div class="logo">
                <img src="/img/Logo.png" alt="">
            </div>
        </a>

        <div class="list">
            <a href="/todo" class="{{ Request::is('todo*') ? 'active' : '' }}">
                Todo List
            </a>
            <a href="/note" class="{{ Request::is('note*') ? 'active' : '' }}">
                Note
            </a>
        </div>

        @if (auth()->user()->avatar)
            <button class="avatar" data-bs-toggle="dropdown" aria-expanded="false">
                <img class="avatar-img" src="{{ auth()->user()->avatar }}?t={{ time() }}"
                    alt="{{ auth()->user()->name }}">
            </button>
        @else
            <button class="btn-profile" data-bs-toggle="dropdown" aria-expanded="false">
                <svg class="logo-prof" xmlns="http://www.w3.org/2000/svg" width="30px" height="30px"
                    viewBox="0 0 24 24">
                    <path fill="#7771FF" fill-rule="evenodd"
                        d="M8 7a4 4 0 1 1 8 0a4 4 0 0 1-8 0m0 6a5 5 0 0 0-5 5a3 3 0 0 0 3 3h12a3 3 0 0 0 3-3a5 5 0 0 0-5-5z"
                        clip-rule="evenodd" />
                </svg>
            </button>
        @endif




        <div class="acah">
            <div class="dropdown-menu" id="profile">
                <div class="content-nav dropdown-item">
                    <div class="profile-logo">
                        <svg style="margin-bottom: 3px" xmlns="http://www.w3.org/2000/svg" width="22px" height="22px"
                            viewBox="0 0 24 24">
                            <path fill="black"
                                d="M12 2A10 10 0 0 0 2 12c0 4.42 2.87 8.17 6.84 9.5c.5.08.66-.23.66-.5v-1.69c-2.77.6-3.36-1.34-3.36-1.34c-.46-1.16-1.11-1.47-1.11-1.47c-.91-.62.07-.6.07-.6c1 .07 1.53 1.03 1.53 1.03c.87 1.52 2.34 1.07 2.91.83c.09-.65.35-1.09.63-1.34c-2.22-.25-4.55-1.11-4.55-4.92c0-1.11.38-2 1.03-2.71c-.1-.25-.45-1.29.1-2.64c0 0 .84-.27 2.75 1.02c.79-.22 1.65-.33 2.5-.33s1.71.11 2.5.33c1.91-1.29 2.75-1.02 2.75-1.02c.55 1.35.2 2.39.1 2.64c.65.71 1.03 1.6 1.03 2.71c0 3.82-2.34 4.66-4.57 4.91c.36.31.69.92.69 1.85V21c0 .27.16.59.67.5C19.14 20.16 22 16.42 22 12A10 10 0 0 0 12 2" />
                        </svg>
                        <a href="https://github.com/rasyarui/YouPlan-app" target="blank"><button>Source Code</button></a>
                    </div>
                    <div class="profile-logo">
                        <svg style="margin-bottom: 6px" xmlns="http://www.w3.org/2000/svg" width="22px" height="22px"
                            viewBox="0 0 24 24">
                            <g fill="none" stroke="black" stroke-width="2">
                                <path stroke-linejoin="round"
                                    d="M4 18a4 4 0 0 1 4-4h8a4 4 0 0 1 4 4a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2z" />
                                <circle cx="12" cy="7" r="3" />
                            </g>
                        </svg>
                        <a href="/profile"><button>Profile</button></a>
                    </div>
                    <div class="profile-logo">
                        <svg style="margin-left: 1px" xmlns="http://www.w3.org/2000/svg" width="22px" height="22px"
                            viewBox="0 0 24 24">
                            <path fill="none" stroke="black" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="2" d="M15 4.001H5v14a2 2 0 0 0 2 2h8m1-5l3-3m0 0l-3-3m3 3H9" />
                        </svg>
                        <button onclick="toggle2()">Logout</button>

                    </div>

                </div>
            </div>
        </div>

    </div>





</div>
