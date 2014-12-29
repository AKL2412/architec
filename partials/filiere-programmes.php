<div class="row image-page filiere">
	<div class="titre">
			Le programme de la filière 
			<a href="#/filiere/{{filiere.id}}">
				<span class="badge">{{filiere.nom}}</span>
			</a>
	</div>
</div>
<div class="container">
<div class="row" ng-show="programme == null">
	<p class="label label-danger">
		<i class="fa-times fa"></i>
		Programme introuvable
	</p>
	<a href="#/filiere/{{filiere.id}}">
				Retour
	</a>
</div>

 <div class="myTimeline">
			<ul class='timeline' ng-repeat="niv in programme.niveaux">
			  <li class="year niveau">
			  	{{niv.id}}e année 
			  	
			  </li> 
			  <div class="block" ng-repeat="sem in niv.semestres">
			  	<li class="year first" >
			  	S{{sem.id}}
			  	</li>
			  	<li class="event" ng-repeat="mat in sem.matieres">
			    	<h1>{{mat.matiere.nom}}</h1>
			    	<p>{{mat.matiere.code}}</p>
			    	Volume horaire : {{mat.horaire}}
			  	</li>
			  
			  </div>
			 <!--  <li class="year first">2013</li>
			  <li class='event offset-first'>
			    Something amazing happened today, but it's a secret
			  </li>
			  <li class='event' href="#">
			    Timeline.css is <b>dynamic</b>, <b>responsive</b> and optimized to <b>demonstrate events</b> in your life in a <b>simple and clear</b> way
			  </li>
			  <li class="event">
			    <a href="http://christian-fei.com" title="christian fei">
			    made with &lt;3 by <img src="https://s3-eu-west-1.amazonaws.com/cf.img/var/face.svg" alt="christian fei"/>
			    </a>
			  </li>
			  <li class="event">
			  <a href="http://codepen.io/christian-fei/pen/BJily">
			    Open source project on codepen.io
			    <img src="css/image/iam.png" alt=""/>
			  </a>
			  </li>
			  <li class='event'>
			    Look, a sleepy kitten: <br/>
			    <img src="css/image/logo-bl-transp.png" width="80" />
			    <a href='http://ih2.redbubble.net/image.10311838.0354/flat,550x550,075,f.jpg'>
			    &copy; 2014 IAM</a>
			  </li>
			  <li class="year">2012</li>
				<li class="event offset-first">
					<p>To infinity  ... </p>
			    <img class='centered' src="http://upload.wikimedia.org/wikipedia/en/7/75/Buzz-lightyear-toy-story-3-wallpaper.jpg" alt=""/>
					<a href='http://upload.wikimedia.org/wikipedia/en/7/75/Buzz-lightyear-toy-story-3-wallpaper.jpg'>&copy;</a>
				</li>
				<li class="event">
					<p>... and beyond!</p>
			    <img class='centered' src="http://brandstyle.com.br/wp-content/uploads/2012/05/Woody-7.jpg" alt=""/>
					<a href='http://brandstyle.com.br/wp-content/uploads/2012/05/Woody-7.jpg'>&copy;</a>
				</li> -->
			</ul>

		</div> 
</div>