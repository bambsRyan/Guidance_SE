<div class="flex h-full">
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
                        @foreach ($week as $day)   <!-- SUFFIX OF THE CALENDAR -->
                            @if ($slate != 0)
                                @if(in_array($day['date'], array_column($events, 'date'))) <!-- CHECK IF THE DATE IS IN THE EVENTS -->
                                    <td x-data="{x:'{{$day['date']}}'}" class="p-0 h-12 hover:bg-gray-300 text-slate-400 relative" @click="showModal3(x)"> 
                                        <span class="absolute top-4 right-2 w-2 h-2 rounded-full bg-red-500"></span>
                                        {{ $day['day'] }}
                                    </td>
                                @else   <!-- IF THE DATE IS NOT IN THE EVENTS -->
                                    <td x-data="{x:'{{$day['date']}}'}" class="p-0 h-12 hover:bg-gray-300 text-slate-400 relative" @click="showModal4(x)">
                                        {{ $day['day'] }}
                                    </td>
                                @endif
                                @php
                                    $slate = $slate - 1;
                                @endphp
                            @else
                                @if ($dates != 0) <!-- CHECK IF THE DATE IS NOT EMPTY -->
                                    @if ($day['date'] == $today) <!-- CHECK IF THE DATE IS TODAY -->
                                        @if(in_array($day['date'], array_column($events, 'date')))
                                        <td x-data="{x:'{{$day['date']}}'}" class="p-0 h-12 hover:bg-gray-300 bg-indigo-300 relative" @click="showModal3(x)">
                                            <span class="absolute top-4 right-2 w-2 h-2 rounded-full bg-red-500"></span>
                                            {{ $day['day'] }}
                                        </td>
                                        @else
                                        <td x-data="{x:'{{$day['date']}}'}" class="p-0 h-12 hover:bg-gray-300 bg-indigo-300" @click="showModal4(x)">
                                            {{ $day['day'] }}
                                        </td>
                                        @endif
                                    @else
                                        @if(in_array($day['date'], array_column($events, 'date')))
                                        <td x-data="{x:'{{$day['date']}}'}" class="p-0 h-12 hover:bg-gray-300 relative" @click="showModal3(x)">
                                            <span class="absolute top-4 right-2 w-2 h-2 rounded-full bg-red-500"></span>
                                            {{ $day['day'] }}
                                        </td>
                                        @else
                                        <td x-data="{x:'{{$day['date']}}'}" class="p-0 h-12 hover:bg-gray-300 " @click="showModal4(x)">
                                            {{ $day['day'] }}
                                        </td>
                                        @endif
                                    @endif
                                    @php
                                        $dates = $dates - 1;
                                    @endphp
                                @else
                                    @if(in_array($day['date'], array_column($events, 'date'))) <!-- CHECK IF THE DATE IS IN THE EVENTS -->
                                        <td x-data="{x:'{{$day['date']}}'}" class="p-0 h-12 hover:bg-gray-300 text-slate-400 relative" @click="showModal3(x)"> 
                                            <span class="absolute top-4 right-2 w-2 h-2 rounded-full bg-red-500"></span>
                                            {{ $day['day'] }}
                                        </td>
                                    @else   <!-- IF THE DATE IS NOT IN THE EVENTS -->
                                        <td x-data="{x:'{{$day['date']}}'}" class="p-0 h-12 hover:bg-gray-300 text-slate-400" @click="showModal4(x)">
                                            {{ $day['day'] }}
                                        </td>
                                    @endif 
                                @endif
                            @endif
                        @endforeach
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
<div class="w-full border m-2 relative p-2">
    <div class="w-full h-full justify-center items-center hidden gap-2" id="selectedDate">
        <div class="w-72 h-full">
            <img src="">
        </div>
        <div class="m-2 gap-2 flex flex-col">
        <p class="font-bold">Event Number:<span class="italic font-normal m-2 w-full break-words truncate">$ </span> </p>
        <p class="font-bold">Title:<span class="italic font-normal m-2 w-full break-words truncate">A very good title </span> </p>
        <p class="font-bold ">Description:<span class="italic font-normal m-2 w-full break-words truncate">A very long description </span> </p>
        <p class="font-bold">Date:<span class="italic font-normal m-2 w-full break-words truncate">January 2, 2023 </span> </p>
        <p class="font-bold">Time:<span class="italic font-normal m-2 w-full break-words truncate">1:00pm - 2:00pm</span> </p>
        <p class="font-bold">Venue:<span class="italic font-normal m-2 w-full break-words truncate">Auditorium</span>
        </p>
        </div>
    </div>
    <div class="w-full h-full justify-center items-center hidden gap-2" id="selectedDate2">
        <div class="w-full h-full flex gap-2">
            <div class="h-full w-1/3 flex flex-col gap-2">
                <div class="w-full h-full border-dashed border-2 border-black rounded-xl bg-slate-300 flex flex-col">
                    <label id ="label" for="fileToUpload" class="flex justify-center items-center h-full">
                        <img class="w-12 h-12 opacity-70 hover:opacity-100" src="storage/assets/plus.png">
                    </label>
                    <input type="file" name="fileToUpload" id="fileToUpload" accept="image/jpeg, image/png" onchange="displayImage(event)" class="hidden">
                    <img id="imagePreview" src="#" alt="Preview" class="rounded-lg w-full hidden flex-grow">
                </div>  
                <div class="flex flex-col gap-2">
                    <button onclick="changeImage()" class="btn btn-active">Change Image</button>
                    <button onclick="removeImage()" class="btn btn-active">Remove Image</button>
                </div>
            </div>
            <div class="w-2/3 h-full flex flex-col">
                <div class="w-full">
                    <p class="text-2xl">
                        Event Details:
                    </p>
                </div>
                <div class="w-full flex-grow gap-2 p-2 flex flex-col">
                    <div class="w-full flex gap-2">
                        <div class="items-center flex justify-center">
                            <label for="title" class="text-lg mr-14">Title:</label>
                        </div>
                        <div class="w-full">
                            <input id="title" type="text" class=" border-2 border-gray-300 rounded-md py-1 px-4 focus:outline-none focus:border-gray-500 text-md  w-full" placeholder="Name">
                        </div>
                    </div>
                    <div class="w-full flex gap-2 h-2/5">
                        <div class="items-center flex justify-center">
                            <label for="desc" class="text-lg">Description:</label>
                            <br>
                        </div>
                        <div class="w-full">
                            <textarea id="desc" class=" border-2 border-gray-300 rounded-md py-2 px-2 focus:outline-none focus:border-gray-500 text-md h-full w-full resize-none" placeholder="Description"> </textarea>
                        </div>
                    </div>
                    <div class="w-full flex gap-2">
                        <div class="items-center flex justify-center">
                            <label for="date" class="text-lg mr-14">Date:</label>
                        </div>
                        <div class="w-full">
                            <div class="flex item-center">
                                <input type="date" id="date" class="border-2  mr-14 rounded-md p-1 border-slate-300">
                            </div>
                        </div>
                    </div>
                    <div class="w-full flex gap-2">
                        <div class="items-center flex justify-center">
                            <label for="time" class="text-lg mr-14">Time:</label>
                        </div>
                        <div class="w-full">
                            <div class="flex item-center">
                                <input type="time" id="time" class="border-2 rounded-md p-1 border-slate-300">
                            </div>
                        </div>
                    </div>
                    <div class="w-full flex gap-2">
                        <div class="items-center flex justify-center">
                            <label for="venue" class="text-lg mr-11">Venue:</label>
                        </div>
                        <div class="w-full">
                            <input id="venue" type="text" class=" border-2 border-gray-300 rounded-md py-1 px-4 focus:outline-none focus:border-gray-500 text-md  w-full" placeholder="Venue">
                        </div>
                    </div>
                    <div class="flex justify-end h-12 gap-2 items-end">
                    <button onclick="okay()" id="okay" class="px-2 text-white bg-indigo-500 rounded-md text-md h-full">Add Event</button>
                </div>
                </div>
            </div>
        </div>

    </div>
