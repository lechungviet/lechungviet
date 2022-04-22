<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="mystyle.css">
    <link rel="stylesheet" type="text/css" href="modal.css">
    <link href="css/main.css" rel="stylesheet" type="text/css" />
    <script type="text/javascript" src="js/glMatrix-0.9.5.min.js"></script>
    <script type="text/javascript" src="js/webgl-utils.js"></script>
    <!--<script type="text/javascript" src="js/script.js"></script> -->

    <title>Danh mục sản phẩm</title>
</head>
<body>
    <?php require_once("header.php"); ?>
    <?php require_once("menu.php"); ?>
    <?php require_once("xuly.php");
        $id=$_GET["id"];
        $tenmh=layTenMatHang($id);
        $tennsx=layTenNSX(layIDNsx($id));
        $tenlh=layTenLoaiHang(layIDLh($id));
        $soluong=layDungTich($id);
        $mota=layMoTa($id);
        $gia=layGia($id);
        $hinh="./hinh/".layHinh($id);
    ?>
    
    <div class="content_sp">
        <div class="left_sp">
            <div class="tensanpham">
                <?php echo "$tenmh"; ?>
            </div>
            <div class="hinhsanpham">
                <img src="<?php echo "$hinh"; ?>" alt="" id="hinhsppp"> 
            </div>
            <div class="hinhphu">
                <?php
                    $sql2="SELECT *FROM `chitietsp` WHERE mamh='$id'"; 
                    $listsp=executeResult($sql2);
                    foreach ($listsp as $std2) {
                        $duongdan="./hinh/".$std2['link'];
                        echo'
                            <div class="sanpham">
                                <img src="'.$duongdan.'" alt="" id="hinhphu" onclick="changeImage(this)">
                            </div>
                        ';
                    }
                ?>
            </div>
        </div>
        <div class="right_sp">
            <div class="tieudesanpham">
                <span>HÃNG SẢN XUẤT: </span> <p><?php echo "$tennsx"; ?></p>
                <hr>
            </div>
            <div class="tieudesanpham">
                <span>LOẠI HÀNG: </span> <p><?php echo "$tenlh"; ?></p>
                <hr>
            </div>
            <div class="tieudesanpham">
                <span>SỐ LƯỢNG: </span> <p><?php echo "$soluong"; ?></p>
                <hr>
            </div>
            <div class="tieudesanpham">
                <span>MÔ TẢ: </span>
                <div style="width: 500px;"><?php echo "$mota"; ?></div>
                <hr>
            </div>
            <div class="tieudesanpham">
                <span>GIÁ: </span> <p><?php echo "$gia"; ?>đ</p>
                <hr>
            </div>
            <br>
            <button class="trigger">Hướng dẫn mua hàng</button>
            <div class="modal">
                <div class="modal-content">
                    <span class="close-button">&times;</span>
                    <h1>Hướng dẫn mua hàng</h1>
                    <p>- Quý khách chọn xem chi tiết các mẫu sản phẩm tại website</p>
                    <p>- Khi đã tìm được sản phẩm quan tâm và phù hợp, Quý khách có thể đặt hàng theo các hình thức sau đây:</p>
                    <h3>A. HÌNH THỨC MUA HÀNG TRỰC TUYẾN</h3>
                    <p>-Nhấn vào nút mua ngay sau đó chọn kích cỡ, số lượng sản phẩm rồi click vào nút “Đặt hàng” hệ thống sẽ ghi nhận. Nhân viên sẽ tiến hành xử lý đơn hàng cho quý khách.
                    Quý khách có thể kiểm tra tình trạng đơn hàng ở mục "Xem đơn hàng"
                    </p>
                    <h3>B. HÌNH THỨC MUA HÀNG QUA ĐIỆN THOẠI</h3>
                    <p>- Chọn kích cỡ, màu sắc, số lượng sản phẩm, sau đó gọi hoặc gửi tin nhắn cho Seven.AM vào số hotline: 092.405.8888 để đặt hàng, nhân viên của Seven.AM sẽ liên hệ lại để xác nhận thông tin sản phẩm của và hướng dẫn Quý khách chuyển khoản thanh toán.</p>
                </div>
            </div>
            <button class="trigger2">Hướng dẫn chọn size</button>
            <div class="modal2">
                <div class="modal-content2">
                    <span class="close-button2">&times;</span>
                    <img src="https://theme.hstatic.net/1000388594/1000727279/14/size.jpg?v=577" alt="">
                </div>
            </div>
            <br><br>
            <div class="muahang">
                <div class="themgiohang" id="muahang">Mua ngay</div>
                
            </div>
            <dialog id="favDialog">
                <form method="post" action="./function/dathang.php">
                    <p><label> <?php echo "$tenmh"; ?></label></p> <div class="khoancach"></div>
                    <p><label>Số lượng: <input type="number"></label></p> <div class="khoancach"></div>
                    <p><label>Size: 
                        <select name="size" id="cars">
                            <option value="XS">XS</option>
                            <option value="S">S</option>
                            <option value="M">M</option>
                            <option value="L">L</option>
                            <option value="XL">XL</option>
                            <option value="XXL">XXL</option>
                        </select>
                    </label></p> <div class="khoancach"></div>
                    </label></p> <div class="khoancach"></div>
                    <menu>
                    <button value="cancel" id="huy">Hủy</button>
                    <button id="confirmBtn" value="default" name="soluong">Đặt hàng</button>
                    <input type="text" name="mamh" style="display: none" value="<?php echo "$id"; ?>">
                    </menu>
                </form>
            </dialog>
        </div>
    </div>
    <div class="khoancach"></div>
    <?php require_once("foodter.php"); ?>
    <script>
        var btndatmua = document.getElementById('muahang');
        var favDialog = document.getElementById('favDialog');
        var outputBox = document.querySelector('output');
        var soluong = document.querySelector('input');
        var confirmBtn = document.getElementById('confirmBtn');

        btndatmua.addEventListener('click', function onOpen() {
        if (typeof favDialog.showModal === "function") {
            favDialog.showModal();
        } else {
            alert("The <dialog> API is not supported by this browser");
        }
        });
        soluong.addEventListener('change', function onSelect(e) {
            confirmBtn.value = soluong.value;
        });
        favDialog.addEventListener('close', function onClose() {
            alert(favDialog.returnValue);

        });
    </script>
    <script language="javascript">
        function changeImage(e) {
            var imgOld=document.getElementById("hinhsppp");
            imgOld.src= e.src;
        }
    </script>
    <script>
        const modal = document.querySelector(".modal");
        const trigger = document.querySelector(".trigger");
        const closeButton = document.querySelector(".close-button");
        function toggleModal() {
            modal.classList.toggle("show-modal");
        }
        function windowOnClick(event) {
            if (event.target === modal) {
                toggleModal();
            }
        }
        trigger.addEventListener("click", toggleModal);
        closeButton.addEventListener("click", toggleModal);
        window.addEventListener("click", windowOnClick);
    </script>
    <script>
        const modal2 = document.querySelector(".modal2");
        const trigger2 = document.querySelector(".trigger2");
        const closeButton2 = document.querySelector(".close-button2");
        function toggleModal2() {
            modal2.classList.toggle("show-modal2");
        }
        function windowOnClick(event) {
            if (event.target === modal2) {
                toggleModal2();
            }
        }
        trigger2.addEventListener("click", toggleModal2);
        closeButton2.addEventListener("click", toggleModal2);
        window.addEventListener("click", windowOnClick);
    </script>
