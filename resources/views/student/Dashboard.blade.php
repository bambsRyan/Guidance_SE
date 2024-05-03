
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
            <div class="flex-1 flex gap-1 justify-center items-center">
                <div class="w-3/4 p-2 flex flex-col ">
                    <div class="flex-1 flex flex-col">
                        @livewire('calendar')
                    </div>
                    <div class="flex flex-col flex-1">
                        @livewire('history')
                        @livewire('past-appointment')
                    </div>
                </div>
            </div>
            </div>
        </div>
    </body> 
</html> 