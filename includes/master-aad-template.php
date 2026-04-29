<?php
// Master Template for Atlanto-Axial Dislocation Location Pages
// Usage: Define $state and $area before including this file

$page_title = "Best Atlanto-Axial Dislocation (AAD) Surgery in " . $area . " | Dr. Arun Saroha";
$page_description = "Expert surgical treatment for Atlanto-Axial Dislocation (AAD) and C1-C2 instability in " . $area . " by Dr. Arun Saroha. World-class neurosurgical care for " . $area . " patients.";
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
    <link rel="canonical" href="https://www.drarunsaroha.com/atlanto-axial-dislocations/<?php echo strtolower(str_replace(' ', '-', $state)); ?>/<?php echo ($area != $state) ? strtolower(str_replace(' ', '-', $area)) . '/' : ''; ?>">
</head>
<body>

  <!-- Header -->
  <?php include __DIR__ . '/header.php'; ?>

  <!-- Hero Section (homepage style) -->
  <section class="hero" style="background: linear-gradient(90deg, #134085 45%, rgba(19, 64, 133, 0) 100%), url('/assets/images/aad_hero.png') no-repeat right center / contain, radial-gradient(circle at top right, #2a64c5 0%, #0f3d81 80%);">
    <div class="container">
      <div class="hero-content">
        <h1 class="fade-in-up">Best Atlanto-Axial Dislocation Surgery in <br><span class="text-gradient"><?php echo $area; ?></span></h1>
        <p class="hero-tagline fade-in-up">Precise C1-C2 Stabilization for Complex Neck Disorders</p>
        <p class="hero-subtext fade-in-up delay-1">Specialized clinical care for high-cervical instability and dislocations. Dr. Arun Saroha provides life-saving neurosurgical precision for patients in <?php echo $area; ?>.</p>
        <div class="hero-buttons fade-in-up delay-2">
          <a href="#contact" class="btn btn-primary btn-large">Book Consultation</a>
          <a href="#clinical-overview" class="btn btn-white btn-large">Clinical Overview</a>
        </div>
      </div>
    </div>
  </section>

  <!-- Detailed Clinical Content (800+ Words for SEO & E-E-A-T) -->
  <section id="clinical-overview" class="clinical-content" style="padding: 80px 0; background: var(--white);">
    <div class="container" style="max-width: 1000px;">
      <div class="content-block" style="margin-bottom: 50px;">
        <span class="badge">High-Cervical Expertise</span>
        <h2 style="font-size: 2.5rem; margin-bottom: 25px;">Advanced AAD Management in <?php echo $area; ?></h2>
        <p style="font-size: 1.15rem; margin-bottom: 20px;">Atlanto-Axial Dislocation (AAD) is a serious condition involving instability between the first two vertebrae of the spine (C1 and C2), located at the very top of the neck. For patients in <?php echo $area; ?>, this condition can be life-threatening as it occurs near the brainstem and the vital centers that control breathing and heart rate. Dr. Arun Saroha is one of India's few specialized neurosurgeons with the expertise required to safely reduce and fixate these complex high-cervical dislocations.</p>
        <p style="font-size: 1.15rem; margin-bottom: 20px;">Whether the AAD is congenital (present from birth), due to trauma, or resulting from inflammatory conditions like Rheumatoid Arthritis, the primary clinical objective for residents of <?php echo $area; ?> is the decompression of the spinal cord followed by permanent stabilization. Early diagnosis is critical, as progressive compression at this level can lead to quadriparesis (weakness in all four limbs) and respiratory failure.</p>
      </div>

      <div class="content-grid" style="display: grid; grid-template-columns: 1fr 1fr; gap: 60px; margin-bottom: 60px;">
        <div class="clinical-list">
          <h3 style="margin-bottom: 20px; color: var(--primary);">Warning Signs & Symptoms</h3>
          <ul style="list-style: disk; padding-left: 20px; color: var(--text);">
            <li style="margin-bottom: 12px;">Severe pain at the base of the skull and upper neck.</li>
            <li style="margin-bottom: 12px;">Restricted neck movement and a "stiff" or "tilted" head posture.</li>
            <li style="margin-bottom: 12px;">Electric shock sensations in the limbs when moving the head (Lhermitte's sign).</li>
            <li style="margin-bottom: 12px;">Weakness or loss of coordination in hands and feet for <?php echo $area; ?> patients.</li>
            <li style="margin-bottom: 12px;">Difficulty swallowing or changes in voice clarity.</li>
            <li style="margin-bottom: 12px;">Sudden "drop attacks" or episodes of extreme dizziness.</li>
          </ul>
        </div>
        <div class="clinical-list">
          <h3 style="margin-bottom: 20px; color: var(--primary);">Common Causes of C1-C2 Instability</h3>
          <p style="margin-bottom: 15px;">Neurological stability can be compromised by various factors in <?php echo $area; ?>:</p>
          <ul style="list-style: disk; padding-left: 20px; color: var(--text);">
            <li style="margin-bottom: 12px;"><strong>Congenital Anomalies:</strong> Conditions like Os Odontoideum or Basilar Invagination.</li>
            <li style="margin-bottom: 12px;"><strong>Traumatic Injury:</strong> High-impact accidents causing ligamentous tears or fractures.</li>
            <li style="margin-bottom: 12px;"><strong>Rheumatoid Arthritis:</strong> Chronic inflammation weakening the ligaments that hold C1-C2 together.</li>
            <li style="margin-bottom: 12px;"><strong>Infections:</strong> Grisel's syndrome (non-traumatic subluxation due to nearby infection).</li>
          </ul>
        </div>
      </div>

      <div class="detailed-section" style="background: var(--bg-light); padding: 50px; border-radius: 20px; border: 1px solid rgba(0,0,0,0.05);">
        <h3 style="font-size: 2rem; margin-bottom: 25px; color: var(--primary);">AAD Diagnostic Protocol in <?php echo $area; ?></h3>
        <p style="margin-bottom: 20px;">Because of the high risk involved, AAD necessitates the most sophisticated imaging protocols available. For our <?php echo $area; ?> patients, we utilize:</p>
        <div style="display: grid; grid-template-columns: repeat(3, 1fr); gap: 20px;">
          <div style="background: white; padding: 25px; border-radius: 12px; box-shadow: var(--shadow-sm);">
            <h4 style="color: var(--secondary); margin-bottom: 10px;">Dynamic X-Rays</h4>
            <p style="font-size: 0.9rem;">Flexion and extension views to measure the "Atlantodental Interval" (ADI) in real-time.</p>
          </div>
          <div style="background: white; padding: 25px; border-radius: 12px; box-shadow: var(--shadow-sm);">
            <h4 style="color: var(--secondary); margin-bottom: 10px;">Fine-Cut CT</h4>
            <p style="font-size: 0.9rem;">3D bone reconstruction to map the vertebral artery and plan screw trajectory.</p>
          </div>
          <div style="background: white; padding: 25px; border-radius: 12px; box-shadow: var(--shadow-sm);">
            <h4 style="color: var(--secondary); margin-bottom: 10px;">Cervical MRI</h4>
            <p style="font-size: 0.9rem;">To assess spinal cord signal changes (myelopathy) and ligamentous integrity for patients in <?php echo $area; ?>.</p>
          </div>
        </div>
      </div>

      <div class="content-block" style="margin-top: 60px;">
        <h3 style="font-size: 2rem; margin-bottom: 25px; color: var(--primary);">Neurosurgical Reduction & Fixation</h3>
        <p style="margin-bottom: 20px;">The surgical management of AAD in <?php echo $area; ?> has been revolutionized by posterior C1-C2 fixation (Harms or Magerl technique). Dr. Saroha utilizes polyaxial screws and rods to stabilize the joint from the back of the neck. This allows for immediate rigid fixation and has a much higher success rate compared to traditional methods. In complex cases, a transoral decompression may be required to remove the bony "dens" from the front before stabilization.</p>
        <p style="margin-bottom: 20px;">Safety is our absolute priority for every AAD patient from <?php echo $area; ?>. We utilize continuous intraoperative neuromonitoring to track the spinal cord's health during the reduction of the dislocation. This ensures that the realignment of the head and neck is performed without adding any risk to the nerve pathways. Following surgery, most patients experience a dramatic improvement in limb strength and a permanent end to their high-cervical pain.</p>
      </div>
    </div>
  </section>

  <!-- Treatment Catalog (Customized for AAD) -->
  <section id="treatments" class="services-section bg-light" style="padding: 100px 0;">
    <div class="container">
      <div class="section-title text-center">
        <span class="badge">Surgical Portfolio</span>
        <h2>Advanced C1-C2 Procedures for <?php echo $area; ?></h2>
        <p>Specialized neurosurgical interventions for life-critical upper cervical conditions.</p>
      </div>
      
      <div class="services-grid mt-4">
        <!-- 1. C1-C2 Fixation -->
        <div class="service-card rich-card">
          <div class="service-icon">
             <svg width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 2v20"/><path d="M7 6h10"/><path d="M7 12h10"/><path d="M7 18h10"/></svg>
          </div>
          <h3>C1-C2 Posterior Fixation</h3>
          <p>The modern standard for AAD. Using titanium screws and rods to stop abnormal movement and protect the brainstem for patients in <?php echo $area; ?>.</p>
        </div>

        <!-- 2. Occipito-Cervical Fusion -->
        <div class="service-card rich-card">
          <div class="service-icon">
            <svg width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><path d="M12 8v8"/><path d="M8 12h8"/></svg>
          </div>
          <h3>Occipito-Cervical Fusion</h3>
          <p>Extending the stabilization to the base of the skull (occiput) for <?php echo $area; ?> residents with complex cranio-vertebral junction deformities.</p>
        </div>

        <!-- 3. Transoral Decompression -->
        <div class="service-card rich-card">
          <div class="service-icon">
             <svg width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 2L4 7v10l8 5 8-5V7l-8-5z"/><path d="M12 22V12"/></svg>
          </div>
          <h3>Transoral Approach</h3>
          <p>Reaching the spinal compression through the mouth (trans-oral) to remove bony obstructions in severe, irreducible AAD cases for <?php echo $area; ?> patients.</p>
        </div>

        <!-- 4. Irreducible AAD Reduction -->
        <div class="service-card rich-card">
          <div class="service-icon">
             <svg width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 3v18"/><path d="M8 8h8"/><path d="M8 16h8"/></svg>
          </div>
          <h3>Skull Traction & Reduction</h3>
          <p>Utilizing specialized halo-gravity traction to gradually and safely reduce a dislocation before surgical stabilization for residents in <?php echo $area; ?>.</p>
        </div>

        <!-- 5. Safety Protocols -->
        <div class="service-card rich-card">
          <div class="service-icon">
            <svg width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 12h-4l-3 9L9 3l-3 9H2"/></svg>
          </div>
          <h3>Advanced Neuromonitoring</h3>
          <p>Real-time brainstem and spinal cord signal tracking, providing an extra layer of safety for these high-complexity procedures in <?php echo $area; ?>.</p>
        </div>

        <!-- 6. Non-Surgical Screen -->
        <div class="service-card rich-card">
          <div class="service-icon">
            <svg width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 2C6.5 2 2 6.5 2 12s4.5 10 10 10 10-4.5 10-10S17.5 2 12 2Z"/><path d="M8 12h8"/><path d="M12 8v8"/></svg>
          </div>
          <h3>Post-Op Orthosis</h3>
          <p>Detailed management using Philadelphia or Miami-J collars for initial support during the bone fusion process for patients in <?php echo $area; ?>.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- FAQ Section -->
  <section id="faq" class="faq-section" style="padding: 100px 0; background: var(--white);">
    <div class="container">
      <div class="section-title text-center">
        <span class="badge">Patient Education</span>
        <h2>Frequently Asked Questions about AAD in <?php echo $area; ?></h2>
      </div>
      <div class="faq-grid mt-4" style="display: grid; grid-template-columns: 1fr 1fr; gap: 30px;">
        <div class="faq-item" style="background: var(--bg-light); padding: 30px; border-radius: 15px; border: 1px solid rgba(0,0,0,0.03);">
          <h3 style="font-size: 1.2rem; color: var(--primary); margin-bottom: 15px;">What happens if AAD is left untreated?</h3>
          <p>Untreated AAD can lead to progressive quadriparesis (paralysis of all limbs), respiratory failure, and even sudden death during minor neck trauma for patients in <?php echo $area; ?>.</p>
        </div>
        <div class="faq-item" style="background: var(--bg-light); padding: 30px; border-radius: 15px; border: 1px solid rgba(0,0,0,0.03);">
          <h3 style="font-size: 1.2rem; color: var(--primary); margin-bottom: 15px;">Is C1-C2 fusion a high-risk surgery?</h3>
          <p>While technically demanding, the use of intraoperative neuromonitoring and 3D-navigation has made these procedures highly predictable and safe under Dr. Saroha's expertise in <?php echo $area; ?>.</p>
        </div>
        <div class="faq-item" style="background: var(--bg-light); padding: 30px; border-radius: 15px; border: 1px solid rgba(0,0,0,0.03);">
          <h3 style="font-size: 1.2rem; color: var(--primary); margin-bottom: 15px;">Will I be able to turn my head after surgery?</h3>
          <p>About 50% of the neck's rotation comes from the C1-C2 joint. After fusion, you will have a permanent reduction in neck rotation, but you will maintain safe movement and a pain-free life in <?php echo $area; ?>.</p>
        </div>
        <div class="faq-item" style="background: var(--bg-light); padding: 30px; border-radius: 15px; border: 1px solid rgba(0,0,0,0.03);">
          <h3 style="font-size: 1.2rem; color: var(--primary); margin-bottom: 15px;">How long is the hospital stay for AAD surgery?</h3>
          <p>Typically, patients from <?php echo $area; ?> stay in the hospital for 4 to 6 days following an AAD correction to ensure neurological stability and optimal initial healing.</p>
        </div>
        <div class="faq-item" style="background: var(--bg-light); padding: 30px; border-radius: 15px; border: 1px solid rgba(0,0,0,0.03);">
          <h3 style="font-size: 1.2rem; color: var(--primary); margin-bottom: 15px;">Can AAD be treated without surgery?</h3>
          <p>For mild stability issues, a hard collar or halo vest might be used temporarily. However, for true dislocations, surgical fixation is the only definitive way to protect the spinal cord in <?php echo $area; ?>.</p>
        </div>
        <div class="faq-item" style="background: var(--bg-light); padding: 30px; border-radius: 15px; border: 1px solid rgba(0,0,0,0.03);">
          <h3 style="font-size: 1.2rem; color: var(--primary); margin-bottom: 15px;">What is Basilar Invagination?</h3>
          <p>This is a related condition often seen with AAD donde the top of the C2 vertebra moves up into the base of the skull. Dr. Saroha treats both conditions simultaneously for <?php echo $area; ?> residents.</p>
        </div>
        <div class="faq-item" style="background: var(--bg-light); padding: 30px; border-radius: 15px; border: 1px solid rgba(0,0,0,0.03);">
          <h3 style="font-size: 1.2rem; color: var(--primary); margin-bottom: 15px;">When can I resume normal activity?</h3>
          <p>Post- fusion, most patients in <?php echo $area; ?> can return to desk work in 4-6 weeks, though high-impact sports must be avoided permanently to protect the fusion site.</p>
        </div>
        <div class="faq-item" style="background: var(--bg-light); padding: 30px; border-radius: 15px; border: 1px solid rgba(0,0,0,0.03);">
          <h3 style="font-size: 1.2rem; color: var(--primary); margin-bottom: 15px;">Do you offer second opinions for CV junction surgery?</h3>
          <p>Yes. Providing high-authority second opinions for complex Cranio-Vertebral (CV) junction pathologies is a core part of Dr. Saroha's clinical services for patients from <?php echo $area; ?>.</p>
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
        <p>Consult with India's leading CV junction specialist. Fill out the form below and our team will get back to you within 24 hours.</p>
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
                <label for="condition">AAD Eligibility</label>
                <select id="condition" name="condition">
                  <option value="aad" selected>AAD / C1-C2 Instability</option>
                  <option value="neck-pain">High Neck Pain</option>
                  <option value="second-opinion">Second Opinion for <?php echo $area; ?> patients</option>
                  <option value="other">Other</option>
                </select>
              </div>
            </div>
            <div class="form-group">
              <label for="message">Message</label>
              <textarea id="message" name="message" rows="4" placeholder="Briefly describe your neck symptoms in <?php echo $area; ?>"></textarea>
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
