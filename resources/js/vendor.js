import 'alpinejs'

window.globalState = function(){
    return{
        isSeen:false,
        popup(){
             const expireOn = (new Date(Date.now() + 14 * 24 * 60 * 60 * 1000).toUTCString())
        }
    }
}