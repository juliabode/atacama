<footer class="content-info cf">
    <?php $options = get_option('plugin_options');?>
    <div class="small-12 column">
        <div class="footer-wrapper">
            <p>
                &copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?>
                <?php if ($options['atacama_imprint_link']) :
                    echo '<a class="imprint" href="' . $options['atacama_imprint_link'] . '">';
                    _e('Imprint', 'roots');
                    echo '</a>' ;
                endif;?>
            </p>
        </div>
    </div>
</footer>
