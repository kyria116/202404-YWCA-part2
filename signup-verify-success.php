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
                    <div class="blueTitle">您的信箱已完成驗證</div>
                    <div class="info">
                        感謝您對台北女青的支持，歡迎您的加入！<br>
                        您註冊的會員級別為 <span>家庭會員</span> ，<i></i>會籍費用為 <span>$3,200</span> /年<br>
                        付款完成後，即完成報名
                    </div>
                    <div class="btnBox">
                        <a href="javascript:;">
                            <span class="payTxt">付款</span>
                            <span>$3,200</span>
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