/**
 * Init on-load, while content is still loading
 */
ScrollOnFlush.init();

/**
 * Stop on ready, content is loaded
 */
$(document).ready(function() {
    ScrollOnFlush.stop();
});