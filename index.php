<?php 
    $pageTitle = "Portfolio";
    $currentPage = "home";
    require_once 'components/head.php'; 
?>


<body class="bg-gray-50 text-gray-900 font-sans">

    <!-- Navigation -->
    <?php require_once 'components/navbar.php'; ?>




    <!-- Hero Section -->
    <?php require_once 'components/hero.php'; ?>

    <!-- Skills Section -->
    <section id="skills" class="py-20 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-3xl font-bold text-gray-900 sm:text-4xl">My Skills</h2>
                <div class="mt-2 h-1 w-20 bg-gray-800 mx-auto rounded"></div>
                <p class="mt-4 text-lg text-gray-600">Technologies I work with to build high-quality web applications.</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-12">
                <!-- Frontend Development -->
                <div class="space-y-6">
                    <h3 class="text-2xl font-semibold text-gray-800 border-b-2 border-gray-200 pb-2">Frontend Development</h3>
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                        <!-- HTML5 -->
                        <div class="p-6 bg-gray-50 rounded-xl border border-gray-100 hover:shadow-md transition">
                            <div class="flex items-center space-x-4 mb-3">
                                <div class="w-10 h-10 bg-orange-100 text-orange-600 rounded-lg flex items-center justify-center">
                                    <i class="fab fa-html5 text-xl"></i>
                                </div>
                                <h4 class="font-bold">HTML5</h4>
                            </div>
                            <p class="text-sm text-gray-600">Semantic markup and accessibility standards.</p>
                        </div>
                        <!-- CSS3 -->
                        <div class="p-6 bg-gray-50 rounded-xl border border-gray-100 hover:shadow-md transition">
                            <div class="flex items-center space-x-4 mb-3">
                                <div class="w-10 h-10 bg-gray-200 text-gray-700 rounded-lg flex items-center justify-center">
                                    <i class="fab fa-css3-alt text-xl"></i>
                                </div>
                                <h4 class="font-bold">CSS3 / Tailwind</h4>
                            </div>
                            <p class="text-sm text-gray-600">Modern, responsive designs and animations.</p>
                        </div>
                    </div>
                </div>

                <!-- Backend & Logic -->
                <div class="space-y-6">
                    <h3 class="text-2xl font-semibold text-gray-800 border-b-2 border-gray-200 pb-2">Backend & Frameworks</h3>
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                        <!-- PHP -->
                        <div class="p-6 bg-gray-50 rounded-xl border border-gray-100 hover:shadow-md transition">
                            <div class="flex items-center space-x-4 mb-3">
                                <div class="w-10 h-10 bg-gray-200 text-gray-700 rounded-lg flex items-center justify-center">
                                    <i class="fab fa-php text-xl"></i>
                                </div>
                                <h4 class="font-bold">PHP</h4>
                            </div>
                            <p class="text-sm text-gray-600">Robust server-side logic and API development.</p>
                        </div>
                        <!-- Laravel -->
                        <div class="p-6 bg-gray-50 rounded-xl border border-gray-100 hover:shadow-md transition">
                            <div class="flex items-center space-x-4 mb-3">
                                <div class="w-10 h-10 bg-red-100 text-red-600 rounded-lg flex items-center justify-center">
                                    <i class="fab fa-laravel text-xl"></i>
                                </div>
                                <h4 class="font-bold">Laravel</h4>
                            </div>
                            <p class="text-sm text-gray-600">Full-stack web application development.</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Web Applications Highlight -->
            <div class="mt-12 p-8 bg-gray-100 rounded-2xl border border-gray-200 flex flex-col md:flex-row items-center justify-between">
                <div class="mb-6 md:mb-0 md:mr-8 text-center md:text-left">
                    <h3 class="text-2xl font-bold text-gray-900 mb-2">Web Applications Expertise</h3>
                    <p class="text-gray-700">I specialize in building powerful, custom web applications from scratch, handling everything from database design to the user interface.</p>
                </div>
                <div class="flex-shrink-0">
                    <div class="w-20 h-20 bg-gray-800 text-white rounded-2xl flex items-center justify-center shadow-lg transform rotate-3 hover:rotate-0 transition">
                        <i class="fas fa-laptop-code text-4xl"></i>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <?php require_once 'components/footer.php'; ?>

</body>
</html>