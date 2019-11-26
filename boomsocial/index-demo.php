<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>

        Home Page | yaloo.me - social network </title>

    <!--
    ===========META====================-->
    <meta name="description" content="social network"/>
    <meta name="keywords" content="social network"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0"/>
    <meta name="robots" content="index,follow"/>

    <meta property="og:site_name" content="yaloo.me - social network"/>
    <meta property="og:title" content="Home Page"/>
    <meta property="og:url" content="http://yaloo.me/home"/>
    <link rel="canonical" href="http://yaloo.me/home"/>
    <meta property="og:image" content="http://yaloo.me/img/og-image.png"/>
    <!--
===========META====================-->


    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/icon?family=Material+Icons">

    <!--
    ===========STYLE====================-->
    <link href="/favicon.ico" type="image/x-icon" rel="icon"/>
    <link href="/favicon.ico" type="image/x-icon" rel="shortcut icon"/>
    <link rel="stylesheet" type="text/css" href="/css/bootstrap.3.2.0/css/bootstrap.min.css?v=4"/>
    <link rel="stylesheet" type="text/css" href="/css/global/typehead/bootstrap-tagsinput.css?v=4"/>
    <link rel="stylesheet" type="text/css" href="http://yaloo.me/min-css/eb3fec40df0e69f0009e5d15637189da?v=4">    <!--
    ===========END STYLE====================-->
</head>
<body class="default-body  " id="page_home-index">

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-141816963-1"></script>
<script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
        dataLayer.push(arguments);
    }

    gtag('js', new Date());

    gtag('config', 'UA-141816963-1');
</script>

<div class="container header-wrapper">
    <div class="bar-content">
    </div>
</div>
<div class="navbar navbar-fixed-top sl-navbar" role="navigation" id="header">

    <div class="header-bg"></div>
    <div class="container full_header">
        <div class="hidden-xs hidden-sm">
            <div class="logo-default">
                <a href="/home"><img src="http://yaloo.me/uploads/At53M9Bs1d4hqRP.png" alt="yaloo.me - social network"></a>
            </div>
        </div>
        <div id="fb-root"></div>
        <div class='notify_group'>
            <div class="btn-group">

                <div class="dropdown notify_content">
                    <a class="dropdown-toggle " href="#" id="notificationDropdown" data-toggle="dropdown">
                        <i class="material-icons">notifications</i>


                    </a>

                    <ul class="dropdown-menu notification_list keep_open" id="notifications_list" role="menu"
                        aria-labelledby="dropdownMenu1">

                    </ul>

                </div>
                <!-- END GET NOTIFICATION -->
            </div>

            <div class="btn-group">
                <!-- GET MSG -->
                <div class="dropdown notify_content">
                    <a class="dropdown-toggle " href="#" id="conversationDropdown" data-toggle="dropdown">
                        <i class="material-icons">question_answer</i>


                    </a>
                    <ul class="dropdown-menu" id="conversation_list" role="menu" aria-labelledby="dropdownMenu1">
                    </ul>

                </div>
                <!-- END GET MSG -->
            </div>
        </div>
        <div id="mobi_menu">
            <div class="visible-xs visible-sm closeButton">
                <button id="closeMenuMain" type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span>
                    <span class="sr-only">Close</span></button>
            </div>
            <!--Userbox-->
            <div class="navbar-form navbar-right main-menu-content">


                <!-- GET NOTIFICATION -->
                <div class="global-search"><i class="material-icons">search</i>
                    <input type="text" id="global-search" placeholder="Tìm kiếm">
                    <ul id="display-suggestion" style="display: none" class="suggestionInitSlimScroll">

                    </ul>
                </div>


                <div class='hidden-xs hidden-sm menu_large'>

                    <div class="btn-group menu_acc_content">
                        <a href="/users/view/6">
                            <img src="http://yaloo.me/uploads/users/avatar/6/50_square_e79cbba76054e014de73822cfeab2b04.jpg?2849"
                                 width="45px" id="member-avatar" alt="Đức Khánh" prefix="50_square"/> </a>
                        <a class="dropdown-user-box dropdown-toggle" data-toggle="dropdown" href="#">
                            <i class="material-icons">expand_more</i>
                        </a>

                        <ul class="dropdown-menu" role="menu">
                            <span class="arr-down"></span>
                            <li><a href="/users/profile">Thông tin cá nhân</a></li>

                            <li><a href="/users/avatar">Đổi ảnh đại diện</a></li>

                            <li><a href="/home/index/tab:invite-friends">Mời bạn bè</a>
                            <li><a href="/users/do_logout">Đăng xuất</a></li>
                        </ul>
                        <div id="gSignOutWrapper" style="display:none">
                            <div id="customBtn" class="customGPlusSignIn">
                                <span class="icon"></span>
                                <span class="buttonText">Sign out</span>
                            </div>
                        </div>
                    </div>


                </div>

            </div>

            <!--End  userbox-->
            <a class="btn_open_large" href="javascript:void(0)" onclick="$('.open_large_menu').toggle();return false;">
                <span class='arr-menu'></span>
                <span class='line'></span>
                <span class='line'></span>
                <span class='line'></span>
            </a>
            <div class="open_large_menu">
                <ul class="nav navbar-nav menu_top_list horizontal" id="main_menu">
                    <li class=""><a href="/blogs" no_replace_ssl="1" title="" class="" target=""><i
                                    class="material-icons"></i>Nhật Ký</a></li>
                    <li class=""><a href="/documents" no_replace_ssl="1" title="" class="" target=""><i
                                    class="material-icons"></i>Sách</a></li>
                    <li class=""><a href="/who_near_me" no_replace_ssl="1" title="" class="" target=""><i
                                    class="material-icons"></i>Tìm Bạn Quanh Đây</a></li>
                    <li class=""><a href="/events" no_replace_ssl="1" title="" class="" target=""><i
                                    class="material-icons"></i>Sự Kiện</a></li>
                    <li class=""><a href="/users" no_replace_ssl="1" title="" class="" target=""><i
                                    class="material-icons"></i>Thành Viên</a></li>
                    <li class=""><a href="/groups" no_replace_ssl="1" title="" class="" target=""><i
                                    class="material-icons"></i>Nhóm/Hội</a></li>
                    <li class=""><a href="/photos" no_replace_ssl="1" title="" class="" target=""><i
                                    class="material-icons"></i>Ảnh</a></li>
                    <li class=""><a href="/videos" no_replace_ssl="1" title="" class="" target=""><i
                                    class="material-icons"></i>Videos</a></li>
                    <li class=""><a href="/indeeds" no_replace_ssl="1" title="" class="" target=""><i
                                    class="material-icons"></i>Tìm Việc Làm</a></li>
                    <li class=""><a href="/livenewss" no_replace_ssl="1" title="" class="" target=""><i
                                    class="material-icons"></i>Tin Tức</a></li>
                </ul>
            </div>
            <!--Menu acc-->
            <div class='visible-xs visible-sm'>
                <div class='title_small_list'>
                    Tài khoản
                </div>
                <ul class="menu-account menu_top_list">
                    <li><a href="/users/profile">Thông tin cá nhân</a></li>
                    <li><a href="/users/avatar">Đổi ảnh đại diện</a></li>


                    <li><a href="/home/index/tab:invite-friends">Mời bạn bè</a>
                    <li><a href="/users/do_logout">Đăng xuất</a></li>
                </ul>
            </div>
        </div>
    </div>
</div>
<div class="navbar navbar-fixed-top sl-navbar" role="navigation" id="header_mobi">
    <div class="container-fluid">
        <a id="openMenu" href="#" data-target="#mobi_menu">
            <span class='arr-menu'></span>
            <span class='line'></span>
            <span class='line'></span>
            <span class='line'></span>
        </a>
        <div class="logo-default">
            <a href="/home"><img src="http://yaloo.me/uploads/At53M9Bs1d4hqRP.png" alt="yaloo.me - social network"></a>
        </div>
        <a href="http://yaloo.me/users/view/6" class="ava_mobi moocore_tooltip_link" width="45px" alt="Đức Khánh"
           prefix="100_square" data-item_id="6" data-item_type="user"><img
                    src="http://yaloo.me/uploads/users/avatar/6/100_square_e79cbba76054e014de73822cfeab2b04.jpg?5183"
                    alt="Đức Khánh" title=""/></a>

    </div>
</div>

