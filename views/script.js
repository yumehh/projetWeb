var person = prompt("Entrez votre prénom", "Exemple");
//rajouter des console.log()
console.log(person);
var sexe = confirm("Si vous êtes un homme, cliquez sur OK");
console.log(sexe);

var civilite;

if(sexe){
   civilite = "Monsieur";
}
else{
    civilite = "Madame";
}

document.getElementById("nom").innerHTML = "Bonjour " + civilite + " " + person + ". Comment allez-vous ?";
