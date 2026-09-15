<!DOCTYPE html>
<html lang="fa" dir="rtl">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Majidi Store</title>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
<link rel="stylesheet" href="../assets/css/Style.css">

</head>

<body>

<header>
<div class="promo-bar">
<span class="promo-text">روی خرید حداقل ۳ میلیون بر روی درگاه</span>
<span class="snapp-pay">
  <span class="snapp-pay-title">Snapp!Pay</span>
  <span class="snapp-pay-sub">پرداخت در ۴ قسط<br>بدون سود و کارمزد</span>
</span>
  </div>

  <!-- هدر اصلی -->
  <header class="main-header">
<div class="header-top">

  <!-- لوگو -->
  <div class="logo">
<i class="fa-solid fa-store logo-icon"></i>
<span class="logo-text">Majidi Store</span>
  </div>

  <!-- جستجو -->
  <div class="search-box">
<i class="fa-solid fa-magnifying-glass search-icon"></i>
<input type="text" placeholder="جستجو در  مجیدی استور" style="font-family: Vazir;">
  </div>

  <!-- آیکون‌های کاربر -->
  <div class="user-actions">
<div class="action-item">
  <i class="fa-regular fa-bell"></i>
</div>

<div class="action-item">
  <i class="fa-regular fa-user"></i>
  <a href="http://localhost/MajidiStore/pages/FormVrod.php" style="text-decoration: none;">
  <span>ورود | ثبت نام</span></a>
</div>

<div class="action-item cart">
  <i class="fa-solid fa-bag-shopping"></i>
  <a href="#" style="text-decoration: none;">
  <span>سبد خرید</span></a>
</div>

  </div>

</div>

<!-- جستجوهای پرطرفدار -->
<div class="trending-search">
  <span class="trending-label">جستجو های پرطرفدار:</span>
  <a href="#">ساعت هوشمند</a>
  <a href="#">ماساژور</a>
  <a href="#">اسپیکر بلوتوثی</a>
  <a href="#">پاوربانک</a>
  <a href="#">کوله پشتی</a>
</div>

<!-- منوی ناوبری -->
<nav class="nav-menu">
  <div class="nav-links">
<div class="category-dropdown">

<a href="#">

<i class="fa-solid fa-grip"></i>
دسته بندی ها
</a>
<div class="category-menu">
<div class="category-col">
<h4>لوازم جانبی موبایل</h4>
<a href="#">قاب و گلس</a>
<a href="#">پاور بانک</a>
<a href="#">ساعت هوشمند</a>
<a href="#">هدفون</a>

</div>

<div class="category-col">
<h4>صوتی و تصویری</h4>
<a href="#">اسپیکر بلوتوثی</a>
<a href="#">کابل شارژر</a>
<a href="#">هدفون بی‌سیم</a>

</div>

<div class="category-col">
<h4>کیف و کوله</h4>
<a href="#">کوله پشتی</a>
<a href="#">کیف لپ‌تاپ</a>

</div>

</div>

</div>
<a href="#"><i class="fa-solid fa-house"></i> فروشگاه مجیدی استور</a>
<a href="#"><i class="fa-solid fa-percent"></i> مجیدی استور بلاگ</a>
<a href="#"><i class="fa-solid fa-handshake"></i> خرید همکاری، سازمانی</a>
<a href="#"><i class="fa-solid fa-shop"></i> شعب حضوری</a>
  </div>
</nav>
  </header>
<div class="slider">

<div class="slides">

<div class="slide active">
<img src="../assets/images/s1.jpg">
</div>

<div class="slide">
<img src="../assets/images/s2.jpg">
</div>

<div class="slide">
<img src="../assets/images/s3.jpg">
</div>

<div class="slide">
<img src="../assets/images/s4.jpg">
</div>
<div class="slide">
<img src="../assets/images/s5.jpg">
</div>
<div class="slide">
<img src="../assets/images/s6.jpg">
</div>

</div>

<!-- دکمه‌ها -->

<button class="prev" onclick="changeSlide(-1)">›</button>
<button class="next" onclick="changeSlide(1)">‹</button>

<!-- نقطه‌ها -->

<div class="dots">
<span class="dot active" onclick="currentSlide(0)"></span>
<span class="dot" onclick="currentSlide(1)"></span>
<span class="dot" onclick="currentSlide(2)"></span>
<span class="dot" onclick="currentSlide(3)"></span>
</div>

</div>


<script>

let slideIndex = 0;

const slides = document.querySelectorAll(".slide");
const dots = document.querySelectorAll(".dot");

