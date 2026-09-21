<?php
// Formester form that receives this page's leads (the code after /forms/ in the Formester URL).
$formester_form_id = 'lxy1PWOyt'; // Formester form: "LP - LASIK Surgery in Delhi"
// Path back to the project root (assets, css, thankyou.php). Works for both the clean URL
// (/<slug>/ via .htaccess rewrite) and the direct folder URL (/pages/<slug>/).
$base = (strpos($_SERVER['REQUEST_URI'] ?? '', '/pages/') !== false) ? '../../' : '../';
$page_title = "LASIK Surgery in Delhi | Advanced LASIK Eye Surgery | Vision Eye Centre";
$page_description = "Advanced LASIK eye surgery in Delhi at Vision Eye Centre, NABH accredited. Get evaluated by experienced cornea & refractive specialists and check your LASIK eligibility. LASIK, iLASIK, Contoura Vision, SMILE Pro & ICL.";
$canonical = 'https://' . ($_SERVER['HTTP_HOST'] ?? 'enquire.mydomain.com') . '/landing-page/lasik-surgery-in-delhi/';
?>
<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-WSF4CVTL');</script>
<!-- End Google Tag Manager -->
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title><?php echo $page_title; ?></title>
<meta name="description" content="<?php echo $page_description; ?>">
<link rel="canonical" href="<?php echo $canonical; ?>">
<link rel="icon" type="image/svg+xml" href="<?php echo $base; ?>favicon.svg" />
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&family=Quicksand:wght@400;500;600;700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
<script src="https://cdn.tailwindcss.com"></script>
<script>
tailwind.config = { theme: { extend: {
colors: { primary:'#0F4C81','primary-dark':'#0A3459',accent:'#0284C7',teal:'#0D9488',gold:'#D97706','gold-light':'#FEF3C7',cream:'#F8FAFC','soft-blue':'#F0F9FF' },
fontFamily: { sans:['Quicksand','Inter','sans-serif'], heading:['Inter','sans-serif'] }
}}};
</script>
<style>input:focus,select:focus,textarea:focus{box-shadow:0 0 0 3px rgba(2,132,199,.2);} .faq-a{display:none;} .faq-item.open .faq-a{display:block;} .faq-item.open .faq-chev{transform:rotate(180deg);}</style>
<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=AW-11323462665"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'AW-11323462665');
</script>
</head>
<body class="bg-cream font-sans text-slate-800 min-h-screen flex flex-col selection:bg-accent/20 selection:text-primary">
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-WSF4CVTL"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->

<!-- Top bar -->
<div class="bg-primary text-white py-2 px-4 text-xs md:text-sm font-medium border-b border-white/10">
<div class="container mx-auto flex flex-col sm:flex-row justify-between items-center gap-2">
<div class="flex items-center gap-4">
<span class="flex items-center gap-1.5"><i class="fa-solid fa-phone text-accent"></i> Helpline: <a href="tel:+919711004422" class="hover:underline font-bold text-sky-200">+91 9711004422</a></span>
<span class="hidden md:inline text-white/40">|</span>
<span class="hidden md:flex items-center gap-1.5"><i class="fa-solid fa-envelope text-accent"></i> <a href="mailto:visioneyecentrehr@gmail.com" class="hover:underline text-sky-200">visioneyecentrehr@gmail.com</a></span>
</div>
<div class="flex items-center gap-3">
<span class="bg-gold/20 text-gold-light border border-gold/40 px-2.5 py-0.5 rounded-full text-[11px] font-bold tracking-wide flex items-center gap-1"><i class="fa-solid fa-award text-gold"></i> NABH Accredited Centre</span>
<span class="hidden lg:inline text-white/70">Siri Fort & West Patel Nagar, New Delhi</span>
</div>
</div>
</div>

<!-- Header / Sticky CTA -->
<header class="w-full bg-white/95 backdrop-blur-md border-b border-slate-100 sticky top-0 z-50 py-3">
<div class="container mx-auto px-4 md:px-6 flex items-center justify-between gap-2">
<a href="<?php echo $base; ?>index.php" class="flex items-center gap-2 group min-w-0">
<img src="<?php echo $base; ?>assets/images/small-logo.png" alt="Vision Eye Centre Logo" class="h-9 md:h-12 w-auto object-contain flex-shrink-0">
<div class="flex flex-col min-w-0">
<span class="font-heading font-black text-primary text-base md:text-2xl tracking-tight leading-tight truncate">Vision Eye Centre</span>
<small class="hidden sm:block text-[11px] text-slate-500 font-medium">Excellence … with a humane touch</small>
</div>
</a>
<div class="flex items-center gap-2 flex-shrink-0">
<a href="https://wa.me/919711004422" target="_blank" class="hidden sm:inline-flex items-center gap-2 px-4 py-2.5 border-2 border-[#25D366] text-[#128C7E] font-bold rounded-full text-sm hover:bg-[#25D366] hover:text-white transition-all"><i class="fa-brands fa-whatsapp text-lg"></i> WhatsApp Us</a>
<a href="tel:+919711004422" class="inline-flex items-center gap-2 px-4 py-2.5 bg-accent hover:bg-sky-600 text-white font-bold rounded-full text-xs sm:text-sm shadow-md whitespace-nowrap"><i class="fa-solid fa-phone"></i> <span class="hidden sm:inline">Call: +91 9711004422</span><span class="sm:hidden">Call Now</span></a>
</div>
</div>
</header>

<main class="flex-grow">

