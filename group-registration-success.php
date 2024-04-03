<?php include "quote/template/head.php"; ?>
<link rel="stylesheet" href="dist/css/registration.css">
</head>

<body class="lang_tw success">
    <?php
        include "quote/template/added.php";
        include "quote/template/nav.php";
    ?>
    <main>
        <div class="kv">
            <img src="dist/images/kv.jpg" class="pc">
            <img src="dist/images/kv_mb.jpg" class="mo"> 
            <div class="pageTitle">報名完成</div>
        </div>
        <div class="pagePadding">
            <div class="container">
                <div class="txtBox">
                    <div class="blueTitle">您的報名表已送出！</div>
                    <div class="info">
                        感謝您對台北女青的支持，請務必至電子信箱完成各學員的報名資料<br>
                        資料填妥後才視為完成報名作業！
                    </div>
                    <div class="btnBox">
                        <a href="javascript:;" style="justify-content: center;">
                            看更多活動
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <?php
        include "quote/template/footer.php";
        include "quote/template/top_btn.php";
    ?>
    <script src="dist/js/main.js"></script>
</body>

</html>