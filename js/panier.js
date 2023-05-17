let toggleee = document.querySelector('.toggleee');
let panier = document.querySelector('.panier');
toggleee.onclick = function(){
    toggleee.classList.toggle('active')
    panier.classList.toggle('active')
}

function alerte(e){
    var bouton = document.getElementById('sauve');
    if (e == undefined){
        alert("Veuillez vous connecter avant de sauvegarder le panier.");
    }else{
        bouton.style.display = "block";
    }
}
function ajouterPanier(idImg, quant, e) {
    var quantite = document.getElementById(quant).value;
    if (quantite > 0){
        var prix = e.value;
        var nom = document.getElementById(idImg).alt;

        var ligne = document.createElement('hr');
        ligne.setAttribute('id', nom);

        var bouton = document.createElement('button');
        bouton.setAttribute('id', 'bouton' + nom);
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
        var nomLabel = document.createElement('label');
        nomLabel.textContent = nom;
        var nomInput = document.createElement('input');
        nomInput.type = 'text';
        nomInput.value = nom;
        nomInput.name = "nom[]";
        
        // Créer un nouvel élément img pour l'image de l'article
        var newImg = document.createElement('img');
        newImg.src = document.getElementById(idImg).src;
        var imgInput = document.createElement('input');
        imgInput.type='text';
        imgInput.value= newImg.src
        imgInput.name="img[]";  
        // Créer un nouveau span pour le prix et la quantité
        var prixQLabel = document.createElement('label');
        prixQLabel.textContent = prix + '€ - Quantité : ' + quantite;
        var prixInput = document.createElement('input');
        var quantInput = document.createElement('input');

        prixInput.type = 'text';
        prixInput.value = prix;
        prixInput.name = "prix[]";

        quantInput.type = 'text';
        quantInput.value = quantite;
        quantInput.name = "quant[]";
        // Ajouter les éléments à la div "panier"
        var panier = document.querySelector('.produitV');

        var cout = document.getElementById('prix');
        var tot = parseFloat(document.getElementById('prix').textContent, 10);
        divGlob.appendChild(newImg);
        divGlob.appendChild(imgInput);
        groupSpan.appendChild(nomLabel);
        groupSpan.appendChild(nomInput);
        groupSpan.appendChild(prixQLabel);
        groupSpan.appendChild(prixInput);
        groupSpan.appendChild(quantInput);
        divGlob.appendChild(groupSpan);
        bouton.appendChild(icon);
        divGlob.appendChild(bouton);
        newDiv.appendChild(divGlob);
        newDiv.appendChild(ligne);
        panier.appendChild(newDiv);
        cout.textContent = (quantite*prix+tot) + '€';
    }else{
        alert("Il faut plus que 0 quantité pour commander.");
    }
    
}

function supprimerPanier(idDiv, prix){
    var divSuppri = document.querySelector("#" + idDiv);
    var cout = document.getElementById('prix');
    var tot = parseFloat(document.getElementById('prix').textContent, 10);

    cout.textContent = (tot - prix) + '€';

    divSuppri.remove();
}