/**
* This file contains the Global calls and custom functions of the project for mobile devices
* @module Global-Mobile
*/

window.onload=function(){

	//Start Button
	var trigger = document.getElementById("navButton");
	if(trigger){
		trigger.onclick = function(){
			activeState(this);
			if(hasClass(this, 'active')){
				this.innerHTML = "CLOSE";
			}
			else{
				this.innerHTML = "MENU";
			}
			return false;
		};
	}
};