<!-- code ảnh chuyển động xoay 3d -->
    <script >
var gl; // global WebGL object
var shaderProgram;


console.log(pics_names);
// var pics_1=['3.jpg']; var pics_2=['2.jpg'];var pics_3=['1.jpg']; var pics_4=['1.jpg'];var pics_5=['4.jpg'];var pics_6=['5.jpg'];var pics_7=['6.jpg'];
var pics_names=[
<?php
    $sql2="SELECT *FROM `chitietsp` WHERE mamh='$id'"; 
    $listsp=executeResult($sql2);
    $hinhcuoi=$listsp[count( $listsp)-1]['link'];
    $duongdan="";
    foreach ($listsp as $std2) {
        if($std2['link']!=$hinhcuoi)
            $duongdan.="'"."./hinh/".$std2['link']."',";
        else
            $duongdan.="'"."./hinh/".$std2['link']."'";
    }
    echo $duongdan;
?>
];
//var pics_names=[ './hinh/H1.jpg', './hinh/H2.jpg', './hinh/H3.jpg'];
var pics_num=pics_names.length;

// diffirent initializations

function initGL(canvas) {
    try {
        gl = canvas.getContext('experimental-webgl');
        gl.viewportWidth = canvas.width;
        gl.viewportHeight = canvas.height;
    } catch (e) {}
    if (! gl) {
        alert('Can`t initialise WebGL, not supported');
    }
}

