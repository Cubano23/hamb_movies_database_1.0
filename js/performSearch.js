performSearch("Coronavirus")
$("#searchTerm").keyup(function() {
    if($("#searchTerm").val() == ""){
        performSearch("Coronavirus");
    }else{
        performSearch($("#searchTerm").val());    
    }
});