<?php
// Master Template for Scoliosis Treatment Location Pages
// Usage: Define $state and $area before including this file

$page_title = "Best Scoliosis Correction Surgery in " . $area . " | Dr. Arun Saroha";
$page_description = "Advanced Scoliosis treatment and correction surgery in " . $area . " by Dr. Arun Saroha. Expert spinal deformity correction for children and adults in " . $area . ".";
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
    <link rel="canonical" href="https://www.drarunsaroha.com/scoliosis/<?php echo strtolower(str_replace(' ', '-', $state)); ?>/<?php echo ($area != $state) ? strtolower(str_replace(' ', '-', $area)) . '/' : ''; ?>">
</head>
<body>

  <!-- Header -->
  <?php include __DIR__ . '/header.php'; ?>

  <!-- Hero Section (homepage style) -->
  <section class="hero" style="background: linear-gradient(90deg, #134085 45%, rgba(19, 64, 133, 0) 100%), url('/assets/images/scoliosis_hero.png') no-repeat right center / contain, radial-gradient(circle at top right, #2a64c5 0%, #0f3d81 80%);">
    <div class="container">
      <div class="hero-content">
        <h1 class="fade-in-up">Best Scoliosis Treatment in <br><span class="text-gradient"><?php echo $area; ?></span></h1>
        <p class="hero-tagline fade-in-up">Precision Correction for a Straight & Strong Spine</p>
        <p class="hero-subtext fade-in-up delay-1">World-class surgical correction for adolescent and adult spinal deformities. Dr. Arun Saroha brings 25+ years of neurosurgical expertise to patients in <?php echo $area; ?>.</p>
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
        <span class="badge">Deformity Correction</span>
        <h2 style="font-size: 2.5rem; margin-bottom: 25px;">Expert Scoliosis Care in <?php echo $area; ?></h2>
        <p style="font-size: 1.15rem; margin-bottom: 20px;">Scoliosis is a complex three-dimensional deformity of the spine that involves more than just a simple curve. For families in <?php echo $area; ?>, discovering that a child or adult has a spinal curvature can be overwhelming. Dr. Arun Saroha specialized in the comprehensive management of Adolescent Idiopathic Scoliosis (AIS) and Adult Degenerative Scoliosis, utilizing the most advanced correction technologies available globally.</p>
        <p style="font-size: 1.15rem; margin-bottom: 20px;">Our goal in <?php echo $area; ?> is not just to "straighten the spine" for aesthetic reasons, but to restore balance, prevent pulmonary complications, and eliminate the risk of long-term debilitating pain. By utilizing intraoperative neuromonitoring and robotic-assisted navigation, we ensure that every correction is performed with sub-millimeter precision, protecting the spinal cord throughout the entire redistribution process.</p>
      </div>

      <div class="content-grid" style="display: grid; grid-template-columns: 1fr 1fr; gap: 60px; margin-bottom: 60px;">
        <div class="clinical-list">
          <h3 style="margin-bottom: 20px; color: var(--primary);">Signs & Symptoms We Address</h3>
          <ul style="list-style: disk; padding-left: 20px; color: var(--text);">
            <li style="margin-bottom: 12px;">Uneven shoulder height or one shoulder blade protruding more than the other.</li>
            <li style="margin-bottom: 12px;">Uneven waistline or one hip higher than the other in <?php echo $area; ?> patients.</li>
            <li style="margin-bottom: 12px;">Visible "rib hump" when leaning forward (Adam's Forward Bend Test).</li>
            <li style="margin-bottom: 12px;">One side of the back appearing higher than the other when standing straight.</li>
            <li style="margin-bottom: 12px;">Chronic back pain associated with progressive curvature in adults.</li>
            <li style="margin-bottom: 12px;">Early fatigue or shortness of breath due to limited chest expansion.</li>
          </ul>
        </div>
        <div class="clinical-list">
          <h3 style="margin-bottom: 20px; color: var(--primary);">Types of Scoliosis Treated</h3>
          <p style="margin-bottom: 15px;">We provide specialized care for various types of spinal deformities for <?php echo $area; ?> residents:</p>
          <ul style="list-style: disk; padding-left: 20px; color: var(--text);">
            <li style="margin-bottom: 12px;"><strong>Adolescent Idiopathic Scoliosis:</strong> The most common form, appearing during growth spurts.</li>
            <li style="margin-bottom: 12px;"><strong>Degenerative Scoliosis:</strong> Curve developed in adulthood due to disc breakdown and arthritis.</li>
            <li style="margin-bottom: 12px;"><strong>Congenital Scoliosis:</strong> Curvature present at birth due to vertebral malformation.</li>
            <li style="margin-bottom: 12px;"><strong>Neuromuscular Scoliosis:</strong> Associated with conditions like Cerebral Palsy or Muscular Dystrophy.</li>
          </ul>
        </div>
      </div>

      <div class="detailed-section" style="background: var(--bg-light); padding: 50px; border-radius: 20px; border: 1px solid rgba(0,0,0,0.05);">
        <h3 style="font-size: 2rem; margin-bottom: 25px; color: var(--primary);">High-Authority Correction Pipeline in <?php echo $area; ?></h3>
        <p style="margin-bottom: 20px;">Scoliosis surgery is one of the most sophisticated procedures in neurosurgery. In <?php echo $area; ?>, we follow a rigorous safety and optimization protocol:</p>
        <div style="display: grid; grid-template-columns: repeat(3, 1fr); gap: 20px;">
          <div style="background: white; padding: 25px; border-radius: 12px; box-shadow: var(--shadow-sm);">
            <h4 style="color: var(--secondary); margin-bottom: 10px;">EOS 3D Imaging</h4>
            <p style="font-size: 0.9rem;">Low-dose radiation full-spine imaging to measure exact Cobb angles and pelvic balance.</p>
          </div>
          <div style="background: white; padding: 25px; border-radius: 12px; box-shadow: var(--shadow-sm);">
            <h4 style="color: var(--secondary); margin-bottom: 10px;">Scoliosis Bracing</h4>
            <p style="font-size: 0.9rem;">Custom 3D-printed braces for early curves to prevent the need for surgery in <?php echo $area; ?>.</p>
          </div>
          <div style="background: white; padding: 25px; border-radius: 12px; box-shadow: var(--shadow-sm);">
            <h4 style="color: var(--secondary); margin-bottom: 10px;">Safety Monitoring</h4>
            <p style="font-size: 0.9rem;">Real-time spinal cord testing (MEP/SSEP) ensuring 100% safety during correction.</p>
          </div>
        </div>
      </div>

      <div class="content-block" style="margin-top: 60px;">
        <h3 style="font-size: 2rem; margin-bottom: 25px; color: var(--primary);">Surgical Straightening & Recovery</h3>
        <p style="margin-bottom: 20px;">If the spinal curve exceeds 45–50 degrees, surgical intervention is typically recommended for patients in <?php echo $area; ?>. Dr. Saroha utilizes posterior spinal fusion with pedicle screw fixation—the gold standard for scoliosis correction. This involved placing titanium rods and screws to realign the vertebrae and hold them in place while the bones fuse together.</p>
        <p style="margin-bottom: 20px;">Recovery for our <?php echo $area; ?> patients is often surprisingly quick. Most are walking within 24–48 hours and can return home within 5–7 days. Within 3-4 weeks, students can typically return to school, and by 3-6 months, they can resume light athletic activities. The result is a permanently balanced spine that grows correctly and allows for a lifetime of healthy, active living in <?php echo $area; ?>.</p>
      </div>
    </div>
  </section>

  <!-- Treatment Catalog (Customized for Scoliosis) -->
  <section id="treatments" class="services-section bg-light" style="padding: 100px 0;">
    <div class="container">
      <div class="section-title text-center">
        <span class="badge">Surgical Portfolio</span>
        <h2>Advanced Correction Options for <?php echo $area; ?></h2>
        <p>State-of-the-art correction techniques for every stage of spinal deformity.</p>
      </div>
      
      <div class="services-grid mt-4">
        <!-- 1. AIS Correction -->
        <div class="service-card rich-card">
          <div class="service-icon">
            <svg width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 2v20"/><path d="M7 6c3 1 9 1 12 0"/><path d="M6 16c3-1 9-1 12 0"/></svg>
          </div>
          <h3>AIS Spinal Fusion</h3>
          <p>The definitive correction for adolescent scoliosis. Realignment using custom titanium rods to stop curve progression for young patients in <?php echo $area; ?>.</p>
        </div>

        <!-- 2. Adult Deformity -->
        <div class="service-card rich-card">
          <div class="service-icon">
            <svg width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 2C6.5 2 2 6.5 2 12s4.5 10 10 10 10-4.5 10-10S17.5 2 12 2Z"/><path d="M12 8v8"/><path d="M8 12h8"/></svg>
          </div>
          <h3>Adult Scoliosis Care</h3>
          <p>Treating complex degenerative curves in adults in <?php echo $area; ?>. Combining decompression and stabilization to relieve nerve pain and restore posture.</p>
        </div>

        <!-- 3. VBT (Tethering) -->
        <div class="service-card rich-card">
          <div class="service-icon">
             <svg width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 2l4 4-4 4-4-4 4-4z"/><path d="M12 10v12"/></svg>
          </div>
          <h3>Growth Modulation (VBT)</h3>
          <p>A non-fusion technique for growing children in <?php echo $area; ?>, using flexible cords (tethers) to straighten the spine while preserving growth and mobility.</p>
        </div>

        <!-- 4. Revision Surgery -->
        <div class="service-card rich-card">
          <div class="service-icon">
             <svg width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 2L4 7v10l8 5 8-5V7l-8-5z"/><path d="M12 22V12"/><path d="M20 7l-8 5-8-5"/></svg>
          </div>
          <h3>Kyphosis Correction</h3>
          <p>Addressing "hunchback" deformities (Scheuermann's disease) to restore a healthy profile and respiratory function for patients in <?php echo $area; ?>.</p>
        </div>

        <!-- 5. Safety Monitoring -->
        <div class="service-card rich-card">
          <div class="service-icon">
            <svg width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M2 12h4l3 9L9 3l-3 9H2"/></svg>
          </div>
          <h3>Neuromonitoring</h3>
          <p>Utilizing high-frequency electrical signals to track spinal cord integrity in real-time during every correction surgery for our <?php echo $area; ?> patients.</p>
        </div>

        <!-- 6. Rehabilitation -->
        <div class="service-card rich-card">
          <div class="service-icon">
            <svg width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 2C6.5 2 2 6.5 2 12s4.5 10 10 10 10-4.5 10-10S17.5 2 12 2Z"/><path d="M8 12h8"/><path d="M12 8v8"/></svg>
          </div>
          <h3>Post-Op Physio</h3>
          <p>Customized rehabilitation protocols focusing on posture training and core strengthening for long-term correction success for Patients in <?php echo $area; ?>.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- FAQ Section -->
  <section id="faq" class="faq-section" style="padding: 100px 0; background: var(--white);">
    <div class="container">
      <div class="section-title text-center">
        <span class="badge">Patient Education</span>
        <h2>Frequently Asked Questions about Scoliosis in <?php echo $area; ?></h2>
      </div>
      <div class="faq-grid mt-4" style="display: grid; grid-template-columns: 1fr 1fr; gap: 30px;">
        <div class="faq-item" style="background: var(--bg-light); padding: 30px; border-radius: 15px; border: 1px solid rgba(0,0,0,0.03);">
          <h3 style="font-size: 1.2rem; color: var(--primary); margin-bottom: 15px;">At what age should scoliosis be treated?</h3>
          <p>Treatment depends on curve severity. Bracing is often used during the adolescent growth spurt, while surgery is considered for curves over 45 degrees to prevent lifelong health issues in <?php echo $area; ?>.</p>
        </div>
        <div class="faq-item" style="background: var(--bg-light); padding: 30px; border-radius: 15px; border: 1px solid rgba(0,0,0,0.03);">
          <h3 style="font-size: 1.2rem; color: var(--primary); margin-bottom: 15px;">Will I be able to walk after scoliosis surgery?</h3>
          <p>Yes. In fact, most of our patients in <?php echo $area; ?> are standing and walking within 24–48 hours. The surgical correction stabilizes the spine, allowing for safe and immediate mobility.</p>
        </div>
        <div class="faq-item" style="background: var(--bg-light); padding: 30px; border-radius: 15px; border: 1px solid rgba(0,0,0,0.03);">
          <h3 style="font-size: 1.2rem; color: var(--primary); margin-bottom: 15px;">Can scoliosis affect breathing?</h3>
          <p>Severe curvatures (over 70-80 degrees) can compress the chest cavity and restrict lung expansion. Early correction in <?php echo $area; ?> protects your long-term respiratory health.</p>
        </div>
        <div class="faq-item" style="background: var(--bg-light); padding: 30px; border-radius: 15px; border: 1px solid rgba(0,0,0,0.03);">
          <h3 style="font-size: 1.2rem; color: var(--primary); margin-bottom: 15px;">Will I gain height after scoliosis surgery?</h3>
          <p>Yes. As we straighten the "C" or "S" shaped curve, patients in <?php echo $area; ?> typically gain 1 to 3 inches in height immediately following the correction procedure.</p>
        </div>
        <div class="faq-item" style="background: var(--bg-light); padding: 30px; border-radius: 15px; border: 1px solid rgba(0,0,0,0.03);">
          <h3 style="font-size: 1.2rem; color: var(--primary); margin-bottom: 15px;">Is scoliosis hereditary?</h3>
          <p>There is a genetic component; if a parent or sibling from <?php echo $area; ?> has scoliosis, the risk for other family members is higher, though many cases are "idiopathic" (unknown cause).</p>
        </div>
        <div class="faq-item" style="background: var(--bg-light); padding: 30px; border-radius: 15px; border: 1px solid rgba(0,0,0,0.03);">
          <h3 style="font-size: 1.2rem; color: var(--primary); margin-bottom: 15px;">How long is the recovery before returning to school?</h3>
          <p>Most adolescent patients in <?php echo $area; ?> can return to school 3 to 4 weeks after surgery, carrying light backpacks and avoiding heavy contact sports for about 6 months.</p>
        </div>
        <div class="faq-item" style="background: var(--bg-light); padding: 30px; border-radius: 15px; border: 1px solid rgba(0,0,0,0.03);">
          <h3 style="font-size: 1.2rem; color: var(--primary); margin-bottom: 15px;">Do I need to wear a brace after surgery?</h3>
          <p>Modern internal fixation (rods and screws) is so strong that most patients in <?php echo $area; ?> do not need an external brace following a major correction surgery.</p>
        </div>
        <div class="faq-item" style="background: var(--bg-light); padding: 30px; border-radius: 15px; border: 1px solid rgba(0,0,0,0.03);">
          <h3 style="font-size: 1.2rem; color: var(--primary); margin-bottom: 15px;">Do you provide second opinions for surgery?</h3>
          <p>Absolutely. We provide detailed evaluations of Cobb angles and skeletal maturity to help families in <?php echo $area; ?> decide if surgery is the right step for their child.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Contact / Booking Section -->
  <section id="contact" class="contact-section" style="padding: 100px 0; background: var(--bg-light);">
    <div class="container">
      <div class="section-title text-center">
        <span class="badge">Get In Touch</span>
        <h2>Book a Scoliosis Consultation for <?php echo $area; ?></h2>
        <p>Consult with India's leading spinal deformity expert. Fill out the form below and our clinical team will get back to you within 24 hours.</p>
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
                <label for="condition">Scoliosis Concern</label>
                <select id="condition" name="condition">
                  <option value="ais" selected>Adolescent Scoliosis</option>
                  <option value="adult-scoliosis">Adult Scoliosis</option>
                  <option value="second-opinion">Second Opinion for <?php echo $area; ?> patients</option>
                  <option value="other">Other Deformity</option>
                </select>
              </div>
            </div>
            <div class="form-group">
              <label for="message">Message</label>
              <textarea id="message" name="message" rows="4" placeholder="Briefly describe the spinal curve or symptoms in <?php echo $area; ?>"></textarea>
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