function getShader(gl, type) {
    var str = '';
    var shader;

    if (type == 'x-fragment') {
        str = "#ifdef GL_ES\n"+
"precision highp float;\n"+
"#endif\n"+
"varying vec2 vTextureCoord;\n"+
"uniform sampler2D uSampler;\n"+
"void main(void) {\n"+
"    gl_FragColor = texture2D(uSampler, vec2(vTextureCoord.s, vTextureCoord.t));\n"+
"}\n";
        shader = gl.createShader(gl.FRAGMENT_SHADER);
    } else if (type == 'x-vertex') {
        str = "attribute vec3 aVertexPosition;\n"+
"attribute vec2 aTextureCoord;\n"+
"uniform mat4 uMVMatrix;\n"+
"uniform mat4 uPMatrix;\n"+
"varying vec2 vTextureCoord;\n"+
"void main(void) {\n"+
"    gl_Position = uPMatrix * uMVMatrix * vec4(aVertexPosition, 1.0);\n"+
"    vTextureCoord = aTextureCoord;\n"+
"}\n";
        shader = gl.createShader(gl.VERTEX_SHADER);
    } else {
        return null;
    }

    gl.shaderSource(shader, str);
    gl.compileShader(shader);

    if (!gl.getShaderParameter(shader, gl.COMPILE_STATUS)) {
        alert(gl.getShaderInfoLog(shader));
        return null;
    }
    return shader;
}

function initShaders() {
    var fragmentShader = getShader(gl, 'x-fragment');
    var vertexShader = getShader(gl, 'x-vertex');

    shaderProgram = gl.createProgram();
    gl.attachShader(shaderProgram, vertexShader);
    gl.attachShader(shaderProgram, fragmentShader);
    gl.linkProgram(shaderProgram);

    if (!gl.getProgramParameter(shaderProgram, gl.LINK_STATUS)) {
        alert('Can`t initialise shaders');
    }

    gl.useProgram(shaderProgram);

    shaderProgram.vertexPositionAttribute = gl.getAttribLocation(shaderProgram, 'aVertexPosition');
    gl.enableVertexAttribArray(shaderProgram.vertexPositionAttribute);

    shaderProgram.textureCoordAttribute = gl.getAttribLocation(shaderProgram, 'aTextureCoord');
    gl.enableVertexAttribArray(shaderProgram.textureCoordAttribute);

    shaderProgram.pMatrixUniform = gl.getUniformLocation(shaderProgram, 'uPMatrix');
    shaderProgram.mvMatrixUniform = gl.getUniformLocation(shaderProgram, 'uMVMatrix');
    shaderProgram.samplerUniform = gl.getUniformLocation(shaderProgram, 'uSampler');
}

var objVertexPositionBuffer=new Array();
var objVertexTextureCoordBuffer=new Array();
var objVertexIndexBuffer=new Array();

