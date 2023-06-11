/**
 * Search by Tags 
*/

function stackTagSearch(){
    let search_for = document.getElementById('searchInput').value;

     if(search_for == ""){
       alert("Enter Search Data");
     }else{
         let search_split = search_for.replace(/ /g, "-");
         window.open(`https://stackoverflow.com/questions/tagged/`+search_for, '_blank');
     }
}