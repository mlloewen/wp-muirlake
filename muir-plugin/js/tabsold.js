$(document).ready(function(){
    $("tab-title").click(function(e){
        if (!$(this).hasClass("active")) {
            var tabNum = $(this).index();
            var nthChild = tabNum+1;
            $("tab-title.active").removeClass("active");
            $(this).addClass("active");
            $("tabs tab-content.active").removeClass("active");
            $("tabs tab-content:nth-child("+nthChild+")").addClass("active");
        }
    });
});