<!-- HERO + LEAD FORM -->
<section class="relative pt-12 pb-14 md:pt-16 md:pb-20 overflow-hidden bg-cover bg-center" style="background-image:linear-gradient(to right,rgba(10,52,89,.94),rgba(15,76,129,.87)),url('<?php echo $base; ?>assets/images/lasik_surgery.png');">
<div class="container mx-auto px-4 md:px-6 relative z-10">
<div class="grid grid-cols-1 lg:grid-cols-12 gap-8 lg:gap-12 items-center">
<div class="lg:col-span-7 space-y-5 text-white">
<div class="inline-flex items-center gap-2 px-3.5 py-1.5 rounded-full bg-white/10 border border-white/20 text-sky-200 text-xs md:text-sm font-semibold backdrop-blur-md"><i class="fa-solid fa-eye text-sky-300"></i> LASIK SURGERY IN DELHI</div>
<h1 class="text-3xl sm:text-4xl md:text-5xl font-heading font-black leading-[1.15]">Advanced LASIK Eye Surgery for Clearer Vision</h1>
<p class="text-base md:text-lg text-slate-100 leading-relaxed font-medium max-w-2xl">Reduce your dependence on glasses and contact lenses with advanced LASIK vision correction at Vision Eye Centre.</p>
<p class="text-sm md:text-base text-sky-100/90 leading-relaxed max-w-2xl">Get evaluated by experienced cornea and refractive specialists and understand whether LASIK is suitable for your eyes based on your prescription, corneal characteristics and overall eye health.</p>
<div class="flex flex-wrap gap-3 pt-1">
<a href="#lead-form-hero" class="px-6 py-3 bg-accent hover:bg-sky-500 text-white font-bold rounded-full text-sm shadow-lg transition-all"><i class="fa-solid fa-clipboard-check mr-2"></i>Check Your LASIK Eligibility</a>
<a href="#lead-form-hero" class="px-6 py-3 bg-white/10 hover:bg-white/20 border border-white/40 text-white font-bold rounded-full text-sm shadow-lg transition-all backdrop-blur-md"><i class="fa-solid fa-calendar-check mr-2"></i>Book a LASIK Consultation</a>
</div>
<div class="grid grid-cols-2 sm:grid-cols-4 gap-3 pt-3 max-w-2xl">
<div class="bg-white/10 border border-white/15 rounded-2xl p-3 text-center backdrop-blur-md"><i class="fa-solid fa-clock text-sky-300 text-lg mb-1"></i><p class="text-[11px] font-bold leading-tight">26+ Years of Eye Care Experience</p></div>
<div class="bg-white/10 border border-white/15 rounded-2xl p-3 text-center backdrop-blur-md"><i class="fa-solid fa-award text-gold-light text-lg mb-1"></i><p class="text-[11px] font-bold leading-tight">NABH Accredited Centre</p></div>
<div class="bg-white/10 border border-white/15 rounded-2xl p-3 text-center backdrop-blur-md"><i class="fa-solid fa-wand-magic-sparkles text-sky-300 text-lg mb-1"></i><p class="text-[11px] font-bold leading-tight">Advanced Laser Technology</p></div>
<div class="bg-white/10 border border-white/15 rounded-2xl p-3 text-center backdrop-blur-md"><i class="fa-solid fa-user-check text-sky-300 text-lg mb-1"></i><p class="text-[11px] font-bold leading-tight">Personalised Eye Assessment</p></div>
</div>
</div>
<div class="lg:col-span-5" id="lead-form-hero">
<div class="bg-white p-6 sm:p-8 rounded-3xl shadow-2xl border border-slate-100">
<span class="text-accent font-bold text-xs uppercase tracking-widest">Book Your LASIK Consultation</span>
<h3 class="text-2xl font-heading font-extrabold text-primary mt-1">Find Out If LASIK Is Right for You</h3>
<p class="text-xs text-slate-500 mt-1 mb-4">Get a comprehensive eye evaluation from our experienced ophthalmology team and understand your available vision correction options.</p>
<form class="lead-form space-y-3.5" action="<?php echo $base; ?>thankyou.php" method="POST">
<div class="space-y-1"><label class="text-xs font-bold text-slate-700 block">Full Name *</label><input type="text" name="first-name" required placeholder="Your full name" class="w-full px-3.5 py-2.5 bg-slate-50 border border-slate-200 rounded-xl focus:border-accent outline-none text-sm"></div>
<div class="space-y-1"><label class="text-xs font-bold text-slate-700 block">Phone Number *</label><input type="tel" name="phone" required placeholder="+91 Mobile number" pattern="[0-9+ ]{10,15}" class="w-full px-3.5 py-2.5 bg-slate-50 border border-slate-200 rounded-xl focus:border-accent outline-none text-sm"></div>
<div class="space-y-1"><label class="text-xs font-bold text-slate-700 block">Preferred Centre *</label><select name="location" required class="w-full px-3.5 py-2.5 bg-slate-50 border border-slate-200 rounded-xl focus:border-accent outline-none text-sm cursor-pointer"><option value="" disabled selected>Select centre...</option><option value="Siri Fort Road">Siri Fort Road</option><option value="West Patel Nagar">West Patel Nagar</option></select></div>
<div class="space-y-1"><label class="text-xs font-bold text-slate-700 block">Message / Eye Concern</label><textarea name="message" rows="3" placeholder="Describe your eye concern..." class="w-full px-3.5 py-2.5 bg-slate-50 border border-slate-200 rounded-xl focus:border-accent outline-none text-sm"></textarea></div>
<button type="submit" class="w-full py-3.5 bg-accent hover:bg-sky-600 text-white font-bold rounded-xl shadow-lg text-base flex items-center justify-center gap-2"><i class="fa-solid fa-calendar-check"></i> Book LASIK Consultation</button>
<p class="text-[11px] text-slate-400 text-center">By submitting, you agree to be contacted by Vision Eye Centre.</p>
</form>
</div>
</div>
</div>
</div>
</section>

<!-- WHY VISION EYE CENTRE -->
<section class="py-14 md:py-20 bg-cream">
<div class="container mx-auto px-4 md:px-6">
<div class="text-center max-w-3xl mx-auto mb-12">
<span class="text-accent font-bold tracking-widest uppercase text-xs">Why Vision Eye Centre?</span>
<h2 class="text-3xl md:text-4xl font-heading font-black text-primary mt-2">Specialist-Led LASIK Care With Advanced Eye Care Expertise</h2>
<p class="text-sm md:text-base text-slate-600 mt-3">Vision Eye Centre combines experienced ophthalmologists, advanced technology and comprehensive eye care to support personalised vision correction treatment.</p>
</div>
<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 max-w-6xl mx-auto">
<div class="bg-white p-6 rounded-2xl border border-slate-200"><div class="w-12 h-12 rounded-xl bg-accent/10 flex items-center justify-center mb-4"><i class="fa-solid fa-user-doctor text-accent text-xl"></i></div><h3 class="font-bold text-primary text-lg mb-2">Experienced Cornea & Refractive Specialists</h3><p class="text-sm text-slate-600">Our team includes experienced ophthalmologists with specialist training in cornea and refractive surgery, including Dr. Tushar Grover, Medical Director and cornea and refractive specialist.</p></div>
<div class="bg-white p-6 rounded-2xl border border-slate-200"><div class="w-12 h-12 rounded-xl bg-sky-500/10 flex items-center justify-center mb-4"><i class="fa-solid fa-clock text-sky-600 text-xl"></i></div><h3 class="font-bold text-primary text-lg mb-2">26+ Years of Eye Care Experience</h3><p class="text-sm text-slate-600">Vision Eye Centre has over 26 years of experience in comprehensive ophthalmic care.</p></div>
<div class="bg-white p-6 rounded-2xl border border-slate-200"><div class="w-12 h-12 rounded-xl bg-gold/10 flex items-center justify-center mb-4"><i class="fa-solid fa-award text-gold text-xl"></i></div><h3 class="font-bold text-primary text-lg mb-2">NABH Accredited Eye Care Centre</h3><p class="text-sm text-slate-600">Vision Eye Centre is NABH accredited, reflecting its focus on healthcare quality, safety and standardised clinical practices.</p></div>
<div class="bg-white p-6 rounded-2xl border border-slate-200"><div class="w-12 h-12 rounded-xl bg-teal/10 flex items-center justify-center mb-4"><i class="fa-solid fa-microscope text-teal text-xl"></i></div><h3 class="font-bold text-primary text-lg mb-2">Advanced Diagnostic & Surgical Technology</h3><p class="text-sm text-slate-600">Detailed eye and corneal evaluation supports accurate assessment and personalised treatment planning.</p></div>
<div class="bg-white p-6 rounded-2xl border border-slate-200"><div class="w-12 h-12 rounded-xl bg-violet-500/10 flex items-center justify-center mb-4"><i class="fa-solid fa-layer-group text-violet-600 text-xl"></i></div><h3 class="font-bold text-primary text-lg mb-2">Comprehensive Vision Correction Options</h3><p class="text-sm text-slate-600">Depending on individual suitability, patients can explore LASIK, advanced customised blade-free LASIK, Contoura Vision, SMILE Pro and ICL options.</p></div>
<div class="bg-white p-6 rounded-2xl border border-slate-200"><div class="w-12 h-12 rounded-xl bg-rose-500/10 flex items-center justify-center mb-4"><i class="fa-solid fa-clipboard-list text-rose-500 text-xl"></i></div><h3 class="font-bold text-primary text-lg mb-2">Personalised Treatment Planning</h3><p class="text-sm text-slate-600">Your ophthalmologist evaluates your individual eye characteristics before recommending the appropriate vision correction procedure.</p></div>
</div>
<div class="text-center mt-10"><a href="#lead-form-hero" class="inline-flex items-center gap-2 px-8 py-3.5 bg-accent hover:bg-sky-600 text-white font-bold rounded-full text-sm shadow-lg transition-all"><i class="fa-solid fa-calendar-check"></i> Book a LASIK Consultation</a></div>
</div>
</section>

