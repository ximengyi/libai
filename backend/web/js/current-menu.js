;
var menu_set_ops = {
    init: function () {
        this.eventBind();
    },

    eventBind: function () {

        $("#main-menu li").click(function () {
          $(this).addClass("active-menu");
            var clickIndex = $(this).index();
            $("#main-menu li").each(function(){
                if($(this).index() !=clickIndex ){
                    $(this).removeClass("active-menu");
                }
            });

        });

     //   $("#main-menu li").click().addClass("active-menu");
    },


};


$(document).ready(
    function () {
        menu_set_ops.init();
    }
);