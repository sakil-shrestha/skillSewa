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
                <a href="/" class="hover:text-black font-medium text-[var(--light-color)] ">Home</a>
                <a href="{{ route('aboutsection') }}"
                    class="hover:text-black font-medium text-[var(--light-color)]">About</a>
                <a href="{{route('frontend.contact')}}" class="hover:text-black font-medium text-[var(--light-color)]">Contact us</a>
                <a href="/feature" class="hover:text-black font-medium text-[var(--light-color)]">Features</a>
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

    <section class="about">
        <div class="about__intro">
            <h1>About Skill Sewa</h1>
            <p>
                Connecting skilled professionals with businesses that need their
                expertise. We’re building the future of work, one connection at a
                time.
            </p>
        </div>

        <div class="about__mission">
            <div class="mission__content">
                <div class="mission__text">
                    <div class="mission__text-title">
                        <img src="/frontend/image/target.svg" alt="our mission" />
                        <h2>Our Mission</h2>
                    </div>
                    <p>
                        At Skill Sewa, we believe that talent should have no boundaries.
                        Our mission is to create a seamless platform where skilled
                        professionals can showcase their expertise and connect with
                        businesses looking for their unique abilities.
                    </p>
                    <p>
                        We’re committed to making the hiring process transparent,
                        efficient, and rewarding for both professionals and employers.
                    </p>
                </div>

                <div class="mission__cards">
                    <div class="mission__card">
                        <h3>For Professionals</h3>
                        <p>
                            Showcase your skills, build your portfolio, and connect with
                            opportunities that match your expertise.
                        </p>
                    </div>
                    <div class="mission__card">
                        <h3>For Employers</h3>
                        <p>
                            Find pre-vetted professionals, review portfolios, and hire
                            with confidence for your projects.
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <div class="about__values">
            <h2>Our Values</h2>
            <div class="value-grid">
                <div class="value-card">
                    <h4>Trust</h4>
                    <p>
                        Building lasting relationships through transparency and
                        reliability.
                    </p>
                </div>
                <div class="value-card">
                    <h4>Excellence</h4>
                    <p>Committed to the highest quality in everything we do.</p>
                </div>
                <div class="value-card">
                    <h4>Community</h4>
                    <p>Fostering connections and supporting growth together.</p>
                </div>
                <div class="value-card">
                    <h4>Innovation</h4>
                    <p>Continuously innovating to serve you better.</p>
                </div>
            </div>
        </div>

        <div class="about__cta">
            <h2>Ready to Get Started?</h2>
            <p>
                Join thousands of professionals and businesses already using Skill
                Sewa to build <br /> their future.
            </p>
            <div class="cta-buttons">
                <a href="/create-profile" class="btn btn--primary">
                    Join as Professional
                </a>
                <a href="/start-hiring" class="btn btn--secondary">
                    Start Hiring
                </a>
            </div>
        </div>
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
