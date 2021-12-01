<!DOCTYPE html>
<html lang="ja" prefix="og: http://ogp.me/ns#">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta property="og:title" content="">
    <meta property="og:type" content="">
    <meta property="og:url" content="">
    <meta property="og:image" content="">
    <meta property="og:site_name" content="">
    <meta property="og:description" content="" />
    <meta property="fb:app_id" content="">
	<title>Neo Career</title>
	
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <![endif]-->
    <!-- CSS読込 -->
    <!-- <link rel="stylesheet" href="assets/css/normalize.css"> -->
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/pagetop.css">
    <link href="js/slick.css" rel="stylesheet" type="text/css">
    <link href="js/slick-theme.css" rel="stylesheet" type="text/css">

    <!-- Base CSS -->
    <link rel="stylesheet" href="css/base.css">
    <!-- Common CSS -->
    <link rel="stylesheet" href="css/common.css">
    <link rel="stylesheet" href="css/top.css">
    <!-- HTML：CDNリンクを貼り付け -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/yakuhanjp@3.4.1/dist/css/yakuhanjp-noto.min.css">

    <!-- フォントオーサム -->
    <link href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" rel="stylesheet">

    <!-- ファビコン読込 -->
    <link rel="shortcut icon" href="img/favicon.ico" />
    <meta http-equiv="imagetoolbar" content="no">
    <!-- 検索有無設定 -->
    <!-- jquery読込 -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="js/easy-rollover.js"></script>
    <script src="https://use.typekit.net/zzb5mon.js"></script>
    <script src="js/modernizr-2.8.3.min.js"></script>
    <script>
        try {
            Typekit.load({
                async: true
            });
        } catch (e) {}
    </script>
    <script type="text/javascript" src="js/slick.min.js"></script>
    <script type="text/javascript" src="js/main.js"></script>
    <script type="text/javascript" src="js/modal.js"></script>
    <script type="text/javascript" src="js/base-color.js"></script>
    <script src="https://ajaxzip3.github.io/ajaxzip3.js"></script>

    <script type="text/javascript" src="js/jquery.easeScroll.js"></script>
    <!-- スムーススクロール -->
    <script type="text/javascript">
        $(function () {
            $('a[href^="#"]').on('click', function () {
                var speed = 1000;
                var href = $(this).attr('href');
                var target = $(href == '#' || href == '' ? 'html' : href);
                var position = target.offset().top;
                $('body,html').animate({
                    scrollTop: position
                }, speed, 'swing');
                return false;
            });
        });
    </script>

    <style id='base_val' type='text/css'></style>

    <style type='text/css'>
        table {
            margin: auto;
        }

        /*表示切替*/
        html body .view_pc {
            display: block !important;
        }

        html body table.view_pc {
            display: table !important;
        }

        html body table.view_pc tr {
            display: table !important;
        }

        html body table.view_pc th {
            display: table !important;
        }

        html body table.view_pc td {
            display: table !important;
        }

        html body .view_pctab {
            display: block !important;
        }

        html body table.view_pctab {
            display: table !important;
        }

        html body table.view_pctab tr {
            display: table !important;
        }

        html body table.view_pctab th {
            display: table !important;
        }

        html body table.view_pctab td {
            display: table !important;
        }

        html body .view_tab {
            display: none !important;
        }

        html body .view_sp {
            display: none !important;
        }

        html body .view_tabsp {
            display: none !important;
        }

        @media only screen and (max-width: 1050px) {
            html body .view_pc {
                display: none !important;
            }

            html body .view_pctab {
                display: block !important;
            }

            html body table.view_pctab {
                display: table !important;
            }

            html body table.view_pctab tr {
                display: table !important;
            }

            html body table.view_pctab th {
                display: table !important;
            }

            html body table.view_pctab td {
                display: table !important;
            }

            html body .view_tab {
                display: block !important;
            }

            html body table.view_tab {
                display: table !important;
            }

            html body table.view_tab tr {
                display: table !important;
            }

            html body table.view_tab th {
                display: table !important;
            }

            html body table.view_tab td {
                display: table !important;
            }

            html body .view_sp {
                display: none !important;
            }

            html body .view_tabsp {
                display: block !important;
            }

            html body table.view_tabsp {
                display: table !important;
            }

            html body table.view_tabsp tr {
                display: table !important;
            }

            html body table.view_tabsp th {
                display: table !important;
            }

            html body table.view_tabsp td {
                display: table !important;
            }
        }

        @media only screen and (max-width: 770px) {
            html body .view_pc {
                display: none !important;
            }

            html body .view_pctab {
                display: none !important;
            }

            html body .view_tab {
                display: none !important;
            }

            html body .view_sp {
                display: block !important;
            }

            html body table.view_sp {
                display: table !important;
            }

            html body table.view_sp tr {
                display: table !important;
            }

            html body table.view_sp th {
                display: table !important;
            }

            html body table.view_sp td {
                display: table !important;
            }

            html body .view_tabsp {
                display: block !important;
            }

            html body table.view_tabsp {
                display: table !important;
            }

            html body table.view_tabsp tr {
                display: table !important;
            }

            html body table.view_tabsp th {
                display: table !important;
            }

            html body table.view_tabsp td {
                display: table !important;
            }
        }

        /* エラーメッセージ　赤文字設定 */
        .error_msg {
            color: #ff2e5a !important;
        }

    </style>
    <style type='text/css'>
        .mg_auto {
            margin: 0 auto;
        }

        .undrag {
            user-drag: none;
            user-select: none;
            -moz-user-select: none;
            -webkit-user-drag: none;
            -webkit-user-select: none;
            -ms-user-select: none;
        }

        /* the slides */
        .slick-slide {
            margin: 0 .3%;
        }
    </style>

