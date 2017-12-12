document.addEventListener('DOMContentLoaded', function () {
    function audioAutoPlay() {
        var audio = document.getElementById('audio');
        audio.play();
        document.addEventListener("WeixinJSBridgeReady", function () {
            audio.play();
        }, false);
    }
    audioAutoPlay();
});
document.addEventListener('touchstart', function () {
    function audioAutoPlay() {
        var audio = document.getElementById('audio');
        audio.play();
    }
    audioAutoPlay();
});