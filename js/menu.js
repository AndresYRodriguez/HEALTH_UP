const hola = document.querySelector('.hola');
const menu = document.querySelector('.menu-navegacion');

//console.log(menu)
//console.log(hola)

hola.addEventListener('click',()=>{
    menu.classList.toggle("spread")
})

window.addEventListener('click',e=>{
    if(menu.classList.contains('spread')
    && e.target !=menu && e.target !=hola ){
        menu.classList.toggle("spread")
    }
})