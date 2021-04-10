const production = !process.env.ROLLUP_WATCH;

module.exports = {
	purge: {
		content: ["./src/**/*.svelte", "./public/**/*.html"],
		css: ["./public/**/*.css"],
		enabled: production,
	},

	darkMode: false, // or 'media' or 'class'
	theme: {
		colors: {
			blue: "#DCF0FF",
			darkblue: "#7dc7ff",
			white: "#f7f8fb",
			purple: "#5052ae",
			grey: "#616163",
			red: "#f5091b",
		},
		extend: {
			backgroundImage: (theme) => ({
				splash: "url('/background.jpg')",
			}),
			colors: {
				darkerblue: "#272566"
			}
		},
	},
	variants: {
		extend: {},
	},
	plugins: [],
};
