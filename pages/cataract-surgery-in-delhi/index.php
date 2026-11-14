<?php
// Formester form that receives this page's leads (the code after /forms/ in the Formester URL).
$formester_form_id = 'a0pQTzZIM'; // Formester form: "LP - Cataract Surgery in Delhi"
// Path back to the project root (assets, css, thankyou.php). Works for both the clean URL
// (/<slug>/ via .htaccess rewrite) and the direct folder URL (/pages/<slug>/).
$base = (strpos($_SERVER['REQUEST_URI'] ?? '', '/pages/') !== false) ? '../../' : '../';
$page_title = "Cataract Surgery in Delhi | Advanced Cataract Treatment & IOL Options | Vision Eye Centre";
$page_description = "Advanced cataract surgery in Delhi at Vision Eye Centre, NABH accredited. Phacoemulsification, micro-incision cataract surgery and monofocal, multifocal, EDOF & toric IOL options. Book a cataract consultation with experienced ophthalmologists.";
$canonical = 'https://' . ($_SERVER['HTTP_HOST'] ?? 'enquire.mydomain.com') . '/landing-page/cataract-surgery-in-delhi/';
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
<!-- Microsoft Clarity -->
<script type="text/javascript">
    (function(c,l,a,r,i,t,y){
        c[a]=c[a]||function(){(c[a].q=c[a].q||[]).push(arguments)};
        t=l.createElement(r);t.async=1;t.src="https://www.clarity.ms/tag/"+i;
        y=l.getElementsByTagName(r)[0];y.parentNode.insertBefore(t,y);
    })(window, document, "clarity", "script", "pt8rc2xi3l");
