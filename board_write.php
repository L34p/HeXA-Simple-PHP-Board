<?
    require_once "base.html";
?>

    <!-- Board Write Form -->
    <div class="container">

        <!-- panel start -->
        <div class="panel panel-info">
            <div class="panel-heading">
                <h3 class="panel-title">글쓰기</h3>
            </div>

            <!-- panel body start -->
            <div class="panel-body">

            <!-- form start -->
            <form class="form-horizontal" method="post" action="board_insert.php" role="form">
                <div class="form-group">
                    <label for="title" class="col-sm-1 control-label">제목</label>
                        <div class="col-sm-11">
                            <input type="text" id="subject" name="subject" class="form-control">
                        </div>
                </div>

                <div class="form-group">
                    <label for="settings" class="col-sm-1 control-label">이름 / PW</label>
                    <div class="col-sm-5">
                        <input type="text" id="name" name="name" placeholder="이름을 입력해주세요" class="form-control">
                    </div>

                    <div class="col-sm-6">
                        <input type="password" id="pw" name="pw" placeholder="비밀번호를 입력해주세요" class="form-control">
                    </div>                
                </div>
                
                <div class="form-group">
                    <label for="content" class="col-sm-1 control-label">내용</label>
                        <div class="col-sm-11">
                            <textarea id="content" name="content" class="form-control" rows="15"></textarea>
                        </div>
                </div>

                <h1 align="right"><button type="submit" class="btn btn-default">Write</button></h1>

            </form>
            <!-- form end -->

            </div>
            <!-- panel body end -->

        </div>
        <!-- panel end -->

    </div>
    <!-- Board Write Form end -->