<!-- WHAT IS LASIK -->
<section id="what-is-lasik" class="py-14 md:py-20 bg-white border-y border-slate-100">
<div class="container mx-auto px-4 md:px-6">
<div class="grid grid-cols-1 lg:grid-cols-2 gap-10 lg:gap-14 items-center max-w-6xl mx-auto">
<div>
<img src="<?php echo $base; ?>assets/images/lasik_surgery.png" alt="LASIK eye surgery at Vision Eye Centre, Delhi" loading="lazy" class="w-full h-72 md:h-[26rem] object-cover rounded-3xl shadow-xl border border-slate-200">
</div>
<div class="space-y-4">
<span class="text-accent font-bold tracking-widest uppercase text-xs">What Is LASIK?</span>
<h2 class="text-3xl md:text-4xl font-heading font-black text-primary">A Modern Approach to Vision Correction</h2>
<p class="text-sm md:text-base text-slate-600 leading-relaxed">LASIK, or Laser-Assisted In Situ Keratomileusis, is a laser vision correction procedure that reshapes the cornea to help correct certain refractive errors.</p>
<p class="text-sm md:text-base text-slate-600 leading-relaxed">It may help suitable patients reduce their dependence on spectacles and contact lenses.</p>
<p class="text-sm md:text-base text-slate-600 leading-relaxed">Before recommending LASIK, our specialists evaluate your refractive error, corneal characteristics and overall eye health to determine whether the procedure is appropriate for you.</p>
</div>
</div>
</div>
</section>

<!-- CONDITIONS LASIK MAY CORRECT -->
<section class="py-14 md:py-20 bg-cream">
<div class="container mx-auto px-4 md:px-6">
<div class="text-center max-w-3xl mx-auto mb-12">
<span class="text-accent font-bold tracking-widest uppercase text-xs">Vision Conditions LASIK May Correct</span>
<h2 class="text-3xl md:text-4xl font-heading font-black text-primary mt-2">LASIK for Common Refractive Errors</h2>
</div>
<div class="grid grid-cols-1 md:grid-cols-3 gap-6 max-w-5xl mx-auto">
<div class="bg-white p-6 rounded-2xl border border-slate-200 text-center"><div class="w-14 h-14 rounded-full bg-accent/10 flex items-center justify-center mb-4 mx-auto"><i class="fa-solid fa-mountain-sun text-accent text-xl"></i></div><h3 class="font-bold text-primary text-lg mb-2">Myopia</h3><p class="text-sm text-slate-600">Also known as short-sightedness, myopia can make distant objects appear blurred.</p></div>
<div class="bg-white p-6 rounded-2xl border border-slate-200 text-center"><div class="w-14 h-14 rounded-full bg-teal/10 flex items-center justify-center mb-4 mx-auto"><i class="fa-solid fa-book-open text-teal text-xl"></i></div><h3 class="font-bold text-primary text-lg mb-2">Hypermetropia</h3><p class="text-sm text-slate-600">Also known as long-sightedness, hypermetropia can affect the ability to see nearby objects clearly.</p></div>
<div class="bg-white p-6 rounded-2xl border border-slate-200 text-center"><div class="w-14 h-14 rounded-full bg-violet-500/10 flex items-center justify-center mb-4 mx-auto"><i class="fa-solid fa-bullseye text-violet-600 text-xl"></i></div><h3 class="font-bold text-primary text-lg mb-2">Astigmatism</h3><p class="text-sm text-slate-600">Astigmatism occurs when the cornea or lens has an irregular shape, which can result in blurred or distorted vision.</p></div>
</div>
<div class="max-w-3xl mx-auto mt-8 bg-gold-light border border-gold/30 rounded-2xl px-5 py-4 text-sm text-slate-700 flex items-start gap-3"><i class="fa-solid fa-circle-info text-gold mt-0.5"></i><p><strong class="text-primary">Important:</strong> Suitability for LASIK depends on your individual eye measurements and clinical evaluation.</p></div>
<div class="text-center mt-8"><a href="#lead-form-mid" class="inline-flex items-center gap-2 px-8 py-3.5 bg-accent hover:bg-sky-600 text-white font-bold rounded-full text-sm shadow-lg transition-all"><i class="fa-solid fa-clipboard-check"></i> Check Your LASIK Eligibility</a></div>
</div>
</section>

<!-- WHEN SHOULD YOU CONSIDER LASIK -->
<section class="py-14 md:py-20 bg-white border-y border-slate-100">
<div class="container mx-auto px-4 md:px-6">
<div class="text-center max-w-3xl mx-auto mb-12">
<span class="text-accent font-bold tracking-widest uppercase text-xs">When Should You Consider LASIK?</span>
<h2 class="text-3xl md:text-4xl font-heading font-black text-primary mt-2">Tired of Depending on Glasses or Contact Lenses?</h2>
<p class="text-sm md:text-base text-slate-600 mt-3">LASIK may be considered by suitable patients who want to reduce their dependence on corrective eyewear.</p>
</div>
<div class="grid grid-cols-1 md:grid-cols-3 gap-6 max-w-5xl mx-auto">
<div class="p-6 bg-slate-50 border border-slate-200 rounded-2xl"><h3 class="font-bold text-primary mb-2"><i class="fa-solid fa-person-running text-accent mr-2"></i>Everyday Convenience</h3><p class="text-sm text-slate-600">Glasses or contact lenses can sometimes be inconvenient during sports, travel, outdoor activities or everyday routines.</p></div>
<div class="p-6 bg-slate-50 border border-slate-200 rounded-2xl"><h3 class="font-bold text-primary mb-2"><i class="fa-solid fa-scale-balanced text-teal mr-2"></i>Stable Vision</h3><p class="text-sm text-slate-600">A stable spectacle prescription is one of the factors your ophthalmologist may consider when assessing LASIK suitability.</p></div>
<div class="p-6 bg-slate-50 border border-slate-200 rounded-2xl"><h3 class="font-bold text-primary mb-2"><i class="fa-solid fa-glasses text-sky-600 mr-2"></i>Refractive Errors</h3><p class="text-sm text-slate-600">LASIK may be used to correct certain levels of myopia, hypermetropia and astigmatism in suitable candidates.</p></div>
</div>

