<nav class="bg-white shadow-md sticky top-0 z-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-16">
            <div class="flex items-center">

               <a href="index.php"> <img src="/assets/img/emp-logo.png" alt="Logo" class="h-12 sm:h-16 md:h-20 w-auto">
               </a>
            </div>
            <div class="hidden md:flex items-center space-x-8">
                <a href="index.php" class="<?php echo $currentPage == 'home' ? 'text-gray-900 font-semibold border-b-2 border-gray-900 py-1' : 'text-gray-600 hover:text-gray-900 transition'; ?>">Home</a>
                <a href="about.php" class="<?php echo $currentPage == 'about' ? 'text-gray-900 font-semibold border-b-2 border-gray-900 py-1' : 'text-gray-600 hover:text-gray-900 transition'; ?>">About Me</a>
                <a href="index.php#skills" class="text-gray-600 hover:text-gray-900 transition">Skills</a>
                <a href="contact.php" class="<?php echo $currentPage == 'contact' ? 'text-gray-900 font-semibold border-b-2 border-gray-900 py-1' : 'text-gray-600 hover:text-gray-900 transition'; ?>">Contact</a>
            </div>
            <div class="hidden md:flex items-center space-x-4">
                <a href="https://wa.me/9609707788" target="_blank" class="text-gray-600 hover:text-green-500 transition text-xl"><i class="fab fa-whatsapp"></i></a>
                <a href="#" target="_blank" class="text-gray-600 hover:text-blue-600 transition text-xl"><i class="fab fa-facebook"></i></a>
                <a href="https://github.com/hucenrixan" target="_blank" class="text-gray-600 hover:text-gray-900 transition text-xl"><i class="fab fa-github"></i></a>
            </div>
            <!-- Mobile menu button -->
            <div class="md:hidden flex items-center">
                <button id="mobile-menu-button" class="text-gray-600 focus:outline-none">
                    <svg id="menu-icon" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7"></path>
                    </svg>
                    <svg id="close-icon" class="h-6 w-6 hidden" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Mobile Menu -->
    <div id="mobile-menu" class="hidden md:hidden bg-white border-t border-gray-100 px-4 pt-2 pb-6 space-y-1 shadow-lg">
        <a href="index.php" class="block px-3 py-2 rounded-md text-base font-medium <?php echo $currentPage == 'home' ? 'bg-gray-100 text-gray-900' : 'text-gray-600 hover:bg-gray-50 hover:text-gray-900'; ?>">Home</a>
        <a href="about.php" class="block px-3 py-2 rounded-md text-base font-medium <?php echo $currentPage == 'about' ? 'bg-gray-100 text-gray-900' : 'text-gray-600 hover:bg-gray-50 hover:text-gray-900'; ?>">About Me</a>
        <a href="index.php#skills" class="block px-3 py-2 rounded-md text-base font-medium text-gray-600 hover:bg-gray-50 hover:text-gray-900">Skills</a>
        <a href="contact.php" class="block px-3 py-2 rounded-md text-base font-medium <?php echo $currentPage == 'contact' ? 'bg-gray-100 text-gray-900' : 'text-gray-600 hover:bg-gray-50 hover:text-gray-900'; ?>">Contact</a>
        <div class="pt-4 flex space-x-6 px-3">
            <a href="https://wa.me/9609707788" target="_blank" class="text-gray-600 hover:text-green-500 text-2xl transition"><i class="fab fa-whatsapp"></i></a>
            <a href="#" target="_blank" class="text-gray-600 hover:text-blue-600 text-2xl transition"><i class="fab fa-facebook"></i></a>
            <a href="https://github.com/hucenrixan" target="_blank" class="text-gray-600 hover:text-gray-900 text-2xl transition"><i class="fab fa-github"></i></a>
        </div>
    </div>

    <script>
        document.getElementById('mobile-menu-button').addEventListener('click', function() {
            const menu = document.getElementById('mobile-menu');
            const menuIcon = document.getElementById('menu-icon');
            const closeIcon = document.getElementById('close-icon');
            
            if (menu.classList.contains('hidden')) {
                menu.classList.remove('hidden');
                menuIcon.classList.add('hidden');
                closeIcon.classList.remove('hidden');
            } else {
                menu.classList.add('hidden');
                menuIcon.classList.remove('hidden');
                closeIcon.classList.add('hidden');
            }
        });
    </script>
</nav>