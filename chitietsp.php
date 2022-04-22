<!doctype html>
<html>
<head>
<meta charset="utf-8">
<link rel="stylesheet" href="style.css">
<link rel="stylesheet" href="sanpham.css">
<link rel="stylesheet" type="text/css" href="mystyle.css">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'>
<title>THẢO</title>
	<script>
function magnify(imgID, zoom) {
  var img, glass, w, h, bw;
  img = document.getElementById(imgID);
  /*create magnifier glass:*/
  glass = document.createElement("DIV");
  glass.setAttribute("class", "img-magnifier-glass");
  /*insert magnifier glass:*/
  img.parentElement.insertBefore(glass, img);
  /*set background properties for the magnifier glass:*/
  glass.style.backgroundImage = "url('" + img.src + "')";
  glass.style.backgroundRepeat = "no-repeat";
  glass.style.backgroundSize = (img.width * zoom) + "px " + (img.height * zoom) + "px";
  bw = 3;
  w = glass.offsetWidth / 2;
  h = glass.offsetHeight / 2;
  /*execute a function when someone moves the magnifier glass over the image:*/
  glass.addEventListener("mousemove", moveMagnifier);
  img.addEventListener("mousemove", moveMagnifier);
  /*and also for touch screens:*/
  glass.addEventListener("touchmove", moveMagnifier);
  img.addEventListener("touchmove", moveMagnifier);
  function moveMagnifier(e) {
    var pos, x, y;
    /*prevent any other actions that may occur when moving over the image*/
    e.preventDefault();
    /*get the cursor's x and y positions:*/
    pos = getCursorPos(e);
    x = pos.x;
    y = pos.y;
    /*prevent the magnifier glass from being positioned outside the image:*/
    if (x > img.width - (w / zoom)) {x = img.width - (w / zoom);}
    if (x < w / zoom) {x = w / zoom;}
    if (y > img.height - (h / zoom)) {y = img.height - (h / zoom);}
    if (y < h / zoom) {y = h / zoom;}
    /*set the position of the magnifier glass:*/
    glass.style.left = (x - w) + "px";
    glass.style.top = (y - h) + "px";
    /*display what the magnifier glass "sees":*/
    glass.style.backgroundPosition = "-" + ((x * zoom) - w + bw) + "px -" + ((y * zoom) - h + bw) + "px";
  }
  function getCursorPos(e) {
    var a, x = 0, y = 0;
    e = e || window.event;
    /*get the x and y positions of the image:*/
    a = img.getBoundingClientRect();
    /*calculate the cursor's x and y coordinates, relative to the image:*/
    x = e.pageX - a.left;
    y = e.pageY - a.top;
    /*consider any page scrolling:*/
    x = x - window.pageXOffset;
    y = y - window.pageYOffset;
    return {x : x, y : y};
  }
}
</script>
</head>

<body>
		
	<!-- Header-->
  <?php require_once("header.php"); ?>
  <?php require_once("menu.php"); ?>
  <?php require_once("xuly.php");
      
  ?>
	<!--End menu-->

<div id="sanpham">
<div class="w3-row" style="background-color:whitesmoke">
  <div class="w3-col s6 ">
   <div class="container">
  <div class="mySlides">
    <div class="numbertext"></div>
	  <div class="img-magnifier-container">
		  <img src="img/sanpham/1.png" style="width:85%"  id="myimage">
</div>
	  <script>
/* Initiate Magnify Function
with the id of the image, and the strength of the magnifier glass:*/
magnify("myimage", 3);
</script>
  </div>

  <div class="mySlides">
    <div class="numbertext"></div>
	  <div class="img-magnifier-container">
		  <img src="img/sanpham/2.png" style="width:85%" id="myimage">	  
</div>
  <script>
/* Initiate Magnify Function
with the id of the image, and the strength of the magnifier glass:*/
magnify("myimage", 3);
</script>
  </div>

  <div class="mySlides">
    <div class="numbertext"></div>
	  <div class="img-magnifier-container">
		  <img src="img/sanpham/3.png" style="width:85%" id="myimage">	  
