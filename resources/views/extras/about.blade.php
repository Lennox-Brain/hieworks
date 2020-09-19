@extends('layouts.wireframe')
    @section('page-title', 'About us - hieworks.com')

@section('content-wrapper')
   <div>
        <div class="page mx-auto bg-white min-h-screen">
           <div class="w-full leading-8 mx-auto md:p-3 md:h-48 md:bg-gray-300 z-0 text-gray-600">
                
            <div class="md:w-3/5 mx-auto md:shadow md:mt-12 p-6 z-10 bg-white rounded">
                <div class="__block-title">
                  <h1 class="__title font-bold text-xl text-blue-700">Abount Us</h1>
                </div>
                <div class="subpixel-antialiased">
                      Hiework.com is a job listing platform and recruitment portal in Ghana which provides users with latest job listing
                      in Ghana and Remote opportunites. The platform lists latest job postings in a wide array of categories ranging from education, engineering,
                      business administration amongs others.
                      The platform makes it easier for companies both small and large to hire the best candidates with little or no hustle.
                      

                    <p>
                        Hieworks currently operates within the Ghanaian geographical region but hopes to 
                        widen its scope of service into other countries in future.
                    </p>

                    <div class="__info">
                        <h3 class="__title font-bold text-blue-700 mt-4" id="contact-us">Contact Us</h3>
                        <div>
                            <div>
                                <i class="fa fa-envelope"></i><span><a href="mailto:info@hieworks.com" class="text-blue-700 font-bold"> info&commat;hieworks.com</a></span>
                            </div>
                            <div class="mt-4">
                                 <div class="flex items-center">
                                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path></svg>
                                    <a href="tel:0241775839" class="font-bold"> 0241775839</a>
                                 </div> 

                                 <div class="flex items-center">
                                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path></svg>
                                    <a href="tel:0241775839" class="font-bold"> 0549927218</a>
                                 </div> 
                            </div>
                        </div>
                    </div>

                    <div class="__info mt-4">
                        <h3 class="__title">Lets Get Social</h3>
                        <div>
                            <div>
                                [<span>Facebook</span>, <span>Twitter</span>] <b>Hieworks</b>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

                
              

           </div>
           
        </div>
   </div>
@endsection

@prepend('app_js')
<script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "Organization",
      "url": "{{route('home')}}",
      "logo": "{{asset('assets/images/hieworks-logo-300x300.png')}}"
    }
</script>

@endprepend