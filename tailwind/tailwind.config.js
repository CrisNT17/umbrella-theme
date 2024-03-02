// Set the Preflight flag based on the build target.
const includePreflight = 'editor' === process.env._TW_TARGET ? false : true;

module.exports = {
	presets: [
		// Manage Tailwind Typography's configuration in a separate file.
		require('./tailwind-typography.config.js'),
	],
	content: [
		// Ensure changes to PHP files and `theme.json` trigger a rebuild.
		'./theme/**/*.php',
	],
	theme: {
		// Extend the default Tailwind theme.
		extend: {
			fontFamily: {
				'cocogoose': ['CocoGooseProLight', 'CocoGooseProRegular', 'CocoGooseProSemilight', 'sans'],
				'museo': ['MuseoSans300', 'MuseoSans500', 'MuseoSans700', 'MuseoSans900', 'sans'],
				'myriadopro': ['MyriadProRegular', 'sans'],
			 },
			screens: {
				xs: '320px',
				sm: '425px',
				md: '768px',
				lg: '1024px',
				xl: '1440px',
			},
			container: {
				center: true,
				padding: {
					DEFAULT: '1rem',
					sm: '2rem',
					md: '3rem',
					lg: '4rem',
					xl: '5rem',
				},
			},
			colors: {
				'sky-blue': '#64D4DD',
				'gray': '#606060',
				'light-gray': '#B3B3B3',
			},
		},
	},
	corePlugins: {
		// Disable Preflight base styles in builds targeting the editor.
		preflight: includePreflight,
	},
	plugins: [
		// Add Tailwind Typography (via _tw fork).
		require('@_tw/typography'),

		// Extract colors and widths from `theme.json`.
		require('@_tw/themejson'),

		// Uncomment below to add additional first-party Tailwind plugins.
		// require('@tailwindcss/forms'),
		// require('@tailwindcss/aspect-ratio'),
		// require('@tailwindcss/container-queries'),
	],
};
