import { h, Component, render } from 'preact';

import Container from './Container.jsx';

const App = ({ children }) => {
    return (
        <div class="app_inside">
            <Container />
        </div>
    );
};

export default App;
