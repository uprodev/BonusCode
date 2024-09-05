@@include('./utils.js')
@@include('./scripts.js')

window.addEventListener("DOMContentLoaded", () => {
    if (isMobile()) {
        document.body.classList.add('mobile');
    }

    if (iOS()) {
        document.body.classList.add('mobile-ios');
    }

    if (isSafari()) {
        document.body.classList.add('safari');
    }
    
    initHandlerDocumentClick();
    replaceImageToInlineSvg('.img-svg');
    initSmoothScrollByAnchors();
    initAnchorsLinkOffset();

    // ==== libs =====================================================
    @@include('../../libs/popup/popup.js')
    @@include('../../libs/spoiler/spoiler.js')
    // ==== // libs =====================================================

    // ==== components =====================================================
    @@include('../../components/promo-code/promo-code.js')
    @@include('../../components/form-fields/form-fields.js')
    @@include('../../components/stars/stars.js')
    @@include('../../components/popup-overlays/popup-overlays.js')
    // ==== // components =====================================================


    // ==== sections =====================================================
    @@include('../../sections/header/header.js')
    @@include('../../sections/categories/categories.js')
    // ==== // sections =====================================================

    document.body.classList.add('page-loaded');
}); 
