/**
 * Youtube Video Search
*/

function youtubeSearch(){
    let search_for = document.getElementById('searchInput').value;

     if(search_for == ""){
       alert("Enter Search Data");
     }else{
         let search_split = search_for.replace(/ /g, "+");
         window.open(`https://www.youtube.com/results?search_query=`+search_for, '_blank');
     }
}

/**
 * Trending Videos
*/

function youtubeTrendingVideos(){
      window.open(`https://www.youtube.com/feed/trending`, '_blank');
}

/**
 * Movie Search 
*/

function youtubeMovies(){
    window.open(`https://www.youtube.com/feed/storefront`, '_blank');
}

/**
 * youtube gaming
*/

function youtubeGaming(){
    window.open(`https://www.youtube.com/gaming`, '_blank');
}