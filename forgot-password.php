<?php include "quote/template/head.php"; ?>
<link rel="stylesheet" href="dist/css/member.css">
</head>

<body class="lang_tw forgot">
    <?php
    include "quote/template/added.php";
    include "quote/template/nav.php";
    ?>
    <main>
        <div class="kv">
            <img src="dist/images/kv.jpg" class="pc">
            <img src="dist/images/kv_mb.jpg" class="mo">
            <div class="pageTitle">忘記密碼</div>
        </div>
        <div class="pagePadding">
            <div class="container">
                <div class="infoTxt">
                    請輸入您註冊的帳號及電子信箱，<i></i>系統將發送臨時密碼至您的電子信箱<br>
                    為了您的資料安全考量，<i></i>建議登入後立即更改密碼
                </div>
                <div class="loginBox">
                    <ul>
                        <!-- 如果必填沒有填寫資料，就加hasRequired -->
                        <li>
                            <div class="m_title"><span>帳號</span></div>
                            <div class="m_info">
                                <input type="text" placeholder="請輸入身份證字號/護照號碼">
                            </div>
                            <span class="required"><i>*</i>必填</span>
                        </li>
                        <li>
                            <div class="m_title"><span>電子信箱</span></div>
                            <div class="m_info">
                                <input type="text" placeholder="請輸入電子信箱">
                            </div>
                            <span class="required"><i>*</i>必填</span>
                        </li>
                    </ul>
                    <div class="allBtn">
                        <a href="reset-password.php">送出</a>
                    </div>
                    <div class="infoTxt fnoted">
                        送出後，請至電子信箱查詢收到與否；<br>
                        若無，請重新執行一次。
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