@php
$api_root = app('config')->get('app')['api_root'];

$commits = json_decode(file_get_contents($api_root.'/gitdata'));
$count = 0;

function formatRelativeTime(DateTime $dateTime) {
    $currentTimestamp = time();
    $dateTimeTimestamp = $dateTime->getTimestamp();
    $difference = $currentTimestamp - $dateTimeTimestamp;

    if ($difference < 60) {
        return "just now";
    } elseif ($difference < 3600) {
        $minutes = floor($difference / 60);
        $suffix = ($minutes > 1) ? "s" : "";
        return $minutes . " minute" . $suffix . " ago";
    } elseif ($difference < 86400) {
        $hours = floor($difference / 3600);
        $suffix = ($hours > 1) ? "s" : "";
        return $hours . " hour" . $suffix . " ago";
    } elseif ($difference < 604800) {
        $days = floor($difference / 86400);
        $suffix = ($days > 1) ? "s" : "";
        return $days . " day" . $suffix . " ago";
    } else {
        return $dateTime->format('Y-m-d H:i:s'); // Fallback to a specific format if desired
    }
}
@endphp
<h1>Recent Site Updates</h1>
        <table class="commits">
@foreach ($commits as $commit)

    @if ($count >= 5)
        </table>
        @break
    @endif
    @php
        $date = DateTime::createFromFormat("Y-m-d\TH:i:s\Z", $commit->author->date)
    @endphp
        <tr>
            <td>&bullet;</td>
            <td>{{ formatRelativeTime($date) }}</td>
            <td><a href="{{ $commit->url }}">{{ $commit->message }}</a></td>
        </tr>
@php $count++ @endphp
@endforeach
