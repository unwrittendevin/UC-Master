<?php get_template_part('templates/page', 'header'); ?>

<div class="alert alert-warning">
  <?php _e('Sorry, but the page you were trying to view does not exist.', 'ucmaster'); ?>
</div>

<p><?php _e('It looks like this was the result of either:', 'ucmaster'); ?></p>
<ul>
  <li><?php _e('a mistyped address', 'ucmaster'); ?></li>
  <li><?php _e('an out-of-date link', 'ucmaster'); ?></li>
</ul>

<?php get_search_form(); ?>
