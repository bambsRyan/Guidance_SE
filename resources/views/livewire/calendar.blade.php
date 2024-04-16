
<div class='h-full p-2  flex flex-col'>
    <div class="w-96 h-full">
        <div class="flex justify-between w-96">
            <button class= "btn" wire:click="subtract">Previous</button>
            <button class= "btn" wire:click="add">Next</button>
        </div>
        <div class= "flex justify-center">
        <h2>{{ date('F Y', strtotime($year . '-' . $month . '-01')) }}</h2>
        </div>
        <table class="table my-4 w-96 p-0 border border-slate-300">
            <thead class="bg-indigo-100 h-16">
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
                                    <td x-data="{x:'{{$day['date']}}'}" class="p-0 h-16 hover:bg-gray-300 text-slate-400 relative" click:wire="events(x)" onclick="my_modal_1.showModal()"> 
                                        <span class="absolute top-4 right-2 w-2 h-2 rounded-full bg-red-500"></span>
                                            <dialog id="my_modal_1" class="modal">
                                                <div class="modal-box text-black">
                                                    <h3 x-data="{ y:'Hello'}"class="font-bold text-lg" x-text="y"></h3>
                                                    <p class="py-4" x-text="x"></p>
                                                    <div class="modal-action">  
                                                    <form method="dialog">
                                                        <button class="btn">Close</button>
                                                    </form>
                                                    <button class="btn" wire:click="numadd({{$num}})">Next</button>
                                                    </div>
                                                </div>
                                            </dialog>
                                        {{ $day['day'] }}
                                    </td>
                                @else
                                    <td class="p-0 h-16 hover:bg-gray-300 text-slate-400 relative">
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
                                        <td x-data="{x:'{{$day['date']}}'}" class="p-0 h-16 hover:bg-gray-300 bg-indigo-300 relative" onclick="my_modal_2.showModal()">
                                            <span class="absolute top-4 right-2 w-2 h-2 rounded-full bg-red-500"></span>
                                            <dialog id="my_modal_2" class="modal">
                                                <div class="modal-box">
                                                    <h3 class="font-bold text-lg">Hello!</h3>
                                                    <p class="py-4" x-text="x"></p>
                                                    <div class="modal-action">
                                                    <form method="dialog">
                                                        <button class="btn">Close</button>
                                                    </form>
                                                    </div>
                                                </div>
                                            </dialog>
                                            {{ $day['day'] }}
                                        </td>
                                        @else
                                        <td class="p-0 h-16 hover:bg-gray-300 bg-indigo-300">
                                            {{ $day['day'] }}
                                        </td>
                                        @endif
                                    @else
                                        @if(in_array($day['date'], array_column($events, 'date')))
                                        <td x-data="{x:'{{$day['date']}}'}" class="p-0 h-16 hover:bg-gray-300 relative" onclick="my_modal_2.showModal()">
                                            <span class="absolute top-4 right-2 w-2 h-2 rounded-full bg-red-500"></span>
                                            <dialog id="my_modal_2" class="modal">
                                                <div class="modal-box">
                                                    <h3 class="font-bold text-lg">Hello!</h3>
                                                    <p class="py-4" x-text="x"></p>
                                                    <div class="modal-action">
                                                    <form method="dialog">
                                                        <button class="btn">Close</button>
                                                    </form>
                                                    </div>
                                                </div>
                                            </dialog>
                                            {{ $day['day'] }}
                                        </td>
                                        @else
                                        <td class="p-0 h-16 hover:bg-gray-300 ">
                                            {{ $day['day'] }}
                                        </td>
                                        @endif
                                    @endif
                                    @php
                                        $dates = $dates - 1;
                                    @endphp
                                @else
                                    <td class="p-0 h-16 hover:bg-gray-300 text-slate-400">
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
