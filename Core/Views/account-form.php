<h1>Sign Up - Account</h1>
<h3>The Account username is going to be the Client's CPF.</h3>
<form action="" method="post">
    <div class="mb-3">
        <label for="name" class="form-label">Name:</label> <?php echo $name;?>
    </div>
    <div class="mb-3">
        <label for="email" class="form-label">Email:</label> <?php echo $email;?>
    </div>
    <div class="mb-3">
        <label for="phone" class="form-label">Phone:</label> <?php echo $phone;?>
    </div>
    <div class="mb-3">
        <label for="adress" class="form-label">Adress:</label> <?php echo $adress;?>
    </div>
    <div class="mb-3">
        <label for="username" class="form-label">Username:</label> <?php echo $cpf;?>
    </div>
    <div class="mb-3">
        <label for="password" class="form-label">Password:</label>
        <input type="password" class="form-control" name="password" id="password">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>