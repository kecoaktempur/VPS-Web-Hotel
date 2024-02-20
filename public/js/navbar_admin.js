document.getElementById('openSidebarMini').addEventListener('click', function () {
    console.log('Button clicked');
    var sidebar = document.getElementById('asideNavbar');
    console.log('Sidebar element:', sidebar);

    if (sidebar.classList.contains('w-64')) {
        console.log("masuk");
        sidebar.classList.add('w-20');
        sidebar.classList.remove('w-64');
    } else {
        console.log("keluar");
        sidebar.classList.remove('w-20');
        sidebar.classList.add('w-64');
    }
    var elements = document.querySelectorAll('#textSidebarMini');
    elements.forEach(function (element) {
        element.classList.toggle('hidden');
    });
    var elements = document.querySelectorAll('#navLink');
    elements.forEach(function (element) {
        element.classList.toggle('pl-6');
    });
});