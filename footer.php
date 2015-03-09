</div>
</div>
<div class="footer1">
    <div class="container">
        <div class="row">
            <div class="col col-md-6">
                <form class="form-horizontal" action="<?php echo search_url(); ?>" method="post">
                    <label for="term" class="control-label">Search this blog</label>
                    <input type="text" class="form-control" id="term" name="term" placeholder="To search, type and hit enter&hellip;" value="<?php echo search_term(); ?>">
                </form>
            </div>
            <div class="col col-md-6">
                <table class="table">
                    <tr>
                        <th>Category</th>
                        <th>Number of Posts</th>
                    </tr>
                    <?php while(categories()): ?>
                    <tr>
                        <td>
                            <a href="<?php echo category_url(); ?>" title="<?php echo category_description(); ?>">
                                <?php echo category_title(); ?>
                            </a>
                        </td>
                        <td>
                            <?php echo category_count(); ?> Posts</td>
                    </tr>
                    <?php endwhile; ?>
                </table>
            </div>
        </div>
    </div>
    <div class="class2">
        <small>&copy; <?php echo date('Y'); ?> <?php echo site_name(); ?>. All rights reserved.</small>
        <br>
        <a href="<?php echo rss_url(); ?>">RSS</a>
        <?php if(twitter_account()): ?>
        <a href="<?php echo twitter_url(); ?>">@<?php echo twitter_account(); ?></a>
        <?php endif; ?>
        <a href="<?php echo base_url('admin'); ?>" title="Administer your site!">Admin</a>
        <a href="/" title="Return to my website.">Home</a>
        </ul>
    </div>
</div>
</body>

</html>
