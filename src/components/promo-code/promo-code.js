{
    const $promoCodeElements = document.querySelectorAll('[data-promo-code]');
    $promoCodeElements.forEach($promoCode => {
        const $codeContainer = $promoCode.querySelector('.promo-code__value');
        const $btnCopyAgain = $promoCode.querySelector('.promo-code__btn');
        const $parentPopup = $promoCode.closest('.popup');

        
        const copyCode = () => {
            navigator.clipboard.writeText($codeContainer.innerText.trim());
            $promoCode.classList.add('code-copied');
        }

        $parentPopup.onOpen(() => {
            setTimeout(() => {
                copyCode();
            }, 400);
        });

        $btnCopyAgain.addEventListener('click', () => {
            copyCode();

            const range = document.createRange();
            range.selectNode($codeContainer);
            
            window.getSelection().removeAllRanges();
            window.getSelection().addRange(range);
        })
    })
}