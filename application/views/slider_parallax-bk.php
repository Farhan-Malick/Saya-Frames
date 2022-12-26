<link rel="shortcut icon" href="../favicon.ico">
<!-- <link rel="stylesheet" type="text/css" href="<?=base_url('assets/parallax/css/demo.css');?>" /> -->
<link rel="stylesheet" type="text/css" href="<?=base_url('assets/parallax/css/style2.css');?>" />
<script type="text/javascript" src="<?=base_url('assets/parallax/js/modernizr.custom.28468.js');?>"></script>
<link href='http://fonts.googleapis.com/css?family=Economica:700,400italic' rel='stylesheet' type='text/css'>
<noscript>
	<link rel="stylesheet" type="text/css" href="<?=base_url('assets/parallax/css/nojs.css');?>" />
</noscript>
<div id="da-slider" class="da-slider">
		<div class="da-slide">
			<h2><?= isset($page_data[12]->heading1) ? $page_data[12]->heading1 : 'Easy management' ?></h2>
			<p><?= isset($page_data[12]->text1) ? $page_data[12]->text1 : 'Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.' ?></p>
			<a href="<?= isset($page_data[12]->btn_white_bg_url1) ? $page_data[12]->btn_white_bg_url1 : '/home/listing' ?>" class="da-link"><?= isset($page_data[12]->btn_white_bg_label1) ? $page_data[12]->btn_white_bg_label1 : 'Read more' ?></a>
			<div class="da-img">
				<img src="<?= base_url((isset($page_data[12]->img1) ? $page_data[12]->img1 : 'assets/parallax/images/2.png')); ?>" alt="image01" />
			</div>
		</div>
		<div class="da-slide">
			<h2><?= isset($page_data[12]->heading2) ? $page_data[12]->heading2 : 'Revolution' ?></h2>
			<p><?= isset($page_data[12]->text2) ? $page_data[12]->text2 : 'A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.' ?></p>
			<a href="<?= isset($page_data[12]->btn_white_bg_url2) ? $page_data[12]->btn_white_bg_url2 : '/home/listing' ?>" class="da-link"><?= isset($page_data[12]->btn_white_bg_label2) ? $page_data[12]->btn_white_bg_label2 : 'Read more' ?></a>
			<div class="da-img">
				<img src="<?= base_url((isset($page_data[12]->img2) ? $page_data[12]->img2 : 'assets/parallax/images/3.png')); ?>" alt="image01" />
			</div>
		</div>
		<div class="da-slide">
			<h2><?= isset($page_data[12]->heading3) ? $page_data[12]->heading3 : 'Warm welcome' ?></h2>
			<p><?= isset($page_data[12]->text3) ? $page_data[12]->text3 : 'When she reached the first hills of the Italic Mountains, she had a last view back on the skyline of her hometown Bookmarksgrove, the headline of Alphabet Village and the subline of her own road, the Line Lane.' ?></p>
			<a href="<?= isset($page_data[12]->btn_white_bg_url3) ? $page_data[12]->btn_white_bg_url3 : '/home/listing' ?>" class="da-link"><?= isset($page_data[12]->btn_white_bg_label3) ? $page_data[12]->btn_white_bg_label3 : 'Read more' ?></a>
			<div class="da-img">
				<img src="<?= base_url((isset($page_data[12]->img3) ? $page_data[12]->img3 : 'assets/parallax/images/1.png')); ?>" alt="image01" />
			</div>
		</div>
		<div class="da-slide">
			<h2><?= isset($page_data[12]->heading4) ? $page_data[12]->heading4 : 'Quality Control' ?></h2>
			<p><?= isset($page_data[12]->text4) ? $page_data[12]->text4 : 'Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name of Lorem Ipsum decided to leave for the far World of Grammar.' ?></p>
			<a href="<?= isset($page_data[12]->btn_white_bg_url4) ? $page_data[12]->btn_white_bg_url4 : '/home/listing' ?>" class="da-link"><?= isset($page_data[12]->btn_white_bg_label4) ? $page_data[12]->btn_white_bg_label4 : 'Read more' ?></a>
			<div class="da-img">
				<img src="<?= base_url((isset($page_data[12]->img4) ? $page_data[12]->img4 : 'assets/parallax/images/4.png')); ?>" alt="image01" />
			</div>
		</div>
		<nav class="da-arrows">
			<span class="da-arrows-prev"></span>
			<span class="da-arrows-next"></span>
		</nav>
	</div>

<script type="text/javascript" src="<?=base_url('assets/parallax/js/jquery.cslider.js');?>"></script>
<script type="text/javascript">
	$(function() {

		$('#da-slider').cslider({
			autoplay: true,
			bgincrement: 450
		});

	});
</script>