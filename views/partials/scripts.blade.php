<noscript id="deferred-styles">
@stack('css-stack')
{!! Asset::css() !!}
</noscript>

@stack('css-inline')

{!! Theme::script('js/jquery.min.js', ['defer']) !!}
<script src="{{ mix('/themes/black/js/vendor.min.js') }}" defer></script>

{!! Theme::script('js/owl-carousel.js', ['defer']) !!}

@stack('js-stack')
{!! Asset::js() !!}

<script src="{{ mix('/themes/black/js/custom.min.js') }}" defer></script>

@stack('js-inline')

@include('core::cookie-law')

<script defer>
(function() {
  var supportsPassive = eventListenerOptionsSupported();  

  if (supportsPassive) {
    var addEvent = EventTarget.prototype.addEventListener;
    overwriteAddEvent(addEvent);
  }

  function overwriteAddEvent(superMethod) {
    var defaultOptions = {
      passive: true,
      capture: false
    };

    EventTarget.prototype.addEventListener = function(type, listener, options) {
      var usesListenerOptions = typeof options === 'object';
      var useCapture = usesListenerOptions ? options.capture : options;

      options = usesListenerOptions ? options : {};
      options.passive = options.passive !== undefined ? options.passive : defaultOptions.passive;
      options.capture = useCapture !== undefined ? useCapture : defaultOptions.capture;

      superMethod.call(this, type, listener, options);
    };
  }

  function eventListenerOptionsSupported() {
    var supported = false;
    try {
      var opts = Object.defineProperty({}, 'passive', {
        get: function() {
          supported = true;
        }
      });
      window.addEventListener("test", null, opts);
    } catch (e) {}

    return supported;
  }
})();
</script>