</div>
<script>
    function showModal3(date) {
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
    function showModal4(date) {
        let bg = document.getElementById('selectedDate');
        let bg2 = document.getElementById('selectedDate2');
        bg2.classList.remove('hidden');
        bg2.classList.add('flex');
        bg2.classList.add('flex-col');
        bg.classList.add('hidden');
        bg.classList.remove('flex');
    }
    function displayImage(event) {
            const preview = document.getElementById('imagePreview');
            const file = event.target.files[0];
            const reader = new FileReader();
            const label = document.getElementById('label');
            const changeImageButton = document.getElementById('changeImageButton');
            const removeImageButton = document.getElementById('removeImageButton');
            const fileInput = document.getElementById('fileToUpload');

            if (file) {
                reader.onload = function() {
                    preview.src = reader.result;
                    preview.classList.remove('hidden');
                    label.classList.add('hidden');
                    fileInput.style.display = 'none';
                };
                reader.readAsDataURL(file);
                    changeImageButton.disabled = false;
                    removeImageButton.disabled = false;
                    changeImageButton.classList.add('bg-indigo-500');
                    removeImageButton.classList.add('bg-indigo-500');
            } 
            else {
                preview.classList.add('hidden');
                label.classList.remove('hidden');
                fileInput.style.display = 'block';  

                changeImageButton.disabled = true;
                removeImageButton.disabled = true;
                changeImageButton.classList.remove('bg-indigo-700');
                removeImageButton.classList.remove('bg-indigo-700');
            }
        };
    function changeImage() {
        event.preventDefault();
        const fileInput = document.getElementById('fileToUpload');
        fileInput.value = '';
        fileInput.click();
    };
    function removeImage() {
        const preview = document.getElementById('imagePreview');
        const label = document.getElementById('label');
        const changeImageButton = document.getElementById('changeImageButton');
        const removeImageButton = document.getElementById('removeImageButton');
        const fileInput = document.getElementById('fileToUpload');

        preview.classList.add('hidden');
        preview.src = '';
        label.classList.remove('hidden');
        fileInput.style.display = 'block';
        fileInput.value = '';
        fileInput.style.display = 'none';

        changeImageButton.disabled = true;
        removeImageButton.disabled = true;
        changeImageButton.classList.remove('bg-indigo-500');
        removeImageButton.classList.remove('bg-indigo-500');
    };
</script>
</div>