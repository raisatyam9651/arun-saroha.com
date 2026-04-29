<?php
// Master Template for Blood Clot Treatment Location Pages
// Usage: Define $state and $area before including this file

$page_title = "Best Blood Clot Treatment in " . $area . " | Dr. Arun Saroha";
$page_description = "Expert blood clot (cerebral thrombosis) treatment in " . $area . " by Dr. Arun Saroha. World-class neurosurgical care for stroke prevention and clot removal in " . $area . ".";
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
    <link rel="canonical" href="https://www.drarunsaroha.com/blood-clot/<?php echo strtolower(str_replace(' ', '-', $state)); ?>/<?php echo ($area != $state) ? strtolower(str_replace(' ', '-', $area)) . '/' : ''; ?>">
</head>
<body>

  <!-- Header -->
  <?php include __DIR__ . '/header.php'; ?>

  <!-- Hero Section -->
  <section class="hero" style="background: linear-gradient(90deg, #134085 45%, rgba(19, 64, 133, 0) 100%), url('/assets/images/spine_hero.png') no-repeat right center / contain, radial-gradient(circle at top right, #2a64c5 0%, #0f3d81 80%);">
    <div class="container">
      <div class="hero-content">
        <h1 class="fade-in-up">Best Blood Clot Treatment in <br><span class="text-gradient"><?php echo $area; ?></span></h1>
        <p class="hero-tagline fade-in-up">Life-Saving Stroke Prevention & Clot Removal Surgery</p>
        <p class="hero-subtext fade-in-up delay-1">Expert neurosurgical care for cerebral blood clots and stroke emergencies. Dr. Arun Saroha provides cutting-edge clot removal and prevention treatment for patients in <?php echo $area; ?>.</p>
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
        <h2 style="font-size: 2.5rem; margin-bottom: 25px;">Understanding Blood Clots & Stroke Risk in <?php echo $area; ?></h2>
        <p style="font-size: 1.15rem; margin-bottom: 20px;">A blood clot in the brain (cerebral thrombosis or cerebral embolism) is a medical emergency that requires immediate intervention. For residents of <?php echo $area; ?>, understanding the warning signs and seeking prompt treatment from a specialized neurosurgeon can mean the difference between full recovery and permanent neurological damage.</p>
        <p style="font-size: 1.15rem; margin-bottom: 20px;">Dr. Arun Saroha specializes in both emergency clot removal (thrombectomy) and preventive treatments that address the underlying causes of clot formation. With 25+ years of experience in stroke neurology, he has helped countless patients from <?php echo $area; ?> avoid debilitating strokes through early intervention and advanced surgical techniques.</p>
      </div>

      <div class="content-grid" style="display: grid; grid-template-columns: 1fr 1fr; gap: 60px; margin-bottom: 60px;">
        <div class="clinical-list">
          <h3 style="margin-bottom: 20px; color: var(--primary);">Warning Signs of Blood Clots</h3>
          <ul style="list-style: disk; padding-left: 20px; color: var(--text);">
            <li style="margin-bottom: 12px;">Sudden weakness or numbness on one side of the body (face, arm, or leg).</li>
            <li style="margin-bottom: 12px;">Difficulty speaking or understanding speech (aphasia).</li>
            <li style="margin-bottom: 12px;">Sudden vision problems in one or both eyes.</li>
            <li style="margin-bottom: 12px;">Severe headache with no known cause.</li>
            <li style="margin-bottom: 12px;">Loss of balance or sudden dizziness.</li>
            <li style="margin-bottom: 12px;">Facial drooping on one side.</li>
          </ul>
        </div>
        <div class="clinical-list">
          <h3 style="margin-bottom: 20px; color: var(--primary);">Risk Factors for <?php echo $area; ?> Residents</h3>
          <p style="margin-bottom: 15px;">Certain conditions increase the likelihood of developing dangerous blood clots:</p>
          <ul style="list-style: disk; padding-left: 20px; color: var(--text);">
            <li style="margin-bottom: 12px;"><strong>Atrial Fibrillation:</strong> Irregular heartbeat that causes blood pooling.</li>
            <li style="margin-bottom: 12px;"><strong>High Blood Pressure:</strong> The leading cause of hemorrhagic stroke.</li>
            <li style="margin-bottom: 12px;"><strong>Diabetes:</strong> Damages blood vessels over time.</li>
            <li style="margin-bottom: 12px;"><strong>Deep Vein Thrombosis (DVT):</strong> clots that travel to the brain.</li>
          </ul>
        </div>
      </div>

      <div class="detailed-section" style="background: var(--bg-light); padding: 50px; border-radius: 20px; border: 1px solid rgba(0,0,0,0.05);">
        <h3 style="font-size: 2rem; margin-bottom: 25px; color: var(--primary);">Advanced Diagnostics in <?php echo $area; ?></h3>
        <p style="margin-bottom: 20px;">Time is critical when dealing with blood clots. Dr. Saroha's team in <?php echo $area; ?> utilizes rapid diagnostic protocols:</p>
        <div style="display: grid; grid-template-columns: repeat(3, 1fr); gap: 20px;">
          <div style="background: white; padding: 25px; border-radius: 12px; box-shadow: var(--shadow-sm);">
            <h4 style="color: var(--secondary); margin-bottom: 10px;">CT Angiography</h4>
            <p style="font-size: 0.9rem;">Rapid imaging to locate blockages in brain arteries.</p>
          </div>
          <div style="background: white; padding: 25px; border-radius: 12px; box-shadow: var(--shadow-sm);">
            <h4 style="color: var(--secondary); margin-bottom: 10px;">MRI / MRA</h4>
            <p style="font-size: 0.9rem;">Detailed visualization of blood vessels and clot location.</p>
          </div>
          <div style="background: white; padding: 25px; border-radius: 12px; box-shadow: var(--shadow-sm);">
            <h4 style="color: var(--secondary); margin-bottom: 10px;">Carotid Doppler</h4>
            <p style="font-size: 0.9rem;">Checking for blockages in neck arteries that feed the brain.</p>
          </div>
        </div>
      </div>

      <div class="content-block" style="margin-top: 60px;">
        <h3 style="font-size: 2rem; margin-bottom: 25px; color: var(--primary);">Expert Treatment & Recovery</h3>
        <p style="font-size: 1.15rem; margin-bottom: 20px;">Treatment options for blood clots depend on clot type, location, and how quickly the patient arrives at the hospital. For residents of <?php echo $area; ?>, Dr. Saroha offers:</p>
        <p style="margin-bottom: 20px;"><strong>Emergency Mechanical Thrombectomy:</strong> A minimally invasive procedure where a catheter is guided through arteries to remove the clot, restoring blood flow to the brain. This procedure has a window of 6-24 hours depending on the patient's condition.</p>
        <p style="margin-bottom: 20px;"><strong>Thrombolysis (Clot-Busting Medication):</strong> tPA medication administered IV to dissolve clots, most effective within the first 3-4.5 hours of symptom onset.</p>
        <p style="font-size: 1.15rem; margin-bottom: 20px;">Post-treatment, Dr. Saroha creates a comprehensive prevention plan for <?php echo $area; ?> patients that includes blood thinners, lifestyle modifications, and monitoring of underlying conditions like atrial fibrillation.</p>
      </div>
    </div>
  </section>

  <!-- Treatment Catalog -->
  <section id="treatments" class="services-section bg-light" style="padding: 100px 0;">
    <div class="container">
      <div class="section-title text-center">
        <span class="badge">Surgical Portfolio</span>
        <h2>Advanced Blood Clot Treatments for <?php echo $area; ?></h2>
        <p>Comprehensive stroke prevention and clot removal procedures.</p>
      </div>

      <div class="services-grid mt-4">
        <div class="service-card rich-card">
          <div class="service-icon">
            <svg width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><path d="M12 6v6l4 2"/></svg>
          </div>
          <h3>Mechanical Thrombectomy</h3>
          <p>Emergency clot removal using stent retrievers. A life-saving procedure for large vessel occlusions for patients in <?php echo $area; ?>.</p>
        </div>

        <div class="service-card rich-card">
          <div class="service-icon">
            <svg width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M19 14c1.49-1.46 3-3.21 3-5.5A5.5 5.5 0 0 0 16.5 3c-1.76 0-3 .5-4.5 2-1.5-1.5-2.74-2-4.5-2A5.5 5.5 0 0 0 2 8.5c0 2.3 1.5 4.05 3 5.5l7 7Z"/></svg>
          </div>
          <h3>Thrombolysis (tPA)</h3>
          <p>Clot-busting medication administered within the critical time window to dissolve blood clots for <?php echo $area; ?> patients.</p>
        </div>

        <div class="service-card rich-card">
          <div class="service-icon">
            <svg width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 12h-4l-3 9L9 3l-3 9H2"/></svg>
          </div>
          <h3>Carotid Endarterectomy</h3>
          <p>Surgical removal of plaque from carotid arteries to prevent strokes for high-risk patients in <?php echo $area; ?>.</p>
        </div>

        <div class="service-card rich-card">
          <div class="service-icon">
            <svg width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="3" y="3" width="18" height="18" rx="2"/><path d="M12 8v8"/><path d="M8 12h8"/></svg>
          </div>
          <h3>Anticoagulation Therapy</h3>
          <p>Long-term blood thinner management for patients with atrial fibrillation or recurrent clot formation in <?php echo $area; ?>.</p>
        </div>

        <div class="service-card rich-card">
          <div class="service-icon">
            <svg width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 2a10 10 0 1 0 10 10H12V2Z"/><path d="M12 2a10 10 0 0 1 10 10"/></svg>
          </div>
          <h3>Stroke Rehabilitation</h3>
          <p>Comprehensive post-stroke recovery including physical therapy, occupational therapy, and speech therapy for <?php echo $area; ?> patients.</p>
        </div>

        <div class="service-card rich-card">
          <div class="service-icon">
            <svg width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M22 21v-2a4 4 0 0 0-3-3.87"/><path d="M16 3.13a4 4 0 0 1 0 7.75"/></svg>
          </div>
          <h3>Prevention Programs</h3>
          <p>Lifestyle modification counseling, diet planning, and regular monitoring to prevent recurrence for <?php echo $area; ?> residents.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- International Care -->
  <section class="international-section bg-light">
    <div class="container international-container">
      <div class="international-text">
        <span class="badge">Global Reach</span>
        <h2>Emergency Care for <?php echo $area; ?> Patients</h2>
        <p>Stroke is a time-critical emergency. Dr. Saroha's team provides rapid assessment and treatment protocols for patients from <?php echo $area; ?>, including telemedicine support for initial evaluation.</p>
        <div class="hero-buttons">
          <a href="../../../international-patients.php" class="btn btn-outline">Learn More about Emergency Care</a>
        </div>
      </div>
      <div class="international-stats">
        <div class="intl-stat-card">
          <div class="stat-number">24/7</div>
          <p>Emergency Response</p>
        </div>
        <div class="intl-stat-card">
          <div class="stat-number">90min</div>
          <p>Door-to-Treatment</p>
        </div>
      </div>
    </div>
  </section>

  <!-- FAQ Section -->
  <section id="faq" class="faq-section" style="padding: 100px 0; background: var(--white);">
    <div class="container">
      <div class="section-title text-center">
        <span class="badge">Patient Education</span>
        <h2>Frequently Asked Questions about Blood Clot Treatment in <?php echo $area; ?></h2>
      </div>
      <div class="faq-grid mt-4" style="display: grid; grid-template-columns: 1fr 1fr; gap: 30px;">
        <div class="faq-item" style="background: var(--bg-light); padding: 30px; border-radius: 15px; border: 1px solid rgba(0,0,0,0.03);">
          <h3 style="font-size: 1.2rem; color: var(--primary); margin-bottom: 15px;">What is the "golden hour" for stroke treatment?</h3>
          <p>The first 3-4.5 hours after symptom onset are critical. Within this window, clot-busting medication (tPA) is most effective. Mechanical thrombectomy can be performed up to 24 hours in selected patients.</p>
        </div>
        <div class="faq-item" style="background: var(--bg-light); padding: 30px; border-radius: 15px; border: 1px solid rgba(0,0,0,0.03);">
          <h3 style="font-size: 1.2rem; color: var(--primary); margin-bottom: 15px;">How is a blood clot in the brain treated?</h3>
          <p>Treatment depends on clot type and location. Options include clot-busting medications (thrombolytics) or mechanical thrombectomy, where a catheter physically removes the clot.</p>
        </div>
        <div class="faq-item" style="background: var(--bg-light); padding: 30px; border-radius: 15px; border: 1px solid rgba(0,0,0,0.03);">
          <h3 style="font-size: 1.2rem; color: var(--primary); margin-bottom: 15px;">Can blood clots be prevented?</h3>
          <p>Yes, through medication (blood thinners), lifestyle changes, managing conditions like atrial fibrillation, and regular monitoring. Dr. Saroha creates personalized prevention plans for <?php echo $area; ?> patients.</p>
        </div>
        <div class="faq-item" style="background: var(--bg-light); padding: 30px; border-radius: 15px; border: 1px solid rgba(0,0,0,0.03);">
          <h3 style="font-size: 1.2rem; color: var(--primary); margin-bottom: 15px;">What is the recovery time after stroke treatment?</h3>
          <p>Recovery varies based on stroke severity. Some patients recover within weeks; others may need months of rehabilitation. Dr. Saroha's team provides comprehensive post-treatment care for <?php echo $area; ?> residents.</p>
        </div>
        <div class="faq-item" style="background: var(--bg-light); padding: 30px; border-radius: 15px; border: 1px solid rgba(0,0,0,0.03);">
          <h3 style="font-size: 1.2rem; color: var(--primary); margin-bottom: 15px;">How do I know if I have a blood clot?</h3>
          <p>Warning signs include sudden weakness, speech difficulties, vision problems, severe headache, and dizziness. If you experience any of these symptoms, seek emergency care immediately in <?php echo $area; ?>.</p>
        </div>
        <div class="faq-item" style="background: var(--bg-light); padding: 30px; border-radius: 15px; border: 1px solid rgba(0,0,0,0.03);">
          <h3 style="font-size: 1.2rem; color: var(--primary); margin-bottom: 15px;">What causes blood clots in the brain?</h3>
          <p>Common causes include atrial fibrillation, atherosclerosis, high blood pressure, smoking, diabetes, and certain medications. Dr. Saroha identifies underlying causes for <?php echo $area; ?> patients.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Contact / Booking Section -->
  <section id="contact" class="contact-section" style="padding: 100px 0; background: var(--bg-light);">
    <div class="container">
      <div class="section-title text-center">
        <span class="badge">Get In Touch</span>
        <h2>Emergency Consultation in <?php echo $area; ?></h2>
        <p>For stroke emergencies, call +91 98187 78811 immediately. For consultations, fill the form below.</p>
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
                  <option value="blood-clot" selected>Blood Clot Treatment</option>
                  <option value="stroke">Stroke Care</option>
                  <option value="thrombectomy">Thrombectomy</option>
                  <option value="second-opinion">Second Opinion</option>
                  <option value="other">Other</option>
                </select>
              </div>
            </div>
            <div class="form-group">
              <label for="message">Message</label>
              <textarea id="message" name="message" rows="4" placeholder="Describe your symptoms or condition"></textarea>
            </div>
            <button type="submit" class="btn btn-primary btn-large" style="width: 100%;">Submit Consultation Request</button>
          </form>
        </div>
      </div>
    </div>
  </section>

  <!-- FAQ Section -->
  <section class="faq-section" style="padding: 100px 0; background: var(--white);">
    <div class="container">
      <div class="section-title text-center">
        <span class="badge">Patient Education</span>
        <h2>Frequently Asked Questions about Blood Clot Treatment in <?php echo $area; ?></h2>
      </div>
      <div class="faq-grid mt-4" style="display: grid; grid-template-columns: 1fr 1fr; gap: 30px;">
        <div class="faq-item" style="background: var(--bg-light); padding: 30px; border-radius: 15px; border: 1px solid rgba(0,0,0,0.03);">
          <h3 style="font-size: 1.1rem; color: var(--primary); margin-bottom: 12px;">What are the warning signs of a brain blood clot?</h3>
          <p style="font-size: 0.95rem;">Sudden severe headache, weakness on one side of the body, slurred speech, vision changes, and confusion are critical warning signs that require immediate medical attention.</p>
        </div>
        <div class="faq-item" style="background: var(--bg-light); padding: 30px; border-radius: 15px; border: 1px solid rgba(0,0,0,0.03);">
          <h3 style="font-size: 1.1rem; color: var(--primary); margin-bottom: 12px;">How is a cerebral blood clot treated?</h3>
          <p style="font-size: 0.95rem;">Treatment depends on clot size and location. Options include anticoagulant medications, thrombolytic drugs to dissolve clots, mechanical thrombectomy for large vessel clots, and surgical intervention when necessary.</p>
        </div>
        <div class="faq-item" style="background: var(--bg-light); padding: 30px; border-radius: 15px; border: 1px solid rgba(0,0,0,0.03);">
          <h3 style="font-size: 1.1rem; color: var(--primary); margin-bottom: 12px;">What is a thrombectomy procedure?</h3>
          <p style="font-size: 0.95rem;">Thrombectomy is a minimally invasive procedure where Dr. Saroha inserts a catheter to physically remove the blood clot from brain vessels, restoring blood flow to the affected area of the brain.</p>
        </div>
        <div class="faq-item" style="background: var(--bg-light); padding: 30px; border-radius: 15px; border: 1px solid rgba(0,0,0,0.03);">
          <h3 style="font-size: 1.1rem; color: var(--primary); margin-bottom: 12px;">How quickly must a stroke from a clot be treated?</h3>
          <p style="font-size: 0.95rem;">Time is critical. The sooner treatment begins, the better the outcome. Within 4.5 hours for clot-dissolving drugs and up to 6–24 hours for thrombectomy in selected cases. Every minute counts for <?php echo $area; ?> patients.</p>
        </div>
        <div class="faq-item" style="background: var(--bg-light); padding: 30px; border-radius: 15px; border: 1px solid rgba(0,0,0,0.03);">
          <h3 style="font-size: 1.1rem; color: var(--primary); margin-bottom: 12px;">Can blood clots in the brain be prevented?</h3>
          <p style="font-size: 0.95rem;">Managing conditions like atrial fibrillation, avoiding smoking, controlling blood pressure and cholesterol, and staying physically active can significantly reduce the risk of cerebral blood clots.</p>
        </div>
        <div class="faq-item" style="background: var(--bg-light); padding: 30px; border-radius: 15px; border: 1px solid rgba(0,0,0,0.03);">
          <h3 style="font-size: 1.1rem; color: var(--primary); margin-bottom: 12px;">What is the recovery process after clot treatment?</h3>
          <p style="font-size: 0.95rem;">Recovery varies by clot severity and treatment. Our comprehensive rehabilitation program for <?php echo $area; ?> patients includes physical therapy, occupational therapy, and speech therapy for a full recovery.</p>
        </div>
        <div class="faq-item" style="background: var(--bg-light); padding: 30px; border-radius: 15px; border: 1px solid rgba(0,0,0,0.03);">
          <h3 style="font-size: 1.1rem; color: var(--primary); margin-bottom: 12px;">Will I need long-term medication after treatment?</h3>
          <p style="font-size: 0.95rem;">Most patients require long-term anticoagulant (blood thinner) therapy to prevent future clots. Dr. Saroha's team in <?php echo $area; ?> will create a personalized medication plan based on your specific condition.</p>
        </div>
        <div class="faq-item" style="background: var(--bg-light); padding: 30px; border-radius: 15px; border: 1px solid rgba(0,0,0,0.03);">
          <h3 style="font-size: 1.1rem; color: var(--primary); margin-bottom: 12px;">Does Dr. Saroha treat venous sinus thrombosis?</h3>
          <p style="font-size: 0.95rem;">Yes. Cerebral venous sinus thrombosis (CVST) is a specialized area of treatment. Dr. Saroha uses anticoagulation therapy, catheter-based procedures, and decompressive surgery when needed for <?php echo $area; ?> patients.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- SEO Internal Linking Section -->
  <section class="locations-linking bg-light" style="padding: 60px 0; border-top: 1px solid rgba(0,0,0,0.05);">
    <div class="container">
      <div class="section-title text-center" style="margin-bottom: 30px;">
        <span class="badge">Regional Access</span>
        <?php if($state == "India"): ?>
          <h2>Blood Clot Treatment Across India</h2>
        <?php else: ?>
          <h2>Other Locations in <?php echo $state; ?></h2>
        <?php endif; ?>
      </div>

      <div class="location-links-grid" style="display: grid; grid-template-columns: repeat(auto-fill, minmax(200px, 1fr)); gap: 15px;">
        <?php
        $base_url = "/blood-clot/";

        if($state == "India") {
            $state_dirs = glob(__DIR__ . '/../blood-clot/*', GLOB_ONLYDIR);
            foreach($state_dirs as $dir) {
                $slug = basename($dir);
                $name = ucwords(str_replace('-', ' ', $slug));
                echo '<a href="'.$base_url.$slug.'/" style="padding: 10px; background: white; border-radius: 8px; text-align: center; box-shadow: 0 2px 4px rgba(0,0,0,0.02); color: var(--text); border: 1px solid rgba(0,0,0,0.05); font-size: 0.9rem; transition: var(--transition);" onmouseover="this.style.borderColor=\'var(--primary)\'; this.style.color=\'var(--primary)\';" onmouseout="this.style.borderColor=\'rgba(0,0,0,0.05)\'; this.style.color=\'var(--text)\';">Blood Clot Treatment in '.$name.'</a>';
            }
        } else {
            $state_slug = strtolower(str_replace(' ', '-', $state));
            $city_dirs = glob(__DIR__ . '/../blood-clot/'.$state_slug.'/*', GLOB_ONLYDIR);
            echo '<a href="'.$base_url.$state_slug.'/" style="padding: 10px; background: var(--primary); border-radius: 8px; text-align: center; box-shadow: 0 2px 4px rgba(0,0,0,0.02); color: white; font-weight: 600; font-size: 0.9rem;">Blood Clot Treatment in '.$state.'</a>';
            foreach($city_dirs as $dir) {
                $slug = basename($dir);
                $name = ucwords(str_replace('-', ' ', $slug));
                if($name != $area) {
                    echo '<a href="'.$base_url.$state_slug.'/'.$slug.'/" style="padding: 10px; background: white; border-radius: 8px; text-align: center; box-shadow: 0 2px 4px rgba(0,0,0,0.02); color: var(--text); border: 1px solid rgba(0,0,0,0.05); font-size: 0.9rem; transition: var(--transition);" onmouseover="this.style.borderColor=\'var(--primary)\'; this.style.color=\'var(--primary)\';" onmouseout="this.style.borderColor=\'rgba(0,0,0,0.05)\'; this.style.color=\'var(--text)\';">Blood Clot Treatment in '.$name.'</a>';
                }
            }
        }
        ?>
      </div>
    </div>
  </section>

  <!-- Footer -->
  <?php include __DIR__ . '/footer.php'; ?>

</body>
</html>