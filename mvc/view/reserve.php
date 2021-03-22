
    <div class="container">
        <div class="page-header">
            <h3>예약 결제</h3>
        </div>
        <div class="row" style="margin-bottom:10px;">
            <div class="col-lg-4">
                <div class="input-group">
                    <span class="input-group-addon">입실</span>
                    <input type="date" class="form-control" value="<?php echo $in_date ?>" readonly>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="input-group">
                    <span class="input-group-addon">퇴실</span>
                    <input type="date" class="form-control" value="<?php echo $out_date ?>" readonly>
                </div>
            </div>
        </div>

        <div class="panel panel-default">
            <div class="panel-body">
                <div class="row">
                    <?php foreach($floorList as $floor => $rooms) { ?>
                    <div class="col-lg-6">
                        <table class="table table-bordered hotel-view">
                            <tr>
                                <?php foreach($rooms as $room) { ?>
                                    <?php if($room % 2 == 1) { ?>
                                        <?php $class = ""; ?>
                                        <?php if(in_array($room, $resRoom)) { ?>
                                            <?php $class = "bg-info"; ?>
                                        <?php } ?>
                                        <td class="<?php echo $class ?>"><?php echo $room ?></td>
                                    <?php } ?>
                                <?php } ?>
                            </tr>
                            <tr>
                                <td colspan="10"><?php echo $floor ?>층</td>
                            </tr>
                            <tr>
                                <?php foreach($rooms as $room) { ?>
                                    <?php if($room % 2 == 0) { ?>
                                        <?php $class = ""; ?>
                                        <?php if(in_array($room, $resRoom)) { ?>
                                            <?php $class = "bg-info"; ?>
                                        <?php } ?>
                                        <td class="<?php echo $class ?>"><?php echo $room ?></td>
                                    <?php } ?>
                                <?php } ?>
                            </tr>
                        </table>
                    </div>
                    <?php } ?>
                    </div>
                    <div class="col-lg-12">
                        <form class="form-inline reserve-form" method="post" action="/reserve/reserveAction">
                            <input type="hidden" name="in_date" value="<?php echo $in_date ?>">
                            <input type="hidden" name="out_date" value="<?php echo $out_date ?>">
                            <input type="hidden" name="total" value="<?php echo $total ?>">
                            <div class="input-group">
                                <span class="input-group-addon">방 번호</span>
                                <input type="text" class="form-control" value="<?php echo implode(",", $resRoom) ?>" name="room" readonly>
                            </div>
                            <div class="input-group">
                                <span class="btn btn-warning">총합 : <span class="badge"><?php echo number_format($total) ?> 원 </span></span>
                            </div>
                            <div class="input-group pull-right">
                                <span class="btn btn-success" onclick="$('.reserve-form').submit()"><i class="glyphicon glyphicon-ok"></i> 결제하기</span>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>