function showSlide(index) {

if (index >= slides.length) {
slideIndex = 0;
}

if (index < 0) {
slideIndex = slides.length - 1;
}

slides.forEach(slide => {
slide.classList.remove("active");
});

dots.forEach(dot => {
dot.classList.remove("active");
});

slides[slideIndex].classList.add("active");
dots[slideIndex].classList.add("active");
}


function changeSlide(direction) {

slideIndex += direction;

showSlide(slideIndex);
}


function currentSlide(index) {

slideIndex = index;

showSlide(slideIndex);
}


// تعویض خودکار هر 5 ثانیه

setInterval(() => {

slideIndex++;

showSlide(slideIndex);

}, 5000);

</script>
<!-- ========================================================================================= -->
<body>

  <section class="products-section">

<!-- هدر آبی بالای بخش -->
<div class="section-header">
  
  <a href="/newest-products" class="section-title-link">
<i class="fa-solid fa-cart-shopping"></i>
جدیدترین محصولات
  </a>
  <a href="/newest-products" class="more-link">
<h3>
بیشتر</h3>
<i class="fa-solid fa-arrow-left"></i>
  </a>
</div>

<!-- اسلایدر محصولات -->
<div class="slider-wrapper">
  <button class="arrow-btn arrow-right" aria-label="قبلی">
<i class="fa-solid fa-chevron-right"></i>
  </button>

  <div class="product-slider">

<a href="http://localhost/MajidiStore/pages/product-page.php" class="product-card">
  <span class="brand-badge brand-xiaomi">mi</span>
  <div class="product-img">
<img src="../assets/images/power.webp" alt="پاوربانک">
  </div>
  <div class="product-info">
<p class="product-title">پاوربانک فست‌ شارژ ۲۲.۵ وات مدل QuickCell ظرفیت ۲۰۰۰۰ میلی‌آمپرساعت</p>
<p class="product-price">۴,۱۲۵,۰۰۰ تومان</p>
  </div>
</a>

<a href="/product/2" class="product-card">
  <span class="brand-badge brand-xiaomi">mi</span>
  <div class="product-img">
<img src="https://via.placeholder.com/220x220.png?text=Camera" alt="دوربین نظارتی هوشمند شیائومی">
  </div>
  <div class="product-info">
<p class="product-title">دوربین نظارتی هوشمند شیائومی<br>Xiaomi CW500 Dual Outdoor Camera MJSXJ08HL</p>
<p class="product-price">۱۷,۴۵۰,۰۰۰ تومان</p>
  </div>
</a>

<a href="/product/3" class="product-card">
  <span class="brand-badge brand-porodo">porodo</span>
  <div class="product-img">
<img src="https://via.placeholder.com/220x220.png?text=Keyboard" alt="کیبورد بلوتوثی تاشو پرودو">
  </div>
  <div class="product-info">
<p class="product-title">کیبورد بلوتوثی تاشو پرودو<br>ETK03</p>
<p class="product-price">۳,۹۹۰,۰۰۰ تومان</p>
  </div>
</a>

<a href="/product/4" class="product-card">
  <span class="brand-badge brand-xiaomi">mi</span>
  <div class="product-img">
<img src="https://via.placeholder.com/220x220.png?text=Camera" alt="دوربین نظارتی هوشمند شیائومی">
  </div>
  <div class="product-info">
<p class="product-title">دوربین نظارتی هوشمند شیائومی<br>Xiaomi C500 Smart Camera MBC24</p>
<p class="product-price">۹,۳۴۵,۰۰۰ تومان</p>
  </div>
</a>

<a href="/product/5" class="product-card">
  <span class="brand-badge brand-xiaomi">mi</span>
  <div class="product-img">
<img src="https://via.placeholder.com/220x220.png?text=Watch" alt="ساعت هوشمند شیائومی">
  </div>
  <div class="product-info">
<p class="product-title">ساعت هوشمند شیائومی نسخه<br>Redmi Watch 6 Active گلوبال</p>
<p class="product-price">۹,۹۷۵,۰۰۰ تومان</p>
  </div>
</a>


<a href="/product/1" class="product-card">
  <span class="brand-badge brand-xiaomi">mi</span>
  <div class="product-img">
<img src="https://via.placeholder.com/220x220.png?text=Camera" alt="دوربین نظارتی هوشمند شیائومی">
  </div>
  <div class="product-info">
<p class="product-title">دوربین نظارتی هوشمند شیائومی<br>Xiaomi C500 Dual Smart Camera MJSXJ16CM</p>
<p class="product-price">۱۲,۹۴۵,۰۰۰ تومان</p>
  </div>
