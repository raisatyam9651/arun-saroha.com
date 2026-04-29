<?php
// Master Template for Nerve Grafting & Repair Location Pages
// Usage: Define $state and $area before including this file

$page_title = "Best Nerve Grafting & Peripheral Nerve Repair in " . $area . " | Dr. Arun Saroha";
$page_description = "Specialized nerve grafting and microsurgical nerve repair in " . $area . " by Dr. Arun Saroha. Expert treatment for nerve trauma and peripheral injuries in " . $area . ".";
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
    <link rel="canonical" href="https://www.drarunsaroha.com/nerve-graft/<?php echo strtolower(str_replace(' ', '-', $state)); ?>/<?php echo ($area != $state) ? strtolower(str_replace(' ', '-', $area)) . '/' : ''; ?>">
</head>
<body>

  <!-- Header -->
  <?php include __DIR__ . '/header.php'; ?>

  <!-- Hero Section -->
  <section class="hero" style="background: linear-gradient(90deg, #134085 45%, rgba(19, 64, 133, 0) 100%), url('/assets/images/nerve_graft_hero.png') no-repeat right center / contain, radial-gradient(circle at top right, #2a64c5 0%, #0f3d81 80%);">
    <div class="container">
      <div class="hero-content">
        <h1 class="fade-in-up">Best Nerve Grafting & Repair in <br><span class="text-gradient"><?php echo $area; ?></span></h1>
        <p class="hero-tagline fade-in-up">Precision Micro-Surgery to Restore Sensation & Movement</p>
        <p class="hero-subtext fade-in-up delay-1">Expert reconstruction of damaged peripheral nerves using advanced grafting and conduit techniques. Dr. Arun Saroha offers restorative hope for patients in <?php echo $area; ?>.</p>
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
        <span class="badge">Peripheral Nerve Excellence</span>
        <h2 style="font-size: 2.5rem; margin-bottom: 25px;">Advanced Nerve Reconstruction in <?php echo $area; ?></h2>
        <p style="font-size: 1.15rem; margin-bottom: 20px;">Peripheral nerve injuries, whether from deep lacerations, fractures, or crush injuries, can leave a patient in <?php echo $area; ?> with permanent numbness or localized paralysis. Unlike the brain and spinal cord, peripheral nerves have the remarkable ability to regenerate—but only if they are correctly aligned and bridged. Dr. Arun Saroha specializes in high-precision nerve grafting, using microscopic techniques to reconnect the pathways of the human body.</p>
        <p style="font-size: 1.15rem; margin-bottom: 20px;">When a nerve is torn and the ends cannot reach each other without tension, a "nerve graft" is required. For residents of <?php echo $area; ?>, we utilize the gold-standard autograft (usually the sural nerve from the leg) or advanced synthetic conduits to create a bridge through which the nerve fibers can grow back. This meticulous process requires microsurgical sutures thinner than a human hair and an deep understanding of nerve anatomy.</p>
      </div>

      <div class="content-grid" style="display: grid; grid-template-columns: 1fr 1fr; gap: 60px; margin-bottom: 60px;">
        <div class="clinical-list">
          <h3 style="margin-bottom: 20px; color: var(--primary);">Indications for Nerve Grafting</h3>
          <ul style="list-style: disk; padding-left: 20px; color: var(--text);">
            <li style="margin-bottom: 12px;">Complex nerve lacerations with "gap" formation.</li>
            <li style="margin-bottom: 12px;">Chronic "Foot Drop" due to peroneal nerve injury in <?php echo $area; ?>.</li>
            <li style="margin-bottom: 12px;">Persistent numbness or muscle wasting in the hand or forearm.</li>
            <li style="margin-bottom: 12px;">Nerve tumors (Neuromas) that require resection and reconstruction.</li>
            <li style="margin-bottom: 12px;">Traumatic nerve avulsions from high-impact accidents.</li>
          </ul>
        </div>
        <div class="clinical-list">
          <h3 style="margin-bottom: 20px; color: var(--primary);">Regeneration Expectations</h3>
          <p style="margin-bottom: 15px;">Nerve healing in <?php echo $area; ?> is a biological journey:</p>
          <ul style="list-style: disk; padding-left: 20px; color: var(--text);">
            <li style="margin-bottom: 12px;"><strong>Growth Rate:</strong> Approximately 1mm per day (1 inch per month).</li>
            <li style="margin-bottom: 12px;"><strong>Tinel's Sign:</strong> A "tingling" sensation that moves down the arm as the nerve heals.</li>
            <li style="margin-bottom: 12px;"><strong>Sensory First:</strong> Numbness often improves before muscle strength returns.</li>
            <li style="margin-bottom: 12px;"><strong>Rehab Criticality:</strong> Daily stimulation for <?php echo $area; ?> patients to keep muscles alive while the nerve travels.</li>
          </ul>
        </div>
      </div>

      <div class="detailed-section" style="background: var(--bg-light); padding: 50px; border-radius: 20px; border: 1px solid rgba(0,0,0,0.05);">
        <h3 style="font-size: 2rem; margin-bottom: 25px; color: var(--primary);">Micro-Surgical Tech in <?php echo $area; ?></h3>
        <p style="margin-bottom: 20px;">Successful nerve repair depends on the precision of the initial "re-wiring." Dr. Saroha leverages the best technology available for all <?php echo $area; ?> patients:</p>
        <div style="display: grid; grid-template-columns: repeat(3, 1fr); gap: 20px;">
          <div style="background: white; padding: 25px; border-radius: 12px; box-shadow: var(--shadow-sm);">
            <h4 style="color: var(--secondary); margin-bottom: 10px;">Zeiss Microscopy</h4>
            <p style="font-size: 0.9rem;">High-level magnification to align individual nerve bundles (fascicles).</p>
          </div>
          <div style="background: white; padding: 25px; border-radius: 12px; box-shadow: var(--shadow-sm);">
            <h4 style="color: var(--secondary); margin-bottom: 10px;">Nerve Allografts</h4>
            <p style="font-size: 0.9rem;">Processed donor tissues that prevent the need for a second incision in the leg for <?php echo $area; ?> patients.</p>
          </div>
          <div style="background: white; padding: 25px; border-radius: 12px; box-shadow: var(--shadow-sm);">
            <h4 style="color: var(--secondary); margin-bottom: 10px;">Fibrin Glue</h4>
            <p style="font-size: 0.9rem;">Modern biological adhesives that supplement sutures for a "tension-free" and leak-proof repair.</p>
          </div>
        </div>
      </div>

      <div class="content-block" style="margin-top: 60px;">
        <h3 style="font-size: 2rem; margin-bottom: 25px; color: var(--primary);">Multidisciplinary Recovery Approach</h3>
        <p style="margin-bottom: 20px;">In <?php echo $area; ?>, nerve grafting is just the beginning. To ensure the best clinical outcome, we integrate your surgery with specialized neurological rehabilitation. Because muscles disconnected from their nerves for too long will eventually "dry up" (atrophy), we use targeted electrical stimulation and passive exercises to keep your muscle tissue healthy while the nerve regenerates from the graft site down to the target muscle.</p>
        <p style="margin-bottom: 20px;">Dr. Saroha's approach emphasizes patient education and realistic goal setting. While nerve regeneration takes time, the restoration of a patient's ability to walk without a brace or use their hand to hold a cup is a victory worth working for. If you have suffered a nerve injury in <?php echo $area; ?>, don't settle for permanent disability—explore the possibilities of restorative nerve grafting today.</p>
      </div>
    </div>
  </section>

  <!-- Treatment Catalog -->
  <section id="treatments" class="services-section bg-light" style="padding: 100px 0;">
    <div class="container">
      <div class="section-title text-center">
        <span class="badge">Surgical Portfolio</span>
        <h2>Nerve Repair Options for <?php echo $area; ?></h2>
        <p>Advanced solutions for localized and complex peripheral nerve injuries.</p>
      </div>
      
      <div class="services-grid mt-4">
        <!-- 1. Nerve Autograft -->
        <div class="service-card rich-card">
          <div class="service-icon">
            <svg width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 2v20"/><path d="M7 6h10"/><path d="M7 12h10"/><path d="M7 18h10"/></svg>
          </div>
          <h3>Sural Nerve Grafting</h3>
          <p>The "Gold Standard" using the patient's own tissue to bridge large nerve gaps for maximum compatibility and growth for <?php echo $area; ?> patients.</p>
        </div>

        <!-- 2. Primary Repair -->
        <div class="service-card rich-card">
          <div class="service-icon">
            <svg width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><path d="M12 8v8"/><path d="M8 12h8"/></svg>
          </div>
          <h3>Direct Neurorrhaphy</h3>
          <p>Micro-suturing freshly torn nerves for immediate reconnection, providing the fastest recovery path for residents in <?php echo $area; ?>.</p>
        </div>

        <!-- 3. Nerve Conduits -->
        <div class="service-card rich-card">
          <div class="service-icon">
             <svg width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 12h-4l-3 9L9 3l-3 9H2"/></svg>
          </div>
          <h3>Synthetic Guiding</h3>
          <p>Using collagen tubes to bridge small nerve gaps in <?php echo $area; ?> without the need for donor tissue from the patient's leg.</p>
        </div>

        <!-- 4. Neuroma Management -->
        <div class="service-card rich-card">
          <div class="service-icon">
            <svg width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M16 2a2 2 0 0 1 2 2v2a2 2 0 0 1-2 2H8a2 2 0 0 1-2-2V4a2 2 0 0 1 2-2h8Z"/><path d="M12 18v4"/><path d="M8 12h8"/></svg>
          </div>
          <h3>Tumor Resection</h3>
          <p>Removing painful, tangled nerve masses (Neuromas) and reconstructing the nerve path to stop chronic "phantom" pain for our <?php echo $area; ?> surgical patients.</p>
        </div>

        <!-- 5. Foot Drop Prep -->
        <div class="service-card rich-card">
          <div class="service-icon">
            <svg width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 2L2 7l10 5 10-5-10-5Z"/><path d="M2 17l10 5 10-5"/><path d="M2 12l10 5 10-5"/></svg>
          </div>
          <h3>Peroneal Nerve Repair</h3>
          <p>High-precision repair of the nerve behind the knee to restore foot movement and stop "slapping" gait for patients in <?php echo $area; ?>.</p>
        </div>

        <!-- 6. Sensory Restore -->
        <div class="service-card rich-card">
          <div class="service-icon">
            <svg width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 2C6.5 2 2 6.5 2 12s4.5 10 10 10 10-4.5 10-10S17.5 2 12 2Z"/><path d="M8 12h8"/><path d="M12 8v8"/></svg>
          </div>
          <h3>Digital Nerve Grafting</h3>
          <p>Delicate repair of finger nerves to restore sensation and protective feeling for residents in <?php echo $area; ?> suffering from hand trauma.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- FAQ Section -->
  <section id="faq" class="faq-section" style="padding: 100px 0; background: var(--white);">
    <div class="container">
      <div class="section-title text-center">
        <span class="badge">Patient Education</span>
        <h2>Frequently Asked Questions about Nerve Grafting in <?php echo $area; ?></h2>
      </div>
      <div class="faq-grid mt-4" style="display: grid; grid-template-columns: 1fr 1fr; gap: 30px;">
        <div class="faq-item" style="background: var(--bg-light); padding: 30px; border-radius: 15px; border: 1px solid rgba(0,0,0,0.03);">
          <h3 style="font-size: 1.2rem; color: var(--primary); margin-bottom: 15px;">Does taking a nerve from the leg cause a problem?</h3>
          <p>The sural nerve only provides sensation to a small patch on the side of the foot. Taking it for a graft in <?php echo $area; ?> leaves a small numb area but does not affect walking or strength.</p>
        </div>
        <div class="faq-item" style="background: var(--bg-light); padding: 30px; border-radius: 15px; border: 1px solid rgba(0,0,0,0.03);">
          <h3 style="font-size: 1.2rem; color: var(--primary); margin-bottom: 15px;">How do I know if my nerve is regenerating?</h3>
          <p>The best sign is a "Tinel's Sign" - if you tap along the path of the nerve in <?php echo $area; ?> and feel a "zing" or "electric shock" further down the limb, it means the nerve is growing.</p>
        </div>
        <div class="faq-item" style="background: var(--bg-light); padding: 30px; border-radius: 15px; border: 1px solid rgba(0,0,0,0.03);">
          <h3 style="font-size: 1.2rem; color: var(--primary); margin-bottom: 15px;">Can a nerve be repaired 2 years after injury?</h3>
          <p>Sensory nerves can often be repaired years later in <?php echo $area; ?>, but motor (muscle) nerves have a shorter window (typically 12-18 months) before the muscle becomes permanently unusable.</p>
        </div>
        <div class="faq-item" style="background: var(--bg-light); padding: 30px; border-radius: 15px; border: 1px solid rgba(0,0,0,0.03);">
          <h3 style="font-size: 1.2rem; color: var(--primary); margin-bottom: 15px;">Is an EMG test painful?</h3>
          <p>An EMG involves small needles and mild electrical pulses. While slightly uncomfortable, it is the only way for Dr. Saroha to mapping your nerve's health in <?php echo $area; ?>.</p>
        </div>
        <div class="faq-item" style="background: var(--bg-light); padding: 30px; border-radius: 15px; border: 1px solid rgba(0,0,0,0.03);">
          <h3 style="font-size: 1.2rem; color: var(--primary); margin-bottom: 15px;">What if the nerve ends are too far apart?</h3>
          <p>This is exactly why we use a nerve graft. The graft acts as a scaffold or "tunnel" in <?php echo $area; ?> that allows the new nerve fibers to cross the gap and reach the target muscle.</p>
        </div>
        <div class="faq-item" style="background: var(--bg-light); padding: 30px; border-radius: 15px; border: 1px solid rgba(0,0,0,0.03);">
          <h3 style="font-size: 1.2rem; color: var(--primary); margin-bottom: 15px;">Will I need a cast after surgery?</h3>
          <p>Often, a splint or brace is used in <?php echo $area; ?> for 2-3 weeks to protect the delicate nerve repair from being stretched or pulled while the initial healing occurs.</p>
        </div>
        <div class="faq-item" style="background: var(--bg-light); padding: 30px; border-radius: 15px; border: 1px solid rgba(0,0,0,0.03);">
          <h3 style="font-size: 1.2rem; color: var(--primary); margin-bottom: 15px;">How long is the surgery?</h3>
          <p>A simple nerve repair in <?php echo $area; ?> can take 1-2 hours, while complex multi-nerve grafting for a major trauma can take 4-6 hours under the microscope.</p>
        </div>
        <div class="faq-item" style="background: var(--bg-light); padding: 30px; border-radius: 15px; border: 1px solid rgba(0,0,0,0.03);">
          <h3 style="font-size: 1.2rem; color: var(--primary); margin-bottom: 15px;">Can physical therapy replace surgery?</h3>
          <p>Physical therapy helps maintain muscle and joint health in <?php echo $area; ?>, but it cannot "reconnect" a severed nerve. Only surgery can provide the path for regeneration.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Contact / Booking Section -->
  <section id="contact" class="contact-section" style="padding: 100px 0; background: var(--bg-light);">
    <div class="container">
      <div class="section-title text-center">
        <span class="badge">Get In Touch</span>
        <h2>Book a Consult for Nerve Repair in <?php echo $area; ?></h2>
        <p>Consult with India's lead micro-neurosurgical specialist. Fill out the form below and our team will get back to you within 24 hours.</p>
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
                <label for="condition">Nerve Problem</label>
                <select id="condition" name="condition">
                  <option value="nerve-graft" selected>Nerve Grafting / Trauma</option>
                  <option value="foot-drop">Foot Drop</option>
                  <option value="second-opinion">Second Opinion for <?php echo $area; ?> patients</option>
                  <option value="other">Hand/Arm Numbness</option>
                </select>
              </div>
            </div>
            <div class="form-group">
              <label for="message">Message</label>
              <textarea id="message" name="message" rows="4" placeholder="Briefly describe your nerve injury or symptoms in <?php echo $area; ?>"></textarea>
            </div>
            <button type="submit" class="btn btn-primary btn-large" style="width: 100%;">Submit Consultation Request</button>
          </form>
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
          <h2>Nerve Repair Surgery Across India</h2>
        <?php else: ?>
          <h2>Other Locations in <?php echo $state; ?></h2>
        <?php endif; ?>
      </div>
      
      <div class="location-links-grid" style="display: grid; grid-template-columns: repeat(auto-fill, minmax(200px, 1fr)); gap: 15px;">
        <?php
        $base_url = "/nerve-graft/";
        
        if($state == "India") {
            $state_dirs = glob(__DIR__ . '/../nerve-graft/*', GLOB_ONLYDIR);
            foreach($state_dirs as $dir) {
                $slug = basename($dir);
                $name = ucwords(str_replace('-', ' ', $slug));
                echo '<a href="'.$base_url.$slug.'/" style="padding: 10px; background: white; border-radius: 8px; text-align: center; box-shadow: 0 2px 4px rgba(0,0,0,0.02); color: var(--text); border: 1px solid rgba(0,0,0,0.05); font-size: 0.9rem; transition: var(--transition);" onmouseover="this.style.borderColor=\'var(--primary)\'; this.style.color=\'var(--primary)\';" onmouseout="this.style.borderColor=\'rgba(0,0,0,0.05)\'; this.style.color=\'var(--text)\';">Nerve Grafting in '.$name.'</a>';
            }
        } else {
            $state_slug = strtolower(str_replace(' ', '-', $state));
            $city_dirs = glob(__DIR__ . '/../nerve-graft/'.$state_slug.'/*', GLOB_ONLYDIR);
            
            echo '<a href="'.$base_url.$state_slug.'/" style="padding: 10px; background: var(--primary); border-radius: 8px; text-align: center; box-shadow: 0 2px 4px rgba(0,0,0,0.02); color: white; font-weight: 600; font-size: 0.9rem;">Nerve Grafting in '.$state.'</a>';
            
            foreach($city_dirs as $dir) {
                $slug = basename($dir);
                $name = ucwords(str_replace('-', ' ', $slug));
                if($name != $area) {
                    echo '<a href="'.$base_url.$state_slug.'/'.$slug.'/" style="padding: 10px; background: white; border-radius: 8px; text-align: center; box-shadow: 0 2px 4px rgba(0,0,0,0.02); color: var(--text); border: 1px solid rgba(0,0,0,0.05); font-size: 0.9rem; transition: var(--transition);" onmouseover="this.style.borderColor=\'var(--primary)\'; this.style.color=\'var(--primary)\';" onmouseout="this.style.borderColor=\'rgba(0,0,0,0.05)\'; this.style.color=\'var(--text)\';">Nerve Grafting in '.$name.'</a>';
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
