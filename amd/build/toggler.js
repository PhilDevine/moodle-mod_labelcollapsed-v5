define('mod_labelcollapsed/toggler', [], function() {
    const init = () => {
        document.querySelectorAll('.lc_section').forEach(header => {
            if (header.dataset.initialized === 'true') return;
            header.dataset.initialized = 'true';

            header.addEventListener('click', () => {
                const targetSelector = header.getAttribute('data-target');
                const target = document.querySelector(targetSelector);
                if (!target) return;

                const isShown = target.classList.contains('show');

                if (isShown) {
                    target.classList.remove('show');
                    target.style.maxHeight = null;
                    header.classList.remove('show'); // Rotate arrow back
                    header.setAttribute('aria-expanded', 'false');
                } else {
                    target.classList.add('show');
                    target.style.maxHeight = target.scrollHeight + 'px';
                    header.classList.add('show'); // Rotate arrow forward
                    header.setAttribute('aria-expanded', 'true');
                }
            });
        });
    };

    return { init };
});