
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
        @vite('resources/css/app.css')
        @vite('resources/js/app.js')
    </head>
    <body class="font-sans antialiased">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <div class="h-screen w-screen flex flex-col">
            @livewire('Topnavbar')
            <div class="flex-1 flex gap-1">
                @livewire('sidenavbar')
                <div class="w-full p-6 flex flex-col">
                    <h1 class="text-2xl bg-slate-300 p-2 border rounded-lg font-bold">Counsellor Dashboard</h1>
                    <div class="flex gap-2 justify-center">  
                    <div class="stats shadow w-1/5 border my-7 ">  
                        <div class="stat flex flex-col text-center">
                            <div class="stat-title">Total Appointments Completed</div>
                            <div class="stat-value">89,400</div>
                            <div class="stat-desc">21% more than last month</div>
                        </div>
                    </div>
                    <div class="stats shadow w-1/5 border my-7 ">  
                        <div class="stat flex flex-col text-center">
                            <div class="stat-title">Total Appointments Completed</div>
                            <div class="stat-value">89,400</div>
                            <div class="stat-desc">21% more than last month</div>
                        </div>
                    </div>
                    <div class="stats shadow w-1/5 border my-7 ">  
                        <div class="stat flex flex-col text-center">
                            <div class="stat-title">Total Appointments Completed</div>
                            <div class="stat-value">89,400</div>
                            <div class="stat-desc">21% more than last month</div>
                        </div>
                    </div>
                    </div>
                    <div class="w-72 h-72 ">
                        <div>
                            <h1 class="text-md font-normal p-2 text-center">
                                Girls/Boys Ratio
                            </h1>
                        </div>
                        <canvas id="myChart"></canvas> 
                    </div>
                </div>
            </div>
        </div>
    </body> 
    <script>
  const ctx = document.getElementById('myChart');

  new Chart(ctx, {
    type: 'pie',
    data: {
      labels: ['Girls', 'Boys'],
      datasets: [{
        label: '# of Votes',
        data: [12, 19],
        borderWidth: 2
      }]
    },

  });
</script>
</html> 