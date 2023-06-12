/** @type {import('tailwindcss').Config} */
module.exports = {
	darkMode: "class",
	content: [
		"./resources/**/*.blade.php",
		"./resources/**/*.{js}",
		"./resources/**/*.{ts}",
		"./node_modules/flowbite/**/*.js",
		"./node_modules/tw-elements/dist/js/**/*.js",
		"./vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php",
	],
	safelist: [
		"font-noto",
		"font-roboto",
		"font-montserrat",
		"font-poppins",
		"font-nunito",
	],
	theme: {
		extend: {
			fontFamily: {
				noto: ["Noto Sans"],
				roboto: ["Roboto"],
				montserrat: ["Montserrat Variable"],
				poppins: ["Poppins"],
				nunito: ["Nunito Variable"],
			},
		},
	},
	plugins: [
		require("flowbite/plugin"),
		require("daisyui"),
		require("tw-elements/dist/plugin.cjs"),
	],
	daisyui: {
		themes: [
			{
				light: {
					"color-scheme": "light",
					primary: "#8b5cf6",
					"primary-content": "#f8fafc",
					secondary: "#d946ef",
					"secondary-content": "#f8fafc",
					accent: "#1ECEBC",
					"accent-content": "#07312D",
					neutral: "#2B3440",
					"neutral-content": "#D7DDE4",
					"base-100": "#ffffff",
					"base-200": "#f1f5f9",
					"base-300": "#e2e8f0",
					"base-content": "#020617",
				},
				dark: {
					"color-scheme": "dark",
					primary: "#8b5cf6",
					"primary-content": "#f8fafc",
					secondary: "#d946ef",
					"secondary-content": "#f8fafc",
					accent: "#1FB2A5",
					"accent-content": "#ffffff",
					neutral: "#2a323c",
					"neutral-focus": "#242b33",
					"neutral-content": "#A6ADBB",
					"base-100": "#334155",
					"base-200": "#1e293b",
					"base-300": "#0f172a",
					"base-content": "#f8fafc",
				},
			},
			"cupcake",
			"bumblebee",
			"emerald",
			"corporate",
			"synthwave",
			"retro",
			"cyberpunk",
			"valentine",
			"halloween",
			"garden",
			"forest",
			"aqua",
			"lofi",
			"pastel",
			"fantasy",
			"wireframe",
			"black",
			"luxury",
			"dracula",
			"cmyk",
			"autumn",
			"business",
			"acid",
			"lemonade",
			"night",
			"coffee",
			"winter",
		],
		darkTheme: "dark",
		base: true,
		styled: true,
		utils: true,
		rtl: true,
		prefix: "",
		logs: true,
	},
};
