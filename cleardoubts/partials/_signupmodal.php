<div class="modal fade" id="signupModal" name="signupModal" tabindex="-1" aria-labelledby="signupModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content" style="background-color:#dedcfe;">
    <div class="modal-header">
                <h1 class="modal-title fs-5" id="signupModalLabel">Signup to cleardoubts for an account</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="/cleardoubts/partials/_signuphandle.php" method="post">
                <div class="modal-body">
                    <div class="mb-3">
                        <label for="username" class="form-label">Name</label>
                        <input type="text" class="form-control" id="username" name="username">
                    </div>
                    <div class="mb-3">
                        <label for="signupemail" class="form-label">Email address</label>
                        <input type="email" class="form-control" id="signupemail" name="signupemail" aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3">
                        <label for="signup_password" class="form-label">Password</label>
                        <input type="password" class="form-control" id="signup_password" name="signup_password" >
                    </div>
                    <div class="mb-3">
                        <label for="signup_cpassword" class="form-label">Confirm Password</label>
                        <input type="password" class="form-control" id="signup_cpassword" name="signup_cpassword">
                    </div>
                    <button type="submit" class="btn btn-outline-dark" style="background-color: #cac7ff;">Submit</button>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-outline-dark" style="background-color: #cac7ff;" data-bs-dismiss="modal">Close</button>
                </div>
            </form>
      </div>
    </div>
  </div>
</div>
