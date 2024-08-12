<div>


    @livewire('navbar')
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
                    <button type="button" class="logout" data-bs-dismiss="modal" wire:click="delete()">Delete</button>
                </div>
            </div>
        </div>
    </div>




    <div class="jumbotrons">
        <h1>What's your plan for today
        </h1>
        <div class="inputs">
            {{-- <form> --}}
            {{-- @csrf --}}
            <form wire:submit.prevent="store">
                <input type="text" name="activity" placeholder="Write Here ..." id="activity" wire:model="activity"
                    autocomplete="off" required>
                <button class="buttons" name="submit">+</button>
                @error('activity')
                    <span class="error">{{ $message }}</span>
                @enderror
            </form>




            <a href="/todo/history">
                <button class="history-list">
                    <svg style="margin-bottom: 2px" xmlns="http://www.w3.org/2000/svg" width="22px" height="22px"
                        viewBox="0 0 24 24">
                        <path fill="white"
                            d="M12 21q-3.45 0-6.012-2.287T3.05 13H5.1q.35 2.6 2.313 4.3T12 19q2.925 0 4.963-2.037T19 12t-2.037-4.962T12 5q-1.725 0-3.225.8T6.25 8H9v2H3V4h2v2.35q1.275-1.6 3.113-2.475T12 3q1.875 0 3.513.713t2.85 1.924t1.925 2.85T21 12t-.712 3.513t-1.925 2.85t-2.85 1.925T12 21m2.8-4.8L11 12.4V7h2v4.6l3.2 3.2z" />
                    </svg>
                    History Plan
                </button>
            </a>

            {{-- </form> --}}
        </div>
    </div>



    <div class="bawah">
        <div class="aca">

            @forelse ($dataPlan as $todoItem)
                <div class="content-history">

                    <div class="@if ($todoItem->status == 'PENDING') history @elseif($todoItem->status == 'DONE') red @endif"
                        id="bejir">
                        <div class="left"></div>
                        <p>{{ $todoItem->activity }}</p>
                        <div class="right" id="kocak">
                            <div class="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <svg xmlns="http://www.w3.org/2000/svg" width="30px" height="30px"
                                    viewBox="0 0 24 24" style="transform: rotate(90deg)" class="svg">

                                    <path fill="black"
                                        d="M7 12a2 2 0 1 1-4 0a2 2 0 0 1 4 0m7 0a2 2 0 1 1-4 0a2 2 0 0 1 4 0m7 0a2 2 0 1 1-4 0a2 2 0 0 1 4 0" />
                                </svg>
                            </div>
                            @include('livewire.dropdown')
                        </div>
                    </div>
                </div>

                @if (session()->has('success'))
                    <span class="success">{{ session('success') }}.</span>
                @endif
            @empty
                <div class="empty-content">
                    <div class="empty">
                        <p>There is no plan yet.</p>
                    </div>
                </div>
            @endforelse

            @include('livewire.edit')

            {{-- {{ $dataPlan->links('pagination') }} --}}
            <br>
            <br>
            <br>

            <div class="footer-content">
                <div class="footer">
                    <p>
                        © 2024 <span class="bold">You Plan</span> · Created with <span class="love">❤️️</span> by <a
                            href="https://rasya-design.vercel.app/" target="blank" class="bold">Rasya</a>

                    </p>
                </div>
            </div>

        </div>
        <!-- Button trigger modal -->
    </div>

</div>
