<div class="modal-header">
    <h3>Log in</h3>
    <p>Please log in using your credential</p>
</div>
<div class="modal-body">

    <?php echo validation_errors(); ?>

    <form action="<?php echo base_url('admin/user/login') ?>" method="post" accept-charset="utf-8">
        <div style="display:none">
            <input type="hidden" name="csrf_test_name" value="7d8c4b5a155a8ee137ac24800d40128c">
        </div>
    <table class="table">
        <tr>
            <td>Email</td>
            <td><?php echo form_input('email'); ?></td>
        </tr>
        <tr>
            <td>Password</td>
            <td><?php echo form_password('password'); ?></td>
        </tr>
        <tr>
            <td></td>
            <td><?php echo form_submit('submit', 'log in', 'class="btn btn-primary"'); ?></td>
        </tr>
    </table>
        </form>
</div>