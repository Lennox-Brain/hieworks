@extends('layouts.wireframe')
    @section('page-title', 'FAQ - hieworks.com')
    @prepend('app_css')
     <style>
          /* Tab content - closed */
          .tab-content {
         max-height: 0;
         -webkit-transition: max-height .35s;
         -o-transition: max-height .35s;
         transition: max-height .35s;
         }
         /* :checked - resize to full height */
         .tab input:checked ~ .tab-content {
         max-height: 100vh;
         }
         /* Label formatting when open */
         .tab input:checked + label{
         /*@apply text-xl p-5 border-l-2 border-indigo-500 bg-gray-100 text-indigo*/
         font-size: 1.25rem; /*.text-xl*/
         padding: 1.25rem; /*.p-5*/
         border-left-width: 2px; /*.border-l-2*/
         border-color: #6574cd; /*.border-indigo*/
         background-color: #f8fafc; /*.bg-gray-100 */
         color: #6574cd; /*.text-indigo*/
         }
         /* Icon */
         .tab label::after {
         float:right;
         right: 0;
         top: 0;
         display: block;
         width: 1.5em;
         height: 1.5em;
         line-height: 1.5;
         font-size: 1.25rem;
         text-align: center;
         -webkit-transition: all .35s;
         -o-transition: all .35s;
         transition: all .35s;
         }
         /* Icon formatting - closed */
         .tab input[type=checkbox] + label::after {
         content: "+";
         font-weight:bold; /*.font-bold*/
         border-width: 1px; /*.border*/
         border-radius: 9999px; /*.rounded-full */
         border-color: #b8c2cc; /*.border-grey*/
         }
         .tab input[type=radio] + label::after {
         content: "\25BE";
         font-weight:bold; /*.font-bold*/
         border-width: 1px; /*.border*/
         border-radius: 9999px; /*.rounded-full */
         border-color: #b8c2cc; /*.border-grey*/
         }
         /* Icon formatting - open */
         .tab input[type=checkbox]:checked + label::after {
         transform: rotate(315deg);
         background-color: #6574cd; /*.bg-indigo*/
         color: #f8fafc; /*.text-grey-lightest*/
         }
         .tab input[type=radio]:checked + label::after {
         transform: rotateX(180deg);
         background-color: #6574cd; /*.bg-indigo*/
         color: #f8fafc; /*.text-grey-lightest*/
         }
     </style>
 @endprepend