</a>

<a href="/product/2" class="product-card">
  <span class="brand-badge brand-xiaomi">mi</span>
  <div class="product-img">
<img src="https://via.placeholder.com/220x220.png?text=Camera" alt="دوربین نظارتی هوشمند شیائومی">
  </div>
  <div class="product-info">
<p class="product-title">دوربین نظارتی هوشمند شیائومی<br>Xiaomi CW500 Dual Outdoor Camera MJSXJ08HL</p>
<p class="product-price">۱۷,۴۵۰,۰۰۰ تومان</p>
  </div>
</a>

<a href="/product/3" class="product-card">
  <span class="brand-badge brand-porodo">porodo</span>
  <div class="product-img">
<img src="https://via.placeholder.com/220x220.png?text=Keyboard" alt="کیبورد بلوتوثی تاشو پرودو">
  </div>
  <div class="product-info">
<p class="product-title">کیبورد بلوتوثی تاشو پرودو<br>ETK03</p>
<p class="product-price">۳,۹۹۰,۰۰۰ تومان</p>
  </div>
</a>

<a href="/product/4" class="product-card">
  <span class="brand-badge brand-xiaomi">mi</span>
  <div class="product-img">
<img src="https://via.placeholder.com/220x220.png?text=Camera" alt="دوربین نظارتی هوشمند شیائومی">
  </div>
  <div class="product-info">
<p class="product-title">دوربین نظارتی هوشمند شیائومی<br>Xiaomi C500 Smart Camera MBC24</p>
<p class="product-price">۹,۳۴۵,۰۰۰ تومان</p>
  </div>
</a>

<a href="/product/5" class="product-card">
  <span class="brand-badge brand-xiaomi">mi</span>
  <div class="product-img">
<img src="https://via.placeholder.com/220x220.png?text=Watch" alt="ساعت هوشمند شیائومی">
  </div>
  <div class="product-info">
<p class="product-title">ساعت هوشمند شیائومی نسخه<br>Redmi Watch 6 Active گلوبال</p>
<p class="product-price">۹,۹۷۵,۰۰۰ تومان</p>
  </div>
</a>
  </div>

  <button class="arrow-btn arrow-left" aria-label="بعدی">
<i class="fa-solid fa-chevron-left"></i>
  </button>
</div>

  </section>

  <script>document.addEventListener('DOMContentLoaded', function () {
  const slider = document.querySelector('.product-slider');
  const rightBtn = document.querySelector('.arrow-right');
  const leftBtn = document.querySelector('.arrow-left');
  const scrollAmount = 260;

  // توجه: چیدمان RTL است، پس فلش راست یعنی اسکرول به سمت مثبت
  rightBtn.addEventListener('click', function () {
slider.scrollBy({ left: scrollAmount, behavior: 'smooth' });
  });

  leftBtn.addEventListener('click', function () {
slider.scrollBy({ left: -scrollAmount, behavior: 'smooth' });
  });
});
</script>
<br>
<br>
<br>
<main>
<div class="products">
<!-- محصول قدیمی 1 -->
<div class="box">
<h3>
<img src="..\assets\images\A4.jpg" 
style="width:250px;height:300px; "alt="محافظ لنز">
</h3>
<br>
<p>محافظ لنز iphone 14 pro max</p>
<br>
<a href="sabad2.html">
<button>
افزودن به سبد کالا
</button>
</a>
</div>
<!-- محصول قدیمی 2 -->
<div class="box">
<h3>
<img src="..\assets\images\A6.jpg"
style="width:250px;height:300px;" alt="اسپیکر JBL">
</h3>
<br>
<p>اسپیکر JBL</p>
<br>
<a href="sabad1.html">
<button>
افزودن به سبد کالا
</button>
</a>
</div>
<!-- محصول قدیمی 3 -->
<div class="box">
<h3>
<img src="..\assets\images\A8.jpg"
style="width:250px;height:300px;" alt="اپل واچ">
</h3>
<br>
<p>اپل واچ SE شرکت اپل رنگ بژ</p>
<br>
<a href="sabad3.html">
<button>
افزودن به سبد کالا
</button>
</a>
</div>
<!-- محصول قدیمی 4 -->
<div class="box">
<h3>
<img src="..\assets\images\A7.jpg"
style="width:250px;height:300px;"
alt="هدفون">
</h3>
<br>
<p>هدفون طرح اپل مد JBL</p>
<br>
<a href="sabad4.html">
<button>
افزودن به سبد کالا
</button>
</a>
</div>
</div>
<br>
<br>
<!-- =====================================================
 محصولات قدیمی - ردیف دوم
 ===================================================== -->
