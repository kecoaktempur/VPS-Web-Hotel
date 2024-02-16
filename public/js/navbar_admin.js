document.getElementById('openSidebarMini').addEventListener('click', function () {
    document.getElementById('asideNavbar').classList.toggle('w-20');
    var elements = document.querySelectorAll('#textSidebarMini');
    elements.forEach(function (element) {
        element.classList.toggle('hidden');
    });
});