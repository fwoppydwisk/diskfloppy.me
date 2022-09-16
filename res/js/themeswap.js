function addStyleSheet(name, id) {
	var path = '/res/css/' + name + '.css';
	var old = document.getElementById(id);
	if (old && (old.href != path)) {
		old.href = path;
	}
}

var otherTheme = {
	'dark': 'light',
	'light': 'dark',
};

var currentTheme = localStorage.getItem('theme');

if (!otherTheme.hasOwnProperty(currentTheme)) {
	currentTheme = window.matchMedia('(prefers-color-scheme: dark)').matches ? 'dark' : 'light';
}

addStyleSheet(currentTheme, 'theme');

function toggleTheme() {
	currentTheme = otherTheme[currentTheme] || 'light';
	localStorage.setItem('theme', currentTheme);
	addStyleSheet(currentTheme, 'theme');
}
