// var test = window.prompt('votre prénom');
// console.log(test);

function choixAjoutGenre(formAjoutGenre){
    if(formAjoutGenre.ajoutgenre[0].checked){alert("bonjour")};

}

function formsubmit(){
    var formulaire = document.getElementById('formAjoutGenre');
    formulaire.addEventListener('submit');
}