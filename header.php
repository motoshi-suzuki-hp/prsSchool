<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-type" content="text/html;charset=UTF-8" />
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <script src="https://kit.fontawesome.com/37c44e9cd8.js" crossorigin="anonymous"></script>
    <title>PRSスクール</title>
    <?php wp_head(); ?>
</head>
<body>
     <header id="header">
        <div class="header-inner">
            <div class="header-content">
                <div class="header-logo">
                    <a href="<?= home_url() ?>">
                        <img src="<?= get_template_directory_uri(); ?>/img/logo.png" alt="logo">
                    </a>
                </div>
                
                <div class="header-menu" id="header-menu">
                    <nav class="menu_pc">
                        <ul class="menu-list_pc">
                            <li>
                                <a href="<?= home_url() ?>">Home</a>
                            </li>
                            <li>
                                <a href="<?= home_url('/covid/')?>">コロナ対策と方針</a>
                            </li>
                            <li>
                                <a href="<?= home_url('/blog/')?>">新着情報</a>
                            </li>
                            <li class="has-child">
                                <p>各種講座</p>
                                <ul>
                                    <li><a href="<?= home_url('/primary/')?>">小学生講座</a></li>
                                    <li><a href="<?= home_url('/junior/')?>">中学生講座</a></li>
                                    <li><a href="<?= home_url('/high/')?>">高校生講座</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="<?= home_url('/location/')?>">教室案内</a>
                            </li>
                            <li id="contact_pc">
                                <a href="<?= home_url('/contact/') ?>"><span>よくある質問・</span><span>お問い合せ</span></a>
                            </li>
                        </ul>
                    </nav>
                    <div class="button-position">
                        <div id="button" class="hamburger-button">
                            <span id="hb1"></span>
                            <span id="hb2"></span>
                            <span id="hb3"></span>
                        </div>
                    </div>
                
                    <nav id="menu_sp" class="menu_sp">
                        <ul class="menu-list_sp">
                            <li>
                                <a href="<?= home_url()?>">Home</a>
                            </li>
                            <li>
                                <a href="<?= home_url('/covid/')?>">コロナ対策と方針</a>
                            </li>
                            <li>
                                <a href="<?= home_url('/blog/')?>">新着情報</a>
                            </li>
                            <li>
                                <a href="<?= home_url('/primary/')?>">小学生講座</a>
                            </li>
                            <li>
                                <a href="<?= home_url('/junior/')?>">中学生講座</a>
                            </li>
                            <li>
                                <a href="<?= home_url('/high/')?>">高校生講座</a>
                            </li>
                            <li>
                                <a href="<?= home_url('/location/')?>">教室案内</a>
                            </li>
                            <li>
                                <a href="<?= home_url('/contact') ?>">よくある質問・お問い合せ</a>
                            </li>
                        </ul>
                    </nav>
                    <div id="modal" class="modal"></div>
                </div>
            </div>
        </div>
    </header>