<!-- Mid lead form -->
<div id="lead-form-mid" class="max-w-3xl mx-auto mt-14 bg-primary rounded-3xl p-6 sm:p-10 text-white shadow-2xl">
<h3 class="text-2xl font-heading font-extrabold text-center">Looking for Vision Correction?</h3>
<p class="text-sm text-sky-200 text-center mt-2 mb-6">A detailed eye examination is required before determining whether LASIK is appropriate for you.</p>
<form class="lead-form grid grid-cols-1 sm:grid-cols-2 gap-3" action="<?php echo $base; ?>thankyou.php" method="POST">
<input type="text" name="first-name" required placeholder="Full Name *" class="px-4 py-3 rounded-xl text-slate-800 text-sm outline-none">
<input type="tel" name="phone" required placeholder="Phone Number *" pattern="[0-9+ ]{10,15}" class="px-4 py-3 rounded-xl text-slate-800 text-sm outline-none">
<select name="location" required class="px-4 py-3 rounded-xl text-slate-800 text-sm outline-none cursor-pointer"><option value="" disabled selected>Preferred Centre *</option><option>Siri Fort Road</option><option>West Patel Nagar</option></select>
<input type="text" name="message" placeholder="Message / Eye Concern" class="px-4 py-3 rounded-xl text-slate-800 text-sm outline-none">
<button type="submit" class="sm:col-span-2 py-3.5 bg-gold hover:bg-amber-600 text-white font-bold rounded-xl transition-all"><i class="fa-solid fa-calendar-check mr-2"></i>Book a LASIK Evaluation</button>
</form>
</div>
</div>
</section>

<!-- ADVANCED LASIK TECHNOLOGY -->
<section class="py-14 md:py-20 bg-cream">
<div class="container mx-auto px-4 md:px-6">
<div class="text-center max-w-3xl mx-auto mb-12">
<span class="text-accent font-bold tracking-widest uppercase text-xs">Advanced LASIK Technology</span>
<h2 class="text-3xl md:text-4xl font-heading font-black text-primary mt-2">Detailed Diagnostics for Personalised Vision Correction</h2>
<p class="text-sm md:text-base text-slate-600 mt-3">Accurate assessment is an important part of planning laser vision correction.</p>
<p class="text-sm md:text-base text-slate-600 mt-2">Vision Eye Centre provides advanced diagnostic evaluation to help specialists understand the characteristics of your eyes and determine the most appropriate treatment approach.</p>
</div>
<div class="grid grid-cols-1 md:grid-cols-2 gap-6 max-w-5xl mx-auto">
<div class="p-6 bg-white border border-slate-200 rounded-2xl"><h3 class="font-bold text-primary mb-2"><i class="fa-solid fa-crosshairs text-accent mr-2"></i>Corneal Assessment</h3><p class="text-sm text-slate-600">Detailed evaluation of the cornea helps assess its shape and characteristics before refractive treatment.</p></div>
<div class="p-6 bg-white border border-slate-200 rounded-2xl"><h3 class="font-bold text-primary mb-2"><i class="fa-solid fa-stethoscope text-teal mr-2"></i>Comprehensive Eye Examination</h3><p class="text-sm text-slate-600">Your vision, refractive error and overall eye health are evaluated before treatment.</p></div>
<div class="p-6 bg-white border border-slate-200 rounded-2xl"><h3 class="font-bold text-primary mb-2"><i class="fa-solid fa-wand-magic-sparkles text-sky-600 mr-2"></i>Advanced Vision Correction Options</h3><p class="text-sm text-slate-600">Vision Eye Centre provides access to multiple refractive procedures, including LASIK, iLASIK, Contoura Vision, SMILE Pro and ICL, depending on individual suitability.</p></div>
<div class="p-6 bg-white border border-slate-200 rounded-2xl"><h3 class="font-bold text-primary mb-2"><i class="fa-solid fa-user-doctor text-gold mr-2"></i>Specialist-Led Treatment Planning</h3><p class="text-sm text-slate-600">Your results are reviewed by an ophthalmologist before a treatment recommendation is made.</p></div>
</div>
<div class="text-center mt-10"><a href="#lead-form-hero" class="inline-flex items-center gap-2 px-8 py-3.5 bg-accent hover:bg-sky-600 text-white font-bold rounded-full text-sm shadow-lg transition-all"><i class="fa-solid fa-calendar-check"></i> Book Your Eye Evaluation</a></div>
</div>
</section>

<!-- ARE YOU SUITABLE FOR LASIK -->
<section id="eligibility" class="py-14 md:py-20 bg-primary text-white">
<div class="container mx-auto px-4 md:px-6">
<div class="text-center max-w-3xl mx-auto mb-12">
<span class="text-sky-300 font-bold tracking-widest uppercase text-xs">Are You Suitable for LASIK?</span>
<h2 class="text-3xl md:text-4xl font-heading font-black mt-2">A Detailed Evaluation Comes Before Treatment</h2>
<p class="text-sm md:text-base text-sky-100/90 mt-3">LASIK is not suitable for everyone. Your ophthalmologist will evaluate multiple factors before recommending surgery.</p>
</div>
<div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-5 gap-5 max-w-6xl mx-auto">
<div class="bg-white/10 border border-white/15 rounded-2xl p-5 backdrop-blur"><i class="fa-solid fa-glasses text-sky-300 text-xl mb-3"></i><h3 class="font-bold text-base text-sky-200 mb-2">Refractive Error</h3><p class="text-sm text-slate-100/90">Your spectacle prescription and type of refractive error are assessed.</p></div>
<div class="bg-white/10 border border-white/15 rounded-2xl p-5 backdrop-blur"><i class="fa-solid fa-crosshairs text-sky-300 text-xl mb-3"></i><h3 class="font-bold text-base text-sky-200 mb-2">Corneal Health</h3><p class="text-sm text-slate-100/90">Corneal shape, thickness and other relevant characteristics are evaluated.</p></div>
<div class="bg-white/10 border border-white/15 rounded-2xl p-5 backdrop-blur"><i class="fa-solid fa-eye text-sky-300 text-xl mb-3"></i><h3 class="font-bold text-base text-sky-200 mb-2">Eye Health</h3><p class="text-sm text-slate-100/90">Your overall eye health and any existing ocular conditions are considered.</p></div>
<div class="bg-white/10 border border-white/15 rounded-2xl p-5 backdrop-blur"><i class="fa-solid fa-scale-balanced text-sky-300 text-xl mb-3"></i><h3 class="font-bold text-base text-sky-200 mb-2">Vision Stability</h3><p class="text-sm text-slate-100/90">The stability of your prescription may be considered when determining suitability.</p></div>
<div class="bg-white/10 border border-white/15 rounded-2xl p-5 backdrop-blur sm:col-span-2 lg:col-span-1"><i class="fa-solid fa-user-check text-sky-300 text-xl mb-3"></i><h3 class="font-bold text-base text-sky-200 mb-2">Individual Assessment</h3><p class="text-sm text-slate-100/90">Your specialist reviews all relevant clinical findings before recommending LASIK or another vision correction option.</p></div>
</div>
<div class="text-center mt-10"><a href="#lead-form-hero" class="inline-flex items-center gap-2 px-8 py-3.5 bg-white text-primary font-bold rounded-full text-sm hover:bg-sky-100 transition-all"><i class="fa-solid fa-clipboard-check"></i> Check Your LASIK Eligibility</a></div>
</div>
</section>

