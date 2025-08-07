<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Laravel To-Do List</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Comic+Neue&display=swap" rel="stylesheet">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            font-family: 'Comic Neue', cursive;
            background: #fff8f0;
        }

        .navbar {
            background: #ffefd5 !important;
            border-bottom: 2px dashed #ffc107;
        }

        .navbar-brand {
            font-size: 1.8rem;
            font-weight: bold;
        }

        .navbar-brand::before {
            content: "📝 ";
        }

        .btn-primary {
            background-color: #ff69b4;
            border: none;
        }

        .btn-primary:hover {
            background-color: #ff1493;
            transform: scale(1.05);
            transition: all 0.2s ease-in-out;
        }

        .btn-primary::before {
            content: "➕ ";
        }

        .container {
            background: #ffffff;
            padding: 2rem;
            border-radius: 15px;
            box-shadow: 0 0 10px rgba(255, 105, 180, 0.2);
        }

        /* Fun hover effect */
        a:hover {
            text-decoration: none;
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light mb-4">
        <div class="container">
            <a class="navbar-brand" href="{{ route('tasks.index') }}">To-Do List</a>
            <a class="btn btn-primary" href="{{ route('tasks.create') }}">Add Task</a>
        </div>
    </nav>

    <div class="container">
        @yield('content')
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
