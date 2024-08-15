
document.addEventListener("DOMContentLoaded", function() {

    if (document.querySelector('.background-overlay-1') != null) {
        document.querySelector('.background-overlay-1').parentElement.style.position = 'relative';
    }
    if (document.querySelector('.background-overlay-2') != null) {
        document.querySelector('.background-overlay-2').parentElement.style.position = 'relative';
    }
    if (document.querySelector('.background-overlay-3') != null) {
        document.querySelector('.background-overlay-3').parentElement.style.position = 'relative';
    }

});

document.addEventListener("DOMContentLoaded", function() {

    if (document.querySelector('.testimoni-item') != null) {
        document.querySelector('.testimoni-item').parentElement.addEventListener("wheel", function(e) {
            e.preventDefault();
            // scroll horizontal
            this.scrollLeft += e.deltaY;
        });
    }

});