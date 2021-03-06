<?php get_header(); ?>
    <div class="columnContainer">
        <div class="column colSize1 leftSidebar">
            <?php if(is_active_sidebar('left_sidebar')) {
            ?>
                <input type="checkbox" id="displayMenus" class="menuSwitcher" />
                <label for="displayMenus" class="menuSwitcher"></label>
                <?php dynamic_sidebar('left_sidebar');
            } ?>
        </div><!-- This comment is a fix for inline-block spaces, do not remove
        --><div class="column colSize5 postContainer">
            <article class="post columnContainer">
                <div class="postContent column colSize4">
                    <h1><?php echo __('Oooops!', 'alphas-manifesto') ?></h1>
                    <p class="subtitle"><?php echo __('Nothing over here. Neither over there.', 'alphas-manifesto') ?></p>
                    <p><?php echo __('There\'s nothing over here &ndash; maybe what you were looking for is somewhere else?', 'alphas-manifesto') ?></p>
                    <p><?php printf(__('You can <a href="%1$s">try visiting the main page</a> or using the following search form:', 'alphas-manifesto'), home_url()) ?></p>
                    <?php get_search_form(); ?>
                </div>
            </article>
        </div>
    </div>
<?php wp_footer(); ?>
</body>
</html>
