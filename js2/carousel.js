    $(document).ready(function () {
            // Activate carousel
            $("#myCarousel").carousel();

            // Enable carousel control
            $(".left").click(function () {
                $("#myCarousel").carousel('prev');
            });
            $(".right").click(function () {
                $("#myCarousel").carousel('next');
            });

            // Enable carousel indicators
            $(".slide-one").click(function () {
                $("#myCarousel").carousel(0);
            });
            $(".slide-two").click(function () {
                $("#myCarousel").carousel(1);
            });
            $(".slide-three").click(function () {
                $("#myCarousel").carousel(2);
            });
           $(".slide-4").click(function () {
                $("#myCarousel").carousel(3);
            });
            $(".slide-5").click(function () {
                $("#myCarousel").carousel(4);
            });
            $(".slide-6").click(function () {
                $("#myCarousel").carousel(5);
            });
            $(".slide-7").click(function () {
                $("#myCarousel").carousel(6);
            });
             
        });

      //for scrolling
        $('a[href^="#"]').on('click', function (event) {

            var target = $($(this).attr('href'));

            if (target.length) {
                event.preventDefault();
                $('html, body').animate({
                    scrollTop: target.offset().top
                }, 1000);
            }

        });