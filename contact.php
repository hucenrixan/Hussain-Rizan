<?php 
    require_once 'config/database.php';

    $message_status = '';
    
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $name = isset($_POST['name']) ? $_POST['name'] : '';
        $email = isset($_POST['email']) ? $_POST['email'] : '';
        $subject = isset($_POST['subject']) ? $_POST['subject'] : '';
        $message = isset($_POST['message']) ? $_POST['message'] : '';

        if (isset($pdo) && $pdo) {
            try {
                $stmt = $pdo->prepare("INSERT INTO messages (name, email, subject, message) VALUES (?, ?, ?, ?)");
                $stmt->execute([$name, $email, $subject, $message]);
                $message_status = 'success';
            } catch (PDOException $e) {
                $message_status = 'error';
            }
        } else {
            $message_status = 'db_error';
        }
    }

    $pageTitle = "Contact";
    $currentPage = "contact";
    require_once 'components/head.php'; 
?>
<body class="bg-gray-50 text-gray-900 font-sans">


    <!--maintenance mode-->
   <?php require 'maintenance.php'; ?>

    <!-- Navigation -->
    <?php require_once 'components/navbar.php'; ?>

    <!-- Contact Section -->
    <section id="contact" class="py-20 min-h-[calc(100vh-160px)] flex items-center">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 w-full">
            <div class="text-center mb-16">
                <h2 class="text-3xl font-bold text-gray-900 sm:text-4xl">Get in Touch</h2>
                <div class="mt-2 h-1 w-20 bg-gray-800 mx-auto rounded"></div>
                <p class="mt-4 text-lg text-gray-600">Have a project in mind? Let's talk about it.</p>
                
                <?php if ($message_status == 'success'): ?>
                    <div class="mt-8 max-w-md mx-auto bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative" role="alert">
                        <strong class="font-bold">Success!</strong>
                        <span class="block sm:inline"> Your message has been sent successfully.</span>
                    </div>
                <?php elseif ($message_status == 'error' || $message_status == 'db_error'): ?>
                    <div class="mt-8 max-w-md mx-auto bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative" role="alert">
                        <strong class="font-bold">Oops!</strong>
                        <span class="block sm:inline"> Something went wrong. Please try again later.</span>
                    </div>
                <?php endif; ?>
            </div>

            <div class="bg-white rounded-2xl shadow-xl overflow-hidden max-w-5xl mx-auto">
                <div class="grid grid-cols-1 md:grid-cols-2">
                    <div class="p-12 bg-gray-800 text-white">
                        <h3 class="text-2xl font-bold mb-6">Contact Information</h3>
                        <p class="mb-8 text-gray-300">I'm currently available for freelance work and full-time opportunities.</p>
                        
                        <div class="space-y-6">
                            <div class="flex items-center">
                                <div class="w-12 h-12 bg-gray-700 rounded-lg flex items-center justify-center mr-4">
                                    <i class="fas fa-phone-alt text-xl"></i>
                                </div>
                                <span>+960 9707788</span>
                            </div>
                            <div class="flex items-center">
                                <div class="w-12 h-12 bg-gray-700 rounded-lg flex items-center justify-center mr-4">
                                    <i class="fas fa-envelope text-xl"></i>
                                </div>
                                <span>hucenrixan@gmail.com</span>
                            </div>
                            <div class="flex items-center">
                                <div class="w-12 h-12 bg-gray-700 rounded-lg flex items-center justify-center mr-4">
                                    <i class="fas fa-map-marker-alt text-xl"></i>
                                </div>
                                <span>Male/Maldives</span>
                            </div>
                        </div>

                        <div class="mt-12">
                            <h4 class="text-lg font-semibold mb-4">Follow Me</h4>
                            <div class="flex space-x-4">
                                <a href="https://wa.me/9609707788" target="_blank" class="w-10 h-10 bg-gray-700 hover:bg-green-500 rounded-full flex items-center justify-center transition">
                                    <i class="fab fa-whatsapp"></i>
                                </a>
                                <a href="#" target="_blank" class="w-10 h-10 bg-gray-700 hover:bg-blue-600 rounded-full flex items-center justify-center transition">
                                    <i class="fab fa-facebook-f"></i>
                                </a>
                                <a href="#" target="_blank" class="w-10 h-10 bg-gray-700 hover:bg-gray-600 rounded-full flex items-center justify-center transition">
                                    <i class="fab fa-github"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="p-12">
                        <form action="contact.php" method="POST" class="space-y-4">
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-1">Name</label>
                                <input type="text" name="name" required class="w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-gray-500 focus:border-gray-500" placeholder="Your Name">
                            </div>
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-1">Email</label>
                                <input type="email" name="email" required class="w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-gray-500 focus:border-gray-500" placeholder="your@email.com">
                            </div>
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-1">Subject</label>
                                <input type="text" name="subject" class="w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-gray-500 focus:border-gray-500" placeholder="Project Inquiry">
                            </div>
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-1">Message</label>
                                <textarea name="message" rows="4" required class="w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-gray-500 focus:border-gray-500" placeholder="Tell me about your project..."></textarea>
                            </div>
                            <button type="submit" class="w-full bg-gray-800 text-white font-bold py-3 rounded-md hover:bg-gray-900 transition shadow-lg">Send Message</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <?php require_once 'components/footer.php'; ?>

</body>
</html>
