
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
        @vite('resources/css/app.css')
        @vite('resources/js/app.js')
    </head>
    <body class="font-sans antialiased">
    <div class="h-screen w-screen flex flex-col">
            @livewire('Topnavbar')
            <div class="flex-1 flex gap-1">
                @livewire('head-sidenavbar')
                <div class="w-full p-6 flex flex-col">

                </div>
            </div>
        </div>
    </body>
</html> 