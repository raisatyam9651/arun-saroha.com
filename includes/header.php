<?php include_once __DIR__ . '/config.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
  <title><?php echo isset($pageTitle) ? $pageTitle : "Best Neurosurgeon in India | Dr. Arun Saroha – Brain & Spine Surgeon"; ?></title>
  <meta name="keywords" content="<?php echo isset($pageKeywords) ? $pageKeywords : 'top spine surgeon in gurgaon, spine surgeon gurgaon, best neurosurgeon in max hospital, best spine surgeon in max hospital, Best Neurosurgeon in Delhi, Best Spine Surgeon in Delhi, Top Neurosurgeon in Delhi, neurosurgeon in max gurgaon, best neurosurgeon in gurgaon, Neurosurgeon in gurgaon, Best Neuro Surgeon in Gurugram India, best spine surgeon in delhi, spine surgery New delhi, Best Spine Surgeon in New Delhi India, Top Spine Surgeon In Delhi, best spine surgeon in gurgaon, Best Spine Surgeon in Gurugram, Best Spine Doctor in gurgaon India'; ?>">
  <meta name="description" content="<?php echo isset($pageDesc) ? $pageDesc : 'Looking for the best neurosurgeon in India? Consult Dr. Arun Saroha – 25+ years of experience, 6,000+ successful surgeries at Max Hospital Delhi & Gurugram. Book a consultation today.'; ?>" />

  <link rel="canonical" href="<?php echo $currentPath; ?>" />
  <meta name="robots" content="index, follow" />

  <!-- Open Graph -->
  <meta property="og:title" content="<?php echo isset($pageTitle) ? $pageTitle : 'Best Neurosurgeon in India | Dr. Arun Saroha'; ?>" />
  <meta property="og:description" content="<?php echo isset($pageDesc) ? $pageDesc : 'Consult Dr. Arun Saroha, the best neurosurgeon in India. 25+ years, 6,000+ surgeries at Max Hospital Delhi & Gurugram.'; ?>" />
  <meta property="og:image" content="https://drarunsaroha.com/assets/images/dr_portrait.png" />
  <meta property="og:url" content="<?php echo $currentPath; ?>" />
  <meta property="og:type" content="website" />


  <link rel="stylesheet" href="<?php echo $root; ?>assets/css/style.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@300;400;500;700;800&family=Inter:wght@300;400;500;600&display=swap" rel="stylesheet">
  
  <script type="application/ld+json">
  [
    {
      "@context": "https://schema.org",
      "@type": "Physician",
      "name": "Dr. Arun Saroha",
      "jobTitle": "Best Neurosurgeon & Spine Surgeon in India",
      "description": "Dr. Arun Saroha is the best neurosurgeon in India with over 25 years of experience and 6,000+ successful brain and spine surgeries at Max Hospital.",
      "url": "https://drarunsaroha.com",
      "image": "https://drarunsaroha.com/assets/images/dr_portrait.png",
      "telephone": "+919818778811",
      "email": "query@drarunsaroha.com",
      "alumniOf": [
        { "@type": "CollegeOrUniversity", "name": "RNT Medical College" },
        { "@type": "CollegeOrUniversity", "name": "PGI Chandigarh" }
      ],
      "worksFor": {
        "@type": "Hospital",
        "name": "Max Hospital",
        "address": {
          "@type": "PostalAddress",
          "streetAddress": "B Block, Sushant Lok 1, Near Huda City Centre",
          "addressLocality": "Gurugram",
          "postalCode": "122001",
          "addressCountry": "IN"
        }
      },
      "medicalSpecialty": ["Neurosurgery", "Spine Surgery", "Brain Tumor Surgery"],
      "knowsAbout": ["Brain Surgery", "Spine Surgery", "Deep Brain Stimulation", "Tumor Resection", "Minimally Invasive Neurosurgery"]
    }
  ]
  </script>
</head>
<body>

  <!-- Header -->
  <header class="glass-header">
    <div class="container header-container">
      <div class="logo">
        <a href="<?php echo $root; ?>index.php">
          <h2>Dr. Arun <span class="highlight">Saroha</span></h2>
        </a>
      </div>
      <nav class="nav-links">
        <a href="<?php echo $root; ?>about.php">About</a>
        <a href="<?php echo $root; ?>services.php">Services</a>
        <a href="<?php echo $root; ?>international-patients.php">International Patients</a>
        <a href="<?php echo $root; ?>blog.php">Blog</a>
        <a href="<?php echo $root; ?>index.php#contact">Contact</a>
      </nav>
      <div class="header-cta">
        <a href="tel:+919818778811" class="btn btn-outline">Emergency: +91 98187 78811</a>
        <a href="<?php echo $root; ?>index.php#contact" class="btn btn-primary">Book Consult</a>
      </div>
      <button class="mobile-nav-toggle" aria-label="Toggle navigation">
        <span class="hamburger"></span>
      </button>
    </div>
  </header>

  <script>
    // Mobile Menu Toggle
    document.addEventListener('DOMContentLoaded', () => {
      const toggle = document.querySelector('.mobile-nav-toggle');
      const nav = document.querySelector('.nav-links');
      const header = document.querySelector('.glass-header');

      if (toggle && nav) {
        toggle.addEventListener('click', () => {
          nav.classList.toggle('nav-active');
          toggle.classList.toggle('toggle-active');
          document.body.classList.toggle('no-scroll');
        });
      }

      // Close menu on link click
      const navLinks = document.querySelectorAll('.nav-links a');
      navLinks.forEach(link => {
        link.addEventListener('click', () => {
          nav.classList.remove('nav-active');
          toggle.classList.remove('toggle-active');
          document.body.classList.remove('no-scroll');
        });
      });

      // Header Scroll Effect
      window.addEventListener('scroll', () => {
        if (window.scrollY > 50) {
          header.classList.add('header-scrolled');
        } else {
          header.classList.remove('header-scrolled');
        }
      });
    });
  </script>
