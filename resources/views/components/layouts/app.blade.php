<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Math Puzzle</title>
    <script src="https://cdn.tailwindcss.com"></script>
    @fluxStyles
    @livewireStyles
</head>

<body>
    {{ $slot }}
    @fluxScripts
    @livewireScripts
</body>

</html>
