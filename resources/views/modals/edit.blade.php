<div class="modal fade" id="editPlayerModal" tabindex="-1" aria-labelledby="editPlayerModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <form method="POST" id="editPlayerForm">
        @csrf
        @method('PUT')

        <div class="modal-header">
          <h5 class="modal-title" id="editPlayerModalLabel">Edit Player</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>

        <div class="modal-body">
          <input type="hidden" id="playerId" name="id">

          <div class="mb-3">
            <label for="playerName" class="form-label">Name</label>
            <input type="text" class="form-control" id="playerName" name="name" required>
          </div>
          <div class="mb-3">
            <label for="Fullname" class="form-label">Full-Name</label>
            <input type="text" class="form-control" id="full_name" name="name" required>
          </div>

          <div class="mb-3">
            <label for="playerPosition" class="form-label">Position</label>
            <input type="text" class="form-control" id="playerPosition" name="position">
          </div>

          <div class="mb-3">
            <label for="playerTeam" class="form-label">Team</label>
            <input type="text" class="form-control" id="playerTeam" name="team">
          </div>

          <div class="mb-3">
            <label for="playeryear" class="form-label">Year</label>
            <input type="text" class="form-control" id="playerYear" name="year">
          </div>
          <div class="mb-3">
            <label for="full_birthday" class="form-label">Birthday</label>
            <input type="text" class="form-control" id="playerfull_birthday" name="full_birthday">
          </div>
          <div class="mb-3">
            <label for="number" class="form-label">number</label>
            <input type="text" class="form-control" id="playernumber" name="number">
          </div>






          

        </div>

        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
          <button type="submit" class="btn btn-primary">Save changes</button>
        </div>
      </form>
    </div>
  </div>
</div>
