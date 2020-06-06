import Helpers from './app_helpers.js'
const helpers = Helpers.prototype

window.utils = function(){
    return{
        isOpen:false,
        fileUpload(e){
           console.log(e)
        }
    }
}

const jobtitle = document.querySelector('[name=job_title]').value
const category = document.querySelector('[name=job_category]').value
const type = document.querySelector('[name=job_type]').value
const qualification = document.querySelector('[name=job_qualification]').value
const experience = document.querySelector('[name=job_experience]').value
const location = document.querySelector('[name=job_location]').value
const email = document.querySelector('[name=job_email]').value
const phone = document.querySelector('[name=job_phone]').value
const deadline = document.querySelector('[name=job_deadline]').value
const description = document.querySelector('[name=job_description]').value
const file = document.getElementById("company_logo");

const form = document.querySelector('#postjobform')
const token = document.querySelector('input[name=_token]').value
const formData = new FormData(form);
const headers = {
  'X-CSRF-TOKEN':token,
  'content-type':'multipart/form-data'
}

file.addEventListener("change", helpers.uploadPreview, false);
// form.addEventListener('submit', async function(e){
//   e.preventDefault()
//  console.log(type)
  
// })

// let formData = new FormData(document.querySelector('#form'));

// axios.post("/api/xxx", formData).then(console.log).catch(console.error)