<div class="container " id="content-wrapper">


    <div class="row">

        <div id="leftnav" class="sl-rsp-modal col-md-3" data-keyboard="false" data-backdrop="static">
            <div class="visible-xs visible-sm closeButton">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span
                            class="sr-only">Close</span></button>
            </div>
            <div class="bar-content">

                <div id="browse">
                    <div class="summary-info p_15">
                        <a href="/users/view/6" class="no-ajax">
                            <img src="http://yaloo.me/uploads/users/avatar/6/50_square_e79cbba76054e014de73822cfeab2b04.jpg?7132"
                                 prefix="50_square" class="ava_home" width="50" alt=""/> </a>
                        <div class="user-info-home">
                            <h3 class="info-home-name" style="padding: 0px;">
                                <a class="no-ajax" href="/users/view/6">
                                    Đức Khánh </a>
                            </h3>
                            <a class="no-ajax" href="/users/profile">Sửa hồ sơ</a>
                        </div>
                    </div>
                    <div class="clear"></div>
                    <ul class="list2 block-body menu_top_list">
                        <li class="current"><a class="no-ajax" id="whats_new" data-url="/activities/ajax_browse/home"
                                               rel="home-content" href="/home/index"><i class="material-icons">library_books</i>
                                Có gì mới?</a></li>
                        <li><a id="notifications" data-url="/notifications/ajax_show/home" rel="home-content"
                               href="/home/index/tab:notifications"><i class="material-icons">notifications</i> Thông
                                báo <span id="notification_count" class="badge_counter">0</span></a></li>
                        <li><a id="messages" data-url="/conversations/ajax_browse" rel="home-content"
                               href="/home/index/tab:messages"><i class="material-icons">email</i> Tin nhắn <span
                                        class="badge_counter">0</span></a></li>
                        <li><a id="my-friends" data-url="/users/ajax_browse/home" rel="home-content"
                               href="/home/index/tab:my-friends"><i class="material-icons">group</i> Bạn bè <span
                                        id="friend_count" class="badge_counter">13</span></a></li>
                        <li><a id="invite-friends" data-url="/friends/ajax_invite" rel="home-content"
                               href="/home/index/tab:invite-friends"><i class="material-icons">share</i> Mời bạn bè</a>
                        </li>
                        <li style="display:none"><a id="friend-requests" data-url="/friends/ajax_requests"
                                                    rel="home-content" href="/home/index/tab:friend-requests"><i
                                        class="material-icons">person_add</i> Lời mời kết bạn <span
                                        class="badge_counter">0</span></a></li>

                        <li><a id="my-events" data-url="/events/browse/home" rel="home-content"
                               href="/home/index/tab:my-events"><i class="material-icons">event</i> Sự kiện sắp đến
                                <span class="badge_counter">0</span></a></li>

                        <li><a id="my-groups" data-url="/groups/browse/home" rel="home-content"
                               href="/home/index/tab:my-groups"><i class="material-icons">group_work</i> Nhóm của tôi
                                <span class="badge_counter">2</span></a></li>

                        <li><a id="my-blogs" data-url="/blogs/browse/home" rel="home-content"
                               href="/home/index/tab:my-blogs"><i class="material-icons">library_books</i> Các blog của
                                tôi <span class="badge_counter">7</span></a></li>

                        <li><a id="my-photos" data-url="/albums/browse/home" rel="home-content"
                               href="/home/index/tab:my-photos"><i class="material-icons">photo</i> Ảnh của tôi <span
                                        class="badge_counter">9</span></a></li>

                        <li><a id="my-videos" data-url="/videos/browse/home" rel="home-content"
                               href="/home/index/tab:my-videos"><i class="material-icons">videocam</i> Video của tôi
                                <span class="badge_counter">0</span></a></li>

                        <li><a id="my-topics" data-url="/topics/browse/home" rel="home-content"
                               href="/home/index/tab:my-topics"><i class="material-icons">chat</i> Chủ đề của tôi <span
                                        class="badge_counter">0</span></a></li>
                        <li><a id="my-documents" data-url="/documents/browse/home" rel="home-content"
                               href="/home/index/tab:my-documents"><i class="material-icons">book</i> Tai liệu của tôi
                                <span class="badge_counter">7</span></a></li>
                    </ul>
                </div>


                <div class="box2">
                    <h3>
                        My Joined Groups </h3>
                    <div class="box_content">
                        <div class="group_item list-item-inline myJoin-group">
                            <a href="/groups/view/6/tai-liệu-ptit">
                                <img width="70" alt="Tài liệu PTIT" src="http://yaloo.me/group/img/noimage/group.png"
                                     class="img_wrapper2">
                            </a>
                            <div class="group_detail">
                                <div class="title-list">
                                    <a href="/groups/view/6/tai-liệu-ptit">Tài liệu PTIT</a>
                                </div>
                                <div>
                                    1 thành viên
                                </div>
                            </div>
                            <div class='clear'></div>
                        </div>
                        <div class="group_item list-item-inline myJoin-group">
                            <a href="/groups/view/1/cau-lạc-bộ-thanh-nien-khởi-nghiệp-ha-nội">
                                <img width="70" alt="Câu lạc bộ thanh niên khởi nghiệp Hà Nội"
                                     src="http://yaloo.me/uploads/groups/photo/1/75_square_83c61a393b04293f08ccfb52fcbfce96.jpg"
                                     class="img_wrapper2">
                            </a>
                            <div class="group_detail">
                                <div class="title-list">
                                    <a href="/groups/view/1/cau-lạc-bộ-thanh-nien-khởi-nghiệp-ha-nội">Câu lạc bộ thanh
                                        niên khởi nghiệ...</a>
                                </div>
                                <div>
                                    3 thành viên
                                </div>
                            </div>
                            <div class='clear'></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div id="right" class="sl-rsp-modal col-md-3 pull-right" data-keyboard="false" data-backdrop="static">
            <div class="visible-xs visible-sm closeButton">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span> <span
                            class="sr-only">Close</span></button>
            </div>
            <div class="bar-content">

                <div class="box2">
                    <h3><a href="/users/index/online:1">
                            Who's Online </a>
                    </h3>
                    <div class="box_content box_online_user">
                        <ul class="list_block">
                            <li>
                                <a href="http://yaloo.me/users/view/6" prefix="50_square" data-item_id="6"
                                   data-item_type="user" class="moocore_tooltip_link"><img
                                            src="http://yaloo.me/uploads/users/avatar/6/50_square_e79cbba76054e014de73822cfeab2b04.jpg?2945"
                                            class="img_wrapper2 user_avatar_large " title="" alt="Đức Khánh"/></a></li>
                        </ul>
                        <div class='clear'></div>
                        <div class='p_10'>
                            Hiện tại đang có 1 thành viên trực tuyến
                        </div>
                    </div>
                </div>
                <div class="box2 suggestion_block">
                    <h3>People You Might Know</h3>
                    <div class="box_content">
                        <ul class="list6">
                            <li><a href="http://yaloo.me/users/view/40" prefix="100_square" data-item_id="40"
                                   data-item_type="user" class="moocore_tooltip_link"><img
                                            src="http://yaloo.me/uploads/users/avatar/40/100_square_9f4c8155fa19e77cf90a40ac998d4e0e.jpg?7126"
                                            alt="Hoàng Hiệp" title=""/></a>
                                <div class="people_info">
                                    <div>
                                        <a href="/users/view/40" class="moocore_tooltip_link" data-item_type="user"
                                           data-item_id="40"><b>Hoàng Hiệp</b></a></div>
                                    <div>1 Bạn chung</div>
                                    <div class="request_add_friend">
                                        <i class="material-icons">person_add</i>
                                        <a id='addFriend_40' href='/friends/ajax_add/40' data-target='#themeModal'
                                           data-toggle='modal' class='' title='Gửi Hoàng Hiệp yêu cầu kết bạn'
                                           data-dismiss='' data-backdrop='true' style=''>Thêm làm bạn bè</a>
                                    </div>
                                </div>
                            </li>
                            <li><a href="http://yaloo.me/users/view/65" prefix="100_square" data-item_id="65"
                                   data-item_type="user" class="moocore_tooltip_link"><img
                                            src="http://yaloo.me/uploads/users/avatar/65/100_square_5ef26119ed76038fd2935b8a6123cec6.jpg?5478"
                                            alt="Hiệp" title=""/></a>
                                <div class="people_info">
                                    <div>
                                        <a href="/users/view/65" class="moocore_tooltip_link" data-item_type="user"
                                           data-item_id="65"><b>Hiệp</b></a></div>
                                    <div>1 Bạn chung</div>
                                    <div class="request_add_friend">
                                        <i class="material-icons">person_add</i>
                                        <a id='addFriend_65' href='/friends/ajax_add/65' data-target='#themeModal'
                                           data-toggle='modal' class='' title='Gửi Hiệp yêu cầu kết bạn' data-dismiss=''
                                           data-backdrop='true' style=''>Thêm làm bạn bè</a>
                                    </div>
                                </div>
                            </li>
                            <li><a href="http://yaloo.me/users/view/11" prefix="100_square" data-item_id="11"
                                   data-item_type="user" class="moocore_tooltip_link"><img
                                            src="http://yaloo.me/uploads/users/avatar/11/100_square_01cb8b85d89b7a5ab6933f94d54367cd.jpg?7833"
                                            alt="Ngô Mạnh Cường" title=""/></a>
                                <div class="people_info">
                                    <div>
                                        <a href="/users/view/11" class="moocore_tooltip_link" data-item_type="user"
                                           data-item_id="11"><b>Ngô Mạnh Cường</b></a></div>
                                    <div>1 Bạn chung</div>
                                    <div class="request_add_friend">
                                        <i class="material-icons">person_add</i>
                                        <a id='addFriend_11' href='/friends/ajax_add/11' data-target='#themeModal'
                                           data-toggle='modal' class='' title='Gửi Ngô Mạnh Cường yêu cầu kết bạn'
                                           data-dismiss='' data-backdrop='true' style=''>Thêm làm bạn bè</a>
                                    </div>
                                </div>
                            </li>
                            <li><a href="http://yaloo.me/users/view/27" prefix="100_square" data-item_id="27"
                                   data-item_type="user" class="moocore_tooltip_link"><img
                                            src="http://yaloo.me/uploads/users/avatar/27/100_square_f08b7a4a3c097fec30a0eb6c8fa5cf76.jpg?6998"
                                            alt="Chả có nhẽ" title=""/></a>
                                <div class="people_info">
                                    <div>
                                        <a href="/users/view/27" class="moocore_tooltip_link" data-item_type="user"
                                           data-item_id="27"><b>Chả có nhẽ</b></a></div>
                                    <div>1 Bạn chung</div>
                                    <div class="request_add_friend">
                                        <i class="material-icons">person_add</i>
                                        <a id='addFriend_27' href='/friends/ajax_add/27' data-target='#themeModal'
                                           data-toggle='modal' class='' title='Gửi Chả có nhẽ yêu cầu kết bạn'
                                           data-dismiss='' data-backdrop='true' style=''>Thêm làm bạn bè</a>
                                    </div>
                                </div>
                            </li>
                            <li><a href="http://yaloo.me/users/view/15" prefix="100_square" data-item_id="15"
                                   data-item_type="user" class="moocore_tooltip_link"><img
                                            src="http://yaloo.me/uploads/users/avatar/15/100_square_7579f3cf6be0c6a90017fa0ce7ebd10e_tmp.jpg?2224"
                                            alt="Nguyễn Viết Hoan" title=""/></a>
                                <div class="people_info">
                                    <div>
                                        <a href="/users/view/15" class="moocore_tooltip_link" data-item_type="user"
                                           data-item_id="15"><b>Nguyễn Viết Hoan</b></a></div>
                                    <div>1 Bạn chung</div>
                                    <div class="request_add_friend">
                                        <i class="material-icons">person_add</i>
                                        <a id='addFriend_15' href='/friends/ajax_add/15' data-target='#themeModal'
                                           data-toggle='modal' class='' title='Gửi Nguyễn Viết Hoan yêu cầu kết bạn'
                                           data-dismiss='' data-backdrop='true' style=''>Thêm làm bạn bè</a>
                                    </div>
                                </div>
                            </li>
                        </ul>

                    </div>
                </div>
                <div class="box2">
                    <h3>Popular Videos</h3>
                    <div class="box_content">
                        <ul class="video_block">
                            <li class="col-md-4">
                                <div class="item-content">
                                    <a class="video_cover"
                                       href="/videos/view/9/10-cach-kiếm-them-tiền-tại-nha-chuyện-đi-lam-giang-ơi">
                                        <div>
                                            <img src='http://yaloo.me/uploads/videos/thumb/9/250_8843543eba980e568265b39e20f7e133.jpg'/>
                                        </div>
                                    </a>
                                    <div class="video_info">
                                        <a href="/videos/view/9/10-cach-kiếm-them-tiền-tại-nha-chuyện-đi-lam-giang-ơi">10
                                            CÁCH KIẾM THÊM TIỀN TẠI NHÀ | Chuyện đi làm | Giang Ơi</a>
                                        <div class="extra_info">
                                            0 Thích
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="col-md-4">
                                <div class="item-content">
                                    <a class="video_cover"
                                       href="/videos/view/10/khong-tiền-khong-mối-quan-hệ-vẫn-giau-10-bai-học-kinh-doanh-kinh-điển">
                                        <div>
                                            <img src='http://yaloo.me/uploads/videos/thumb/10/250_eaef234f23ec617370115d14cb90f549.jpg'/>
                                        </div>
                                    </a>
                                    <div class="video_info">
                                        <a href="/videos/view/10/khong-tiền-khong-mối-quan-hệ-vẫn-giau-10-bai-học-kinh-doanh-kinh-điển">Không
                                            Tiền Không Mối Quan Hệ vẫn Giàu 10 Bài Học Kinh Doanh Kinh Điển!</a>
                                        <div class="extra_info">
                                            0 Thích
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="col-md-4">
                                <div class="item-content">
                                    <a class="video_cover"
                                       href="/videos/view/11/cai-nhau-với-con-gai-va-những-pha-phản-dame-kho-đỡ-talkshow-50">
                                        <div>
                                            <img src='http://yaloo.me/uploads/videos/thumb/11/250_5f158172bfc7e8c01d26dcd0fc2b1be5.jpg'/>
                                        </div>
                                    </a>
                                    <div class="video_info">
                                        <a href="/videos/view/11/cai-nhau-với-con-gai-va-những-pha-phản-dame-kho-đỡ-talkshow-50">CÃI
                                            NHAU VỚI CON GÁI VÀ NHỮNG PHA PHẢN DAME KHÓ ĐỠ : Talkshow 50</a>
                                        <div class="extra_info">
                                            0 Thích
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="col-md-4">
                                <div class="item-content">
                                    <a class="video_cover" href="/videos/view/12/90-khong-hiểu-gi-về-tiền-kể-cả-bạn">
                                        <div>
                                            <img src='http://yaloo.me/uploads/videos/thumb/12/250_80760d6557227f051f74e978dad02939.jpg'/>
                                        </div>
                                    </a>
                                    <div class="video_info">
                                        <a href="/videos/view/12/90-khong-hiểu-gi-về-tiền-kể-cả-bạn">90% Không Hiểu Gì
                                            Về Tiền (Kể Cả bạn)</a>
                                        <div class="extra_info">
                                            0 Thích
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <div class="clear"></div>
                        </ul>
                    </div>
                </div>
                <div class="box2">
                    <h3>Popular Blogs</h3>
                    <div class="box_content">

                        <ul class="blog-block">
                            <li class="list-item-inline list-item-inline-text">
                                <a href="/blogs/view/102/corum-admirals-cup-black-challenge-44-replica-watch-753-691-98-f371-aa">
                                    <img width="70"
                                         src="http://yaloo.me/uploads/blogs/thumbnail/102/75_square_15ff359067145ed2b10a2367c22ffd73.jpg"
                                         class="img_wrapper2 user_list">
                                </a>
                                <div class="blog_detail">
                                    <div class="title-list">
                                        <a href="/blogs/view/102/corum-admirals-cup-black-challenge-44-replica-watch-753-691-98-f371-aa">Corum
                                            Admirals Cup Black Challenge 44 Replica watch 753.691.98/F371 AA12</a>

                                    </div>
                                    <div class="like_count">
                                        0 Bình luận .
                                        0 Thích
                                    </div>
                                </div>
                            </li>
                            <li class="list-item-inline list-item-inline-text">
                                <a href="/blogs/view/103/guide-to-skins-and-crates-in-cs-go">
                                    <img width="70"
                                         src="http://yaloo.me/uploads/blogs/thumbnail/103/75_square_13e8bd15bd286e13e6bc1ed82ed5763d.jpg"
                                         class="img_wrapper2 user_list">
                                </a>
                                <div class="blog_detail">
                                    <div class="title-list">
                                        <a href="/blogs/view/103/guide-to-skins-and-crates-in-cs-go">Guide to Skins and
                                            Crates in CS:GO</a>

                                    </div>
                                    <div class="like_count">
                                        0 Bình luận .
                                        0 Thích
                                    </div>
                                </div>
                            </li>
                            <li class="list-item-inline list-item-inline-text">
                                <a href="/blogs/view/105/while-the-annoy-weapons-will-be-counterbalanced-like-rock">
                                    <img width="70"
                                         src="http://yaloo.me/uploads/blogs/thumbnail/105/75_square_f292a003247b8f99b3394d526d98d8f3.jpg"
                                         class="img_wrapper2 user_list">
                                </a>
                                <div class="blog_detail">
                                    <div class="title-list">
                                        <a href="/blogs/view/105/while-the-annoy-weapons-will-be-counterbalanced-like-rock">While
                                            the annoy weapons will be counterbalanced like rock</a>

                                    </div>
                                    <div class="like_count">
                                        0 Bình luận .
                                        0 Thích
                                    </div>
                                </div>
                            </li>
                            <li class="list-item-inline list-item-inline-text">
                                <a href="/blogs/view/106/ducks-canadiens-early-morning-questions-2-ways-ahead-just-one-phase-ba">
                                    <img width="70" src="http://yaloo.me/blog/img/noimage/blog.png"
                                         class="img_wrapper2 user_list">
                                </a>
                                <div class="blog_detail">
                                    <div class="title-list">
                                        <a href="/blogs/view/106/ducks-canadiens-early-morning-questions-2-ways-ahead-just-one-phase-ba">Ducks
                                            @ Canadiens Early morning Questions: 2 Ways Ahead, Just one Phase Back
                                            again</a>

                                    </div>
                                    <div class="like_count">
                                        0 Bình luận .
                                        0 Thích
                                    </div>
                                </div>
                            </li>
                            <li class="list-item-inline list-item-inline-text">
                                <a href="/blogs/view/107/lightning-battle-isles-7-6-within-just-a-wild-sport-inside-of-brooklyn">
                                    <img width="70" src="http://yaloo.me/blog/img/noimage/blog.png"
                                         class="img_wrapper2 user_list">
                                </a>
                                <div class="blog_detail">
                                    <div class="title-list">
                                        <a href="/blogs/view/107/lightning-battle-isles-7-6-within-just-a-wild-sport-inside-of-brooklyn">Lightning
                                            battle Isles 7-6 within just a wild sport inside of Brooklyn</a>

                                    </div>
                                    <div class="like_count">
                                        0 Bình luận .
                                        0 Thích
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="box2 languagebox">
                    <h3 class='visible-xs visible-sm'>Chủ đề </h3>

                    <div class="box_content">
                        <ul>

                            <li>
                                Ngôn ngữ: <a href="/home/ajax_lang"
                                             data-target="#langModal" data-toggle="modal"
                                             title="Ngôn ngữ">Việt Nam</a><br/>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>


        <div id="center" class="col-md-6">

            <div class="box2 box_recently_join">
                <h3>Recently Joined</h3>
                <div class="box_content">
                    <ul class="list_block">
                        <li>
                            <div class=''>
                                <a href="http://yaloo.me/users/view/83" prefix="50_square" data-item_id="83"
                                   data-item_type="user" class="moocore_tooltip_link"><img
                                            src="http://yaloo.me/uploads/users/avatar/83/50_square_33e9cb2450a9f7b0b29c311911541871.jpg?4033"
                                            class=" user_avatar_small" title="" alt="urcoco"/></a></div>
                        </li>
                        <li>
                            <div class=''>
                                <a href="http://yaloo.me/users/view/82" prefix="50_square" data-item_id="82"
                                   data-item_type="user" class="moocore_tooltip_link"><img
                                            src="http://yaloo.me/uploads/users/avatar/82/50_square_d2ed89578649ff7469839f694c069ca2.jpg?4154"
                                            class=" user_avatar_small" title="" alt="Atlanta"/></a></div>
                        </li>
                        <li>
                            <div class=''>
                                <a href="http://yaloo.me/users/view/81" prefix="50_square" data-item_id="81"
                                   data-item_type="user" class="moocore_tooltip_link"><img
                                            src="http://yaloo.me/uploads/users/avatar/81/50_square_d35b7aee8d2a91b7617f884303803145.jpg?4115"
                                            class=" user_avatar_small" title="" alt="gffreezedrymachine"/></a></div>
                        </li>
                        <li>
                            <div class=''>
                                <a href="http://yaloo.me/users/view/80" prefix="50_square" data-item_id="80"
                                   data-item_type="user" class="moocore_tooltip_link"><img
                                            src="http://yaloo.me/uploads/users/avatar/80/50_square_7d9d598ae4349745fd21821569f06346.jpg?38"
                                            class=" user_avatar_small" title="" alt="worldofwarcraftlee"/></a></div>
                        </li>
                        <li>
                            <div class=''>
                                <a href="http://yaloo.me/users/view/79" prefix="50_square" data-item_id="79"
                                   data-item_type="user" class="moocore_tooltip_link"><img
                                            src="http://yaloo.me/uploads/users/avatar/79/50_square_58e9a52327186a888eb047f9a234d8f9.jpg?1572"
                                            class=" user_avatar_small" title="" alt="igvaultcsgoskins"/></a></div>
                        </li>
                        <li>
                            <div class=''>
                                <a href="http://yaloo.me/users/view/78" prefix="50_square" data-item_id="78"
                                   data-item_type="user" class="moocore_tooltip_link"><img
                                            src="http://yaloo.me/uploads/users/avatar/78/50_square_6f03a795284884fb250086033f3a09e3.jpg?2163"
                                            class=" user_avatar_small" title="" alt="flora"/></a></div>
                        </li>
                        <li>
                            <div class=''>
                                <a href="http://yaloo.me/users/view/77" prefix="50_square" data-item_id="77"
                                   data-item_type="user" class="moocore_tooltip_link"><img
                                            src="http://yaloo.me/uploads/users/avatar/77/50_square_4360b7d294f6489a8e2c755504834d34.jpg?3275"
                                            class=" user_avatar_small" title="" alt="brightdogcontainer"/></a></div>
                        </li>
                        <li>
                            <div class=''>
                                <a href="http://yaloo.me/users/view/76" prefix="50_square" data-item_id="76"
                                   data-item_type="user" class="moocore_tooltip_link"><img
                                            src="http://yaloo.me/uploads/users/avatar/76/50_square_84f4e4c91e83457c75f0f8645cd71b64.jpg?9903"
                                            class=" user_avatar_small" title="" alt="nanyangwashermotor"/></a></div>
                        </li>
                        <li>
                            <div class=''>
                                <a href="http://yaloo.me/users/view/75" prefix="50_square" data-item_id="75"
                                   data-item_type="user" class="moocore_tooltip_link"><img
                                            src="http://yaloo.me/uploads/users/avatar/75/50_square_86c185affa1883945d5635a99f40b3f4.jpg?6687"
                                            class=" user_avatar_small" title="" alt="sumoruggedtablet"/></a></div>
                        </li>
                        <li>
                            <div class=''>
                                <a href="http://yaloo.me/users/view/74" prefix="50_square" data-item_id="74"
                                   data-item_type="user" class="moocore_tooltip_link"><img
                                            src="http://yaloo.me/uploads/users/avatar/74/50_square_66a73e8f46886d6029dfd1e4710c5305.jpg?7428"
                                            class=" user_avatar_small" title="" alt="igvaultwowgold"/></a></div>
                        </li>
                    </ul>
                    <div class='clear'></div>
                </div>
            </div>

            <div class="p_l_7 home_content_feed">
                <div id="home-content">
                    <div class="p_l_7 check-home">
                        <div class="mo_breadcrumb">
                            <h1>Có gì mới?</h1>
                            <ul class="list7 header-list" id="feed-type">
                                <li><a href="#" data-href="/activities/ajax_browse/everyone" class="current">Mọi
                                        người</a></li>
                                <li><a href="#" data-href="/activities/ajax_browse/friends">Bạn bè và tôi</a></li>
                            </ul>
                        </div>

                        <div class="home_user">
                            <div id="status_box" class="statusHome" style="display: none;">


                                <form id="wallForm">
                                    <input type="hidden" name="data[type]" value="User" id="type"/><input type="hidden"
                                                                                                          name="data[target_id]"
                                                                                                          value="0"
                                                                                                          id="target_id"/><input
                                            type="hidden" name="data[action]" value="wall_post" id="action"/><input
                                            type="hidden" name="data[wall_photo]" id="wall_photo"/><input type="hidden"
                                                                                                          name="data[subject_type]"
                                                                                                          id="subject_type"/>
                                    <div class="form-feed-holder">
                                        <div class="post-status">
                                            <textarea name="messageText" placeholder="Chia sẻ những gì mới"
                                                      id="message"></textarea>
                                            <div id="message-emoji" class="emoji-toggle"></div>
                                        </div>

                                    </div>
                                    <div>
                                        <div id="wall_photo_preview" style="display:none">
                                            <span id="addMoreImage" style="display:none;" class="addMoreImage"><i
                                                        class="material-icons">add</i></span>
                                        </div>

                                        <!-- Hook for plugin -->

                                        <div class="user-tagging-container" id="userTagging-id-userTagging"><i
                                                    style="display:none;" class=""
                                                    onclick="$(this).parent().find('.userTagging-userTagging').toggleClass('hidden')"><em
                                                        class="material-icons">person_add</em></i>
                                            <div class="userTagging-userTagging hidden"><input name="data[userTagging]"
                                                                                               id="userTagging" value=""
                                                                                               placeholder="Ai ở cùng bạn ?"
                                                                                               type="text"/></div>
                                        </div>
                                    </div>
                                    <div class="userTagging-userShareLink">
                                        <input type="hidden" name="data[userShareLink]" id="userShareLink" value=""
                                               autocomplete="off" placeholder="Share link" type="text">
                                    </div>
                                    <div class="userTagging-userShareVideo">
                                        <input type="hidden" name="data[userShareVideo]" id="userShareVideo" value=""
                                               autocomplete="off" placeholder="Share link" type="text">
                                    </div>
                                    <input type="hidden" name="data[shareImage]" id="shareImage" value="1">
                                    <div class="stt-action">
                                        <div style="width: 40px;" data-toggle="tooltip"
                                             title="Thêm hình ảnh vào bài viết của bạn" id="select-2"></div>
                                        <div class="user-tagging-container">
                                            <i class="" data-toggle="tooltip" title="Gắn thẻ vào bài viết của bạn"
                                               onclick="$('.userTagging-userTagging').toggleClass('hidden');$('.userTagging-userTagging input').focus()"><em
                                                        class="material-icons">person_add</em></i>
                                        </div>

                                        <!-- Hook for plugin -->
                                        <div id="commentButton_0" class="post-stt-btn">
                                            <div class="wall-post-action">
                                                <select name="data[privacy]" id="privacy">
                                                    <option value="1">Mọi người</option>
                                                    <option value="2">Chỉ bạn bè</option>
                                                </select> <a href="javascript:void(0)" class="btn btn-action"
                                                             style="margin-bottom:3px" id="status_btn"> Chia sẻ</a>
                                            </div>
                                        </div>
                                    </div>


                                </form>
                                <div class="clear"></div>
                            </div>

                            <ul class="list6 comment_wrapper" id="list-content">


                                <style>
                                    #list-content li {
                                        position: relative;
                                    }
                                </style>
                                <li id="activity_648">
                                    <div class="feed_main_info">
                                        <div class="dropdown edit-post-icon">
                                            <a href="javascript:void(0)" data-toggle="dropdown" class="cross-icon">
                                                <i class="material-icons">more_vert</i>
                                            </a>
                                            <ul class="dropdown-menu">
                                                <!-- New hook -->
                                                <!-- New hook -->

                                                <li>
                                                    <a id='stop_notification_activity648'
                                                       href='/notifications/stop/activity/648' data-target='#themeModal'
                                                       data-toggle='modal' class='' title='Dừng thông báo'
                                                       data-dismiss='' data-backdrop='true' style=''>Dừng thông báo</a>


                                                </li>


                                                <li>
                                                    <a class="editActivity" data-activity-id="648"
                                                       href="javascript:void(0)">
                                                        Chỉnh sửa bài viết </a>
                                                </li>

                                                <li>
                                                    <a class="removeActivity" data-activity-id="648"
                                                       href="javascript:void(0)">
                                                        Xóa bài viết </a>
                                                </li>
                                                <li>
                                                    <a class="closeComment" data-id="648" data-type="activity"
                                                       data-close="0" href="javascript:void(0)">
                                                        Close Comment </a>
                                                </li>
                                                <li class="">
                                                    <a id='' href='/reports/ajax_create/activity/648'
                                                       data-target='#themeModal' data-toggle='modal' class=''
                                                       title='Báo cáo hoạt động' data-dismiss='' data-backdrop='true'
                                                       style=''>Báo cáo hoạt động</a></li>
                                            </ul>
                                        </div>
                                        <!-- New hook -->
                                        <!-- New hook -->

                                        <div class="activity_feed_image">
                                            <a href="http://yaloo.me/users/view/6" prefix="50_square" tooltip="1"
                                               data-item_id="6" data-item_type="user" class="moocore_tooltip_link"><img
                                                        src="http://yaloo.me/uploads/users/avatar/6/50_square_e79cbba76054e014de73822cfeab2b04.jpg?5116"
                                                        class="img_wrapper2 user_avatar_large" alt="Đức Khánh"
                                                        title=""/></a></div>

                                        <div class="activity_feed_content">
                                            <div class="comment hasDelLink">
                                                <div class="activity_text">
                                                    <a href="/users/view/6" class="moocore_tooltip_link"
                                                       data-item_type="user" data-item_id="6"><b>Đức Khánh</b></a></div>
                                                <div class="feed_time">
                                                    <a href="/users/view/6/activity_id:648" class="date"> 18 giây
                                                        Trước</a>
                                                    <a id='history_activity_648'
                                                       href='/histories/ajax_show/activity/648'
                                                       data-target='#themeModal' data-toggle='modal' class='edit-btn'
                                                       title='Hiện lịch sử chỉnh sửa' data-dismiss='modal'
                                                       data-backdrop='true' style=''>Đã chỉnh sửa</a>

                                                    <span class="dropdown">
                            <a id="permission_648" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true"
                               class="tip" href="javascript:void(0);" original-title="Chia sẻ với: Mọi người"> <i
                                        class="material-icons">public</i>
                                <span class="caret"></span>
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="permission_648">
                                <li><a data-privacy="1" data-activity-id="648" class="change-activity-privacy n52"
                                       href="javascript:void(0)">Mọi người</a></li>
                                <li><a data-privacy="2" data-activity-id="648" class="change-activity-privacy"
                                       href="javascript:void(0)">Chỉ bạn bè</a></li>
                            </ul>
                        </span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="clear"></div>
                                        <div class="activity_feed_content_text" id="activity_feed_content_text_648">
                                            <div class="comment_message">
                                                hello
                                            </div>
                                            <div class="">


                                                <div class="activity_content p_photos photo_addlist">

                                                    <div class="PE">
                                                        <div class="ej">
                                                            <a class="layer_square photoModal" href="/photos/view/412"
                                                               style="background-image:url(http://yaloo.me/uploads/photos/thumbnail/2019/11/25/412/850_07cad1823392da2772ba4fdac3ad8785.jpg?1574694933)">

                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="QE">

                                                        <div class="sp ">
                                                            <a class="layer_square photoModal" href="/photos/view/411">
                                                                <img src="http://yaloo.me/uploads/photos/thumbnail/2019/11/25/411/300_square_0a8acebf0de6f058e918577b6f2776c3.jpg?1574694933"
                                                                     alt=""/>
                                                            </a>
                                                        </div>


                                                        <div class="sp eq">
                                                            <a class="layer_square photoModal" href="/photos/view/410">
                                                                <img src="http://yaloo.me/uploads/photos/thumbnail/2019/11/25/410/300_square_5ab48226cebebb38b314dbe0d3aa5693.jpg?1574694933"
                                                                     alt=""/>
                                                            </a>
                                                        </div>


                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="feed_comment_info">
                                        <div class="date">

                                            <a href="javascript:void(0)" class="showCommentForm" data-id="648"><i
                                                        class='material-icons'>comment</i>&nbsp;Bình luận</a>

                                            &nbsp;<a href="javascript:void(0)" data-id="648" data-type="activity"
                                                     data-status="1" id="activity_l_648"
                                                     class="comment-thumb likeActivity "><i class="material-icons">thumb_up</i></a>
                                            <a id='' href='/likes/ajax_show/activity/648' data-target='#themeModal'
                                               data-toggle='modal' class='' title='Người thích điều này'
                                               data-dismiss='modal' data-backdrop='true' style=''><span
                                                        id="activity_like_648">0</span></a> <a href="javascript:void(0)"
                                                                                               data-id="648"
                                                                                               data-type="activity"
                                                                                               data-status="0"
                                                                                               id="activity_d_648"
                                                                                               class="comment-thumb likeActivity "><i
                                                        class="material-icons">thumb_down</i></a>


                                            <a id='' href='/likes/ajax_show/activity/648/1' data-target='#themeModal'
                                               data-toggle='modal' class='' title='Người không thích điều này'
                                               data-dismiss='' data-backdrop='true' style=''><span
                                                        id="activity_dislike_648">0</span></a>


                                            <a href="javascript:void(0);"
                                               share-url="http://yaloo.me/share/ajax_share/id:648" class="shareFeedBtn"><i
                                                        class="material-icons">share</i> Chia sẻ</a>


                                        </div>


                                        <ul class="activity_comments comment_list" id="comments_648"
                                            style="display:none">

                                            <li id="newComment_648">
                                                <a href="http://yaloo.me/users/view/6" prefix="50_square" tooltip="1"
                                                   data-item_id="6" data-item_type="user"
                                                   class="moocore_tooltip_link"><img
                                                            src="http://yaloo.me/uploads/users/avatar/6/50_square_e79cbba76054e014de73822cfeab2b04.jpg?1741"
                                                            class="user_avatar_small img_wrapper2" alt="Đức Khánh"
                                                            title=""/></a>
                                                <div class="comment">

                                                    <textarea name="data[commentForm_648]"
                                                              class="commentBox showCommentBtn" data-id="648"
                                                              placeholder="Viết bình luận..."
                                                              id="commentForm_648"></textarea>
                                                    <div id="commentForm_648-emoji" class="emoji-toggle"></div>

                                                    <div class="clear"></div>
                                                    <div style="display:block;" class="commentButton"
                                                         id="commentButton_648">
                                                        <input type="hidden" id="comment_image_648"/>
                                                        <div id="comment_button_attach_648"></div>
                                                        <a href="javascript:void(0)"
                                                           class="btn btn-action  viewer-submit-comment"
                                                           data-activity-id="648"><em
                                                                    class="material-icons">send</em></a>


                                                    </div>
                                                    <div id="comment_preview_image_648"></div>
                                                </div>
                                            </li>


                                        </ul>
                                    </div>
                                </li>
                                <li id="activity_647">
                                    <div class="feed_main_info">
                                        <div class="dropdown edit-post-icon">
                                            <a href="javascript:void(0)" data-toggle="dropdown" class="cross-icon">
                                                <i class="material-icons">more_vert</i>
                                            </a>
                                            <ul class="dropdown-menu" for="activity_menu_edit_647">
                                                <!-- New hook -->
                                                <!-- New hook -->
                                                <li class="">
                                                    <a id='' href='/reports/ajax_create/activity/647'
                                                       data-target='#themeModal' data-toggle='modal' class=''
                                                       title='Báo cáo hoạt động' data-dismiss='' data-backdrop='true'
                                                       style=''>Báo cáo hoạt động</a></li>
                                            </ul>
                                        </div>
                                        <!-- New hook -->
                                        <!-- New hook -->

                                        <div class="activity_feed_image">
                                            <a href="http://yaloo.me/users/view/80" prefix="50_square" tooltip="1"
                                               data-item_id="80" data-item_type="user" class="moocore_tooltip_link"><img
                                                        src="http://yaloo.me/uploads/users/avatar/80/50_square_7d9d598ae4349745fd21821569f06346.jpg?439"
                                                        class="img_wrapper2 user_avatar_large" alt="worldofwarcraftlee"
                                                        title=""/></a></div>

                                        <div class="activity_feed_content">
                                            <div class="comment hasDelLink">
                                                <div class="activity_text">
                                                    <a href="/users/view/80" class="moocore_tooltip_link"
                                                       data-item_type="user" data-item_id="80"><b>worldofwarcraftlee</b></a>
                                                    Tạo blog entry mới
                                                </div>
                                                <div class="feed_time">
                                                    <a href="/users/view/80/activity_id:647" class="date"> 12 giờ, 46
                                                        phút Trước</a>
                                                    <a id='history_activity_647'
                                                       href='/histories/ajax_show/activity/647'
                                                       data-target='#themeModal' data-toggle='modal' class='edit-btn'
                                                       title='Hiện lịch sử chỉnh sửa' data-dismiss='modal'
                                                       data-backdrop='true' style='display:none'>Đã chỉnh sửa</a>
                                                    <a class="tip" href="javascript:void(0);"
                                                       original-title="Chia sẻ với: Mọi người"> <i
                                                                class="material-icons">public</i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="clear"></div>
                                        <div class="activity_feed_content_text" id="activity_feed_content_text_647">


                                            <div class="activity_item">

                                                <div class="activity_left">
                                                    <a href="/blogs/view/115/both-challenge-should-admission-agreeable-attainable-for-them">
                                                        <img width="150" class="thum_activity"
                                                             src="http://yaloo.me/uploads/blogs/thumbnail/115/150_square_5c7f1ec213e91e5ea4777b46f564de05.jpg"/>
                                                    </a>
                                                </div>

                                                <div class="activity_right ">
                                                    <div class="activity_header">
                                                        <a href="/blogs/view/115/both-challenge-should-admission-agreeable-attainable-for-them">Both
                                                            challenge should admission agreeable attainable for them</a>
                                                    </div>

                                                    Both challenge should admission agreeable attainable for them that
                                                    will let them beforehand to about akin 20 or so. Players of either
                                                    hunt will allegedly ambition to WOW Classic Gold accompany...
                                                </div>
                                                <div class="clear"></div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="feed_comment_info">
                                        <div class="date">

                                            <a href="javascript:void(0)" class="showCommentForm" data-id="647"><i
                                                        class='material-icons'>comment</i>&nbsp;Bình luận</a>

                                            &nbsp;<a href="javascript:void(0)" data-id="115" data-type="Blog_Blog"
                                                     data-status="1" id="Blog_Blog_l_115"
                                                     class="comment-thumb likeActivity "><i class="material-icons">thumb_up</i></a>
                                            <a id='' href='/likes/ajax_show/Blog_Blog/115' data-target='#themeModal'
                                               data-toggle='modal' class='' title='Người thích điều này'
                                               data-dismiss='modal' data-backdrop='true' style=''><span
                                                        id="Blog_Blog_like_115">0</span></a> <a
                                                    href="javascript:void(0)" data-id="115" data-type="Blog_Blog"
                                                    data-status="0" id="Blog_Blog_d_115"
                                                    class="comment-thumb likeActivity "><i class="material-icons">thumb_down</i></a>

                                            <a id='' href='/likes/ajax_show/Blog_Blog/115/1' data-target='#themeModal'
                                               data-toggle='modal' class='' title='Người không thích điều này'
                                               data-dismiss='' data-backdrop='true' style=''><span
                                                        id="Blog_Blog_dislike_115">0</span></a>


                                            <a href="javascript:void(0);"
                                               share-url="http://yaloo.me/share/ajax_share/id:647" class="shareFeedBtn"><i
                                                        class="material-icons">share</i> Chia sẻ</a>


                                        </div>


                                        <ul class="activity_comments comment_list" id="comments_647"
                                            style="display:none">

                                            <li id="newComment_647">
                                                <a href="http://yaloo.me/users/view/6" prefix="50_square" tooltip="1"
                                                   data-item_id="6" data-item_type="user"
                                                   class="moocore_tooltip_link"><img
                                                            src="http://yaloo.me/uploads/users/avatar/6/50_square_e79cbba76054e014de73822cfeab2b04.jpg?5660"
                                                            class="user_avatar_small img_wrapper2" alt="Đức Khánh"
                                                            title=""/></a>
                                                <div class="comment">

                                                    <textarea name="data[commentForm_647]"
                                                              class="commentBox showCommentBtn" data-id="647"
                                                              placeholder="Viết bình luận..."
                                                              id="commentForm_647"></textarea>
                                                    <div id="commentForm_647-emoji" class="emoji-toggle"></div>

                                                    <div class="clear"></div>
                                                    <div style="display:block;" class="commentButton"
                                                         id="commentButton_647">
                                                        <input type="hidden" id="comment_image_647"/>
                                                        <div id="comment_button_attach_647"></div>
                                                        <a href="javascript:void(0)"
                                                           class="btn btn-action  viewer-submit-item-comment"
                                                           data-item-type="Blog_Blog" data-activity-item-id="115"
                                                           data-activity-id="647"><em
                                                                    class="material-icons">send</em></a>


                                                    </div>
                                                    <div id="comment_preview_image_647"></div>
                                                </div>
                                            </li>


                                        </ul>
                                    </div>
                                </li>
                                <li id="activity_646">
                                    <div class="feed_main_info">
                                        <div class="dropdown edit-post-icon">
                                            <a href="javascript:void(0)" data-toggle="dropdown" class="cross-icon">
                                                <i class="material-icons">more_vert</i>
                                            </a>
                                            <ul class="dropdown-menu" for="activity_menu_edit_646">
                                                <!-- New hook -->
                                                <!-- New hook -->
                                                <li class="">
                                                    <a id='' href='/reports/ajax_create/activity/646'
                                                       data-target='#themeModal' data-toggle='modal' class=''
                                                       title='Báo cáo hoạt động' data-dismiss='' data-backdrop='true'
                                                       style=''>Báo cáo hoạt động</a></li>
                                            </ul>
                                        </div>
                                        <!-- New hook -->
                                        <!-- New hook -->

                                        <div class="activity_feed_image">
                                            <a href="http://yaloo.me/users/view/83" prefix="50_square" tooltip="1"
                                               data-item_id="83" data-item_type="user" class="moocore_tooltip_link"><img
                                                        src="http://yaloo.me/uploads/users/avatar/83/50_square_33e9cb2450a9f7b0b29c311911541871.jpg?8277"
                                                        class="img_wrapper2 user_avatar_large" alt="urcoco"
                                                        title=""/></a></div>

                                        <div class="activity_feed_content">
                                            <div class="comment hasDelLink">
                                                <div class="activity_text">
                                                    <a href="/users/view/83" class="moocore_tooltip_link"
                                                       data-item_type="user" data-item_id="83"><b>urcoco</b></a> Tạo
                                                    blog entry mới
                                                </div>
                                                <div class="feed_time">
                                                    <a href="/users/view/83/activity_id:646" class="date">vào November
                                                        20 2019 at 09:24 AM</a>
                                                    <a id='history_activity_646'
                                                       href='/histories/ajax_show/activity/646'
                                                       data-target='#themeModal' data-toggle='modal' class='edit-btn'
                                                       title='Hiện lịch sử chỉnh sửa' data-dismiss='modal'
                                                       data-backdrop='true' style='display:none'>Đã chỉnh sửa</a>
                                                    <a class="tip" href="javascript:void(0);"
                                                       original-title="Chia sẻ với: Mọi người"> <i
                                                                class="material-icons">public</i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="clear"></div>
                                        <div class="activity_feed_content_text" id="activity_feed_content_text_646">


                                            <div class="activity_item">

                                                <div class="activity_left">
                                                    <a href="/blogs/view/114/what-you-need-to-do-about-matching-couple-ring-before-it-s-too-late">
                                                        <img width="150" class="thum_activity"
                                                             src="http://yaloo.me/uploads/blogs/thumbnail/114/150_square_42b1fd42f6f479613b40ba54aa8baded.jpg"/>
                                                    </a>
                                                </div>

                                                <div class="activity_right ">
                                                    <div class="activity_header">
                                                        <a href="/blogs/view/114/what-you-need-to-do-about-matching-couple-ring-before-it-s-too-late">What
                                                            You Need to Do About Matching Couple Ring Before It's Too
                                                            Late</a>
                                                    </div>


                                                    The Little-Known Secrets to Matching Couple Ring
                                                    To save on shipping charges, it's highly recommended to find all you
                                                    need in one order. 1 website could have a greater cost, but is
                                                    composed...
                                                </div>
                                                <div class="clear"></div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="feed_comment_info">
                                        <div class="date">

                                            <a href="javascript:void(0)" class="showCommentForm" data-id="646"><i
                                                        class='material-icons'>comment</i>&nbsp;Bình luận</a>

                                            &nbsp;<a href="javascript:void(0)" data-id="114" data-type="Blog_Blog"
                                                     data-status="1" id="Blog_Blog_l_114"
                                                     class="comment-thumb likeActivity "><i class="material-icons">thumb_up</i></a>
                                            <a id='' href='/likes/ajax_show/Blog_Blog/114' data-target='#themeModal'
                                               data-toggle='modal' class='' title='Người thích điều này'
                                               data-dismiss='modal' data-backdrop='true' style=''><span
                                                        id="Blog_Blog_like_114">0</span></a> <a
                                                    href="javascript:void(0)" data-id="114" data-type="Blog_Blog"
                                                    data-status="0" id="Blog_Blog_d_114"
                                                    class="comment-thumb likeActivity "><i class="material-icons">thumb_down</i></a>

                                            <a id='' href='/likes/ajax_show/Blog_Blog/114/1' data-target='#themeModal'
                                               data-toggle='modal' class='' title='Người không thích điều này'
                                               data-dismiss='' data-backdrop='true' style=''><span
                                                        id="Blog_Blog_dislike_114">0</span></a>


                                            <a href="javascript:void(0);"
                                               share-url="http://yaloo.me/share/ajax_share/id:646" class="shareFeedBtn"><i
                                                        class="material-icons">share</i> Chia sẻ</a>


                                        </div>


                                        <ul class="activity_comments comment_list" id="comments_646"
                                            style="display:none">

                                            <li id="newComment_646">
                                                <a href="http://yaloo.me/users/view/6" prefix="50_square" tooltip="1"
                                                   data-item_id="6" data-item_type="user"
                                                   class="moocore_tooltip_link"><img
                                                            src="http://yaloo.me/uploads/users/avatar/6/50_square_e79cbba76054e014de73822cfeab2b04.jpg?2746"
                                                            class="user_avatar_small img_wrapper2" alt="Đức Khánh"
                                                            title=""/></a>
                                                <div class="comment">

                                                    <textarea name="data[commentForm_646]"
                                                              class="commentBox showCommentBtn" data-id="646"
                                                              placeholder="Viết bình luận..."
                                                              id="commentForm_646"></textarea>
                                                    <div id="commentForm_646-emoji" class="emoji-toggle"></div>

                                                    <div class="clear"></div>
                                                    <div style="display:block;" class="commentButton"
                                                         id="commentButton_646">
                                                        <input type="hidden" id="comment_image_646"/>
                                                        <div id="comment_button_attach_646"></div>
                                                        <a href="javascript:void(0)"
                                                           class="btn btn-action  viewer-submit-item-comment"
                                                           data-item-type="Blog_Blog" data-activity-item-id="114"
                                                           data-activity-id="646"><em
                                                                    class="material-icons">send</em></a>


                                                    </div>
                                                    <div id="comment_preview_image_646"></div>
                                                </div>
                                            </li>


                                        </ul>
                                    </div>
                                </li>
                                <li id="activity_645">
                                    <div class="feed_main_info">
                                        <div class="dropdown edit-post-icon">
                                            <a href="javascript:void(0)" data-toggle="dropdown" class="cross-icon">
                                                <i class="material-icons">more_vert</i>
                                            </a>
                                            <ul class="dropdown-menu" for="activity_menu_edit_645">
                                                <!-- New hook -->
                                                <!-- New hook -->
                                                <li class="">
                                                    <a id='' href='/reports/ajax_create/activity/645'
                                                       data-target='#themeModal' data-toggle='modal' class=''
                                                       title='Báo cáo hoạt động' data-dismiss='' data-backdrop='true'
                                                       style=''>Báo cáo hoạt động</a></li>
                                            </ul>
                                        </div>
                                        <!-- New hook -->
                                        <!-- New hook -->

                                        <div class="activity_feed_image">
                                            <a href="http://yaloo.me/users/view/83" prefix="50_square" tooltip="1"
                                               data-item_id="83" data-item_type="user" class="moocore_tooltip_link"><img
                                                        src="http://yaloo.me/uploads/users/avatar/83/50_square_33e9cb2450a9f7b0b29c311911541871.jpg?1485"
                                                        class="img_wrapper2 user_avatar_large" alt="urcoco"
                                                        title=""/></a></div>

                                        <div class="activity_feed_content">
                                            <div class="comment hasDelLink">
                                                <div class="activity_text">
                                                    <a href="/users/view/83" class="moocore_tooltip_link"
                                                       data-item_type="user" data-item_id="83"><b>urcoco</b></a> Tạo
                                                    blog entry mới
                                                </div>
                                                <div class="feed_time">
                                                    <a href="/users/view/83/activity_id:645" class="date">vào November
                                                        20 2019 at 09:22 AM</a>
                                                    <a id='history_activity_645'
                                                       href='/histories/ajax_show/activity/645'
                                                       data-target='#themeModal' data-toggle='modal' class='edit-btn'
                                                       title='Hiện lịch sử chỉnh sửa' data-dismiss='modal'
                                                       data-backdrop='true' style='display:none'>Đã chỉnh sửa</a>
                                                    <a class="tip" href="javascript:void(0);"
                                                       original-title="Chia sẻ với: Mọi người"> <i
                                                                class="material-icons">public</i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="clear"></div>
                                        <div class="activity_feed_content_text" id="activity_feed_content_text_645">


                                            <div class="activity_item">

                                                <div class="activity_left">
                                                    <a href="/blogs/view/113/new-step-by-step-roadmap-for-birthstone-rings">
                                                        <img width="150" class="thum_activity"
                                                             src="http://yaloo.me/uploads/blogs/thumbnail/113/150_square_5a3fc042442e0967a5ac58b54dad1692.jpg"/>
                                                    </a>
                                                </div>

                                                <div class="activity_right ">
                                                    <div class="activity_header">
                                                        <a href="/blogs/view/113/new-step-by-step-roadmap-for-birthstone-rings">New
                                                            Step by Step Roadmap for Birthstone Rings</a>
                                                    </div>


                                                    What Does Birthstone Rings Mean?
                                                    Bracelets come in styles like string bracelets, tennis bracelets,
                                                    charm bracelets and so forth. Rings are utilized as promise rings.
                                                    Gemstone rings are now...
                                                </div>
                                                <div class="clear"></div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="feed_comment_info">
                                        <div class="date">

                                            <a href="javascript:void(0)" class="showCommentForm" data-id="645"><i
                                                        class='material-icons'>comment</i>&nbsp;Bình luận</a>

                                            &nbsp;<a href="javascript:void(0)" data-id="113" data-type="Blog_Blog"
                                                     data-status="1" id="Blog_Blog_l_113"
                                                     class="comment-thumb likeActivity "><i class="material-icons">thumb_up</i></a>
                                            <a id='' href='/likes/ajax_show/Blog_Blog/113' data-target='#themeModal'
                                               data-toggle='modal' class='' title='Người thích điều này'
                                               data-dismiss='modal' data-backdrop='true' style=''><span
                                                        id="Blog_Blog_like_113">0</span></a> <a
                                                    href="javascript:void(0)" data-id="113" data-type="Blog_Blog"
                                                    data-status="0" id="Blog_Blog_d_113"
                                                    class="comment-thumb likeActivity "><i class="material-icons">thumb_down</i></a>

                                            <a id='' href='/likes/ajax_show/Blog_Blog/113/1' data-target='#themeModal'
                                               data-toggle='modal' class='' title='Người không thích điều này'
                                               data-dismiss='' data-backdrop='true' style=''><span
                                                        id="Blog_Blog_dislike_113">0</span></a>


                                            <a href="javascript:void(0);"
                                               share-url="http://yaloo.me/share/ajax_share/id:645" class="shareFeedBtn"><i
                                                        class="material-icons">share</i> Chia sẻ</a>


                                        </div>


                                        <ul class="activity_comments comment_list" id="comments_645"
                                            style="display:none">

                                            <li id="newComment_645">
                                                <a href="http://yaloo.me/users/view/6" prefix="50_square" tooltip="1"
                                                   data-item_id="6" data-item_type="user"
                                                   class="moocore_tooltip_link"><img
                                                            src="http://yaloo.me/uploads/users/avatar/6/50_square_e79cbba76054e014de73822cfeab2b04.jpg?4784"
                                                            class="user_avatar_small img_wrapper2" alt="Đức Khánh"
                                                            title=""/></a>
                                                <div class="comment">

                                                    <textarea name="data[commentForm_645]"
                                                              class="commentBox showCommentBtn" data-id="645"
                                                              placeholder="Viết bình luận..."
                                                              id="commentForm_645"></textarea>
                                                    <div id="commentForm_645-emoji" class="emoji-toggle"></div>

                                                    <div class="clear"></div>
                                                    <div style="display:block;" class="commentButton"
                                                         id="commentButton_645">
                                                        <input type="hidden" id="comment_image_645"/>
                                                        <div id="comment_button_attach_645"></div>
                                                        <a href="javascript:void(0)"
                                                           class="btn btn-action  viewer-submit-item-comment"
                                                           data-item-type="Blog_Blog" data-activity-item-id="113"
                                                           data-activity-id="645"><em
                                                                    class="material-icons">send</em></a>


                                                    </div>
                                                    <div id="comment_preview_image_645"></div>
                                                </div>
                                            </li>


                                        </ul>
                                    </div>
                                </li>
                                <li id="activity_644">
                                    <div class="feed_main_info">
                                        <div class="dropdown edit-post-icon">
                                            <a href="javascript:void(0)" data-toggle="dropdown" class="cross-icon">
                                                <i class="material-icons">more_vert</i>
                                            </a>
                                            <ul class="dropdown-menu" for="activity_menu_edit_644">
                                                <!-- New hook -->
                                                <!-- New hook -->
                                                <li class="">
                                                    <a id='' href='/reports/ajax_create/activity/644'
                                                       data-target='#themeModal' data-toggle='modal' class=''
                                                       title='Báo cáo hoạt động' data-dismiss='' data-backdrop='true'
                                                       style=''>Báo cáo hoạt động</a></li>
                                            </ul>
                                        </div>
                                        <!-- New hook -->
                                        <!-- New hook -->

                                        <div class="activity_feed_image">
                                            <a href="http://yaloo.me/users/view/83" prefix="50_square" tooltip="1"
                                               data-item_id="83" data-item_type="user" class="moocore_tooltip_link"><img
                                                        src="http://yaloo.me/uploads/users/avatar/83/50_square_33e9cb2450a9f7b0b29c311911541871.jpg?7508"
                                                        class="img_wrapper2 user_avatar_large" alt="urcoco"
                                                        title=""/></a></div>

                                        <div class="activity_feed_content">
                                            <div class="comment hasDelLink">
                                                <div class="activity_text">
                                                    <a href="/users/view/83" class="moocore_tooltip_link"
                                                       data-item_type="user" data-item_id="83"><b>urcoco</b></a> đã tham
                                                    gia yaloo.me - social network
                                                </div>
                                                <div class="feed_time">
                                                    <a href="/users/view/83/activity_id:644" class="date">vào November
                                                        20 2019 at 09:19 AM</a>
                                                    <a id='history_activity_644'
                                                       href='/histories/ajax_show/activity/644'
                                                       data-target='#themeModal' data-toggle='modal' class='edit-btn'
                                                       title='Hiện lịch sử chỉnh sửa' data-dismiss='modal'
                                                       data-backdrop='true' style='display:none'>Đã chỉnh sửa</a>
                                                    <a class="tip" href="javascript:void(0);"
                                                       original-title="Chia sẻ với: Mọi người"> <i
                                                                class="material-icons">public</i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="clear"></div>
                                        <div class="activity_feed_content_text" id="activity_feed_content_text_644">
                                        </div>
                                    </div>

                                    <div class="feed_comment_info">
                                        <div class="date">

                                            <a href="javascript:void(0)" class="showCommentForm" data-id="644"><i
                                                        class='material-icons'>comment</i>&nbsp;Bình luận</a>

                                            &nbsp;<a href="javascript:void(0)" data-id="644" data-type="activity"
                                                     data-status="1" id="activity_l_644"
                                                     class="comment-thumb likeActivity "><i class="material-icons">thumb_up</i></a>
                                            <a id='' href='/likes/ajax_show/activity/644' data-target='#themeModal'
                                               data-toggle='modal' class='' title='Người thích điều này'
                                               data-dismiss='modal' data-backdrop='true' style=''><span
                                                        id="activity_like_644">0</span></a> <a href="javascript:void(0)"
                                                                                               data-id="644"
                                                                                               data-type="activity"
                                                                                               data-status="0"
                                                                                               id="activity_d_644"
                                                                                               class="comment-thumb likeActivity "><i
                                                        class="material-icons">thumb_down</i></a>


                                            <a id='' href='/likes/ajax_show/activity/644/1' data-target='#themeModal'
                                               data-toggle='modal' class='' title='Người không thích điều này'
                                               data-dismiss='' data-backdrop='true' style=''><span
                                                        id="activity_dislike_644">0</span></a>


                                        </div>


                                        <ul class="activity_comments comment_list" id="comments_644"
                                            style="display:none">

                                            <li id="newComment_644">
                                                <a href="http://yaloo.me/users/view/6" prefix="50_square" tooltip="1"
                                                   data-item_id="6" data-item_type="user"
                                                   class="moocore_tooltip_link"><img
                                                            src="http://yaloo.me/uploads/users/avatar/6/50_square_e79cbba76054e014de73822cfeab2b04.jpg?7068"
                                                            class="user_avatar_small img_wrapper2" alt="Đức Khánh"
                                                            title=""/></a>
                                                <div class="comment">

                                                    <textarea name="data[commentForm_644]"
                                                              class="commentBox showCommentBtn" data-id="644"
                                                              placeholder="Viết bình luận..."
                                                              id="commentForm_644"></textarea>
                                                    <div id="commentForm_644-emoji" class="emoji-toggle"></div>

                                                    <div class="clear"></div>
                                                    <div style="display:block;" class="commentButton"
                                                         id="commentButton_644">
                                                        <input type="hidden" id="comment_image_644"/>
                                                        <div id="comment_button_attach_644"></div>
                                                        <a href="javascript:void(0)"
                                                           class="btn btn-action  viewer-submit-comment"
                                                           data-activity-id="644"><em
                                                                    class="material-icons">send</em></a>


                                                    </div>
                                                    <div id="comment_preview_image_644"></div>
                                                </div>
                                            </li>


                                        </ul>
                                    </div>
                                </li>
                                <li id="activity_643">
                                    <div class="feed_main_info">
                                        <div class="dropdown edit-post-icon">
                                            <a href="javascript:void(0)" data-toggle="dropdown" class="cross-icon">
                                                <i class="material-icons">more_vert</i>
                                            </a>
                                            <ul class="dropdown-menu" for="activity_menu_edit_643">
                                                <!-- New hook -->
                                                <!-- New hook -->
                                                <li class="">
                                                    <a id='' href='/reports/ajax_create/activity/643'
                                                       data-target='#themeModal' data-toggle='modal' class=''
                                                       title='Báo cáo hoạt động' data-dismiss='' data-backdrop='true'
                                                       style=''>Báo cáo hoạt động</a></li>
                                            </ul>
                                        </div>
                                        <!-- New hook -->
                                        <!-- New hook -->

                                        <div class="activity_feed_image">
                                            <a href="http://yaloo.me/users/view/80" prefix="50_square" tooltip="1"
                                               data-item_id="80" data-item_type="user" class="moocore_tooltip_link"><img
                                                        src="http://yaloo.me/uploads/users/avatar/80/50_square_7d9d598ae4349745fd21821569f06346.jpg?3321"
                                                        class="img_wrapper2 user_avatar_large" alt="worldofwarcraftlee"
                                                        title=""/></a></div>

                                        <div class="activity_feed_content">
                                            <div class="comment hasDelLink">
                                                <div class="activity_text">
                                                    <a href="/users/view/80" class="moocore_tooltip_link"
                                                       data-item_type="user" data-item_id="80"><b>worldofwarcraftlee</b></a>
                                                    Tạo blog entry mới
                                                </div>
                                                <div class="feed_time">
                                                    <a href="/users/view/80/activity_id:643" class="date">vào November
                                                        18 2019 at 09:57 AM</a>
                                                    <a id='history_activity_643'
                                                       href='/histories/ajax_show/activity/643'
                                                       data-target='#themeModal' data-toggle='modal' class='edit-btn'
                                                       title='Hiện lịch sử chỉnh sửa' data-dismiss='modal'
                                                       data-backdrop='true' style='display:none'>Đã chỉnh sửa</a>
                                                    <a class="tip" href="javascript:void(0);"
                                                       original-title="Chia sẻ với: Mọi người"> <i
                                                                class="material-icons">public</i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="clear"></div>
                                        <div class="activity_feed_content_text" id="activity_feed_content_text_643">


                                            <div class="activity_item">

                                                <div class="activity_left">
                                                    <a href="/blogs/view/112/with-the-beside-advertisement-of-world-of-warcraft">
                                                        <img width="150" class="thum_activity"
                                                             src="http://yaloo.me/uploads/blogs/thumbnail/112/150_square_eabe1037e4213efe1c62914e1599d733.jpg"/>
                                                    </a>
                                                </div>

                                                <div class="activity_right ">
                                                    <div class="activity_header">
                                                        <a href="/blogs/view/112/with-the-beside-advertisement-of-world-of-warcraft">With
                                                            the beside advertisement of World of Warcraft</a>
                                                    </div>

                                                    World of Warcraft players entering the emblematic Shadowlands will
                                                    ascertain a agitated breed. Below acclimatized circumstances, the
                                                    new spirit larboard its appraisement to be led into the...
                                                </div>
                                                <div class="clear"></div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="feed_comment_info">
                                        <div class="date">

                                            <a href="javascript:void(0)" class="showCommentForm" data-id="643"><i
                                                        class='material-icons'>comment</i>&nbsp;Bình luận</a>

                                            &nbsp;<a href="javascript:void(0)" data-id="112" data-type="Blog_Blog"
                                                     data-status="1" id="Blog_Blog_l_112"
                                                     class="comment-thumb likeActivity "><i class="material-icons">thumb_up</i></a>
                                            <a id='' href='/likes/ajax_show/Blog_Blog/112' data-target='#themeModal'
                                               data-toggle='modal' class='' title='Người thích điều này'
                                               data-dismiss='modal' data-backdrop='true' style=''><span
                                                        id="Blog_Blog_like_112">0</span></a> <a
                                                    href="javascript:void(0)" data-id="112" data-type="Blog_Blog"
                                                    data-status="0" id="Blog_Blog_d_112"
                                                    class="comment-thumb likeActivity "><i class="material-icons">thumb_down</i></a>

                                            <a id='' href='/likes/ajax_show/Blog_Blog/112/1' data-target='#themeModal'
                                               data-toggle='modal' class='' title='Người không thích điều này'
                                               data-dismiss='' data-backdrop='true' style=''><span
                                                        id="Blog_Blog_dislike_112">0</span></a>


                                            <a href="javascript:void(0);"
                                               share-url="http://yaloo.me/share/ajax_share/id:643" class="shareFeedBtn"><i
                                                        class="material-icons">share</i> Chia sẻ</a>


                                        </div>


                                        <ul class="activity_comments comment_list" id="comments_643"
                                            style="display:none">

                                            <li id="newComment_643">
                                                <a href="http://yaloo.me/users/view/6" prefix="50_square" tooltip="1"
                                                   data-item_id="6" data-item_type="user"
                                                   class="moocore_tooltip_link"><img
                                                            src="http://yaloo.me/uploads/users/avatar/6/50_square_e79cbba76054e014de73822cfeab2b04.jpg?3763"
                                                            class="user_avatar_small img_wrapper2" alt="Đức Khánh"
                                                            title=""/></a>
                                                <div class="comment">

                                                    <textarea name="data[commentForm_643]"
                                                              class="commentBox showCommentBtn" data-id="643"
                                                              placeholder="Viết bình luận..."
                                                              id="commentForm_643"></textarea>
                                                    <div id="commentForm_643-emoji" class="emoji-toggle"></div>

                                                    <div class="clear"></div>
                                                    <div style="display:block;" class="commentButton"
                                                         id="commentButton_643">
                                                        <input type="hidden" id="comment_image_643"/>
                                                        <div id="comment_button_attach_643"></div>
                                                        <a href="javascript:void(0)"
                                                           class="btn btn-action  viewer-submit-item-comment"
                                                           data-item-type="Blog_Blog" data-activity-item-id="112"
                                                           data-activity-id="643"><em
                                                                    class="material-icons">send</em></a>


                                                    </div>
                                                    <div id="comment_preview_image_643"></div>
                                                </div>
                                            </li>


                                        </ul>
                                    </div>
                                </li>
                                <li id="activity_642">
                                    <div class="feed_main_info">
                                        <div class="dropdown edit-post-icon">
                                            <a href="javascript:void(0)" data-toggle="dropdown" class="cross-icon">
                                                <i class="material-icons">more_vert</i>
                                            </a>
                                            <ul class="dropdown-menu" for="activity_menu_edit_642">
                                                <!-- New hook -->
                                                <!-- New hook -->
                                                <li class="">
                                                    <a id='' href='/reports/ajax_create/activity/642'
                                                       data-target='#themeModal' data-toggle='modal' class=''
                                                       title='Báo cáo hoạt động' data-dismiss='' data-backdrop='true'
                                                       style=''>Báo cáo hoạt động</a></li>
                                            </ul>
                                        </div>
                                        <!-- New hook -->
                                        <!-- New hook -->

                                        <div class="activity_feed_image">
                                            <a href="http://yaloo.me/users/view/82" prefix="50_square" tooltip="1"
                                               data-item_id="82" data-item_type="user" class="moocore_tooltip_link"><img
                                                        src="http://yaloo.me/uploads/users/avatar/82/50_square_d2ed89578649ff7469839f694c069ca2.jpg?9343"
                                                        class="img_wrapper2 user_avatar_large" alt="Atlanta" title=""/></a>
                                        </div>

                                        <div class="activity_feed_content">
                                            <div class="comment hasDelLink">
                                                <div class="activity_text">
                                                    <a href="/users/view/82" class="moocore_tooltip_link"
                                                       data-item_type="user" data-item_id="82"><b>Atlanta</b></a> Tạo
                                                    blog entry mới
                                                </div>
                                                <div class="feed_time">
                                                    <a href="/users/view/82/activity_id:642" class="date">vào November
                                                        16 2019 at 03:43 PM</a>
                                                    <a id='history_activity_642'
                                                       href='/histories/ajax_show/activity/642'
                                                       data-target='#themeModal' data-toggle='modal' class='edit-btn'
                                                       title='Hiện lịch sử chỉnh sửa' data-dismiss='modal'
                                                       data-backdrop='true' style='display:none'>Đã chỉnh sửa</a>
                                                    <a class="tip" href="javascript:void(0);"
                                                       original-title="Chia sẻ với: Mọi người"> <i
                                                                class="material-icons">public</i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="clear"></div>
                                        <div class="activity_feed_content_text" id="activity_feed_content_text_642">


                                            <div class="activity_item">

                                                <div class="activity_left">
                                                    <a href="/blogs/view/111/the-early-morning-at-the-time-edmonton">
                                                        <img width="150" class="thum_activity"
                                                             src="http://yaloo.me/blog/img/noimage/blog.png"/>
                                                    </a>
                                                </div>

                                                <div class="activity_right ">
                                                    <div class="activity_header">
                                                        <a href="/blogs/view/111/the-early-morning-at-the-time-edmonton">The
                                                            Early morning At the time Edmonton</a>
                                                    </div>
                                                    Here the take it easy of the excellent of what wasn included within
                                                    just the Recap or Cost The Flames against Calgary 1-0 victory more
                                                    than the Edmonton Oilers.Smitty Upon PointAfter a...
                                                </div>
                                                <div class="clear"></div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="feed_comment_info">
                                        <div class="date">

                                            <a href="javascript:void(0)" class="showCommentForm" data-id="642"><i
                                                        class='material-icons'>comment</i>&nbsp;Bình luận</a>

                                            &nbsp;<a href="javascript:void(0)" data-id="111" data-type="Blog_Blog"
                                                     data-status="1" id="Blog_Blog_l_111"
                                                     class="comment-thumb likeActivity "><i class="material-icons">thumb_up</i></a>
                                            <a id='' href='/likes/ajax_show/Blog_Blog/111' data-target='#themeModal'
                                               data-toggle='modal' class='' title='Người thích điều này'
                                               data-dismiss='modal' data-backdrop='true' style=''><span
                                                        id="Blog_Blog_like_111">0</span></a> <a
                                                    href="javascript:void(0)" data-id="111" data-type="Blog_Blog"
                                                    data-status="0" id="Blog_Blog_d_111"
                                                    class="comment-thumb likeActivity "><i class="material-icons">thumb_down</i></a>

                                            <a id='' href='/likes/ajax_show/Blog_Blog/111/1' data-target='#themeModal'
                                               data-toggle='modal' class='' title='Người không thích điều này'
                                               data-dismiss='' data-backdrop='true' style=''><span
                                                        id="Blog_Blog_dislike_111">0</span></a>


                                            <a href="javascript:void(0);"
                                               share-url="http://yaloo.me/share/ajax_share/id:642" class="shareFeedBtn"><i
                                                        class="material-icons">share</i> Chia sẻ</a>


                                        </div>


                                        <ul class="activity_comments comment_list" id="comments_642"
                                            style="display:none">

                                            <li id="newComment_642">
                                                <a href="http://yaloo.me/users/view/6" prefix="50_square" tooltip="1"
                                                   data-item_id="6" data-item_type="user"
                                                   class="moocore_tooltip_link"><img
                                                            src="http://yaloo.me/uploads/users/avatar/6/50_square_e79cbba76054e014de73822cfeab2b04.jpg?4534"
                                                            class="user_avatar_small img_wrapper2" alt="Đức Khánh"
                                                            title=""/></a>
                                                <div class="comment">

                                                    <textarea name="data[commentForm_642]"
                                                              class="commentBox showCommentBtn" data-id="642"
                                                              placeholder="Viết bình luận..."
                                                              id="commentForm_642"></textarea>
                                                    <div id="commentForm_642-emoji" class="emoji-toggle"></div>

                                                    <div class="clear"></div>
                                                    <div style="display:block;" class="commentButton"
                                                         id="commentButton_642">
                                                        <input type="hidden" id="comment_image_642"/>
                                                        <div id="comment_button_attach_642"></div>
                                                        <a href="javascript:void(0)"
                                                           class="btn btn-action  viewer-submit-item-comment"
                                                           data-item-type="Blog_Blog" data-activity-item-id="111"
                                                           data-activity-id="642"><em
                                                                    class="material-icons">send</em></a>


                                                    </div>
                                                    <div id="comment_preview_image_642"></div>
                                                </div>
                                            </li>


                                        </ul>
                                    </div>
                                </li>
                                <li id="activity_641">
                                    <div class="feed_main_info">
                                        <div class="dropdown edit-post-icon">
                                            <a href="javascript:void(0)" data-toggle="dropdown" class="cross-icon">
                                                <i class="material-icons">more_vert</i>
                                            </a>
                                            <ul class="dropdown-menu" for="activity_menu_edit_641">
                                                <!-- New hook -->
                                                <!-- New hook -->
                                                <li class="">
                                                    <a id='' href='/reports/ajax_create/activity/641'
                                                       data-target='#themeModal' data-toggle='modal' class=''
                                                       title='Báo cáo hoạt động' data-dismiss='' data-backdrop='true'
                                                       style=''>Báo cáo hoạt động</a></li>
                                            </ul>
                                        </div>
                                        <!-- New hook -->
                                        <!-- New hook -->

                                        <div class="activity_feed_image">
                                            <a href="http://yaloo.me/users/view/82" prefix="50_square" tooltip="1"
                                               data-item_id="82" data-item_type="user" class="moocore_tooltip_link"><img
                                                        src="http://yaloo.me/uploads/users/avatar/82/50_square_d2ed89578649ff7469839f694c069ca2.jpg?9226"
                                                        class="img_wrapper2 user_avatar_large" alt="Atlanta" title=""/></a>
                                        </div>

                                        <div class="activity_feed_content">
                                            <div class="comment hasDelLink">
                                                <div class="activity_text">
                                                    <a href="/users/view/82" class="moocore_tooltip_link"
                                                       data-item_type="user" data-item_id="82"><b>Atlanta</b></a> Tạo
                                                    blog entry mới
                                                </div>
                                                <div class="feed_time">
                                                    <a href="/users/view/82/activity_id:641" class="date">vào November
                                                        16 2019 at 03:42 PM</a>
                                                    <a id='history_activity_641'
                                                       href='/histories/ajax_show/activity/641'
                                                       data-target='#themeModal' data-toggle='modal' class='edit-btn'
                                                       title='Hiện lịch sử chỉnh sửa' data-dismiss='modal'
                                                       data-backdrop='true' style='display:none'>Đã chỉnh sửa</a>
                                                    <a class="tip" href="javascript:void(0);"
                                                       original-title="Chia sẻ với: Mọi người"> <i
                                                                class="material-icons">public</i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="clear"></div>
                                        <div class="activity_feed_content_text" id="activity_feed_content_text_641">


                                            <div class="activity_item">

                                                <div class="activity_left">
                                                    <a href="/blogs/view/110/wednesday-coyotes-songs-blown-contribute">
                                                        <img width="150" class="thum_activity"
                                                             src="http://yaloo.me/blog/img/noimage/blog.png"/>
                                                    </a>
                                                </div>

                                                <div class="activity_right ">
                                                    <div class="activity_header">
                                                        <a href="/blogs/view/110/wednesday-coyotes-songs-blown-contribute">Wednesday
                                                            Coyotes Songs - Blown Contribute</a>
                                                    </div>
                                                    Coyotes NewsCoyotes produce Archibald towards Penguins - 5 For
                                                    HowlingThey too go their 3 goalie level in opposition to the AHL in
                                                    direction of the ECHL.Arizona Coyotes deliver Dylan Strome in the...
                                                </div>
                                                <div class="clear"></div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="feed_comment_info">
                                        <div class="date">

                                            <a href="javascript:void(0)" class="showCommentForm" data-id="641"><i
                                                        class='material-icons'>comment</i>&nbsp;Bình luận</a>

                                            &nbsp;<a href="javascript:void(0)" data-id="110" data-type="Blog_Blog"
                                                     data-status="1" id="Blog_Blog_l_110"
                                                     class="comment-thumb likeActivity "><i class="material-icons">thumb_up</i></a>
                                            <a id='' href='/likes/ajax_show/Blog_Blog/110' data-target='#themeModal'
                                               data-toggle='modal' class='' title='Người thích điều này'
                                               data-dismiss='modal' data-backdrop='true' style=''><span
                                                        id="Blog_Blog_like_110">0</span></a> <a
                                                    href="javascript:void(0)" data-id="110" data-type="Blog_Blog"
                                                    data-status="0" id="Blog_Blog_d_110"
                                                    class="comment-thumb likeActivity "><i class="material-icons">thumb_down</i></a>

                                            <a id='' href='/likes/ajax_show/Blog_Blog/110/1' data-target='#themeModal'
                                               data-toggle='modal' class='' title='Người không thích điều này'
                                               data-dismiss='' data-backdrop='true' style=''><span
                                                        id="Blog_Blog_dislike_110">0</span></a>


                                            <a href="javascript:void(0);"
                                               share-url="http://yaloo.me/share/ajax_share/id:641" class="shareFeedBtn"><i
                                                        class="material-icons">share</i> Chia sẻ</a>


                                        </div>


                                        <ul class="activity_comments comment_list" id="comments_641"
                                            style="display:none">

                                            <li id="newComment_641">
                                                <a href="http://yaloo.me/users/view/6" prefix="50_square" tooltip="1"
                                                   data-item_id="6" data-item_type="user"
                                                   class="moocore_tooltip_link"><img
                                                            src="http://yaloo.me/uploads/users/avatar/6/50_square_e79cbba76054e014de73822cfeab2b04.jpg?1941"
                                                            class="user_avatar_small img_wrapper2" alt="Đức Khánh"
                                                            title=""/></a>
                                                <div class="comment">

                                                    <textarea name="data[commentForm_641]"
                                                              class="commentBox showCommentBtn" data-id="641"
                                                              placeholder="Viết bình luận..."
                                                              id="commentForm_641"></textarea>
                                                    <div id="commentForm_641-emoji" class="emoji-toggle"></div>

                                                    <div class="clear"></div>
                                                    <div style="display:block;" class="commentButton"
                                                         id="commentButton_641">
                                                        <input type="hidden" id="comment_image_641"/>
                                                        <div id="comment_button_attach_641"></div>
                                                        <a href="javascript:void(0)"
                                                           class="btn btn-action  viewer-submit-item-comment"
                                                           data-item-type="Blog_Blog" data-activity-item-id="110"
                                                           data-activity-id="641"><em
                                                                    class="material-icons">send</em></a>


                                                    </div>
                                                    <div id="comment_preview_image_641"></div>
                                                </div>
                                            </li>


                                        </ul>
                                    </div>
                                </li>
                                <li id="activity_640">
                                    <div class="feed_main_info">
                                        <div class="dropdown edit-post-icon">
                                            <a href="javascript:void(0)" data-toggle="dropdown" class="cross-icon">
                                                <i class="material-icons">more_vert</i>
                                            </a>
                                            <ul class="dropdown-menu" for="activity_menu_edit_640">
                                                <!-- New hook -->
                                                <!-- New hook -->
                                                <li class="">
                                                    <a id='' href='/reports/ajax_create/activity/640'
                                                       data-target='#themeModal' data-toggle='modal' class=''
                                                       title='Báo cáo hoạt động' data-dismiss='' data-backdrop='true'
                                                       style=''>Báo cáo hoạt động</a></li>
                                            </ul>
                                        </div>
                                        <!-- New hook -->
                                        <!-- New hook -->

                                        <div class="activity_feed_image">
                                            <a href="http://yaloo.me/users/view/82" prefix="50_square" tooltip="1"
                                               data-item_id="82" data-item_type="user" class="moocore_tooltip_link"><img
                                                        src="http://yaloo.me/uploads/users/avatar/82/50_square_d2ed89578649ff7469839f694c069ca2.jpg?8643"
                                                        class="img_wrapper2 user_avatar_large" alt="Atlanta" title=""/></a>
                                        </div>

                                        <div class="activity_feed_content">
                                            <div class="comment hasDelLink">
                                                <div class="activity_text">
                                                    <a href="/users/view/82" class="moocore_tooltip_link"
                                                       data-item_type="user" data-item_id="82"><b>Atlanta</b></a> Tạo
                                                    blog entry mới
                                                </div>
                                                <div class="feed_time">
                                                    <a href="/users/view/82/activity_id:640" class="date">vào November
                                                        16 2019 at 03:42 PM</a>
                                                    <a id='history_activity_640'
                                                       href='/histories/ajax_show/activity/640'
                                                       data-target='#themeModal' data-toggle='modal' class='edit-btn'
                                                       title='Hiện lịch sử chỉnh sửa' data-dismiss='modal'
                                                       data-backdrop='true' style='display:none'>Đã chỉnh sửa</a>
                                                    <a class="tip" href="javascript:void(0);"
                                                       original-title="Chia sẻ với: Mọi người"> <i
                                                                class="material-icons">public</i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="clear"></div>
                                        <div class="activity_feed_content_text" id="activity_feed_content_text_640">


                                            <div class="activity_item">

                                                <div class="activity_left">
                                                    <a href="/blogs/view/109/nhl-wrap-rangers-take-comeback-earn-in-excess-of-columbus">
                                                        <img width="150" class="thum_activity"
                                                             src="http://yaloo.me/blog/img/noimage/blog.png"/>
                                                    </a>
                                                </div>

                                                <div class="activity_right ">
                                                    <div class="activity_header">
                                                        <a href="/blogs/view/109/nhl-wrap-rangers-take-comeback-earn-in-excess-of-columbus">NHL
                                                            Wrap: Rangers take comeback earn in excess of Columbus</a>
                                                    </div>
                                                    The Clean York Rangers as they overcome the Columbus Blue Jackets
                                                    5-4 within just NHL step as Michael Grabner scored with 17 seconds
                                                    becoming for the victory upon night time Connor McDavid...
                                                </div>
                                                <div class="clear"></div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="feed_comment_info">
                                        <div class="date">

                                            <a href="javascript:void(0)" class="showCommentForm" data-id="640"><i
                                                        class='material-icons'>comment</i>&nbsp;Bình luận</a>

                                            &nbsp;<a href="javascript:void(0)" data-id="109" data-type="Blog_Blog"
                                                     data-status="1" id="Blog_Blog_l_109"
                                                     class="comment-thumb likeActivity "><i class="material-icons">thumb_up</i></a>
                                            <a id='' href='/likes/ajax_show/Blog_Blog/109' data-target='#themeModal'
                                               data-toggle='modal' class='' title='Người thích điều này'
                                               data-dismiss='modal' data-backdrop='true' style=''><span
                                                        id="Blog_Blog_like_109">0</span></a> <a
                                                    href="javascript:void(0)" data-id="109" data-type="Blog_Blog"
                                                    data-status="0" id="Blog_Blog_d_109"
                                                    class="comment-thumb likeActivity "><i class="material-icons">thumb_down</i></a>

                                            <a id='' href='/likes/ajax_show/Blog_Blog/109/1' data-target='#themeModal'
                                               data-toggle='modal' class='' title='Người không thích điều này'
                                               data-dismiss='' data-backdrop='true' style=''><span
                                                        id="Blog_Blog_dislike_109">0</span></a>


                                            <a href="javascript:void(0);"
                                               share-url="http://yaloo.me/share/ajax_share/id:640" class="shareFeedBtn"><i
                                                        class="material-icons">share</i> Chia sẻ</a>


                                        </div>


                                        <ul class="activity_comments comment_list" id="comments_640"
                                            style="display:none">

                                            <li id="newComment_640">
                                                <a href="http://yaloo.me/users/view/6" prefix="50_square" tooltip="1"
                                                   data-item_id="6" data-item_type="user"
                                                   class="moocore_tooltip_link"><img
                                                            src="http://yaloo.me/uploads/users/avatar/6/50_square_e79cbba76054e014de73822cfeab2b04.jpg?182"
                                                            class="user_avatar_small img_wrapper2" alt="Đức Khánh"
                                                            title=""/></a>
                                                <div class="comment">

                                                    <textarea name="data[commentForm_640]"
                                                              class="commentBox showCommentBtn" data-id="640"
                                                              placeholder="Viết bình luận..."
                                                              id="commentForm_640"></textarea>
                                                    <div id="commentForm_640-emoji" class="emoji-toggle"></div>

                                                    <div class="clear"></div>
                                                    <div style="display:block;" class="commentButton"
                                                         id="commentButton_640">
                                                        <input type="hidden" id="comment_image_640"/>
                                                        <div id="comment_button_attach_640"></div>
                                                        <a href="javascript:void(0)"
                                                           class="btn btn-action  viewer-submit-item-comment"
                                                           data-item-type="Blog_Blog" data-activity-item-id="109"
                                                           data-activity-id="640"><em
                                                                    class="material-icons">send</em></a>


                                                    </div>
                                                    <div id="comment_preview_image_640"></div>
                                                </div>
                                            </li>


                                        </ul>
                                    </div>
                                </li>
                                <li id="activity_639">
                                    <div class="feed_main_info">
                                        <div class="dropdown edit-post-icon">
                                            <a href="javascript:void(0)" data-toggle="dropdown" class="cross-icon">
                                                <i class="material-icons">more_vert</i>
                                            </a>
                                            <ul class="dropdown-menu" for="activity_menu_edit_639">
                                                <!-- New hook -->
                                                <!-- New hook -->
                                                <li class="">
                                                    <a id='' href='/reports/ajax_create/activity/639'
                                                       data-target='#themeModal' data-toggle='modal' class=''
                                                       title='Báo cáo hoạt động' data-dismiss='' data-backdrop='true'
                                                       style=''>Báo cáo hoạt động</a></li>
                                            </ul>
                                        </div>
                                        <!-- New hook -->
                                        <!-- New hook -->

                                        <div class="activity_feed_image">
                                            <a href="http://yaloo.me/users/view/82" prefix="50_square" tooltip="1"
                                               data-item_id="82" data-item_type="user" class="moocore_tooltip_link"><img
                                                        src="http://yaloo.me/uploads/users/avatar/82/50_square_d2ed89578649ff7469839f694c069ca2.jpg?2889"
                                                        class="img_wrapper2 user_avatar_large" alt="Atlanta" title=""/></a>
                                        </div>

                                        <div class="activity_feed_content">
                                            <div class="comment hasDelLink">
                                                <div class="activity_text">
                                                    <a href="/users/view/82" class="moocore_tooltip_link"
                                                       data-item_type="user" data-item_id="82"><b>Atlanta</b></a> Tạo
                                                    blog entry mới
                                                </div>
                                                <div class="feed_time">
                                                    <a href="/users/view/82/activity_id:639" class="date">vào November
                                                        16 2019 at 03:41 PM</a>
                                                    <a id='history_activity_639'
                                                       href='/histories/ajax_show/activity/639'
                                                       data-target='#themeModal' data-toggle='modal' class='edit-btn'
                                                       title='Hiện lịch sử chỉnh sửa' data-dismiss='modal'
                                                       data-backdrop='true' style='display:none'>Đã chỉnh sửa</a>
                                                    <a class="tip" href="javascript:void(0);"
                                                       original-title="Chia sẻ với: Mọi người"> <i
                                                                class="material-icons">public</i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="clear"></div>
                                        <div class="activity_feed_content_text" id="activity_feed_content_text_639">


                                            <div class="activity_item">

                                                <div class="activity_left">
                                                    <a href="/blogs/view/108/tavares-ratings-2-times-hits-300-function-mark-leafs-battle-devils">
                                                        <img width="150" class="thum_activity"
                                                             src="http://yaloo.me/blog/img/noimage/blog.png"/>
                                                    </a>
                                                </div>

                                                <div class="activity_right ">
                                                    <div class="activity_header">
                                                        <a href="/blogs/view/108/tavares-ratings-2-times-hits-300-function-mark-leafs-battle-devils">Tavares
                                                            ratings 2 times, hits 300-function mark, Leafs battle
                                                            Devils</a>
                                                    </div>
                                                    NEWARK, N.J. (AP) — John Tavares is generating every single penny of
                                                    the 7-12 months Nikita Zaitsev Jersey, $77 million deal the Toronto
                                                    Maple Leafs gave him inside the offseason.Not merely is he...
                                                </div>
                                                <div class="clear"></div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="feed_comment_info">
                                        <div class="date">

                                            <a href="javascript:void(0)" class="showCommentForm" data-id="639"><i
                                                        class='material-icons'>comment</i>&nbsp;Bình luận</a>

                                            &nbsp;<a href="javascript:void(0)" data-id="108" data-type="Blog_Blog"
                                                     data-status="1" id="Blog_Blog_l_108"
                                                     class="comment-thumb likeActivity "><i class="material-icons">thumb_up</i></a>
                                            <a id='' href='/likes/ajax_show/Blog_Blog/108' data-target='#themeModal'
                                               data-toggle='modal' class='' title='Người thích điều này'
                                               data-dismiss='modal' data-backdrop='true' style=''><span
                                                        id="Blog_Blog_like_108">0</span></a> <a
                                                    href="javascript:void(0)" data-id="108" data-type="Blog_Blog"
                                                    data-status="0" id="Blog_Blog_d_108"
                                                    class="comment-thumb likeActivity "><i class="material-icons">thumb_down</i></a>

                                            <a id='' href='/likes/ajax_show/Blog_Blog/108/1' data-target='#themeModal'
                                               data-toggle='modal' class='' title='Người không thích điều này'
                                               data-dismiss='' data-backdrop='true' style=''><span
                                                        id="Blog_Blog_dislike_108">0</span></a>


                                            <a href="javascript:void(0);"
                                               share-url="http://yaloo.me/share/ajax_share/id:639" class="shareFeedBtn"><i
                                                        class="material-icons">share</i> Chia sẻ</a>


                                        </div>


                                        <ul class="activity_comments comment_list" id="comments_639"
                                            style="display:none">

                                            <li id="newComment_639">
                                                <a href="http://yaloo.me/users/view/6" prefix="50_square" tooltip="1"
                                                   data-item_id="6" data-item_type="user"
                                                   class="moocore_tooltip_link"><img
                                                            src="http://yaloo.me/uploads/users/avatar/6/50_square_e79cbba76054e014de73822cfeab2b04.jpg?1265"
                                                            class="user_avatar_small img_wrapper2" alt="Đức Khánh"
                                                            title=""/></a>
                                                <div class="comment">

                                                    <textarea name="data[commentForm_639]"
                                                              class="commentBox showCommentBtn" data-id="639"
                                                              placeholder="Viết bình luận..."
                                                              id="commentForm_639"></textarea>
                                                    <div id="commentForm_639-emoji" class="emoji-toggle"></div>

                                                    <div class="clear"></div>
                                                    <div style="display:block;" class="commentButton"
                                                         id="commentButton_639">
                                                        <input type="hidden" id="comment_image_639"/>
                                                        <div id="comment_button_attach_639"></div>
                                                        <a href="javascript:void(0)"
                                                           class="btn btn-action  viewer-submit-item-comment"
                                                           data-item-type="Blog_Blog" data-activity-item-id="108"
                                                           data-activity-id="639"><em
                                                                    class="material-icons">send</em></a>


                                                    </div>
                                                    <div id="comment_preview_image_639"></div>
                                                </div>
                                            </li>


                                        </ul>
                                    </div>
                                </li>
                                <li id="activity_638">
                                    <div class="feed_main_info">
                                        <div class="dropdown edit-post-icon">
                                            <a href="javascript:void(0)" data-toggle="dropdown" class="cross-icon">
                                                <i class="material-icons">more_vert</i>
                                            </a>
                                            <ul class="dropdown-menu" for="activity_menu_edit_638">
                                                <!-- New hook -->
                                                <!-- New hook -->
                                                <li class="">
                                                    <a id='' href='/reports/ajax_create/activity/638'
                                                       data-target='#themeModal' data-toggle='modal' class=''
                                                       title='Báo cáo hoạt động' data-dismiss='' data-backdrop='true'
                                                       style=''>Báo cáo hoạt động</a></li>
                                            </ul>
                                        </div>
                                        <!-- New hook -->
                                        <!-- New hook -->

                                        <div class="activity_feed_image">
                                            <a href="http://yaloo.me/users/view/82" prefix="50_square" tooltip="1"
                                               data-item_id="82" data-item_type="user" class="moocore_tooltip_link"><img
                                                        src="http://yaloo.me/uploads/users/avatar/82/50_square_d2ed89578649ff7469839f694c069ca2.jpg?5805"
                                                        class="img_wrapper2 user_avatar_large" alt="Atlanta" title=""/></a>
                                        </div>

                                        <div class="activity_feed_content">
                                            <div class="comment hasDelLink">
                                                <div class="activity_text">
                                                    <a href="/users/view/82" class="moocore_tooltip_link"
                                                       data-item_type="user" data-item_id="82"><b>Atlanta</b></a> Tạo
                                                    blog entry mới
                                                </div>
                                                <div class="feed_time">
                                                    <a href="/users/view/82/activity_id:638" class="date">vào November
                                                        16 2019 at 03:41 PM</a>
                                                    <a id='history_activity_638'
                                                       href='/histories/ajax_show/activity/638'
                                                       data-target='#themeModal' data-toggle='modal' class='edit-btn'
                                                       title='Hiện lịch sử chỉnh sửa' data-dismiss='modal'
                                                       data-backdrop='true' style='display:none'>Đã chỉnh sửa</a>
                                                    <a class="tip" href="javascript:void(0);"
                                                       original-title="Chia sẻ với: Mọi người"> <i
                                                                class="material-icons">public</i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="clear"></div>
                                        <div class="activity_feed_content_text" id="activity_feed_content_text_638">


                                            <div class="activity_item">

                                                <div class="activity_left">
                                                    <a href="/blogs/view/107/lightning-battle-isles-7-6-within-just-a-wild-sport-inside-of-brooklyn">
                                                        <img width="150" class="thum_activity"
                                                             src="http://yaloo.me/blog/img/noimage/blog.png"/>
                                                    </a>
                                                </div>

                                                <div class="activity_right ">
                                                    <div class="activity_header">
                                                        <a href="/blogs/view/107/lightning-battle-isles-7-6-within-just-a-wild-sport-inside-of-brooklyn">Lightning
                                                            battle Isles 7-6 within just a wild sport inside of
                                                            Brooklyn</a>
                                                    </div>
                                                    Tonight we figured out what occurs Though 2 groups devote towards
                                                    actively playing pond hockey security for extensive situations as
                                                    the Tampa Bay Lightning defeated the Contemporary York Islanders...
                                                </div>
                                                <div class="clear"></div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="feed_comment_info">
                                        <div class="date">

                                            <a href="javascript:void(0)" class="showCommentForm" data-id="638"><i
                                                        class='material-icons'>comment</i>&nbsp;Bình luận</a>

                                            &nbsp;<a href="javascript:void(0)" data-id="107" data-type="Blog_Blog"
                                                     data-status="1" id="Blog_Blog_l_107"
                                                     class="comment-thumb likeActivity "><i class="material-icons">thumb_up</i></a>
                                            <a id='' href='/likes/ajax_show/Blog_Blog/107' data-target='#themeModal'
                                               data-toggle='modal' class='' title='Người thích điều này'
                                               data-dismiss='modal' data-backdrop='true' style=''><span
                                                        id="Blog_Blog_like_107">0</span></a> <a
                                                    href="javascript:void(0)" data-id="107" data-type="Blog_Blog"
                                                    data-status="0" id="Blog_Blog_d_107"
                                                    class="comment-thumb likeActivity "><i class="material-icons">thumb_down</i></a>

                                            <a id='' href='/likes/ajax_show/Blog_Blog/107/1' data-target='#themeModal'
                                               data-toggle='modal' class='' title='Người không thích điều này'
                                               data-dismiss='' data-backdrop='true' style=''><span
                                                        id="Blog_Blog_dislike_107">0</span></a>


                                            <a href="javascript:void(0);"
                                               share-url="http://yaloo.me/share/ajax_share/id:638" class="shareFeedBtn"><i
                                                        class="material-icons">share</i> Chia sẻ</a>


                                        </div>


                                        <ul class="activity_comments comment_list" id="comments_638"
                                            style="display:none">

                                            <li id="newComment_638">
                                                <a href="http://yaloo.me/users/view/6" prefix="50_square" tooltip="1"
                                                   data-item_id="6" data-item_type="user"
                                                   class="moocore_tooltip_link"><img
                                                            src="http://yaloo.me/uploads/users/avatar/6/50_square_e79cbba76054e014de73822cfeab2b04.jpg?4648"
                                                            class="user_avatar_small img_wrapper2" alt="Đức Khánh"
                                                            title=""/></a>
                                                <div class="comment">

                                                    <textarea name="data[commentForm_638]"
                                                              class="commentBox showCommentBtn" data-id="638"
                                                              placeholder="Viết bình luận..."
                                                              id="commentForm_638"></textarea>
                                                    <div id="commentForm_638-emoji" class="emoji-toggle"></div>

                                                    <div class="clear"></div>
                                                    <div style="display:block;" class="commentButton"
                                                         id="commentButton_638">
                                                        <input type="hidden" id="comment_image_638"/>
                                                        <div id="comment_button_attach_638"></div>
                                                        <a href="javascript:void(0)"
                                                           class="btn btn-action  viewer-submit-item-comment"
                                                           data-item-type="Blog_Blog" data-activity-item-id="107"
                                                           data-activity-id="638"><em
                                                                    class="material-icons">send</em></a>


                                                    </div>
                                                    <div id="comment_preview_image_638"></div>
                                                </div>
                                            </li>


                                        </ul>
                                    </div>
                                </li>
                                <li id="activity_637">
                                    <div class="feed_main_info">
                                        <div class="dropdown edit-post-icon">
                                            <a href="javascript:void(0)" data-toggle="dropdown" class="cross-icon">
                                                <i class="material-icons">more_vert</i>
                                            </a>
                                            <ul class="dropdown-menu" for="activity_menu_edit_637">
                                                <!-- New hook -->
                                                <!-- New hook -->
                                                <li class="">
                                                    <a id='' href='/reports/ajax_create/activity/637'
                                                       data-target='#themeModal' data-toggle='modal' class=''
                                                       title='Báo cáo hoạt động' data-dismiss='' data-backdrop='true'
                                                       style=''>Báo cáo hoạt động</a></li>
                                            </ul>
                                        </div>
                                        <!-- New hook -->
                                        <!-- New hook -->

                                        <div class="activity_feed_image">
                                            <a href="http://yaloo.me/users/view/82" prefix="50_square" tooltip="1"
                                               data-item_id="82" data-item_type="user" class="moocore_tooltip_link"><img
                                                        src="http://yaloo.me/uploads/users/avatar/82/50_square_d2ed89578649ff7469839f694c069ca2.jpg?7600"
                                                        class="img_wrapper2 user_avatar_large" alt="Atlanta" title=""/></a>
                                        </div>

                                        <div class="activity_feed_content">
                                            <div class="comment hasDelLink">
                                                <div class="activity_text">
                                                    <a href="/users/view/82" class="moocore_tooltip_link"
                                                       data-item_type="user" data-item_id="82"><b>Atlanta</b></a> Tạo
                                                    blog entry mới
                                                </div>
                                                <div class="feed_time">
                                                    <a href="/users/view/82/activity_id:637" class="date">vào November
                                                        16 2019 at 03:41 PM</a>
                                                    <a id='history_activity_637'
                                                       href='/histories/ajax_show/activity/637'
                                                       data-target='#themeModal' data-toggle='modal' class='edit-btn'
                                                       title='Hiện lịch sử chỉnh sửa' data-dismiss='modal'
                                                       data-backdrop='true' style='display:none'>Đã chỉnh sửa</a>
                                                    <a class="tip" href="javascript:void(0);"
                                                       original-title="Chia sẻ với: Mọi người"> <i
                                                                class="material-icons">public</i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="clear"></div>
                                        <div class="activity_feed_content_text" id="activity_feed_content_text_637">


                                            <div class="activity_item">

                                                <div class="activity_left">
                                                    <a href="/blogs/view/106/ducks-canadiens-early-morning-questions-2-ways-ahead-just-one-phase-ba">
                                                        <img width="150" class="thum_activity"
                                                             src="http://yaloo.me/blog/img/noimage/blog.png"/>
                                                    </a>
                                                </div>

                                                <div class="activity_right ">
                                                    <div class="activity_header">
                                                        <a href="/blogs/view/106/ducks-canadiens-early-morning-questions-2-ways-ahead-just-one-phase-ba">Ducks
                                                            @ Canadiens Early morning Questions: 2 Ways Ahead, Just one
                                                            Phase Back again</a>
                                                    </div>
                                                    At the time an high quality conclude in the direction of January,
                                                    that noticed the Ducks acquire 5 of their very last 6 game titles,
                                                    theye taken a move backwards towards start off February with...
                                                </div>
                                                <div class="clear"></div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="feed_comment_info">
                                        <div class="date">

                                            <a href="javascript:void(0)" class="showCommentForm" data-id="637"><i
                                                        class='material-icons'>comment</i>&nbsp;Bình luận</a>

                                            &nbsp;<a href="javascript:void(0)" data-id="106" data-type="Blog_Blog"
                                                     data-status="1" id="Blog_Blog_l_106"
                                                     class="comment-thumb likeActivity "><i class="material-icons">thumb_up</i></a>
                                            <a id='' href='/likes/ajax_show/Blog_Blog/106' data-target='#themeModal'
                                               data-toggle='modal' class='' title='Người thích điều này'
                                               data-dismiss='modal' data-backdrop='true' style=''><span
                                                        id="Blog_Blog_like_106">0</span></a> <a
                                                    href="javascript:void(0)" data-id="106" data-type="Blog_Blog"
                                                    data-status="0" id="Blog_Blog_d_106"
                                                    class="comment-thumb likeActivity "><i class="material-icons">thumb_down</i></a>

                                            <a id='' href='/likes/ajax_show/Blog_Blog/106/1' data-target='#themeModal'
                                               data-toggle='modal' class='' title='Người không thích điều này'
                                               data-dismiss='' data-backdrop='true' style=''><span
                                                        id="Blog_Blog_dislike_106">0</span></a>


                                            <a href="javascript:void(0);"
                                               share-url="http://yaloo.me/share/ajax_share/id:637" class="shareFeedBtn"><i
                                                        class="material-icons">share</i> Chia sẻ</a>


                                        </div>


                                        <ul class="activity_comments comment_list" id="comments_637"
                                            style="display:none">

                                            <li id="newComment_637">
                                                <a href="http://yaloo.me/users/view/6" prefix="50_square" tooltip="1"
                                                   data-item_id="6" data-item_type="user"
                                                   class="moocore_tooltip_link"><img
                                                            src="http://yaloo.me/uploads/users/avatar/6/50_square_e79cbba76054e014de73822cfeab2b04.jpg?6148"
                                                            class="user_avatar_small img_wrapper2" alt="Đức Khánh"
                                                            title=""/></a>
                                                <div class="comment">

                                                    <textarea name="data[commentForm_637]"
                                                              class="commentBox showCommentBtn" data-id="637"
                                                              placeholder="Viết bình luận..."
                                                              id="commentForm_637"></textarea>
                                                    <div id="commentForm_637-emoji" class="emoji-toggle"></div>

                                                    <div class="clear"></div>
                                                    <div style="display:block;" class="commentButton"
                                                         id="commentButton_637">
                                                        <input type="hidden" id="comment_image_637"/>
                                                        <div id="comment_button_attach_637"></div>
                                                        <a href="javascript:void(0)"
                                                           class="btn btn-action  viewer-submit-item-comment"
                                                           data-item-type="Blog_Blog" data-activity-item-id="106"
                                                           data-activity-id="637"><em
                                                                    class="material-icons">send</em></a>


                                                    </div>
                                                    <div id="comment_preview_image_637"></div>
                                                </div>
                                            </li>


                                        </ul>
                                    </div>
                                </li>

                                <div class="view-more">
                                    <a href="javascript:void(0)" class="viewMoreBtn"
                                       data-url="/activities/browse/everyone/page:2" data-div="list-content">Xem
                                        thêm</a>
                                </div>
                            </ul>
                        </div>
                    </div>

                </div>
            </div>


        </div>
        <div class="clear"></div>


        <div class="visible-xs visible-sm">
            <div class="mobile-footer">


                <a class="pull-left" href="#" data-target="#leftnav"><i
                            class="material-icons">format_indent_increase</i></a>
                <a href="#" data-target="#right" class="pull-right"><i class="material-icons">format_indent_decrease</i></a>


            </div>
        </div>
    </div>
    <!-- Modal -->
    <section class="modal fade" id="whonearmeModal" role="basic" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content"></div>
        </div>
    </section>
    <section class="modal fade" id="themeModal" role="basic" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content"></div>
        </div>
    </section>
    <section class="modal fade" id="langModal" role="basic" tabindex='-1' aria-labelledby="myModalLabel"
             aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content"></div>
        </div>
    </section>
    <section class="modal fade modal-fullscreen force-fullscreen" tabindex='-1' id="photoModal" role="basic"
             aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content"></div>
        </div>
    </section>

    <!-- BEGIN SAMPLE PORTLET CONFIGURATION MODAL FORM-->
    <div class="modal fade" id="portlet-config" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
         aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                    <h4 class="modal-title">Modal title</h4>
                </div>
                <div class="modal-body">

                </div>
                <div class="modal-footer">
                    <!-- Config -->
                    <button type="button" class="btn blue ok">Đồng ý</button>
                    <button type="button" class="btn default" data-dismiss="modal">Đóng</button>

                </div>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
    <div class="modal fade" id="plan-view" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
         aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                                aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel">Modal title</h4>
                </div>
                <div class="modal-body">
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
    </div>

    <div id="footer">
        <div class="bar-content">
            <ul class="menu_2 nav navbar-nav menu_top_list horizontal" id="">
                <li class=""><a href="/pages/about-us" no_replace_ssl="1" title="" class="" target=""><i
                                class="material-icons"></i>About Us</a></li>
                <li class=""><a href="/pages/terms-of-service" no_replace_ssl="1" title="" class="" target=""><i
                                class="material-icons"></i>Terms of Service</a></li>
                <li class=""><a href="/pages/privacy-policy" no_replace_ssl="1" title="" class="" target=""><i
                                class="material-icons"></i>Privacy Policy</a></li>
                <li class=""><a href="/home/contact" no_replace_ssl="1" title="" class="" target=""><i
                                class="material-icons"></i>Contact Us</a></li>
            </ul>
        </div>
        <br/>
        <span class="date">Phát triển bởi
        <a href="http://yaloo.me" target="_blank">yaloo 1.0</a>
    </span>

        &nbsp;.&nbsp; <a href="/home/ajax_lang"
                         data-target="#langModal" data-toggle="modal"
                         title="Ngôn ngữ">
            Việt Nam </a>


    </div>


    <div id="shareFeedModal" data-backdrop="static" class="modal fade" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                                aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel">Chia sẻ</h4>
                </div>
                <div class="modal-body">
                    <script>

                        function ResizeIframe(id) {
                            var frame = document.getElementById(id);
                            frame.height = frame.contentWindow.document.body.scrollHeight + "px";
                        }

                    </script>
                    <iframe id="iframeShare" onload="ResizeIframe('iframeShare')" src="" width="99.6%" height=""
                            frameborder="0"></iframe>
                </div>

            </div>
        </div>
    </div>
