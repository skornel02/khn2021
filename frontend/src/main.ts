import App from "./App.svelte";

const getMetadata = (name: string): string | undefined => {
	return document.querySelector(`meta[name='${name}']`)?.getAttribute("content") ?? undefined;
};

const app = new App({
	target: document.body,
	props: {
		isLoggedIn: getMetadata("khn2021-loggedin") === "true",
		isWorker: getMetadata("khn2021-userperm") === "true"
	},
});

export default app;
