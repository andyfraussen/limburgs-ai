/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        extend: {
            colors: {
                'limburg-yellow': '#FEDD00',
                'limburg-green': '#00A652',
                'limburg-red': '#E2001A',
                'limburg-blue': '#0081C6',
            }
        }
    },
    plugins: [],
}
