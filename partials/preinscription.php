<!DOCTYPE html>
<html >
<head>
	<title></title>
</head>
<body>
<div class="container">
<div class="row text-center">
	<div class="label label-danger" style="font-size:1.2em">
		Afin que votre demande d'Inscription soit prise en compte, vous devez minutieusement remplir le formulaire
	</div>
</div>


<div class="row" ng-controller="preinscriptionForm as preForm">
	
	<div class="col-md-8 col-md-offset-2">
	<h1>Pré-Inscription à l'une de formation</h1>
		<form role="form">
		<div class="row">
		<div class="form-group col-md-4">
				<label>Niveau scolaire : </label>
				<select required ng-model="niveauS" class="form-control">
					<option value> Choisir le niveau scolaire</option>
					<option  value="bac">Baccalauréat</option>
					<option  value="2">3ème année secondaire Sc.</option>
					<option  value="3">3ème année secondaire Lettres.</option>
				</select>
			</div>
			<div class="form-group col-md-4">
				<label>Inscription en : </label>
				<select required ng-model="niveauIns" class="form-control">
					<option value> Choisir le niveau d'inscription</option>
					<option  value="1">Première année</option>
					<option  value="2">Deuxième année</option>
				</select>
			</div>
			<div class="form-group col-md-4">
				<label>La filière : </label>
				<select required ng-model="filiere" class="form-control">
					<option value> Choisir une filière</option>
					<option ng-repeat="fil in filieres" value="{{fil.id}}">{{fil.nom}}</option>
				</select>
			</div>
		
			<div class="form-group col-md-5">
				<label>Votre nom : </label>
				<input ng-model="nom" required placeholder="Votre nom" class="form-control">
			</div>
			<div class="form-group col-md-7">
				<label>Votre prenom : </label>
				<input ng-model="prenom" placeholder="Votre prenom" class="form-control">
			</div>
			
			<div class="form-group col-md-6">
				<label>Votre Email : </label>
				<input ng-model="mail" type="email" placeholder="Votre email" class="form-control">
			</div>
			<div class="form-group col-md-6">
				<label>Votre téléphone : </label>
				<input ng-model="mail" type="telephone" placeholder="Votre telephone" class="form-control">
			</div>
			<div class="form-group col-md-6">
				<label>Votre adresse : </label>
				<input ng-model="adresse" type="adresse" placeholder="Votre adresse" class="form-control">
			</div>
			<div class="form-group col-md-6">
				<label>Votre ville : </label>
				<input ng-model="ville" type="ville" placeholder="Votre ville" class="form-control">
			</div>
			<div class="form-group col-md-12">
				<label>Rédiger quelques lignes motivant votre choix pour  ARCHITEC </label>
				<textarea rows="4" ng-model="motivation" class="form-control">
					
				</textarea>
			</div>
		</div>
			<div class="row">
				<input ng-click="preForm.submit()" type="submit" value="valider" class="btn btn-primary">
				<input type="reset" value="annuler" class="btn btn-default">
			</div>
		</form>
	</div>
	<!-- <div class="col-md-4">
		<h5>Présentation</h5>
		<tt>je me nomme : {{nom}} {{prenom}}</tt>
		<tt>filière : {{filiere}}</tt>
	</div> -->
</div>
</div>
 
	
</body>
</html>