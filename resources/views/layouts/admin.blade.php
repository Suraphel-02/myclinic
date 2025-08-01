<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans antialiased bg-dark text-white">
        <div class="d-flex" id="wrapper">
            <!-- Sidebar -->
            <div class="bg-dark border-right" id="sidebar-wrapper" style="width: 250px; min-height: 100vh;">
                <div class="sidebar-heading text-white p-4">Dr. Amelia Carter</div>
                <div class="list-group list-group-flush">
                    <a href="#" class="list-group-item list-group-item-action bg-dark text-white active">
                        Dashboard
                    </a>
                    <a href="#" class="list-group-item list-group-item-action bg-dark text-white">Patients</a>
                    <a href="#" class="list-group-item list-group-item-action bg-dark text-white">Doctors</a>
                    <a href="#" class="list-group-item list-group-item-action bg-dark text-white">Appointments</a>
                    <a href="#" class="list-group-item list-group-item-action bg-dark text-white">Billing</a>
                    <a href="#" class="list-group-item list-group-item-action bg-dark text-white">Reports</a>
                </div>
                <div class="mt-auto p-4">
                    <a href="#" class="list-group-item list-group-item-action bg-dark text-white">Settings</a>
                </div>
            </div>
            <!-- /#sidebar-wrapper -->

            <!-- Page Content -->
            <div id="page-content-wrapper" style="flex-grow: 1;">
                <nav class="navbar navbar-expand-lg navbar-dark bg-dark border-bottom">
                    <div class="container-fluid">
                        <button class="btn btn-primary" id="menu-toggle">Toggle Menu</button>
                    </div>
                </nav>

                <div class="container-fluid">
                    <div id="app">
                        {{ $slot }}
                    </div>
                </div>
            </div>
            <!-- /#page-content-wrapper -->
        </div>

        <!-- Bootstrap JS -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
        <script>
            // Toggle the sidebar
            document.getElementById('menu-toggle').addEventListener('click', function() {
                document.getElementById('wrapper').classList.toggle('toggled');
            });
        </script>
    </body>
</html>