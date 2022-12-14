import './bootstrap';

import Alpine from 'alpinejs';

window.Alpine = Alpine;

Alpine.start();

/*------------------------------------------SideNav------------------------------*/
document.getElementById("expand").addEventListener("click",expand);
function expand(){
    document.getElementById('nav').classList.toggle('!w-40');
    document.getElementById('navText1').classList.toggle('hidden');
    document.getElementById('navText2').classList.toggle('hidden');
    document.getElementById('navText3').classList.toggle('hidden');
    document.getElementById('navText4').classList.toggle('hidden');
    document.getElementById('navText5').classList.toggle('hidden');
}
