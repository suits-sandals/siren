import { h, Component, render } = preact; 

import Container from 'containers/Container';


const App = ({children}) => {
    return (
      <div class="app_inside">
	      <Container />
	  </div>
    )
};

export default App;