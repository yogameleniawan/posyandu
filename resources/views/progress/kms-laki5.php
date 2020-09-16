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
      datasets: [{
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
          data: [21.15, 21.45, 21.65, 21.9, 22.15, 22.4, 22.65, 22.9, 23.15, 23.4, 23.65, 23.9, 24.15],
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
          data: [18.6, 18.8, 19, 19.2, 19.4, 19.6, 19.8, 20, 20.2, 20.4, 20.6, 20.8, 21],
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
          data: [16.35, 16.5, 16.65, 16.85, 17, 17.2, 17.35, 17.5, 17.7, 17.85, 18, 18.15, 18.3],
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
          data: [14.4, 14.55, 14.65, 14.8, 14.95, 15.1, 15.2, 15.35, 15.5, 15.65, 15.75, 15.9, 16],
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
          data: [12.7, 12.8, 12.95, 13.05, 13.15, 13.3, 13.4, 13.5, 13.6, 13.7, 13.85, 13.95, 14.05],
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
              return number_format(value) + ' kg';
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
            return Number(tooltipItem.yLabel).toFixed(1) + ' (kg)';
          }
        }
      }
    }
  });
</script>