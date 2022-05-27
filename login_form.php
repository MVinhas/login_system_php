<div class="d-flex justify-content-center mt-5">
<div><h1>Login form</h1><div>
<form action="login.php" method="post">
    <div class="form-group">
        <label for="username" >Username</label>
        <input type="text" class="form-control" id="username" name="username" minlength="4" maxlength="100" placeholder="your username" required>
    </div>
    <div class="form-group">
        <label for="password">Password</label>
        <input type="password" class="form-control" id="password" name="password" minlength="6" placeholder="your password" required>
    </div>
    <button type="submit" class="btn btn-primary">Login</button>
</form>
</div>