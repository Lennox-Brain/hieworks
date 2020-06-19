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
  },
  plugins: [
    
  ],
  corePlugins: {
    listStyle:false,
    listStylePosition:false,
    listStyleType:false
  }
}
