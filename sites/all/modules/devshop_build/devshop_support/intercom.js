(function ($) {

    Drupal.behaviors.devShopSupportIntercom = {
        attach: function (context, settings) {

            var url =

            $.getJSON(url, function (data) {
                console.log

                $.each(data, function (key, value) {

                });
            });
        }
    }

}(jQuery));
