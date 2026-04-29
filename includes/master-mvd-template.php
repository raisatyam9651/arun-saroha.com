<?php
// Master Template for Microvascular Decompression (MVD) Location Pages
// Usage: Define $state and $area before including this file

$page_title = "Best Microvascular Decompression (MVD) Surgery in " . $area . " | Dr. Arun Saroha";
$page_description = "Specialized MVD surgery for Trigeminal Neuralgia and Hemifacial Spasm in " . $area . " by Dr. Arun Saroha. Expert facial pain relief in " . $area . ".";
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
    <link rel="canonical" href="https://www.drarunsaroha.com/microvascular-decompression/<?php echo strtolower(str_replace(' ', '-', $state)); ?>/<?php echo ($area != $state) ? strtolower(str_replace(' ', '-', $area)) . '/' : ''; ?>">
</head>
<body>

  <!-- Header -->
  <?php include __DIR__ . '/header.php'; ?>

  <!-- Hero Section -->
  <section class="hero" style="background: linear-gradient(90deg, #134085 45%, rgba(19, 64, 133, 0) 100%), url('/assets/images/mvd_hero.png') no-repeat right center / contain, radial-gradient(circle at top right, #2a64c5 0%, #0f3d81 80%);">
    <div class="container">
      <div class="hero-content">
        <h1 class="fade-in-up">Best MVD Surgery in <br><span class="text-gradient"><?php echo $area; ?></span></h1>
        <p class="hero-tagline fade-in-up">Definitive Relief for Trigeminal Neuralgia & Facial Pain</p>
        <p class="hero-subtext fade-in-up delay-1">State-of-the-art Microvascular Decompression to stop excruciating facial shocks and spasms. Dr. Arun Saroha provides a permanent cure for patients in <?php echo $area; ?>.</p>
        <div class="hero-buttons fade-in-up delay-2">
          <a href="#contact" class="btn btn-primary btn-large">Book Consultation</a>
          <a href="#clinical-overview" class="btn btn-white btn-large">Clinical Overview</a>
        </div>
      </div>
    </div>
  </section>

  <!-- Detailed Clinical Content -->
  <section id="clinical-overview" class="clinical-content" style="padding: 80px 0; background: var(--white);">
    <div class="container" style="max-width: 1000px;">
      <div class="content-block" style="margin-bottom: 50px;">
        <span class="badge">Functional Neurosurgery</span>
        <h2 style="font-size: 2.5rem; margin-bottom: 25px;">Curing Facial Pain & Spasms in <?php echo $area; ?></h2>
        <p style="font-size: 1.15rem; margin-bottom: 20px;">Trigeminal Neuralgia is often described as the most excruciating pain known to humanity—a sudden, electric-shock-like sensation in the face triggered by simple acts like washing, eating, or even a breeze. For residents of <?php echo $area; ?>, this condition is usually caused by a normal blood vessel pressing against the trigeminal nerve at the base of the brain. Dr. Arun Saroha specializes in Microvascular Decompression (MVD), a "Gold Standard" surgical procedure that addresses the root cause of the pain rather than just masking symptoms.</p>
        <p style="font-size: 1.15rem; margin-bottom: 20px;">By performing a precise "keyhole" surgery behind the ear, Dr. Saroha identifies the offending vessel and gently moves it away from the nerve, placing a tiny medical-grade Teflon cushion in between. This immediately stops the abnormal electrical firing and provides permanent relief for the vast majority of our <?php echo $area; ?> patients, allowing them to lead a life free from heavy medications and fear.</p>
      </div>

      <div class="content-grid" style="display: grid; grid-template-columns: 1fr 1fr; gap: 60px; margin-bottom: 60px;">
        <div class="clinical-list">
          <h3 style="margin-bottom: 20px; color: var(--primary);">Who Needs MVD in <?php echo $area; ?>?</h3>
          <p style="margin-bottom: 15px;">We provide curative solutions for several neuro-vascular compression syndromes:</p>
          <ul style="list-style: disk; padding-left: 20px; color: var(--text);">
            <li style="margin-bottom: 12px;"><strong>Trigeminal Neuralgia:</strong> Intense, stabbing facial shocks.</li>
            <li style="margin-bottom: 12px;"><strong>Hemifacial Spasm:</strong> Involuntary twitching of one side of the face.</li>
            <li style="margin-bottom: 12px;"><strong>Glossopharyngeal Neuralgia:</strong> Severe pain in the throat or ear.</li>
            <li style="margin-bottom: 12px;"><strong>Vagus Nerve Compression:</strong> Associated with autonomic issues for some <?php echo $area; ?> patients.</li>
          </ul>
        </div>
        <div class="clinical-list">
          <h3 style="margin-bottom: 20px; color: var(--primary);">Signs for Clinical Review</h3>
          <ul style="list-style: disk; padding-left: 20px; color: var(--text);">
            <li style="margin-bottom: 12px;">Medications like Carbamazepine (Tegretol) are no longer effective.</li>
            <li style="margin-bottom: 12px;">Severe side effects (dizziness, fog) from anti-seizure drugs.</li>
            <li style="margin-bottom: 12px;">Pain attacks that have become more frequent or prolonged for <?php echo $area; ?> residents.</li>
            <li style="margin-bottom: 12px;">Involuntary closing of the eye due to facial muscle contractions.</li>
            <li style="margin-bottom: 12px;">Fear of basic daily activities due to possible pain triggers.</li>
          </ul>
        </div>
      </div>

      <div class="detailed-section" style="background: var(--bg-light); padding: 50px; border-radius: 20px; border: 1px solid rgba(0,0,0,0.05);">
        <h3 style="font-size: 2rem; margin-bottom: 25px; color: var(--primary);">The MVD Safety Protocol in <?php echo $area; ?></h3>
        <p style="margin-bottom: 20px;">MVD is a highly delicate procedure performed near the brainstem. Dr. Saroha leverages the most advanced surgical theatre technology in <?php echo $area; ?> to ensure 100% safety:</p>
        <div style="display: grid; grid-template-columns: repeat(3, 1fr); gap: 20px;">
          <div style="background: white; padding: 25px; border-radius: 12px; box-shadow: var(--shadow-sm);">
            <h4 style="color: var(--secondary); margin-bottom: 10px;">Micro-Navigation</h4>
            <p style="font-size: 0.9rem;">Using high-magnification microscopes to visualize deep cranial nerves with millimetre precision.</p>
          </div>
          <div style="background: white; padding: 25px; border-radius: 12px; box-shadow: var(--shadow-sm);">
            <h4 style="color: var(--secondary); margin-bottom: 10px;">BSER Monitoring</h4>
            <p style="font-size: 0.9rem;">Real-time hearing and nerve signal monitoring to protect vital functions for <?php echo $area; ?> patients.</p>
          </div>
          <div style="background: white; padding: 25px; border-radius: 12px; box-shadow: var(--shadow-sm);">
            <h4 style="color: var(--secondary); margin-bottom: 10px;">Cushioning Tech</h4>
            <p style="font-size: 0.9rem;">Utilizing inert Teflon felt that provides a permanent, biocompatible barrier against the offending artery.</p>
          </div>
        </div>
      </div>

      <div class="content-block" style="margin-top: 60px;">
        <h3 style="font-size: 2rem; margin-bottom: 25px; color: var(--primary);">Recovery & Life After MVD</h3>
        <p style="margin-bottom: 20px;">Most patients in <?php echo $area; ?> wake up from MVD surgery and realize the facial pain is gone immediately. The "relief" is often described as miraculous. Unlike other procedures (like Gamma Knife or Rhizotomy) which involve damaging the nerve to stop pain, MVD preserves the nerve's health and sensation. This means there is no "numbness" or "loss of feeling" in the face following the surgery.</p>
        <p style="margin-bottom: 20px;">Hospital recovery is typically 3-4 days. Because the incision is hidden behind the hairline in <?php echo $area; ?>, there is minimal visible scarring. Dr. Saroha's precise approach ensures a fast return to a normal diet and life. If you or a loved one in <?php echo $area; ?> are suffering from "the suicide disease," know that a definitive, surgical cure exists and is accessible today.</p>
      </div>
    </div>
  </section>

  <!-- Treatment Catalog -->
  <section id="treatments" class="services-section bg-light" style="padding: 100px 0;">
    <div class="container">
      <div class="section-title text-center">
        <span class="badge">Surgical Portfolio</span>
        <h2>MVD & Pain Options for <?php echo $area; ?></h2>
        <p>Comprehensive solutions for cranial nerve compression and chronic facial pathology.</p>
      </div>
      
      <div class="services-grid mt-4">
        <!-- 1. Trigeminal MVD -->
        <div class="service-card rich-card">
          <div class="service-icon">
            <svg width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><path d="M12 8v8"/><path d="M8 12h8"/></svg>
          </div>
          <h3>Trigeminal MVD</h3>
          <p>The gold standard cure for Trigeminal Neuralgia. Permanently separating arteries from the 5th cranial nerve for patients in <?php echo $area; ?>.</p>
        </div>

        <!-- 2. Hemifacial MVD -->
        <div class="service-card rich-card">
          <div class="service-icon">
            <svg width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M3 3h18v18H3z"/><path d="M7 7l10 10"/><path d="M17 7L7 17"/></svg>
          </div>
          <h3>Hemifacial Decompression</h3>
          <p>Stopping involuntary facial twitching by decompressing the facial nerve via a specialized keyhole approach for residents in <?php echo $area; ?>.</p>
        </div>

        <!-- 3. Keyhole Approach -->
        <div class="service-card rich-card">
          <div class="service-icon">
             <svg width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 2v20"/><path d="M7 7c3-1 7-1 10 0"/><path d="M7 17c3 1 7 1 10 0"/></svg>
          </div>
          <h3>Retrosigmoid Corridor</h3>
          <p>Minimally invasive access behind the ear, ensuring minimal brain retraction and faster recovery for our <?php echo $area; ?> surgical patients.</p>
        </div>

        <!-- 4. Glossopharyngeal MVD -->
        <div class="service-card rich-card">
          <div class="service-icon">
            <svg width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 12h-4l-3 9L9 3l-3 9H2"/></svg>
          </div>
          <h3>Throat Pain Relief</h3>
          <p>Specialized decompression for rare throat and ear lightning pain syndromes, providing instant relief for <?php echo $area; ?> residents.</p>
        </div>

        <!-- 5. Failure Revision -->
        <div class="service-card rich-card">
          <div class="service-icon">
            <svg width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 2C6.5 2 2 6.5 2 12s4.5 10 10 10 10-4.5 10-10S17.5 2 12 2Z"/><path d="M12 16h.01"/><path d="M12 8v4"/></svg>
          </div>
          <h3>Revision MVD</h3>
          <p>Expert re-evaluation and surgery for cases that failed previously or recurred, a high-authority service Dr. Saroha offers in <?php echo $area; ?>.</p>
        </div>

        <!-- 6. Non-Surgical Screen -->
        <div class="service-card rich-card">
          <div class="service-icon">
            <svg width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 2v10l8 5"/><path d="M12 2C6.5 2 2 6.5 2 12s4.5 10 10 10 10-4.5 10-10S17.5 2 12 2Z"/></svg>
          </div>
          <h3>Medical Management</h3>
          <p>Expert pharmacological optimization for patients in <?php echo $area; ?> who are not yet candidates for surgery but require severe pain control.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- FAQ Section -->
  <section id="faq" class="faq-section" style="padding: 100px 0; background: var(--white);">
    <div class="container">
      <div class="section-title text-center">
        <span class="badge">Patient Education</span>
        <h2>Frequently Asked Questions about MVD in <?php echo $area; ?></h2>
      </div>
      <div class="faq-grid mt-4" style="display: grid; grid-template-columns: 1fr 1fr; gap: 30px;">
        <div class="faq-item" style="background: var(--bg-light); padding: 30px; border-radius: 15px; border: 1px solid rgba(0,0,0,0.03);">
          <h3 style="font-size: 1.2rem; color: var(--primary); margin-bottom: 15px;">How successful is MVD surgery?</h3>
          <p>MVD has an initial success rate of over 90% for Trigeminal Neuralgia. Most patients in <?php echo $area; ?> experience complete, long-term relief from pain following the procedure.</p>
        </div>
        <div class="faq-item" style="background: var(--bg-light); padding: 30px; border-radius: 15px; border: 1px solid rgba(0,0,0,0.03);">
          <h3 style="font-size: 1.2rem; color: var(--primary); margin-bottom: 15px;">Does MVD cause facial numbness?</h3>
          <p>No. Unlike radiofrequency rhizotomy or Gamma Knife, MVD does not damage the nerve; it simply removes the pressure. Facial sensation remains normal for <?php echo $area; ?> residents post-op.</p>
        </div>
        <div class="faq-item" style="background: var(--bg-light); padding: 30px; border-radius: 15px; border: 1px solid rgba(0,0,0,0.03);">
          <h3 style="font-size: 1.2rem; color: var(--primary); margin-bottom: 15px;">Is MVD brain surgery?</h3>
          <p>Technically yes, though we do not cut into the brain tissue itself. We work in the "spaces" around the brain to reach the nerves at the brainstem for our <?php echo $area; ?> patients.</p>
        </div>
        <div class="faq-item" style="background: var(--bg-light); padding: 30px; border-radius: 15px; border: 1px solid rgba(0,0,0,0.03);">
          <h3 style="font-size: 1.2rem; color: var(--primary); margin-bottom: 15px;">Can elderly patients undergo MVD?</h3>
          <p>Yes. Many of our patients in <?php echo $area; ?> are in their 70s or 80s. As long as overall health is stable, MVD is a safe and effective option for elderly patients suffering from facial pain.</p>
        </div>
        <div class="faq-item" style="background: var(--bg-light); padding: 30px; border-radius: 15px; border: 1px solid rgba(0,0,0,0.03);">
          <h3 style="font-size: 1.2rem; color: var(--primary); margin-bottom: 15px;">Will I need to take medications after surgery?</h3>
          <p>Most patients in <?php echo $area; ?> can gradually taper off their pain medications within a few weeks of surgery and eventually live completely medicine-free.</p>
        </div>
        <div class="faq-item" style="background: var(--bg-light); padding: 30px; border-radius: 15px; border: 1px solid rgba(0,0,0,0.03);">
          <h3 style="font-size: 1.2rem; color: var(--primary); margin-bottom: 15px;">What if my MRI appears normal?</h3>
          <p>Nerve-vessel contact is sometimes too small to see on standard MRI scans. Dr. Saroha uses specialized sequences (FIESTA/CISS) in <?php echo $area; ?> to identify compression that others might miss.</p>
        </div>
        <div class="faq-item" style="background: var(--bg-light); padding: 30px; border-radius: 15px; border: 1px solid rgba(0,0,0,0.03);">
          <h3 style="font-size: 1.2rem; color: var(--primary); margin-bottom: 15px;">How long is the recovery?</h3>
          <p>Typical hospital stay is 3 days. Most patients in <?php echo $area; ?> can return to normal light activities within 2 weeks and full physical activity in 4-6 weeks.</p>
        </div>
        <div class="faq-item" style="background: var(--bg-light); padding: 30px; border-radius: 15px; border: 1px solid rgba(0,0,0,0.03);">
          <h3 style="font-size: 1.2rem; color: var(--primary); margin-bottom: 15px;">Do you provide consultations for recurring pain?</h3>
          <p>Yes. Providing relief for patients from <?php echo $area; ?> who had unsatisfactory results elsewhere or whose pain has returned is a core part of our high-complexity neurosurgical service.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Contact / Booking Section -->
  <section id="contact" class="contact-section" style="padding: 100px 0; background: var(--bg-light);">
    <div class="container">
      <div class="section-title text-center">
        <span class="badge">Get In Touch</span>
        <h2>Book a Consult for Facial Pain in <?php echo $area; ?></h2>
        <p>Consult with India's lead MVD surgical specialist. Fill out the form below and our team will get back to you within 24 hours.</p>
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
                <label for="condition">Facial Condition</label>
                <select id="condition" name="condition">
                  <option value="trigeminal" selected>Trigeminal Neuralgia</option>
                  <option value="spasm">Hemifacial Spasm</option>
                  <option value="second-opinion">Second Opinion for <?php echo $area; ?> patients</option>
                  <option value="other">Other Facial Pain</option>
                </select>
              </div>
            </div>
            <div class="form-group">
              <label for="message">Message</label>
              <textarea id="message" name="message" rows="4" placeholder="Briefly describe your facial pain or twitching in <?php echo $area; ?>"></textarea>
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
