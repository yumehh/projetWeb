// var test = window.prompt('votre prénom');
// console.log(test);

const btn = document.querySelector('.btn');
const form = document.querySelector('form');
var txt = ['Modifier','Cacher'];
var bool = 1;


function choixAjoutGenre(formAjoutGenre){
    if(formAjoutGenre.ajoutgenre[0].checked){alert("bonjour")};

}

function formsubmit(){
    var formulaire = document.getElementById('formAjoutGenre');
    formulaire.addEventListener('submit');
}

btn.addEventListener('click', function(){
  form.classList.toggle('form__off');

  if(bool == 1){
	  btn.innerHTML = txt[1];
		bool = 0;  
  }else{
	  btn.innerHTML = txt[0];
		bool = 1;  
  }
  
});
