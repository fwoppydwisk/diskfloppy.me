@php
$file_path = "code/".$file;
$file_name = basename($file_path);

$hl = new \Highlight\Highlighter();

$highlighted = $hl->highlight($lang, Storage::disk('local')->get($file_path));
$file_size = Storage::disk('local')->size($file_path);
@endphp
<div class="code-block">
    <h1>{{ $file_name }} <small>{{ $file_size}} bytes</small></h1>
    <hr>
    <code class="hljs {{$highlighted->language}}">{!! $highlighted->value !!}</code>
</div>