<!-- DOCTORS -->
<section id="doctors" class="py-14 md:py-20 bg-cream">
<div class="container mx-auto px-4 md:px-6">
<div class="text-center max-w-2xl mx-auto mb-12">
<span class="text-accent font-bold tracking-widest uppercase text-xs">Meet Our Eye Specialists</span>
<h2 class="text-3xl md:text-4xl font-heading font-black text-primary mt-2">Experienced Ophthalmologists at Vision Eye Centre</h2>
</div>
<div class="grid grid-cols-1 md:grid-cols-3 gap-6 max-w-5xl mx-auto">
<div class="bg-white p-8 rounded-3xl border border-slate-200 text-center shadow-sm flex flex-col">
<img src="<?php echo $base; ?>assets/images/chairman-dr-grover.webp" alt="Prof. (Dr) A. K. Grover" class="w-28 h-28 rounded-full object-cover border-4 border-gold mx-auto shadow-md">
<h4 class="font-bold text-primary text-lg mt-4">Prof. (Dr) A. K. Grover</h4>
<p class="text-xs font-bold text-gold">Chairman – Vision Eye Centres</p>
<p class="text-xs text-slate-500 mt-1">MD – AIIMS • FRCS – Glasgow • FAICO • FICO • FIMSA</p>
<p class="text-xs font-semibold text-gold mt-1"><i class="fa-solid fa-medal mr-1"></i>Padma Shri Awardee</p>
<p class="text-[13px] text-slate-600 mt-2 flex-grow">Prof. (Dr) A. K. Grover is the Chairman of Vision Eye Centres and has extensive experience in ophthalmology.</p>
<a href="#lead-form-doctors" class="mt-4 inline-flex self-center px-5 py-2.5 bg-primary text-white text-xs font-bold rounded-full hover:bg-primary-dark">Book Consultation</a>
</div>
<div class="bg-white p-8 rounded-3xl border-2 border-teal/40 text-center shadow-md flex flex-col">
<img src="<?php echo $base; ?>assets/images/dr-tushar-grover.webp" alt="Dr. Tushar Grover" class="w-28 h-28 rounded-full object-cover border-4 border-teal mx-auto shadow-md">
<h4 class="font-bold text-primary text-lg mt-4">Dr. Tushar Grover</h4>
<p class="text-xs font-bold text-teal">Medical Director | Cornea & Refractive Specialist</p>
<p class="text-xs text-slate-500 mt-1">MS – Aravind Eye Hospital • FAICO – Cornea • FICO – Cornea • FAICO – Refractive • Fellowship – Narayana Nethralaya • GMHE – IIM Bangalore</p>
<p class="text-[13px] text-slate-600 mt-2 flex-grow">Dr. Tushar Grover specialises in cornea and refractive services, including advanced vision correction procedures.</p>
<a href="#lead-form-doctors" class="mt-4 inline-flex self-center px-5 py-2.5 bg-teal text-white text-xs font-bold rounded-full hover:bg-teal-700">Consult Dr. Tushar Grover</a>
</div>
<div class="bg-white p-8 rounded-3xl border border-slate-200 text-center shadow-sm flex flex-col">
<img src="<?php echo $base; ?>assets/images/dr-apoorv-grover.webp" alt="Dr. Apoorv Grover" class="w-28 h-28 rounded-full object-cover border-4 border-accent mx-auto shadow-md">
<h4 class="font-bold text-primary text-lg mt-4">Dr. Apoorv Grover</h4>
<p class="text-xs font-bold text-accent">Medical Director | Vitreoretina & Uvea Specialist</p>
<p class="text-xs text-slate-500 mt-1">DNB • MNAMS • FICO • Fellowship in Vitreoretina & Uvea – Aravind Eye Hospital</p>
<p class="text-[13px] text-slate-600 mt-2 flex-grow">Dr. Apoorv Grover provides specialised care for vitreoretinal and uveal conditions.</p>
<a href="#lead-form-doctors" class="mt-4 inline-flex self-center px-5 py-2.5 bg-accent text-white text-xs font-bold rounded-full hover:bg-sky-600">Book Consultation</a>
</div>
</div>
<div id="lead-form-doctors" class="max-w-3xl mx-auto mt-12 bg-white rounded-3xl border border-slate-200 p-6 sm:p-8 shadow-lg">
<h3 class="text-xl font-heading font-extrabold text-primary text-center">Consult Our LASIK Specialist</h3>
<p class="text-xs text-slate-500 text-center mt-1 mb-5">Book a consultation with our cornea and refractive team for your vision correction evaluation.</p>
<form class="lead-form grid grid-cols-1 sm:grid-cols-2 gap-3" action="<?php echo $base; ?>thankyou.php" method="POST">
<input type="text" name="first-name" required placeholder="Full Name *" class="px-4 py-3 bg-slate-50 border border-slate-200 rounded-xl text-sm outline-none">
<input type="tel" name="phone" required placeholder="Phone Number *" pattern="[0-9+ ]{10,15}" class="px-4 py-3 bg-slate-50 border border-slate-200 rounded-xl text-sm outline-none">
<select name="location" required class="px-4 py-3 bg-slate-50 border border-slate-200 rounded-xl text-sm outline-none cursor-pointer"><option value="" disabled selected>Preferred Centre *</option><option>Siri Fort Road</option><option>West Patel Nagar</option></select>
<input type="text" name="message" placeholder="Message / Eye Concern" class="px-4 py-3 bg-slate-50 border border-slate-200 rounded-xl text-sm outline-none">
<button type="submit" class="sm:col-span-2 py-3.5 bg-accent hover:bg-sky-600 text-white font-bold rounded-xl">Book Consultation</button>
</form>
</div>
</div>
</section>

<!-- TECHNOLOGY & INFRASTRUCTURE -->
<section class="py-14 md:py-20 bg-white border-y border-slate-100">
<div class="container mx-auto px-4 md:px-6">
<div class="text-center max-w-3xl mx-auto mb-12">
<span class="text-accent font-bold tracking-widest uppercase text-xs">Technology & Infrastructure</span>
<h2 class="text-3xl md:text-4xl font-heading font-black text-primary mt-2">Advanced Technology. Comprehensive Eye Care.</h2>
<p class="text-sm md:text-base text-slate-600 mt-3">Vision Eye Centre combines modern technology, specialist expertise and a comprehensive ophthalmic care environment.</p>
</div>
<div class="grid grid-cols-1 md:grid-cols-2 gap-6 max-w-5xl mx-auto">
<div class="p-6 bg-slate-50 border border-slate-200 rounded-2xl"><h3 class="font-bold text-primary mb-2"><i class="fa-solid fa-wand-magic-sparkles text-accent mr-2"></i>Advanced Vision Correction</h3><p class="text-sm text-slate-600">Access to modern vision correction procedures for eligible patients.</p></div>
<div class="p-6 bg-slate-50 border border-slate-200 rounded-2xl"><h3 class="font-bold text-primary mb-2"><i class="fa-solid fa-microscope text-teal mr-2"></i>Detailed Eye Diagnostics</h3><p class="text-sm text-slate-600">Comprehensive assessment helps specialists evaluate your eyes before recommending treatment.</p></div>
<div class="p-6 bg-slate-50 border border-slate-200 rounded-2xl"><h3 class="font-bold text-primary mb-2"><i class="fa-solid fa-hospital text-gold mr-2"></i>Modern Surgical Infrastructure</h3><p class="text-sm text-slate-600">Vision Eye Centre highlights advanced operation theatres, laminar airflow systems and HEPA filtration as part of its surgical infrastructure.</p></div>
<div class="p-6 bg-slate-50 border border-slate-200 rounded-2xl"><h3 class="font-bold text-primary mb-2"><i class="fa-solid fa-house-medical text-sky-600 mr-2"></i>Comprehensive Eye Care Under One Roof</h3><p class="text-sm text-slate-600">Patients can access multiple ophthalmic specialties including cornea, retina, glaucoma, cataract and paediatric eye care.</p></div>
</div>
</div>
</section>

