<!-- nav bar section -->
<header class="container">
    <nav class="flex justify-between py-3 items-center sticky relative top-0">
{{-- @foreach ($company as $com ) --}}
<img src="{{ asset(Storage::url($company->logo))}}" class="w-40">
{{-- @endforeach --}}
        <div class="flex justify-between gap-12 items-center">
            <a href="#" class="hover:text-black font-medium text-[var(--light-color)] ">Home</a>
            <a href="{{route('aboutsection')}}" class="hover:text-black font-medium text-[var(--light-color)]">About</a>
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
                    class="font-medium text-white bg-[var(--blue-primary)] py-2 px-4 rounded-xl transition-all transform hover:translate-y-1">Get Started
                </a>
                @else

                                    <a class="font-medium text-white bg-[var(--blue-primary)] py-2 px-4 rounded-xl ] transition-all transform hover:translate-y-1" title="Click for Logout" href="{{ route('logout') }}"
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
