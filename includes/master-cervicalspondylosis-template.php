<?php
// Master Template for Cervical Spondylosis Treatment Location Pages
// Usage: Define $state and $area before including this file
include_once __DIR__ . '/config.php';

$pageTitle = "Best Cervical Spondylosis Treatment in " . $area . " | Dr. Arun Saroha";
$pageDesc = "Suffering from neck pain and stiffness? Get the best cervical spondylosis treatment in " . $area . " with Dr. Arun Saroha. Expert care for age-related neck wear and nerve compression in " . $area . ".";

include __DIR__ . '/header.php';
?>

  <!-- Hero Section -->
  <section class="hero" style="background: linear-gradient(90deg, #0f172a 45%, rgba(15, 23, 42, 0) 100%), url('<?php echo $root; ?>assets/images/cervical_hero.png') no-repeat right center / contain, radial-gradient(circle at top right, #1e293b 0%, #020617 80%);">
    <div class="container">
      <div class="hero-content">
        <h1 class="fade-in-up">Advanced Cervical Spondylosis Care in <br><span class="text-gradient"><?php echo $area; ?></span></h1>
        <p class="hero-tagline fade-in-up">Relieving Neck Pain & Restoring Mobility</p>
        <p class="hero-subtext fade-in-up delay-1">Expert management of age-related neck wear, bone spurs, and nerve compression. Dr. Arun Saroha offers comprehensive surgical and non-surgical solutions in <?php echo $area; ?>.</p>
        <div class="hero-buttons fade-in-up delay-2">
          <a href="#contact" class="btn btn-primary btn-large">Get Expert Opinion</a>
          <a href="#clinical-overview" class="btn btn-white btn-large">Treatment Overview</a>
        </div>
      </div>
    </div>
  </section>

  <!-- Clinical Content -->
  <section id="clinical-overview" class="clinical-content" style="padding: 80px 0; background: var(--white);">
    <div class="container" style="max-width: 1000px;">
      <div class="content-block" style="margin-bottom: 50px;">
        <span class="badge">Condition Guide</span>
        <h2 style="font-size: 2.5rem; margin-bottom: 25px;">Understanding Cervical Spondylosis in <?php echo $area; ?></h2>
        <p style="font-size: 1.15rem; margin-bottom: 20px;">Cervical spondylosis is a general term for age-related wear and tear affecting the spinal discs in your neck. As the discs dehydrate and shrink, signs of osteoarthritis develop, including bony projections along the edges of bones (bone spurs). For patients in <?php echo $area; ?>, this condition can lead to chronic neck pain, stiffness, and in some cases, compression of the spinal cord or nerve roots.</p>
        <p style="font-size: 1.15rem; margin-bottom: 20px;">Most people over age 60 have some degree of cervical spondylosis, but not everyone experiences symptoms. When pain becomes persistent or neurological signs (like hand weakness) appear, seeking expert neurosurgical advice in <?php echo $area; ?> is crucial. Dr. Arun Saroha focuses on restoring the space for your nerves and stabilizing the spinal structure to ensure long-term comfort and safety.</p>
      </div>

      <div class="content-grid" style="display: grid; grid-template-columns: 1fr 1fr; gap: 60px; margin-bottom: 60px;">
        <div class="clinical-list">
          <h3 style="margin-bottom: 20px; color: var(--primary);">Key Symptoms</h3>
          <ul style="list-style: disk; padding-left: 20px; color: var(--text);">
            <li style="margin-bottom: 12px;">Neck pain that might travel into the shoulders and base of the skull.</li>
            <li style="margin-bottom: 12px;">Stiffness in the neck that gets worse with activity.</li>
            <li style="margin-bottom: 12px;">Headaches that start in the neck.</li>
            <li style="margin-bottom: 12px;">Grinding or popping noise when you turn your neck.</li>
            <li style="margin-bottom: 12px;">Numbness or weakness in the arms, hands, or fingers.</li>
          </ul>
        </div>
        <div class="clinical-list">
          <h3 style="margin-bottom: 20px; color: var(--primary);">Progression Factors</h3>
          <p style="margin-bottom: 15px;">Why condition worsens for residents of <?php echo $area; ?>:</p>
          <ul style="list-style: disk; padding-left: 20px; color: var(--text);">
            <li style="margin-bottom: 12px;"><strong>Dehydrated Discs:</strong> Discs act like cushions; drying out leads to bone-on-bone contact.</li>
            <li style="margin-bottom: 12px;"><strong>Herniated Discs:</strong> Cracks appear, causing internal material to press on nerves.</li>
            <li style="margin-bottom: 12px;"><strong>Bone Spurs:</strong> Overgrowth of bone as the body tries to strengthen the spine.</li>
            <li style="margin-bottom: 12px;"><strong>Ligament Stiffness:</strong> Spinal ligaments can stiffen with age, making the neck less flexible.</li>
          </ul>
        </div>
      </div>
    </div>
  </section>

  <!-- Recognition Section -->
  <section class="awards-section" style="padding: 100px 0; background: var(--white);">
    <div class="container">
      <div class="section-title text-center">
        <span class="badge">Expertise</span>
        <h2>India's Leading Name in Cervical Care</h2>
      </div>
      <div class="awards-grid mt-4">
        <div class="award-card">
          <div class="award-icon">
            <svg width="44" height="44" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><circle cx="12" cy="8" r="6"/><path d="M15.477 12.89 17 22l-5-3-5 3 1.523-9.11"/></svg>
          </div>
          <h3>Best Neurosurgeon Award</h3>
          <p>Recognized for excellence in complex cervical spine surgery and patient outcomes.</p>
        </div>
        <div class="award-card">
          <div class="award-icon">
            <svg width="44" height="44" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"/><polyline points="22 4 12 14.01 9 11.01"/></svg>
          </div>
          <h3>Minimally Invasive Expert</h3>
          <p>Pioneering keyhole techniques for faster recovery in <?php echo $area; ?>.</p>
        </div>
        <div class="award-card">
          <div class="award-icon">
            <svg width="44" height="44" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M23 21v-2a4 4 0 0 0-3-3.87"/><path d="M16 3.13a4 4 0 0 1 0 7.75"/></svg>
          </div>
          <h3>8,000+ Success Stories</h3>
          <p>Trusted by patients globally for life-changing results in neck and spine health.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- FAQ Section -->
  <section id="faq" class="faq-section" style="padding: 100px 0; background: var(--white);">
    <div class="container">
      <div class="section-title text-center">
        <span class="badge">Patient Education</span>
        <h2>FAQs about Cervical Spondylosis in <?php echo $area; ?></h2>
      </div>
      <div class="faq-grid mt-4" style="display: grid; grid-template-columns: 1fr 1fr; gap: 30px;">
        <div class="faq-item" style="background: var(--bg-light); padding: 30px; border-radius: 15px; border: 1px solid rgba(0,0,0,0.03);">
          <h3 style="font-size: 1.2rem; color: var(--primary); margin-bottom: 15px;">Is cervical spondylosis permanent?</h3>
          <p>The structural changes are typically permanent as they are age-related. However, the symptoms (pain and stiffness) can be managed effectively through clinical treatment and lifestyle changes in <?php echo $area; ?>.</p>
        </div>
        <div class="faq-item" style="background: var(--bg-light); padding: 30px; border-radius: 15px; border: 1px solid rgba(0,0,0,0.03);">
          <h3 style="font-size: 1.2rem; color: var(--primary); margin-bottom: 15px;">When is surgery needed for spondylosis?</h3>
          <p>Surgery is recommended if your symptoms are severe or if the condition is compressing your spinal cord (myelopathy) or nerve roots (radiculopathy), which can lead to permanent damage if left untreated.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Contact Section -->
  <section id="contact" class="contact-section" style="padding: 100px 0; background: var(--bg-light);">
    <div class="container">
      <div class="section-title text-center">
        <span class="badge">Consult Today</span>
        <h2>Book a Consultation in <?php echo $area; ?></h2>
        <p>Get a personalized treatment plan for your neck health.</p>
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
                <input type="text" id="name" name="name" placeholder="Your name" required>
              </div>
              <div class="form-group">
                <label for="phone">Phone Number</label>
                <input type="tel" id="phone" name="phone" placeholder="Contact number" required>
              </div>
            </div>
            <div class="form-group">
              <label for="message">Describe Symptoms</label>
              <textarea id="message" name="message" rows="4" placeholder="Describe your neck pain or hand symptoms in <?php echo $area; ?>"></textarea>
            </div>
            <button type="submit" class="btn btn-primary btn-large" style="width: 100%;">Request Appointment</button>
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
        <h2>Frequently Asked Questions about Cervical Spondylosis in <?php echo $area; ?></h2>
      </div>
      <div class="faq-grid mt-4" style="display: grid; grid-template-columns: 1fr 1fr; gap: 30px;">
        <div class="faq-item" style="background: var(--bg-light); padding: 30px; border-radius: 15px; border: 1px solid rgba(0,0,0,0.03);">
          <h3 style="font-size: 1.1rem; color: var(--primary); margin-bottom: 12px;">What is cervical spondylosis?</h3>
          <p style="font-size: 0.95rem;">Cervical spondylosis is age-related wear and tear affecting the cervical spine (neck). It causes degenerative changes in discs and joints, leading to neck pain, stiffness, and sometimes nerve compression (radiculopathy) in <?php echo $area; ?> patients.</p>
        </div>
        <div class="faq-item" style="background: var(--bg-light); padding: 30px; border-radius: 15px; border: 1px solid rgba(0,0,0,0.03);">
          <h3 style="font-size: 1.1rem; color: var(--primary); margin-bottom: 12px;">What are the symptoms of cervical spondylosis?</h3>
          <p style="font-size: 0.95rem;">Common symptoms include neck pain and stiffness, headaches, numbness or tingling in arms/hands, weakness in muscles, and in severe cases, difficulty walking or balancing due to spinal cord compression (myelopathy).</p>
        </div>
        <div class="faq-item" style="background: var(--bg-light); padding: 30px; border-radius: 15px; border: 1px solid rgba(0,0,0,0.03);">
          <h3 style="font-size: 1.1rem; color: var(--primary); margin-bottom: 12px;">What is the difference between cervical radiculopathy and myelopathy?</h3>
          <p style="font-size: 0.95rem;">Radiculopathy is nerve root compression causing arm pain, numbness, and weakness. Myelopathy is spinal cord compression causing leg weakness, gait imbalance, and bowel/bladder issues — a more serious condition requiring urgent evaluation.</p>
        </div>
        <div class="faq-item" style="background: var(--bg-light); padding: 30px; border-radius: 15px; border: 1px solid rgba(0,0,0,0.03);">
          <h3 style="font-size: 1.1rem; color: var(--primary); margin-bottom: 12px;">What is ACDF surgery for cervical spondylosis?</h3>
          <p style="font-size: 0.95rem;">ACDF (Anterior Cervical Discectomy and Fusion) is the most common surgery for cervical spondylosis. Dr. Saroha accesses the spine through the front of the neck, removes the damaged disc, and fuses the vertebrae with a cage and plate for stability.</p>
        </div>
        <div class="faq-item" style="background: var(--bg-light); padding: 30px; border-radius: 15px; border: 1px solid rgba(0,0,0,0.03);">
          <h3 style="font-size: 1.1rem; color: var(--primary); margin-bottom: 12px;">Can I have disc replacement instead of fusion?</h3>
          <p style="font-size: 0.95rem;">Yes. Cervical disc replacement preserves natural neck motion and is ideal for younger patients without significant arthritis. Dr. Saroha will determine candidacy based on your MRI findings and bone quality.</p>
        </div>
        <div class="faq-item" style="background: var(--bg-light); padding: 30px; border-radius: 15px; border: 1px solid rgba(0,0,0,0.03);">
          <h3 style="font-size: 1.1rem; color: var(--primary); margin-bottom: 12px;">How long is recovery from neck surgery?</h3>
          <p style="font-size: 0.95rem;">Most patients from <?php echo $area; ?> are discharged within 24–48 hours and return to desk work in 2–3 weeks. Fusion patients may wear a soft collar for 4–6 weeks. Full recovery typically takes 8–12 weeks.</p>
        </div>
        <div class="faq-item" style="background: var(--bg-light); padding: 30px; border-radius: 15px; border: 1px solid rgba(0,0,0,0.03);">
          <h3 style="font-size: 1.1rem; color: var(--primary); margin-bottom: 12px;">Is cervical spine surgery dangerous?</h3>
          <p style="font-size: 0.95rem;">Like all surgeries, there are risks, but ACDF is one of the safest spinal procedures with very high success rates. Dr. Saroha uses microsurgical techniques and intraoperative monitoring to minimize risks for <?php echo $area; ?> patients.</p>
        </div>
        <div class="faq-item" style="background: var(--bg-light); padding: 30px; border-radius: 15px; border: 1px solid rgba(0,0,0,0.03);">
          <h3 style="font-size: 1.1rem; color: var(--primary); margin-bottom: 12px;">Will neck surgery affect my voice or swallowing?</h3>
          <p style="font-size: 0.95rem;">Temporary hoarseness and mild difficulty swallowing can occur due to surgical retraction but typically resolve within days to weeks. Permanent effects are extremely rare with Dr. Saroha's precise technique.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Internal Linking -->
  <section class="locations-linking bg-light" style="padding: 60px 0; border-top: 1px solid rgba(0,0,0,0.05);">
    <div class="container">
      <div class="section-title text-center" style="margin-bottom: 30px;">
        <h2>Spondylosis Treatment in <?php echo $state; ?></h2>
      </div>
      <div class="location-links-grid" style="display: grid; grid-template-columns: repeat(auto-fill, minmax(200px, 1fr)); gap: 15px;">
        <?php
        $base_url = "/cervical-spondylosis/";
        $state_slug = strtolower(str_replace(' ', '-', $state));
        $city_dirs = glob(__DIR__ . '/../cervical-spondylosis/'.$state_slug.'/*', GLOB_ONLYDIR);
        echo '<a href="'.$base_url.$state_slug.'/" style="padding: 10px; background: var(--primary); border-radius: 8px; text-align: center; color: white; font-weight: 600; font-size: 0.9rem;">Neck Care in '.$state.'</a>';
        foreach($city_dirs as $dir) {
            $slug = basename($dir);
            $name = ucwords(str_replace('-', ' ', $slug));
            if($name != $area) {
                echo '<a href="'.$base_url.$state_slug.'/'.$slug.'/" style="padding: 10px; background: white; border-radius: 8px; text-align: center; box-shadow: 0 2px 4px rgba(0,0,0,0.02); color: var(--text); border: 1px solid rgba(0,0,0,0.05); font-size: 0.9rem; transition: var(--transition);">Neck Treatment in '.$name.'</a>';
            }
        }
        ?>
      </div>
    </div>
  </section>

  <!-- Footer -->
  <?php include __DIR__ . '/footer.php'; ?>