function initObjBuffers() {
    for (var i=0;i<pics_num;i=i+1) {
        objVertexPositionBuffer[i] = gl.createBuffer();
        gl.bindBuffer(gl.ARRAY_BUFFER, objVertexPositionBuffer[i]);
        vertices = [
            Math.cos(i*((2*Math.PI)/pics_num)), -0.5,  Math.sin(i*((2*Math.PI)/pics_num)),
            Math.cos(i*((2*Math.PI)/pics_num)), 0.5,  Math.sin(i*((2*Math.PI)/pics_num)),
            Math.cos((i+1)*((2*Math.PI)/pics_num)), 0.5, Math.sin((i+1)*((2*Math.PI)/pics_num)),
            Math.cos((i+1)*((2*Math.PI)/pics_num)), -0.5,  Math.sin((i+1)*((2*Math.PI)/pics_num)),
        ];
        gl.bufferData(gl.ARRAY_BUFFER, new Float32Array(vertices), gl.STATIC_DRAW);
        objVertexPositionBuffer[i].itemSize = 3;
        objVertexPositionBuffer[i].numItems = 4;

        objVertexTextureCoordBuffer[i] = gl.createBuffer();
        gl.bindBuffer(gl.ARRAY_BUFFER,  objVertexTextureCoordBuffer[i] );
        var textureCoords = [
            0.0, 0.0,
            0.0, 1.0,
            1.0, 1.0,
            1.0, 0.0,
        ];
        gl.bufferData(gl.ARRAY_BUFFER, new Float32Array(textureCoords), gl.STATIC_DRAW);
        objVertexTextureCoordBuffer[i].itemSize = 2;
        objVertexTextureCoordBuffer[i].numItems = 4;

        objVertexIndexBuffer[i] = gl.createBuffer();
        gl.bindBuffer(gl.ELEMENT_ARRAY_BUFFER, objVertexIndexBuffer[i]);
        var objVertexIndices = [
            0, 1, 2,
            0, 2, 3,  
        ];
        gl.bufferData(gl.ELEMENT_ARRAY_BUFFER, new Uint16Array(objVertexIndices), gl.STATIC_DRAW);
        objVertexIndexBuffer[i].itemSize = 1;
        objVertexIndexBuffer[i].numItems = 6;
    }
}

function handleLoadedTexture(texture) {
    gl.bindTexture(gl.TEXTURE_2D, texture);
    gl.pixelStorei(gl.UNPACK_FLIP_Y_WEBGL, true);
    gl.texImage2D(gl.TEXTURE_2D, 0, gl.RGBA, gl.RGBA, gl.UNSIGNED_BYTE, texture.image);
    gl.texParameteri(gl.TEXTURE_2D, gl.TEXTURE_MAG_FILTER, gl.LINEAR);
    gl.texParameteri(gl.TEXTURE_2D, gl.TEXTURE_MIN_FILTER, gl.LINEAR);
    gl.bindTexture(gl.TEXTURE_2D, null);
}


var crateTextures = Array();
function initTexture(image) {
    var crateImage = new Image();

    var texture = gl.createTexture();
    texture.image = crateImage;
    crateImage.src = image;

    crateImage.onload = function () {
        handleLoadedTexture(texture)
    }
    return texture;
}

function initTextures() {
    for (var i=0; i < pics_num; i++) {
        crateTextures[i]=initTexture(pics_names[i]);
    }
}

var mvMatrix = mat4.create();
var mvMatrixStack = [];
var pMatrix = mat4.create();

function setMatrixUniforms() {
    gl.uniformMatrix4fv(shaderProgram.pMatrixUniform, false, pMatrix);
    gl.uniformMatrix4fv(shaderProgram.mvMatrixUniform, false, mvMatrix);
}

function degToRad(degrees) {
    return degrees * Math.PI / 180;
}


// mouse and keyboard handlers

var xRot = 0;
var xSpeed = 0;
var yRot = 0;
var ySpeed = 10;
var z = -3.0;

var currentlyPressedKeys = {};
function handleKeyDown(event) {
    currentlyPressedKeys[event.keyCode] = true;
}

function handleKeyUp(event) {
    currentlyPressedKeys[event.keyCode] = false;
}

function handleKeys() {
    if (currentlyPressedKeys[33]) { // Page Up
        z -= 0.05;
    }
    if (currentlyPressedKeys[34]) { // Page Down
        z += 0.05;
    }
    if (currentlyPressedKeys[37]) { // Left cursor key
        ySpeed -= 1;
    }
    if (currentlyPressedKeys[39]) { // Right cursor key
        ySpeed += 1;
    }
    if (currentlyPressedKeys[38]) { // Up cursor key
        xSpeed -= 1;
    }
    if (currentlyPressedKeys[40]) { // Down cursor key
        xSpeed += 1;
    }
}