<!-- JOURNEY -->
<section class="py-14 md:py-20 bg-cream">
<div class="container mx-auto px-4 md:px-6">
<div class="text-center max-w-2xl mx-auto mb-12">
<span class="text-accent font-bold tracking-widest uppercase text-xs">Your LASIK Journey</span>
<h2 class="text-3xl md:text-4xl font-heading font-black text-primary mt-2">From Eye Evaluation to Vision Correction</h2>
</div>
<div class="grid grid-cols-1 md:grid-cols-5 gap-4 max-w-6xl mx-auto">
<div class="p-5 bg-white border border-slate-200 rounded-2xl text-center"><span class="inline-flex w-10 h-10 rounded-full bg-primary text-white font-black items-center justify-center mb-3">1</span><h3 class="font-bold text-primary text-sm mb-1">Comprehensive Eye Consultation</h3><p class="text-xs text-slate-600">Your ophthalmologist evaluates your vision, refractive error and overall eye health.</p></div>
<div class="p-5 bg-white border border-slate-200 rounded-2xl text-center"><span class="inline-flex w-10 h-10 rounded-full bg-primary text-white font-black items-center justify-center mb-3">2</span><h3 class="font-bold text-primary text-sm mb-1">Detailed Diagnostic Assessment</h3><p class="text-xs text-slate-600">Relevant eye and corneal measurements are performed to assess your suitability for vision correction.</p></div>
<div class="p-5 bg-white border border-slate-200 rounded-2xl text-center"><span class="inline-flex w-10 h-10 rounded-full bg-primary text-white font-black items-center justify-center mb-3">3</span><h3 class="font-bold text-primary text-sm mb-1">Personalised Treatment Plan</h3><p class="text-xs text-slate-600">Your specialist reviews the findings and discusses LASIK or other suitable vision correction options.</p></div>
<div class="p-5 bg-white border border-slate-200 rounded-2xl text-center"><span class="inline-flex w-10 h-10 rounded-full bg-primary text-white font-black items-center justify-center mb-3">4</span><h3 class="font-bold text-primary text-sm mb-1">Vision Correction Procedure</h3><p class="text-xs text-slate-600">If you are found suitable, the recommended procedure is performed using the appropriate technology and clinical protocols.</p></div>
<div class="p-5 bg-white border border-slate-200 rounded-2xl text-center"><span class="inline-flex w-10 h-10 rounded-full bg-primary text-white font-black items-center justify-center mb-3">5</span><h3 class="font-bold text-primary text-sm mb-1">Recovery & Follow-Up</h3><p class="text-xs text-slate-600">Your ophthalmologist provides post-treatment guidance and follow-up to monitor your recovery.</p></div>
</div>
<div class="text-center mt-10"><a href="#lead-form-hero" class="inline-flex items-center gap-2 px-8 py-3.5 bg-accent hover:bg-sky-600 text-white font-bold rounded-full text-sm shadow-lg transition-all"><i class="fa-solid fa-route"></i> Start Your LASIK Journey</a></div>
</div>
</section>

<!-- LASIK OR ANOTHER OPTION -->
<section id="options" class="py-14 md:py-20 bg-primary text-white">
<div class="container mx-auto px-4 md:px-6">
<div class="text-center max-w-3xl mx-auto mb-12">
<span class="text-sky-300 font-bold tracking-widest uppercase text-xs">LASIK or Another Vision Correction Option?</span>
<h2 class="text-3xl md:text-4xl font-heading font-black mt-2">Explore the Right Procedure for Your Eyes</h2>
<p class="text-sm md:text-base text-sky-100/90 mt-3">LASIK is one of several vision correction procedures available at Vision Eye Centre.</p>
</div>
<div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-5 gap-5 max-w-6xl mx-auto">
<div class="bg-white/10 border border-white/15 rounded-2xl p-5 backdrop-blur"><h3 class="font-bold text-lg text-sky-200 mb-2">LASIK</h3><p class="text-sm text-slate-100/90">Laser-based corneal vision correction for suitable candidates.</p></div>
<div class="bg-white/10 border border-white/15 rounded-2xl p-5 backdrop-blur"><h3 class="font-bold text-lg text-sky-200 mb-2">iLASIK</h3><p class="text-sm text-slate-100/90">Advanced customised blade-free LASIK for eligible patients.</p></div>
<div class="bg-white/10 border border-white/15 rounded-2xl p-5 backdrop-blur"><h3 class="font-bold text-lg text-sky-200 mb-2">Contoura Vision</h3><p class="text-sm text-slate-100/90">Topography-guided vision correction based on detailed corneal mapping.</p></div>
<div class="bg-white/10 border border-white/15 rounded-2xl p-5 backdrop-blur"><h3 class="font-bold text-lg text-sky-200 mb-2">SMILE Pro</h3><p class="text-sm text-slate-100/90">A minimally invasive laser vision correction option for eligible patients.</p></div>
<div class="bg-white/10 border border-white/15 rounded-2xl p-5 backdrop-blur sm:col-span-2 lg:col-span-1"><h3 class="font-bold text-lg text-sky-200 mb-2">ICL</h3><p class="text-sm text-slate-100/90">An implantable lens-based vision correction option for selected patients.</p></div>
</div>
<p class="text-sm text-sky-100/90 text-center max-w-3xl mx-auto mt-8">The appropriate procedure depends on your eye condition, corneal characteristics, refractive error and clinical assessment.</p>
<div class="text-center mt-8"><a href="#lead-form-hero" class="inline-flex items-center gap-2 px-8 py-3.5 bg-white text-primary font-bold rounded-full text-sm hover:bg-sky-100 transition-all"><i class="fa-solid fa-magnifying-glass"></i> Find Your Suitable Vision Correction Option</a></div>
</div>
</section>

