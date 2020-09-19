var loggedIn = localStorage.getItem('loggedIn');

if(!loggedIn) {
	window.location = 'login.php';
}
