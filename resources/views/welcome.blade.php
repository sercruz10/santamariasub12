<!DOCTYPE html>
<!-- Bootstrap 5 CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

<table class="player-table">
    <thead>
        <tr>
            <th>#</th>
            <th>Name</th>
            <th>Position</th>
            <th>Info</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($players as $index => $player)
            <tr>
                <td>{{ $index + 1 }}</td>
                <td>{{ $player->name }}</td>
                <td>{{ $player->position }}</td>
                <td>
          <button
            type="button"
            class="btn btn-primary btn-sm"
            data-bs-toggle="modal"
            data-bs-target="#editPlayerModal"
            data-id="{{ $player->id }}"
            data-name="{{ $player->name }}"
            data-position="{{ $player->position }}"
            data-full_name="{{ $player->full_name }}"
            data-year="{{ $player->year }}"
            data-full_birthday="{{ $player->full_birthday }}"
            data-number="{{ $player->number }}"
          >
            Edit
          </button>
        </td>
                
            </tr>
        @endforeach
    </tbody>
</table>

@include('modals.edit')

<script>
document.addEventListener('DOMContentLoaded', function () {
  const editModal = document.getElementById('editPlayerModal');
  const form = document.getElementById('editPlayerForm');

  editModal.addEventListener('show.bs.modal', function (event) {
    const button = event.relatedTarget;

    const id = button.getAttribute('data-id');
    const name = button.getAttribute('data-name');
    const position = button.getAttribute('data-position');
    const team = button.getAttribute('data-team');
    const full_name = button.getAttribute('data-full_name');
    const year = button.getAttribute('data-year');
    const full_birthday = button.getAttribute('data-full_birthday');
    const number = button.getAttribute('data-number');
   

    // Fill form inputs
    form.action = `/players/${id}`; // update REST route
    form.querySelector('#playerName').value = name;
    form.querySelector('#playerPosition').value = position;
    form.querySelector('#playerTeam').value = team;
    form.querySelector('#full_name').value = full_name;
    form.querySelector('#playerYear').value = year;
    form.querySelector('#playerfull_birthday').value = full_birthday;
    form.querySelector('#number').value = number;
  });
});
</script>


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
