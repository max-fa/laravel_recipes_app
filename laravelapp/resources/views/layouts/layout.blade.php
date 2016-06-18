<!DOCTYPE html>
<html>
	<head lang="en-US">
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1" >
		<title>Laravel App</title>
		
		<script src="http://localhost/my_docs/JQuery/jquery-2.2.0.js"></script>
		@section('scripts')
		@show
	</head>
	<body>
		<!--START: HEADER-->
		<!-- Welcome user or prompt for login -->
		<div class="grid" id="header">
			<div class="col-4-12"></div>
			<div class="col-4-12">
				<h1 id="title">Laravel</h1>
			</div>
			<div class="col-4-12" id="add-recipe-div">

				<!-- Generate Buttons -->
				@section('buttons')
				@show
			</div>
		</div>
		<!--END: HEADER-->
		
		<!--START: NAVBAR AND ESSENTIAL BUTTONS-->
		<div class="grid" id="navbar">
			<div class="col-2-12"></div>
			<div class="col-2-12">
				<a href="index.php">Recipes</a>
			</div>
			<div class="col-2-12">
				<a href="techniques.html">Techniques</a>
			</div>
			<div class="col-2-12">
				<a href="ingredients.html">Ingredients</a>
			</div>
			<div class="col-2-12">
				<a href="tools.html">Tools</a>
			</div>
			<div class="col-2-12"></div>
		</div>		
		<!--END: NAVBAR AND ADD RECIPE BUTTON-->
		
		<!--START: UI TOOLS(FILTER,SEARCH,AND POSSIBLY MORE)-->
		<div class="grid" id="ui-tools">
			<div class="col-2-12"></div>
			<div class="col-4-12">
				<span id="search-prompt">Search For:</span> <input type="search" id="recipe-search">
			</div>
			<div class="col-4-12">
				<span id="recipe-filter-prompt">Filter By:</span> <select name="filter" id="recipe-filter">
					<option>All</option>
					<option><!-- Insert users --></option>
				</select>
			</div>
			<div class="col-2-12"></div>
		</div>
		<!--END: UI TOOLS(FILTER,SEARCH,AND POSSIBLY MORE)-->
		
		<!--START: MAIN CONTENT AREA-->
		<div id="main-view" class="grid">
			<div class="col-4-12" id="meat-column">
				<ul id="meatList" class="list">
					<li class="list-header">Meat & Seafood</li>
					<li class="recipe"></li>
				</ul>
			</div>
			<div class="col-4-12" id="veggie-column">
				<ul id="veggieList" class="list">
					<li class="list-header">Vegetable Based</li>
					<li class="recipe"></li>
				</ul>
			<!--START: FORMS-->
				@section('forms')
				@show
			<!--END: FORMS-->					
			</div>
			<div class="col-4-12" id="bread-column">
				<ul id="breadList" class="list">
					<li class="list-header">Bread</li>
					<li class="recipe"></li>
				</ul>
			</div>
			
		
		</div>
		<!--END: MAIN CONTENT AREA-->
		



		
	</body>
</html>