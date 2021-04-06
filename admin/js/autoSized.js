
(function ( $ ) {

  $.fn.autosized = function( options ) {

    var elem = $(this);
    elem.on('change keyup keydown paste cut input', function() {
      elem.height(0);
    	elem.height(elem.prop('scrollHeight'));
    });

    var settings = $.extend({
      resize: "none",
      width: "",
      overflow: "",
      minHeight: "",
      backgroundColor: "",
      color: ""
    }, options );

    return this.css({
      resize: settings.resize,
      width: settings.width,
      overflow: settings.overflow,
      minHeight: settings.minHeight,
      backgroundColor: settings.backgroundColor,
      color: settings.color
    });

  };
}( jQuery ));
