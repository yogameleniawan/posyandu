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
    labels: ["24 Bulan", "25 Bulan", "26 Bulan", "27 Bulan", "28 Bulan", "29 Bulan", "30 Bulan", "31 Bulan", "32 Bulan", "33 Bulan", "34 Bulan", "35 Bulan", "24 Bulan"],
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
      data: [<?= $dtProgress[24]; ?>,<?= $dtProgress[25]; ?>,<?= $dtProgress[26]; ?>,<?= $dtProgress[27]; ?>,<?= $dtProgress[28]; ?>,<?= $dtProgress[29]; ?>,<?= $dtProgress[30]; ?>,<?= $dtProgress[31]; ?>,<?= $dtProgress[32]; ?>,<?= $dtProgress[33]; ?>,<?= $dtProgress[34]; ?>,<?= $dtProgress[35]; ?>,<?= $dtProgress[36]; ?>],
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
      data: [15.3, 15.5, 15.8, 16.1, 16.3, 16.6, 16.8, 17.1, 17.3, 17.6, 17.8, 18.1, 18.3],
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
      data: [13.6, 13.8, 14.1, 14.3, 14.5, 14.7, 15, 15.2, 15.4, 15.6, 15.8, 16, 16.2],
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
      data: [12.1, 12.35, 12.5, 12.7, 12.9, 13.1, 13.3, 13.5, 13.7, 13.8, 14, 14.2, 14.3],
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
      data: [10.9, 11, 11.2, 11.35, 11.5, 11.65, 11.85, 12, 12.1, 12.3, 12.4, 12.55, 12.7],
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
      data: [9.7, 9.8, 10, 10.1, 10.25, 10.4, 10.5, 10.7, 10.8, 10.9, 11, 11.15, 11.3],
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