<?php include "quote/template/head.php"; ?>
<link rel="stylesheet" href="dist/css/member.css">
</head>

<body class="lang_tw signup changeMembership">
    <?php
        include "quote/template/added.php";
        include "quote/template/nav.php";
    ?>
    <main>
        <div class="kv">
            <img src="dist/images/kv.jpg" class="pc">
            <img src="dist/images/kv_mb.jpg" class="mo"> 
            <div class="pageTitle">會員級別變更</div>
        </div>
        <div class="pagePadding">
            <div class="container">
                <div class="blueTitle">請選擇欲變更之會員級別</div>
                <!-- 目前會籍增加currentMembership -->
                <ul class="levelBox">
                    <li class="currentMembership">
                        <input type="radio" name="level" id="level_1">
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
                            <p class="currentTxt">您目前的會籍</p>
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
                            <p class="currentTxt">您目前的會籍</p>
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
                            <p class="currentTxt">您目前的會籍</p>
                        </label>
                    </li>
                </ul>
                <div class="redTxt">
                    ※提醒您：會員轉換、退費規定請見<a href="terms.php?pageList=1">會員權益條款</a>，新會籍期限為繳費成功當日起算一年。
                </div>
                <div class="blackTxt">
                    <img src="dist/images/common/blue-exclamation.png">
                    <p>家庭會員可轉一般及終身會員，學員數量將降至1位且自動帶入會員資料，原本家庭會員的學員資料將會清除。</p>
                </div>
                <div class="checkBox">
                    <input type="checkbox" name="agree" id="agree">
                    <label for="agree">我已閱讀並同意 <a href="terms.php">本站條款</a></label>
                </div>
                <div class="allBtn">
                    <a href="javascript:;">轉換會籍</a>
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