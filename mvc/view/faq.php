    <div class="container">
        <h3>문의하기</h3>
        <div class="panel"></div>
        <div class="chat-panel panel panel-default">
            <div class="panel-body">
                <ul class="chat">
                    <?php foreach($boards as $board) { ?>
                        <li class="right clearfix">
                            <div class="chat-body clearfix">
                                <div class="header">
                                    <small class=" text-muted">
                                        <?php 
                                            $date = strtotime($board['date']);
                                            $nowDate = strtotime("now");

                                            $diff = $nowDate - $date;

                                            if($diff < 3600) {
                                                $viewDate = floor($diff / 60)."분 전";
                                            } else {
                                                if($diff > 86400) {
                                                    $viewDate = date("Y-m-d", $date);
                                                } else {
                                                    $viewDate = floor($diff / 3600)."시 전";
                                                };
                                            };
                                        ?>
                                        <i class="glyphicon glyphicon-time"></i> <?php echo $viewDate ?></small>
                                    <strong class="pull-right primary-font"><?php echo $board['name'] ?>님</strong>
                                </div>
                                <p>
                                    <?php echo $board['content'] ?>
                                </p>
                            </div>
                        </li>
                    <?php } ?>
                </ul>
            </div>
            <div class="panel-footer">
                <form class="chat-form" method="post" action="/board/writeAction">
                    <textarea class="form-control" cols="30" rows="10" placeholder="문의할 내용을 입력하세요" name="content"></textarea>
                    <button class="btn btn-warning" id="btn-chat">전송</button>
                    <label class="pull-right">A 태그와 Color 태그를 사용할 수 있습니다.</label>
                </form>
            </div>
        </div>
    </div>
</body>
</html>

<script>
    $(function() {
        $("text").each(function(idx, el) {
            if($(el).attr("hex") != undefined) {
                var hex_reg = /^[A-F0-9]{6}$/;

                if($(el).attr("hex").match(hex_reg) != null) {
                    $(el).css("color", "#"+$(el).attr("hex"));
                };

            } else if($(el).attr("rgb") != undefined) {
                var rgb = $(el).attr("rgb").split(",");
                var colorChk = true;

                for(var color of rgb) {
                    if(color > 255) {
                        colorChk = false;
                    }
                };

                if(colorChk) {
                    $(el).css("color", "rgb("+$(el).attr("rgb")+")");
                }
            };
        })
    })
</script>