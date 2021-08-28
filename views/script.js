function verification(){
  var recherche = document.getElementById("recherche");
  console.log(recherche.value);
  console.log(event.srcElement.q.value);
  var regexEmpty = /^\s*$/;
  var regex = /^[a-zA-Z\s]+$/
  if(regexEmpty.test(recherche.value)){
      alert('pas bien');
      console.log(event.type);
      event.preventDefault();
  }
  else if(!regex.test(recherche.value))
  {
      alert('toujours pas');
      event.preventDefault();
  }
}


function formsubmit(){
  var formulaire = document.getElementById('monform');
  formulaire.addEventListener('submit', verification); // mettre les parenthèses à la fonction fait que ca déclenche la fct et donc peut provoquer des erreurs 
}

// document.addEventListener('DOMContentLoaded', formsubmit); // attendre que le document soit chargé et ensuite event se déclenche

document.addEventListener('DOMContentLoaded', function() {
  var formulaire = document.getElementById('monform');
  formulaire.addEventListener('submit', verification);
}); //function anonyme : quand on est sur que l'on utilise que 1 fois. ET c'est la même chose que ce qui est juste au dessus.

let togg1 = document.getElementById("togg1");
let d1 = document.getElementById("d1");
togg1.addEventListener("click", () => {
  if(getComputedStyle(d1).display != "none"){
    d1.style.display = "none";
  } else {
    d1.style.display = "block";
  }
})
