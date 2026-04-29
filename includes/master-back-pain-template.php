<?php
// Master Template for Back Pain Treatment Location Pages
// Usage: Define $state and $area before including this file

$page_title = "Best Back Pain Treatment in " . $area . " | Dr. Arun Saroha";
$page_description = "Seeking the best back pain treatment in " . $area . "? Dr. Arun Saroha is a world-renowned neurosurgeon offering minimally invasive back pain surgery and non-surgical care in " . $area . ".";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $page_title; ?></title>
    <meta name="description" content="<?php echo $page_description; ?>">
    
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&family=Outfit:wght@500;600;700;800&display=swap" rel="stylesheet">
    
    <!-- Modern Styling -->
    <link rel="stylesheet" href="/assets/css/style.css">
    
    <!-- Canonical Tag -->
    <link rel="canonical" href="https://www.drarunsaroha.com/back-pain-treatment/<?php echo strtolower(str_replace(' ', '-', $state)); ?>/<?php echo ($area != $state) ? strtolower(str_replace(' ', '-', $area)) . '/' : ''; ?>">
</head>
<body>

  <!-- Header -->
  <?php include __DIR__ . '/header.php'; ?>

  <!-- Hero Section (homepage style) -->
  <section class="hero" style="background: linear-gradient(90deg, #134085 45%, rgba(19, 64, 133, 0) 100%), url('/assets/images/spine_hero.png') no-repeat right center / contain, radial-gradient(circle at top right, #2a64c5 0%, #0f3d81 80%);">
    <div class="container">
      <div class="hero-content">
        <h1 class="fade-in-up">Best Back Pain Treatment in <br><span class="text-gradient"><?php echo $area; ?></span></h1>
        <p class="hero-tagline fade-in-up">World-Class Spinal Care by Dr. Arun Saroha</p>
        <p class="hero-subtext fade-in-up delay-1">Eliminating chronic back pain with world-class surgical precision and minimally invasive techniques. Experience India's most trusted spine care in <?php echo $area; ?>.</p>
        <div class="hero-buttons fade-in-up delay-2">
          <a href="#contact" class="btn btn-primary btn-large">Get Appointment</a>
          <a href="#clinical-overview" class="btn btn-white btn-large">Explore Treatments</a>
        </div>
      </div>
    </div>
  </section>

  <!-- Detailed Clinical Content (800+ Words for SEO & E-E-A-T) -->
  <section id="clinical-overview" class="clinical-content" style="padding: 80px 0; background: var(--white);">
    <div class="container" style="max-width: 1000px;">
      <div class="content-block" style="margin-bottom: 50px;">
        <span class="badge">Clinical Insight</span>
        <h2 style="font-size: 2.5rem; margin-bottom: 25px;">Understanding Your Back Pain in <?php echo $area; ?></h2>
        <p style="font-size: 1.15rem; margin-bottom: 20px;">Chronic back pain is one of the leading causes of disability worldwide, and for residents of <?php echo $area; ?>, finding local, world-class expertise is critical for recovery. Dr. Arun Saroha specializes in identifying the biomechanical and neurological roots of spinal discomfort. Whether your pain is localized in the lower back (lumbar), upper back (thoracic), or neck (cervical), our diagnostic-first approach ensures that we treat the cause, not just the symptoms.</p>
        <p style="font-size: 1.15rem; margin-bottom: 20px;">The spine is a complex structure of vertebrae, discs, nerves, and muscles. When any of these components are compromised—through injury, aging, or lifestyle factors—it can result in debilitating pain that radiates into the legs (sciatica) or arms. Patients in <?php echo $area; ?> often seek help after exhausting standard pain management options, and that is where Dr. Saroha's 25+ years of neurosurgical expertise provides a definitive roadmap to recovery.</p>
      </div>

      <div class="content-grid" style="display: grid; grid-template-columns: 1fr 1fr; gap: 60px; margin-bottom: 60px;">
        <div class="clinical-list">
          <h3 style="margin-bottom: 20px; color: var(--primary);">Common Symptoms We Treat</h3>
          <ul style="list-style: disk; padding-left: 20px; color: var(--text);">
            <li style="margin-bottom: 12px;">Persistent aching or stiffness anywhere from the base of the neck to the tailbone.</li>
            <li style="margin-bottom: 12px;">Sharp, localized pain in the neck, upper back, or lower back.</li>
            <li style="margin-bottom: 12px;">Chronic ache in the middle or lower back, especially after sitting or standing for long periods.</li>
            <li style="margin-bottom: 12px;">Back pain that radiates down to the buttock, thigh, calve, and toes.</li>
            <li style="margin-bottom: 12px;">Inability to stand straight without having pain or muscle spasms in the lower back.</li>
            <li style="margin-bottom: 12px;">Numbness, tingling, or weakness in the extremities.</li>
          </ul>
        </div>
        <div class="clinical-list">
          <h3 style="margin-bottom: 20px; color: var(--primary);">Root Causes of Spinal Pain</h3>
          <p style="margin-bottom: 15px;">Many factors can contribute to spinal instability and pain for patients in <?php echo $area; ?>:</p>
          <ul style="list-style: disk; padding-left: 20px; color: var(--text);">
            <li style="margin-bottom: 12px;"><strong>Disc Herniation:</strong> When the soft center of a spinal disc pushes through a crack in the tougher exterior.</li>
            <li style="margin-bottom: 12px;"><strong>Spinal Stenosis:</strong> The narrowing of the spaces within your spine, putting pressure on nerves.</li>
            <li style="margin-bottom: 12px;"><strong>Spondylolisthesis:</strong> When one vertebra slips forward over the one below it.</li>
            <li style="margin-bottom: 12px;"><strong>Degenerative Disc Disease:</strong> Natural wear and tear that occurs as we age.</li>
          </ul>
        </div>
      </div>

      <div class="detailed-section" style="background: var(--bg-light); padding: 50px; border-radius: 20px; border: 1px solid rgba(0,0,0,0.05);">
        <h3 style="font-size: 2rem; margin-bottom: 25px; color: var(--primary);">Our Diagnostic Pathway in <?php echo $area; ?></h3>
        <p style="margin-bottom: 20px;">Accurate diagnosis is the foundation of every successful back pain treatment. Dr. Saroha utilizes the most advanced imaging technology available to create a precision map of your spine:</p>
        <div style="display: grid; grid-template-columns: repeat(3, 1fr); gap: 20px;">
          <div style="background: white; padding: 25px; border-radius: 12px; box-shadow: var(--shadow-sm);">
            <h4 style="color: var(--secondary); margin-bottom: 10px;">Digital X-Ray</h4>
            <p style="font-size: 0.9rem;">To check for bone alignment, fractures, or significant structural changes.</p>
          </div>
          <div style="background: white; padding: 25px; border-radius: 12px; box-shadow: var(--shadow-sm);">
            <h4 style="color: var(--secondary); margin-bottom: 10px;">Advanced MRI</h4>
            <p style="font-size: 0.9rem;">High-definition imaging to see soft tissues, nerves, and disc herniations clearly.</p>
          </div>
          <div style="background: white; padding: 25px; border-radius: 12px; box-shadow: var(--shadow-sm);">
            <h4 style="color: var(--secondary); margin-bottom: 10px;">CT Scans</h4>
            <p style="font-size: 0.9rem;">Detailed 3D bone structures used primarily for complex deformity planning.</p>
          </div>
        </div>
      </div>

      <div class="content-block" style="margin-top: 60px;">
        <h3 style="font-size: 2rem; margin-bottom: 25px; color: var(--primary);">Surgical Excellence & Recovery</h3>
        <p style="margin-bottom: 20px;">While 80% of back pain cases can be managed non-surgically, complex conditions require surgical intervention. In <?php echo $area; ?>, Dr. Saroha is the leading voice for minimally invasive spine surgery. Unlike traditional "open" surgery, our modern techniques involve incisions as small as 15mm, significantly reducing recovery time and post-operative discomfort.</p>
        <p style="margin-bottom: 20px;">Patients from <?php echo $area; ?> opting for surgery at our center benefit from intraoperative neuromonitoring and robotic-assisted navigation, ensuring that nerve structures are preserved with 100% precision. Most of our spinal decompression and microdiscectomy patients are able to walk just hours after their procedure and return to their beautiful homes in <?php echo $area; ?> the very next day.</p>
        <div style="padding: 30px; border-left: 4px solid var(--secondary); background: rgba(230, 179, 37, 0.05); margin-top: 30px;">
           <p style="font-style: italic; color: var(--dark); font-weight: 500;">"Our goal is not just to stop the pain, but to restore the full functional mobility that allows you to live without limitations." — Dr. Arun Saroha</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Treatment Catalog (Customized for Back Pain) -->
  <section id="treatments" class="services-section bg-light" style="padding: 100px 0;">
    <div class="container">
      <div class="section-title text-center">
        <span class="badge">Surgical Portfolio</span>
        <h2>Advanced Procedures for <?php echo $area; ?> Patients</h2>
        <p>Specialized interventions for permanent relief from debilitating spinal conditions.</p>
      </div>
      
      <div class="services-grid mt-4">
        <!-- 1. Microdiscectomy -->
        <div class="service-card rich-card">
          <div class="service-icon">
            <svg width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 2v20"/><path d="M7 6h10"/><path d="M7 12h10"/><path d="M7 18h10"/></svg>
          </div>
          <h3>Microdiscectomy</h3>
          <p>The gold standard for treating herniated discs. Using a high-powered microscope, Dr. Saroha removes only the herniated portion of the disc, relieving pressure on the nerve for <?php echo $area; ?> patients.</p>
        </div>

        <!-- 2. Laminectomy -->
        <div class="service-card rich-card">
          <div class="service-icon">
            <svg width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M6 12c0-3.3 2.7-6 6-6s6 2.7 6 6-2.7 6-6 6-6-2.7-6-6Z"/><path d="M12 6V2"/><path d="M12 22v-4"/><path d="M18 12h4"/><path d="M2 12h4"/></svg>
          </div>
          <h3>Laminectomy</h3>
          <p>Effective relief for spinal stenosis. This procedure enlarges the spinal canal to provide more space for the nerves, helping sufferers in <?php echo $area; ?> walk longer distances without pain.</p>
        </div>

        <!-- 3. Final Fusion -->
        <div class="service-card rich-card">
          <div class="service-icon">
            <svg width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 3v18"/><path d="M6 8c3 1 9 1 12 0"/><path d="M6 16c3-1 9-1 12 0"/></svg>
          </div>
          <h3>Spinal Fusion</h3>
          <p>Providing permanent stability for chronic back pain. We utilize the latest 3D-printed titanium implants to fuse vertebrae together, correcting structural instability for <?php echo $area; ?> residents.</p>
        </div>

        <!-- 4. Disc Replacement -->
        <div class="service-card rich-card">
          <div class="service-icon">
            <svg width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="4" y="6" width="16" height="4" rx="1"/><rect x="4" y="14" width="16" height="4" rx="1"/><path d="M12 10v4"/><circle cx="12" cy="12" r="2" fill="currentColor" fill-opacity="0.2"/></svg>
          </div>
          <h3>Artificial Disc Replacement</h3>
          <p>Preserving natural bending and rotation. A modern alternative to fusion for patients in <?php echo $area; ?> who want to maintain maximum spinal mobility after surgery.</p>
        </div>

        <!-- 5. Minimally Invasive MISS -->
        <div class="service-card rich-card">
          <div class="service-icon">
            <svg width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="1"/><path d="M12 2v4"/><path d="M12 18v4"/><path d="M22 12h-4"/><path d="M6 12H2"/></svg>
          </div>
          <h3>MISS (Minimally Invasive)</h3>
          <p>Treating back pain through incisions as small as 15mm. Reducing blood loss and hospital stays, allowing many <?php echo $area; ?> patients to return home within 24 hours.</p>
        </div>

        <!-- 6. Non-Surgical Care -->
        <div class="service-card rich-card">
          <div class="service-icon">
            <svg width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 2C6.5 2 2 6.5 2 12s4.5 10 10 10 10-4.5 10-10S17.5 2 12 2Z"/><path d="M8 12h8"/><path d="M12 8v8"/></svg>
          </div>
          <h3>Rehabilitative Care</h3>
          <p>Comprehensive pain management including physical therapy and epidural injections for patients in <?php echo $area; ?> who are not initial candidates for surgery.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Recognition Section -->
  <section class="awards-section" style="padding: 100px 0;">
    <div class="container">
      <div class="section-title text-center">
        <span class="badge">Professional Excellence</span>
        <h2>Awards & Global Recognition</h2>
      </div>
      <div class="awards-grid mt-4">
        <div class="award-card">
          <div class="award-icon">🏆</div>
          <h3>Best Spine Surgeon</h3>
          <p>Ranked #1 for Spinal Care at Max Hospital clinical awards.</p>
        </div>
        <div class="award-card">
          <div class="award-icon">🥇</div>
          <h3>Forbes Excellence</h3>
          <p>Recognized for surgical innovation in neuro-oncology.</p>
        </div>
        <div class="award-card">
          <div class="award-icon">🏥</div>
          <h3>25+ Years Experience</h3>
          <p>Serving over 10,000+ satisfied patients worldwide.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- International Care -->
  <section class="international-section bg-light">
    <div class="container international-container">
      <div class="international-text">
        <span class="badge">Global Reach</span>
        <h2>International Patient Care for <?php echo $area; ?></h2>
        <p>If you are travelling to Delhi from <?php echo $area; ?> for your back pain treatment, we provide a dedicated concierge service to manage your medical journey from start to finish.</p>
        <div class="hero-buttons">
          <a href="../../../international-patients.php" class="btn btn-outline">Learn More about Visa & Stay</a>
        </div>
      </div>
      <div class="international-stats">
        <div class="intl-stat-card">
          <div class="stat-number">40+</div>
          <p>Countries Served</p>
        </div>
        <div class="intl-stat-card">
          <div class="stat-number">24/7</div>
          <p>Support</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Testimonials -->
  <section class="testimonials-section">
    <div class="container">
      <div class="section-title text-center">
        <h2>Success Stories from <?php echo $area; ?> Patients</h2>
      </div>
      <div class="testimonials-grid mt-4">
        <div class="testimonial-card">
          <div class="testimonial-stars">★★★★★</div>
          <p class="testimonial-text">"I couldn't walk for more than 5 minutes. After Dr. Saroha's minimally invasive surgery, I was back on my feet in <?php echo $area; ?> within a week!"</p>
          <div class="testimonial-author">
            <strong>Rajesh Gupta</strong>
            <span>Active Recovery</span>
          </div>
        </div>
        <div class="testimonial-card">
          <div class="testimonial-stars">★★★★★</div>
          <p class="testimonial-text">"The best decision for my chronic back pain. Professional, precise, and highly recommended for anyone in <?php echo $area; ?>."</p>
          <div class="testimonial-author">
            <strong>Priya Sharma</strong>
            <span>Post-Op Success</span>
          </div>
        </div>
        <div class="testimonial-card">
          <div class="testimonial-stars">★★★★★</div>
          <p class="testimonial-text">"Dr. Saroha saved my career. My spinal stenosis was debilitating, but now I'm living a pain-free life as if it never happened."</p>
          <div class="testimonial-author">
            <strong>Amit Kumar</strong>
            <span>Mobility Restored</span>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- FAQ Section -->
  <section id="faq" class="faq-section" style="padding: 100px 0; background: var(--white);">
    <div class="container">
      <div class="section-title text-center">
        <span class="badge">Patient Education</span>
        <h2>Frequently Asked Questions about Back Pain in <?php echo $area; ?></h2>
      </div>
      <div class="faq-grid mt-4" style="display: grid; grid-template-columns: 1fr 1fr; gap: 30px;">
        <div class="faq-item" style="background: var(--bg-light); padding: 30px; border-radius: 15px; border: 1px solid rgba(0,0,0,0.03);">
          <h3 style="font-size: 1.2rem; color: var(--primary); margin-bottom: 15px;">What are the most common causes of back pain?</h3>
          <p>Back pain is often caused by muscle strain, ligament injury, disc herniation, or structural issues like scoliosis. For many patients in <?php echo $area; ?>, factors like poor posture and sedentary lifestyle also play a major role.</p>
        </div>
        <div class="faq-item" style="background: var(--bg-light); padding: 30px; border-radius: 15px; border: 1px solid rgba(0,0,0,0.03);">
          <h3 style="font-size: 1.2rem; color: var(--primary); margin-bottom: 15px;">When should I see a spine surgeon for my back pain?</h3>
          <p>If you experience persistent pain for more than 4 weeks, numbness in your legs, weakness, or pain that radiates down to your feet, you should consult Dr. Arun Saroha for a clinical evaluation in <?php echo $area; ?>.</p>
        </div>
        <div class="faq-item" style="background: var(--bg-light); padding: 30px; border-radius: 15px; border: 1px solid rgba(0,0,0,0.03);">
          <h3 style="font-size: 1.2rem; color: var(--primary); margin-bottom: 15px;">Is surgery always necessary for back pain?</h3>
          <p>No. 80-90% of our patients from <?php echo $area; ?> find significant relief through non-surgical methods such as specialized physical therapy, clinical pain management, and activity modification.</p>
        </div>
        <div class="faq-item" style="background: var(--bg-light); padding: 30px; border-radius: 15px; border: 1px solid rgba(0,0,0,0.03);">
          <h3 style="font-size: 1.2rem; color: var(--primary); margin-bottom: 15px;">What is Minimally Invasive Spine Surgery (MISS)?</h3>
          <p>MISS uses state-of-the-art robotic navigation and microsurgical tools to treat the spine through tiny incisions (15mm). This leads to less muscle damage and much faster recovery for <?php echo $area; ?> residents.</p>
        </div>
        <div class="faq-item" style="background: var(--bg-light); padding: 30px; border-radius: 15px; border: 1px solid rgba(0,0,0,0.03);">
          <h3 style="font-size: 1.2rem; color: var(--primary); margin-bottom: 15px;">How long is the recovery period after back surgery?</h3>
          <p>With our modern minimally invasive techniques, most patients are walking within hours of the procedure and can return to light desk work in <?php echo $area; ?> within 1 to 2 weeks.</p>
        </div>
        <div class="faq-item" style="background: var(--bg-light); padding: 30px; border-radius: 15px; border: 1px solid rgba(0,0,0,0.03);">
          <h3 style="font-size: 1.2rem; color: var(--primary); margin-bottom: 15px;">Can back pain return after treatment?</h3>
          <p>While treatment for the specific cause is definitive, maintaining a strong core and healthy lifestyle is essential to prevent secondary spinal issues in the future in <?php echo $area; ?>.</p>
        </div>
        <div class="faq-item" style="background: var(--bg-light); padding: 30px; border-radius: 15px; border: 1px solid rgba(0,0,0,0.03);">
          <h3 style="font-size: 1.2rem; color: var(--primary); margin-bottom: 15px;">Do you offer second opinions for <?php echo $area; ?>?</h3>
          <p>Yes, Dr. Saroha regularly provides detailed second opinions for complex spinal cases across India, helping patients from <?php echo $area; ?> make informed decisions about their surgical needs.</p>
        </div>
        <div class="faq-item" style="background: var(--bg-light); padding: 30px; border-radius: 15px; border: 1px solid rgba(0,0,0,0.03);">
          <h3 style="font-size: 1.2rem; color: var(--primary); margin-bottom: 15px;">How do I prepare for my first consultation?</h3>
          <p>Please bring all your recent MRI/CT scans and a history of previous treatments (injections, PT). This helps our clinical team in <?php echo $area; ?> provide an immediate, accurate assessment.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Contact / Booking Section -->
  <section id="contact" class="contact-section" style="padding: 100px 0; background: var(--bg-light);">
    <div class="container">
      <div class="section-title text-center">
        <span class="badge">Get In Touch</span>
        <h2>Book a Consultation in <?php echo $area; ?></h2>
        <p>Consult with India's leading spine specialist. Fill out the form below and our team will get back to you within 24 hours.</p>
      </div>
      <div class="contact-wrapper">
        <div class="contact-maps">
          <div class="map-card">
            <h4>
              <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"/><circle cx="12" cy="10" r="3"/></svg>
              Max Hospital, Dwarka (Delhi)
            </h4>
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3503.5748145304105!2d77.0509589!3d28.582527799999998!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390d196186e5d2cf%3A0xdac8e40fda95b616!2sDr.%20Arun%20Saroha%3A%20Best%20Neurosurgeon%20in%20Dwarka%2C%20Delhi%20%7C%20Spine%20Surgeon%2C%20Brain%20Tumor%2C%20Neurologist%20in%20Delhi%2C%20Max%20Hospital!5e0!3m2!1sen!2sus!4v1776149298554!5m2!1sen!2sus" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
          </div>
          <div class="map-card">
            <h4>
              <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"/><circle cx="12" cy="10" r="3"/></svg>
              Max Hospital, Gurugram (India)
            </h4>
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3507.603000018817!2d77.0747987!3d28.461381599999996!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390d1922738640a3%3A0x717aeb7ba25e979c!2sDr.%20Arun%20Saroha%3A%20Best%20Neurosurgeon%20in%20Gurgaon%2C%20India%20%7C%20Brain%20Tumor%2C%20Stroke%20treatment%2C%20Spine%20Surgeon%20in%20Gurgaon%20-%20Max%20Hospital!5e0!3m2!1sen!2sus!4v1776149342529!5m2!1sen!2sus" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
          </div>
        </div>

        <div class="contact-form-wrapper">
          <form class="contact-form" action="#" method="POST">
            <div class="form-row">
              <div class="form-group">
                <label for="name">Full Name</label>
                <input type="text" id="name" name="name" placeholder="Your full name" required>
              </div>
              <div class="form-group">
                <label for="phone">Phone Number</label>
                <input type="tel" id="phone" name="phone" placeholder="+91 XXXXX XXXXX" required>
              </div>
            </div>
            <div class="form-row">
              <div class="form-group">
                <label for="email">Email Address</label>
                <input type="email" id="email" name="email" placeholder="you@example.com">
              </div>
              <div class="form-group">
                <label for="condition">Diagnostic Required</label>
                <select id="condition" name="condition">
                  <option value="back-pain" selected>Back Pain Treatment</option>
                  <option value="spine-surgery">Spine Surgery</option>
                  <option value="disc-replacement">Disc Replacement</option>
                  <option value="second-opinion">Second Opinion for <?php echo $area; ?> patients</option>
                  <option value="other">Other</option>
                </select>
              </div>
            </div>
            <div class="form-group">
              <label for="message">Message</label>
              <textarea id="message" name="message" rows="4" placeholder="Briefly describe your spinal condition or symptoms in <?php echo $area; ?>"></textarea>
            </div>
            <button type="submit" class="btn btn-primary btn-large" style="width: 100%;">Submit Consultation Request</button>
          </form>
        </div>
      </div>
    </div>
  </section>

  <!-- Footer -->
  <?php include __DIR__ . '/footer.php'; ?>

</body>
</html>
