let toggle = document.querySelector('.toggle');
let menu = document.querySelector('.menu');
toggle.onclick = function(){
    toggle.classList.toggle('active')
    menu.classList.toggle('active')
}

let list = document.querySelectorAll('.list');
for (let i = 0; i < list.length; i++) {
    list[i].addEventListener('click', function() {
        let j = 0;
        while (j < list.length) {
            list[j++].className = 'list';
        }
        list[i].className = 'list active';
    });
}