<div class="products">
<div class="box">
<h3>
<img src="..\assets\images\Y7.jpg"
style="width:250px;height:300px;" alt="محصول">
</h3>
<br>
<p>محافظ لنز iphone 14 pro max</p>
<br>
<a href="sabad3.html">
<button>
افزودن به سبد کالا
</button>
</a>
</div>
<div class="box">
<h3>
<img src="..\assets\images\Y8.jpg"
style="width:250px;height:300px;" alt="اسپیکر JBL">
</h3>
<br>
<p>اسپیکر JBL</p>
<br>
<a href="sabad3.html">
<button>
افزودن به سبد کالا
</button>
</a>
</div>
<div class="box">
<h3>
<img src="..\assets\images\Y1.jpg"
style="width:250px;height:300px;" alt="اپل واچ">
</h3>
<br>
<p>اپل واچ SE شرکت اپل رنگ بژ</p>
<br>
<a href="sabad3.html">
<button>
افزودن به سبد کالا
</button>
</a>
</div>
<div class="box">
<h3>
<img src="..\assets\images\Y3.jpg"
style="width:250px;height:300px;" alt="هدفون">
</h3>
<br>
<p>هدفون طرح اپل مد JBL</p>
<br>
<a href="sabad4.html">
<button>
افزودن به سبد کالا
</button>
</a>
</div>
</div>
</main>
<!-- =========================================================
 بنرهای پاوربانک و هندزفری
 این قسمت دقیقاً بعد از آخرین باکس محصولات قرار دارد
 ========================================================= -->
<section class="accessories-section">
<!-- =====================================================
 دو بنر
 ===================================================== -->
<div class="accessories-banners">
<a href="#" class="accessories-banner">
<img src="..\assets\images\M2.jpeg"
class="accessory-hover"
data-comment="🔋 پاوربانک" alt="پاوربانک">
</a>
<!-- =================================================
 بنر هندزفری
 ================================================= -->
<a href="#" class="accessories-banner">
<img src="..\assets\images\M1.jpeg"
class="accessory-hover"
data-comment="🎧 هندزفری و هدفون"
alt="هندزفری و هدفون">
</a>
</div>
<!-- =====================================================
 سه کارت
 ===================================================== -->

<div class="accessories-cards">
<!-- پرفروش‌ترین‌ها -->

<div class="accessory-card">
<h3>
<span>📈</span>
پرفروش‌ترین‌ها
</h3>
<div class="accessory-images">
<a href="#">
<img src="../assets/images/h3.jpeg" alt="محصول">
</a>
<a href="#"><img src="../assets/images/h4.jpeg" alt="محصول">
</a>

<a href="#">
<img src="../assets/images/h5.jpeg" alt="محصول">
</a>
</div>
</div>
<!-- محبوب‌ترین‌ها -->

<div class="accessory-card">
<h3>
<span>❤️</span>
محبوب‌ترین‌ها
</h3>
<div class="accessory-images">
<a href="#">
<img src="../assets/images/h6.jpg" alt="محصول">
</a>
<a href="#">
<img src="../assets/images/h7.jpg" alt="محصول">
</a>
<a href="#">
<img src="../assets/images/h8.jpg" alt="محصول">
</a>
</div>
</div>
<!-- پربازدیدترین‌ها -->
<div class="accessory-card">
<h3>
<span>👁</span>
پربازدیدترین‌ها
</h3>
<div class="accessory-images">
<a href="#"><img src="../assets/images/h9.jpg"alt="محصول">
</a>
<a href="#">
<img src="../assets/images/h10.jpg" alt="محصول">
</a>
<a href="#">
<img src="../assets/images/h11.jpg" alt="محصول">
</a>
</div>
</div>
</div>
</section>
<hr>
<br>
<br>
<br>
<center>
<div class="main-box4">
<div class="box11"><img src="../assets/images/payment_5393008-145x145.webp"   width="100px"   height="100px">خرید امن و راحت</div>
<div class="box12"><img src="../assets/images/warranty_4536941-145x145.webp" width="100px"   height="100px">تضمین کیفیت کالا</div>
<div class="box13"><img src="../assets/images/guarantee_7437099-145x145.webp" width="100px"   height="100px">خدمات مادام العمر</div>
<div class="box14"><img src="../assets/images/free-shipping_5627211-145x145.webp" width="110px"   height="110px">ارسال رایگان</div>
</div>
</center>
</body>
</html>