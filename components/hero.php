<!-- Hero Section -->
<header class="relative bg-gray-900 text-white pt-12 pb-6 sm:pt-16 sm:pb-8 lg:pt-32 lg:pb-20 overflow-hidden flex items-center">
    <!-- Background Image with Overlay -->
    <div class="absolute inset-0 z-0">
        <img src="/assets/img/Emp2.jpeg" alt="Hero Background" class="w-full h-full object-cover object-center">
        <!-- Advanced Gradient Overlay -->
        <div class="absolute inset-0 bg-gradient-to-r from-gray-900/90 via-gray-900/60 to-transparent"></div>
        <div class="absolute inset-0 bg-black/20"></div>
    </div>

    <div class="relative z-10 w-full max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-6 md:py-8">
        <div class="max-w-3xl">
            <span class="inline-block px-4 py-1.5 rounded-full bg-white/10 text-white text-xs sm:text-sm font-semibold tracking-wide uppercase mb-4 backdrop-blur-sm border border-white/30">
                Web Application Specialist
            </span>
            <h1 class="text-3xl sm:text-5xl md:text-6xl lg:text-7xl font-black text-white leading-tight mb-4 tracking-tight">
                Crafting Digital Experiences
            </h1>
            <p class="text-base sm:text-lg md:text-xl text-gray-300 leading-relaxed mb-8 max-w-2xl">
                I help businesses grow by building modern, responsive, and high-performance web applications tailored to their needs.
            </p>
            
            <div class="flex flex-col sm:flex-row gap-4">
                <a href="contact.php" class="inline-flex items-center justify-center bg-white text-gray-900 px-5 sm:px-10 py-3.5 sm:py-5 rounded-2xl font-bold hover:bg-gray-100 transition-all shadow-xl hover:shadow-white/10 hover:-translate-y-1">
                    Start a Project
                    <svg class="ml-2 w-5 h-5 sm:w-6 sm:h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path></svg>
                </a>
                <a href="about.php" class="inline-flex items-center justify-center bg-white/10 backdrop-blur-md border-2 border-white/20 text-white px-5 sm:px-10 py-3.5 sm:py-5 rounded-2xl font-bold hover:bg-white/20 transition-all">
                    View My Work
                </a>
            </div>

            <!-- Floating Stats (Optional) -->
            <div class="mt-8 sm:mt-10 grid grid-cols-2 md:grid-cols-3 gap-6 sm:gap-8 pt-6 border-t border-white/10">
                <div>
                    <p class="text-2xl sm:text-3xl font-black text-white">4+</p>
                    <p class="text-[10px] sm:text-sm text-gray-400 font-medium uppercase tracking-wider">Years Exp.</p>
                </div>
                <div>
                    <p class="text-2xl sm:text-3xl font-black text-white">10+</p>
                    <p class="text-[10px] sm:text-sm text-gray-400 font-medium uppercase tracking-wider">Projects Done</p>
                </div>
            </div>
        </div>
    </div>
</header>

<style>
    /* Custom animations for high impact */
    @keyframes fadeInSlide {
        from { opacity: 0; transform: translateY(20px); }
        to { opacity: 1; transform: translateY(0); }
    }
    header h1, header p, header div.flex, header div.grid {
        animation: fadeInSlide 0.8s ease-out forwards;
    }
</style>