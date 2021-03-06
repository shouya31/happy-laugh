module.exports = {
  purge: [],
  darkMode: false, // or 'media' or 'class'
  theme: {
    extend: {
      backgroundImage: theme => ({
        'avocado': "url('./avocado.png')",
      })
    },
  },
  variants: {
    extend: {},
  },
  plugins: [],
}
