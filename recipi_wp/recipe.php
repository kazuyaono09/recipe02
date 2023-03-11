<?php /* Template Name: template_recipe; */ ?>

<?php get_header(); ?>

    <main class="main">
        <div class="recipe__container">
            <div class="recipe__box">

                <div class="recipe__content--left">
                    <img class="recipe--img" src="<?php echo esc_url(get_theme_file_uri('img/recipe.jpg')); ?>" alt="レシピの画像">
                </div>

                <div class="recipe__content--right">
                    <h1 class="recipe__title">ひよこ豆とアボガドのタコス</h1>
                    <p class="recipe__text">たっぷりのひよこ豆とレンズ豆にアボガドとトマトを添えて、少
                        しライムを絞ったらおいしいタコスのできあがりです。 
                    </p> 
                    <ul class="recipe__material">
                        <h2 class="material__title">材料 (2人分)</h2>
                        <li class="recipe__material--item">
                            <dl>
                                <dt class="material--name">テキストテキスト</dt>
                                <dd class="material--number">1個</dd>
                            </dl>
                        </li>
                        <li class="recipe__material--item">
                            <dl>
                                <dt class="material--name">テキストテキスト</dt>
                                <dd class="material--number">1個</dd>
                            </dl>
                        </li>
                        <li class="recipe__material--item">
                            <dl>
                                <dt class="material--name">テキストテキスト</dt>
                                <dd class="material--number">1個</dd>
                            </dl>
                        </li>
                        <li class="recipe__material--item">
                            <dl>
                                <dt class="material--name">テキストテキスト</dt>
                                <dd class="material--number">1個</dd>
                            </dl>
                        </li>
                        <li class="recipe__material--item">
                            <dl>
                                <dt class="material--name">テキストテキスト</dt>
                                <dd class="material--number">1個</dd>
                            </dl>
                        </li>
                    </ul>   

                    <ul class="recipe__make">
                        <h2 class="make__title">作り方</h2>
                        <li class="recipe__make--item">
                            <dl>
                                <dt class="make--order">1.</dt>
                                <dd class="make--howto">テキストテキストテキストテキスト</dd>
                            </dl>
                        </li>
                        <li class="recipe__make--item">
                            <dl>
                                <dt class="make--order">2.</dt>
                                <dd class="make--howto">テキストテキストテキストテキスト</dd>
                            </dl>
                        </li>
                        <li class="recipe__make--item">
                            <dl>
                                <dt class="make--order">3.</dt>
                                <dd class="make--howto">テキストテキストテキストテキスト</dd>
                            </dl>
                        </li>
                        <li class="recipe__make--item">
                            <dl>
                                <dt class="make--order">4.</dt>
                                <dd class="make--howto">テキストテキストテキストテキスト</dd>
                            </dl>
                        </li>
                        <li class="recipe__make--item">
                            <dl>
                                <dt class="make--order">5.</dt>
                                <dd class="make--howto">テキストテキストテキストテキスト</dd>
                            </dl>
                        </li>
                    </ul>           
                </div>
            </div>
            <a class="recipe__btn" href="<?php echo esc_url(home_url('/recipe-2')); ?>">レシピ一覧を見る</a>
        </div>
    </main>

<?php get_template_part('/include/parts-footer'); ?>

<?php get_footer(); ?>
