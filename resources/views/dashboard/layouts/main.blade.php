<head>
    @vite('resources/css/app.css')



    <link rel="stylesheet" type="text/css" href="https://unpkg.com/trix@2.0.8/dist/trix.css">
    <script type="text/javascript" src="https://unpkg.com/trix@2.0.8/dist/trix.umd.min.js"></script>

    {{-- <style>
        trix-toolbar[data-trix-button-group="file-tools"] {
            display: none;
        }
    </style> --}}

</head>

{{-- @extends('layouts.main')

@section('container') --}}

<body>
    <div class="antialiased bg-gray-50 dark:bg-gray-900">
        @include('dashboard.layouts.header')

        <!-- Sidebar -->

        @include('dashboard.layouts.sidebar')
        <main class="p-4 md:ml-64 h-auto pt-20">
            @yield('container')

        </main>

    </div>
    {{-- @endsection --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>
</body>
