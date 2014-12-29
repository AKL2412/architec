


	var app = angular.module('architec',['ngRoute']);

	app.config(function($routeProvider){
	$routeProvider
	.when('/',{redirectTo:'/home'})
	.when('/home',{
		controller : 'home',
		templateUrl:'partials/home.php',
		resolve:{
      'FormationService':function(FormationService){
        // MyServiceData will also be injectable in your controller, if you don't want this you could create a new promise with the $q service
        return FormationService.promise;
      }
  		}
	})
	.when('/a-propos',{
		controller : 'aPropos',
		templateUrl:'partials/apropos.php'
	})
/*	========= contact ===================*/
	.when('/contact',{
		controller : 'contact',
		templateUrl:'partials/contact.php'
	})
	/*	========= search ===================*/
	.when('/search',{
		controller : 'formseachCtrl',
		templateUrl:'partials/search.php'
	})
	/*	========= programmes ===================*/
	.when('/programmes',{
		controller : 'programme',
		templateUrl:'partials/programme.php',
		resolve:{
      			'FormationServiceInProgrammeData':function(FormationService){
	        		return FormationService.promise;
	      		}/*,
	      		'FiliereServiceData':function(FiliereService){
		        	return FiliereService.promise;
	      		}*/
  		}
	})

	/*	========= filieres ===================*/
	.when('/filiere/:id',{
		controller : 'filiereCtrl',
		templateUrl:'partials/filiere.php',
		resolve:{
      			'FormationServiceInProgrammeData':function(FormationService){
	        		return FormationService.promise;
	      		},
	      		'FiliereServiceData':function(FiliereService){
		        	return FiliereService.promise;
	      		}
  		}
	})
	/*	========= filiere-programmes ===================*/
	.when('/filiere-programmes/:id',{
		controller : 'filiereProgramme',
		templateUrl:'partials/filiere-programmes.php',
		resolve:{
      			'ProgrammeFiliereServiceInProgrammeData':function(filiereProgrammeService){
	        		return filiereProgrammeService.promise;
	      		},
	      		'FiliereServiceData':function(FiliereService){
		        	return FiliereService.promise;
	      		}
  		}
	})
	

	/*	========= parascolaires ===================*/
	.when('/parascolaire',{
		controller : 'parascolaire',
		templateUrl:'partials/parascolaire.php'
	})
	/*	========= actualites ===================*/
	.when('/actualites',{
		controller : 'actualite',
		templateUrl:'partials/actualite.php',
		resolve:{
      'ArticleServiceData':function(ArticlesService){
        // MyServiceData will also be injectable in your controller, if you don't want this you could create a new promise with the $q service
        return ArticlesService.promise;
      }
  }
	})
	/*	========= actualites ===================*/
	.when('/actualite/:code',{
		controller : 'actualiteLire',
		templateUrl:'partials/actualite-lire.php',
		resolve:{
      'ArticlesServiceData':function(ArticlesService){
        return ArticlesService.promise;
      },
      'ArticleServiceData':function(ArticleService){
        return ArticleService.promise;
      }
  }
	})
	.when('/not-found',{
		templateUrl : 'partials/not-found.php',
		controller : 'notFound'
	})
	//.otherwise({redirectTo:'/not-found'})
	;
	
	});


/*	app.run(function ($rootScope, $location) {
		console.log($location);
    var history = [];

    $rootScope.$on('$routeChangeSuccess', function() {
        history.push($location.$$path);
    });

    $rootScope.back = function () {
        var prevUrl = history.length > 1 ? history.splice(-2)[0] : "/";
        $location.path(prevUrl);
    };

});*/





/*
.when('/not-found',{
      redirectTo: function (routeParams, path, search) {
        console.log(routeParams);
        console.log(path);
        console.log(search);
        return "partials/not-found.php" ;//+ routeParams.crust;
      }
	})
	*/