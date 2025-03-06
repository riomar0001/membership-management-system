import defaultTheme from "tailwindcss/defaultTheme";
/** @type {import('tailwindcss').Config} */
export default {
    darkMode: "class",
    content: [
        "./vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php",
        "./storage/framework/views/*.php",
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
        "node_modules/preline/dist/*.js",
    ],
    theme: {
        extend: {
            borderRadius: {
                lg: "var(--radius)",
                md: "calc(var(--radius) - 2px)",
                sm: "calc(var(--radius) - 4px)",
            },
            fontFamily: {
                sans: ["Figtree", ...defaultTheme.fontFamily.sans],
            },
            colors: {
                lemon: {
                    50: "#fffde7",
                    100: "#fff9c4",
                    200: "#fff59d",
                    300: "#fff176",
                    400: "#ffee58",
                    500: "#ffeb3b",
                    600: "#fdd835",
                    700: "#fbc02d",
                    800: "#f9a825",
                    900: "#f57f17",
                    950: "#f0cc00",
                },
            },
        },
    },
    plugins: [require("preline/plugin")],
};
