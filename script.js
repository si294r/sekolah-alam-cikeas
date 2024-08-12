
document.addEventListener("DOMContentLoaded", function() {

    if (document.querySelector('.background-overlay-1') != null) {
        document.querySelector('.background-overlay-1').parentElement.style.position = 'relative';
    }

});

document.addEventListener("DOMContentLoaded", function() {

    if (document.querySelector('.testimoni-container') != null) {
        document.querySelector('.testimoni-container').addEventListener("wheel", function(e) {
            e.preventDefault();
            // scroll horizontal
            this.scrollLeft += e.deltaY;
        });
    }

});