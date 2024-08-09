<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" type="image/png" href="/img/YouPlan.png" />

    <script src="https://cdn.ckeditor.com/ckeditor5/36.0.0/classic/ckeditor.js" data-navigate-once></script>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.7.1.slim.js"
        integrity="sha256-UgvvN8vBkgO0luPSUl2s8TIlOSYRoGFAX4jlCIm9Adc=" crossorigin="anonymous"></script>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Quicksand:wght@300..700&display=swap');
    </style>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>

    <link rel="stylesheet" href="/css/style.css">
    <title>Note</title>

</head>

<body>

    <div>

        <div class="main-note">
            <livewire:navbar />


            <div class="jumbotrons">
                <h1>Edit Notes</h1>
                <div class="inputs">
                </div>
            </div>


            <div class="bawah">
                <div class="aca">
                    <form method="POST" action="{{ route('note.update', $data->slug) }}" autocomplete="off">
                        @csrf
                        @method('PATCH')

                        <div class="content-note">
                            <div class="form-note">
                                <label for="title">Title</label>
                                <input type="text" name="title" id="title" value="{{ old('title', $data->title) }}">
                                @error('title')
                                    <span class="error">{{ $message }}</span>
                                @enderror
                                <label for="editor">Note</label>
                                <div class="ckeditor" id="note">
                                    <textarea id="editor" name="note" placeholder="Enter Notes"  value="{{ old('note', $data->note) }}">{{ $data->note }}</textarea>
                                </div>
                                @error('note')
                                    <span class="error">{{ $message }}</span>
                                @enderror
                                <div class="content-button">
                                    <a href="/note">
                                        <button type="button" class="back"><svg xmlns="http://www.w3.org/2000/svg"
                                                width="0.8em" height="1.2em" viewBox="0 0 12 24">
                                                <path fill="white" fill-rule="evenodd"
                                                    d="m3.343 12l7.071 7.071L9 20.485l-7.778-7.778a1 1 0 0 1 0-1.414L9 3.515l1.414 1.414z" />
                                            </svg>Back</button>
                                    </a>
                                    <button type="submit" class="save" id="submit"><svg
                                            xmlns="http://www.w3.org/2000/svg" width="18px" height="18px"
                                            viewBox="0 0 24 24">
                                            <g fill="none" stroke="white" stroke-linecap="round"
                                                stroke-linejoin="round" stroke-width="2">
                                                <path
                                                    d="M15.2 3a2 2 0 0 1 1.4.6l3.8 3.8a2 2 0 0 1 .6 1.4V19a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2z" />
                                                <path
                                                    d="M17 21v-7a1 1 0 0 0-1-1H8a1 1 0 0 0-1 1v7M7 3v4a1 1 0 0 0 1 1h7" />
                                            </g>
                                        </svg>Save</button>
                                </div>
                            </div>
                        </div>
                    </form>
                    <br>
                    <br>
                    <div class="footer-content">
                        <div class="footer">
                            <p>
                                © 2024 <span class="bold">You Plan</span> · Created with <span
                                    class="love">❤️️</span>
                                by <a href="https://rasya-design.vercel.app/" target="blank" class="bold">Rasya</a>

                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <script data-navigate-track>
        ClassicEditor
            .create(document.querySelector('#editor'), {
                removePlugins: ['CKFinderUploadAdapter', 'CKFinder', 'EasyImage', 'Image', 'ImageCaption', 'ImageStyle',
                    'ImageToolbar', 'ImageUpload', 'MediaEmbed'
                ],
                updateSourceElementOnDestroy: true,

                // }).then(editor => {
                //     //   document.querySelector('#submit').addEventListener('click', () => {
                //     //     let editor = $('#editor').data('note');
                //     //     eval(editor).set('state.notes', event.editor.getData());
                //     //   });
            })
            .catch(error => {
                console.error(error);
            });
        $(document).ready(() => console.clear());
    </script>

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

        <a href="/note" class="{{ Request::is('note*') ? 'active' : '' }}">
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
</body>

</html>
