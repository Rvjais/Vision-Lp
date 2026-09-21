<?php
$page_title = "Thank You - Vision Eye Centre Delhi";
$page_description = "Thank you for reaching out to Vision Eye Centre. Our patient care team will contact you shortly to confirm your appointment.";

$service = $_POST['service'] ?? $_GET['service'] ?? '';
$referer = $_SERVER['HTTP_REFERER'] ?? '';
$is_wavelight = (stripos($service, 'wavelight') !== false) || (stripos($referer, 'wavelight') !== false);
$is_smile = (stripos($service, 'smile') !== false) || (stripos($referer, 'smile') !== false);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $page_title; ?></title>
    <meta name="description" content="<?php echo $page_description; ?>">
    <link rel="icon" type="image/svg+xml" href="favicon.svg" />
    
    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=AW-11323462665"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', 'AW-11323462665');
    </script>


    
    <!-- Google Fonts: Inter & Quicksand -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700;800&family=Quicksand:wght@500;700&display=swap" rel="stylesheet">
    <!-- FontAwesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        primary: '#0F4C81',
                        accent: '#0284C7',
                    }
                }
            }
        }
    </script>
</head>
<body class="min-h-screen bg-slate-50 text-slate-800 flex flex-col font-sans">

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

    <!-- Thank You Container -->
    <main class="flex-grow flex items-center justify-center py-16 px-4">
        <div class="max-w-xl w-full bg-white rounded-3xl p-8 md:p-12 border border-slate-200 text-center shadow-xl">
            <div class="w-20 h-20 bg-sky-50 rounded-full flex items-center justify-center text-accent mx-auto mb-6 shadow-xs text-3xl">
                <i class="fa-solid fa-circle-check"></i>
            </div>
            <h1 class="text-3xl sm:text-4xl font-extrabold text-primary mb-4 tracking-tight leading-tight">Appointment Request Received!</h1>
            <p class="text-base text-slate-600 leading-relaxed mb-8 font-medium">
                Thank you for scheduling your eye consultation with Vision Eye Centre. Our patient care team will call you shortly to confirm your preferred doctor slot and centre location (Siri Fort Road / West Patel Nagar).
            </p>
            <a href="index.php" class="inline-block w-full py-4 bg-accent hover:bg-sky-600 text-white font-bold rounded-xl shadow-lg transition-all text-base text-center">
                Return to Home Page
            </a>
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
