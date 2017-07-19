/**
*
* @module Example
* @submodule Container-App
*/

import { h } from 'preact';

import Container from './Container.jsx';

/**
@class App
@static
*/

const App = () => {

	/**
	@method return
	*/

	return (
		<div class="app_inside">
			<Container />
		</div>
	);
};

export default App;
