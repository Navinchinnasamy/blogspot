<!doctype html>
<!--[if IE 8 ]>
<html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]>
<html lang="en" class="no-js"> <![endif]-->
<html lang="en">

<?php require_once("header.php"); ?>

<body>

<!-- Container -->
<div id="container">

    <?php require_once("body_header.php"); ?>

    <!-- Start Map -->
    <div id="map" data-position-latitude="11.074893" data-position-longitude="77.579988"
         data-marker-img="<?php echo BASE_URL . 'images/location.png' ?>"></div>
    <script>
        (function ($) {
            $.fn.CustomMap = function (options) {

                var posLatitude = $('#map').data('position-latitude'),
                    posLongitude = $('#map').data('position-longitude');

                var settings = $.extend({
                    home: {
                        latitude: posLatitude,
                        longitude: posLongitude
                    },
                    text: '<div class="map-popup"><h4>Navin</h4><p>A web development blog for having fun.</p></div>',
                    icon_url: $('#map').data('marker-img'),
                    zoom: 12
                }, options);

                var coords = new google.maps.LatLng(settings.home.latitude, settings.home.longitude);

                return this.each(function () {
                    var element = $(this);

                    var options = {
                        zoom: settings.zoom,
                        center: coords,
                        mapTypeId: google.maps.MapTypeId.ROADMAP,
                        mapTypeControl: false,
                        scaleControl: false,
                        streetViewControl: false,
                        panControl: true,
                        disableDefaultUI: true,
                        zoomControlOptions: {
                            style: google.maps.ZoomControlStyle.DEFAULT
                        },
                        overviewMapControl: true,
                    };

                    var map = new google.maps.Map(element[0], options);

                    var icon = {
                        url: settings.icon_url,
                        origin: new google.maps.Point(0, 0)
                    };

                    var marker = new google.maps.Marker({
                        position: coords,
                        map: map,
                        icon: icon,
                        draggable: false
                    });

                    var info = new google.maps.InfoWindow({
                        content: settings.text
                    });

                    google.maps.event.addListener(marker, 'click', function () {
                        info.open(map, marker);
                    });

                    var styles = [{
                        "featureType": "landscape",
                        "stylers": [{
                            "saturation": -100
                        }, {
                            "lightness": 65
                        }, {
                            "visibility": "on"
                        }]
                    }, {
                        "featureType": "poi",
                        "stylers": [{
                            "saturation": -100
                        }, {
                            "lightness": 51
                        }, {
                            "visibility": "simplified"
                        }]
                    }, {
                        "featureType": "road.highway",
                        "stylers": [{
                            "saturation": -100
                        }, {
                            "visibility": "simplified"
                        }]
                    }, {
                        "featureType": "road.arterial",
                        "stylers": [{
                            "saturation": -100
                        }, {
                            "lightness": 30
                        }, {
                            "visibility": "on"
                        }]
                    }, {
                        "featureType": "road.local",
                        "stylers": [{
                            "saturation": -100
                        }, {
                            "lightness": 40
                        }, {
                            "visibility": "on"
                        }]
                    }, {
                        "featureType": "transit",
                        "stylers": [{
                            "saturation": -100
                        }, {
                            "visibility": "simplified"
                        }]
                    }, {
                        "featureType": "administrative.province",
                        "stylers": [{
                            "visibility": "on"
                        }]
                    }, {
                        "featureType": "water",
                        "elementType": "labels",
                        "stylers": [{
                            "visibility": "on"
                        }, {
                            "lightness": -25
                        }, {
                            "saturation": -100
                        }]
                    }, {
                        "featureType": "water",
                        "elementType": "geometry",
                        "stylers": [{
                            "hue": "#ffff00"
                        }, {
                            "lightness": -25
                        }, {
                            "saturation": -97
                        }]
                    }];

                    map.setOptions({
                        styles: styles
                    });
                });

            };
        }(jQuery));

        jQuery(document).ready(function () {
            jQuery('#map').CustomMap();
        });
    </script>
    <!-- End Map -->

    <!-- Start Content -->
    <div id="content">
        <div class="container">

            <div class="row">

                <div class="col-md-8">

                    <!-- Classic Heading -->
                    <h4 class="classic-title"><span>Contact Us</span></h4>

                    <!-- Start Contact Form -->
                    <form role="form" class="contact-form" id="contact-form" method="post">
                        <div class="form-group">
                            <div class="controls">
                                <input type="text" placeholder="Name" name="name">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="controls">
                                <input type="email" class="email" placeholder="Email" name="email">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="controls">
                                <input type="text" class="requiredField" placeholder="Subject" name="subject">
                            </div>
                        </div>

                        <div class="form-group">

                            <div class="controls">
                                <textarea rows="7" placeholder="Message" name="message"></textarea>
                            </div>
                        </div>
                        <button type="submit" id="submit" class="btn-system btn-large">Send</button>
                        <div id="success" style="color:#34495e;"></div>
                    </form>
                    <!-- End Contact Form -->

                </div>

                <div class="col-md-4">

                    <!-- Classic Heading -->
                    <h4 class="classic-title"><span>Information</span></h4>

                    <!-- Some Info -->
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum.</p>

                    <!-- Divider -->
                    <div class="hr1" style="margin-bottom:10px;"></div>

                    <!-- Info - Icons List -->
                    <ul class="icons-list">
                        <li><i class="fa fa-globe"> </i> <strong>Address:</strong> Kangayam, Tiruppur.</li>
                        <li><i class="fa fa-envelope-o"></i> <strong>Email:</strong> navinchinnasmay@gmail.com</li>
                        <li><i class="fa fa-mobile"></i> <strong>Phone:</strong> +91 80 122 89528</li>
                    </ul>

                    <!-- Divider -->
                    <div class="hr1" style="margin-bottom:15px;"></div>

                    <!-- Classic Heading -->
                    <h4 class="classic-title"><span>Working Hours</span></h4>

                    <!-- Info - List -->
                    <ul class="list-unstyled">
                        <li><strong>Monday - Friday</strong> - 9am to 5pm</li>
                        <li><strong>Saturday</strong> - 9am to 2pm</li>
                        <li><strong>Sunday</strong> - Closed</li>
                    </ul>

                </div>

            </div>

        </div>
    </div>
    <!-- End content -->

    <?php require_once("footer.php"); ?>
    <script src="http://maps.googleapis.com/maps/api/js?sensor=false&key=AIzaSyCgk0dZVkbXmkwari4SfU6B4t0XlFxHpZ0"
            type="text/javascript"></script>

</div>
<!-- End Container -->

<!-- Go To Top Link -->
<a href="#" class="back-to-top"><i class="fa fa-angle-up"></i></a>

<?php require_once("switcher.php"); ?>

<script type="text/javascript" src="js/script.js"></script>

<script type="text/javascript">
    //Contact Form

    $('#submit').click(function () {

        $.post("php/send.php", $(".contact-form").serialize(), function (response) {
            $('#success').html(response);
        });
        return false;

    });
</script>

</body>

</html>