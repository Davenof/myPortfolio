// Sidebar Toggle
window.addEventListener('DOMContentLoaded', event => {
    const sidebarToggle = document.body.querySelector('#sidebarToggle');
    if (sidebarToggle) {
        sidebarToggle.addEventListener('click', event => {
            event.preventDefault();
            document.body.classList.toggle('sb-sidenav-toggled');
            localStorage.setItem('sb|sidebar-toggle', document.body.classList.contains('sb-sidenav-toggled'));
        });
    }

});

// Highlight Active Page
const activePage = window.location.pathname;
const menuItems = document.querySelectorAll('.sidebar ul a').
forEach(link => {
	if(link.href.includes(`${activePage}`)){
	link.classList.add('current');
	}
})
