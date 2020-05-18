    <body class="bg-1">

        <!-- Preloader -->
        <div class="mask">
            <div id="loader"></div>
        </div>
        <!--/Preloader -->

        <!-- Wrap all page content here -->
        <div id="wrap">

            <!-- Make page fluid -->
            <div class="row">

                <!-- Fixed navbar -->
                <div
                    class="navbar navbar-default navbar-fixed-top navbar-transparent-black mm-fixed-top"
                    role="navigation"
                    id="navbar">

                    <!-- Branding -->
                    <div class="navbar-header col-md-2">
                        <a class="navbar-brand" href="index.html">
                            <strong>E:UM</strong> ADMIN
                        </a>
                        <!-- <div class="sidebar-collapse">
                            <a href="#">
                                <i class="fa fa-bars"></i>
                            </a>
                        </div> -->
                    </div>
                    <!-- Branding end -->

                    <!-- .nav-collapse -->
                    <div class="navbar-collapse">
                        <!-- Quick Actions -->
                        <ul class="nav navbar-nav quick-actions">

                            <li class="dropdown divided user" id="current-user">
                                <div class="profile-photo">
                                    <img src="/assets/images/profile-photo.jpg" alt="alt"/>
                                </div>
                                <a class="dropdown-toggle options" data-toggle="dropdown" href="#">
                                    ADMIN
                                    <i class="fa fa-caret-down"></i>
                                </a>

                                <ul class="dropdown-menu arrow settings">

                                    <li>
                                        <a href="#">
                                            <i class="fa fa-user"></i>
                                            Profile</a>
                                    </li>

                                    <li class="divider"></li>

                                    <li>
                                        <a href="#">
                                            <i class="fa fa-power-off"></i>
                                            Logout</a>
                                    </li>
                                </ul>
                            </li>

                            <li>
                                <a href="#mmenu">
                                    <i class="fa fa-comments"></i>
                                </a>
                            </li>
                        </ul>
                        <!-- /Quick Actions -->

                        <!-- Sidebar -->
                        <ul class="nav navbar-nav side-nav" id="sidebar">

                            <li class="collapsed-content">
                                <ul>
                                    <li class="search">
                                        <!-- Collapsed search pasting here at 768px -->
                                    </li>
                                </ul>
                            </li>

                            <li class="navigation" id="navigation">
                                <a href="#" class="sidebar-toggle" data-toggle="#navigation">Navigation
                                    <i class="fa fa-angle-up"></i>
                                </a>

                                <ul class="menu">
                                    <li class="dropdown open active">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                            <i class="fa fa-th-large"></i>
                                            Client & Youtube
                                            <b class="fa fa-plus dropdown-plus"></b>
                                        </a>
                                        <ul class="dropdown-menu">
                                            <li>
                                                <a href="/admin/client">
                                                    <i class="fa fa-caret-right"></i>
                                                    Manage Client 
                                                </a>
                                            </li>
                                            <li class="active">
                                                <a href="/admin/youtube">
                                                    <i class="fa fa-caret-right"></i>
                                                    Manage Youtube Contents
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>

                            </li>

                        </ul>
                        <!-- Sidebar end -->

                    </div>
                    <!--/.nav-collapse -->

                </div>
                <!-- Fixed navbar end -->

                <!-- Page content -->
                <div id="content" class="col-md-12">

                    <!-- page header -->
                    <div class="pageheader">

                        <h2>
                            <i class="fa fa-lightbulb-o" style="line-height: 48px;padding-left: 0;"></i>
                            게시글 관리
                            <span>// URL을 추가하면 자동으로 입력됩니다</span></h2>

                        <div class="breadcrumbs">
                            <ol class="breadcrumb" style="line-height: 48px;">
                                <li>You are here</li>
                                <li>
                                    NAVIGATION
                                </li>
                                <li>
                                    Client & Youtube
                                </li>
                                <li class="active">Manage Youtube Contents</li>
                            </ol>
                        </div>

                    </div>
                    <!-- /page header -->

                    <!-- content main container -->
                    <div class="main">

                        <!-- row -->
                        <div class="row">

                            <!-- col 12 -->
                            <div class="col-md-12">

                                <!-- tile -->
                                <section class="tile color transparent-black">

                  <!-- tile header -->
                  <div class="tile-header">

                    <div class="tile-button">
                        <button id="newBtn" class="btn btn-xs btn-success"><i class="fa fa-plus"></i> <span>New Contents</span></button>
                    </div>
                    <div class="controls">
                      <a href="#" class="refresh"><i class="fa fa-refresh"></i></a>
                    </div>
                  </div>
                  <!-- /tile header -->

                  <!-- tile body -->
                  <div class="tile-body nopadding">
                    
                  <!-- otehr.css -->
                    <table class="table table-bordered">
                      <thead>
                        <tr>
                          <th>#</th>
                          <th>썸네일</th>
                          <th>제목</th>
                          <th>작성자</th>
                          <th>조회수</th>
                          <th>작성일</th>
                          <th></th>
                        </tr>
                      </thead>
                      <tbody>
                        
                            <?php

                            function getUrlParameter($url, $sch_tag) {
                                $parts = parse_url($url);
                                parse_str($parts['query'], $query);
                                return $query[$sch_tag];
                            }

                            foreach($LIST AS $list)
                            {
                                $url = $list->url;
                                $url_parameter = getUrlParameter($url, 'v');
                                $content = file_get_contents("http://youtube.com/get_video_info?video_id=".$url_parameter);
                                parse_str($content, $data);
                                //echo "<pre>";
                                //print_r($data);
                                $pData = json_decode($data["player_response"]);
                                
                                // print_r($pData->videoDetails);
                                $videoDetails = $pData->videoDetails;
                                $microformat = $pData->microformat;
                                // print_r($videoDetails);
                                
                                //echo "</pre>";
                            ?>
                            <tr>
                                <td><?php echo count(array($list));?></td>
                                <td class="col-md-1"><img src="http://img.youtube.com/vi/<?php echo $url_parameter?>/1.jpg"/></td>
                                <td class="col-md-5"><?php echo $list->title?><span class="dot">•</span><?php echo $microformat->playerMicroformatRenderer->publishDate; ?></td>
                                <td class="col-md-1"><?php echo $videoDetails->author; ?></td>
                                <td class="col-md-1"><?php echo $videoDetails->viewCount; ?></td>
                                <td class="col-md-2"><?php echo $list->date ?></td>
                                <td class="col-md-2">
                                    <button id="modifyBtn" onclick=modifyChk(<?=$list->seq?>) class="btn btn-xs btn-blue"><i class="fa fa-pencil"></i> <span>Modify</span></button>
                                    <button id="deleteBtn" onclick=deleteChk(<?=$list->seq?>) class="btn btn-xs btn-danger delete"><i class="fa fa-trash-o"></i> <span>Delete</span></button>
                                    </td>
                            </tr>
                            <?php
                            }
                            ?>
                      

                      </tbody>
                    </table>

                  </div>
                  <!-- /tile body -->

                   <!-- Regist / Modify Modal -->
                   <div id="yModal" class="ymodal">
                        
                        <div class="ymodal-content">
                        <div class="ymodal-title">
                            <span>New Contents Regist</span>
                        </div>
                        <!-- <div class="ymodal-close">
                            <span>X</span>
                        </div> -->
                        <?php

                        ?>
                            <form id="frmUploadData" name="frmUploadData" method="post" class="form-horizontal" role="form">                                
                            <div class="input-group input-group margin-bottom-20">
                                <input type="text" id="yurl" name="yurl" class="form-control" placeholder="YOUTUBE URL을 입력하세요.">
                                <span class="input-group-btn">
                                <button id="yurlInput" class="btn btn-default" type="button">Go!</button>
                                </span>      
                            </div>

                            <div class="form-group">
                                <label for="input01" class="col-sm-4 control-label input-sm">타이틀 *</label>
                                <div class="col-sm-8">
                                  <input type="text" class="form-control input-sm" id="y_title" name="y_title" value="">
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="input02" class="col-sm-4 control-label input-sm">작성자 *</label>
                                <div class="col-sm-8">
                                  <input type="text" class="form-control input-sm" id="y_author" name="y_author" readonly>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="input03" class="col-sm-4 control-label input-sm">업로드 날짜 *</label>
                                <div class="col-sm-8">
                                  <input type="text" class="form-control input-sm" id="y_upload" name="y_upload" readonly>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="input04" class="col-sm-4 control-label input-sm">조회수 *</label>
                                <div class="col-sm-8">
                                  <input type="text" class="form-control input-sm" id="y_count" name="y_count" readonly>
                                </div>
                            </div>

                            <div class="ymodal-button ">
                                <button id="ySubmit" class="btn btn-primary">완료</button>
                                <button id="yCancle" class="btn btn-default">취소</button>
                            </div>
                        </form>
                        </div>




                        </div>
                   </div>
                   <!-- / Regist / Modify Modal -->


                   <!-- Delete Modal -->

                   <!-- / Delete Modal -->
                                </section>
                                <!-- /tile -->

                            </div>
                            <!-- /col 12 -->

                        </div>
                        <!-- /row -->

                    </div>
                    <!-- /content container -->

                </div>
                <!-- Page content end -->

            </div>
            <!-- Make page fluid-->

        </div>
        <!-- Wrap all page content end -->

        <section class="videocontent" id="video"></section>

        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="https://code.jquery.com/jquery.js"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed
        -->
        <script src="/assets/js/vendor/bootstrap/bootstrap.min.js"></script>
        <script src="/assets/js/vendor/bootstrap/bootstrap-dropdown-multilevel.js"></script>
        
        <script
            type="text/javascript"
            src="/assets/js/vendor/mmenu/js/jquery.mmenu.min.js"></script>
        <script
            type="text/javascript"
            src="/assets/js/vendor/sparkline/jquery.sparkline.min.js"></script>
        <script
            type="text/javascript"
            src="/assets/js/vendor/nicescroll/jquery.nicescroll.min.js"></script>
        <!-- <script
            type="text/javascript"
            src="/assets/js/vendor/animate-numbers/jquery.animateNumbers.js"></script> -->
        
        <!-- <script type="text/javascript" src="/assets/js/vendor/blockui/jquery.blockUI.js"></script>\ -->

       

        <!-- <script src="/assets/js/vendor/chosen/chosen.jquery.min.js"></script> -->

        <script src="/assets/js/minimal.min.js"></script>
        <script>

            $(document).ready(function() {

                $('#newBtn').click( function () {
                    $('#yModal').css("display", "block")
            });
       
            // New Contents 

            $('#ySubmit').click( function () {
                if($('#yurl').val() == ''){
                    return false;
                } 
                if($('#y_title').val() == ''){
                    return false;
                }
                if($('#y_author').val() == ''){
                    return false;
                }
                if($('#y_upload').val() == ''){
                    return false;
                }
                if($('#y_count').val() == ''){
                    return false;
                }

                var form = $('#frmUploadData')[0];
                var formData = new FormData(form);
                $.ajax({
                			type: 'post'
                			, async: true
                			, data: formData
                			, url: "/Admin/UploadContent"
                            , dataType: "json"
                            , processData: false
                		    , contentType: false
                			, success: function(data) {
                                window.location.href="/admin/youtube";
                			  }
                			, error: function(data, status, err) {
                				console.log("code:"+data.status+"\n"+"message:"+data.responseText+"\n"+"error:"+err);
                			  }
                        });
                        

            });

            $('#yCancle').click( function () {
                $('#yModal').css("display", "none")
                $('#yurl').val('');
                $('#y_title').val('');
                $('#y_author').val('');
                $('#y_upload').val('');
                $('#y_count').val('');

                return false;
            });
             
            
            $("#yurlInput").click(function(){
                  if($("#yurl").val()==""){
                    alert("Value를 입력하세요.");
                    return false;
                  }else{
                       
                		$.ajax({
                			type: 'post'
                			, async: true
                			, data: {"yurl" : $("#yurl").val()}
                			, url: "/Admin/CheckUrl"
                			, dataType: "json"
                			, success: function(data) {
                                    console.log(data);
                                    $('#y_title').val(data["title"]);
                                    $('#y_author').val(data["author"]);
                                    $('#y_upload').val(data["upload"]);
                                    $('#y_count').val(data["viewcount"]);
                			  }
                			, error: function(data, status, err) {
                				console.log("code:"+data.status+"\n"+"message:"+data.responseText+"\n"+"error:"+err);
                			  }
                		});
                	}
                });
                
            });

            function deleteChk(seq){
                let chk;
                chk = confirm("정말로 삭제하시겠습니까?");
                if(chk)
                {
                    $.ajax({
                			type: 'post'
                			, async: true
                			, data: {"seq" : seq}
                			, url: "/Admin/DeleteContent"
                			, dataType: "json"
                			, success: function(data) {
                                    window.location.href="/admin/youtube";
                			  }
                			, error: function(data, status, err) {
                				console.log("code:"+data.status+"\n"+"message:"+data.responseText+"\n"+"error:"+err);
                			  }
                		});
                }

            }

            function ModifyChk(seq){
                alert(seq);
            }

        </script>
    </body>
</html>