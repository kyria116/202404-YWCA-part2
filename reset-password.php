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
            <div class="pageTitle">修改密碼</div>
        </div>
        <div class="pagePadding">
            <div class="container">
                <div class="loginBox">
                    <ul>
                        <!-- 如果必填沒有填寫資料，就加hasRequired -->
                        <li>
                            <div class="m_title"><span>原密碼</span></div>
                            <div class="m_info">
                                <input type="text" placeholder="請輸入原密碼">
                            </div>
                            <span class="required"><i>*</i>必填</span>
                        </li>
                        <li>
                            <div class="m_title"><span>新密碼</span></div>
                            <div class="m_info">
                                <input type="text" placeholder="至少八碼英數組合(含大寫英文)">
                            </div>
                            <span class="required"><i>*</i>必填</span>
                        </li>
                        <li>
                            <div class="m_title"><span>確認新密碼</span></div>
                            <div class="m_info">
                                <input type="text" placeholder="請再次輸入新密碼">
                            </div>
                            <span class="required"><i>*</i>必填</span>
                        </li>
                    </ul>
                    <div class="allBtn">
                        <a href="member-info.php">確認修改</a>
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