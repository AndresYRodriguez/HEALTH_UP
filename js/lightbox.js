const imagenes = document.querySelectorAll('.img-galeria')
const imageneslight = document.querySelector('.agregar-imagen')
const contenedorlight = document.querySelector('.imagen-light')
const hola1 = document.querySelector('.hola');

imagenes.forEach(imagen =>{
    imagen.addEventListener('click',()=>{
        aparecerimagen(imagen.getAttribute('src'))
    })
})
contenedorlight.addEventListener('click',(e)=>{
    if(e.target !== imageneslight){
        contenedorlight.classList.toggle('show')
        imageneslight.classList.toggle('show-image')
        hola1.style.opacity ='1';
    }
})
const aparecerimagen =(imagen)=>{
    imageneslight.src = imagen;
    contenedorlight.classList.toggle('show')
    imageneslight.classList.toggle('show-image')
    hola1.style.opacity ='0';
}