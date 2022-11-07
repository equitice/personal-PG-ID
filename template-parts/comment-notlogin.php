<?php
    $comments = get_comments(array(
        'post_id' => $post->ID,
        'order' => 'ASC'
    ));
        ?>

<div id="comments" class="comments-area">
    <?php if(count($comments) > 0){ ?>
        <h2 class="comments-title">One thought on"<?php the_title();?>"</h2><!-- .comments-title -->
    <?php } ?>
    <ol class="comment-list">
    <?php
    foreach($comments as $comment) { ?>
    <?php 
    ?>
        <li id="comment-5" class="comment byuser comment-author-rsdev-oa183 even thread-even depth-1">
            <article id="div-comment-5" class="comment-body">
                <footer class="comment-meta">
                    <div class="comment-author vcard">
                        <img alt="" src="https://secure.gravatar.com/avatar/4f4ab5e46db953ec372c96edaa8e99f7?s=32&amp;d=mm&amp;r=g" srcset="https://secure.gravatar.com/avatar/4f4ab5e46db953ec372c96edaa8e99f7?s=64&amp;d=mm&amp;r=g 2x" class="avatar avatar-32 photo" height="32" width="32" loading="lazy">						
                        <b class="fn">
                            <a href="https://oanglelab.com/oa183-propertyguru" rel="external nofollow ugc" class="url">
                                <?php echo $comment->comment_author;?>
                            </a>
                        </b> 
                    </div><!-- .comment-author -->

                    <div class="comment-metadata">
                        <a href="https://oanglelab.com/oa183-propertyguru/agent-self-serve-channel-purchase-ad-credits-online-anytime-anywhere/#comment-5">
                            <time datetime="2021-12-03T04:34:54+00:00"><?php echo get_comment_date('F j, Y',$comment->comment_ID);?> at <?php echo get_comment_time('g:i a',$comment->comment_ID);?></time>
                        </a> 
                    </div><!-- .comment-metadata -->

                </footer><!-- .comment-meta -->

                <div class="comment-content">
                    <p><?php echo $comment->comment_content;?></p>
                </div><!-- .comment-content -->

                <div class="reply">
                    <a rel="nofollow" href="" class="comment-reply-link reply_notlogin">
                        Reply
                    </a>
                </div>			
            </article><!-- .comment-body -->
        </li><!-- #comment-## -->
    <?php } ?>
    </ol><!-- .comment-list -->
    <div id="respond" class="comment-respond">
        <h3 id="reply-title" class="comment-reply-title">
            Add Comment 
        </h3>
        <p class="comment-reply-desc">
            Please read our 
            <a href="#">Guideline</a> 
            for posting a comment
        </p>
        <form action="https://oanglelab.com/oa183-propertyguru/wp-comments-post.php" method="post" id="commentform" class="comment-form" novalidate="">
            <div class="comment-form-comment ">
                <div class="comment-form-comment-textarea no_login">
                    <textarea name="comment" id="comment" placeholder="Write a comment..."></textarea>
                </div>
            </div>
            <p class="form-submit form-submit-notlogin">
                <input name="submit" type="submit" id="submit" class="submit not_login_submit" value="Submit"> 
            </p>
            <p class="login_requit" id="login_requit">Please login to comment <span><span></span></span></p>
        </form>	
    </div><!-- #respond -->
</div>