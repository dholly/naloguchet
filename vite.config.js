/**
 * View your website at your own local server.
 * Example: if you're using WP-CLI then the common URL is: http://localhost:8080.
 *
 * http://localhost:5173 is serving Vite on development. Access this URL will show empty page.
 *
 */

import { defineConfig } from 'vite';
import { resolve } from 'path';
import { glob } from 'glob';

// Get the relative path of the vite.config.js file for the alias
const fullPath = import.meta.url.slice(0, import.meta.url.lastIndexOf('/'));
const getWpContentIndex = fullPath.indexOf('wp-content');
const wpContentPath = fullPath.slice(getWpContentIndex);

export default defineConfig({
	base: './',

	plugins: [
		{
			handleHotUpdate({ file, server }) {
				if (file.endsWith('.php')) {
					server.ws.send({ type: 'full-reload', path: '*' });
				}
			},
		},
	],

	css: {
		devSourcemap: true,
	},

	build: {
		// emit manifest so PHP can find the hashed files
		manifest: true,

		outDir: resolve(__dirname, 'assets/dist/'),

		// don't base64 images
		assetsInlineLimit: 0,

		rollupOptions: {
      input: {
        'js/main': resolve(__dirname, 'assets/src/js/main.js'),
        'main': resolve(__dirname, 'assets/src/scss/main.scss'),
        'main-diff': resolve(__dirname, 'assets/src/scss/main-diff.scss'),
      },
			output: {
				entryFileNames: '[name]-[hash].js',
				chunkFileNames: '[name]-[hash].js',
				assetFileNames: (assetInfo) => {
					const extType = assetInfo.name.split('.');

					// group fonts in a folder
					if (
						extType[1] === 'woff' ||
						extType[1] === 'woff2' ||
						extType[1] === 'ttf'
					) {
						return 'fonts/[name]-[hash].[ext]';
					}

					// group images in a folder
					if (
						extType[1] === 'gif' ||
						extType[1] === 'jpg' ||
						extType[1] === 'jpeg' ||
						extType[1] === 'png'
					) {
						return 'img/[name]-[hash].[ext]';
					}

					return '[ext]/[name]-[hash].[ext]';
				},
			},
		},
	},

	server: {
		// required to load scripts from custom host
		cors: {
			origin: '*',
		},

		// We need a strict port to match on PHP side.
		strictPort: true,
		port: 5173,
    origin: 'http://localhost:5173',
  },

  resolve: {
    alias: {
      '@': resolve(__dirname, 'static'),
    },
  },
});
