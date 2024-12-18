import { defineConfig } from "vite";
import laravel from "laravel-vite-plugin";
import { resolve } from "path";

export default defineConfig({
    server: {
        host: "192.168.100.169",
        port: 5173,
    },
    plugins: [
        laravel({
            input: [
                "resources/css/app.css",
                "resources/css/tailwind.css",
                "resources/js/app.js",
            ],
            refresh: true,
        }),
    ],
    resolve: {
        alias: {
            "@": resolve(__dirname, "./"),
            "@public": resolve(__dirname, "public"),
        },
    },
});
