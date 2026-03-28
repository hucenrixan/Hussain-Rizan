<?php
    $pageTitle = "Portfolio & Experience";
    $currentPage = "portfolio";
    require_once 'components/head.php';
?>

<body class="bg-gray-50 text-gray-900 font-sans">

    <!-- Navigation -->
    <?php require_once 'components/navbar.php'; ?>

    <!-- Page Header -->
    <section class="bg-gray-900 text-white py-16 sm:py-24">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <span class="inline-block px-4 py-1.5 rounded-full bg-white/10 text-white text-xs sm:text-sm font-semibold tracking-wide uppercase mb-4 backdrop-blur-sm border border-white/30">
                Portfolio & Experience
            </span>
            <h1 class="text-3xl sm:text-5xl font-black tracking-tight mb-4">My Work & Experience</h1>
            <p class="text-lg text-gray-400 max-w-2xl mx-auto">Web applications, mobile apps, and software solutions I've built for real-world businesses.</p>
        </div>
    </section>

    <!-- What I Do Now -->
    <section class="py-20 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-3xl font-bold text-gray-900 sm:text-4xl">What I Do</h2>
                <div class="mt-2 h-1 w-20 bg-gray-800 mx-auto rounded"></div>
                <p class="mt-4 text-lg text-gray-600">I build digital products across multiple platforms.</p>
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8">
                <!-- Web Applications -->
                <div class="p-8 bg-gray-50 rounded-2xl border border-gray-100 hover:shadow-lg transition-all text-center group">
                    <div class="w-16 h-16 bg-gray-900 text-white rounded-2xl flex items-center justify-center mx-auto mb-6 group-hover:scale-110 transition-transform">
                        <i class="fas fa-laptop-code text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-3">Web Applications</h3>
                    <p class="text-gray-600 text-sm">Full-stack web apps with modern frameworks — from booking portals to leasing platforms.</p>
                </div>

                <!-- Software Development -->
                <div class="p-8 bg-gray-50 rounded-2xl border border-gray-100 hover:shadow-lg transition-all text-center group">
                    <div class="w-16 h-16 bg-gray-900 text-white rounded-2xl flex items-center justify-center mx-auto mb-6 group-hover:scale-110 transition-transform">
                        <i class="fas fa-cogs text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-3">Software</h3>
                    <p class="text-gray-600 text-sm">Custom software solutions tailored to business needs, built for performance and reliability.</p>
                </div>

                <!-- iOS Apps -->
                <div class="p-8 bg-gray-50 rounded-2xl border border-gray-100 hover:shadow-lg transition-all text-center group">
                    <div class="w-16 h-16 bg-gray-900 text-white rounded-2xl flex items-center justify-center mx-auto mb-6 group-hover:scale-110 transition-transform">
                        <i class="fab fa-apple text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-3">iOS Apps</h3>
                    <p class="text-gray-600 text-sm">Native and cross-platform iOS applications with smooth, intuitive user experiences.</p>
                </div>

                <!-- Android Apps -->
                <div class="p-8 bg-gray-50 rounded-2xl border border-gray-100 hover:shadow-lg transition-all text-center group">
                    <div class="w-16 h-16 bg-gray-900 text-white rounded-2xl flex items-center justify-center mx-auto mb-6 group-hover:scale-110 transition-transform">
                        <i class="fab fa-android text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-3">Android Apps</h3>
                    <p class="text-gray-600 text-sm">Android mobile applications designed for performance across all device sizes.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Projects / Works Gallery -->
    <section class="py-20 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-3xl font-bold text-gray-900 sm:text-4xl">My Works</h2>
                <div class="mt-2 h-1 w-20 bg-gray-800 mx-auto rounded"></div>
                <p class="mt-4 text-lg text-gray-600">Real projects I've designed, developed, and delivered.</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">

                <!-- Project 1: Events Booking -->
                <div class="bg-white rounded-2xl border border-gray-100 shadow-sm hover:shadow-xl transition-all overflow-hidden group">
                    <div class="overflow-hidden">
                        <img src="/assets/img/events-booking.png" alt="Events Booking Portal"
                            class="w-full h-56 object-cover object-top group-hover:scale-105 transition-transform duration-500"
                            onerror="this.style.display='none'; this.nextElementSibling.style.display='flex';">
                        <div class="hidden w-full h-56 bg-gray-100 items-center justify-center">
                            <i class="fas fa-calendar-check text-5xl text-gray-400"></i>
                        </div>
                    </div>
                    <div class="p-6">
                        <div class="flex flex-wrap gap-2 mb-3">
                            <span class="px-3 py-1 bg-gray-100 text-gray-600 text-xs font-semibold rounded-full">Web App</span>
                            <span class="px-3 py-1 bg-gray-100 text-gray-600 text-xs font-semibold rounded-full">Next.js</span>
                            <span class="px-3 py-1 bg-gray-100 text-gray-600 text-xs font-semibold rounded-full">MongoDB</span>
                        </div>
                        <h3 class="text-xl font-bold text-gray-900 mb-2">Events Booking Portal</h3>
                        <p class="text-gray-600 text-sm mb-4">Full-stack client portal for event management — bookings, quotations, payments, moodboards, and client onboarding.</p>
                        <a href="https://portal.specialeventsmv.com" target="_blank"
                           class="inline-flex items-center gap-2 bg-gray-900 text-white px-5 py-2.5 rounded-xl text-sm font-semibold hover:bg-gray-700 transition">
                            <i class="fas fa-external-link-alt text-xs"></i> Live Site
                        </a>
                    </div>
                </div>

                <!-- Project 2: Motorcycle Leasing -->
                <div class="bg-white rounded-2xl border border-gray-100 shadow-sm hover:shadow-xl transition-all overflow-hidden group">
                    <div class="overflow-hidden">
                        <img src="/assets/img/moto-leasing.png" alt="Motorcycle Leasing Platform"
                            class="w-full h-56 object-cover object-top group-hover:scale-105 transition-transform duration-500"
                            onerror="this.style.display='none'; this.nextElementSibling.style.display='flex';">
                        <div class="hidden w-full h-56 bg-gray-100 items-center justify-center">
                            <i class="fas fa-motorcycle text-5xl text-gray-400"></i>
                        </div>
                    </div>
                    <div class="p-6">
                        <div class="flex flex-wrap gap-2 mb-3">
                            <span class="px-3 py-1 bg-gray-100 text-gray-600 text-xs font-semibold rounded-full">Web App</span>
                            <span class="px-3 py-1 bg-gray-100 text-gray-600 text-xs font-semibold rounded-full">Laravel</span>
                            <span class="px-3 py-1 bg-gray-100 text-gray-600 text-xs font-semibold rounded-full">PHP</span>
                        </div>
                        <h3 class="text-xl font-bold text-gray-900 mb-2">Motorcycle Leasing Platform</h3>
                        <p class="text-gray-600 text-sm mb-4">Customers browse bikes, submit leasing applications, and manage their lease entirely online.</p>
                        <a href="https://leasing.invowmarketing.com/" target="_blank"
                           class="inline-flex items-center gap-2 bg-gray-900 text-white px-5 py-2.5 rounded-xl text-sm font-semibold hover:bg-gray-700 transition">
                            <i class="fas fa-external-link-alt text-xs"></i> Live Site
                        </a>
                    </div>
                </div>

                <!-- Placeholder: Add More Projects -->
                <div class="bg-white rounded-2xl border-2 border-dashed border-gray-200 hover:border-gray-400 transition-all overflow-hidden flex items-center justify-center min-h-[400px] group">
                    <div class="text-center p-8">
                        <div class="w-16 h-16 bg-gray-100 text-gray-400 rounded-2xl flex items-center justify-center mx-auto mb-4 group-hover:bg-gray-200 transition">
                            <i class="fas fa-plus text-2xl"></i>
                        </div>
                        <h3 class="text-lg font-bold text-gray-400 mb-2">More Coming Soon</h3>
                        <p class="text-gray-400 text-sm">New projects are in development and will be added here.</p>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- Work Photos Gallery -->
    <section class="py-20 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-3xl font-bold text-gray-900 sm:text-4xl">Behind the Scenes</h2>
                <div class="mt-2 h-1 w-20 bg-gray-800 mx-auto rounded"></div>
                <p class="mt-4 text-lg text-gray-600">A glimpse into my workspace and development process.</p>
            </div>

            <div class="grid grid-cols-2 md:grid-cols-3 gap-4">
                <!-- Photo slots — replace src with your actual work photos -->
                <div class="aspect-square rounded-2xl overflow-hidden group">
                    <img src="/assets/img/works/work1.jpg" alt="Work Photo"
                        class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500"
                        onerror="this.parentElement.innerHTML='<div class=\'w-full h-full bg-gray-100 flex items-center justify-center\'><div class=\'text-center\'><i class=\'fas fa-image text-3xl text-gray-300 mb-2\'></i><p class=\'text-xs text-gray-400\'>Add Photo</p></div></div>';">
                </div>
                <div class="aspect-square rounded-2xl overflow-hidden group">
                    <img src="/assets/img/works/work2.jpg" alt="Work Photo"
                        class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500"
                        onerror="this.parentElement.innerHTML='<div class=\'w-full h-full bg-gray-100 flex items-center justify-center\'><div class=\'text-center\'><i class=\'fas fa-image text-3xl text-gray-300 mb-2\'></i><p class=\'text-xs text-gray-400\'>Add Photo</p></div></div>';">
                </div>
                <div class="aspect-square rounded-2xl overflow-hidden group">
                    <img src="/assets/img/works/work3.jpg" alt="Work Photo"
                        class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500"
                        onerror="this.parentElement.innerHTML='<div class=\'w-full h-full bg-gray-100 flex items-center justify-center\'><div class=\'text-center\'><i class=\'fas fa-image text-3xl text-gray-300 mb-2\'></i><p class=\'text-xs text-gray-400\'>Add Photo</p></div></div>';">
                </div>
                <div class="aspect-square rounded-2xl overflow-hidden group">
                    <img src="/assets/img/works/work4.jpg" alt="Work Photo"
                        class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500"
                        onerror="this.parentElement.innerHTML='<div class=\'w-full h-full bg-gray-100 flex items-center justify-center\'><div class=\'text-center\'><i class=\'fas fa-image text-3xl text-gray-300 mb-2\'></i><p class=\'text-xs text-gray-400\'>Add Photo</p></div></div>';">
                </div>
                <div class="aspect-square rounded-2xl overflow-hidden group">
                    <img src="/assets/img/works/work5.jpg" alt="Work Photo"
                        class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500"
                        onerror="this.parentElement.innerHTML='<div class=\'w-full h-full bg-gray-100 flex items-center justify-center\'><div class=\'text-center\'><i class=\'fas fa-image text-3xl text-gray-300 mb-2\'></i><p class=\'text-xs text-gray-400\'>Add Photo</p></div></div>';">
                </div>
                <div class="aspect-square rounded-2xl overflow-hidden group">
                    <img src="/assets/img/works/work6.jpg" alt="Work Photo"
                        class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500"
                        onerror="this.parentElement.innerHTML='<div class=\'w-full h-full bg-gray-100 flex items-center justify-center\'><div class=\'text-center\'><i class=\'fas fa-image text-3xl text-gray-300 mb-2\'></i><p class=\'text-xs text-gray-400\'>Add Photo</p></div></div>';">
                </div>
            </div>
        </div>
    </section>

    <!-- Experience Timeline -->
    <section class="py-20 bg-gray-50">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-3xl font-bold text-gray-900 sm:text-4xl">Experience & Skills</h2>
                <div class="mt-2 h-1 w-20 bg-gray-800 mx-auto rounded"></div>
            </div>

            <!-- Tech Stack -->
            <div class="mb-16">
                <h3 class="text-2xl font-bold text-gray-900 mb-8 text-center">Technologies I Work With</h3>
                <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 gap-4">
                    <div class="flex items-center gap-3 p-4 bg-white rounded-xl border border-gray-100 hover:shadow-md transition">
                        <i class="fab fa-html5 text-2xl text-orange-500"></i>
                        <span class="font-semibold">HTML5</span>
                    </div>
                    <div class="flex items-center gap-3 p-4 bg-white rounded-xl border border-gray-100 hover:shadow-md transition">
                        <i class="fab fa-css3-alt text-2xl text-blue-500"></i>
                        <span class="font-semibold">CSS3</span>
                    </div>
                    <div class="flex items-center gap-3 p-4 bg-white rounded-xl border border-gray-100 hover:shadow-md transition">
                        <i class="fab fa-js text-2xl text-yellow-500"></i>
                        <span class="font-semibold">JavaScript</span>
                    </div>
                    <div class="flex items-center gap-3 p-4 bg-white rounded-xl border border-gray-100 hover:shadow-md transition">
                        <i class="fab fa-node-js text-2xl text-green-600"></i>
                        <span class="font-semibold">Node.js</span>
                    </div>
                    <div class="flex items-center gap-3 p-4 bg-white rounded-xl border border-gray-100 hover:shadow-md transition">
                        <i class="fab fa-react text-2xl text-cyan-500"></i>
                        <span class="font-semibold">Next.js</span>
                    </div>
                    <div class="flex items-center gap-3 p-4 bg-white rounded-xl border border-gray-100 hover:shadow-md transition">
                        <i class="fab fa-php text-2xl text-indigo-500"></i>
                        <span class="font-semibold">PHP</span>
                    </div>
                    <div class="flex items-center gap-3 p-4 bg-white rounded-xl border border-gray-100 hover:shadow-md transition">
                        <i class="fab fa-laravel text-2xl text-red-500"></i>
                        <span class="font-semibold">Laravel</span>
                    </div>
                    <div class="flex items-center gap-3 p-4 bg-white rounded-xl border border-gray-100 hover:shadow-md transition">
                        <i class="fas fa-wind text-2xl text-sky-500"></i>
                        <span class="font-semibold">Tailwind</span>
                    </div>
                    <div class="flex items-center gap-3 p-4 bg-white rounded-xl border border-gray-100 hover:shadow-md transition">
                        <i class="fas fa-database text-2xl text-green-500"></i>
                        <span class="font-semibold">MongoDB</span>
                    </div>
                    <div class="flex items-center gap-3 p-4 bg-white rounded-xl border border-gray-100 hover:shadow-md transition">
                        <i class="fas fa-database text-2xl text-blue-600"></i>
                        <span class="font-semibold">MySQL</span>
                    </div>
                    <div class="flex items-center gap-3 p-4 bg-white rounded-xl border border-gray-100 hover:shadow-md transition">
                        <i class="fab fa-apple text-2xl text-gray-800"></i>
                        <span class="font-semibold">iOS Dev</span>
                    </div>
                    <div class="flex items-center gap-3 p-4 bg-white rounded-xl border border-gray-100 hover:shadow-md transition">
                        <i class="fab fa-android text-2xl text-green-500"></i>
                        <span class="font-semibold">Android Dev</span>
                    </div>
                </div>
            </div>

            <!-- Timeline -->
            <h3 class="text-2xl font-bold text-gray-900 mb-8 text-center">My Journey</h3>
            <div class="space-y-12">
                <div class="flex group">
                    <div class="flex flex-col items-center mr-8">
                        <div class="w-12 h-12 bg-gray-900 rounded-2xl flex items-center justify-center text-white shadow-xl z-10 group-hover:scale-110 transition-transform duration-300">
                            <i class="fas fa-rocket"></i>
                        </div>
                        <div class="w-1 h-full bg-gray-200 -mt-2"></div>
                    </div>
                    <div class="pb-12 pt-1 flex-1 group-hover:translate-x-2 transition-transform duration-300">
                        <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between mb-2">
                            <h4 class="text-xl font-bold text-gray-900">Full Stack Web Developer</h4>
                            <span class="inline-block px-3 py-1 bg-gray-900 text-white text-xs font-bold rounded-full uppercase tracking-wider mt-2 sm:mt-0">Current</span>
                        </div>
                        <p class="text-gray-600 leading-relaxed">Building full-stack web applications, software solutions, and mobile apps for iOS & Android. Working with Next.js, Laravel, Node.js, MongoDB, and modern frameworks to deliver real business solutions.</p>
                    </div>
                </div>

                <div class="flex group">
                    <div class="flex flex-col items-center mr-8">
                        <div class="w-12 h-12 bg-gray-100 rounded-2xl flex items-center justify-center text-gray-600 shadow-sm z-10 group-hover:scale-110 transition-transform duration-300">
                            <i class="fas fa-mobile-alt"></i>
                        </div>
                        <div class="w-1 h-full bg-gray-200 -mt-2"></div>
                    </div>
                    <div class="pb-12 pt-1 flex-1 group-hover:translate-x-2 transition-transform duration-300">
                        <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between mb-2">
                            <h4 class="text-xl font-bold text-gray-900">Mobile App Development</h4>
                            <span class="inline-block px-3 py-1 bg-gray-100 text-gray-600 text-xs font-bold rounded-full uppercase tracking-wider mt-2 sm:mt-0">iOS & Android</span>
                        </div>
                        <p class="text-gray-600 leading-relaxed">Developing native and cross-platform mobile applications for both iOS and Android, focusing on performance, clean UI, and seamless user experience.</p>
                    </div>
                </div>

                <div class="flex group">
                    <div class="flex flex-col items-center mr-8">
                        <div class="w-12 h-12 bg-gray-100 rounded-2xl flex items-center justify-center text-gray-600 shadow-sm z-10 group-hover:scale-110 transition-transform duration-300">
                            <i class="fas fa-code"></i>
                        </div>
                        <div class="w-1 h-full bg-gray-200 -mt-2"></div>
                    </div>
                    <div class="pb-12 pt-1 flex-1 group-hover:translate-x-2 transition-transform duration-300">
                        <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between mb-2">
                            <h4 class="text-xl font-bold text-gray-900">Backend & API Development</h4>
                            <span class="inline-block px-3 py-1 bg-gray-100 text-gray-600 text-xs font-bold rounded-full uppercase tracking-wider mt-2 sm:mt-0">Node.js & PHP</span>
                        </div>
                        <p class="text-gray-600 leading-relaxed">Server-side development with Node.js and PHP, building RESTful APIs, handling database architecture, authentication systems, and deployment pipelines.</p>
                    </div>
                </div>

                <div class="flex group">
                    <div class="flex flex-col items-center mr-8">
                        <div class="w-12 h-12 bg-gray-100 rounded-2xl flex items-center justify-center text-gray-600 shadow-sm z-10 group-hover:scale-110 transition-transform duration-300">
                            <i class="fas fa-paint-brush"></i>
                        </div>
                        <div class="w-1 h-full bg-gray-200 -mt-2"></div>
                    </div>
                    <div class="pb-12 pt-1 flex-1 group-hover:translate-x-2 transition-transform duration-300">
                        <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between mb-2">
                            <h4 class="text-xl font-bold text-gray-900">Frontend Development</h4>
                            <span class="inline-block px-3 py-1 bg-gray-100 text-gray-600 text-xs font-bold rounded-full uppercase tracking-wider mt-2 sm:mt-0">UI/UX</span>
                        </div>
                        <p class="text-gray-600 leading-relaxed">Crafting responsive, modern user interfaces with Tailwind CSS, React, and Next.js — optimized for speed and accessibility across all devices.</p>
                    </div>
                </div>

                <div class="flex group">
                    <div class="flex flex-col items-center mr-8">
                        <div class="w-12 h-12 bg-gray-100 rounded-2xl flex items-center justify-center text-gray-600 shadow-sm z-10 group-hover:scale-110 transition-transform duration-300">
                            <i class="fas fa-graduation-cap"></i>
                        </div>
                    </div>
                    <div class="pt-1 flex-1 group-hover:translate-x-2 transition-transform duration-300">
                        <h4 class="text-xl font-bold text-gray-900 mb-2">Continuous Learning</h4>
                        <p class="text-gray-600 leading-relaxed">Always expanding my skills — recently learned Node.js and continuously exploring new technologies to stay ahead in the industry.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA -->
    <section class="py-20 bg-gray-900 text-white">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h2 class="text-3xl sm:text-4xl font-black mb-4">Have a Project in Mind?</h2>
            <p class="text-lg text-gray-400 mb-8 max-w-2xl mx-auto">Whether it's a web app, mobile app, or custom software — let's build something great together.</p>
            <a href="contact.php" class="inline-flex items-center justify-center bg-white text-gray-900 px-10 py-4 rounded-2xl font-bold hover:bg-gray-100 transition-all shadow-xl hover:-translate-y-1">
                Let's Talk
                <svg class="ml-2 w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path></svg>
            </a>
        </div>
    </section>

    <!-- Footer -->
    <?php require_once 'components/footer.php'; ?>

</body>
</html>
