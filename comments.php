<div class="comments">
  <?php if ( have_comments() ) : ?> 
  <h3>Comentários</h3>
  <ul class="comment-content">
      <?php wp_list_comments(); ?>
  </ul>
  <?php endif; ?>
  <div class="comments-form">
    <?php comment_form(); ?>
  </div>
  <div class="facebookcomments">
    <?php if (function_exists('facebook_comments')) facebook_comments(); ?>
  </div>
</div>