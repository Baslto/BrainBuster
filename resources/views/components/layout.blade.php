<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>BrainBuster</title>
</head>
<body>
    {{ $slot }}
    <script src="{{ url('main.js') }}"></script>
</body>
</html>