</div>
    <script>
/* Initiate Magnify Function
with the id of the image, and the strength of the magnifier glass:*/
magnify("myimage", 3);
</script>
  </div>
    
  <div class="mySlides">
    <div class="numbertext"></div>
	  <div class="img-magnifier-container">
		  <img src="img/sanpham/4.jpg" style="width:85%" id="myimage">	  
</div>
    <script>
/* Initiate Magnify Function
with the id of the image, and the strength of the magnifier glass:*/
magnify("myimage", 3);
</script>
  </div>
	   
  <div class="mySlides">
    <div class="numbertext"></div>
	  <div class="img-magnifier-container">
		  <img src="img/sanpham/5.png" style="width:85%" id="myimage">	  
</div>
    <script>
/* Initiate Magnify Function
with the id of the image, and the strength of the magnifier glass:*/
magnify("myimage", 3);
</script>
  </div>
	   
  <a class="prev" onclick="plusSlides(-1)">❮</a>
  <a class="next" onclick="plusSlides(1)">❯</a>
	   
  <div class="row">
    <div class="column">
      <img class="demo cursor" src="img/sanpham/1.png" style="width:100%" onclick="currentSlide(1)" alt=""/>
    </div>
    <div class="column">
      <img class="demo cursor" src="img/sanpham/2.png" style="width:100%" onclick="currentSlide(2)" alt=""/>
    </div>
    <div class="column">
      <img class="demo cursor" src="img/sanpham/3.png" style="width:100%" onclick="currentSlide(3)" alt=""/>
    </div>
    <div class="column">
      <img class="demo cursor" src="img/sanpham/4.jpg" style="width:100%" onclick="currentSlide(4)" alt=""/>
    </div>
    <div class="column">
      <img class="demo cursor" src="img/sanpham/5.png" alt="" style="width:100%" onclick="currentSlide(5)"/>
    </div>    
   
  </div>
</div>

