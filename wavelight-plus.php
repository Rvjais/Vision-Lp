<?php
$page_title = "Wavelight Plus (Innoveyes) Treatment in Delhi | Vision Eye Centre";
$page_description = "Wavelight Plus (InnovEyes) Ray Tracing laser eye surgery at Vision Eye Centre, Delhi. AI-guided 3D digital twin corneal correction. Call +91 9711004422.";
?>
<!DOCTYPE html>
<html lang="en" class="scroll-smooth">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $page_title; ?></title>
    <meta name="description" content="<?php echo $page_description; ?>">
    <link rel="icon" type="image/svg+xml" href="favicon.svg" />

    <!-- Google Fonts: Inter & Quicksand -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&family=Source+Serif+4:ital,opsz,wght@0,8..60,400;0,8..60,600;1,8..60,400&display=swap" rel="stylesheet">
    
    <!-- FontAwesome Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        primary: '#123A5E',
                        'primary-dark': '#0E2E4A',
                        accent: '#1B6CA8',
                        teal: '#0D7A72',
                        gold: '#9A6212',
                        'gold-light': '#FEF3C7',
                        cream: '#F6F6F3',
                        'soft-blue': '#F0F9FF',
                    },
                    fontFamily: {
                        sans: ['Inter', 'system-ui', 'sans-serif'],
                        heading: ['"Source Serif 4"', 'Georgia', 'serif'],
                    }
                }
            }
        }
    </script>
    <!-- Service landing page visual layer -->
    <link rel="stylesheet" href="css/service-lp.css">
</head>

