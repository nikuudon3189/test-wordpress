<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>うどん大学自転車競技部</title>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/stylesheet.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

</head>

<body class="jumbotron">

    <header class="jumbotron header-top">
        <a name="top"></a>
        <div class="header-info container">
            <div class="logo-img row">
                <img src="<?php echo get_template_directory_uri(); ?>/images/club-logo.png" alt="うどん大学自転車競技部ロゴ">

                <nav class="row">
                    <ul class="row">
                        <li class="li1"><a href="<?php echo get_template_directory_uri(); ?>/#active">活動内容</a></li>
                        <li class="li1"><a href="<?php echo get_template_directory_uri(); ?>/#blog">ブログ</a></li>
                        <li class="li2"><a href="<?php echo get_template_directory_uri(); ?>/#contact">お問い合わせ</a></li>
                    </ul>
                </nav>
            </div>
            <h1><span class="header-span">人</span>力最速のスピードをあなたも体験してみませんか。</h1>
        </div>

    </header>

    <a name="active"></a>
    <div class="jumbotron first-message">
        <div class="container message-content">
            <h2>初めての方はこちらをご覧ください</h2>
        </div>
    </div>

    <section class="table-active">
        <div class="active jumbotron">
            <div class="active-img container">
                <h2>活動内容</h2>
                <p>うどん大学自転車競技部では様々な自転車競技に取り組んでいます。<br>
                    私たちと共に未知の競技に挑戦してみませんか？</p>
            </div>
        </div>
    </section>

    <section class="actives container">
        <div class="active-content row">
            <div class="content1 col-xl-4 col-lg-4 col-md-4 co-sm-10">
                <img src="<?php echo get_template_directory_uri(); ?>/images/roadrece_2.png" alt="ロードレース">
                <h3><span class="road-span">R</span>oad rece</h3>
                <p>主に公道を使って行われるレースで<br>
                    す。ゴールでの着順やタイムで順位<br>
                    が決まります。また、数日かけて行<br>
                    われ最終的に合計タイムが最も少な<br>
                    いものが勝利するステージレースも<br>
                    存在します。</p>
            </div>

            <div class="content2 col-xl-4 col-lg-4 col-md-4 co-sm-10">
                <img src="<?php echo get_template_directory_uri(); ?>/images/trackrece_1.jpg" alt="トラックレース">
                <h3><span class="track-span">T</span>rack rece</h3>
                <p>トラックと呼ばれる競技場を使って<br>
                    行われるレースです。トラックレー<br>
                    スの中にも行く綱の種目があり着順<br>
                    やタイム、ポイントによって順位が<br>
                    決まります。またチームで協力する<br>
                    種目も存在します。</p>
            </div>

            <div class="content3 col-xl-4 col-lg-4 col-md-4 co-sm-10">
                <img src="<?php echo get_template_directory_uri(); ?>/images/cyclocloss_1.jpg" alt="シクロクロス">
                <h3><span class="cyclo-span">C</span>yclo cross</h3>
                <p>オフロードのコースを使用したレー<br>
                    スです。コースの途中には障害物や<br>
                    階段などがあり、自転車を押したり<br>
                    担いだりする必要があります。脚力<br>
                    ももちろんですが自転車をコントロ<br>
                    ールする技術も必要です。</p>
            </div>

        </div>
    </section>

    <div class="margin-logo img-responsive center-block">
        <img src="<?php echo get_template_directory_uri(); ?>/images/club-logo2.png" alt="うどん大学自転車競技部ロゴ">
    </div>

    <section class="table-blog">
        <a name="blog"></a>
        <div class="blog-topic container">
            <h2>ブログトピック</h2>
            <p>部の活動やお知らせはブログを使っています。</p>

            <div class="input-group">
                <input type="text" class="surch-blog col-xl-4 col-lg-4 col-md-4 col-sm-8">
                <span class="input-group-btn"><img src="<?php echo get_template_directory_uri(); ?>/images/surch-bottun.png" alt=""></span>
            </div>
        </div>
    </section>



    <?php
    $args = array(
        'post_type' => 'post',
        'posts_per_page' => 10
    );
    $st_query = new WP_Query( $args );
    ?>
    <?php if ( $st_query->have_posts() ): ?>
    <?php while ( $st_query->have_posts() ) : $st_query->the_post(); ?>
    <?php the_time( 'Y年m月d日' ); ?><br />
    <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a><br />
    <?php echo get_the_post_thumbnail( $post_id, $size, $attr ); ?>
    <?php endwhile; ?>
    <?php else: ?>
    <p>新しい記事はありません</p>
    <?php endif; ?>




    <section class="container blog-contents">
        <div class="blog-content row">
            <div class="blog-content1 col-xl-4 col-lg-4 col-md-4 co-sm-10">
                <p>ブログ記事＃１</p>
            </div>

            <div class="blog-content2 col-xl-4 col-lg-4 col-md-4 co-sm-10">
                <p>ブログ記事＃２</p>
            </div>

            <div class="blog-content3 col-xl-4 col-lg-4 col-md-4 co-sm-10">
                <p>ブログ記事＃３</p>
            </div>
        </div>
    </section>

    <section class="container blog-contents">
        <div class="blog-content row">
            <div class="blog-content4 col-xl-4 col-lg-4 col-md-4 co-sm-10">
                <p>ブログ記事＃４</p>
            </div>

            <div class="blog-content5 col-xl-4 col-lg-4 col-md-4 co-sm-10">
                <p>ブログ記事＃５</p>
            </div>

            <div class="blog-content6 col-xl-4 col-lg-4 col-md-4 co-sm-10">
                <p>ブログ記事＃６</p>
            </div>
        </div>
    </section>

    <div class="margin-logo img-responsive center-block">
        <img src="<?php echo get_template_directory_uri(); ?>/images/club-logo2.png" alt="うどん大学自転車競技部ロゴ">
    </div>

    <section class="table-contact">
        <a name="contact"></a>
        <div class="contact container">
            <h2>お問い合わせ</h2>
        </div>
        <form action="#" class="container">
            <div class="row name-mail">
                <div class="form-group col-xl-4 col-lg-4 col-md-4 col-sm-10 col-offset-1">
                    <label>氏名</label>
                    <input type="text" class="form-control ">
                </div>
                <div class="form-group col-xl-4 col-lg-4 col-md-4 col-sm-10 col-offset-1 offset-xl-1">
                    <label>メールアドレス</label>
                    <input type="text" class="form-control">
                </div>
            </div>
            <div class="main-text">
                <div class="form-group col-xl-8 col-lg-8 col-md-8 col-sm-10">
                    <label>質問内容</label>
                    <textarea name="question" class="form-control"></textarea>
                </div>
                <input type="submit" value="送信" class="submit-bottun col-xl-8 col-lg-8 col-md-8 col-sm-10">
            </div>

        </form>

    </section>


    <div class="margin-logo img-responsive center-block">
        <img src="<?php echo get_template_directory_uri(); ?>/images/club-logo2.png" alt="うどん大学自転車競技部ロゴ">
    </div>


    <footer>
        <div class="container footer-img">
            <div class="row">
                <img src="<?php echo get_template_directory_uri(); ?>/images/club-logo.png" alt="うどん大学自転車競技部ロゴ" class="club-logo2">
                <a href="<?php echo get_template_directory_uri(); ?>/#top"><img src="<?php echo get_template_directory_uri(); ?>/images/go-top.png" alt="ページトップへ移動"></a>
            </div>
            <p>©2020-udonuniversity-cyclingclub</p>
        </div>
    </footer>



    <script>
        $(function() {

        });

    </script>

    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>

</html>
