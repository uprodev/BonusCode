
handleDocumentClick((e) => {
    if(e.target.closest('[data-action="copy-code"]')) {
        const $parent = e.target.closest('[data-promo-code]');
        const $vlueContaier = $parent.querySelector('.promo-code__value');

        copyCode($parent, $vlueContaier);

        const range = document.createRange();
        range.selectNode($vlueContaier);
        
        window.getSelection().removeAllRanges();
        window.getSelection().addRange(range);
    }
});

function copyCode($promoCodeWrapper, $pormoCodeValue) {
    navigator.clipboard.writeText($pormoCodeValue.innerText.trim());
    $promoCodeWrapper.classList.add('code-copied');
}