<script>
var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("demo");
  var captionText = document.getElementById("caption");
  if (n > slides.length) {slideIndex = 1}
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += " active";
  captionText.innerHTML = dots[slideIndex-1].alt;
}
</script>
	  
	  <p>Chia sẻ:
		<img src="img/sanpham/social-facebook.svg" alt=""/>
        <img src="img/sanpham/social-messenger.svg" alt=""/> 
        <img src="img/sanpham/social-pinterest.svg" alt=""/>
	    <img src="img/sanpham/social-twitter.svg" alt=""/> 
        <img src="img/sanpham/social-copy.svg" alt=""/>
		  &nbsp;&nbsp;|&nbsp;&nbsp;
      <img src="img/sanpham/icons-like.svg" alt=""/> Thích(453) </p>
  </div>
  <div class="w3-col s6">
    <p>
		<span style="background-color: red;font-size:13px;width:30px;color:white">Mall</span>
	  <h3>Áo 2 dây chiffon đen vạt chéo C13241C</h3>
	</p>
	<p>Mã SKU: <span style="color:red">C13241C170511</span></p>
	<p><u style="color:red">5.0</u>
		<span style="color:red" class="fa fa-star checked"></span>
		<span style="color:red" class="fa fa-star checked"></span>
		<span style="color:red" class="fa fa-star checked"></span>
		<span style="color:red" class="fa fa-star checked"></span>
		<span style="color:red" class="fa fa-star checked"></span>
		 &nbsp;&nbsp;|&nbsp;&nbsp;
		<u style="color:black">1.8k</u> 
		<span style="color:darkgray">Đánh giá</span>
		&nbsp;&nbsp;|&nbsp;&nbsp;
		<u style="color:black">6.2k</u> 
		<span style="color:darkgray">Đã bán</span>
	</p>
	<div style="background-color:beige;width:500px">
	<span style="text-decoration:line-through;color:darkgray;">
	<sup>đ</sup>599.000</span>
		&nbsp;&nbsp;
		<b style="color:red;font-size:40px"><u><sup>đ</sup></u>399.000</b>
		&nbsp;&nbsp;
		<sup><span style="background-color:red;font-size:11px;width:30px;color:white">Giảm 20%</span></sup>
	</div>
	<br>
	
	<div style="background-color:ghostwhite;width:500px">
	<span style="color:red">FLASH SALE</span>
	<span>Bắt đầu sau 14:03, 25 Th09 ></span>
		<br>
		<img src="img/flashsale.jpg" width="44" height="31">
		<span style="color:red">Gì cũng rẻ</span>
		 <p style="color:darkgray;font-size:10px">Giá tốt nhất so với các sản phẩm cùng loại trên Shopee</p>
	</div>
	<table width="100%" border="0">
  <tbody>
    <tr>
      <td width="19%" height="32">Vận chuyển :</td>
      <td width="81%"><img src="img/giohang.jpg" width="19" height="18" alt=""/> Xử lý đơn hàng bởi Shopee</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td><img src="img/shopping-cart-icon-flat-design-260nw-259703696.jpg" width="20" height="18" alt=""/> Miễn Phí Vận Chuyển </td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td><img src="img/delivery-truck-vector-icon-png_296956.jpg" width="22" height="25" alt=""/> Vận Chuyển Tới 
        <label for="select"></label>
        <select name="select" id="select" style="border-style: none">
          <option>Huyện Phù Cừ</option>
          <option>Huyện Thanh Trì</option>
          <option>Huyện Đông Anh</option>
          <option>Huyện Ba Vì</option>
        </select></td>
    </tr>
    <tr>
      <td height="54">&nbsp;</td>
      <td>&nbsp;&nbsp;&nbsp;&nbsp; Phí vận chuyển 
        <label for="select2"></label>
        <select name="select2" id="select2" style="border-style: none">
          <option>0</option>
          <option>1.500</option>
          <option>2.000</option>
          <option>3000</option>
        </select></td>
    </tr>
    <tr>
		
      <td height="69">Màu :</td>
      <td><button style="border-color:white;color:crimson" class="btn">Trắng</button>
		  <button style="border-color:white;color:crimson" class="btn">Đen</button>
		  <button style="border-color:white;color:crimson" class="btn">Hồng</button>
		  <button style="border-color:white;color:crimson" class="btn">Vàng</button>
	  </td>
    </tr>
	  
    <tr>
      <td height="66">Kích cỡ :</td>
      <td><button style="border-color:darkgray;color:coral" class="btn">S</button>
		  <button style="border-color:darkgray;color:coral" class="btn">M</button>
		  <button style="border-color:darkgray;color:coral" class="btn">L</button>
		  <button style="border-color:darkgray;color:coral" class="btn">XL</button>
		</td>
    </tr>
	  
	   <tr>
      <td height="66">Số lượng:</td>
      <td><button style="border-color:darkgray;color:coral;width:40px" class="btn">-</button>
		   <button style="border-color:darkgray;color:coral;width:40px" class="btn">1</button>
		   <button style="border-color:darkgray;color:coral;width:40px" class="btn">+</button> 
		    228 sản phẩm có sẵn </td>
    </tr>
	  
	  <tr>
	  <td>&nbsp</td>
	  <td><button class="btn" style="font-size:15px;color:white;background-color:salmon; border:red;height:50px"><img src="img/unnamed.png" width="29" height="22" alt=""/>Thêm vào giỏ hàng </button>
		  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		  <button style="background-color:red;color:white;font-size:15px;height:50px;border:red;width:150px">Mua Ngay</button>
		  </td>
	  </tr>
	  
  </tbody>
</table>
<hr>
	<span><img src="img/giohang.jpg" width="21" height="16" alt=""/>Shoppe Bảo Đảm</span>
	&nbsp;&nbsp;
	<span style="color:darkgray">3 Ngày Trả Hàng / Hoàn Tiền</span>
  </div>
</div>
</div>


</body>
</html>
