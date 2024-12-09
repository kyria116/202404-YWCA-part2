<?php include "quote/template/head.php"; ?>
<link rel="stylesheet" href="dist/css/form.css">
</head>

<body class="lang_tw survey">
    <?php
        include "quote/template/added.php";
        include "quote/template/nav.php";
    ?>
    <main>
        <div class="kv">
            <img src="dist/images/kv.jpg" class="pc">
            <img src="dist/images/kv_mb.jpg" class="mo"> 
            <div class="pageTitle">活動報名資料</div>
        </div>
        <div class="pagePadding">
            <div class="container_topmenu">
                <div class="topMenuBox">
                    <div id="top-menu-ul" class="top-menu-ul">
                        <div class="item_Menu">
                            <div class="item_menu_Box">
                                <ul class="item_menu_list slides">
                                    <li>
                                        <a href="parental_consent.php">
                                            <p>家長同意書</p>
                                            <div>
                                                已完成 <span>3</span> 份<br>
                                                尚有1份未填寫
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="health_survey.php">
                                            <p>學員健康調查表</p>
                                            <div>
                                                已完成 <span>2</span> 份<br>
                                                尚有2份未填寫
                                            </div>
                                        </a>
                                    </li>
                                    <li class="active">
                                        <a href="javascript:;">
                                            <p>課前問卷</p>
                                            <div>
                                                總共 <span>3</span> 份
                                            </div>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="flex-direction-nav">
                            <a href="javascript:;" class="lbtn arrow flex-prev">
                                <div></div>
                            </a>
                            <a href="javascript:;" class="rbtn arrow flex-next">
                                <div></div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <ul class="listItems">
                    <li>
                        <div class="leftBox">
                            <ul>
                                <li class="name">
                                    B202209001 薑餅咪金幣挑戰營
                                </li>
                                <li class="date">
                                    <img src="dist/images/common/datePage.png">
                                    <span>2023/07/11 - 2023/07/13</span>
                                </li>
                            </ul>
                            <ul>
                                <li>
                                    <div class="m_title">學員名稱</div>
                                    <div class="m_info">許大寶</div>
                                </li>
                                <li>
                                    <div class="m_title">身分證字號</div>
                                    <div class="m_info">A123456789</div>
                                </li>
                            </ul>
                        </div>
                        <div class="rightBox">
                            <a href="javascript:;" target="_blank">前往填寫<img src="dist/images/common/share.png"></a>
                        </div>
                    </li>
                    <li>
                        <div class="leftBox">
                            <ul>
                                <li class="name">
                                    B202209001 薑餅咪金幣挑戰營
                                </li>
                                <li class="date">
                                    <img src="dist/images/common/datePage.png">
                                    <span>2023/07/11 - 2023/07/13</span>
                                </li>
                            </ul>
                            <ul>
                                <li>
                                    <div class="m_title">學員名稱</div>
                                    <div class="m_info">許大寶</div>
                                </li>
                                <li>
                                    <div class="m_title">身分證字號</div>
                                    <div class="m_info">A123456789</div>
                                </li>
                            </ul>
                        </div>
                        <div class="rightBox">
                            <a href="javascript:;" target="_blank">前往填寫<img src="dist/images/common/share.png"></a>
                        </div>
                    </li>
                    <li>
                        <div class="leftBox">
                            <ul>
                                <li class="name">
                                    B202209001 薑餅咪金幣挑戰營
                                </li>
                                <li class="date">
                                    <img src="dist/images/common/datePage.png">
                                    <span>2023/07/11 - 2023/07/13</span>
                                </li>
                            </ul>
                            <ul>
                                <li>
                                    <div class="m_title">學員名稱</div>
                                    <div class="m_info">許大寶</div>
                                </li>
                                <li>
                                    <div class="m_title">身分證字號</div>
                                    <div class="m_info">A123456789</div>
                                </li>
                            </ul>
                        </div>
                        <div class="rightBox">
                            <a href="javascript:;" target="_blank">前往填寫<img src="dist/images/common/share.png"></a>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </main>
    <?php
        include "quote/template/footer.php";
        include "quote/template/top_btn.php";
    ?>
    <script src="dist/js/main.js"></script>
    <script src="dist/js/form.js"></script>
</body>

</html>