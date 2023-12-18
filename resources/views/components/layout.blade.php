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
    <script type="text/javascript" src="{{ asset('/js/main.js') }}"></script>
</body>
</html>