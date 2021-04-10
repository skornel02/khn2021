import App from "./App.svelte";

const getMetadata = (name: string): string | undefined => {
	return document.querySelector(`meta[name='${name}']`)?.getAttribute("content") ?? undefined;
};

// @ts-expect-error
const isLoggedIn = "isProduction" === "true" ? (getMetadata("khn2021-loggedin") === "true") : true;
// @ts-expect-error
const isWorker = "isProduction" === "true" ? (getMetadata("khn2021-userperm") === "true") : true;

const app = new App({
	target: document.body,
	props: {
		isLoggedIn,
		isWorker,
	},
});

export default app;
