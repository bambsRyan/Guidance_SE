<div class="flex">
<div class='h-full p-2 flex flex-col'>
    <div class="w-96 h-full align-items-center">
        <div class="flex justify-between w-96">
            <button class= "btn" wire:click="subtract">Previous</button>
            <button class= "btn" wire:click="add">Next</button>
        </div>
        <div class= "flex justify-center">
        <h2>{{ date('F Y', strtotime($year . '-' . $month . '-01')) }}</h2>
        </div>
        <table class="table mt-2 w-96 p-0 border border-slate-300">
            <thead class="bg-indigo-100 h-12">
                <tr>
                    <th class="p-0 w-28 h-4 justify-items-center text-center">Sun</th>
                    <th class="p-0 w-28 justify-items-center text-center">Mon</th>
                    <th class="p-0 w-28 justify-items-center text-center">Tue</th>
                    <th class="p-0 w-28 justify-items-center text-center">Wed</th>
                    <th class="p-0 w-28 justify-items-center text-center">Thu</th>
                    <th class="p-0 w-28 justify-items-center text-center">Fri</th>
                    <th class="p-0 w-28 justify-items-center text-center">Sat</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($calendar1 as $week)
                    <tr class="text-center">
                        @foreach ($week as $day)
                            @if ($slate != 0)
                                @if(in_array($day['date'], array_column($events, 'date')))
                                    @foreach ($events as $event)
                                        @if ($event['date'] == $day['date'])
                                         @php 
                                            $list += $event;
                                        @endphp
                                        @endif
                                    @endforeach
                                        <td x-data="{x:'{{$day['date']}}'}" class="p-0 h-12 hover:bg-gray-300 text-slate-400 relative" @click="showModal(x)"> 
                                            <span class="absolute top-4 right-2 w-2 h-2 rounded-full bg-red-500"></span>
                                            {{ $day['day'] }}
                                        </td>
                                @else
                                    <td x-data="{x:'{{$day['date']}}'}" class="p-0 h-12 hover:bg-gray-300 text-slate-400 relative" @click="showModal2(x)">
                                        {{ $day['day'] }}
                                    </td>
                                @endif
                                @php
                                    $slate = $slate - 1;
                                @endphp
                            @else
                                @if ($dates != 0)
                                    @if ($day['date'] == $today)
                                        @if(in_array($day['date'], array_column($events, 'date')))
                                        <td x-data="{x:'{{$day['date']}}'}" class="p-0 h-12 hover:bg-gray-300 bg-indigo-300 relative" @click="showModal(x)">
                                            <span class="absolute top-4 right-2 w-2 h-2 rounded-full bg-red-500"></span>
                                            {{ $day['day'] }}
                                        </td>
                                        @else
                                        <td x-data="{x:'{{$day['date']}}'}" class="p-0 h-12 hover:bg-gray-300 bg-indigo-300" @click="showModal2(x)">
                                            {{ $day['day'] }}
                                        </td>
                                        @endif
                                    @else
                                        @if(in_array($day['date'], array_column($events, 'date')))
                                        <td x-data="{x:'{{$day['date']}}'}" class="p-0 h-12 hover:bg-gray-300 relative" @click="showModal(x)">
                                            <span class="absolute top-4 right-2 w-2 h-2 rounded-full bg-red-500"></span>
                                            {{ $day['day'] }}
                                        </td>
                                        @else
                                        <td x-data="{x:'{{$day['date']}}'}" class="p-0 h-12 hover:bg-gray-300 " @click="showModal2(x)">
                                            {{ $day['day'] }}
                                        </td>
                                        @endif
                                    @endif
                                    @php
                                        $dates = $dates - 1;
                                    @endphp
                                @else
                                    <td x-data="{x:'{{$day['date']}}'}" class="p-0 h-12 hover:bg-gray-300 text-slate-400" @click="showModal2(x)">
                                        {{ $day['day'] }}
                                    </td>
                                @endif
                            @endif
                        @endforeach
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
<div class="w-full border m-2 relative p-2 ">
    <div class="w-full h-full justify-center items-center hidden gap-2" id="selectedDate">
        <div class="w-72 h-full">
            <img src="">
        </div>
        <div class="m-2 gap-2 flex flex-col">
        <p class="font-bold">Event Number:<span class="italic font-normal m-2 w-full break-words truncate">001 </span> </p>
        <p class="font-bold">Title:<span class="italic font-normal m-2 w-full break-words truncate">A very good title </span> </p>
        <p class="font-bold ">Description:<span class="italic font-normal m-2 w-full break-words truncate">A very long description </span> </p>
        <p class="font-bold">Date:<span class="italic font-normal m-2 w-full break-words truncate">January 2, 2023 </span> </p>
        <p class="font-bold">Time:<span class="italic font-normal m-2 w-full break-words truncate">1:00pm - 2:00pm</span> </p>
        <p class="font-bold">Venue:<span class="italic font-normal m-2 w-full break-words truncate">Auditorium</span>
        </p>
        </div>
    </div>
    <div class="w-full h-full justify-center items-center hidden gap-2" id="selectedDate2">
        <h1 class="text-center text-slate-400 text-2xl">No Events Scheduled </h1>
        <button class="btn" onclick="my_modal_1.showModal()"> Add appointment</button>
        <dialog id="my_modal_1" class="modal">
            <div class="bg-white w-3/4 p-2 border rounded-lg">
                <div class="flex justify-center items-center my-5">
                    <span class="text-2xl">
                        Schedule an Appointment
                    </span>
                </div>
                <div class="flex bg-slate-100 border rounded-lg justify-center mx-10 mt-10"> 
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
                <div class="flex justify-end items-end w-full mt-10 mb-6 h-10 gap-2 px-10">
                    <button class=" px-2 btn btn-active text-white rounded-md text-md  h-full">Cancel</button>
                    <button class=" px-2 btn btn-success text-white rounded-md text-md h-full">Schedule</button>
                </div>
            </div>
        </dialog>
    </div>
</div>
<script>
    function showModal(date) {
        let bg = document.getElementById('selectedDate');
        let bg2 = document.getElementById('selectedDate2');
        let y = document.getElementById('dawa');
        bg.classList.remove('hidden');
        bg.classList.add('flex');
        bg2.classList.add('hidden');
        bg2.classList.remove('flex');
        let xDataAttributeValue = "date";
        y.setAttribute('value', date);
    }
    function showModal2(date) {
        let bg = document.getElementById('selectedDate');
        let bg2 = document.getElementById('selectedDate2');
        bg2.classList.remove('hidden');
        bg2.classList.add('flex');
        bg2.classList.add('flex-col');
        bg.classList.add('hidden');
        bg.classList.remove('flex');
    }
</script>
</div>