
//document = objeto 
//Método getElementById => retorna um objeto
function fecharMenu(){
    document.getElementById("categorias").style.display = "none";
    document.getElementById("layer").style.display = "none";
    document.body.style.overflowY = "scroll";
}
function abrirMenu(){
    document.getElementById("categorias").style.display = "block";
    document.getElementById("layer").style.display = "block";
    document.body.style.overflowY = "hidden";
}
document.getElementById("menu").addEventListener("click", function(){
    abrirMenu();
});

document.getElementById("closeicon").addEventListener("click", function(){
    fecharMenu();
})
document.getElementById("layer").addEventListener("click", function(){
    fecharMenu();
})

/*
var elemento = document.getElementById("botao");
elemento.onclick = function(){
    alert("Mensagem do alerta");
}
elemento.onmouseup = function(){
    alert("Segurando o clique");
} 
elemento.onmousedown = function(){
    alert("Soltando o clique");
}
elemento.onmouseover = function (){
    alert("Passando o mouse");
}
object.addEventListener("mousedown", myScript);
*/
