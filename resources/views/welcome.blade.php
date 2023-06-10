@extends('header')
@section('content')
<header>
	<h1 class="text-center mt-2 ml-2">Google Search</h1>
</header>
<!--button for 'start recording'-->

<!-- Google Search By Text -->

<div class="row p-5">
	<div class="col-md-12 m-2">
		<a href="{{ url('/wikipedia') }}" class="btn btn-primary justify-content-end">Wikipedia Search</a>
	</div>
</div>

<form action="#">
<div class="row p-5 m-2" class="form-group">
<div class="col-md-12 text-center m-2"><h2><b> Google Search For Blog </b></h2></div>
<div class="col-md-10">
	<input type="text" class="form-control" placeholder="Search for Google Blog" name="search" id="searchInput">
</div>
<div class="col-md-2">
	<input type="button" class="form-control btn btn-light" value="Search" id="submit" onclick="googleSearch()">
</div>
</div>
</form>


<!-- Google Search By Image -->

<form action="#">
	<div class="row p-5 m-2" class="form-group">
	<div class="col-md-12 text-center m-2"><h2><b> Google Search For Imgae </b></h2></div>
	<div class="col-md-10">
		<input type="text" class="form-control" placeholder="Search for Google Image" name="search" id="searchImage">
	</div>
	<div class="col-md-2">
		<input type="button" class="form-control btn btn-light" value="Search Image" id="submit" onclick="googleSearchForImage()">
	</div>
	</div>
	</form>


<!-- Google Search For Video -->

<form action="#">
	<div class="row p-5 m-2" class="form-group">
	<div class="col-md-12 text-center m-2"><h2><b> Google Search For Video </b></h2></div>
	<div class="col-md-10">
		<input type="text" class="form-control" placeholder="Search for Google Video" name="search" id="searchVideo">
	</div>
	<div class="col-md-2">
		<input type="button" class="form-control btn btn-light" value="Search Video" id="submit" onclick="googleSearchForVideo()">
	</div>
	</div>
</form>

<script src="custom_js/search.js"></script>
@endsection