{
    handleDocumentClick((e) => {
        if(e.target.closest('[data-action="show-extension-info"]')) {
            const $parent = e.target.closest('.popup__content');
            const $mainPopupContent = $parent.querySelector('.main-popup-content');
            const $extensionInfo = $parent.querySelector('.extension-info');

            $mainPopupContent.classList.add('hidden'); 
            $extensionInfo.classList.remove('hidden'); 
        }

        if(e.target.closest('[data-action="hide-extension-info"]')) {
            const $parent = e.target.closest('.popup__content');
            const $mainPopupContent = $parent.querySelector('.main-popup-content');
            const $extensionInfo = $parent.querySelector('.extension-info');

            window.popup.close(`#${e.target.closest('.popup').id}`);
            
            setTimeout(() => {
                $mainPopupContent.classList.remove('hidden'); 
                $extensionInfo.classList.add('hidden'); 
            }, 400)
        }
    })
}