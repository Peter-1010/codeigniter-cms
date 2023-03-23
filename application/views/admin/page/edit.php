    <h3><?php echo empty($page->id) ? 'Add a new page' : 'Edit page '.$page->title ?></h3>

    <?php echo validation_errors(); ?>
    <form action="<?php echo base_url(uri_string()) ?>" method="post" accept-charset="utf-8">
        <div style="display:none">
            <input type="hidden" name="csrf_test_name" value="7d8c4b5a155a8ee137ac24800d40128c">
        </div>
        <table class="table">
            <tr>
                <td>Parent</td>
                <td><?php echo form_dropdown('parent_id', $pages_no_parents, $this->input->post('parent_id') ? $this->input->post('parent_id') : $page->parent_id ); ?></td>
            </tr>
            <tr>
                <td>Template</td>
                <td><?php echo form_dropdown('template', array('page' => 'page', 'news_archive' => 'News archive', 'homepage' => 'Homepage'), $this->input->post('template') ? $this->input->post('template') : $page->template ); ?></td>
            </tr>
            <tr>
                <td>Title</td>
                <td><?php echo form_input('title', set_value('title', $page->title)); ?></td>
            </tr>
            <tr>
                <td>Slug</td>
                <td><?php echo form_input('slug', set_value('slug', $page->slug)); ?></td>
            </tr>
            <tr>
                <td>Body</td>
                <td><?php echo form_textarea('body', set_value('body', $page->body), 'class="tinymce"'); ?></td>
            </tr>
            <tr>
                <td></td>
                <td><?php echo form_submit('submit', 'Save', 'class="btn btn-primary"'); ?></td>
            </tr>
        </table>
    </form>
