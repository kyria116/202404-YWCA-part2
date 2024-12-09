<?php include "quote/template/head.php"; ?>
<link rel="stylesheet" href="dist/css/member.css">
</head>

<body class="lang_tw signup createStudent">
    <?php
        include "quote/template/added.php";
        include "quote/template/nav.php";
    ?>
    <main>
        <div class="kv">
            <img src="dist/images/kv.jpg" class="pc">
            <img src="dist/images/kv_mb.jpg" class="mo"> 
            <div class="pageTitle">創建會員</div>
        </div>
        <div class="pagePadding">
            <div class="container">
                <form action="">
                    <div class="checkMember">
                        <input type="checkbox" name="sameMember" id="sameMember">
                        <label for="sameMember">同會員資料</label>
                    </div>
                    <div class="form_wrap">
                        <!-- 如果必填沒有填寫資料，就加hasRequired -->
                        <div class="hasRequired">
                            <div class="m_title"><span>姓名</span></div>
                            <div class="m_info">
                                <input type="text" placeholder="請輸入您的真實姓名">
                            </div>
                            <span class="required"><i>*</i>必填</span>
                        </div>
                        <div class="country hasRequired">
                            <div class="m_title"><span>國籍</span></div>
                            <div class="m_info">
                                <div>
                                    <input type="radio" name="country" id="local">
                                    <label for="local">本國</label>
                                </div>
                                <div>
                                    <input type="radio" name="country" id="foreign">
                                    <label for="foreign">外國</label>
                                    <select name="" id="" class="countryList">
                                        <option value=""></option>
                                    </select>
                                </div>
                            </div>
                            <span class="required"><i>*</i>必填</span>
                        </div>
                    </div>
                    <div class="form_wrap">
                        <div class="hasRequired">
                            <div class="m_title fatherlandID">
                                <span>身分證字號</span>
                            </div>
                            <div class="m_title foreignID" style="display: none">
                                <span>護照號碼</span>
                            </div>
                            <div class="m_info">
                                <input type="text" placeholder="請輸入身分證字號" class="fatherlandID">
                                <input type="text" placeholder="請輸入護照號碼" class="foreignID" style="display: none">
                            </div>
                            <span class="required"><i>*</i>必填</span>
                        </div>
                    </div>
                    <div class="form_wrap">
                        <div>
                            <div class="m_title"><span>性別</span></div>
                            <div class="m_info">
                                <div>
                                    <input type="radio" name="sex" id="male">
                                    <label for="male">男性</label>
                                </div>
                                <div>
                                    <input type="radio" name="sex" id="female">
                                    <label for="female">女性</label>
                                </div>
                            </div>
                            <span class="required"><i>*</i>必填</span>
                        </div>
                        <div>
                            <div class="m_title"><span>生日</span></div>
                            <div class="m_info">
                                <input type="date" name="" id="" class="remove" value="1990-01-01">
                            </div>
                            <span class="required"><i>*</i>必填</span>
                        </div>
                    </div>
                    <div class="form_wrap">
                        <div>
                            <div class="m_title"><span>行動電話</span></div>
                            <input type="tel" name="" id="" placeholder="請輸入行動電話號碼，例：0912345678">
                            <span class="required"><i>*</i>必填</span>
                        </div>
                        <div class="homePhone">
                            <div class="m_title"><span>市內電話</span></div>
                            <div class="m_info">
                                <input type="text" name="" id="" placeholder="區碼"><span>-</span>
                                <input type="tel" name="" id="" placeholder="電話號碼">
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
                        <div>
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
                        <div>
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
                        <div>
                            <div class="m_title"><span>緊急聯絡人</span></div>
                            <div class="m_info">
                                <input type="text" name="" id="" placeholder="請輸入緊急聯絡人">
                                <input type="text" name="" id="" placeholder="請輸入聯絡人關係">
                            </div>
                            <span class="required"><i>*</i>必填</span>
                        </div>
                        <div>
                            <div class="m_title"><span>緊急連絡電話</span></div>
                            <div class="m_info">
                                <input type="tel" name="" id="" placeholder="請輸入緊急連絡電話">
                            </div>
                            <span class="required"><i>*</i>必填</span>
                        </div>
                    </div>
                    <div class="form_wrap">
                        <div>
                            <div class="m_title"><span>法定代理人</span></div>
                            <div class="m_info">
                                <input type="email" name="" id="" placeholder="請輸入法定代理人姓名">
                            </div>
                            <span class="required"><i>*</i>必填</span>
                        </div>
                        <div class="pc">
                            <div class="m_title">　</div>
                            <div class="m_info txtBox">
                                <div>※未滿18歲需填寫法定代理人</div>
                            </div>
                        </div>
                    </div>
                    <div class="mo">
                        <div class="txtBox_mo">
                            <div>※未滿18歲需填寫法定代理人</div>
                        </div>
                    </div>
                    <div class="checkBox">
                        <img src="dist/images/common/blue-exclamation.png">
                        <p>
                            請留意確認新增後，學員身分將不可替換，<span class="blue">僅能更改其聯絡資訊</span>。
                        </p>
                    </div>
                </form>
                <div class="allBtn">
                    <a href="member-info.php" class="whiteBtn">取消</a><a href="students-list.php">新增</a>
                </div>
            </div>
        </div>
    </main>
    <?php
        include "quote/template/footer.php";
        include "quote/template/top_btn.php";
    ?>
    <script src="dist/js/main.js"></script>
    <script src="dist/js/select.js"></script>
</body>

</html>