<!-- nav bar section -->
<header class="container">
    <nav class="flex justify-between py-3 items-center">
        <img src="{{ asset('frontend/image/saroj logo.png') }}" class="w-40">
        <div class="flex justify-between gap-12 items-center">
            <a href="#" class="hover:text-black font-medium text-[var(--light-color)] ">Home</a>
            <a href="#" class="hover:text-black font-medium text-[var(--light-color)]">About</a>
            <a href="#" class="hover:text-black font-medium text-[var(--light-color)]">Contact us</a>
            <a href="#" class="hover:text-black font-medium text-[var(--light-color)]">Features</a>
            <a href="#" class="hover:text-black font-medium text-[var(--light-color)]">Testimonial</a>

        </div>
        <div class="flex gap-8">
            <a href="admin"
                class="py-1.5 px-4 rounded-xl hover:bg-[var(--hover-color)] hover:text-white transition-all font-medium">Admin</a>
            <a href="professional"
                class="py-1.5 font-medium px-4 rounded-xl hover:bg-[var(--hover-color)] hover:text-white transition-all">
                Professional
                login</a>
            <a href="user"
                class="font-medium text-white bg-[var(--primary-color)] py-2 px-4 rounded-xl hover:bg-[var(--hover-color)] transition-all transform hover:scale-105">Login
                for user
            </a>
        </div>
    </nav>
</header>
