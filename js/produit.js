function changeImage(element, lien, bc){
    document.getElementById(element).src = lien;
    document.getElementById(bc).style.backgroundImage = "url(" + lien + ")";
}


function zoomImg(e) {
    var zoomer = e.currentTarget;
    e.offsetX ? (offsetX = e.offsetX) : (offsetX = e.touches[0].pageX);
    e.offsetY ? (offsetY = e.offsetY) : (offsetX = e.touches[0].pageX);
    x = (offsetX / zoomer.offsetWidth) * 100;
    y = (offsetY / zoomer.offsetHeight) * 120;
    zoomer.style.backgroundPosition = x + "% " + y + "%";
}

function disparition(e, lien){
    var div = e.currentTarget;
    var img = document.getElementById(lien);
    img.style.opacity = "1";
    div.style.backgroundSize ="0";
}

function apparition(e, lien){
    var div = e.currentTarget;
    var img = document.getElementById(lien);
    img.style.transition ="opacity 0.5s";
    img.style.opacity ="0";
    div.style.backgroundRepeat ="no-repeat";
    div.style.backgroundSize = "550px";
}

function affStock(para){
    var id = document.getElementById(para);
    if(id.style.visibility === "hidden"){
        id.style.visibility = "visible";
        id.style.width = "20px";
    }
    else{
        id.style.visibility ="hidden";
        id.style.width = "0";
    }
}

function moins(para, m, p){
    var id = document.getElementById(para);
    var boutonM = document.getElementById(m);
    var boutonP = document.getElementById(p);
    if (id.value != 0){
        id.value = id.value-1;
        if(boutonP.style.visibility === "hidden"){
            boutonP.style.visibility = "visible";
        }
        if(id.value == 0){
            boutonM.style.visibility= "hidden";
        }
    }else{
        boutonM.style.visibility= "hidden";
    }
}

function plus(para, max, m, p){
    var quant = document.getElementById(max).textContent;
    var id = document.getElementById(para);
    var boutonM = document.getElementById(m);
    var boutonP = document.getElementById(p);
    if (parseInt(id.value) < parseInt(quant)){
        id.value = parseInt(id.value)+1;
        if (boutonM.style.visibility === "hidden"){
            boutonM.style.visibility = "visible";
        }
        if(id.value == parseInt(quant)){
            boutonP.style.visibility= "hidden";
        }
    }else{
        boutonP.style.visibility = "hidden";
    }
}
