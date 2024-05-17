<div class="card h-full w-full bg-base-100 shadow-xl p-2 flex flex-col gap-2 justify-center" wire:ignore>
    <div>
        <h1 class="text-2xl bg-slate-300 p-2 border rounded-lg font-bold text-center">Statistics</h1>
    </div>
    <div class="w-full h-full flex gap-2">
        <div class="w-2/6 h-full bg-gray-200 rounded-xl p-2 flex flex-col justify-center">
        <div class="py-2">
            <h1 class="rounded m-2 p-2 text-center bg-slate-300"> By Gender</h1>
            <canvas id="gender" class="w-12 h-12"></canvas>
        </div>
        <div class="py-2">
            <h1 class="rounded m-2 p-2 text-center bg-slate-300"> By Accounts</h1>
            <canvas id="Account_type" class="w-12 h-12 "></canvas>
        </div>
    </div> 
    <div class="w-3/5 bg-gray-200 rounded-xl p-2 flex flex-col justify-center">
            <div class=" h-fit bg-gray-200 rounded-xl p-2 flex justify-center flex-col border-2">
            <h1 class="rounded m-2 p-2 text-center bg-slate-300"> By College</h1>
                <canvas id="colleges" class=""></canvas>
            </div>
    </div>
    </div>
</div>

@assets
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
@endassets

@script
<script>

    const ctx = document.getElementById('gender');
    const type = document.getElementById('Account_type');
    const college = document.getElementById('colleges');
    const gender = $wire.gender;
    const Account_type = $wire.Account_type;
    const colleges = $wire.colleges;
    new Chart(ctx, {
        type: 'doughnut',
        data: {
        labels:  gender.map(item=>item.Gender),
        datasets: [{
            data: gender.map(item=>item.Value),
            borderWidth: 1
        }]
        },
    });
    new Chart(type, {
        type: 'doughnut',
        data: {
            labels: Account_type.map(item=>item.Account_type),
            datasets: [{
                data: Account_type.map(item=>item.Value),
                backgroundColor: ['#6FD9CB', '#6FAED9'],
                borderWidth: 1  
            }]
        },
    });
    new Chart(college, {
        type: 'doughnut',
        data: {
            labels: colleges.map(item=>item.College),
            datasets: [{
                data: colleges.map(item=>item.Value),
                backgroundColor: ['#6FD9CB', '#6FAED9', '#4B0082', '#9338AC', '#9640FF', '#FFB44D', '#FFDB48', '#E3A501', '#A3A500', '#4D4D00'],
                borderWidth: 1
            }]
        },
    });
    
    </script>
@endscript