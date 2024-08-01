<div>


    <div class="dropdown-menu">
        <div class="dropdown-history">
            <div class="svg">
                <button wire:click="complete({{ $todoItem->id }})"> <svg xmlns="http://www.w3.org/2000/svg"
                        width="21px" height="21px" viewBox="0 0 24 24">
                        <g fill="none" stroke="white" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            color="black">
                            <path
                                d="M13.5 20s1 0 2 2c0 0 3.177-5 6-6M7 16h4m-4-5h8M6.5 3.5c-1.556.047-2.483.22-3.125.862c-.879.88-.879 2.295-.879 5.126v6.506c0 2.832 0 4.247.879 5.127C4.253 22 5.668 22 8.496 22h2.5m4.496-18.5c1.556.047 2.484.22 3.125.862c.88.88.88 2.295.88 5.126V13.5" />
                            <path
                                d="M6.496 3.75c0-.966.784-1.75 1.75-1.75h5.5a1.75 1.75 0 1 1 0 3.5h-5.5a1.75 1.75 0 0 1-1.75-1.75" />
                        </g>
                    </svg>
                    <span>Done</span>
                </button>


                <button data-bs-toggle="modal" data-bs-target="#exampleModal" wire:click="edit({{ $todoItem->id }})"
                    class="bejir">
                    <svg xmlns="http://www.w3.org/2000/svg" width="21px" height="21px" viewBox="0 0 24 24">
                        <g fill="none" stroke="white" stroke-linecap="round" stroke-linejoin="round"
                            stroke-width="2">
                            <path d="M12 3H5a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7" />
                            <path
                                d="M18.375 2.625a1 1 0 0 1 3 3l-9.013 9.014a2 2 0 0 1-.853.505l-2.873.84a.5.5 0 0 1-.62-.62l.84-2.873a2 2 0 0 1 .506-.852z" />
                        </g>
                    </svg>
                    <span>Edit</span>
                </button>

                <button data-bs-toggle="modal" data-bs-target="#exampleModal2" wire:click="edit2({{ $todoItem->id }})"><svg class="trash" xmlns="http://www.w3.org/2000/svg"
                    width="22px" height="22px" viewBox="0 0 28 28">
                    <path fill="white" stroke="white"
                        d="M11.5 6h5a2.5 2.5 0 0 0-5 0M10 6a4 4 0 0 1 8 0h6.25a.75.75 0 0 1 0 1.5h-1.31l-1.217 14.603A4.25 4.25 0 0 1 17.488 26h-6.976a4.25 4.25 0 0 1-4.235-3.897L5.06 7.5H3.75a.75.75 0 0 1 0-1.5zM7.772 21.978a2.75 2.75 0 0 0 2.74 2.522h6.976a2.75 2.75 0 0 0 2.74-2.522L21.436 7.5H6.565zM11.75 11a.75.75 0 0 1 .75.75v8.5a.75.75 0 0 1-1.5 0v-8.5a.75.75 0 0 1 .75-.75m5.25.75a.75.75 0 0 0-1.5 0v8.5a.75.75 0 0 0 1.5 0z" />
                </svg>
                <span>Delete</span>
            </button>
            </div>
        </div>
    </div>



</div>
