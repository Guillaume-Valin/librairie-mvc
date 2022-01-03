var btnLivres = document.getElementById("btnLivres");
let btnFournisseurs = document.getElementById("btnFournisseurs");
let btnCommandes = document.getElementById("btnCommandes");
let formLivres = document.getElementById("formLivres");
let formFournisseurs = document.getElementById("formFournisseurs");
let formCommandes = document.getElementById("formCommandes");

formLivres.style.display= "none";
formFournisseurs.style.display= "none";
// formCommandes.style.display= "none";

btnLivres.addEventListener("click", function(){
    formLivres.style.display= "block";
    formFournisseurs.style.display= "none";
    formCommandes.style.display= "none";
})

btnFournisseurs.addEventListener("click", function(){
    formLivres.style.display= "none";
    formFournisseurs.style.display= "block";
    formCommandes.style.display= "none";
})

// btnCommandes.addEventListener("click", function(){
//     formLivres.style.display= "none";
//     formFournisseurs.style.display= "none";
//     formCommandes.style.display= "block";
// })