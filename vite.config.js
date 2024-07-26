import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

// import { execSync } from 'child_process';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/sass/main.scss',
                'resources/sass/dashmix/themes/xeco.scss',
                'resources/sass/dashmix/themes/xinspire.scss',
                'resources/sass/dashmix/themes/xmodern.scss',
                'resources/sass/dashmix/themes/xsmooth.scss',
                'resources/sass/dashmix/themes/xwork.scss',
                'resources/sass/dashmix/themes/xdream.scss',
                'resources/sass/dashmix/themes/xpro.scss',
                'resources/sass/dashmix/themes/xplay.scss',
                'resources/js/dashmix/app.js',
                'resources/js/app.js',
                'resources/js/pages/datatables.js',
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
