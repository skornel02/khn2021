import React from "react";
import ReactDOM from "react-dom";
import App from "./App";
import * as serviceWorkerRegistration from "./serviceWorkerRegistration";
import reportWebVitals from "./reportWebVitals";
import { HashRouter as Router } from "react-router-dom";
import CssBaseline from "@material-ui/core/CssBaseline";
import { ThemeProvider } from "@material-ui/core/styles";
import { ConfirmProvider } from "material-ui-confirm";
import theme from "./Resources/Styles/theme";
import "./i18n";

ReactDOM.render(
    <React.StrictMode>
        <ThemeProvider theme={theme}>
            <ConfirmProvider>
                <Router>
                    <CssBaseline />
                    <App />
                </Router>
            </ConfirmProvider>
        </ThemeProvider>
    </React.StrictMode>,
    document.getElementById("root")
);

serviceWorkerRegistration.unregister();

reportWebVitals();
