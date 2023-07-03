
<!DOCTYPE html>
<html lang="en">
<head>
    @include('includes.head')
</head>

<body>
<div class="page">
<div class="header">
    @include('includes.header')
</div> <!-- header -->

<div id="pagebody">
    <div id="content">
@yield('content')
    </div> <!-- content -->
    <div id="footer" class="pagefooter">
        @include('includes.footer')
    </div> <!-- footer -->
</div> <!-- pagebody -->
</div> <!-- page -->
</body>
</html>
