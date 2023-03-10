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
    }
    else{
        id.style.visibility ="hidden";
    }
}