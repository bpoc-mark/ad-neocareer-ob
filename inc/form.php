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
                        <a href="/#sect_11" class="square_btn noto_medium width_100 font_100 white line_h_300 box_radius_5" style="background-color: #ff9000;">
                            お問合せ・資料請求
                        </a>
                    </div>
                </div>
                <ul class="wrapper_100 flex bottom txt_bpad_1 txt_tpad_05" style="justify-content: space-between;align-items: center;">
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
                        <div class="m_menu width_50 ">
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
        <section class="sect_1">
            <div class="view_pc tspace_5">
                <div class="wrapper_55 bg_img">
                    <img src="/image/sect_1/top.jpg" alt="豊富な | 成果もコストも | 納得！ | 実績と質の高い | コミュニケーションで | 成果が上がる | マッチングを実現！">
                    <div class="width_40 bl_0" style="left: 5%;bottom: 5%;">
                        <div class="flex" style="justify-content: space-between;">
                            <div class="width_30">
                                <img src="/image/sect_1/sect_1_img_1.png" alt="最短 10営業日～で 運用開始">
                            </div>
                            <div class="width_30">
                                <img src="/image/sect_1/sect_1_img_2.png" alt="取引社数 3,000 社以上">
                            </div>
                            <div class="width_30">
                                <img src="/image/sect_1/sect_1_img_3.png" alt="自社雇用 オペレーター 対応">
                            </div>
                        </div>
                    </div>
                    <div class="width_40 br_0" style="right: 2%;bottom: 1%;">
                        <div class="flex" style="justify-content: space-between;">
                            <div class="width_49">
                                <a href="/#sect_11" class="square_btn width_100 white noto_medium font_75 line_h_350 box_radius_5" style="background-color: #ff9000;">
                                    お問合せ
                                </a>
                            </div>
                            <div class="width_49">
                                <a href="" class="square_btn width_100 white noto_medium font_75 line_h_350 box_radius_5" style="background-color: #ff9000;">
                                    <img src="/image/sect_1/dl_icon.svg" class="width_6" alt="">
                                    資料ダウンロード
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="view_tabsp tspace_4">
                <div class="wrapper_100 bg_img">
                    <img src="/image/sect_1/sp/top.jpg" alt="豊富な | 成果もコストも | 納得！ | 実績と質の高い | コミュニケーションで | 成果が上がる | マッチングを実現！">
                    <div class="wrapper_90" style="margin-top: -15%;">
                        <div class="flex" style="justify-content: space-between;">
                            <div class="width_30">
                                <img src="/image/sect_1/sect_1_img_1.png" alt="最短 10営業日～で 運用開始">
                            </div>
                            <div class="width_30">
                                <img src="/image/sect_1/sect_1_img_2.png" alt="取引社数 3,000 社以上">
                            </div>
                            <div class="width_30">
                                <img src="/image/sect_1/sect_1_img_3.png" alt="自社雇用 オペレーター 対応">
                            </div>
                        </div>
                    </div>
                    <div class="space_1"></div>
                    <div class="width_100">
                        <div class="flex" style="justify-content: space-between;">
                            <div class="width_49">
                                <a href="/#sect_11" class="square_btn width_100 white noto_regular font_100 line_h_350 box_radius_5" style="background-color: #ff9000;">
                                    お問合せ
                                </a>
                            </div>
                            <div class="width_49">
                                <a href="" class="square_btn width_100 white noto_regular font_100 line_h_350 box_radius_5" style="background-color: #ff9000;">
                                    <img src="/image/sect_1/dl_icon.svg" class="width_6" alt="">
                                    資料ダウンロード
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="sect_2" id="sect_2">
            <div class="view_pc" style="padding-top: 10vw;margin-top:-10vw;">
                <div class="wrapper_55">
                    <div class="space_5"></div>
                    <div class="title">
                        <p class="noto_medium color_1 font_75">品質だけじゃない！価格にも自信あり！</p>
                        <div class="space_05"></div>
                        <img src="/image/sect_2/sect_2_title_border.svg" class="width_40 mg_auto" alt=""><br>
                        <div class="space_05"></div>
                        <img src="/image/sect_2/sect_2_title.svg" class="width_20 mg_auto" alt="特徴・強み">
                        <div class="space_3"></div>
                    </div>
                    <div class="wrapper_100 flex" style="justify-content: space-between;">
                        <div class="width_31">
                            <div class="wrapper_100 bg_img" style="box-shadow: 5px 5px 11px -1px rgb(0 0 0 / 34%);">
                                <img src="/image/sect_2/sect_2_img_1.png" class="width_100" alt="人材会社だからできる高い採用力で費用やサービス品質に還元">
                                <div class="wrapper_100 b0_l50 " style="background-color: #005cdc;">
                                    <div class="t0_l50 " style="border-top: 10px solid #fff;border-left: 10px solid transparent;border-bottom: 10px solid transparent;border-right: 10px solid transparent;"></div>
                                    <div class="space_2"></div>
                                    <p class="noto_bold white font_75 line_h_200">人材会社だからできる<br>
                                        高い採用力で<br>
                                        費用やサービス品質に還元</p>
                                    <div class="space_2"></div>
                                </div>
                            </div>
                        </div>
                        <div class="width_31">
                            <div class="wrapper_100 bg_img" style="box-shadow: 5px 5px 11px -1px rgb(0 0 0 / 34%);">
                                <img src="/image/sect_2/sect_2_img_2.png" class="width_100" alt="地方拠点を活用しコストダウン">
                                <div class="wrapper_100 b0_l50 " style="background-color: #005cdc;">
                                    <div class="t0_l50 " style="border-top: 10px solid #fff;border-left: 10px solid transparent;border-bottom: 10px solid transparent;border-right: 10px solid transparent;"></div>
                                    <div class="space_3"></div>
                                    <p class="noto_bold white font_75 line_h_200">地方拠点を活用し<br>
                                        コストダウン</p>
                                    <div class="space_3"></div>
                                </div>
                            </div>
                        </div>
                        <div class="width_31">
                            <div class="wrapper_100 bg_img" style="box-shadow: 5px 5px 11px -1px rgb(0 0 0 / 34%);">
                                <img src="/image/sect_2/sect_2_img_3.png" class="width_100" alt="シェアード体制によるリーズナブルプライス">
                                <div class="wrapper_100 b0_l50 " style="background-color: #005cdc;">
                                    <div class="t0_l50 " style="border-top: 10px solid #fff;border-left: 10px solid transparent;border-bottom: 10px solid transparent;border-right: 10px solid transparent;"></div>
                                    <div class="space_3"></div>
                                    <p class="noto_bold white font_75 line_h_200">シェアード体制による<br>
                                        リーズナブルプライス</p>
                                    <div class="space_3"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="space_5"></div>
                </div>
            </div>
            <div class="view_tabsp" style="margin-top: -20vw; padding-top: 20vw">
                <div class="wrapper_90">
                    <div class="space_5"></div>
                    <div class="title">
                        <p class="noto_medium color_1 font_100">品質だけじゃない！価格にも自信あり！</p>
                        <div class="space_05"></div>
                        <img src="/image/sect_2/sect_2_title_border.svg" class="width_80 mg_auto" alt=""><br>
                        <div class="space_05"></div>
                        <img src="/image/sect_2/sect_2_title.svg" class="width_35 mg_auto" alt="特徴・強み">
                        <div class="space_3"></div>
                    </div>
                    <div class="wrapper_100">
                        <div class="wrapper_100">
                            <div class="wrapper_100 bg_img" style="box-shadow: 5px 5px 11px -1px rgb(0 0 0 / 34%);">
                                <img src="/image/sect_2/sp/sect_2_img_1.png" class="width_100" alt="人材会社だからできる高い採用力で費用やサービス品質に還元">
                                <div class="wrapper_100 b0_l50 " style="background-color: #005cdc;">
                                    <div class="t0_l50 " style="border-top: 10px solid #fff;border-left: 10px solid transparent;border-bottom: 10px solid transparent;border-right: 10px solid transparent;"></div>
                                    <div class="space_2"></div>
                                    <p class="noto_bold white font_100 line_h_200">人材会社だからできる高い採用力で<br>
                                        費用やサービス品質に還元</p>
                                    <div class="space_2"></div>
                                </div>
                            </div>
                        </div>
                        <div class="space_3"></div>
                        <div class="wrapper_100">
                            <div class="wrapper_100 bg_img" style="box-shadow: 5px 5px 11px -1px rgb(0 0 0 / 34%);">
                                <img src="/image/sect_2/sp/sect_2_img_2.png" class="width_100" alt="地方拠点を活用しコストダウン">
                                <div class="wrapper_100 b0_l50 " style="background-color: #005cdc;">
                                    <div class="t0_l50 " style="border-top: 10px solid #fff;border-left: 10px solid transparent;border-bottom: 10px solid transparent;border-right: 10px solid transparent;"></div>
                                    <div class="space_3"></div>
                                    <p class="noto_bold white font_100 line_h_200">地方拠点を活用しコストダウン</p>
                                    <div class="space_3"></div>
                                </div>
                            </div>
                        </div>
                        <div class="space_3"></div>
                        <div class="wrapper_100">
                            <div class="wrapper_100 bg_img" style="box-shadow: 5px 5px 11px -1px rgb(0 0 0 / 34%);">
                                <img src="/image/sect_2/sp/sect_2_img_3.png" class="width_100" alt="シェアード体制によるリーズナブルプライス">
                                <div class="wrapper_100 b0_l50 " style="background-color: #005cdc;">
                                    <div class="t0_l50 " style="border-top: 10px solid #fff;border-left: 10px solid transparent;border-bottom: 10px solid transparent;border-right: 10px solid transparent;"></div>
                                    <div class="space_3"></div>
                                    <p class="noto_bold white font_100 line_h_200">シェアード体制による<br>
                                        リーズナブルプライス</p>
                                    <div class="space_3"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="space_5"></div>
                </div>
            </div>
        </section>
        <section class="sect_3" id="sect_3">
            <div class="view_pc" style="padding-top: 10vw;margin-top:-10vw;"></div>
            <div class="view_tabsp" style="margin-top: -20vw; padding-top: 20vw"></div>
            <div class="wrapper_100">
                <div class="space_4 view_pc"></div>
                <div class="space_4 view_tabsp"></div>
                <div class="wrapper_100">
                    <div class="title">
                        <img src="/image/sect_3/sect_3_title.svg" class="width_18 mg_auto view_pc" alt="主な導入企業様">
                        <img src="/image/sect_3/sect_3_title.svg" class="width_50 mg_auto view_tabsp" alt="主な導入企業様">
                    </div>
                    <div class="space_4"></div>
                    <div class="sect_3_slider">
                        <div>
                            <img src="/image/sect_3/sect_3_icon_1.svg" class="width_100" alt="">
                        </div>
                        <div>
                            <img src="/image/sect_3/sect_3_icon_2.svg" class="width_80 mg_auto" alt="">
                        </div>
                        <div>
                            <img src="/image/sect_3/sect_3_icon_3.png" class="width_80 mg_auto" alt="">
                        </div>
                        <div>
                            <div class="space_05"></div>
                            <img src="/image/sect_3/sect_3_icon_4.svg" class="width_100" alt="">
                        </div>
                        <div>
                            <div class="space_05"></div>
                            <img src="/image/sect_3/sect_3_icon_5.svg" class="width_100" alt="">
                        </div>
                        <div>
                            <div class="space_05"></div>
                            <img src="/image/sect_3/sect_3_icon_6.svg" class="width_100" alt="">
                        </div>
                        <div>
                            <img src="/image/sect_3/sect_3_icon_7.svg" class="width_45 mg_auto" alt="">
                        </div>
                        <div>
                            <div class="space_05"></div>
                            <img src="/image/sect_3/sect_3_icon_8.svg" class="width_100" alt="">
                        </div>
                        <div>
                            <img src="/image/sect_3/sect_3_icon_9.png" class="width_65 mg_auto" alt="">
                        </div>
                        <div>
                            <img src="/image/sect_3/sect_3_icon_10.png" class="width_70 mg_auto" alt="">
                        </div>
                        <div>
                            <div class="space_05"></div>
                            <img src="/image/sect_3/sect_3_icon_11.svg" class="width_100" alt="">
                        </div>
                        <div>
                            <div class="space_05"></div>
                            <img src="/image/sect_3/sect_3_icon_12.png" class="width_100" alt="">
                        </div>
                    </div>
                </div>
                <div class="space_3 view_pc"></div>
                <div class="space_3 view_tabsp"></div>
            </div>
        </section>
        <section class="sect_4">
            <div class="view_pc">
                <div class="space_5"></div>
                <div class="wrapper_35">
                    <div class="title">
                        <img src="/image/sect_4/sect_4_title.svg" class="width_100 mg_auto" alt="「質」を重視したアウトバウンドをお探しの方へ">
                        <div class="space_3"></div>
                    </div>
                    <div class="wrapper_95">
                        <div class="item flex txt_bpad_1" style="justify-content: flex-start;border-bottom: 1px solid #005cdc;">
                            <img src="/image/sect_4/check_icon.svg" class="width_10" alt="">
                            <p class="width_90 noto_medium font_75 txt_left txt_lpad_1">
                                トークスクリプトを読み上げるだけでなく、<br>
                                <span class="noto_bold color_1" style="font-size: 1.20vw;">商品の良いところ、悪いところを聞き出してほしい。</span>  
                            </p>
                        </div>
                        <div class="space_2"></div>
                        <div class="item flex txt_bpad_1" style="justify-content: flex-start;border-bottom: 1px solid #005cdc;">
                            <img src="/image/sect_4/check_icon.svg" class="width_10" alt="">
                            <p class="width_90 noto_medium font_75 txt_left txt_lpad_1">
                                急でも丁寧かつスピード感もって<br>
                                <span class="noto_bold color_1" style="font-size: 1.20vw;">対応してくれる会社に依頼したい。</span>  
                            </p>
                        </div>
                        <div class="space_2"></div>
                        <div class="item flex txt_bpad_1" style="justify-content: flex-start;">
                            <img src="/image/sect_4/check_icon.svg" class="width_10" alt="">
                            <p class="width_90 noto_medium font_75 txt_left txt_lpad_1">
                                <span class="noto_bold color_1" style="font-size: 1.20vw;">ターゲットにピンポイントで効率的な架電ができる</span><br>
                                企業を探している。
                            </p>
                        </div>
                    </div>
                </div>
                <div class="space_5"></div>
            </div>
            <div class="view_tabsp">
                <div class="space_5"></div>
                <div class="wrapper_90">
                    <div class="title">
                        <img src="/image/sect_4/sect_4_title.svg" class="width_100 mg_auto" alt="「質」を重視したアウトバウンドをお探しの方へ">
                        <div class="space_4"></div>
                    </div>
                    <div class="wrapper_100">
                        <div class="item flex txt_bpad_1" style="justify-content: flex-start;border-bottom: 1px solid #005cdc;">
                            <img src="/image/sect_4/check_icon.svg" class="width_15" alt="">
                            <p class="width_85 noto_medium font_75 txt_left txt_lpad_1">
                                トークスクリプトを読み上げるだけでなく、<br>
                                <span class="noto_bold color_1" style="font-size: 4.5vw;">商品の良いところ、悪いところを<br>聞き出してほしい。</span>  
                            </p>
                        </div>
                        <div class="space_2"></div>
                        <div class="item flex txt_bpad_1" style="justify-content: flex-start;border-bottom: 1px solid #005cdc;">
                            <img src="/image/sect_4/check_icon.svg" class="width_15" alt="">
                            <p class="width_85 noto_medium font_75 txt_left txt_lpad_1">
                                急でも丁寧かつスピード感もって<br>
                                <span class="noto_bold color_1" style="font-size: 4.5vw;">対応してくれる会社に依頼したい。</span>  
                            </p>
                        </div>
                        <div class="space_2"></div>
                        <div class="item flex txt_bpad_1" style="justify-content: flex-start;">
                            <img src="/image/sect_4/check_icon.svg" class="width_15" alt="">
                            <p class="width_85 noto_medium font_75 txt_left txt_lpad_1">
                                <span class="noto_bold color_1" style="font-size: 4.5vw;">ターゲットにピンポイントで<br>効率的な架電ができる</span><br>
                                企業を探している。
                            </p>
                        </div>
                    </div>
                </div>
                <div class="space_5"></div>
            </div>
        </section>
        <section class="sect_5" id="sect_5">
            <div class="view_pc" style="padding-top: 10vw;margin-top:-10vw; "></div>
            <div class="view_tabsp" style="margin-top: -20vw; padding-top: 20vw; "></div>
            <div class="view_pc" style="background-color: #e8f5ff;">
                <div class="space_5"></div>
                <div class="wrapper_55">
                    <div class="title">
                        <img src="/image/sect_5/sect_5_title.svg" class="width_25 mg_auto" alt="サービス概要">
                        <div class="width_35 mg_auto tspace_1" style="border-bottom: 3px solid #005cdc;"></div>
                    </div>
                    <div class="space_5"></div>
                    <div class="wrapper_95 bg_white flex box_radius_5" style="align-items: center;">
                        <div class="width_35">
                            <img src="/image/sect_5/sect_5_img_1.jpg" class="width_100" alt="確かな実績と営業力で即解決！ネオキャリアのアウトバウンド代行サービス" style="margin-bottom: -2.5%;">
                        </div>
                        <div class="width_65 txt_lpad_2">
                            <h3 class="noto_bold txt_left color_1" style="font-size: 1.3vw;line-height: 170%;">確かな実績と営業力で即解決！<br>
                                ネオキャリアのアウトバウンド代行サービス</h3>
                            <div class="space_1"></div>
                            <p class="noto_regular font_65 txt_left" style="line-height: 170%;">
                                約20年の営業活動で培ったノウハウと国内最大級の豊富な実績！<br>
                                貴社に代わってアウトバウンドでのコール業務や、<br>
                                リード獲得をおこない、営業やマーケティング活動の加速を⽀援します！
                            </p>
                        </div>
                    </div>
                    <div class="space_2"></div>
                    <div class="wrapper_95 bg_white flex box_radius_5" style="align-items: center;flex-direction: row-reverse;">
                        <div class="width_35">
                            <img src="/image/sect_5/sect_5_img_2.jpg" class="width_100" alt="費用対効果に合わせた発注が可能">
                        </div>
                        <div class="width_65 txt_lpad_2 txt_tpad_2 txt_bpad_2">
                            <h3 class="noto_bold txt_left color_1" style="font-size: 1.3vw;">費用対効果に合わせた発注が可能</h3>
                            <div class="space_2"></div>
                            <p class="noto_regular font_65 txt_left" style="line-height: 170%;">
                                アウトバウンドをする上で、最適な顧客リストがないという課題が多くあります。<br>
                                企業様ごとにカスタマイズしたターゲット選定による顧客リスト作成も得意です。<br>
                                対象企業を抽出し、効果的なアプローチを行います。<br>
                                また、費用対効果の設定も選ばれる理由の一つです。
                            </p>
                        </div>
                    </div>
                    <div class="space_2"></div>
                    <div class="wrapper_95 bg_white flex box_radius_5" style="align-items: center;">
                        <div class="width_35">
                            <img src="/image/sect_5/sect_5_img_3.jpg" class="width_100" alt="最短10営業日～で運用開始できるスピード感" style="margin-bottom: -2.5%;">
                        </div>
                        <div class="width_65 txt_lpad_2">
                            <h3 class="noto_bold txt_left color_1" style="font-size: 1.3vw;line-height: 170%;">最短10営業日～で運用開始できるスピード感</h3>
                            <div class="space_2"></div>
                            <p class="noto_regular font_65 txt_left" style="line-height: 170%;">
                                ネオキャリアのアウトバウンド代行ではご依頼をいただいてから<br>
                                短期間での運用開始を得意としています。<br>
                                実際にはご依頼をいただいてから10営業日～で<br>
                                スピーディーな運用開始が可能です。
                            </p>
                        </div>
                    </div>
                    <div class="space_2"></div>
                    <div class="wrapper_95 bg_white flex box_radius_5" style="align-items: center;flex-direction: row-reverse;">
                        <div class="width_35">
                            <img src="/image/sect_5/sect_5_img_4.jpg" class="width_100" alt="徹底した情報管理とセキュリティ対策">
                        </div>
                        <div class="width_65 txt_lpad_2">
                            <h3 class="noto_bold txt_left color_1" style="font-size: 1.3vw;line-height: 170%;">徹底した情報管理とセキュリティ対策</h3>
                            <div class="space_2"></div>
                            <p class="noto_regular font_65 txt_left" style="line-height: 170%;">
                                営業のアウトバウンド代行を発注する際に、情報漏洩などのリスクを心配される<br>
                                企業様は多くございます。ネオキャリアでは業務に関わる全てのスタッフに<br>
                                個人情報に関する研修や、覚書、秘密保持契約の締結など、<br>
                                非常に高いレベルのセキュリティ対策を実施しております。
                            </p>
                        </div>
                    </div>
                </div>
                <div class="space_5"></div>
            </div>
            <div class="view_tabsp" style="background-color: #e8f5ff;">
                <div class="space_5"></div>
                <div class="wrapper_90">
                    <div class="title">
                        <img src="/image/sect_5/sect_5_title.svg" class="width_45 mg_auto" alt="サービス概要">
                        <div class="width_60 mg_auto tspace_1" style="border-bottom: 3px solid #005cdc;"></div>
                    </div>
                    <div class="space_5"></div>
                    <div class="wrapper_100 bg_white flex box_radius_5">
                        <div class="width_100">
                            <img src="/image/sect_5/sect_5_img_1.jpg" class="width_100" alt="確かな実績と営業力で即解決！ネオキャリアのアウトバウンド代行サービス">
                        </div>
                        <div class="width_100 txt_lpad_2 txt_rpad_2 txt_bpad_2 txt_tpad_1">
                            <h3 class="noto_bold txt_left color_1 font_125" style="line-height: 150%;">確かな実績と営業力で即解決！<br>
                                ネオキャリアの<br>アウトバウンド代行サービス</h3>
                            <div class="space_1"></div>
                            <p class="noto_regular txt_left" style="line-height: 170%;text-align: justify;font-size: 3.3vw;">
                                約20年の営業活動で培ったノウハウと国内最大級の豊富な実績！
                                貴社に代わってアウトバウンドでのコール業務や、
                                リード獲得をおこない、営業やマーケティング活動の加速を⽀援します！
                            </p>
                        </div>
                    </div>
                    <div class="space_2"></div>
                    <div class="wrapper_100 bg_white flex box_radius_5">
                        <div class="width_100">
                            <img src="/image/sect_5/sect_5_img_2.jpg" class="width_100" alt="費用対効果に合わせた発注が可能">
                        </div>
                        <div class="width_100 txt_lpad_2 txt_rpad_2 txt_bpad_2 txt_tpad_1">
                            <h3 class="noto_bold txt_left color_1 font_125" style="line-height: 150%;">費用対効果に合わせた発注が可能</h3>
                            <div class="space_1"></div>
                            <p class="noto_regular txt_left" style="line-height: 170%;text-align: justify;font-size: 3.3vw;">アウトバウンドをする上で、最適な顧客リストがないという課題が多くあります。企業様ごとにカスタマイズしたターゲット選定による顧客リスト作成も得意です。対象企業を抽出し、効果的なアプローチを行います。<br>また、費用対効果の設定も選ばれる理由の一つです。</p>
                        </div>
                    </div>
                    <div class="space_2"></div>
                    <div class="wrapper_100 bg_white flex box_radius_5">
                        <div class="width_100">
                            <img src="/image/sect_5/sect_5_img_3.jpg" class="width_100" alt="最短10営業日～で運用開始できるスピード感">
                        </div>
                        <div class="width_100 txt_lpad_2 txt_rpad_2 txt_bpad_2 txt_tpad_1">
                            <h3 class="noto_bold txt_left color_1 font_125" style="line-height: 150%;">最短10営業日～で運用開始できる<br>スピード感</h3>
                            <div class="space_1"></div>
                            <p class="noto_regular txt_left" style="line-height: 170%;text-align: justify;font-size: 3.3vw;">ネオキャリアのアウトバウンド代行ではご依頼をいただいてから短期間での運用開始を得意としています。実際にはご依頼をいただいてから10営業日～でスピーディーな運用開始が可能です。</p>
                        </div>
                    </div>
                    <div class="space_2"></div>
                    <div class="wrapper_100 bg_white flex box_radius_5">
                        <div class="width_100">
                            <img src="/image/sect_5/sect_5_img_4.jpg" class="width_100" alt="最短10営業日～で運用開始できるスピード感">
                        </div>
                        <div class="width_100 txt_lpad_2 txt_rpad_2 txt_bpad_2 txt_tpad_1">
                            <h3 class="noto_bold txt_left color_1" style="line-height: 150%;font-size: 4.5vw;">徹底した情報管理とセキュリティ対策</h3>
                            <div class="space_1"></div>
                            <p class="noto_regular txt_left" style="line-height: 170%;text-align: justify;font-size: 3.3vw;">営業のアウトバウンド代行を発注する際に、情報漏洩などのリスクを心配される企業様は多くございます。ネオキャリアでは業務に関わる全てのスタッフに個人情報に関する研修や、覚書、秘密保持契約の締結など、非常に高いレベルのセキュリティ対策を実施しております。</p>
                        </div>
                    </div>
                </div>
                <div class="space_5"></div>
            </div>
        </section>
        <section class="sect_6">
            <div class="view_pc">
                <div class="space_5"></div>
                <div class="wrapper_55">
                    <div class="title">
                        <img src="/image/sect_6/sect_6_title.svg" class="width_35 mg_auto" alt="簡単入力1分！">
                    </div>
                    <div class="wrapper_75">
                        <a href="/#sect_11" class="square_btn">
                            <img src="/image/sect_6/btn_img.png" alt="お問合せはこちら">
                        </a>
                    </div>
                </div>
                <div class="space_5"></div>
            </div>
            <div class="view_tabsp">
                <div class="space_5"></div>
                <div class="wrapper_90">
                    <div class="title">
                        <img src="/image/sect_6/sect_6_title.svg" class="width_65 mg_auto" alt="簡単入力1分！">
                    </div>
                    <div class="wrapper_100">
                        <a href="/#sect_11" class="square_btn">
                            <img src="/image/sect_6/sp/btn_img.png" alt="お問合せはこちら">
                        </a>
                    </div>
                </div>
                <div class="space_5"></div>
            </div>
        </section>
        <section class="sect_7" id="sect_7">
            <div class="view_pc" style="padding-top: 10vw;margin-top:-10vw; "></div>
            <div class="view_tabsp" style="margin-top: -20vw; padding-top: 20vw; "></div>
            <div class="view_pc" style="background-color: #f1f1f1;">
                <div class="space_5"></div>
                <div class="wrapper_55">
                    <div class="title">
                        <img src="/image/sect_7/sect_7_title.svg" class="width_15 mg_auto" alt="導入事例">
                        <div class="width_35 mg_auto tspace_1" style="border-bottom: 3px solid #005cdc;"></div>
                    </div>
                    <div class="space_5"></div>
                    <div class="wrapper_95 flex" style="justify-content: space-between;">
                        <div class="width_32 txt_tpad_05 txt_rpad_05 txt_bpad_05 txt_lpad_05 bspace_1" style="background-color: #6790c7;box-shadow: 5px 5px 11px -1px rgba(0,0,0,0.34);">
                            <div class="wrapper_100 txt_lpad_1 txt_rpad_1 txt_tpad_1 txt_bpad_1" style="background-color: #6790c7;box-shadow: 5px 5px 11px -1px rgba(0,0,0,0.34);">
                                <p class="font_100 box_radius_9999 noto_bold line_h_200" style="background-color: #ffff00;box-shadow: 5px 5px 11px -1px rgba(0,0,0,0.34);">アポイント獲得率</p>
                                <h6 class="oswald_bold line_h_100" style="color: #ffff00;font-size: 8vw;">2.2<span class="oswald_bold" style="color: #ffff00;font-size: 3.5vw;">%</span></h6>
                                <div class="space_05"></div>
                                <p class="font_100 noto_bold" style="color: #ffff00;">新規開拓業務</p>
                                <div class="space_1"></div>
                                <p class="font_75 noto_bold white">人材派遣・紹介/BtoB</p>
                                <div class="space_1"></div>
                                <p class="font_75 noto_regular white"><span class="font_75 noto_bold white">7,000件</span>に対して<br>
                                    <span class="font_75 noto_bold white">153件2.2％</span>のアポイント獲得</p>
                            </div>
                        </div>
                        <div class="width_32 txt_tpad_05 txt_rpad_05 txt_bpad_05 txt_lpad_05 bspace_1" style="background-color: #6790c7;box-shadow: 5px 5px 11px -1px rgba(0,0,0,0.34);">
                            <div class="wrapper_100 txt_lpad_1 txt_rpad_1 txt_tpad_1 txt_bpad_1" style="background-color: #6790c7;box-shadow: 5px 5px 11px -1px rgba(0,0,0,0.34);">
                                <p class="font_100 box_radius_9999 noto_bold line_h_200" style="background-color: #ffff00;box-shadow: 5px 5px 11px -1px rgba(0,0,0,0.34);">アポイント獲得率</p>
                                <h6 class="oswald_bold line_h_100" style="color: #ffff00;font-size: 8vw;">3.0<span class="oswald_bold" style="color: #ffff00;font-size: 3.5vw;">%</span></h6>
                                <div class="space_05"></div>
                                <p class="font_100 noto_bold" style="color: #ffff00;">チャットボット拡販</p>
                                <div class="space_1"></div>
                                <p class="font_75 noto_bold white">IT・ソフトウエア/BtoB</p>
                                <div class="space_1"></div>
                                <p class="font_75 noto_regular white"><span class="font_75 noto_bold white">1,500件</span>に対して<span class="font_75 noto_bold white">45件</span>のアポ<br>
                                    <span class="font_75 noto_bold white">360件</span>担当者情報の獲得</p>
                            </div>
                        </div>
                        <div class="width_32 txt_tpad_05 txt_rpad_05 txt_bpad_05 txt_lpad_05 bspace_1" style="background-color: #6790c7;box-shadow: 5px 5px 11px -1px rgba(0,0,0,0.34);">
                            <div class="wrapper_100 txt_lpad_1 txt_rpad_1 txt_tpad_1 txt_bpad_1" style="background-color: #6790c7;box-shadow: 5px 5px 11px -1px rgba(0,0,0,0.34);">
                                <p class="font_100 box_radius_9999 noto_bold line_h_200" style="background-color: #ffff00;box-shadow: 5px 5px 11px -1px rgba(0,0,0,0.34);">アポイント獲得率</p>
                                <h6 class="oswald_bold line_h_100" style="color: #ffff00;font-size: 8vw;">4.2<span class="oswald_bold" style="color: #ffff00;font-size: 3.5vw;">%</span></h6>
                                <div class="space_05"></div>
                                <p class="font_100 noto_bold" style="color: #ffff00;">QRコード決済拡販</p>
                                <div class="space_1"></div>
                                <p class="font_75 noto_bold white">IT関連業務/BtoB</p>
                                <div class="space_1"></div>
                                <p class="font_75 noto_regular white"><span class="font_75 noto_bold white">2,000件</span>に対して<br>
                                    <span class="font_75 noto_bold white">84件</span>のアポイント獲得</p>
                            </div>
                        </div>
                        <div class="width_32 txt_tpad_05 txt_rpad_05 txt_bpad_05 txt_lpad_05" style="background-color: #6790c7;box-shadow: 5px 5px 11px -1px rgba(0,0,0,0.34);">
                            <div class="wrapper_100 txt_lpad_1 txt_rpad_1 txt_tpad_1 txt_bpad_1" style="background-color: #6790c7;box-shadow: 5px 5px 11px -1px rgba(0,0,0,0.34);">
                                <p class="font_100 box_radius_9999 noto_bold line_h_200" style="background-color: #ffff00;box-shadow: 5px 5px 11px -1px rgba(0,0,0,0.34);">アポイント獲得率</p>
                                <h6 class="oswald_bold line_h_100" style="color: #ffff00;font-size: 8vw;">5.4<span class="oswald_bold" style="color: #ffff00;font-size: 3.5vw;">%</span></h6>
                                <div class="space_05"></div>
                                <p class="font_100 noto_bold" style="color: #ffff00;">商品宅配サービス拡販</p>
                                <div class="space_1"></div>
                                <p class="font_75 noto_bold white">通販/BtoB</p>
                                <div class="space_1"></div>
                                <p class="font_75 noto_regular white"><span class="font_75 noto_bold white">1,068件</span>に対して<br>
                                    <span class="font_75 noto_bold white">58件</span>のアポイント獲得</p>
                            </div>
                        </div>
                        <div class="width_32 txt_tpad_05 txt_rpad_05 txt_bpad_05 txt_lpad_05" style="background-color: #6790c7;box-shadow: 5px 5px 11px -1px rgba(0,0,0,0.34);">
                            <div class="wrapper_100 txt_lpad_1 txt_rpad_1 txt_tpad_1 txt_bpad_1" style="background-color: #6790c7;box-shadow: 5px 5px 11px -1px rgba(0,0,0,0.34);">
                                <p class="font_100 box_radius_9999 noto_bold line_h_200" style="background-color: #ffff00;box-shadow: 5px 5px 11px -1px rgba(0,0,0,0.34);">成約率</p>
                                <h6 class="oswald_bold line_h_100" style="color: #ffff00;font-size: 8vw;">8.5<span class="oswald_bold" style="color: #ffff00;font-size: 3.5vw;">%</span></h6>
                                <p class="font_100 noto_bold" style="color: #ffff00;margin-top: -4%;">健康食品<br>休眠掘り起こし</p>
                                <div class="space_05"></div>
                                <p class="font_75 noto_bold white">通販/BtoB</p>
                                <div class="space_05"></div>
                                <p class="font_75 noto_regular white"><span class="font_75 noto_bold white">1,998件</span>の休眠顧客リストより<br>
                                    <span class="font_75 noto_bold white">169件</span>の成約獲得</p>
                            </div>
                        </div>
                        <div class="width_32 txt_tpad_05 txt_rpad_05 txt_bpad_05 txt_lpad_05" style="background-color: #6790c7;box-shadow: 5px 5px 11px -1px rgba(0,0,0,0.34);">
                            <div class="wrapper_100 txt_lpad_1 txt_rpad_1 txt_tpad_1 txt_bpad_1" style="background-color: #6790c7;box-shadow: 5px 5px 11px -1px rgba(0,0,0,0.34);">
                                <p class="font_100 box_radius_9999 noto_bold line_h_200" style="background-color: #ffff00;box-shadow: 5px 5px 11px -1px rgba(0,0,0,0.34);">成約率</p>
                                <h6 class="oswald_bold line_h_100" style="color: #ffff00;font-size: 8vw;">5.0<span class="oswald_bold" style="color: #ffff00;font-size: 3.5vw;">%</span></h6>
                                <p class="font_100 noto_bold" style="color: #ffff00;margin-top: -4%;">へアケア商品<br>定期購入引き上げ</p>
                                <div class="space_05"></div>
                                <p class="font_75 noto_bold white">化粧品製造および販売/BtoC</p>
                                <div class="space_05"></div>
                                <p class="font_75 noto_regular white"><span class="font_75 noto_bold white">1,000件</span>に対して<br>
                                    <span class="font_75 noto_bold white">50件</span>の受注獲得</p>
                            </div>
                        </div>
                    </div>
                    <div class="wrapper_55">
                        <div class="space_4"></div>
                        <a href="" class="square_btn">
                            <img src="/image/sect_7/btn_img.png" alt="導入事例集をダウンロード">
                        </a>
                    </div>
                </div>
                <div class="space_5"></div>
            </div>
            <div class="view_tabsp" style="background-color: #f1f1f1;">
                <div class="space_5"></div>
                <div class="wrapper_90">
                    <div class="title">
                        <img src="/image/sect_7/sect_7_title.svg" class="width_30 mg_auto" alt="導入事例">
                        <div class="width_60 mg_auto tspace_1" style="border-bottom: 3px solid #005cdc;"></div>
                    </div>
                    <div class="space_5"></div>
                    <div class="wrapper_100">
                        <div class="width_100 txt_tpad_1 txt_rpad_1 txt_bpad_1 txt_lpad_1 bspace_3" style="background-color: #6790c7;box-shadow: 5px 5px 11px -1px rgba(0,0,0,0.34);">
                            <div class="wrapper_100 txt_lpad_1 txt_rpad_1 txt_tpad_2 txt_bpad_2" style="background-color: #6790c7;box-shadow: 5px 5px 11px -1px rgba(0,0,0,0.34);">
                                <p class="font_100 box_radius_9999 noto_bold line_h_200 width_65 mg_auto" style="background-color: #ffff00;box-shadow: 5px 5px 11px -1px rgba(0,0,0,0.34);">アポイント獲得率</p>
                                <div class="space_1"></div>
                                <div class="flex" style="align-items: center;">
                                    <div class="width_50">
                                        <h6 class="oswald_bold line_h_100" style="color: #ffff00;font-size: 24vw;">2.2<span class="oswald_bold" style="color: #ffff00;font-size: 11vw">%</span></h6>
                                    </div>
                                    <div class="width_50">
                                        <div class="space_05"></div>
                                        <p class="font_100 noto_bold" style="color: #ffff00;">新規開拓業務</p>
                                        <div class="space_1"></div>
                                        <p class="font_75 noto_bold white">人材派遣・紹介/BtoB</p>
                                        <div class="space_1"></div>
                                    </div>
                                </div>
                                <p class="font_75 noto_regular white"><span class="font_75 noto_bold white">7,000件</span>に対して
                                    <span class="font_75 noto_bold white">153件2.2％</span>のアポイント獲得</p>
                            </div>
                        </div>
                        <div class="width_100 txt_tpad_1 txt_rpad_1 txt_bpad_1 txt_lpad_1 bspace_2" style="background-color: #6790c7;box-shadow: 5px 5px 11px -1px rgba(0,0,0,0.34);">
                            <div class="wrapper_100 txt_lpad_1 txt_rpad_1 txt_tpad_2 txt_bpad_2" style="background-color: #6790c7;box-shadow: 5px 5px 11px -1px rgba(0,0,0,0.34);">
                                <p class="font_100 box_radius_9999 noto_bold line_h_200 width_65 mg_auto" style="background-color: #ffff00;box-shadow: 5px 5px 11px -1px rgba(0,0,0,0.34);">アポイント獲得率</p>
                                <div class="space_1"></div>
                                <div class="flex" style="align-items: center;">
                                    <div class="width_50">
                                        <h6 class="oswald_bold line_h_100" style="color: #ffff00;font-size: 24vw;">3.0<span class="oswald_bold" style="color: #ffff00;font-size: 11vw">%</span></h6>
                                    </div>
                                    <div class="width_50">
                                        <div class="space_05"></div>
                                        <p class="font_100 noto_bold" style="color: #ffff00;">チャットボット<br>拡販</p>
                                        <div class="space_1"></div>
                                        <p class="font_75 noto_bold white">IT・ソフトウエア/BtoB</p>
                                        <div class="space_1"></div>
                                    </div>
                                </div>
                                <p class="font_75 noto_regular white"><span class="font_75 noto_bold white">1,500件</span>に対して
                                    <span class="font_75 noto_bold white">45件</span>のアポ
                                    <span class="font_75 noto_bold white">360件</span>担当者情報の獲得</p>
                            </div>
                        </div>
                        <div class="width_100 txt_tpad_1 txt_rpad_1 txt_bpad_1 txt_lpad_1 bspace_2" style="background-color: #6790c7;box-shadow: 5px 5px 11px -1px rgba(0,0,0,0.34);">
                            <div class="wrapper_100 txt_lpad_1 txt_rpad_1 txt_tpad_2 txt_bpad_2" style="background-color: #6790c7;box-shadow: 5px 5px 11px -1px rgba(0,0,0,0.34);">
                                <p class="font_100 box_radius_9999 noto_bold line_h_200 width_65 mg_auto" style="background-color: #ffff00;box-shadow: 5px 5px 11px -1px rgba(0,0,0,0.34);">アポイント獲得率</p>
                                <div class="space_1"></div>
                                <div class="flex" style="align-items: center;">
                                    <div class="width_50">
                                        <h6 class="oswald_bold line_h_100" style="color: #ffff00;font-size: 24vw;">4.2<span class="oswald_bold" style="color: #ffff00;font-size: 11vw">%</span></h6>
                                    </div>
                                    <div class="width_50">
                                        <div class="space_05"></div>
                                        <p class="font_100 noto_bold" style="color: #ffff00;">QRコード決済拡販</p>
                                        <div class="space_1"></div>
                                        <p class="font_75 noto_bold white">IT関連業務/BtoB</p>
                                        <div class="space_1"></div>
                                    </div>
                                </div>
                                <p class="font_75 noto_regular white"><span class="font_75 noto_bold white">2,000件</span>に対して
                                    <span class="font_75 noto_bold white">84件</span>のアポイント獲得</p>
                            </div>
                        </div>
                        <div class="width_100 txt_tpad_1 txt_rpad_1 txt_bpad_1 txt_lpad_1 bspace_2" style="background-color: #6790c7;box-shadow: 5px 5px 11px -1px rgba(0,0,0,0.34);">
                            <div class="wrapper_100 txt_lpad_1 txt_rpad_1 txt_tpad_2 txt_bpad_2" style="background-color: #6790c7;box-shadow: 5px 5px 11px -1px rgba(0,0,0,0.34);">
                                <p class="font_100 box_radius_9999 noto_bold line_h_200 width_65 mg_auto" style="background-color: #ffff00;box-shadow: 5px 5px 11px -1px rgba(0,0,0,0.34);">アポイント獲得率</p>
                                <div class="space_1"></div>
                                <div class="flex" style="align-items: center;">
                                    <div class="width_50">
                                        <h6 class="oswald_bold line_h_100" style="color: #ffff00;font-size: 24vw;">5.4<span class="oswald_bold" style="color: #ffff00;font-size: 11vw">%</span></h6>
                                    </div>
                                    <div class="width_50">
                                        <div class="space_05"></div>
                                        <p class="font_100 noto_bold" style="color: #ffff00;">商品宅配サービス<br>拡販</p>
                                        <div class="space_1"></div>
                                        <p class="font_75 noto_bold white">通販/BtoB</p>
                                        <div class="space_1"></div>
                                    </div>
                                </div>
                                <p class="font_75 noto_regular white"><span class="font_75 noto_bold white">1,068件</span>に対して
                                    <span class="font_75 noto_bold white">58件</span>のアポイント獲得</p>
                            </div>
                        </div>
                        <div class="width_100 txt_tpad_1 txt_rpad_1 txt_bpad_1 txt_lpad_1 bspace_2" style="background-color: #6790c7;box-shadow: 5px 5px 11px -1px rgba(0,0,0,0.34);">
                            <div class="wrapper_100 txt_lpad_1 txt_rpad_1 txt_tpad_2 txt_bpad_2" style="background-color: #6790c7;box-shadow: 5px 5px 11px -1px rgba(0,0,0,0.34);">
                                <p class="font_100 box_radius_9999 noto_bold line_h_200 width_65 mg_auto" style="background-color: #ffff00;box-shadow: 5px 5px 11px -1px rgba(0,0,0,0.34);">成約率</p>
                                <div class="space_1"></div>
                                <div class="flex" style="align-items: center;">
                                    <div class="width_50">
                                        <h6 class="oswald_bold line_h_100" style="color: #ffff00;font-size: 24vw;">8.5<span class="oswald_bold" style="color: #ffff00;font-size: 11vw">%</span></h6>
                                    </div>
                                    <div class="width_50">
                                        <div class="space_05"></div>
                                        <p class="font_100 noto_bold" style="color: #ffff00;">健康食品<br>休眠掘り起こし</p>
                                        <div class="space_1"></div>
                                        <p class="font_75 noto_bold white">通販/BtoB</p>
                                        <div class="space_1"></div>
                                    </div>
                                </div>
                                <p class="font_75 noto_regular white"><span class="font_75 noto_bold white">1,998件</span>の休眠顧客リストより
                                    <span class="font_75 noto_bold white">169件</span>の成約獲得</p>
                            </div>
                        </div>
                        <div class="width_100 txt_tpad_1 txt_rpad_1 txt_bpad_1 txt_lpad_1 bspace_2" style="background-color: #6790c7;box-shadow: 5px 5px 11px -1px rgba(0,0,0,0.34);">
                            <div class="wrapper_100 txt_lpad_1 txt_rpad_1 txt_tpad_2 txt_bpad_2" style="background-color: #6790c7;box-shadow: 5px 5px 11px -1px rgba(0,0,0,0.34);">
                                <p class="font_100 box_radius_9999 noto_bold line_h_200 width_65 mg_auto" style="background-color: #ffff00;box-shadow: 5px 5px 11px -1px rgba(0,0,0,0.34);">成約率</p>
                                <div class="space_1"></div>
                                <div class="flex" style="align-items: center;">
                                    <div class="width_50">
                                        <h6 class="oswald_bold line_h_100" style="color: #ffff00;font-size: 24vw;">5.0<span class="oswald_bold" style="color: #ffff00;font-size: 11vw">%</span></h6>
                                    </div>
                                    <div class="width_50">
                                        <div class="space_05"></div>
                                        <p class="font_100 noto_bold" style="color: #ffff00;">へアケア商品<br>定期購入引き上げ</p>
                                        <div class="space_1"></div>
                                        <p class="font_75 noto_bold white">化粧品製造および販売<br>/BtoC</p>
                                        <div class="space_1"></div>
                                    </div>
                                </div>
                                <p class="font_75 noto_regular white"><span class="font_75 noto_bold white">1,000件</span>に対して
                                    <span class="font_75 noto_bold white">50件</span>の受注獲得</p>
                            </div>
                        </div>
                    </div>
                    <div class="wrapper_100">
                        <div class="space_2"></div>
                        <a href="" class="square_btn">
                            <img src="/image/sect_7/sp/btn_img.png" alt="導入事例集をダウンロード">
                        </a>
                    </div>
                </div>
                <div class="space_5"></div>
            </div>
        </section>
        <section class="sect_8">
            <div class="view_pc">
                <div class="wrapper_55">
                    <div class="view_pc space_5"></div>
                    <div class="title">
                        <img src="/image/sect_8/sect_8_title.svg" class="width_60 view_pc mg_auto" alt="他にもこんな業務を代行します">
                    </div>
                    <div class="space_3 view_pc"></div>
                    <div class="flex">
                        <div class="col width_21 box_radius_5 bg_color_1 txt_tpad_2 txt_bpad_2">
                            <img src="/image/sect_8/icon_1.svg" class="width_40" alt="">
                            <div class="space_2"></div>
                            <p class="white txt_center font_75 noto_medium">通販の休眠掘り起こし</p>
                        </div>
                        <div class="col width_21 box_radius_5 bg_color_1 txt_tpad_2 txt_bpad_2">
                            <img src="/image/sect_8/icon_2.svg" class="width_33" alt="">
                            <div class="space_1"></div>
                            <p class="white txt_center font_75 noto_medium">化粧品のサンプル<br>使用感アンケート</p>
                        </div>
                        <div class="col width_21 box_radius_5 bg_color_1 txt_tpad_2 txt_bpad_2">
                            <img src="/image/sect_8/icon_3.svg" class="width_38" alt="">
                            <div class="space_1"></div>
                            <div class="space_05"></div>
                            <p class="white txt_center font_75 noto_medium">クレジットカードの<br>リボ払い促進</p>
                        </div>
                        <div class="col width_21 box_radius_5 bg_color_1 txt_tpad_2 txt_bpad_2">
                            <img src="/image/sect_8/icon_4.svg" class="width_37" alt="">
                            <div class="space_1"></div>
                            <div class="space_05"></div>
                            <p class="white txt_center font_75 noto_medium">世論調査コールの実施</p>
                        </div>
                    </div>
                    <div class="dot_img">
                        <div class="space_1"></div>
                        <div class="space_05"></div>
                        <img src="/image/sect_8/dot_img.png" class="width_1" alt="">
                        <div class="space_2"></div>
                    </div>
                    <h6 class="color_1 font_150 line_h_200">
                        『1席から』『従量課金』『ブース固定』など<br>
                        貴社にピッタリのオーダーメイドプランをご用意いたします。<br>
                        お気軽にご相談ください。
                    </h6>
                    <div class="space_5" style="border-bottom: 1px solid #000;"></div>
                </div>
            </div>
            <div class="view_tabsp">
                <div class="wrapper_100">
                    <div class="space_5"></div>
                    <div class="title">
                        <img src="/image/sect_8/sp/sect_8_title.svg" class="width_60 mg_auto" alt="他にもこんな業務を代行します">
                    </div>
                    <div class="space_2"></div>
                    <div class="flex wrapper_90" style="justify-content: space-between;">
                        <div class="col width_49 box_radius_5 bg_color_1 txt_tpad_5 txt_bpad_5 bspace_1">
                            <img src="/image/sect_8/icon_1.svg" class="width_40" alt="">
                            <div class="space_3"></div>
                            <p class="white txt_center font_75 noto_medium">通販の休眠掘り起こし</p>
                        </div>
                        <div class="col width_49 box_radius_5 bg_color_1 txt_tpad_5 txt_bpad_5 bspace_1">
                            <img src="/image/sect_8/icon_2.svg" class="width_33" alt="">
                            <div class="space_1"></div>
                            <p class="white txt_center font_75 noto_medium">化粧品のサンプル<br>使用感アンケート</p>
                        </div>
                        <div class="col width_49 box_radius_5 bg_color_1 txt_tpad_5 txt_bpad_5 bspace_1">
                            <img src="/image/sect_8/icon_3.svg" class="width_38" alt="">
                            <div class="space_1"></div>
                            <div class="space_05"></div>
                            <p class="white txt_center font_75 noto_medium">クレジットカードの<br>リボ払い促進</p>
                        </div>
                        <div class="col width_49 box_radius_5 bg_color_1 txt_tpad_5 txt_bpad_5 bspace_1">
                            <img src="/image/sect_8/icon_4.svg" class="width_35" alt="">
                            <div class="space_1"></div>
                            <div class="space_05"></div>
                            <p class="white txt_center font_75 noto_medium">世論調査コールの実施</p>
                        </div>
                    </div>
                    <div class="dot_img">
                        <div class="space_1"></div>
                        <div class="space_05"></div>
                        <img src="/image/sect_8/dot_img.png" class="width_1" alt="">
                        <div class="space_2"></div>
                    </div>
                    <h6 class="color_1 font_100 line_h_150">
                        『1席から』『従量課金』『ブース固定』など<br>
                        貴社にピッタリのオーダーメイドプランを<br>
                        ご用意いたします。<br>
                        お気軽にご相談ください。
                    </h6>
                    <div class="space_5" style="border-bottom: 1px solid #000;"></div>
                </div>
            </div>
        </section>
        <section class="sect_9" id="sect_9">
            <div class="view_pc" style="padding-top: 10vw;margin-top:-10vw;">
                <div class="wrapper_55">
                    <div class="space_5"></div>
                    <div class="title">
                        <img src="/image/sect_9/sect_9_title.svg" class="width_20 mg_auto" alt="導入の流れ">
                    </div>
                    <div class="space_3"></div>
                    <div class="wrapper_95 flex" style="justify-content: space-between;">
                        <div class="width_30 bg_img">
                            <div class="tr_0 " style="top: 3%; border-top: 10px solid transparent;border-left: 15px solid #005cdc;border-bottom: 10px solid transparent;border-right: 10px solid transparent;"></div>
                            <p class="oswald_bold color_1 font_150">STEP 1</p>
                            <div class="space_05"></div>
                            <div class="wrapper_100 bg_img">
                                <img src="/image/sect_9/sect_9_img_1.png" class="width_80 mg_auto" alt="">
                                <img src="/image/sect_9/sect_9_float_img_1.png" class="bl_0 width_35" alt="ご提案 お見積り 無料" style="left: -5%;bottom: -5%;">
                            </div>
                            <div class="space_1"></div>
                            <p class="noto_bold color_1" style="font-size: 1.2vw;">ヒアリング・お見積り</p>
                            <div class="space_05"></div>
                            <p class="noto_regular font_75" style="text-align: justify;">貴社のご状況や課題感をヒアリングさせていただき、無料でお見積りを作成させていただきます。</p>
                        </div>
                        <div class="width_30 bg_img">
                            <div class="tr_0 " style="top: 3%; border-top: 10px solid transparent;border-left: 15px solid #005cdc;border-bottom: 10px solid transparent;border-right: 10px solid transparent;"></div>
                            <p class="oswald_bold color_1 font_150">STEP 2</p>
                            <div class="space_05"></div>
                            <div class="wrapper_100 bg_img">
                                <img src="/image/sect_9/sect_9_img_2.png" class="width_80 mg_auto" alt="">
                                <img src="/image/sect_9/sect_9_float_img_2.png" class="bl_0 width_35" alt="徹底的な 擦り合わせ" style="left: -5%;bottom: -5%;">
                            </div>
                            <div class="space_1"></div>
                            <p class="noto_bold color_1" style="font-size: 1.2vw;">チーム編成・業務擦り合わせ</p>
                            <div class="space_05"></div>
                            <p class="noto_regular font_75" style="text-align: justify;">貴社専属のプロジェクトチームを立ち上げ、トークスクリプト作成など運用体制を構築します。</p>
                        </div>
                        <div class="width_30">
                            <p class="oswald_bold color_1 font_150">STEP 3</p>
                            <div class="space_05"></div>
                            <div class="wrapper_100 bg_img">
                                <img src="/image/sect_9/sect_9_img_3.png" class="width_80 mg_auto" alt="">
                                <img src="/image/sect_9/sect_9_float_img_3.png" class="bl_0 width_35" alt="およそ 10営業日～ スタート" style="left: -5%;bottom: -5%;">
                            </div>
                            <div class="space_1"></div>
                            <p class="noto_bold color_1" style="font-size: 1.2vw;">業務開始</p>
                            <div class="space_05"></div>
                            <p class="noto_regular font_75" style="text-align: justify;">案件規模によって異なりますが、契約締結からおよそ10営業日～でスタートできますので急なご依頼でも問題ございません。</p>
                        </div>
                    </div>
                    <div class="space_5" style="border-bottom: 1px solid #000;"></div>
                </div>
            </div>
            <div class="view_tabsp" style="margin-top: -20vw; padding-top: 20vw">
                <div class="wrapper_90">
                    <div class="space_5"></div>
                    <div class="title">
                        <img src="/image/sect_9/sect_9_title.svg" class="width_40 mg_auto" alt="導入の流れ">
                    </div>
                    <div class="space_3"></div>
                    <div class="wrapper_100">
                        <div class="wrapper_100 bg_img txt_bpad_5">
                            <div class="b0_l50 " style="border-top: 10px solid #005cdc;border-left: 15px solid transparent;border-bottom: 10px solid transparent;border-right: 15px solid transparent;"></div>
                            <div class="width_80 bg_img mg_auto">
                                <img src="/image/sect_9/sect_9_img_1.png" class="width_100" alt="ヒアリング・お見積り">
                                <img src="/image/sect_9/sect_9_float_img_1.png" class="bl_0 width_35" alt="ご提案 お見積り 無料" style="left: -5%;bottom: -12%;">
                            </div>
                            <div class="space_1"></div>
                            <p class="oswald_bold font_200">STEP 1</p>
                            <div class="space_05"></div>
                            <p class="noto_bold color_1 font_100">ヒアリング・お見積り</p>
                            <div class="space_05"></div>
                            <p class="noto_regular font_75 txt_center">貴社のご状況や課題感をヒアリングさせていただき、<br>
                                無料でお見積りを作成させていただきます。</p>
                        </div>
                        <div class="space_3"></div>
                        <div class="wrapper_100 bg_img txt_bpad_5">
                            <div class="b0_l50 " style="border-top: 10px solid #005cdc;border-left: 15px solid transparent;border-bottom: 10px solid transparent;border-right: 15px solid transparent;"></div>
                            <div class="width_80 bg_img mg_auto">
                                <img src="/image/sect_9/sect_9_img_2.png" class="width_100" alt="チーム編成・業務擦り合わせ">
                                <img src="/image/sect_9/sect_9_float_img_2.png" class="bl_0 width_35" alt="徹底的な 擦り合わせ" style="left: -5%;bottom: -12%;">
                            </div>
                            <div class="space_1"></div>
                            <p class="oswald_bold font_200">STEP 2</p>
                            <div class="space_05"></div>
                            <p class="noto_bold color_1 font_100">チーム編成・業務擦り合わせ</p>
                            <div class="space_05"></div>
                            <p class="noto_regular font_75 txt_center">貴社専属のプロジェクトチームを立ち上げ、<br>
                                トークスクリプト作成など運用体制を構築します。</p>
                        </div>
                        <div class="space_3"></div>
                        <div class="wrapper_100 bg_img">
                            <div class="width_80 bg_img mg_auto">
                                <img src="/image/sect_9/sect_9_img_3.png" class="width_100" alt="チーム編成・業務擦り合わせ">
                                <img src="/image/sect_9/sect_9_float_img_3.png" class="bl_0 width_35" alt="およそ 10営業日～ スタート" style="left: -5%;bottom: -12%;">
                            </div>
                            <div class="space_1"></div>
                            <p class="oswald_bold font_200">STEP 3</p>
                            <div class="space_05"></div>
                            <p class="noto_bold color_1 font_100">業務開始</p>
                            <div class="space_05"></div>
                            <p class="noto_regular font_75 txt_center">
                                案件規模によって異なりますが、契約締結からおよそ<br>
                                10営業日～でスタートできますので<br>
                                急なご依頼でも問題ございません。
                            </p>
                        </div>
                    </div>
                </div>
                <div class="space_5" style="border-bottom: 1px solid #000;"></div>
            </div>
        </section>
        <section class="sect_10" id="sect_10">
            <div class="view_pc" style="padding-top: 10vw;margin-top:-10vw;">
                <div class="wrapper_55">
                    <div class="space_5"></div>
                    <div class="wrapper_95">
                        <div class="title">
                            <img src="/image/sect_10/sect_10_title.svg" class="width_30 mg_auto" alt="よくあるご質問">
                        </div>
                        <div class="space_4"></div>
                        <div class="wrapper_100">
                            <div class="wrapper_100 accordion">
                                <div class="acccordion_head flex">
                                    <div class="width_5">
                                        <img src="/image/sect_10/q_icon.svg" class="width_100" alt="Q">
                                    </div>
                                    <div class="width_90">
                                        <p class="font_100 txt_left noto_bold color_1">新規の営業リストを提案してもらえますか？</p>
                                    </div>
                                </div>
                                <div class="space_05"></div>
                                <div class="acccordion_content flex" style="align-items: center;">
                                    <div class="width_5">
                                        <img src="/image/sect_10/a_icon.svg" class="width_100" alt="A">
                                    </div>
                                    <div class="width_90">
                                        <p class="font_75 txt_left noto_regular">はい。ネオキャリアでは企業様のご要望に応じてカスタマイズしたターゲット選定を行い、<br>企業様専用の営業リストをご提案いたします。</p>
                                    </div>
                                </div>
                            </div>
                            <div class="space_3"></div>
                            <div class="wrapper_100 accordion">
                                <div class="acccordion_head flex">
                                    <div class="width_5">
                                        <img src="/image/sect_10/q_icon.svg" class="width_100" alt="Q">
                                    </div>
                                    <div class="width_90">
                                        <p class="font_100 txt_left noto_bold color_1">キャンペーン期間など、必要な期間だけお願いできますか？</p>
                                    </div>
                                </div>
                                <div class="space_05"></div>
                                <div class="acccordion_content flex" style="align-items: center;">
                                    <div class="width_5">
                                        <img src="/image/sect_10/a_icon.svg" class="width_100" alt="A">
                                    </div>
                                    <div class="width_90">
                                        <p class="font_75 txt_left noto_regular">はい。スポット的に期間限定のご依頼も承っております。<br>契約期間の縛りが無いため、必要都度・発生都度、業務依頼が出来ます。</p>
                                    </div>
                                </div>
                            </div>
                            <div class="space_3"></div>
                            <div class="wrapper_100 accordion">
                                <div class="acccordion_head flex">
                                    <div class="width_5">
                                        <img src="/image/sect_10/q_icon.svg" class="width_100" alt="Q">
                                    </div>
                                    <div class="width_90">
                                        <p class="font_100 txt_left noto_bold color_1">定期的な報告・改善提案やミーティングはありますか？</p>
                                    </div>
                                </div>
                                <div class="space_05"></div>
                                <div class="acccordion_content flex" style="align-items: flex-start;">
                                    <div class="width_5 txt_tpad_05">
                                        <img src="/image/sect_10/a_icon.svg" class="width_100" alt="A">
                                    </div>
                                    <div class="width_90">
                                        <p class="font_75 txt_left noto_regular">ご依頼後の仕様確認ミーティングから始まり、運用開始前には営業内容（トークスクリプト）のすり合わせ、<br>
                                            運用期間中には改善提案、運用後はレポーティングと今後の戦略的な提案等、密なコミュニケーションを取らせて頂き<br>
                                            アウトバウンドの精度を高めるよう努めております。</p>
                                    </div>
                                </div>
                            </div>
                            <div class="space_3"></div>
                            <div class="wrapper_100 accordion">
                                <div class="acccordion_head flex">
                                    <div class="width_5">
                                        <img src="/image/sect_10/q_icon.svg" class="width_100" alt="Q">
                                    </div>
                                    <div class="width_90">
                                        <p class="font_100 txt_left noto_bold color_1">ITなど専門的なサービスでも対応できますか？</p>
                                    </div>
                                </div>
                                <div class="space_05"></div>
                                <div class="acccordion_content flex" style="align-items: flex-start;">
                                    <div class="width_5 txt_tpad_05">
                                        <img src="/image/sect_10/a_icon.svg" class="width_100" alt="A">
                                    </div>
                                    <div class="width_90">
                                        <p class="font_75 txt_left noto_regular">IT・ソフトウェア業界などのご依頼実績もあり、業界知識がある担当が対応をさせていただきます。<br>
                                            （ネオキャリアグループでもWeb業種の会社を保有しておりIT業界知識の研修も随時実施しております）</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="space_5"></div>
                        <div class="wrapper_90">
                            <div class="title">
                                <img src="/image/sect_6/sect_6_title.svg" class="width_40 mg_auto" alt="簡単入力1分！">
                            </div>
                            <div class="wrapper_90">
                                <a href="#sect_11" class="square_btn">
                                    <img src="/image/sect_6/btn_img.png" alt="お問合せはこちら">
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="space_5" style="border-bottom: 1px solid #000;"></div>
                </div>
            </div>
            <div class="view_tabsp" style="margin-top: -20vw; padding-top: 20vw">
                <div class="wrapper_90">
                    <div class="space_5"></div>
                    <div class="wrapper_100">
                        <div class="title">
                            <img src="/image/sect_10/sect_10_title.svg" class="width_50 mg_auto" alt="よくあるご質問">
                        </div>
                        <div class="space_4"></div>
                        <div class="wrapper_100">
                            <div class="wrapper_100 accordion">
                                <div class="acccordion_head flex">
                                    <div class="width_10 txt_tpad_1">
                                        <img src="/image/sect_10/q_icon.svg" class="width_100" alt="Q">
                                    </div>
                                    <div class="width_85">
                                        <p class="font_100 txt_left noto_bold color_1">新規の営業リストを提案<br>
                                            してもらえますか？</p>
                                    </div>
                                </div>
                                <div class="space_1"></div>
                                <div class="space_05"></div>
                                <div class="acccordion_content flex">
                                    <div class="width_10 txt_tpad_1">
                                        <img src="/image/sect_10/a_icon.svg" class="width_100" alt="A">
                                    </div>
                                    <div class="width_85">
                                        <p class="font_75 txt_left noto_regular">はい。ネオキャリアでは企業様のご要望に応じてカスタマイズしたターゲット選定を行い、企業様専用の営業リストをご提案いたします。</p>
                                    </div>
                                </div>
                            </div>
                            <div class="space_4"></div>
                            <div class="wrapper_100 accordion">
                                <div class="acccordion_head flex">
                                    <div class="width_10 txt_tpad_1">
                                        <img src="/image/sect_10/q_icon.svg" class="width_100" alt="Q">
                                    </div>
                                    <div class="width_85">
                                        <p class="font_100 txt_left noto_bold color_1">キャンペーン期間など、必要な期間だけ<br>
                                            お願いできますか？</p>
                                    </div>
                                </div>
                                <div class="space_1"></div>
                                <div class="space_05"></div>
                                <div class="acccordion_content flex">
                                    <div class="width_10 txt_tpad_1">
                                        <img src="/image/sect_10/a_icon.svg" class="width_100" alt="A">
                                    </div>
                                    <div class="width_85">
                                        <p class="font_75 txt_left noto_regular">はい。スポット的に期間限定のご依頼も承っております。契約期間の縛りが無いため、必要都度・発生都度、業務依頼が出来ます。</p>
                                    </div>
                                </div>
                            </div>
                            <div class="space_4"></div>
                            <div class="wrapper_100 accordion">
                                <div class="acccordion_head flex">
                                    <div class="width_10 txt_tpad_1">
                                        <img src="/image/sect_10/q_icon.svg" class="width_100" alt="Q">
                                    </div>
                                    <div class="width_85">
                                        <p class="font_100 txt_left noto_bold color_1">定期的な報告・改善提案や<br>
                                            ミーティングはありますか？</p>
                                    </div>
                                </div>
                                <div class="space_1"></div>
                                <div class="space_05"></div>
                                <div class="acccordion_content flex">
                                    <div class="width_10 txt_tpad_1">
                                        <img src="/image/sect_10/a_icon.svg" class="width_100" alt="A">
                                    </div>
                                    <div class="width_85">
                                        <p class="font_75 txt_left noto_regular">ご依頼後の仕様確認ミーティングから始まり、運用開始前には営業内容（トークスクリプト）のすり合わせ、運用期間中には改善提案、運用後はレポーティングと今後の戦略的な提案等、密なコミュニケーションを取らせて頂きアウトバウンドの精度を高めるよう努めております。</p>
                                    </div>
                                </div>
                            </div>
                            <div class="space_4"></div>
                            <div class="wrapper_100 accordion">
                                <div class="acccordion_head flex">
                                    <div class="width_10 txt_tpad_1">
                                        <img src="/image/sect_10/q_icon.svg" class="width_100" alt="Q">
                                    </div>
                                    <div class="width_85">
                                        <p class="font_100 txt_left noto_bold color_1">ITなど専門的なサービスでも<br>
                                            対応できますか？</p>
                                    </div>
                                </div>
                                <div class="space_1"></div>
                                <div class="space_05"></div>
                                <div class="acccordion_content flex">
                                    <div class="width_10 txt_tpad_1">
                                        <img src="/image/sect_10/a_icon.svg" class="width_100" alt="A">
                                    </div>
                                    <div class="width_85">
                                        <p class="font_75 txt_left noto_regular">IT・ソフトウェア業界などのご依頼実績もあり、業界知識がある担当が対応をさせていただきます。（ネオキャリアグループでもWeb業種の会社を保有しておりIT業界知識の研修も随時実施しております）</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="space_5"></div>
                        <div class="space_2"></div>
                        <div class="wrapper_100">
                            <div class="title">
                                <img src="/image/sect_6/sect_6_title.svg" class="width_65 mg_auto" alt="簡単入力1分！">
                            </div>
                            <div class="wrapper_100">
                                <a href="/#sect_11" class="square_btn">
                                    <img src="/image/sect_6/sp/btn_img.png" alt="お問合せはこちら">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="space_5" style="border-bottom: 1px solid #000;"></div>
            </div>
        </section>
        <section class="sect_11" id="sect_11">
            <div class="view_pc" style="margin-top: -10vw; padding-top: 10vw"></div>
            <div class="view_tabsp" style="margin-top: -20vw; padding-top: 20vw"></div>
            <div class="space_5"></div>
            <div class="form_width">
                <div class="title">
                    <img src="/image/sect_11/sect_11_title.svg" class="width_32 mg_auto view_pc" alt="お問合せフォーム">
                    <img src="/image/sect_11/sect_11_title.svg" class="width_60 mg_auto view_tabsp" alt="お問合せフォーム">
                    <div class="space_3"></div>
                </div>
                <div class="wrapper_95">
                    <form method="post" action="#form" enctype="multipart/form-data">
                        <div class="flex form_group">
                            <div class="c_width_25 txt_left">
                                <label for="" class="noto_medium font_75 color_1">お問合せ内容</label>
                            </div>
                            <div class="c_width_75">
                                <div class="checkbox-wrap">
                                    <div class="checkbox-wrap-item txt_left">
                                        <input type="radio" id="" name="inquiry" value="お問合せ／見積請求" <?php if (!empty($clean['inquiry']) && $clean['inquiry'] === "お問合せ／見積請求") {
                                                                                    echo 'checked';
                                                                                } ?>>
                                        <label for="" class="noto_regular font_75 txt_rpad_1" style="color: #717171;">お問合せ／見積請求</label>
                                    </div>
                                    <div class="checkbox-wrap-item txt_left">
                                        <input type="radio" id="" name="inquiry" value="資料請求" <?php if (!empty($clean['inquiry']) && $clean['inquiry'] === "資料請求") {
                                                                                    echo 'checked';
                                                                                } ?>>
                                        <label for="" class="noto_regular font_75 txt_rpad_1" style="color: #717171;">資料請求</label>
                                    </div>
                                    <div class="checkbox-wrap-item txt_left">
                                        <input type="radio" id="" name="inquiry" value="導入事例請求" <?php if (!empty($clean['inquiry']) && $clean['inquiry'] === "導入事例請求") {
                                                                                    echo 'checked';
                                                                                } ?>>
                                        <label for="" class="noto_regular font_75 txt_rpad_1" style="color: #717171;">導入事例請求</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="flex form_group">
                            <div class="c_width_25 txt_left">
                                <div class="space_05 view_pc"></div>
                                <label for="" class="noto_medium font_75 color_1">会社名 <span class="need noto_medium">必須</span></label>
                            </div>
                            <div class="c_width_75">
                                <input type="text" name="company_name" class="width_100 box_radius_5" value="<?php if (!empty($clean['company_name'])) {
                                                                                    echo $clean['company_name'];
                                                                                } ?>" placeholder="ここに会社名を入力してください">
                                <div class="width_100">
                                    <?php if (!empty($error['company_name'])) : ?>
                                        <p class="error_msg bold txt_left font_75" style="margin: 0 0 0 auto; padding-top: 5px;">
                                            <?php echo $error['company_name']; ?></p>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                        <div class="flex form_group">
                            <div class="c_width_25 txt_left">
                                <div class="space_05 view_pc"></div>
                                <label for="" class="noto_medium font_75 color_1">氏名 <span class="need noto_medium">必須</span></label>
                            </div>
                            <div class="c_width_75">
                                <div class="c_w_input_60 flex" style="justify-content: space-between;">
                                    <div class="width_48">
                                        <input type="text" name="f_name" class="width_100 box_radius_5" value="<?php if (!empty($clean['f_name'])) {
                                                                                    echo $clean['f_name'];
                                                                                } ?>" placeholder="氏">
                                    </div>
                                    <div class="width_48">
                                        <input type="text" name="l_name" class="width_100 box_radius_5"  value="<?php if (!empty($clean['l_name'])) {
                                                                                    echo $clean['l_name'];
                                                                                } ?>" placeholder="名">
                                    </div>
                                </div>
                                <div class="width_100">
                                    <?php if (!empty($error['fullname'])) : ?>
                                        <p class="error_msg bold txt_left font_75" style="margin: 0 0 0 auto; padding-top: 5px;">
                                            <?php echo $error['fullname']; ?></p>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                        <div class="flex form_group">
                            <div class="c_width_25 txt_left">
                                <div class="space_05 view_pc"></div>
                                <label for="" class="noto_medium font_75 color_1">メールアドレス <span class="need noto_medium">必須</span></label>
                            </div>
                            <div class="c_width_75">
                                <input type="email" name="email" class="width_100 box_radius_5" value="<?php if (!empty($clean['email'])) {
                                                                                echo $clean['email'];
                                                                            } ?>" placeholder="ここにメールアドレスを入力してください">
                                <div class="width_100">
                                    <?php if (!empty($error['email'])) : ?>
                                        <p class="error_msg bold txt_left font_75" style="margin: 0 0 0 auto; padding-top: 5px;">
                                            <?php echo $error['email']; ?></p>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                        <div class="flex form_group">
                            <div class="c_width_25 txt_left">
                                <div class="space_05 view_pc"></div>
                                <label for="" class="noto_medium font_75 color_1">電話番号 <span class="need noto_medium">必須</span></label>
                            </div>
                            <div class="c_width_75">
                                <div class="c_w_input_80 flex" style="justify-content: space-between;align-items: center;">
                                    <div class="width_30">
                                        <input type="text" id="tel1" name="tel1" value="<?php if (!empty($clean['tel1'])) {
                                                                                    echo $clean['tel1'];
                                                                                } ?>" maxlength="3" class="width_100 box_radius_5" placeholder="">
                                    </div>
                                    -
                                    <div class="width_30">
                                        <input type="text" id="tel2" name="tel2" value="<?php if (!empty($clean['tel2'])) {
                                                                                    echo $clean['tel2'];
                                                                                } ?>" maxlength="3" class="width_100 box_radius_5" placeholder="">
                                    </div>
                                    -
                                    <div class="width_30">
                                        <input type="text" id="tel3" name="tel3" value="<?php if (!empty($clean['tel3'])) {
                                                                                    echo $clean['tel3'];
                                                                                } ?>" maxlength="4" class="width_100 box_radius_5" placeholder="">
                                    </div>
                                </div>
                                <div class="width_100">
                                    <?php if (!empty($error['tel'])) : ?>
                                        <p class="error_msg bold txt_left font_75" style="margin: 0 0 0 auto; padding-top: 5px;">
                                            <?php echo $error['tel']; ?></p>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                        <div class="flex form_group">
                            <div class="c_width_25 txt_left">
                                <label for="" class="noto_medium font_75 color_1">役職 <span></span></label>
                            </div>
                            <div class="c_width_75">
                                <div class="checkbox-wrap">
                                    <div class="checkbox-wrap-item txt_left">
                                        <input type="radio" id="" name="director" value="経営者" <?php if (!empty($clean['director']) && $clean['director'] === "経営者") {
                                                                                    echo 'checked';
                                                                                } ?>>
                                        <label for="" class="noto_regular font_75 txt_rpad_1" style="color: #717171;">経営者</label>
                                    </div>
                                    <div class="checkbox-wrap-item txt_left">
                                        <input type="radio" id="" name="director" value="部長／課長" <?php if (!empty($clean['director']) && $clean['director'] === "部長／課長") {
                                                                                    echo 'checked';
                                                                                } ?>>
                                        <label for="" class="noto_regular font_75 txt_rpad_1" style="color: #717171;">部長／課長</label>
                                    </div>
                                    <div class="checkbox-wrap-item txt_left">
                                        <input type="radio" id="" name="director" value="担当者（その他）" <?php if (!empty($clean['director']) && $clean['director'] === "担当者（その他）") {
                                                                                    echo 'checked';
                                                                                } ?>>
                                        <label for="" class="noto_regular font_75 txt_rpad_1" style="color: #717171;">担当者（その他）</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="flex form_group">
                            <div class="c_width_25 txt_left">
                                <div class="space_05 view_pc"></div>
                                <label for="" class="noto_medium font_75 color_1">お問合せ内容詳細 </label>
                            </div>
                            <div class="c_width_75">
                                <textarea name="content" cols="30" rows="10" class="width_100 box_radius_5"><?php if (!empty($clean['content'])) {echo $clean['content'];} ?></textarea>
                            </div>
                        </div>
                        <div class="space_2 view_pc"></div>
                        <div class="btn_cont">
                            <div class="view_pc">
                                <input type="submit" name="btn_confirm" class="square_btn noto_medium font_100 white width_50 mg_auto line_h_350 box_radius_5" value="入力内容を確認する" style="background-color: #005cdc;box-shadow: 5px 5px 11px -1px rgb(0 0 0 / 34%);">
                            </div>
                            <div class="view_tabsp">
                                <input type="submit" name="btn_confirm" class="square_btn noto_medium font_100 white width_100 mg_auto line_h_350 box_radius_5" value="入力内容を確認する" style="background-color: #005cdc;box-shadow: 5px 5px 11px -1px rgb(0 0 0 / 34%);">
                            </div>
                        </div>
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
        
    </script>

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

            $('.nav_sp a').click(function(){
                $('.m_menu span').toggleClass('isActive');
                $('header').toggleClass('isActive')
                $('.nav_sp').toggleClass('isActive')
            })
        });
        
    </script>

    <script>
        $.fn.scrollView = function() {
            return this.each(function() {
                $('html, body').animate({
                    scrollTop: $(this).offset().top - 300
                }, 1000);
            });
        }

        function check() {
            if ($('.error_msg').is(':visible')) {
                // we're empty. do stuff.
                $('.error_msg:visible:first').scrollView();
            }
        }

        check();

        function telclick() {
            var a = document.getElementById("tel1"),
                b = document.getElementById("tel2"),
                c = document.getElementById("tel3");

            a.onkeyup = function() {
                if (this.value.length === parseInt(this.attributes["maxlength"].value)) {
                    b.focus();
                }
            }

            b.onkeyup = function() {
                if (this.value.length === parseInt(this.attributes["maxlength"].value)) {
                    c.focus();
                }
            }

            c.onkeydown = function() {
                if (event.keyCode === 8) {
                    if (this.value.length === 0) {
                        b.focus();
                    }
                }
            }

            b.onkeydown = function() {
                if (event.keyCode === 8) {
                    if (this.value.length === 0) {
                        a.focus();
                    }
                }
            }
        }
        telclick();
    </script>
</body>

</html>