<?php include "quote/template/head.php"; ?>
<link rel="stylesheet" href="dist/css/member.css">
</head>

<body class="lang_tw signup">
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
                <div class="blueTitle">請選擇會員級別</div>
                <ul class="levelBox">
                    <li>
                        <input type="radio" name="level" id="level_1" checked>
                        <label for="level_1">
                            <div class="memberlevel">一般會員</div>
                            <div class="memberMoney">$2,000<span> / 年</span></div>
                            <div class="editor_Content">
                                <div class="editor_box pc_use">
                                    <div>
                                        <div>年繳會員費<br>會員費繳納後起算一年會籍期限</div>
                                        <div>會員轉換、退費規定請見<br><a href="javascript:;">會員權益條款</a>。</div>
                                    </div>
                                    <div>
                                        <div>可報名一般會員限定課程/活動</div>
                                        <div>台北女青課程皆享有95折優惠</div>
                                        <div>學員名額1位，由學員參加課程/活動</div>
                                    </div>   
                                </div>
                                <div class="editor_box mo_use">   
                                    <div>
                                        <div>年繳會員費<br>會員費繳納後起算一年會籍期限</div>
                                        <div>會員轉換、退費規定請見<br><a href="javascript:;">會員權益條款</a>。</div>
                                    </div>
                                    <div>
                                        <div>可報名一般會員限定課程/活動</div>
                                        <div>台北女青課程皆享有95折優惠</div>
                                        <div>學員名額1位，由學員參加課程/活動</div>
                                    </div>      
                                </div>
                            </div>
                        </label>
                    </li>
                    <li>
                        
                        <input type="radio" name="level" id="level_2">
                        <label for="level_2">
                            <div class="memberlevel">終身會員</div>
                            <div class="memberMoney">$10,000<span> / 年</span></div>
                            <div class="editor_Content">
                                <div class="editor_box pc_use">
                                    <div>
                                        <div>年繳會員費<br>會員費繳納後起算一年會籍期限</div>
                                        <div>會員轉換、退費規定請見<br><a href="javascript:;">會員權益條款</a>。</div>
                                    </div>
                                    <div>
                                        <div>可報名一般會員限定課程/活動</div>
                                        <div>台北女青課程皆享有95折優惠</div>
                                        <div>學員名額1位，由學員參加課程/活動</div>
                                    </div>   
                                </div>
                                <div class="editor_box mo_use">   
                                    <div>
                                        <div>年繳會員費<br>會員費繳納後起算一年會籍期限</div>
                                        <div>會員轉換、退費規定請見<br><a href="javascript:;">會員權益條款</a>。</div>
                                    </div>
                                    <div>
                                        <div>可報名一般會員限定課程/活動</div>
                                        <div>台北女青課程皆享有95折優惠</div>
                                        <div>學員名額1位，由學員參加課程/活動</div>
                                    </div>      
                                </div>
                            </div>
                        </label>
                    </li>
                    <li>
                        
                        <input type="radio" name="level" id="level_3">
                        <label for="level_3">
                            <div class="memberlevel">家庭會員</div>
                            <div class="memberMoney">$3,200<span> / 年</span></div>
                            <div class="editor_Content">
                                <div class="editor_box pc_use">
                                    <div>
                                        <div>年繳會員費<br>會員費繳納後起算一年會籍期限</div>
                                        <div>會員轉換、退費規定請見<br><a href="javascript:;">會員權益條款</a>。</div>
                                    </div>
                                    <div>
                                        <div>可報名一般會員限定課程/活動</div>
                                        <div>台北女青課程皆享有95折優惠</div>
                                        <div>學員名額1位，由學員參加課程/活動</div>
                                    </div>   
                                </div>
                                <div class="editor_box mo_use">   
                                    <div>
                                        <div>年繳會員費<br>會員費繳納後起算一年會籍期限</div>
                                        <div>會員轉換、退費規定請見<br><a href="javascript:;">會員權益條款</a>。</div>
                                    </div>
                                    <div>
                                        <div>可報名一般會員限定課程/活動</div>
                                        <div>台北女青課程皆享有95折優惠</div>
                                        <div>學員名額1位，由學員參加課程/活動</div>
                                    </div>      
                                </div>
                            </div>
                        </label>
                    </li>
                </ul>
                <div class="blueTitle mb20">請填寫註冊資料</div>
                <form action="">
                    <!-- 如果必填沒有填寫資料，就加hasRequired -->
                    <div class="form_wrap">
                        <div class="hasRequired">
                            <div class="m_title"><span>姓名</span></div>
                            <div class="m_info">
                                <input type="text" placeholder="請輸入您的真實姓名">
                            </div>
                            <span class="required"><i>*</i>必填</span>
                        </div>
                        <div class="country">
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
                            <div class="m_title"><span>帳號</span></div>
                            <div class="m_info">
                                <input type="text" placeholder="請輸入身分證字號" class="fatherlandID">
                                <input type="text" placeholder="請輸入護照號碼" class="foreignID" style="display: none">
                            </div>
                            <span class="required"><i>*</i>必填</span>
                        </div>
                        <div>
                            <div class="m_title"><span>密碼設定</span></div>
                            <div class="m_info">
                                <input type="password" name="" id="" placeholder="至少八碼英數組合(含大寫英文)">
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
                    <div class="checkBox">
                        <input type="checkbox" name="agree" id="agree">
                        <label for="agree">我已閱讀並同意 <a href="terms.php">本站條款</a></label>
                    </div>
                </form>
                <div class="allBtn">
                    <a href="signup-verify-success.php">註冊</a>
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