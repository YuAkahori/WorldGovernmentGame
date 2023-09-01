<!DOCTYPE html>
<html>
<head>
<title>CANVAS TEST</title>
<!--[if lt IE 9]>                               // Explorer Canvasを読み込む
<script src="js/excanvas.js"></script>
<![endif]-->
<script>
 var c_canvas = document.getElementById("c");
    var context = c_canvas.getContext("2d");
    for (var x = 0.5; x < 500; x += 10) {
      context.moveTo(x, 0);
      context.lineTo(x, 375);
    }
    for (var y = 0.5; y < 375; y += 10) {
      context.moveTo(0, y);
      context.lineTo(500, y);
    }
    context.strokeStyle = "#eee";
    context.stroke();


</script>
</head>
<body>
 <canvas id="cv1" width="140" height="100"></canvas>
</body>
</html>
