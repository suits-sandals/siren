import { h, render } from 'preact';


const app = document.getElementsByClassName("app")[0];

function init() {
	let App = require('./containers/App.jsx').default;
	root = render(<App />, app.parentNode, app);
}

init();