</head>

<body>
    <header class="bg_white fixed_top" style="box-shadow: 0px 4px 8px 0px rgba(0,0,0,0.20);">
        <div class="view_pc">
            <div class="wrapper_55">
                <div class="wrapper_100 flex top txt_tpad_05" style="justify-content: space-between;align-items: center;">
                    <div class="width_30">
                        <h1 class="txt_left">
                            <a href="/">
                                <img src="/image/header/header_logo.svg" class="width_100" alt="">
                            </a>
                        </h1>
                    </div>
                    <div class="width_28">
                        <a href="/#sect_11" class="square_btn noto_medium width_100 font_100 white line_h_300 box_radius_5" style="background-color: #ff9000;display:none;">
                            お問合せ・資料請求
                        </a>
                    </div>
                </div>
                <ul class="wrapper_100 flex bottom txt_bpad_1 txt_tpad_05" style="justify-content: space-between;align-items: center; display:none">
                    <li>
                        <a href="/#sect_2" class="font_75 color_1 noto_regular">特徴・強み</a>
                    </li>
                    <li>
                        <a href="/#sect_3" class="font_75 color_1 noto_regular">主な導入企業様</a>
                    </li>
                    <li>
                        <a href="/#sect_5" class="font_75 color_1 noto_regular">サービス概要</a>
                    </li>
                    <li>
                        <a href="/#sect_7" class="font_75 color_1 noto_regular">導入事例</a>
                    </li>
                    <li>
                        <a href="/#sect_9" class="font_75 color_1 noto_regular">導入の流れ</a>
                    </li>
                    <li>
                        <a href="/#sect_10" class="font_75 color_1 noto_regular">よくあるご質問</a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="view_tabsp">
            <div class="wrapper_100">
                <div class="wrapper_100 flex top" style="justify-content: space-between;">
                    <div class="width_45 txt_tpad_1 txt_lpad_2">
                        <h1 class="txt_left" style="transition: .3s ease-in-out;">
                            <a href="">
                                <img src="/image/header/header_logo.svg" class="width_100" alt="">
                            </a>
                        </h1>
                    </div>
                    <div class="width_20 menu_cont" style="transition: .3s ease-in-out;">
                        <div class="m_menu width_50 " style="display: none;">
                            <span class="line_t"></span>
                            <span class="line_m"></span>
                            <span class="line_b"></span>
                        </div>
                    </div>
                </div>
            </div>  
        </div>
    </header>

    <!-- NAV SP -->
    <div class="nav_sp fixed_top view_tabsp" style="z-index: 94 !important;">
        <div class="wrapper_100 flex" style="height: 100%; overflow: scroll;">
            <div class="width_15 bg_white"></div>
            <div class="width_85" style="background-color: #005cdc;">
                <div class="space_10"></div>
                <div class="space_5"></div>
                <ul class="wrapper_100">
                    <li class="bspace_5">
                        <a href="/#sect_2" class="font_100 white noto_regular">特徴・強み</a>
                    </li>
                    <li class="bspace_5">
                        <a href="/#sect_3" class="font_100 white noto_regular">主な導入企業様</a>
                    </li>
                    <li class="bspace_5">
                        <a href="/#sect_5" class="font_100 white noto_regular">サービス概要</a>
                    </li>
                    <li class="bspace_5">
                        <a href="/#sect_7" class="font_100 white noto_regular">導入事例</a>
                    </li>
                    <li class="bspace_5">
                        <a href="/#sect_9" class="font_100 white noto_regular">導入の流れ</a>
                    </li>
                    <li>
                        <a href="/#sect_10" class="font_100 white noto_regular">よくあるご質問</a>
                    </li>
                </ul>
                <div class="space_5"></div>
            </div>
        </div>
    </div>

    <main>
        <section class="sect_11">
            <div class="space_5"></div>
            <div class="space_5 view_pc"></div>
            <div class="space_10 view_tabsp"></div>
            <div class="form_width">
                <div class="title">
                    <img src="/image/sect_11/sect_11_title.svg" class="width_32 mg_auto view_pc" alt="">
                    <img src="/image/sect_11/sect_11_title.svg" class="width_60 mg_auto view_tabsp" alt="">
                    <div class="space_3"></div>
                </div>
                <div class="wrapper_95">
                    <form method="post" action="#form" enctype="multipart/form-data" novalidate>
                        <div class="flex form_group">
                            <div class="c_width_25 txt_left">
                                <label for="" class="noto_medium font_75 color_1">お問合せ内容</label>
                            </div>
                            <div class="c_width_75">
                                <p class="font_75 txt_left black noto_bold txt_mg_0"><?php echo $clean['inquiry']; ?></p>
                            </div>
                        </div>
                        <div class="space_1 view_tabsp"></div>
                        <div class="flex form_group">
                            <div class="c_width_25 txt_left">
                                <div class="space_05 view_pc"></div>
                                <label for="" class="noto_medium font_75 color_1">会社名 <span class="need noto_medium">必須</span></label>
                            </div>
                            <div class="c_width_75">
                                <p class="font_75 txt_left black noto_bold line_h_200 txt_mg_0"><?php echo $clean['company_name']; ?></p>
                            </div>
                        </div>
                        <div class="flex form_group">
                            <div class="c_width_25 txt_left">
                                <div class="space_05 view_pc"></div>
                                <label for="" class="noto_medium font_75 color_1">氏名 <span class="need noto_medium">必須</span></label>
                            </div>
                            <div class="c_width_75">
                                <p class="font_75 txt_left black noto_bold line_h_200 txt_mg_0"><?php echo $clean['f_name'] . ' ' . $clean['l_name']; ?></p>
                            </div>
                        </div>
                        <div class="flex form_group">
                            <div class="c_width_25 txt_left">
                                <div class="space_05 view_pc"></div>
                                <label for="" class="noto_medium font_75 color_1">メールアドレス <span class="need noto_medium">必須</span></label>
                            </div>
                            <div class="c_width_75">
                                <p class="font_75 txt_left black noto_bold line_h_200 txt_mg_0"><?php echo $clean['email']; ?></p>
                            </div>
                        </div>
                        <div class="space_1 view_tabsp"></div>
                        <div class="flex form_group">
                            <div class="c_width_25 txt_left">
                                <div class="space_05 view_pc"></div>
                                <label for="" class="noto_medium font_75 color_1">電話番号 <span class="need noto_medium">必須</span></label>
                            </div>
                            <div class="c_width_75">
                            <p class="font_75 txt_left black noto_bold line_h_200 txt_mg_0"><?php echo $clean['tel1'] . ' ' .$clean['tel2'] . ' ' .$clean['tel3']; ?></p>
                            </div>
                        </div>
                        <div class="space_1 view_tabsp"></div>
                        <div class="flex form_group">
                            <div class="c_width_25 txt_left">
                                <label for="" class="noto_medium font_75 color_1">役職 <span></span></label>
                            </div>
                            <div class="c_width_75">
                                <p class="font_75 txt_left black noto_bold line_h_200 txt_mg_0"><?php echo $clean['director']; ?></p>
                            </div>
                        </div>
                        <div class="space_1 view_tabsp"></div>
                        <div class="flex form_group">
                            <div class="c_width_25 txt_left">
                                <div class="space_05 view_pc"></div>
                                <label for="" class="noto_medium font_75 color_1">お問合せ内容詳細 </label>
                            </div>
                            <div class="c_width_75">
                            <p class="font_75 txt_left black noto_bold line_h_200 txt_mg_0"><?php echo $clean['content']; ?></p>
                            </div>
                        </div>
                        <div class="space_2 view_pc"></div>
                        <div class="btn_cont">
                            <div class="view_pc">
                                <input type="submit" name="btn_submit" class="square_btn noto_medium font_100 white width_50 mg_auto line_h_350 box_radius_5" value="送信する" style="background-color: #005cdc;box-shadow: 5px 5px 11px -1px rgb(0 0 0 / 34%);">
                                <div class="space_1"></div>
                                <input type="submit" name="btn_back" class="square_btn noto_medium font_100 white width_50 mg_auto line_h_350 box_radius_5" value="入力画面に戻る" style="background-color: #ff9000;box-shadow: 5px 5px 11px -1px rgb(0 0 0 / 34%);">
                            </div>
                            <div class="view_tabsp">
                                <input type="submit" name="btn_submit" class="square_btn noto_medium font_100 white width_100 mg_auto line_h_350 box_radius_5" value="送信する" style="background-color: #005cdc;box-shadow: 5px 5px 11px -1px rgb(0 0 0 / 34%);">
                                <div class="space_1"></div>
                                <input type="submit" name="btn_back" class="square_btn noto_medium font_100 white width_100 mg_auto line_h_350 box_radius_5" value="入力画面に戻る" style="background-color: #ff9000;box-shadow: 5px 5px 11px -1px rgb(0 0 0 / 34%);">
                            </div>
                        </div>

                        <input type="hidden" name="inquiry" value="<?php echo $clean['inquiry']; ?>">
                        <input type="hidden" name="company_name" value="<?php echo $clean['company_name']; ?>">
                        <input type="hidden" name="f_name" value="<?php echo $clean['f_name']; ?>">
                        <input type="hidden" name="l_name" value="<?php echo $clean['l_name']; ?>">
                        <input type="hidden" name="email" value="<?php echo $clean['email']; ?>">
                        <input type="hidden" name="tel1" value="<?php echo $clean['tel1']; ?>">
                        <input type="hidden" name="tel2" value="<?php echo $clean['tel2']; ?>">
                        <input type="hidden" name="tel3" value="<?php echo $clean['tel3']; ?>">
                        <input type="hidden" name="director" value="<?php echo $clean['director']; ?>">
                        <input type="hidden" name="content" value="<?php echo $clean['content']; ?>">
                    </form>
                </div>
            </div>
            <div class="space_5"></div>
        </section>
    </main>

    <footer>
        <p class="noto_regular font_60">©NEO CAREER</p>
        <div class="space_2"></div>
    </footer>

    <script>
        // $("html").easeScroll();
    </script>

    <script>
        $(document).ready(function(){
            $('.sect_3_slider').slick({
                infinite: true,
                slidesToShow: 8.5,
                arrows: false,
                centerMode: true,
                autoplay: true,
                autoplaySpeed: 0,
                speed: 3000,
                cssEase:'linear',
                focusOnSelect: false,
                draggable:false,
                swipeToSlide: false,
                pauseOnHover: false,
                responsive: [
                    {
                    breakpoint: 1050,
                        settings: {
                            slidesToShow: 3.5,
                        }
                    },
                    // You can unslick at a given breakpoint now by adding:
                    // settings: "unslick"
                    // instead of a settings object
                ]
            });

            $('.m_menu').click(function(){
                $('.m_menu span').toggleClass('isActive');
                $('header').toggleClass('isActive')
                $('.nav_sp').toggleClass('isActive')
            })
        });
        
    </script>

</body>

</html>