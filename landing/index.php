<?php
$page_title = "Best Eye Hospital in Delhi | Vision Eye Centre - Excellence with a Humane Touch";
$page_description = "Vision Eye Centre is NABH accredited & trusted as the best eye hospital in Delhi. Specialist doctors for Contoura Vision, Wavelight Plus, Smile Eye, Cataract Surgery & LASIK.";
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
                <span class="hidden lg:inline text-white/70">Siri Fort & West Patel Nagar, New Delhi</span>
            </div>
        </div>
    </div>

    <!-- DISTRACTION-FREE HEADER: ONLY LOGO & CALL BUTTON -->
    <header class="w-full bg-white/95 backdrop-blur-md border-b border-slate-100 sticky top-0 z-50 transition-all py-3.5">
        <div class="container mx-auto px-4 md:px-6 flex items-center justify-between">
            <!-- Brand Logo Image -->
            <a href="index.php" class="flex items-center gap-3 group">
                <img src="assets/images/small-logo.png" alt="Vision Eye Centre Logo" class="h-10 md:h-12 w-auto object-contain">
                <div class="flex flex-col">
                    <span class="font-heading font-black text-primary text-xl md:text-2xl tracking-tight leading-none group-hover:text-accent transition-colors">Vision Eye Centre</span>
                    <small class="text-[11px] text-slate-500 font-medium tracking-wide">Excellence … with a humane touch</small>
                </div>
            </a>

            <!-- CTA Phone Button Only -->
            <div>
                <a href="tel:+919711004422" class="inline-flex items-center gap-2 px-4 py-2.5 bg-accent hover:bg-sky-600 text-white font-bold rounded-full transition-all text-xs sm:text-sm shadow-md shadow-accent/20">
                    <i class="fa-solid fa-phone"></i>
                    <span>Call: +91 9711004422</span>
                </a>
            </div>
        </div>
    </header>

    <!-- Main Content -->
    <main class="flex-grow">
        
        <!-- Hero Section -->
        <section class="relative pt-12 pb-16 md:pt-16 md:pb-20 overflow-hidden bg-cover bg-center" style="background-image: linear-gradient(to right, rgba(10, 52, 89, 0.92), rgba(15, 76, 129, 0.85)), url('assets/images/vision_eye_hero.png');">
            <div class="container mx-auto px-4 md:px-6 relative z-10">
                <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 lg:gap-12 items-center">
                    
                    <div class="lg:col-span-7 space-y-6 text-white">
                        <div class="inline-flex items-center gap-2 px-3.5 py-1.5 rounded-full bg-white/10 border border-white/20 text-sky-200 text-xs md:text-sm font-semibold backdrop-blur-md">
                            <i class="fa-solid fa-medal text-gold"></i> NABH Accredited & Award-Winning Eye Care
                        </div>

                        <h1 class="text-3xl sm:text-4xl md:text-5xl lg:text-6xl font-heading font-black leading-[1.15] text-white">
                            Best Eye Hospital in Delhi <br>
                            <span class="text-sky-300">Vision Eye Centre</span>
                        </h1>

                        <p class="text-base md:text-lg text-slate-100 leading-relaxed font-medium max-w-2xl">
                            Providing the highest quality eye care with a strong focus on patient safety, precision laser technology, and compassionate comfort. Guided by Padma Shri Prof. (Dr) A. K. Grover and expert AIIMS/Aravind trained surgeons.
                        </p>

                        <!-- Quick Links to 3 Featured Services -->
                        <div class="flex flex-wrap gap-3 pt-2">
                            <a href="contoura-vision.php" class="px-4 py-2 bg-white/15 hover:bg-white/25 border border-white/30 rounded-xl text-xs md:text-sm font-bold text-sky-200 hover:text-white transition-all flex items-center gap-2">
                                <i class="fa-solid fa-eye text-accent"></i> Contoura Vision <i class="fa-solid fa-arrow-right text-[10px]"></i>
                            </a>
                            <a href="wavelight-plus.php" class="px-4 py-2 bg-white/15 hover:bg-white/25 border border-white/30 rounded-xl text-xs md:text-sm font-bold text-amber-200 hover:text-white transition-all flex items-center gap-2">
                                <i class="fa-solid fa-wand-magic-sparkles text-gold"></i> Wavelight Plus <i class="fa-solid fa-arrow-right text-[10px]"></i>
                            </a>
                            <a href="smile-eye.php" class="px-4 py-2 bg-white/15 hover:bg-white/25 border border-white/30 rounded-xl text-xs md:text-sm font-bold text-emerald-200 hover:text-white transition-all flex items-center gap-2">
                                <i class="fa-solid fa-face-smile text-emerald-300"></i> SMILE Pro Eye <i class="fa-solid fa-arrow-right text-[10px]"></i>
                            </a>
                        </div>
                    </div>

                    <!-- Lead Form -->
                    <div class="lg:col-span-5" id="consultation-form">
                        <div class="bg-white p-6 sm:p-8 rounded-3xl shadow-2xl border border-slate-100">
                            <div class="mb-4">
                                <span class="text-accent font-bold text-xs uppercase tracking-widest block">Book Appointment</span>
                                <h3 class="text-2xl font-heading font-extrabold text-primary">Schedule Eye Consultation</h3>
                                <p class="text-xs text-slate-500 mt-1">Fill out the form below to book your appointment with our specialist eye doctors.</p>
                            </div>
                            
                            <form id="lead-form" class="space-y-3.5" action="thankyou.php" method="POST">
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
                                    <label for="service" class="text-xs font-bold text-slate-700 block">Select Service / Specialty *</label>
                                    <select id="service" name="service" required
                                        class="w-full px-3.5 py-2.5 bg-slate-50 border border-slate-200 rounded-xl focus:border-accent outline-none text-sm text-slate-800 cursor-pointer">
                                        <option value="" disabled selected>Select service required...</option>
                                        <option value="Contoura Vision">Contoura Vision Surgery</option>
                                        <option value="Wavelight Plus (InnovEyes)">Wavelight Plus (InnovEyes) Treatment</option>
                                        <option value="Smile Pro Eye Surgery">SMILE Pro Eye Surgery</option>
                                        <option value="Cataract Surgery">Cataract Surgery (Femtosecond Bladeless / Phaco)</option>
                                        <option value="Cornea & Dry Eye">Cornea Services &amp; Dry Eye Treatment</option>
                                        <option value="Vitreoretina & Uvea">Vitreoretina &amp; Uvea Services</option>
                                        <option value="Glaucoma Services">Glaucoma Treatment &amp; Consultation</option>
                                        <option value="Paediatric Ophthalmology">Paediatric Ophthalmology &amp; Squint</option>
                                        <option value="Oculoplasty & Facial Aesthetics">Oculoplasty &amp; Cosmetic Eyelid</option>
                                    </select>
                                </div>

                                <div class="space-y-1">
                                    <label for="location" class="text-xs font-bold text-slate-700 block">Preferred Centre Location *</label>
                                    <select id="location" name="location" required
                                        class="w-full px-3.5 py-2.5 bg-slate-50 border border-slate-200 rounded-xl focus:border-accent outline-none text-sm text-slate-800 cursor-pointer">
                                        <option value="Siri Fort Road, New Delhi" selected>Siri Fort Road (Near Gargi College, New Delhi)</option>
                                        <option value="West Patel Nagar, New Delhi">West Patel Nagar (Near Arya Samaj Mandir, New Delhi)</option>
                                    </select>
                                </div>

                                <button type="submit"
                                    class="w-full py-3.5 bg-accent hover:bg-sky-600 text-white font-bold rounded-xl shadow-lg transition-all text-base tracking-wide mt-2 flex items-center justify-center gap-2">
                                    <i class="fa-solid fa-calendar-check"></i> Book Consultation Now
                                </button>
                            </form>
                        </div>
                    </div>

                </div>
            </div>
        </section>

        <!-- 3 Dedicated Laser Vision Services Showcase Cards -->
        <section id="services" class="py-12 md:py-16 bg-white border-b border-slate-100">
            <div class="container mx-auto px-4 md:px-6">
                <div class="text-center max-w-2xl mx-auto mb-12">
                    <span class="text-accent font-bold tracking-widest uppercase text-xs">Advanced Refractive Laser Suite</span>
                    <h2 class="text-3xl md:text-5xl font-heading font-black text-primary mt-2">Specialized Laser Eye Services</h2>
                    <p class="text-sm md:text-base text-slate-600 font-medium mt-3">
                        Choose your personalized spectacle freedom treatment. Click any service page below to learn more.
                    </p>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-3 gap-8 max-w-6xl mx-auto">
                    
                    <!-- Card 1: Contoura Vision -->
                    <div class="group bg-slate-50 border border-slate-200 rounded-3xl overflow-hidden hover:shadow-2xl transition-all duration-300 flex flex-col justify-between">
                        <div>
                            <div class="h-48 w-full overflow-hidden relative">
                                <img src="assets/images/contoura_vision.png" alt="Contoura Vision Surgery" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                                <span class="absolute top-3 right-3 bg-primary text-white text-xs font-bold px-3 py-1 rounded-full">Topography Guided</span>
                            </div>
                            <div class="p-6 space-y-3">
                                <h3 class="text-xl font-black text-primary group-hover:text-accent transition-colors">Contoura Vision</h3>
                                <p class="text-xs text-slate-600 leading-relaxed font-medium">
                                    22,000 corneal elevation points mapped for custom topography-guided laser vision correction beyond 6/6 clarity.
                                </p>
                            </div>
                        </div>
                        <div class="p-6 pt-0">
                            <a href="contoura-vision.php" class="inline-flex items-center justify-between w-full px-5 py-3 bg-primary hover:bg-primary-dark text-white font-bold rounded-2xl text-xs transition-all shadow-md">
                                <span>Explore Contoura Vision Page</span> <i class="fa-solid fa-arrow-right"></i>
                            </a>
                        </div>
                    </div>

                    <!-- Card 2: Wavelight Plus -->
                    <div class="group bg-slate-50 border border-slate-200 rounded-3xl overflow-hidden hover:shadow-2xl transition-all duration-300 flex flex-col justify-between">
                        <div>
                            <div class="h-48 w-full overflow-hidden relative">
                                <img src="assets/images/wavelight_plus.png" alt="Wavelight Plus Treatment" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                                <span class="absolute top-3 right-3 bg-amber-500 text-slate-900 text-xs font-bold px-3 py-1 rounded-full">AI Ray Tracing</span>
                            </div>
                            <div class="p-6 space-y-3">
                                <h3 class="text-xl font-black text-primary group-hover:text-accent transition-colors">Wavelight Plus (InnovEyes)</h3>
                                <p class="text-xs text-slate-600 leading-relaxed font-medium">
                                    Creates an AI-guided 3D "Digital Twin" of your eye for sub-micron laser precision and flawless night vision.
                                </p>
                            </div>
                        </div>
                        <div class="p-6 pt-0">
                            <a href="wavelight-plus.php" class="inline-flex items-center justify-between w-full px-5 py-3 bg-accent hover:bg-sky-600 text-white font-bold rounded-2xl text-xs transition-all shadow-md">
                                <span>Explore Wavelight Plus Page</span> <i class="fa-solid fa-arrow-right"></i>
                            </a>
                        </div>
                    </div>

                    <!-- Card 3: Smile Pro Eye -->
                    <div class="group bg-slate-50 border border-slate-200 rounded-3xl overflow-hidden hover:shadow-2xl transition-all duration-300 flex flex-col justify-between">
                        <div>
                            <div class="h-48 w-full overflow-hidden relative">
                                <img src="assets/images/smile_pro_eye.png" alt="SMILE Pro Eye Surgery" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                                <span class="absolute top-3 right-3 bg-teal text-white text-xs font-bold px-3 py-1 rounded-full">9-Sec Flapless</span>
                            </div>
                            <div class="p-6 space-y-3">
                                <h3 class="text-xl font-black text-primary group-hover:text-accent transition-colors">SMILE Pro Eye Surgery</h3>
                                <p class="text-xs text-slate-600 leading-relaxed font-medium">
                                    9-second ultra-fast VisuMax 800 laser keyhole procedure with zero flap creation and no dry eye risk.
                                </p>
                            </div>
                        </div>
                        <div class="p-6 pt-0">
                            <a href="smile-eye.php" class="inline-flex items-center justify-between w-full px-5 py-3 bg-teal hover:bg-teal-700 text-white font-bold rounded-2xl text-xs transition-all shadow-md">
                                <span>Explore SMILE Pro Page</span> <i class="fa-solid fa-arrow-right"></i>
                            </a>
                        </div>
                    </div>

                </div>
            </div>
        </section>

        <!-- Doctor Leadership with Real Photos -->
        <section id="doctors" class="py-12 md:py-16 bg-cream border-b border-slate-100">
            <div class="container mx-auto px-4 md:px-6">
                <div class="text-center max-w-2xl mx-auto mb-8">
                    <span class="text-accent font-bold tracking-widest uppercase text-xs">Medical Leadership</span>
                    <h2 class="text-3xl font-heading font-black text-primary mt-1">Our Senior Surgeons</h2>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-3 gap-6 max-w-5xl mx-auto">
                    <div class="bg-white p-6 rounded-3xl border border-slate-200 flex flex-col items-center text-center space-y-3 shadow-xs">
                        <img src="assets/images/chairman-dr-grover.webp" alt="Prof. (Dr) A. K. Grover" class="w-24 h-24 rounded-full object-cover border-4 border-gold shadow-md">
                        <div>
                            <h4 class="font-bold text-primary text-lg">Prof. (Dr) A. K. Grover</h4>
                            <p class="text-xs font-bold text-gold">Padma Shri Awardee &amp; Chairman</p>
                            <p class="text-xs text-slate-500 mt-2">M.D. (AIIMS), FRCS (Glasgow), Chairman Ophthalmology Dept Sir Ganga Ram Hospital.</p>
                        </div>
                    </div>

                    <div class="bg-white p-6 rounded-3xl border border-slate-200 flex flex-col items-center text-center space-y-3 shadow-xs">
                        <img src="assets/images/dr-apoorv-grover.webp" alt="Dr. Apoorv Grover" class="w-24 h-24 rounded-full object-cover border-4 border-accent shadow-md">
                        <div>
                            <h4 class="font-bold text-primary text-lg">Dr. Apoorv Grover</h4>
                            <p class="text-xs font-bold text-accent">Medical Director &amp; Retina Specialist</p>
                            <p class="text-xs text-slate-500 mt-2">DNB, MNAMS, FICO, Fellowship Vitreo Retina &amp; Uvea (Aravind Eye Hospital).</p>
                        </div>
                    </div>

                    <div class="bg-white p-6 rounded-3xl border border-slate-200 flex flex-col items-center text-center space-y-3 shadow-xs">
                        <img src="assets/images/dr-tushar-grover.webp" alt="Dr. Tushar Grover" class="w-24 h-24 rounded-full object-cover border-4 border-teal shadow-md">
                        <div>
                            <h4 class="font-bold text-primary text-lg">Dr. Tushar Grover</h4>
                            <p class="text-xs font-bold text-teal">Medical Director &amp; LASIK Specialist</p>
                            <p class="text-xs text-slate-500 mt-2">MS (Aravind), FAICO (Cornea/Refractive), Narayana Nethralaya Fellow, GMHE (IIM-B).</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Locations -->
        <section id="locations" class="py-12 bg-primary text-white">
            <div class="container mx-auto px-4 md:px-6">
                <div class="text-center max-w-2xl mx-auto mb-8">
                    <h2 class="text-3xl font-heading font-black">Our Delhi Centres</h2>
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
