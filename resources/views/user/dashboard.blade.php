<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>User Dashboard</title>
  <!-- Bootstrap CSS CDN -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"/>
  <style>
    body {
      min-height: 100vh;
      overflow-x: hidden;
    }
    .sidebar {
      min-width: 250px;
      max-width: 250px;
      background-color: #343a40;
      color: #fff;
      min-height: 100vh;
    }
    .sidebar a {
      color: #adb5bd;
      text-decoration: none;
    }
    .sidebar a:hover {
      color: #fff;
      background-color: #495057;
    }
  </style>
</head>
<body>
  <div class="d-flex">
    <!-- Sidebar -->
    <div class="sidebar d-flex flex-column p-3">
      <h3 class="text-white mb-4">Dashboard</h3>
      <ul class="nav flex-column">
        <li class="nav-item mb-2">
          <a href="{{ route('user.dashboard') }}" class="nav-link">Dashboard</a>
        </li>
        <li class="nav-item mb-2">
          <a href="{{ route('user.profile') }}" class="nav-link">Profile</a>
        </li>
        <li class="nav-item mb-2">
          <a href="{{ route('user.setting') }}" class="nav-link">Settings</a>
        </li>
        <li class="nav-item mt-auto">
          <a href="{{ route('user.logout') }}" class="nav-link text-danger">Logout</a>
        </li>
      </ul>
    </div>

    <!-- Page Content -->
    <div class="flex-grow-1">
      <!-- Top Navbar -->
      <nav class="navbar navbar-expand navbar-light bg-light">
        <div class="container-fluid">
          <span class="navbar-brand mb-0 h1">Welcome, {{ Auth::user()->name }}</span>
        </div>
      </nav>

      <div class="container-fluid mt-4">
        <!-- Dashboard Cards -->
        <div class="row g-3">
          <div class="col-md-3">
            <div class="card text-bg-primary">
              <div class="card-body">
                <h5 class="card-title">Total Users</h5>
                <p class="card-text fs-4">1,245</p>
              </div>
            </div>
          </div>
          <div class="col-md-3">
            <div class="card text-bg-success">
              <div class="card-body">
                <h5 class="card-title">Active Sessions</h5>
                <p class="card-text fs-4">568</p>
              </div>
            </div>
          </div>
          <div class="col-md-3">
            <div class="card text-bg-warning">
              <div class="card-body">
                <h5 class="card-title">Notifications</h5>
                <p class="card-text fs-4">23</p>
              </div>
            </div>
          </div>
          <div class="col-md-3">
            <div class="card text-bg-danger">
              <div class="card-body">
                <h5 class="card-title">Pending Tasks</h5>
                <p class="card-text fs-4">9</p>
              </div>
            </div>
          </div>
        </div>

        <!-- Table Section -->
        <div class="mt-4">
          <h4>Recent Activities</h4>
          <table class="table table-striped">
            <thead class="table-dark">
              <tr>
                <th>#</th>
                <th>Date</th>
                <th>Activity</th>
                <th>Status</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>1</td>
                <td>2025-07-10</td>
                <td>Logged in</td>
                <td><span class="badge bg-success">Success</span></td>
              </tr>
              <tr>
                <td>2</td>
                <td>2025-07-09</td>
                <td>Updated profile</td>
                <td><span class="badge bg-primary">Updated</span></td>
              </tr>
              <tr>
                <td>3</td>
                <td>2025-07-08</td>
                <td>Password change</td>
                <td><span class="badge bg-warning">Pending</span></td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap JS CDN -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
