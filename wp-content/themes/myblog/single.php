<?php get_header() ?>
<div id="content">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-9">
                <div class="post-news">
                    <?php setpostview(get_the_id()); ?>
                    <h1 class="single-title"><?php the_title() ?></h1>
                    <div class="meta">
                        <span>Ngày đăng: <?php echo get_the_date('d/m/y') ?></span>
                        <span>Tác giả: <?php the_author(); ?></span>
                        <span>Chuyên mục: <?php the_category(', '); ?> </span>
                        <span>Lượt xem: <?php echo getpostviews(get_the_id()); ?> </span>
                    </div>
                    <article class="post-content">
                        <?php the_content() ?>
                    </article>
                    <div class="tag">
                        <p> <?php the_tags('Từ khóa:') ?></p>
                    </div>
                    <div class="like">
                        <div class="fb-like" data-href="<?php the_permalink() ?>" data-width="" data-layout="standard"
                            data-action="like" data-size="small" data-share="true"></div>
                    </div>
                    <div class="comment">
                        <div class="fb-comments" data-href="<?php the_permalink() ?>" data-width="100%"
                            data-numposts="5">
                        </div>
                    </div>
                </div>

            </div>
            <div class="col-xs-12 col-sm-12 col-md-3">
                <div class="sidebar">
                    <?php get_sidebar() ?>
                </div>
            </div>
        </div>
    </div>
</div>
<?php get_footer() ?>