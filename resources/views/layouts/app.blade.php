<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{config('app.name')}}</title>
    {{-- <link rel="stylesheet" href="{{ URL::asset('css/styles.css') }}"> --}}
 <link href="{{ url('asset/css/style.css') }}" rel="stylesheet">
<!-- Bootstrap CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

<!-- Bootstrap JS (requires Popper.js) -->

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>

    <style>
        /* Custom styles for the navbar */
      /*  .navbar {
            background-color: #343a40;
        }

        .nav-link {
            position: relative;
            color: #ffffff;
            transition: color 0.3s ease;
        }

        .nav-link::after {
            content: '';
            position: absolute;
            left: 50%;
            bottom: -5px;
            width: 0;
            height: 2px;
            background-color: #ffffff;
            transition: width 0.3s ease, left 0.3s ease;
        }

        .nav-link:hover {
            color: #f8f9fa;
        }

        .nav-link:hover::after {
            width: 100%;
            left: 0;
        }*/
    </style>
</head>
<body>

@include('layouts.nav')
@yield('content')
<footer class=" text-white text-center py-3">
    <p>&copy; {{ date('Y') }} {{ config('app.name') }}. All rights reserved.</p>

{{-- <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script> --}}
</body>
</html>
