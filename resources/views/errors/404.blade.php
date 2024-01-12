@extends('errors::minimal')
@section('content')

<h1>Error 404 | <strong>Page not found!</strong></h1>
<hr align="left">
<h2>The page <code class="addr">/{{ Request::path() }}/</code> doesn't exist! Did you mean...</h2>
<ul>
    <li><a href="//www.diskfloppy.me/">diskfloppy.me</a></li>
    <li><a href="//git.diskfloppy.me/">git.diskfloppy.me</a></li>
    <li><a href="//weather.diskfloppy.me">weather.diskfloppy.me</a></li>
    <li><a href="//dl.diskfloppy.me/">dl.diskfloppy.me</a></li>
    <li><a href="https://status.diskfloppy.me">status.diskfloppy.me</a> (HTTPS Only)</li>
    <li><a href="gopher://diskfloppy.me">gopher://diskfloppy.me</a></li>
</ul>
<p>Still haven't found what you were looking for or believe this is a server error? Contact the <a href="mailto:webmaster@diskfloppy.me">webmaster</a>!</p>
<br>
<h4>Diagnostic Info</h4>
<table><tr><td>
            <code>
                Server: &nbsp;{{ gethostname() }}<br>
                Your IP: {{ Request::ip() }}<br>
                Epoch: &nbsp;&nbsp;{{ now()->timestamp }}<br>
                Agent: &nbsp;&nbsp;Mozilla/5.0 (Macintosh; Intel Mac OS X 10.15; rv:122.0) Gecko/20100101 Firefox/122.0	</code>
        </td></tr></table>
<hr align="left">
<p>&copy; floppydisk 2021-2024</p>
@endsection
