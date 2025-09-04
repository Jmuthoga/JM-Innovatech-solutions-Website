@extends('admin.admin_master')

@section('admin')
<div class="content-wrapper">
    <div class="container-fluid mt-4">
        <div class="row">
            <div class="col-12">
                <div class="card shadow-lg border-0 mb-4">
                    <div class="card-header bg-dark text-white">
                        <h4 class="mb-0 font-weight-bold">Dashboard Overview</h4>
                    </div>
                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-center mb-4">
                            <h5 class="font-weight-bold text-muted">Welcome back, <span class="text-primary">{{ Auth::user()->name }}</span></h5>
                            <a href="{{route('chnage.profile')}}" class="btn btn-outline-primary btn-sm">User Profile</a>
                        </div>
                        <p class="lead">This is your control center for monitoring ongoing projects, team activities, and overall system performance. Use the sidebar navigation to explore the various sections of the admin panel and take quick actions on key tasks.</p>
                        <p class="text-muted">Stay updated with your projects' status, view real-time analytics, and manage resources efficiently. The dashboard is designed to give you a quick, actionable overview of your system.</p>
                        <hr>
                        <p class="text-muted mb-0">Need assistance? Visit our <a href="/help" class="text-primary">Help Center</a> or contact the <a href="/support" class="text-primary">Support Team</a> for further guidance.</p>
                    </div>
                </div>
            </div>
        </div>


        <!-- Statistics Row -->
        <div class="row">
            <div class="col-md-4">
                <div class="card text-white bg-success mb-4">
                    <div class="card-body">
                        <h5 class="card-title">Projects Completed</h5>
                        <p class="card-text display-4">128</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card text-white bg-info mb-4">
                    <div class="card-body">
                        <h5 class="card-title">Ongoing Projects</h5>
                        <p class="card-text display-4">42</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card text-white bg-warning mb-4">
                    <div class="card-body">
                        <h5 class="card-title">Pending Reviews</h5>
                        <p class="card-text display-4">15</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Graph Section -->
        <div class="row">
            <div class="col-12">
                <div class="card mb-4">
                    <div class="card-header bg-secondary text-white">
                        <h5 class="mb-0">Project Completion Trends</h5>
                    </div>
                    <div class="card-body">
                        <canvas id="projectChart" height="100"></canvas>
                    </div>
                </div>
            </div>
        </div>

        <!-- Table of Latest Projects -->
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header bg-dark text-white">
                        <h5 class="mb-0">Latest Projects</h5>
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Project Name</th>
                                    <th>Status</th>
                                    <th>Completion</th>
                                    <th>Assigned To</th>
                                </tr>
                            </thead>
                            <tbody>
                                @for($i = 1; $i <= 20; $i++)
                                    <tr>
                                    <td>{{ $i }}</td>
                                    <td>Project {{ $i }}</td>
                                    <td>{{ ($i % 3 == 0) ? 'Completed' : (($i % 2 == 0) ? 'In Progress' : 'Pending') }}</td>
                                    <td>{{ rand(60, 100) }}%</td>
                                    <td>Team {{ chr(64 + ($i % 5) + 1) }}</td>
                                    </tr>
                                    @endfor
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>

<!-- Chart.js CDN -->
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
    const ctx = document.getElementById('projectChart').getContext('2d');
    const projectChart = new Chart(ctx, {
        type: 'line',
        data: {
            labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug'],
            datasets: [{
                label: 'Projects Completed',
                data: [10, 12, 18, 22, 30, 28, 35, 40],
                backgroundColor: 'rgba(54, 162, 235, 0.2)',
                borderColor: 'rgba(54, 162, 235, 1)',
                borderWidth: 2,
                tension: 0.4,
                fill: true,
            }]
        },
        options: {
            responsive: true,
            plugins: {
                legend: {
                    display: true,
                    position: 'top'
                }
            },
            scales: {
                y: {
                    beginAtZero: true
                }
            }
        }
    });
</script>
@endsection