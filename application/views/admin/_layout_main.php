<?php $this->load->view('admin/components/page_head'); ?>
<body>

    <div class="navbar navbar-inverse navbar-static-top">
        <div class="navbar-inner">
            <a class="brand" href="<?php echo site_url('admin/dashboard') ?>"><?php echo $meta_title; ?></a>
            <ul class="nav">
                <li class="active"><a href="<?php echo site_url('admin/dashboard') ?>"> Dashboard</a></li>
                <li><?php echo anchor('admin/page', 'pages') ?></li>
                <li><?php echo anchor('admin/page/order', 'order pages') ?></li>
                <li><?php echo anchor('admin/article', 'news articles') ?></li>
                <li><?php echo anchor('admin/user', 'users')?></li>
            </ul>
        </div>
    </div>


<div class="container">
    <div class="row">
        <!-- Main column -->
        <div class="span9">
            <?php $this->load->view($subview); ?>

        </div>
        <!-- Sidebar -->
        <div class="span3">
            <section>
                <?php echo mailto('peteranwer999@gmail.com', '<i class="fa-solid fa-user"></i> peteranwer999@gmail.com') ?> <br>
                <?php echo anchor('admin/user/logout', '<i class="fa-solid fa-right-from-bracket"></i> logout') ?>
            </section>
        </div>
    </div>
</div>

<?php $this->load->view('admin/components/page_tail'); ?>


