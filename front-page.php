<?php get_header(); ?>


<style>
        .showcase {
            background: url(<?php echo get_theme_mod('showcase_image', get_bloginfo('template_url').'/img/showcase.jpg')?>) no-repeat center center;
        }
    </style>
<section class="showcase">
    <div class="container">
        <h1><?php echo get_theme_mod('showcase_heading','Custom Bootstrap Wordpress Theme' )?></h1>
        <p><?php echo get_theme_mod('showcase_text','Sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Aenean eu leo quam')?></p>
        <a href="<?php echo get_theme_mod('btn_url','http://test.com') ?>" class="btn btn-primary btn-lg"><?php echo get_theme_mod('btn_text','Get started')?></a>
    </div>
</section>

<section class="boxes">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <?php if(is_active_sidebar('box1')) : ?>
                <?php dynamic_sidebar('box1'); ?>
                <?php endif; ?>
            </div>

            <div class="col-md-4">
                <?php if(is_active_sidebar('box2')) : ?>
                <?php dynamic_sidebar('box2'); ?>
                <?php endif; ?>
            </div>

            <div class="col-md-4">
                <?php if(is_active_sidebar('box3')) : ?>
                <?php dynamic_sidebar('box3'); ?>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>
<?php get_footer(); ?>