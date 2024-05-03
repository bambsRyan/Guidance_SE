<!-- resources/views/livewire/appointment-modal.blade.php -->

<div class="w-full h-full justify-center items-center hidden gap-2" id="selectedDate2">
    <h1 class="text-center text-slate-400 text-2xl">No Events Scheduled </h1>
    <button class="btn" wire:click="openModal"> Add appointment</button>
    @if($isOpen)
    <div class="fixed z-10 inset-0 overflow-y-auto" aria-labelledby="modal-title" role="dialog" aria-modal="true">
        <div class="flex items-end justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0">
            <div class="fixed inset-0 bg-gray-500 bg-opacity-75 transition-opacity" aria-hidden="true"></div>

            <!-- This element is to trick the browser into centering the modal contents. -->
            <span class="hidden sm:inline-block sm:align-middle sm:h-screen" aria-hidden="true">&#8203;</span>

            <!-- Modal Content -->
            <div class="inline-block align-bottom bg-white rounded-lg text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:align-middle sm:max-w-lg sm:w-full">
                <!-- Your existing HTML goes here -->
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
                                <input type="text" class="grow" />
                            </label>
                            <label class="input input-bordered flex items-center w-full gap-2">
                                Student Number:
                                <input type="text" class="grow" />
                            </label>
                            <label class="input input-bordered flex items-center w-full gap-2">
                                Contact Number:
                                <input type="text" class="grow" />
                            </label>
                            <select class="select select-bordered w-full gap-2 text-md">
                                <option disabled selected>Select Counsellor</option>
                                <option>Normal Apple</option>
                                <option>Normal Orange</option>
                                <option>Normal Tomato</option>
                            </select>
                            <select class="select select-bordered w-full gap-2 text-md">
                                <option disabled selected>Select Setup</option>
                                <option>Normal Apple</option>
                                <option>Normal Orange</option>
                                <option>Normal Tomato</option>
                            </select>
                            <label class="input input-bordered flex items-center w-full gap-2">
                                Guardian Name:
                                <input type="text" class="grow" />
                            </label>
                            <label class="input input-bordered flex items-center w-full gap-2">
                                Relationship to Guardian:
                                <input type="text" class="grow" />
                            </label>
                            <label class="input input-bordered flex items-center w-full gap-2">
                                Guardian Contact Number:
                                <input type="text" class="grow" />
                            </label>
                        </div>
                        <div class="w-3/5 m-2 flex flex-col gap-3 items-center p-2">
                            <label class="input input-bordered flex items-center w-full gap-2">
                                Course:
                                <input type="text" class="grow" />
                            </label>
                            <label class="input input-bordered flex items-center w-full gap-2">
                                Email:
                                <input type="text" class="grow" />
                            </label>
                            <label class="input input-bordered flex items-center w-full gap-2">
                                College:
                                <input type="text" class="grow" />
                            </label>
                            <input class="shadow border rounded w-full h-12 border-slate-400 text-gray-700 focus:outline-none focus:shadow-outline p-4" id="date1" name="date1" type="datetime-local">
                            <textarea class="textarea textarea-bordered w-full h-40" placeholder="Leave a Note:"></textarea>
                        </div>
                    </div>
                    <div class="flex justify-end items-end w-full mt-10 mb-6 h-10 gap-2 px-10">
                        <button wire:click="closeModal" class=" px-2 btn btn-active text-white rounded-md text-md  h-full">Cancel</button>
                        <button wire:click="schedule" class=" px-2 btn btn-success text-white rounded-md text-md h-full">Schedule</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endif
</div>