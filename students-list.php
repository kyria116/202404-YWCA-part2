<?php include "quote/template/head.php"; ?>
<link rel="stylesheet" href="dist/css/member.css">
</head>

<body class="lang_tw memberInfo studentList">
    <?php
        include "quote/template/added.php";
        include "quote/template/nav.php";
    ?>
    <main>
        <div class="kv">
            <img src="dist/images/kv.jpg" class="pc">
            <img src="dist/images/kv_mb.jpg" class="mo"> 
            <div class="pageTitle">學員資料</div>
        </div>
        <div class="pagePadding">
            <div class="container">
                <div class="pc tabBtn">
                    <ul>
                        <li>
                            <a href="member-info.php">會員資料</a>
                        </li>
                        <li class="active">
                            <a href="javascript:;">學員資料</a>
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
                        <option value="member-info.php">會員資料</option>
                        <option value="javascript:;" selected>學員資料</option>
                        <option value="my-course.php">我的課程</option> 
                        <option value="my-order.php">我的訂單</option>
                        <option value="my-collection.php">我的收藏</option>
                    </select>
                </div>
                <div class="txt">
                    您擁有 <span>4</span> 位學員名額，<i></i>目前已創建 <span>2</span> 位學員，尚餘 <span>2</span> 個名額。
                </div>
                <!-- 有資料li加memberList, 沒有資料li加creatMember -->
                <ul class="newMember">
                    <li class="memberList">
                        <div class="topList">
                            <a href="javascript:;" class="nameBox">
                                <div class="name">
                                    <img src="dist/images/member.png">
                                    許大寶
                                </div>
                                <ul class="infoBox">
                                    <li>
                                        <div class="m_title">性別</div>
                                        <div class="m_info">男性</div>
                                    </li>
                                    <li>
                                        <div class="m_title">生日</div>
                                        <div class="m_info">1998/02/21</div>
                                    </li>
                                    <li>
                                        <div class="m_title">國籍</div>
                                        <div class="m_info">台灣</div>
                                    </li>
                                    <li>
                                        <div class="m_title">身分證字號</div>
                                        <div class="m_info">A123456789</div>
                                    </li>
                                </ul>
                                <div class="mo">
                                    <div class="openBox">
                                        <img src="dist/images/common/openIcon.png">
                                    </div>
                                </div>
                            </a>
                            <div class="btnBox">
                                <a href="javascript:;">
                                    儲存變更
                                </a>
                            </div>
                        </div>
                        <div class="bottomList">
                            <form action="">
                                <div class="form_wrap">
                                    <!-- 如果必填沒有填寫資料，就加hasRequired -->
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
                                        <div class="m_title"><span>緊急聯絡人</span></div>
                                        <div class="m_info">
                                            <input type="text" name="" id="" placeholder="請輸入緊急聯絡人">
                                            <input type="text" name="" id="" placeholder="請輸入聯絡人關係">
                                        </div>
                                        <span class="required"><i>*</i>必填</span>
                                    </div>
                                    <div class="hasRequired">
                                        <div class="m_title"><span>緊急連絡電話</span></div>
                                        <div class="m_info">
                                            <input type="text" name="" id="" placeholder="請輸入緊急連絡電話">
                                        </div>
                                        <span class="required"><i>*</i>必填</span>
                                    </div>
                                </div>
                                <div class="form_wrap">
                                    <div class="hasRequired">
                                        <div class="m_title"><span>法定代理人</span></div>
                                        <div class="m_info">
                                            <input type="text" name="" id="" placeholder="請輸入法定代理人姓名">
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
                            </form>
                        </div>
                    </li>
                    <li class="memberList">
                        <div class="topList">
                            <a href="javascript:;" class="nameBox">
                                <div class="name">
                                    <img src="dist/images/member.png">
                                    許大寶
                                </div>
                                <ul class="infoBox">
                                    <li>
                                        <div class="m_title">性別</div>
                                        <div class="m_info">男性</div>
                                    </li>
                                    <li>
                                        <div class="m_title">生日</div>
                                        <div class="m_info">1998/02/21</div>
                                    </li>
                                    <li>
                                        <div class="m_title">國籍</div>
                                        <div class="m_info">台灣</div>
                                    </li>
                                    <li>
                                        <div class="m_title">身分證字號</div>
                                        <div class="m_info">A123456789</div>
                                    </li>
                                </ul>
                                <div class="mo">
                                    <div class="openBox">
                                        <img src="dist/images/common/openIcon.png">
                                    </div>
                                </div>
                            </a>
                            <div class="btnBox">
                                <a href="javascript:;">
                                    儲存變更
                                </a>
                            </div>
                        </div>
                        <div class="bottomList">
                            <form action="">
                                <div class="form_wrap">
                                    <!-- 如果必填沒有填寫資料，就加hasRequired -->
                                    <div>
                                        <div class="m_title"><span>行動電話</span></div>
                                        <input type="tel" name="" id="" placeholder="請輸入行動電話號碼，例：0912345678">
                                        <span class="required"><i>*</i>必填</span>
                                    </div>
                                    <div class="homePhone">
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
                                            <span class="required"><i>*</i>必填</span>
                                        </div>
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
                                            <input type="text" name="" id="" placeholder="請輸入緊急連絡電話">
                                        </div>
                                        <span class="required"><i>*</i>必填</span>
                                    </div>
                                </div>
                                <div class="form_wrap">
                                    <div>
                                        <div class="m_title"><span>法定代理人</span></div>
                                        <div class="m_info">
                                            <input type="text" name="" id="" placeholder="請輸入法定代理人姓名">
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
                            </form>
                        </div>
                    </li>
                    <li class="creatMember">
                        <a href="create-student.php">
                            <span class="topLine"></span>
                            <span class="bottomLine"></span>
                            <span class="leftLine"></span>
                            <span class="rightLine"></span>
                            <span class="bgColor"></span>
                            <div class="img">
                                <img src="dist/images/common/addMember.png" class="nohover">
                                <img src="dist/images/common/add_hover.png" class="hover">
                            </div>
                            創建學員
                        </a>
                    </li>
                    <li class="creatMember">
                        <a href="create-student.php">
                            <span class="topLine"></span>
                            <span class="bottomLine"></span>
                            <span class="leftLine"></span>
                            <span class="rightLine"></span>
                            <span class="bgColor"></span>
                            <div class="img">
                                <img src="dist/images/common/addMember.png" class="nohover">
                                <img src="dist/images/common/add_hover.png" class="hover">
                            </div>
                            創建學員
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </main>
    <?php
        include "quote/template/footer.php";
        include "quote/template/top_btn.php";
    ?>
    <script src="dist/js/main.js"></script>
    <script src="dist/js/select.js"></script>
    <script>
        $('.topList .nameBox').on('click', function () {
            if($(this).parents('.memberList').hasClass('openBox')){
                $(this).parents('.memberList').removeClass('openBox')
                $(this).parents('.memberList').find('.bottomList').slideUp();
            }else{
                $(this).parents('.memberList').addClass('openBox')
                $(this).parents('.memberList').find('.bottomList').slideDown();
            }
        });
    </script>
</body>

</html>