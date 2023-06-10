/**
 * wikipedia article search
 */

function wikiSearch(){
    let search_for = document.getElementById('searchInput').value;

    if(search_for == ""){
        alert("Enter Search Data");
    }else{

        //split the above string into an array of strings 
        //whenever a blank space is encountered

        const arr = search_for.split(" ");

        //loop through each element of the array and capitalize the first letter.

        for (var i = 0; i < arr.length; i++) {
            arr[i] = arr[i].charAt(0).toUpperCase() + arr[i].slice(1);
        }

        //Join all the elements of the array back into a string 
        //using a blankspace as a separator 
        const str2 = arr.join(" ");

        // replace blank space with _(underscore) of the string
        search_for = str2.replace(/ /g, "_");

        window.open(`https://en.wikipedia.org/wiki/`+search_for, '_blank');
    }
}

/**
 * Random Wikipedia Article search 
*/

function randomArticleSearch(){
    window.open(`https://en.wikipedia.org/wiki/Special:Random`, '_blank');
}