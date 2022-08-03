<?php get_header() ?>
<main>
    <div class="fv">
        <img class="fvimg1" src="<?= get_template_directory_uri(); ?>/img/main.jpg" alt="main-img">
        <div class="fv-text">
            <h2>磐田市内に3校展開</h2>
            <b>私たちは<br><span>生徒の主体性と</span><span>本気で向き合う塾です。</span></b>
            <p>
                常に子どもたちの「心」の状態を把握した上で、<br>ひとりひとりの現状にあった的確な学習指導を行います。
            </p>
        </div>
    </div>




    <section class="about">
        <div class="about-inner">
            <div class="about-content">
                <div class="subtitle">
                    <h3>PRSスクールの特徴</h3>
                    <!-- <img src="<?= get_template_directory_uri(); ?>/img/orange-line.svg" alt=""> -->
                </div>
                <!-- <div class="about-img">
                    <img class="fvimg2" src="<?= get_template_directory_uri(); ?>/img/prs.png" alt="prs">
                </div> -->
                <div class="about-text">
                    <p>
                        カウンセラーのライセンスを取得した講師が 「学習指導」だけでなく「精神力」を高めるために何をすべきかを常にアドバイスしています。
                    </p>
                    <p>
                        生徒が自ら目指す目標を設定し、一つの目標に到達するまで真剣に取り組んでいる塾です。
                    </p>
                    <p>
                        常に子どもたちの「心」の状態を把握した上で、ひとりひとりの現状にあった的確な学習指導を行います。
                    </p>
                </div>
                <ul class="about-list">
                    <li>
                        <div class="about-list-content">
                            <div>
                                <img src="<?= get_template_directory_uri(); ?>/img/smallclass.png" alt="smallclass">
                                <h3>少人数授業</h3>
                            </div>
                            <p>生徒一人ひとりの理解度を専任講師がしっかり把握します。的確な指導を行うために15名以下のクラス編成で学力の向上を図ります。</p>
                        </div>
                    </li>

                    <li>
                        <div class="about-list-content">
                            <div>
                                <img src="<?= get_template_directory_uri(); ?>/img/up.jpg" alt="gakuryoku-up">
                                <h3>将来を見据えた授業</h3>
                            </div>
                            <p>常にアンテナを高くして中・高・大受験の研究をしています。一例としては、当スクール自慢の小学生プレミアムクラスは数年前から来るべき2020年度大学入試改革を見据えての授業を展開しております。</p>
                        </div>
                    </li>

                    <li>
                        <div class="about-list-content">
                            <div>
                                <img src="<?= get_template_directory_uri(); ?>/img/kosyu.jpg" alt="kosyu">
                                <h3>公立高校入試分析</h3>
                            </div>

                            <p>当スクールは静岡県知事認可協同組合静岡県私塾連盟に加入しており、入試に関わる情報を父兄会等を通してご提供しています。</p>
                        </div>
                    </li>

                    <li>
                        <div class="about-list-content">
                            <div>
                                <img src="<?= get_template_directory_uri(); ?>/img/follow.jpg" alt="after-follow">
                                <h3>アフターフォロー</h3>
                            </div>
                            <p>現代社会はストレス社会ともいわれています。子どもをめぐる環境も例外ではありません。当スクールでは三者面談、各種説明会、父兄会等で色々な悩みに対応しております。</p>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </section>

    <section class="news">
        <!-- <div class="news-map-inner"> -->
            <div class="news-inner">
                <div class="news-content">
                    <div class="subtitle">
                        <h3>新着情報・ブログ</h3>
                    <img src="<?= get_template_directory_uri(); ?>/img/orange-line.svg" alt="">
                    </div>
                    <?php
                        //の引数にパラメータを指定
                        $args = array(
                            'post_type' => 'post', //投稿ページ
                            'posts_per_page' => 5, //表示する記事数
                        );
                
                        // クエリの定義
                        $the_query = new WP_Query($args);
                    ?>
                    <?php if( $the_query->have_posts() ):
                        while( $the_query->have_posts() ) : $the_query->the_post(); ?>
                            <article class="news-wrap">
                                <a href="<?php the_permalink(); ?>">
                                    <img src="<?= get_template_directory_uri(); ?><?= catch_that_image(); ?>" alt="eye-catch">
                                    <h3><?php the_title() ?></h3>
                                </a>
                            </article>
                        <?php endwhile; ?>
                    <?php endif; wp_reset_postdata();?>
                    <div class="news-btn">
                        <a href="<?= home_url('/blog')?>">一覧はこちら</a>
                    </div>
                </div>
            </div>
            <!-- <div class="map-inner">
                <div class="map-content">
                    <div class="subtitle">
                        <h3>教室案内</h3>
                         <img src="<?= get_template_directory_uri(); ?>/img/orange-line.svg" alt="">
                    </div>
            
                    <div class="map-iframe">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d13115.902308862667!2d137.8613200388036!3d34.731009986489184!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1zUFJT44K544Kv44O844Or!5e0!3m2!1sja!2sjp!4v1659345840744!5m2!1sja!2sjp"  style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
            </div> -->
        <!-- </div> -->
    </section>
</main>
<?php get_footer() ?>