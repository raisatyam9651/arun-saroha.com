<?php
// Master Template for Spinal Tuberculosis Location Pages
// Usage: Define $state and $area before including this file

$page_title = "Best Spinal Tuberculosis (Pott's Disease) Treatment in " . $area . " | Dr. Arun Saroha";
$page_description = "Advanced medical and surgical treatment for Spinal Tuberculosis in " . $area . " by Dr. Arun Saroha. Expert care for Pott's Disease and spinal infections in " . $area . ".";
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
    <link rel="canonical" href="https://www.drarunsaroha.com/spinal-tuberculosis/<?php echo strtolower(str_replace(' ', '-', $state)); ?>/<?php echo ($area != $state) ? strtolower(str_replace(' ', '-', $area)) . '/' : ''; ?>">
</head>
<body>

  <!-- Header -->
  <?php include __DIR__ . '/header.php'; ?>

  <!-- Hero Section (homepage style) -->
  <section class="hero" style="background: linear-gradient(90deg, #134085 45%, rgba(19, 64, 133, 0) 100%), url('/assets/images/tuberculosis_hero.png') no-repeat right center / contain, radial-gradient(circle at top right, #2a64c5 0%, #0f3d81 80%);">
    <div class="container">
      <div class="hero-content">
        <h1 class="fade-in-up">Best Spinal Tuberculosis Treatment in <br><span class="text-gradient"><?php echo $area; ?></span></h1>
        <p class="hero-tagline fade-in-up">Comprehensive Care for Pott's Disease & Spinal Infections</p>
        <p class="hero-subtext fade-in-up delay-1">Combining advanced neurosurgical stabilization with expert clinical management. Dr. Arun Saroha offers life-changing recovery for patients in <?php echo $area; ?>.</p>
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
        <span class="badge">Infectious Disease Care</span>
        <h2 style="font-size: 2.5rem; margin-bottom: 25px;">Managing Spinal Tuberculosis in <?php echo $area; ?></h2>
        <p style="font-size: 1.15rem; margin-bottom: 20px;">Spinal Tuberculosis, also known as Pott's Disease, is a serious form of tuberculosis that affects the vertebral column. For residents of <?php echo $area; ?>, this condition often presents a double challenge: the systemic infection itself and the mechanical destruction of the spine's structural integrity. Dr. Arun Saroha specialized in the complex clinical management required to eliminate the infection while preventing spinal collapse and permanent neurological deficits.</p>
        <p style="font-size: 1.15rem; margin-bottom: 20px;">The infection typically begins in the vertebral body and spreads to the adjacent discs. If left untreated in <?php echo $area; ?>, it can lead to the formation of "cold abscesses" that compress the spinal cord, or the total destruction of bone that results in a sharp angular deformity known as a "gibbus." Our approach in <?php echo $area; ?> integrates long-term medical therapy with precision surgical intervention when necessary.</p>
      </div>

      <div class="content-grid" style="display: grid; grid-template-columns: 1fr 1fr; gap: 60px; margin-bottom: 60px;">
        <div class="clinical-list">
          <h3 style="margin-bottom: 20px; color: var(--primary);">Symptoms of Pott's Disease</h3>
          <ul style="list-style: disk; padding-left: 20px; color: var(--text);">
            <li style="margin-bottom: 12px;">Chronic, localized back pain that is worse at night.</li>
            <li style="margin-bottom: 12px;">Unexplained weight loss and persistent low-grade fever.</li>
            <li style="margin-bottom: 12px;">Profuse night sweats and general fatigue.</li>
            <li style="margin-bottom: 12px;">Visible deformity or "hump" in the middle or upper back for <?php echo $area; ?> patients.</li>
            <li style="margin-bottom: 12px;">Weakness, numbness, or loss of bowel/bladder control (in advanced cases).</li>
            <li style="margin-bottom: 12px;">Stiffness and inability to bend or rotate the spine easily.</li>
          </ul>
        </div>
        <div class="clinical-list">
          <h3 style="margin-bottom: 20px; color: var(--primary);">Diagnostic Journey in <?php echo $area; ?></h3>
          <p style="margin-bottom: 15px;">Accurate identification of the TB strain is essential for successful treatment:</p>
          <ul style="list-style: disk; padding-left: 20px; color: var(--text);">
            <li style="margin-bottom: 12px;"><strong>Tissue Biopsy:</strong> CT-guided aspiration to confirm the Mycobacterium strains.</li>
            <li style="margin-bottom: 12px;"><strong>Advanced Imaging:</strong> MRI to visualize abscesses and the degree of nerve compression.</li>
            <li style="margin-bottom: 12px;"><strong>GeneXpert Test:</strong> Rapid molecular testing to identify drug-resistant TB variants.</li>
            <li style="margin-bottom: 12px;"><strong>Blood Markers:</strong> Monitoring ESR and CRP levels to track treatment progress for <?php echo $area; ?> residents.</li>
          </ul>
        </div>
      </div>

      <div class="detailed-section" style="background: var(--bg-light); padding: 50px; border-radius: 20px; border: 1px solid rgba(0,0,0,0.05);">
        <h3 style="font-size: 2rem; margin-bottom: 25px; color: var(--primary);">Surgical Stabilization & Debridement</h3>
        <p style="margin-bottom: 20px;">While 90% of spinal TB cases in <?php echo $area; ?> can be managed with Antitubercular Therapy (ATT) alone, surgery becomes mandatory if there is significant bone destruction, deformity, or progressive neurological deficit. Dr. Saroha utilizes minimally invasive corridors to achieve two goals:</p>
        <div style="display: grid; grid-template-columns: repeat(2, 1fr); gap: 20px;">
          <div style="background: white; padding: 25px; border-radius: 12px; box-shadow: var(--shadow-sm);">
            <h4 style="color: var(--secondary); margin-bottom: 10px;">Abscess Drainage</h4>
            <p style="font-size: 0.9rem;">Decompressing the spinal cord by removing the infected pus and tubercular debris.</p>
          </div>
          <div style="background: white; padding: 25px; border-radius: 12px; box-shadow: var(--shadow-sm);">
            <h4 style="color: var(--secondary); margin-bottom: 10px;">Internal Fixation</h4>
            <p style="font-size: 0.9rem;">Using titanium screws to support the weak vertebrae while the bone heals for <?php echo $area; ?> patients.</p>
          </div>
        </div>
      </div>

      <div class="content-block" style="margin-top: 60px;">
        <h3 style="font-size: 2rem; margin-bottom: 25px; color: var(--primary);">Long-Term Recovery & Support</h3>
        <p style="margin-bottom: 20px;">The treatment for Spinal TB in <?php echo $area; ?> is a marathon, not a sprint. Patients typically require 9 to 18 months of intensive medical therapy. Dr. Saroha provides a comprehensive support system to monitor medication side effects, ensure compliance, and guide the patient through physical rehabilitation. Our clinical objective is to stop the infection, support the spine, and return you to an active, infection-free life in <?php echo $area; ?>.</p>
        <p style="margin-bottom: 20px;">Advancements in neurosurgical techniques mean that even patients with severe "gibbus" deformities can now undergo corrective surgery to straighten their backs. By combining the latest in chemical therapy with structural engineering, we offer a definitive pathway to health for every family in <?php echo $area; ?> facing this challenging condition.</p>
      </div>
    </div>
  </section>

  <!-- Treatment Catalog (Customized for TB) -->
  <section id="treatments" class="services-section bg-light" style="padding: 100px 0;">
    <div class="container">
      <div class="section-title text-center">
        <span class="badge">Clinical Portfolio</span>
        <h2>TB Management Options for <?php echo $area; ?></h2>
        <p>Expert medical and surgical protocols for the complete elimination of spinal infections.</p>
      </div>
      
      <div class="services-grid mt-4">
        <!-- 1. ATT Management -->
        <div class="service-card rich-card">
          <div class="service-icon">
            <svg width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 2L4 7v10l8 5 8-5V7l-8-5z"/><path d="M12 22V12"/></svg>
          </div>
          <h3>ATT Supervision</h3>
          <p>Expert clinical monitoring of multi-drug Antitubercular Therapy regimens, tailored to the specific TB strain for <?php echo $area; ?> patients.</p>
        </div>

        <!-- 2. Abscess Decompression -->
        <div class="service-card rich-card">
          <div class="service-icon">
            <svg width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><path d="M12 8v8"/><path d="M8 12h8"/></svg>
          </div>
          <h3>Surgical Debridement</h3>
          <p>Minimally invasive removal of tubercular abscesses to relieve spinal cord pressure and stop neurological deterioration for residents in <?php echo $area; ?>.</p>
        </div>

        <!-- 3. Final Fixation -->
        <div class="service-card rich-card">
          <div class="service-icon">
             <svg width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 3v18"/><path d="M8 8h8"/><path d="M8 16h8"/></svg>
          </div>
          <h3>Spinal Stabilization</h3>
          <p>Providing permanent structural support using internal titanium rods and screws for<?php echo $area; ?> patients with severe vertebral collapse.</p>
        </div>

        <!-- 4. Biopsy -->
        <div class="service-card rich-card">
          <div class="service-icon">
            <svg width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 12h-4l-3 9L9 3l-3 9H2"/></svg>
          </div>
          <h3>CT-Guided Biopsy</h3>
          <p>Precision tissue sampling to confirm drug sensitivity and ensure the most effective antibiotic choices for our <?php echo $area; ?> clinical cases.</p>
        </div>

        <!-- 5. Deformity Correction -->
        <div class="service-card rich-card">
          <div class="service-icon">
             <svg width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 2v20"/><path d="M7 6c3 1 9 1 12 0"/><path d="M6 16c3-1 9-1 12 0"/></svg>
          </div>
          <h3>Gibbus Correction</h3>
          <p>Straightening advanced tubercular "humps" using major spinal reconstruction to restore normal posture for patients in <?php echo $area; ?>.</p>
        </div>

        <!-- 6. Rehabilitation -->
        <div class="service-card rich-card">
          <div class="service-icon">
            <svg width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 2C6.5 2 2 6.5 2 12s4.5 10 10 10 10-4.5 10-10S17.5 2 12 2Z"/><path d="M8 12h8"/><path d="M12 8v8"/></svg>
          </div>
          <h3>Infection Recovery</h3>
          <p>Specialized nutritional and physical support programs to help <?php echo $area; ?> residents regain their strength during the long ATT treatment process.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- FAQ Section -->
  <section id="faq" class="faq-section" style="padding: 100px 0; background: var(--white);">
    <div class="container">
      <div class="section-title text-center">
        <span class="badge">Patient Education</span>
        <h2>Frequently Asked Questions about Spinal TB in <?php echo $area; ?></h2>
      </div>
      <div class="faq-grid mt-4" style="display: grid; grid-template-columns: 1fr 1fr; gap: 30px;">
        <div class="faq-item" style="background: var(--bg-light); padding: 30px; border-radius: 15px; border: 1px solid rgba(0,0,0,0.03);">
          <h3 style="font-size: 1.2rem; color: var(--primary); margin-bottom: 15px;">Can Spinal TB be cured without surgery?</h3>
          <p>Yes. If diagnosed early in <?php echo $area; ?>, most cases can be cured with a disciplined course of antitubercular medications (ATT) lasting 9 to 18 months.</p>
        </div>
        <div class="faq-item" style="background: var(--bg-light); padding: 30px; border-radius: 15px; border: 1px solid rgba(0,0,0,0.03);">
          <h3 style="font-size: 1.2rem; color: var(--primary); margin-bottom: 15px;">When is surgery necessary for Pott's Disease?</h3>
          <p>Surgery is required if there is progressive paralysis, a large abscess compressing nerves, or severe bone destruction that makes the spine unstable for patients in <?php echo $area; ?>.</p>
        </div>
        <div class="faq-item" style="background: var(--bg-light); padding: 30px; border-radius: 15px; border: 1px solid rgba(0,0,0,0.03);">
          <h3 style="font-size: 1.2rem; color: var(--primary); margin-bottom: 15px;">Is Spinal TB contagious?</h3>
          <p>Spinal TB occurs when the infection spreads from elsewhere (usually the lungs). While the bone infection itself isn't airborne, the primary lung infection can be contagious to families in <?php echo $area; ?>.</p>
        </div>
        <div class="faq-item" style="background: var(--bg-light); padding: 30px; border-radius: 15px; border: 1px solid rgba(0,0,0,0.03);">
          <h3 style="font-size: 1.2rem; color: var(--primary); margin-bottom: 15px;">Will my back hump go away after treatment?</h3>
          <p>Antibiotics will stop the infection, but they won't correct the "gibbus" deformity. Significant humps require surgical reconstruction to straighten the back for <?php echo $area; ?> residents.</p>
        </div>
        <div class="faq-item" style="background: var(--bg-light); padding: 30px; border-radius: 15px; border: 1px solid rgba(0,0,0,0.03);">
          <h3 style="font-size: 1.2rem; color: var(--primary); margin-bottom: 15px;">What if the TB is drug-resistant (MDR-TB)?</h3>
          <p>We use molecular GeneXpert testing for <?php echo $area; ?> patients to identify resistance early and customize an effective drug regimen using second-line antitubercular agents.</p>
        </div>
        <div class="faq-item" style="background: var(--bg-light); padding: 30px; border-radius: 15px; border: 1px solid rgba(0,0,0,0.03);">
          <h3 style="font-size: 1.2rem; color: var(--primary); margin-bottom: 15px;">Can I walk while undergoing Spinal TB treatment?</h3>
          <p>Unless there is catastrophic instability, we encourage light walking and activity in <?php echo $area; ?>. A back brace (Taylor brace) is often provided for support during the first few months.</p>
        </div>
        <div class="faq-item" style="background: var(--bg-light); padding: 30px; border-radius: 15px; border: 1px solid rgba(0,0,0,0.03);">
          <h3 style="font-size: 1.2rem; color: var(--primary); margin-bottom: 15px;">How long do I need to take medications?</h3>
          <p>Standard protocols for spinal TB in <?php echo $area; ?> typically involve 12 to 18 months of treatment to ensure the infection is completely eradicated from the hard bone tissue.</p>
        </div>
        <div class="faq-item" style="background: var(--bg-light); padding: 30px; border-radius: 15px; border: 1px solid rgba(0,0,0,0.03);">
          <h3 style="font-size: 1.2rem; color: var(--primary); margin-bottom: 15px;">Do you provide consultations for out-of-town patients?</h3>
          <p>Yes. Dr. Saroha regularly provides detailed curative roadmaps for patients from <?php echo $area; ?> and across India facing complex spinal infections and Pott's Disease.</p>
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
        <p>Expert clinical care for spinal infections and Pott's disease. Fill out the form below and our team will get back to you within 24 hours.</p>
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
                  <option value="spinal-tb" selected>Spinal Tuberculosis</option>
                  <option value="spinal-infection">Spine Infection</option>
                  <option value="second-opinion">Second Opinion for <?php echo $area; ?> patients</option>
                  <option value="other">Other</option>
                </select>
              </div>
            </div>
            <div class="form-group">
              <label for="message">Message</label>
              <textarea id="message" name="message" rows="4" placeholder="Briefly describe your symptoms in <?php echo $area; ?>"></textarea>
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
