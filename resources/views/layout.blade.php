<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('title')</title>

    {{-- <!-- Fonts --> --}}
    {{-- <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" /> --}}
    <!-- Scripts -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

</head>

<body>
    
    <div class="container">
        <div class="row">
            <div class="col-8 bg-success-subtle text-center py-2"><h2>Eloquent CRUD</h2></div>
        </div>
        <h1>>@yield('title')</h1>
        <a href="newuser" class="btn btn-success btn-sm mb-3" style="--bs-btn-padding-y: .25rem; --bs-btn-padding-x: .5rem; --bs-btn-font-size: .75rem;">Add New User</a>
        <a href="showcity" class="btn btn-success btn-sm mb-3" style="--bs-btn-padding-y: .25rem; --bs-btn-padding-x: .5rem; --bs-btn-font-size: .75rem;">Show Cities</a>
        <div class="row">
            <div class="col-6">
                @yield('content')
            </div>
        </div>
    </div>



</body>
</html>