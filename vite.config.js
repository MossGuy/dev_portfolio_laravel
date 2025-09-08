const { defineConfig } = require('vite');
const laravel = require('laravel-vite-plugin');
const tailwindcss = require('@tailwindcss/vite');

module.exports = defineConfig({
    plugins: [
        laravel({
            input: ['resources/css/app.css', 'resources/js/app.js'],
        }),
        tailwindcss(),
    ],
    base: '/',
});
