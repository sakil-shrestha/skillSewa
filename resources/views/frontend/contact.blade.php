<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="frontend/about.css">

    <script src="https://cdn.tailwindcss.com"></script>


    <link href="frontend/style.css" rel="stylesheet">
    <link href="frontend/chooseYourPath.css" rel="stylesheet">
    <link href="frontend/hero.css" rel="stylesheet">
    <link href="frontend/footer.css" rel="stylesheet">
    <link href="frontend/createProfile.css" rel="stylesheet">
    <link href="frontend/contact.css" rel="stylesheet">
    <link href="frontend/howItWorks.css" rel="stylesheet">


    @vite(['resources/css/app.css', 'resources/js/app.js'])


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/remixicon/4.6.0/remixicon.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css"
        integrity="sha512-2SwdPD6INVrV/lHTZbO2nodKhrnDdJK9/kg2XD1r9uGqPo1cUbujc+IYdlYdEErWNu69gVcYgdxlmVmzTWnetw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Swiper CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <link rel="icon" type="image/svg" href="frontend/image/favicon.png" />
</head>

<body>
    <!-- nav bar section -->
    <header class="container">
        <nav class="flex justify-between py-3 items-center">
            {{-- @foreach ($company as $com) --}}
            <img src="{{ asset(Storage::url($company->logo)) }}" class="w-40">
            {{-- @endforeach --}}
            <div class="flex justify-between gap-12 items-center">
                <a href="#" class="hover:text-black font-medium text-[var(--light-color)] ">Home</a>
                <a href="{{ route('aboutsection') }}"
                    class="hover:text-black font-medium text-[var(--light-color)]">About</a>
                <a href="{{route('frontend.contact')}}" class="hover:text-black font-medium text-[var(--light-color)]">Contact us</a>
                <a href="#" class="hover:text-black font-medium text-[var(--light-color)]">Features</a>
                <a href="#" class="hover:text-black font-medium text-[var(--light-color)]">Testimonial</a>

            </div>
            <div class="flex gap-8">
                {{-- <a href="admin"
                class="py-1.5 px-4 rounded-xl hover:bg-[var(--hover-color)] hover:text-white transition-all font-medium">Admin</a>
            <a href="professional"
                class="py-1.5 font-medium px-4 rounded-xl hover:bg-[var(--hover-color)] hover:text-white transition-all">
                Professional
                login</a> --}}

                @guest

                    <a href="/login"
                        class="font-medium text-white bg-[var(--blue-primary)] py-2 px-4 rounded-xl transition-all transform hover:translate-y-1">Get
                        Started
                    </a>
                @else
                    <a class="font-medium text-white bg-[var(--blue-primary)] py-2 px-4 rounded-xl ] transition-all transform hover:translate-y-1"
                        title="Click for Logout" href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                        <i class="fa-solid fa-right-from-bracket"></i>Log Out
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>

                @endguest
                {{-- <a href="{{route('user.login')}}"
                class="font-medium text-white bg-[var(--primary-color)] py-2 px-4 rounded-xl hover:bg-[var(--hover-color)] transition-all transform hover:scale-105">Login
                for user
            </a> --}}
            </div>
        </nav>
    </header>

 <section class="contact">
      <div class="contact__header">
        <h1>Contact Us</h1>
        <p>
          We’d love to hear from you. Fill out this form and we’ll get back to
          you soon.
        </p>
      </div>

      <form class="contact__form">
        <div class="form-group">
          <label>Full Name</label>
          <input type="text" placeholder="Your name" required />
        </div>
        <div class="form-group">
          <label>Email</label>
          <input type="email" placeholder="you@example.com" required />
        </div>
        <div class="form-group">
          <label>Subject</label>
          <input type="text" placeholder="Subject" />
        </div>
        <div class="form-group">
          <label>Message</label>
          <textarea rows="5" placeholder="Your message..." required></textarea>
        </div>
        <button type="submit" class="btn btn--green">
          Submit
        </button>
      </form>
    </section>



    <footer class="footer">
        <div class="footer__top">
            {{-- {/* Branding */} --}}
            <div class="footer__brand">
                <div class="navbar__logo">
                    <img src="frontend/image/logo-white.png" alt="Skill Sewa Logo" />
                </div>
                <p>
                    Connecting skilled professionals with opportunities. Where skill meets
                    success and careers flourish.
                </p>
            </div>

            {{-- {/* For Professionals */} --}}
            <div class="footer__column">
                <h4>For Professionals</h4>
                <ul>
                    <li>
                        <a href="#">Create Profile</a>
                    </li>
                    <li>
                        <a href="#">Browse Jobs</a>
                    </li>
                    <li>
                        <a href="#">Skill Assessment</a>
                    </li>
                    <li>
                        <a href="#">Career Resources</a>
                    </li>
                </ul>
            </div>

            {{-- {/* For Companies */} --}}
            <div class="footer__column">
                <h4>For Companies</h4>
                <ul>
                    <li>
                        <a href="#">Post Jobs</a>
                    </li>
                    <li>
                        <a href="#">Browse Talent</a>
                    </li>
                    <li>
                        <a href="#">Hiring Solutions</a>
                    </li>
                    <li>
                        <a href="#">Enterprise Plans</a>
                    </li>
                </ul>
            </div>

            {{-- {/* Stay Updated */} --}}
            <div class="footer__subscribe">
                <h4>Stay Updated</h4>
                <p>
                    Get the latest opportunities and industry insights delivered to your
                    inbox.
                </p>
                <form>
                    <input type="email" placeholder="Enter your email" />
                    <button type="submit">Subscribe</button>
                </form>
            </div>
        </div>

        <div class="footer__bottom">
            <div class="footer__contact">
                <span>📧 contact@skillsewa.com</span>
                <span>📞 +977-9865460206</span>
                <span>📍Bharatpur, Chitwan</span>
            </div>
            <div class="footer__legal">
                <span>© 2024 Skill Sewa. All rights reserved.</span>
                <a href="#">Privacy Policy</a>
                <a href="#">Terms of Service</a>
            </div>
        </div>
    </footer>

</body>

</html>
