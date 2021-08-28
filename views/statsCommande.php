<!DOCTYPE html>

<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="">

        <script type="text/javascript" src="script.js"></script>
        <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    </head>
    <body>
        <div style="width: 50%">
        <canvas id="myChart"></canvas>
        </div>

        <script></script>

        <script>
            Chart.defaults.plugins.title.display = true;
            Chart.defaults.elements.point.radius = 20;
        </script> -->

    </body>
</html>

<script>

    const labels = [ //abscisse
  'January',
  'February',
  'March',
  'April',
  'May',
  'June',
  'aout',
];
const data = {
  labels: labels,
  datasets: [{
    label: 'Statistiques',
    backgroundColor: 'rgb(255, 99, 132)',
    borderColor: 'rgb(255, 99, 132)',
    data: [10, 5, 2, 20, 30, 45, 42], //ordonnée
    steppedLine: true
  }]
};
const config = {
  type: 'line',
  data: data,
  options: {
    title: {
        text: "stat"
    },
    elements: {
        point: {
            radius: 5,
            backgroundColor: 'rgb(0,0,255)'
        }
    }
  }
};
var myChart = new Chart(document.getElementById('myChart'),config);
</script>