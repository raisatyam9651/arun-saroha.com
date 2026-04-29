<?php
// Master Template for Disc Replacement Surgery Location Pages
// Usage: Define $state and $area before including this file

$page_title = "Best Artificial Disc Replacement Surgery in " . $area . " | Dr. Arun Saroha";
$page_description = "Advanced motion-preserving Disc Replacement Surgery in " . $area . " by Dr. Arun Saroha. Expert cervical and lumbar ADR solutions for " . $area . " residents.";
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
    <link rel="canonical" href="https://www.drarunsaroha.com/disc-replacement/<?php echo strtolower(str_replace(' ', '-', $state)); ?>/<?php echo ($area != $state) ? strtolower(str_replace(' ', '-', $area)) . '/' : ''; ?>">
</head>
<body>

  <!-- Header -->
  <?php include __DIR__ . '/header.php'; ?>

  <!-- Hero Section (homepage style) -->
  <section class="hero" style="background: linear-gradient(90deg, #134085 45%, rgba(19, 64, 133, 0) 100%), url('/assets/images/disc_replacement_hero.png') no-repeat right center / contain, radial-gradient(circle at top right, #2a64c5 0%, #0f3d81 80%);">
    <div class="container">
      <div class="hero-content">
        <h1 class="fade-in-up">Best Disc Replacement Surgery in <br><span class="text-gradient"><?php echo $area; ?></span></h1>
        <p class="hero-tagline fade-in-up">Preserving Natural Spine Mobility & Function</p>
        <p class="hero-subtext fade-in-up delay-1">The modern alternative to spinal fusion. Dr. Arun Saroha specializes in motion-preserving artificial disc technology for patients in <?php echo $area; ?>.</p>
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
        <span class="badge">Surgical Innovation</span>
        <h2 style="font-size: 2.5rem; margin-bottom: 25px;">Why Choose Disc Replacement in <?php echo $area; ?>?</h2>
        <p style="font-size: 1.15rem; margin-bottom: 20px;">Traditionally, chronic back and neck pain caused by disc degeneration were treated with spinal fusion. While effective, fusion eliminates movement between the vertebrae. For active residents of <?php echo $area; ?>, Artificial Disc Replacement (ADR) represents the next frontier in spinal neurosurgery. Dr. Arun Saroha utilizes state-of-the-art prosthetic discs that mimic the natural fluid movement of the human spine, allowing you to maintain full range of motion.</p>
        <p style="font-size: 1.15rem; margin-bottom: 20px;">The primary advantage of disc replacement for our <?php echo $area; ?> patients is the reduction of "Adjacent Segment Disease." By preserving movement at the operated level, we prevent the "domino effect" where the discs above and below the surgery site wear out prematurely. This motion-preserving approach is ideal for people who wish to return to high-impact activities, sports, or demanding professional lives without the limitations of a stiffened back or neck.</p>
      </div>

      <div class="content-grid" style="display: grid; grid-template-columns: 1fr 1fr; gap: 60px; margin-bottom: 60px;">
        <div class="clinical-list">
          <h3 style="margin-bottom: 20px; color: var(--primary);">Ideal Candidates for ADR</h3>
          <ul style="list-style: disk; padding-left: 20px; color: var(--text);">
            <li style="margin-bottom: 12px;">Patients with localized back or neck pain from one or two degenerated discs.</li>
            <li style="margin-bottom: 12px;">Individuals from <?php echo $area; ?> who have failed 6+ months of conservative therapy.</li>
            <li style="margin-bottom: 12px;">Active patients under 60 with good bone quality.</li>
            <li style="margin-bottom: 12px;">Absence of severe arthritis in the facet joints (spinal joints).</li>
            <li style="margin-bottom: 12px;">Patients seeking to avoid the long-term stiffness associated with fusion.</li>
          </ul>
        </div>
        <div class="clinical-list">
          <h3 style="margin-bottom: 20px; color: var(--primary);">Treating Specific ADR Levels</h3>
          <p style="margin-bottom: 15px;">Dr. Saroha performs both Cervical and Lumbar replacements for <?php echo $area; ?> patients:</p>
          <ul style="list-style: disk; padding-left: 20px; color: var(--text);">
            <li style="margin-bottom: 12px;"><strong>Cervical (Neck):</strong> Usually at C4-C5, C5-C6, or C6-C7 levels for arm pain and neck stiffness.</li>
            <li style="margin-bottom: 12px;"><strong>Lumbar (Back):</strong> Typically at L4-L5 or L5-S1 levels for debilitating lower back pain.</li>
            <li style="margin-bottom: 12px;"><strong>Hybrid Procedures:</strong> Combining replacement at one level and fusion at another for complex cases.</li>
          </ul>
        </div>
      </div>

      <div class="detailed-section" style="background: var(--bg-light); padding: 50px; border-radius: 20px; border: 1px solid rgba(0,0,0,0.05);">
        <h3 style="font-size: 2rem; margin-bottom: 25px; color: var(--primary);">Technology & Precision in <?php echo $area; ?></h3>
        <p style="margin-bottom: 20px;">We utilize the highest-grade artificial discs available globally (ProDisc, M6, or Mobi-C). These implants are constructed from medical-grade cobalt-chrome and ultra-high-molecular-weight polyethylene, designed to last a lifetime.</p>
        <div style="display: grid; grid-template-columns: repeat(3, 1fr); gap: 20px;">
          <div style="background: white; padding: 25px; border-radius: 12px; box-shadow: var(--shadow-sm);">
            <h4 style="color: var(--secondary); margin-bottom: 10px;">Shock Absorption</h4>
            <p style="font-size: 0.9rem;">Implants designed to mimic the natural compression and rebounding of a real spinal disc.</p>
          </div>
          <div style="background: white; padding: 25px; border-radius: 12px; box-shadow: var(--shadow-sm);">
            <h4 style="color: var(--secondary); margin-bottom: 10px;">Endplate Fixation</h4>
            <p style="font-size: 0.9rem;">Specialized coatings that promote bone "in-growth" for a permanent, secure fit.</p>
          </div>
          <div style="background: white; padding: 25px; border-radius: 12px; box-shadow: var(--shadow-sm);">
            <h4 style="color: var(--secondary); margin-bottom: 10px;">6-DOF Movement</h4>
            <p style="font-size: 0.9rem;">Preserving all 6 degrees of natural movement (rotation, flexion, extension, and lateral bending).</p>
          </div>
        </div>
      </div>

      <div class="content-block" style="margin-top: 60px;">
        <h3 style="font-size: 2rem; margin-bottom: 25px; color: var(--primary);">Post-Surgical Success in <?php echo $area; ?></h3>
        <p style="margin-bottom: 20px;">One of the most exciting aspects of disc replacement for our <?php echo $area; ?> patients is the rapid recovery. Because we do not have to wait for bones to "fuse" together, rehab begins almost immediately. Most patients are discharged within 24–48 hours and are encouraged to walk and move their necks or backs naturally from day one.</p>
        <p style="margin-bottom: 20px;">Dr. Saroha's precise surgical technique ensures minimal blood loss and minimal disruption to the surrounding soft tissues. By the time you return to your beautiful home in <?php echo $area; ?>, the healing process is well underway, and most patients report an immediate "lightening" or disappearance of the chronic nerve pain they had suffered from for years.</p>
      </div>
    </div>
  </section>

  <!-- Treatment Catalog (Customized for ADR) -->
  <section id="treatments" class="services-section bg-light" style="padding: 100px 0;">
    <div class="container">
      <div class="section-title text-center">
        <span class="badge">ADR Portfolio</span>
        <h2>Disc Replacement Options for <?php echo $area; ?></h2>
        <p>Premium artificial disc technologies customized to your unique spinal anatomy.</p>
      </div>
      
      <div class="services-grid mt-4">
        <!-- 1. Cervical ADR -->
        <div class="service-card rich-card">
          <div class="service-icon">
            <svg width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="7" r="4"/><path d="M12 11v11"/><path d="M8 15h8"/></svg>
          </div>
          <h3>Cervical Replacement</h3>
          <p>Treating chronic neck and arm pain while preserving natural rotation. The top choice for professionals in <?php echo $area; ?> who need to maintain full neck movement.</p>
        </div>

        <!-- 2. Lumbar ADR -->
        <div class="service-card rich-card">
          <div class="service-icon">
            <svg width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 2L4 7v10l8 5 8-5V7l-8-5z"/><path d="M12 22V12"/><path d="M20 7l-8 5-8-5"/></svg>
          </div>
          <h3>Lumbar Replacement</h3>
          <p>The modern alternative to lumbar fusion for chronic lower back pain. Restoring disc height and stability for active <?php echo $area; ?> residents.</p>
        </div>

        <!-- 3. Micro-ADR -->
        <div class="service-card rich-card">
          <div class="service-icon">
             <svg width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><path d="M12 8v8"/><path d="M8 12h8"/></svg>
          </div>
          <h3>Multi-Level ADR</h3>
          <p>Specialized procedures for patients in <?php echo $area; ?> who have degeneration at two levels, preserving motion across a larger segment of the spine.</p>
        </div>

        <!-- 4. Revision ADR -->
        <div class="service-card rich-card">
          <div class="service-icon">
             <svg width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 2v20"/><path d="M2 12h20"/><path d="M12 12l5 5"/><path d="M12 12l-5-5"/></svg>
          </div>
          <h3>Hybrid Surgery</h3>
          <p>Combining disc replacement and fusion in a single surgery to address differing pathologies at adjacent levels for complex <?php echo $area; ?> cases.</p>
        </div>

        <!-- 5. Minimally Invasive -->
        <div class="service-card rich-card">
          <div class="service-icon">
            <svg width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 12h-4l-3 9L9 3l-3 9H2"/></svg>
          </div>
          <h3>MISS Placement</h3>
          <p>Utilizing corridors as small as 2cm to place artificial discs, minimizing muscle trauma and scaring for patients in <?php echo $area; ?>.</p>
        </div>

        <!-- 6. Non-Surgical Screen -->
        <div class="service-card rich-card">
          <div class="service-icon">
            <svg width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 2C6.5 2 2 6.5 2 12s4.5 10 10 10 10-4.5 10-10S17.5 2 12 2Z"/><path d="M8 12h8"/><path d="M12 8v8"/></svg>
          </div>
          <h3>Candidacy Prep</h3>
          <p>Complete pre-surgical optimization for Patients in <?php echo $area; ?>, including DXA scans for bone density and physical conditioning.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- FAQ Section -->
  <section id="faq" class="faq-section" style="padding: 100px 0; background: var(--white);">
    <div class="container">
      <div class="section-title text-center">
        <span class="badge">Patient Education</span>
        <h2>Frequently Asked Questions about ADR in <?php echo $area; ?></h2>
      </div>
      <div class="faq-grid mt-4" style="display: grid; grid-template-columns: 1fr 1fr; gap: 30px;">
        <div class="faq-item" style="background: var(--bg-light); padding: 30px; border-radius: 15px; border: 1px solid rgba(0,0,0,0.03);">
          <h3 style="font-size: 1.2rem; color: var(--primary); margin-bottom: 15px;">How long do artificial discs last?</h3>
          <p>Modern artificial discs are designed and lab-tested to last 40+ years without mechanical failure, making them a permanent solution for most patients in <?php echo $area; ?>.</p>
        </div>
        <div class="faq-item" style="background: var(--bg-light); padding: 30px; border-radius: 15px; border: 1px solid rgba(0,0,0,0.03);">
          <h3 style="font-size: 1.2rem; color: var(--primary); margin-bottom: 15px;">Can I play sports after a disc replacement?</h3>
          <p>Yes. Many of our patients in <?php echo $area; ?> return to sports like golf, swimming, and cycling within 3 months, as the disc replacement preserves the natural flexibility needed for these activities.</p>
        </div>
        <div class="faq-item" style="background: var(--bg-light); padding: 30px; border-radius: 15px; border: 1px solid rgba(0,0,0,0.03);">
          <h3 style="font-size: 1.2rem; color: var(--primary); margin-bottom: 15px;">Is ADR safer than spinal fusion?</h3>
          <p>Both are safe, but ADR has a lower rate of "adjacent segment disease" (wear in neighboring discs). Dr. Saroha will explain which is safer for your specific bone quality in <?php echo $area; ?>.</p>
        </div>
        <div class="faq-item" style="background: var(--bg-light); padding: 30px; border-radius: 15px; border: 1px solid rgba(0,0,0,0.03);">
          <h3 style="font-size: 1.2rem; color: var(--primary); margin-bottom: 15px;">What if my bone density is low?</h3>
          <p>Patients in <?php echo $area; ?> with osteoporosis or severe osteopenia may be better candidates for fusion, as artificial discs require strong bone for permanent fixation.</p>
        </div>
        <div class="faq-item" style="background: var(--bg-light); padding: 30px; border-radius: 15px; border: 1px solid rgba(0,0,0,0.03);">
          <h3 style="font-size: 1.2rem; color: var(--primary); margin-bottom: 15px;">How long is the surgery for disc replacement?</h3>
          <p>Typically, a single-level cervical replacement takes 45-60 minutes, while a lumbar replacement takes 90-120 minutes. It is a highly efficient procedure for our <?php echo $area; ?> surgical team.</p>
        </div>
        <div class="faq-item" style="background: var(--bg-light); padding: 30px; border-radius: 15px; border: 1px solid rgba(0,0,0,0.03);">
          <h3 style="font-size: 1.2rem; color: var(--primary); margin-bottom: 15px;">Will I set off airport metal detectors?</h3>
          <p>The small amount of medical-grade titanium and cobalt-chrome in the disc typically does not trigger standard security sensors. We can provide a medical card for your travels from <?php echo $area; ?>.</p>
        </div>
        <div class="faq-item" style="background: var(--bg-light); padding: 30px; border-radius: 15px; border: 1px solid rgba(0,0,0,0.03);">
          <h3 style="font-size: 1.2rem; color: var(--primary); margin-bottom: 15px;">Can a disc replacement "slip" out of place?</h3>
          <p>With Dr. Saroha's precise anatomical fitting and the specialized coatings that allow bone to fuse into the device, displacement is extremely rare (under 0.5%) for <?php echo $area; ?> patients.</p>
        </div>
        <div class="faq-item" style="background: var(--bg-light); padding: 30px; border-radius: 15px; border: 1px solid rgba(0,0,0,0.03);">
          <h3 style="font-size: 1.2rem; color: var(--primary); margin-bottom: 15px;">Do you offer second opinions for ADR candidacy?</h3>
          <p>Yes. If you have been told you need a fusion, Dr. Saroha can provide a definitive second opinion on whether you qualify for motion-preserving replacement in <?php echo $area; ?>.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Contact / Booking Section -->
  <section id="contact" class="contact-section" style="padding: 100px 0; background: var(--bg-light);">
    <div class="container">
      <div class="section-title text-center">
        <span class="badge">Get In Touch</span>
        <h2>Book an ADR Consultation for <?php echo $area; ?></h2>
        <p>Consult with India's lead disc replacement specialist. Fill out the form below and our clinical team will get back to you within 24 hours.</p>
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
                <label for="condition">ADR Eligibility</label>
                <select id="condition" name="condition">
                  <option value="cervical-adr" selected>Cervical Disc Replacement</option>
                  <option value="lumbar-adr">Lumbar Disc Replacement</option>
                  <option value="second-opinion">Second Opinion for <?php echo $area; ?> patients</option>
                  <option value="other">Other</option>
                </select>
              </div>
            </div>
            <div class="form-group">
              <label for="message">Message</label>
              <textarea id="message" name="message" rows="4" placeholder="Briefly describe your spinal symptoms in <?php echo $area; ?>"></textarea>
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
          <h2>Disc Replacement Surgery Across India</h2>
        <?php else: ?>
          <h2>Other Locations in <?php echo $state; ?></h2>
        <?php endif; ?>
      </div>
      
      <div class="location-links-grid" style="display: grid; grid-template-columns: repeat(auto-fill, minmax(200px, 1fr)); gap: 15px;">
        <?php
        $base_url = "/disc-replacement/";
        
        if($state == "India") {
            $state_dirs = glob(__DIR__ . '/../disc-replacement/*', GLOB_ONLYDIR);
            foreach($state_dirs as $dir) {
                $slug = basename($dir);
                $name = ucwords(str_replace('-', ' ', $slug));
                echo '<a href="'.$base_url.$slug.'/" style="padding: 10px; background: white; border-radius: 8px; text-align: center; box-shadow: 0 2px 4px rgba(0,0,0,0.02); color: var(--text); border: 1px solid rgba(0,0,0,0.05); font-size: 0.9rem; transition: var(--transition);" onmouseover="this.style.borderColor=\'var(--primary)\'; this.style.color=\'var(--primary)\';" onmouseout="this.style.borderColor=\'rgba(0,0,0,0.05)\'; this.style.color=\'var(--text)\';">Disc Replacement Surgery in '.$name.'</a>';
            }
        } else {
            $state_slug = strtolower(str_replace(' ', '-', $state));
            $city_dirs = glob(__DIR__ . '/../disc-replacement/'.$state_slug.'/*', GLOB_ONLYDIR);
            
            echo '<a href="'.$base_url.$state_slug.'/" style="padding: 10px; background: var(--primary); border-radius: 8px; text-align: center; box-shadow: 0 2px 4px rgba(0,0,0,0.02); color: white; font-weight: 600; font-size: 0.9rem;">Disc Replacement Surgery in '.$state.'</a>';
            
            foreach($city_dirs as $dir) {
                $slug = basename($dir);
                $name = ucwords(str_replace('-', ' ', $slug));
                if($name != $area) {
                    echo '<a href="'.$base_url.$state_slug.'/'.$slug.'/" style="padding: 10px; background: white; border-radius: 8px; text-align: center; box-shadow: 0 2px 4px rgba(0,0,0,0.02); color: var(--text); border: 1px solid rgba(0,0,0,0.05); font-size: 0.9rem; transition: var(--transition);" onmouseover="this.style.borderColor=\'var(--primary)\'; this.style.color=\'var(--primary)\';" onmouseout="this.style.borderColor=\'rgba(0,0,0,0.05)\'; this.style.color=\'var(--text)\';">Disc Replacement Surgery in '.$name.'</a>';
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
