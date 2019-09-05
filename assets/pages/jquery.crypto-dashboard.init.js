/**
 * Theme: Metrica - Responsive Bootstrap 4 Admin Dashboard
 * Author: Mannatthemes
 * Dashboard Js
 */

var ts2 = 1484418600000;
    var dates = [];    
    var spikes = [5, -5, 3, -3, 8, -8]
    for (var i = 0; i < 120; i++) {
      ts2 = ts2 + 86400000;
      var innerArr = [ts2, dataSeries[1][i].value];
      dates.push(innerArr)
    }


    var options = {
      chart: {
        type: 'area',
        stacked: false,
        height: 345,
        zoom: {
          type: 'x',
          enabled: true
        },
        toolbar: {
          show: false,
          autoSelected: 'zoom'
        }
      },
      colors: ['#4d79f6'],
      dataLabels: {
        enabled: false
      },
      series: [{
        name: 'Bitcoin',
        data: dates
      }],
      markers: {
        size: 0,
      },
      // title: {
      //   text: 'Stock Price Movement',
      //   align: 'left'
      // },
      fill: {
        type: 'gradient',
        gradient: {
          shadeIntensity: 1,
          inverseColors: true,
          opacityFrom: 0.5,
          opacityTo: 0,
          stops: [0, 90, 100]
        },
      },
      yaxis: {
        min: 20000000,
        max: 250000000,
        labels: {
          formatter: function (val) {
            return "$" + (val / 1000000).toFixed(0);
          },
        },
        title: {
          text: 'Price'
        },
      },
      xaxis: {
        type: 'datetime',
        axisBorder: {
          show: true,
          color: '#bec7e0',
        },  
        axisTicks: {
          show: true,
          color: '#bec7e0',
        },    
      },

      tooltip: {
        shared: false,
        y: {
          formatter: function (val) {
            return "$" + (val / 1000000).toFixed(0)
          }
        }
      }
    }

    var chart = new ApexCharts(
      document.querySelector("#crypto_dash_main"),
      options
    );

    chart.render();

