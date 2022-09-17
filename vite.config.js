import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: ['resources.blade.php/css/app.css', 'resources.blade.php/js/app.js'],
            refresh: true,
        }),
    ],
});
