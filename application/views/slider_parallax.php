<style>
.carousel-inner img {
    width: 100%;
    height: 100%;
}
</style>
<div id="demo" class="carousel slide" data-ride="carousel">
    <ul class="carousel-indicators">
        <li data-target="#demo" data-slide-to="0" class="active"></li>
        <li data-target="#demo" data-slide-to="1"></li>
        <li data-target="#demo" data-slide-to="2"></li>
        <li data-target="#demo" data-slide-to="3"></li>
        <li data-target="#demo" data-slide-to="4"></li>
    </ul>
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="<?= base_url((isset($page_data[1]->image1) ? $page_data[1]->image1 : 'assets/images/la.png')); ?>"
                width="1100" height="500" />
            <div class="carousel-caption">
                <a style="color: white;"
                    href="<?= isset($page_data[1]->link1_url) ? $page_data[1]->link1_url : '/home/listing' ?>"><?= isset($page_data[1]->link1_label) ? $page_data[1]->link1_label : 'Learn more ' ?><i
                        class="fa fa-angle-right" aria-hidden="true"></i> </a>
            </div>
        </div>
        <div class="carousel-item">
            <img src="<?= base_url((isset($page_data[1]->image2) ? $page_data[1]->image2 : 'assets/images/chicago.png')); ?>"
                width="1100" height="500" />
            <div class="carousel-caption">
                <a style="color: white;"
                    href="<?= isset($page_data[1]->link2_url) ? $page_data[1]->link2_url : '/home/listing' ?>"><?= isset($page_data[1]->link2_label) ? $page_data[1]->link2_label : 'Learn more ' ?><i
                        class="fa fa-angle-right" aria-hidden="true"></i> </a>
            </div>
        </div>
        <div class="carousel-item">
            <img src="<?= base_url((isset($page_data[1]->image3) ? $page_data[1]->image3 : 'assets/images/ny.png')); ?>"
                width="1100" height="500" />
            <div class="carousel-caption">
                <a style="color: white;"
                    href="<?= isset($page_data[1]->link3_url) ? $page_data[1]->link3_url : '/home/listing' ?>"><?= isset($page_data[1]->link3_label) ? $page_data[1]->link3_label : 'Learn more ' ?><i
                        class="fa fa-angle-right" aria-hidden="true"></i> </a>
            </div>
        </div>
        <div class="carousel-item">
            <img src="<?= base_url((isset($page_data[1]->image4) ? $page_data[1]->image4 : 'assets/images/la.png')); ?>"
                width="1100" height="500" />
            <div class="carousel-caption">
                <a style="color: white;"
                    href="<?= isset($page_data[1]->link4_url) ? $page_data[1]->link4_url : '/home/listing' ?>"><?= isset($page_data[1]->link4_label) ? $page_data[1]->link4_label : 'Learn more ' ?><i
                        class="fa fa-angle-right" aria-hidden="true"></i> </a>
            </div>
        </div>
        <div class="carousel-item">
            <img src="<?= base_url((isset($page_data[1]->image5) ? $page_data[1]->image5 : 'assets/images/chicago.png')); ?>"
                width="1100" height="500" />
            <div class="carousel-caption">
                <a style="color: white;"
                    href="<?= isset($page_data[1]->link5_url) ? $page_data[1]->link5_url : '/home/listing' ?>"><?= isset($page_data[1]->link5_label) ? $page_data[1]->link5_label : 'Learn more ' ?><i
                        class="fa fa-angle-right" aria-hidden="true"></i> </a>
            </div>
        </div>
    </div>
    <!-- <a class="carousel-control-prev" href="#demo" data-slide="prev">
                    <span class="carousel-control-prev-icon"></span>
                </a>
                <a class="carousel-control-next" href="#demo" data-slide="next">
                    <span class="carousel-control-next-icon"></span>
                </a> -->
</div>
