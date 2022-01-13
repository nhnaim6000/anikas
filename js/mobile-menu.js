let menu_bars = document.getElementById('menu-bar');

let mobile_menu = document.getElementById('menu-show');

let menu_hide = document.getElementById('menu-hide');



menu_bars.addEventListener("click", function(){
    mobile_menu.style.width = '50%';
    menu_hide.style.display = "block";
});

menu_hide.addEventListener('click', () => {
    mobile_menu.style.width = '0%';
    menu_hide.style.display = "none";
});

function hide_menu(){
    mobile_menu.style.width = '0%';
    menu_hide.style.display = "none";
}