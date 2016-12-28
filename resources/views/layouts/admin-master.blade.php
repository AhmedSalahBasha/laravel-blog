<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="{{ URL::secure('src/css/admin.css') }}" type="text/css" />
    @yield('styles')
</head>
<body>
    @include('includes.admin-header')
    @yield('content')
    <script type="text/javascript">
        var baseUrl = "{{ URL::to('/') }}";
    </script>
    @yield('scripts')
</body>
</html>