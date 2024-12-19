<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Informasi Perusahaan</title>
        @vite(['resources/css/app-flowbite.css','resources/js/app.bundle.js', 'resources/js/dark-mode.js'])
    </head>
    <body>
        <!-- BEGIN: Header -->
        @include('partials.navbar')
        <!-- END: Header -->

        <div class="flex pt-16 overflow-hidden bg-gray-50 dark:bg-gray-900">

            <!-- BEGIN: Side Bar -->
            @include('partials.sidebar')
            <!-- END: Side Bar -->
            
          <div id="main-content" class="relative w-full h-full overflow-y-auto bg-gray-50 lg:ml-64 dark:bg-gray-900">
                <main>
                    @yield('content')
                </main>
            </div>
            
        </div>
        <!-- BEGIN: Script -->
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.3/flowbite.min.js"></script> --}}

        <script>
            jQuery(document).ready(function() {
                
            });
        </script>
        <!-- END: Script -->
    </body>
</html>