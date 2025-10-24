
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'My CV')</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <style>
        body {
            background-color: #f5ede1;
            font-family: Arial, sans-serif;
        }
        .cv-header {
            background-color: #d5bfa3;
            color: #4a2c1a;
            padding: 1rem;
        }
        .sidebar {
            background-color: #f0d8b6;
            padding: 1.5rem;
            border-radius: 10px;
        }
        .content {
            background-color: #fff;
            padding: 2rem;
            border-radius: 10px;
        }
        h2, h3 {
            color: #4a2c1a;
        }
    </style>
</head>
<body>
    @include('partials.navbar')
    <div class="container my-4">
        @yield('content')
    </div>
    @include('partials.footer')
</body>
</html>
