$(document).ready(function(){

    var currentURL;
    currentURL = document.documentURI;
    console.log("currentURL: "+currentURL);



    /* SEARCH BREAKFAST AJAX */
    /*$('#search').on('change',function(e) {
        var category_id = e.target.value;
        console.log("category_id : "+category_id);
        $.get('dishes/ajax_breakfast?search='+category_id,function(data){
            console.log(data);

            $.each(data,function(index,breakFastObj){
                $("#dishes").append("<li class='list-group-item'><span class='badge'>{{ link_to('dishes/' ."+ breakFastObj.id+" ,'Ver',null) }}</span>"+
                "Nombre del platillo : "+breakFastObj.name+"  - Categoria : {{ \\App\\Category::find("+ breakFastObj.category_id +")->description_es }} </li>");

            });
        },'json');
    });*/

    $('#video_url').on('focusout',function(e){
        var videoURL = e.target.value;
        console.log("videoURL: "+videoURL);
        $('#edit-btn').attr('disabled',true);
        /* AJAX */
        $.get('edit/ajax_scrap_video?video_url='+videoURL, function (data) {
            console.log(data);
            console.log("THIS IS THE TITLE: "+data[0].title);
            console.log("THIS IS THE DESCRIPTION: "+data[0].description);
            console.log("THIS IS THE IMAGE: "+data[0].image);
            $('#video_title').val(data[0].title);
            $('#video_description').val(data[0].description);
            $('#video_image').val(data[0].image);
            $('#edit-btn').removeAttr('disabled');
        },'json');
    });
});
    /* SCRAP LINK EDIT END */