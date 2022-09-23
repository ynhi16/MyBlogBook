<div class="noibat">
    <h2 class="title-news">Bài viết nổi bật</h2>
    <?php 
    $args = array(
        'posts_per_page' => 1,
        'post_type'      => 'post',
        'cat'            => 15
    );
    $the_query = new WP_Query( $args );
    ?>
    <?php if( $the_query->have_posts() ): ?>
    <?php while( $the_query->have_posts() ) : $the_query->the_post(); ?>
    <div class="content-nb">
        <a
            href="<?php the_permalink(); ?>"><?php echo get_the_post_thumbnail( get_the_id(), 'full', array( 'class' =>'thumnail') ); ?></a>
        <h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
        <div class="meta">
            <span>Ngày đăng: <?php echo the_date(); ?></span>
            <span>Lượt xem: <?php echo getpostviews(get_the_id()); ?> </span>
        </div>
        <p><?php the_excerpt(); ?></p>
    </div>
    <?php endwhile; ?>
    <?php endif; ?>
    <?php wp_reset_query(); ?>

    <div class="list-nb">
        <div class="row">
            <?php 
            $args = array(
                'posts_per_page' => 3,
                'post_type'      => 'post',
                'cat'            => 15,
                'offset' => 1
            );
            $the_query = new WP_Query( $args );
            ?>
            <?php if( $the_query->have_posts() ): ?>
            <?php while( $the_query->have_posts() ) : $the_query->the_post(); ?>
            <div class="col-xs-4 col-sm-4 col-md-4 style-box">
                <div class="list-post">
                    <a
                        href="<?php the_permalink(); ?>"><?php echo get_the_post_thumbnail( get_the_id(), 'thumnail', array( 'class' =>'thumnail') ); ?></a>
                    <h4>
                        <a href="<?php the_permalink(); ?>"><?php the_title(); ?> </a>
                    </h4>
                    <div class="meta">
                        <span>Ngày đăng: <?php echo get_the_date('d/m/y'); ?></span>
                        <span>Lượt xem: <?php echo getpostviews(get_the_id()); ?></span>
                    </div>
                </div>
            </div>
            <?php endwhile; ?>
            <?php endif; ?>
            <?php wp_reset_query(); ?>
        </div>
    </div>
</div>