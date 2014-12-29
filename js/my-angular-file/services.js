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
	      }
	    };

	});

app.factory('FiliereService',function($http){
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
	
})()