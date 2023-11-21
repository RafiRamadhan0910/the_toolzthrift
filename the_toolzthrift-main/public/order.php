<html lang="en">
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="shortcut icon" href="assets/img/logo.jpeg" type="image/x-icon">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/remixicon/3.5.0/remixicon.min.css">
        <script src="https://kit.fontawesome.com/e2c5b1b928.js"></script>
        <link rel="stylesheet" href="assets/css/swiper-bundle.min.css">
        <link rel="stylesheet" href="assets/css/style-order.css">
        <title>Order | The ToolzThrift</title>
    </head>
    <body>
        <header class="header" id="header">
            <nav class="nav container">
                <a href="#" class="nav__logo">
                    The ToolzThrift <i class="ri-store-line"></i>
                </a>
                <div class="nav__menu" id="nav-menu ">
                    <ul class="nav__list">
                        <li class="nav__item">
                            <a href="index.html" class="nav__link active-link" >
                                <i class="ri-home-smile-2-line"></i>
                                <span>Beranda</span>
                            </a>
                        </li>

                        <li class="nav__item">
                            <a href="index.html" class="nav__link">
                                <i class="ri-price-tag-3-line"></i>
                                <span>Produk</span>
                            </a>
                        </li>

                        <li class="nav__item">
                            <a href="order.html" class="nav__link">
                                <i class="ri-compass-3-line"></i>
                                <span>Pesanan</span>
                            </a>
                        </li>
                    </ul>
                </div>
                <i class="ri-moon-line" id="theme-button"></i>
            </nav>
        </header>

        <main class="main">
            <section class="home section" id="beranda">
                <h2 class="form-header">Form Pemesanan</h2>
                <div class='popup-wrapper' id='buyWhatsApp'>
                    <div class='popup-container'>
                    <div class='container-contact100'>
                    <div class='wrap-contact100'>
                    <h2 class='title-beli'>
                      <span class='data-form-title'>
                    <i class='fab fa-whatsapp'></i> Pesan via <b>WhatsApp</b></span>
                    </h2>
                    
                    <!--=== HTML Form WhatsApp | @rian_seo ===-->
                    <div class='data-form validate-form' id='whatsapp'>
                    <ul class='orderBank'>
                    <!--=== HTML Pilihan Produk ===-->
                    <section class='tabs'>  
                    <!--=== HTML Pilihan (1) ===-->
                    <input checked='checked' class='tab-selector-1' id='tab-1' name='radio-set' type='radio'/>  
                    <label class='tab-label-1' for='tab-1'>Crewneck</label>  
                    <!--=== HTML Pilihan (2) ===-->
                    <input class='tab-selector-2' id='tab-2' name='radio-set' type='radio'/>  
                    <label class='tab-label-2' for='tab-2'>Hoodie</label>
                    <!--=== HTML Pilihan (3) ===-->  
                    <input class='tab-selector-3' id='tab-3' name='radio-set' type='radio'/>  
                    <label class='tab-label-3' for='tab-3'>Celana Panjang</label>
		    <!--=== HTML Pilihan (4) ===-->  
                    <input class='tab-selector-4' id='tab-4' name='radio-set' type='radio'/>  
                    <label class='tab-label-4' for='tab-4'>T-Shirt</label>
                    
                    <!--=== HTML Data Produk ===-->
                    <div class='content'>
                    <!--=== HTML Produk (1) ===-->
                    <div class='content-1'>
                      <span><b>Nama Produk :</b></span><span>Crewneck</span>
                      <span><b>Harga Barang :</b></span><span>Rp. 42.500</span>
                      <span><b>Ukuran Produk :</b></span><span>-</span>
                    </div>
                    <!--=== HTML Produk (2) ===-->
                    <div class='content-2'>
                        <span><b>Nama Produk :</b></span><span>Hoodie</span>
                        <span><b>Harga Barang :</b></span><span>Rp. 42.500</span>
                        <span><b>Ukuran Produk :</b></span><span>-</span>
                    </div>
                    <!--=== HTML Produk (3) ===-->
                    <div class='content-3'>
                        <span><b>Nama Produk :</b></span><span>Celana Panjang</span>
                        <span><b>Harga Barang :</b></span><span>Rp. 25.500</span>
                        <span><b>Ukuran Produk :</b></span><span>-</span>
                    </div>
	            <!--=== HTML Produk (4) ===-->
                    <div class='content-4'>
                        <span><b>Nama Produk :</b></span><span>T-Shirt</span>
                        <span><b>Harga Barang :</b></span><span>Rp. 34.000</span>
                        <span><b>Ukuran Produk :</b></span><span>-</span>
                    </div>
                    </div>
                    </section>
                    </ul>
                    
                    <!--=== HTML Pilihan Pembayaran ===-->
                    <input class='tujuan' id='noAdmin' type='hidden'/>
                    <label class='formWhatsApp'>
                    <i class='fa fa-angle-down'></i>
                    <select class='licensi wajib' placeholder='Pembayaran'>
                    <!--=== HTML Data Pembayaran ===-->
                    </select>
                    </label>
                    
                    <!--=== HTML Table Form Pesanan ===-->
                    <div class='gridWhatsApp'>
                    <label class='item'>
                    <!--=== From Nama ===-->
                    <i class='fa fa-user-circle'></i>
                    <input class='nama wajib' placeholder='Nama..' type='text'/>
                    </label>
                    <label class='item'>
                    <!--=== From Email ===-->
                      <i class='fa fa-envelope'></i>
                    <input class='email wajib' placeholder='Email..' type='text'/>
                    </label>
                    </div>
                    <br/>
                    <!--=== HTML Table Form (2) ===-->
                    <div class='gridWhatsApp'>
                    <label class='item'>
                    <!--=== From Nomor WhatsApp ===-->
                      <i class='fab fa-whatsapp'></i>
                    <input class='nomor wajib' placeholder='WhatsApp..' type='tel'/>
                    </label>
                    <label class='item'>
                    <!--=== From Nama Kota ===-->
                      <i class='fa fa-university'></i>
                    <input class='kota wajib' placeholder='Alamat..' type='url'/>
                    </label>
                    </div>
                    <!--=== HTML Opsi Form Produk ===-->
                    <label class='formWhatsApp'>
                      <i class='fa fa-angle-down'></i>
                    <select class='pembayaran wajib' placeholder='Pembayaran'>
                    <option hidden='hidden' selected='selected' value='default'>Pilih Metode Pembayaran</option>
                    <optgroup label='Pilih Metode Pembayaran'>
                    <option value='Cash On Delivery'>Cash On Delivery</option>
                    <option value='Transfer'>Transfer</option>
                    </optgroup>
                    </select>
                    </label>
                    <label class='formWhatsApp'>
                      <i class='fa fa-angle-down'></i>
                    <select class='informasi wajib' placeholder='Informasi'>
                    <option hidden='hidden' selected='selected' value='default'>Pilih Item</option>
                    <optgroup label='Item yang di pilih '>
                    <option value='Crewneck'>Crewneck</option>
                    <option value='Celana Panjang'>Celana Panjang</option>
                    <option value='Hoodie'>Hoodie</option>
                    <option value='T-Shirt'>T-Shirt</option>
                    </optgroup>
                    </select>
                    </label>
                    <div class='sendWhatsApp'>
                    <div class='sendWAcolor'>
                    <div class='sendWAbuttom'/>
                    <a class='sendWAclik submit' onclick='redirect(&apos;/p/terimakasih.html&apos;)'>Kirim</a>
                    </div>
                    </div>
                    </div>
                    </div>
                    </div>
                    </div>
                    </div>
            </section>
            <head>
                <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js' type='text/javascript'></script>
                <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" />
                <link href="https://fonts.googleapis.com/css2?family=Padauk:wght@700&display=swap" rel="stylesheet"/>
                </head>
        <a href="#" class="scrollup" id="scroll-up">
            <i class="ri-arrow-up-line"></i>
        </a>
        <script src="assets/js/scrollreveal.min.js"></script>
        <script src="assets/js/swiper-bundle.min.js"></script>
        <script src="assets/js/main.js"></script>
        <script>
            //<![CDATA[
