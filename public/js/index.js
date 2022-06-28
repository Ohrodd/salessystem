setTimeout(()=>{
    document.querySelector(".contenidoOculto1").classList.add("contenidoPortada");
    document.querySelector(".contenidoPortada").classList.remove("contenidoOculto1");
    setTimeout(()=>{
        document.querySelector('.contenidoOculto2').classList.remove("contenidoOculto2");
        document.querySelector('.contenidoOculto3').classList.remove("contenidoOculto3");
    },1000);
},1500);
