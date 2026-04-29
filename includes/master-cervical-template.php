<?php
// Master Template for Cervical Spine Surgery Location Pages
// Usage: Define $state and $area before including this file

$page_title = "Best Cervical Spine Surgery in " . $area . " | Dr. Arun Saroha";
$page_description = "Seeking the best cervical spine surgery in " . $area . "? Dr. Arun Saroha is a top-rated neurosurgeon specializing in ACDF, cervical disc replacement, and neck pain relief in " . $area . ".";
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
    <link rel="canonical" href="https://www.drarunsaroha.com/cervical-spine-surgery/<?php echo strtolower(str_replace(' ', '-', $state)); ?>/<?php echo ($area != $state) ? strtolower(str_replace(' ', '-', $area)) . '/' : ''; ?>">
</head>
<body>

  <!-- Header -->
  <?php include __DIR__ . '/header.php'; ?>

  <!-- Hero Section (homepage style) -->
  <section class="hero" style="background: linear-gradient(90deg, #134085 45%, rgba(19, 64, 133, 0) 100%), url('/assets/images/spine_hero.png') no-repeat right center / contain, radial-gradient(circle at top right, #2a64c5 0%, #0f3d81 80%);">
    <div class="container">
      <div class="hero-content">
        <h1 class="fade-in-up">Best Cervical Spine Surgery in <br><span class="text-gradient"><?php echo $area; ?></span></h1>
        <p class="hero-tagline fade-in-up">Restore Your Neck Mobility & Relieve Nerve Pain</p>
        <p class="hero-subtext fade-in-up delay-1">Expert clinical care for cervical disc herniation, stenosis, and myelopathy. Dr. Arun Saroha provides precision surgical solutions for patients in <?php echo $area; ?>.</p>
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
        <span class="badge">Clinical Insight</span>
        <h2 style="font-size: 2.5rem; margin-bottom: 25px;">Advanced Cervical Spine Care in <?php echo $area; ?></h2>
        <p style="font-size: 1.15rem; margin-bottom: 20px;">The cervical spine (neck) is responsible for supporting the head while protecting the most sensitive portion of the spinal cord. For residents of <?php echo $area; ?>, cervical issues often manifest as debilitating neck pain, radiating arm discomfort, or loss of fine motor skills in the hands. Dr. Arun Saroha specializes in the delicate neurosurgical interventions required to treat complex cervical conditions with 100% precision.</p>
        <p style="font-size: 1.15rem; margin-bottom: 20px;">Whether you are suffering from a herniated cervical disc or advanced spinal stenosis, our approach in <?php echo $area; ?> is focused on nerve decompression and structural stability. Many patients wait until neurological deficits (like weakness or gait issues) appear, but early intervention by a specialized spine surgeon can prevent permanent nerve damage and restore a high quality of life.</p>
      </div>

      <div class="content-grid" style="display: grid; grid-template-columns: 1fr 1fr; gap: 60px; margin-bottom: 60px;">
        <div class="clinical-list">
          <h3 style="margin-bottom: 20px; color: var(--primary);">Symptoms of Cervical Distress</h3>
          <ul style="list-style: disk; padding-left: 20px; color: var(--text);">
            <li style="margin-bottom: 12px;">Sharp or dull pain in the neck that intensifies with movement.</li>
            <li style="margin-bottom: 12px;">Radiculopathy: Electric shock-like pain radiating into the shoulders, arms, or fingers.</li>
            <li style="margin-bottom: 12px;">Numbness, "pins and needles," or tingling in the hands or arms.</li>
            <li style="margin-bottom: 12px;">Weakness in the hands, leading to dropping items or difficulty writing.</li>
            <li style="margin-bottom: 12px;">Loss of balance or coordination while walking (Cervical Myelopathy).</li>
            <li style="margin-bottom: 12px;">Chronic headaches originating from the base of the skull.</li>
          </ul>
        </div>
        <div class="clinical-list">
          <h3 style="margin-bottom: 20px; color: var(--primary);">Root Cervical Pathologies</h3>
          <p style="margin-bottom: 15px;">We diagnose and treat the following conditions for patients in <?php echo $area; ?>:</p>
          <ul style="list-style: disk; padding-left: 20px; color: var(--text);">
            <li style="margin-bottom: 12px;"><strong>Cervical Disc Herniation:</strong> When a disc in the neck leaks its inner gel, compressing nearby nerves.</li>
            <li style="margin-bottom: 12px;"><strong>Cervical Spondylosis:</strong> Age-related wear and tear affecting the spinal discs in your neck.</li>
            <li style="margin-bottom: 12px;"><strong>Ossification of Posterior Longitudinal Ligament (OPLL):</strong> A condition where a ligament in the neck becomes calcified.</li>
            <li style="margin-bottom: 12px;"><strong>Cervical Stenosis:</strong> Narrowing of the spinal canal in the neck region.</li>
          </ul>
        </div>
      </div>

      <div class="detailed-section" style="background: var(--bg-light); padding: 50px; border-radius: 20px; border: 1px solid rgba(0,0,0,0.05);">
        <h3 style="font-size: 2rem; margin-bottom: 25px; color: var(--primary);">Precision Diagnostics in <?php echo $area; ?></h3>
        <p style="margin-bottom: 20px;">Because the cervical spine is so close to the brainstem and vital nerve clusters, diagnostic accuracy is paramount. Dr. Saroha utilizes specific clinical mapping for <?php echo $area; ?> patients:</p>
        <div style="display: grid; grid-template-columns: repeat(3, 1fr); gap: 20px;">
          <div style="background: white; padding: 25px; border-radius: 12px; box-shadow: var(--shadow-sm);">
            <h4 style="color: var(--secondary); margin-bottom: 10px;">Cervical MRI</h4>
            <p style="font-size: 0.9rem;">To visualize nerve roots, the spinal cord, and disc pathology in high resolution.</p>
          </div>
          <div style="background: white; padding: 25px; border-radius: 12px; box-shadow: var(--shadow-sm);">
            <h4 style="color: var(--secondary); margin-bottom: 10px;">NCV / EMG</h4>
            <p style="font-size: 0.9rem;">Nerve conduction studies to pinpoint which specific nerve in the neck is blocked.</p>
          </div>
          <div style="background: white; padding: 25px; border-radius: 12px; box-shadow: var(--shadow-sm);">
            <h4 style="color: var(--secondary); margin-bottom: 10px;">Dynamic X-Rays</h4>
            <p style="font-size: 0.9rem;">Flexion and extension views to check for cervical instability or slippage (Spondylolisthesis).</p>
          </div>
        </div>
      </div>

      <div class="content-block" style="margin-top: 60px;">
        <h3 style="font-size: 2rem; margin-bottom: 25px; color: var(--primary);">Expert Neck Surgery Recovery</h3>
        <p style="margin-bottom: 20px;">For many patients in <?php echo $area; ?>, the word "neck surgery" sounds intimidating. However, modern neurosurgery has made these procedures some of the safest and most successful in medicine. By utilizing intraoperative neuromonitoring, Dr. Saroha tracks nerve signals in real-time during surgery, ensuring that the spinal cord remains protected at all times.</p>
        <p style="margin-bottom: 20px;">Post-operative care for our <?php echo $area; ?> patients is streamlined for rapid mobility. Most ACDF or Disc Replacement patients can swallow and speak normally immediately after surgery and are discharged within 24–48 hours. Our goal is to resolve the neurological threat so you can return to your life in <?php echo $area; ?> with full confidence and freedom of movement.</p>
      </div>
    </div>
  </section>

  <!-- Treatment Catalog (Customized for Cervical) -->
  <section id="treatments" class="services-section bg-light" style="padding: 100px 0;">
    <div class="container">
      <div class="section-title text-center">
        <span class="badge">Surgical Portfolio</span>
        <h2>Advanced Cervical Procedures for <?php echo $area; ?></h2>
        <p>Specialized neurosurgical interventions tailored for complex neck and spinal cord pathologies.</p>
      </div>
      
      <div class="services-grid mt-4">
        <!-- 1. ACDF -->
        <div class="service-card rich-card">
          <div class="service-icon">
             <svg width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 2L4 7v10l8 5 8-5V7l-8-5z"/><path d="M12 22V12"/><path d="M20 7l-8 5-8-5"/></svg>
          </div>
          <h3>ACDF Surgery</h3>
          <p>The gold standard for neck disc herniation. Replacing a damaged disc with a bone graft or implant through a small incision in the front of the neck for patients in <?php echo $area; ?>.</p>
        </div>

        <!-- 2. Disc Replacement -->
        <div class="service-card rich-card">
          <div class="service-icon">
            <svg width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><path d="M12 8v8"/><path d="M8 12h8"/></svg>
          </div>
          <h3>Cervical Disc Replacement</h3>
          <p>A motion-preserving alternative to fusion. We use artificial discs to maintain natural neck rotation and bending for active individuals in <?php echo $area; ?>.</p>
        </div>

        <!-- 3. Laminoplasty -->
        <div class="service-card rich-card">
          <div class="service-icon">
             <svg width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M3 12h18"/><path d="M3 6h18"/><path d="M3 18h18"/></svg>
          </div>
          <h3>Cervical Laminoplasty</h3>
          <p>Created more space for the spinal cord without removing bone entirely. Ideal for patients in <?php echo $area; ?> with multi-level spinal stenosis (OPLL).</p>
        </div>

        <!-- 4. Foraminotomy -->
        <div class="service-card rich-card">
          <div class="service-icon">
            <svg width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="4" y="4" width="16" height="16" rx="2"/><path d="M9 9l6 6"/><path d="M15 9l-6 6"/></svg>
          </div>
          <h3>Posterior Foraminotomy</h3>
          <p>Relieving pressure on a specific nerve root through the back of the neck. A targeted, minimally invasive way to stop arm pain for <?php echo $area; ?> patients.</p>
        </div>

        <!-- 5. Cervical Fusion -->
        <div class="service-card rich-card">
          <div class="service-icon">
            <svg width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 3v18"/><path d="M8 8h8"/><path d="M8 16h8"/></svg>
          </div>
          <h3>Cervical Fusion Surgery</h3>
          <p>Connecting two or more vertebrae to provide permanent stability for neck deformities or advanced instability in <?php echo $area; ?> residents.</p>
        </div>

        <!-- 6. Myelopathy Care -->
        <div class="service-card rich-card">
          <div class="service-icon">
            <svg width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 2C6.5 2 2 6.5 2 12s4.5 10 10 10 10-4.5 10-10S17.5 2 12 2Z"/><path d="M8 12h8"/><path d="M12 8v8"/></svg>
          </div>
          <h3>Non-Surgical Rehab</h3>
          <p>Evidence-based neurological rehabilitation and clinical pain management for early-stage cervical conditions for patients in <?php echo $area; ?>.</p>
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
        <p>If you are travelling to Delhi from <?php echo $area; ?> for your cervical surgery, we provide a dedicated concierge service to manage your medical journey from start to finish.</p>
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

  <!-- FAQ Section -->
  <section id="faq" class="faq-section" style="padding: 100px 0; background: var(--white);">
    <div class="container">
      <div class="section-title text-center">
        <span class="badge">Patient Education</span>
        <h2>Frequently Asked Questions about Neck Surgery in <?php echo $area; ?></h2>
      </div>
      <div class="faq-grid mt-4" style="display: grid; grid-template-columns: 1fr 1fr; gap: 30px;">
        <div class="faq-item" style="background: var(--bg-light); padding: 30px; border-radius: 15px; border: 1px solid rgba(0,0,0,0.03);">
          <h3 style="font-size: 1.2rem; color: var(--primary); margin-bottom: 15px;">What are the common signs of cervical spine issues?</h3>
          <p>The most common signs are chronic neck pain, stiffness, and pain that "shrouds" into your shoulders or down your arms. If you drop things frequently, it may indicate a serious cervical nerve issue in <?php echo $area; ?>.</p>
        </div>
        <div class="faq-item" style="background: var(--bg-light); padding: 30px; border-radius: 15px; border: 1px solid rgba(0,0,0,0.03);">
          <h3 style="font-size: 1.2rem; color: var(--primary); margin-bottom: 15px;">What is ACDF surgery?</h3>
          <p>ACDF stands for Anterior Cervical Discectomy and Fusion. It involves reaching the spine through the front of the neck to remove a herniated disc and fuse the vertebrae for stability.</p>
        </div>
        <div class="faq-item" style="background: var(--bg-light); padding: 30px; border-radius: 15px; border: 1px solid rgba(0,0,0,0.03);">
          <h3 style="font-size: 1.2rem; color: var(--primary); margin-bottom: 15px;">Can I choose disc replacement over fusion?</h3>
          <p>In many cases, yes. Cervical disc replacement is ideal for younger patients in <?php echo $area; ?> who want to maintain full neck mobility. Dr. Saroha will determine candidacy based on your bone quality.</p>
        </div>
        <div class="faq-item" style="background: var(--bg-light); padding: 30px; border-radius: 15px; border: 1px solid rgba(0,0,0,0.03);">
          <h3 style="font-size: 1.2rem; color: var(--primary); margin-bottom: 15px;">How long is the hospital stay for neck surgery?</h3>
          <p>Most of our cervical patients from <?php echo $area; ?> are able to go home within 24 to 48 hours after their procedure, depending on the complexity of the decompression.</p>
        </div>
        <div class="faq-item" style="background: var(--bg-light); padding: 30px; border-radius: 15px; border: 1px solid rgba(0,0,0,0.03);">
          <h3 style="font-size: 1.2rem; color: var(--primary); margin-bottom: 15px;">Will I need to wear a neck collar after surgery?</h3>
          <p>This depends on the procedure. ACDF patients may wear a soft collar for 2-4 weeks to ensure proper fusion, while disc replacement patients often don't need significant immobilization.</p>
        </div>
        <div class="faq-item" style="background: var(--bg-light); padding: 30px; border-radius: 15px; border: 1px solid rgba(0,0,0,0.03);">
          <h3 style="font-size: 1.2rem; color: var(--primary); margin-bottom: 15px;">Is there a risk of losing my voice after ACDF?</h3>
          <p>Temporary hoarseness can occur due to the retractors used during surgery, but permanent voice change is extremely rare (under 1%) with Dr. Saroha's precise surgical technique.</p>
        </div>
        <div class="faq-item" style="background: var(--bg-light); padding: 30px; border-radius: 15px; border: 1px solid rgba(0,0,0,0.03);">
          <h3 style="font-size: 1.2rem; color: var(--primary); margin-bottom: 15px;">When can I drive after cervical surgery?</h3>
          <p>Most patients in <?php echo $area; ?> can resume driving once they have full range of neck motion and are no longer taking narcotic pain medications, typically around 2-4 weeks post-op.</p>
        </div>
        <div class="faq-item" style="background: var(--bg-light); padding: 30px; border-radius: 15px; border: 1px solid rgba(0,0,0,0.03);">
          <h3 style="font-size: 1.2rem; color: var(--primary); margin-bottom: 15px;">Do you provide second opinions for neck surgery?</h3>
          <p>Absolutely. We provide high-authority second opinions for cervical myelopathy and radiculopathy to ensure Patients from <?php echo $area; ?> receive the most modern clinical care.</p>
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
        <p>Expert cervical spine care with India's leading neurosurgeon. Fill out the form below and our team will get back to you within 24 hours.</p>
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
                  <option value="cervical-surgery" selected>Cervical Spine Surgery</option>
                  <option value="neck-pain">Neck Pain Treatment</option>
                  <option value="disc-replacement">Disc Replacement</option>
                  <option value="second-opinion">Second Opinion for <?php echo $area; ?> patients</option>
                  <option value="other">Other</option>
                </select>
              </div>
            </div>
            <div class="form-group">
              <label for="message">Message</label>
              <textarea id="message" name="message" rows="4" placeholder="Briefly describe your neck condition or symptoms in <?php echo $area; ?>"></textarea>
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
