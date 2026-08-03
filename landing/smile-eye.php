<?php
$page_title = "SMILE Pro Eye Surgery in Delhi | Vision Eye Centre - 9-Second Bladeless Flapless Laser";
$page_description = "SMILE Pro Eye surgery in Delhi at Vision Eye Centre. Next-gen VisuMax 800 9-second flapless, keyhole laser specs removal. Call +91 9711004422.";
?>
<!DOCTYPE html>
<html lang="en" class="scroll-smooth">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $page_title; ?></title>
    <meta name="description" content="<?php echo $page_description; ?>">
    <link rel="icon" type="image/svg+xml" href="../favicon.svg" />

    <!-- Google Fonts: Inter & Quicksand -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&family=Quicksand:wght@400;500;600;700&display=swap" rel="stylesheet">
    
    <!-- FontAwesome Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        primary: '#0F4C81',
                        'primary-dark': '#0A3459',
                        accent: '#0284C7',
                        teal: '#0D9488',
                        gold: '#D97706',
                        'gold-light': '#FEF3C7',
                        cream: '#F8FAFC',
                        'soft-blue': '#F0F9FF',
                    },
                    fontFamily: {
                        sans: ['Quicksand', 'Inter', 'sans-serif'],
                        heading: ['Inter', 'sans-serif'],
                    }
                }
            }
        }
    </script>
    <style>
        input:focus, select:focus, textarea:focus {
            box-shadow: 0 0 0 3px rgba(2, 132, 199, 0.2);
        }
    </style>
</head>

