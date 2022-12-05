<div>
    <div class=" bg-pink-400 flex flex-col p-5  h-96 m-5 absolute rounded-xl">
        <nav id="button" x-data="{ open: false }" class="text-left">
            <button  class="text-gray-500 w-10 h-10 relative rounded focus:outline-none bg-white" @click="open = !open">
                <span class="sr-only">Open main menu</span>
                <div class="block w-5 absolute left-1/2 top-1/2   transform  -translate-x-1/2 -translate-y-1/2">
                    <span aria-hidden="true" class="block absolute h-0.5 w-5 bg-current transform transition duration-500 ease-in-out" :class="{'rotate-45': open,' -translate-y-1.5': !open }"></span>
                    <span aria-hidden="true" class="block absolute  h-0.5 w-5 bg-current   transform transition duration-500 ease-in-out" :class="{'opacity-0': open } "></span>
                    <span aria-hidden="true" class="block absolute  h-0.5 w-5 bg-current transform  transition duration-500 ease-in-out" :class="{'-rotate-45': open, ' translate-y-1.5': !open}"></span>
                </div>
            </button>
        </nav>
        <div class="hidden m-2" id="target">
            <div  class="ml-6">
                <ul class="underline">
                    <li>1</li>
                    <li>2</li>
                    <li>3</li>
                </ul>
            </div>
        </div>
    </div>
</div>
<script>

    var button = document.getElementById("button");
    var target = document.getElementById("target");

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
