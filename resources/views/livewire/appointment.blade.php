<div class="card h-full w-full bg-base-100 shadow-xl">
    <h1 class="text-2xl bg-slate-300 p-2 border rounded-lg font-bold text-center">Appointments</h1>
    <div class="flex gap-2 flex-col h-full p-2"> 
        <div class="w-full p-2 justify-between flex">
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
                        <thead>
                        <tr class="text-center">
                            <th></th>
                            <th>Name</th>
                            <th>Date</th>
                            <th>Time</th>
                            <th>Type</th>
                            <th>Actions</th>
                            <th>Status</th>
                        </tr>
                        </thead>
                        <tbody>
                            <tr class="hover text-center ">
                                <th>1</th> <!-- APPOINTMENT NUMBER -->
                                <td>John Doe</td> <!-- NAME-->
                                <td>Desktoprt Technician</td> <!-- DATE -->
                                </button></td> <!-- TIME -->
                                <td>Desktop Support Technician</td> <!-- TIME -->
                                <td><a href="https://www.google.com" target="_blank"><button class="btn">F2F</button></a></td> 
                                <td> 
                                    <button class="btn" onclick="resched.showModal()">Reschedule</button> </td>
                                    <dialog id="resched" class="modal" wire:ignore>
                                        <div class="modal-box flex flex-col items-center">
                                            <h3 class="font-bold text-lg text-red-900">Reschedule appointment</h3>
                                            <label class="form-control w-full max-w-xs">
                                                <div class="label">
                                                    <span class="label-text">Set a new date</span>
                                                </div>
                                                <input type="date" placeholder="Type here" class="input input-bordered w-full max-w-lg" wire:model.live="selectedDate"/>
                                                <select class="select select-bordered w-full max-w-xs" wire:click="avail()">
                                                    @foreach ($availTime as $times)
                                                        <option>{{ $times }}</option>
                                                    @endforeach
                                                </select>
                                            </label>
                                            <div class="modal-action items-end w-full">
                                                <form method="dialog">
                                                    <button class="btn">Close</button>
                                                    <button class="btn">Reschedule</button>
                                                </form>
                                            </div>
                                        </div>
                                    </dialog>
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