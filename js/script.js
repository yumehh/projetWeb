// var test = window.prompt('votre prénom');
// console.log(test);

function choixAjoutGenre(formAjoutGenre){
    if(formAjoutGenre.ajoutgenre[0].checked){alert("vous avez choisi : " + formAjoutGenre.ajoutgenre[0].value)};
    if(formAjoutGenre.ajoutgenre[1].checked){alert("vous avez choisi : " + formAjoutGenre.ajoutgenre[1].value)};
}

function formsubmit(){
    var formulaire = document.getElementById('formAjoutGenre');
    formulaire.addEventListener('submit');
}