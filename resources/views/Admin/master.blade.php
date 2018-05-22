<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <link rel="stylesheet" href="/css/admin.css">
    <title>وب سایت لاراول</title>
</head>

<body>
    @include('Admin.section.header')
       @yield('content');
    @include('Admin.section.footer')
</body>
</html>
