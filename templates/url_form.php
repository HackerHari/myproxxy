<html>

<link rel="icon" href="https://ssl.gstatic.com/docs/doclist/images/infinite_arrow_favicon_5.ico">
<title>My Drive - Google Drive</title>
<style type="text/css">

html body {
	margin-top: 50px !important;
}

#top_form {
	position: fixed;
	top:0;
	left:0;
	width: 100%;
	
	margin:0;
	
	z-index: 2100000000;
	-moz-user-select: none; 
	-khtml-user-select: none; 
	-webkit-user-select: none; 
	-o-user-select: none; 
	
	border-bottom:1px solid #CE00C0;
	
    background:#4D0243;
	
	height:45px;
	line-height:45px;
}

#top_form input[name=url] {
	width: 550px;
	height: 20px;
	padding: 5px;
	font: 13px "Helvetica Neue",Helvetica,Arial,sans-serif;
	border: 0px none;
	background: none repeat scroll 0% 0% #FFF;
}

</style>

<link rel="icon" href="https://ssl.gstatic.com/docs/doclist/images/infinite_arrow_favicon_5.ico">

<script>
var url_text_selected = false;

function smart_select(ele){

	ele.onblur = function(){
		url_text_selected = false;
	};
	
	ele.onclick = function(){
		if(url_text_selected == false){
			this.focus();
			this.select();
			url_text_selected = true;
		}
	};
}
</script>

<div id="top_form">

	<div style="width:800px; margin:0 auto;">
	
		<form method="post" action="index.php" target="_top" style="margin:0; padding:0;">
			<input type="button" value="Home" onclick="window.location.href='local-2.html'">
			<input type="text" name="url" value="<?php echo $url; ?>" autocomplete="off">
			<input type="hidden" name="form" value="1">
			<input type="submit" value="Go">
		</form>
		
	</div>
	
</div>

<script type="text/javascript">
	smart_select(document.getElementsByName("url")[0]);
</script>

	
<link rel="icon" href="https://ssl.gstatic.com/docs/doclist/images/infinite_arrow_favicon_5.ico">
