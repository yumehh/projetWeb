function formDynamic(){
    
    document.getElementById("email2").addEventListener("input", function(){
    
    var paragrapheErreur = document.getElementById("erreur");

    if(this.value != document.getElementById("email").value){
        paragrapheErreur.innerHTML = "Les 2 emails ne correspondent pas";
    }else{
        paragrapheErreur.innerHTML = "";
    }
})
    document.forms["inscription"].addEventListener("submit", function(e){
    var erreur;
    var inputs = document.getElementById("inscription").getElementsByTagName("input");
    var inputs = this;

    for (var i = 0; i < inputs.length; i++){
        if(!inputs[i].value){
            erreur = "Veuillez renseigner tous les champs";
            break;
        }
    }
    if(erreur){
        e.preventDefault();
        document.getElementById("erreur").innerHTML = erreur;
        return false;
    } else {
        alert('Inscription confirmée ! ');
    }
})
}

