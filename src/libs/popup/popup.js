const popupLinks = document.querySelectorAll('[data-action="open-popup"]');

let unlock = true;

const timeout = 400;

if (popupLinks.length > 0) {
    for (let index = 0; index < popupLinks.length; index++) {
        const popupLink = popupLinks[index];
        const popupName = popupLink.getAttribute('href').replace('#', '');
        const curentPopup = document.getElementById(popupName);

        popupLink.addEventListener('click', function (e) {
            popupOpen(curentPopup);
            e.preventDefault();
        });

        curentPopup.onOpenSubscribes = [];

        curentPopup.onOpen = (callback) => {
            curentPopup.onOpenSubscribes.push(callback);
        }
    }
}


const popupCloseIcon = document.querySelectorAll('[data-action="close-popup"]');
if (popupCloseIcon.length > 0) {
    for (let index = 0; index < popupCloseIcon.length; index++) {
        const el = popupCloseIcon[index];
        el.addEventListener('click', function (e) {
            popupClose(el.closest('.popup'));
            e.preventDefault();
        });
    }
}

function popupOpen(curentPopup) {
    if (curentPopup && unlock) {
        const popupActive = document.querySelector('.popup.popup--open');
        if (popupActive) {
            popupClose(popupActive, false);
        } else {
            bodyLock();
        }
        curentPopup.classList.add('popup--open');
        curentPopup.addEventListener('click', function (e) {
            if (!e.target.closest('.popup__content')) {
                popupClose(e.target.closest('.popup'));
            }
        });

        curentPopup.onOpenSubscribes?.forEach(callback => callback());
    }
}

function popupClose(popupActive, doUnlock = true) {
    if (unlock) {
        popupActive.classList.remove('popup--open');
        if (doUnlock) {
            bodyUnlock();
        }
    }
}

function bodyLock() {
    const lockPaddingValue = window.innerWidth - document.querySelector('body').offsetWidth + 'px';
    let targetPadding = document.querySelectorAll('[data-popup="add-right-padding"]');
    if (targetPadding.length) {
        for (let index = 0; index < targetPadding.length; index++) {
            const el = targetPadding[index];
            el.style.paddingRight = lockPaddingValue;
        }
    }
    document.documentElement.style.paddingRight = lockPaddingValue;
    document.documentElement.classList.add('overflow-hidden');
    document.body.classList.add('overflow-hidden');

    unlock = false;
    setTimeout(function () {
        unlock = true;
    }, timeout);
}

function bodyUnlock() {
    let targetPadding = document.querySelectorAll('[data-popup="add-right-padding"]');

    setTimeout(function () {
        if (targetPadding.length) {
            for (let index = 0; index < targetPadding.length; index++) {
                const el = targetPadding[index];
                el.style.paddingRight = '0px';
            }
        }
        document.documentElement.style.paddingRight = '0px';
        document.documentElement.classList.remove('overflow-hidden');
        document.body.classList.remove('overflow-hidden');
    }, timeout);

    unlock = false;
    setTimeout(function () {
        unlock = true;
    }, timeout);
}

document.addEventListener('keydown', function (e) {
    if (e.which === 27) {
        const popupActive = document.querySelector('.popup.popup--open');
        popupClose(popupActive);
    }
});

window.popup = {
    open(id) {
        if (!id) return;

        let popup = document.querySelector(id);

        if (!popup) return;

        popupOpen(popup);
    },
    close(id) {
        if (!id) return;

        let popup = document.querySelector(id);

        if (!popup) return;

        popupClose(popup);
    }
}
