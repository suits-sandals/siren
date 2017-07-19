/**
*
* @module Example
* @submodule Container-Container
*/

import { h, render, Component } from 'preact';

import Clock from '../components/Clock.jsx';

/**
@class Container
@static
*/

class Container extends Component {

	/**
	@method render
	*/

	render() {
		<div><Clock /></div>;
	}
}

export default Container;