<body class="bg-cream font-sans text-slate-800 min-h-screen flex flex-col selection:bg-accent/20 selection:text-primary">

    <!-- Top Announcement Bar -->
    <div class="bg-[#0B2A44] text-slate-200 py-2.5 px-4 text-xs md:text-[13px] font-medium border-b border-white/10">
        <div class="container mx-auto flex flex-col sm:flex-row justify-between items-center gap-2">
            <div class="flex items-center gap-4">
                <span class="flex items-center gap-1.5"><i class="fa-solid fa-phone text-accent"></i> Helpline: <a href="tel:+919711004422" class="hover:underline font-bold text-sky-200">+91 9711004422</a></span>
                <span class="hidden md:inline text-white/40">|</span>
                <span class="hidden md:flex items-center gap-1.5"><i class="fa-solid fa-envelope text-accent"></i> <a href="mailto:visioneyecentrehr@gmail.com" class="hover:underline text-sky-200">visioneyecentrehr@gmail.com</a></span>
            </div>
            <div class="check-row">
                <span class="text-amber-200 border border-white/25 px-3 py-1 rounded text-[11px] font-semibold tracking-wide flex items-center gap-1.5 whitespace-nowrap">
                    <i class="fa-solid fa-award text-gold"></i> NABH Accredited Centre
                </span>
            </div>
        </div>
    </div>

    <!-- DISTRACTION-FREE HEADER: ONLY LOGO & CALL BUTTON -->
    <header class="site-header w-full py-3 sm:py-3.5 sticky top-0 z-50">
        <div class="container mx-auto px-4 md:px-6 flex items-center justify-between gap-2 sm:gap-4">
            <!-- Logo Image -->
            <a href="index.php" class="flex items-center gap-2 sm:gap-3 group min-w-0">
                <img src="assets/images/small-logo.png" alt="Vision Eye Centre Logo" class="h-8 sm:h-10 md:h-12 w-auto object-contain flex-shrink-0">
                <div class="flex flex-col min-w-0">
                    <span class="font-heading font-semibold text-primary text-sm sm:text-lg md:text-[22px] tracking-[-0.01em] leading-tight truncate">Vision Eye Centre</span>
                    <small class="hidden sm:block text-[11px] text-slate-500 font-medium">Excellence … with a humane touch</small>
                </div>
            </a>

            <!-- Call Button Only -->
            <div class="flex-shrink-0">
                <a href="tel:+919711004422" class="btn-call inline-flex items-center gap-1.5 sm:gap-2 text-xs sm:text-sm whitespace-nowrap">
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
        <section class="hero relative pt-16 pb-20 md:pt-28 md:pb-32 overflow-hidden bg-cover bg-center" style="background-image: linear-gradient(rgba(11,35,56,0.955), rgba(11,35,56,0.955)), url('assets/images/wavelight_plus.png');">
            <div class="container mx-auto px-4 md:px-6 relative z-10">
                <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 lg:gap-12 items-center">
                    
                    <!-- Left: Copy -->
                    <div class="lg:col-span-7 space-y-7 text-white">
                        <div class="pill inline-flex items-center gap-2 text-xs">
                            <i class="fa-solid fa-wand-magic-sparkles text-amber-300"></i> Ray-Tracing AI Technology
                        </div>

                        <h1 class="text-[34px] sm:text-[42px] md:text-[50px] lg:text-[58px] font-heading font-semibold leading-[1.1] tracking-[-0.015em] text-white">
                            Wavelight Plus <br>
                            <span class="hl-accent">(InnovEyes) Treatment</span>
                        </h1>

                        <p class="text-[15.5px] md:text-[17px] text-slate-300/90 leading-[1.75] max-w-xl">
                            The pinnacle of custom laser vision correction. InnovEyes creates a 3D "Digital Twin" model of your eye using Ray Tracing technology to deliver unmatched 20/15 optical accuracy.
                        </p>

                        <div class="grid grid-cols-2 sm:grid-cols-4 gap-x-6 gap-y-7 pt-8">
                            <div class="stat-tile">
                                <i class="fa-solid fa-network-wired text-gold text-lg mb-1"></i>
                                <h4 class="font-semibold text-white text-sm md:text-[15px] mt-1.5">Ray Tracing</h4>
                                <p class="text-[11.5px] text-slate-400 mt-0.5">AI Calculation</p>
                            </div>
                            <div class="stat-tile">
                                <i class="fa-solid fa-vr-cardboard text-sky-300 text-lg mb-1"></i>
                                <h4 class="font-semibold text-white text-sm md:text-[15px] mt-1.5">3D Digital Twin</h4>
                                <p class="text-[11.5px] text-slate-400 mt-0.5">Eye Simulation</p>
                            </div>
                            <div class="stat-tile">
                                <i class="fa-solid fa-bolt text-teal text-lg mb-1"></i>
                                <h4 class="font-semibold text-white text-sm md:text-[15px] mt-1.5">Ultra Fast</h4>
                                <p class="text-[11.5px] text-slate-400 mt-0.5">Laser Precision</p>
                            </div>
                            <div class="stat-tile">
                                <i class="fa-solid fa-star text-green-400 text-lg mb-1"></i>
                                <h4 class="font-semibold text-white text-sm md:text-[15px] mt-1.5">Beyond 6/6</h4>
                                <p class="text-[11.5px] text-slate-400 mt-0.5">Crystal Vision</p>
                            </div>
                        </div>
                    </div>

                    <!-- Right: Lead Form -->
                    <div class="lg:col-span-5" id="consultation-form">
                        <div class="form-card p-6 sm:p-8">
                            <div class="mb-4">
                                <span class="eyebrow">Book Appointment</span>
                                <h3 class="text-[23px] font-heading font-semibold text-primary tracking-[-0.01em] mt-2.5">Book Wavelight Plus Check</h3>
                                <p class="text-[12.5px] text-slate-500 mt-2 leading-relaxed">Schedule a Ray-Tracing diagnostic evaluation with our specialists.</p>
                            </div>
                            
                            <form id="lead-form" class="space-y-3.5" action="thankyou.php" method="POST">
                                <input type="hidden" name="service" value="Wavelight Plus (InnovEyes)">
                                <div class="grid grid-cols-1 sm:grid-cols-2 gap-3">
                                    <div class="space-y-1">
                                        <label for="first-name" class="text-[11px] font-bold uppercase tracking-wider text-slate-600 block">First Name *</label>
                                        <input type="text" id="first-name" name="first-name" required placeholder="First name"
                                            class="field">
                                    </div>
                                    <div class="space-y-1">
                                        <label for="last-name" class="text-[11px] font-bold uppercase tracking-wider text-slate-600 block">Last Name *</label>
                                        <input type="text" id="last-name" name="last-name" required placeholder="Last name"
                                            class="field">
                                    </div>
                                </div>

                                <div class="grid grid-cols-1 sm:grid-cols-2 gap-3">
                                    <div class="space-y-1">
                                        <label for="phone" class="text-[11px] font-bold uppercase tracking-wider text-slate-600 block">Phone Number *</label>
                                        <input type="tel" id="phone" name="phone" required placeholder="+91 Mobile number"
                                            class="field">
                                    </div>
                                    <div class="space-y-1">
                                        <label for="email" class="text-[11px] font-bold uppercase tracking-wider text-slate-600 block">Email Address</label>
                                        <input type="email" id="email" name="email" placeholder="name@example.com"
                                            class="field">
                                    </div>
                                </div>

                                <div class="space-y-1">
                                    <label for="location" class="text-[11px] font-bold uppercase tracking-wider text-slate-600 block">Preferred Centre Location *</label>
                                    <select id="location" name="location" required
                                        class="field">
                                        <option value="Siri Fort Road, New Delhi" selected>Siri Fort Road (South Delhi)</option>
                                        <option value="West Patel Nagar, New Delhi">West Patel Nagar (West Delhi)</option>
                                    </select>
                                </div>

                                <div class="space-y-1">
                                    <label for="comments" class="text-[11px] font-bold uppercase tracking-wider text-slate-600 block">Current Spectacle Power (Optional)</label>
                                    <textarea id="comments" name="comments" rows="2" placeholder="e.g. -3.0D spherical..."
                                        class="field"></textarea>
                                </div>

                                <button type="submit"
                                    class="btn-primary mt-3">
                                    <i class="fa-solid fa-calendar-check"></i> Book Wavelight Consultation
                                </button>
                            </form>
                        </div>
                    </div>

                </div>
            </div>
        </section>

        <!-- Service Showcase Image & Detailed Feature -->
        <section class="py-20 md:py-28 bg-white border-b border-[#E4E3DE]">
            <div class="container mx-auto px-4 md:px-6">
                <div class="grid grid-cols-1 lg:grid-cols-12 gap-10 lg:gap-16 items-center max-w-6xl mx-auto">
                    <!-- Service Image -->
                    <div class="lg:col-span-5">
                        <div class="img-frame">
                            <img src="assets/images/wavelight_plus.png" alt="Wavelight Plus InnovEyes Laser Technology" class="w-full h-auto object-cover">
                        </div>
                    </div>

                    <!-- Content -->
                    <div class="lg:col-span-7 space-y-4">
                        <span class="eyebrow">Revolutionary Innovation</span>
                        <h2 class="text-[30px] md:text-[38px] font-heading font-semibold text-primary tracking-[-0.015em] mt-4 leading-[1.2]">How Ray-Tracing Wavelight Plus Works</h2>
                        <p class="text-slate-600 leading-[1.8] text-[15.5px] md:text-[16.5px] max-w-2xl">
                            Wavelight Plus calculates 2,000 light rays passing through your entire visual system—cornea, crystalline lens, and retina. It builds an exact 3D Virtual Twin model of your eye to guide laser pulses with sub-micron accuracy.
                        </p>
                        <div class="space-y-3 pt-3 text-sm text-slate-700">
                            <div class="check-row">
                                <i class="fa-solid fa-check text-accent text-sm mt-1"></i>
                                <span>Simulates 3D optical model of your unique eye structure</span>
                            </div>
                            <div class="check-row">
                                <i class="fa-solid fa-check text-accent text-sm mt-1"></i>
                                <span>Individual calculation for high cylinder &amp; complex refractive errors</span>
                            </div>
                            <div class="check-row">
                                <i class="fa-solid fa-check text-accent text-sm mt-1"></i>
                                <span>Ultra-fast laser delivery for maximum comfort and speed</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-3 gap-5 max-w-5xl mx-auto mt-20">
                    <div class="card p-8 space-y-4">
                        <div class="icon-chip bg-accent/10 text-accent">
                            <i class="fa-solid fa-microchip"></i>
                        </div>
                        <h3 class="font-heading font-semibold text-primary text-[19px]">AI Ray Tracing</h3>
                        <p class="text-[13.5px] text-slate-600 leading-[1.75]">Calculates thousands of light paths through the cornea and lens for unmatched optical mathematical precision.</p>
                    </div>

                    <div class="card p-8 space-y-4">
                        <div class="icon-chip bg-teal/10 text-teal">
                            <i class="fa-solid fa-cube"></i>
                        </div>
                        <h3 class="font-heading font-semibold text-primary text-[19px]">3D Digital Twin</h3>
                        <p class="text-[13.5px] text-slate-600 leading-[1.75]">Simulates your vision outcome digitally prior to the actual laser application, ensuring flawless results.</p>
                    </div>

                    <div class="card p-8 space-y-4">
                        <div class="icon-chip bg-gold/10 text-gold">
                            <i class="fa-solid fa-certificate"></i>
                        </div>
                        <h3 class="font-heading font-semibold text-primary text-[19px]">Unmatched Safety</h3>
                        <p class="text-[13.5px] text-slate-600 leading-[1.75]">Performed under expert supervision at Vision Eye Centre's NABH accredited surgery suites.</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Doctors with Real Photos -->
        <section class="py-20 md:py-24 bg-[#F6F6F3] border-b border-[#E4E3DE]">
            <div class="container mx-auto px-4 md:px-6">
                <div class="sec-head text-center max-w-2xl mx-auto mb-12">
                    <h2 class="text-[30px] md:text-[38px] font-heading font-semibold text-primary tracking-[-0.015em] leading-[1.2]">Senior Refractive Surgeons</h2>
                </div>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6 max-w-3xl mx-auto">
                    <div class="card p-7 flex items-center gap-5">
                        <img src="assets/images/dr-tushar-grover.webp" alt="Dr. Tushar Grover" class="w-[72px] h-[72px] rounded-full object-cover border border-[#D3D2CB] flex-shrink-0">
                        <div>
                            <h4 class="font-heading font-semibold text-primary text-[19px]">Dr. Tushar Grover</h4>
                            <p class="text-[13px] font-bold text-accent pt-1">Medical Director &amp; LASIK Specialist</p>
                            <p class="text-[12.5px] text-slate-500 mt-2 leading-relaxed">MS (Aravind), FAICO (Cornea), Narayana Nethralaya Fellow.</p>
                        </div>
                    </div>

                    <div class="card p-7 flex items-center gap-5">
                        <img src="assets/images/chairman-dr-grover.webp" alt="Prof. (Dr) A. K. Grover" class="w-[72px] h-[72px] rounded-full object-cover border border-[#D3D2CB] flex-shrink-0">
                        <div>
                            <h4 class="font-heading font-semibold text-primary text-[19px]">Prof. (Dr) A. K. Grover</h4>
                            <p class="text-xs font-bold text-gold">Padma Shri Awardee &amp; Chairman</p>
                            <p class="text-[12.5px] text-slate-500 mt-2 leading-relaxed">M.D. (AIIMS), FRCS (Glasgow), Chairman at Sir Ganga Ram Hospital.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Why You Need Us Section -->
        <section class="py-12 md:py-16 bg-white border-b border-[#E4E3DE]">
            <div class="container mx-auto px-4 md:px-6">
                <div class="text-center max-w-2xl mx-auto mb-12">
                    <span class="eyebrow text-accent font-bold tracking-widest uppercase text-xs block mb-2">Why Choose Us</span>
                    <h2 class="text-[30px] md:text-[38px] font-heading font-semibold text-primary tracking-[-0.015em] mt-4 leading-[1.2]">Why You Need Us</h2>
                </div>
                
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                    <div class="card p-6 bg-slate-50 rounded-2xl border border-slate-100 hover:shadow-lg transition-shadow">
                        <div class="w-12 h-12 rounded-full bg-accent/10 flex items-center justify-center mb-4">
                            <i class="fa-solid fa-user-doctor text-accent text-xl"></i>
                        </div>
                        <h3 class="font-heading text-[19px] font-semibold text-primary mb-2">Expert Surgeons</h3>
                        <p class="text-[13px] text-slate-600 leading-relaxed">Highly experienced doctors trained at premier institutions like AIIMS and Aravind Eye Hospital.</p>
                    </div>
                    <div class="card p-6 bg-slate-50 rounded-2xl border border-slate-100 hover:shadow-lg transition-shadow">
                        <div class="w-12 h-12 rounded-full bg-teal/10 flex items-center justify-center mb-4">
                            <i class="fa-solid fa-microchip text-teal text-xl"></i>
                        </div>
                        <h3 class="font-heading text-[19px] font-semibold text-primary mb-2">Advanced Technology</h3>
                        <p class="text-[13px] text-slate-600 leading-relaxed">State-of-the-art diagnostic and surgical equipment ensuring precision and safety.</p>
                    </div>
                    <div class="card p-6 bg-slate-50 rounded-2xl border border-slate-100 hover:shadow-lg transition-shadow">
                        <div class="w-12 h-12 rounded-full bg-gold/10 flex items-center justify-center mb-4">
                            <i class="fa-solid fa-award text-gold text-xl"></i>
                        </div>
                        <h3 class="font-heading text-[19px] font-semibold text-primary mb-2">NABH Accredited</h3>
                        <p class="text-[13px] text-slate-600 leading-relaxed">Recognized for maintaining the highest standards of healthcare quality and patient safety.</p>
                    </div>
                    <div class="card p-6 bg-slate-50 rounded-2xl border border-slate-100 hover:shadow-lg transition-shadow">
                        <div class="w-12 h-12 rounded-full bg-sky-500/10 flex items-center justify-center mb-4">
                            <i class="fa-solid fa-hand-holding-medical text-sky-500 text-xl"></i>
                        </div>
                        <h3 class="font-heading text-[19px] font-semibold text-primary mb-2">Humane Touch</h3>
                        <p class="text-[13px] text-slate-600 leading-relaxed">Compassionate care focusing on patient comfort and clear communication at every step.</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Locations -->
        <section class="py-20 md:py-24 band-dark text-white">
            <div class="container mx-auto px-4 md:px-6">
                <div class="sec-head text-center max-w-2xl mx-auto mb-12">
                    <h2 class="text-[30px] md:text-[38px] font-heading font-semibold tracking-[-0.015em] leading-[1.2]">Our Delhi Clinics</h2>
                </div>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6 max-w-4xl mx-auto text-slate-800">
                    <div class="card p-8 space-y-2.5">
                        <span class="inline-block text-accent text-[11px] font-bold uppercase tracking-[0.14em]">Siri Fort Road</span>
                        <h3 class="font-heading text-[21px] font-semibold text-primary">South Delhi Centre</h3>
                        <p class="text-[13px] text-slate-600 leading-relaxed">19, Siri Fort Road, Near Gargi College, New Delhi – 110049</p>
                        <p class="text-[13px] font-bold text-accent pt-1">Helpline: +91 9711004422</p>
                    </div>

                    <div class="card p-8 space-y-2.5">
                        <span class="inline-block text-teal text-[11px] font-bold uppercase tracking-[0.14em]">West Patel Nagar</span>
                        <h3 class="font-heading text-[21px] font-semibold text-primary">West Delhi Centre</h3>
                        <p class="text-[13px] text-slate-600 leading-relaxed">12/27, West Patel Nagar, Near Arya Samaj Mandir, New Delhi – 110008</p>
                        <p class="text-[13px] font-bold text-accent pt-1">Helpline: +91 9711004422</p>
                    </div>
                </div>
            </div>
        </section>

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
                        <li><a href="contoura-vision.php" class="hover:text-accent transition-colors">Contoura Vision</a></li>
                        <li><a href="wavelight-plus.php" class="hover:text-accent transition-colors">Wavelight Plus</a></li>
                        <li><a href="smile-eye.php" class="hover:text-accent transition-colors">SMILE Pro Eye</a></li>
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

    <!-- Formester Submission Script -->
    <script>
        const leadForm = document.getElementById('lead-form');
        if (leadForm) {
            leadForm.addEventListener('submit', function(e) {
                e.preventDefault();
                const form = this;
                const submitBtn = form.querySelector('button[type="submit"]');
                const originalText = submitBtn.innerHTML;
                submitBtn.innerHTML = '<i class="fa-solid fa-spinner fa-spin"></i> Submitting...';
                submitBtn.disabled = true;

                const formData = new FormData(form);
                fetch('https://app.formester.com/forms/LRTn5uhum/submissions.json', {
                    method: 'POST',
                    body: formData,
                    headers: {
                        'Accept': 'application/json'
                    }
                }).then(response => {
                    window.location.href = "thankyou.php?service=" + encodeURIComponent(formData.get('service') || '');
                }).catch(error => {
                    console.error(error);
                    window.location.href = "thankyou.php?service=" + encodeURIComponent(formData.get('service') || '');
                });
            });
        }
    </script>
</body>
</html>
