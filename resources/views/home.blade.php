<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Finance Dashboard</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
  <style>
    body {
      font-family: 'Inter', sans-serif;
      background: #d9efff;
    }

    .sidebar {
      background: white;
      min-height: 100vh;
      border-right: 1px solid #ddd;
    }

    .sidebar button {
      background: none;
      border: none;
      font-size: 24px;
      margin: 20px 0;
    }

    .pro-upgrade {
      background: #ffe680;
    }

    .transactions li {
      display: flex;
      justify-content: space-between;
      padding: 10px 0;
      border-bottom: 1px solid #eee;
    }
  </style>
</head>

<body>
  <div class="container-fluid">
    <div class="row">
      <div class="col-auto sidebar d-flex flex-column align-items-center py-4">
        <img src="https://via.placeholder.com/40x40" alt="logo" class="mb-3" />
        <button>🏠</button>
        <button>👤</button>
        <button style="background: #ffe680; border-radius: 10px;">📊</button>
      </div>

      <div class="col main p-4">
        <div class="d-flex justify-content-between align-items-center mb-4">
          <h2>Overview</h2>
          <input type="text" class="form-control w-25" placeholder="Search something..." />
          <div class="d-flex align-items-center gap-2">
            <span>Emily Smith ▼</span>
            <img src="https://via.placeholder.com/40" class="rounded-circle" />
          </div>
        </div>

        <div class="row g-4">
          <div class="col-md-6 col-lg-4">
            <div class="card p-3">
              <h5>Expense</h5>
              <p>$5340.00 on this week</p>
              <canvas id="expenseChart"></canvas>
            </div>
          </div>

          <div class="col-md-6 col-lg-4">
            <div class="card p-3">
              <h5>Income</h5>
              <p>$1980.00 on this week</p>
              <canvas id="incomeChart"></canvas>
            </div>
          </div>

          <div class="col-md-12 col-lg-4">
            <div class="card p-3 pro-upgrade d-flex justify-content-between align-items-center">
              <div>
                <h5>Upgrade your account to <span class="text-warning">PRO+</span></h5>
                <p class="mb-0">With a PRO+ account you get many additional and convenient features to control your finances.</p>
              </div>
              <button class="btn btn-light fs-4">➡️</button>
            </div>
          </div>

          <div class="col-md-6 col-lg-4">
            <div class="card p-3">
              <h5>Your cards</h5>
              <p>💳 **** 5689</p>
              <p>💳 **** 3424</p>
            </div>
          </div>

          <div class="col-md-6 col-lg-4">
            <div class="card p-3">
              <h5>Statistics by category</h5>
              <canvas id="categoryChart"></canvas>
              <ul class="mt-3">
                <li>🔵 Other expenses - 50%</li>
                <li>🔴 Entertainment - 35%</li>
                <li>🟡 Investments - 15%</li>
              </ul>
            </div>
          </div>

          <div class="col-md-12 col-lg-4">
            <div class="card p-3">
              <h5>Latest transactions</h5>
              <ul class="transactions list-unstyled">
                <li><span>Spotify</span><span>-$569.50</span></li>
                <li><span>Transfer</span><span>+$350.50</span></li>
                <li><span>Investments</span><span>-$3448.99</span></li>
              </ul>
            </div>
          </div>

        </div>
      </div>
    </div>
  </div>

  <script>
    const days = ['Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat', 'Sun'];

    new Chart(document.getElementById('expenseChart'), {
      type: 'bar',
      data: {
        labels: days,
        datasets: [{
          label: 'Expense',
          data: [700, 800, 1000, 650, 400, 150, 100],
          backgroundColor: '#6ec1ff'
        }]
      },
      options: { responsive: true, plugins: { legend: { display: false } } }
    });

    new Chart(document.getElementById('incomeChart'), {
      type: 'bar',
      data: {
        labels: days,
        datasets: [{
          label: 'Income',
          data: [200, 300, 500, 700, 800, 900, 850],
          backgroundColor: '#ff82a9'
        }]
      },
      options: { responsive: true, plugins: { legend: { display: false } } }
    });

    new Chart(document.getElementById('categoryChart'), {
      type: 'doughnut',
      data: {
        labels: ['Other', 'Entertainment', 'Investments'],
        datasets: [{
          data: [50, 35, 15],
          backgroundColor: ['#3c9cff', '#ff7296', '#ffe680']
        }]
      },
      options: { responsive: true, plugins: { legend: { display: false } } }
    });
  </script>
</body>

</html>
