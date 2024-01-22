<!DOCTYPE html>
<html lang="en">
<head>
    @include('includes.head')
</head>

<body onload="setDefaultScheme()">
<div class="page">
    <div id="header" class="header">
        @include('includes.header')
    </div> <!-- header -->
    <div id="content" class="content" role="main">
@yield('content')
    </div> <!-- content -->
    <div id="footer" class="footer">
        @include('includes.footer')
    </div> <!-- footer -->
</div> <!-- page -->
</body>
</html>
