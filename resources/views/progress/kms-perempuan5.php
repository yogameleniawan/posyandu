<script>
// Set new default font family and font color to mimic Bootstrap's default styling
Chart.defaults.global.defaultFontFamily = 'Nunito', '-apple-system,system-ui,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif';
Chart.defaults.global.defaultFontColor = '#858796';

function number_format(number, decimals, dec_point, thousands_sep) {
  // *     example: number_format(1234.56, 2, ',', ' ');
  // *     return: '1 234,56'
  number = (number + '').replace(',', '').replace(' ', '');
  var n = !isFinite(+number) ? 0 : +number,
    prec = !isFinite(+decimals) ? 0 : Math.abs(decimals),
    sep = (typeof thousands_sep === 'undefined') ? '.' : thousands_sep,
    dec = (typeof dec_point === 'undefined') ? ',' : dec_point,
    s = '',
    toFixedFix = function(n, prec) {
      var k = Math.pow(10, prec);
      return '' + Math.round(n * k) / k;
    };
  // Fix for IE parseFloat(0.55).toFixed(0) = 0;
  s = (prec ? toFixedFix(n, prec) : '' + Math.round(n)).split('.');
  if (s[0].length > 3) {
    s[0] = s[0].replace(/\B(?=(?:\d{3})+(?!\d))/g, sep);
  }
  if ((s[1] || '').length < prec) {
    s[1] = s[1] || '';
    s[1] += new Array(prec - s[1].length + 1).join('0');
  }
  return s.join(dec);
}