</div>
<!--
===========SCRIPT====================-->
<script src="//maps.googleapis.com/maps/api/js?v=3.exp&libraries=places&key=AIzaSyCEoB6M0lgnt1d_gPQc9yY5UXpcZoChsOU"></script>
<script type="text/javascript">
    //<![CDATA[
    var mooConfig = {
        "url": {"base": "", "webroot": "\/", "full": "http:\/\/yaloo.me"},
        "language": "vie",
        "language_2letter": "vi",
        "autoLoadMore": "1",
        "sizeLimit": 209715200,
        "videoMaxUpload": 314572800,
        "isMobile": false,
        "isMention": true,
        "photoExt": ["jpg", "jpeg", "png", "gif"],
        "videoExt": ["flv", "mp4", "wmv", "3gp", "mov", "avi"],
        "attachmentExt": ["jpg", "jpeg", "png", "gif", "zip", "txt", "pdf", "doc", "docx"],
        "comment_sort_style": "0",
        "reply_sort_style": "0",
        "tinyMCE_language": "vi_VN",
        "time_format": "12",
        "profile_popup": "1",
        "rtl": false,
        "force_login": "",
        "isApp": 0,
        "appAccessToken": "",
        "product_mode": "0",
        "photo_consider_force": "",
        "FeedPluginConfig": {
            "StatusBackground": ["Checkin", "FeedList", "UploadVideo", "GifComment"],
            "Feeling": [],
            "UploadVideo": ["StatusBackground", "FeedList", "Checkin", "GifComment"],
            "FeedList": ["StatusBackground", "UploadVideo", "Checkin", "GifComment"],
            "Checkin": ["StatusBackground", "FeedList", "UploadVideo"],
            "GifComment": ["StatusBackground", "FeedList", "UploadVideo"]
        }
    };
    //]]>
