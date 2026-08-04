// Include Lightbox
import PhotoSwipeLightbox from '/js/photoswipe/photoswipe-lightbox.esm.min.js';

const lightbox = new PhotoSwipeLightbox({
    // may select multiple "galleries"
    gallery: '#property-gallery',

    // Elements within gallery (slides)
    children: 'a',

    // setup PhotoSwipe Core dynamic import
    pswpModule: () => import('/js/photoswipe/photoswipe.esm.min.js')
});
lightbox.init();