
<div class="container-fluid bannerlayer">
    <div class="row">
        <img src="<?php echo base_url("public/images/pcBanner.png")?>" class="center-block img-responsive">
    </div>
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12 switchlayer">
            <div class="col-xs-4 col-sm-4 col-md-4 download ">下载</div>
            <div class="col-xs-4 col-sm-4 col-md-4 recharge btnactive">充值</div>
        </div>
    </div>
    <div class="row">
        <div class="col-xs-10 col-sm-10 col-md-10 forminput">
            <form>
                <div class="form-group">
                    <label for="gaameid">游戏ID</label>
                    <input type="text" class="form-control" id="gaameid" placeholder="游戏ID">
                </div>
                <div class="form-group">
                    <label for="cachpt">验证码</label>
                    <input type="text" class="form-control" id="cachpt" placeholder="验证码">
                </div>
                <button type="submit" class="btn btn-success">Submit</button>
            </form>
        </div>
    </div>
</div>