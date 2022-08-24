'use strict';

window.addEventListener("load", function () {

    const container = document.querySelector('.main_container')
    //ovserber
    let IOoptions = {
        root: null,
        rootMargin: '0px',
        threshold: 1.0
    }
    const IOfunc = (entries, observer) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                // 要素が交差した際の動作
                container.classList.remove('head_shadow_line');
            } else {
                // 要素が交差から外れた際の動作
                container.classList.add('head_shadow_line');
            }
        });
    };
    const observer = new IntersectionObserver(IOfunc, IOoptions);
    const IOtarget = document.querySelector('.ovserber_target');
    observer.observe(IOtarget);

    //darwer
    const drawerBtn = document.querySelector('.drawer-button')
    const closeBtn = document.querySelector('.overlay')
    //drawer open
    drawerBtn.addEventListener("click", function () {
        container.classList.add("open")
    })
    //drawer close
    closeBtn.addEventListener("click", function () {
        container.classList.remove("open")
    })
});
//drawer