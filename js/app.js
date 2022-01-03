let btnLivres = document.getElementById("btnLivres");
let btnFournisseurs = document.getElementById("btnFournisseurs");
let btnCommandes = document.getElementById("btnCommandes");
let tabLivres = document.getElementById("tabLivres");
let tabFournisseurs = document.getElementById("tabFournisseurs");
let tabCommandes = document.getElementById("tabCommandes");

tabLivres.style.display= "none";
tabFournisseurs.style.display= "none";
tabCommandes.style.display= "none";

btnLivres.addEventListener("click", function(){
    tabLivres.style.display= "block";
    tabFournisseurs.style.display= "none";
    tabCommandes.style.display= "none";
})

btnFournisseurs.addEventListener("click", function(){
    tabLivres.style.display= "none";
    tabFournisseurs.style.display= "block";
    tabCommandes.style.display= "none";
})

btnCommandes.addEventListener("click", function(){
    tabLivres.style.display= "none";
    tabFournisseurs.style.display= "none";
    tabCommandes.style.display= "block";
})