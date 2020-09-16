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
    labels: ["36 Bulan", "37 Bulan", "38 Bulan", "39 Bulan", "40 Bulan", "41 Bulan", "42 Bulan", "43 Bulan", "44 Bulan", "45 Bulan", "46 Bulan", "47 Bulan", "48 Bulan"],
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
      data: [<?= $dtProgress[36]; ?>,<?= $dtProgress[37]; ?>,<?= $dtProgress[38]; ?>,<?= $dtProgress[39]; ?>,<?= $dtProgress[40]; ?>,<?= $dtProgress[41]; ?>,<?= $dtProgress[42]; ?>,<?= $dtProgress[43]; ?>,<?= $dtProgress[44]; ?>,<?= $dtProgress[45]; ?>,<?= $dtProgress[46]; ?>,<?= $dtProgress[47]; ?>,<?= $dtProgress[48]; ?>],
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
      data: [18.1, 18.4, 18.7, 19, 19.3, 19.5, 19.8, 20.1, 20.4, 20.7, 21, 21.2, 21.5],
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
      data: [15.8, 16, 16.25, 16.5, 16.7, 16.9, 17.2, 17.4, 17.6, 17.8, 18.1, 18.3, 18.5],
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
      data: [13.85, 14, 14.2, 14.4, 14.6, 14.8, 15, 15.15, 15.3, 15.5, 15.7, 15.9, 16.1],
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
      data: [12.2, 12.3, 12.5, 12.65, 12.8, 13, 13.15, 13.3, 13.45, 13.55, 13.7, 13.9, 14],
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
      data: [10.8, 10.9, 11.1, 11.2, 11.3, 11.4, 11.55, 11.6, 11.7, 11.8, 11.95, 12.1, 12.2],
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