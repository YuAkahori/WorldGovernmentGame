<!DOCTYPE html>
<html>
<head>
<title>CANVAS TEST</title>
<!--[if lt IE 9]>                               // Explorer Canvasを読み込む
<script src="js/excanvas.js"></script>
<![endif]-->
<script>
window.onload = function() {
    var cv = document.getElementById('cv1');    // 要素を得る
    if (!cv) { return; }

    var ct = cv.getContext('2d');               // 2D(平面)コンテキストを得る
    if (!ct) { return; }

    ct.fillStyle = '#ffcccc';
    ct.fillRect(0, 0, cv.width, cv.height);     // 矩形を塗りつぶす

    ct.strokeStyle = '#ff0000';
    ct.strokeRect(0, 0, cv.width, cv.height);   // 矩形を描画する

    ct.beginPath();
    ct.strokeStyle = '#ff0000';
    ct.arc(70, 50, 40, 0, Math.PI * 2, false);  // 円を描画する
    ct.stroke();

    ct.beginPath();
    ct.strokeStyle = '#0000ff';
    ct.lineWidth = 8;
    ct.moveTo(0, 0);
    ct.lineTo(240, 100);                        // 線を描画する
    ct.stroke();
}
</script>
</head>
<body>
 <canvas id="cv1" width="140" height="100"></canvas>
</body>
</html>
