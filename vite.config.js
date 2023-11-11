import { defineConfig } from "vite";
import laravel from "laravel-vite-plugin";

export default defineConfig({
    plugins: [
        laravel({
            input: [
                // admin
                "resources/assets/admin/style/app.scss",
                "resources/assets/admin/js/app.js",
            ],
            refresh: true,
        }),
    ],
});
