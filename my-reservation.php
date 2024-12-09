<?php include "quote/template/head.php"; ?>
<link rel="stylesheet" href="dist/css/member.css">
</head>

<body class="lang_tw reservation">
    <?php
        include "quote/template/added.php";
        include "quote/template/nav.php";
    ?>
    <main>
        <div class="kv">
            <img src="dist/images/kv.jpg" class="pc">
            <img src="dist/images/kv_mb.jpg" class="mo"> 
            <div class="pageTitle">報名查詢</div>
        </div>
        <div class="pagePadding">
            <div class="container">
                <div class="loginBox">
                    <ul>
                        <!-- 如果必填沒有填寫資料，就加hasRequired -->
                        <li>
                            <div class="m_title"><span>姓名</span></div>
                            <div class="m_info">
                                <input type="text" placeholder="請輸入您的真實姓名">
                            </div>
                            <span class="required"><i>*</i>必填</span>
                        </li>
                        <li>
                            <div class="m_title"><span>身分證/護照</span></div>
                            <div class="m_info">
                                <input type="text" placeholder="請輸入身分證字號/護照號碼">
                            </div>
                            <span class="required"><i>*</i>必填</span>
                        </li>
                    </ul>
                    <div class="allBtn">
                        <a href="my-reservation-course-list.php">查詢</a>
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