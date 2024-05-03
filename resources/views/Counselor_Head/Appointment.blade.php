
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
    <body class="font-sans antialiased">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <div class="h-screen w-screen flex flex-col">
            @livewire('Topnavbar')
            <div class="flex-1 flex gap-1 h-full">
                @livewire('sidenavbar')
                <div class="w-full p-6 flex flex-col h-full">
                    <h1 class="text-2xl bg-slate-300 p-2 border rounded-lg font-bold text-center">Appointments</h1>
                    <div class="flex gap-2 flex-col h-full"> 
                      <div class="w-full p-2 justify-between flex ">
                        <select class="select select-bordered gap-2 w-64 text-md">
                            <option>All</option>
                            <option>Students</option>
                            <option>Employees</option>
                        </select>
                        <div>
                          <input type="text" placeholder="Search" class="input input-bordered w-64 md:w-auto"/>
                          <button class="btn btn-primary">Search</button>
                        </div>
                      </div>
                      <div class="flex h-full w-full border-2 overflow-y-auto">
                        <div class="h-full w-full overflow-y-auto scroll-container flex">
                            <div class="overflow-x-auto w-3/5 border">
                                <table class="table w-full">
                                    <!-- head -->
                                    <thead>
                                    <tr class="text-center">
                                        <th></th>
                                        <th>Name</th>
                                        <th>Date</th>
                                        <th>Time</th>
                                        <th>Actions</th>
                                        <th>Status</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                        <tr class="hover text-center">
                                            <th>1</th> <!-- APPOINTMENT NUMBER -->
                                            <td>John Doe</td> <!-- NAME-->
                                            <td>Desktoprt Technician</td> <!-- DATE -->
                                            <td>Desktop Support Technician</td> <!-- TIME -->
                                            <td> <button class="btn">Reschedule</button> </td>
                                            <td> <button class="btn">See Appointment</button> </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <object data="storage/pdf/TEMPLATE.pdf" type="application/pdf" class="flex justify-center items-center h-full w-2/5">
                                <p class="py-2 px-4 bg-gold rounded-md">Unable to display PDF file. <a href=""><strong><u>Download</u></strong></a> instead.</p>
                            </object>
                        </div>
                      </div>
                    </div>
                </div>
            </div>
        </div>
    </body> 
</html> 