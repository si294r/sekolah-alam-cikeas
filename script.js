
document.addEventListener("DOMContentLoaded", function() {

    document.querySelectorAll('header .wp-block-navigation-link > a').forEach( element => {
        console.log(element.href + ' = ' + location.href);
        let menu_href = element.href.endsWith('/') ? element.href : element.href + '/';
        let loc_href = location.href.endsWith('/') ? location.href : location.href + '/';
        if (menu_href.toLowerCase() == loc_href.toLowerCase()) {
            element.classList.add('active');
        }
    });
    document.querySelectorAll('header .wp-block-navigation-submenu > a').forEach( element => {
        console.log(element.href + ' = ' + location.href);
        let menu_href = element.href.endsWith('/') ? element.href : element.href + '/';
        let loc_href = location.href.endsWith('/') ? location.href : location.href + '/';
        if (menu_href.toLowerCase() == loc_href.toLowerCase()) {
            element.classList.add('active');
        }
    });

});

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
            // scroll horizontal
            var oldScroll = this.scrollLeft;            
            this.scrollLeft += e.deltaY;
            if (oldScroll != this.scrollLeft) {
                e.preventDefault(); // stop scroll screen
            }
        });
    }

    if (document.querySelector('.testimoni-prev a') != null) {
        document.querySelector('.testimoni-prev a').addEventListener("click", function(e) {
            e.preventDefault();
            // scroll horizontal
            //this.scrollLeft += e.deltaY;
            document.querySelector('.testimoni-item').parentElement.scrollLeft += -100;
        });
    }

    if (document.querySelector('.testimoni-next a') != null) {
        document.querySelector('.testimoni-next a').addEventListener("click", function(e) {
            e.preventDefault();
            // scroll horizontal
            //this.scrollLeft += e.deltaY;
            document.querySelector('.testimoni-item').parentElement.scrollLeft += 100;
        });
    }

});


document.addEventListener("DOMContentLoaded", function() {

    document.querySelectorAll('p[class*=blog-link]').forEach( element => {
        element.addEventListener("click", blogLinkClick);
    });
    if (document.querySelector('p.blog-link-all') != null) {
        document.querySelector('p.blog-link-all').style.fontWeight = 'bold';
    }

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

function carouselSlide(container) {
    var inner = document.querySelector(container).querySelector('.carousel-inner');
    var active = inner.querySelector('.carousel-item.active');
    var next = active.nextElementSibling;
    if (next == null) {
        next = inner.firstElementChild;    
    }
    // animate slide next
    next.classList.add('carousel-item-next');
    setTimeout(() => {
        active.classList.add('carousel-item-start');
        next.classList.add('carousel-item-start');
    }, 1);
    
    setTimeout(() => {
        // swith active
        next.classList.add('active');
        active.classList.remove('active');
        // clear class animation
        active.classList.remove('carousel-item-start');
        next.classList.remove('carousel-item-next', 'carousel-item-start');
    }, 1500);
}

function facilityAutoSlide() {
    if (document.querySelector('.facility') != null) {
        setInterval(function () 
        { 
            carouselSlide('.facility') 
        }, 5000); // slide interval 5 seconds
    }
}

document.addEventListener("DOMContentLoaded", function() {
    facilityAutoSlide();
});