<body class="bg-cream font-sans text-slate-800 min-h-screen flex flex-col selection:bg-accent/20 selection:text-primary">

    <!-- Top Announcement Bar -->
    <div class="bg-primary text-white py-2 px-4 text-xs md:text-sm font-medium border-b border-white/10">
        <div class="container mx-auto flex flex-col sm:flex-row justify-between items-center gap-2">
            <div class="flex items-center gap-4">
                <span class="flex items-center gap-1.5"><i class="fa-solid fa-phone text-accent"></i> Helpline: <a href="tel:+919711004422" class="hover:underline font-bold text-sky-200">+91 9711004422</a></span>
                <span class="hidden md:inline text-white/40">|</span>
                <span class="hidden md:flex items-center gap-1.5"><i class="fa-solid fa-envelope text-accent"></i> <a href="mailto:visioneyecentrehr@gmail.com" class="hover:underline text-sky-200">visioneyecentrehr@gmail.com</a></span>
            </div>
            <div class="flex items-center gap-3">
                <span class="bg-gold/20 text-gold-light border border-gold/40 px-2.5 py-0.5 rounded-full text-[11px] font-bold tracking-wide flex items-center gap-1">
                    <i class="fa-solid fa-award text-gold"></i> NABH Accredited Centre
                </span>
            </div>
        </div>
    </div>

    <!-- DISTRACTION-FREE HEADER: ONLY LOGO & CALL BUTTON -->
    <header class="w-full bg-white border-b border-slate-200 py-3 sm:py-3.5 sticky top-0 z-50 shadow-xs">
        <div class="container mx-auto px-4 md:px-6 flex items-center justify-between gap-2 sm:gap-4">
            <!-- Logo Image -->
            <a href="index.php" class="flex items-center gap-2 sm:gap-3 group min-w-0">
                <img src="assets/images/small-logo.png" alt="Vision Eye Centre Logo" class="h-8 sm:h-10 md:h-12 w-auto object-contain flex-shrink-0">
                <div class="flex flex-col min-w-0">
                    <span class="font-heading font-black text-primary text-sm sm:text-xl md:text-2xl tracking-tight leading-tight truncate">Vision Eye Centre</span>
                    <small class="hidden sm:block text-[11px] text-slate-500 font-medium">Excellence … with a humane touch</small>
                </div>
            </a>

            <!-- Call Button Only -->
            <div class="flex-shrink-0">
                <a href="tel:+919711004422" class="inline-flex items-center gap-1.5 sm:gap-2 px-3 py-2 sm:px-4 sm:py-2.5 bg-accent hover:bg-sky-600 text-white font-bold rounded-full transition-all text-xs sm:text-sm shadow-md shadow-accent/20 whitespace-nowrap">
                    <i class="fa-solid fa-phone"></i>
                    <span class="hidden sm:inline">Call: +91 9711004422</span>
                    <span class="sm:hidden font-semibold">Call Now</span>
                </a>
            </div>
        </div>
    </header>

    <!-- Main Content -->
    <main class="flex-grow">
        
        <!-- Hero Section + Lead Form -->
        <section class="relative pt-12 pb-16 md:pt-16 md:pb-20 overflow-hidden bg-cover bg-center" style="background-image: linear-gradient(to right, rgba(10, 52, 89, 0.94), rgba(15, 76, 129, 0.88)), url('assets/images/smile_pro_eye.png');">
            <div class="container mx-auto px-4 md:px-6 relative z-10">
                <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 lg:gap-12 items-center">
                    
                    <!-- Left: Copy -->
                    <div class="lg:col-span-7 space-y-6 text-white">
                        <div class="inline-flex items-center gap-2 px-3.5 py-1.5 rounded-full bg-white/10 border border-white/20 text-sky-200 text-xs md:text-sm font-semibold backdrop-blur-md">
                            <i class="fa-solid fa-face-smile text-emerald-300"></i> Next-Gen 9-Second Keyhole Laser
                        </div>

                        <h1 class="text-3xl sm:text-4xl md:text-5xl lg:text-6xl font-heading font-black leading-[1.15] text-white">
                            SMILE Pro Eye Surgery <br>
                            <span class="text-sky-300">Flapless &amp; Blade-Free</span>
                        </h1>

                        <p class="text-base md:text-lg text-slate-100 leading-relaxed font-medium max-w-2xl">
                            The most advanced refractive surgery in the world. SMILE Pro takes just 9 seconds per eye using a tiny 2mm micro-incision with no flap creation and zero dry eye risk.
                        </p>

                        <div class="grid grid-cols-2 sm:grid-cols-4 gap-3 pt-2">
                            <div class="bg-white/10 backdrop-blur-md border border-white/15 p-3 rounded-2xl">
                                <i class="fa-solid fa-stopwatch text-gold text-lg mb-1"></i>
                                <h4 class="font-bold text-white text-xs md:text-sm">9 Seconds</h4>
                                <p class="text-[11px] text-sky-200">Laser Per Eye</p>
                            </div>
                            <div class="bg-white/10 backdrop-blur-md border border-white/15 p-3 rounded-2xl">
                                <i class="fa-solid fa-compress text-sky-300 text-lg mb-1"></i>
                                <h4 class="font-bold text-white text-xs md:text-sm">2mm Keyhole</h4>
                                <p class="text-[11px] text-sky-200">No Flap Created</p>
                            </div>
                            <div class="bg-white/10 backdrop-blur-md border border-white/15 p-3 rounded-2xl">
                                <i class="fa-solid fa-droplet-slash text-teal text-lg mb-1"></i>
                                <h4 class="font-bold text-white text-xs md:text-sm">Zero Dry Eye</h4>
                                <p class="text-[11px] text-sky-200">Preserves Nerves</p>
                            </div>
                            <div class="bg-white/10 backdrop-blur-md border border-white/15 p-3 rounded-2xl">
                                <i class="fa-solid fa-person-running text-green-400 text-lg mb-1"></i>
                                <h4 class="font-bold text-white text-xs md:text-sm">Instant Recovery</h4>
                                <p class="text-[11px] text-sky-200">Resume Sports Fast</p>
                            </div>
                        </div>
                    </div>

                    <!-- Right: Lead Form -->
                    <div class="lg:col-span-5" id="consultation-form">
                        <div class="bg-white p-6 sm:p-8 rounded-3xl shadow-2xl border border-slate-100">
                            <div class="mb-4">
                                <span class="text-accent font-bold text-xs uppercase tracking-widest block">Book Appointment</span>
                                <h3 class="text-2xl font-heading font-extrabold text-primary">Book SMILE Pro Consultation</h3>
                                <p class="text-xs text-slate-500 mt-1">Check your suitability for 9-second SMILE Pro surgery.</p>
                            </div>
                            
                            <form id="lead-form" class="space-y-3.5" action="thankyou.php" method="POST">
                                <input type="hidden" name="service" value="Smile Pro Eye Surgery">
                                <div class="grid grid-cols-1 sm:grid-cols-2 gap-3">
                                    <div class="space-y-1">
                                        <label for="first-name" class="text-xs font-bold text-slate-700 block">First Name *</label>
                                        <input type="text" id="first-name" name="first-name" required placeholder="First name"
                                            class="w-full px-3.5 py-2.5 bg-slate-50 border border-slate-200 rounded-xl focus:border-accent outline-none text-sm text-slate-800">
                                    </div>
                                    <div class="space-y-1">
                                        <label for="last-name" class="text-xs font-bold text-slate-700 block">Last Name *</label>
                                        <input type="text" id="last-name" name="last-name" required placeholder="Last name"
                                            class="w-full px-3.5 py-2.5 bg-slate-50 border border-slate-200 rounded-xl focus:border-accent outline-none text-sm text-slate-800">
                                    </div>
                                </div>

                                <div class="grid grid-cols-1 sm:grid-cols-2 gap-3">
                                    <div class="space-y-1">
                                        <label for="phone" class="text-xs font-bold text-slate-700 block">Phone Number *</label>
                                        <input type="tel" id="phone" name="phone" required placeholder="+91 Mobile number"
                                            class="w-full px-3.5 py-2.5 bg-slate-50 border border-slate-200 rounded-xl focus:border-accent outline-none text-sm text-slate-800">
                                    </div>
                                    <div class="space-y-1">
                                        <label for="email" class="text-xs font-bold text-slate-700 block">Email Address</label>
                                        <input type="email" id="email" name="email" placeholder="name@example.com"
                                            class="w-full px-3.5 py-2.5 bg-slate-50 border border-slate-200 rounded-xl focus:border-accent outline-none text-sm text-slate-800">
                                    </div>
                                </div>

                                <div class="space-y-1">
                                    <label for="location" class="text-xs font-bold text-slate-700 block">Preferred Centre Location *</label>
                                    <select id="location" name="location" required
                                        class="w-full px-3.5 py-2.5 bg-slate-50 border border-slate-200 rounded-xl focus:border-accent outline-none text-sm text-slate-800 cursor-pointer">
                                        <option value="Siri Fort Road, New Delhi" selected>Siri Fort Road (South Delhi)</option>
                                        <option value="West Patel Nagar, New Delhi">West Patel Nagar (West Delhi)</option>
                                    </select>
                                </div>

                                <div class="space-y-1">
                                    <label for="comments" class="text-xs font-bold text-slate-700 block">Current Spectacle Power (Optional)</label>
                                    <textarea id="comments" name="comments" rows="2" placeholder="e.g. -4.5D spherical..."
                                        class="w-full px-3.5 py-2 bg-slate-50 border border-slate-200 rounded-xl focus:border-accent outline-none text-sm text-slate-800 resize-none"></textarea>
                                </div>

                                <button type="submit"
                                    class="w-full py-3.5 bg-accent hover:bg-sky-600 text-white font-bold rounded-xl shadow-lg transition-all text-base tracking-wide mt-2 flex items-center justify-center gap-2">
                                    <i class="fa-solid fa-calendar-check"></i> Book SMILE Pro Consultation
                                </button>
                            </form>
                        </div>
                    </div>

                </div>
            </div>
        </section>

        <!-- Service Showcase Image & Detailed Feature -->
        <section class="py-12 md:py-16 bg-white border-b border-slate-100">
            <div class="container mx-auto px-4 md:px-6">
                <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 lg:gap-12 items-center max-w-6xl mx-auto">
                    <!-- Service Image -->
                    <div class="lg:col-span-5">
                        <div class="rounded-3xl overflow-hidden shadow-2xl border border-slate-200">
                            <img src="assets/images/smile_pro_eye.png" alt="SMILE Pro Eye Surgery VisuMax 800 Technology" class="w-full h-auto object-cover">
                        </div>
                    </div>

                    <!-- Content -->
                    <div class="lg:col-span-7 space-y-4">
                        <span class="text-accent font-bold uppercase tracking-widest text-xs">Flapless Vision Correction</span>
                        <h2 class="text-3xl md:text-4xl font-heading font-black text-primary">Why SMILE Pro is the Future of Eye Surgery</h2>
                        <p class="text-slate-600 leading-relaxed font-medium text-sm md:text-base">
                            Unlike traditional LASIK that cuts a 20mm circular flap in the cornea, SMILE Pro (Small Incision Lenticule Extraction) uses a femtosecond laser to create a thin lenticule inside the cornea, extracted through a tiny 2mm keyhole opening.
                        </p>
                        <div class="space-y-2 pt-2 text-sm text-slate-700">
                            <div class="flex items-center gap-3">
                                <i class="fa-solid fa-circle-check text-accent text-base"></i>
                                <span>9-Second ultra-fast laser application per eye using VisuMax 800</span>
                            </div>
                            <div class="flex items-center gap-3">
                                <i class="fa-solid fa-circle-check text-accent text-base"></i>
                                <span>No corneal flap creation—prevents flap displacement or trauma risk</span>
                            </div>
                            <div class="flex items-center gap-3">
                                <i class="fa-solid fa-circle-check text-accent text-base"></i>
                                <span>Preserves corneal nerve structure to prevent dry eye syndrome</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-3 gap-6 max-w-5xl mx-auto mt-12">
                    <div class="bg-slate-50 border border-slate-200 p-6 rounded-3xl text-center space-y-3">
                        <div class="w-12 h-12 bg-accent/10 text-accent rounded-2xl flex items-center justify-center text-xl mx-auto font-bold">
                            <i class="fa-solid fa-bolt"></i>
                        </div>
                        <h3 class="font-bold text-primary text-lg">9-Second Laser Time</h3>
                        <p class="text-xs text-slate-600 leading-relaxed">Powered by VisuMax 800 femtosecond laser technology for lightning-fast, comfortable treatment.</p>
                    </div>

                    <div class="bg-slate-50 border border-slate-200 p-6 rounded-3xl text-center space-y-3">
                        <div class="w-12 h-12 bg-teal/10 text-teal rounded-2xl flex items-center justify-center text-xl mx-auto font-bold">
                            <i class="fa-solid fa-shield-cat"></i>
                        </div>
                        <h3 class="font-bold text-primary text-lg">Maximum Corneal Strength</h3>
                        <p class="text-xs text-slate-600 leading-relaxed">Because no corneal flap is created, the biomechanical stability of the eye remains almost completely intact.</p>
                    </div>

                    <div class="bg-slate-50 border border-slate-200 p-6 rounded-3xl text-center space-y-3">
                        <div class="w-12 h-12 bg-gold/10 text-gold rounded-2xl flex items-center justify-center text-xl mx-auto font-bold">
                            <i class="fa-solid fa-dumbbell"></i>
                        </div>
                        <h3 class="font-bold text-primary text-lg">Ideal for Active Lifestyles</h3>
                        <p class="text-xs text-slate-600 leading-relaxed">No risk of flap dislocation! Perfect for athletes, military personnel, and active individuals.</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Doctors with Real Photos -->
        <section class="py-12 bg-cream border-b border-slate-100">
            <div class="container mx-auto px-4 md:px-6">
                <div class="text-center max-w-2xl mx-auto mb-8">
                    <h2 class="text-3xl font-heading font-black text-primary">Expert SMILE Pro Surgeons</h2>
                </div>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6 max-w-3xl mx-auto">
                    <div class="bg-white p-6 rounded-3xl border border-slate-200 flex items-center gap-4 shadow-xs">
                        <img src="assets/images/dr-tushar-grover.webp" alt="Dr. Tushar Grover" class="w-20 h-20 rounded-full object-cover border-4 border-teal flex-shrink-0 shadow-md">
                        <div>
                            <h4 class="font-bold text-primary text-lg">Dr. Tushar Grover</h4>
                            <p class="text-xs font-bold text-accent">Medical Director &amp; Refractive Specialist</p>
                            <p class="text-xs text-slate-500 mt-1">MS (Aravind), FAICO (Refractive), Narayana Nethralaya Fellow.</p>
                        </div>
                    </div>

                    <div class="bg-white p-6 rounded-3xl border border-slate-200 flex items-center gap-4 shadow-xs">
                        <img src="assets/images/chairman-dr-grover.webp" alt="Prof. (Dr) A. K. Grover" class="w-20 h-20 rounded-full object-cover border-4 border-gold flex-shrink-0 shadow-md">
                        <div>
                            <h4 class="font-bold text-primary text-lg">Prof. (Dr) A. K. Grover</h4>
                            <p class="text-xs font-bold text-gold">Padma Shri Awardee &amp; Chairman</p>
                            <p class="text-xs text-slate-500 mt-1">M.D. (AIIMS), FRCS (Glasgow), Chairman at Sir Ganga Ram Hospital.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Locations -->
        <section class="py-12 bg-primary text-white">
            <div class="container mx-auto px-4 md:px-6">
                <div class="text-center max-w-2xl mx-auto mb-8">
                    <h2 class="text-3xl font-heading font-black">Our Delhi Clinics</h2>
                </div>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6 max-w-4xl mx-auto text-slate-800">
                    <div class="bg-white p-6 rounded-3xl shadow-lg space-y-2">
                        <span class="bg-accent/10 text-accent text-xs font-bold px-3 py-1 rounded-full uppercase">Siri Fort Road</span>
                        <h3 class="text-xl font-bold text-primary">South Delhi Centre</h3>
                        <p class="text-xs text-slate-600">19, Siri Fort Road, Near Gargi College, New Delhi – 110049</p>
                        <p class="text-xs font-bold text-accent">Helpline: +91 9711004422</p>
                    </div>

                    <div class="bg-white p-6 rounded-3xl shadow-lg space-y-2">
                        <span class="bg-teal/10 text-teal text-xs font-bold px-3 py-1 rounded-full uppercase">West Patel Nagar</span>
                        <h3 class="text-xl font-bold text-primary">West Delhi Centre</h3>
                        <p class="text-xs text-slate-600">12/27, West Patel Nagar, Near Arya Samaj Mandir, New Delhi – 110008</p>
                        <p class="text-xs font-bold text-accent">Helpline: +91 9711004422</p>
                    </div>
                </div>
            </div>
        </section>

    </main>

    <!-- Footer -->
    <footer class="bg-slate-900 text-slate-400 py-8 text-xs text-center border-t border-slate-800">
        <p>&copy; <?php echo date("Y"); ?> Vision Eye Centre. All rights reserved.</p>
    </footer>

</body>
</html>
