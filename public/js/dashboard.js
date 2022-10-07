/* globals Chart:false, feather:false */

(() => {
  'use strict'

  feather.replace({ 'aria-hidden': 'true' })
          // PIE 1
  // Graphs
  const ctx1 = document.getElementById('pie1')
  // eslint-disable-next-line no-unused-vars
  const myChart1 = new Chart(ctx1, {
    type: 'pie',
    data: {
      labels: [
        'Sunday',
        'Monday',
        'Tuesday'
      ],
      datasets: [{
        data: [
          15339,
          21345,
          18483

        ],
        lineTension: 0,
        backgroundColor: [
          'rgb(255,99,132)',
          'rgb(54,162,235)',
          'rgb(180,205,86)'
        ],
       
      }]
    },
    options: {
      
      legend: {
        display: true
      }
    }
  })
          // PIE 2
  // Graphs
  const ctx2 = document.getElementById('pie2')
  // eslint-disable-next-line no-unused-vars
  const myChart2 = new Chart(ctx2, {
    type: 'pie',
    data: {
      labels: [
        'Sunday',
        'Monday',
        'Tuesday'
      ],
      datasets: [{
        data: [
          15339,
          21345,
          18483

        ],
        lineTension: 0,
        backgroundColor: [
          'rgb(255,99,132)',
          'rgb(54,162,235)',
          'rgb(180,205,86)'
        ],
       
      }]
    },
    options: {
      
      legend: {
        display: true
      }
    }
  })
     // PIE 3
  // Graphs
  const ctx3 = document.getElementById('pie3')
  // eslint-disable-next-line no-unused-vars
  const myChart3 = new Chart(ctx3, {
    type: 'pie',
    data: {
      labels: [
        'Sunday',
        'Monday',
        'Tuesday'
      ],
      datasets: [{
        data: [
          15339,
          21345,
          18483

        ],
        lineTension: 0,
        backgroundColor: [
          'rgb(255,99,132)',
          'rgb(54,162,235)',
          'rgb(180,205,86)'
        ],
       
      }]
    },
    options: {
      
      legend: {
        display: true
      }
    }
  })
    //  RADAR 
// Graphs
const ctx = document.getElementById('radar1')
// eslint-disable-next-line no-unused-vars
const myChart = new Chart(ctx, {
  type: 'radar',
  data: {
    labels: [
      'Eating',
      'Drinking',
      'Sleeping',
      'Designing',
      'Coding',
      'Cycling',
      'Running'
    ],
    datasets: [{
      label: 'My First Dataset',
      data: [65, 59, 90, 81, 56, 55, 40],
      fill: true,
      backgroundColor: 'rgba(255, 99, 132, 0.2)',
      borderColor: 'rgb(255, 99, 132)',
      pointBackgroundColor: 'rgb(255, 99, 132)',
      pointBorderColor: '#fff',
      pointHoverBackgroundColor: '#fff',
      pointHoverBorderColor: 'rgb(255, 99, 132)'
    }, {
      label: 'My Second Dataset',
      data: [28, 48, 40, 19, 96, 27, 100],
      fill: true,
      backgroundColor: 'rgba(54, 162, 235, 0.2)',
      borderColor: 'rgb(54, 162, 235)',
      pointBackgroundColor: 'rgb(54, 162, 235)',
      pointBorderColor: '#fff',
      pointHoverBackgroundColor: '#fff',
      pointHoverBorderColor: 'rgb(54, 162, 235)'
    }]
  },
  options: {
  
    legend: {
      display: false
    }
  }
})
         
  
      

})()
// ICONS
help-circle.replace()
bar-chart.replace()
log-out.replace()


// (() => {
//   'use strict'

//   feather.replace({ 'aria-hidden': 'true' })

//   // Graphs
//   const ctx = document.getElementById('myChart')
//   // eslint-disable-next-line no-unused-vars
//   const myChart = new Chart(ctx, {
//     type: 'pie',
//     data: {
//       labels: [
//         'Sunday',
//         'Monday',
//         'Tuesday'
//       ],
//       datasets: [{
//         data: [
//           15339,
//           21345,
//           18483

//         ],
//         lineTension: 0,
//         backgroundColor: [
//           'rgb(255,99,132)',
//           'rgb(54,162,235)',
//           'rgb(180,205,86)'
//         ],
       
//       }]
//     },
//     options: {
//       scales: {
//         yAxes: [{
//           ticks: {
//             beginAtZero: false
//           }
//         }]
//       },
//       legend: {
//         display: true
//       }
//     }
//   })
// })()