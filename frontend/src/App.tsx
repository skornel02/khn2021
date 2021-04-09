import React from "react";
import { Route, Switch } from "react-router-dom";
import Home from "./Home";

const App: React.FunctionComponent = () => (
    <Switch>
        <Route exact path="/">
            <Home />
        </Route>
    </Switch>
);

export default App;
