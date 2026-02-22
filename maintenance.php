<?php
/**
 * maintenance.php - A professional "Under Construction" page for Hussain Riza
 * This file should be included at the top of pages that are being updated.
 */
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Under Maintenance | Hussain Riza</title>
    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- Font Awesome for Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
</head>
<body class="bg-gray-50 flex items-center justify-center min-h-screen p-6 overflow-hidden">

    <div class="fixed inset-0 bg-gray-50 flex items-center justify-center z-[100] p-6">
        <div class="max-w-md w-full text-center">
            <!-- Icon/Illustration Container -->
            <div class="mb-8 relative">
                <div class="w-24 h-24 bg-gray-900 rounded-2xl flex items-center justify-center mx-auto shadow-xl transform rotate-3 hover:rotate-0 transition duration-300">
                    <i class="fas fa-tools text-4xl text-white animate-pulse"></i>
                </div>
                <!-- Decorative circle -->
                <div class="absolute top-0 left-1/2 -translate-x-1/2 w-32 h-32 bg-gray-200 rounded-full -z-10 opacity-50 blur-xl"></div>
            </div>

            <!-- Text Content -->
            <h1 class="text-3xl font-extrabold text-gray-900 mb-4">Page Under Improvement</h1>
            <p class="text-gray-600 mb-8 leading-relaxed">
                I am currently updating this section of my portfolio to provide you with a better experience. It will be back online shortly!
            </p>

            <!-- Status Card -->
            <div class="bg-white p-6 rounded-2xl shadow-sm border border-gray-100 mb-8">
                <div class="flex items-center justify-center space-x-3 text-sm font-medium text-gray-500 uppercase tracking-widest">
                    <span class="relative flex h-3 w-3">
                        <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-green-400 opacity-75"></span>
                        <span class="relative inline-flex rounded-full h-3 w-3 bg-green-500"></span>
                    </span>
                    <span>Work in Progress</span>
                </div>
            </div>

            <!-- Back to Home Button -->
            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <a href="index.php" class="inline-flex items-center justify-center px-6 py-3 border border-transparent text-base font-bold rounded-xl text-white bg-gray-900 hover:bg-gray-800 transition-all shadow-lg">
                    <i class="fas fa-arrow-left mr-2 text-sm"></i> Back to Home
                </a>
                <a href="contact.php" class="inline-flex items-center justify-center px-6 py-3 border-2 border-gray-900 text-base font-bold rounded-xl text-gray-900 hover:bg-gray-900 hover:text-white transition-all">
                    Contact Me
                </a>
            </div>

            <!-- Social Links Footer -->
            <div class="mt-12 pt-8 border-t border-gray-200">
                <p class="text-sm text-gray-400 mb-4 uppercase tracking-widest font-bold">Stay Connected</p>
                <div class="flex justify-center space-x-6 text-gray-400">
                    <a href="https://wa.me/9609707788" target="_blank" class="hover:text-green-500 transition-colors text-xl"><i class="fab fa-whatsapp"></i></a>
                    <a href="https://github.com/hucenrixan" target="_blank" class="hover:text-gray-900 transition-colors text-xl"><i class="fab fa-github"></i></a>
                    <a href="mailto:hucenrixan@gmail.com" class="hover:text-blue-500 transition-colors text-xl"><i class="fas fa-envelope"></i></a>
                </div>
            </div>
        </div>
    </div>

</body>
</html>
<?php
exit(); // Stops the rest of the page from loading
?>
