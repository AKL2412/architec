(function(){

	$('.zoomable').click(function(e){
		//var c = modalBox();
		//c.html($(this));
		alert(456)
	});
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
function goTop(){
	$('html, body').animate({  
        scrollTop:0  
    }, 100);
}

function searching(dataArray,indexArray,searchingValue,rubrique,returnArray){
	
	for (var i = 0; i < dataArray.length; i++) {
		var temp = dataArray[i];
		for (var j = 0; j < indexArray.length; j++) {
			var tempIndex = indexArray[j];
			if(temp[tempIndex].toLowerCase().indexOf(searchingValue.toLowerCase()) != -1){
				var linkt = temp.nom;
				if(rubrique == 'professeur')
					linkt = temp.prenom.toLowerCase()+' '+temp.nom.toUpperCase();
				var rObj = {
					levelIndice : j,
					level : tempIndex,
					rubrique : rubrique,
					link:linkt,
					value : temp,
					affiche: findWrods(searchingValue,temp[tempIndex])
				}
				returnArray.push(rObj);

				break;
			}
		};
	};
	//return returnArray;
}
function limiteTo(chaine,texte){
	var index = texte.toLowerCase().indexOf(value.toLowerCase());
	if(index < 3 ){
		return texte.substring(0,50)+"...";
	}
	return texte.substring(index - 3 ,47)+"...";
}
function findWrods(chaine,texte){

	if(texte.toLowerCase().indexOf(chaine.toLowerCase()) != -1){
		return surLigne(chaine,texte).tex;
	}else{
		var tab = chaine.split(' ');
		var r = texte;
		for(var s in tab){
			//console.log(tab[s]);
			var t = surLigne(tab[s],r);
			r = t.tex;
			if(t.state) break;
		}
		return r;
	}
	
}

function surLigne(value,container){
	var index = container.toLowerCase().indexOf(value.toLowerCase());
	var find = false;
	if( index != -1){
		find = true;
		var firstPart = container.substring(0,index);
		var nvalue = container.substring(index,parseInt(value.length+index));
		var lastPart = container.substring(parseInt(index+ value.length ) ,container.length);
	 
	return {
		tex : firstPart +'<strong>'+nvalue+"</strong>"+lastPart,
		state :find
	};
	}
	return {
		tex : container,
		state :find
	};
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