</script>
<script type="text/javascript" src="/js/moocore/require.js"></script>
<script type="text/javascript">
    //<![CDATA[
    define('mooPhrase', ['jquery', 'rootPhrase'], function ($, mooPhrase) {
        $(document).ready(function () {
            mooPhrase.set({
                "done_tagging": "G\u1eafn th\u1ebb xong",
                "tag_photo": "G\u1eafn th\u1ebb \u1ea3nh",
                "are_you_delete": "B\u1ea1n c\u00f3 ch\u1eafc ch\u1eafn mu\u1ed1n x\u00f3a \u1ea3nh n\u00e0y?",
                "are_you_sure_you_want_to_delete_this_album_all_photos_will_also_be_deleted": "B\u1ea1n c\u00f3 ch\u1eafc ch\u1eafn mu\u1ed1n x\u00f3a album n\u00e0y kh\u00f4ng? T\u1ea5t c\u1ea3 h\u00ecnh \u1ea3nh c\u0169ng s\u1ebd b\u1ecb x\u00f3a!",
                "are_you_sure_you_want_to_delete_this_photo": "B\u1ea1n c\u00f3 ch\u1eafc ch\u1eafn mu\u1ed1n x\u00f3a \u1ea3nh n\u00e0y?",
                "are_you_sure_you_want_to_remove_this_video": "B\u1ea1n c\u00f3 ch\u1eafc ch\u1eafn mu\u1ed1n x\u00f3a video n\u00e0y?",
                "drag_or_click_here_to_upload_photo": "K\u00e9o ho\u1eb7c b\u1ea5m v\u00e0o \u0111\u00e2y \u0111\u1ec3 t\u1ea3i \u1ea3nh",
                "january": "Th\u00e1ng 1",
                "february": "Th\u00e1ng 2",
                "march": "Th\u00e1ng 3",
                "april": "Th\u00e1ng 4",
                "may": "Th\u00e1ng 5",
                "june": "Th\u00e1ng 6",
                "july": "Th\u00e1ng 7",
                "august": "Th\u00e1ng 8",
                "september": "Th\u00e1ng 9",
                "october": "Th\u00e1ng 10",
                "november": "Th\u00e1ng 11",
                "december": "Th\u00e1ng 12",
                "jan": "Th\u00e1ng 1",
                "feb": "Th\u00e1ng 2",
                "mar": "Th\u00e1ng 3",
                "apr": "Th\u00e1ng 4",
                "jun": "Th\u00e1ng 6",
                "jul": "Th\u00e1ng 7",
                "aug": "Th\u00e1ng 8",
                "sep": "Th\u00e1ng 9",
                "oct": "Th\u00e1ng 10",
                "nov": "Th\u00e1ng11",
                "dec": "Th\u00e1ng 12",
                "sunday": "Ch\u1ee7 nh\u1eadt",
                "monday": "Th\u1ee9 2",
                "tuesday": "Th\u1ee9  3",
                "wednesday": "Th\u1ee9 4",
                "thursday": "Th\u1ee9 5",
                "friday": "Th\u1ee9  6",
                "saturday": "Th\u1ee9 7",
                "sun": "Ch\u1ee7 nh\u1eadt",
                "mon": "Th\u1ee9 2",
                "tue": "Th\u1ee9  3",
                "wed": "Th\u1ee9 4",
                "thu": "Th\u1ee9 5",
                "fri": "Th\u1ee9  6",
                "sat": "Th\u1ee9 7",
                "today": "H\u00f4m nay",
                "clear": "X\u00f3a",
                "close": "\u0110\u00f3ng",
                "to_date_must_be_greater_than_from_date": "Ng\u00e0y k\u1ebft th\u00fac ph\u1ea3i l\u1edbn h\u01a1n ng\u00e0y b\u1eaft \u0111\u1ea7u",
                "to_time_must_be_greater_than_from_time": "Th\u1eddi gian \u0111\u1ebfn ph\u1ea3i l\u1edbn h\u01a1n th\u1eddi gian b\u1eaft \u0111\u1ea7u",
                "enter_a_friend_s_name": "Nh\u1eadp t\u00ean c\u1ee7a b\u1ea1n b\u00e8",
                "no_results": "kh\u00f4ng c\u00f3 k\u1ebft qu\u1ea3 n\u00e0o \u0111\u01b0\u1ee3c t\u00ecm th\u1ea5y",
                "are_you_sure_you_want_to_remove_this_event": "B\u1ea1n c\u00f3 ch\u1eafc mu\u1ed1n x\u00f3a s\u1ef1 ki\u1ec7n n\u00e0y?",
                "span_drag_or_span_click_here_to_upload_files": "\u003Cspan\u003E K\u00e9o ho\u1eb7c \u003C\/span\u003E b\u1ea5m v\u00e0o \u0111\u00e2y \u0111\u1ec3 t\u1ea3i t\u1eadp tin l\u00ean",
                "drag_or_click_here_to_upload_photo_attachment": "Drag or click here to upload photo or attachment",
                "are_you_sure_you_want_to_remove_this_topic": "B\u1ea1n c\u00f3 ch\u1eafc ch\u1eafn mu\u1ed1n x\u00f3a ch\u1ee7 \u0111\u1ec1 n\u00e0y?",
                "are_you_sure_you_want_to_remove_this_entry": "B\u1ea1n c\u00f3 ch\u1eafc ch\u1eafn mu\u1ed1n x\u00f3a entry n\u00e0y?",
                "are_you_sure_you_want_to_remove_this_member": "B\u1ea1n c\u00f3 ch\u1eafc ch\u1eafn mu\u1ed1n x\u00f3a th\u00e0nh vi\u00ean n\u00e0y?",
                "are_you_sure_you_want_to_demote_this_group_admin": "B\u1ea1n c\u00f3 ch\u1eafc ch\u1eafn mu\u1ed1n c\u00e1ch ch\u1ee9c qu\u1ea3n tr\u1ecb nh\u00f3m n\u00e0y?",
                "are_you_sure_you_want_to_make_this_member_a_group_admin": "B\u1ea1n c\u00f3 ch\u1eafc ch\u1eafn mu\u1ed1n l\u00e0m th\u00e0nh vi\u00ean c\u1ee7a nh\u00f3m qu\u1ea3n tr\u1ecb?",
                "are_you_sure_you_want_to_leave_this_group": "B\u1ea1n c\u00f3 ch\u1eafc mu\u1ed1n r\u1eddi kh\u1ecfi nh\u00f3m?",
                "are_you_sure_you_want_to_remove_this_group_br_all_group_contents_will_also_be_deleted": "B\u1ea1n c\u00f3 ch\u1eafc mu\u1ed1n x\u00f3a nh\u00f3m n\u00e0y? T\u1ea5t c\u1ea3 n\u1ed9i dung nh\u00f3m c\u0169ng s\u1ebd b\u1ecb x\u00f3a!",
                "advanced_search": "T\u00ecm ki\u1ebfm n\u00e2ng cao",
                "basic_search": "T\u00ecm ki\u1ebfm c\u01a1 b\u1ea3n",
                "found": "T\u00ecm",
                "member": "H\u1ed9i vi\u00ean",
                "members": "c\u00e1c th\u00e0nh vi\u00ean",
                "are_you_sure_want_to_delete_this_item": "B\u1ea1n c\u00f3 ch\u1eafc ch\u1eafn mu\u1ed1n x\u00f3a gi\u1ea5y ph\u00e9p n\u00e0y?",
                "delete_document_confirm": "B\u1ea1n c\u00f3 ch\u1eafc ch\u1eafn mu\u1ed1n x\u00f3a t\u00e0i li\u1ec7u n\u00e0y?",
                "location_not_valid": "V\u1ecb tr\u00ed c\u00f4ng vi\u1ec7c \u0111\u01b0\u1ee3c y\u00eau c\u1ea7u",
                "confirm": "X\u00e1c nh\u1eadn",
                "remove_tags": "H\u1ee7y b\u1ecf Th\u1ebb",
                "remove_tags_contents": "B\u1ea1n s\u1ebd kh\u00f4ng \u0111\u01b0\u1ee3c g\u1eafn th\u1ebb trong b\u00e0i n\u00e0y n\u1eefa. N\u00f3 c\u00f3 th\u1ec3 xu\u1ea5t hi\u1ec7n \u1edf nh\u1eefng n\u01a1i kh\u00e1c nh\u01b0 t\u01b0\u1eddng m\u1edbi ho\u1eb7c t\u00ecm ki\u1ebfm.",
                "ok": "\u0110\u1ed3ng \u00fd",
                "cancel": "H\u1ee7y",
                "please_confirm": "Vui l\u00f2ng x\u00e1c nh\u1eadn",
                "please_confirm_remove_this_activity": "B\u1ea1n c\u00f3 ch\u1eafc ch\u1eafn mu\u1ed1n x\u00f3a ho\u1ea1t \u0111\u1ed9ng n\u00e0y?",
                "btn_ok": "\u0110\u1ed3ng \u00fd",
                "btn_done": "Ho\u00e0n th\u00e0nh",
                "message": "L\u1eddi nh\u1eafn",
                "btn_cancel": "H\u1ee7y",
                "users": "Ng\u01b0\u1eddi s\u1eed d\u1ee5ng",
                "btn_upload": "T\u1ea3i l\u00ean m\u1ed9t t\u00e0i li\u1ec7u",
                "btn_retry": "Th\u1eed l\u1ea1i",
                "failed_upload": "T\u1ea3i l\u00ean th\u1ea5t b\u1ea1i",
                "drag_zone": "k\u00e9o \u1ea3nh v\u00e0o \u0111\u00e2y",
                "format_progress": "c\u1ee7a",
                "waiting_for_response": "\u0110ang x\u1eed l\u00fd ...",
                "loading": "\u0110ang t\u1ea3i...",
                "warning": "C\u1ea3nh b\u00e1o",
                "comment_empty": "B\u00ecnh lu\u1eadn kh\u00f4ng th\u1ec3 tr\u1ed1ng",
                "share_whats_new_can_not_empty": "\u0110i\u1ec1u chia s\u1ebb kh\u00f4ng th\u1ec3 tr\u1ed1ng",
                "please_login": "Vui l\u00f2ng \u0111\u0103ng nh\u1eadp \u0111\u1ec3 ti\u1ebfp t\u1ee5c",
                "please_confirm_your_email": "Vui l\u00f2ng x\u00e1c nh\u1eadn \u0111\u1ecba ch\u1ec9 email c\u1ee7a b\u1ea1n.",
                "your_account_is_pending_approval": "T\u00e0i kho\u1ea3n c\u1ee7a b\u1ea1n \u0111ang ch\u1edd ph\u00ea duy\u1ec7t.",
                "confirm_title": "Vui l\u00f2ng x\u00e1c nh\u1eadn",
                "send_email_progress": "Th\u00eam email t\u1edbi n\u01a1i t\u1ea1m \u0111\u1ec3 g\u1eedi.",
                "fineupload_uploadbutton": "T\u1ea3i l\u00ean m\u1ed9t t\u00e0i li\u1ec7u",
                "fineupload_cancel": "H\u1ee7y",
                "fineupload_retry": "Th\u1eed l\u1ea1i",
                "fineupload_title_file": "\u0110\u00ednh k\u00e8m m\u1ed9t b\u1ee9c \u1ea3nh",
                "fineupload_failupload": "T\u1ea3i l\u00ean th\u1ea5t b\u1ea1i",
                "fineupload_dragzone": "Th\u1ea3 file v\u00e0o \u0111\u00e2y \u0111\u1ec3 t\u1ea3i l\u00ean",
                "fineupload_dropprocessing": "\u0110ang x\u1eed l\u00fd t\u1eadp tin ",
                "fineupload_formatprogress": "{percent}% c\u1ee7a {total_size}",
                "fineupload_waitingforresponse": "\u0110ang x\u1eed l\u00fd ...",
                "fineupload_typeerror": "{file} c\u00f3 ph\u1ea7n m\u1edf r\u1ed9ng kh\u00f4ng h\u1ee3p l\u1ec7. Gia h\u1ea1n h\u1ee3p l\u1ec7(s):{extensions}.",
                "fineupload_sizeerror": "{file} qu\u00e1 l\u1edbn, k\u00edch th\u01b0\u1edbc t\u1ed1i \u0111a l\u00e0 {sizeLimit}.",
                "fineupload_minsizeerror": "{file} qu\u00e1 nh\u1ecf, k\u00edch th\u01b0\u1edbc t\u1ed1i thi\u1ec3u l\u00e0 {minSizeLimit}",
                "fineupload_emptyerror": "{file} tr\u1ed1ng, vui l\u00f2ng ch\u1ecdn c\u00e1c t\u1eadp tin m\u1ed9t l\u1ea7n n\u1eefa m\u00e0 kh\u00f4ng c\u00f3 n\u00f3.",
                "fineupload_nofileserror": "Kh\u00f4ng c\u00f3 t\u1eadp tin t\u1ea3i l\u00ean.",
                "fineupload_onleave": "C\u00e1c t\u1eadp tin \u0111\u01b0\u1ee3c t\u1ea3i l\u00ean, n\u1ebfu b\u1ea1n \u0111\u1ec3 l\u1ea1i b\u00e2y gi\u1edd upload s\u1ebd b\u1ecb h\u1ee7y b\u1ecf.",
                "confirm_delete_comment": "B\u1ea1n c\u00f3 ch\u1eafc ch\u1eafn mu\u1ed1n x\u00f3a b\u00ecnh lu\u1eadn n\u00e0y?",
                "confirm_login_as_user": "B\u1ea1n c\u00f3 ch\u1eafc ch\u1eafn mu\u1ed1n \u0111\u0103ng nh\u1eadp nh\u01b0 ng\u01b0\u1eddi d\u00f9ng n\u00e0y?",
                "are_you_sure_leave_this_page": "C\u00e1c t\u1eadp tin \u0111\u01b0\u1ee3c t\u1ea3i l\u00ean, n\u1ebfu b\u1ea1n \u0111\u1ec3 l\u1ea1i b\u00e2y gi\u1edd upload s\u1ebd b\u1ecb h\u1ee7y b\u1ecf.",
                "processing_video": "\u0110ang x\u1eed l\u00fd video",
                "processing_video_msg": "Video c\u1ee7a b\u1ea1n \u0111\u01b0\u1ee3c t\u1ea3i l\u00ean th\u00e0nh c\u00f4ng, xin vui l\u00f2ng ch\u1edd trong khi ch\u00fang t\u00f4i chuy\u1ec3n \u0111\u1ed5i video c\u1ee7a b\u1ea1n.",
                "birthday_wish_is_sent": "Sinh nh\u1eadt mong mu\u1ed1n \u0111\u01b0\u1ee3c g\u1eedi",
                "cancel_a_friend_request": "H\u1ee7y b\u1ecf y\u00eau c\u1ea7u k\u1ebft b\u1ea1n",
                "cancel_request": "H\u1ee7y y\u00eau c\u1ea7u",
                "please_select_area_for_cropping": "Vui l\u00f2ng ch\u1ecdn khu v\u1ef1c cho c\u1eaft",
                "you_have_to_agree_with_term_of_service": "B\u1ea1n ph\u1ea3i \u0111\u1ed3ng \u00fd v\u1edbi \u0111i\u1ec1u kho\u1ea3n d\u1ecbch v\u1ee5",
                "per_selected": "%s \u0110\u00e3 ch\u1ecdn",
                "are_you_sure_you_want_to_delete_these": "B\u1ea1n c\u00f3 ch\u1eafc ch\u1eafn b\u1ea1n mu\u1ed1n x\u00f3a ",
                "your_invitation_has_been_sent": "L\u1eddi m\u1eddi c\u1ee7a b\u1ea1n \u0111\u00e3 \u0111\u01b0\u1ee3c g\u1eedi \u0111i",
                "your_message_has_been_sent": "Tin nh\u1eafn c\u1ee7a b\u1ea1n \u0111\u00e3 \u0111\u01b0\u1ee3c g\u1eedi",
                "please_choose_an_image_that_s_at_least_400_pixels_wide_and_at_least_150_pixels_tall": "H\u00e3y ch\u1ecdn m\u1ed9t h\u00ecnh \u1ea3nh r\u1ed9ng \u00edt nh\u1ea5t 400 pixel v\u00e0 cao \u00edt nh\u1ea5t 150 pixel",
                "cannot_determine_dimensions_for_image_may_be_too_large": "Kh\u00f4ng th\u1ec3 x\u00e1c \u0111\u1ecbnh k\u00edch th\u01b0\u1edbc h\u00ecnh \u1ea3nh. C\u00f3 th\u1ec3 l\u00e0 qu\u00e1 l\u1edbn.",
                "join_group_request": "Y\u00eau c\u1ea7u tham gia nh\u00f3m",
                "your_request_to_join_group_sent_successfully": "Y\u00eau c\u1ea7u tham gia nh\u00f3m g\u1eedi th\u00e0nh c\u00f4ng",
                "turn_on_notifications": "B\u1eadt th\u00f4ng b\u00e1o",
                "stop_notifications": "Ng\u1eebng th\u00f4ng b\u00e1o",
                "please_select_friends_to_share": "H\u00e3y ch\u1ecdn b\u1ea1n b\u00e8 \u0111\u1ec3 chia s\u1ebb.",
                "please_select_groups_to_share": "Vui l\u00f2ng ch\u1ecdn nh\u00f3m \u0111\u1ec3 chia s\u1ebb.",
                "please_input_emails_to_share": "Xin vui l\u00f2ng \u0111i\u1ec1n email v\u00e0o \u0111\u1ec3 chia s\u1ebb.",
                "status": "Tr\u1ea1ng th\u00e1i",
                "validation_link_has_been_resend": "Li\u00ean k\u1ebft x\u00e1c nh\u1eadn \u0111\u00e3 \u0111\u01b0\u1ee3c g\u1eedi l\u1ea1i.",
                "confirm_deactivate_account": "B\u1ea1n c\u00f3 ch\u1eafc ch\u1eafn mu\u1ed1n v\u00f4 hi\u1ec7u h\u00f3a t\u00e0i kho\u1ea3n c\u1ee7a b\u1ea1n? H\u1ed3 s\u01a1 c\u1ee7a b\u1ea1n s\u1ebd kh\u00f4ng th\u1ec3 truy c\u1eadp v\u00e0o b\u1ea5t c\u1ee9 ai v\u00e0 b\u1ea1n s\u1ebd kh\u00f4ng th\u1ec3 \u0111\u0103ng nh\u1eadp l\u1ea1i!",
                "confirm_delete_account": "B\u1ea1n c\u00f3 ch\u1eafc ch\u1eafn mu\u1ed1n x\u00f3a v\u0129nh vi\u1ec5n t\u00e0i kho\u1ea3n c\u1ee7a b\u1ea1n? T\u1ea5t c\u1ea3 n\u1ed9i dung c\u1ee7a b\u1ea1n (bao g\u1ed3m c\u1ea3 c\u00e1c nh\u00f3m, c\u00e1c ch\u1ee7 \u0111\u1ec1, s\u1ef1 ki\u1ec7n ...) c\u0169ng s\u1ebd b\u1ecb x\u00f3a v\u0129nh vi\u1ec5n!",
                "text_follow": "Theo d\u00f5i",
                "text_unfollow": "H\u1ee7y theo d\u00f5i",
                "the_user_has_been_blocked": "Ng\u01b0\u1eddi d\u00f9ng \u0111\u00e3 b\u1ecb kh\u00f3a",
                "text_your_change_save": "\u0110\u00e3 l\u01b0u c\u00e1c thay \u0111\u1ed5i",
                "open_comment": "Open Comment",
                "close_comment": "Close Comment",
                "upload_error": "An error occurred during uploading file."
            })
        });
        var __ = function (name) {
            return mooPhrase.__(name);
        };
        return {__: __}
    });
    //]]>
