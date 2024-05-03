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
                    <td class="flex gap-2 justify-center"> <button class="btn btn-error p-0 btn-sm btn-square"> <img src=" {{URL('storage/assets/logout.png')}}" class="w-6 h-6" href="#">
                    <button class="btn btn-success p-0 btn-sm btn-square"> <img src=" {{URL('storage/assets/appoint.png')}}" class="w-6 h-6" href="#">
                </button></td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
