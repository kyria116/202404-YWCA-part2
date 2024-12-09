<?php include "quote/template/head.php"; ?>
<link rel="stylesheet" href="dist/css/cart.css">
</head>

<body class="lang_tw orderSuccess noData">
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
                <div class="payStates"><span>付款完成</span></div>
                <div class="txtBox">
                    感謝您對台北女青的支持，<i></i>您的訂單編號為 <a href="my-order.php" class="numberList">Y20230101245</a> 。<br>
                    訂單完成後，可至 <a href="my-order.php">會員專區 > 我的訂單</a> 查詢訂單與報名資訊。
                </div>
                <div class="allBtn">
                    <a href="my-order-detail.php">
                        查看訂單
                    </a>
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