/**
*
* @module Example
* @submodule Component-Clock
*/


import { h, render, Component } from 'preact';

/**
@class Clock
@static
*/

class Clock extends Component {

	/**
	@method render
	*/

	render() {
		let time = new Date().toLocaleTimeString();
		return <span>{ time }</span>;
	}
}

export default Clock;