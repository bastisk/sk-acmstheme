<?php theme_include( 'header'); ?>

<?php $i=0 ; while(posts()): ?>
<div class="panel panel-info" style="border: 0px solid white; box-shadow: 0px 0px 0px white;">
    <div class="panel-body">
        <h4 class="headline1"><center><?php echo article_title(); ?></center></h4>
        <p class="time text-muted">
            <time datetime="<?php echo date(DATE_W3C, article_time()); ?>">
                <?php echo date( 'd-m-Y H:i', article_time()); ?>
            </time>,
            <?php echo article_author(); ?>
        </p>
        <?php echo split_content(article_markdown()); ?>
        <p><a href="<?php echo article_url(); ?>" rel="article">Read More</a>
        </p>
    </div>
</div>
<hr>
<?php endwhile; ?>

<?php if(has_pagination()): ?>
<div class="center">
    <nav>
        <ul class="pagination">
            <li>
                <?php echo posts_prev(); ?>

                </a>
            </li>
            <li>
                <?php echo posts_next(); ?>

                </a>
            </li>
        </ul>
    </nav>
</div>
<?php endif; ?>

<?php theme_include( 'footer'); ?>
