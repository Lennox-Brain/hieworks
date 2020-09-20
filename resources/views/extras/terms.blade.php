@extends('layouts.wireframe')
    @section('page-title', 'Policy - hieworks.com')

@section('content-wrapper')
   <div>
       <div class="h-40 bg-gray-300"></div>
       
        <div class="container w-5/6 text-sm md:text-base md:w-3/5 relative p-2 md:p-8 -mt-24 mb-10 rounded-lg mx-auto bg-white min-h-screen">
            <h1 class="font-bold text-blue-600 text-2xl">Terms and Conditions</h1>
            <div class="text-gray-600 leading-7 break-words tracking-normal">
                <div>
                        <div class="__block-content">
                                These terms and conditions outline the rules and regulations for the use
                                of hieworks platform located at <span class="__url"><a href="{{route('home')}}" class=" text-purple-700 font-bold">www.hieworks.com</a></span>.
                                By accessing this website we assume you accept these terms and conditions. 
                                Do not continue to use hieworks.com if you do not agree to take all of
                                the terms and conditions stated on this page.
                         </div>
                    </div>
                    
                    
                    <div class=" mt-3">
                        <div class="block-title">
                          <h3 class="__title">Cookies</h3>
                        </div>
                        <div class="__block-content">
                                We employ the use of cookies. By accessing hieworks.com, you agreed to use
                                cookies in agreement with the hieworks.com Privacy Policy.
                                Most interactive websites use cookies to let us retrieve the user's details 
                                for each visit. Cookies are used by our website to enable the 
                                functionality of certain areas to make it easier for people visiting
                                our platform. Some of our affiliate/advertising partners may also use cookies.
                                
                         </div>
                    </div>
                    
                    
                    
                    <div class="mt-3">
                        <div class="block-title">
                          <h3 class="__title">Hyperlinking to our Content</h3>
                        </div>
                        <div class="__block-content">
                                The following organizations may link to our platform without prior written approval:
                                <ul class="__list">	
                                   <li>&hybull; Government agencies</li>
                                   <li>&hybull; Search engines;</li>
                                   <li>&hybull; News organizations;</li>
                                   <li>&hybull;
                                       Online directory distributors may link to our platform in the same manner
                                       as they hyperlink to the Websites of other listed businesses.
                                   </li> 
                               </ul>
                               These organizations may link to our home page, categories or to other
                               platform information so long as the link:<br>
                               (a) is not in any way deceptive;<br>
                               (b) does not falsely imply sponsorship, endorsement or approval of 
                                   the linking party and its products and/or services;<br>
                               (c) fits within the context of the linking party's site.    
                                
                         </div>
                    </div>
                    
                    
                    
                    
                    <div class="mt-3">
                        <div class="block-title">
                          <h3 class="__title">Content Liability</h3>
                        </div>
                        <div class="__block-content">
                                We shall not be held responsible for any content that
                                appears on our platform. You agree to protect and 
                                defend us against all claims that may rise on our platform.                                
                        </div>
                    </div>
                    
            </div>
           
        </div>
   </div>
@endsection