<!-- TESTIMONIALS -->
<section class="py-14 md:py-20 bg-white border-b border-slate-100">
<div class="container mx-auto px-4 md:px-6">
<div class="text-center max-w-2xl mx-auto mb-10">
<span class="text-accent font-bold tracking-widest uppercase text-xs">Patient Experiences</span>
<h2 class="text-3xl md:text-4xl font-heading font-black text-primary mt-2">What Our Patients Say</h2>
</div>
<!-- NOTE: Only verified Google reviews / approved patient testimonials go here. Add a third card when another approved LASIK review is available. -->
<div class="grid grid-cols-1 md:grid-cols-2 gap-6 max-w-4xl mx-auto">
<div class="bg-slate-50 p-7 rounded-3xl border border-slate-200"><div class="text-gold mb-3"><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i></div><p class="text-sm text-slate-700 italic leading-relaxed">"My LASIK surgery went perfectly, and I can now see clearly without glasses. The facility was clean and equipped with the latest machines. I would highly recommend Vision Eye Centre."</p><p class="mt-4 font-bold text-primary text-sm">— Rani Shah</p></div>
<div class="bg-slate-50 p-7 rounded-3xl border border-slate-200"><div class="text-gold mb-3"><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i></div><p class="text-sm text-slate-700 italic leading-relaxed">"From appointment booking to surgery, everything was smooth. The doctors are kind and take time to explain each step."</p><p class="mt-4 font-bold text-primary text-sm">— Gyanesh Sethi</p></div>
</div>
<div class="text-center mt-8"><a href="https://www.google.com/maps/search/?api=1&query=Vision+Eye+Centre+Siri+Fort+Road+New+Delhi" target="_blank" rel="noopener" class="inline-flex items-center gap-2 px-7 py-3 border-2 border-accent text-accent font-bold rounded-full text-sm hover:bg-accent hover:text-white transition-all"><i class="fa-brands fa-google"></i> View More Patient Reviews</a></div>
</div>
</section>

<!-- FAQ -->
<section id="faqs" class="py-14 md:py-20 bg-cream">
<div class="container mx-auto px-4 md:px-6">
<div class="text-center max-w-2xl mx-auto mb-10">
<span class="text-accent font-bold tracking-widest uppercase text-xs">Frequently Asked Questions</span>
<h2 class="text-3xl md:text-4xl font-heading font-black text-primary mt-2">LASIK Surgery FAQs</h2>
</div>
<div class="max-w-3xl mx-auto space-y-3">
<?php
$faqs=[
["What is LASIK surgery?","LASIK is a laser vision correction procedure that reshapes the cornea to help correct certain refractive errors and may reduce dependence on glasses or contact lenses for suitable patients."],
["Is LASIK suitable for everyone?","No. LASIK is not suitable for every patient. Your refractive error, corneal characteristics, eye health and other clinical factors need to be assessed before treatment."],
["Can LASIK correct myopia and astigmatism?","LASIK may correct certain levels of myopia, hypermetropia and astigmatism in suitable candidates. Your specialist will determine your suitability after a detailed evaluation."],
["What is the difference between LASIK and Contoura Vision?","Both are laser vision correction procedures, but Contoura Vision uses topography-guided treatment planning based on detailed corneal mapping. Your ophthalmologist can explain which option is appropriate for your eyes."],
["What is SMILE Pro?","SMILE Pro is a minimally invasive laser vision correction procedure available for selected patients. Suitability depends on individual eye characteristics and clinical assessment."],
["What is ICL?","ICL, or Implantable Contact Lens, is a lens-based vision correction option that may be considered for selected patients who may not be suitable for certain laser procedures."],
["Does LASIK permanently remove the need for glasses?","LASIK may significantly reduce dependence on glasses for suitable patients, but individual results vary. Age-related changes in vision can also occur later in life."],
["Is LASIK painful?","LASIK is generally performed using topical anaesthetic eye drops. Patients may experience temporary discomfort, dryness or sensitivity during recovery."],
["How long does LASIK recovery take?","Recovery varies between individuals and depends on the procedure and individual eye condition. Your ophthalmologist will provide personalised post-operative guidance."],
["How do I know which vision correction procedure is right for me?","The appropriate procedure depends on your prescription, corneal characteristics, eye health and other clinical factors. A comprehensive eye evaluation is required before treatment is recommended."],
];
foreach($faqs as $f){
echo '<div class="faq-item bg-white border border-slate-200 rounded-2xl overflow-hidden"><button type="button" class="faq-q w-full flex items-center justify-between gap-4 text-left px-5 py-4 font-bold text-primary text-sm">'.$f[0].'<i class="fa-solid fa-chevron-down faq-chev text-accent text-xs transition-transform flex-shrink-0"></i></button><div class="faq-a px-5 pb-5 text-sm text-slate-600 leading-relaxed">'.$f[1].'</div></div>';
}
?>
</div>
</div>
</section>

<!-- FINAL CTA -->
<section class="py-14 md:py-20 bg-primary text-white text-center">
<div class="container mx-auto px-4 md:px-6 max-w-3xl">
<h2 class="text-3xl md:text-4xl font-heading font-black">Ready to Explore Life Beyond Glasses?</h2>
<p class="font-bold mt-4">Take the first step towards understanding your vision correction options.</p>
<p class="text-sky-100/90 mt-2 text-sm md:text-base">Get evaluated by experienced ophthalmologists at Vision Eye Centre and understand whether LASIK or another vision correction procedure may be suitable for you.</p>
<div class="flex flex-wrap justify-center gap-3 mt-6">
<a href="#lead-form-hero" class="px-7 py-3.5 bg-white text-primary font-bold rounded-full text-sm hover:bg-sky-100"><i class="fa-solid fa-clipboard-check mr-2"></i>Check Your LASIK Eligibility</a>
<a href="#lead-form-contact" class="px-7 py-3.5 bg-accent text-white font-bold rounded-full text-sm hover:bg-sky-500"><i class="fa-solid fa-calendar-check mr-2"></i>Book a Consultation</a>
<a href="https://wa.me/919711004422" target="_blank" class="px-7 py-3.5 bg-[#25D366] text-white font-bold rounded-full text-sm hover:bg-[#128C7E]"><i class="fa-brands fa-whatsapp mr-2"></i>WhatsApp Us</a>
</div>
<p class="mt-5 text-sky-200 font-bold">Helpline: <a href="tel:+919711004422" class="underline">+91 9711004422</a></p>
</div>
</section>

<!-- CONTACT & LOCATIONS -->
<section id="contact" class="py-14 md:py-20 bg-white">
<div class="container mx-auto px-4 md:px-6">
<div class="text-center max-w-2xl mx-auto mb-10">
<span class="text-accent font-bold tracking-widest uppercase text-xs">Contact & Locations</span>
<h2 class="text-3xl md:text-4xl font-heading font-black text-primary mt-2">Book Your LASIK Consultation</h2>
</div>
<div class="grid grid-cols-1 md:grid-cols-2 gap-6 max-w-4xl mx-auto">
<div class="bg-slate-50 border border-slate-200 p-6 rounded-3xl"><span class="bg-accent/10 text-accent text-xs font-bold px-3 py-1 rounded-full uppercase">Siri Fort Road</span><h3 class="text-xl font-bold text-primary mt-2">South Delhi Centre</h3><p class="text-xs text-slate-600 mt-1">19, Siri Fort Road, Near Gargi College<br>New Delhi – 110049</p></div>
<div class="bg-slate-50 border border-slate-200 p-6 rounded-3xl"><span class="bg-teal/10 text-teal text-xs font-bold px-3 py-1 rounded-full uppercase">West Patel Nagar</span><h3 class="text-xl font-bold text-primary mt-2">West Delhi Centre</h3><p class="text-xs text-slate-600 mt-1">12/27, West Patel Nagar, Near Arya Samaj Mandir<br>New Delhi – 110008</p></div>
</div>
<div class="flex flex-col sm:flex-row flex-wrap justify-center items-center gap-x-8 gap-y-2 mt-6 text-sm font-bold text-primary">
<span><i class="fa-solid fa-phone text-accent mr-1.5"></i>Helpline: <a href="tel:+919711004422" class="hover:underline">+91 9711004422</a></span>
<span><i class="fa-solid fa-envelope text-accent mr-1.5"></i>Email: <a href="mailto:visioneyecentrehr@gmail.com" class="hover:underline">visioneyecentrehr@gmail.com</a></span>
</div>

