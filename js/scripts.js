/*!
    * Start Bootstrap - SB Admin v7.0.7 (https://startbootstrap.com/template/sb-admin)
    * Copyright 2013-2023 Start Bootstrap
    * Licensed under MIT (https://github.com/StartBootstrap/startbootstrap-sb-admin/blob/master/LICENSE)
    */
    // 
// Scripts
// 

window.addEventListener('DOMContentLoaded', event => {
    const sidebarToggle = document.body.querySelector('#sidebarToggle');
    if (sidebarToggle) {
        sidebarToggle.addEventListener('click', event => {
            event.preventDefault();
            document.body.classList.toggle('sb-sidenav-toggled');

            // Tambahkan kode tambahan di sini untuk mempengaruhi elemen-elemen lain
            const layoutSidenav = document.body.querySelector('#layoutSidenav');
            if (layoutSidenav) {
                // Contoh: Mungkin Anda perlu menyesuaikan ukuran atau posisi elemen lain
                layoutSidenav.classList.toggle('other-element-toggled');
            }
        });
    }
});

