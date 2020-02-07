<form method="POST" action="" method="POST">
        <?php echo csrf_field(); ?>
        <div class="form-group">
            <p>Email</p>
            <input class="form-control" name="email" type="email" required value="">
        </div>

        <div class="form-group">
            <p>Password</p>
            <input class="form-control" name="password" type="password" required>
        </div>
        <div class="form-group">
            <button class="btn btn-primary" type="submit">Login</button>
        </div>
</form><?php /**PATH /home/vagrant/code/proyecto1/resources/views/catalog/admin/login.blade.php ENDPATH**/ ?>