<div id="lead-form-contact" class="max-w-3xl mx-auto mt-10 bg-white rounded-3xl border border-slate-200 p-6 sm:p-8 shadow-lg">
<h3 class="text-xl font-heading font-extrabold text-primary text-center">Book Your Appointment</h3>
<p class="text-xs text-slate-500 text-center mt-1 mb-5">Share your details and our team will help you schedule your LASIK evaluation.</p>
<form class="lead-form grid grid-cols-1 sm:grid-cols-2 gap-3" action="<?php echo $base; ?>thankyou.php" method="POST">
<input type="text" name="first-name" required placeholder="Full Name *" class="px-4 py-3 bg-slate-50 border border-slate-200 rounded-xl text-sm outline-none">
<input type="tel" name="phone" required placeholder="Phone Number *" pattern="[0-9+ ]{10,15}" class="px-4 py-3 bg-slate-50 border border-slate-200 rounded-xl text-sm outline-none">
<select name="location" required class="px-4 py-3 bg-slate-50 border border-slate-200 rounded-xl text-sm outline-none cursor-pointer"><option value="" disabled selected>Preferred Centre *</option><option>Siri Fort Road</option><option>West Patel Nagar</option></select>
<input type="text" name="message" placeholder="Message / Eye Concern" class="px-4 py-3 bg-slate-50 border border-slate-200 rounded-xl text-sm outline-none">
<button type="submit" class="sm:col-span-2 py-3.5 bg-primary hover:bg-primary-dark text-white font-bold rounded-xl"><i class="fa-solid fa-calendar-check mr-2"></i>Book Appointment</button>
</form>
<div class="flex flex-wrap justify-center gap-3 mt-4">
<a href="tel:+919711004422" class="px-6 py-3 bg-accent hover:bg-sky-600 text-white font-bold rounded-full text-sm"><i class="fa-solid fa-phone mr-2"></i>Call Now</a>
<a href="https://wa.me/919711004422" target="_blank" class="px-6 py-3 bg-[#25D366] hover:bg-[#128C7E] text-white font-bold rounded-full text-sm"><i class="fa-brands fa-whatsapp mr-2"></i>WhatsApp Us</a>
</div>
</div>
</div>
</section>

</main>

<!-- FOOTER -->
<footer class="bg-slate-900 text-slate-300 py-12 text-sm border-t border-slate-800">
<div class="container mx-auto px-4 md:px-6">
<div class="grid grid-cols-1 md:grid-cols-4 gap-8">
<div class="space-y-3"><h4 class="text-white font-bold text-lg">Vision Eye Centre</h4><p class="text-xs text-slate-400">Excellence with a humane touch.</p><p class="text-xs"><i class="fa-solid fa-award text-gold mr-1"></i> NABH Accredited Eye Care Centre</p></div>
<div class="space-y-3"><h4 class="text-white font-bold">Quick Links</h4><ul class="space-y-2 text-xs"><li><a href="#what-is-lasik" class="hover:text-accent">What Is LASIK?</a></li><li><a href="#eligibility" class="hover:text-accent">LASIK Eligibility</a></li><li><a href="#doctors" class="hover:text-accent">Our Specialists</a></li><li><a href="#options" class="hover:text-accent">Vision Correction Options</a></li><li><a href="#faqs" class="hover:text-accent">FAQs</a></li><li><a href="<?php echo $base; ?>privacy-policy.php" class="hover:text-accent">Privacy Policy</a></li></ul></div>
<div class="space-y-3"><h4 class="text-white font-bold">Our Locations</h4><ul class="space-y-2 text-xs"><li><strong class="text-white">South Delhi:</strong> 19, Siri Fort Road, New Delhi – 110049</li><li><strong class="text-white">West Delhi:</strong> 12/27, West Patel Nagar, New Delhi – 110008</li></ul></div>
<div class="space-y-3"><h4 class="text-white font-bold">Contact Us</h4><ul class="space-y-2 text-xs"><li><i class="fa-solid fa-phone text-accent"></i> <a href="tel:+919711004422">+91 9711004422</a></li><li><i class="fa-solid fa-envelope text-accent"></i> <a href="mailto:visioneyecentrehr@gmail.com">visioneyecentrehr@gmail.com</a></li></ul></div>
</div>
<div class="mt-8 pt-8 border-t border-slate-800 text-center text-xs text-slate-500"><p>&copy; <?php echo date("Y"); ?> Vision Eye Centre. All rights reserved.</p></div>
</div>
</footer>

<!-- Sticky mobile CTA -->
<div class="fixed bottom-0 left-0 right-0 z-[90] md:hidden bg-white/95 backdrop-blur border-t border-slate-200 px-3 py-2.5 flex gap-2">
<a href="tel:+919711004422" class="flex-1 py-3 bg-white border-2 border-accent text-accent font-bold rounded-xl text-sm text-center"><i class="fa-solid fa-phone mr-1"></i>Call Now</a>
<a href="#lead-form-hero" class="flex-1 py-3 bg-accent text-white font-bold rounded-xl text-sm text-center">Check LASIK Eligibility</a>
</div>
<div class="h-16 md:hidden"></div>

<!-- WhatsApp -->
<a href="https://wa.me/919711004422" target="_blank" rel="noopener" class="fixed bottom-20 md:bottom-6 right-4 md:right-6 bg-[#25D366] text-white rounded-full shadow-2xl z-[100] flex items-center justify-center hover:bg-[#128C7E]" style="width:56px;height:56px;"><i class="fa-brands fa-whatsapp text-3xl"></i></a>

<script>
// FAQ accordion
document.querySelectorAll('.faq-q').forEach(btn=>{
btn.addEventListener('click',()=>{
const item=btn.closest('.faq-item');
const wasOpen=item.classList.contains('open');
document.querySelectorAll('.faq-item.open').forEach(i=>i.classList.remove('open'));
if(!wasOpen) item.classList.add('open');
});
});
// Lead forms -> Formester then thankyou
document.querySelectorAll('.lead-form').forEach(form=>{
form.addEventListener('submit',function(e){
e.preventDefault();
const btn=form.querySelector('button[type="submit"]');
const orig=btn.innerHTML; btn.innerHTML='<i class="fa-solid fa-spinner fa-spin"></i> Submitting...'; btn.disabled=true;
const fd=new FormData(form);
fetch('https://app.formester.com/forms/<?php echo $formester_form_id; ?>/submissions.json',{method:'POST',body:fd,headers:{'Accept':'application/json'}})
.then(()=>{if(typeof gtag==='function'){gtag('event','conversion',{'send_to':'AW-11323462665/PP9PCNvv0NkcEImouZcq','value':1.0,'currency':'INR'});}window.location.href="<?php echo $base; ?>thankyou.php";})
.catch(()=>{window.location.href="<?php echo $base; ?>thankyou.php";});
});
});
</script>
</body>
</html>