</script>
<!-- End Microsoft Clarity -->
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
<style>input:focus,select:focus,textarea:focus{box-shadow:0 0 0 3px rgba(2,132,199,.2);} .faq-a{display:none;} .faq-item.open .faq-a{display:block;} .faq-item.open .faq-chev{transform:rotate(180deg);} section.bg-cream{background-image:radial-gradient(rgba(15,76,129,.09) 1px,transparent 1px);background-size:22px 22px;} .lead-form input::placeholder,.lead-form textarea::placeholder{color:#94a3b8;}</style>
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
<!-- NOTE: No cataract-specific photo exists yet in assets/images. smile_pro_eye.png (a lens being placed on the eye) is used cropped as the closest visual. Replace with a cataract / IOL photo when available. -->
<section class="relative pt-8 pb-10 md:pt-12 md:pb-14 overflow-hidden bg-cover bg-center" style="background-image:linear-gradient(to right,rgba(10,52,89,.96),rgba(15,76,129,.82)),url('<?php echo $base; ?>assets/images/vision_eye_hero.png');">
<div class="container mx-auto px-4 md:px-6 relative z-10">
<div class="grid grid-cols-1 lg:grid-cols-12 gap-8 lg:gap-10 items-center">
<div class="lg:col-span-7 space-y-4 text-white lg:pr-4">
<div class="inline-flex items-center gap-2 px-3.5 py-1.5 rounded-full bg-white/10 border border-white/20 text-sky-200 text-xs md:text-sm font-semibold backdrop-blur-md"><i class="fa-solid fa-eye text-sky-300"></i> CATARACT SURGERY IN DELHI</div>
<h1 class="text-3xl md:text-4xl lg:text-[2.75rem] font-heading font-black leading-[1.12]">Advanced Cataract Surgery for Clearer Vision</h1>
<p class="text-base md:text-lg text-slate-100 leading-relaxed font-medium max-w-2xl">Comprehensive cataract care at Vision Eye Centre: advanced diagnostics, phacoemulsification and micro-incision surgery, and personalised intraocular lens (IOL) selection by experienced ophthalmologists.</p>
<div class="flex flex-wrap gap-3 pt-1">
<a href="#lead-form-hero" class="px-6 py-3 bg-accent hover:bg-sky-500 text-white font-bold rounded-full text-sm shadow-lg transition-all"><i class="fa-solid fa-calendar-check mr-2"></i>Book Your Cataract Consultation</a>
<a href="#lead-form-hero" class="px-6 py-3 bg-white/10 hover:bg-white/20 border border-white/40 text-white font-bold rounded-full text-sm shadow-lg transition-all backdrop-blur-md"><i class="fa-solid fa-clipboard-check mr-2"></i>Check Your Eye Health</a>
</div>
<div class="grid grid-cols-1 sm:grid-cols-5 gap-4 pt-2 max-w-2xl">
<div class="sm:col-span-2 relative rounded-2xl overflow-hidden border border-white/20 shadow-xl h-48 sm:h-auto sm:min-h-[13rem]">
<img src="<?php echo $base; ?>assets/images/smile_pro_eye.png" alt="Artificial lens being placed on the eye during cataract surgery" class="absolute inset-0 w-full h-full object-cover object-[center_75%]">
<div class="absolute inset-x-0 bottom-0 bg-gradient-to-t from-primary-dark/95 via-primary-dark/60 to-transparent px-3 pt-6 pb-2.5"><p class="text-[11px] font-bold text-sky-100 leading-tight"><i class="fa-solid fa-circle-half-stroke text-sky-300 mr-1"></i>Cloudy natural lens replaced with an artificial IOL</p></div>
</div>
<div class="sm:col-span-3 grid grid-cols-2 gap-3">
<div class="bg-white/10 border border-white/15 rounded-2xl p-3 text-center backdrop-blur-md"><i class="fa-solid fa-clock text-sky-300 text-lg mb-1"></i><p class="text-[11px] font-bold leading-tight">26+ Years of Eye Care Experience</p></div>
<div class="bg-white/10 border border-white/15 rounded-2xl p-3 text-center backdrop-blur-md"><i class="fa-solid fa-award text-gold-light text-lg mb-1"></i><p class="text-[11px] font-bold leading-tight">NABH Accredited Centre</p></div>
<div class="bg-white/10 border border-white/15 rounded-2xl p-3 text-center backdrop-blur-md"><i class="fa-solid fa-microscope text-sky-300 text-lg mb-1"></i><p class="text-[11px] font-bold leading-tight">Advanced Surgical Technology</p></div>
<div class="bg-white/10 border border-white/15 rounded-2xl p-3 text-center backdrop-blur-md"><i class="fa-solid fa-user-check text-sky-300 text-lg mb-1"></i><p class="text-[11px] font-bold leading-tight">Personalised Cataract Evaluation</p></div>
</div>
</div>
</div>
<div class="lg:col-span-5" id="lead-form-hero">
<div class="bg-white p-5 sm:p-6 rounded-3xl shadow-2xl border border-slate-100">
<span class="text-accent font-bold text-xs uppercase tracking-widest">Book Your Cataract Consultation</span>
<h3 class="text-xl font-heading font-extrabold text-primary mt-1 leading-snug">Experiencing Blurred Vision or Difficulty Seeing Clearly?</h3>
<p class="text-xs text-slate-500 mt-1 mb-4">Get a comprehensive eye examination from our experienced ophthalmology team to understand whether cataracts are affecting your vision and explore suitable treatment options.</p>
<form class="lead-form space-y-3" action="<?php echo $base; ?>thankyou.php" method="POST">
<div class="space-y-1"><label class="text-xs font-bold text-slate-700 block">Full Name *</label><input type="text" name="first-name" required placeholder="Your full name" class="w-full px-3.5 py-2.5 bg-slate-50 border border-slate-200 rounded-xl focus:border-accent outline-none text-sm"></div>
<div class="space-y-1"><label class="text-xs font-bold text-slate-700 block">Phone Number *</label><input type="tel" name="phone" required placeholder="+91 Mobile number" pattern="[0-9+ ]{10,15}" class="w-full px-3.5 py-2.5 bg-slate-50 border border-slate-200 rounded-xl focus:border-accent outline-none text-sm"></div>
<div class="space-y-1"><label class="text-xs font-bold text-slate-700 block">Preferred Centre *</label><select name="location" required class="w-full px-3.5 py-2.5 bg-slate-50 border border-slate-200 rounded-xl focus:border-accent outline-none text-sm cursor-pointer"><option value="" disabled selected>Select centre...</option><option value="Siri Fort Road">Siri Fort Road</option><option value="West Patel Nagar">West Patel Nagar</option></select></div>
<div class="space-y-1"><label class="text-xs font-bold text-slate-700 block">Message / Eye Concern</label><textarea name="message" rows="2" placeholder="Describe your eye concern..." class="w-full px-3.5 py-2.5 bg-slate-50 border border-slate-200 rounded-xl focus:border-accent outline-none text-sm"></textarea></div>
<button type="submit" class="w-full py-3.5 bg-accent hover:bg-sky-600 text-white font-bold rounded-xl shadow-lg text-base flex items-center justify-center gap-2"><i class="fa-solid fa-calendar-check"></i> Book Cataract Consultation</button>
<p class="text-[11px] text-slate-400 text-center">By submitting, you agree to be contacted by Vision Eye Centre.</p>
</form>
</div>
</div>
</div>
</div>
</section>

<!-- WHY VISION EYE CENTRE -->
<section class="py-10 md:py-14 bg-cream">
<div class="container mx-auto px-4 md:px-6">
<div class="text-center max-w-3xl mx-auto mb-6">
<span class="text-accent font-bold tracking-widest uppercase text-xs">Why Vision Eye Centre?</span>
<h2 class="text-2xl md:text-[2rem] font-heading font-black leading-tight text-primary mt-2">Specialist-Led Cataract Care With Advanced Eye Care Expertise</h2>
<p class="text-sm md:text-base text-slate-600 mt-2">Vision Eye Centre combines experienced ophthalmologists, advanced diagnostic technology and comprehensive eye care to support personalised cataract treatment.</p>
</div>
<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-5 max-w-6xl mx-auto items-start">
<div class="bg-white p-5 rounded-2xl border border-slate-200 flex gap-4 items-start hover:shadow-md hover:border-accent/30 transition-all"><div class="w-11 h-11 rounded-xl bg-accent/10 flex items-center justify-center flex-shrink-0"><i class="fa-solid fa-user-doctor text-accent text-xl"></i></div><div><h3 class="font-bold text-primary text-base mb-1">Experienced Ophthalmologists</h3><p class="text-sm text-slate-600 leading-relaxed">Our team includes experienced ophthalmologists with expertise in comprehensive eye care and cataract management.</p></div></div>
<div class="bg-white p-5 rounded-2xl border border-slate-200 flex gap-4 items-start hover:shadow-md hover:border-accent/30 transition-all"><div class="w-11 h-11 rounded-xl bg-sky-500/10 flex items-center justify-center flex-shrink-0"><i class="fa-solid fa-clock text-sky-600 text-xl"></i></div><div><h3 class="font-bold text-primary text-base mb-1">26+ Years of Eye Care Experience</h3><p class="text-sm text-slate-600 leading-relaxed">Vision Eye Centre has over 26 years of experience in providing comprehensive ophthalmic care.</p></div></div>
<div class="bg-white p-5 rounded-2xl border border-slate-200 flex gap-4 items-start hover:shadow-md hover:border-accent/30 transition-all"><div class="w-11 h-11 rounded-xl bg-gold/10 flex items-center justify-center flex-shrink-0"><i class="fa-solid fa-award text-gold text-xl"></i></div><div><h3 class="font-bold text-primary text-base mb-1">NABH Accredited Eye Care Centre</h3><p class="text-sm text-slate-600 leading-relaxed">Vision Eye Centre is NABH accredited, reflecting its focus on healthcare quality, safety and standardised clinical practices.</p></div></div>
<div class="bg-white p-5 rounded-2xl border border-slate-200 flex gap-4 items-start hover:shadow-md hover:border-accent/30 transition-all"><div class="w-11 h-11 rounded-xl bg-teal/10 flex items-center justify-center flex-shrink-0"><i class="fa-solid fa-microscope text-teal text-xl"></i></div><div><h3 class="font-bold text-primary text-base mb-1">Advanced Diagnostic & Surgical Technology</h3><p class="text-sm text-slate-600 leading-relaxed">Detailed eye examinations and diagnostic assessments help evaluate cataracts and plan appropriate surgical treatment.</p></div></div>
<div class="bg-white p-5 rounded-2xl border border-slate-200 flex gap-4 items-start hover:shadow-md hover:border-accent/30 transition-all"><div class="w-11 h-11 rounded-xl bg-violet-500/10 flex items-center justify-center flex-shrink-0"><i class="fa-solid fa-layer-group text-violet-600 text-xl"></i></div><div><h3 class="font-bold text-primary text-base mb-1">Advanced Cataract Surgery Options</h3><p class="text-sm text-slate-600 leading-relaxed">Patients can explore suitable cataract surgery approaches and intraocular lens (IOL) options based on their individual eye condition.</p></div></div>
<div class="bg-white p-5 rounded-2xl border border-slate-200 flex gap-4 items-start hover:shadow-md hover:border-accent/30 transition-all"><div class="w-11 h-11 rounded-xl bg-rose-500/10 flex items-center justify-center flex-shrink-0"><i class="fa-solid fa-clipboard-list text-rose-500 text-xl"></i></div><div><h3 class="font-bold text-primary text-base mb-1">Personalised Treatment Planning</h3><p class="text-sm text-slate-600 leading-relaxed">Your ophthalmologist evaluates the cataract, overall eye health, visual requirements and lifestyle before recommending a treatment plan.</p></div></div>
</div>
<div class="text-center mt-6"><a href="#lead-form-hero" class="inline-flex items-center gap-2 px-8 py-3.5 bg-accent hover:bg-sky-600 text-white font-bold rounded-full text-sm shadow-lg transition-all"><i class="fa-solid fa-calendar-check"></i> Book a Cataract Consultation</a></div>
</div>
</section>

<!-- UNDERSTANDING CATARACTS -->
<section id="what-is-cataract" class="py-10 md:py-14 bg-white border-y border-slate-100">
<div class="container mx-auto px-4 md:px-6">
<div class="grid grid-cols-1 lg:grid-cols-2 gap-8 lg:gap-12 items-center max-w-6xl mx-auto">
<div>
<img src="<?php echo $base; ?>assets/images/smile_pro_eye.png" alt="Artificial intraocular lens placed on the eye, illustrating cataract surgery" loading="lazy" class="w-full h-72 md:h-[26rem] object-cover object-[center_70%] rounded-3xl shadow-xl border border-slate-200">
</div>
<div class="space-y-4">
<span class="text-accent font-bold tracking-widest uppercase text-xs">Understanding Cataracts</span>
<h2 class="text-2xl md:text-[2rem] font-heading font-black leading-tight text-primary">What Is a Cataract?</h2>
<p class="text-sm md:text-base text-slate-600 leading-relaxed">A cataract is a condition in which the natural lens of the eye becomes cloudy, affecting the ability to see clearly.</p>
<p class="text-sm md:text-base text-slate-600 leading-relaxed">It commonly develops with age but can also occur due to eye injuries, certain medical conditions, medications or other factors.</p>
<p class="text-sm md:text-base text-slate-600 leading-relaxed">As cataracts progress, patients may experience blurred vision, increased sensitivity to light, glare and difficulty performing everyday activities.</p>
<p class="text-sm md:text-base text-slate-600 leading-relaxed">Cataract surgery involves removing the cloudy natural lens and replacing it with an artificial intraocular lens (IOL) to help improve vision.</p>
<p class="text-sm md:text-base text-slate-600 leading-relaxed">Your ophthalmologist will assess the stage of cataract development and recommend the appropriate treatment based on your eye health.</p>
</div>
</div>
</div>
</section>

<!-- SYMPTOMS & WARNING SIGNS -->
<section id="symptoms" class="py-10 md:py-14 bg-cream">
<div class="container mx-auto px-4 md:px-6">
<div class="text-center max-w-3xl mx-auto mb-6">
<span class="text-accent font-bold tracking-widest uppercase text-xs">Cataract Symptoms & Warning Signs</span>
<h2 class="text-2xl md:text-[2rem] font-heading font-black leading-tight text-primary mt-2">Are You Experiencing Any of These Vision Problems?</h2>
<p class="text-sm md:text-base text-slate-600 mt-2">Recognising cataract symptoms can help you understand when to seek an eye examination.</p>
</div>
<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-5 max-w-6xl mx-auto items-start">
<div class="bg-white p-5 rounded-2xl border border-slate-200 flex gap-4 items-start hover:shadow-md hover:border-accent/30 transition-all"><div class="w-11 h-11 rounded-full bg-accent/10 flex items-center justify-center flex-shrink-0"><i class="fa-solid fa-cloud text-accent text-xl"></i></div><div><h3 class="font-bold text-primary text-base mb-1">Blurred or Cloudy Vision</h3><p class="text-sm text-slate-600 leading-relaxed">Objects may appear unclear, hazy or less sharp than before, even when using glasses.</p></div></div>
<div class="bg-white p-5 rounded-2xl border border-slate-200 flex gap-4 items-start hover:shadow-md hover:border-accent/30 transition-all"><div class="w-11 h-11 rounded-full bg-violet-500/10 flex items-center justify-center flex-shrink-0"><i class="fa-solid fa-moon text-violet-600 text-xl"></i></div><div><h3 class="font-bold text-primary text-base mb-1">Difficulty Seeing at Night</h3><p class="text-sm text-slate-600 leading-relaxed">You may experience difficulty driving or navigating in low-light conditions.</p></div></div>
<div class="bg-white p-5 rounded-2xl border border-slate-200 flex gap-4 items-start hover:shadow-md hover:border-accent/30 transition-all"><div class="w-11 h-11 rounded-full bg-gold/10 flex items-center justify-center flex-shrink-0"><i class="fa-solid fa-sun text-gold text-xl"></i></div><div><h3 class="font-bold text-primary text-base mb-1">Increased Glare & Light Sensitivity</h3><p class="text-sm text-slate-600 leading-relaxed">Bright sunlight, vehicle headlights and other light sources may cause discomfort or glare.</p></div></div>
<div class="bg-white p-5 rounded-2xl border border-slate-200 flex gap-4 items-start hover:shadow-md hover:border-accent/30 transition-all"><div class="w-11 h-11 rounded-full bg-sky-500/10 flex items-center justify-center flex-shrink-0"><i class="fa-solid fa-circle-dot text-sky-600 text-xl"></i></div><div><h3 class="font-bold text-primary text-base mb-1">Halos Around Lights</h3><p class="text-sm text-slate-600 leading-relaxed">You may notice rings or halos around lights, particularly at night.</p></div></div>
<div class="bg-white p-5 rounded-2xl border border-slate-200 flex gap-4 items-start hover:shadow-md hover:border-accent/30 transition-all"><div class="w-11 h-11 rounded-full bg-teal/10 flex items-center justify-center flex-shrink-0"><i class="fa-solid fa-glasses text-teal text-xl"></i></div><div><h3 class="font-bold text-primary text-base mb-1">Frequent Changes in Glasses Prescription</h3><p class="text-sm text-slate-600 leading-relaxed">Your spectacle prescription may change more frequently as cataracts develop.</p></div></div>
<div class="bg-white p-5 rounded-2xl border border-slate-200 flex gap-4 items-start hover:shadow-md hover:border-accent/30 transition-all"><div class="w-11 h-11 rounded-full bg-rose-500/10 flex items-center justify-center flex-shrink-0"><i class="fa-solid fa-palette text-rose-500 text-xl"></i></div><div><h3 class="font-bold text-primary text-base mb-1">Faded or Yellowish Colours</h3><p class="text-sm text-slate-600 leading-relaxed">Colours may appear dull, less vibrant or slightly yellow compared to before.</p></div></div>
</div>
<div class="max-w-3xl mx-auto mt-6 bg-gold-light border border-gold/30 rounded-2xl px-5 py-4 text-sm text-slate-700 flex items-start gap-3"><i class="fa-solid fa-circle-info text-gold mt-0.5"></i><p><strong class="text-primary">Important:</strong> These symptoms may also occur due to other eye conditions. A comprehensive eye examination is necessary to identify the underlying cause.</p></div>
<div class="text-center mt-6"><a href="#lead-form-mid" class="inline-flex items-center gap-2 px-8 py-3.5 bg-accent hover:bg-sky-600 text-white font-bold rounded-full text-sm shadow-lg transition-all"><i class="fa-solid fa-clipboard-check"></i> Book Your Cataract Evaluation</a></div>
</div>
</section>

<!-- WHEN SHOULD YOU CONSIDER CATARACT SURGERY -->
<section class="py-10 md:py-14 bg-white border-y border-slate-100">
<div class="container mx-auto px-4 md:px-6">
<div class="text-center max-w-3xl mx-auto mb-6">
<span class="text-accent font-bold tracking-widest uppercase text-xs">When Should You Consider Cataract Surgery?</span>
<h2 class="text-2xl md:text-[2rem] font-heading font-black leading-tight text-primary mt-2">Is Cataract Affecting Your Everyday Life?</h2>
<p class="text-sm md:text-base text-slate-600 mt-2">Cataract surgery may be recommended when clouding of the natural lens begins to interfere with your daily activities and visual needs.</p>
</div>
<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-5 gap-5 max-w-6xl mx-auto items-start">
<div class="p-5 bg-slate-50 border border-slate-200 rounded-2xl"><h3 class="font-bold text-primary mb-2"><i class="fa-solid fa-book-open text-accent mr-2"></i>Difficulty Reading</h3><p class="text-sm text-slate-600">Blurred vision may make reading books, newspapers or mobile screens challenging.</p></div>
<div class="p-5 bg-slate-50 border border-slate-200 rounded-2xl"><h3 class="font-bold text-primary mb-2"><i class="fa-solid fa-car text-teal mr-2"></i>Problems With Night Driving</h3><p class="text-sm text-slate-600">Glare from vehicle headlights and reduced visibility may affect your ability to drive comfortably.</p></div>
<div class="p-5 bg-slate-50 border border-slate-200 rounded-2xl"><h3 class="font-bold text-primary mb-2"><i class="fa-solid fa-person-walking text-sky-600 mr-2"></i>Reduced Independence</h3><p class="text-sm text-slate-600">Difficulty recognising faces, navigating familiar places or performing routine activities may affect everyday independence.</p></div>
<div class="p-5 bg-slate-50 border border-slate-200 rounded-2xl"><h3 class="font-bold text-primary mb-2"><i class="fa-solid fa-glasses text-gold mr-2"></i>Frequent Changes in Spectacles</h3><p class="text-sm text-slate-600">Repeated changes in your glasses prescription may not provide the expected improvement if cataracts are the underlying cause.</p></div>
<div class="p-5 bg-slate-50 border border-slate-200 rounded-2xl md:col-span-2 lg:col-span-1"><h3 class="font-bold text-primary mb-2"><i class="fa-solid fa-eye-low-vision text-violet-600 mr-2"></i>Reduced Visual Clarity</h3><p class="text-sm text-slate-600">When cataracts begin affecting your quality of vision, your ophthalmologist may discuss surgical treatment.</p></div>
</div>
<div class="max-w-3xl mx-auto mt-6 bg-soft-blue border border-accent/20 rounded-2xl px-6 py-5 text-center">
<h3 class="font-bold text-primary text-lg">When Is the Right Time for Cataract Surgery?</h3>
<p class="text-sm text-slate-600 mt-2">The decision depends on how much your vision is affected, your eye health and your daily visual requirements. Your ophthalmologist will help determine the appropriate timing.</p>
</div>

<!-- Mid lead form -->
<div id="lead-form-mid" class="max-w-3xl mx-auto mt-10 bg-primary rounded-3xl p-6 sm:p-8 text-white shadow-2xl">
<h3 class="text-2xl font-heading font-extrabold text-center">Schedule Your Cataract Consultation</h3>
<p class="text-sm text-sky-200 text-center mt-2 mb-6">A detailed eye examination is required before determining whether cataract surgery is appropriate for you.</p>
<form class="lead-form grid grid-cols-1 sm:grid-cols-2 gap-3" action="<?php echo $base; ?>thankyou.php" method="POST">
<input type="text" name="first-name" required placeholder="Full Name *" class="px-4 py-3 rounded-xl text-slate-800 text-sm outline-none">
<input type="tel" name="phone" required placeholder="Phone Number *" pattern="[0-9+ ]{10,15}" class="px-4 py-3 rounded-xl text-slate-800 text-sm outline-none">
<select name="location" required class="px-4 py-3 rounded-xl text-slate-800 text-sm outline-none cursor-pointer"><option value="" disabled selected>Preferred Centre *</option><option>Siri Fort Road</option><option>West Patel Nagar</option></select>
<input type="text" name="message" placeholder="Message / Eye Concern" class="px-4 py-3 rounded-xl text-slate-800 text-sm outline-none">
<button type="submit" class="sm:col-span-2 py-3.5 bg-gold hover:bg-amber-600 text-white font-bold rounded-xl transition-all"><i class="fa-solid fa-calendar-check mr-2"></i>Schedule Your Cataract Consultation</button>
</form>
</div>
</div>
</section>

<!-- ADVANCED CATARACT SURGERY OPTIONS -->
<section id="surgery-options" class="py-10 md:py-14 bg-cream">
<div class="container mx-auto px-4 md:px-6">
<div class="text-center max-w-3xl mx-auto mb-6">
<span class="text-accent font-bold tracking-widest uppercase text-xs">Advanced Cataract Surgery Options</span>
<h2 class="text-2xl md:text-[2rem] font-heading font-black leading-tight text-primary mt-2">Modern Surgical Techniques for Cataract Treatment</h2>
<p class="text-sm md:text-base text-slate-600 mt-2">Vision Eye Centre provides comprehensive cataract evaluation and surgical treatment planning based on individual eye characteristics.</p>
</div>
<div class="grid grid-cols-1 md:grid-cols-2 gap-5 max-w-5xl mx-auto items-start">
<div class="p-5 bg-white border border-slate-200 rounded-2xl"><h3 class="font-bold text-primary mb-2"><i class="fa-solid fa-wave-square text-accent mr-2"></i>Phacoemulsification Cataract Surgery</h3><p class="text-sm text-slate-600">Phacoemulsification is a commonly performed cataract surgery technique in which ultrasound energy is used to break the cloudy natural lens into smaller fragments before removal.</p><p class="text-sm text-slate-600 mt-2">An artificial intraocular lens is then implanted to replace the natural lens.</p></div>
<div class="p-5 bg-white border border-slate-200 rounded-2xl"><h3 class="font-bold text-primary mb-2"><i class="fa-solid fa-minimize text-teal mr-2"></i>Micro-Incision Cataract Surgery</h3><p class="text-sm text-slate-600">Micro-incision techniques involve small surgical incisions and may be considered depending on the patient's eye condition and surgical requirements.</p></div>
<div class="p-5 bg-white border border-slate-200 rounded-2xl"><h3 class="font-bold text-primary mb-2"><i class="fa-solid fa-circle-half-stroke text-sky-600 mr-2"></i>Advanced Intraocular Lens Options</h3><p class="text-sm text-slate-600">Different types of artificial lenses may be considered depending on your prescription, eye health, visual needs and suitability.</p></div>
<div class="p-5 bg-white border border-slate-200 rounded-2xl"><h3 class="font-bold text-primary mb-2"><i class="fa-solid fa-user-doctor text-gold mr-2"></i>Specialist-Led Surgical Planning</h3><p class="text-sm text-slate-600">Your ophthalmologist evaluates the cataract, corneal measurements, retinal health and other relevant factors before recommending surgery.</p></div>
</div>
<div class="text-center mt-6"><a href="#lead-form-hero" class="inline-flex items-center gap-2 px-8 py-3.5 bg-accent hover:bg-sky-600 text-white font-bold rounded-full text-sm shadow-lg transition-all"><i class="fa-solid fa-magnifying-glass"></i> Explore Cataract Treatment Options</a></div>
</div>
</section>

<!-- ARE YOU A SUITABLE CANDIDATE -->
<section id="eligibility" class="py-10 md:py-14 bg-primary text-white">
<div class="container mx-auto px-4 md:px-6">
<div class="text-center max-w-3xl mx-auto mb-6">
<span class="text-sky-300 font-bold tracking-widest uppercase text-xs">Are You a Suitable Candidate for Cataract Surgery?</span>
<h2 class="text-2xl md:text-[2rem] font-heading font-black leading-tight mt-2">A Detailed Eye Examination Comes Before Treatment</h2>
<p class="text-sm md:text-base text-sky-100/90 mt-2">Cataract surgery is recommended after evaluating the condition of your eyes and understanding your visual requirements.</p>
</div>
<div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-5 gap-5 max-w-6xl mx-auto items-start">
<div class="bg-white/10 border border-white/15 rounded-2xl p-5 backdrop-blur"><i class="fa-solid fa-magnifying-glass text-sky-300 text-xl mb-3"></i><h3 class="font-bold text-base text-sky-200 mb-2">Cataract Assessment</h3><p class="text-sm text-slate-100/90">The ophthalmologist examines the location, density and progression of the cataract.</p></div>
<div class="bg-white/10 border border-white/15 rounded-2xl p-5 backdrop-blur"><i class="fa-solid fa-eye text-sky-300 text-xl mb-3"></i><h3 class="font-bold text-base text-sky-200 mb-2">Retinal Health</h3><p class="text-sm text-slate-100/90">The retina and other internal structures of the eye are evaluated to identify conditions that may affect visual outcomes.</p></div>
<div class="bg-white/10 border border-white/15 rounded-2xl p-5 backdrop-blur"><i class="fa-solid fa-crosshairs text-sky-300 text-xl mb-3"></i><h3 class="font-bold text-base text-sky-200 mb-2">Corneal Evaluation</h3><p class="text-sm text-slate-100/90">Corneal health and relevant measurements are assessed before surgical planning.</p></div>
<div class="bg-white/10 border border-white/15 rounded-2xl p-5 backdrop-blur"><i class="fa-solid fa-heart-pulse text-sky-300 text-xl mb-3"></i><h3 class="font-bold text-base text-sky-200 mb-2">Overall Eye Health</h3><p class="text-sm text-slate-100/90">Existing conditions such as glaucoma, diabetic eye disease or retinal disorders may be considered.</p></div>
<div class="bg-white/10 border border-white/15 rounded-2xl p-5 backdrop-blur sm:col-span-2 lg:col-span-1"><i class="fa-solid fa-circle-half-stroke text-sky-300 text-xl mb-3"></i><h3 class="font-bold text-base text-sky-200 mb-2">Intraocular Lens Suitability</h3><p class="text-sm text-slate-100/90">Your ophthalmologist evaluates the appropriate IOL options based on your eye measurements and visual requirements.</p></div>
</div>
<div class="text-center mt-6"><a href="#lead-form-hero" class="inline-flex items-center gap-2 px-8 py-3.5 bg-white text-primary font-bold rounded-full text-sm hover:bg-sky-100 transition-all"><i class="fa-solid fa-clipboard-check"></i> Book Your Comprehensive Eye Examination</a></div>
</div>
</section>

<!-- DOCTORS -->
<section id="doctors" class="py-10 md:py-14 bg-cream">
<div class="container mx-auto px-4 md:px-6">
<div class="text-center max-w-2xl mx-auto mb-6">
<span class="text-accent font-bold tracking-widest uppercase text-xs">Meet Our Eye Specialists</span>
<h2 class="text-2xl md:text-[2rem] font-heading font-black leading-tight text-primary mt-2">Experienced Ophthalmologists at Vision Eye Centre</h2>
</div>
<div class="grid grid-cols-1 md:grid-cols-3 gap-5 max-w-5xl mx-auto">
<div class="bg-white p-6 rounded-3xl border-2 border-gold/40 text-center shadow-md flex flex-col">
<img src="<?php echo $base; ?>assets/images/chairman-dr-grover.webp" alt="Prof. (Dr) A. K. Grover" class="w-28 h-28 rounded-full object-cover border-4 border-gold mx-auto shadow-md">
<h4 class="font-bold text-primary text-lg mt-4">Prof. (Dr) A. K. Grover</h4>
<p class="text-xs font-bold text-gold">Chairman – Vision Eye Centres</p>
<p class="text-xs text-slate-500 mt-1">MD – AIIMS • FRCS – Glasgow • FAICO • FICO • FIMSA</p>
<p class="text-xs font-semibold text-gold mt-1"><i class="fa-solid fa-medal mr-1"></i>Padma Shri Awardee</p>
<p class="text-[13px] text-slate-600 mt-2 flex-grow">Prof. (Dr) A. K. Grover is the Chairman of Vision Eye Centres and has extensive experience in ophthalmology and comprehensive eye care.</p>
<a href="#lead-form-doctors" class="mt-4 inline-flex self-center px-5 py-2.5 bg-primary text-white text-xs font-bold rounded-full hover:bg-primary-dark">Book Consultation</a>
</div>
<div class="bg-white p-6 rounded-3xl border border-slate-200 text-center shadow-sm flex flex-col">
<img src="<?php echo $base; ?>assets/images/dr-tushar-grover.webp" alt="Dr. Tushar Grover" class="w-28 h-28 rounded-full object-cover border-4 border-teal mx-auto shadow-md">
<h4 class="font-bold text-primary text-lg mt-4">Dr. Tushar Grover</h4>
<p class="text-xs font-bold text-teal">Medical Director | Cornea & Refractive Specialist</p>
<p class="text-xs text-slate-500 mt-1">MS – Aravind Eye Hospital • FAICO – Cornea • FICO – Cornea • FAICO – Refractive • Fellowship – Narayana Nethralaya • GMHE – IIM Bangalore</p>
<p class="text-[13px] text-slate-600 mt-2 flex-grow">Dr. Tushar Grover specialises in cornea and refractive services and provides comprehensive evaluation for patients requiring specialised eye care.</p>
<a href="#lead-form-doctors" class="mt-4 inline-flex self-center px-5 py-2.5 bg-teal text-white text-xs font-bold rounded-full hover:bg-teal-700">Consult Dr. Tushar Grover</a>
</div>
<div class="bg-white p-6 rounded-3xl border border-slate-200 text-center shadow-sm flex flex-col">
<img src="<?php echo $base; ?>assets/images/dr-apoorv-grover.webp" alt="Dr. Apoorv Grover" class="w-28 h-28 rounded-full object-cover border-4 border-accent mx-auto shadow-md">
<h4 class="font-bold text-primary text-lg mt-4">Dr. Apoorv Grover</h4>
<p class="text-xs font-bold text-accent">Medical Director | Vitreoretina & Uvea Specialist</p>
<p class="text-xs text-slate-500 mt-1">DNB • MNAMS • FICO • Fellowship in Vitreoretina & Uvea – Aravind Eye Hospital</p>
<p class="text-[13px] text-slate-600 mt-2 flex-grow">Dr. Apoorv Grover specialises in vitreoretinal and uveal conditions, including the evaluation and management of associated retinal concerns.</p>
<a href="#lead-form-doctors" class="mt-4 inline-flex self-center px-5 py-2.5 bg-accent text-white text-xs font-bold rounded-full hover:bg-sky-600">Book Consultation</a>
</div>
</div>
<div id="lead-form-doctors" class="max-w-3xl mx-auto mt-8 bg-white rounded-3xl border border-slate-200 p-6 sm:p-8 shadow-lg">
<h3 class="text-xl font-heading font-extrabold text-primary text-center">Consult Our Cataract Specialists</h3>
<p class="text-xs text-slate-500 text-center mt-1 mb-5">Book a consultation with our ophthalmology team for your cataract evaluation.</p>
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

<!-- IOL OPTIONS -->
<section id="iol-options" class="py-10 md:py-14 bg-white border-y border-slate-100">
<div class="container mx-auto px-4 md:px-6">
<div class="text-center max-w-3xl mx-auto mb-6">
<span class="text-accent font-bold tracking-widest uppercase text-xs">Cataract Surgery & Lens Options</span>
<h2 class="text-2xl md:text-[2rem] font-heading font-black leading-tight text-primary mt-2">Understanding Your Intraocular Lens (IOL) Choices</h2>
<p class="text-sm md:text-base text-slate-600 mt-2">During cataract surgery, the cloudy natural lens is replaced with an artificial intraocular lens (IOL).</p>
<p class="text-sm md:text-base text-slate-600 mt-2">Different lens options may be available depending on your eye measurements, visual requirements and clinical suitability.</p>
</div>
<div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-5 max-w-6xl mx-auto items-start">
<div class="p-5 bg-slate-50 border border-slate-200 rounded-2xl flex gap-4 items-start hover:shadow-md hover:border-accent/30 transition-all"><div class="w-11 h-11 rounded-xl bg-accent/10 flex items-center justify-center flex-shrink-0"><i class="fa-solid fa-circle text-accent text-xl"></i></div><div><h3 class="font-bold text-primary text-base mb-1">Monofocal IOL</h3><p class="text-sm text-slate-600 leading-relaxed">Designed to provide clear vision at one primary focal distance, commonly distance vision. Glasses may still be required for other activities, such as reading.</p></div></div>
<div class="p-5 bg-slate-50 border border-slate-200 rounded-2xl flex gap-4 items-start hover:shadow-md hover:border-accent/30 transition-all"><div class="w-11 h-11 rounded-xl bg-teal/10 flex items-center justify-center flex-shrink-0"><i class="fa-solid fa-circle-dot text-teal text-xl"></i></div><div><h3 class="font-bold text-primary text-base mb-1">Multifocal IOL</h3><p class="text-sm text-slate-600 leading-relaxed">Designed to provide vision at multiple distances and may reduce dependence on glasses for selected patients.</p></div></div>
<div class="p-5 bg-slate-50 border border-slate-200 rounded-2xl flex gap-4 items-start hover:shadow-md hover:border-accent/30 transition-all"><div class="w-11 h-11 rounded-xl bg-violet-500/10 flex items-center justify-center flex-shrink-0"><i class="fa-solid fa-arrows-left-right text-violet-600 text-xl"></i></div><div><h3 class="font-bold text-primary text-base mb-1">Extended Depth of Focus (EDOF) IOL</h3><p class="text-sm text-slate-600 leading-relaxed">Designed to provide an extended range of vision, particularly for distance and intermediate activities, depending on the lens design.</p></div></div>
<div class="p-5 bg-slate-50 border border-slate-200 rounded-2xl flex gap-4 items-start hover:shadow-md hover:border-accent/30 transition-all"><div class="w-11 h-11 rounded-xl bg-gold/10 flex items-center justify-center flex-shrink-0"><i class="fa-solid fa-bullseye text-gold text-xl"></i></div><div><h3 class="font-bold text-primary text-base mb-1">Toric IOL</h3><p class="text-sm text-slate-600 leading-relaxed">Designed to correct corneal astigmatism in suitable patients undergoing cataract surgery.</p></div></div>
</div>
<div class="max-w-3xl mx-auto mt-6 bg-soft-blue border border-accent/20 rounded-2xl px-6 py-5 text-center">
<h3 class="font-bold text-primary text-lg">Which IOL Is Right for You?</h3>
<p class="text-sm text-slate-600 mt-2">The choice of lens depends on your corneal measurements, retinal health, lifestyle, visual expectations and other clinical factors.</p>
<p class="text-sm text-slate-600 mt-2">Your ophthalmologist will explain the available options, potential benefits and limitations before recommending a suitable lens.</p>
</div>
<div class="text-center mt-6"><a href="#lead-form-hero" class="inline-flex items-center gap-2 px-8 py-3.5 bg-accent hover:bg-sky-600 text-white font-bold rounded-full text-sm shadow-lg transition-all"><i class="fa-solid fa-comments"></i> Discuss Your IOL Options</a></div>
</div>
</section>

<!-- TECHNOLOGY & INFRASTRUCTURE -->
<section class="py-10 md:py-14 bg-cream">
<div class="container mx-auto px-4 md:px-6">
<div class="text-center max-w-3xl mx-auto mb-6">
<span class="text-accent font-bold tracking-widest uppercase text-xs">Technology & Infrastructure</span>
<h2 class="text-2xl md:text-[2rem] font-heading font-black leading-tight text-primary mt-2">Advanced Technology. Comprehensive Cataract Care.</h2>
<p class="text-sm md:text-base text-slate-600 mt-2">Vision Eye Centre combines modern diagnostic technology, specialist expertise and a comprehensive ophthalmic care environment.</p>
</div>
<div class="grid grid-cols-1 md:grid-cols-2 gap-5 max-w-5xl mx-auto items-start">
<div class="p-5 bg-white border border-slate-200 rounded-2xl"><h3 class="font-bold text-primary mb-2"><i class="fa-solid fa-magnifying-glass-chart text-accent mr-2"></i>Advanced Cataract Evaluation</h3><p class="text-sm text-slate-600">Detailed examination helps assess cataract development and identify other eye conditions.</p></div>
<div class="p-5 bg-white border border-slate-200 rounded-2xl"><h3 class="font-bold text-primary mb-2"><i class="fa-solid fa-ruler-combined text-teal mr-2"></i>Precision-Based Surgical Planning</h3><p class="text-sm text-slate-600">Relevant eye measurements support personalised surgical and intraocular lens planning.</p></div>
<div class="p-5 bg-white border border-slate-200 rounded-2xl"><h3 class="font-bold text-primary mb-2"><i class="fa-solid fa-hospital text-gold mr-2"></i>Modern Surgical Infrastructure</h3><p class="text-sm text-slate-600">Vision Eye Centre highlights advanced operation theatres, laminar airflow systems and HEPA filtration as part of its surgical infrastructure.</p></div>
<div class="p-5 bg-white border border-slate-200 rounded-2xl"><h3 class="font-bold text-primary mb-2"><i class="fa-solid fa-house-medical text-sky-600 mr-2"></i>Comprehensive Eye Care Under One Roof</h3><p class="text-sm text-slate-600">Patients can access multiple ophthalmic specialties, including cornea, retina, glaucoma, cataract and paediatric eye care.</p></div>
</div>
</div>
</section>

<!-- JOURNEY -->
<section class="py-10 md:py-14 bg-white border-y border-slate-100">
<div class="container mx-auto px-4 md:px-6">
<div class="text-center max-w-2xl mx-auto mb-6">
<span class="text-accent font-bold tracking-widest uppercase text-xs">Your Cataract Surgery Journey</span>
<h2 class="text-2xl md:text-[2rem] font-heading font-black leading-tight text-primary mt-2">From Eye Examination to Post-Surgical Care</h2>
</div>
<div class="grid grid-cols-1 md:grid-cols-5 gap-4 max-w-6xl mx-auto">
<div class="p-5 bg-slate-50 border border-slate-200 rounded-2xl text-center"><span class="inline-flex w-10 h-10 rounded-full bg-primary text-white font-black items-center justify-center mb-3">1</span><h3 class="font-bold text-primary text-sm mb-1">Comprehensive Eye Consultation</h3><p class="text-xs text-slate-600">Your ophthalmologist evaluates your vision, symptoms and overall eye health.</p></div>
<div class="p-5 bg-slate-50 border border-slate-200 rounded-2xl text-center"><span class="inline-flex w-10 h-10 rounded-full bg-primary text-white font-black items-center justify-center mb-3">2</span><h3 class="font-bold text-primary text-sm mb-1">Detailed Diagnostic Assessment</h3><p class="text-xs text-slate-600">Eye measurements, cataract evaluation and relevant retinal examinations are performed to support surgical planning.</p></div>
<div class="p-5 bg-slate-50 border border-slate-200 rounded-2xl text-center"><span class="inline-flex w-10 h-10 rounded-full bg-primary text-white font-black items-center justify-center mb-3">3</span><h3 class="font-bold text-primary text-sm mb-1">Personalised Treatment & IOL Selection</h3><p class="text-xs text-slate-600">Your specialist discusses suitable surgical techniques and intraocular lens options based on your individual requirements.</p></div>
<div class="p-5 bg-slate-50 border border-slate-200 rounded-2xl text-center"><span class="inline-flex w-10 h-10 rounded-full bg-primary text-white font-black items-center justify-center mb-3">4</span><h3 class="font-bold text-primary text-sm mb-1">Cataract Surgery</h3><p class="text-xs text-slate-600">The cloudy natural lens is removed and replaced with an artificial intraocular lens using the recommended surgical technique.</p></div>
<div class="p-5 bg-slate-50 border border-slate-200 rounded-2xl text-center"><span class="inline-flex w-10 h-10 rounded-full bg-primary text-white font-black items-center justify-center mb-3">5</span><h3 class="font-bold text-primary text-sm mb-1">Recovery & Follow-Up</h3><p class="text-xs text-slate-600">Your ophthalmologist provides post-operative instructions, medication guidance and follow-up examinations to monitor healing and visual recovery.</p></div>
</div>
<div class="text-center mt-6"><a href="#lead-form-hero" class="inline-flex items-center gap-2 px-8 py-3.5 bg-accent hover:bg-sky-600 text-white font-bold rounded-full text-sm shadow-lg transition-all"><i class="fa-solid fa-route"></i> Start Your Cataract Treatment Journey</a></div>
</div>
</section>

<!-- CATARACT SURGERY CONCERNS -->
<section id="concerns" class="py-10 md:py-14 bg-primary text-white">
<div class="container mx-auto px-4 md:px-6">
<div class="text-center max-w-3xl mx-auto mb-6">
<span class="text-sky-300 font-bold tracking-widest uppercase text-xs">Cataract Surgery Concerns</span>
<h2 class="text-2xl md:text-[2rem] font-heading font-black leading-tight mt-2">Have Questions About Cataract Surgery?</h2>
<p class="text-sm md:text-base text-sky-100/90 mt-2">Understanding the procedure, recovery and possible risks can help you make an informed decision.</p>
</div>
<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-5 max-w-6xl mx-auto items-start">
<div class="bg-white/10 border border-white/15 rounded-2xl p-5 backdrop-blur"><h3 class="font-bold text-base text-sky-200 mb-2"><i class="fa-solid fa-shield-halved mr-2"></i>Is Cataract Surgery Safe?</h3><p class="text-sm text-slate-100/90">Cataract surgery is a commonly performed procedure. Like all surgeries, it carries potential risks and complications. Your ophthalmologist will explain the benefits, risks and precautions relevant to your eye condition.</p></div>
<div class="bg-white/10 border border-white/15 rounded-2xl p-5 backdrop-blur"><h3 class="font-bold text-base text-sky-200 mb-2"><i class="fa-solid fa-hand-holding-medical mr-2"></i>Will I Experience Pain During Surgery?</h3><p class="text-sm text-slate-100/90">Cataract surgery is generally performed using local anaesthesia, commonly with anaesthetic eye drops. Some patients may experience mild pressure or discomfort during the procedure.</p></div>
<div class="bg-white/10 border border-white/15 rounded-2xl p-5 backdrop-blur"><h3 class="font-bold text-base text-sky-200 mb-2"><i class="fa-solid fa-hourglass-half mr-2"></i>How Long Does Cataract Surgery Take?</h3><p class="text-sm text-slate-100/90">The surgical procedure is generally completed within a relatively short period. The exact duration depends on the complexity of the cataract and individual surgical requirements.</p></div>
<div class="bg-white/10 border border-white/15 rounded-2xl p-5 backdrop-blur"><h3 class="font-bold text-base text-sky-200 mb-2"><i class="fa-solid fa-glasses mr-2"></i>Will I Need Glasses After Cataract Surgery?</h3><p class="text-sm text-slate-100/90">Your need for glasses depends on the intraocular lens selected, your eye condition and the type of vision correction planned. Some patients may still require glasses for certain activities.</p></div>
<div class="bg-white/10 border border-white/15 rounded-2xl p-5 backdrop-blur"><h3 class="font-bold text-base text-sky-200 mb-2"><i class="fa-solid fa-rotate mr-2"></i>Can Cataracts Develop Again After Surgery?</h3><p class="text-sm text-slate-100/90">The removed natural lens does not develop another cataract. However, some patients may develop posterior capsule opacification (PCO), sometimes called a secondary cataract. It can often be treated using a YAG laser procedure.</p></div>
<div class="bg-white/10 border border-white/15 rounded-2xl p-5 backdrop-blur"><h3 class="font-bold text-base text-sky-200 mb-2"><i class="fa-solid fa-notes-medical mr-2"></i>How Long Does Recovery Take?</h3><p class="text-sm text-slate-100/90">Recovery varies between individuals. Your ophthalmologist will provide personalised instructions regarding eye care, medication, activity restrictions and follow-up visits.</p></div>
</div>
<div class="text-center mt-6"><a href="#lead-form-contact" class="inline-flex items-center gap-2 px-8 py-3.5 bg-white text-primary font-bold rounded-full text-sm hover:bg-sky-100 transition-all"><i class="fa-solid fa-comments"></i> Discuss Your Cataract Surgery Concerns</a></div>
</div>
</section>

<!-- TESTIMONIALS -->
<section class="py-10 md:py-14 bg-white border-b border-slate-100">
<div class="container mx-auto px-4 md:px-6">
<div class="text-center max-w-2xl mx-auto mb-6">
<span class="text-accent font-bold tracking-widest uppercase text-xs">Patient Experiences</span>
<h2 class="text-2xl md:text-[2rem] font-heading font-black leading-tight text-primary mt-2">What Our Patients Say</h2>
</div>
<?php
// NOTE: Only verified Google reviews / approved patient testimonials go here.
// Add entries as ["Review text", "Patient Name"]. Review cards render only when this array has entries.
$reviews = [];
if (count($reviews) > 0) {
  echo '<div class="grid grid-cols-1 md:grid-cols-'.min(count($reviews),3).' gap-5 max-w-5xl mx-auto">';
  foreach ($reviews as $r) {
    echo '<div class="bg-slate-50 p-6 rounded-3xl border border-slate-200"><div class="text-gold mb-3"><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i></div><p class="text-sm text-slate-700 italic leading-relaxed">"'.htmlspecialchars($r[0]).'"</p><p class="mt-4 font-bold text-primary text-sm">— '.htmlspecialchars($r[1]).'</p></div>';
  }
  echo '</div>';
} else {
  echo '<p class="text-sm text-slate-600 text-center max-w-2xl mx-auto">Read verified patient reviews of Vision Eye Centre on Google.</p>';
}
?>
<div class="text-center mt-6"><a href="https://www.google.com/maps/search/?api=1&query=Vision+Eye+Centre+Siri+Fort+Road+New+Delhi" target="_blank" rel="noopener" class="inline-flex items-center gap-2 px-7 py-3 border-2 border-accent text-accent font-bold rounded-full text-sm hover:bg-accent hover:text-white transition-all"><i class="fa-brands fa-google"></i> View More Patient Reviews</a></div>
</div>
</section>

<!-- FAQ -->
<section id="faqs" class="py-10 md:py-14 bg-cream">
<div class="container mx-auto px-4 md:px-6">
<div class="text-center max-w-2xl mx-auto mb-6">
<span class="text-accent font-bold tracking-widest uppercase text-xs">Frequently Asked Questions</span>
<h2 class="text-2xl md:text-[2rem] font-heading font-black leading-tight text-primary mt-2">Cataract Surgery FAQs</h2>
</div>
<div class="max-w-3xl mx-auto space-y-3">
<?php
$faqs=[
["What is cataract surgery?","Cataract surgery is a procedure in which the cloudy natural lens of the eye is removed and replaced with an artificial intraocular lens (IOL) to help improve vision."],
["What are the early symptoms of cataracts?","Common symptoms include blurred vision, glare, difficulty seeing at night, faded colours, halos around lights and frequent changes in spectacle prescriptions."],
["When should I get cataract surgery?","Cataract surgery may be recommended when reduced vision begins affecting your everyday activities and quality of life. Your ophthalmologist will determine the appropriate timing after examining your eyes."],
["Is cataract surgery painful?","Cataract surgery is generally performed using local anaesthesia, often with anaesthetic eye drops. Patients may experience mild pressure or temporary discomfort."],
["What is phacoemulsification cataract surgery?","Phacoemulsification is a surgical technique that uses ultrasound energy to break the cloudy natural lens into smaller fragments before removing it and implanting an artificial lens."],
["What are the different types of lenses used in cataract surgery?","Common IOL options include monofocal, multifocal, extended depth of focus (EDOF) and toric lenses. The appropriate lens depends on your eye condition and visual requirements."],
["Can cataracts be treated without surgery?","Surgery is currently the established treatment for visually significant cataracts. Eye drops, medication or spectacles cannot remove an existing cataract. Your ophthalmologist can advise when surgery is appropriate."],
["Can cataracts come back after surgery?","The original cataract does not return because the cloudy natural lens has been removed. However, posterior capsule opacification (PCO) can develop in some patients and may be treated using a YAG laser."],
["How long does it take to recover after cataract surgery?","Recovery varies depending on individual eye health and the surgical procedure. Your ophthalmologist will provide specific guidance regarding healing, medication and follow-up."],
["Can both eyes undergo cataract surgery at the same time?","The treatment plan depends on your eye condition and clinical requirements. Your ophthalmologist will determine the appropriate timing for surgery in each eye."],
["Will I still need glasses after cataract surgery?","Some patients may continue to need glasses for reading, distance or specific activities. The requirement depends on the IOL selected and individual visual needs."],
["Is cataract surgery suitable for diabetic patients?","People with diabetes may undergo cataract surgery after an appropriate eye evaluation. Retinal health and diabetic eye conditions need to be assessed before surgical planning."],
["What precautions should I take after cataract surgery?","Patients are generally advised to follow prescribed eye-drop schedules, avoid rubbing or pressing the operated eye and follow their ophthalmologist's instructions regarding bathing, physical activity and follow-up examinations."],
["How do I choose the right cataract surgeon and hospital?","Consider the ophthalmologist's qualifications, experience, diagnostic facilities, surgical infrastructure, available lens options and the quality of pre- and post-operative care."],
];
foreach($faqs as $f){
echo '<div class="faq-item bg-white border border-slate-200 rounded-2xl overflow-hidden"><button type="button" class="faq-q w-full flex items-center justify-between gap-4 text-left px-5 py-4 font-bold text-primary text-sm">'.$f[0].'<i class="fa-solid fa-chevron-down faq-chev text-accent text-xs transition-transform flex-shrink-0"></i></button><div class="faq-a px-5 pb-5 text-sm text-slate-600 leading-relaxed">'.$f[1].'</div></div>';
}
?>
</div>
</div>
</section>

<!-- FINAL CTA -->
<section class="py-10 md:py-14 bg-primary text-white text-center">
<div class="container mx-auto px-4 md:px-6 max-w-3xl">
<h2 class="text-2xl md:text-[2rem] font-heading font-black leading-tight">Experiencing Blurred Vision? Take the First Step Towards Clearer Sight.</h2>
<p class="font-bold mt-4">Don't let changing vision go unexplored.</p>
<p class="text-sky-100/90 mt-2 text-sm md:text-base">Get a comprehensive cataract evaluation from experienced ophthalmologists at Vision Eye Centre and understand your treatment options, surgical techniques and suitable intraocular lens choices.</p>
<div class="flex flex-wrap justify-center gap-3 mt-6">
<a href="#lead-form-contact" class="px-7 py-3.5 bg-white text-primary font-bold rounded-full text-sm hover:bg-sky-100"><i class="fa-solid fa-calendar-check mr-2"></i>Book Your Cataract Consultation</a>
<a href="tel:+919711004422" class="px-7 py-3.5 bg-accent text-white font-bold rounded-full text-sm hover:bg-sky-500"><i class="fa-solid fa-phone mr-2"></i>Call Our Eye Care Team</a>
<a href="https://wa.me/919711004422" target="_blank" class="px-7 py-3.5 bg-[#25D366] text-white font-bold rounded-full text-sm hover:bg-[#128C7E]"><i class="fa-brands fa-whatsapp mr-2"></i>WhatsApp Us</a>
</div>
<p class="mt-5 text-sky-200 font-bold">Helpline: <a href="tel:+919711004422" class="underline">+91 9711004422</a></p>
</div>
</section>

<!-- CONTACT & LOCATIONS -->
<section id="contact" class="py-10 md:py-14 bg-white">
<div class="container mx-auto px-4 md:px-6">
<div class="text-center max-w-2xl mx-auto mb-6">
<span class="text-accent font-bold tracking-widest uppercase text-xs">Contact & Locations</span>
<h2 class="text-2xl md:text-[2rem] font-heading font-black leading-tight text-primary mt-2">Book Your Cataract Consultation in Delhi</h2>
</div>
<div class="grid grid-cols-1 md:grid-cols-2 gap-5 max-w-4xl mx-auto">
<div class="bg-slate-50 border border-slate-200 p-6 rounded-3xl"><span class="bg-accent/10 text-accent text-xs font-bold px-3 py-1 rounded-full uppercase">Siri Fort Road</span><h3 class="text-xl font-bold text-primary mt-2">South Delhi Centre</h3><p class="text-xs text-slate-600 mt-1">19, Siri Fort Road, Near Gargi College<br>New Delhi – 110049</p></div>
<div class="bg-slate-50 border border-slate-200 p-6 rounded-3xl"><span class="bg-teal/10 text-teal text-xs font-bold px-3 py-1 rounded-full uppercase">West Patel Nagar</span><h3 class="text-xl font-bold text-primary mt-2">West Delhi Centre</h3><p class="text-xs text-slate-600 mt-1">12/27, West Patel Nagar, Near Arya Samaj Mandir<br>New Delhi – 110008</p></div>
</div>
<div class="flex flex-col sm:flex-row flex-wrap justify-center items-center gap-x-8 gap-y-2 mt-6 text-sm font-bold text-primary">
<span><i class="fa-solid fa-phone text-accent mr-1.5"></i>Helpline: <a href="tel:+919711004422" class="hover:underline">+91 9711004422</a></span>
<span><i class="fa-solid fa-envelope text-accent mr-1.5"></i>Email: <a href="mailto:visioneyecentrehr@gmail.com" class="hover:underline">visioneyecentrehr@gmail.com</a></span>
</div>

<div id="lead-form-contact" class="max-w-3xl mx-auto mt-8 bg-white rounded-3xl border border-slate-200 p-6 sm:p-8 shadow-lg">
<h3 class="text-xl font-heading font-extrabold text-primary text-center">Book Your Appointment</h3>
<p class="text-xs text-slate-500 text-center mt-1 mb-5">Share your details and our team will help you schedule your cataract evaluation.</p>
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
<p class="max-w-3xl mx-auto mt-8 text-[11px] text-slate-500 text-center leading-relaxed"><strong class="text-slate-600">Medical Disclaimer:</strong> Cataract surgery and intraocular lens selection depend on individual clinical evaluation. Treatment outcomes, recovery and spectacle requirements vary between patients. Consult a qualified ophthalmologist for diagnosis and treatment recommendations.</p>
</div>
</section>

</main>

<!-- FOOTER -->
<footer class="bg-slate-900 text-slate-300 py-10 text-sm border-t border-slate-800">
<div class="container mx-auto px-4 md:px-6">
<div class="grid grid-cols-1 md:grid-cols-4 gap-8">
<div class="space-y-3"><h4 class="text-white font-bold text-lg">Vision Eye Centre</h4><p class="text-xs text-slate-400">Excellence with a humane touch.</p><p class="text-xs"><i class="fa-solid fa-award text-gold mr-1"></i> NABH Accredited Eye Care Centre</p></div>
<div class="space-y-3"><h4 class="text-white font-bold">Quick Links</h4><ul class="space-y-2 text-xs"><li><a href="#what-is-cataract" class="hover:text-accent">What Is a Cataract?</a></li><li><a href="#symptoms" class="hover:text-accent">Cataract Symptoms</a></li><li><a href="#surgery-options" class="hover:text-accent">Surgery Options</a></li><li><a href="#iol-options" class="hover:text-accent">IOL Options</a></li><li><a href="#doctors" class="hover:text-accent">Our Specialists</a></li><li><a href="#faqs" class="hover:text-accent">FAQs</a></li><li><a href="<?php echo $base; ?>privacy-policy.php" class="hover:text-accent">Privacy Policy</a></li></ul></div>
<div class="space-y-3"><h4 class="text-white font-bold">Our Locations</h4><ul class="space-y-2 text-xs"><li><strong class="text-white">South Delhi:</strong> 19, Siri Fort Road, New Delhi – 110049</li><li><strong class="text-white">West Delhi:</strong> 12/27, West Patel Nagar, New Delhi – 110008</li></ul></div>
<div class="space-y-3"><h4 class="text-white font-bold">Contact Us</h4><ul class="space-y-2 text-xs"><li><i class="fa-solid fa-phone text-accent"></i> <a href="tel:+919711004422">+91 9711004422</a></li><li><i class="fa-solid fa-envelope text-accent"></i> <a href="mailto:visioneyecentrehr@gmail.com">visioneyecentrehr@gmail.com</a></li></ul></div>
</div>
<div class="mt-6 pt-6 border-t border-slate-800 text-center text-xs text-slate-500"><p>&copy; <?php echo date("Y"); ?> Vision Eye Centre. All rights reserved.</p></div>
</div>
</footer>

<!-- Sticky mobile CTA -->
<div class="fixed bottom-0 left-0 right-0 z-[90] md:hidden bg-white/95 backdrop-blur border-t border-slate-200 px-3 py-2.5 flex gap-2">
<a href="tel:+919711004422" class="flex-1 py-3 bg-white border-2 border-accent text-accent font-bold rounded-xl text-sm text-center"><i class="fa-solid fa-phone mr-1"></i>Call Now</a>
<a href="#lead-form-hero" class="flex-1 py-3 bg-accent text-white font-bold rounded-xl text-sm text-center">Book Consultation</a>
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
