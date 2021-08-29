// function verification(){
//   var recherche = document.getElementById("recherche");
//   console.log(recherche.value);
//   console.log(event.srcElement.q.value);
//   var regexEmpty = /^\s*$/;
//   var regex = /^[a-zA-Z\s]+$/
//   if(regexEmpty.test(recherche.value)){
//       alert('pas bien');
//       console.log(event.type);
//       event.preventDefault();
//   }
//   else if(!regex.test(recherche.value))
//   {
//       alert('toujours pas');
//       event.preventDefault();
//   }
// }


// function formsubmit(){
//   var formulaire = document.getElementById('monform');
//   formulaire.addEventListener('submit', verification); 
// }

// document.addEventListener('DOMContentLoaded', function() {
//   var formulaire = document.getElementById('monform');
//   formulaire.addEventListener('submit', verification);
// });


// function formAppear(){
//   var togg1 = document.getElementById("bouton1");
//   var d1 = document.getElementById("divBouton");
//   togg1.addEventListener("submit", () => {
//     if(getComputedStyle(d1).display != "none"){
//       d1.style.display = "none";
//     }else{
//       d1.style.display = "block";
//     }
//   })
// }

// function valider(){
//   frm=document.forms['pseudo'];
//   if(frm.elements['pseudo'].value =""){
//     return true;
//   } else {
//     alert("Manque le pseudo ! ");
//     return false;
//   }
// }

// document.addEventListener('DOMContentLoaded', function(e){
//   e.preventDefault();
//   form.addEventListener("submit", alert('BOUH'));


if( document.readyState !== 'loading' ) {
  console.log( 'document is already ready, just execute code here' );
  myInitCode();
} else {
  document.addEventListener('DOMContentLoaded', function () {
      console.log( 'document was not ready, place code here' );
      myInitCode();
  });
}

function myInitCode() {
  
  for (var i = 0; i < inputs.length; i++){
    if(!inputs[i].value){
      erreur = "Veuillez renseigner tous les champs";
    }
  }

  var inputs = document.getElementsByTagName("input");

  if(erreur){
    e.preventDefault();
    document.getElementById("erreur").innerHTML = erreur;
    return false;
  }else{
    alert("Formulaire envoyé!");
  }
}



