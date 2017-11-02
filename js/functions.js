 $(document).ready(function(){
    $(".cart").click(function(e){
        e.preventDefault();
        form=$(this).data("form");
        $("#"+form).submit();
    })
 });