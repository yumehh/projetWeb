// function test(){
//   const labels = [ //abscisse
//     'January',
//     'February',
//     'March',
//     'April',
//     'May',
//     'June',
//     'aout',
//   ];
//   const data = {
//     labels: labels,
//     datasets: [{
//       label: 'Statistiques',
//       backgroundColor: 'rgb(255, 99, 132)',
//       borderColor: 'rgb(255, 99, 132)',
//       data: [10, 5, 2, 20, 30, 45, 42], //ordonnée
//       steppedLine: true
//     }]
//   };
//   const config = {
//     type: 'line',
//     data: data,
//     options: {
//       title: {
//           text: "stat"
//       },
//       elements: {
//           point: {
//               radius: 5,
//               backgroundColor: 'rgb(0,0,255)'
//           }
//       }
//     }
//   };
//   var myChart = new Chart(document.getElementById('myChart'),config);
// }

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
