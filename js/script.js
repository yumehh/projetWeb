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
  formulaire.addEventListener('submit', verification);
}

// document.addEventListener('DOMContentLoaded', formsubmit); // attendre que le document soit chargé et ensuite event se déclenche

document.addEventListener('DOMContentLoaded', function() {
  var formulaire = document.getElementById('monform');
  formulaire.addEventListener('submit', verification);
});

let boutonRecherche = document.getElementById("boutonRecherche");
let sousMenu = document.getElementById("sousMenu");
boutonRecherche.addEventListener("click", () => {
  if(getComputedStyle(sousMenu).display != "none"){
    sousMenu.style.display = "none";
  }else{
    sousMenu.style.display = "block";
  }
})
