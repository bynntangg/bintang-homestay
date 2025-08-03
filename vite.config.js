export default defineConfig({
    plugins: [
        laravel({
            input: ['resources/css/app.css', 'resources/js/app.js'],
            refresh: true,
            buildDirectory: 'dist' // Ganti output directory
        }),
        tailwindcss(),
    ],
    build: {
        outDir: 'public/dist' // Alternatif lain
    }
});