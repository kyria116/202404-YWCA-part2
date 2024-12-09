<?php include "quote/template/head.php"; ?>
<link rel="stylesheet" href="dist/css/cart.css">
</head>

<!-- 有登入會員的cart預設body會有hasLogin -->
<body class="lang_tw cart hasLogin">
    <?php
        include "quote/template/added.php";
        include "quote/template/nav.php";
    ?>
    <main>
        <div class="kv">
            <img src="dist/images/kv.jpg" class="pc">
            <img src="dist/images/kv_mb.jpg" class="mo"> 
            <div class="pageTitle">購物車</div>
        </div>
        <div class="pagePadding">
            <div class="container"> 
                <section>
                    <div class="blueTitle mb10">選購清單</div>
                    <div class="orderItems">
                        <ul>
                            <li class="orderList">
                                <ul class="titleHeader">
                                    <li>課程/活動名稱</li>
                                    <li>費用</li>
                                </ul>
                                <ul class="containTop">
                                    <li>
                                        <!-- 
                                            圖片尺寸 
                                            250 * 163 (桌手機共用同一張)
                                        -->
                                        <div class="num">1</div>
                                        <div class="imgBox">
                                            <div class="img">
                                                <img src="dist/images/img.png">
                                            </div>
                                            <div class="box">
                                                <div class="topTxtBox">
                                                    <div class="course_date">2023/07/11 - 2023/07/13</div>
                                                    <div class="course_title">小狼崇林奇譚季</div>
                                                </div>
                                                <div class="course_location">
                                                    <img src="dist/images/common/map.png">
                                                    <div class="location">
                                                        宜蘭縣頭城鎮
                                                    </div>
                                                </div>
                                                <div class="price mo_991">
                                                    <div class="m_title">費用</div>
                                                    <div class="m_info">$6,930</div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="btnChoice">
                                            <a href="javascript:;" class="costDirectionsAdd">選擇學員</a>
                                            <span>請選擇符合參加課程/活動資格的學員</span>
                                        </div>
                                    </li>
                                    <li class="deletBox"><span class="pc_991">$6,930</span><a href="javascript:;" class="delet"></a></li>
                                </ul>
                                <div class="memberList">
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
                                        </form>
                                    </div>
                                </div>
                            </li>
                            <li class="orderList">
                                <ul class="titleHeader">
                                    <li>課程/活動名稱</li>
                                    <li>費用</li>
                                </ul>
                                <ul class="containTop">
                                    <li>
                                        <!-- 
                                            圖片尺寸 
                                            250 * 163 (桌手機共用同一張)
                                        -->
                                        <div class="num">2</div>
                                        <div class="imgBox">
                                            <div class="img">
                                                <img src="dist/images/img.png">
                                            </div>
                                            <div class="box">
                                                <div class="topTxtBox">
                                                    <div class="course_date">2023/07/11 - 2023/07/13</div>
                                                    <div class="course_title">小狼崇林奇譚季</div>
                                                </div>
                                                <div class="course_location">
                                                    <img src="dist/images/common/map.png">
                                                    <div class="location">
                                                        宜蘭縣頭城鎮
                                                    </div>
                                                </div>
                                                <div class="price mo_991">
                                                    <div class="m_title">費用</div>
                                                    <div class="m_info">$6,930</div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="btnChoice">
                                            <a href="javascript:;" class="costDirectionsAdd">選擇學員</a>
                                            <span>請選擇符合參加課程/活動資格的學員</span>
                                        </div>
                                    </li>
                                    <li class="deletBox"><span class="pc_991">$6,930</span><a href="javascript:;" class="delet"></a></li>
                                </ul>
                            </li>
                        </ul>
                        <div class="totalBox">
                            <div class="leftBox">
                                <div class="m_title">折扣碼</div>
                                <div class="m_info">
                                    <div class="input">
                                        <input type="text" name="" id="" placeholder="請輸入折扣碼">
                                        <div class="s_txt">*此折扣碼不存在</div>
                                    </div>
                                    <a href="javascript:;">使用</a>
                                </div> 
                            </div>
                            <div class="totleMoney">
                                <ul>
                                    <li>
                                        <div class="m_title">小計</div>
                                        <div class="s_info">$14,630</div>
                                    </li>
                                    <li>
                                        <div class="m_title">折扣碼折抵</div>
                                        <div class="s_info">- $200</div>
                                    </li>
                                    <li>
                                        <div class="m_title">應付金額</div>
                                        <div class="m_info">$6,930</div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </section>
                <section>
                    <div class="blueTitle">
                        付款方式
                        <div class="payWarning">(若應付金額為0者無需點選以下付款方式)</div>
                    </div>
                    <ul class="payWay">
                        <li>
                            <input type="radio" name="payway" id="creditCard" checked>
                            <label for="creditCard">
                                <img src="dist/images/common/creditCard.png">
                                <span>線上刷卡</span>
                            </label>
                        </li>
                        <li>
                            <input type="radio" name="payway" id="atm">
                            <label for="atm">
                                <img src="dist/images/common/atm.png">
                                <span>線上ATM</span>
                            </label>
                        </li>
                        <li>
                            <input type="radio" name="payway" id="market">
                            <label for="market">
                                <img src="dist/images/common/market.png">
                                <span>超商代收</span>
                            </label>
                        </li>
                    </ul>
                </section>
                <div class="blueBox">
                    <div class="noReady">
                        <img src="dist/images/common/blue-exclamation.png">
                        <!-- 20240416 -->
                        <span>請先閱讀並點選同意 <i style="color: #F42F52">➜</i></span>
                        <!-- 20240416 -->
                    </div>
                    <div class="hasReady">
                        <img src="dist/images/common/hasTxt.png">
                        <span>我已閱讀並同意</span>
                    </div>
                    <a href="javascript:;" class="btn costDirections">報名須知</a>
                </div>
                <div class="checkBox">
                    <input type="checkbox" name="agreeTxt" id="agreeTxt">
                    <label for="agreeTxt"><i></i><span>我已確認上述資料皆填寫正確，若資料有誤須自行負責</span></label>
                </div>
                <!-- 如果上述checkbox都有勾選就可以付款，只需把disable刪除即可 -->
                <div class="btnBox">
                    <a href="order-success-paid-no_data.php">
                        <span class="payTxt">付款</span>
                        <span>$3,200</span>
                    </a>
                </div>
                <div class="redTxt">
                    ※提醒您：<br>
                    1. 完成付款後，請務必至 <a href="my-order-detail.php">會員專區>訂單明細</a> 完成各學員的報名資料，<i></i>資料填妥後才視為完成報名作業！<br>
                    2. 無法付款時，請確認是否重複報名課程！
                </div>
            </div>
        </div>
    </main>
    <div id="popup">
        <div class="popup_contain">
            <div class="whiteBox">
                <div class="popbox">
                    <div class="b_title">閱讀並同意報名須知</div>
                    <ul>
                        <li>
                            <div class="boxPrea">
                                <div class="popupBox">
                                    <div class="boxColor">
                                        <div class="blueTxtPop">
                                            學員服務條款
                                        </div>
                                        <div class="redTxtPop">
                                            *各班現場報名及網路報名人數皆有限，人數若已額滿，則不再受理報名*<br>
                                            *請仔細閱讀後，於下方按「我同意上述條款並進行報名作業」表示同意*
                                        </div>
                                        <p>
                                            感謝您報名台北基督教女青年會(以下簡稱本會)課程(以下簡稱本課程)，為了保護您報名權益，請在報名前詳細閱讀下列說明，當完成報名申請時，即表示您已經同意成為本會學員及使用本會所提供之相關服務，並遵守以下條款及規範。
                                            關於您在本會註冊之個人資料，本會將依中華民國個人資料保護法與相關法令及本會學員規章規範保護之。
                                            感謝您報名台北基督教女青年會(以下簡稱本會)課程(以下簡稱本課程)，為了保護您報名權益，請在報名前詳細閱讀下列說明，當完成報名申請時，即表示您已經同意成為本會學員及使用本會所提供之相關服務，並遵守以下條款及規範。
                                            關於您在本會註冊之個人資料，本會將依中華民國個人資料保護法與相關法令及本會學員規章規範保護之。
                                            感謝您報名台北基督教女青年會(以下簡稱本會)課程(以下簡稱本課程)，為了保護您報名權益，請在報名前詳細閱讀下列說明，當完成報名申請時，即表示您已經同意成為本會學員及使用本會所提供之相關服務，並遵守以下條款及規範。
                                            關於您在本會註冊之個人資料，本會將依中華民國個人資料保護法與相關法令及本會學員規章規範保護之。
                                            感謝您報名台北基督教女青年會(以下簡稱本會)課程(以下簡稱本課程)，為了保護您報名權益，請在報名前詳細閱讀下列說明，當完成報名申請時，即表示您已經同意成為本會學員及使用本會所提供之相關服務，並遵守以下條款及規範。
                                            關於您在本會註冊之個人資料，本會將依中華民國個人資料保護法與相關法令及本會學員規章規範保護之。
                                            感謝您報名台北基督教女青年會(以下簡稱本會)課程(以下簡稱本課程)，為了保護您報名權益，請在報名前詳細閱讀下列說明，當完成報名申請時，即表示您已經同意成為本會學員及使用本會所提供之相關服務，並遵守以下條款及規範。
                                            關於您在本會註冊之個人資料，本會將依中華民國個人資料保護法與相關法令及本會學員規章規範保護之。

                                            一、個人資料安全告知事項
                                            您於本會註冊之個人資料，本會將依個人資料保護法與本會個資安全維護管理辦法之規範，蒐集、處理及利用您感謝您報名台北基督教女青年會(以下簡稱本會)課程(以下簡稱本課程)，為了保護您報名權益，請在報名前詳細閱讀下列說明，當完成報名申請時，即表示您已經同意成為本會學員及使用本會所提供之相關服務，並遵守以下條款及規範。
                                            關於您在本會註冊之個人資料，本會將依中華民國個人資料保護法與相關法令及本會學員規章規範保護之。

                                            一、個人資料安全告知事項
                                            您於本會註冊之個人資料，本會將依個人資料保護法與本會個資安全維護管理辦法之規範，蒐集、處理及利用您感謝您報名台北基督教女青年會(以下簡稱本會)課程(以下簡稱本課程)，為了保護您報名權益，請在報名前詳細閱讀下列說明，當完成報名申請時，即表示您已經同意成為本會學員及使用本會所提供之相關服務，並遵守以下條款及規範。
                                            關於您在本會註冊之個人資料，本會將依中華民國個人資料保護法與相關法令及本會學員規章規範保護之。

                                            一、個人資料安全告知事項
                                            您於本會註冊之個人資料，本會將依個人資料保護法與本會個資安全維護管理辦法之規範，蒐集、處理及利用您
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="checkBoxPop">
                                <input type="checkbox" name="" id="agreed_1">
                                <label for="agreed_1" class="disable">我已閱讀並同意「學員服務條款」內容</label>
                                <p>（請先詳細閱讀「學員服務條款」內容）</p>
                            </div>
                        </li>
                        <li>
                            <div class="boxPrea">
                                <div class="popupBox">
                                    <div class="boxColor">
                                        <div class="blueTxtPop">
                                            活動報名辦法
                                        </div>
                                        <div class="redTxtPop">
                                            *各班現場報名及網路報名人數皆有限，人數若已額滿，則不再受理報名*<br>
                                            *請仔細閱讀後，於下方按「我同意上述條款並進行報名作業」表示同意*
                                        </div>
                                        <p>
                                            感謝您報名台北基督教女青年會(以下簡稱本會)課程(以下簡稱本課程)，為了保護您報名權益，請在報名前詳細閱讀下列說明，當完成報名申請時，即表示您已經同意成為本會學員及使用本會所提供之相關服務，並遵守以下條款及規範。
                                            關於您在本會註冊之個人資料，本會將依中華民國個人資料保護法與相關法令及本會學員規章規範保護之。
                                            感謝您報名台北基督教女青年會(以下簡稱本會)課程(以下簡稱本課程)，為了保護您報名權益，請在報名前詳細閱讀下列說明，當完成報名申請時，即表示您已經同意成為本會學員及使用本會所提供之相關服務，並遵守以下條款及規範。
                                            關於您在本會註冊之個人資料，本會將依中華民國個人資料保護法與相關法令及本會學員規章規範保護之。
                                            感謝您報名台北基督教女青年會(以下簡稱本會)課程(以下簡稱本課程)，為了保護您報名權益，請在報名前詳細閱讀下列說明，當完成報名申請時，即表示您已經同意成為本會學員及使用本會所提供之相關服務，並遵守以下條款及規範。
                                            關於您在本會註冊之個人資料，本會將依中華民國個人資料保護法與相關法令及本會學員規章規範保護之。
                                            感謝您報名台北基督教女青年會(以下簡稱本會)課程(以下簡稱本課程)，為了保護您報名權益，請在報名前詳細閱讀下列說明，當完成報名申請時，即表示您已經同意成為本會學員及使用本會所提供之相關服務，並遵守以下條款及規範。
                                            關於您在本會註冊之個人資料，本會將依中華民國個人資料保護法與相關法令及本會學員規章規範保護之。
                                            感謝您報名台北基督教女青年會(以下簡稱本會)課程(以下簡稱本課程)，為了保護您報名權益，請在報名前詳細閱讀下列說明，當完成報名申請時，即表示您已經同意成為本會學員及使用本會所提供之相關服務，並遵守以下條款及規範。
                                            關於您在本會註冊之個人資料，本會將依中華民國個人資料保護法與相關法令及本會學員規章規範保護之。

                                            一、個人資料安全告知事項
                                            您於本會註冊之個人資料，本會將依個人資料保護法與本會個資安全維護管理辦法之規範，蒐集、處理及利用您感謝您報名台北基督教女青年會(以下簡稱本會)課程(以下簡稱本課程)，為了保護您報名權益，請在報名前詳細閱讀下列說明，當完成報名申請時，即表示您已經同意成為本會學員及使用本會所提供之相關服務，並遵守以下條款及規範。
                                            關於您在本會註冊之個人資料，本會將依中華民國個人資料保護法與相關法令及本會學員規章規範保護之。

                                            一、個人資料安全告知事項
                                            您於本會註冊之個人資料，本會將依個人資料保護法與本會個資安全維護管理辦法之規範，蒐集、處理及利用您感謝您報名台北基督教女青年會(以下簡稱本會)課程(以下簡稱本課程)，為了保護您報名權益，請在報名前詳細閱讀下列說明，當完成報名申請時，即表示您已經同意成為本會學員及使用本會所提供之相關服務，並遵守以下條款及規範。
                                            關於您在本會註冊之個人資料，本會將依中華民國個人資料保護法與相關法令及本會學員規章規範保護之。

                                            一、個人資料安全告知事項
                                            您於本會註冊之個人資料，本會將依個人資料保護法與本會個資安全維護管理辦法之規範，蒐集、處理及利用您
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="checkBoxPop">
                                <input type="checkbox" name="" id="agreed_2">
                                <label for="agreed_2" class="disable">我已閱讀並同意「活動報名辦法」內容</label>
                                <p>（請先詳細閱讀「活動報名辦法」內容）</p>
                            </div>
                        </li>
                        <li>
                            <div class="boxPrea">
                                <div class="popupBox">
                                    <div class="boxColor">
                                        <div class="blueTxtPop">
                                            活動報名須知
                                        </div>
                                        <div class="redTxtPop">
                                            *各班現場報名及網路報名人數皆有限，人數若已額滿，則不再受理報名*<br>
                                            *請仔細閱讀後，於下方按「我同意上述條款並進行報名作業」表示同意*
                                        </div>
                                        <p>
                                            感謝您報名台北基督教女青年會(以下簡稱本會)課程(以下簡稱本課程)，為了保護您報名權益，請在報名前詳細閱讀下列說明，當完成報名申請時，即表示您已經同意成為本會學員及使用本會所提供之相關服務，並遵守以下條款及規範。
                                            關於您在本會註冊之個人資料，本會將依中華民國個人資料保護法與相關法令及本會學員規章規範保護之。
                                            感謝您報名台北基督教女青年會(以下簡稱本會)課程(以下簡稱本課程)，為了保護您報名權益，請在報名前詳細閱讀下列說明，當完成報名申請時，即表示您已經同意成為本會學員及使用本會所提供之相關服務，並遵守以下條款及規範。
                                            關於您在本會註冊之個人資料，本會將依中華民國個人資料保護法與相關法令及本會學員規章規範保護之。
                                            感謝您報名台北基督教女青年會(以下簡稱本會)課程(以下簡稱本課程)，為了保護您報名權益，請在報名前詳細閱讀下列說明，當完成報名申請時，即表示您已經同意成為本會學員及使用本會所提供之相關服務，並遵守以下條款及規範。
                                            關於您在本會註冊之個人資料，本會將依中華民國個人資料保護法與相關法令及本會學員規章規範保護之。
                                            感謝您報名台北基督教女青年會(以下簡稱本會)課程(以下簡稱本課程)，為了保護您報名權益，請在報名前詳細閱讀下列說明，當完成報名申請時，即表示您已經同意成為本會學員及使用本會所提供之相關服務，並遵守以下條款及規範。
                                            關於您在本會註冊之個人資料，本會將依中華民國個人資料保護法與相關法令及本會學員規章規範保護之。
                                            感謝您報名台北基督教女青年會(以下簡稱本會)課程(以下簡稱本課程)，為了保護您報名權益，請在報名前詳細閱讀下列說明，當完成報名申請時，即表示您已經同意成為本會學員及使用本會所提供之相關服務，並遵守以下條款及規範。
                                            關於您在本會註冊之個人資料，本會將依中華民國個人資料保護法與相關法令及本會學員規章規範保護之。

                                            一、個人資料安全告知事項
                                            您於本會註冊之個人資料，本會將依個人資料保護法與本會個資安全維護管理辦法之規範，蒐集、處理及利用您感謝您報名台北基督教女青年會(以下簡稱本會)課程(以下簡稱本課程)，為了保護您報名權益，請在報名前詳細閱讀下列說明，當完成報名申請時，即表示您已經同意成為本會學員及使用本會所提供之相關服務，並遵守以下條款及規範。
                                            關於您在本會註冊之個人資料，本會將依中華民國個人資料保護法與相關法令及本會學員規章規範保護之。

                                            一、個人資料安全告知事項
                                            您於本會註冊之個人資料，本會將依個人資料保護法與本會個資安全維護管理辦法之規範，蒐集、處理及利用您感謝您報名台北基督教女青年會(以下簡稱本會)課程(以下簡稱本課程)，為了保護您報名權益，請在報名前詳細閱讀下列說明，當完成報名申請時，即表示您已經同意成為本會學員及使用本會所提供之相關服務，並遵守以下條款及規範。
                                            關於您在本會註冊之個人資料，本會將依中華民國個人資料保護法與相關法令及本會學員規章規範保護之。

                                            一、個人資料安全告知事項
                                            您於本會註冊之個人資料，本會將依個人資料保護法與本會個資安全維護管理辦法之規範，蒐集、處理及利用您
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="checkBoxPop">
                                <input type="checkbox" name="" id="agreed_3">
                                <label for="agreed_3" class="disable">我已閱讀並同意「活動報名須知」內容</label>
                                <p>（請先詳細閱讀「活動報名須知」內容）</p>
                            </div>
                        </li>
                    </ul>
                    <div class="allBtn">
                        <a href="javascript:;" class="closeIcon btn disable">我已閱讀並同意報名須知</a>
                    </div>
                </div>
            </div>
            <div class="closeIcon">
                <img src="dist/images/common/close_bt.png">
            </div>
        </div>
    </div>
    <div id="popup2">
        <div class="popup_contain">
            <div class="popBox">
                <div class="whiteBox">
                    <div class="popbox">
                        <div class="b_title">選擇學員</div>
                        <div class="activeName">A202301002  感恩節之夜-營友同樂會</div>
                        <div class="qualifications">
                            <div class="m_title">參加資格</div>
                            <div class="m_info">性別：不限  /  生日：不限</div>
                        </div>
                        <ul class="people">
                            <li class="active">
                                <div class="topList">
                                    <div class="nameBox">
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
                                    </div>
                                    <div class="btnBox">
                                        <a href="javascript:;">
                                            <span class="choice">選擇此學員</span>
                                            <span class="choiceNo">不符合參加資格</span>
                                        </a>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="topList">
                                    <div class="nameBox">
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
                                    </div>
                                    <div class="btnBox disable">
                                        <a href="javascript:;">
                                            <span class="choice">選擇此學員</span>
                                            <span class="choiceNo">不符合參加資格</span>
                                        </a>
                                    </div>
                                </div>
                            </li>
                        </ul>
                        <div class="addPeople">
                            您尚有 <span>2</span> 位學員名額，<i></i>創建學員時，請務必留意活動參加資格<br>創建完成後，將成為正式的學員資料，<i></i>可至會員專區查看。
                        </div>
                        <div class="allBtn">
                            <a href="javascript:;" class="btn addPeopleBtn">創建學員</a>
                        </div>
                    </div>
                </div>
                <div class="closeIcon">
                    <img src="dist/images/common/close_bt.png">
                </div>
            </div>
        </div>
    </div>
    <div id="popup3">
        <div class="popup_contain">
            <div class="popBox">
                <div class="whiteBox">
                    <div class="popbox">
                        <div class="b_title">創建學員</div>
                        <div class="blueBox">
                            創建學員時，務必留意活動參加資格。創建完成後，將成為正式的學員資料，可至會員專區查看。
                        </div>
                        <form action="">
                            <div class="checkMember">
                                <input type="checkbox" name="sameMember" id="sameMember">
                                <label for="sameMember">同會員資料</label>
                            </div>
                            <!-- 如果必填沒有填寫資料，就加hasRequired -->
                            <div class="form_wrap">
                                <div>
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
                                <div>
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
                                <div class="hasRequired">
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
                            <div class="checkBoxForm">
                                <img src="dist/images/common/blue-exclamation.png">
                                <p>
                                    請留意確認新增後，學員身分將不可替換，<span class="blue">僅能更改其聯絡資訊</span>。
                                </p>
                            </div>
                        </form>
                        <div class="allBtn">
                            <a href="javascript:;" class="btn">新增</a>
                        </div>
                    </div>
                </div> 
                <div class="closeIcon">
                    <img src="dist/images/common/close_bt.png">
                </div>
            </div>
        </div>
    </div>
    <?php
        include "quote/template/footer.php";
        include "quote/template/top_btn.php";
    ?>
    <script src="dist/js/main.js"></script>
    <script src="dist/js/cart-hasLogin.js"></script>
</body>

</html>