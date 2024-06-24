<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<div class="content-wrapper">
  <div class="content">
    <div class="row">
      <div class="col-xl-6">
        <!-- Total Students -->
        <div class="card card-default">
          <div class="card-header">
            <h2>Total students</h2>
          </div>
          <div class="card-body">
            <div class="chart-wrapper">
              <canvas id="pieChart" width="400" height="400"></canvas>
            </div>
          </div>
        </div>
      </div>

      <div class="col-xl-6">
        <!-- Students by Degree -->
        <div class="card card-default">
          <div class="card-header">
            <h2>Students by Degree</h2>
          </div>
          <div class="card-body">
            <div class="chart-wrapper">
              <canvas id="barChart" width="400" height="400"></canvas>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<script>
  var ctxPie = document.getElementById('pieChart').getContext('2d');
  var pieChart = new Chart(ctxPie, {
      type: 'pie',
      data: {
          labels: ['Male', 'Female'],
          datasets: [{
              label: 'Gender Distribution',
              data: [{{ $maleCount ?? 0 }}, {{ $femaleCount ?? 0 }}],
              backgroundColor: [
                  'rgba(255, 99, 132, 0.7)',
                  'rgba(54, 162, 235, 0.7)',
              ],
              borderColor: [
                  'rgba(255, 99, 132, 1)',
                  'rgba(54, 162, 235, 1)',
              ],
              borderWidth: 1
          }]
      },
      options: {
          responsive: true,
          maintainAspectRatio: false,
          legend: {
              position: 'bottom',
          },
          title: {
              display: true,
              text: 'Gender Distribution',
          }
      }
  });

  var ctxBar = document.getElementById('barChart').getContext('2d');
  var barChart = new Chart(ctxBar, {
      type: 'bar',
      data: {
          labels: {!! json_encode(array_keys($degreeData)) !!},
          datasets: [{
              label: 'Number of Students',
              data: {!! json_encode(array_values($degreeData)) !!},
              backgroundColor: 'rgba(75, 192, 192, 0.7)',
              borderColor: 'rgba(75, 192, 192, 1)',
              borderWidth: 1
          }]
      },
      options: {
          responsive: true,
          maintainAspectRatio: false,
          legend: {
              position: 'bottom',
          },
          title: {
              display: true,
              text: 'Students by Degree',
          },
          scales: {
              yAxes: [{
                  ticks: {
                      beginAtZero: true
                  }
              }]
          }
      }
  });
</script>
