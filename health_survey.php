<?php include "quote/template/head.php"; ?>
<link rel="stylesheet" href="dist/css/form.css">
</head>

<body class="lang_tw survey consent health">
    <?php
        include "quote/template/added.php";
        include "quote/template/nav.php";
    ?>
    <main>
        <div class="kv">
            <img src="dist/images/kv.jpg" class="pc">
            <img src="dist/images/kv_mb.jpg" class="mo"> 
            <div class="pageTitle">活動報名資料</div>
        </div>
        <div class="pagePadding">
            <div class="container_topmenu">
                <div class="topMenuBox">
                    <div id="top-menu-ul" class="top-menu-ul">
                        <div class="item_Menu">
                            <div class="item_menu_Box">
                                <ul class="item_menu_list slides">
                                    <li>
                                        <a href="parental_consent.php">
                                            <p>家長同意書</p>
                                            <div>
                                                已完成 <span>3</span> 份<br>
                                                尚有1份未填寫
                                            </div>
                                        </a>
                                    </li>
                                    <li class="active">
                                        <a href="javascript:;">
                                            <p>學員健康調查表</p>
                                            <div>
                                                已完成 <span>2</span> 份<br>
                                                尚有2份未填寫
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="pre-survey.php">
                                            <p>課前問卷</p>
                                            <div>
                                                總共 <span>3</span> 份
                                            </div>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="flex-direction-nav">
                            <a href="javascript:;" class="lbtn arrow flex-prev">
                                <div></div>
                            </a>
                            <a href="javascript:;" class="rbtn arrow flex-next">
                                <div></div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <ul class="listItems">
                    <!-- 已填寫 li 加 hasTxt -->
                    <li class="">
                        <a href="javascript:;">
                            <div class="leftPre">
                                <div class="isChecked">
                                    <div class="noChecked">
                                        <div class="img">
                                            <img src="dist/images/common/noTxt.png">
                                        </div>
                                        <span>尚未填寫</span>
                                    </div>
                                    <div class="hasChecked">
                                        <div class="img">
                                            <img src="dist/images/common/hasTxt.png">
                                        </div>
                                        <span>已填寫</span>
                                    </div>
                                </div>
                                <div class="leftBoxFind">
                                    <div class="leftBox">
                                        <ul>
                                            <li class="name">
                                                B202209001 薑餅咪金幣挑戰營薑餅咪金幣挑戰營薑餅咪金幣挑戰營
                                            </li>
                                            <li class="date">
                                                <img src="dist/images/common/datePage.png">
                                                <span>2023/07/11 - 2023/07/13</span>
                                            </li>
                                        </ul>
                                        <ul>
                                            <li>
                                                <div class="m_title">學員名稱</div>
                                                <div class="m_info">許大寶</div>
                                            </li>
                                            <li>
                                                <div class="m_title">身分證字號</div>
                                                <div class="m_info">A123456789</div>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="openLink mo_991">
                                        <img src="dist/images/common/openIcon.png">
                                    </div>
                                </div>
                            </div>
                            <div class="openLink pc_991">
                                <img src="dist/images/common/openIcon.png">
                            </div>
                        </a>
                        <div class="contain">
                            <div class="b_blue">學員健康調查表</div>
                            <p class="info noChecked">
                                您好，參加台北YWCA活動需要以下資訊，請務必確實填寫，謝謝！<br>
                                ※ 請注意！活動開始 7 天前會將資料匯出，請勿臨時異動資料，以確保活動人員能掌握學員的狀況喔！
                            </p>
                            <div class="section">
                                <div class="bgBlue">
                                    學員基本資訊
                                </div>
                                <ul class="baseInfo">
                                    <li class="name">
                                        <img src="dist/images/member.png">
                                        許大寶
                                    </li>
                                    <!-- 如果必填沒有填寫資料，就加hasRequired -->
                                    <li class="flex-wrap">
                                        <div class="hasRequired">
                                            <div class="m_title">身高<span></span></div>
                                            <div class="m_info">
                                                <input type="text" placeholder="請填整數，例：150" class="noChecked">
                                                <span class="hasChecked">150</span>
                                                <span>公分</span>
                                            </div>
                                            <span class="required"><i>*</i>必填</span>
                                        </div>
                                        <div class="hasRequired">
                                            <div class="m_title w4em">體重<span></span></div>
                                            <div class="m_info">
                                                <input type="text" placeholder="請填整數，例：40" class="noChecked">
                                                <span class="hasChecked">150</span>
                                                <span>公斤</span>
                                            </div>
                                            <span class="required"><i>*</i>必填</span>
                                        </div>
                                    </li>
                                    <li class="flex-wrap">
                                        <div class="bloodType">
                                            <div class="m_title">血型<span></span></div>
                                            <div class="m_info">
                                                <div class="noChecked">
                                                    <ul>
                                                        <li>
                                                            <input type="radio" name="blood" id="aType">
                                                            <label for="aType">A型</label>
                                                        </li>
                                                        <li>
                                                            <input type="radio" name="blood" id="bType">
                                                            <label for="bType">B型</label>
                                                        </li>
                                                        <li>
                                                            <input type="radio" name="blood" id="oType">
                                                            <label for="oType">O型</label>
                                                        </li>
                                                        <li>
                                                            <input type="radio" name="blood" id="abType">
                                                            <label for="abType">AB型</label>
                                                        </li>
                                                        <li>
                                                            <input type="radio" name="blood" id="unType">
                                                            <label for="unType">不清楚</label>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <span class="hasChecked">O型</span>
                                            </div>
                                            <span class="required"><i>*</i>必填</span>
                                        </div>
                                        <div class="eatingHabits">
                                            <div class="m_title">飲食習慣<span></span></div>
                                            <div class="m_info">
                                                <div class="noChecked">
                                                    <ul>
                                                        <li>
                                                            <input type="radio" name="eating" id="eating_1">
                                                            <label for="eating_1">葷</label>
                                                        </li>
                                                        <li>
                                                            <input type="radio" name="eating" id="eating_2">
                                                            <label for="eating_2">素</label>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <span class="hasChecked">葷</span>
                                            </div>
                                            <span class="required"><i>*</i>必填</span>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div class="section">
                                <div class="bgBlue">
                                    家長叮嚀事項
                                </div>
                                <ul>
                                    <li>
                                        <div class="m_title">1.學員接送方式<span></span></div>
                                        <div class="m_info">
                                            <div class="noChecked">
                                                <ul>
                                                    <li>
                                                        <input type="radio" name="question" id="q1">
                                                        <label for="q1">由家長至集合解散地點接送</label>
                                                    </li>
                                                    <li>
                                                        <input type="radio" name="question" id="q2">
                                                        <label for="q2">學員自行搭車返家</label>
                                                    </li>
                                                    <li>
                                                        <input type="radio" name="question" id="q3">
                                                        <label for="q3">其他</label>
                                                        <input type="text" placeholder="請輸入其他接送方式">
                                                    </li>
                                                </ul>
                                            </div>
                                            <span class="hasChecked">由家長至集合解散地點接送</span>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="m_title">2.分組分房需求<span></span><i>（※親友同組最多3人，未事先告知無法臨時調組！）</i></div>
                                        <div class="m_info">
                                            <input type="text" placeholder="請輸入需求" class="noChecked">
                                            <span class="hasChecked">無分組分房需求</span>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="m_title">3.其他交代事項</div>
                                        <div class="m_info">
                                            <input type="text" placeholder="請輸入交代事項" class="noChecked">
                                            <span class="hasChecked">無</span>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div class="section">
                                <div class="bgBlue">
                                    學員健康調查表<span>※請務必照實填寫，避免有突發狀況無法處理。</span>
                                </div>
                                <div class="s_title">第一部分：現有狀況</div>
                                <ul>
                                    <li>
                                        <div class="m_title">1.最近是否有受傷、生病或傳染性疾病的狀況？<span></span></div>
                                        <div class="m_info">
                                            <div class="noChecked">
                                                <ul>
                                                    <li>
                                                        <input type="radio" name="question_1-1" id="q1-1">
                                                        <label for="q1-1">是</label>
                                                    </li>
                                                    <li>
                                                        <input type="radio" name="question_1-1" id="q1-2">
                                                        <label for="q1-2">否</label>
                                                    </li>
                                                    <li>
                                                        <label for="q1-3" class="noInput">；若有，請填寫詳細時間與狀況</label>
                                                        <input type="text" id="q1-3" placeholder="請填寫詳細時間與狀況">
                                                    </li>
                                                </ul>
                                            </div>
                                            <span class="hasChecked">否</span>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="m_title">2.是否有任何慢性疾病或突發性病症狀態？<span></span></div>
                                        <div class="m_info">
                                            <div class="noChecked">
                                                <ul>
                                                    <li>
                                                        <input type="radio" name="question_1-2" id="q2-1">
                                                        <label for="q2-1">是</label>
                                                    </li>
                                                    <li>
                                                        <input type="radio" name="question_1-2" id="q2-2">
                                                        <label for="q2-2">否</label>
                                                    </li>
                                                </ul>
                                            </div>
                                            <span class="hasChecked">否</span>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="m_title">3.是否有高血壓或糖尿病？<span></span></div>
                                        <div class="m_info">
                                            <div class="noChecked">
                                                <ul>
                                                    <li>
                                                        <input type="radio" name="question_1-3" id="q3-1">
                                                        <label for="q3-1">是</label>
                                                    </li>
                                                    <li>
                                                        <input type="radio" name="question_1-3" id="q3-2">
                                                        <label for="q3-2">否</label>
                                                    </li>
                                                </ul>
                                            </div>
                                            <span class="hasChecked">否</span>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="m_title">4.是否有任何皮膚問題（如發癢、皮疹、痤瘡(粉刺)及異位性皮膚炎）？<span></span></div>
                                        <div class="m_info">
                                            <div class="noChecked">
                                                <ul>
                                                    <li>
                                                        <input type="radio" name="question_1-4" id="q4-1">
                                                        <label for="q4-1">是</label>
                                                    </li>
                                                    <li>
                                                        <input type="radio" name="question_1-4" id="q4-2">
                                                        <label for="q4-2">否</label>
                                                    </li>
                                                    <li>
                                                        <label for="q4-3" class="noInput">；若有，請填寫處理方式</label>
                                                        <input type="text" id="q4-3" placeholder="請填寫處理方式">
                                                    </li>
                                                </ul>
                                            </div>
                                            <span class="hasChecked">否</span>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="m_title">5.是否有蠶豆症？<span></span></div>
                                        <div class="m_info">
                                            <div class="noChecked">
                                                <ul>
                                                    <li>
                                                        <input type="radio" name="question_1-5" id="q5-1">
                                                        <label for="q5-1">是</label>
                                                    </li>
                                                    <li>
                                                        <input type="radio" name="question_1-5" id="q5-2">
                                                        <label for="q5-2">否</label>
                                                    </li>
                                                    <li>
                                                        <label for="q5-3" class="noInput">；若有，請填寫注意事項</label>
                                                        <input type="text" id="q5-3" placeholder="請填寫注意事項">
                                                    </li>
                                                </ul>
                                            </div>
                                            <span class="hasChecked">否</span>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="m_title">6.是否有過敏症狀？<span></span></div>
                                        <div class="m_info">
                                            <div class="noChecked">
                                                <ul>
                                                    <li>
                                                        <input type="radio" name="question_1-6" id="q6-1">
                                                        <label for="q6-1">是</label>
                                                    </li>
                                                    <li>
                                                        <input type="radio" name="question_1-6" id="q6-2">
                                                        <label for="q6-2">否</label>
                                                    </li>
                                                    <li>
                                                        <label for="q6-3" class="noInput">；若有，請填寫注意事項與平時處理方式</label>
                                                        <input type="text" id="q6-3" placeholder="請填寫注意事項與平時處理方式">
                                                    </li>
                                                </ul>
                                            </div>
                                            <span class="hasChecked">否</span>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="m_title">7.是否會經常性頭痛？<span></span></div>
                                        <div class="m_info">
                                            <div class="noChecked">
                                                <ul>
                                                    <li>
                                                        <input type="radio" name="question_1-7" id="q7-1">
                                                        <label for="q7-1">是</label>
                                                    </li>
                                                    <li>
                                                        <input type="radio" name="question_1-7" id="q7-2">
                                                        <label for="q7-2">否</label>
                                                    </li>
                                                </ul>
                                            </div>
                                            <span class="hasChecked">否</span>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="m_title">8.是否會經常性耳朵感染（如中耳炎）？<span></span></div>
                                        <div class="m_info">
                                            <div class="noChecked">
                                                <ul>
                                                    <li>
                                                        <input type="radio" name="question_1-8" id="q8-1">
                                                        <label for="q8-1">是</label>
                                                    </li>
                                                    <li>
                                                        <input type="radio" name="question_1-8" id="q8-2">
                                                        <label for="q8-2">否</label>
                                                    </li>
                                                </ul>
                                            </div>
                                            <span class="hasChecked">否</span>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="m_title">9.是否心臟有雜音缺陷或心律不整？<span></span></div>
                                        <div class="m_info">
                                            <div class="noChecked">
                                                <ul>
                                                    <li>
                                                        <input type="radio" name="question_1-9" id="q9-1">
                                                        <label for="q9-1">是</label>
                                                    </li>
                                                    <li>
                                                        <input type="radio" name="question_1-9" id="q9-2">
                                                        <label for="q9-2">否</label>
                                                    </li>
                                                </ul>
                                            </div>
                                            <span class="hasChecked">否</span>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="m_title">10.是否容易有腹瀉或腸胃不適問題？<span></span></div>
                                        <div class="m_info">
                                            <div class="noChecked">
                                                <ul>
                                                    <li>
                                                        <input type="radio" name="question_1-10" id="q10-1">
                                                        <label for="q10-1">是</label>
                                                    </li>
                                                    <li>
                                                        <input type="radio" name="question_1-10" id="q10-2">
                                                        <label for="q10-2">否</label>
                                                    </li>
                                                </ul>
                                            </div>
                                            <span class="hasChecked">否</span>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="m_title">11.是否容易有便祕問題？<span></span></div>
                                        <div class="m_info">
                                            <div class="noChecked">
                                                <ul>
                                                    <li>
                                                        <input type="radio" name="question_1-11" id="q11-1">
                                                        <label for="q11-1">是</label>
                                                    </li>
                                                    <li>
                                                        <input type="radio" name="question_1-11" id="q11-2">
                                                        <label for="q11-2">否</label>
                                                    </li>
                                                </ul>
                                            </div>
                                            <span class="hasChecked">否</span>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="m_title">12.是否有夢遊或睡眠障礙問題？<span></span></div>
                                        <div class="m_info">
                                            <div class="noChecked">
                                                <ul>
                                                    <li>
                                                        <input type="radio" name="question_1-12" id="q12-1">
                                                        <label for="q12-1">是</label>
                                                    </li>
                                                    <li>
                                                        <input type="radio" name="question_1-12" id="q12-2">
                                                        <label for="q12-2">否</label>
                                                    </li>
                                                    <li>
                                                        <label for="q12-3" class="noInput">；若有，請填寫處理方式</label>
                                                        <input type="text" id="q12-3" placeholder="請填寫處理方式">
                                                    </li>
                                                </ul>
                                            </div>
                                            <span class="hasChecked">否</span>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="m_title">13.是否有情緒困難，並由專業人員進行協助？<span></span><i>（※請報名前務必來電與幹事討論評估狀況）</i></div>
                                        <div class="m_info">
                                            <div class="noChecked">
                                                <ul>
                                                    <li>
                                                        <input type="radio" name="question_1-13" id="q13-1">
                                                        <label for="q13-1">是</label>
                                                    </li>
                                                    <li>
                                                        <input type="radio" name="question_1-13" id="q13-2">
                                                        <label for="q13-2">否</label>
                                                    </li>
                                                    <li>
                                                        <label for="q13-3" class="noInput">；若有，請填寫平時處理方式</label>
                                                        <input type="text" id="q13-3" placeholder="請填寫平時處理方式">
                                                    </li>
                                                </ul>
                                            </div>
                                            <span class="hasChecked">否</span>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="m_title">14.是否有注意力不足或過動症？<span></span><i>（※請報名前務必來電與幹事討論評估狀況）</i></div>
                                        <div class="m_info">
                                            <div class="noChecked">
                                                <ul>
                                                    <li>
                                                        <input type="radio" name="question_1-14" id="q14-1">
                                                        <label for="q14-1">是</label>
                                                    </li>
                                                    <li>
                                                        <input type="radio" name="question_1-14" id="q14-2">
                                                        <label for="q14-2">否</label>
                                                    </li>
                                                    <li>
                                                        <label for="q14-3" class="noInput">；若有，請填寫平時處理方式</label>
                                                        <input type="text" id="q14-3" placeholder="請填寫平時處理方式">
                                                    </li>
                                                </ul>
                                            </div>
                                            <span class="hasChecked">否</span>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="m_title">15.是否有氣喘？<span></span><i>（※如有使用吸入器，請務必要準備足夠量帶來）</i></div>
                                        <div class="m_info">
                                            <div class="noChecked">
                                                <ul>
                                                    <li>
                                                        <input type="radio" name="question_1-15" id="q15-1">
                                                        <label for="q15-1">是</label>
                                                    </li>
                                                    <li>
                                                        <input type="radio" name="question_1-15" id="q15-2">
                                                        <label for="q15-2">否</label>
                                                    </li>
                                                    <li>
                                                        <label for="q15-3" class="noInput">；若有，請填寫平時處理方式</label>
                                                        <input type="text" id="q15-3" placeholder="請填寫平時處理方式">
                                                    </li>
                                                </ul>
                                            </div>
                                            <span class="hasChecked">否</span>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="m_title">16.是否有戴牙齒矯正器？<span></span></div>
                                        <div class="m_info">
                                            <div class="noChecked">
                                                <ul>
                                                    <li>
                                                        <input type="radio" name="question_1-16" id="q16-1">
                                                        <label for="q16-1">是</label>
                                                    </li>
                                                    <li>
                                                        <input type="radio" name="question_1-16" id="q16-2">
                                                        <label for="q16-2">否</label>
                                                    </li>
                                                </ul>
                                            </div>
                                            <span class="hasChecked">否</span>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="m_title">17.是否有戴角膜塑型片、眼鏡或隱形眼鏡？<span></span></div>
                                        <div class="m_info">
                                            <div class="noChecked">
                                                <ul>
                                                    <li>
                                                        <input type="radio" name="question_1-17" id="q17-1">
                                                        <label for="q17-1">是</label>
                                                    </li>
                                                    <li>
                                                        <input type="radio" name="question_1-17" id="q17-2">
                                                        <label for="q17-2">否</label>
                                                    </li>
                                                    <li>
                                                        <label for="q17-3" class="noInput">；若有，請填寫平時處理方式</label>
                                                        <input type="text" id="q17-3" placeholder="請填寫平時處理方式">
                                                    </li>
                                                </ul>
                                            </div>
                                            <span class="hasChecked">否</span>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="m_title">18.是否對抗生素過敏？<span></span><i>（※若有對任何盤尼西林/安莫西林(penicillin/amoxocillin)過敏，一定要帶由藥師認可的替代藥品）</i></div>
                                        <div class="m_info">
                                            <div class="noChecked">
                                                <ul>
                                                    <li>
                                                        <input type="radio" name="question_1-18" id="q18-1">
                                                        <label for="q18-1">是</label>
                                                    </li>
                                                    <li>
                                                        <input type="radio" name="question_1-18" id="q18-2">
                                                        <label for="q18-2">否</label>
                                                    </li>
                                                </ul>
                                            </div>
                                            <span class="hasChecked">否</span>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="m_title">19.如果是女孩的話，已經有月經了嗎？</div>
                                        <div class="m_info">
                                            <div class="noChecked">
                                                <ul>
                                                    <li>
                                                        <input type="radio" name="question_1-19" id="q19-1">
                                                        <label for="q19-1">是</label>
                                                    </li>
                                                    <li>
                                                        <input type="radio" name="question_1-19" id="q19-2">
                                                        <label for="q19-2">否</label>
                                                    </li>
                                                </ul>
                                            </div>
                                            <span class="hasChecked">否</span>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="m_title">20.若有其他症狀病例，請務必詳實填寫：</div>
                                        <div class="m_info">
                                            <input type="text" placeholder="請說明其他症狀病例與平時處理方式" class="noChecked">
                                            <span class="hasChecked">無</span>
                                        </div>
                                    </li>
                                </ul>
                                <div class="s_title">第二部分：家族病史</div>
                                <ul>
                                    <li>
                                        <div class="m_title">1.在家族中是否曾有人有突然或不明原因的死亡？<span></span></div>
                                        <div class="m_info">
                                            <div class="noChecked">
                                                <ul>
                                                    <li>
                                                        <input type="radio" name="question_2-1" id="q20-1">
                                                        <label for="q20-1">是</label>
                                                    </li>
                                                    <li>
                                                        <input type="radio" name="question_2-1" id="q20-2">
                                                        <label for="q20-2">否</label>
                                                    </li>
                                                </ul>
                                            </div>
                                            <span class="hasChecked">否</span>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="m_title">2.在家族中是否有人因心臟病問題或在50歲以下突然死亡？<span></span></div>
                                        <div class="m_info">
                                            <div class="noChecked">
                                                <ul>
                                                    <li>
                                                        <input type="radio" name="question_2-2" id="q21-1">
                                                        <label for="q21-1">是</label>
                                                    </li>
                                                    <li>
                                                        <input type="radio" name="question_2-2" id="q21-2">
                                                        <label for="q21-2">否</label>
                                                    </li>
                                                </ul>
                                            </div>
                                            <span class="hasChecked">否</span>
                                        </div>
                                    </li>
                                </ul>
                                <div class="s_title">第三部分：曾有病史</div>
                                <ul>
                                    <li>
                                        <div class="m_title">1.是否曾經住院？<span></span></div>
                                        <div class="m_info">
                                            <div class="noChecked">
                                                <ul>
                                                    <li>
                                                        <input type="radio" name="question_3-1" id="q22-1">
                                                        <label for="q22-1">是</label>
                                                    </li>
                                                    <li>
                                                        <input type="radio" name="question_3-1" id="q22-2">
                                                        <label for="q22-2">否</label>
                                                    </li>
                                                    <li>
                                                        <label for="q22-3" class="noInput">；若有，請填寫原因</label>
                                                        <input type="text" id="q22-3" placeholder="請填寫原因">
                                                    </li>
                                                </ul>
                                            </div>
                                            <span class="hasChecked">否</span>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="m_title">2.是否曾經開過刀？<span></span></div>
                                        <div class="m_info">
                                            <div class="noChecked">
                                                <ul>
                                                    <li>
                                                        <input type="radio" name="question_3-2" id="q23-1">
                                                        <label for="q23-1">是</label>
                                                    </li>
                                                    <li>
                                                        <input type="radio" name="question_3-2" id="q23-2">
                                                        <label for="q23-2">否</label>
                                                    </li>
                                                    <li>
                                                        <label for="q23-3" class="noInput">；若有，請填寫原因</label>
                                                        <input type="text" id="q23-3" placeholder="請填寫原因">
                                                    </li>
                                                </ul>
                                            </div>
                                            <span class="hasChecked">否</span>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="m_title">3.頭部是否曾經受過傷？<span></span></div>
                                        <div class="m_info">
                                            <div class="noChecked">
                                                <ul>
                                                    <li>
                                                        <input type="radio" name="question_3-3" id="q24-1">
                                                        <label for="q24-1">是</label>
                                                    </li>
                                                    <li>
                                                        <input type="radio" name="question_3-3" id="q24-2">
                                                        <label for="q24-2">否</label>
                                                    </li>
                                                </ul>
                                            </div>
                                            <span class="hasChecked">否</span>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="m_title">4.是否曾經被撞擊致無意識？<span></span></div>
                                        <div class="m_info">
                                            <div class="noChecked">
                                                <ul>
                                                    <li>
                                                        <input type="radio" name="question_3-4" id="q25-1">
                                                        <label for="q25-1">是</label>
                                                    </li>
                                                    <li>
                                                        <input type="radio" name="question_3-4" id="q25-2">
                                                        <label for="q25-2">否</label>
                                                    </li>
                                                </ul>
                                            </div>
                                            <span class="hasChecked">否</span>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="m_title">5.是否曾在運動過後突然昏倒？<span></span></div>
                                        <div class="m_info">
                                            <div class="noChecked">
                                                <ul>
                                                    <li>
                                                        <input type="radio" name="question_3-5" id="q26-1">
                                                        <label for="q26-1">是</label>
                                                    </li>
                                                    <li>
                                                        <input type="radio" name="question_3-5" id="q26-2">
                                                        <label for="q26-2">否</label>
                                                    </li>
                                                </ul>
                                            </div>
                                            <span class="hasChecked">否</span>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="m_title">6.是否曾在運動過後頭暈目眩？<span></span></div>
                                        <div class="m_info">
                                            <div class="noChecked">
                                                <ul>
                                                    <li>
                                                        <input type="radio" name="question_3-6" id="q27-1">
                                                        <label for="q27-1">是</label>
                                                    </li>
                                                    <li>
                                                        <input type="radio" name="question_3-6" id="q27-2">
                                                        <label for="q27-2">否</label>
                                                    </li>
                                                </ul>
                                            </div>
                                            <span class="hasChecked">否</span>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="m_title">7.是否曾經癲癇發作？<span></span></div>
                                        <div class="m_info">
                                            <div class="noChecked">
                                                <ul>
                                                    <li>
                                                        <input type="radio" name="question_3-7" id="q28-1">
                                                        <label for="q28-1">是</label>
                                                    </li>
                                                    <li>
                                                        <input type="radio" name="question_3-7" id="q28-2">
                                                        <label for="q28-2">否</label>
                                                    </li>
                                                </ul>
                                            </div>
                                            <span class="hasChecked">否</span>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="m_title">8.是否曾有在運動過後胸痛？<span></span></div>
                                        <div class="m_info">
                                            <div class="noChecked">
                                                <ul>
                                                    <li>
                                                        <input type="radio" name="question_3-8" id="q29-1">
                                                        <label for="q29-1">是</label>
                                                    </li>
                                                    <li>
                                                        <input type="radio" name="question_3-8" id="q29-2">
                                                        <label for="q29-2">否</label>
                                                    </li>
                                                </ul>
                                            </div>
                                            <span class="hasChecked">否</span>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="m_title">9.是否曾有背部受傷的問題？<span></span></div>
                                        <div class="m_info">
                                            <div class="noChecked">
                                                <ul>
                                                    <li>
                                                        <input type="radio" name="question_3-9" id="q30-1">
                                                        <label for="q30-1">是</label>
                                                    </li>
                                                    <li>
                                                        <input type="radio" name="question_3-9" id="q30-2">
                                                        <label for="q30-2">否</label>
                                                    </li>
                                                    <li>
                                                        <label for="q30-3" class="noInput">；若有，請填寫原因</label>
                                                        <input type="text" id="q30-3" placeholder="請填寫原因">
                                                    </li>
                                                </ul>
                                            </div>
                                            <span class="hasChecked">否</span>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="m_title">10.是否曾有關節的問題（如膝、腳踝）<span></span></div>
                                        <div class="m_info">
                                            <div class="noChecked">
                                                <ul>
                                                    <li>
                                                        <input type="radio" name="question_3-10" id="q31-1">
                                                        <label for="q31-1">是</label>
                                                    </li>
                                                    <li>
                                                        <input type="radio" name="question_3-10" id="q31-2">
                                                        <label for="q31-2">否</label>
                                                    </li>
                                                    <li>
                                                        <label for="q31-3" class="noInput">；若有，請填寫原因</label>
                                                        <input type="text" id="q31-3" placeholder="請填寫原因">
                                                    </li>
                                                </ul>
                                            </div>
                                            <span class="hasChecked">否</span>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="m_title">11.是否有血友病病史？<span></span></div>
                                        <div class="m_info">
                                            <div class="noChecked">
                                                <ul>
                                                    <li>
                                                        <input type="radio" name="question_3-11" id="q32-1">
                                                        <label for="q32-1">是</label>
                                                    </li>
                                                    <li>
                                                        <input type="radio" name="question_3-11" id="q32-2">
                                                        <label for="q32-2">否</label>
                                                    </li>
                                                </ul>
                                            </div>
                                            <span class="hasChecked">否</span>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="m_title">12.是否有暴食症或厭食症的病史？<span></span></div>
                                        <div class="m_info">
                                            <div class="noChecked">
                                                <ul>
                                                    <li>
                                                        <input type="radio" name="question_3-12" id="q33-1">
                                                        <label for="q33-1">是</label>
                                                    </li>
                                                    <li>
                                                        <input type="radio" name="question_3-12" id="q33-2">
                                                        <label for="q33-2">否</label>
                                                    </li>
                                                </ul>
                                            </div>
                                            <span class="hasChecked">否</span>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="m_title">13.是否有憂鬱症病史？<span></span></div>
                                        <div class="m_info">
                                            <div class="noChecked">
                                                <ul>
                                                    <li>
                                                        <input type="radio" name="question_3-13" id="q34-1">
                                                        <label for="q34-1">是</label>
                                                    </li>
                                                    <li>
                                                        <input type="radio" name="question_3-13" id="q34-2">
                                                        <label for="q34-2">否</label>
                                                    </li>
                                                </ul>
                                            </div>
                                            <span class="hasChecked">否</span>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="m_title">14.是否曾因精神方面問題需要治療、住院或諮商？<span></span></div>
                                        <div class="m_info">
                                            <div class="noChecked">
                                                <ul>
                                                    <li>
                                                        <input type="radio" name="question_3-14" id="q35-1">
                                                        <label for="q35-1">是</label>
                                                    </li>
                                                    <li>
                                                        <input type="radio" name="question_3-14" id="q35-2">
                                                        <label for="q35-2">否</label>
                                                    </li>
                                                </ul>
                                            </div>
                                            <span class="hasChecked">否</span>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div class="btnBox">
                                <a href="my-order.php">查看訂單</a>
                                <a href="javascript:;" class="noChecked">送出</a>
                            </div>
                        </div>
                    </li>
                    <li class="">
                        <a href="javascript:;">
                            <div class="leftPre">
                                <div class="isChecked">
                                    <div class="noChecked">
                                        <div class="img">
                                            <img src="dist/images/common/noTxt.png">
                                        </div>
                                        <span>尚未填寫</span>
                                    </div>
                                    <div class="hasChecked">
                                        <div class="img">
                                            <img src="dist/images/common/hasTxt.png">
                                        </div>
                                        <span>已填寫</span>
                                    </div>
                                </div>
                                <div class="leftBoxFind">
                                    <div class="leftBox">
                                        <ul>
                                            <li class="name">
                                                B202209001 薑餅咪金幣挑戰營薑餅咪金幣挑戰營薑餅咪金幣挑戰營
                                            </li>
                                            <li class="date">
                                                <img src="dist/images/common/datePage.png">
                                                <span>2023/07/11 - 2023/07/13</span>
                                            </li>
                                        </ul>
                                        <ul>
                                            <li>
                                                <div class="m_title">學員名稱</div>
                                                <div class="m_info">許大寶</div>
                                            </li>
                                            <li>
                                                <div class="m_title">身分證字號</div>
                                                <div class="m_info">A123456789</div>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="openLink mo_991">
                                        <img src="dist/images/common/openIcon.png">
                                    </div>
                                </div>
                            </div>
                            <div class="openLink pc_991">
                                <img src="dist/images/common/openIcon.png">
                            </div>
                        </a>
                        <div class="contain">
                            <div class="b_blue">學員健康調查表</div>
                            <p class="info noChecked">
                                您好，參加台北YWCA活動需要以下資訊，請務必確實填寫，謝謝！<br>
                                ※ 請注意！活動開始 7 天前會將資料匯出，請勿臨時異動資料，以確保活動人員能掌握學員的狀況喔！
                            </p>
                            <div class="section">
                                <div class="bgBlue">
                                    學員基本資訊
                                </div>
                                <ul class="baseInfo">
                                    <li class="name">
                                        <img src="dist/images/member.png">
                                        許大寶
                                    </li>
                                    <li class="flex-wrap">
                                        <div>
                                            <div class="m_title">身高<span></span></div>
                                            <div class="m_info">
                                                <input type="text" placeholder="請填整數，例：150" class="noChecked">
                                                <span class="hasChecked">150</span>
                                                <span>公分</span>
                                            </div>
                                        </div>
                                        <div>
                                            <div class="m_title w4em">體重<span></span></div>
                                            <div class="m_info">
                                                <input type="text" placeholder="請填整數，例：40" class="noChecked">
                                                <span class="hasChecked">150</span>
                                                <span>公斤</span>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="flex-wrap">
                                        <div class="bloodType">
                                            <div class="m_title">血型<span></span></div>
                                            <div class="m_info">
                                                <div class="noChecked">
                                                    <ul>
                                                        <li>
                                                            <input type="radio" name="blood" id="aType">
                                                            <label for="aType">A型</label>
                                                        </li>
                                                        <li>
                                                            <input type="radio" name="blood" id="bType">
                                                            <label for="bType">B型</label>
                                                        </li>
                                                        <li>
                                                            <input type="radio" name="blood" id="oType">
                                                            <label for="oType">O型</label>
                                                        </li>
                                                        <li>
                                                            <input type="radio" name="blood" id="abType">
                                                            <label for="abType">AB型</label>
                                                        </li>
                                                        <li>
                                                            <input type="radio" name="blood" id="unType">
                                                            <label for="unType">不清楚</label>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <span class="hasChecked">O型</span>
                                            </div>
                                        </div>
                                        <div class="eatingHabits">
                                            <div class="m_title">飲食習慣<span></span></div>
                                            <div class="m_info">
                                                <div class="noChecked">
                                                    <ul>
                                                        <li>
                                                            <input type="radio" name="eating" id="eating_1">
                                                            <label for="eating_1">葷</label>
                                                        </li>
                                                        <li>
                                                            <input type="radio" name="eating" id="eating_2">
                                                            <label for="eating_2">素</label>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <span class="hasChecked">葷</span>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div class="section">
                                <div class="bgBlue">
                                    家長叮嚀事項
                                </div>
                                <ul>
                                    <li>
                                        <div class="m_title">1.學員接送方式<span></span></div>
                                        <div class="m_info">
                                            <div class="noChecked">
                                                <ul>
                                                    <li>
                                                        <input type="radio" name="question" id="q1">
                                                        <label for="q1">由家長至集合解散地點接送</label>
                                                    </li>
                                                    <li>
                                                        <input type="radio" name="question" id="q2">
                                                        <label for="q2">學員自行搭車返家</label>
                                                    </li>
                                                    <li>
                                                        <input type="radio" name="question" id="q3">
                                                        <label for="q3">其他</label>
                                                        <input type="text" placeholder="請輸入其他接送方式">
                                                    </li>
                                                </ul>
                                            </div>
                                            <span class="hasChecked">由家長至集合解散地點接送</span>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="m_title">2.分組分房需求<span></span><i>（※親友同組最多3人，未事先告知無法臨時調組！）</i></div>
                                        <div class="m_info">
                                            <input type="text" placeholder="請輸入需求" class="noChecked">
                                            <span class="hasChecked">無分組分房需求</span>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="m_title">3.其他交代事項</div>
                                        <div class="m_info">
                                            <input type="text" placeholder="請輸入交代事項" class="noChecked">
                                            <span class="hasChecked">無</span>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div class="section">
                                <div class="bgBlue">
                                    學員健康調查表<span>※請務必照實填寫，避免有突發狀況無法處理。</span>
                                </div>
                                <div class="s_title">第一部分：現有狀況</div>
                                <ul>
                                    <li>
                                        <div class="m_title">1.最近是否有受傷、生病或傳染性疾病的狀況？<span></span></div>
                                        <div class="m_info">
                                            <div class="noChecked">
                                                <ul>
                                                    <li>
                                                        <input type="radio" name="question_1-1" id="q1-1">
                                                        <label for="q1-1">是</label>
                                                    </li>
                                                    <li>
                                                        <input type="radio" name="question_1-1" id="q1-2">
                                                        <label for="q1-2">否</label>
                                                    </li>
                                                    <li>
                                                        <label for="q1-3" class="noInput">；若有，請填寫詳細時間與狀況</label>
                                                        <input type="text" id="q1-3" placeholder="請填寫詳細時間與狀況">
                                                    </li>
                                                </ul>
                                            </div>
                                            <span class="hasChecked">否</span>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="m_title">2.是否有任何慢性疾病或突發性病症狀態？<span></span></div>
                                        <div class="m_info">
                                            <div class="noChecked">
                                                <ul>
                                                    <li>
                                                        <input type="radio" name="question_1-2" id="q2-1">
                                                        <label for="q2-1">是</label>
                                                    </li>
                                                    <li>
                                                        <input type="radio" name="question_1-2" id="q2-2">
                                                        <label for="q2-2">否</label>
                                                    </li>
                                                </ul>
                                            </div>
                                            <span class="hasChecked">否</span>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="m_title">3.是否有高血壓或糖尿病？<span></span></div>
                                        <div class="m_info">
                                            <div class="noChecked">
                                                <ul>
                                                    <li>
                                                        <input type="radio" name="question_1-3" id="q3-1">
                                                        <label for="q3-1">是</label>
                                                    </li>
                                                    <li>
                                                        <input type="radio" name="question_1-3" id="q3-2">
                                                        <label for="q3-2">否</label>
                                                    </li>
                                                </ul>
                                            </div>
                                            <span class="hasChecked">否</span>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="m_title">4.是否有任何皮膚問題（如發癢、皮疹、痤瘡(粉刺)及異位性皮膚炎）？<span></span></div>
                                        <div class="m_info">
                                            <div class="noChecked">
                                                <ul>
                                                    <li>
                                                        <input type="radio" name="question_1-4" id="q4-1">
                                                        <label for="q4-1">是</label>
                                                    </li>
                                                    <li>
                                                        <input type="radio" name="question_1-4" id="q4-2">
                                                        <label for="q4-2">否</label>
                                                    </li>
                                                    <li>
                                                        <label for="q4-3" class="noInput">；若有，請填寫處理方式</label>
                                                        <input type="text" id="q4-3" placeholder="請填寫處理方式">
                                                    </li>
                                                </ul>
                                            </div>
                                            <span class="hasChecked">否</span>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="m_title">5.是否有蠶豆症？<span></span></div>
                                        <div class="m_info">
                                            <div class="noChecked">
                                                <ul>
                                                    <li>
                                                        <input type="radio" name="question_1-5" id="q5-1">
                                                        <label for="q5-1">是</label>
                                                    </li>
                                                    <li>
                                                        <input type="radio" name="question_1-5" id="q5-2">
                                                        <label for="q5-2">否</label>
                                                    </li>
                                                    <li>
                                                        <label for="q5-3" class="noInput">；若有，請填寫注意事項</label>
                                                        <input type="text" id="q5-3" placeholder="請填寫注意事項">
                                                    </li>
                                                </ul>
                                            </div>
                                            <span class="hasChecked">否</span>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="m_title">6.是否有過敏症狀？<span></span></div>
                                        <div class="m_info">
                                            <div class="noChecked">
                                                <ul>
                                                    <li>
                                                        <input type="radio" name="question_1-6" id="q6-1">
                                                        <label for="q6-1">是</label>
                                                    </li>
                                                    <li>
                                                        <input type="radio" name="question_1-6" id="q6-2">
                                                        <label for="q6-2">否</label>
                                                    </li>
                                                    <li>
                                                        <label for="q6-3" class="noInput">；若有，請填寫注意事項與平時處理方式</label>
                                                        <input type="text" id="q6-3" placeholder="請填寫注意事項與平時處理方式">
                                                    </li>
                                                </ul>
                                            </div>
                                            <span class="hasChecked">否</span>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="m_title">7.是否會經常性頭痛？<span></span></div>
                                        <div class="m_info">
                                            <div class="noChecked">
                                                <ul>
                                                    <li>
                                                        <input type="radio" name="question_1-7" id="q7-1">
                                                        <label for="q7-1">是</label>
                                                    </li>
                                                    <li>
                                                        <input type="radio" name="question_1-7" id="q7-2">
                                                        <label for="q7-2">否</label>
                                                    </li>
                                                </ul>
                                            </div>
                                            <span class="hasChecked">否</span>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="m_title">8.是否會經常性耳朵感染（如中耳炎）？<span></span></div>
                                        <div class="m_info">
                                            <div class="noChecked">
                                                <ul>
                                                    <li>
                                                        <input type="radio" name="question_1-8" id="q8-1">
                                                        <label for="q8-1">是</label>
                                                    </li>
                                                    <li>
                                                        <input type="radio" name="question_1-8" id="q8-2">
                                                        <label for="q8-2">否</label>
                                                    </li>
                                                </ul>
                                            </div>
                                            <span class="hasChecked">否</span>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="m_title">9.是否心臟有雜音缺陷或心律不整？<span></span></div>
                                        <div class="m_info">
                                            <div class="noChecked">
                                                <ul>
                                                    <li>
                                                        <input type="radio" name="question_1-9" id="q9-1">
                                                        <label for="q9-1">是</label>
                                                    </li>
                                                    <li>
                                                        <input type="radio" name="question_1-9" id="q9-2">
                                                        <label for="q9-2">否</label>
                                                    </li>
                                                </ul>
                                            </div>
                                            <span class="hasChecked">否</span>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="m_title">10.是否容易有腹瀉或腸胃不適問題？<span></span></div>
                                        <div class="m_info">
                                            <div class="noChecked">
                                                <ul>
                                                    <li>
                                                        <input type="radio" name="question_1-10" id="q10-1">
                                                        <label for="q10-1">是</label>
                                                    </li>
                                                    <li>
                                                        <input type="radio" name="question_1-10" id="q10-2">
                                                        <label for="q10-2">否</label>
                                                    </li>
                                                </ul>
                                            </div>
                                            <span class="hasChecked">否</span>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="m_title">11.是否容易有便祕問題？<span></span></div>
                                        <div class="m_info">
                                            <div class="noChecked">
                                                <ul>
                                                    <li>
                                                        <input type="radio" name="question_1-11" id="q11-1">
                                                        <label for="q11-1">是</label>
                                                    </li>
                                                    <li>
                                                        <input type="radio" name="question_1-11" id="q11-2">
                                                        <label for="q11-2">否</label>
                                                    </li>
                                                </ul>
                                            </div>
                                            <span class="hasChecked">否</span>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="m_title">12.是否有夢遊或睡眠障礙問題？<span></span></div>
                                        <div class="m_info">
                                            <div class="noChecked">
                                                <ul>
                                                    <li>
                                                        <input type="radio" name="question_1-12" id="q12-1">
                                                        <label for="q12-1">是</label>
                                                    </li>
                                                    <li>
                                                        <input type="radio" name="question_1-12" id="q12-2">
                                                        <label for="q12-2">否</label>
                                                    </li>
                                                    <li>
                                                        <label for="q12-3" class="noInput">；若有，請填寫處理方式</label>
                                                        <input type="text" id="q12-3" placeholder="請填寫處理方式">
                                                    </li>
                                                </ul>
                                            </div>
                                            <span class="hasChecked">否</span>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="m_title">13.是否有情緒困難，並由專業人員進行協助？<span></span><i>（※請報名前務必來電與幹事討論評估狀況）</i></div>
                                        <div class="m_info">
                                            <div class="noChecked">
                                                <ul>
                                                    <li>
                                                        <input type="radio" name="question_1-13" id="q13-1">
                                                        <label for="q13-1">是</label>
                                                    </li>
                                                    <li>
                                                        <input type="radio" name="question_1-13" id="q13-2">
                                                        <label for="q13-2">否</label>
                                                    </li>
                                                    <li>
                                                        <label for="q13-3" class="noInput">；若有，請填寫平時處理方式</label>
                                                        <input type="text" id="q13-3" placeholder="請填寫平時處理方式">
                                                    </li>
                                                </ul>
                                            </div>
                                            <span class="hasChecked">否</span>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="m_title">14.是否有注意力不足或過動症？<span></span><i>（※請報名前務必來電與幹事討論評估狀況）</i></div>
                                        <div class="m_info">
                                            <div class="noChecked">
                                                <ul>
                                                    <li>
                                                        <input type="radio" name="question_1-14" id="q14-1">
                                                        <label for="q14-1">是</label>
                                                    </li>
                                                    <li>
                                                        <input type="radio" name="question_1-14" id="q14-2">
                                                        <label for="q14-2">否</label>
                                                    </li>
                                                    <li>
                                                        <label for="q14-3" class="noInput">；若有，請填寫平時處理方式</label>
                                                        <input type="text" id="q14-3" placeholder="請填寫平時處理方式">
                                                    </li>
                                                </ul>
                                            </div>
                                            <span class="hasChecked">否</span>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="m_title">15.是否有氣喘？<span></span><i>（※如有使用吸入器，請務必要準備足夠量帶來）</i></div>
                                        <div class="m_info">
                                            <div class="noChecked">
                                                <ul>
                                                    <li>
                                                        <input type="radio" name="question_1-15" id="q15-1">
                                                        <label for="q15-1">是</label>
                                                    </li>
                                                    <li>
                                                        <input type="radio" name="question_1-15" id="q15-2">
                                                        <label for="q15-2">否</label>
                                                    </li>
                                                    <li>
                                                        <label for="q15-3" class="noInput">；若有，請填寫平時處理方式</label>
                                                        <input type="text" id="q15-3" placeholder="請填寫平時處理方式">
                                                    </li>
                                                </ul>
                                            </div>
                                            <span class="hasChecked">否</span>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="m_title">16.是否有戴牙齒矯正器？<span></span></div>
                                        <div class="m_info">
                                            <div class="noChecked">
                                                <ul>
                                                    <li>
                                                        <input type="radio" name="question_1-16" id="q16-1">
                                                        <label for="q16-1">是</label>
                                                    </li>
                                                    <li>
                                                        <input type="radio" name="question_1-16" id="q16-2">
                                                        <label for="q16-2">否</label>
                                                    </li>
                                                </ul>
                                            </div>
                                            <span class="hasChecked">否</span>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="m_title">17.是否有戴角膜塑型片、眼鏡或隱形眼鏡？<span></span></div>
                                        <div class="m_info">
                                            <div class="noChecked">
                                                <ul>
                                                    <li>
                                                        <input type="radio" name="question_1-17" id="q17-1">
                                                        <label for="q17-1">是</label>
                                                    </li>
                                                    <li>
                                                        <input type="radio" name="question_1-17" id="q17-2">
                                                        <label for="q17-2">否</label>
                                                    </li>
                                                    <li>
                                                        <label for="q17-3" class="noInput">；若有，請填寫平時處理方式</label>
                                                        <input type="text" id="q17-3" placeholder="請填寫平時處理方式">
                                                    </li>
                                                </ul>
                                            </div>
                                            <span class="hasChecked">否</span>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="m_title">18.是否對抗生素過敏？<span></span><i>（※若有對任何盤尼西林/安莫西林(penicillin/amoxocillin)過敏，一定要帶由藥師認可的替代藥品）</i></div>
                                        <div class="m_info">
                                            <div class="noChecked">
                                                <ul>
                                                    <li>
                                                        <input type="radio" name="question_1-18" id="q18-1">
                                                        <label for="q18-1">是</label>
                                                    </li>
                                                    <li>
                                                        <input type="radio" name="question_1-18" id="q18-2">
                                                        <label for="q18-2">否</label>
                                                    </li>
                                                </ul>
                                            </div>
                                            <span class="hasChecked">否</span>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="m_title">19.如果是女孩的話，已經有月經了嗎？</div>
                                        <div class="m_info">
                                            <div class="noChecked">
                                                <ul>
                                                    <li>
                                                        <input type="radio" name="question_1-19" id="q19-1">
                                                        <label for="q19-1">是</label>
                                                    </li>
                                                    <li>
                                                        <input type="radio" name="question_1-19" id="q19-2">
                                                        <label for="q19-2">否</label>
                                                    </li>
                                                </ul>
                                            </div>
                                            <span class="hasChecked">否</span>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="m_title">20.若有其他症狀病例，請務必詳實填寫：</div>
                                        <div class="m_info">
                                            <input type="text" placeholder="請說明其他症狀病例與平時處理方式" class="noChecked">
                                            <span class="hasChecked">無</span>
                                        </div>
                                    </li>
                                </ul>
                                <div class="s_title">第二部分：家族病史</div>
                                <ul>
                                    <li>
                                        <div class="m_title">1.在家族中是否曾有人有突然或不明原因的死亡？<span></span></div>
                                        <div class="m_info">
                                            <div class="noChecked">
                                                <ul>
                                                    <li>
                                                        <input type="radio" name="question_2-1" id="q20-1">
                                                        <label for="q20-1">是</label>
                                                    </li>
                                                    <li>
                                                        <input type="radio" name="question_2-1" id="q20-2">
                                                        <label for="q20-2">否</label>
                                                    </li>
                                                </ul>
                                            </div>
                                            <span class="hasChecked">否</span>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="m_title">2.在家族中是否有人因心臟病問題或在50歲以下突然死亡？<span></span></div>
                                        <div class="m_info">
                                            <div class="noChecked">
                                                <ul>
                                                    <li>
                                                        <input type="radio" name="question_2-2" id="q21-1">
                                                        <label for="q21-1">是</label>
                                                    </li>
                                                    <li>
                                                        <input type="radio" name="question_2-2" id="q21-2">
                                                        <label for="q21-2">否</label>
                                                    </li>
                                                </ul>
                                            </div>
                                            <span class="hasChecked">否</span>
                                        </div>
                                    </li>
                                </ul>
                                <div class="s_title">第三部分：曾有病史</div>
                                <ul>
                                    <li>
                                        <div class="m_title">1.是否曾經住院？<span></span></div>
                                        <div class="m_info">
                                            <div class="noChecked">
                                                <ul>
                                                    <li>
                                                        <input type="radio" name="question_3-1" id="q22-1">
                                                        <label for="q22-1">是</label>
                                                    </li>
                                                    <li>
                                                        <input type="radio" name="question_3-1" id="q22-2">
                                                        <label for="q22-2">否</label>
                                                    </li>
                                                    <li>
                                                        <label for="q22-3" class="noInput">；若有，請填寫原因</label>
                                                        <input type="text" id="q22-3" placeholder="請填寫原因">
                                                    </li>
                                                </ul>
                                            </div>
                                            <span class="hasChecked">否</span>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="m_title">2.是否曾經開過刀？<span></span></div>
                                        <div class="m_info">
                                            <div class="noChecked">
                                                <ul>
                                                    <li>
                                                        <input type="radio" name="question_3-2" id="q23-1">
                                                        <label for="q23-1">是</label>
                                                    </li>
                                                    <li>
                                                        <input type="radio" name="question_3-2" id="q23-2">
                                                        <label for="q23-2">否</label>
                                                    </li>
                                                    <li>
                                                        <label for="q23-3" class="noInput">；若有，請填寫原因</label>
                                                        <input type="text" id="q23-3" placeholder="請填寫原因">
                                                    </li>
                                                </ul>
                                            </div>
                                            <span class="hasChecked">否</span>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="m_title">3.頭部是否曾經受過傷？<span></span></div>
                                        <div class="m_info">
                                            <div class="noChecked">
                                                <ul>
                                                    <li>
                                                        <input type="radio" name="question_3-3" id="q24-1">
                                                        <label for="q24-1">是</label>
                                                    </li>
                                                    <li>
                                                        <input type="radio" name="question_3-3" id="q24-2">
                                                        <label for="q24-2">否</label>
                                                    </li>
                                                </ul>
                                            </div>
                                            <span class="hasChecked">否</span>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="m_title">4.是否曾經被撞擊致無意識？<span></span></div>
                                        <div class="m_info">
                                            <div class="noChecked">
                                                <ul>
                                                    <li>
                                                        <input type="radio" name="question_3-4" id="q25-1">
                                                        <label for="q25-1">是</label>
                                                    </li>
                                                    <li>
                                                        <input type="radio" name="question_3-4" id="q25-2">
                                                        <label for="q25-2">否</label>
                                                    </li>
                                                </ul>
                                            </div>
                                            <span class="hasChecked">否</span>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="m_title">5.是否曾在運動過後突然昏倒？<span></span></div>
                                        <div class="m_info">
                                            <div class="noChecked">
                                                <ul>
                                                    <li>
                                                        <input type="radio" name="question_3-5" id="q26-1">
                                                        <label for="q26-1">是</label>
                                                    </li>
                                                    <li>
                                                        <input type="radio" name="question_3-5" id="q26-2">
                                                        <label for="q26-2">否</label>
                                                    </li>
                                                </ul>
                                            </div>
                                            <span class="hasChecked">否</span>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="m_title">6.是否曾在運動過後頭暈目眩？<span></span></div>
                                        <div class="m_info">
                                            <div class="noChecked">
                                                <ul>
                                                    <li>
                                                        <input type="radio" name="question_3-6" id="q27-1">
                                                        <label for="q27-1">是</label>
                                                    </li>
                                                    <li>
                                                        <input type="radio" name="question_3-6" id="q27-2">
                                                        <label for="q27-2">否</label>
                                                    </li>
                                                </ul>
                                            </div>
                                            <span class="hasChecked">否</span>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="m_title">7.是否曾經癲癇發作？<span></span></div>
                                        <div class="m_info">
                                            <div class="noChecked">
                                                <ul>
                                                    <li>
                                                        <input type="radio" name="question_3-7" id="q28-1">
                                                        <label for="q28-1">是</label>
                                                    </li>
                                                    <li>
                                                        <input type="radio" name="question_3-7" id="q28-2">
                                                        <label for="q28-2">否</label>
                                                    </li>
                                                </ul>
                                            </div>
                                            <span class="hasChecked">否</span>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="m_title">8.是否曾有在運動過後胸痛？<span></span></div>
                                        <div class="m_info">
                                            <div class="noChecked">
                                                <ul>
                                                    <li>
                                                        <input type="radio" name="question_3-8" id="q29-1">
                                                        <label for="q29-1">是</label>
                                                    </li>
                                                    <li>
                                                        <input type="radio" name="question_3-8" id="q29-2">
                                                        <label for="q29-2">否</label>
                                                    </li>
                                                </ul>
                                            </div>
                                            <span class="hasChecked">否</span>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="m_title">9.是否曾有背部受傷的問題？<span></span></div>
                                        <div class="m_info">
                                            <div class="noChecked">
                                                <ul>
                                                    <li>
                                                        <input type="radio" name="question_3-9" id="q30-1">
                                                        <label for="q30-1">是</label>
                                                    </li>
                                                    <li>
                                                        <input type="radio" name="question_3-9" id="q30-2">
                                                        <label for="q30-2">否</label>
                                                    </li>
                                                    <li>
                                                        <label for="q30-3" class="noInput">；若有，請填寫原因</label>
                                                        <input type="text" id="q30-3" placeholder="請填寫原因">
                                                    </li>
                                                </ul>
                                            </div>
                                            <span class="hasChecked">否</span>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="m_title">10.是否曾有關節的問題（如膝、腳踝）<span></span></div>
                                        <div class="m_info">
                                            <div class="noChecked">
                                                <ul>
                                                    <li>
                                                        <input type="radio" name="question_3-10" id="q31-1">
                                                        <label for="q31-1">是</label>
                                                    </li>
                                                    <li>
                                                        <input type="radio" name="question_3-10" id="q31-2">
                                                        <label for="q31-2">否</label>
                                                    </li>
                                                    <li>
                                                        <label for="q31-3" class="noInput">；若有，請填寫原因</label>
                                                        <input type="text" id="q31-3" placeholder="請填寫原因">
                                                    </li>
                                                </ul>
                                            </div>
                                            <span class="hasChecked">否</span>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="m_title">11.是否有血友病病史？<span></span></div>
                                        <div class="m_info">
                                            <div class="noChecked">
                                                <ul>
                                                    <li>
                                                        <input type="radio" name="question_3-11" id="q32-1">
                                                        <label for="q32-1">是</label>
                                                    </li>
                                                    <li>
                                                        <input type="radio" name="question_3-11" id="q32-2">
                                                        <label for="q32-2">否</label>
                                                    </li>
                                                </ul>
                                            </div>
                                            <span class="hasChecked">否</span>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="m_title">12.是否有暴食症或厭食症的病史？<span></span></div>
                                        <div class="m_info">
                                            <div class="noChecked">
                                                <ul>
                                                    <li>
                                                        <input type="radio" name="question_3-12" id="q33-1">
                                                        <label for="q33-1">是</label>
                                                    </li>
                                                    <li>
                                                        <input type="radio" name="question_3-12" id="q33-2">
                                                        <label for="q33-2">否</label>
                                                    </li>
                                                </ul>
                                            </div>
                                            <span class="hasChecked">否</span>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="m_title">13.是否有憂鬱症病史？<span></span></div>
                                        <div class="m_info">
                                            <div class="noChecked">
                                                <ul>
                                                    <li>
                                                        <input type="radio" name="question_3-13" id="q34-1">
                                                        <label for="q34-1">是</label>
                                                    </li>
                                                    <li>
                                                        <input type="radio" name="question_3-13" id="q34-2">
                                                        <label for="q34-2">否</label>
                                                    </li>
                                                </ul>
                                            </div>
                                            <span class="hasChecked">否</span>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="m_title">14.是否曾因精神方面問題需要治療、住院或諮商？<span></span></div>
                                        <div class="m_info">
                                            <div class="noChecked">
                                                <ul>
                                                    <li>
                                                        <input type="radio" name="question_3-14" id="q35-1">
                                                        <label for="q35-1">是</label>
                                                    </li>
                                                    <li>
                                                        <input type="radio" name="question_3-14" id="q35-2">
                                                        <label for="q35-2">否</label>
                                                    </li>
                                                </ul>
                                            </div>
                                            <span class="hasChecked">否</span>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div class="btnBox">
                                <a href="my-order.php">查看訂單</a>
                                <a href="javascript:;" class="noChecked">送出</a>
                            </div>
                        </div>
                    </li>
                    <li class="hasTxt">
                        <a href="javascript:;">
                            <div class="leftPre">
                                <div class="isChecked">
                                    <div class="noChecked">
                                        <div class="img">
                                            <img src="dist/images/common/noTxt.png">
                                        </div>
                                        <span>尚未填寫</span>
                                    </div>
                                    <div class="hasChecked">
                                        <div class="img">
                                            <img src="dist/images/common/hasTxt.png">
                                        </div>
                                        <span>已填寫</span>
                                    </div>
                                </div>
                                <div class="leftBoxFind">
                                    <div class="leftBox">
                                        <ul>
                                            <li class="name">
                                                B202209001 薑餅咪金幣挑戰營薑餅咪金幣挑戰營薑餅咪金幣挑戰營
                                            </li>
                                            <li class="date">
                                                <img src="dist/images/common/datePage.png">
                                                <span>2023/07/11 - 2023/07/13</span>
                                            </li>
                                        </ul>
                                        <ul>
                                            <li>
                                                <div class="m_title">學員名稱</div>
                                                <div class="m_info">許大寶</div>
                                            </li>
                                            <li>
                                                <div class="m_title">身分證字號</div>
                                                <div class="m_info">A123456789</div>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="openLink mo_991">
                                        <img src="dist/images/common/openIcon.png">
                                    </div>
                                </div>
                            </div>
                            <div class="openLink pc_991">
                                <img src="dist/images/common/openIcon.png">
                            </div>
                        </a>
                        <div class="contain">
                            <div class="b_blue">學員健康調查表</div>
                            <p class="info noChecked">
                                您好，參加台北YWCA活動需要以下資訊，請務必確實填寫，謝謝！<br>
                                ※ 請注意！活動開始 7 天前會將資料匯出，請勿臨時異動資料，以確保活動人員能掌握學員的狀況喔！
                            </p>
                            <div class="section">
                                <div class="bgBlue">
                                    學員基本資訊
                                </div>
                                <ul class="baseInfo">
                                    <li class="name">
                                        <img src="dist/images/member.png">
                                        許大寶
                                    </li>
                                    <li class="flex-wrap">
                                        <div>
                                            <div class="m_title">身高<span></span></div>
                                            <div class="m_info">
                                                <input type="text" placeholder="請填整數，例：150" class="noChecked">
                                                <span class="hasChecked">150</span>
                                                <span>公分</span>
                                            </div>
                                        </div>
                                        <div>
                                            <div class="m_title w4em">體重<span></span></div>
                                            <div class="m_info">
                                                <input type="text" placeholder="請填整數，例：40" class="noChecked">
                                                <span class="hasChecked">150</span>
                                                <span>公斤</span>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="flex-wrap">
                                        <div class="bloodType">
                                            <div class="m_title">血型<span></span></div>
                                            <div class="m_info">
                                                <div class="noChecked">
                                                    <ul>
                                                        <li>
                                                            <input type="radio" name="blood" id="aType">
                                                            <label for="aType">A型</label>
                                                        </li>
                                                        <li>
                                                            <input type="radio" name="blood" id="bType">
                                                            <label for="bType">B型</label>
                                                        </li>
                                                        <li>
                                                            <input type="radio" name="blood" id="oType">
                                                            <label for="oType">O型</label>
                                                        </li>
                                                        <li>
                                                            <input type="radio" name="blood" id="abType">
                                                            <label for="abType">AB型</label>
                                                        </li>
                                                        <li>
                                                            <input type="radio" name="blood" id="unType">
                                                            <label for="unType">不清楚</label>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <span class="hasChecked">O型</span>
                                            </div>
                                        </div>
                                        <div class="eatingHabits">
                                            <div class="m_title">飲食習慣<span></span></div>
                                            <div class="m_info">
                                                <div class="noChecked">
                                                    <ul>
                                                        <li>
                                                            <input type="radio" name="eating" id="eating_1">
                                                            <label for="eating_1">葷</label>
                                                        </li>
                                                        <li>
                                                            <input type="radio" name="eating" id="eating_2">
                                                            <label for="eating_2">素</label>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <span class="hasChecked">葷</span>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div class="section">
                                <div class="bgBlue">
                                    家長叮嚀事項
                                </div>
                                <ul>
                                    <li>
                                        <div class="m_title">1.學員接送方式<span></span></div>
                                        <div class="m_info">
                                            <div class="noChecked">
                                                <ul>
                                                    <li>
                                                        <input type="radio" name="question" id="q1">
                                                        <label for="q1">由家長至集合解散地點接送</label>
                                                    </li>
                                                    <li>
                                                        <input type="radio" name="question" id="q2">
                                                        <label for="q2">學員自行搭車返家</label>
                                                    </li>
                                                    <li>
                                                        <input type="radio" name="question" id="q3">
                                                        <label for="q3">其他</label>
                                                        <input type="text" placeholder="請輸入其他接送方式">
                                                    </li>
                                                </ul>
                                            </div>
                                            <span class="hasChecked">由家長至集合解散地點接送</span>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="m_title">2.分組分房需求<span></span><i>（※親友同組最多3人，未事先告知無法臨時調組！）</i></div>
                                        <div class="m_info">
                                            <input type="text" placeholder="請輸入需求" class="noChecked">
                                            <span class="hasChecked">無分組分房需求</span>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="m_title">3.其他交代事項</div>
                                        <div class="m_info">
                                            <input type="text" placeholder="請輸入交代事項" class="noChecked">
                                            <span class="hasChecked">無</span>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div class="section">
                                <div class="bgBlue">
                                    學員健康調查表<span>※請務必照實填寫，避免有突發狀況無法處理。</span>
                                </div>
                                <div class="s_title">第一部分：現有狀況</div>
                                <ul>
                                    <li>
                                        <div class="m_title">1.最近是否有受傷、生病或傳染性疾病的狀況？<span></span></div>
                                        <div class="m_info">
                                            <div class="noChecked">
                                                <ul>
                                                    <li>
                                                        <input type="radio" name="question_1-1" id="q1-1">
                                                        <label for="q1-1">是</label>
                                                    </li>
                                                    <li>
                                                        <input type="radio" name="question_1-1" id="q1-2">
                                                        <label for="q1-2">否</label>
                                                    </li>
                                                    <li>
                                                        <label for="q1-3" class="noInput">；若有，請填寫詳細時間與狀況</label>
                                                        <input type="text" id="q1-3" placeholder="請填寫詳細時間與狀況">
                                                    </li>
                                                </ul>
                                            </div>
                                            <span class="hasChecked">否</span>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="m_title">2.是否有任何慢性疾病或突發性病症狀態？<span></span></div>
                                        <div class="m_info">
                                            <div class="noChecked">
                                                <ul>
                                                    <li>
                                                        <input type="radio" name="question_1-2" id="q2-1">
                                                        <label for="q2-1">是</label>
                                                    </li>
                                                    <li>
                                                        <input type="radio" name="question_1-2" id="q2-2">
                                                        <label for="q2-2">否</label>
                                                    </li>
                                                </ul>
                                            </div>
                                            <span class="hasChecked">否</span>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="m_title">3.是否有高血壓或糖尿病？<span></span></div>
                                        <div class="m_info">
                                            <div class="noChecked">
                                                <ul>
                                                    <li>
                                                        <input type="radio" name="question_1-3" id="q3-1">
                                                        <label for="q3-1">是</label>
                                                    </li>
                                                    <li>
                                                        <input type="radio" name="question_1-3" id="q3-2">
                                                        <label for="q3-2">否</label>
                                                    </li>
                                                </ul>
                                            </div>
                                            <span class="hasChecked">否</span>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="m_title">4.是否有任何皮膚問題（如發癢、皮疹、痤瘡(粉刺)及異位性皮膚炎）？<span></span></div>
                                        <div class="m_info">
                                            <div class="noChecked">
                                                <ul>
                                                    <li>
                                                        <input type="radio" name="question_1-4" id="q4-1">
                                                        <label for="q4-1">是</label>
                                                    </li>
                                                    <li>
                                                        <input type="radio" name="question_1-4" id="q4-2">
                                                        <label for="q4-2">否</label>
                                                    </li>
                                                    <li>
                                                        <label for="q4-3" class="noInput">；若有，請填寫處理方式</label>
                                                        <input type="text" id="q4-3" placeholder="請填寫處理方式">
                                                    </li>
                                                </ul>
                                            </div>
                                            <span class="hasChecked">否</span>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="m_title">5.是否有蠶豆症？<span></span></div>
                                        <div class="m_info">
                                            <div class="noChecked">
                                                <ul>
                                                    <li>
                                                        <input type="radio" name="question_1-5" id="q5-1">
                                                        <label for="q5-1">是</label>
                                                    </li>
                                                    <li>
                                                        <input type="radio" name="question_1-5" id="q5-2">
                                                        <label for="q5-2">否</label>
                                                    </li>
                                                    <li>
                                                        <label for="q5-3" class="noInput">；若有，請填寫注意事項</label>
                                                        <input type="text" id="q5-3" placeholder="請填寫注意事項">
                                                    </li>
                                                </ul>
                                            </div>
                                            <span class="hasChecked">否</span>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="m_title">6.是否有過敏症狀？<span></span></div>
                                        <div class="m_info">
                                            <div class="noChecked">
                                                <ul>
                                                    <li>
                                                        <input type="radio" name="question_1-6" id="q6-1">
                                                        <label for="q6-1">是</label>
                                                    </li>
                                                    <li>
                                                        <input type="radio" name="question_1-6" id="q6-2">
                                                        <label for="q6-2">否</label>
                                                    </li>
                                                    <li>
                                                        <label for="q6-3" class="noInput">；若有，請填寫注意事項與平時處理方式</label>
                                                        <input type="text" id="q6-3" placeholder="請填寫注意事項與平時處理方式">
                                                    </li>
                                                </ul>
                                            </div>
                                            <span class="hasChecked">否</span>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="m_title">7.是否會經常性頭痛？<span></span></div>
                                        <div class="m_info">
                                            <div class="noChecked">
                                                <ul>
                                                    <li>
                                                        <input type="radio" name="question_1-7" id="q7-1">
                                                        <label for="q7-1">是</label>
                                                    </li>
                                                    <li>
                                                        <input type="radio" name="question_1-7" id="q7-2">
                                                        <label for="q7-2">否</label>
                                                    </li>
                                                </ul>
                                            </div>
                                            <span class="hasChecked">否</span>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="m_title">8.是否會經常性耳朵感染（如中耳炎）？<span></span></div>
                                        <div class="m_info">
                                            <div class="noChecked">
                                                <ul>
                                                    <li>
                                                        <input type="radio" name="question_1-8" id="q8-1">
                                                        <label for="q8-1">是</label>
                                                    </li>
                                                    <li>
                                                        <input type="radio" name="question_1-8" id="q8-2">
                                                        <label for="q8-2">否</label>
                                                    </li>
                                                </ul>
                                            </div>
                                            <span class="hasChecked">否</span>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="m_title">9.是否心臟有雜音缺陷或心律不整？<span></span></div>
                                        <div class="m_info">
                                            <div class="noChecked">
                                                <ul>
                                                    <li>
                                                        <input type="radio" name="question_1-9" id="q9-1">
                                                        <label for="q9-1">是</label>
                                                    </li>
                                                    <li>
                                                        <input type="radio" name="question_1-9" id="q9-2">
                                                        <label for="q9-2">否</label>
                                                    </li>
                                                </ul>
                                            </div>
                                            <span class="hasChecked">否</span>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="m_title">10.是否容易有腹瀉或腸胃不適問題？<span></span></div>
                                        <div class="m_info">
                                            <div class="noChecked">
                                                <ul>
                                                    <li>
                                                        <input type="radio" name="question_1-10" id="q10-1">
                                                        <label for="q10-1">是</label>
                                                    </li>
                                                    <li>
                                                        <input type="radio" name="question_1-10" id="q10-2">
                                                        <label for="q10-2">否</label>
                                                    </li>
                                                </ul>
                                            </div>
                                            <span class="hasChecked">否</span>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="m_title">11.是否容易有便祕問題？<span></span></div>
                                        <div class="m_info">
                                            <div class="noChecked">
                                                <ul>
                                                    <li>
                                                        <input type="radio" name="question_1-11" id="q11-1">
                                                        <label for="q11-1">是</label>
                                                    </li>
                                                    <li>
                                                        <input type="radio" name="question_1-11" id="q11-2">
                                                        <label for="q11-2">否</label>
                                                    </li>
                                                </ul>
                                            </div>
                                            <span class="hasChecked">否</span>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="m_title">12.是否有夢遊或睡眠障礙問題？<span></span></div>
                                        <div class="m_info">
                                            <div class="noChecked">
                                                <ul>
                                                    <li>
                                                        <input type="radio" name="question_1-12" id="q12-1">
                                                        <label for="q12-1">是</label>
                                                    </li>
                                                    <li>
                                                        <input type="radio" name="question_1-12" id="q12-2">
                                                        <label for="q12-2">否</label>
                                                    </li>
                                                    <li>
                                                        <label for="q12-3" class="noInput">；若有，請填寫處理方式</label>
                                                        <input type="text" id="q12-3" placeholder="請填寫處理方式">
                                                    </li>
                                                </ul>
                                            </div>
                                            <span class="hasChecked">否</span>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="m_title">13.是否有情緒困難，並由專業人員進行協助？<span></span><i>（※請報名前務必來電與幹事討論評估狀況）</i></div>
                                        <div class="m_info">
                                            <div class="noChecked">
                                                <ul>
                                                    <li>
                                                        <input type="radio" name="question_1-13" id="q13-1">
                                                        <label for="q13-1">是</label>
                                                    </li>
                                                    <li>
                                                        <input type="radio" name="question_1-13" id="q13-2">
                                                        <label for="q13-2">否</label>
                                                    </li>
                                                    <li>
                                                        <label for="q13-3" class="noInput">；若有，請填寫平時處理方式</label>
                                                        <input type="text" id="q13-3" placeholder="請填寫平時處理方式">
                                                    </li>
                                                </ul>
                                            </div>
                                            <span class="hasChecked">否</span>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="m_title">14.是否有注意力不足或過動症？<span></span><i>（※請報名前務必來電與幹事討論評估狀況）</i></div>
                                        <div class="m_info">
                                            <div class="noChecked">
                                                <ul>
                                                    <li>
                                                        <input type="radio" name="question_1-14" id="q14-1">
                                                        <label for="q14-1">是</label>
                                                    </li>
                                                    <li>
                                                        <input type="radio" name="question_1-14" id="q14-2">
                                                        <label for="q14-2">否</label>
                                                    </li>
                                                    <li>
                                                        <label for="q14-3" class="noInput">；若有，請填寫平時處理方式</label>
                                                        <input type="text" id="q14-3" placeholder="請填寫平時處理方式">
                                                    </li>
                                                </ul>
                                            </div>
                                            <span class="hasChecked">否</span>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="m_title">15.是否有氣喘？<span></span><i>（※如有使用吸入器，請務必要準備足夠量帶來）</i></div>
                                        <div class="m_info">
                                            <div class="noChecked">
                                                <ul>
                                                    <li>
                                                        <input type="radio" name="question_1-15" id="q15-1">
                                                        <label for="q15-1">是</label>
                                                    </li>
                                                    <li>
                                                        <input type="radio" name="question_1-15" id="q15-2">
                                                        <label for="q15-2">否</label>
                                                    </li>
                                                    <li>
                                                        <label for="q15-3" class="noInput">；若有，請填寫平時處理方式</label>
                                                        <input type="text" id="q15-3" placeholder="請填寫平時處理方式">
                                                    </li>
                                                </ul>
                                            </div>
                                            <span class="hasChecked">否</span>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="m_title">16.是否有戴牙齒矯正器？<span></span></div>
                                        <div class="m_info">
                                            <div class="noChecked">
                                                <ul>
                                                    <li>
                                                        <input type="radio" name="question_1-16" id="q16-1">
                                                        <label for="q16-1">是</label>
                                                    </li>
                                                    <li>
                                                        <input type="radio" name="question_1-16" id="q16-2">
                                                        <label for="q16-2">否</label>
                                                    </li>
                                                </ul>
                                            </div>
                                            <span class="hasChecked">否</span>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="m_title">17.是否有戴角膜塑型片、眼鏡或隱形眼鏡？<span></span></div>
                                        <div class="m_info">
                                            <div class="noChecked">
                                                <ul>
                                                    <li>
                                                        <input type="radio" name="question_1-17" id="q17-1">
                                                        <label for="q17-1">是</label>
                                                    </li>
                                                    <li>
                                                        <input type="radio" name="question_1-17" id="q17-2">
                                                        <label for="q17-2">否</label>
                                                    </li>
                                                    <li>
                                                        <label for="q17-3" class="noInput">；若有，請填寫平時處理方式</label>
                                                        <input type="text" id="q17-3" placeholder="請填寫平時處理方式">
                                                    </li>
                                                </ul>
                                            </div>
                                            <span class="hasChecked">否</span>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="m_title">18.是否對抗生素過敏？<span></span><i>（※若有對任何盤尼西林/安莫西林(penicillin/amoxocillin)過敏，一定要帶由藥師認可的替代藥品）</i></div>
                                        <div class="m_info">
                                            <div class="noChecked">
                                                <ul>
                                                    <li>
                                                        <input type="radio" name="question_1-18" id="q18-1">
                                                        <label for="q18-1">是</label>
                                                    </li>
                                                    <li>
                                                        <input type="radio" name="question_1-18" id="q18-2">
                                                        <label for="q18-2">否</label>
                                                    </li>
                                                </ul>
                                            </div>
                                            <span class="hasChecked">否</span>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="m_title">19.如果是女孩的話，已經有月經了嗎？</div>
                                        <div class="m_info">
                                            <div class="noChecked">
                                                <ul>
                                                    <li>
                                                        <input type="radio" name="question_1-19" id="q19-1">
                                                        <label for="q19-1">是</label>
                                                    </li>
                                                    <li>
                                                        <input type="radio" name="question_1-19" id="q19-2">
                                                        <label for="q19-2">否</label>
                                                    </li>
                                                </ul>
                                            </div>
                                            <span class="hasChecked">否</span>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="m_title">20.若有其他症狀病例，請務必詳實填寫：</div>
                                        <div class="m_info">
                                            <input type="text" placeholder="請說明其他症狀病例與平時處理方式" class="noChecked">
                                            <span class="hasChecked">無</span>
                                        </div>
                                    </li>
                                </ul>
                                <div class="s_title">第二部分：家族病史</div>
                                <ul>
                                    <li>
                                        <div class="m_title">1.在家族中是否曾有人有突然或不明原因的死亡？<span></span></div>
                                        <div class="m_info">
                                            <div class="noChecked">
                                                <ul>
                                                    <li>
                                                        <input type="radio" name="question_2-1" id="q20-1">
                                                        <label for="q20-1">是</label>
                                                    </li>
                                                    <li>
                                                        <input type="radio" name="question_2-1" id="q20-2">
                                                        <label for="q20-2">否</label>
                                                    </li>
                                                </ul>
                                            </div>
                                            <span class="hasChecked">否</span>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="m_title">2.在家族中是否有人因心臟病問題或在50歲以下突然死亡？<span></span></div>
                                        <div class="m_info">
                                            <div class="noChecked">
                                                <ul>
                                                    <li>
                                                        <input type="radio" name="question_2-2" id="q21-1">
                                                        <label for="q21-1">是</label>
                                                    </li>
                                                    <li>
                                                        <input type="radio" name="question_2-2" id="q21-2">
                                                        <label for="q21-2">否</label>
                                                    </li>
                                                </ul>
                                            </div>
                                            <span class="hasChecked">否</span>
                                        </div>
                                    </li>
                                </ul>
                                <div class="s_title">第三部分：曾有病史</div>
                                <ul>
                                    <li>
                                        <div class="m_title">1.是否曾經住院？<span></span></div>
                                        <div class="m_info">
                                            <div class="noChecked">
                                                <ul>
                                                    <li>
                                                        <input type="radio" name="question_3-1" id="q22-1">
                                                        <label for="q22-1">是</label>
                                                    </li>
                                                    <li>
                                                        <input type="radio" name="question_3-1" id="q22-2">
                                                        <label for="q22-2">否</label>
                                                    </li>
                                                    <li>
                                                        <label for="q22-3" class="noInput">；若有，請填寫原因</label>
                                                        <input type="text" id="q22-3" placeholder="請填寫原因">
                                                    </li>
                                                </ul>
                                            </div>
                                            <span class="hasChecked">否</span>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="m_title">2.是否曾經開過刀？<span></span></div>
                                        <div class="m_info">
                                            <div class="noChecked">
                                                <ul>
                                                    <li>
                                                        <input type="radio" name="question_3-2" id="q23-1">
                                                        <label for="q23-1">是</label>
                                                    </li>
                                                    <li>
                                                        <input type="radio" name="question_3-2" id="q23-2">
                                                        <label for="q23-2">否</label>
                                                    </li>
                                                    <li>
                                                        <label for="q23-3" class="noInput">；若有，請填寫原因</label>
                                                        <input type="text" id="q23-3" placeholder="請填寫原因">
                                                    </li>
                                                </ul>
                                            </div>
                                            <span class="hasChecked">否</span>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="m_title">3.頭部是否曾經受過傷？<span></span></div>
                                        <div class="m_info">
                                            <div class="noChecked">
                                                <ul>
                                                    <li>
                                                        <input type="radio" name="question_3-3" id="q24-1">
                                                        <label for="q24-1">是</label>
                                                    </li>
                                                    <li>
                                                        <input type="radio" name="question_3-3" id="q24-2">
                                                        <label for="q24-2">否</label>
                                                    </li>
                                                </ul>
                                            </div>
                                            <span class="hasChecked">否</span>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="m_title">4.是否曾經被撞擊致無意識？<span></span></div>
                                        <div class="m_info">
                                            <div class="noChecked">
                                                <ul>
                                                    <li>
                                                        <input type="radio" name="question_3-4" id="q25-1">
                                                        <label for="q25-1">是</label>
                                                    </li>
                                                    <li>
                                                        <input type="radio" name="question_3-4" id="q25-2">
                                                        <label for="q25-2">否</label>
                                                    </li>
                                                </ul>
                                            </div>
                                            <span class="hasChecked">否</span>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="m_title">5.是否曾在運動過後突然昏倒？<span></span></div>
                                        <div class="m_info">
                                            <div class="noChecked">
                                                <ul>
                                                    <li>
                                                        <input type="radio" name="question_3-5" id="q26-1">
                                                        <label for="q26-1">是</label>
                                                    </li>
                                                    <li>
                                                        <input type="radio" name="question_3-5" id="q26-2">
                                                        <label for="q26-2">否</label>
                                                    </li>
                                                </ul>
                                            </div>
                                            <span class="hasChecked">否</span>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="m_title">6.是否曾在運動過後頭暈目眩？<span></span></div>
                                        <div class="m_info">
                                            <div class="noChecked">
                                                <ul>
                                                    <li>
                                                        <input type="radio" name="question_3-6" id="q27-1">
                                                        <label for="q27-1">是</label>
                                                    </li>
                                                    <li>
                                                        <input type="radio" name="question_3-6" id="q27-2">
                                                        <label for="q27-2">否</label>
                                                    </li>
                                                </ul>
                                            </div>
                                            <span class="hasChecked">否</span>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="m_title">7.是否曾經癲癇發作？<span></span></div>
                                        <div class="m_info">
                                            <div class="noChecked">
                                                <ul>
                                                    <li>
                                                        <input type="radio" name="question_3-7" id="q28-1">
                                                        <label for="q28-1">是</label>
                                                    </li>
                                                    <li>
                                                        <input type="radio" name="question_3-7" id="q28-2">
                                                        <label for="q28-2">否</label>
                                                    </li>
                                                </ul>
                                            </div>
                                            <span class="hasChecked">否</span>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="m_title">8.是否曾有在運動過後胸痛？<span></span></div>
                                        <div class="m_info">
                                            <div class="noChecked">
                                                <ul>
                                                    <li>
                                                        <input type="radio" name="question_3-8" id="q29-1">
                                                        <label for="q29-1">是</label>
                                                    </li>
                                                    <li>
                                                        <input type="radio" name="question_3-8" id="q29-2">
                                                        <label for="q29-2">否</label>
                                                    </li>
                                                </ul>
                                            </div>
                                            <span class="hasChecked">否</span>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="m_title">9.是否曾有背部受傷的問題？<span></span></div>
                                        <div class="m_info">
                                            <div class="noChecked">
                                                <ul>
                                                    <li>
                                                        <input type="radio" name="question_3-9" id="q30-1">
                                                        <label for="q30-1">是</label>
                                                    </li>
                                                    <li>
                                                        <input type="radio" name="question_3-9" id="q30-2">
                                                        <label for="q30-2">否</label>
                                                    </li>
                                                    <li>
                                                        <label for="q30-3" class="noInput">；若有，請填寫原因</label>
                                                        <input type="text" id="q30-3" placeholder="請填寫原因">
                                                    </li>
                                                </ul>
                                            </div>
                                            <span class="hasChecked">否</span>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="m_title">10.是否曾有關節的問題（如膝、腳踝）<span></span></div>
                                        <div class="m_info">
                                            <div class="noChecked">
                                                <ul>
                                                    <li>
                                                        <input type="radio" name="question_3-10" id="q31-1">
                                                        <label for="q31-1">是</label>
                                                    </li>
                                                    <li>
                                                        <input type="radio" name="question_3-10" id="q31-2">
                                                        <label for="q31-2">否</label>
                                                    </li>
                                                    <li>
                                                        <label for="q31-3" class="noInput">；若有，請填寫原因</label>
                                                        <input type="text" id="q31-3" placeholder="請填寫原因">
                                                    </li>
                                                </ul>
                                            </div>
                                            <span class="hasChecked">否</span>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="m_title">11.是否有血友病病史？<span></span></div>
                                        <div class="m_info">
                                            <div class="noChecked">
                                                <ul>
                                                    <li>
                                                        <input type="radio" name="question_3-11" id="q32-1">
                                                        <label for="q32-1">是</label>
                                                    </li>
                                                    <li>
                                                        <input type="radio" name="question_3-11" id="q32-2">
                                                        <label for="q32-2">否</label>
                                                    </li>
                                                </ul>
                                            </div>
                                            <span class="hasChecked">否</span>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="m_title">12.是否有暴食症或厭食症的病史？<span></span></div>
                                        <div class="m_info">
                                            <div class="noChecked">
                                                <ul>
                                                    <li>
                                                        <input type="radio" name="question_3-12" id="q33-1">
                                                        <label for="q33-1">是</label>
                                                    </li>
                                                    <li>
                                                        <input type="radio" name="question_3-12" id="q33-2">
                                                        <label for="q33-2">否</label>
                                                    </li>
                                                </ul>
                                            </div>
                                            <span class="hasChecked">否</span>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="m_title">13.是否有憂鬱症病史？<span></span></div>
                                        <div class="m_info">
                                            <div class="noChecked">
                                                <ul>
                                                    <li>
                                                        <input type="radio" name="question_3-13" id="q34-1">
                                                        <label for="q34-1">是</label>
                                                    </li>
                                                    <li>
                                                        <input type="radio" name="question_3-13" id="q34-2">
                                                        <label for="q34-2">否</label>
                                                    </li>
                                                </ul>
                                            </div>
                                            <span class="hasChecked">否</span>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="m_title">14.是否曾因精神方面問題需要治療、住院或諮商？<span></span></div>
                                        <div class="m_info">
                                            <div class="noChecked">
                                                <ul>
                                                    <li>
                                                        <input type="radio" name="question_3-14" id="q35-1">
                                                        <label for="q35-1">是</label>
                                                    </li>
                                                    <li>
                                                        <input type="radio" name="question_3-14" id="q35-2">
                                                        <label for="q35-2">否</label>
                                                    </li>
                                                </ul>
                                            </div>
                                            <span class="hasChecked">否</span>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div class="btnBox">
                                <a href="my-order.php">查看訂單</a>
                                <a href="javascript:;" class="noChecked">送出</a>
                            </div>
                        </div>
                    </li>
                    <li class="hasTxt">
                        <a href="javascript:;">
                            <div class="leftPre">
                                <div class="isChecked">
                                    <div class="noChecked">
                                        <div class="img">
                                            <img src="dist/images/common/noTxt.png">
                                        </div>
                                        <span>尚未填寫</span>
                                    </div>
                                    <div class="hasChecked">
                                        <div class="img">
                                            <img src="dist/images/common/hasTxt.png">
                                        </div>
                                        <span>已填寫</span>
                                    </div>
                                </div>
                                <div class="leftBoxFind">
                                    <div class="leftBox">
                                        <ul>
                                            <li class="name">
                                                B202209001 薑餅咪金幣挑戰營薑餅咪金幣挑戰營薑餅咪金幣挑戰營
                                            </li>
                                            <li class="date">
                                                <img src="dist/images/common/datePage.png">
                                                <span>2023/07/11 - 2023/07/13</span>
                                            </li>
                                        </ul>
                                        <ul>
                                            <li>
                                                <div class="m_title">學員名稱</div>
                                                <div class="m_info">許大寶</div>
                                            </li>
                                            <li>
                                                <div class="m_title">身分證字號</div>
                                                <div class="m_info">A123456789</div>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="openLink mo_991">
                                        <img src="dist/images/common/openIcon.png">
                                    </div>
                                </div>
                            </div>
                            <div class="openLink pc_991">
                                <img src="dist/images/common/openIcon.png">
                            </div>
                        </a>
                        <div class="contain">
                            <div class="b_blue">學員健康調查表</div>
                            <p class="info noChecked">
                                您好，參加台北YWCA活動需要以下資訊，請務必確實填寫，謝謝！<br>
                                ※ 請注意！活動開始 7 天前會將資料匯出，請勿臨時異動資料，以確保活動人員能掌握學員的狀況喔！
                            </p>
                            <div class="section">
                                <div class="bgBlue">
                                    學員基本資訊
                                </div>
                                <ul class="baseInfo">
                                    <li class="name">
                                        <img src="dist/images/member.png">
                                        許大寶
                                    </li>
                                    <li class="flex-wrap">
                                        <div>
                                            <div class="m_title">身高<span></span></div>
                                            <div class="m_info">
                                                <input type="text" placeholder="請填整數，例：150" class="noChecked">
                                                <span class="hasChecked">150</span>
                                                <span>公分</span>
                                            </div>
                                        </div>
                                        <div>
                                            <div class="m_title w4em">體重<span></span></div>
                                            <div class="m_info">
                                                <input type="text" placeholder="請填整數，例：40" class="noChecked">
                                                <span class="hasChecked">150</span>
                                                <span>公斤</span>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="flex-wrap">
                                        <div class="bloodType">
                                            <div class="m_title">血型<span></span></div>
                                            <div class="m_info">
                                                <div class="noChecked">
                                                    <ul>
                                                        <li>
                                                            <input type="radio" name="blood" id="aType">
                                                            <label for="aType">A型</label>
                                                        </li>
                                                        <li>
                                                            <input type="radio" name="blood" id="bType">
                                                            <label for="bType">B型</label>
                                                        </li>
                                                        <li>
                                                            <input type="radio" name="blood" id="oType">
                                                            <label for="oType">O型</label>
                                                        </li>
                                                        <li>
                                                            <input type="radio" name="blood" id="abType">
                                                            <label for="abType">AB型</label>
                                                        </li>
                                                        <li>
                                                            <input type="radio" name="blood" id="unType">
                                                            <label for="unType">不清楚</label>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <span class="hasChecked">O型</span>
                                            </div>
                                        </div>
                                        <div class="eatingHabits">
                                            <div class="m_title">飲食習慣<span></span></div>
                                            <div class="m_info">
                                                <div class="noChecked">
                                                    <ul>
                                                        <li>
                                                            <input type="radio" name="eating" id="eating_1">
                                                            <label for="eating_1">葷</label>
                                                        </li>
                                                        <li>
                                                            <input type="radio" name="eating" id="eating_2">
                                                            <label for="eating_2">素</label>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <span class="hasChecked">葷</span>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div class="section">
                                <div class="bgBlue">
                                    家長叮嚀事項
                                </div>
                                <ul>
                                    <li>
                                        <div class="m_title">1.學員接送方式<span></span></div>
                                        <div class="m_info">
                                            <div class="noChecked">
                                                <ul>
                                                    <li>
                                                        <input type="radio" name="question" id="q1">
                                                        <label for="q1">由家長至集合解散地點接送</label>
                                                    </li>
                                                    <li>
                                                        <input type="radio" name="question" id="q2">
                                                        <label for="q2">學員自行搭車返家</label>
                                                    </li>
                                                    <li>
                                                        <input type="radio" name="question" id="q3">
                                                        <label for="q3">其他</label>
                                                        <input type="text" placeholder="請輸入其他接送方式">
                                                    </li>
                                                </ul>
                                            </div>
                                            <span class="hasChecked">由家長至集合解散地點接送</span>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="m_title">2.分組分房需求<span></span><i>（※親友同組最多3人，未事先告知無法臨時調組！）</i></div>
                                        <div class="m_info">
                                            <input type="text" placeholder="請輸入需求" class="noChecked">
                                            <span class="hasChecked">無分組分房需求</span>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="m_title">3.其他交代事項</div>
                                        <div class="m_info">
                                            <input type="text" placeholder="請輸入交代事項" class="noChecked">
                                            <span class="hasChecked">無</span>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div class="section">
                                <div class="bgBlue">
                                    學員健康調查表<span>※請務必照實填寫，避免有突發狀況無法處理。</span>
                                </div>
                                <div class="s_title">第一部分：現有狀況</div>
                                <ul>
                                    <li>
                                        <div class="m_title">1.最近是否有受傷、生病或傳染性疾病的狀況？<span></span></div>
                                        <div class="m_info">
                                            <div class="noChecked">
                                                <ul>
                                                    <li>
                                                        <input type="radio" name="question_1-1" id="q1-1">
                                                        <label for="q1-1">是</label>
                                                    </li>
                                                    <li>
                                                        <input type="radio" name="question_1-1" id="q1-2">
                                                        <label for="q1-2">否</label>
                                                    </li>
                                                    <li>
                                                        <label for="q1-3" class="noInput">；若有，請填寫詳細時間與狀況</label>
                                                        <input type="text" id="q1-3" placeholder="請填寫詳細時間與狀況">
                                                    </li>
                                                </ul>
                                            </div>
                                            <span class="hasChecked">否</span>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="m_title">2.是否有任何慢性疾病或突發性病症狀態？<span></span></div>
                                        <div class="m_info">
                                            <div class="noChecked">
                                                <ul>
                                                    <li>
                                                        <input type="radio" name="question_1-2" id="q2-1">
                                                        <label for="q2-1">是</label>
                                                    </li>
                                                    <li>
                                                        <input type="radio" name="question_1-2" id="q2-2">
                                                        <label for="q2-2">否</label>
                                                    </li>
                                                </ul>
                                            </div>
                                            <span class="hasChecked">否</span>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="m_title">3.是否有高血壓或糖尿病？<span></span></div>
                                        <div class="m_info">
                                            <div class="noChecked">
                                                <ul>
                                                    <li>
                                                        <input type="radio" name="question_1-3" id="q3-1">
                                                        <label for="q3-1">是</label>
                                                    </li>
                                                    <li>
                                                        <input type="radio" name="question_1-3" id="q3-2">
                                                        <label for="q3-2">否</label>
                                                    </li>
                                                </ul>
                                            </div>
                                            <span class="hasChecked">否</span>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="m_title">4.是否有任何皮膚問題（如發癢、皮疹、痤瘡(粉刺)及異位性皮膚炎）？<span></span></div>
                                        <div class="m_info">
                                            <div class="noChecked">
                                                <ul>
                                                    <li>
                                                        <input type="radio" name="question_1-4" id="q4-1">
                                                        <label for="q4-1">是</label>
                                                    </li>
                                                    <li>
                                                        <input type="radio" name="question_1-4" id="q4-2">
                                                        <label for="q4-2">否</label>
                                                    </li>
                                                    <li>
                                                        <label for="q4-3" class="noInput">；若有，請填寫處理方式</label>
                                                        <input type="text" id="q4-3" placeholder="請填寫處理方式">
                                                    </li>
                                                </ul>
                                            </div>
                                            <span class="hasChecked">否</span>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="m_title">5.是否有蠶豆症？<span></span></div>
                                        <div class="m_info">
                                            <div class="noChecked">
                                                <ul>
                                                    <li>
                                                        <input type="radio" name="question_1-5" id="q5-1">
                                                        <label for="q5-1">是</label>
                                                    </li>
                                                    <li>
                                                        <input type="radio" name="question_1-5" id="q5-2">
                                                        <label for="q5-2">否</label>
                                                    </li>
                                                    <li>
                                                        <label for="q5-3" class="noInput">；若有，請填寫注意事項</label>
                                                        <input type="text" id="q5-3" placeholder="請填寫注意事項">
                                                    </li>
                                                </ul>
                                            </div>
                                            <span class="hasChecked">否</span>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="m_title">6.是否有過敏症狀？<span></span></div>
                                        <div class="m_info">
                                            <div class="noChecked">
                                                <ul>
                                                    <li>
                                                        <input type="radio" name="question_1-6" id="q6-1">
                                                        <label for="q6-1">是</label>
                                                    </li>
                                                    <li>
                                                        <input type="radio" name="question_1-6" id="q6-2">
                                                        <label for="q6-2">否</label>
                                                    </li>
                                                    <li>
                                                        <label for="q6-3" class="noInput">；若有，請填寫注意事項與平時處理方式</label>
                                                        <input type="text" id="q6-3" placeholder="請填寫注意事項與平時處理方式">
                                                    </li>
                                                </ul>
                                            </div>
                                            <span class="hasChecked">否</span>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="m_title">7.是否會經常性頭痛？<span></span></div>
                                        <div class="m_info">
                                            <div class="noChecked">
                                                <ul>
                                                    <li>
                                                        <input type="radio" name="question_1-7" id="q7-1">
                                                        <label for="q7-1">是</label>
                                                    </li>
                                                    <li>
                                                        <input type="radio" name="question_1-7" id="q7-2">
                                                        <label for="q7-2">否</label>
                                                    </li>
                                                </ul>
                                            </div>
                                            <span class="hasChecked">否</span>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="m_title">8.是否會經常性耳朵感染（如中耳炎）？<span></span></div>
                                        <div class="m_info">
                                            <div class="noChecked">
                                                <ul>
                                                    <li>
                                                        <input type="radio" name="question_1-8" id="q8-1">
                                                        <label for="q8-1">是</label>
                                                    </li>
                                                    <li>
                                                        <input type="radio" name="question_1-8" id="q8-2">
                                                        <label for="q8-2">否</label>
                                                    </li>
                                                </ul>
                                            </div>
                                            <span class="hasChecked">否</span>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="m_title">9.是否心臟有雜音缺陷或心律不整？<span></span></div>
                                        <div class="m_info">
                                            <div class="noChecked">
                                                <ul>
                                                    <li>
                                                        <input type="radio" name="question_1-9" id="q9-1">
                                                        <label for="q9-1">是</label>
                                                    </li>
                                                    <li>
                                                        <input type="radio" name="question_1-9" id="q9-2">
                                                        <label for="q9-2">否</label>
                                                    </li>
                                                </ul>
                                            </div>
                                            <span class="hasChecked">否</span>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="m_title">10.是否容易有腹瀉或腸胃不適問題？<span></span></div>
                                        <div class="m_info">
                                            <div class="noChecked">
                                                <ul>
                                                    <li>
                                                        <input type="radio" name="question_1-10" id="q10-1">
                                                        <label for="q10-1">是</label>
                                                    </li>
                                                    <li>
                                                        <input type="radio" name="question_1-10" id="q10-2">
                                                        <label for="q10-2">否</label>
                                                    </li>
                                                </ul>
                                            </div>
                                            <span class="hasChecked">否</span>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="m_title">11.是否容易有便祕問題？<span></span></div>
                                        <div class="m_info">
                                            <div class="noChecked">
                                                <ul>
                                                    <li>
                                                        <input type="radio" name="question_1-11" id="q11-1">
                                                        <label for="q11-1">是</label>
                                                    </li>
                                                    <li>
                                                        <input type="radio" name="question_1-11" id="q11-2">
                                                        <label for="q11-2">否</label>
                                                    </li>
                                                </ul>
                                            </div>
                                            <span class="hasChecked">否</span>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="m_title">12.是否有夢遊或睡眠障礙問題？<span></span></div>
                                        <div class="m_info">
                                            <div class="noChecked">
                                                <ul>
                                                    <li>
                                                        <input type="radio" name="question_1-12" id="q12-1">
                                                        <label for="q12-1">是</label>
                                                    </li>
                                                    <li>
                                                        <input type="radio" name="question_1-12" id="q12-2">
                                                        <label for="q12-2">否</label>
                                                    </li>
                                                    <li>
                                                        <label for="q12-3" class="noInput">；若有，請填寫處理方式</label>
                                                        <input type="text" id="q12-3" placeholder="請填寫處理方式">
                                                    </li>
                                                </ul>
                                            </div>
                                            <span class="hasChecked">否</span>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="m_title">13.是否有情緒困難，並由專業人員進行協助？<span></span><i>（※請報名前務必來電與幹事討論評估狀況）</i></div>
                                        <div class="m_info">
                                            <div class="noChecked">
                                                <ul>
                                                    <li>
                                                        <input type="radio" name="question_1-13" id="q13-1">
                                                        <label for="q13-1">是</label>
                                                    </li>
                                                    <li>
                                                        <input type="radio" name="question_1-13" id="q13-2">
                                                        <label for="q13-2">否</label>
                                                    </li>
                                                    <li>
                                                        <label for="q13-3" class="noInput">；若有，請填寫平時處理方式</label>
                                                        <input type="text" id="q13-3" placeholder="請填寫平時處理方式">
                                                    </li>
                                                </ul>
                                            </div>
                                            <span class="hasChecked">否</span>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="m_title">14.是否有注意力不足或過動症？<span></span><i>（※請報名前務必來電與幹事討論評估狀況）</i></div>
                                        <div class="m_info">
                                            <div class="noChecked">
                                                <ul>
                                                    <li>
                                                        <input type="radio" name="question_1-14" id="q14-1">
                                                        <label for="q14-1">是</label>
                                                    </li>
                                                    <li>
                                                        <input type="radio" name="question_1-14" id="q14-2">
                                                        <label for="q14-2">否</label>
                                                    </li>
                                                    <li>
                                                        <label for="q14-3" class="noInput">；若有，請填寫平時處理方式</label>
                                                        <input type="text" id="q14-3" placeholder="請填寫平時處理方式">
                                                    </li>
                                                </ul>
                                            </div>
                                            <span class="hasChecked">否</span>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="m_title">15.是否有氣喘？<span></span><i>（※如有使用吸入器，請務必要準備足夠量帶來）</i></div>
                                        <div class="m_info">
                                            <div class="noChecked">
                                                <ul>
                                                    <li>
                                                        <input type="radio" name="question_1-15" id="q15-1">
                                                        <label for="q15-1">是</label>
                                                    </li>
                                                    <li>
                                                        <input type="radio" name="question_1-15" id="q15-2">
                                                        <label for="q15-2">否</label>
                                                    </li>
                                                    <li>
                                                        <label for="q15-3" class="noInput">；若有，請填寫平時處理方式</label>
                                                        <input type="text" id="q15-3" placeholder="請填寫平時處理方式">
                                                    </li>
                                                </ul>
                                            </div>
                                            <span class="hasChecked">否</span>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="m_title">16.是否有戴牙齒矯正器？<span></span></div>
                                        <div class="m_info">
                                            <div class="noChecked">
                                                <ul>
                                                    <li>
                                                        <input type="radio" name="question_1-16" id="q16-1">
                                                        <label for="q16-1">是</label>
                                                    </li>
                                                    <li>
                                                        <input type="radio" name="question_1-16" id="q16-2">
                                                        <label for="q16-2">否</label>
                                                    </li>
                                                </ul>
                                            </div>
                                            <span class="hasChecked">否</span>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="m_title">17.是否有戴角膜塑型片、眼鏡或隱形眼鏡？<span></span></div>
                                        <div class="m_info">
                                            <div class="noChecked">
                                                <ul>
                                                    <li>
                                                        <input type="radio" name="question_1-17" id="q17-1">
                                                        <label for="q17-1">是</label>
                                                    </li>
                                                    <li>
                                                        <input type="radio" name="question_1-17" id="q17-2">
                                                        <label for="q17-2">否</label>
                                                    </li>
                                                    <li>
                                                        <label for="q17-3" class="noInput">；若有，請填寫平時處理方式</label>
                                                        <input type="text" id="q17-3" placeholder="請填寫平時處理方式">
                                                    </li>
                                                </ul>
                                            </div>
                                            <span class="hasChecked">否</span>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="m_title">18.是否對抗生素過敏？<span></span><i>（※若有對任何盤尼西林/安莫西林(penicillin/amoxocillin)過敏，一定要帶由藥師認可的替代藥品）</i></div>
                                        <div class="m_info">
                                            <div class="noChecked">
                                                <ul>
                                                    <li>
                                                        <input type="radio" name="question_1-18" id="q18-1">
                                                        <label for="q18-1">是</label>
                                                    </li>
                                                    <li>
                                                        <input type="radio" name="question_1-18" id="q18-2">
                                                        <label for="q18-2">否</label>
                                                    </li>
                                                </ul>
                                            </div>
                                            <span class="hasChecked">否</span>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="m_title">19.如果是女孩的話，已經有月經了嗎？</div>
                                        <div class="m_info">
                                            <div class="noChecked">
                                                <ul>
                                                    <li>
                                                        <input type="radio" name="question_1-19" id="q19-1">
                                                        <label for="q19-1">是</label>
                                                    </li>
                                                    <li>
                                                        <input type="radio" name="question_1-19" id="q19-2">
                                                        <label for="q19-2">否</label>
                                                    </li>
                                                </ul>
                                            </div>
                                            <span class="hasChecked">否</span>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="m_title">20.若有其他症狀病例，請務必詳實填寫：</div>
                                        <div class="m_info">
                                            <input type="text" placeholder="請說明其他症狀病例與平時處理方式" class="noChecked">
                                            <span class="hasChecked">無</span>
                                        </div>
                                    </li>
                                </ul>
                                <div class="s_title">第二部分：家族病史</div>
                                <ul>
                                    <li>
                                        <div class="m_title">1.在家族中是否曾有人有突然或不明原因的死亡？<span></span></div>
                                        <div class="m_info">
                                            <div class="noChecked">
                                                <ul>
                                                    <li>
                                                        <input type="radio" name="question_2-1" id="q20-1">
                                                        <label for="q20-1">是</label>
                                                    </li>
                                                    <li>
                                                        <input type="radio" name="question_2-1" id="q20-2">
                                                        <label for="q20-2">否</label>
                                                    </li>
                                                </ul>
                                            </div>
                                            <span class="hasChecked">否</span>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="m_title">2.在家族中是否有人因心臟病問題或在50歲以下突然死亡？<span></span></div>
                                        <div class="m_info">
                                            <div class="noChecked">
                                                <ul>
                                                    <li>
                                                        <input type="radio" name="question_2-2" id="q21-1">
                                                        <label for="q21-1">是</label>
                                                    </li>
                                                    <li>
                                                        <input type="radio" name="question_2-2" id="q21-2">
                                                        <label for="q21-2">否</label>
                                                    </li>
                                                </ul>
                                            </div>
                                            <span class="hasChecked">否</span>
                                        </div>
                                    </li>
                                </ul>
                                <div class="s_title">第三部分：曾有病史</div>
                                <ul>
                                    <li>
                                        <div class="m_title">1.是否曾經住院？<span></span></div>
                                        <div class="m_info">
                                            <div class="noChecked">
                                                <ul>
                                                    <li>
                                                        <input type="radio" name="question_3-1" id="q22-1">
                                                        <label for="q22-1">是</label>
                                                    </li>
                                                    <li>
                                                        <input type="radio" name="question_3-1" id="q22-2">
                                                        <label for="q22-2">否</label>
                                                    </li>
                                                    <li>
                                                        <label for="q22-3" class="noInput">；若有，請填寫原因</label>
                                                        <input type="text" id="q22-3" placeholder="請填寫原因">
                                                    </li>
                                                </ul>
                                            </div>
                                            <span class="hasChecked">否</span>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="m_title">2.是否曾經開過刀？<span></span></div>
                                        <div class="m_info">
                                            <div class="noChecked">
                                                <ul>
                                                    <li>
                                                        <input type="radio" name="question_3-2" id="q23-1">
                                                        <label for="q23-1">是</label>
                                                    </li>
                                                    <li>
                                                        <input type="radio" name="question_3-2" id="q23-2">
                                                        <label for="q23-2">否</label>
                                                    </li>
                                                    <li>
                                                        <label for="q23-3" class="noInput">；若有，請填寫原因</label>
                                                        <input type="text" id="q23-3" placeholder="請填寫原因">
                                                    </li>
                                                </ul>
                                            </div>
                                            <span class="hasChecked">否</span>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="m_title">3.頭部是否曾經受過傷？<span></span></div>
                                        <div class="m_info">
                                            <div class="noChecked">
                                                <ul>
                                                    <li>
                                                        <input type="radio" name="question_3-3" id="q24-1">
                                                        <label for="q24-1">是</label>
                                                    </li>
                                                    <li>
                                                        <input type="radio" name="question_3-3" id="q24-2">
                                                        <label for="q24-2">否</label>
                                                    </li>
                                                </ul>
                                            </div>
                                            <span class="hasChecked">否</span>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="m_title">4.是否曾經被撞擊致無意識？<span></span></div>
                                        <div class="m_info">
                                            <div class="noChecked">
                                                <ul>
                                                    <li>
                                                        <input type="radio" name="question_3-4" id="q25-1">
                                                        <label for="q25-1">是</label>
                                                    </li>
                                                    <li>
                                                        <input type="radio" name="question_3-4" id="q25-2">
                                                        <label for="q25-2">否</label>
                                                    </li>
                                                </ul>
                                            </div>
                                            <span class="hasChecked">否</span>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="m_title">5.是否曾在運動過後突然昏倒？<span></span></div>
                                        <div class="m_info">
                                            <div class="noChecked">
                                                <ul>
                                                    <li>
                                                        <input type="radio" name="question_3-5" id="q26-1">
                                                        <label for="q26-1">是</label>
                                                    </li>
                                                    <li>
                                                        <input type="radio" name="question_3-5" id="q26-2">
                                                        <label for="q26-2">否</label>
                                                    </li>
                                                </ul>
                                            </div>
                                            <span class="hasChecked">否</span>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="m_title">6.是否曾在運動過後頭暈目眩？<span></span></div>
                                        <div class="m_info">
                                            <div class="noChecked">
                                                <ul>
                                                    <li>
                                                        <input type="radio" name="question_3-6" id="q27-1">
                                                        <label for="q27-1">是</label>
                                                    </li>
                                                    <li>
                                                        <input type="radio" name="question_3-6" id="q27-2">
                                                        <label for="q27-2">否</label>
                                                    </li>
                                                </ul>
                                            </div>
                                            <span class="hasChecked">否</span>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="m_title">7.是否曾經癲癇發作？<span></span></div>
                                        <div class="m_info">
                                            <div class="noChecked">
                                                <ul>
                                                    <li>
                                                        <input type="radio" name="question_3-7" id="q28-1">
                                                        <label for="q28-1">是</label>
                                                    </li>
                                                    <li>
                                                        <input type="radio" name="question_3-7" id="q28-2">
                                                        <label for="q28-2">否</label>
                                                    </li>
                                                </ul>
                                            </div>
                                            <span class="hasChecked">否</span>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="m_title">8.是否曾有在運動過後胸痛？<span></span></div>
                                        <div class="m_info">
                                            <div class="noChecked">
                                                <ul>
                                                    <li>
                                                        <input type="radio" name="question_3-8" id="q29-1">
                                                        <label for="q29-1">是</label>
                                                    </li>
                                                    <li>
                                                        <input type="radio" name="question_3-8" id="q29-2">
                                                        <label for="q29-2">否</label>
                                                    </li>
                                                </ul>
                                            </div>
                                            <span class="hasChecked">否</span>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="m_title">9.是否曾有背部受傷的問題？<span></span></div>
                                        <div class="m_info">
                                            <div class="noChecked">
                                                <ul>
                                                    <li>
                                                        <input type="radio" name="question_3-9" id="q30-1">
                                                        <label for="q30-1">是</label>
                                                    </li>
                                                    <li>
                                                        <input type="radio" name="question_3-9" id="q30-2">
                                                        <label for="q30-2">否</label>
                                                    </li>
                                                    <li>
                                                        <label for="q30-3" class="noInput">；若有，請填寫原因</label>
                                                        <input type="text" id="q30-3" placeholder="請填寫原因">
                                                    </li>
                                                </ul>
                                            </div>
                                            <span class="hasChecked">否</span>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="m_title">10.是否曾有關節的問題（如膝、腳踝）<span></span></div>
                                        <div class="m_info">
                                            <div class="noChecked">
                                                <ul>
                                                    <li>
                                                        <input type="radio" name="question_3-10" id="q31-1">
                                                        <label for="q31-1">是</label>
                                                    </li>
                                                    <li>
                                                        <input type="radio" name="question_3-10" id="q31-2">
                                                        <label for="q31-2">否</label>
                                                    </li>
                                                    <li>
                                                        <label for="q31-3" class="noInput">；若有，請填寫原因</label>
                                                        <input type="text" id="q31-3" placeholder="請填寫原因">
                                                    </li>
                                                </ul>
                                            </div>
                                            <span class="hasChecked">否</span>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="m_title">11.是否有血友病病史？<span></span></div>
                                        <div class="m_info">
                                            <div class="noChecked">
                                                <ul>
                                                    <li>
                                                        <input type="radio" name="question_3-11" id="q32-1">
                                                        <label for="q32-1">是</label>
                                                    </li>
                                                    <li>
                                                        <input type="radio" name="question_3-11" id="q32-2">
                                                        <label for="q32-2">否</label>
                                                    </li>
                                                </ul>
                                            </div>
                                            <span class="hasChecked">否</span>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="m_title">12.是否有暴食症或厭食症的病史？<span></span></div>
                                        <div class="m_info">
                                            <div class="noChecked">
                                                <ul>
                                                    <li>
                                                        <input type="radio" name="question_3-12" id="q33-1">
                                                        <label for="q33-1">是</label>
                                                    </li>
                                                    <li>
                                                        <input type="radio" name="question_3-12" id="q33-2">
                                                        <label for="q33-2">否</label>
                                                    </li>
                                                </ul>
                                            </div>
                                            <span class="hasChecked">否</span>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="m_title">13.是否有憂鬱症病史？<span></span></div>
                                        <div class="m_info">
                                            <div class="noChecked">
                                                <ul>
                                                    <li>
                                                        <input type="radio" name="question_3-13" id="q34-1">
                                                        <label for="q34-1">是</label>
                                                    </li>
                                                    <li>
                                                        <input type="radio" name="question_3-13" id="q34-2">
                                                        <label for="q34-2">否</label>
                                                    </li>
                                                </ul>
                                            </div>
                                            <span class="hasChecked">否</span>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="m_title">14.是否曾因精神方面問題需要治療、住院或諮商？<span></span></div>
                                        <div class="m_info">
                                            <div class="noChecked">
                                                <ul>
                                                    <li>
                                                        <input type="radio" name="question_3-14" id="q35-1">
                                                        <label for="q35-1">是</label>
                                                    </li>
                                                    <li>
                                                        <input type="radio" name="question_3-14" id="q35-2">
                                                        <label for="q35-2">否</label>
                                                    </li>
                                                </ul>
                                            </div>
                                            <span class="hasChecked">否</span>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div class="btnBox">
                                <a href="my-order.php">查看訂單</a>
                                <a href="javascript:;" class="noChecked">送出</a>
                            </div>
                        </div>
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
    <script src="dist/js/survey.js"></script>
</body>

</html>