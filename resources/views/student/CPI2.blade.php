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
    @livewire('c-p-i-form')
    <div id="example" class="hidden">
        <footer class="flex justify-center items-center h-16 bg-slate-200">
            <span class="text-lg">
                © 2021 All Rights Reserved
            </span>
        </footer>
    </div>
</body>
<script>
    var currentTab = 0;
    showTab(currentTab);

    function showTab(n) {
        var submit = document.getElementById("next");
        var prev = document.getElementById("prev");
        var next = document.getElementById("next2");
        var x = document.getElementById("tab");
        if (x.children[currentTab].id === 'child') {
            x.children[currentTab].classList.remove("hidden");
            x.children[currentTab].classList.add("flex");
        }
        if (n == 0) {
            prev.disabled = true;
        } else {
            prev.disabled = false;
        }
        if (n === x.children.length - 2) {
            submit.classList.remove("hidden");
            submit.classList.add("flex");
            next.classList.add("hidden");
            next.classList.remove("flex");
        } else if (n >= 0) {
            next.classList.remove("hidden");
            next.classList.add("flex");
            submit.classList.add("hidden");
            submit.classList.remove("flex");
        }

    }
    var next = document.getElementById("next2");
    var prev = document.getElementById("prev");
    next.addEventListener("click", function() {
        var x = document.getElementById("tab");
        if (currentTab >= x.children.length - 2) {
            return false;
        }
        x.children[currentTab].classList.add("hidden");
        x.children[currentTab].classList.remove("flex");
        currentTab = currentTab + 1;
        showTab(currentTab);
    });
    prev.addEventListener("click", function() {
        var x = document.getElementById("tab");
        if (currentTab <= 0) {
            return false;
        }
        x.children[currentTab].classList.add("hidden");
        x.children[currentTab].classList.remove("flex");
        currentTab = currentTab - 1;
        showTab(currentTab);
    });
</script>

</html>