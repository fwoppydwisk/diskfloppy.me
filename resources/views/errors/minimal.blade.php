@extends('layouts.minimal')
@section('content')
    <h1>Error @yield('code') | <strong>@yield('message')</strong></h1>
    <hr align="left">
    <p>Here, have a cat...</p>
    <img src="https://http.cat/@yield('code')" width="500"><br><br>
    <p>If you believe this is a server error, contact the <a href="mailto:webmaster@diskfloppy.me">webmaster</a></p>
    <br>
    <h4>Diagnostic Info</h4>
    <table><tr><td>
                <code>
                    Server: &nbsp;{{ gethostname() }}<br>
                    Your IP: {{ Request::ip() }}<br>
                    Root: &nbsp;&nbsp;&nbsp;{!! url('') !!}<br>
                    Path: &nbsp;&nbsp;&nbsp;/{{ Request::path() }}/<br>
                    Epoch: &nbsp;&nbsp;{{ now()->timestamp }}<br>
                    Agent: &nbsp;&nbsp;Mozilla/5.0 (Macintosh; Intel Mac OS X 10.15; rv:122.0) Gecko/20100101 Firefox/122.0	</code>
            </td></tr></table>
    <hr align="left">
    <p>&copy; floppydisk 2021-2024</p>
@endsection
