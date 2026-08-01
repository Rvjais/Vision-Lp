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

    <?php if ($is_wavelight || (!$is_wavelight && !$is_smile)): ?>
    <!-- Event snippet for Submit lead form wave light conversion page -->
    <script>
      gtag('event', 'conversion', {
          'send_to': 'AW-11323462665/VqrrCLfBz9kcEImouZcq',
          'value': 1.0,
          'currency': 'INR'
      });
    </script>
    <?php endif; ?>

    <?php if ($is_smile || (!$is_wavelight && !$is_smile)): ?>
    <!-- Event snippet for Submit lead form Smile conversion page -->
    <script>
      gtag('event', 'conversion', {
          'send_to': 'AW-11323462665/PP9PCNvv0NkcEImouZcq',
          'value': 1.0,
          'currency': 'INR'
      });
    </script>
    <?php endif; ?>
    
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
    <header class="w-full bg-white border-b border-slate-200 py-4 shadow-xs">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 flex items-center justify-between">
            <a href="index.php" class="flex items-center gap-3">
                <img src="assets/images/small-logo.png" alt="Vision Eye Centre Logo" class="h-10 md:h-12 w-auto object-contain">
                <div class="flex flex-col">
                    <span class="font-bold text-primary text-xl tracking-tight leading-none">Vision Eye Centre</span>
                    <small class="text-[11px] text-slate-500 font-medium">Excellence … with a humane touch</small>
                </div>
            </a>
            
            <div>
                <a href="tel:+919711004422" class="inline-flex items-center gap-2 px-4 py-2 bg-sky-50 text-accent hover:bg-sky-100 font-bold rounded-full transition-all text-sm border border-sky-100">
                    <i class="fa-solid fa-phone"></i>
                    <span>+91 9711004422</span>
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
    <footer class="bg-slate-900 text-slate-400 py-8 border-t border-slate-800 text-xs text-center">
        <p>&copy; <?php echo date("Y"); ?> Vision Eye Centre. All rights reserved.</p>
    </footer>

</body>
</html>
