import { createMuiTheme } from "@material-ui/core";

const theme = createMuiTheme({
    palette: {
        common: {
            black: "#000",
            white: "#fff",
        },
        background: {
            paper: "#fff",
            default: "#fafafa",
        },
        primary: {
            light: "#7986cb",
            main: "rgb(51,133,255)",
            dark: "#303f9f",
            contrastText: "#fff",
        },
        secondary: {
            light: "rgb(121,134,203)",
            main: "rgb(80,82,174)",
            dark: "rgb(48,63,159)",
            contrastText: "#fff",
        },
        error: {
            light: "#e57373",
            main: "#f44336",
            dark: "#d32f2f",
            contrastText: "#fff",
        },
        warning: {
            light: "#ffe7bd",
            main: "#FFC864",
            dark: "#ffaf1d",
            contrastText: "#000",
        },
        success: {
            light: "#6FFACC",
            main: "#27C196",
            dark: "#008A63",
            contrastText: "#000",
        },
        text: {
            primary: "rgba(0, 0, 0, 0.87)",
            secondary: "rgba(0, 0, 0, 0.54)",
            disabled: "rgba(0, 0, 0, 0.38)",
            hint: "rgba(0, 0, 0, 0.38)",
        },
    },
});

export default theme;