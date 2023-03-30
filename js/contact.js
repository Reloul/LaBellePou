document.getElementById("submit").onclick = function() {Verif()};
function Verif() {
    event.preventDefault();
    VerifEmail();
    VerifPrenom();
    VerifNom();
    VerifDate();
    VerifMessage();
    VerifDateNaiss();
}
function VerifEmail() {
    let email = document.getElementById("email").value;
    if (email.match(/^[a-z0-9._-]+@[a-z0-9._-]{2,}\.[a-z]{2,4}$/) == null) {
        document.getElementById("email").style.backgroundColor = "#ff6e6b";
        document.getElementById("emailexe").innerHTML = "⚠️ Veuillez entrer une adresse email valide (exemple@email.fr) ⚠️";

    } else {
        document.getElementById("email").style.backgroundColor = "white";
        document.getElementById("emailexe").innerHTML = "";
    }
}
function VerifPrenom() {
    let prenom = document.getElementById("prenom").value;
    if (prenom.match(/^[a-zA-Z-]+$/) == null) {
        document.getElementById("prenom").style.backgroundColor = "#ff6e6b";
        document.getElementById("prenomverif").innerHTML = "⚠️ Veuillez entrer un prénom valide ⚠️";
    } else {
        document.getElementById("prenom").style.backgroundColor = "white";
        document.getElementById("prenomverif").innerHTML = "";
    }
}

function VerifNom() {
    let nom = document.getElementById("nom").value;
    if (nom.match(/^[a-zA-Z-]+$/) == null) {
        document.getElementById("nom").style.backgroundColor = "#ff6e6b";
        document.getElementById("nomverif").innerHTML = "⚠️ Veuillez entrer un nom valide ⚠️";
    } else {
        document.getElementById("nom").style.backgroundColor = "white";
        document.getElementById("nomverif").innerHTML = "";
    }
}

function VerifDate(){
    let date = document.getElementById("dateC").value;
    let dateJour = new Date().toLocaleDateString();
    dateJour = formatDate(dateJour);
    if(date != dateJour){
        document.getElementById("dateC").style.backgroundColor = "#ff6e6b";
        document.getElementById("dateverif").innerHTML = "⚠️ Veuillez rentrer la date du jour ⚠️";
    }else{
        document.getElementById("dateC").style.backgroundColor = "white";
        document.getElementById("dateverif").innerHTML = "";
    }
}

function formatDate(date) {
    var d = new Date(date),
        month = '' + (d.getMonth() + 1),
        day = '' + d.getDate(),
        year = d.getFullYear();

    if (month.length < 2) 
        month = '0' + month;
    if (day.length < 2) 
        day = '0' + day;

    return [year, month, day].join('-');
}


function VerifMessage(){
    let mess = document.getElementById("mess").value;
    if (mess === ""){
        document.getElementById("mess").style.backgroundColor = "#ff6e6b";
        document.getElementById("messverif").innerHTML = "⚠️ Veuillez entrer la raison de vote contact ⚠️";
    } else{
        document.getElementById("mess").style.backgroundColor = "white";
        document.getElementById("messverif").innerHTML = "";
    }
}

function VerifDateNaiss(){
    let date = document.getElementById("dateN").value;
    let dateJour = new Date().toLocaleDateString();
    dateJour = formatDate(dateJour);
    if(date === dateJour || date === "" || date > dateJour){
        document.getElementById("dateN").style.backgroundColor = "#ff6e6b";
        document.getElementById("verifnaiss").innerHTML = "⚠️ Veuillez rentrez votre date de naissance ⚠️";
    }else{
        document.getElementById("dateN").style.backgroundColor = "white";
        document.getElementById("verifnaiss").innerHTML = "";
    }
}