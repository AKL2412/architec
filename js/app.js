(function(){

	$(window).scroll(onscroll);
	onscroll = function() {
  var scrollTop = document.documentElement.scrollTop || document.body.scrollTop;
  //$('#scroll').text(scrollTop);
  if (scrollTop > 176 && $('#menu-tab-a-propos').length > 0) {
    $('#menu-tab-a-propos').css({
    	position : 'fixed',
    	top:'150px',
    	zIndex :110,
    	backgroundColor:'#fff'
    });
  }else if( $('#menu-tab-a-propos').length > 0)  {
   $('#menu-tab-a-propos').css({
    	position : 'relative',
    	top:'0px'
    });
  }
};

})();
function modalBox(){
	if($('#modal').length > 0 ){
		return $('#modal').find('.container');
	}else{
		var box = $('<div id="modal"><div class="back"></div><div class="rows"><div class="main"><i class="fa-times fa closer" title="fermer la fenetre"></i><div class="container"><div class=" text-center"><img src="css/image/ajax-loader.gif"> Chargement...</div></div></div></div></div>');
		$('body').prepend(box);
		$('body').css('overflow','hidden');
		box.find('.closer').click(function(e){
			$('#modal').remove();
			$('body').css('overflow','auto');
		});
		box.find('.rows').click(function(e){
			$('#modal').remove();
			$('body').css('overflow','auto');
		});
		box.find('.container').click(function(e){
			e.preventDefault();
			return false;
		});
		return box.find('.container');
	}
}
function explose(str){
	var chaine ="";
	var tab = str.split(' ');
	for (var i = 0; i < tab.length-1; i++) {
		chaine += tab[i]+"+";
	};
	chaine += tab[tab.length-1];
	
	return chaine;
}
/*function reload(){
	$('script').each(function() {
    if ($(this).attr('src') !== 'js/app.js') {
        var old_src = $(this).attr('src');
        $(this).attr('src', '');
        var nScript = $('<script type="text/javascript" src=""></script>');
        setTimeout(function(){ 
        	$(this).remove();
        	nScript.attr('src', old_src);
        	$('body').append(nScript);
        	console.log('reload :'+new Date());
         }, 250);
    }
});
}*/