</script>
<script type="text/javascript">
    //<![CDATA[
    requirejs.config({
        "baseUrl": "js", "shim": {
            "whonearme_markerclusterer": {"deps": ["jquery"]},
            "mooDocumentSlippry": {"deps": ["jquery"]},
            "typeahead": {"deps": ["jquery"], "exports": "typeahead"},
            "tagsinput": {"deps": ["jquery", "typeahead", "bloodhound"]},
            "global": {"deps": ["jquery", "magnificPopup", "autogrow", "spin", "tipsy", "tokeninput", "tinycon", "multiselect", "vendor/jquery.menubutton", "vendor/jquery.placeholder", "simplemodal", "hideshare", "jquerypp", "modernizr", "elastislide", "Jcrop"]},
            "tinyMCE": {"exports": "tinyMCE"},
            "server": {"exports": "server"},
            "bootstrap": {"deps": ["jquery"]},
            "autogrow": {"deps": ["jquery"]},
            "spin": {"deps": ["jquery"]},
            "magnificPopup": {"deps": ["jquery"]},
            "tipsy": {"deps": ["jquery"]},
            "jquery.slimscroll": {"deps": ["jquery"]},
            "multiselect": {"deps": ["jquery"]},
            "hideshare": {"deps": ["jquery"]},
            "simplemodal": {"deps": ["jquery", "mooPhrase"]},
            "jquerypp": {"deps": ["jquery"]},
            "modernizr": {"deps": ["jquery"]},
            "Jcrop": {"deps": ["jquery"]},
            "tokeninput": {"deps": ["jquery"]},
            "elastislide": {"deps": ["jquery", "modernizr"]},
            "babel": {"deps": ["polyfill"]},
            "mooToggleEmoji": {"deps": ["jquery"]}
        }, "paths": {
            "mooWhonearme": "/whonearme/js/main.min",
            "whonearme_markerclusterer": "/whonearme/js/markerclusterer.min",
            "mooDocument": "/document/js/main.min",
            "mooDocumentSlippry": "/document/js/slippry.min",
            "mooIndeedJs": "https://gdc.indeed.com/ads/apiresults",
            "mooIndeed": "/indeed/js/main.min",
            "mooLivenew": "/livenews/js/main.min",
            "overlay": "/js/global/jquery-overlay/jquery.overlay",
            "typeahead": "/js/global/typeahead/typeahead.jquery",
            "bloodhound": "/js/global/typeahead/bloodhound.min",
            "textcomplete": "/js/global/jquery-textcomplete/jquery.textcomplete",
            "tagsinput": "/js/global/typeahead/bootstrap-tagsinput",
            "jquery": "/js/global/jquery-1.11.1.min",
            "bootstrap": "/js/global/bootstrap/js/bootstrap.min",
            "server": "/js/moocore/ServerJS.min",
            "multiselect": "/js/vendor/jquery.multiselect",
            "hideshare": "/js/vendor/jquery.hideshare",
            "simplemodal": "/js/vendor/jquery.simplemodal.min",
            "spin": "/js/vendor/spin",
            "spinner": "/js/vendor/spin.custom.min",
            "autogrow": "/js/vendor/jquery.autogrow-textarea.min",
            "tipsy": "/js/vendor/jquery.tipsy.min",
            "tinycon": "/js/vendor/tinycon.min",
            "magnificPopup": "/js/jquery.mp.min",
            "Jcrop": "/js/jquery.Jcrop.min",
            "tinyMCE": "/js/tinymce/tinymce.min",
            "picker": "/js/pickadate/picker",
            "picker_date": "/js/pickadate/picker.date",
            "picker_time": "/js/pickadate/picker.time",
            "picker_legacy": "/js/pickadate/legacy",
            "tokeninput": "/js/jquery.tokeninput",
            "slimScroll": "/js/jquery.slimscroll",
            "qtip": "/js/qtip/jquery.qtip.min",
            "jquerypp": "/js/elastislide/jquerypp.custom",
            "modernizr": "/js/elastislide/modernizr.custom.17475",
            "elastislide": "/js/elastislide/jquery.elastislide",
            "mooResponsive": "/js/responsive.min",
            "mooAjax": "/js/moocore/ajax.min",
            "mooTab": "/js/moocore/tab.min",
            "mooAlert": "/js/moocore/alert.min",
            "rootPhrase": "/js/moocore/phrase.min",
            "mooOverlay": "/js/moocore/overlay.min",
            "mooBehavior": "/js/moocore/behavior.min",
            "mooButton": "/js/moocore/button.min",
            "mooMention": "/js/moocore/mention.min",
            "mooAttach": "/js/moocore/attach.min",
            "mooActivities": "/js/moocore/activity.min",
            "mooComment": "/js/moocore/comment.min",
            "mooEmoji": "/js/moocore/emoji.min",
            "mooNotification": "/js/moocore/notification.min",
            "mooSearch": "/js/moocore/search.min",
            "mooFileUploader": "/js/jquery.fileuploader.min",
            "mooShare": "/js/moocore/share.min",
            "mooUser": "/js/moocore/user.min",
            "mooGlobal": "/js/moocore/global.min",
            "mooLike": "/js/moocore/like.min",
            "mooTooltip": "/js/moocore/tooltip.min",
            "mooToggleEmoji": "/js/moocore/toggle-emoji.min",
            "mooBsModal": "/js/moocore/bootstrap-modal.min",
            "mooBlog": "/js/moocore/plugins/blog.min",
            "mooEvent": "/js/moocore/plugins/event.min",
            "mooGroup": "/js/moocore/plugins/group.min",
            "mooPhoto": "/js/moocore/plugins/photo.min",
            "mooPhotoTheater": "/js/moocore/photo_theater.min",
            "mooTopic": "/js/moocore/plugins/topic.min",
            "mooVideo": "/js/moocore/plugins/video.min"
        }, "waitSeconds": "30", "urlArgs": "v=4"
    });
    require(["jquery", "bootstrap", "server"], function ($) {
        require(['server'], function (server) {
            server.init();
        });
    });
    //]]>
