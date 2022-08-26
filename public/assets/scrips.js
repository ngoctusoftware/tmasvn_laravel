

$(document).ready(function () {
    $('.count').each(function () {
        $(this).prop('Counter', 0).animate({
            Counter: $(this).text()
        }, {
            duration: 4000,
            easing: 'swing',
            step: function (now) {
                $(this).text(Math.ceil(now));
            }
        });
    });

    $('.count_about_us').each(function () {
        $(this).prop('Counter', 0).animate({
            Counter: $(this).attr('data-background')
        }, {
            duration: 4000,
            easing: 'swing',
            step: function (now) {
                $(this).attr('data-background', Math.ceil(now));
            }
        });
    });
    let currentHeaderPosition = $('.menu_header').position();
    if (currentHeaderPosition.top === 0) {
        $('.menu_header').addClass('negative');
        $('.menu_header').find('img').attr('src', '../../assets/img/logo-white.svg')
    } else {
        $('.menu_header').removeClass('negative');
        $('.menu_header').find('img').attr('src', '../../assets/img/logo-tmas.svg')
    }
    $(document).scroll(function () {
        let headerPosition = $('.menu_header').position();
        if (headerPosition.top === 0) {
            $('.menu_header').addClass('negative');
            $('.menu_header').find('img').attr('src', '../../assets/img/logo-white.svg')
        } else {
            $('.menu_header').removeClass('negative');
            $('.menu_header').find('img').attr('src', '../../assets/img/logo-tmas.svg')
        }
    })

    require([
        "esri/Map",
        "esri/views/MapView",
        "esri/layers/FeatureLayer"
    ], function (Map, MapView, FeatureLayer) {

        var map = new Map({
            basemap: "topo-vector"
        });

        var view = new MapView({
            container: "viewDiv",
            map: map,
            center: [108, 16],
            zoom: 6
        });

        // // Trailheads feature layer (points)
        // var trailheadsLayer = new FeatureLayer({
        //     url: "https://services3.arcgis.com/GVgbJbqm8hXASVYi/arcgis/rest/services/Trailheads/FeatureServer/0"
        // });

        // map.add(trailheadsLayer);

        // // Trails feature layer (lines)
        // var trailsLayer = new FeatureLayer({
        //     url: "https://services3.arcgis.com/GVgbJbqm8hXASVYi/arcgis/rest/services/Trails/FeatureServer/0"
        // });

        // map.add(trailsLayer, 0);

        // // Parks and open spaces (polygons)
        // var parksLayer = new FeatureLayer({
        //     url: "https://services3.arcgis.com/GVgbJbqm8hXASVYi/arcgis/rest/services/Parks_and_Open_Space/FeatureServer/0"
        // });
        // map.add(parksLayer, 0);
    });
})


