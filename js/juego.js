//inicio
let tarjetasDestapadas = 0;
let tarjeta1 = null;
let tarjeta2 = null;
let primerResultado = null;
let segundoResultado = null;
let movimientos = 0;
let aciertos = 0;
let temporizador = false;
let timer = 60;
let tiempoRegresivoid = null;
let timerinicial = 30;

let mostrarMovimientos = document.getElementById('movimientos')
let mostrarAcieros = document.getElementById('aciertos');
let mostrartiempo = document.getElementById('t-restante');
//numeros aleatorios
let numeros = [1,1,2,2,3,3,4,4,5,5,6,6,7,7,8,8];
numeros = numeros.sort(()=>{return Math.random()-0.5});
console.log(numeros);
//funciones
function contratiempo(){
    tiempoRegresivoid = setInterval(()=>{
    timer--;
    mostrartiempo.innerHTML = `tiempo: ${timer} segundos`;
    if(timer == 0){
        clearInterval(tiempoRegresivoid);
        bloqueartarjetas();
    }
    },1000)
}

function bloqueartarjetas(){
    for (let i = 0; i<=15; i++){
        let tarjetaBloqueada = document.getElementById(i)
        tarjetaBloqueada.innerHTML = numeros[i];
        tarjetaBloqueada.disabled = true;
    }
}
//principal
function destapar(id){
   
    if(temporizador == false){
        contratiempo();
        temporizador = true;
    }

tarjetasDestapadas++;
console.log(tarjetasDestapadas)

if(tarjetasDestapadas == 1){
 
 //mostrar primer numero
 tarjeta1 = document.getElementById(id);
 primerResultado = numeros[id]
 tarjeta1.innerHTML = numeros[id];

 //bloqueo de boton
 tarjeta1.disabled = true;
}else if(tarjetasDestapadas ==2){
 //mostrar primer numero
 tarjeta2 = document.getElementById(id);
 segundoResultado = numeros[id];
 tarjeta2.innerHTML = segundoResultado;
 
 //bloqueo de boton
 tarjeta2.disabled = true;

 //aumento de movimientos
 movimientos++;
 mostrarMovimientos.innerHTML = `movimientos: ${movimientos}`;

 if(primerResultado == segundoResultado){
    
    tarjetasDestapadas = 0;

    //Aciertos
    aciertos++;
    mostrarAcieros.innerHTML = `Aciertos: ${aciertos}`;
    if(aciertos == 8){
        clearInterval(tiempoRegresivoid);
        mostrarAcieros.innerHTML = `Aciertos: ${aciertos} 🙀`
        mostrartiempo.innerHTML = `Fantastico 🎉🥳 solo tardaste ${timerinicial - timer} segundos` 
        mostrarMovimientos.innerHTML = `movimientos: ${movimientos} 😎🤟`
    }
}else{
    //mostrar y volver a tapar
    setTimeout(()=>{
        tarjeta1.innerHTML = ``;
        tarjeta2.innerHTML = ``;
        tarjeta1.disabled = false; 
        tarjeta2.disabled = false;
        tarjetasDestapadas = 0;
    },800);
 }
}
}