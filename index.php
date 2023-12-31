<?php
require_once __DIR__."/config.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- SEO -->
	<meta name="robots" content="index,follow" />
	<meta name="revisit-after" content="1days" />
	<title>Nhắn Gửi Yêu Thương ❤️❤️❤️</title>
	<meta name="google-site-verification" content="9_JZvIRGJRBgtQk5W5Srm8XaMLhY0yixLdzxjx_p25A" />
	<meta name="robots" content="noarchive">
<link rel="shortcut icon" href="favicon.ico">
	<meta property="og:image" content="https://nhanguiyeuthuong.com/nhanguiyeuthuong.jpg" />
	<meta name="description" content="" />
	<meta name="keywords"
	content="Nhắn gửi yêu thương, nhan gui yeu thuong, lời chúc hay, web tỏ tình crush, website tỏ tình, web to tinh, website to tinh, cách tỏ tình crush, tỏ tình với crush, to tinh voi crush, cach chuc mung sinh nhat, website yeu thuong, website tỏ tình sinh nhật" />
	<meta property="og:title" content="Nhắn Gửi Yêu Thương ❤️❤️❤️" />
	<meta property="og:description" content="Nhắn gửi yêu thương đến mọi người thân yêu ngay bạn nhé." />
	<meta property="og:type" content="website" />
	<link rel="stylesheet" href="all.css">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
	<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
	<div class="container mt-5 mb-5">
		<h2>Nhắn gửi yêu thương 😘</h2>
		<small>Đã khắc phục lỗi không lấy được link. Hệ thống sẽ tự động xóa link cũ 3 ngày / 1 lần.</small>
		<form class="row mt-2" id="save-form">
			<div class="col-sm-12 mb-3">
				<label class="fw-bold">Mật khẩu yêu thương <span style='font-weight: none;'>🔏</span> </label>
				<input type="text" name="pass" class="form-control" placeholder="Viết liền không dấu (anhyeuem,iloveyou,...) và tối đa 32 ký tự">
			</div>
			<div class="col-sm-12 mb-3">
				<label class="fw-bold">Gửi lời yêu thương 💌</label>
				<textarea class="form-control"  name="noidung" cols="30" rows="6" placeholder="Hãy gửi lời yêu thương đến người bạn thương yêu 💕"></textarea>
			</div>
			<div class="col-sm-6 col-lg-1 mb-3">
				<button class="btn btn-danger w-100" id="button-form">Lưu lại</button>
			</div>
			<div class='col-sm-12'>
			      <p>Bạn đang gặp khó khăn? <a href='https://ngytvietnam.blogspot.com/2021/11/huong-dan-cach-tao-loi-chuc-yeu-thuong.html'>Xem hướng dẫn tại đây</a></p>
			</div>
			<div class="col-sm-12">
				<p>Follow <span class="text-danger">Nhắn Gửi Yêu Thương</span></p>
				<ul class="nav">
					<li class="nav-item"><a class="nav-link" href="#"><img src="/icon/facebook.png" alt="" width="50px"></a></li>
					<li class="nav-item"><a class="nav-link" href="#"><img src="/icon/tik-tok.png" alt="" width="50px"></a></li>
				</ul>
	          
			</div>
		</form>
	</div>
	<footer class='text-center'>
	    <p>Copyright © 2021 <a href='https://www.facebook.com/huycoderz/'> Huy Coder </a> All Rights Reserved.</p>
	</footer>
</body>
	<script>
	    $(document).ready(function () {
	       // Thông báo trang web
	       Swal.fire({
			icon: 'success',
			title: 'Thông báo',
			html: 'Hiện tại hệ thống đã cập nhật giao diện mới<br>Các bạn không biết cách sử dụng hãy <br><a class="btn btn-sm btn-primary" href="https://ngytvietnam.blogspot.com/2021/11/huong-dan-cach-tao-loi-chuc-yeu-thuong.html">XEM HƯỚNG DẪN TẠI ĐÂY</a><br> để xem hướng dẫn.'
		});
	       // 
		$('#save-form').submit(function (e) { 
			e.preventDefault();
			var noidung = $('textarea[name="noidung"]').val();
			var pass = $('input[name="pass"]').val();
			var reg = /^\w{1,32}$/g;
			var flag = 0;
			var erro;
			if (noidung == "") {
				erro = 'Hãy gửi 1 lời yêu thương với người mình thương nha. <br> Ví dụ: Anh yêu em 💖💖💖';
				flag= 1;
			}else if(pass.length < 1){
				erro = 'Mật khẩu phải viết liền không dấu và tối đa là 32 ký tự.<br> ví dụ: anhyeuem, iloveu, conyeume,...';
				flag= 1;
			}else if(pass.length > 32){
				erro = 'Mật khẩu chỉ được tối đa 32 ký tự😘';
				flag= 1;
			}else if(!reg.test(pass)){
			  erro = 'Mật khẩu phải viết liền không dấu và tối đa là 32 ký tự.<br> ví dụ: anhyeuem, iloveu, conyeume,...';
				flag= 1;  
			}
			
			if(flag == 1){
				Swal.fire({
					icon: 'error',
					title: 'Oops...',
					html: erro
				})
			}else{
				$.ajax({
					url: 'ajaxs.php',
					type: 'POST',
					method: 'POST',
					data: {noidung: noidung, pass:pass},
					beforeSend: function(){
						$('#button-form').attr('disabled', 'true').html('Loading...');
					}
				})
				.done(function(event) {
					$('#button-form').removeAttr('disabled').html('Lưu lại');
					var obj = JSON.parse(event);
					if(obj.status == 99 ){
						Swal.fire({
							icon: 'success',
							title: 'Thành công...',
							allowOutsideClick: false,
							html: obj.messages
						})
					}else{

						Swal.fire({
							icon: 'error',
							title: 'Oops...',
							html: obj.messages
						})
					}

				})
				.fail(function() {
					$('.btn-send').removeAttr('disabled').html('Lưu lại');

					console.log("error");
				});

			}


		});
	});

	function copy() {
		var copyText = document.querySelector("#link-dd");
		copyText.select();
		copyText.setSelectionRange(0, 99999);
		navigator.clipboard.writeText(copyText.value);

        Swal.fire({
			icon: 'success',
			title: 'Thông báo !',
			html: 'Copy link thành công ! Hãy gửi ngay cho người bạn thương nha 😍'
		});
	}

	</script>
</html>
