
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
        @vite('resources/css/app.css')
        <style>
            .scroll-container::-webkit-scrollbar {
                width: 8px;
            }
            .scroll-container::-webkit-scrollbar-track {
                background-color: #f1f1f1;
            }
            .scroll-container::-webkit-scrollbar-thumb {
                background-color: #888;
                border-radius: 10px;
            }
            .scroll-container::-webkit-scrollbar-thumb:hover {
                background-color: #555; 
            }
        </style>
    </head>
    <body class="font-sans antialiased">
    <div class="h-screen w-screen flex flex-col">
            @livewire('Topnavbar')
            <div class="flex-1 flex gap-1 h-full">
                @livewire('sidenavbar')
                <div class="w-full flex flex-col h-full">
                    @livewire('appointment')
                </div>
            </div>
        </div>
    </body> 
</html> 