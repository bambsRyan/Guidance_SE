<div class="border border-slate-300 w-full h-32 flex flex-col justify-center">
    <div class='flex justify-center'>
    <h1 class="bg-slate-200 border rounded text-center w-11/12">Scheduled Appointments</h1>
    </div>
    <div class="flex">
        <table class="table">
            <thead>
                <tr class="text-center">   
                    <td class="p-2">Appointment Date</td>
                    <td class="p-2">Appointment Time</td>
                    <td class="p-2">Appointment Type</td>
                    <td class="p-2">Counsellor</td>
                    <td></td>
                </tr>
                </tr>
                </tr>
            </thead>
            <tbody>
                <tr class="text-center">
                    <td class="p-2">2021-09-01</td>     
                    <td class="p-2">10:00</td>
                    <td class="p-2">Individual</td>
                    <td class="p-2">Dr. John Doe</td>
                    <td class="flex gap-2 justify-center"> <button class="btn btn-error p-0 btn-sm btn-square" onclick="my_modal_2.showModal()"> <img src=" {{URL('storage/assets/logout.png')}}" class="w-6 h-6" href="#"> </button>
                        <dialog id="my_modal_2" class="modal">
                            <div class="modal-box">
                                <h3 class="font-bold text-lg">Confirmation!</h3>
                                <p class="py-4">Are you sure to cancel the appointment on LAGAY MO DATE DITO PRE?</p>
                                <div class="modal-action">
                                    <form method="dialog">
                                        <button class="btn">Close</button>
                                    </form>
                                    <form method="dialog">
                                        <button class="btn btn-error">Cancel Appointment</button>
                                    </form>
                                </div>
                            </div>
                        </dialog>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>

