<h3><?php echo empty($article->id) ? 'Add a new article' : 'Edit article ' . $article->title ?></h3>

<?php echo validation_errors(); ?>
<form action="<?php echo base_url(uri_string()) ?>" method="post" accept-charset="utf-8">
    <div style="display:none">
        <input type="hidden" name="csrf_test_name" value="7d8c4b5a155a8ee137ac24800d40128c">
    </div>
    <table class="table">
        <tr>
            <td>Publication date</td>
            <td><input type="date" name="pubdate" value="<?php echo $article->pubdate ?>"></td>
        </tr>
        <tr>
            <td>Title</td>
            <td><?php echo form_input('title', set_value('title', $article->title)); ?></td>
        </tr>
        <tr>
            <td>Slug</td>
            <td><?php echo form_input('slug', set_value('slug', $article->slug)); ?></td>
        </tr>
        <tr>
            <td>Body</td>
            <td><?php echo form_textarea('body', set_value('body', $article->body), 'class="tinymce"'); ?></td>
        </tr>
        <tr>
            <td></td>
            <td><?php echo form_submit('submit', 'Save', 'class="btn btn-primary"'); ?></td>
        </tr>
    </table>
</form>
