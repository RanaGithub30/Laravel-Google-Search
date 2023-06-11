@extends('header')
@section('content')
<header>
	<h1 class="text-center mt-2 ml-2">Youtube Search</h1>
</header>
<!--button for 'start recording'-->



<div class="row p-5">
	<div class="col-md-12 m-2">
		<a href="{{ url('/') }}" class="btn btn-primary justify-content-end">Google Search</a>
        <a href="{{ url('/wikipedia') }}" class="btn btn-danger justify-content-end">Wikipedia Search</a>
        <a href="{{ url('/stack-over-flow') }}" class="btn btn-dark justify-content-end">Stack Overflow Questions</a>
	</div>
</div>

<!-- Search an article from Wikipedia -->

<form action="#">
<div class="row p-5 m-2" class="form-group">
<div class="col-md-12 text-center m-2"><h2><b> Search A Video </b></h2></div>
<div class="col-md-10">
	<input type="text" class="form-control" placeholder="Search for Google Blog" name="search" id="searchInput">
</div>
<div class="col-md-2">
	<input type="button" class="form-control btn btn-light" value="Search" id="submit" onclick="youtubeSearch()">
</div>
</div>
</form>


<!-- Google Search By Image -->

	<div class="row p-5 m-2" class="form-group">
	<div class="col-md-4">
		<input type="button" class="form-control btn btn-light" value="Trending Videos" id="submit" onclick="youtubeTrendingVideos()">
	</div>
    <div class="col-md-4">
		<input type="button" class="form-control btn btn-light" value="Youtube Movie" id="submit" onclick="youtubeMovies()">
	</div>
    <div class="col-md-4">
		<input type="button" class="form-control btn btn-light" value="Youtube Gaming" id="submit" onclick="youtubeGaming()">
	</div>
	</div>


<script src="custom_js/youtube.js"></script>
@endsection