module.exports = {
  theme: {
    extend: {
        spacing: {
            '96': '32rem'
        },
        colors: {
            'ol-red': '#FF2D20',
            'ol-gray': '#525257',
        }
    }
  },
  variants: {},
  plugins: [
      require('tailwindcss-plugins/pagination')
  ]
}
