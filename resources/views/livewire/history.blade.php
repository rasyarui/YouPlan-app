<div>



    
    <div class="main-history">
        @if (session()->has('successD'))
            <livewire:notification />
        @endif
        <div class="modal fade" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h3 class="confir">Confirmation</h3>
                        <p>Are you sure you want to delete Plan?
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

        @livewire('navbar')

        <div class="jumbotrons">
            <h1>History Plan</h1>
            <div class="inputs">
                <a href="/todo">
                    <button class="history-list">
                        <svg style="margin-bottom: 4px" xmlns="http://www.w3.org/2000/svg" width="20px" height="20px"
                            viewBox="-0.5 -0.5 24 24">
                            <path fill="white"
                                d="m21.289.98l.59.59c.813.814.69 2.257-.277 3.223L9.435 16.96l-3.942 1.442c-.495.182-.977-.054-1.075-.525a.928.928 0 0 1 .045-.51l1.47-3.976L18.066 1.257c.967-.966 2.41-1.09 3.223-.276zM8.904 2.19a1 1 0 1 1 0 2h-4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2v-4a1 1 0 0 1 2 0v4a4 4 0 0 1-4 4h-12a4 4 0 0 1-4-4v-12a4 4 0 0 1 4-4z" />
                        </svg>
                        Make a plan
                    </button>
                </a>
            </div>
        </div>

        <div class="bawah">
            <div class="aca">
                <div class="main-plan">
                    @if ($dates->count())
                        @foreach ($dates as $date => $data)
                            <div class="date-plan " wire:key="{{ $data[0]->date }}">
                                <div class="date-left">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="19px" height="19px"
                                        style="margin-bottom: 5px" viewBox="0 0 20 20">
                                        <path fill="black"
                                            d="M5.673 0a.7.7 0 0 1 .7.7v1.309h7.517v-1.3a.7.7 0 0 1 1.4 0v1.3H18a2 2 0 0 1 2 1.999v13.993A2 2 0 0 1 18 20H2a2 2 0 0 1-2-1.999V4.008a2 2 0 0 1 2-1.999h2.973V.699a.7.7 0 0 1 .7-.699M1.4 7.742v10.259a.6.6 0 0 0 .6.6h16a.6.6 0 0 0 .6-.6V7.756zm5.267 6.877v1.666H5v-1.666zm4.166 0v1.666H9.167v-1.666zm4.167 0v1.666h-1.667v-1.666zm-8.333-3.977v1.666H5v-1.666zm4.166 0v1.666H9.167v-1.666zm4.167 0v1.666h-1.667v-1.666zM4.973 3.408H2a.6.6 0 0 0-.6.6v2.335l17.2.014V4.008a.6.6 0 0 0-.6-.6h-2.71v.929a.7.7 0 0 1-1.4 0v-.929H6.373v.92a.7.7 0 0 1-1.4 0z" />
                                    </svg>
                                    {{ \Carbon\Carbon::parse($data[0]->created_at)->translatedFormat('l, d F Y') }}
                                </div>
                                <div class="date-right">

                                </div>
                            </div>

                            @foreach ($data as $item)
                                <div class="modal-delete" id="modal-delete">

                                    <div class="modal-delete-content" id="modal-delete-content">
                                        {{-- @foreach ($dates as $date => $data) --}}

                                        <h1>Confirmation</h1>
                                        <p>are you sure you want to delete Plan? </p>
                                        <div class="modal-delete-footer">
                                            <button onclick="toggle()">Close</button>
                                            <button id="close"
                                                wire:click="delete({{ $item->id }})">Delete</button>
                                        </div>

                                        {{-- @endforeach --}}
                                    </div>

                                </div>
                                <div class="history-aca">
                                    <div
                                        class="@if ($item->status == 'PENDING') history-plan @elseif($item->status == 'DONE') history-red @endif">
                                        <p>{{ $item->activity }}</p>
                                        <div class="history-right" id="kocak">
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
                                                        <button wire:click="complete({{ $item->id }})">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="21px"
                                                                height="21px" viewBox="0 0 24 24">
                                                                <g fill="none" stroke="white" stroke-linecap="round"
                                                                    stroke-linejoin="round" stroke-width="2"
                                                                    color="black">
                                                                    <path
                                                                        d="M19.5 13V9.368c0-3.473 0-5.21-1.025-6.289S15.8 2 12.5 2h-3C6.2 2 4.55 2 3.525 3.08C2.5 4.157 2.5 5.894 2.5 9.367v5.264c0 3.473 0 5.21 1.025 6.289S6.2 22 9.5 22H11m2.5-2s1 0 2 2c0 0 3.177-5 6-6" />
                                                                    <path
                                                                        d="m7 2l.082.493c.2 1.197.3 1.796.72 2.152C8.22 5 8.827 5 10.041 5h1.917c1.213 0 1.82 0 2.24-.355c.42-.356.52-.955.719-2.152L15 2M7 16h4m-4-5h8" />
                                                                </g>
                                                            </svg>
                                                            <span>Done</span>
                                                        </button>
                                                        {{-- wire:click="delete({{ $item->id }})" --}}
                                                        <button data-bs-toggle="modal" data-bs-target="#exampleModal2"
                                                            wire:click="edit2({{ $item->id }})"><svg class="trash"
                                                                xmlns="http://www.w3.org/2000/svg" width="22px"
                                                                height="22px" viewBox="0 0 28 28">
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
                                </div>
                            @endforeach
                        @endforeach
                    @else
                        <div class="empty-content">
                            <div class="empty">
                                <p>There is no history yet.
                                </p>
                            </div>
                        </div>
                    @endif
                </div>
                {{-- @include('livewire.edit') --}}

                {{-- {{ $dataPlan->links('pagination') }} --}}
                <br>
                <br>
                <br>
                <br>
                <br>

                <div class="footer-content">
                    <div class="footer">
                        <p>
                            © 2024 <span class="bold">You Plan</span> · Created with ❤️️ by <a
                                href="https://rasya-design.vercel.app/" target="blank" class="bold">Rasya</a>

                        </p>
                    </div>
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
