/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {
      boxSizing: ['border-box'],
      padding: {
        '8' : '2rem'
      },
      backgroundImage : {
        'hero-image' : "url('https://images.unsplash.com/photo-1684695414418-b76c47bfb731?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=687&q=80')"
      },
      gridTemplateColumns: {
        '4' : 'repeat(4, minmax(0, 1fr))',
        '3' : 'repeat(3, minmax(0, 1fr))'
      }
    },
  },
  plugins: [],
}
