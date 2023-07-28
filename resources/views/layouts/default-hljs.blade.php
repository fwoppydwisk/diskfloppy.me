<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html lang="en">
<head>
    @include('includes.head-hljs')
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
