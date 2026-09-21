<?php
$page_title = "Privacy Policy | Vision Eye Centre";
$page_description = "Privacy Policy for Vision Eye Centre, Delhi.";
?>
<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $page_title; ?></title>
    <meta name="description" content="<?php echo $page_description; ?>">
    <link rel="icon" type="image/svg+xml" href="favicon.svg" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&family=Quicksand:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        primary: '#0F4C81',
                        accent: '#0284C7',
                        teal: '#0D9488',
                        gold: '#D97706',
                    }
                }
            }
        }
    </script>
</head>
<body class="bg-slate-50 font-sans text-slate-800 min-h-screen flex flex-col">
    <!-- Header -->
    <header class="w-full bg-white border-b border-slate-200 py-3 sm:py-4 shadow-xs">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 flex items-center justify-between gap-2 sm:gap-4">
            <a href="index.php" class="flex items-center gap-2 sm:gap-3 min-w-0">
                <img src="assets/images/small-logo.png" alt="Vision Eye Centre Logo" class="h-8 sm:h-10 md:h-12 w-auto object-contain flex-shrink-0">
                <div class="flex flex-col min-w-0">
                    <span class="font-bold text-primary text-sm sm:text-xl tracking-tight leading-tight truncate">Vision Eye Centre</span>
                    <small class="hidden sm:block text-[11px] text-slate-500 font-medium">Excellence … with a humane touch</small>
                </div>
            </a>
            
            <div class="flex-shrink-0">
                <a href="tel:+919711004422" class="inline-flex items-center gap-1.5 sm:gap-2 px-3 py-1.5 sm:px-4 sm:py-2 bg-sky-50 text-accent hover:bg-sky-100 font-bold rounded-full transition-all text-xs sm:text-sm border border-sky-100 whitespace-nowrap">
                    <i class="fa-solid fa-phone"></i>
                    <span class="hidden sm:inline">+91 9711004422</span>
                    <span class="sm:hidden font-semibold">Call Now</span>
                </a>
            </div>
        </div>
    </header>

    <main class="flex-grow py-16">
        <div class="container mx-auto px-4 md:px-6 max-w-4xl bg-white p-8 md:p-12 rounded-3xl shadow-lg border border-slate-100">
            <h1 class="text-3xl font-extrabold text-primary mb-6">Privacy Policy</h1>
            <div class="space-y-6 text-slate-600 leading-relaxed text-sm">
                <p><strong>Last Updated: <?php echo date("F d, Y"); ?></strong></p>
                <p>At Vision Eye Centre, we are committed to protecting your privacy and ensuring the security of your personal information. This Privacy Policy outlines how we collect, use, and safeguard your data when you visit our website or interact with our services.</p>
                
                <h2 class="text-xl font-bold text-primary mt-8 mb-4">1. Information We Collect</h2>
                <p>We may collect personal information such as your name, email address, phone number, and medical history when you book a consultation, fill out a form, or contact us. We also collect non-personal information such as browser type, IP address, and pages visited for analytics purposes.</p>

                <h2 class="text-xl font-bold text-primary mt-8 mb-4">2. How We Use Your Information</h2>
                <ul class="list-disc pl-5 space-y-2">
                    <li>To schedule and manage your appointments.</li>
                    <li>To communicate with you regarding your treatment or inquiries.</li>
                    <li>To improve our website and healthcare services.</li>
                    <li>To send periodic emails or SMS regarding updates or offers (you may opt out at any time).</li>
                </ul>

                <h2 class="text-xl font-bold text-primary mt-8 mb-4">3. Data Protection and Security</h2>
                <p>We implement strict security measures to protect your personal and medical data. Your information is stored on secure servers and is only accessible to authorized personnel who are required to keep the information confidential.</p>

                <h2 class="text-xl font-bold text-primary mt-8 mb-4">4. Sharing Your Information</h2>
                <p>We do not sell, trade, or rent your personal information to third parties. We may share necessary information with trusted third-party service providers solely for the purpose of facilitating our services, provided they agree to keep your information confidential.</p>

                <h2 class="text-xl font-bold text-primary mt-8 mb-4">5. Your Rights</h2>
                <p>You have the right to access, correct, or request the deletion of your personal data. If you have any questions or concerns about your privacy, please contact us at visioneyecentrehr@gmail.com.</p>
            </div>
        </div>
    </main>

    <!-- Footer -->
    <footer class="bg-slate-900 text-slate-300 py-12 text-sm border-t border-slate-800">
        <div class="container mx-auto px-4 md:px-6">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
                <div class="space-y-4">
                    <h4 class="text-white font-bold text-lg">Vision Eye Centre</h4>
                    <p class="text-xs text-slate-400">Excellence with a humane touch. Providing the highest quality eye care with a strong focus on patient safety, precision laser technology, and compassionate comfort.</p>
                </div>
                <div class="space-y-4">
                    <h4 class="text-white font-bold text-lg">Quick Links</h4>
                    <ul class="space-y-2 text-xs">
                        <li><a href="index.php" class="hover:text-accent transition-colors">Home</a></li>
                        <li><a href="contoura-vision-surgery-in-delhi/" class="hover:text-accent transition-colors">Contoura Vision</a></li>
                        <li><a href="wavelight-plus-treatment-in-delhi/" class="hover:text-accent transition-colors">Wavelight Plus</a></li>
                        <li><a href="smile-pro-eye-surgery-in-delhi/" class="hover:text-accent transition-colors">SMILE Pro Eye</a></li>
                        <li><a href="privacy-policy.php" class="hover:text-accent transition-colors">Privacy Policy</a></li>
                    </ul>
                </div>
                <div class="space-y-4">
                    <h4 class="text-white font-bold text-lg">Our Locations</h4>
                    <ul class="space-y-2 text-xs">
                        <li><strong class="text-white">South Delhi:</strong> 19, Siri Fort Road, Near Gargi College, New Delhi – 110049</li>
                        <li><strong class="text-white">West Delhi:</strong> 12/27, West Patel Nagar, Near Arya Samaj Mandir, New Delhi – 110008</li>
                    </ul>
                </div>
                <div class="space-y-4">
                    <h4 class="text-white font-bold text-lg">Contact Us</h4>
                    <ul class="space-y-2 text-xs">
                        <li><i class="fa-solid fa-phone text-accent"></i> <a href="tel:+919711004422" class="hover:text-white transition-colors">+91 9711004422</a></li>
                        <li><i class="fa-solid fa-envelope text-accent"></i> <a href="mailto:visioneyecentrehr@gmail.com" class="hover:text-white transition-colors">visioneyecentrehr@gmail.com</a></li>
                    </ul>
                </div>
            </div>
            <div class="mt-8 pt-8 border-t border-slate-800 text-center text-xs text-slate-500">
                <p>&copy; <?php echo date("Y"); ?> Vision Eye Centre. All rights reserved.</p>
            </div>
        </div>
    </footer>
    
    <!-- WhatsApp Widget -->
    <a href="https://wa.me/919711004422" target="_blank" rel="noopener noreferrer" class="fixed bottom-6 right-6 bg-[#25D366] text-white p-3 rounded-full shadow-2xl hover:bg-[#128C7E] transition-colors z-[100] flex items-center justify-center animate-bounce" style="width: 60px; height: 60px;">
        <i class="fa-brands fa-whatsapp text-3xl"></i>
    </a>
</body>
</html>
