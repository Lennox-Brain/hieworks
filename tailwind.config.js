module.exports = {
  purge: [],
  theme: {
    listStylePosition:{},
    listStyleType:{},
    listStyle:{}
   
  },
  variants: {
    borderWidth: ['responsive', 'last', 'hover', 'focus'],
    borderWidth: ['responsive', 'first', 'hover', 'focus'],
    backgroundColor: ['responsive', 'group-hover', 'odd', 'even']
  },
  plugins: [
      // [require('@tailwindcss/custom-forms')],
  ],
  corePlugins: {
    listStyle:false,
    listStylePosition:false,
    listStyleType:false
  }
}
