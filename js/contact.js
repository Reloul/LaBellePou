document.getElementById("submit").onclick = function() {Verif()};
function Verif() {
    event.preventDefault();
    VerifEmail();
    VerifPrenom();
    VerifNom();
}
function VerifEmail() {
    let email = document.getElementById("email").value;
    if (email.match(/^[a-z0-9._-]+@[a-z0-9._-]{2,}\.[a-z]{2,4}$/) == null) {
        document.getElementById("email").style.backgroundColor = "#ff6e6b";
        document.getElementById("emailexe").innerHTML = "⚠️ Veuillez entrer une adresse email valide (exemple@fauxEmail.fr) ⚠️";

    } else {
        document.getElementById("email").style.backgroundColor = "white";
        document.getElementById("emailexe").innerHTML = "";
    }
}
function VerifPrenom() {
    let prenom = document.getElementById("prenom").value;
    if (prenom.match(/^[a-zA-Z]+$/) == null) {
        document.getElementById("prenom").style.backgroundColor = "#ff6e6b";
        document.getElementById("prenomverif").innerHTML = "⚠️ Veuillez entrer un prénom valide ⚠️";
    } else {
        document.getElementById("prenom").style.backgroundColor = "white";
        document.getElementById("prenomverif").innerHTML = "";
    }
}

function VerifNom() {
    let nom = document.getElementById("nom").value;
    if (nom.match(/^[a-zA-Z]+$/) == null) {
        document.getElementById("nom").style.backgroundColor = "#ff6e6b";
        document.getElementById("nomverif").innerHTML = "⚠️ Veuillez entrer un nom valide ⚠️";
    } else {
        document.getElementById("nom").style.backgroundColor = "white";
        document.getElementById("nomverif").innerHTML = "";
    }
}