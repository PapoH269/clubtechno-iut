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
        'iut-blue': '#003087',  // IUT deep blue
        'iut-green': '#006633', // IUT vibrant green
      },
    },
  },
  plugins: [],
}