<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$this->insert('parts/header');
?>
<div id="body">

    <h2><a href="<?php echo site_url('rest-server'); ?>">REST Server Tests</a></h2>

    <?php if (file_exists(FCPATH . 'documentation/index.html')) : ?>
        <h2><a href="<?php echo base_url('documentation/index.html'); ?>" target="_blank">REST Server Documentation</a></h2>
    <?php endif ?>

    <p>The page you are looking at is being generated dynamically by CodeIgniter.</p>

    <p>If you would like to edit this page you'll find it located at:</p>
    <code>application/views/welcome_message.php</code>

    <p>The corresponding controller for this page is found at:</p>
    <code>application/controllers/Welcome.php</code>

    <?php if (file_exists(FCPATH . 'user_guide/index.html')) : ?>
        <p>If you are exploring CodeIgniter for the very first time, you should start by reading the <a href="<?php echo base_url('user_guide/index.html'); ?>" target="_blank">User Guide</a>.</p>
    <?php endif ?>
</div>

<?php $this->insert('parts/footer');