</script>
<script type="text/javascript">
    //<![CDATA[
    require(['jquery', 'mooLivenew'], function ($, mooLivenew) {
        mooLivenew.initLivenew();
        mooLivenew.initMoreNews();
    });
    //]]>
</script>
<script type="text/javascript">
    //<![CDATA[
    require(['jquery', 'mooAjax'], function ($, mooAjax) {
        $(document).ready(function () {
            mooAjax.get({'url': '/cron/task/run?key=3FSE@'}, function (data) {
            });
        });
    });
    //]]>
</script>
<script type="text/javascript">
    //<![CDATA[
    require(['jquery', 'mooPhotoTheater'], function ($, mooPhotoTheater) {
        $(document).ready(function () {
            mooPhotoTheater.setActive(true);
        });
    });
    //]]>
</script>
<script domReady="1" type="text/javascript">
    //<![CDATA[
    require(["jquery", "mooTab"], function ($, mooTab) {
        $(document).ready(function () {
            mooTab.initActivitySwitchTabs();
        });
    });
    //]]>
</script>
<script domReady="1" type="text/javascript">
    //<![CDATA[
    require(["jquery", "mooActivities"], function ($, mooActivities) {
        $(document).ready(function () {
            mooActivities.initActivityForm();
        });
    });
    //]]>
