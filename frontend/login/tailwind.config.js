/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./src/**/*.{html,js}"],
  purge: ["./src/**/*.html", "./src/**/*.{js, jsx, ts, tsx}"],
  theme: {
    extend: {
      colors: {
          'shiny-yellow': '#FFEA00',
          'boring-gray': '#566465'
      }
    },
  },
  plugins: [
    function ({ addVariant }) {
        addVariant('child', '& > *');
        addVariant('child-hover', '& > *:hover');
    }
],
}