$('#noAdmin').val('0813-8390-0336');// Nomor Tujuan
$('.whatsapp-btn').click(function () {
$('#whatsapp').toggleClass('toggle');});
// Fungsi Tombol Whatsapp Kirim!
		$('#whatsapp .submit').click(WhatsApp);
		$("#whatsapp input, #whatsapp textarea").keypress(function () {
			if (event.which == 13) WhatsApp();
		});
		var reg = /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;
// Fungsi Data Tulisan yang dikirim
function WhatsApp() {
			var ph = '';
			if ($('#whatsapp .nama').val() == '') { // Cek Nama
				ph = $('#whatsapp .nama').attr('placeholder');
				alert('Silahkan tulis ' + ph);
				$('#whatsapp .nama').focus();
				return false;
			} else if ($('#whatsapp .email').val() == '') { // Cek email
				ph = $('#whatsapp .email').attr('placeholder');
				alert('Silahkan tulis ' + ph);
				$('#whatsapp .website').focus();
                return false;
            } else if ($('#whatsapp .nomor').val() == '') { // Cek nomor
                ph = $('#whatsapp .nomor').attr('placeholder');
                alert('Silahkan tulis ' + ph);
                $('#whatsapp .nomor').focus();
				return false;
            } else if ($('#whatsapp .kota').val() == '') { // Cek alamat
                ph = $('#whatsapp .kota').attr('placeholder');
                alert('Silahkan tulis ' + ph);
                $('#whatsapp .email').focus();
				return false;
            } else if ($('#whatsapp .licensi').val() == '') { // Cek licensi
				ph = $('#whatsapp .licensi').attr('placeholder');
				alert('Silahkan pilih ' + ph);
				$('#whatsapp .licensi').focus();
				return false;
			} else if ($('#whatsapp .pembayaran').val() == '') { // Cek bayar
				ph = $('#whatsapp .pembayaran').attr('placeholder');
				alert('Silahkan pilih ' + ph);
				$('#whatsapp .pembayaran').focus();
				return false;
			} else if ($('#whatsapp .informasi').val() == '') { // Cek dari
				ph = $('#whatsapp .informasi').attr('placeholder');
				alert('Silahkan pilih ' + ph);
				$('#whatsapp .informasi').focus();
				return false;
			} else {
				// Check Device (Mobile/Desktop)
				var url_wa = 'https://web.whatsapp.com/send';
				if (/Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent)) {
					url_wa = 'whatsapp://send/';
				}
				// Get Value
				var tujuan = $('#whatsapp .tujuan').val(),
					via_url = location.href,
                    licensi =$('#whatsapp .licensi').val(),
					nama = $('#whatsapp .nama').val(),
					email = $('#whatsapp .email').val(),
					nomor = $('#whatsapp .nomor').val(),
					kota = $('#whatsapp .kota').val(),
                    pembayaran = $('#whatsapp .pembayaran').val(),
					informasi = $('#whatsapp .informasi').val();
				$(this).attr('href', url_wa + '?phone=62 ' + tujuan + '&text=' +
               ' %2APesanan Dibuat%2A: ' + '%0A' +
               '_ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _%0A' +
               ' %0A%2ANama%2A: ' + nama + 
               ' %0A%2AEmail%2A: ' + email + 
               ' %0A%2ANomor WhatsApp%2A: ' + nomor + 
               ' %0A%2AAlamat%2A: ' + kota + '%0A' +
               '_ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _%0A%0A' +
               ' %0A%2AMetode Pembayaran%2A: ' + pembayaran + '%0A' +
	       ' %0A%2ASaya ingin membeli%2A: ' +  informasi + '%0A' +
               ' %0A%2APesanan anda diterima, kami akan segera mengkonfirmasi pesanan anda.%2A ');
				var w = 960,
					h = 540,
					left = Number((screen.width / 2) - (w / 2)),
					tops = Number((screen.height / 2) - (h / 2)),
					popupWindow = window.open(this.href, '', 'toolbar=no, location=no, directories=no, status=no, menubar=no, scrollbars=yes, resizable=1, copyhistory=no, width=' + w + ', height=' + h + ', top=' + tops + ', left=' + left);
                popupWindow.focus();
				return false;
			}
		}//]]>
        </script>
    </body>
</html>
