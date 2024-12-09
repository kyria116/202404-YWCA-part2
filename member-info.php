<?php include "quote/template/head.php"; ?>
<link rel="stylesheet" href="dist/css/member.css">
</head>

<body class="lang_tw memberInfo memberInfoBox">
    <?php
        include "quote/template/added.php";
        include "quote/template/nav.php";
    ?>
    <main>
        <div class="kv">
            <img src="dist/images/kv.jpg" class="pc">
            <img src="dist/images/kv_mb.jpg" class="mo"> 
            <div class="pageTitle">會員資料</div>
        </div>
        <div class="pagePadding">
            <div class="container">
                <div class="pc tabBtn">
                    <ul>
                        <li class="active">
                            <a href="javascript:;">會員資料</a>
                        </li>
                        <li>
                            <a href="students-list.php">學員資料</a>
                        </li>
                        <li>
                            <a href="my-course.php">我的課程</a>
                        </li>
                        <li>
                            <a href="my-order.php">我的訂單</a>
                        </li>
                        <li>
                            <a href="my-collection.php">我的收藏</a>
                        </li>
                    </ul>
                </div>
                <div class="mo tabBtn">
                    <select name="" id="" onChange="location = this.options[this.selectedIndex].value;">
                        <option value="javascript:;">會員資料</option>
                        <option value="students-list.php">學員資料</option>
                        <option value="my-course.php">我的課程</option> 
                        <option value="my-order.php">我的訂單</option>
                        <option value="my-collection.php">我的收藏</option>
                    </select>
                </div>
                <div class="whiteBox">
                    <div class="leftBox">
                        <div class="txt_1">家庭會員</div>
                        <div class="txt_2">
                            <p>會籍到期日</p>
                            <p>2023/05/09</p>
                        </div>
                        <div class="txt_3">
                            <img src="dist/images/common/exclamation.png">您的會籍即將到期
                        </div>
                        <a href="mail-membership-renewal-1.html" class="goBtn">前往續約繳費<img src="dist/images/common/memberList_menu.png"></a>
                        <a href="javascript:;" class="myCard"><img src="dist/images/common/card.png">我的會員卡</a>
                    </div>
                    <div class="rightBox">
                        <div>
                            <div class="name">
                                <img src="dist/images/member.png">
                                許青青
                            </div>
                            <div class="info infoTop">
                                <div class="m_title">帳號</div>
                                <div class="m_info">
                                    <span>A123456789</span>
                                    <a href="reset-password.php" class="password">
                                        <img src="dist/images/common/lock.png" alt="">
                                        修改密碼
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="info">
                                <div class="m_title">性別</div>
                                <div class="m_info">女性</div>
                            </div>
                            <div class="info">
                                <div class="m_title">國籍</div>
                                <div class="m_info">臺灣</div>
                            </div>
                            <div class="info">
                                <div class="m_title">生日</div>
                                <div class="m_info">1985/02/21</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="blueTitle">聯絡資訊</div>
                <form action="">
                    <div class="form_wrap">
                        <!-- 如果要跳出必填需加入hasRequired -->
                        <div class="hasRequired">
                            <div class="m_title"><span>行動電話</span></div>
                            <input type="tel" name="" id="" placeholder="請輸入行動電話號碼，例：0912345678">
                            <span class="required"><i>*</i>必填</span>
                        </div>
                        <div class="homePhone hasRequired">
                            <div class="m_title"><span>市內電話</span></div>
                            <div class="m_info">
                                <input type="text" name="" id="" placeholder="區碼"><span>-</span>
                                <input type="text" name="" id="" placeholder="電話號碼">
                                <span>-</span>
                                <input type="text" name="" id="" placeholder="分機號碼">
                            </div>
                            <span class="required"><i>*</i>必填</span>
                        </div>
                    </div>
                    <div class="mo">
                        <div class="txtBox_mo">
                            <div>※行動電話、市內電話至少填一項</div>
                        </div>
                    </div>
                    <div class="form_wrap">
                        <div class="hasRequired">
                            <div class="m_title"><span>電子信箱</span></div>
                            <div class="m_info">
                                <input type="email" name="" id="" placeholder="請輸入正確格式的電子信箱">
                            </div>
                            <span class="required"><i>*</i>必填</span>
                        </div>
                        <div class="pc">
                            <div class="m_title">　</div>
                            <div class="m_info txtBox">
                                <div>※行動電話、市內電話至少填一項</div>
                            </div>
                        </div>
                    </div>
                    <div class="form_wrap2">
                        <div class="hasRequired">
                            <div class="m_title"><span>地址</span></div>
                            <div class="m_info">
                                <div class="twzipcode">
                                    <select data-role="county" class="form-select"></select>
                                    <select data-role="district" class="form-select"></select>
                                    <input type="hidden" data-role="zipcode" />
                                </div>
                                <input class="detailAddr" type="text" name="" id="" placeholder="請輸入地址">
                            </div>
                            <span class="required"><i>*</i>必填</span>
                        </div>
                    </div>
                    <div class="form_wrap">
                        <div class="hasRequired">
                            <div class="m_title"><span>收據抬頭</span></div>
                            <div class="m_info">
                                <input type="text" value="許晶晶">
                            </div>
                            <span class="required"><i>*</i>必填</span>
                        </div>
                        <div class="country">
                            <div class="m_title">公司統編</div>
                            <div class="m_info">
                                <input type="text" placeholder="請輸入公司統編">
                            </div>
                        </div>
                    </div>
                </form>
                <div class="allBtn">
                    <a href="javascript:;">儲存變更</a>
                </div>
                <div class="bigBtn">
                    <a href="create-student.php"><img src="dist/images/common/creat.png">創建學員資料</a>
                    <a href="change-membership.php"><img src="dist/images/common/change.png">會員級別變更</a>
                </div>
            </div>
        </div>
    </main>
    <!-- 我的會員卡 -->
    <div id="popup">
        <div class="popup_contain">
            <div class="topPop">
                <div class="cardSort">家庭會員</div>
                <p>YWCA TAIPEI</p>
            </div>
            <div class="bottomPop">
                <div class="name">許青青</div>
                <div class="infoPop">
                    <div class="m_title">會員編號</div>
                    <div class="m_info">12345678</div>
                </div>
                <div class="infoPop">
                    <div class="m_title">會籍期限</div>
                    <div class="m_info">2023/05/09</div>
                </div>
                <div class="logo">
                    <img src="dist/images/common/logo.png">
                </div>
            </div>
            <div class="closeIcon">
                <img src="dist/images/common/close_pop.png">
            </div>
        </div>
    </div>
    <!-- 會員資格到期 / 第一次會員登入時 -->
    <div id="popup2">
        <div class="popup_contain">
            <div class="topPop">
                親愛的會員 您好
            </div>
            <ul class="bottomPop">
                <!-- 會員資格到期 -->
                <li style="display:none">
                    <div class="txt">
                        感謝您對本會的支持，提醒您：您的 <span class="red">會員資格已到期</span> 。<br>如未續會，會員資格將暫時"停權"且將無法行使會員相關權利及課程優惠，<br>但您仍可依 <span class="blue">一般價</span> 報名。<br>若要恢復會籍，請繼續支持並繳費完成。<br>誠摯的邀請您一同加入台北女青「培力女性 引領改變」的行列！
                    </div>
                    <div class="allBtn">
                        <a href="javascript:;">前往繳費</a>
                    </div>
                </li>
                <!-- 第一次會員登入時 -->
                <li>
                    <div class="txt">
                        感謝您對本會的支持，提醒您：<br>為了提供您更完整且優質的系統服務，<br>需麻煩您完整填寫會員資料並立即更改密碼，<i></i>以確保您的資料安全性及享有完善的會員權益！
                    </div>
                    <div class="allBtn">
                        <a href="javascript:;" class="closeBtn">前往填寫</a>
                    </div>
                </li>
            </ul>
            <div class="closeIcon closeBtn">
                <img src="dist/images/common/close_bt.png">
            </div>
        </div>
    </div>
    <?php
        include "quote/template/footer.php";
        include "quote/template/top_btn.php";
    ?>
    <script src="dist/js/main.js"></script>
    <script src="dist/js/memberInfo.js"></script>
</body>

</html>