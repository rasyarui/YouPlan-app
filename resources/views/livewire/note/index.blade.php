<div>
    @if (session()->has('successD'))
    <livewire:notification />
@endif

@if (session()->has('errorD'))
<livewire:notiferror />
@endif

    @forelse ($datas as $data)
        <div class="modal fade" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h3 class="confir">Confirmation</h3>
                        <p>Are you sure you want to delete Note?
                        </p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="" data-bs-dismiss="modal" class="cancel">Cancel</button>
                        <button type="button" class="logout" data-bs-dismiss="modal"
                            wire:click="delete()">Delete</button>
                    </div>
                </div>
            </div>
        </div>

        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" wire:ignore.self>
            <form wire:submit.prevent="lock">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">

                            <h1 class="modal-title" id="exampleModalLabel">Set note password.</h1>

                        </div>
                        <input type="password" name="passwordLock" class="@error('passwordLock') is-invalid @enderror" id="passwordLock" wire:model.defer="passwordLock" >
                        @error('passwordLock')
                            <span class="error passwordLock">{{ $message }}</span>
                        @enderror

                        <div class="modal-footer">
                            <button type="button" class="close" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="edit">Lock</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>

        <div class="modal fade" id="exampleModalOpenPassword" tabindex="-1" aria-labelledby="exampleModalLabel"
            aria-hidden="true" wire:ignore.self>

            <form wire:submit.prevent="unlock({{ $data->id }})">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">

                        <h1 class="modal-title" id="exampleModalLabel">Open note password.</h1>

                    </div>
                    <input type="password" name="passwordUnlock" class="@error('passwordUnlock') is-invalid @enderror" id="passwordUnlock" wire:model.defer="passwordUnlock" required>
                    @error('passwordUnlock')
                            <span class="error passwordLock">{{ $message }}</span>
                        @enderror


                    <div class="modal-footer">
                        <button type="button" class="close" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="edit" >Unlock</button>
                    </div>
                </div>
            </div>
            </form>
        </div>
    @endforeach

    <div class="main-note">

        @if (session()->has('successD'))
            <livewire:notification />
        @endif
        <livewire:navbar />

        <div class="jumbotrons">
            <h1>Note</h1>
            <div class="inputs">
                <a href="/note/add">
                    <button class="history-list">
                        <svg style="margin-bottom: 4px" xmlns="http://www.w3.org/2000/svg" width="20px" height="20px"
                            viewBox="-0.5 -0.5 24 24">
                            <path fill="white"
                                d="m21.289.98l.59.59c.813.814.69 2.257-.277 3.223L9.435 16.96l-3.942 1.442c-.495.182-.977-.054-1.075-.525a.928.928 0 0 1 .045-.51l1.47-3.976L18.066 1.257c.967-.966 2.41-1.09 3.223-.276zM8.904 2.19a1 1 0 1 1 0 2h-4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2v-4a1 1 0 0 1 2 0v4a4 4 0 0 1-4 4h-12a4 4 0 0 1-4-4v-12a4 4 0 0 1 4-4z" />
                        </svg>
                        Make a Note
                    </button>
                </a>
            </div>
        </div>


        <div class="bawah">
            <div class="aca">
                <div class="content-history">
                    @forelse ($datas as $data)
                        @isset($data->password)
                            <a data-bs-toggle="modal" data-bs-target="#exampleModalOpenPassword">
                                <div class="history password">
                                    <div class="left"></div>
                                    <p>{{ $data->title ? $data->title : 'Without Title' }}
                                    </p>

                                    <span
                                        class="date">{{ \Carbon\Carbon::parse($data->updated_at)->translatedFormat('l, d F Y H:i') }}</span>
                            </a>
                            <div class="right" id="kocak">
                                <div class="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="30px" height="30px"
                                        viewBox="0 0 24 24" style="transform: rotate(90deg)" class="svg">

                                        <path fill="black"
                                            d="M7 12a2 2 0 1 1-4 0a2 2 0 0 1 4 0m7 0a2 2 0 1 1-4 0a2 2 0 0 1 4 0m7 0a2 2 0 1 1-4 0a2 2 0 0 1 4 0" />
                                    </svg>
                                </div>
                                <div class="dropdown-menu">
                                    <div class="dropdown-history">
                                        <div class="svg">
                                            <button data-bs-toggle="modal" data-bs-target="#exampleModalOpenPassword"
                                                wire:click="edit2({{ $data->slug }})"><svg
                                                    xmlns="http://www.w3.org/2000/svg" width="22px" height="22px"
                                                    viewBox="0 0 28 28">
                                                    <path fill="white" stroke="white"
                                                        d="M18 5.5a3 3 0 1 1 6 0v1a.75.75 0 0 0 1.5 0v-1a4.5 4.5 0 1 0-9 0V8H7.75A3.75 3.75 0 0 0 4 11.75v9.5A3.75 3.75 0 0 0 7.75 25h11.5A3.75 3.75 0 0 0 23 21.25v-9.5A3.75 3.75 0 0 0 19.25 8H18zm-10.25 4h11.5a2.25 2.25 0 0 1 2.25 2.25v9.5a2.25 2.25 0 0 1-2.25 2.25H7.75a2.25 2.25 0 0 1-2.25-2.25v-9.5A2.25 2.25 0 0 1 7.75 9.5M13.5 18a1.5 1.5 0 1 0 0-3a1.5 1.5 0 0 0 0 3" />
                                                </svg>
                                                <span>Unlock</span>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                    </div>
                @else
                    <a href="{{ route('note.edit', $data->slug) }}">
                        <div class="history">
                            <div class="left"></div>
                            <p>{{ $data->title ? $data->title : 'Without Title' }}
                            </p>
                            <span
                                class="date">{{ \Carbon\Carbon::parse($data->updated_at)->translatedFormat('l, d F Y H:i') }}</span>
                    </a>

                    <div class="right" id="kocak">
                        <div class="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <svg xmlns="http://www.w3.org/2000/svg" width="30px" height="30px" viewBox="0 0 24 24"
                                style="transform: rotate(90deg)" class="svg">

                                <path fill="black"
                                    d="M7 12a2 2 0 1 1-4 0a2 2 0 0 1 4 0m7 0a2 2 0 1 1-4 0a2 2 0 0 1 4 0m7 0a2 2 0 1 1-4 0a2 2 0 0 1 4 0" />
                            </svg>
                        </div>
                        <div class="dropdown-menu">
                            <div class="dropdown-history">
                                <div class="svg">
                                    <button data-bs-toggle="modal" data-bs-target="#exampleModal"
                                        wire:click="edit2({{ $data->id }})"><svg xmlns="http://www.w3.org/2000/svg"
                                            width="21px" height="21px" viewBox="0 0 21 21">
                                            <g fill="none" fill-rule="evenodd" transform="translate(4 1)"
                                                stroke-width="1.8">
                                                <path stroke="white" stroke-linecap="round" stroke-linejoin="round"
                                                    d="m2.5 8.5l-.006-1.995Q2.484.5 6.5.5c4.016 0 4.011 2.002 4 6.005V8.5m-8 0h8.023a2 2 0 0 1 1.994 1.85l.006.156l-.017 6a2 2 0 0 1-2 1.994H2.5a2 2 0 0 1-2-2v-6a2 2 0 0 1 2-2" />
                                                <circle cx="6.5" cy="13.5" r="1.5" fill="white" />
                                            </g>
                                        </svg>
                                        <span>Lock</span>
                                    </button>


                                    <button data-bs-toggle="modal" data-bs-target="#exampleModal2"
                                        wire:click="edit2({{ $data->id }})"><svg class="trash"
                                            xmlns="http://www.w3.org/2000/svg" width="22px" height="22px"
                                            viewBox="0 0 28 28">
                                            <path fill="white" stroke="white"
                                                d="M11.5 6h5a2.5 2.5 0 0 0-5 0M10 6a4 4 0 0 1 8 0h6.25a.75.75 0 0 1 0 1.5h-1.31l-1.217 14.603A4.25 4.25 0 0 1 17.488 26h-6.976a4.25 4.25 0 0 1-4.235-3.897L5.06 7.5H3.75a.75.75 0 0 1 0-1.5zM7.772 21.978a2.75 2.75 0 0 0 2.74 2.522h6.976a2.75 2.75 0 0 0 2.74-2.522L21.436 7.5H6.565zM11.75 11a.75.75 0 0 1 .75.75v8.5a.75.75 0 0 1-1.5 0v-8.5a.75.75 0 0 1 .75-.75m5.25.75a.75.75 0 0 0-1.5 0v8.5a.75.75 0 0 0 1.5 0z" />
                                        </svg>
                                        <span>Delete</span>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endisset

        @empty
            <div class="empty-content">
                <div class="empty">
                    <p>No records today.</p>
                </div>
            </div>
            @endforelse
        </div>

        <div class="footer-content">
            <div class="footer">
                <p>
                    © 2024 <span class="bold">You Plan</span> · Created with <span class="love">❤️️</span>
                    by <a href="https://rasya-design.vercel.app/" target="blank" class="bold">Rasya</a>

                </p>
            </div>
        </div>
    </div>

    <!-- Button trigger modal -->
</div>


</div>

</div>