</script>
<script domReady="1" type="text/javascript">
    //<![CDATA[
    require(["jquery", "mooToggleEmoji"], function ($, mooToggleEmoji) {
        $(document).ready(function () {
            mooToggleEmoji.init('message');
        });
    });
    //]]>
</script>
<script type="text/javascript">
    //<![CDATA[
    require(['jquery', 'mooMention', 'mooEmoji'], function ($, mooMention, mooEmoji) {
        $(document).ready(function () {
            var textAreaId = 'message';
            var type = 'activity';
            mooMention.init(textAreaId, type);
            mooEmoji.init(textAreaId, type);
        });
    });
    //]]>
</script>
<script type="text/javascript">
    //<![CDATA[
    require(['jquery', 'typeahead', 'bloodhound', 'tagsinput'], function ($) {
        $(document).ready(function () {
            var friends_userTagging = new Bloodhound({
                datumTokenizer: function (d) {
                    return Bloodhound.tokenizers.whitespace(d.name);
                },
                queryTokenizer: Bloodhound.tokenizers.whitespace,
                prefetch: {
                    url: 'http://yaloo.me/users/friends.json',
                    cache: false,
                    filter: function (list) {

                        return $.map(list.data, function (obj) {
                            return obj;
                        });
                    }
                },

                identify: function (obj) {
                    return obj.id;
                },
            });

            friends_userTagging.initialize();

            $('#userTagging').tagsinput({
                freeInput: false,
                itemValue: 'id',
                itemText: 'name',
                typeaheadjs: {
                    name: 'friends_userTagging',
                    displayKey: 'name',
                    highlight: true,
                    limit: 10,
                    source: friends_userTagging.ttAdapter(),
                    templates: {
                        notFound: [
                            '<div class="empty-message">',
                            'Không thể tìm thấy bất kỳ người bạn nào',
                            '</div>'
                        ].join(' '),
                        suggestion: function (data) {
                            if ($('#userTagging').val() != '') {
                                var ids = $('#userTagging').val().split(',');
                                if (ids.indexOf(data.id) != -1) {
                                    return '<div class="empty-message" style="display:none">Không thể tìm thấy bất kỳ người bạn nào</div>';
                                }
                            }
                            return [
                                '<div class="suggestion-item">',
                                '<img alt src="' + data.avatar + '"/>',
                                '<span class="text">' + data.name + '</span>',
                                '</div>',
                            ].join('')
                        }
                    }
                }
            });
        });
    });
    //]]>