// Area Chart Example
var ctx = document.getElementById("myAreaChart");
var myLineChart = new Chart(ctx, {
  type: 'line',
  data: {
    labels: ["48 Bulan", "49 Bulan", "50 Bulan", "51 Bulan", "52 Bulan", "53 Bulan", "54 Bulan", "55 Bulan", "56 Bulan", "57 Bulan", "58 Bulan", "59 Bulan", "60 Bulan"],
    datasets: [
      {
      label: "Berat bayi",
      lineTension: 0.3,
      backgroundColor: "rgba(78, 115, 223, 0.025)",
      borderColor: "rgba(78, 115, 223, 1)",
      pointRadius: 3,
      pointBackgroundColor: "rgba(78, 115, 223, 1)",
      pointBorderColor: "rgba(78, 115, 223, 1)",
      pointHoverRadius: 3,
      pointHoverBackgroundColor: "rgba(78, 115, 223, 1)",
      pointHoverBorderColor: "rgba(78, 115, 223, 1)",
      pointHitRadius: 10,
      pointBorderWidth: 2,
      data: [<?= $dtProgress[48]; ?>, <?= $dtProgress[49]; ?>, <?= $dtProgress[50]; ?>, <?= $dtProgress[51]; ?>, <?= $dtProgress[52]; ?>, <?= $dtProgress[53]; ?>, <?= $dtProgress[54]; ?>, <?= $dtProgress[55]; ?>, <?= $dtProgress[56]; ?>, <?= $dtProgress[57]; ?>, <?= $dtProgress[58]; ?>, <?= $dtProgress[59]; ?>, <?= $dtProgress[60]; ?>],
      },
      {
      label: "Terlalu Gemuk",
      lineTension: 0.3,
      backgroundColor: "rgba(78, 115, 223, 0)",
      borderColor: "rgba(231,74,59,0.2)",
      pointRadius: 0,
      pointBackgroundColor: "rgba(231,74,59,0.2)",
      pointBorderColor: "rgba(231,74,59,0.2)",
      pointHoverRadius: 3,
      pointHoverBackgroundColor: "rgba(231,74,59,0.2)",
      pointHoverBorderColor: "rgba(231,74,59,0.2)",
      pointHitRadius: 10,
      pointBorderWidth: 1,
      data: [21.5, 21.8, 22.1, 22.4, 22.65, 22.95, 23.2, 23.5, 23.8, 24.1, 24.35, 24.65, 24.9],
      },
      {
      label: "Batas Ideal Atas",
      lineTension: 0.3,
      backgroundColor: "rgba(78, 115, 223, 0)",
      borderColor: "rgba(246,194,62,0.2)",
      pointRadius: 0,
      pointBackgroundColor: "rgba(246,194,62,0.2)",
      pointBorderColor: "rgba(246,194,62,0.2)",
      pointHoverRadius: 3,
      pointHoverBackgroundColor: "rgba(246,194,62,0.2)",
      pointHoverBorderColor: "rgba(246,194,62,0.2)",
      pointHitRadius: 10,
      pointBorderWidth: 1,
      data: [18.5, 18.7, 19, 19.2, 19.4, 19.65, 19.85, 20.1, 20.3, 20.5, 20.75, 21, 21.2],
      },
      {
      label: "Ideal",
      lineTension: 0.3,
      backgroundColor: "rgba(78, 115, 223, 0)",
      borderColor: "rgba(54,185,204,0.2)",
      pointRadius: 0,
      pointBackgroundColor: "rgba(54,185,204,0.2)",
      pointBorderColor: "rgba(54,185,204,0.2)",
      pointHoverRadius: 3,
      pointHoverBackgroundColor: "rgba(54,185,204,0.2)",
      pointHoverBorderColor: "rgba(54,185,204,0.2)",
      pointHitRadius: 10,
      pointBorderWidth: 1,
      data: [16.1, 16.25, 16.4, 16.65, 16.8, 17, 17.15, 17.3, 17.5, 17.7, 17.9, 18.05, 18.2],
      },
      {
      label: "Batas Ideal Bawah",
      lineTension: 0.3,
      backgroundColor: "rgba(78, 115, 223, 0)",
      borderColor: "rgba(246,194,62,0.2)",
      pointRadius: 0,
      pointBackgroundColor: "rgba(246,194,62,0.2)",
      pointBorderColor: "rgba(246,194,62,0.2)",
      pointHoverRadius: 3,
      pointHoverBackgroundColor: "rgba(246,194,62,0.2)",
      pointHoverBorderColor: "rgba(246,194,62,0.2)",
      pointHitRadius: 10,
      pointBorderWidth: 1,
      data: [14, 14.2, 14.4, 14.6, 14.7, 14.8, 14.9, 15.05, 15.2, 15.35, 15.5, 15.6, 15.7],
      },
      {
      label: "Terlalu Kurus",
      lineTension: 0.3,
      backgroundColor: "rgba(78, 115, 223, 0)",
      borderColor: "rgba(231,74,59,0.2)",
      pointRadius: 0,
      pointBackgroundColor: "rgba(231,74,59,0.2)",
      pointBorderColor: "rgba(231,74,59,0.2)",
      pointHoverRadius: 3,
      pointHoverBackgroundColor: "rgba(231,74,59,0.2)",
      pointHoverBorderColor: "rgba(231,74,59,0.2)",
      pointHitRadius: 10,
      pointBorderWidth: 1,
      data: [12.3, 12.4, 12.55, 12.65, 12.8, 12.9, 13, 13.15, 13.25, 13.4, 13.5, 13.6, 13.7],
      },
    ],
  },
  options: {
    maintainAspectRatio: false,
    layout: {
      padding: {
        left: 10,
        right: 25,
        top: 25,
        bottom: 0
      }
    },
    scales: {
      xAxes: [{
        time: {
          unit: 'date'
        },
        gridLines: {
          display: true,
          drawBorder: true
        },
        ticks: {
          maxTicksLimit: 7
        }
      }],
      yAxes: [{
        ticks: {
          maxTicksLimit: 5,
          padding: 10,
          stepSize: 3.5,
          // Include a dollar sign in the ticks
          callback: function(value, index, values) {
            return number_format(value)+' kg';
          }
        },
        gridLines: {
          color: "rgb(234, 236, 244)",
          zeroLineColor: "rgb(234, 236, 244)",
          drawBorder: true,
          borderDash: [2],
          zeroLineBorderDash: [2]
        }
      }],
    },
    legend: {
      display: true
    },
    tooltips: {
      backgroundColor: "rgb(255,255,255)",
      bodyFontColor: "#858796",
      titleMarginBottom: 10,
      titleFontColor: '#6e707e',
      titleFontSize: 14,
      borderColor: '#dddfeb',
      borderWidth: 1,
      xPadding: 15,
      yPadding: 15,
      displayColors: true,
      intersect: false,
      mode: 'index',
      caretPadding: 10,
      callbacks: {
        label: function(tooltipItem, chart) {
          var datasetLabel = chart.datasets[tooltipItem.datasetIndex].label || '';
          return Number(tooltipItem.yLabel).toFixed(1)+ ' (kg)';
        }
      }
    }
  }
});
</script>