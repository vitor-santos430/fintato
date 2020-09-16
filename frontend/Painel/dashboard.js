/* globals Chart:false, feather:false */

(function () {
    'use strict'
  
    feather.replace()
  
    // Graphs
    var ctx = document.getElementById('myChart')
    // eslint-disable-next-line no-unused-vars
    var myChart = new Chart(ctx, {
      type: 'bar',
      data: {
        labels: [
          'Despesas/Gastos',
          'Receitas',
          'Lucro Líquido',
        ],
        datasets: [{
          data: [
            15339,
            16345,
            14483
          ],
          backgroundColor: 'transparent',
          borderColor: ['#007bff','#007b0f','#FF0000'],
          borderWidth: 4,
        }]
      },
      options: {
        scales: {
          yAxes: [{
            ticks: {
              beginAtZero: false
            }
          }]
        },
        legend: {
          display: false
        }
      }
    })
  }())