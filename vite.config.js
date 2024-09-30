import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import topLevelAwait from "vite-plugin-top-level-await";
import basicSsl from '@vitejs/plugin-basic-ssl';
import purge from '@erbelion/vite-plugin-laravel-purgecss';
import fs from 'fs';
import path from 'path';

export default defineConfig({
    plugins: [
        laravel({
            input: ['resources/css/app.css', 'resources/js/app.js'],
            refresh: true,
        }),
        topLevelAwait({
            promiseExportName: "__tla",
            promiseImportName: i => `__tla_${i}`
        }),
        basicSsl({
            domains: ['localhost'],  // Keep this if needed
            certDir: './certs',  // Ensure you have the correct path if this directory exists
        }),
        purge({
            templates: ['blade'], // Purge CSS from Blade templates
            safelist: [
                'side-menu-active',  // Safelist classes that are dynamically added
                'before-side',
                'active', // Ensure classes added by JS are preserved
                'pushwrap'
            ]
        })
    ],
    server: {
        https: {
            key: fs.readFileSync(path.resolve(__dirname, 'certs/localhost.key')),  // Adjust path if needed
            cert: fs.readFileSync(path.resolve(__dirname, 'certs/localhost.crt')),  // Adjust path if needed
        },
        port: 1234,  // Set to the correct port
        host: 'localhost',  // Ensure the host is set to localhost
    },
    build: {
        minify: true,
        manifest: true,
    }
});
