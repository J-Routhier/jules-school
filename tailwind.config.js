
const colors = require('tailwindcss/colors')

module.exports = {
  content: [    "./app/template/*.php",
                "./app/view/*.php" ],
            
  theme: {
    extend: {
        fontFamily: {
            'sans': 'Asul',
        },
        colors: {
            cyan: colors.cyan,
        },
    },
  },
  plugins: [
    require('@tailwindcss/forms'),
    
  ],
    
    
}
