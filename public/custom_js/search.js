   /**
     * Auto search from google
    */

     function googleSearch(){
        let search_for = document.getElementById('searchInput').value;

        if(search_for == ""){
            alert("Enter Search Data");
        }else{
            let search_split = search_for.replace(/ /g, "-");
            window.open(`https://google.com/search?q=`+search_for, '_blank');
        }
     }

/**
 * Google Search for Image
*/

function googleSearchForImage(){
     let search_for = document.getElementById('searchImage').value;

      if(search_for == ""){
        alert("Enter Search Data");
      }else{
          let search_split = search_for.replace(/ /g, "-");
          window.open(`https://www.google.co.in/search?q=`+search_for+'&hl=en&source=lnms&tbm=isch', '_blank');
      }
}

/**
 * Google Search for Video  
*/

function googleSearchForVideo(){
      let search_for = document.getElementById('searchVideo').value;

      if(search_for == ""){
        alert("Enter Search Data");
      }else{
          let search_split = search_for.replace(/ /g, "-");
          window.open(`https://www.google.co.in/search?q=`+search_for+'&source=lmns&tbm=vid&hl=en', '_blank');
      }
}