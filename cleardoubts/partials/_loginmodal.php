<!-- Modal -->
<div class="modal fade" id="loginModal" tabindex="-1" aria-labelledby="loginModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content" style="background-color:#dedcfe;">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="loginModalLabel">Login to cleardoubts</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form action="/cleardoubts/partials/_loginhandle.php" method="post">
        <div class="modal-body">
          <div class="mb-3">
            <label for="login_email" class="form-label">Email address</label>
            <input type="email" class="form-control" id="login_email" name="login_email" aria-describedby="emailHelp"> 
          </div>

          <div class="mb-3">
            <label for="login_password" class="form-label">Password</label>
            <input type="password" class="form-control" id="login_password" name="login_password">
          </div>

          <button type="submit" class="btn btn-outline-dark" style="background-color: #cac7ff;" >Submit</button>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-outline-dark" style="background-color: #cac7ff;" data-bs-dismiss="modal">Close</button>
        </div>
      </form>

    </div>
  </div>
</div>