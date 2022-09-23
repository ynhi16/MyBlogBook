<div class="widget">
    <h3>Tìm kiếm</h3>
    <form action="<?php bloginfo('url'); ?>/" method="get" role="form">
        <input type="text" class="form-control " name="s">
        <button type="submit" class="btn btn-danger mt-2">Tìm kiếm</button>
    </form>
</div>
<div class="widget">
    <h3>Chuyên mục</h3>
    <div class="content-w">
        <ul>
            <?php 
            $args = array(
                'child_of'  => 0,
                '<strong>orderby</strong>'    => 'íd',
            );
            $categories = get_categories( $args );
            foreach ( $categories as $category ) { ?>
            <li><a href="<?php echo get_term_link($category->slug, 'category');?>">
                    <?php echo $category->name ; ?>
                    <span>(<?php echo  $category->count; ?>)</span></a>
                <?php } ?>


            </li>
        </ul>
    </div>
</div>
<div class="widget">
    <h3>Bài viết mới</h3>
    <div class="content-new">
        <ul>
            <?php if( have_posts() ): ?>
            <?php while( have_posts() ) : the_post(); ?>
            <li>
                <a
                    href="<?php the_permalink ?>"><?php echo get_the_post_thumbnail( get_the_id(), 'thumnail', array( 'class' =>'thumnail') ); ?></a>
                <h4><a href="<?php the_permalink() ?>"><?php the_title() ?></a></h4>
                <div class="meta"><span>Ngày đăng: <?php echo get_the_date('d/m/y') ?></span></div>
                <div class="clear"></div>
            </li>
            <?php endwhile; ?>
            <?php endif; ?>
            <?php wp_reset_query(); ?>

            <!-- <li>
                <a href="#"><img src="<?php bloginfo('template_directory') ?>/images/news.png" alt=""></a>
                <h4><a href="#">Học HTML & CSS, học front end thông qua dự án thực tế</a>
                </h4>
                <div class="meta"><span>Ngày đăng: 22-02-2016</span></div>
                <div class="clear"></div>
            </li>
            <li>
                <a href="#"><img src="<?php bloginfo('template_directory') ?>/images/news.png" alt=""></a>
                <h4><a href="#">5 frameworks frontend miễn phí tốt nhất cho dự án web của
                        bạn</a>
                </h4>
                <div class="meta"><span>Ngày đăng: 22-02-2016</span></div>
                <div class="clear"></div>
            </li>
            <li>
                <a href="#"><img src="<?php bloginfo('template_directory') ?>/images/news.png" alt=""></a>
                <h4><a href="#">Những đoạn code hay dùng trong lập trình theme woocommecre
                        wordpressg</a></h4>
                <div class="meta"><span>Ngày đăng: 22-02-2016</span></div>
                <div class="clear"></div>
            </li>
            <li>
                <a href="#"><img src="<?php bloginfo('template_directory') ?>/images/news.png" alt=""></a>
                <h4><a href="#">Share plugin get bài viết từ 10 trang báo nổi tiếng của Việt
                        Nam</a>
                </h4>
                <div class="meta"><span>Ngày đăng: 22-02-2016</span></div>
                <div class="clear"></div>
            </li> -->
        </ul>
    </div>
</div>
<div class="widget">
    <h3>Bài viết xem nhiều</h3>
    <div class="content-mostv">
        <ul>
            <?php $i=1; ?>
            <?php $getposts = new WP_query(); $getposts->query('post_status=publish&showposts=5&post_type=post&meta_key=views&orderby=meta_value_num'); ?>
            <?php global $wp_query; $wp_query->in_the_loop = true; ?>
            <?php while ($getposts->have_posts()) : $getposts->the_post(); ?>
            <li>
                <span><?php echo $i ?></span>
                <h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
                <div class="clear"></div>
            </li>
            <?php $i++ ?>
            <?php endwhile; wp_reset_postdata(); ?>
        </ul>
        <!-- <ul>
            <li>
                <span>1</span>
                <h4><a href="#">Download file psd background chương trình, hội nghị</a></h4>
                <div class="clear"></div>
            </li>
            <li>
                <span>2</span>
                <h4><a href="#">Download miễn phí phần mềm Adobe indesign CS4 & CS5</a></h4>
                <div class="clear"></div>
            </li>
            <li>
                <span>3</span>
                <h4><a href="#">Du hí Quảng Nam – Làng bích họa – Tượng đài Mẹ Thứ</a></h4>
                <div class="clear"></div>
            </li>
            <li>
                <span>4</span>
                <h4><a href="#">Du hí Quảng Nam – Thánh địa Mỹ Sơn</a></h4>
                <div class="clear"></div>
            </li>
            <li>
                <span>5</span>
                <h4><a href="#">Share full code website tin tức sử dụng wordpress</a></h4>
                <div class="clear"></div>
            </li>
            <li>
                <span>6</span>
                <h4><a href="#">Share full code web shop, web bán hàng sử dụng wordpress</a>
                </h4>
                <div class="clear"></div>
            </li>
            <li>
                <span>7</span>
                <h4><a href="#">Những câu hỏi thường gặp khi đi phỏng vấn lập trình php</a>
                </h4>
                <div class="clear"></div>
            </li>
            <li>
                <span>8</span>
                <h4><a href="#">10 đoạn code đếm ngược sử dụng script cực đẹp, miễn phí</a>
                </h4>
                <div class="clear"></div>
            </li>
        </ul> -->

    </div>
</div>
<div class="widget">
    <h3>Quảng cáo</h3>
    <div class="content-wc">
        <a href="#"><img src="<?php bloginfo('template_directory') ?>/images/qc.jpg" alt=""></a>
    </div>
</div>
<div class="widget">
    <h3>Bạn bè</h3>
    <div class="content-w">
        <ul>
            <li><a href="http://huykira.net">Huy Kira</a></li>
            <li><a href="http://huykira.net">Blog Huy Kira</a></li>
        </ul>
    </div>
</div>
<div class="widget">
    <h3>Facebook</h3>
    <div class="content-fb">
        <ul>
            <li><a href="https://vnexpress.net/giai-tri/sach"><img
                        src="<?php bloginfo('template_directory') ?>/images/facebook.jpg" alt=""></a></li>
        </ul>
    </div>
</div>