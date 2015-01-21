(function(){

	app.factory('ArticlesService',function($http){
		
		var articles = null;

	    var promise = $http.get('data-json/articles.json').success(function (data) {
	      articles = data;
	      //sort an array
	      articles.sort(function(a, b){

			    if(a.id < b.id) return -1;
			    if(a.id > b.id) return 1;
			    return 0;

			 });
	    });

	    return {
	      promise:promise,
	      setData: function (data) {
	          articles = data;
	      },
	      doStuff: function () {
	      	
	          return articles;//.getSomeData();
	      },
	      getArticles:function(page,length){
	      	var array = new Array();
	      	var firstId = ((page-1) *length);
	      	angular.forEach(articles,function(value,index){
	      		if(array.length < length && value.id >= firstId)
	      			array.push(value);
	      	}); 

	      	return array;
	      },
	      getArticle: function (id) {
	      		var article = null;
	          angular.forEach(articles,function(value,index){
	          		if(value.id == id)
	          			article = value;
	          });
	          return article;
	      }
	    };

	});

app.factory('ArticleService',function($http){
		var articles = null;

	    var promise = $http.get('data-json/articles-content.json').success(function (data) {
	      articles = data;
	    });

	    return {
	      promise:promise,
	      setData: function (data) {
	          articles = data;
	      },
	      getContent: function (id) {
	          var article = null;
	          angular.forEach(articles,function(value,index){
	          		if(value.article == id)
	          			article = value;
	          });
	          return article;
	      }
	    };

	});

/*==================== les professeurs ============================*/
app.factory('ProfesseurService',function($http){
		var professeurs = null;

	    var promise = $http.get('data-json/professeurs.json').success(function (data) {
	      professeurs = data;
	    });

	    return {
	      promise:promise,
	      setData: function (data) {
	          professeurs = data;
	      },
	      getContent: function (id) {
	          var article = null;
	          angular.forEach(professeurs,function(value,index){
	          		if(value.article == id)
	          			article = value;
	          });
	          return article;
	      },
	      search : function(q,array){
	      	searching(professeurs,['matricule','nom','prenom','email','presentation','genre'],q,"professeur",array);
	      }
	    };

	});
app.factory('FormationService',function($http,FiliereService){
		var formations = null;
	    var promise = $http.get('data-json/formation.json').success(function (data) {
	      formations = data;
	    });

	    return {
	      promise:promise,
	      setData: function (data) {
	          formations = data;
	      },
	      getFormations: function () {
	      	angular.forEach(formations,function(value,index){
	      			value.filieres = FiliereService.getFiliereByFormation(value.id);
	          });
	          return formations;//.getSomeData();
	      },
	      getFormationById: function (idFormation) {
	      		var data = null;
	      		angular.forEach(formations,function(value,index){
	          		if(value.id == idFormation){
	          			data = value;
	          			data.filieres = FiliereService.getFiliereByFormation(value.id);
	          		}
	          		//return value;
	          });
	          return data;//.getSomeData();
	      },
	      search : function(q,array){
	      	searching(formations,['nom','type','description'],q,"formation",array);
	      }
	    };

	});

app.factory('FiliereService',function($http,detailsFiliereService){
		var filieres = null;

	    var promise = $http.get('data-json/filieres.json').success(function (data) {
	      filieres = data;
	    });

	    return {
	      promise:promise,
	      setData: function (data) {
	          filieres = data;
	      },
	      getFilieres: function () {
	          return filieres;//.getSomeData();
	      },
	      getFiliereByFormation: function (idFormation) {
	      		var data = new Array();
	      		angular.forEach(filieres,function(value,index){
	          		if(value.formation == idFormation)
	          			data.push(value)
	          });
	          return data;//.getSomeData();
	      },
	      getFiliereById: function (idFiliere) {
	      		var data = null;
	      		angular.forEach(filieres,function(value,index){
	          		if(value.id == idFiliere){
	          			data = value;
	          			data['details'] = detailsFiliereService.getFiliereDetails(idFiliere);
	          		}
	          			
	          		//return value;
	          });
	          return data;//.getSomeData();
	      }
	    };

	});
app.factory('detailsFiliereService',function($http){
		var filieres = null;

	    var promise = $http.get('data-json/details-filieres.json').success(function (data) {
	    	//console.log(data);
	      filieres = data;
	    });

	    return {
	      promise:promise,
	      setData: function (data) {
	          filieres = data;
	      },
	      getFilieres: function () {
	          return filieres;//.getSomeData();
	      },
	      getFiliereDetails: function (idFiliere) {
	      		var data = null;
	      		angular.forEach(filieres,function(value,index){
	          		if(value.filiere == idFiliere)
	          			data = value;
	          		//return value;
	          });
	          return data;//.getSomeData();
	      }
	    };

	});
/*==================== Semestres ============================*/
app.factory('SemestreService',function($http){
		var semestres = null;
	    var promise = $http.get('data-json/semestres.json').success(function (data) {
	      semestres = data;
	    });

	    return {
	      promise:promise,
	      setData: function (data) {
	          semestres = data;
	      },
	      getsemestres: function () {
	          return semestres;//.getSomeData();
	      },
	      getSemestre: function (idSemestre) {
	      		var data = null;
	      		angular.forEach(semestres,function(value,index){
	          		if(value.id == idSemestre)
	          			data = value;
	          });
	          return data;//.getSomeData();
	      }
	    };

	});

/*==================== Modules ============================*/
app.factory('ModulesService',function($http){
		var modules = null;
	    var promise = $http.get('data-json/modules.json').success(function (data) {
	      modules = data;
	    });

	    return {
	      promise:promise,
	      setData: function (data) {
	          modules = data;
	      },
	      getmodules: function () {
	          return modules;//.getSomeData();
	      },
	      getModule: function (idModule) {
	      		var data = null;
	      		angular.forEach(modules,function(value,index){
	          		if(value.id == idModule)
	          			data = value;
	          });
	          return data;//.getSomeData();
	      },
	      search : function(q,array){
	      	searching(modules,['nom','description'],q,"modules",array);
	      }

	    };

	});

/*==================== niveaux ============================*/
app.factory('NiveauxService',function($http){
		var niveaux = null;
	    var promise = $http.get('data-json/niveaux.json').success(function (data) {
	      niveaux = data;
	    });

	    return {
	      promise:promise,
	      setData: function (data) {
	          niveaux = data;
	      },
	      getNiveaux: function () {
	          return niveaux;//.getSomeData();
	      },
	      getNiveau: function (idNiveau) {
	      		var data = null;
	      		angular.forEach(niveaux,function(value,index){
	          		if(value.id == idNiveau)
	          			data = value;
	          });
	          return data;//.getSomeData();
	      }
	    };

	});
/*==================== Filiere-Programmes service ============================*/
app.factory('filiereProgrammeService',function($http,SemestreService,NiveauxService,ModulesService){
		var programmes = null;
	    var promise = $http.get('data-json/programmes.json').success(function (data) {
	    	angular.forEach(data,function(filiere,index){
	          		angular.forEach(filiere.niveaux,function(niveau,index){
	          			niveau['niveau'] = NiveauxService.getNiveau(niveau.id);

	          			angular.forEach(niveau.semestres,function(sem,index){
	          				sem['semestre']= SemestreService.getSemestre(sem.id);

	          				angular.forEach(sem.matieres,function(mat,index){
		          				mat.matiere= ModulesService.getModule(mat.mod);
		          			});
	          			});

	          			
	          			console.log(niveau);
	          		});
	          });
	      programmes = data;
	    });

	    return {
	      promise:promise,
	      setData: function (data) {
	          programmes = data;
	      },
	      getprogrammes: function () {
	          return programmes;//.getSomeData();
	      },
	      getProgramme: function (idFiliere) {
	      		var data = null;
	      		angular.forEach(programmes,function(value,index){
	          		if(value.filiere == idFiliere)
	          			data = value;
	          });
	          return data;//.getSomeData();
	      }
	    };

	});
/*=============== les programmes ====================*/
app.factory('ProgrammeService',function($http){
		var formations = null;

	    var promise = $http.get('data-json/formation.json').success(function (data) {
	      formations = data;
	    });

	    return {
	      promise:promise,
	      setData: function (data) {
	          formations = data;
	      },
	      getFormations: function () {
	          return formations;//.getSomeData();
	      }
	    };

	});

/*================ Searching ===========================*/
app.factory('SearchingService',function(ModulesService,FormationService,
	ProfesseurService){
		var articles = null;

	    var promise = {};
	    /* $http.get('data-json/articles-content.json').success(function (data) {
	      articles = data;
	    });
//*/

	    return {
	      promise:promise,
	      setData: function (data) {
	          articles = data;
	      },
	      search: function (q) {
	         var result = new Array();
	         	FormationService.search(q,result);
	          ModulesService.search(q,result);
	          ProfesseurService.search(q,result);
	         return result;
	      }
	    };

	});
})()