var mouseDown = false;
var lastMouseX = null;
var lastMouseY = null;

var RotationMatrix = mat4.create();
mat4.identity(RotationMatrix);

function handleMouseDown(event) {
    mouseDown = true;
    lastMouseX = event.clientX;
    lastMouseY = event.clientY;
}

function handleMouseUp(event) {
    mouseDown = false;
}

function handleMouseMove(event) {
    if (!mouseDown) {
      return;
    }
    var newX = event.clientX;
    var newY = event.clientY;

    var deltaX = newX - lastMouseX;
    var newRotationMatrix = mat4.create();
    mat4.identity(newRotationMatrix);
    mat4.rotate(newRotationMatrix, degToRad(deltaX / 5), [0, 1, 0]);

    var deltaY = newY - lastMouseY;
    mat4.rotate(newRotationMatrix, degToRad(deltaY / 5), [1, 0, 0]);

    mat4.multiply(newRotationMatrix, RotationMatrix, RotationMatrix);

    lastMouseX = newX
    lastMouseY = newY;
}

// Draw scene and initialization

var MoveMatrix = mat4.create();
mat4.identity(MoveMatrix);

function drawScene() {
    gl.viewport(0, 0, gl.viewportWidth, gl.viewportHeight);
    gl.clear(gl.COLOR_BUFFER_BIT | gl.DEPTH_BUFFER_BIT);

    mat4.perspective(45, gl.viewportWidth / gl.viewportHeight, 0.1, 100.0, pMatrix);

    mat4.identity(mvMatrix);

    mat4.translate(mvMatrix, [0.0, 0.0, z]);

    mat4.rotate(mvMatrix, degToRad(xRot), [1, 0, 0]);
    mat4.rotate(mvMatrix, degToRad(yRot), [0, 1, 0]);

    mat4.multiply(mvMatrix, MoveMatrix);
    mat4.multiply(mvMatrix, RotationMatrix);

    for (var i=0;i<pics_num;i=i+1) {
        gl.bindBuffer(gl.ARRAY_BUFFER, objVertexPositionBuffer[i]);
        gl.vertexAttribPointer(shaderProgram.vertexPositionAttribute, objVertexPositionBuffer[i].itemSize, gl.FLOAT, false, 0, 0);

        gl.bindBuffer(gl.ARRAY_BUFFER, objVertexTextureCoordBuffer[i]);
        gl.vertexAttribPointer(shaderProgram.textureCoordAttribute, objVertexTextureCoordBuffer[i].itemSize, gl.FLOAT, false, 0, 0);

        gl.activeTexture(gl.TEXTURE0);
        gl.bindTexture(gl.TEXTURE_2D, crateTextures[i]);
        gl.uniform1i(shaderProgram.samplerUniform, 0);

        gl.bindBuffer(gl.ELEMENT_ARRAY_BUFFER, objVertexIndexBuffer[i]);
        setMatrixUniforms();
        gl.drawElements(gl.TRIANGLES, objVertexIndexBuffer[i].numItems, gl.UNSIGNED_SHORT, 0);
    }
}

var lastTime = 0;
function animate() {
    var timeNow = new Date().getTime();
    if (lastTime != 0) {
        var elapsed = timeNow - lastTime;

        xRot += (xSpeed * elapsed) / 1000.0;
        yRot += (ySpeed * elapsed) / 1000.0;
    }
    lastTime = timeNow;
}

function drawFrame() {
    requestAnimFrame(drawFrame);
    handleKeys();
    drawScene();
    animate();
}

function initWebGl() {
    var canvas = document.getElementById('panel');
    initGL(canvas);
    initShaders();
    initObjBuffers();
    initTextures();

    gl.clearColor(1.0, 1.0, 1.0, 1.0);
    gl.enable(gl.DEPTH_TEST);

    document.onkeydown = handleKeyDown;
    document.onkeyup = handleKeyUp;

    canvas.onmousedown = handleMouseDown;
    document.onmouseup = handleMouseUp;
    document.onmousemove = handleMouseMove;

    drawFrame();
} </script> 
</body>
</html>