import { defineConfig } from "vite";
import laravel from "laravel-vite-plugin";

export default defineConfig({
    plugins: [
        laravel({
            input: [
                "resources/sass/app.scss",
                "resources/js/app.js",
                "resources/css/app.css",
                "resources/css/admin.css",
                "resources/css/dataTables.bootstrap5.css",
            ],
            refresh: true,
        }),
    ],Q
});
