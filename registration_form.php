<div class="d-flex justify-content-center mt-5">
<div><h1>Registration form</h1><div>
<form action="registration.php" method="post">
    <div class="form-group">
        <label for="username" >Username</label>
        <input type="text" class="form-control" id="username" name="username" minlength="4" maxlength="100" placeholder="your username" required>
    </div>
    <div class="form-group">
        <label for="password">Password</label>
        <input type="password" class="form-control" id="password" name="password" minlength="6" placeholder="your password" required>
    </div>
    <div class="form-group">
        <label for="confirm_password">Confirm Password</label>
        <input type="password" class="form-control" id="confirm_password" name="confirm_password" minlength="6" placeholder="confirm your password" required>
    </div>
    <button type="submit" class="btn btn-primary">Register</button>
</form>
</div>