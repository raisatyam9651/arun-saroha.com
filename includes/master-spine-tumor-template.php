<?php
// Master Template for Endoscopic Spine Tumor Location Pages
// Usage: Define $state and $area before including this file

$page_title = "Best Endoscopic Spine Tumor Surgery in " . $area . " | Dr. Arun Saroha";
$page_description = "Advanced minimally invasive and endoscopic spine tumor removal in " . $area . " by Dr. Arun Saroha. Expert care for spinal cord tumors and intradural lesions in " . $area . ".";
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
    <link rel="canonical" href="https://www.drarunsaroha.com/endoscopic-spine-tumor/<?php echo strtolower(str_replace(' ', '-', $state)); ?>/<?php echo ($area != $state) ? strtolower(str_replace(' ', '-', $area)) . '/' : ''; ?>">
</head>
<body>

  <!-- Header -->
  <?php include __DIR__ . '/header.php'; ?>

  <!-- Hero Section (homepage style) -->
  <section class="hero" style="background: linear-gradient(90deg, #134085 45%, rgba(19, 64, 133, 0) 100%), url('/assets/images/spine_tumor_hero.png') no-repeat right center / contain, radial-gradient(circle at top right, #2a64c5 0%, #0f3d81 80%);">
    <div class="container">
      <div class="hero-content">
        <h1 class="fade-in-up">Best Endoscopic Spine Tumor Surgery in <br><span class="text-gradient"><?php echo $area; ?></span></h1>
        <p class="hero-tagline fade-in-up">Precision Tumor Removal with Minimal Tissue Trauma</p>
        <p class="hero-subtext fade-in-up delay-1">Utilizing high-definition endoscopic corridors to achieve complete tumor resection. Dr. Arun Saroha brings world-class oncological neurosurgery to patients in <?php echo $area; ?>.</p>
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
        <span class="badge">Surgical Excellence</span>
        <h2 style="font-size: 2.5rem; margin-bottom: 25px;">Minimally Invasive Spine Tumor Care in <?php echo $area; ?></h2>
        <p style="font-size: 1.15rem; margin-bottom: 20px;">Spinal tumors, whether primary or metastatic, require a delicate balance between aggressive resection and the preservation of neurological function. For patients in <?php echo $area; ?>, the traditional "open" approach for spine tumors often involved large incisions and significant muscle disruption. Dr. Arun Saroha utilizes state-of-the-art endoscopic techniques to access the spinal canal through corridors as small as 10mm, providing a direct view of the tumor with unmatched clarity.</p>
        <p style="font-size: 1.15rem; margin-bottom: 20px;">By employing high-definition endoscopes and specialized micro-instruments, we can meticulously separate tumor tissue from the delicate spinal cord and nerve roots. For residents of <?php echo $area; ?>, this means a shorter hospital stay, less post-operative pain, and a much faster transition to adjuvant therapies like radiation or chemotherapy, should they be required. Our objective is 100% tumor removal with 100% nerve preservation.</p>
      </div>

      <div class="content-grid" style="display: grid; grid-template-columns: 1fr 1fr; gap: 60px; margin-bottom: 60px;">
        <div class="clinical-list">
          <h3 style="margin-bottom: 20px; color: var(--primary);">Warning Signs & Symptoms</h3>
          <ul style="list-style: disk; padding-left: 20px; color: var(--text);">
            <li style="margin-bottom: 12px;">Persistent, non-mechanical back pain that is worse when lying down.</li>
            <li style="margin-bottom: 12px;">Progressive weakness in legs or arms for <?php echo $area; ?> patients.</li>
            <li style="margin-bottom: 12px;">Loss of sensation or "numbness" in a specific nerve distribution.</li>
            <li style="margin-bottom: 12px;">Difficulties with balance or coordination while walking.</li>
            <li style="margin-bottom: 12px;">Unexplained weight loss or history of primary cancer elsewhere.</li>
            <li style="margin-bottom: 12px;">Sudden changes in bowel or bladder function (Critical Symptom).</li>
          </ul>
        </div>
        <div class="clinical-list">
          <h3 style="margin-bottom: 20px; color: var(--primary);">Tumor Types Treated Endoscopically</h3>
          <p style="margin-bottom: 15px;">We provide specialized care for various spinal lesions for <?php echo $area; ?> residents:</p>
          <ul style="list-style: disk; padding-left: 20px; color: var(--text);">
            <li style="margin-bottom: 12px;"><strong>Schwannomas & Neurofibromas:</strong> Benign tumors originating from nerve sheaths.</li>
            <li style="margin-bottom: 12px;"><strong>Meningiomas:</strong> Tumors arising from the protective lining (dura) of the spinal cord.</li>
            <li style="margin-bottom: 12px;"><strong>Ependymomas:</strong> Tumors occurring inside the spinal cord (intramedullary).</li>
            <li style="margin-bottom: 12px;"><strong>Metastatic Lesions:</strong> Cancers that have spread to the spine from other organs.</li>
          </ul>
        </div>
      </div>

      <div class="detailed-section" style="background: var(--bg-light); padding: 50px; border-radius: 20px; border: 1px solid rgba(0,0,0,0.05);">
        <h3 style="font-size: 2rem; margin-bottom: 25px; color: var(--primary);">Precision Oncology Tech in <?php echo $area; ?></h3>
        <p style="margin-bottom: 20px;">Successful spine tumor surgery relies on the integration of multiple advanced technologies. For our patients in <?php echo $area; ?>, we utilize:</p>
        <div style="display: grid; grid-template-columns: repeat(3, 1fr); gap: 20px;">
          <div style="background: white; padding: 25px; border-radius: 12px; box-shadow: var(--shadow-sm);">
            <h4 style="color: var(--secondary); margin-bottom: 10px;">Endoscopic UHD</h4>
            <p style="font-size: 0.9rem;">4K visualization provide 10x magnification of nerve-tumor interfaces.</p>
          </div>
          <div style="background: white; padding: 25px; border-radius: 12px; box-shadow: var(--shadow-sm);">
            <h4 style="color: var(--secondary); margin-bottom: 10px;">Neuromonitoring</h4>
            <p style="font-size: 0.9rem;">Real-time electrical tracking of spinal cord health during every millimetre of tumor removal.</p>
          </div>
          <div style="background: white; padding: 25px; border-radius: 12px; box-shadow: var(--shadow-sm);">
            <h4 style="color: var(--secondary); margin-bottom: 10px;">Ultrasonic Aspirator</h4>
            <p style="font-size: 0.9rem;">Breaking down tumor tissue with sonic waves while sparing blood vessels and nerves for <?php echo $area; ?> patients.</p>
          </div>
        </div>
      </div>

      <div class="content-block" style="margin-top: 60px;">
        <h3 style="font-size: 2rem; margin-bottom: 25px; color: var(--primary);">Clinical Outcomes & Recovery</h3>
        <p style="margin-bottom: 20px;">The primary benefit of endoscopic tumor resection for families in <?php echo $area; ?> is the preservation of spinal stability. Traditional tumor surgery often required extensive bone removal (laminectomy) which could lead to later spinal collapse or the need for fusion. Our endoscopic approach preserves the major weight-bearing structures of your spine, meaning no rods or screws are typically necessary.</p>
        <p style="margin-bottom: 20px;">Recovery is streamlined; most patients in <?php echo $area; ?> are out of bed on the same day and can be discharged within 48–72 hours. Because the incision is tiny, the risk of infection is significantly lower, and the wound heals quickly. Dr. Saroha's multidisciplinary approach ensures that your surgical recovery is perfectly coordinated with any further oncological care needed in <?php echo $area; ?> or beyond.</p>
      </div>
    </div>
  </section>

  <!-- Treatment Catalog (Customized for Tumors) -->
  <section id="treatments" class="services-section bg-light" style="padding: 100px 0;">
    <div class="container">
      <div class="section-title text-center">
        <span class="badge">Surgical Portfolio</span>
        <h2>Spine Tumor Options for <?php echo $area; ?></h2>
        <p>Minimally invasive neurosurgical solutions for complex spinal pathologies.</p>
      </div>
      
      <div class="services-grid mt-4">
        <!-- 1. Full Endoscopic -->
        <div class="service-card rich-card">
          <div class="service-icon">
            <svg width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="2"/><path d="M12 2v2"/><path d="M12 20v2"/><path d="M2 12h2"/><path d="M20 12h2"/><path d="M4.9 4.9l1.4 1.4"/><path d="M17.7 17.7l1.4 1.4"/><path d="M4.9 19.1l1.4-1.4"/><path d="M17.7 6.3l1.4-1.4"/></svg>
          </div>
          <h3>Endoscopic Resection</h3>
          <p>The total removal of non-invasive spine tumors through a single, 1cm port using UHD visualization for patients in <?php echo $area; ?>.</p>
        </div>

        <!-- 2. Tumor Biopsy -->
        <div class="service-card rich-card">
          <div class="service-icon">
             <svg width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 12h-4l-3 9L9 3l-3 9H2"/></svg>
          </div>
          <h3>Needle / Micro-Biopsy</h3>
          <p>Precision tissue sampling of suspicious spinal masses in <?php echo $area; ?> with near-zero downtime, guiding definitive treatment plans.</p>
        </div>

        <!-- 3. Decompression -->
        <div class="service-card rich-card">
          <div class="service-icon">
            <svg width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><path d="M12 8v8"/><path d="M8 12h8"/></svg>
          </div>
          <h3>Neural Decompression</h3>
          <p>Relieving immediate spinal cord pressure from palliative metastatic tumors for residents in <?php echo $area; ?>, restoring mobility and comfort.</p>
        </div>

        <!-- 4. Intramedullary -->
        <div class="service-card rich-card">
          <div class="service-icon">
             <svg width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 2L4 7v10l8 5 8-5V7l-8-5z"/><path d="M12 22V12"/></svg>
          </div>
          <h3>Intramedullary Surgery</h3>
          <p>High-complexity removal of tumors hiding inside the spinal cord itself, performed with micro-surgical precision for <?php echo $area; ?> patients.</p>
        </div>

        <!-- 5. Safety Monitoring -->
        <div class="service-card rich-card">
          <div class="service-icon">
            <svg width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M13 2L3 14h9l-1 8 10-12h-9l1-8z"/></svg>
          </div>
          <h3>IONM Protection</h3>
          <p>Continuous monitoring of neuro-signals ensure that every millimeter of tumor removal is 100% safe for our <?php echo $area; ?> surgical patients.</p>
        </div>

        <!-- 6. Recovery Support -->
        <div class="service-card rich-card">
          <div class="service-icon">
            <svg width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 2C6.5 2 2 6.5 2 12s4.5 10 10 10 10-4.5 10-10S17.5 2 12 2Z"/><path d="M8 12h8"/><path d="M12 8v8"/></svg>
          </div>
          <h3>Post-Op Oncology</h3>
          <p>Seamless coordination with radiation and medical oncology teams to ensure a comprehensive cure plan for residents in <?php echo $area; ?>.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- FAQ Section -->
  <section id="faq" class="faq-section" style="padding: 100px 0; background: var(--white);">
    <div class="container">
      <div class="section-title text-center">
        <span class="badge">Patient Education</span>
        <h2>Frequently Asked Questions about Spine Tumors in <?php echo $area; ?></h2>
      </div>
      <div class="faq-grid mt-4" style="display: grid; grid-template-columns: 1fr 1fr; gap: 30px;">
        <div class="faq-item" style="background: var(--bg-light); padding: 30px; border-radius: 15px; border: 1px solid rgba(0,0,0,0.03);">
          <h3 style="font-size: 1.2rem; color: var(--primary); margin-bottom: 15px;">Are all spinal tumors cancerous?</h3>
          <p>No. Many spinal tumors (like Schwannomas and Meningiomas) are benign (non-cancerous) but can still cause serious neurological issues by compressing the spinal cord in <?php echo $area; ?> patients.</p>
        </div>
        <div class="faq-item" style="background: var(--bg-light); padding: 30px; border-radius: 15px; border: 1px solid rgba(0,0,0,0.03);">
          <h3 style="font-size: 1.2rem; color: var(--primary); margin-bottom: 15px;">Will I need radiation after surgery?</h3>
          <p>This depends on the pathology of the tumor. For many benign tumors in <?php echo $area; ?>, surgical removal is curative. For metastatic tumors, radiation is often used following decompression.</p>
        </div>
        <div class="faq-item" style="background: var(--bg-light); padding: 30px; border-radius: 15px; border: 1px solid rgba(0,0,0,0.03);">
          <h3 style="font-size: 1.2rem; color: var(--primary); margin-bottom: 15px;">Can an endoscope really remove a whole tumor?</h3>
          <p>Yes. With modern UHD endoscopes, we can often visualize the tumor more clearly than with traditional "open" surgery, allowing for complete and safe resection for patients in <?php echo $area; ?>.</p>
        </div>
        <div class="faq-item" style="background: var(--bg-light); padding: 30px; border-radius: 15px; border: 1px solid rgba(0,0,0,0.03);">
          <h3 style="font-size: 1.2rem; color: var(--primary); margin-bottom: 15px;">What is the "night pain" for spine tumors?</h3>
          <p>Pain that increases when lying down or during the night is a hallmark sign of a spine tumor for <?php echo $area; ?> residents, and should always be investigated by an expert neurosurgeon.</p>
        </div>
        <div class="faq-item" style="background: var(--bg-light); padding: 30px; border-radius: 15px; border: 1px solid rgba(0,0,0,0.03);">
          <h3 style="font-size: 1.2rem; color: var(--primary); margin-bottom: 15px;">Is there a risk of paralysis during surgery?</h3>
          <p>While every spine surgery carries risks, the use of continuous Intraoperative Neuromonitoring (IONM) in <?php echo $area; ?> minimizes this risk by allowing us to track nerve health in real-time.</p>
        </div>
        <div class="faq-item" style="background: var(--bg-light); padding: 30px; border-radius: 15px; border: 1px solid rgba(0,0,0,0.03);">
          <h3 style="font-size: 1.2rem; color: var(--primary); margin-bottom: 15px;">How long is the recovery?</h3>
          <p>With endoscopic resection, most patients in <?php echo $area; ?> are walking the same day and can return to light work in 2-3 weeks, compared to 2-3 months for traditional open surgery.</p>
        </div>
        <div class="faq-item" style="background: var(--bg-light); padding: 30px; border-radius: 15px; border: 1px solid rgba(0,0,0,0.03);">
          <h3 style="font-size: 1.2rem; color: var(--primary); margin-bottom: 15px;">Can you treat tumors that have recurred?</h3>
          <p>Yes. Revision spine tumor surgery is a highly specialized service that Dr. Saroha provide for patients from <?php echo $area; ?> who have had previous surgeries elsewhere.</p>
        </div>
        <div class="faq-item" style="background: var(--bg-light); padding: 30px; border-radius: 15px; border: 1px solid rgba(0,0,0,0.03);">
          <h3 style="font-size: 1.2rem; color: var(--primary); margin-bottom: 15px;">Do I need to travel far for the biopsy?</h3>
          <p>No. We perform precision biopsies on-site in an outpatient setting, providing your results quickly so we can begin the right treatment plan in <?php echo $area; ?> immediately.</p>
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
        <p>Expert oncological neurosurgery for complex spine tumors. Fill out the form below and our team will get back to you within 24 hours.</p>
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
                <label for="condition">Pathology Required</label>
                <select id="condition" name="condition">
                  <option value="spine-tumor" selected>Endoscopic Tumor Removal</option>
                  <option value="metastatic">Metastatic Tumor Relief</option>
                  <option value="second-opinion">Second Opinion for <?php echo $area; ?> patients</option>
                  <option value="other">Other Mass</option>
                </select>
              </div>
            </div>
            <div class="form-group">
              <label for="message">Message</label>
              <textarea id="message" name="message" rows="4" placeholder="Briefly describe your symptoms or recent scans in <?php echo $area; ?>"></textarea>
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
