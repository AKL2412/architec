<!DOCTYPE html>
<html >
<head>
<script type="text/javascript" src="js/jquery-1.10.2.min.js"></script>
</head>
<body>
<h1>Infographie</h1>
<div class="row">
	<div class="col-md-4">
	<h3>Logicièls</h3>
	</div>
	<div class="col-md-8">
	
	</div>
</div>
<div class="row">
	<div class="col-md-4">
	
		<div class="list-group menu-tabs">
		  <a href="" role="PhotoShop" 
		  class="list-group-item active" >
		    PhotoShop
		  </a>
		  <a href="" role="AfterEffect" 
		  class="list-group-item" >
		    AfterEffect
		  </a>
		  <a href="" role="Illustrator" 
		  class="list-group-item" >
		    Illustrator
		  </a>
		  <a href="" role="Indesign" 
		  class="list-group-item" >
		    Indesign
		  </a>
		  
		</div>
	</div>
	<div class="col-md-8 content-tabs">
		<div id="PhotoShop" class="content-t">
			<h1>PhotoShop</h1>
			<p>
			<div class="col-md-2">
					<div class="circle-body">
						<img src="css/image/photoshop.jpg">
					</div>
				</div>
				Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
				consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
				cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
				proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
				<tt>
					<h2>Lorem ipsum dolor sit amet, </h2>consectetur adipisicing elit, sed do eiusmod
					tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
					quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
					consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
					cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
					proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
				</tt>
			</p>
		</div>
		<div id="AfterEffect" class="content-t">
			<h1>AfterEffect</h1>
			<p>
				<div class="col-md-2">
					<div class="circle-body">
						<img src="css/image/aftereffect.jpg">
					</div>
				</div>
				Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
				consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
				cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
				proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
			</p>
		</div>
		<div id="Illustrator" class="content-t">
			<h1>Illustrator</h1>
			<p>
				<div class="col-md-2">
					<div class="circle-body">
						<img src="css/image/illustrator.png">
					</div>
				</div>
				Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
				consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
				cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
				proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
			</p>
		</div>
		<div id="Indesign" class="content-t">
			<h1>Indesign</h1>
			<p>
				<div class="col-md-2">
					<div class="circle-body">
						<img src="css/image/indesign.png">
					</div>
				</div>
				Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
				consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
				cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
				proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
			</p>
		</div>
	</div>

</div>
<script type="text/javascript">
	(function(){
		//if($('#'+$('.menu-tabs .list-group-item.active')).length > 0)
  		$('#'+$('.menu-tabs .active').attr('role')).show();
  		$.each($('.menu-tabs .list-group-item'),function(val,index){
  			var a = $(index);
  			a.click(function(e){
  				$('.menu-tabs .list-group-item').removeClass('active');
  				$(this).addClass('active');
  				$('.content-t').hide();
     		 	$('#'+$(this).attr('role')).show();
  			});
  		});
    
	})();
</script>

</body>
</html>