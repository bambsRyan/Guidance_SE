<div class="card h-full w-full bg-base-100 shadow-xl">
    <h1 class="text-2xl bg-slate-300 p-2 border rounded-lg font-bold text-center">Counsellor Dashboard</h1>
    <div class="flex w-full h-full">  
        <div class=" w-full items-center flex flex-col">
            <div class="stats shadow w-fit my-3 bg-gradient-to-r from-indigo-400 to-blue-700 h-60">  
                <div class="stat items-center">
                    <div class="stat-figure text-secondary ">
                        <img  class="w-12 h-12"src="storage/assets/completed.png"/>
                    </div>
                    <div class="stat-title text-indisgo-950">Appointments Completed this Month</div>
                    <div class="stat-value w-full text-indigo-950">31K</div>
                    <div class="stat-desc w-full text-indigo-950">Jan 1st - Feb 1st</div>
                    <div class="w-full "><a href="/head_history"><button class="btn btn-outline btn-ghost btn-sm h-10 mt-2">See History</button></a></div>
                </div>
                <div class="stat">
                    <div class="stat-figure text-secondary">
                        <img class="w-12 h-12"src="storage/assets/calendar.png"/>
                    </div>
                    <div class="stat-title text-indigo-950">Appointments this Day</div>
                    <div class="stat-value w-full text-indigo-950">31K</div>
                    <div class="stat-desc w-full text-indigo-950">Lagay mo pre date today</div>
                    <div class="w-full "><a href="/head_appointment"><button class="btn btn-outline btn-ghost btn-sm h-10 mt-2">See Appointments</button></a></div>
                </div>
            </div>
            <div class="card h-full w-full bg-base-100 shadow-xl">
                <div class="card-body flex-col h-24 p-5 gap-4 items-center">
                    <div class="scroll-container overflow-x-auto w-full rounded-lg h-fit">
                        <h1 class="w-full text-center items-center bg-slate-400 p-2 text-md">
                            Appointments Today
                        </h1>
                        <table class="table table-pin-rows">
                            <thead>
                                <tr class="bg-neutral-300 text-indigo-900 text-sm text-center">
                                    <th>Name</th>
                                    <th>Date</th>
                                    <th>Time</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="text-center">
                                    <td>Jone Doe</td>
                                    <td>2021-09-01</td>
                                    <td>10:00 AM</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="w-full h-full">
            @livewire('stats')
        </div>
    </div>
</div>
