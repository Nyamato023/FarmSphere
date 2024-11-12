<div>
    <h2>Activity Logs</h2>

    <div>
        <label for="filterWorkerId">Filter by Worker:</label>
        <input type="text" wire:model="filterWorkerId" id="filterWorkerId" placeholder="Worker ID">

        <label for="filterDate">Filter by Date:</label>
        <input type="date" wire:model="filterDate" id="filterDate">
    </div>

    <table>
        <thead>
            <tr>
                <th>Worker</th>
                <th>Geofence</th>
                <th>Action</th>
                <th>Timestamp</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($logs as $log)
                <tr>
                    <td>{{ $log->worker->name }}</td>
                    <td>{{ $log->geofence ? $log->geofence->name : 'N/A' }}</td>
                    <td>{{ ucfirst($log->action) }}</td>
                    <td>{{ $log->timestamp }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
