import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

// import { execSync } from 'child_process';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/sass/app.scss',
                'resources/js/app.js',
            ],
            refresh: true,
        }),
    ],

    // build: {
    //     onStart: () => {
    //         try {
    //             // Ruta al script que deseas ejecutar
    //             const rutaScript = 'node_scripts/websocket-server.js';
    //             // Ejecutar el script usando execSync
    //             execSync(`node ${rutaScript}`, { stdio: 'inherit' });
    //         } catch (error) {
    //             console.error('Error al ejecutar el script:', error);
    //             process.exit(1);
    //         }
    //     },
    // }
});
