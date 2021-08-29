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

document.addEventListener('DOMContentLoaded', function() {
  var formulaire = document.getElementById('monform');
  formulaire.addEventListener('submit', verification);
});


function formAppear(){
  var togg1 = document.getElementById("bouton1");
  var d1 = document.getElementById("divBouton");
  togg1.addEventListener("submit", () => {
    if(getComputedStyle(d1).display != "none"){
      d1.style.display = "none";
    }else{
      d1.style.display = "block";
    }
  })
}

function valider(){
  frm=document.forms['pseudo'];
  if(frm.elements['pseudo'].value =""){
    return true;
  } else {
    alert("Manque le pseudo ! ");
    return false;
  }
}

document.getElementById("inscription").addEventListener("submit", function() {
  alert('Formulaire envoyé !')
});