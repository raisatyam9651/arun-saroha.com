<?php
// Master Template for Brain Aneurysm Treatment Location Pages
// Usage: Define $state and $area before including this file

$page_title = "Best Brain Aneurysm Treatment in " . $area . " | Dr. Arun Saroha";
$page_description = "Expert brain aneurysm (cerebral aneurysm) treatment in " . $area . " by Dr. Arun Saroha. World-class neurosurgical care for aneurysm clipping and coiling in " . $area . ".";
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
    <link rel="canonical" href="https://www.drarunsaroha.com/brain-aneurysm/<?php echo strtolower(str_replace(' ', '-', $state)); ?>/<?php echo ($area != $state) ? strtolower(str_replace(' ', '-', $area)) . '/' : ''; ?>">
</head>
<body>

  <!-- Header -->
  <?php include __DIR__ . '/header.php'; ?>

  <!-- Hero Section -->
  <section class="hero" style="background: linear-gradient(90deg, #134085 45%, rgba(19, 64, 133, 0) 100%), url('/assets/images/spine_hero.png') no-repeat right center / contain, radial-gradient(circle at top right, #2a64c5 0%, #0f3d81 80%);">
    <div class="container">
      <div class="hero-content">
        <h1 class="fade-in-up">Best Brain Aneurysm Treatment in <br><span class="text-gradient"><?php echo $area; ?></span></h1>
        <p class="hero-tagline fade-in-up">Advanced Aneurysm Clipping & Coiling Surgery</p>
        <p class="hero-subtext fade-in-up delay-1">Expert neurosurgical care for brain aneurysms (cerebral aneurysms). Dr. Arun Saroha provides world-class treatment for unruptured and ruptured aneurysms for patients in <?php echo $area; ?>.</p>
        <div class="hero-buttons fade-in-up delay-2">
          <a href="#contact" class="btn btn-primary btn-large">Book Consultation</a>
          <a href="#clinical-overview" class="btn btn-white btn-large">Learn More</a>
        </div>
      </div>
    </div>
  </section>

  <!-- Detailed Clinical Content -->
  <section id="clinical-overview" class="clinical-content" style="padding: 80px 0; background: var(--white);">
    <div class="container" style="max-width: 1000px;">
      <div class="content-block" style="margin-bottom: 50px;">
        <span class="badge">Clinical Insight</span>
        <h2 style="font-size: 2.5rem; margin-bottom: 25px;">Understanding Brain Aneurysms in <?php echo $area; ?></h2>
        <p style="font-size: 1.15rem; margin-bottom: 20px;">A brain aneurysm (also called a cerebral aneurysm) is a weak spot in a brain artery that causes it to balloon outward and fill with blood. For residents of <?php echo $area; ?>, this condition can be life-threatening if the aneurysm ruptures, causing a hemorrhagic stroke.</p>
        <p style="font-size: 1.15rem; margin-bottom: 20px;">Dr. Arun Saroha is one of India's most experienced neurosurgeons in aneurysm treatment, offering both surgical clipping (where a tiny clip is placed at the aneurysm's base) and endovascular coiling (where platinum coils are placed inside the aneurysm to block blood flow). With 25+ years of experience, he has successfully treated aneurysms of all complexities for patients from <?php echo $area; ?> and beyond.</p>
      </div>

      <div class="content-grid" style="display: grid; grid-template-columns: 1fr 1fr; gap: 60px; margin-bottom: 60px;">
        <div class="clinical-list">
          <h3 style="margin-bottom: 20px; color: var(--primary);">Warning Signs of Aneurysm</h3>
          <ul style="list-style: disk; padding-left: 20px; color: var(--text);">
            <li style="margin-bottom: 12px;">Sudden severe headache (often described as "thunderclap headache").</li>
            <li style="margin-bottom: 12px;">Nausea and vomiting.</li>
            <li style="margin-bottom: 12px;">Stiff neck and sensitivity to light.</li>
            <li style="margin-bottom: 12px;">Double vision or loss of vision.</li>
            <li style="margin-bottom: 12px;">Confusion and difficulty speaking.</li>
            <li style="margin-bottom: 12px;">Weakness on one side of the body.</li>
          </ul>
        </div>
        <div class="clinical-list">
          <h3 style="margin-bottom: 20px; color: var(--primary);">Risk Factors for <?php echo $area; ?> Residents</h3>
          <p style="margin-bottom: 15px;">Several factors increase the risk of developing a brain aneurysm:</p>
          <ul style="list-style: disk; padding-left: 20px; color: var(--text);">
            <li style="margin-bottom: 12px;"><strong>Family History:</strong> Genetic predisposition to aneurysm formation.</li>
            <li style="margin-bottom: 12px;"><strong>High Blood Pressure:</strong> Weakened blood vessel walls over time.</li>
            <li style="margin-bottom: 12px;"><strong>Smoking:</strong> Significantly increases rupture risk.</li>
            <li style="margin-bottom: 12px;"><strong>Trauma:</strong> Head injuries can cause pseudoaneurysms.</li>
          </ul>
        </div>
      </div>

      <div class="detailed-section" style="background: var(--bg-light); padding: 50px; border-radius: 20px; border: 1px solid rgba(0,0,0,0.05);">
        <h3 style="font-size: 2rem; margin-bottom: 25px; color: var(--primary);">Precision Diagnostics in <?php echo $area; ?></h3>
        <p style="margin-bottom: 20px;">Dr. Saroha uses state-of-the-art imaging to detect, size, and plan treatment for brain aneurysms:</p>
        <div style="display: grid; grid-template-columns: repeat(3, 1fr); gap: 20px;">
          <div style="background: white; padding: 25px; border-radius: 12px; box-shadow: var(--shadow-sm);">
            <h4 style="color: var(--secondary); margin-bottom: 10px;">CT Angiography (CTA)</h4>
            <p style="font-size: 0.9rem;">Quick 3D imaging to identify aneurysm location and size.</p>
          </div>
          <div style="background: white; padding: 25px; border-radius: 12px; box-shadow: var(--shadow-sm);">
            <h4 style="color: var(--secondary); margin-bottom: 10px;">MR Angiography (MRA)</h4>
            <p style="font-size: 0.9rem;">Detailed imaging without radiation exposure.</p>
          </div>
          <div style="background: white; padding: 25px; border-radius: 12px; box-shadow: var(--shadow-sm);">
            <h4 style="color: var(--secondary); margin-bottom: 10px;">Cerebral Angiogram</h4>
            <p style="font-size: 0.9rem;">Gold standard for aneurysm evaluation and treatment planning.</p>
          </div>
        </div>
      </div>

      <div class="content-block" style="margin-top: 60px;">
        <h3 style="font-size: 2rem; margin-bottom: 25px; color: var(--primary);">Treatment Options for <?php echo $area; ?> Patients</h3>
        <p style="font-size: 1.15rem; margin-bottom: 20px;"><strong>Surgical Clipping:</strong> A small titanium clip is placed at the base of the aneurysm, isolating it from normal blood flow. This is the gold standard for accessible aneurysms and provides a durable cure for <?php echo $area; ?> patients.</p>
        <p style="font-size: 1.15rem; margin-bottom: 20px;"><strong>Endovascular Coiling:</strong> A catheter is threaded through arteries to the brain, where platinum coils are deployed inside the aneurysm to induce clotting and block blood flow. Less invasive with faster recovery times for <?php echo $area; ?> residents.</p>
        <p style="font-size: 1.15rem; margin-bottom: 20px;"><strong>Flow Diversion Devices:</strong> For complex giant aneurysms, flow diversion stents redirect blood away from the aneurysm, allowing it to heal over time.</p>
      </div>
    </div>
  </section>

  <!-- Treatment Catalog -->
  <section id="treatments" class="services-section bg-light" style="padding: 100px 0;">
    <div class="container">
      <div class="section-title text-center">
        <span class="badge">Surgical Portfolio</span>
        <h2>Advanced Aneurysm Treatments for <?php echo $area; ?></h2>
        <p>Comprehensive care for unruptured and ruptured brain aneurysms.</p>
      </div>

      <div class="services-grid mt-4">
        <div class="service-card rich-card">
          <div class="service-icon">
            <svg width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><path d="M12 8v8"/><path d="M8 12h8"/></svg>
          </div>
          <h3>Aneurysm Clipping</h3>
          <p>Surgical placement of a titanium clip at the aneurysm neck. Permanent solution for accessible aneurysms for <?php echo $area; ?> patients.</p>
        </div>

        <div class="service-card rich-card">
          <div class="service-icon">
            <svg width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 12h-4l-3 9L9 3l-3 9H2"/></svg>
          </div>
          <h3>Endovascular Coiling</h3>
          <p>Minimally invasive catheter-based coil placement. Faster recovery for patients in <?php echo $area; ?>.</p>
        </div>

        <div class="service-card rich-card">
          <div class="service-icon">
            <svg width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="3" y="3" width="18" height="18" rx="2"/><path d="M3 9h18"/><path d="M9 21V9"/></svg>
          </div>
          <h3>Flow Diverter Stenting</h3>
          <p>Advanced treatment for complex or giant aneurysms. Redirects blood flow for gradual aneurysm healing in <?php echo $area; ?>.</p>
        </div>

        <div class="service-card rich-card">
          <div class="service-icon">
            <svg width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M19 14c1.49-1.46 3-3.21 3-5.5A5.5 5.5 0 0 0 16.5 3c-1.76 0-3 .5-4.5 2-1.5-1.5-2.74-2-4.5-2A5.5 5.5 0 0 0 2 8.5c0 2.3 1.5 4.05 3 5.5l7 7Z"/></svg>
          </div>
          <h3>Ruptured Aneurysm Emergency</h3>
          <p>24/7 emergency care for subarachnoid hemorrhage. Life-saving surgery for ruptured aneurysms in <?php echo $area; ?>.</p>
        </div>

        <div class="service-card rich-card">
          <div class="service-icon">
            <svg width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 2a10 10 0 1 0 10 10H12V2Z"/><path d="M12 2a10 10 0 0 1 10 10"/></svg>
          </div>
          <h3>Vasospasm Management</h3>
          <p>Post-rupture care to prevent dangerous blood vessel narrowing. Critical monitoring for <?php echo $area; ?> patients.</p>
        </div>

        <div class="service-card rich-card">
          <div class="service-icon">
            <svg width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M22 21v-2a4 4 0 0 0-3-3.87"/><path d="M16 3.13a4 4 0 0 1 0 7.75"/></svg>
          </div>
          <h3>Rehabilitation & Follow-up</h3>
          <p>Long-term monitoring and rehabilitation for aneurysm survivors in <?php echo $area; ?>.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- International Care -->
  <section class="international-section bg-light">
    <div class="container international-container">
      <div class="international-text">
        <span class="badge">Global Reach</span>
        <h2>Expert Aneurysm Care for <?php echo $area; ?></h2>
        <p>Brain aneurysms require specialized neurosurgical expertise. Dr. Saroha's team provides comprehensive evaluation and treatment planning for patients from <?php echo $area; ?>, including remote consultations before travel.</p>
        <div class="hero-buttons">
          <a href="../../../international-patients.php" class="btn btn-outline">Learn More about International Care</a>
        </div>
      </div>
      <div class="international-stats">
        <div class="intl-stat-card">
          <div class="stat-number">500+</div>
          <p>Aneurysms Treated</p>
        </div>
        <div class="intl-stat-card">
          <div class="stat-number">98%</div>
          <p>Success Rate</p>
        </div>
      </div>
    </div>
  </section>

  <!-- FAQ Section -->
  <section id="faq" class="faq-section" style="padding: 100px 0; background: var(--white);">
    <div class="container">
      <div class="section-title text-center">
        <span class="badge">Patient Education</span>
        <h2>Frequently Asked Questions about Brain Aneurysm in <?php echo $area; ?></h2>
      </div>
      <div class="faq-grid mt-4" style="display: grid; grid-template-columns: 1fr 1fr; gap: 30px;">
        <div class="faq-item" style="background: var(--bg-light); padding: 30px; border-radius: 15px; border: 1px solid rgba(0,0,0,0.03);">
          <h3 style="font-size: 1.2rem; color: var(--primary); margin-bottom: 15px;">What is a brain aneurysm?</h3>
          <p>A brain aneurysm is a bulge or ballooning in a blood vessel in the brain caused by weakness in the vessel wall. If it ruptures, it can cause a life-threatening hemorrhagic stroke.</p>
        </div>
        <div class="faq-item" style="background: var(--bg-light); padding: 30px; border-radius: 15px; border: 1px solid rgba(0,0,0,0.03);">
          <h3 style="font-size: 1.2rem; color: var(--primary); margin-bottom: 15px;">How is an aneurysm treated?</h3>
          <p>Treatment options include surgical clipping (placing a clip at the aneurysm base) or endovascular coiling (filling the aneurysm with platinum coils). The choice depends on aneurysm size, location, and patient health.</p>
        </div>
        <div class="faq-item" style="background: var(--bg-light); padding: 30px; border-radius: 15px; border: 1px solid rgba(0,0,0,0.03);">
          <h3 style="font-size: 1.2rem; color: var(--primary); margin-bottom: 15px;">What is the recovery time after aneurysm surgery?</h3>
          <p>Coiling patients often go home within 1-2 days with full recovery in 1-2 weeks. Clipping surgery requires 3-7 days in hospital and 4-6 weeks for full recovery for <?php echo $area; ?> patients.</p>
        </div>
        <div class="faq-item" style="background: var(--bg-light); padding: 30px; border-radius: 15px; border: 1px solid rgba(0,0,0,0.03);">
          <h3 style="font-size: 1.2rem; color: var(--primary); margin-bottom: 15px;">Can an aneurysm be monitored without surgery?</h3>
          <p>Yes, small unruptured aneurysms may be monitored with regular imaging. Dr. Saroha creates personalized monitoring plans for <?php echo $area; ?> patients with low-risk aneurysms.</p>
        </div>
        <div class="faq-item" style="background: var(--bg-light); padding: 30px; border-radius: 15px; border: 1px solid rgba(0,0,0,0.03);">
          <h3 style="font-size: 1.2rem; color: var(--primary); margin-bottom: 15px;">Is aneurysm hereditary?</h3>
          <p>There can be a genetic component. If you have family history of aneurysms, Dr. Saroha recommends screening for <?php echo $area; ?> families.</p>
        </div>
        <div class="faq-item" style="background: var(--bg-light); padding: 30px; border-radius: 15px; border: 1px solid rgba(0,0,0,0.03);">
          <h3 style="font-size: 1.2rem; color: var(--primary); margin-bottom: 15px;">What increases aneurysm rupture risk?</h3>
          <p>Smoking, high blood pressure, and large aneurysm size increase rupture risk. Dr. Saroha provides lifestyle guidance for <?php echo $area; ?> patients to reduce risk.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Contact / Booking Section -->
  <section id="contact" class="contact-section" style="padding: 100px 0; background: var(--bg-light);">
    <div class="container">
      <div class="section-title text-center">
        <span class="badge">Get In Touch</span>
        <h2>Aneurysm Consultation in <?php echo $area; ?></h2>
        <p>For emergencies, call +91 98187 78811 immediately. For consultations, fill the form below.</p>
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
                <label for="condition">Condition</label>
                <select id="condition" name="condition">
                  <option value="brain-aneurysm" selected>Brain Aneurysm</option>
                  <option value="coiling">Endovascular Coiling</option>
                  <option value="clipping">Aneurysm Clipping</option>
                  <option value="second-opinion">Second Opinion</option>
                  <option value="other">Other</option>
                </select>
              </div>
            </div>
            <div class="form-group">
              <label for="message">Message</label>
              <textarea id="message" name="message" rows="4" placeholder="Describe your condition or attach MRI reports"></textarea>
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