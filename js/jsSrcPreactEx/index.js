/**
* @module Example
*/

/**
@class Initialization
@static
*/

import { h, render } from 'preact';

const app = document.getElementsByClassName('app')[0];


/**
@method init
*/

function init() {
	let App = require('./containers/App.jsx').default;
	render(<App />, app.parentNode, app);
}

init();
