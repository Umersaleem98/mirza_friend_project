<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>


<div class="content-wrapper">
    <div class="content">
            <!-- Top Statistics -->
            {{-- <div class="row">
              <div class="col-xl-3 col-sm-6">
                <div class="card card-default card-mini">
                  <div class="card-header">
                    <h2>$18,699</h2>
                    <div class="dropdown">
                      <a class="dropdown-toggle icon-burger-mini" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      </a>

                      <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuLink">
                        <a class="dropdown-item" href="#">Action</a>
                        <a class="dropdown-item" href="#">Another action</a>
                        <a class="dropdown-item" href="#">Something else here</a>
                      </div>
                    </div>
                    <div class="sub-title">
                      <span class="mr-1">Sales of this year</span> |
                      <span class="mx-1">45%</span>
                      <i class="mdi mdi-arrow-up-bold text-success"></i>
                    </div>
                  </div>
                  <div class="card-body">
                    <div class="chart-wrapper">
                      <div>
                        <div id="spline-area-1"></div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-xl-3 col-sm-6">
                <div class="card card-default card-mini">
                  <div class="card-header">
                    <h2>$14,500</h2>
                    <div class="dropdown">
                      <a class="dropdown-toggle icon-burger-mini" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      </a>

                      <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuLink">
                        <a class="dropdown-item" href="#">Action</a>
                        <a class="dropdown-item" href="#">Another action</a>
                        <a class="dropdown-item" href="#">Something else here</a>
                      </div>
                    </div>
                    <div class="sub-title">
                      <span class="mr-1">Expense of this year</span> |
                      <span class="mx-1">50%</span>
                      <i class="mdi mdi-arrow-down-bold text-danger"></i>
                    </div>
                  </div>
                  <div class="card-body">
                    <div class="chart-wrapper">
                      <div>
                        <div id="spline-area-2"></div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-xl-3 col-sm-6">
                <div class="card card-default card-mini">
                  <div class="card-header">
                    <h2>$4199</h2>
                    <div class="dropdown">
                      <a class="dropdown-toggle icon-burger-mini" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      </a>

                      <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuLink">
                        <a class="dropdown-item" href="#">Action</a>
                        <a class="dropdown-item" href="#">Another action</a>
                        <a class="dropdown-item" href="#">Something else here</a>
                      </div>
                    </div>
                    <div class="sub-title">
                      <span class="mr-1">Profit of this year</span> |
                      <span class="mx-1">20%</span>
                      <i class="mdi mdi-arrow-down-bold text-danger"></i>
                    </div>
                  </div>
                  <div class="card-body">
                    <div class="chart-wrapper">
                      <div>
                        <div id="spline-area-3"></div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-xl-3 col-sm-6">
                <div class="card card-default card-mini">
                  <div class="card-header">
                    <h2>$20,199</h2>
                    <div class="dropdown">
                      <a class="dropdown-toggle icon-burger-mini" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      </a>

                      <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuLink">
                        <a class="dropdown-item" href="#">Action</a>
                        <a class="dropdown-item" href="#">Another action</a>
                        <a class="dropdown-item" href="#">Something else here</a>
                      </div>
                    </div>
                    <div class="sub-title">
                      <span class="mr-1">Revenue of this year</span> |
                      <span class="mx-1">35%</span>
                      <i class="mdi mdi-arrow-up-bold text-success"></i>
                    </div>
                  </div>
                  <div class="card-body">
                    <div class="chart-wrapper">
                      <div>
                        <div id="spline-area-4"></div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div> --}}


          <div class="row">
            <div class="col-xl-8">

              <!-- Income and Express -->
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
            <div class="col-xl-4">
              <!-- Current Users  -->
              <div class="card card-default">
                <div class="card-header">
                  <h2>Current Users</h2>
                  <span>Realtime</span>
                </div>
                <div class="card-body">
                  <div id="barchartlg2"></div>
                </div>
                <div class="card-footer bg-white py-4">
                  <a href="#" class="text-uppercase">Current Users Overview</a>
                </div>
              </div>
            </div>
          </div>
      </div>

  </div>


  <script>
    var ctx = document.getElementById('pieChart').getContext('2d');
    var pieChart = new Chart(ctx, {
        type: 'pie',
        data: {
            labels: ['Male', 'Female'],
            datasets: [{
                label: 'Gender Distribution',
                data: [{{ $maleCount ?? 0 }}, {{ $femaleCount ?? 0 }}], // Using ?? 0 for fallback value
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
</script>
