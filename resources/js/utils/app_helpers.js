import axios  from 'axios'
function Helpers(){
    if( !(this instanceof Helpers)) 
        return new Helpers()
}

Helpers.prototype.uploadPreview =  function(){
    let _this = this
    const fileList = this.files[0]; 
    const fileReader = new FileReader(fileList)
    fileReader.readAsDataURL(fileList) 
    fileReader.onload = ()=> {
        _this.labels[0].innerHTML = `<img src="${fileReader.result}" class="rounded object-contain w-32 mx-auto">`
    }
}
Helpers.prototype.formRequest = async function(options){
    try{

        if(!options.uri || !options.data || !options.headers)    
            throw Error('invalid param, param must be a valid javascript object')
        
         return await axios.post(options.uri, options.data, options.headers)
          .then(function (response) {
            return  response.data;
          })
          .catch(function (error) {
            console.log(error);
          })
    }catch(err){
            console.log(err)
    }
          
}

Helpers.prototype.ajaxRequest = function(){

}

export default Helpers