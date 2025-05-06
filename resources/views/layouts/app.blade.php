<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ config('app.name', 'Todo List App') }}</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    
    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <!-- Custom styles -->
    <style>
    .todo {
        color: #1e90ff;
    }

    .btn-purple {
        position: relative;
        overflow: hidden;
        background-color: transparent;
        border: 2px solid #1e90ff;
        color: #1e90ff;
        transition: color 0.3s ease-in-out, border-color 0.3s ease-in-out;
    }

    .btn-purple::before {
        content: "";
        position: absolute;
        top: 0;
        left: -100%;
        width: 100%;
        height: 100%;
        background: linear-gradient(to right, #1e90ff, #ffffff);
        transition: left 0.3s ease-in-out;
        z-index: 0;
    }

    .btn-purple:hover {
        color: white;
        border-color: #1e90ff;
    }

    .btn-purple:hover::before {
        left: 0;
    }

    .btn-purple span {
        position: relative;
        z-index: 1;
    }

    .btn-outline-purple {
        color: #1e90ff;
        border-color: #1e90ff;
    }

    .btn-outline-purple:hover {
        background: linear-gradient(to right, #1e90ff, #ffffff);
        color: white;
    }

    .form-control:focus {
        border-color: #1e90ff;
        box-shadow: 0 0 0 0.25rem rgba(30, 144, 255, 0.25);
    }

    .link-purple {
        color: #1e90ff;
        text-decoration: none;
        position: relative;
    }

    .link-purple:after {
        content: '';
        position: absolute;
        width: 100%;
        height: 2px;
        bottom: -2px;
        left: 0;
        background-color: #1e90ff;
        transform: scaleX(0);
        transform-origin: right;
        transition: transform 0.3s ease;
    }

    .link-purple:hover {
        color: #1e90ff;
    }

    .link-purple:hover:after {
        transform: scaleX(1);
        transform-origin: left;
    }

    .feature-icon {
        width: 40px;
        height: 40px;
        border-radius: 50%;
        background: linear-gradient(to bottom right, #1e90ff, #ffffff);
        display: flex;
        align-items: center;
        justify-content: center;
        color: #1e90ff;
    }

    .auth-card {
        border: 1px solid rgba(30, 144, 255, 0.1);
        border-radius: 1rem;
    }

    .auth-icon {
        width: 64px;
        height: 64px;
        background: linear-gradient(to bottom right, #1e90ff, #ffffff);
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        color: #1e90ff;
        margin: 0 auto 1.5rem;
    }
</style>

</head>

<body class="bg-light">
    <div id="app">
        @yield('content')
    </div>

    <!-- Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
