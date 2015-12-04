(function ($) {
  // $.colorbox.settings.onComplete= function() {
  //   var colorboxHeight = $('#cboxLoadedContent').height();
  // };
  Drupal.behaviors.leaflet_fix = {
    attach: function (context,settings) {
      // $('.colorbox-node, .colorbox-inline').click(function() {
      //                    var map = Drupal.settings.leaflet[0].lMap;
      //                    setTimeout(function(){ map.invalidateSize(true)}, 2000);
      //                    //L.Util.requestAnimFrame(map.invalidateSize,map,!1,map._container);
      // });
      $(document).bind('cbox_complete', function() {
                    //var map = lMap;
                    //L.Util.requestAnimFrame(map.invalidateSize,map,!1,map._container);
                    setTimeout($.colorbox.resize, 100);
                    var map = Drupal.settings.leaflet[0].lMap;
                    setTimeout(function() {
                      L.Util.requestAnimFrame(map.invalidateSize,map,!1,map._container);
                    }, 10);
                });

            }
    };
})(jQuery);
