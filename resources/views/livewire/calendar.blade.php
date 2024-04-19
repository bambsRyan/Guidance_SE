<div class="flex">
<div class='h-full p-2 flex flex-col '>
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
    <div>
    </div>
</div>
<div class="w-full border m-2 relative p-2">
    <div class="hidden w-full h-full " id="selectedDate">
        <div class="w-72 h-full border">
            <img src="">
        </div>
        <div>
        <p class="font-bold">
        Date:<span class="italic font-normal m-2 w-full break-words truncate">January 2, 2023 </span>
        </p>
        <p class="font-bold">
        Date:<span class="italic font-normal m-2 w-full break-words truncate">1:00pm - 2:00pm</span>
        </p>
        <p class="font-bold">
        Venue:<span class="italic font-normal m-2 w-full break-words truncate">Auditorium</span>
        </p>
        </div>
    </div>
    <div class="w-full h-full justify-center items-center hidden gap-2" id="selectedDate2">
        <h1 class="text-center text-slate-400 text-2xl">No Events Scheduled </h1>
        <button class="btn"> Add appointment</button>
    </div>
</div>
<script>
    function showModal(date) {
        let bg = document.getElementById('selectedDate');
        let bg2 = document.getElementById('selectedDate2');
        bg.classList.remove('hidden');
        bg.classList.add('flex');
        bg2.classList.add('hidden');
        bg2.classList.remove('flex');
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