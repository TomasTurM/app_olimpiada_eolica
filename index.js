var Chart = require('chart.js');

fetch('https://randomuser.me/api/')
.then(response => response.json())
.then(json => res = json)

var ctx = document.getElementById('canvas');

var myChart = new Chart(ctx, {

    type: 'line',
    
    data: {
        labels: ['i', 'wd', 'ws', 'r'],
        datasets: [{
            label: 'Grafico de linea',
            data: [0, 10, 5, 2, 20, 30, 45]
        }]
    },

    options: {}
});