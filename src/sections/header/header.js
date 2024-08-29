const header = document.querySelector('[data-header]');
if (header) {
    let isScroll = window.scrollY;

    window.addEventListener('scroll', () => {
        header.classList.toggle('header--scrolling', window.scrollY > 50);

        if (window.scrollY > 200) {
            if (window.scrollY > isScroll) {
                header.classList.add('header--hide');
            } else if (window.scrollY < isScroll) {
                header.classList.remove('header--hide');
            }
        }

        isScroll = window.scrollY;
    })
}

{
    const mobileMenu = document.querySelector('[data-mobile-menu]');
    if(mobileMenu) {
        const header = document.querySelector('[data-header]')
        const mobileNavList = mobileMenu.querySelector('.mobile-menu__nav');
        const listItems = Array.from(mobileNavList.children);

        listItems.forEach(li => {
            const link = li.firstElementChild;
            if(link.nextElementSibling) {
                link.setAttribute('data-spoiler-trigger', '');
            }
        })

        handleDocumentClick((e) => {
            if(e.target.closest('[data-action="open-mobile-menu"]')) {
                toggleDisablePageScroll(true);
                mobileMenu.classList.add('mobile-menu--open');
            }

            if(e.target.closest('[data-action="close-mobile-menu"]')) {
                toggleDisablePageScroll(false);
                mobileMenu.classList.remove('mobile-menu--open');
            }
        })
    }
}