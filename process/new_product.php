<?php
require_once('./database/connect.php');
$sql = "select * from san_pham where danh_muc=N'sale'";
$result = mysqli_query($connect, $sql);
?>
<?php foreach ($result as $value) : ?>
    <div class="grid-item kids">
        <div class="grid-item__content-wrapper">
            <div class="ps-shoe mb-30">
                <div class="ps-shoe__thumbnail">
                    <div class="ps-badge"><span>New</span></div>
                    <div class="ps-badge ps-badge--sale ps-badge--2nd"><span>-35%</span></div>
                    <a class="ps-shoe__favorite"><i class="ps-icon-heart"></i></a>
                    <img src="<?php echo $value['anh'] ?>" alt=""><a class="ps-shoe__overlay" id="ps-shoe__overlay" data-id="6"></a>
                </div>

                <div class="ps-shoe__content">
                    <div class="ps-shoe__detail"><a class="ps-shoe__name" href="#" style="display: -webkit-box;
                            max-height: 3.2rem;
                           -webkit-box-orient: vertical;
                            overflow: hidden;
                            text-overflow: ellipsis;
                            white-space: normal;
                            -webkit-line-clamp: 2;
                            line-height: 1.6rem;
                            margin-top: 10px;"><?php echo $value['ten_san'] ?></a>
                        <p class="ps-shoe__categories"><a href="#" style="display: -webkit-box;
                            max-height: 3.2rem;
                           -webkit-box-orient: vertical;
                            overflow: hidden;
                            text-overflow: ellipsis;
                            white-space: normal;
                            -webkit-line-clamp: 2;
                            line-height: 1.6rem;
                            margin-top: 10px;"><?php echo $value['mo_ta'] ?></a>
                        </p><span style="color:#820813 ;"><?php echo $value['gia'] ?> đ</span>
                        <div>
                            <select class="ps-rating ps-shoe__rating" style="margin-top: 20px;">
                                <option value="1">1</option>
                                <option value="1">2</option>
                                <option value="1">3</option>
                                <option value="1">4</option>
                                <option value="2">5</option>
                            </select>
                        </div>
                    </div>
                    <button type="button" class="btn btn-primary" style="margin-top: 20px;">Thêm vào giỏ hàng</button>
                </div>
            </div>
        </div>
    </div>
<?php endforeach ?>