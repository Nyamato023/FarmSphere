<div>
    <h2>Dashboard</h2>
    <div class="dashboard-metrics">
        <div>Worker Count: {{ $workerCount }}</div>
        <div>Active Geofences: {{ $geofenceStatus->count() }}</div>
        <div>Active Alerts: {{ $activeAlerts }}</div>
    </div>
</div>
