<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <link rel="icon" type="image/png" href="/img/YouPlan.png" />

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    

    <script src="https://cdn.ckeditor.com/ckeditor5/36.0.0/classic/ckeditor.js" data-navigate-once></script>
    

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.7.1.slim.js"
        integrity="sha256-UgvvN8vBkgO0luPSUl2s8TIlOSYRoGFAX4jlCIm9Adc=" crossorigin="anonymous"></script>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Quicksand:wght@300..700&display=swap');
    </style>


    <link rel="stylesheet" href="/css/style.css">

    <title>{{ $title ?? 'YouPlan' }}</title>



</head>

<body>

    
    {{ $slot }}
{{-- 
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
    </div> --}}



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




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"
        integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>


</body>

</html>
