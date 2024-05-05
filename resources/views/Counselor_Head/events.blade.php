
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
        @vite('resources/css/app.css')
        @vite('resources/js/app.js')
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
    <body class="font-sans antialiased flex ">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <div class="h-screen w-screen flex flex-col">
            @livewire('Topnavbar')
            <div class="flex-1 flex gap-1 h-full">
                @livewire('head-sidenavbar')
                <div class="w-full p-6 flex flex-col h-full">
                    <h1 class="text-2xl bg-slate-300 p-2 border rounded-lg font-bold text-center">Events</h1>
                    <div class="flex gap-2 flex-col h-full"> 
                        @livewire('events')
                    </div>
                </div>
            </div>
        </div>
    </body> 
</html> 