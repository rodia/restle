<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<footer>
    <p class="footer">Page rendered in <strong><?php echo isset($elapsed_time) ? $elapsed_time : 0; ?></strong> seconds. <?php echo (ENVIRONMENT === 'development') ? 'CodeIgniter Version <strong>' . CI_VERSION . '</strong>' : '' ?></p>
</footer>
</div>

</body>
</html>
