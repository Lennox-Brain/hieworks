@extends('layouts.wireframe')
    @section('page-title', 'about us - hieworks.com')

@section('content-wrapper')
   <div>
        <div class="page container mx-auto px-2 sm:px-0 bg-white px-2 sm:px-4 py-4 min-h-screen">
           <div class="w-full md:w-4/5 border mx-auto p-3 leading-7 text-gray-600 text-sm">
                
            <div>
                <div class="__block-title">
                  <h3 class="__title font-bold text-blue-700">Abount hieworks.com</h3>
                </div>
                <div class="__block-content">
                      Hiework.com is a job listing platform and recruitment portal in Ghana which provides users with latest job listing
                      in Ghana. The platform lists latest job postings in a wide array of categories ranging from education, engineering,
                      business amongs others.
                      The platform makes it easier for companies both small and large to hire the best candidates with little or no hustle.
                      

                    <p>
                        hieworks currently operates within the Ghanaian geographical region but hopes to 
                        widen its scope of service into other countries in future.
                    </p>

                    <div class="__info">
                        <h3 class="__title font-bold text-blue-700 mt-4" id="contact-us">Contact Us</h3>
                        <div>
                            <div>
                                <i class="fa fa-envelope "></i><span><a href="mailto:info@hieworks.com" class="text-blue-700 font-bold"> info&commat;hieworks.com</a></span>
                            </div>
                            <div>
                                <i class="fa fa-phone"></i><span> <a href="tel:0241775839"> 0241775839</a> | <a href="tel:0549927218"> 0549927218</a></span>
                            </div>
                        </div>
                    </div>

                    <div class="__info mt-4">
                        <h3 class="__title">Lets get social</h3>
                        <div>
                            <div>
                                (<span class="fa fa-facebook">facebook</span>, <span class="fa fa-twitter">twitter</span>) <b>hieworks gh</b>
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