// Toggle Class active
const navbarNav = document.querySelector ('.navbar-nav');
// Menu di Klik
document.querySelector('#menu-strip').onclick = () => {
	navbarNav.classList.toggle('active');
};

// Klik diluar Sidebar untuk menghilangkan nav
const strip = document.querySelector('#menu-strip');

document.addEventListener('click', function(e) {
	if(!strip.contains(e.target) && !navbarNav.contains(e.target)) {
		navbarNav.classList.remove('active');
	}
});





