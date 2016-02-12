
//document.getElementById("search_field").addEventListener("keypress", myFunction);
$('body').on('keyup','#search_field',function(){
    var searched_text = $('#search_field').val();
    $.ajax({
        url:"../ajax/Request.php",
        data:"search_field="+searched_text+"&action=search",
        type:"POST",
        success: function(msg){
            console.log(msg);
        }
})
});


