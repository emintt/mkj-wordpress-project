'use strict';

const menuButtons = document.querySelectorAll('.menu-nav-button');
console.log(menuButtons);

// ei toimii
menuButtons.forEach(button => {
    button.addEventListener('click', async (evt)  => {
        evt.preventDefault();
        console.log('clicked', button.dataset.id);
        const url = menuPosts.ajax_url;
        const data = new URLSearchParams({
            term_id: button.dataset.id,
            action: 'single_menu_posts',
        });

        const options = {
            method: 'POST',
            body: data,
            headers: {
                'Content-Type': 'application/x-www-form-urlencoded',
            },
        };

        const response = await fetch(url, options);
        const posts = await response.json();
        console.log('posts', posts);

    });
});

