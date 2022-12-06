<div>
    <div class=" bg-gray-200 flex flex-col p-3  h-screen m-5 absolute rounded-xl">
        <nav id="button" x-data="{ open: false }" class="text-right">
            <button  class="text-gray-500 w-10 h-10 relative rounded focus:outline-none bg-white" @click="open = !open">
                <div class="block w-5 absolute left-1/2 top-1/2   transform  -translate-x-1/2 -translate-y-1/2">
                    <span aria-hidden="true" class="block absolute h-0.5 w-5 bg-current transform transition duration-500 ease-in-out" :class="{'rotate-45': open,' -translate-y-1.5': !open }"></span>
                    <span aria-hidden="true" class="block absolute  h-0.5 w-5 bg-current   transform transition duration-500 ease-in-out" :class="{'opacity-0': open } "></span>
                    <span aria-hidden="true" class="block absolute  h-0.5 w-5 bg-current transform  transition duration-500 ease-in-out" :class="{'-rotate-45': open, ' translate-y-1.5': !open}"></span>
                </div>
            </button>
        </nav>

        <div class=" flex flex-col items-center py-6 gap-6 fa-2xl">
            <div class="flex flex-row">
                <i class=" fa-regular fa-calendar "></i>
                <div class="hidden target" >
                    <div class=" flex flex-row  text-sm">
                        Calender
                    </div>
                </div>
            </div>
            <div class="flex flex-row">
                <i class="fa-regular fa-clock"></i>
                <div class="hidden target" >
                    <div class=" flex flex-row  text-sm">
                        Clock
                    </div>
                </div>
            </div>
            <div class="flex flex-row">
                <i class="fa-solid fa-users"></i>
                <div class="hidden target">
                    <div class=" flex flex-row  text-sm">
                        Users
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    var button = document.getElementById("button");
    var target = document.getElementsByClassName("target");

    button.onclick = function() { show(target); };

    function hide(target) {
        target.style.display = "none";
        button.onclick = function() { show(target); };
    }

    function show(target) {
        target.style.display = "block";
        button.onclick = function() { hide(target); };
    }
</script>
