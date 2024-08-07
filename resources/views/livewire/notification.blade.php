<div>
    <div x-data="{show: true}" x-init="setTimeout(() => show = false, 5000)" x-show="show">
        <div class="notification" id="notif">
            <div class="notification-content">
                <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" viewBox="0 0 48 48">
                    <defs>
                        <mask id="ipSCheckOne0">
                            <g fill="none" stroke-linejoin="round" stroke-width="4">
                                <path fill="#fff" stroke="#fff"
                                    d="M24 44a19.937 19.937 0 0 0 14.142-5.858A19.937 19.937 0 0 0 44 24a19.938 19.938 0 0 0-5.858-14.142A19.937 19.937 0 0 0 24 4A19.938 19.938 0 0 0 9.858 9.858A19.938 19.938 0 0 0 4 24a19.937 19.937 0 0 0 5.858 14.142A19.938 19.938 0 0 0 24 44Z" />
                                <path stroke="#000" stroke-linecap="round" d="m16 24l6 6l12-12" />
                            </g>
                        </mask>
                    </defs>
                    <path fill="#7c84f4" d="M0 0h48v48H0z" mask="url(#ipSCheckOne0)" />
                </svg>
                <div class="message">
                    <span class="text">{{ session('successD') }}</span>
                </div>
            </div>
            <div class="progressBar"></div>
        </div>
    </div>

</div>
