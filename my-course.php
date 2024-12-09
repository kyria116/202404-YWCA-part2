 <?php include "quote/template/head.php"; ?>
<link rel="stylesheet" href="dist/css/member.css">
</head>

<body class="lang_tw memberInfo courseList">
    <?php
        include "quote/template/added.php";
        include "quote/template/nav.php";
    ?>
    <main>
        <div class="kv">
            <img src="dist/images/kv.jpg" class="pc">
            <img src="dist/images/kv_mb.jpg" class="mo"> 
            <div class="pageTitle">我的課程</div>
        </div>
        <div class="pagePadding">
            <div class="container">
                <div class="pc tabBtn">
                    <ul>
                        <li>
                            <a href="member-info.php">會員資料</a>
                        </li>
                        <li>
                            <a href="students-list.php">學員資料</a>
                        </li>
                        <li class="active">
                            <a href="javascript:;">我的課程</a>
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
                        <option value="students-list.php">學員資料</option>
                        <option value="javascript:;" selected>我的課程</option> 
                        <option value="my-order.php">我的訂單</option>
                        <option value="my-collection.php">我的收藏</option>
                    </select>
                </div>
                <ul class="headerTitle">
                    <li>已報名課程/活動</li>
                    <li>報名資料</li>
                    <li>參加學員</li>
                </ul>
                <ul class="items">
                    <li>
                        <!-- 
                            圖片尺寸 
                            250 * 162 (桌手機共用同一張)
                        -->
                        <div class="wrap_0 img">
                            <img src="dist/images/img.png">
                        </div>
                        <div class="box">
                            <div class="wrap_1">
                                <div class="txtBox">
                                    <div class="topTxtBox">
                                        <div class="course_date">2023/07/11 - 2023/07/13</div>
                                        <div class="course_title">小狼崇林奇譚季</div>
                                    </div>
                                    <div class="course_location">
                                        <img src="dist/images/common/map.png">
                                        <div class="location">
                                            宜蘭縣頭城鎮協天路288號
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- 兩種狀態
                                尚未填寫 writeTxt
                                已完成 finishTxt -->
                            <div class="wrap_2 writeTxt">
                                <span class="mo_991">報名資料</span>
                                尚未填寫<span>2</span>
                            </div>
                            <div class="wrap_3">
                                <span class="mo_991">參加學員</span>
                                <span class="name">許大寶</span>
                                <a href="my-course-detail.php"  class="btn">
                                    <span>查看</span>
                                </a>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="wrap_0 img">
                            <img src="dist/images/img.png">
                        </div>
                        <div class="box">
                            <div class="wrap_1">
                                <div class="txtBox">
                                    <div class="topTxtBox">
                                        <div class="course_date">2023/07/11 - 2023/07/13</div>
                                        <div class="course_title">小狼崇林奇譚季</div>
                                    </div>
                                    <div class="course_location">
                                        <img src="dist/images/common/map.png">
                                        <div class="location">
                                            宜蘭縣頭城鎮協天路288號
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="wrap_2 finishTxt">
                                <span class="mo_991">報名資料</span>
                                已完成<span>2</span>
                            </div>
                            <div class="wrap_3">
                                <span class="mo_991">參加學員</span>
                                <span class="name">許大寶</span>
                                <a href="my-course-detail.php"  class="btn">
                                    <span>查看</span>
                                </a>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="wrap_0 img">
                            <img src="dist/images/img.png">
                        </div>
                        <div class="box">
                            <div class="wrap_1">
                                <div class="txtBox">
                                    <div class="topTxtBox">
                                        <div class="course_date">2023/07/11 - 2023/07/13</div>
                                        <div class="course_title">小狼崇林奇譚季</div>
                                    </div>
                                    <div class="course_location">
                                        <img src="dist/images/common/map.png">
                                        <div class="location">
                                            宜蘭縣頭城鎮協天路288號
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="wrap_2 writeTxt">
                                <span class="mo_991">報名資料</span>
                                尚未填寫<span>2</span>
                            </div>
                            <div class="wrap_3">
                                <span class="mo_991">參加學員</span>
                                <span class="name">許大寶</span>
                                <a href="my-course-detail.php"  class="btn">
                                    <span>查看</span>
                                </a>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="wrap_0 img">
                            <img src="dist/images/img.png">
                        </div>
                        <div class="box">
                            <div class="wrap_1">
                                <div class="txtBox">
                                    <div class="topTxtBox">
                                        <div class="course_date">2023/07/11 - 2023/07/13</div>
                                        <div class="course_title">小狼崇林奇譚季</div>
                                    </div>
                                    <div class="course_location">
                                        <img src="dist/images/common/map.png">
                                        <div class="location">
                                            宜蘭縣頭城鎮協天路288號
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="wrap_2 writeTxt">
                                <span class="mo_991">報名資料</span>
                                尚未填寫<span>2</span>
                            </div>
                            <div class="wrap_3">
                                <span class="mo_991">參加學員</span>
                                <span class="name">許大寶</span>
                                <a href="my-course-detail.php"  class="btn">
                                    <span>查看</span>
                                </a>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="wrap_0 img">
                            <img src="dist/images/img.png">
                        </div>
                        <div class="box">
                            <div class="wrap_1">
                                <div class="txtBox">
                                    <div class="topTxtBox">
                                        <div class="course_date">2023/07/11 - 2023/07/13</div>
                                        <div class="course_title">小狼崇林奇譚季</div>
                                    </div>
                                    <div class="course_location">
                                        <img src="dist/images/common/map.png">
                                        <div class="location">
                                            宜蘭縣頭城鎮協天路288號
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="wrap_2 writeTxt">
                                <span class="mo_991">報名資料</span>
                                尚未填寫<span>2</span>
                            </div>
                            <div class="wrap_3">
                                <span class="mo_991">參加學員</span>
                                <span class="name">許大寶</span>
                                <a href="my-course-detail.php"  class="btn">
                                    <span>查看</span>
                                </a>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="wrap_0 img">
                            <img src="dist/images/img.png">
                        </div>
                        <div class="box">
                            <div class="wrap_1">
                                <div class="txtBox">
                                    <div class="topTxtBox">
                                        <div class="course_date">2023/07/11 - 2023/07/13</div>
                                        <div class="course_title">小狼崇林奇譚季</div>
                                    </div>
                                    <div class="course_location">
                                        <img src="dist/images/common/map.png">
                                        <div class="location">
                                            宜蘭縣頭城鎮協天路288號
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="wrap_2 writeTxt">
                                <span class="mo_991">報名資料</span>
                                尚未填寫<span>2</span>
                            </div>
                            <div class="wrap_3">
                                <span class="mo_991">參加學員</span>
                                <span class="name">許大寶</span>
                                <a href="my-course-detail.php"  class="btn">
                                    <span>查看</span>
                                </a>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="wrap_0 img">
                            <img src="dist/images/img.png">
                        </div>
                        <div class="box">
                            <div class="wrap_1">
                                <div class="txtBox">
                                    <div class="topTxtBox">
                                        <div class="course_date">2023/07/11 - 2023/07/13</div>
                                        <div class="course_title">小狼崇林奇譚季</div>
                                    </div>
                                    <div class="course_location">
                                        <img src="dist/images/common/map.png">
                                        <div class="location">
                                            宜蘭縣頭城鎮協天路288號
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="wrap_2 writeTxt">
                                <span class="mo_991">報名資料</span>
                                尚未填寫<span>2</span>
                            </div>
                            <div class="wrap_3">
                                <span class="mo_991">參加學員</span>
                                <span class="name">許大寶</span>
                                <a href="my-course-detail.php"  class="btn">
                                    <span>查看</span>
                                </a>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="wrap_0 img">
                            <img src="dist/images/img.png">
                        </div>
                        <div class="box">
                            <div class="wrap_1">
                                <div class="txtBox">
                                    <div class="topTxtBox">
                                        <div class="course_date">2023/07/11 - 2023/07/13</div>
                                        <div class="course_title">小狼崇林奇譚季</div>
                                    </div>
                                    <div class="course_location">
                                        <img src="dist/images/common/map.png">
                                        <div class="location">
                                            宜蘭縣頭城鎮協天路288號
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="wrap_2 writeTxt">
                                <span class="mo_991">報名資料</span>
                                尚未填寫<span>2</span>
                            </div>
                            <div class="wrap_3">
                                <span class="mo_991">參加學員</span>
                                <span class="name">許大寶</span>
                                <a href="my-course-detail.php"  class="btn">
                                    <span>查看</span>
                                </a>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="wrap_0 img">
                            <img src="dist/images/img.png">
                        </div>
                        <div class="box">
                            <div class="wrap_1">
                                <div class="txtBox">
                                    <div class="topTxtBox">
                                        <div class="course_date">2023/07/11 - 2023/07/13</div>
                                        <div class="course_title">小狼崇林奇譚季</div>
                                    </div>
                                    <div class="course_location">
                                        <img src="dist/images/common/map.png">
                                        <div class="location">
                                            宜蘭縣頭城鎮協天路288號
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="wrap_2 writeTxt">
                                <span class="mo_991">報名資料</span>
                                尚未填寫<span>2</span>
                            </div>
                            <div class="wrap_3">
                                <span class="mo_991">參加學員</span>
                                <span class="name">許大寶</span>
                                <a href="my-course-detail.php"  class="btn">
                                    <span>查看</span>
                                </a>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="wrap_0 img">
                            <img src="dist/images/img.png">
                        </div>
                        <div class="box">
                            <div class="wrap_1">
                                <div class="txtBox">
                                    <div class="topTxtBox">
                                        <div class="course_date">2023/07/11 - 2023/07/13</div>
                                        <div class="course_title">小狼崇林奇譚季</div>
                                    </div>
                                    <div class="course_location">
                                        <img src="dist/images/common/map.png">
                                        <div class="location">
                                            宜蘭縣頭城鎮協天路288號
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="wrap_2 writeTxt">
                                <span class="mo_991">報名資料</span>
                                尚未填寫<span>2</span>
                            </div>
                            <div class="wrap_3">
                                <span class="mo_991">參加學員</span>
                                <span class="name">許大寶</span>
                                <a href="my-course-detail.php"  class="btn">
                                    <span>查看</span>
                                </a>
                            </div>
                        </div>
                    </li>
                </ul>
                <?php
                    include "quote/template/page_list.php";
                ?>
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