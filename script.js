
document.addEventListener("DOMContentLoaded", function() {

    if (document.querySelector('.testimoni-container') != null) {
        document.querySelector('.testimoni-container').addEventListener("wheel", function(e) {
            e.preventDefault();
            // scroll horizontal
            this.scrollLeft += e.deltaY;
        });
    }

});