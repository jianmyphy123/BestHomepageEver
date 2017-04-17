    <script>
		var num='01';
		var letter='a';
		window.onload = function() {
			document.getElementById("search_query").focus();
			<?php
		if(isset($_COOKIE['BG'])){
			echo "
			$('body').css('background-image', 'url(pictures/background_selection/".$_COOKIE['BG']."".$_COOKIE['BG_LETTER'].".png)');
			num = '".$_COOKIE['BG']."';
			letter = '".$_COOKIE['BG_LETTER']."';
			";
			
		} 
			?>
			
		};
		function Shuffle(o) {
			for(var j, x, i = o.length; i; j = parseInt(Math.random() * i), x = o[--i], o[i] = o[j], o[j] = x);
			return o;
		}
		function randomBg(){
			window.location="index.php?clear";
			/*
			var test = ['01','02','03','04','05','06','07','08','09','10','11','12','13','14','15','16'];
			Shuffle(test);
			$('#b_'+test[0]+''+letter+'').click();
			*/
		}
		function showA(){
			$('#selA').addClass('selBox');
			$('#selB').removeClass('selBox');
			$('#selC').removeClass('selBox');
			$('#pics_a').css('display', 'block');
			$('#pics_b').css('display', 'none');
			$('#pics_c').css('display', 'none');
		}
		function showB(){
			$('#selA').removeClass('selBox');
			$('#selB').addClass('selBox');
			$('#selC').removeClass('selBox');
			$('#pics_a').css('display', 'none');
			$('#pics_b').css('display', 'block');
			$('#pics_c').css('display', 'none');
		}
		function showC(){
			$('#selA').removeClass('selBox');
			$('#selB').removeClass('selBox');
			$('#selC').addClass('selBox');
			$('#pics_a').css('display', 'none');
			$('#pics_b').css('display', 'none');
			$('#pics_c').css('display', 'block');
		}
		function bgChange(val,val1){
			num = val;
			letter = val1;
			$('body').css('background-image', 'url(pictures/background_selection/'+num+''+letter+'.png)');
			$('#bg_preview').css('background-image', 'url(pictures/background_selection/'+num+''+letter+'.png)');	
		}
		function saveBg(){window.location='index.php?num='+num+'&letter='+letter;}
	</script>
