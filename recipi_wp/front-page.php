<?php get_header(); ?>
    <main class="main">
        <div class="mainvisual"></div>

        <section class="section__recipe">
            <div class="inner">
                <h1 class="recipe__title">Recipe Diary</h1>
                <p class="recipe__text">日々の料理レシピをまとめています。<br>和食や洋食、中華、お菓子までいろいろな料理レシピをアップしていますので、
                    みなさんの献立にお役立てくださいね！
                </p>
            </div>
        </section>

        <div class="recipe__contents">
            <ul class="recipe__list">
                <li class="recipe__item">
                    <a class="recipe__item--link" href="<?php echo esc_url(home_url('/recipe-2')); ?>">
                        <img class="recipe__item--img" src="<?php echo esc_url(get_theme_file_uri('img/recipe1.jpg')); ?>" alt="レシピの画像">
                    </a>
                </li>
                <li class="recipe__item">
                    <a class="recipe__item--link" href="<?php echo esc_url(home_url('/recipe-2')); ?>">
                        <img class="recipe__item--img" src="<?php echo esc_url(get_theme_file_uri('img/recipe2.jpg')); ?>" alt="レシピの画像">
                    </a>
                </li>
                <li class="recipe__item">
                    <a class="recipe__item--link" href="<?php echo esc_url(home_url('/recipe-2')); ?>">
                        <img class="recipe__item--img" src="<?php echo esc_url(get_theme_file_uri('img/recipe3.jpg')); ?>" alt="レシピの画像">
                    </a>
                </li>
            </ul>
            <a class="recipe__btn" href="<?php echo esc_url(home_url('/recipe-2')); ?>">レシピ一覧を見る</a>
        </div>
    </main>

<?php get_template_part('/include/parts-footer'); ?>

<?php get_footer(); ?>

