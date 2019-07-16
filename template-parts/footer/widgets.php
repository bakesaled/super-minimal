<?php
/**
 * Displays footer widgets if assigned
 * @package super-minimal
 */
?>
<div class="footer-container">
            <?php
for ($i = 1; $i <= 4; $i++) {
    if (is_active_sidebar('footer-' . $i)) {
        ?>
        <div class="row footer-wrap">
                        <?php dynamic_sidebar('footer-' . $i);?>
        </div>
                 <?php
}
}
?>
</div>