
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


document.addEventListener("DOMContentLoaded", function() {

    document.querySelectorAll('p[class*=blog-link]').forEach( element => {
        element.addEventListener("click", blogLinkClick);
    });
    document.querySelector('p.blog-link-all').style.fontWeight = 'bold';

});

function blogLinkClick(e) {
    document.querySelectorAll('p[class*=blog-link]').forEach( element => {
        element.style.fontWeight = 'normal';
    });
    e.target.style.fontWeight = 'bold';
    var className = e.target.getAttribute('class').replace('link', 'container');

    document.querySelectorAll('div[class*=blog-container]').forEach( element => {
        element.style.display = 'none';
    });
    document.querySelector('.' + className).style.display = 'block';
}