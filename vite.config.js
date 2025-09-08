export default defineConfig({
    plugins: [
        laravel({
            input: ['resources/css/app.css', 'resources/js/app.js'],
        }),
        tailwindcss(),
    ],
    base: '/', // belangrijk voor Render productie
});
