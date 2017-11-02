 <a href="#top" id="back-to-top"><i class="fa fa-angle-up"></i></a>
    <!--  End of Go to Top -->

    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/hoverIntent.js"></script>
    <script src="js/superfish.min.js"></script>
    <script src="js/owl.carousel.js"></script>
    <script src="js/wow.min.js"></script>
    <script src="js/waypoints.min.js"></script>
    <script src="js/jquery.slicknav.min.js"></script>
    <script src="js/retina.min.js"></script>
    <script src="js/select2.js"></script>
    <script src="js/counterup.min.js"></script>
    <script src="js/waves.js"></script>
    <script src="js/jquery.countdown.js"></script>
    <script src="js/custom.js"></script>
    <script src="js/jquery.responsiveTabs.js"></script>
    <script src="js/tablesaw.stackonly.js"></script>
    <script src="js/tablesaw-init.js"></script>
    <script src="js/jquery.tablesorter.min.js"></script>
    <script src="https://raw.githubusercontent.com/yevhentiurin/animatedscrolljs/master/releases/jquery.animatedscroll-1.1.5.js"></script>
    <script src="js/functions.js"></script>
   <script>
        $(document).on("ready", function(e) {
            // ______________ SLIDERS
            var sync1 = $("#mainslider");
            var sync2 = $("#mainslider-nav");

            sync1.owlCarousel({
                singleItem : true,
                slideSpeed : 1000,
                paginationSpeed: 800,
                navigation: false,
                pagination:false,
                autoPlay:7500,
                afterAction : syncPosition,
                responsiveRefreshRate : 200,
            });

            sync2.owlCarousel({
                items : 4,
                itemsDesktop : [1199,4],
                itemsDesktopSmall : [979,3],
                itemsTablet : [768,3],
                itemsMobile : [479,2],
                pagination:false,
                responsiveRefreshRate : 100,
                afterInit : function(el){
                    el.find(".owl-item").eq(0).addClass("synced");
                }
            });

            function syncPosition(el){
                var current = this.currentItem;
                $("#mainslider-nav")
                .find(".owl-item")
                .removeClass("synced")
                .eq(current)
                .addClass("synced");
                if($("#mainslider-nav").data("owlCarousel") !== undefined){
                    center(current);
                }
            }

            $("#mainslider-nav").on("click",".owl-item", function(e){
                e.preventDefault();
                var number = $(this).data("owlItem");
                sync1.trigger("owl.goTo",number);
            });

            function center(number){
                var sync2visible = sync2.data("owlCarousel").owl.visibleItems;
                var num = number;
                var found = false;
                for(var i in sync2visible){
                    if(num === sync2visible[i]){
                        var found = true;
                    }
                }

                if(found===false){
                    if(num>sync2visible[sync2visible.length-1]){
                        sync2.trigger("owl.goTo", num - sync2visible.length+2)
                    }else{
                        if(num - 1 === -1){
                            num = 0;
                        }
                        sync2.trigger("owl.goTo", num);
                    }
                } else if(num === sync2visible[sync2visible.length-1]){
                    sync2.trigger("owl.goTo", sync2visible[1])
                } else if(num === sync2visible[0]){
                    sync2.trigger("owl.goTo", num-1)
                }
            }
            
            if($(".e1").length > 0) {
             $(".e1").select2();
            }
            //

            // ______________ HOSTED CLIENTS
            $("#clients").owlCarousel({
                autoPlay: 3000, //Set AutoPlay to 3 seconds
                items: 8,
                itemsDesktop: [1199, 8],
                itemsDesktopSmall: [979, 3],
                pagination: false
            });

            // ______________ TESTIMONIALS
            $("#testimonials-carousel").owlCarousel({
                items: 1,
                autoPlay: 5000,
                itemsDesktop: [1199, 1],
                itemsDesktopSmall: [979, 1],
                itemsTablet: [768, 1],
                pagination:true
            });

            // ______________ COUNTERUP
            $('.counter').counterUp({
                delay: 10,
                time: 1000
            });

            $("#templates-slider").owlCarousel({
				autoPlay: 3000, //Set AutoPlay to 3 seconds
				items: 3,
				pagination:false,
				itemsDesktop: [1199, 3],
				itemsDesktopSmall: [979, 2]
			});
        });
    </script>

    <script type="text/javascript">

        $('#example-tabs').responsiveTabs({
          startCollapsed: 'accordion'
        });
        $(document).on('click', '.yamm .dropdown-menu', function(e) {
          e.stopPropagation()
        })
    </script>
    <script type="text/javascript">
       $(document).ready(function(){
        $("#country_currencies a").click(function(){
            var currency=$(this).data("currency");
            var iso_pais=$(this).data("iso_country");
            data={change_country:"true",iso_pais:iso_pais,currency:currency};
            $.get('clientes/__utils.php',data,function(data){
                response=JSON.parse(data);

                if(response.success){
                    location.reload();
                }
            });



        })
       });
    </script>

    