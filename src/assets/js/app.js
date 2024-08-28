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
    // ==== // libs =====================================================

    // ==== components =====================================================
    @@include('../../components/promo-code/promo-code.js')
    // ==== // components =====================================================


    // ==== sections =====================================================
    @@include('../../sections/header/header.js')
    // ==== // sections =====================================================

    // ==== libs =====================================================
    @@include('../../libs/spoiler/spoiler.js')
    // ==== // libs =====================================================


    document.body.classList.add('page-loaded');
}); 
