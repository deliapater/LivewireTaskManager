<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Livewire Task Manager</title>
    @livewireStyles

    @vite('resources/css/app.css')

</head>

<body>
    <div class="container mx-auto mt-10">
        @livewire('task-manager')
    </div>
</body>

</html>