<!-- Carousel
================================================== -->
<div id="myCarousel" class="carousel slide hidden-xs" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
        <?php
        $counter = 0;
        foreach(glob('images/carousel/*') as $image)
        {
            ?>
                <li data-target="#myCarousel" class="slide-page" data-slide-to="<?php echo counter ?>"></li>
            <?php
            $counter ++;
        }
        ?>
    </ol>
    <div class="carousel-inner">
        <?php
        foreach(glob('images/carousel/*') as $image)
        {
            ?>
            <div class="item">
                <img class="slide-elt" src="<?php echo $image ?>" alt="Slide element">
            </div>
        <?php
        }
        ?>
    </div>
    <a class="left carousel-control" href="#myCarousel" data-slide="prev"><span
            class="glyphicon glyphicon-chevron-left"></span></a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next"><span
            class="glyphicon glyphicon-chevron-right"></span></a>
</div>

<script>
    $(document).ready(function () {
        $('.item').first().addClass('active');
        $('.slide-page').first().addClass('active');

        $(".slide-elt").each(function(){
            $(this).imageResize();
        });
    });

    (function($) {
        $.fn.imageResize = function(options) {

            var that = this;
            var settings = {
                width: 2000,
                height: 900
            };
            options = $.extend(settings, options);

            if (!that.is('img')) {
                return;
            }

            return that.each(function() {

                var maxWidth = options.width;
                var maxHeight = options.height;
                var ratio = 0;
                var width = $(that).width();
                var height = $(that).height();

                if (width > maxWidth) {
                    ratio = maxWidth / width;
                    $(that).css('width', maxWidth);
                    $(that).css('height', height * ratio);

                }

                if (height > maxHeight) {
                    ratio = maxHeight / height;
                    $(that).css('height', maxHeight);
                    $(that).css('width', width * ratio);

                }

            });

        };
    })(jQuery);
</script>
<!-- /.carousel -->