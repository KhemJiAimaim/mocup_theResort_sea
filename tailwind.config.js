/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        extend: {
            fontFamily: {
                almarai: ["Almarai", "serif"],
            },
            screens: {xx: "400px", xs: "479px", ss: "540px", xxl: "1921px" },
        },
    },

    plugins: [],
};
