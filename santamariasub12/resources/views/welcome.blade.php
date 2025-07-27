<!DOCTYPE html>
<table class="player-table">
    <thead>
        <tr>
            <th>#</th>
            <th>Name</th>
            <th>Position</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($players as $index => $player)
            <tr>
                <td>{{ $index + 1 }}</td>
                <td>{{ $player->name }}</td>
                <td>{{ $player->position }}</td>
                
            </tr>
        @endforeach
    </tbody>
</table>

<style>

.player-table {
    width: 100%;
    border-collapse: collapse;
    font-family: 'Segoe UI', sans-serif;
    margin: 1rem auto;
    background: #fff;
    border-radius: 10px;
    overflow: hidden;
    box-shadow: 0 0 10px rgba(0,0,0,0.1);
}

.player-table thead {
    background-color: #2c3e50;
    color: white;
}

.player-table th,
.player-table td {
    padding: 12px 15px;
    text-align: left;
    font-size: 14px;
}

.player-table tbody tr:nth-child(even) {
    background-color: #f9f9f9;
}

.player-table tbody tr:hover {
    background-color: #eaf2f8;
    cursor: pointer;
    transition: background 0.2s ease-in-out;
}

@media (max-width: 768px) {
    .player-table thead {
        display: none;
    }

    .player-table, .player-table tbody, .player-table tr, .player-table td {
        display: block;
        width: 100%;
    }

    .player-table tr {
        margin-bottom: 15px;
        border-bottom: 1px solid #ddd;
    }

    .player-table td {
        padding-left: 50%;
        position: relative;
    }

    .player-table td::before {
        content: attr(data-label);
        position: absolute;
        left: 15px;
        top: 12px;
        font-weight: bold;
        color: #333;
    }
}


</style>
