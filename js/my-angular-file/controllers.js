(function(){
app.controller("modalCtrl", function ($http) {
  this.gallery = function(rubrique){
    var container = modalBox();
    container.html(rubrique);
  },
  this.detailFormation = function(url){
    var container = modalBox();
    $http.get('partials/contenu-formation/'+url).
     success(function(data, status, headers, config) {
    container.html(data);

  }).
  error(function(data, status, headers, config) {
    // called asynchronously if an error occurs
    // or server returns response with an error status.
  });
    
  }
});

/*================ Navgation historique ==================*/
app.controller("historiqueNavCtrl", function () {
  
  this.goTo = function(idContent,e){
      var top  = $('#'+idContent).offset().top;
     top = parseInt(top-150);
      $('html, body').animate({  
        scrollTop:top  
    }, 500); 
  };
  
});
/*================= formulaire =====================*/

app.controller("formseachCtrl", function ($scope,$window) {
  this.result = ["array"];
    //this.submit = function(){
      //var chaine = explose($scope.searchInput);
      //console.log(chaine);
      this.result.push($scope.searchInput);
      //$window.location.href = "#/search?q="+chaine;
   // }
});

  /*============ tabs ==================*/
app.controller('menuTabCtrl',function(){

 // if($('#'+$('.menu-tabs ul li.active')).length > 0)
  $('#'+$('.menu-tabs ul li.active').attr('role')).show();
  
  this.showContent = function(idContent,e){
    $('.menu-tabs ul li').removeClass('active');
    $(e.currentTarget).addClass('active');
    $('.content-t').hide();
      $('#'+idContent).show();
  };
});

app.controller("notFound",['$scope', '$routeParams', function ($scope,$routeParams) {
  console.log($routeParams);

}]);

app.controller("home", function ($scope,FormationService) {
  $('#page-top .top-link').removeClass('active');
  $('#page-top .top-link.home').addClass('active');
  $('html title').text($('html title').text().split("--")[0]);
 // $scope.formations = FormationService.getFormations();  
});
/*	========== a propos =================*/
app.controller("aPropos", function () {
  $('#page-top .top-link').removeClass('active');
  $('#page-top .top-link.a-propos').addClass('active');
  $('html title').text($('html title').text().split("--")[0]+" -- A propos d'Architec");
});

/*	========== programme =================*/
app.controller("programme", function ($scope,FormationService,FiliereService) {
  $('#page-top .top-link').removeClass('active');
  $('#page-top .top-link.programme').addClass('active');
  $('html title').text($('html title').text().split("--")[0]+' -- Programmes');
 $scope.formations = FormationService.getFormations();
});
/*	========== contact =================*/
app.controller("contact", function () {
  $('#page-top .top-link').removeClass('active');
  $('#page-top .top-link.contact').addClass('active');
  $('html title').text($('html title').text().split("--")[0]+' -- Nous contacter');
});
/*	========== parascolaire =================*/
app.controller("parascolaire", function () {
  $('#page-top .top-link').removeClass('active');
  $('#page-top .top-link.parascolaire').addClass('active');
  $('html title').text($('html title').text().split("--")[0]+' -- Parascolaire');
});

  /*	========== actualite =================*/
app.controller("actualite", function ($scope,ArticlesService,$routeParams) {
  $('#page-top .top-link').removeClass('active');
  $('html title').text($('html title').text().split("--")[0]+' -- Actualites');
  var lengthElement = 4;
  var page = 0;
  var nbrePage = parseInt(ArticlesService.doStuff().length/lengthElement);
  if(parseInt($routeParams.page)){
    page = parseInt($routeParams.page);
    page = page > nbrePage ? 0:page;
  }
  /*console.log("page :"+page+" lengthElement :"+lengthElement);
  console.log( );*/
  $scope.articles = ArticlesService.getArticles(page,lengthElement);
  $scope.pagination = {
    current : page,
    first:0,
    last : nbrePage,
    table:generatePagination(page,7,nbrePage)
  };
});

/*	========== actualiteLire =================*/
app.controller("actualiteLire", function ($scope,ArticlesService,ArticleService,$routeParams) {
  $('#page-top .top-link').removeClass('active');
  //$('#page-top .top-link.actualiteLire').addClass('active');
  var code = $routeParams.code;
  $('html title').text($('html title').text().split("--")[0]+' -- actualite # '+code);
  var actua = ArticlesService.getArticle(code);
  console.log(actua);
  if(actua != null){//.getActualites();
  	var contenu = ArticleService.getContent(code);
  	$scope.contenu =contenu;
  	$scope.actualite = actua;
    $scope.page = $routeParams.page;
  	if(contenu == null){
  		$scope.contenu = {
  			code : 'Inconnu',
  			texte:'Pas de contenu pour cet article',
  			image:"#"
  		}
  	}
   console.log();
  }else{
  	window.location.href = '#/not-found?code:'+code;
  }
  
  
});


})()

function generatePagination(current,length,last){
  var arr = new Array();
  var scale = current - 3;
  console.log("current :"+current+" length :"+length+" scale :"+scale);
  if(scale > 0){
    var temp = scale;
    for (var i = scale; arr.length < length && temp <= last; i++) {
     
      arr.push(temp);
      temp++;
    };
  }else{
    for (var i = 0; i < length; i++) {
     arr.push(i);
    };
  }
  console.log(arr);
  return arr;
}