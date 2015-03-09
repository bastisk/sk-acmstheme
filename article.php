<?php theme_include( 'header'); ?>

<section class="content wrap" id="article-<?php echo article_id(); ?>">
    <h3 class="headline1"><center><?php echo article_title(); ?></center></h3>
	<p class="time text-muted">
	<time datetime="<?php echo date(DATE_W3C, article_time()); ?>"><?php echo date('d-m-Y H:i', article_time()); ?></time>, <?php echo article_author(); ?>
	</p>
    <article class="articlecontent">
        <?php echo article_markdown(); ?>
    </article>

   <hr>
    <section class="footnote">
        <!-- Unfortunately, CSS means everything's got to be inline. -->
        <p>
            <?php echo article_custom_field( 'attribution'); ?>
        </p>
    </section>
</section>

<hr>
<?php if(comments_open()): ?>
<div class="panel panel-default">
   <div class="panel-body">
    <?php if(has_comments()): ?>
        <?php $i=0 ; while(comments()): $i++; ?>
        <div class="well" id="comment-<?php echo comment_id(); ?>">
                <p><b><?php echo comment_name(); ?> wrote this <?php echo relative_time(comment_time()); ?>:</b></p>
                <div class="content">
                   <p>
                    <?php echo comment_text(); ?>
                    </p>
                </div>

                <span class="counter"><?php echo $i; ?></span>
        </div>
        <?php endwhile; ?>

    <?php endif; ?>

   <hr>
   <h3> Add a Comment</h3>
    <form id="comment" class="commentform wrap" method="post" action="<?php echo comment_form_url(); ?>#comment">
        <?php echo comment_form_notifications(); ?>

        <div class="form-inline">

            <div class="form-group">
                <label for="name" class="control-label">Name</label>
                <?php echo comment_form_input_name( 'placeholder="" class="form-control"'); ?>
            </div>

            <div class="form-group">
                <label for="email class="control-label"">Email</label>
                <?php echo comment_form_input_email( 'placeholder=""  class="form-control"'); ?>
            </div>
        </div>

       </br>
        <div class="form-group">
            <label for="text" class="control-label">Comment</label>
            <?php echo comment_form_input_text( 'placeholder=""  class="form-control"'); ?>
        </div>

            <?php echo comment_form_button(); ?>

    </form>
</div>
</div>
<?php endif; ?>

<?php theme_include( 'footer'); ?>
