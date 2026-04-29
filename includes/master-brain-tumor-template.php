<?php
// Master Template for Brain Tumor Treatment Location Pages
// Usage: Define $state and $area before including this file

$page_title = "Best Brain Tumor Treatment in " . $area . " | Dr. Arun Saroha";
$page_description = "Expert brain tumor surgery in " . $area . " by Dr. Arun Saroha. World-class neurosurgical care for benign and malignant brain tumors in " . $area . ".";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $page_title; ?></title>
    <meta name="description" content="<?php echo $page_description; ?>">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&family=Outfit:wght@500;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/assets/css/style.css">
    <link rel="canonical" href="https://www.drarunsaroha.com/brain-tumor/<?php echo strtolower(str_replace(' ', '-', $state)); ?>/<?php echo ($area != $state) ? strtolower(str_replace(' ', '-', $area)) . '/' : ''; ?>">
</head>
<body>
  <?php include __DIR__ . '/header.php'; ?>

  <section class="hero" style="background: linear-gradient(90deg, #134085 45%, rgba(19, 64, 133, 0) 100%), url('/assets/images/spine_hero.png') no-repeat right center / contain, radial-gradient(circle at top right, #2a64c5 0%, #0f3d81 80%);">
    <div class="container">
      <div class="hero-content">
        <h1 class="fade-in-up">Best Brain Tumor Treatment in <br><span class="text-gradient"><?php echo $area; ?></span></h1>
        <p class="hero-tagline fade-in-up">Advanced Tumor Removal & Neurological Care</p>
        <p class="hero-subtext fade-in-up delay-1">Expert brain tumor surgery by Dr. Arun Saroha. From gliomas to meningiomas, experience world-class treatment for all tumor types in <?php echo $area; ?>.</p>
        <div class="hero-buttons fade-in-up delay-2">
          <a href="#contact" class="btn btn-primary btn-large">Book Consultation</a>
          <a href="#clinical-overview" class="btn btn-white btn-large">Learn More</a>
        </div>
      </div>
    </div>
  </section>

  <section id="clinical-overview" class="clinical-content" style="padding: 80px 0; background: var(--white);">
    <div class="container" style="max-width: 1000px;">
      <div class="content-block" style="margin-bottom: 50px;">
        <span class="badge">Clinical Insight</span>
        <h2 style="font-size: 2.5rem; margin-bottom: 25px;">Understanding Brain Tumors in <?php echo $area; ?></h2>
        <p style="font-size: 1.15rem; margin-bottom: 20px;">A brain tumor is an abnormal growth of cells in the brain or surrounding tissues. For residents of <?php echo $area; ?>, Dr. Arun Saroha offers comprehensive diagnosis and treatment for both benign (non-cancerous) and malignant (cancerous) brain tumors.</p>
        <p style="font-size: 1.15rem; margin-bottom: 20px;">With 25+ years of neurosurgical experience, Dr. Saroha uses the latest techniques including neuro-navigation, intraoperative MRI, and fluorescence-guided surgery to achieve maximal tumor removal while preserving critical brain functions for <?php echo $area; ?> patients.</p>
      </div>

      <div class="content-grid" style="display: grid; grid-template-columns: 1fr 1fr; gap: 60px; margin-bottom: 60px;">
        <div class="clinical-list">
          <h3 style="margin-bottom: 20px; color: var(--primary);">Common Brain Tumor Symptoms</h3>
          <ul style="list-style: disk; padding-left: 20px; color: var(--text);">
            <li style="margin-bottom: 12px;">Persistent headaches, especially morning headaches.</li>
            <li style="margin-bottom: 12px;">Seizures (new onset in adults).</li>
            <li style="margin-bottom: 12px;">Nausea and vomiting without explanation.</li>
            <li style="margin-bottom: 12px;">Vision problems (double vision, peripheral loss).</li>
            <li style="margin-bottom: 12px;">Speech difficulties or confusion.</li>
            <li style="margin-bottom: 12px;">Balance problems and weakness in limbs.</li>
          </ul>
        </div>
        <div class="clinical-list">
          <h3 style="margin-bottom: 20px; color: var(--primary);">Types of Brain Tumors We Treat</h3>
          <ul style="list-style: disk; padding-left: 20px; color: var(--text);">
            <li style="margin-bottom: 12px;"><strong>Gliomas:</strong> Astrocytoma, GBM, oligodendroglioma.</li>
            <li style="margin-bottom: 12px;"><strong>Meningiomas:</strong> Common benign brain surface tumors.</li>
            <li style="margin-bottom: 12px;"><strong>Pituitary Tumors:</strong> Hormone-secreting腺瘤.</li>
            <li style="margin-bottom: 12px;"><strong>Metastatic Tumors:</strong> Cancer spread from other organs.</li>
          </ul>
        </div>
      </div>

      <div class="detailed-section" style="background: var(--bg-light); padding: 50px; border-radius: 20px;">
        <h3 style="font-size: 2rem; margin-bottom: 25px; color: var(--primary);">Advanced Diagnostics in <?php echo $area; ?></h3>
        <div style="display: grid; grid-template-columns: repeat(3, 1fr); gap: 20px;">
          <div style="background: white; padding: 25px; border-radius: 12px; box-shadow: var(--shadow-sm);">
            <h4 style="color: var(--secondary); margin-bottom: 10px;">MRI with Contrast</h4>
            <p style="font-size: 0.9rem;">Gold standard for tumor visualization and surgical planning.</p>
          </div>
          <div style="background: white; padding: 25px; border-radius: 12px; box-shadow: var(--shadow-sm);">
            <h4 style="color: var(--secondary); margin-bottom: 10px;">CT Scan</h4>
            <p style="font-size: 0.9rem;">Quick imaging for emergency cases and bone involvement.</p>
          </div>
          <div style="background: white; padding: 25px; border-radius: 12px; box-shadow: var(--shadow-sm);">
            <h4 style="color: var(--secondary); margin-bottom: 10px;">Biopsy</h4>
            <p style="font-size: 0.9rem;">Histological diagnosis to guide treatment for <?php echo $area; ?> patients.</p>
          </div>
        </div>
      </div>

      <div class="content-block" style="margin-top: 60px;">
        <h3 style="font-size: 2rem; margin-bottom: 25px; color: var(--primary);">Treatment Options for <?php echo $area; ?> Patients</h3>
        <p style="font-size: 1.15rem; margin-bottom: 20px;"><strong>Craniotomy & Tumor Removal:</strong> The primary surgical approach where a bone flap is temporarily removed to access and remove the tumor. Dr. Saroha uses neuro-navigation and intraoperative neuromonitoring to maximize removal while protecting vital brain areas.</p>
        <p style="font-size: 1.15rem; margin-bottom: 20px;"><strong>Endoscopic Tumor Surgery:</strong> Minimally invasive approach through small openings, ideal for pituitary tumors and some ventricular lesions. Faster recovery for <?php echo $area; ?> patients.</p>
        <p style="font-size: 1.15rem; margin-bottom: 20px;"><strong>Radiation Therapy:</strong> Advanced radiotherapy including Gamma Knife and LINAC radiosurgery for inoperable or residual tumors.</p>
      </div>
    </div>
  </section>

  <section id="treatments" class="services-section bg-light" style="padding: 100px 0;">
    <div class="container">
      <div class="section-title text-center">
        <span class="badge">Surgical Portfolio</span>
        <h2>Brain Tumor Procedures for <?php echo $area; ?></h2>
      </div>
      <div class="services-grid mt-4">
        <div class="service-card rich-card">
          <div class="service-icon"><svg width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><path d="M12 8v8"/><path d="M8 12h8"/></svg></div>
          <h3>Craniotomy & Excision</h3>
          <p>Traditional open surgery for maximal tumor removal with neuronavigation for <?php echo $area; ?> patients.</p>
        </div>
        <div class="service-card rich-card">
          <div class="service-icon"><svg width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 2a10 10 0 1 0 10 10H12V2Z"/></svg></div>
          <h3>Endoscopic Surgery</h3>
          <p>Minimally invasive removal through small openings. Ideal for pituitary tumors in <?php echo $area; ?>.</p>
        </div>
        <div class="service-card rich-card">
          <div class="service-icon"><svg width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 12h-4l-3 9L9 3l-3 9H2"/></svg></div>
          <h3>Stereotactic Biopsy</h3>
          <p>Precise needle sampling for diagnosis of deep-seated tumors in <?php echo $area; ?>.</p>
        </div>
        <div class="service-card rich-card">
          <div class="service-icon"><svg width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="3" y="3" width="18" height="18" rx="2"/><path d="M3 9h18"/></svg></div>
          <h3>Radiosurgery (Gamma Knife)</h3>
          <p>Focused radiation for small or residual tumors without surgery for <?php echo $area; ?> residents.</p>
        </div>
        <div class="service-card rich-card">
          <div class="service-icon"><svg width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M19 14c1.49-1.46 3-3.21 3-5.5A5.5 5.5 0 0 0 16.5 3c-1.76 0-3 .5-4.5 2-1.5-1.5-2.74-2-4.5-2A5.5 5.5 0 0 0 2 8.5c0 2.3 1.5 4.05 3 5.5l7 7Z"/></svg></div>
          <h3>Chemotherapy & Oncology</h3>
          <p>Coordinated care with oncology team for malignant tumor management in <?php echo $area; ?>.</p>
        </div>
        <div class="service-card rich-card">
          <div class="service-icon"><svg width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/></svg></div>
          <h3>Rehabilitation</h3>
          <p>Post-operative rehabilitation including speech, physical, and cognitive therapy for <?php echo $area; ?>.</p>
        </div>
      </div>
    </div>
  </section>

  <section class="international-section bg-light">
    <div class="container international-container">
      <div class="international-text">
        <span class="badge">Global Reach</span>
        <h2>International Brain Tumor Care</h2>
        <p>Dr. Saroha has treated patients from over 30 countries for complex brain tumors. Our international patient team provides end-to-end support for <?php echo $area; ?> patients.</p>
        <a href="../../../international-patients.php" class="btn btn-outline">Learn More</a>
      </div>
      <div class="international-stats">
        <div class="intl-stat-card"><div class="stat-number">1000+</div><p>Brain Tumors Treated</p></div>
        <div class="intl-stat-card"><div class="stat-number">30+</div><p>Countries Served</p></div>
      </div>
    </div>
  </section>

  <section id="faq" class="faq-section" style="padding: 100px 0; background: var(--white);">
    <div class="container">
      <div class="section-title text-center">
        <span class="badge">Patient Education</span>
        <h2>FAQs about Brain Tumor in <?php echo $area; ?></h2>
      </div>
      <div class="faq-grid mt-4" style="display: grid; grid-template-columns: 1fr 1fr; gap: 30px;">
        <div class="faq-item" style="background: var(--bg-light); padding: 30px; border-radius: 15px;">
          <h3 style="font-size: 1.2rem; color: var(--primary); margin-bottom: 15px;">Are all brain tumors cancerous?</h3>
          <p>No. Many brain tumors are benign (non-cancerous) like meningiomas and pituitary adenomas. Even malignant tumors vary in aggressiveness.</p>
        </div>
        <div class="faq-item" style="background: var(--bg-light); padding: 30px; border-radius: 15px;">
          <h3 style="font-size: 1.2rem; color: var(--primary); margin-bottom: 15px;">How is brain tumor surgery performed?</h3>
          <p>Surgery involves opening the skull (craniotomy) to remove the tumor. Dr. Saroha uses advanced navigation and monitoring for precision.</p>
        </div>
        <div class="faq-item" style="background: var(--bg-light); padding: 30px; border-radius: 15px;">
          <h3 style="font-size: 1.2rem; color: var(--primary); margin-bottom: 15px;">What is the recovery time?</h3>
          <p>Hospital stay is typically 3-7 days. Full recovery varies from 4 weeks to several months depending on tumor location and complexity.</p>
        </div>
        <div class="faq-item" style="background: var(--bg-light); padding: 30px; border-radius: 15px;">
          <h3 style="font-size: 1.2rem; color: var(--primary); margin-bottom: 15px;">Will I need radiation after surgery?</h3>
          <p>This depends on tumor type and resection completeness. Dr. Saroha coordinates with radiation oncology for comprehensive care for <?php echo $area; ?> patients.</p>
        </div>
      </div>
    </div>
  </section>

  <section id="contact" class="contact-section" style="padding: 100px 0; background: var(--bg-light);">
    <div class="container">
      <div class="section-title text-center">
        <span class="badge">Get In Touch</span>
        <h2>Brain Tumor Consultation in <?php echo $area; ?></h2>
      </div>
      <div class="contact-wrapper">
        <div class="contact-maps">
          <div class="map-card">
            <h4><svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"/><circle cx="12" cy="10" r="3"/></svg>Max Hospital, Dwarka</h4>
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3503.5748145304105!2d77.0509589!3d28.582527799999998!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390d196186e5d2cf%3A0xdac8e40fda95b616!2sDr.%20Arun%20Saroha%3A%20Best%20Neurosurgeon%20in%20Dwarka%2C%20Delhi%20%7C%20Spine%20Surgeon%2C%20Brain%20Tumor%2C%20Neurologist%20in%20Delhi%2C%20Max%20Hospital!5e0!3m2!1sen!2sus!4v1776149298554!5m2!1sen!2sus" width="600" height="450" style="border:0;" allowfullscreen loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
          </div>
          <div class="map-card">
            <h4><svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"/><circle cx="12" cy="10" r="3"/></svg>Max Hospital, Gurugram</h4>
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3507.603000018817!2d77.0747987!3d28.461381599999996!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390d1922738640a3%3A0x717aeb7ba25e979c!2sDr.%20Arun%20Saroha%3A%20Best%20Neurosurgeon%20in%20Gurgaon%2C%20India%20%7C%20Brain%20Tumor%2C%20Stroke%20treatment%2C%20Spine%20Surgeon%20in%20Gurgaon%20-%20Max%20Hospital!5e0!3m2!1sen!2sus!4v1776149342529!5m2!1sen!2sus" width="600" height="450" style="border:0;" allowfullscreen loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
          </div>
        </div>
        <div class="contact-form-wrapper">
          <form class="contact-form" action="#" method="POST">
            <div class="form-row">
              <div class="form-group"><label>Full Name</label><input type="text" name="name" required placeholder="Your name"></div>
              <div class="form-group"><label>Phone</label><input type="tel" name="phone" required placeholder="+91 XXXXX XXXXX"></div>
            </div>
            <div class="form-row">
              <div class="form-group"><label>Email</label><input type="email" name="email" placeholder="you@example.com"></div>
              <div class="form-group"><label>Condition</label>
                <select name="condition">
                  <option value="brain-tumor" selected>Brain Tumor</option>
                  <option value="glioma">Glioma</option>
                  <option value="meningioma">Meningioma</option>
                  <option value="second-opinion">Second Opinion</option>
                </select>
              </div>
            </div>
            <div class="form-group"><label>Message</label><textarea name="message" rows="4" placeholder="Describe your condition or attach MRI reports"></textarea></div>
            <button type="submit" class="btn btn-primary btn-large" style="width: 100%;">Submit Request</button>
          </form>
        </div>
      </div>
    </div>
  </section>

  <!-- FAQ Section -->
  <section class="faq-section" style="padding: 80px 0; background: var(--white);">
    <div class="container">
      <div class="section-title text-center">
        <span class="badge">Patient Education</span>
        <h2>Frequently Asked Questions about Brain Tumor Treatment in <?php echo $area; ?></h2>
      </div>
      <div class="faq-grid mt-4" style="display: grid; grid-template-columns: 1fr 1fr; gap: 30px;">
        <div class="faq-item" style="background: var(--bg-light); padding: 30px; border-radius: 15px; border: 1px solid rgba(0,0,0,0.03);">
          <h3 style="font-size: 1.1rem; color: var(--primary); margin-bottom: 12px;">What types of brain tumors does Dr. Saroha treat?</h3>
          <p style="font-size: 0.95rem;">Dr. Saroha treats all types including gliomas, meningiomas, acoustic neuromas, pituitary adenomas, metastatic tumors, and skull base tumors using the latest neuronavigational and microsurgical techniques.</p>
        </div>
        <div class="faq-item" style="background: var(--bg-light); padding: 30px; border-radius: 15px; border: 1px solid rgba(0,0,0,0.03);">
          <h3 style="font-size: 1.1rem; color: var(--primary); margin-bottom: 12px;">Are all brain tumors cancerous?</h3>
          <p style="font-size: 0.95rem;">No. Brain tumors are classified as benign (non-cancerous) or malignant (cancerous). Many benign tumors can be completely removed with excellent long-term outcomes for patients in <?php echo $area; ?>.</p>
        </div>
        <div class="faq-item" style="background: var(--bg-light); padding: 30px; border-radius: 15px; border: 1px solid rgba(0,0,0,0.03);">
          <h3 style="font-size: 1.1rem; color: var(--primary); margin-bottom: 12px;">What is neuronavigation in brain tumor surgery?</h3>
          <p style="font-size: 0.95rem;">Neuronavigation is like a GPS for the brain. It provides real-time 3D mapping during surgery, allowing Dr. Saroha to plan the safest approach, achieve maximum tumor removal, and preserve critical brain functions.</p>
        </div>
        <div class="faq-item" style="background: var(--bg-light); padding: 30px; border-radius: 15px; border: 1px solid rgba(0,0,0,0.03);">
          <h3 style="font-size: 1.1rem; color: var(--primary); margin-bottom: 12px;">How long does brain tumor surgery take?</h3>
          <p style="font-size: 0.95rem;">Surgery duration varies by tumor type and complexity, typically ranging from 3 to 8 hours. Dr. Saroha prioritizes precision over speed, ensuring the best possible outcome for <?php echo $area; ?> patients.</p>
        </div>
        <div class="faq-item" style="background: var(--bg-light); padding: 30px; border-radius: 15px; border: 1px solid rgba(0,0,0,0.03);">
          <h3 style="font-size: 1.1rem; color: var(--primary); margin-bottom: 12px;">Will I need radiation or chemotherapy after surgery?</h3>
          <p style="font-size: 0.95rem;">This depends on the tumor type, grade, and completeness of resection. Dr. Saroha coordinates with oncology teams to create a comprehensive treatment plan that may include radiotherapy, chemotherapy, or targeted therapy.</p>
        </div>
        <div class="faq-item" style="background: var(--bg-light); padding: 30px; border-radius: 15px; border: 1px solid rgba(0,0,0,0.03);">
          <h3 style="font-size: 1.1rem; color: var(--primary); margin-bottom: 12px;">What is intraoperative neuromonitoring?</h3>
          <p style="font-size: 0.95rem;">IONM continuously monitors brain and nerve function during surgery, alerting Dr. Saroha to any changes so he can adjust his approach and preserve critical neurological functions.</p>
        </div>
        <div class="faq-item" style="background: var(--bg-light); padding: 30px; border-radius: 15px; border: 1px solid rgba(0,0,0,0.03);">
          <h3 style="font-size: 1.1rem; color: var(--primary); margin-bottom: 12px;">Can a brain tumor come back after surgery?</h3>
          <p style="font-size: 0.95rem;">Depending on the tumor type and how completely it was removed, recurrence is possible. Regular follow-up MRI scans are essential for early detection. Dr. Saroha uses advanced techniques to minimize recurrence risk.</p>
        </div>
        <div class="faq-item" style="background: var(--bg-light); padding: 30px; border-radius: 15px; border: 1px solid rgba(0,0,0,0.03);">
          <h3 style="font-size: 1.1rem; color: var(--primary); margin-bottom: 12px;">How do I send my MRI for a remote consultation?</h3>
          <p style="font-size: 0.95rem;">Share your MRI/CT scans via WhatsApp (+91 98187 78811) or email. Dr. Saroha's team will provide a detailed evaluation and treatment plan before you travel to <?php echo $area; ?>.</p>
        </div>
      </div>
    </div>
  </section>

  <section class="locations-linking bg-light" style="padding: 60px 0;">
    <div class="container">
      <div class="section-title text-center">
        <?php if($state == "India"): ?><h2>Brain Tumor Treatment Across India</h2>
        <?php else: ?><h2>Other Locations in <?php echo $state; ?></h2><?php endif; ?>
      </div>
      <div class="location-links-grid" style="display: grid; grid-template-columns: repeat(auto-fill, minmax(200px, 1fr)); gap: 15px;">
        <?php
        $base_url = "/brain-tumor/";
        if($state == "India") {
            $state_dirs = glob(__DIR__ . '/../brain-tumor/*', GLOB_ONLYDIR);
            foreach($state_dirs as $dir) {
                $slug = basename($dir);
                $name = ucwords(str_replace('-', ' ', $slug));
                echo '<a href="'.$base_url.$slug.'/" style="padding: 10px; background: white; border-radius: 8px; text-align: center; color: var(--text); border: 1px solid rgba(0,0,0,0.05); font-size: 0.9rem;">Brain Tumor Treatment in '.$name.'</a>';
            }
        } else {
            $state_slug = strtolower(str_replace(' ', '-', $state));
            $city_dirs = glob(__DIR__ . '/../brain-tumor/'.$state_slug.'/*', GLOB_ONLYDIR);
            echo '<a href="'.$base_url.$state_slug.'/" style="padding: 10px; background: var(--primary); border-radius: 8px; text-align: center; color: white; font-weight: 600; font-size: 0.9rem;">Brain Tumor Treatment in '.$state.'</a>';
            foreach($city_dirs as $dir) {
                $slug = basename($dir);
                $name = ucwords(str_replace('-', ' ', $slug));
                if($name != $area) echo '<a href="'.$base_url.$state_slug.'/'.$slug.'/" style="padding: 10px; background: white; border-radius: 8px; text-align: center; color: var(--text); border: 1px solid rgba(0,0,0,0.05); font-size: 0.9rem;">Brain Tumor Treatment in '.$name.'</a>';
            }
        }
        ?>
      </div>
    </div>
  </section>

  <?php include __DIR__ . '/footer.php'; ?>
</body>
</html>