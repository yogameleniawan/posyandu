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
    labels: ["12 Bulan", "13 Bulan", "14 Bulan", "15 Bulan", "16 Bulan", "17 Bulan", "18 Bulan", "19 Bulan", "20 Bulan", "21 Bulan", "22 Bulan", "23 Bulan", "24 Bulan"],
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
      data: [<?= $dtProgress[12]; ?>,<?= $dtProgress[13]; ?>,<?= $dtProgress[14]; ?>,<?= $dtProgress[15]; ?>,<?= $dtProgress[16]; ?>,<?= $dtProgress[17]; ?>,<?= $dtProgress[18]; ?>,<?= $dtProgress[19]; ?>,<?= $dtProgress[20]; ?>,<?= $dtProgress[21]; ?>,<?= $dtProgress[22]; ?>,<?= $dtProgress[23]; ?>,<?= $dtProgress[24]; ?>],
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
      data: [11.5, 11.8, 12.1, 12.4, 12.6, 12.9, 13.2, 13.4, 13.7, 14, 14.3, 14.6, 14.9],
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
      data: [10.1, 10.4, 10.6, 10.9, 11.1, 11.4, 11.6, 11.8, 12.1, 12.3, 12.5, 12.8, 13],
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
      data: [8.9, 9.2, 9.4, 9.6, 9.8, 10, 10.2, 10.4, 10.6, 10.8, 11, 11.3, 11.5],
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
      data: [7.9, 8.1, 8.3, 8.5, 8.7, 8.9, 9.05, 9.25, 9.4, 9.6, 9.8, 10, 10.1],
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
      data: [7, 7.2, 7.4, 7.5, 7.7, 7.9, 8.05, 8.2, 8.4, 8.55, 8.7, 8.9, 9],
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