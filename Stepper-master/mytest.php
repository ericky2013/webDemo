<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0" />
	<title>this</title>
	<link rel="stylesheet" href="lib/css/base_style.css"/>
	<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap.min.css"/>
	<link rel="stylesheet" href="jquery.fs.stepper.css">
	<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
   <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
   <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
   <![endif]-->
</head>
<body>
	<!--[if lte IE 8]>
	    <div class="error chromeframe">您的浏览器版本<strong>很旧很旧</strong>，为了正常地访问网站，请升级您的浏览器 <a target="_blank" href="http://browsehappy.com">立即升级</a></div>
	<![endif]-->
	
	<div class="container">
		<h3>basic demo </h3>
		<input type="number" />

		<h3>Custom Ranges</h3>
		<input type="number" min="2" max="20" step="2" />
	</div>

	




	<!-- javascript 文件  -->
	<script src='//code.jquery.com/jquery-1.10.2.min.js' ></script>
	<script src='//netdna.bootstrapcdn.com/bootstrap/3.0.3/js/bootstrap.min.js' ></script>
	<script src="jquery.fs.stepper.js"></script>

	<!-- js debug mode -->
	<script>
		var debugging = true; // true 为适应IE8-的调试模式    将console.log(转为调用alert函数)
		if( typeof(console) == 'undefined' && debugging) {
    		var console = {
    			log: function(str){
    				 alert(str);
    			}
    		}
		}else if(!debugging){   //设置为false 将重置所有的console.log函数 使其无效 不管是在IE 还是非IE
			var console = {
    			log: function(){
    				 ;
    			}
    		}
		}   
	</script>
	<script>
		$("input[type='number']").stepper();
	</script>
	
</body>
</html>