<div class="row image-page a-propos">
	<div class="titre black">
			A Propos de l' <span>I</span>nstitut <span>A</span>rchitec de <span>M</span>arrakech
      <div class="iam">i.a.m</div>
	</div>
</div>
<div class="container" ng-controller='menuTabCtrl as tabCTRL'>
	

	<div class="container">
    <div class="row">
      <div class="col-md-3 col-sm-4 col-xs-4">
        <div class="menu-tabs" id="menu-tab-a-propos">
          <ul>
            <li role="presentation-generale" class="active" 
            ng-click="tabCTRL.showContent('presentation-generale',$event)">
              <a href="">Présentation générale</a>
            </li>
            
            <li role="historique"   ng-click="tabCTRL.showContent('historique',$event)">
              <a href="">Historique</a>
            </li>
            <li role="mode-directeur" ng-click="tabCTRL.showContent('mode-directeur',$event)">
            <a href="">Mot du directeur</a>
            </li>
            <li role="mode-fondateur" ng-click="tabCTRL.showContent('mode-fondateur',$event)"><a href="">Mot du fondateur</a>
            </li>
            <li role="atouts-iam" 
            ng-click="tabCTRL.showContent('atouts-iam',$event)">
              <a href="">Les atouts de I.A.M</a>
            </li>
            <li role="infrastructures" 
            ng-click="tabCTRL.showContent('infrastructures',$event)">
              <a href="">Les infrastructures</a>
            </li>
            <li role="etudiant-etrangers" 
            ng-click="tabCTRL.showContent('etudiant-etrangers',$event)">
              <a href="">Les etudiant étrangers</a>
            </li>
          </ul>
        </div>
      </div>
      <div class="col-md-9 col-sm-8 col-xs-8">
        <div class="content-tabs">
          <div id="historique" class="content-t">
            <div class="titre-part">Historique de IAM</div>
            <div class="row" ng-include="'partials/contenu-a-propos/historique.php'"></div>
          </div>
          <div id="mode-directeur" class="content-t">
            <div class="titre-part">Mot du directeur</div>
          </div>
          <div id="mode-fondateur" class="content-t">
            <div class="titre-part">Mot du fondateur</div>
          </div>
          <!-- ========= presentation-generale ================ -->
          <div id="presentation-generale" class="content-t">
            <div class="row">
              <div class="titre-part">Présentation générale</div>
            </div>
           <div class="row" ng-include="'partials/contenu-a-propos/presentationgenerale.php'"></div>
          
          </div>
          <!-- ==================== fin presentation-generale ============ -->
          <!-- ========= atouts-iam ================ -->
          <div id="atouts-iam" class="content-t">
            <div class="titre-part">Les atouts de IAM</div>
          </div>
          <!-- ==================== fin atouts-iam ============ -->
          <!-- ========= infrastructures ================ -->
          <div id="infrastructures" class="content-t">
            <div class="titre-part">Nos Infrastructures</div>
          </div>
          <!-- ==================== fin infrastructures ============ -->
          <!-- ========= etudiant-etrangers ================ -->
          <div id="etudiant-etrangers" class="content-t">
            <div class="titre-part">Les étudiants étrangers de IAM</div>
          </div>
          <!-- ==================== fin etudiant-etrangers ============ -->
        </div>
      </div>
    </div>
    
</div>
</div>