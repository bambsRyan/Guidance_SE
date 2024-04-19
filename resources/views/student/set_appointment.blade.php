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
            <div class="flex-1 flex h-full">
                <div class="w-full h-full p-2">
                    <div class="flex justify-center items-center my-5">
                        <span class="text-2xl">
                            Schedule an Appointment
                        </span>
                    </div>
                    <div class="flex bg-slate-100 border rounded-lg justify-center mx-10 my-10"> 
                        <div class="w-3/5 m-2 flex flex-col gap-3 items-center p-2">
                            <label class="input input-bordered flex items-center w-full gap-2">
                                Name:   
                                <input type="text" class="grow"/>
                            </label>
                            <label class="input input-bordered flex items-center w-full gap-2">
                                Student Number:
                                <input type="text" class="grow"/>
                            </label>
                            <label class="input input-bordered flex items-center w-full gap-2">
                                Contact Number:
                                <input type="text" class="grow"/>
                            </label>
                            <select class="select select-bordered w-full gap-2 text-md">
                                <option disabled selected>Normal</option>
                                <option>Normal Apple</option>
                                <option>Normal Orange</option>
                                <option>Normal Tomato</option>
                            </select>
                            <select class="select select-bordered w-full gap-2 text-md">
                                <option disabled selected>Normal</option>
                                <option>Normal Apple</option>
                                <option>Normal Orange</option>
                                <option>Normal Tomato</option>
                            </select>
                            <label class="input input-bordered flex items-center w-full gap-2">
                                Guardian Name 
                                <input type="text" class="grow"/>
                            </label>
                            <label class="input input-bordered flex items-center w-full gap-2">
                                Relationship to Guardian
                                <input type="text" class="grow"/>
                            </label>
                            <label class="input input-bordered flex items-center w-full gap-2">
                                Guardian Contact Number
                                <input type="text" class="grow"/>
                            </label>
                        </div>
                        <div class="w-3/5 m-2 flex flex-col gap-3 items-center p-2">
                        <label class="input input-bordered flex items-center w-full gap-2">
                                Course:
                                <input type="text" class="grow"/>
                            </label>
                            <label class="input input-bordered flex items-center w-full gap-2">
                                Email:
                                <input type="text" class="grow"/>
                            </label>
                            <label class="input input-bordered flex items-center w-full gap-2">
                                College:
                                <input type="text" class="grow"/>
                            </label>
                            <input class="shadow border rounded w-full h-12 border-slate-400 text-gray-700 focus:outline-none focus:shadow-outline p-4" id="date1" name="date1" type="datetime-local">
                            <textarea class="textarea textarea-bordered w-full h-40" placeholder="Leave a Note:"></textarea>
                        </div>
                    </div>
                    <div class="flex justify-end items-end w-full h-10">
                        <button class=" px-2 bg-green-800 text-white rounded-md text-md mx-12 h-full">Schedule</button>
                    </div>
                </div>
            </div>
        </div>
    </body> 
</html> 