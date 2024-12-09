<?php include "quote/template/head.php"; ?>
<link rel="stylesheet" href="dist/css/member.css">
</head>

<body class="lang_tw signupSuccess">
    <?php
        include "quote/template/added.php";
        include "quote/template/nav.php";
    ?>
    <main>
        <div class="kv">
            <img src="dist/images/kv.jpg" class="pc">
            <img src="dist/images/kv_mb.jpg" class="mo"> 
            <div class="pageTitle">會員註冊</div>
        </div>
        <div class="pagePadding">
            <div class="container">
                <div class="txtBox">
                    <div class="blueTitle">註冊成功</div>
                    <div class="info">
                        親愛的 <span>許青青</span> 您好，恭喜您已註冊成功<br>
                        感謝您對台北女青的支持！
                    </div>
                    <div class="btnBox">
                        <a href="javascript:;" style="justify-content: center;">
                            回首頁
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