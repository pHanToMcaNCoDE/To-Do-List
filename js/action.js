// DOM for Form

let createList = document.querySelector('.createList');
let cancel = document.querySelector('#x');
let formBg = document.querySelector('.form');



// When the create list button is clicked

createList.addEventListener('click', () => {

    formBg.classList.add('active');
    formBg.style.transition = "all .5s";

});



// When the cancel icon is clicked

cancel.addEventListener('click', () =>{

    formBg.classList.remove('active');
    formBg.style.transition = "all .5s";
});

var icon = document.getElementById('icon');

icon.onclick = function(){
    document.body.classList.toggle("alternate");

    if(document.body.classList.contains("alternate")){
        icon.src = "assets/sun.png";
    }else{
        icon.src = "assets/moon.png";
    }
}