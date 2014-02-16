var ScrollOnFlush = function() {
    
    var $_document = null;
    var $_height   = null;
    var $_interval = null;
    
    function init() {
        $_document = $(document);
        $_interval = setInterval(_checkHeight, 100);
    }
    
    function _checkHeight() {
        
        var oldHeight = $_height;
        
        $_height = $_document.height();
        
        if ($_height > oldHeight) {
            _scrollDown();
        }
        
    }
    
    function _scrollDown() {
        $_document.scrollTop($_height);
    }
    
    function stop() {
        clearInterval($_interval);
        _checkHeight();
    }
    
    return {
        init: init,
        stop: stop
    };
    
}();