<div class="navbar bg-slate-200 flex">
                <div class="flex-1">
                    <img src=" {{URL('storage/assets/plm_logo.png')}}" class="w-10 h-10 md:h-12 md:w-12 sm:w-10 sm:h-10" href="#">
                    <img src=" {{URL('storage/assets/plm_name.png')}}" class="w-60 h-10 md:w-80 md:h-14 sm:w-60 sm:h-10" href="#">
                </div>
                <div 
                x-data="{open: false,
                toggle() {
                    this.open = this.open ? this.close() : true
                },
                close() {
                    this.open = false
                },
                }"
                @keydown.escape.prevent.stop="close()"
                class="mr-4">
                    <button 
                    type="button"   
                    @click="toggle()"
                    @click.outside="close()"
                    class="btn btn-circle">
                        <img class="w-10 h-10 rounded-full" src="{{ URL('storage/assets/icon.png')}}">
                    </button>
                        <ul 
                    x-show="open"
                    style="display:none;"
                    x-data="{name:'Joe Mezulla'}"
                    tabindex="-1" class="dropdown-content z-[1] menu p-2 shadow bg-base-100 rounded-box w-auto min-w-56 absolute end-5 top-16 border bodrer-slate-400">
                        <li class="text-base shadow-md mb-2 rounded-lg" tabindex="0"><a x-text="name"></a></li>
                        <hr class="mb-1 w-11/12 mx-auto"><hr class="mb-1 w-11/12 mx-auto">
                        <li class="text-base"><a>Dashboard</a></li>
                        <li class="text-base"><a>Logout</a></li>
                    </ul>
                </div>
            </div>