@section('content-wrapper')
   <div>
        <div class="page container mx-auto bg-white px-2 sm:px-4 py-4 min-h-screen">
           <div class="w-full md:w-4/5 border mx-auto p-3 leading-7 text-gray-600 text-sm">
            
             <div>
                <p class=" text-2xl my-4 text-blue-700">
                    FQA
                </p>
                <div class="shadow-md">
                   <div class="tab w-full overflow-hidden border-t">
                      <input class="absolute opacity-0" id="tab-single-one" type="radio" name="tabs2">
                      <label class="block p-5 leading-normal cursor-pointer tab-heading text-base md:text-lg" for="tab-single-one">What is hieworks ?</label>
                      <div class="tab-content overflow-hidden border-l-2 bg-gray-100 border-indigo-500 leading-normal">
                         <p class="p-5">
                            Hiework.com is a job listing platform and recruitment portal in Ghana which provides users with latest job listing
                            in Ghana.
                            The platform lists latest job postings in a wide array of categories ranging from education, engineering,
                             business amongs others.
                        </p>
                      </div>
                   </div>
                   <div class="tab w-full overflow-hidden border-t">
                      <input class="absolute opacity-0" id="tab-single-two" type="radio" name="tabs2">
                      <label class="block p-5 leading-normal cursor-pointer tab-heading text-base md:text-lg" for="tab-single-two">How do i list my job vacancy on hieworks ?</label>
                      <div class="tab-content overflow-hidden border-l-2 bg-gray-100 border-indigo-500 leading-normal">
                         <p class="p-5">
                                Everyone can list their jobs by <a href="{{route('register')}}" class="text-blue-700 outline-none">creating</a> an account first, login to your account and start posting 
                                your jobs.
                         </p>
                      </div>
                   </div>
                   <div class="tab w-full overflow-hidden border-t">
                      <input class="absolute opacity-0" id="tab-single-three" type="radio" name="tabs2">
                      <label class="block p-5 leading-normal cursor-pointer tab-heading text-base md:text-lg" for="tab-single-three">Does listing of job vacancy requires payment ?</label>
                      <div class="tab-content overflow-hidden border-l-2 bg-gray-100 border-indigo-500 leading-normal">
                         <p class="p-5">
                            No. Listing job vacancies on hieworks is completely free and will remain free.
                         </p>
                      </div>
                   </div>

                   <div class="tab w-full overflow-hidden border-t">
                    <input class="absolute opacity-0" id="tab-single-four" type="radio" name="tabs2">
                    <label class="block p-5 leading-normal cursor-pointer tab-heading text-base md:text-lg" for="tab-single-four">How do i apply for a job on hieworks ?</label>
                    <div class="tab-content overflow-hidden border-l-2 bg-gray-100 border-indigo-500 leading-normal">
                       <p class="p-5">
                           Click on the job you want to apply to, after carefully reading the job details, scroll to the bottom to find 
                           the more information section to see the application details. Note that some recruiters may disable the
                           option that allows you to apply for the job through the hieworks portal so you may submit your application
                           into their email or call them directly if they provide their contact details.
                           You may also follow the external links provided by the employer incase they provide one.
                       </p>   
                    </div>
                 </div>

                 <div class="tab w-full overflow-hidden border-t">
                    <input class="absolute opacity-0" id="tab-single-five" type="radio" name="tabs2">
                    <label class="block p-5 leading-normal cursor-pointer tab-heading text-base md:text-lg" for="tab-single-five">Is there a limit to the number of jobs i can apply ?</label>
                    <div class="tab-content overflow-hidden border-l-2 bg-gray-100 border-indigo-500 leading-normal">
                       <p class="p-5">
                         No. There is no limmit on the number of vacancies you may apply on hieworks.
                       </p>
                    </div>
                 </div>

                 <div class="tab w-full overflow-hidden border-t">
                    <input class="absolute opacity-0" id="tab-single-six" type="radio" name="tabs2">
                    <label class="block p-5 leading-normal cursor-pointer tab-heading text-base md:text-lg" for="tab-single-six">How do i get a list of applicant for my job post ?</label>
                    <div class="tab-content overflow-hidden border-l-2 bg-gray-100 border-indigo-500 leading-normal">
                       <p class="p-5">
                             Ones you list a job vacancy, you may monitor your applicants in your hieworks applicant portal of your accounts.
                       </p>
                    </div>
                 </div>

                 <div class="tab w-full overflow-hidden border-t">
                    <input class="absolute opacity-0" id="tab-single-seven" type="radio" name="tabs2">
                    <label class="block p-5 leading-normal cursor-pointer tab-heading text-base md:text-lg" for="tab-single-seven">Can i enable or disable email notifications when applicants apply for my job post ?</label>
                    <div class="tab-content overflow-hidden border-l-2 bg-gray-100 border-indigo-500 leading-normal">
                       <p class="p-5">
                           Yes. You may enable or disable email notifications by going to the settings page of you account and toggle on/off your
                           application notifications options.
                       </p>
                    </div>
                 </div>

                 <div class="tab w-full overflow-hidden border-t">
                    <input class="absolute opacity-0" id="tab-single-eight" type="radio" name="tabs2">
                    <label class="block p-5 leading-normal cursor-pointer tab-heading text-base md:text-lg" for="tab-single-eight">What is a remote Job can I apply for one ?</label>
                    <div class="tab-content overflow-hidden border-l-2 bg-gray-100 border-indigo-500 leading-normal">
                       <p class="p-5">
                         Any job that is not tied to a physical office is termed as a remote job.
                         In such a job, work is usually accomplished using an
                         internet connection and a computer.
                         Persons such as Graphic Designers, Freelance writters, software engineers, Digital marketers,
                         customer supports etc. may
                         apply for remote jobs from any part of the world.
                       </p>
                    </div>
                  </div>

                </div>
             </div>



           </div>
        </div>
   </div>
@endsection

