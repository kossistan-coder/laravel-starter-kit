/** @type {import('tailwindcss').Config} */
export default {
  content: [
      "./resources/**/*.blade.php",
      "./resources/**/*.js",
      "./resources/**/*.vue",
      "./node_modules/flowbite/**/*.js"
  ],
  theme: {
      extend: {

          colors :{
              gray :{
                  900 : "#0F1112",
                  800 : "#151718",
                  700 : "#181A1E",
                  400 : "#55565C",
              }
          }
      },
  },
  plugins: [
      require('flowbite/plugin')({
          charts: true,
      }),
  ],
}

