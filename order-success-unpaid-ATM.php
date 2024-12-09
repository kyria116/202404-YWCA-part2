<?php include "quote/template/head.php"; ?>
<link rel="stylesheet" href="dist/css/cart.css">
</head>

<!-- 沒有會員，加nonmember；
有會員，則刪除 -->
<body class="lang_tw orderSuccess">
    <?php
        include "quote/template/added.php";
        include "quote/template/nav.php";
    ?>
    <main>
        <div class="kv">
            <img src="dist/images/kv.jpg" class="pc">
            <img src="dist/images/kv_mb.jpg" class="mo"> 
            <div class="pageTitle">訂單完成</div>
        </div>
        <div class="pagePadding">
            <div class="container">
                <div class="blueTitle">您的訂單已成立！</div>
                <div class="payStates red">
                    <span>尚未付款</span>
                </div>
                <div class="txtBox">
                    <div class="hasLoginBox">
                        感謝您對台北女青的支持，<i></i>您的訂單編號為 <a href="my-order.php" class="numberList">Y20230101245</a> 。<br>
                        訂單完成後，可依下方付款資訊進行繳費，或至 <a href="my-order.php">會員專區 > 我的訂單</a> 查詢訂單與付款資訊。
                    </div>
                    <div class="noLoginBox">
                        感謝您對台北女青的支持，<i></i>您的訂單編號為 <a href="my-order.php" class="numberList">Y20230101245</a> 。<br>
                        訂單完成後，可依下方付款資訊進行繳費，或至 <a href="my-reservation.php">報名查詢</a> 查看您的課程與學員資訊。
                    </div>
                </div>
                <div class="redTxt">
                    ※ 請務必填寫並確認各學員的「活動報名資料」以完成報名作業！
                </div>
                <div class="allBtn hasLoginBox">
                    <a href="parental-consent.php">
                        活動報名資料
                    </a>
                </div>
                <div class="allBtn noLoginBox">
                    <a href="my-reservation.php">
                        報名查詢
                    </a>
                </div>
                <div class="payBox">
                    <div class="blueTitle">請至ATM繳費</div>
                    <div class="box">
                        <ul>
                            <li>
                                <div class="m_title">轉帳銀行</div>
                                <div class="m_info">中國信託</div>
                            </li>
                            <li>
                                <div class="m_title">銀行代碼</div>
                                <div class="m_info">822</div>
                            </li>
                            <li>
                                <div class="m_title">銀行帳號</div>
                                <div class="m_info">8135211330561040</div>
                            </li>
                        </ul>
                        <ul>
                            <li>
                                <div class="m_title">繳費金額</div>
                                <div class="m_info">$100</div>
                            </li>
                            <li>
                                <div class="m_title">繳費期限</div>
                                <div class="m_info">2021年5月13日  23點59分59秒</div>
                            </li>
                            <li>
                                <div class="m_title">訂單編號</div>
                                <div class="m_info">Y20230101245</div>
                            </li>
                        </ul>
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