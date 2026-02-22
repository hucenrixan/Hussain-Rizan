<?php 
    $pageTitle = "About Me";
    $currentPage = "about";
    require_once 'components/head.php'; 
?>
<body class="bg-gray-50 text-gray-900 font-sans">

    <!-- Navigation -->
    <?php require_once 'components/navbar.php'; ?>

<!--   --><?php //require 'maintenance.php'; ?>

    <!-- About Content -->
    <section class="py-20">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8 items-center">
                <div class="flex justify-center md:justify-start">
                    <img src="assets/img/Emp3.jpeg" alt="Hussain Riza" class="rounded-2xl shadow-2xl w-full max-w-sm h-auto object-cover transform hover:scale-[1.02] transition-transform duration-300">
                </div>
                <div>
                    <div class="relative mb-6">
                        <h2 class="text-3xl md:text-4xl font-extrabold text-gray-900">About Me</h2>
                        <div class="absolute -bottom-2 left-0 w-20 h-1.5 bg-gray-800 rounded-full"></div>
                    </div>
                    
                    <p class="text-lg text-gray-600 mb-6 leading-relaxed">
                        I am <span class="font-bold text-gray-900 border-b-2 border-gray-200">Hussain Riza (Empu)</span>, a passionate and dedicated Web Developer based in the beautiful islands of <span class="font-bold text-gray-900">Maldives</span>. With over several years of experience in the digital landscape, I have cultivated a deep understanding of how to transform complex ideas into elegant, functional digital solutions.
                    </p>

                    <p class="text-lg text-gray-600 mb-8 leading-relaxed italic border-l-4 border-gray-800 pl-4 bg-gray-50 py-2">
                        "I believe that great software is built at the intersection of powerful logic and intuitive design."
                    </p>

                    <div class="space-y-4 mb-8">
                        <div class="flex items-start space-x-4">
                            <div class="flex-shrink-0 w-10 h-10 bg-gray-100 rounded-xl flex items-center justify-center text-gray-600">
                                <i class="fas fa-code"></i>
                            </div>
                            <p class="text-gray-600 leading-relaxed pt-1">
                                Specialized in creating <span class="text-gray-900 font-semibold">professional, responsive, and user-friendly</span> websites with a strong foundation in modern web technologies.
                            </p>
                        </div>
                        <div class="flex items-start space-x-4">
                            <div class="flex-shrink-0 w-10 h-10 bg-gray-100 rounded-xl flex items-center justify-center text-gray-600">
                                <i class="fas fa-layer-group"></i>
                            </div>
                            <div class="pt-1">
                                <p class="text-gray-900 font-semibold mb-1">Full-Stack Expertise</p>
                                <p class="text-gray-600 leading-relaxed">
                                    Extensive experience in <span class="font-medium">HTML5, CSS3, PHP, and Laravel</span>. I build robust, scalable web applications from the ground up, ensuring every line of code serves a purpose.
                                </p>
                            </div>
                        </div>

                        <div class="flex items-start space-x-4">
                            <div class="flex-shrink-0 w-10 h-10 bg-gray-100 rounded-xl flex items-center justify-center text-gray-600">
                                <i class="fas fa-bolt"></i>
                            </div>
                            <div class="pt-1">
                                <p class="text-gray-900 font-semibold mb-1">Performance & Optimization</p>
                                <p class="text-gray-600 leading-relaxed">
                                    I don't just build websites; I optimize them for <span class="font-medium">speed, security, and SEO</span>. My goal is to provide users with a seamless experience while helping businesses achieve their digital goals.
                                </p>
                            </div>
                        </div>

                        <div class="flex items-start space-x-4">
                            <div class="flex-shrink-0 w-10 h-10 bg-gray-100 rounded-xl flex items-center justify-center text-gray-600">
                                <i class="fab fa-github"></i>
                            </div>
                            <div class="pt-1">
                                <p class="text-gray-900 font-semibold mb-1">Open Source & Projects</p>
                                <p class="text-gray-600 leading-relaxed">
                                    You can explore my latest projects and contributions on my <a href="https://github.com/hucenrixan" target="_blank" class="text-gray-900 font-bold border-b-2 border-gray-200 hover:border-gray-900 transition-colors">GitHub profile</a>, where I share my work and experimental projects.
                                </p>
                            </div>
                        </div>
                    </div>
                    
                    <div class="grid grid-cols-2 gap-6 mb-10 p-6 bg-white rounded-2xl border border-gray-100 shadow-sm">
                        <div class="flex items-center space-x-3">
                            <div class="text-gray-400"><i class="fas fa-map-marker-alt text-xl"></i></div>
                            <div>
                                <span class="block text-xs text-gray-400 uppercase tracking-widest font-bold">Location</span>
                                <span class="text-base font-semibold text-gray-900">Maldives</span>
                            </div>
                        </div>
                        <div class="flex items-center space-x-3">
                            <div class="text-gray-400"><i class="fas fa-phone-alt text-xl"></i></div>
                            <div>
                                <span class="block text-xs text-gray-400 uppercase tracking-widest font-bold">Contact</span>
                                <span class="text-base font-semibold text-gray-900">+960 9707788</span>
                            </div>
                        </div>
                    </div>

                    <a href="contact.php" class="inline-flex items-center justify-center bg-gray-900 text-white px-8 py-4 rounded-xl font-bold hover:bg-gray-800 transition-all shadow-lg hover:shadow-xl transform hover:-translate-y-0.5">
                        <span>Get In Touch</span>
                        <i class="fas fa-arrow-right ml-3 text-sm"></i>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Detailed CV Section -->
    <section class="py-20 bg-white">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h3 class="text-3xl font-bold text-gray-900 mb-4">My Journey</h3>
                <div class="h-1.5 w-20 bg-gray-800 mx-auto rounded-full"></div>
            </div>
            
            <div class="space-y-12">
                <div class="flex group">
                    <div class="flex flex-col items-center mr-8">
                        <div class="w-12 h-12 bg-gray-900 rounded-2xl flex items-center justify-center text-white shadow-xl z-10 group-hover:scale-110 transition-transform duration-300">
                            <i class="fas fa-rocket"></i>
                        </div>
                        <div class="w-1 h-full bg-gray-100 -mt-2"></div>
                    </div>
                    <div class="pb-12 pt-1 border-b border-gray-50 flex-1 group-hover:translate-x-2 transition-transform duration-300">
                        <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between mb-2">
                            <h4 class="text-xl font-bold text-gray-900">Full Stack Developer</h4>
                            <span class="inline-block px-3 py-1 bg-gray-100 text-gray-600 text-xs font-bold rounded-full uppercase tracking-wider mt-2 sm:mt-0">Laravel & PHP Specialist</span>
                        </div>
                        <p class="text-gray-600 leading-relaxed max-w-2xl">Building complex web applications using the Laravel framework, ensuring high performance, scalability, and security from database design to final deployment.</p>
                    </div>
                </div>

                <div class="flex group">
                    <div class="flex flex-col items-center mr-8">
                        <div class="w-12 h-12 bg-gray-100 rounded-2xl flex items-center justify-center text-gray-600 shadow-sm z-10 group-hover:scale-110 transition-transform duration-300">
                            <i class="fas fa-paint-brush"></i>
                        </div>
                        <div class="w-1 h-full bg-gray-100 -mt-2"></div>
                    </div>
                    <div class="pb-12 pt-1 border-b border-gray-50 flex-1 group-hover:translate-x-2 transition-transform duration-300">
                        <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between mb-2">
                            <h4 class="text-xl font-bold text-gray-900">Frontend Developer</h4>
                            <span class="inline-block px-3 py-1 bg-gray-100 text-gray-600 text-xs font-bold rounded-full uppercase tracking-wider mt-2 sm:mt-0">HTML, CSS, Tailwind</span>
                        </div>
                        <p class="text-gray-600 leading-relaxed max-w-2xl">Designing responsive and modern user interfaces that work across all devices, focusing on user experience and clean, maintainable code.</p>
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
                        <p class="text-gray-600 leading-relaxed max-w-2xl">Always staying up-to-date with the latest industry trends and technologies, exploring new tools to deliver the best solutions for every project.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <?php require_once 'components/footer.php'; ?>

</body>
</html>