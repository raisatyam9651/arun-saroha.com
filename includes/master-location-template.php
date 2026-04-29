<?php 
  // MASTER RICH LOCATION TEMPLATE
  // Replicates the full structure of index.php with localized SEO content
  
  if (!isset($area)) { $area = "Delhi"; }
  if (!isset($state)) { $state = "Delhi"; }
  $locationName = $area . ", " . $state;
  
  $pageTitle = "Best Neurosurgeon in $area | Dr. Arun Saroha – Brain & Spine Expert in $state";
  $pageDesc = "Consult Dr. Arun Saroha, the best neurosurgeon in $area. Over 25 years of experience in complex brain & spine surgeries. Trusted by patients in $area for elite neurological care.";
  $pageKeywords = "best neurosurgeon in $area, top spine surgeon in $area, brain tumor specialist $area, Dr. Arun Saroha $area, neurosurgery hospital $state";
  
  // Stable include from the same directory
  include_once __DIR__ . '/header.php'; 
?>

  <!-- Hero Section -->
  <section class="hero">
    <div class="container">
      <div class="hero-content">
        <h1 class="fade-in-up">Best Neurosurgeon in <?php echo $area; ?> – <br><span class="text-gradient">Dr. Arun Saroha</span></h1>
        <p class="hero-tagline fade-in-up">Precision Brain & Spine Surgery for <?php echo $area; ?> Residents</p>
        <p class="hero-subtext fade-in-up delay-1">Searching for the <strong>best neurosurgeon in <?php echo $area; ?></strong>? Experience world-class medical and surgical care for all brain and spine conditions, led by Dr. Arun Saroha with 25+ years of clinical excellence.</p>
        <div class="hero-buttons fade-in-up delay-2">
          <a href="#contact" class="btn btn-primary btn-large">Book in <?php echo $area; ?></a>
          <a href="#services" class="btn btn-white btn-large">Our Specialties</a>
        </div>
      </div>
    </div>
  </section>

  <!-- Stats Floating Section -->
  <section class="stats-section">
    <div class="container">
      <div class="stats-grid glass-card">
        <div class="stat-item">
          <div class="stat-number">25+</div>
          <p>Years of Experience</p>
        </div>
        <div class="stat-item">
          <div class="stat-number">8,000+</div>
          <p>Successful Surgeries</p>
        </div>
        <div class="stat-item">
          <div class="stat-number">100%</div>
          <p>Commitment to Care</p>
        </div>
        <div class="stat-item">
          <div class="stat-number">850+</div>
          <p>Gold Standard Treatments</p>
        </div>
      </div>
    </div>
  </section>

  <!-- About Section -->
  <section id="about" class="about-section">
    <div class="container about-container">
      <div class="about-image-wrapper">
        <div class="blob-bg"></div>
        <img src="<?php echo $root; ?>assets/images/dr_portrait.png" alt="Dr. Arun Saroha – Best Neurosurgeon servicing <?php echo $area; ?>" class="about-img">
      </div>
      <div class="about-text">
        <span class="badge">Local Expertise</span>
        <h2>Premier Neurosurgeon & Spine Specialist for <?php echo $area; ?></h2>
        <p>Dr. Arun Saroha is widely recognized as the <strong>best neurosurgeon in <?php echo $area; ?></strong>. With a career spanning over two decades, he has brought revolutionary neurological care to patients in <?php echo $area; ?> and across <?php echo $state; ?>. Specializing in minimally invasive spine surgery and complex brain tumor removals, Dr. Saroha ensures that patients from <?php echo $area; ?> receive the same international standards of healthcare available globally.</p>

        <ul class="features-list">
          <li><strong>Education:</strong> Training from PGIMER Chandigarh & fellowships in Singapore.</li>
          <li><strong>Accessibility:</strong> Priority consultations for patients following up from <?php echo $area; ?>.</li>
          <li><strong>Modern Methods:</strong> Advanced keyhole surgeries for faster recovery.</li>
        </ul>

        <a href="<?php echo $root; ?>about.php" class="btn btn-secondary mt-2">View Full Credentials</a>
      </div>
    </div>
  </section>

  <!-- Services Section -->
  <section id="services" class="services-section bg-light">
    <div class="container">
      <div class="section-title text-center">
        <span class="badge">Expert Procedures</span>
        <h2>Advanced Treatments Available for Residents of <?php echo $area; ?></h2>
        <p>Comprehensive neurological solutions utilizing state-of-the-art medical technology.</p>
      </div>
      
      <div class="services-grid mt-4">
        <!-- 1. Back Pain -->
        <div class="service-card">
          <div class="service-icon">
            <svg width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M7 2h10c.6 0 1 .4 1 1v2c0 .6-.4 1-1 1H7c-.6 0-1-.4-1-1V3c0-.6.4-1 1-1Z"/><path d="M7 8h10c.6 0 1 .4 1 1v2c0 .6-.4 1-1 1H7c-.6 0-1-.4-1-1V9c0-.6.4-1 1-1Z"/><path d="M7 14h10c.6 0 1 .4 1 1v2c0 .6-.4 1-1 1H7c-.6 0-1-.4-1-1v-2c0-.6.4-1 1-1Z"/><path d="M7 20h10c.6 0 1 .4 1 1v1c0 .6-.4 1-1 1H7c-.6 0-1-.4-1-1v-1c0-.6.4-1 1-1Z"/><path d="M12 6v2"/><path d="M12 12v2"/><path d="M12 18v2"/></svg>
          </div>
          <h3>Back Pain Treatment in <?php echo $area; ?></h3>
          <p>Back pain significantly impacts the lives of millions. Dr. Arun Saroha emerges as a prominent figure in combating this pervasive issue for patients in <?php echo $area; ?>.</p>
          <a href="#contact" class="service-link">Read More <span>&rarr;</span></a>
        </div>

        <!-- 2. Cervical Spine Surgery -->
        <div class="service-card">
          <div class="service-icon">
             <svg width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M16 2a2 2 0 0 1 2 2v2a2 2 0 0 1-2 2H8a2 2 0 0 1-2-2V4a2 2 0 0 1 2-2h8Z"/><path d="M8 8v14"/><path d="M16 8v14"/><path d="M12 8v14"/></svg>
          </div>
          <h3>Cervical Spine Surgery</h3>
          <p>Designed to address conditions affecting the neck portion of the spine, relieving pressure on the spinal cord or nerves for residents of <?php echo $area; ?>.</p>
          <a href="#contact" class="service-link">Read More <span>&rarr;</span></a>
        </div>

        <!-- 3. Degenerative Disc -->
        <div class="service-card">
          <div class="service-icon">
            <svg width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 3v18"/><path d="M6 8c3 1 9 1 12 0"/><path d="M6 16c3-1 9-1 12 0"/></svg>
          </div>
          <h3>Degenerative Disc Care</h3>
          <p>Treating discs that wear down and cause pain. As the best neurosurgeon in Delhi, Dr. Saroha provides advanced solutions for disc disability.</p>
          <a href="#contact" class="service-link">Read More <span>&rarr;</span></a>
        </div>

        <!-- 4. Brain Tumor Surgery -->
        <div class="service-card">
          <div class="service-icon">
            <svg width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 21a9 9 0 1 1 0-18 9 9 0 0 1 0 18Zm0-15v6m0 4h.01"/><path d="M12 3c-1 2-1 4 0 6s1-2 0-4Z"/></svg>
          </div>
          <h3>Brain Tumor Surgery in <?php echo $area; ?></h3>
          <p>Expert removal of abnormal cell growths in the brain. Dr. Saroha is recognized as the best neurosurgeon in the world for complex tumor cases.</p>
          <a href="#contact" class="service-link">Read More <span>&rarr;</span></a>
        </div>

        <!-- 5. Brain Aneurysm -->
        <div class="service-card">
          <div class="service-icon">
             <svg width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 12h-4l-3 9L9 3l-3 9H2"/><circle cx="12" cy="12" r="3" stroke-dasharray="2 2"/></svg>
          </div>
          <h3>Brain Aneurysm Treatment</h3>
          <p>Managing weak spots on brain blood vessels. Consult the best neurosurgeon in Delhi for advanced clipping and endovascular coiling.</p>
          <a href="#contact" class="service-link">Read More <span>&rarr;</span></a>
        </div>

        <!-- 6. Headache Treatment -->
        <div class="service-card">
          <div class="service-icon">
             <svg width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 2C6.5 2 2 6.5 2 12s4.5 10 10 10 10-4.5 10-10S17.5 2 12 2Z"/><path d="M8 10h.01"/><path d="M16 10h.01"/><path d="M12 16c-2 0-3-1-3-1s1-1 3-1 3 1 3 1-1 1-3 1Z"/><path d="m5 5 2 2"/><path d="m19 5-2 2"/></svg>
          </div>
          <h3>Headache & Migraine Relief</h3>
          <p>Stop routine discomfort from disrupting your life. Specialized neurological care available for chronic headache sufferers in <?php echo $area; ?>.</p>
          <a href="#contact" class="service-link">Read More <span>&rarr;</span></a>
        </div>

        <!-- 7. Minimally Invasive Spine Surgery -->
        <div class="service-card">
          <div class="service-icon">
            <svg width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="1"/><path d="M12 2v4"/><path d="M12 18v4"/><path d="M22 12h-4"/><path d="M6 12H2"/><path d="M12 12 5 5"/><path d="M12 12l7 7"/></svg>
          </div>
          <h3>Minimally Invasive Spine Surgery</h3>
          <p>Using advanced techniques with smaller incisions, resulting in less tissue damage and significantly faster recovery for patients in <?php echo $area; ?>.</p>
          <a href="#contact" class="service-link">Read More <span>&rarr;</span></a>
        </div>

        <!-- 8. Disc Replacement Surgery -->
        <div class="service-card">
          <div class="service-icon">
             <svg width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><rect x="4" y="6" width="16" height="4" rx="1"/><rect x="4" y="14" width="16" height="4" rx="1"/><path d="M12 10v4"/><circle cx="12" cy="12" r="2" fill="currentColor" fill-opacity="0.2"/></svg>
          </div>
          <h3>Disc Replacement Surgery India</h3>
          <p>Artificial disc replacement preserves natural spinal motion. Dr. Saroha uses the latest prosthetic technology for cervical treatments in <?php echo $area; ?>.</p>
          <a href="#contact" class="service-link">Read More <span>&rarr;</span></a>
        </div>

        <!-- 9. Scoliosis -->
        <div class="service-card">
          <div class="service-icon">
             <svg width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 2v2"/><path d="M12 20v2"/><path d="M12 8c2.5 0 4.5 2 4.5 4.5S14.5 17 12 17s-4.5-2-4.5-4.5S9.5 8 12 8Z" transform="skewX(-5)"/><path d="M12 4c0 0 3 2 3 4s-3 4-3 4-3 2-3 4 3 4 3 4" stroke-dasharray="2 2"/></svg>
          </div>
          <h3>Scoliosis & Spinal Deformity</h3>
          <p>Complex deformity correction using navigation-guided instrumentation and intraoperative neuromonitoring for maximum safety in <?php echo $area; ?>.</p>
          <a href="#contact" class="service-link">Read More <span>&rarr;</span></a>
        </div>

        <!-- 10. Spinal Stenosis -->
        <div class="service-card">
          <div class="service-icon">
             <svg width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M6 12c0-3.3 2.7-6 6-6s6 2.7 6 6-2.7 6-6 6-6-2.7-6-6Z"/><path d="M12 6V2"/><path d="M12 22v-4"/><path d="M18 12h4"/><path d="M2 12h4"/></svg>
          </div>
          <h3>Spinal Stenosis Surgery India</h3>
          <p>Relieving nerve compression caused by narrowing of the spinal canal. Dr. Saroha performs decompression to help <?php echo $area; ?> residents walk pain-free.</p>
          <a href="#contact" class="service-link">Read More <span>&rarr;</span></a>
        </div>

        <!-- 11. Hydrocephalus -->
        <div class="service-card">
          <div class="service-icon">
             <svg width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 2a7 7 0 0 1 7 7c0 2.3-1.5 4.7-2.3 5.8l-4.7 6.2-4.7-6.2C6.5 13.7 5 11.3 5 9a7 7 0 0 1 7-7z"/><path d="M8 9h8"/></svg>
          </div>
          <h3>Hydrocephalus Treatment India</h3>
          <p>Managing excess brain fluid through VP shunt placement and endoscopic ETV for both adults and children in the <?php echo $area; ?> region.</p>
          <a href="#contact" class="service-link">Read More <span>&rarr;</span></a>
        </div>

        <!-- 12. Endoscopic Spine Surgery -->
        <div class="service-card">
          <div class="service-icon">
             <svg width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="3"/><path d="M3 12h6"/><path d="M15 12h6"/><path d="M12 3v6"/><path d="M12 15v6"/><circle cx="12" cy="12" r="9" stroke-opacity="0.2"/></svg>
          </div>
          <h3>Endoscopic Spine Surgery India</h3>
          <p>Ultra-minimally invasive surgery with incisions as small as 8mm, enabling same-day discharge for patients from <?php echo $area; ?>.</p>
          <a href="#contact" class="service-link">Read More <span>&rarr;</span></a>
        </div>
      </div>
    </div>
  </section>

  <!-- Awards & Recognition -->
  <section id="awards" class="awards-section">
    <div class="container">
      <div class="section-title text-center">
        <span class="badge">Recognition</span>
        <h2>India's Most Awarded Neurosurgeon Servicing <?php echo $area; ?></h2>
        <p>Dr. Arun Saroha's excellence in neurosurgery has earned national and international recognition.</p>
      </div>
      <div class="awards-grid mt-4">
        <div class="award-card">
          <div class="award-icon">
            <svg width="44" height="44" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="8" r="6"/><path d="M15.477 12.89 17 22l-5-3-5 3 1.523-9.11"/></svg>
          </div>
          <h3>Best Neurosurgeon Award</h3>
          <p>Recognised as the Best Neurosurgeon in India by leading healthcare bodies for outstanding surgical outcomes and patient care.</p>
        </div>
        <div class="award-card">
          <div class="award-icon">
            <svg width="44" height="44" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><path d="M6 9H4.5a2.5 2.5 0 0 1 0-5C7 4 6 9 6 9Zm0 0h12m-12 0v9a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V9m0 0h1.5a2.5 2.5 0 0 0 0-5C17 4 18 9 18 9m-6-5v5"/></svg>
          </div>
          <h3>Excellence in Spine Surgery</h3>
          <p>Awarded for pioneering minimally invasive spine surgery techniques that have set new benchmarks in patient recovery and surgical precision.</p>
        </div>
        <div class="award-card">
          <div class="award-icon">
            <svg width="44" height="44" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"/><polyline points="22 4 12 14.01 9 11.01"/></svg>
          </div>
          <h3>Times Health Icon</h3>
          <p>Featured as a Times Health Icon for contributions to neuroscience, advanced brain surgery, and deep brain stimulation procedures in India.</p>
        </div>
        <div class="award-card">
          <div class="award-icon">
            <svg width="44" height="44" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><path d="M12 2L2 7l10 5 10-5-10-5z"/><path d="M2 17l10 5 10-5"/><path d="M2 12l10 5 10-5"/></svg>
          </div>
          <h3>International Fellowship</h3>
          <p>Holds international fellowships and has trained under world-renowned neurosurgeons, bringing global best practices to Max Hospital Delhi and Gurugram.</p>
        </div>
        <div class="award-card">
          <div class="award-icon">
            <svg width="44" height="44" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M23 21v-2a4 4 0 0 0-3-3.87"/><path d="M16 3.13a4 4 0 0 1 0 7.75"/></svg>
          </div>
          <h3>8,000+ Lives Transformed</h3>
          <p>A milestone trusted by patients from over 30 countries. Dr. Saroha's surgical expertise and compassionate care continue to transform thousands of lives every year.</p>
        </div>
        <div class="award-card">
          <div class="award-icon">
            <svg width="44" height="44" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><rect x="2" y="3" width="20" height="14" rx="2" ry="2"/><line x1="8" y1="21" x2="16" y2="21"/><line x1="12" y1="17" x2="12" y2="21"/></svg>
          </div>
          <h3>Published Researcher</h3>
          <p>Authored numerous papers in peer-reviewed neurosurgery journals and regularly presents at national and international neuroscience conferences.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Why Choose Us -->
  <section id="why-choose" class="why-choose-section bg-light">
    <div class="container">
      <div class="section-title text-center">
        <span class="badge">Why Choose Dr. Saroha</span>
        <h2>Why Patients in <?php echo $area; ?> Choose India's Best Neurosurgeon</h2>
      </div>
      <div class="why-grid mt-4">
        <div class="why-card">
          <div class="why-number">01</div>
          <h3>25+ Years of Experience</h3>
          <p>Over two decades of hands-on neurosurgical expertise across the most complex brain and spine cases.</p>
        </div>
        <div class="why-card">
          <div class="why-number">02</div>
          <h3>Minimally Invasive Techniques</h3>
          <p>Advanced keyhole and endoscopic surgeries that mean smaller incisions, less pain, and faster recovery for residents of <?php echo $area; ?>.</p>
        </div>
        <div class="why-card">
          <div class="why-number">03</div>
          <h3>Max Hospital Infrastructure</h3>
          <p>Operating at India's top JCI-accredited hospitals with state-of-the-art ICU, imaging, and navigation systems.</p>
        </div>
        <div class="why-card">
          <div class="why-number">04</div>
          <h3>International Patient Support</h3>
          <p>Dedicated coordination for patients travelling to Delhi/NCR from <?php echo $area; ?> and overseas countries.</p>
        </div>
        <div class="why-card">
          <div class="why-number">05</div>
          <h3>24/7 Emergency Care</h3>
          <p>Round-the-clock availability for emergency brain and spine surgeries with rapid response protocols for <?php echo $state; ?> cases.</p>
        </div>
        <div class="why-card">
          <div class="why-number">06</div>
          <h3>Personalised Treatment Plans</h3>
          <p>Every patient from <?php echo $area; ?> receives a customised care plan tailored to their specific condition, age, and recovery goals.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- International Patients -->
  <section id="patients" class="international-section">
    <div class="container">
      <div class="international-container glass-card" style="padding: 4rem; border-radius: 30px; border: 1px solid rgba(255,255,255,0.1); background: rgba(15, 61, 129, 0.05);">
        <div class="international-text">
          <span class="badge">International Excellence</span>
          <h2>World-Class Neurosurgery for Patients in <?php echo $area; ?></h2>
          <p>Dr. Arun Saroha has successfully treated patients from over 30 countries. Our dedicated patient desk provides end-to-end support to make your medical journey to Delhi/NCR smooth and stress-free.</p>
          <ul class="features-list">
            <li><strong>Priority Scheduling:</strong> Dedicated slots for regional patients from <?php echo $area; ?>.</li>
            <li><strong>Travel Support:</strong> Assistance with accommodation and transport near Max Hospital.</li>
            <li><strong>Tele-Consultation:</strong> Pre-travel video consultations specifically for patients in <?php echo $state; ?>.</li>
            <li><strong>Comprehensive Care:</strong> From diagnosis to robotic-assisted surgery and rehabilitation.</li>
          </ul>
          <a href="#contact" class="btn btn-primary mt-2">Enquire Now from <?php echo $area; ?></a>
        </div>
      </div>
    </div>
  </section>

  <!-- Testimonials -->
  <section id="testimonials" class="testimonials-section bg-light">
    <div class="container">
      <div class="section-title text-center">
        <span class="badge">Patient Stories</span>
        <h2>What Patients in <?php echo $area; ?> Say</h2>
        <p>Real experiences from patients who trusted Dr. Arun Saroha with their care.</p>
      </div>
      <div class="testimonials-grid mt-4">
        <div class="testimonial-card">
          <div class="testimonial-stars">&#9733;&#9733;&#9733;&#9733;&#9733;</div>
          <p class="testimonial-text">"Finding the best neurosurgeon in <?php echo $area; ?> was my priority. Dr. Saroha's diagnosis was spot on and my recovery from spine surgery has been amazing. Truly a world-class experience."</p>
          <div class="testimonial-author">
            <strong>Satisfied Patient</strong>
            <span>Resident of <?php echo $area; ?></span>
          </div>
        </div>
        <div class="testimonial-card">
          <div class="testimonial-stars">&#9733;&#9733;&#9733;&#9733;&#9733;</div>
          <p class="testimonial-text">"I travelled specifically for Dr. Saroha's expertise. The minimally invasive approach meant I was back to my routine in no time. Highly recommend his services for anyone in <?php echo $state; ?>."</p>
          <div class="testimonial-author">
            <strong>Patient Review</strong>
            <span>Travelling from <?php echo $area; ?></span>
          </div>
        </div>
        <div class="testimonial-card">
          <div class="testimonial-stars">&#9733;&#9733;&#9733;&#9733;&#9733;</div>
          <p class="testimonial-text">"The care and precision at Max Hospital under Dr. Saroha is unmatched. His team handled all my coordination from <?php echo $area; ?> perfectly."</p>
          <div class="testimonial-author">
            <strong>Cervical Spine Patient</strong>
            <span>Verified Patient from <?php echo $area; ?></span>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- FAQ Section -->
  <section id="faq" class="faq-section">
    <div class="container">
      <div class="section-title text-center">
        <span class="badge">Common Questions</span>
        <h2>FAQs for Patients in <?php echo $area; ?></h2>
      </div>
      <div class="faq-grid mt-4">
        <div class="faq-item">
          <h3>Who is the best neurosurgeon in <?php echo $area; ?>?</h3>
          <p>Dr. Arun Saroha is widely regarded as the best neurosurgeon servicing patients in <?php echo $area; ?>, with over 25 years of experience and 8,000+ successful surgeries at Max Hospital in Delhi and Gurugram.</p>
        </div>
        <div class="faq-item">
          <h3>How do I book an appointment from <?php echo $area; ?>?</h3>
          <p>Local patients in <?php echo $area; ?> can book an appointment by calling +91 98187 78811 or using the online form for a priority consultation at Max Hospital.</p>
        </div>
        <div class="faq-item">
          <h3>What conditions are treated for residents of <?php echo $area; ?>?</h3>
          <p>We treat all complex brain and spine conditions including brain tumors, slip disc, cervical spondylosis, hydrocephalus, and scoliosis using state-of-the-art minimally invasive technology.</p>
        </div>
        <div class="faq-item">
          <h3>Does Dr. Saroha offer tele-consultation for <?php echo $area; ?> residents?</h3>
          <p>Yes. Patients from <?php echo $area; ?> can opt for a video consultation before visiting in person. Share your MRI/CT scans via WhatsApp and receive a preliminary evaluation and treatment plan.</p>
        </div>
        <div class="faq-item">
          <h3>What is the recovery time after spine surgery?</h3>
          <p>With modern minimally invasive techniques, most patients from <?php echo $area; ?> are walking within hours of surgery and can return to desk work within 1–2 weeks. Full recovery depends on the procedure complexity.</p>
        </div>
        <div class="faq-item">
          <h3>Are the hospitals JCI-accredited?</h3>
          <p>Yes. Both Max Hospital Gurugram and Max Super Speciality Hospital Saket meet the highest international healthcare standards, ensuring safety and quality for all patients from <?php echo $area; ?>.</p>
        </div>
        <div class="faq-item">
          <h3>Can I get a second opinion from <?php echo $area; ?>?</h3>
          <p>Absolutely. Dr. Saroha regularly provides second opinions for complex cases. Send your scan reports via WhatsApp or email for a detailed remote second opinion review.</p>
        </div>
        <div class="faq-item">
          <h3>What treatments are available for residents of <?php echo $area; ?>?</h3>
          <p>Available treatments include brain tumor surgery, microdiscectomy, disc replacement, spinal fusion, scoliosis correction, hydrocephalus VP shunt, and endoscopic spine surgery — all using the latest technology.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Contact/Booking Section -->
  <section id="contact" class="contact-section">
    <div class="container">
      <div class="section-title text-center">
        <span class="badge">Get Expert Care</span>
        <h2>Consult the Best Neurosurgeon in <?php echo $area; ?></h2>
        <p>Book your priority session today for a healthier life.</p>
      </div>
      <div class="contact-wrapper">
        <div class="contact-maps">
          <div class="map-card">
            <h4>
              <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"/><circle cx="12" cy="10" r="3"/></svg>
              Max Hospital, Dwarka (Delhi)
            </h4>
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3503.5748145304105!2d77.0509589!3d28.582527799999998!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390d196186e5d2cf%3A0xdac8e40fda95b616!2sDr.%20Arun%20Saroha%3A%20Best%20Neurosurgeon%20in%20Dwarka%2C%20Delhi%20%7C%20Spine%20Surgeon%2C%20Brain%20Tumor%2C%20Neurologist%20in%20Delhi%2C%20Max%20Hospital!5e0!3m2!1sen!2sus!4v1776149298554!5m2!1sen!2sus" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" title="Max Hospital Dwarka Location"></iframe>
          </div>
          <div class="map-card">
            <h4>
              <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"/><circle cx="12" cy="10" r="3"/></svg>
              Max Hospital, Gurugram (India)
            </h4>
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3507.603000018817!2d77.0747987!3d28.461381599999996!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390d1922738640a3%3A0x717aeb7ba25e979c!2sDr.%20Arun%20Saroha%3A%20Best%20Neurosurgeon%20in%20Gurgaon%2C%20India%20%7C%20Brain%20Tumor%2C%20Stroke%20treatment%2C%20Spine%20Surgeon%20in%20Gurgaon%20-%20Max%20Hospital!5e0!3m2!1sen!2sus!4v1776149342529!5m2!1sen!2sus" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" title="Max Hospital Gurugram Location"></iframe>
          </div>
        </div>
        <div class="contact-form-wrapper">
          <form class="contact-form" action="#" method="POST">
             <input type="hidden" name="area" value="<?php echo $area; ?>">
             <div class="form-group">
                <label for="name">Full Name</label>
                <input type="text" id="name" name="name" required placeholder="Enter your name">
             </div>
             <div class="form-group">
                <label for="phone">Phone Number</label>
                <input type="tel" id="phone" name="phone" required placeholder="Enter your mobile number">
             </div>
             <div class="form-group">
                <label for="message">How can Dr. Saroha help you?</label>
                <textarea id="message" name="message" rows="4" placeholder="Briefly describe your condition (e.g. Back pain, Brain tumor, etc.)"></textarea>
             </div>
             <button type="submit" class="btn btn-primary btn-large">Request Consultation in <?php echo $area; ?></button>
          </form>
        </div>
      </div>
    </div>
  </section>

  <!-- Regional Linking (If provided) -->
  <?php if (isset($locationLinks) && !empty($locationLinks)): ?>
  <section class="area-links-section bg-light">
    <div class="container">
      <div class="section-title text-center">
        <h2>Explore Service Areas in <?php echo $area; ?></h2>
        <p>Providing specialized neurosurgical care across <?php echo $area; ?>.</p>
      </div>
      <div class="area-links-grid">
        <?php foreach ($locationLinks as $linkName => $linkUrl): ?>
          <div class="area-link-item"><a href="<?php echo $linkUrl; ?>"><?php echo $linkName; ?></a></div>
        <?php endforeach; ?>
      </div>
    </div>
  </section>
  <?php endif; ?>

<?php include_once __DIR__ . '/footer.php'; ?>
