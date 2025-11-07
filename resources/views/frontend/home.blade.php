
<x-frontend-layout>

    {{-- <!-- hero section -->
    <section class="hero-section">

        <div class="container flex justify-center">
            <div class="flex flex-col items-center text-center w-5/6 text-white ">
                <h1 class="primary-heading text-[64px] font-medium justify-center mb-12 mt-24 ">Connect Skills
                    with Opportunities</h1>

                <h3 class="text-xl mb-10">The premier platform where IT professionals showcase their expertise
                    and companies discover exceptional talent. Your next career move or perfect hire is just a
                    click away.</h3>

                <div class="mb-10 flex gap-4">
                    <a href="#"
                        class="font-medium text-white bg-[var(--primary-color)] py-2 px-4 rounded-xl hover:bg-[var(--hover-color)] transition-all">I'm
                        Professional</a>
                    <button data-modal-target="authentication-modal" data-modal-toggle="authentication-modal"
                        class="font-medium text-white bg-[var(--primary-color)] py-2 px-4 rounded-xl hover:bg-[var(--hover-color)] transition-all transform hover:scale-105"
                        type="button">
                        I'm Professional
                    </button>


                </div>

                <div class="flex gap-8 items-center text-md">
                    <div class="flex flex-col items-center">
                        <span><strong>10K+</strong></span>
                        <span>Skilled Professionals</span>
                    </div>
                    <div class="flex flex-col items-center">
                        <span><strong>500+</strong></span>
                        <span>Comapanies</span>
                    </div>
                    <div class="flex flex-col items-center ">
                        <span><strong>90%</strong></span>
                        <span>Success Rate</span>
                    </div>
                </div>
            </div>
        </div>





        <!-- Modal toggle -->


        <!-- Main modal -->
        <div id="authentication-modal" tabindex="-1" aria-hidden="true"
            class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
            <div class="relative p-4 w-full max-w-md max-h-full">
                <!-- Modal content -->
                <div class="relative bg-white rounded-lg shadow-sm dark:bg-gray-700">
                    <!-- Modal header -->
                    <div
                        class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600 border-gray-200">
                        <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                            Send Request to our platform
                        </h3>
                        <button type="button"
                            class="end-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white"
                            data-modal-hide="authentication-modal">
                            <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                                viewBox="0 0 14 14">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                            </svg>
                            <span class="sr-only">Close modal</span>
                        </button>
                    </div>
                    <!-- Modal body -->
                    <div class="p-4 md:p-5">
                        <form class="space-y-4" action="{{ route('frontend.professionalRequest') }}" method="post">
                            @csrf
                            <div>
                                <label for="name"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Your
                                    name</label>
                                <input type="text" name="name" id="name"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                                    placeholder="enter your name" required />
                            </div>
                            <div>
                                <label for="email"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Your
                                    email</label>
                                <input type="email" name="email" id="email"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                                    placeholder="name@company.com" required />
                            </div>
                            <div>
                                <label for="contact"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Your
                                    contact</label>
                                <input type="text" name="contact" id="contact"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                                    required />
                            </div>

                            <button type="submit"
                                class="w-full text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </section> --}}




     <section class="hero">
      <div class="hero__overlay">
        <div class="hero__content">
          <h1 class="hero__title">
            Connect Skills <br /> with Opportunities
          </h1>
          <p class="hero__subtitle">
            The premier platform where skilled professionals showcase their expertise
            and companies or organizations discover exceptional talent. Your next career move or
            perfect hire is just a click away.
          </p>
          <div class="hero__stats">
            <div class="stat">
              <h2>3K+</h2>
              <p>Skilled Professionals</p>
            </div>
            <div class="stat">
              <h2>100+</h2>
              <p>Companies</p>
            </div>
            <div class="stat">
              <h2>95%</h2>
              <p>Success Rate</p>
            </div>
          </div>
        </div>
      </div>
    </section>

</x-frontend-layout>

<!-- image link https://www.pexels.com/photo/white-blank-notebook-733857/ -->

{{-- </body>

    </html> --}}
