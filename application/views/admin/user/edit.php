<h3><?php echo empty($user->id) ? 'Add a new user' : 'Edit user ' . $user->name ?></h3>
<?php echo validation_errors(); ?>
<form action="<?php echo base_url(uri_string()) ?>" method="post" accept-charset="utf-8">
    <div style="display:none">
        <input type="hidden" name="csrf_test_name" value="7d8c4b5a155a8ee137ac24800d40128c">
    </div>
    <table class="table">
        <tr>
            <td>Name</td>
            <td><?php echo form_input('name', set_value('name', $user->name)); ?></td>
        </tr>
        <tr>
            <td>Email</td>
            <td><?php echo form_input('email', set_value('email', $user->email)); ?></td>
        </tr>
        <tr>
            <td>Password</td>
            <td><?php echo form_password('password'); ?></td>
        </tr>
        <tr>
            <td>Confirm password</td>
            <td><?php echo form_password('password_confirm'); ?></td>
        </tr>
        <tr>
            <td></td>
            <td><?php echo form_submit('submit', 'Save', 'class="btn btn-primary"'); ?></td>
        </tr>
    </table>
</form>
