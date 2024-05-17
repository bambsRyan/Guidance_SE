<div class="card h-full w-full bg-base-100 shadow-xl">
        <div class="card-body flex-col h-24 p-5 gap-4 items-center">
            <h2 class="card-title text-2xl text-center text-indigo-900">College Assignment</h2>
            <div class="scroll-container overflow-x-auto w-full rounded-lg">
                <table class="table table-pin-rows">
                    <thead>
                        <tr class="bg-neutral-300 text-indigo-900 text-sm text-center">
                            <th class="w-1/2">College</th>
                            <th class="w-1/2">Counselor</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>College of Information Systems and Technology Management</td>
                            <td>
                                <select class="select select-bordered w-full">
                                    <option disabled selected>Counselor</option>
                                    <option>Ryan Kristoffer Marayag</option>
                                    <option>Justin Liwag</option>
                                    <option>Neil Marcus Manubay</option>
                                </select>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="card-actions w-full justify-end">
                <button class="btn btn-outline btn-error" onclick="restore.showModal()">Restore Changes</button>
                <dialog id="restore" class="modal">
                    <div class="modal-box">
                        <h3 class="font-bold text-lg text-red-500">Confirmation!</h3>
                        <p class="py-4">Are you sure to revert changes?</p>
                        <div class="modal-action">
                        <form method="dialog">
                            <button class="btn">Close</button>
                            <button class="btn btn-outline btn-error">Restore</button>
                        </form>
                        </div>
                    </div>
                </dialog>
                <button class="btn btn-success btn-outline text-white" onclick="change.showModal()">Change Assignment</button>
                <dialog id="change" class="modal">
                    <div class="modal-box">
                        <h3 class="font-bold text-lg text-green-500">Confirmation!</h3>
                        <p class="py-4">Are you sure to save changes?</p>
                        <div class="modal-action">
                            <form method="dialog">
                                <button class="btn">Close</button>
                                <button class="btn btn-outline btn-success">Assign Counselors</button>
                            </form>
                        </div>
                    </div>
                </dialog>
            </div>
        </div>
    </div>