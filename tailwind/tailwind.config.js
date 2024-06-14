// Set the Preflight flag based on the build target.
const includePreflight = 'editor' === process.env._TW_TARGET ? false : true;
const defaultTheme = require('tailwindcss/defaultTheme');

module.exports = {
	presets: [
		// Manage Tailwind Typography's configuration in a separate file.
		require('./tailwind-typography.config.js'),
	],
	content: [
		// Ensure changes to PHP files and `theme.json` trigger a rebuild.
		'./theme/**/*.php',
		'**/*.js',
	],
	theme: {
		container: {
			center: true,
			padding: {
				DEFAULT: '1rem',
			},
		},
		// Extend the default Tailwind theme.
		extend: {
			colors: {
				primary: {
					DEFAULT: '#77D7E0',
				},
				'ss-cta-aqua': {
					DEFAULT: '#4FC7D2',
				},
				'ss-pink': {
					DEFAULT: '#FE7B7C',
				},
				'ss-dark-blue': {
					DEFAULT: '#1C3A4F',
				},
				'ss-pale': {
					DEFAULT: '#607584',
				},
				'ss-light-grey': {
					DEFAULT: '#F4F5F9',
				},
			},
			screens: {
				'2xl': '1312px',
			},
			fontFamily: {
				base: ['"DM Sans"', ...defaultTheme.fontFamily.sans],
				icomoon: ['icomoon'],
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
