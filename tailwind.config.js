/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {
      colors: {
        'avec-cyan': '#00D9FF',
        'avec-purple': '#9B8FF5',
        'avec-dark': '#1E2A4A',
      },
    },
  },
  plugins: [],
}
