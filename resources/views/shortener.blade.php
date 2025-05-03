<!DOCTYPE html>
<html>
<head>
    <title>Laravel URL Shortener</title>
</head>
<body>
    <h1>Shorten your URL</h1>

    <form method="POST" action="{{ route('shorten') }}">
        @csrf
        <input type="url" name="original_url" placeholder="Enter URL" required>
        <button type="submit">Shorten</button>
    </form>

    @if(session('short_url'))
        <p>Short URL: <a href="{{ session('short_url') }}" target="_blank">{{ session('short_url') }}</a></p>
    @endif
</body>
</html>
