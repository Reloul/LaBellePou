let toggleee = document.querySelector('.toggleee');
let panier = document.querySelector('.panier');
toggleee.onclick = function(){
    toggleee.classList.toggle('active')
    panier.classList.toggle('active')
}


function ajouterPanier(idImg, quant, e) {
    var quantite = document.getElementById(quant).value;
    var prix = e.value;
    var nom = document.getElementById(idImg).alt;

    var ligne = document.createElement('hr');
    ligne.setAttribute('id', nom);

    var bouton = document.createElement('button');
    bouton.setAttribute('id', bouton + nom);
    bouton.setAttribute('onclick', "supprimerPanier('" + nom + quantite + "' , '" + (quantite * prix) + "')");
    
    var divGlob = document.createElement('div');
    divGlob.classList.add('global');

    var icon = document.createElement('ion-icon');
    icon.setAttribute('name','close-outline');

    // Créer un nouveau div pour l'article
    var newDiv = document.createElement('div');
    newDiv.classList.add('article');

    //Créer la div pour les span
    var groupSpan = document.createElement('div');
    groupSpan.classList.add('spanG');

    newDiv.setAttribute('id', nom + quantite);
    // Créer un nouveau span pour le nom de l'article
    var newSpan = document.createElement('span');
    newSpan.textContent = nom;
    
    // Créer un nouvel élément img pour l'image de l'article
    var newImg = document.createElement('img');
    newImg.src = document.getElementById(idImg).src;
    
    // Créer un nouveau span pour le prix et la quantité
    var newDetails = document.createElement('span');
    newDetails.textContent = prix + '€ - Quantité : ' + quantite;
    
    // Ajouter les éléments à la div "panier"
    var panier = document.querySelector('.produitV');

    var cout = document.getElementById('prix');
    var tot = parseFloat(document.getElementById('prix').textContent, 10);
    divGlob.appendChild(newImg);
    groupSpan.appendChild(newSpan);
    groupSpan.appendChild(newDetails);
    divGlob.appendChild(groupSpan);
    bouton.appendChild(icon);
    divGlob.appendChild(bouton);
    newDiv.appendChild(divGlob);
    newDiv.appendChild(ligne);
    panier.appendChild(newDiv);
    cout.textContent = (quantite*prix+tot) + '€';
}

function supprimerPanier(idDiv, prix){
    var divSuppri = document.querySelector("#" + idDiv);
    var cout = document.getElementById('prix');
    var tot = parseFloat(document.getElementById('prix').textContent, 10);

    cout.textContent = (tot - prix) + '€';

    divSuppri.remove();
}