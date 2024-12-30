<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html lang="en">
<head>
    <title>{{ $title ?? '' }}</title>
    <link rel="stylesheet" href="{{ URL::asset ('css/minimal.css') }}"/>
</head>

<body>
    <h1>Error {{ $code }} | <strong>{{ $message }}</strong></h1>
    <hr align="left">
    <p>Here, have a cat...</p>
    <img src="https://http.cat/{{ $code }}" width="500"><br><br>
    <p>If you believe this is a server error, contact the <a href="mailto:webmaster@diskfloppy.me">webmaster</a></p>
    <br>
    <h4>Diagnostic Info</h4>
    <table><tr><td>
                <code>
                    Server: &nbsp;{{ gethostname() }}<br>
                    Your IP: {{ Request::ip() }}<br>
                    Root: &nbsp;&nbsp;&nbsp;{!! url('') !!}<br>
                    Path: &nbsp;&nbsp;&nbsp;@if(Request::path() == "/")/@else/{{ Request::path() }}/@endif<br>
                    Epoch: &nbsp;&nbsp;{{ now()->timestamp }}<br>
                    Agent: &nbsp;&nbsp;Mozilla/5.0 (Macintosh; Intel Mac OS X 10.15; rv:122.0) Gecko/20100101 Firefox/122.0	</code>
            </td></tr></table>
    <hr align="left">
    <p>&copy; RoscoeDeWah 2021-2024</p>
</body>
</html>
