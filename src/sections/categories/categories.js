{
    const categoriesFilter = document.querySelector('[data-categories-filter]');
    if(categoriesFilter) {
        const title = categoriesFilter.querySelector('.categories-filter__title');

        title.addEventListener('click', () => categoriesFilter.classList.toggle('categories-filter--open'));
    
        handleDocumentClick((e) => {
            if(!e.target.closest('.categories-filter')) {
                categoriesFilter.classList.remove('categories-filter--open');
            }
        })
    }
}   