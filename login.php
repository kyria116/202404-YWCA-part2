<?php include "quote/template/head.php"; ?>
<link rel="stylesheet" href="dist/css/member.css">
</head>

<body class="lang_tw login">
    <?php
        include "quote/template/added.php";
        include "quote/template/nav.php";
    ?>
    <main>
        <div class="kv">
            <img src="dist/images/kv.jpg" class="pc">
            <img src="dist/images/kv_mb.jpg" class="mo"> 
            <div class="pageTitle">會員登入</div>
        </div>
        <div class="pagePadding">
            <div class="container">
                <div class="loginBox">
                    <ul>
                        <!-- 如果必填沒有填寫資料，就加hasRequired -->
                        <li class="">
                            <div class="m_title"><span>帳號</span></div>
                            <div class="m_info">
                                <input type="text" placeholder="請輸入身份證字號/護照號碼">
                            </div>
                            <span class="required"><i>*</i>必填</span>
                        </li>
                        <li class="">
                            <div class="m_title"><span>密碼</span></div>
                            <div class="m_info">
                                <input type="text" placeholder="請輸入密碼">
                            </div>
                            <span class="required"><i>*</i>必填</span>
                        </li>
                    </ul>
                    <div class="allBtn">
                        <a href="member-info.php">登入</a>
                    </div>
                    <div class="loginBtn">
                        <a href="sign-up.php">加入會員</a>
                        <div class="line"></div>
                        <a href="forgot-password.php">忘記密碼</a>
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