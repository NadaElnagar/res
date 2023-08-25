// import { defineConfig } from 'vite';
// import laravel from 'laravel-vite-plugin';
//
// export default defineConfig({
//     plugins: [
//         laravel({
//             input: [
//                 'resources/sass/app.scss',
//                 'resources/js/app.js',
//             ],
//             refresh: true,
//         }),
//     ],
// });
const { resolve } = require('path');

module.exports = {
    root: './resources/js', // Specify the root directory of your JavaScript code
    outDir: './public/js', // Specify the output directory for the transpiled code
    alias: {
        // Add any additional aliases for your project's directories or modules
        '@': resolve(__dirname, './resources/js'),
    },
    proxy: {
        // Add the proxy configuration if your Laravel project is running on a different port or domain
        '/api': 'http://localhost:8000',
    },
};
