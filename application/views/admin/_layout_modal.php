<?php $this->load->view('admin/components/page_head'); ?>

<body style="background-color: #555;">

<!-- Modal -->
<div id="myModal" class="modal show" role="dialog">
    <div class="modal-dialog">

          <?php  $this->load->view($subview); ?>


            <div class="modal-footer">
                &copy; 2023 <?php echo $meta_title; ?>
            </div>
        </div>

    </div>
</div>




<?php $this->load->view('admin/components/page_tail'); ?>
