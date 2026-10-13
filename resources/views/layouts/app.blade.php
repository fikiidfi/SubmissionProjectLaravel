
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', 'Praktikum Laravel')</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            background: #f1f5f9;
            color: #1e293b;
        }

        nav {
            background: #1e293b;
            padding: 18px 30px;
        }

        nav a {
            color: white;
            text-decoration: none;
            margin-right: 20px;
        }

        main {
            max-width: 1000px;
            margin: 30px auto;
            padding: 25px;
            background: white;
            border-radius: 10px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        th, td {
            padding: 12px;
            border: 1px solid #cbd5e1;
            text-align: left;
        }

        th {
            background: #e2e8f0;
        }

        .alert {
            padding: 14px;
            margin: 15px 0;
            border-radius: 6px;
        }

        .alert-info {
            background: #dbeafe;
            color: #1e40af;
        }

        .alert-sukses {
            background: #dcfce7;
            color: #166534;
        }

        .alert-bahaya {
            background: #fee2e2;
            color: #991b1b;
        }
    </style>
</head>
<body>

    @include('partials.navbar')

    <main>
        <h1>@yield('title', 'Praktikum Laravel')</h1>
        @yield('content')
    </main>

    <footer style="text-align:center; padding:20px;">
        Praktikum Laravel Controller & Blade
        &copy; {{ date('Y') }}
    </footer>

</body>
</html>

