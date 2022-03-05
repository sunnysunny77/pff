<div id="comments" class="content-area col-sm-12 col-lg-8 mx-auto">
  <ul>
    <li>Comments
      <ul>
        <?php if (have_comments()) {

          wp_list_comments();
        } else { ?>

          <li>none</li>

        <?php } ?>
      </ul>
    </li>
  </ul>

  <?php comment_form(

    $args = array(
      'id_form'           => 'commentform',
      'id_submit'         => 'commentsubmit',
      'title_reply'       => 'Leave a Comment',
      'title_reply_to'    => 'Leave a Comment to %s',
      'cancel_reply_link' => 'Cancel Commnet',
      'comment_field' =>  '<p><textarea placeholder="Start typing..." id="comment" class="form-control" name="comment" cols="45" rows="8" aria-required="true"></textarea></p>',
      'comment_notes_after' => '<p class="form-allowed-tags">' .
        'You may use these <abbr title="HyperText Markup Language">HTML</abbr> tags and attributes:' .
        '</p><div class="alert alert-info">' . allowed_tags() . '</div>'
    )
  );
  ?>
</div>