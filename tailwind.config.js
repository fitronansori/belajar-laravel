/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        container: {
            center: true,
            padding: "1rem",
            screens: {
                "2xl": "1400px",
            },
        },
        extend: {},
    },
    plugins: [],
};