</script>
<script type="text/javascript">
    //<![CDATA[
    require(["jquery", "mooActivities", "mooEmoji"], function ($, mooActivities, mooEmoji) {
        var activitiesParams = '{"request_base":""}';
        mooActivities.init(activitiesParams);
    });
    //]]>
</script>
<script domReady="1" type="text/javascript">
    //<![CDATA[
    require(["jquery", "mooToggleEmoji"], function ($, mooToggleEmoji) {
        $(document).ready(function () {
            mooToggleEmoji.init('commentForm_648');
        });
    });
    //]]>
</script>
<script domReady="1" type="text/javascript">
    //<![CDATA[
    require(["jquery", "mooAttach"], function ($, mooAttach) {
        $(document).ready(function () {
            mooAttach.registerAttachComment(648);
        });
    });
    //]]>
</script>
<script domReady="1" type="text/javascript">
    //<![CDATA[
    require(["jquery", "mooToggleEmoji"], function ($, mooToggleEmoji) {
        $(document).ready(function () {
            mooToggleEmoji.init('commentForm_647');
        });
    });
    //]]>
</script>
<script domReady="1" type="text/javascript">
    //<![CDATA[
    require(["jquery", "mooAttach"], function ($, mooAttach) {
        $(document).ready(function () {
            mooAttach.registerAttachComment(647);
        });
    });
    //]]>
</script>
<script domReady="1" type="text/javascript">
    //<![CDATA[
    require(["jquery", "mooToggleEmoji"], function ($, mooToggleEmoji) {
        $(document).ready(function () {
            mooToggleEmoji.init('commentForm_646');
        });
    });
    //]]>
</script>
<script domReady="1" type="text/javascript">
    //<![CDATA[
    require(["jquery", "mooAttach"], function ($, mooAttach) {
        $(document).ready(function () {
            mooAttach.registerAttachComment(646);
        });
    });
    //]]>
</script>
<script domReady="1" type="text/javascript">
    //<![CDATA[
    require(["jquery", "mooToggleEmoji"], function ($, mooToggleEmoji) {
        $(document).ready(function () {
            mooToggleEmoji.init('commentForm_645');
        });
    });
    //]]>
</script>
<script domReady="1" type="text/javascript">
    //<![CDATA[
    require(["jquery", "mooAttach"], function ($, mooAttach) {
        $(document).ready(function () {
            mooAttach.registerAttachComment(645);
        });
    });
    //]]>
</script>
<script domReady="1" type="text/javascript">
    //<![CDATA[
    require(["jquery", "mooToggleEmoji"], function ($, mooToggleEmoji) {
        $(document).ready(function () {
            mooToggleEmoji.init('commentForm_644');
        });
    });
    //]]>
</script>
<script domReady="1" type="text/javascript">
    //<![CDATA[
    require(["jquery", "mooAttach"], function ($, mooAttach) {
        $(document).ready(function () {
            mooAttach.registerAttachComment(644);
        });
    });
    //]]>
</script>
<script domReady="1" type="text/javascript">
    //<![CDATA[
    require(["jquery", "mooToggleEmoji"], function ($, mooToggleEmoji) {
        $(document).ready(function () {
            mooToggleEmoji.init('commentForm_643');
        });
    });
    //]]>
</script>
<script domReady="1" type="text/javascript">
    //<![CDATA[
    require(["jquery", "mooAttach"], function ($, mooAttach) {
        $(document).ready(function () {
            mooAttach.registerAttachComment(643);
        });
    });
    //]]>
</script>
<script domReady="1" type="text/javascript">
    //<![CDATA[
    require(["jquery", "mooToggleEmoji"], function ($, mooToggleEmoji) {
        $(document).ready(function () {
            mooToggleEmoji.init('commentForm_642');
        });
    });
    //]]>
</script>
<script domReady="1" type="text/javascript">
    //<![CDATA[
    require(["jquery", "mooAttach"], function ($, mooAttach) {
        $(document).ready(function () {
            mooAttach.registerAttachComment(642);
        });
    });
    //]]>
</script>
<script domReady="1" type="text/javascript">
    //<![CDATA[
    require(["jquery", "mooToggleEmoji"], function ($, mooToggleEmoji) {
        $(document).ready(function () {
            mooToggleEmoji.init('commentForm_641');
        });
    });
    //]]>
</script>
<script domReady="1" type="text/javascript">
    //<![CDATA[
    require(["jquery", "mooAttach"], function ($, mooAttach) {
        $(document).ready(function () {
            mooAttach.registerAttachComment(641);
        });
    });
    //]]>
</script>
<script domReady="1" type="text/javascript">
    //<![CDATA[
    require(["jquery", "mooToggleEmoji"], function ($, mooToggleEmoji) {
        $(document).ready(function () {
            mooToggleEmoji.init('commentForm_640');
        });
    });
    //]]>
</script>
<script domReady="1" type="text/javascript">
    //<![CDATA[
    require(["jquery", "mooAttach"], function ($, mooAttach) {
        $(document).ready(function () {
            mooAttach.registerAttachComment(640);
        });
    });
    //]]>
</script>
<script domReady="1" type="text/javascript">
    //<![CDATA[
    require(["jquery", "mooToggleEmoji"], function ($, mooToggleEmoji) {
        $(document).ready(function () {
            mooToggleEmoji.init('commentForm_639');
        });
    });
    //]]>
</script>
<script domReady="1" type="text/javascript">
    //<![CDATA[
    require(["jquery", "mooAttach"], function ($, mooAttach) {
        $(document).ready(function () {
            mooAttach.registerAttachComment(639);
        });
    });
    //]]>
</script>
<script domReady="1" type="text/javascript">
    //<![CDATA[
    require(["jquery", "mooToggleEmoji"], function ($, mooToggleEmoji) {
        $(document).ready(function () {
            mooToggleEmoji.init('commentForm_638');
        });
    });
    //]]>
</script>
<script domReady="1" type="text/javascript">
    //<![CDATA[
    require(["jquery", "mooAttach"], function ($, mooAttach) {
        $(document).ready(function () {
            mooAttach.registerAttachComment(638);
        });
    });
    //]]>
</script>
<script domReady="1" type="text/javascript">
    //<![CDATA[
    require(["jquery", "mooToggleEmoji"], function ($, mooToggleEmoji) {
        $(document).ready(function () {
            mooToggleEmoji.init('commentForm_637');
        });
    });
    //]]>
</script>
<script domReady="1" type="text/javascript">
    //<![CDATA[
    require(["jquery", "mooAttach"], function ($, mooAttach) {
        $(document).ready(function () {
            mooAttach.registerAttachComment(637);
        });
    });
    //]]>
</script>
<script type="text/javascript">
    //<![CDATA[
    var mooViewer = {"is_confirmed": 1, "is_approved": 1};
    //]]>
</script>
<script type="text/javascript">
    //<![CDATA[
    var mooCore = {"setting.require_email_validation": 0, "setting.approve_users": 0,};
    //]]>
</script>
<script type="text/javascript">
    //<![CDATA[
    require(["jquery", "mooNotification"], function ($, mooNotification) {
        mooNotification.setUrl({
            'show_notification': "/notifications/show",
            'show_conversation': "/conversations/show",
            'refresh_notification_url': "/notifications/refresh",
        });
        mooNotification.setInterval(10);
    });
    //]]>
</script>
<script type="text/javascript">
    //<![CDATA[
    require(["jquery", "tinycon"], function ($, Tinycon) {
        $(document).ready(function () {
            Tinycon.setBubble(0);
        });
    });
    //]]>
</script><!--
===========END SCRIPT================-->

</body>
</html>