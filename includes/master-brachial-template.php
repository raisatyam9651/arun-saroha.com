<?php
// Master Template for Brachial Plexus Injury Location Pages
// Usage: Define $state and $area before including this file

$page_title = "Best Brachial Plexus Surgery in " . $area . " | Dr. Arun Saroha";
$page_description = "Advanced Brachial Plexus repair and nerve transfer surgery in " . $area . " by Dr. Arun Saroha. Expert treatment for arm paralysis and nerve injuries in " . $area . ".";
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
    <link rel="canonical" href="https://www.drarunsaroha.com/brachial-plexus/<?php echo strtolower(str_replace(' ', '-', $state)); ?>/<?php echo ($area != $state) ? strtolower(str_replace(' ', '-', $area)) . '/' : ''; ?>">
</head>
<body>

  <!-- Header -->
  <?php include __DIR__ . '/header.php'; ?>

  <!-- Hero Section -->
  <section class="hero" style="background: linear-gradient(90deg, #134085 45%, rgba(19, 64, 133, 0) 100%), url('/assets/images/brachial_hero.png') no-repeat right center / contain, radial-gradient(circle at top right, #2a64c5 0%, #0f3d81 80%);">
    <div class="container">
      <div class="hero-content">
        <h1 class="fade-in-up">Best Brachial Plexus Surgery in <br><span class="text-gradient"><?php echo $area; ?></span></h1>
        <p class="hero-tagline fade-in-up">Restoring Mobility & Strength to Paralyzed Arms</p>
        <p class="hero-subtext fade-in-up delay-1">Pioneering nerve transfer and grafting techniques for complex plexus injuries. Dr. Arun Saroha specializes in restoring function for patients in <?php echo $area; ?>.</p>
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
        <span class="badge">Nerve Reconstruction Expertise</span>
        <h2 style="font-size: 2.5rem; margin-bottom: 25px;">Expert Brachial Plexus Repair in <?php echo $area; ?></h2>
        <p style="font-size: 1.15rem; margin-bottom: 20px;">Brachial plexus injuries involve damage to the network of nerves that send signals from your spinal cord to your shoulder, arm, and hand. For patients in <?php echo $area; ?>, these injuries—often resulting from high-impact accidents, falls, or birth trauma—can be devastating, leading to complete paralysis of the upper limb. Dr. Arun Saroha utilized cutting-edge neurosurgical techniques to "re-wire" the paralyzed arm, offering a definitive second chance at mobility.</p>
        <p style="font-size: 1.15rem; margin-bottom: 20px;">The window for successful nerve reconstruction in <?php echo $area; ?> is critical. Because muscles begin to atrophy permanently after 12–18 months without nerve supply, early intervention is the single most important factor in recovery. Our clinical philosophy combines precision nerve grafting with advanced nerve transfers to restore shoulder stabilization, elbow flexion, and hand function.</p>
      </div>

      <div class="content-grid" style="display: grid; grid-template-columns: 1fr 1fr; gap: 60px; margin-bottom: 60px;">
        <div class="clinical-list">
          <h3 style="margin-bottom: 20px; color: var(--primary);">Common Symptoms We Address</h3>
          <ul style="list-style: disk; padding-left: 20px; color: var(--text);">
            <li style="margin-bottom: 12px;">Complete inability to move the shoulder, elbow, or hand.</li>
            <li style="margin-bottom: 12px;">Severe "electric" shooting pains radiating down the arm for <?php echo $area; ?> patients.</li>
            <li style="margin-bottom: 12px;">Loss of sensation and numbness in specific zones of the arm.</li>
            <li style="margin-bottom: 12px;">Horner's Syndrome (drooping eyelid + small pupil) suggesting an avulsion.</li>
            <li style="margin-bottom: 12px;">Severe muscle wasting (atrophy) in the shoulder or forearm.</li>
            <li style="margin-bottom: 12px;">Weakness that persists months after a traumatic injury in <?php echo $area; ?>.</li>
          </ul>
        </div>
        <div class="clinical-list">
          <h3 style="margin-bottom: 20px; color: var(--primary);">Mechanisms of Plexus Injury</h3>
          <p style="margin-bottom: 15px;">Understanding the type of injury is critical for our <?php echo $area; ?> surgical plan:</p>
          <ul style="list-style: disk; padding-left: 20px; color: var(--text);">
            <li style="margin-bottom: 12px;"><strong>Avulsion:</strong> Nerves torn away from the spinal cord (most severe).</li>
            <li style="margin-bottom: 12px;"><strong>Rupture:</strong> Nerves torn at a point further away from the cord.</li>
            <li style="margin-bottom: 12px;"><strong>Neuroma:</strong> Scar tissue blocking nerve signal conduction.</li>
            <li style="margin-bottom: 12px;"><strong>Neuropraxia:</strong> Stretched nerves that may recover with time and therapy in <?php echo $area; ?>.</li>
          </ul>
        </div>
      </div>

      <div class="detailed-section" style="background: var(--bg-light); padding: 50px; border-radius: 20px; border: 1px solid rgba(0,0,0,0.05);">
        <h3 style="font-size: 2rem; margin-bottom: 25px; color: var(--primary);">Surgical Innovation in <?php echo $area; ?></h3>
        <p style="margin-bottom: 20px;">Dr. Saroha utilizes the "Oberlin Transfer" and other revolutionary neurotization techniques to restore life to paralyzed limbs. Our protocol for <?php echo $area; ?> patients includes:</p>
        <div style="display: grid; grid-template-columns: repeat(3, 1fr); gap: 20px;">
          <div style="background: white; padding: 25px; border-radius: 12px; box-shadow: var(--shadow-sm);">
            <h4 style="color: var(--secondary); margin-bottom: 10px;">Nerve Transfers</h4>
            <p style="font-size: 0.9rem;">Taking healthy, redundant nerves to power more critical paralyzed muscles.</p>
          </div>
          <div style="background: white; padding: 25px; border-radius: 12px; box-shadow: var(--shadow-sm);">
            <h4 style="color: var(--secondary); margin-bottom: 10px;">Micro-Grafting</h4>
            <p style="font-size: 0.9rem;">Using donor nerves (sural nerve) to bridge long gaps in the damaged plexus.</p>
          </div>
          <div style="background: white; padding: 25px; border-radius: 12px; box-shadow: var(--shadow-sm);">
            <h4 style="color: var(--secondary); margin-bottom: 10px;">Neurological Monitoring</h4>
            <p style="font-size: 0.9rem;">Using high-frequency stimulation to identify viable nerve fibers during surgery for <?php echo $area; ?> patients.</p>
          </div>
        </div>
      </div>

      <div class="content-block" style="margin-top: 60px;">
        <h3 style="font-size: 2rem; margin-bottom: 25px; color: var(--primary);">Clinical Outcomes & Long-Term Rehab</h3>
        <p style="margin-bottom: 20px;">Nerve recovery is a slow process; nerves grow at a rate of approximately 1mm per day. For our patients in <?php echo $area; ?>, this means that consistent, specialized physical therapy is just as important as the surgery itself. Dr. Saroha works closely with regional therapists to ensure that as the "new" signals reach the muscles, the brain learns how to control the arm again.</p>
        <p style="margin-bottom: 20px;">The degree of recovery depends on the time since injury and the severity of the damage. However, even in "un-repairable" cases, we offer salvage procedures like tendon transfers or functional free muscle transfers to provide some degree of arm usage. Our goal in <?php echo $area; ?> is to restore your independence and quality of life through the most advanced micro-neurosurgery available today.</p>
      </div>
    </div>
  </section>

  <!-- Treatment Catalog -->
  <section id="treatments" class="services-section bg-light" style="padding: 100px 0;">
    <div class="container">
      <div class="section-title text-center">
        <span class="badge">Surgical Portfolio</span>
        <h2>Brachial Plexus Options for <?php echo $area; ?></h2>
        <p>Restorative nerve procedures designed to reconnect the brain to the upper limbs.</p>
      </div>
      
      <div class="services-grid mt-4">
        <!-- 1. Nerve Transfer -->
        <div class="service-card rich-card">
          <div class="service-icon">
            <svg width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 2L4 7v10l8 5 8-5V7l-8-5z"/><path d="M12 22V12"/></svg>
          </div>
          <h3>Nerve Neurotization</h3>
          <p>Redirecting functional nerves to power the bicep or shoulder muscles. A game-changing procedure for <?php echo $area; ?> patients with avulsion injuries.</p>
        </div>

        <!-- 2. Sural Nerve Grafting -->
        <div class="service-card rich-card">
          <div class="service-icon">
            <svg width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><path d="M12 8v8"/><path d="M8 12h8"/></svg>
          </div>
          <h3>Plexus Grafting</h3>
          <p>Utilizing delicate nerve bridges to reconnect torn segments under high-power magnification for residents in <?php echo $area; ?>.</p>
        </div>

        <!-- 3. Neurolysis -->
        <div class="service-card rich-card">
          <div class="service-icon">
             <svg width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 12h-4l-3 9L9 3l-3 9H2"/></svg>
          </div>
          <h3>Scare Tissue Release</h3>
          <p>Cleaning and freeing the plexus from heavy internal scarring (neurolysis) to restore normal signal conduction for patients in <?php echo $area; ?>.</p>
        </div>

        <!-- 4. Pediatric Plexus -->
        <div class="service-card rich-card">
          <div class="service-icon">
            <svg width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M16 2a2 2 0 0 1 2 2v2a2 2 0 0 1-2 2H8a2 2 0 0 1-2-2V4a2 2 0 0 1 2-2h8Z"/><path d="M12 18v4"/><path d="M8 12h8"/></svg>
          </div>
          <h3>Erb's Palsy Care</h3>
          <p>Specialized pediatric nerve repair for infants in <?php echo $area; ?> who suffered birth-related brachial plexus injuries (shoulder dystocia).</p>
        </div>

        <!-- 5. Pain Management -->
        <div class="service-card rich-card">
          <div class="service-icon">
            <svg width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 2L2 7l10 5 10-5-10-5Z"/><path d="M2 17l10 5 10-5"/><path d="M2 12l10 5 10-5"/></svg>
          </div>
          <h3>Deafferentation Pain</h3>
          <p>Advanced clinical protocols and surgery (DREZ procedure) to stop the severe, chronic "phantom" pains associated with plexus avulsions in <?php echo $area; ?>.</p>
        </div>

        <!-- 6. Salvage Surgery -->
        <div class="service-card rich-card">
          <div class="service-icon">
            <svg width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 2C6.5 2 2 6.5 2 12s4.5 10 10 10 10-4.5 10-10S17.5 2 12 2Z"/><path d="M8 12h8"/><path d="M12 8v8"/></svg>
          </div>
          <h3>Functional Transfers</h3>
          <p>Secondary procedures for chronic cases in <?php echo $area; ?>, using muscle and tendon transfers to restore basic grip and arm movement.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- FAQ Section -->
  <section id="faq" class="faq-section" style="padding: 100px 0; background: var(--white);">
    <div class="container">
      <div class="section-title text-center">
        <span class="badge">Patient Education</span>
        <h2>Frequently Asked Questions about Brachial Plexus in <?php echo $area; ?></h2>
      </div>
      <div class="faq-grid mt-4" style="display: grid; grid-template-columns: 1fr 1fr; gap: 30px;">
        <div class="faq-item" style="background: var(--bg-light); padding: 30px; border-radius: 15px; border: 1px solid rgba(0,0,0,0.03);">
          <h3 style="font-size: 1.2rem; color: var(--primary); margin-bottom: 15px;">When is the best time for brachial plexus surgery?</h3>
          <p>The "Golden Period" is within 3 to 6 months of the injury. Waiting longer than 12 months significantly reduces the success rate of nerve-to-muscle re-innervation for <?php echo $area; ?> patients.</p>
        </div>
        <div class="faq-item" style="background: var(--bg-light); padding: 30px; border-radius: 15px; border: 1px solid rgba(0,0,0,0.03);">
          <h3 style="font-size: 1.2rem; color: var(--primary); margin-bottom: 15px;">What is a nerve transfer surgery?</h3>
          <p>It's like an electrical "short circuit." We take a minor, working nerve and connect it to a major, paralyzed one to jump-start muscle function in your arm or hand in <?php echo $area; ?>.</p>
        </div>
        <div class="faq-item" style="background: var(--bg-light); padding: 30px; border-radius: 15px; border: 1px solid rgba(0,0,0,0.03);">
          <h3 style="font-size: 1.2rem; color: var(--primary); margin-bottom: 15px;">Will my arm be 100% normal again?</h3>
          <p>While complete restoration is rare for total avulsions, our goal in <?php echo $area; ?> is to restore elbow flexion and shoulder stability, which provides functional independence.</p>
        </div>
        <div class="faq-item" style="background: var(--bg-light); padding: 30px; border-radius: 15px; border: 1px solid rgba(0,0,0,0.03);">
          <h3 style="font-size: 1.2rem; color: var(--primary); margin-bottom: 15px;">Is an EMG/NCV test necessary?</h3>
          <p>Yes. These electrical tests help Dr. Saroha determine which nerves are completely dead and which ones might recover on their own, guiding the surgical plan for <?php echo $area; ?> residents.</p>
        </div>
        <div class="faq-item" style="background: var(--bg-light); padding: 30px; border-radius: 15px; border: 1px solid rgba(0,0,0,0.03);">
          <h3 style="font-size: 1.2rem; color: var(--primary); margin-bottom: 15px;">Does insurance cover brachial plexus surgery?</h3>
          <p>Most major medical insurance plans in <?php echo $area; ?> cover these reconstructive procedures as "medically necessary" following a traumatic injury.</p>
        </div>
        <div class="faq-item" style="background: var(--bg-light); padding: 30px; border-radius: 15px; border: 1px solid rgba(0,0,0,0.03);">
          <h3 style="font-size: 1.2rem; color: var(--primary); margin-bottom: 15px;">How long is the surgery?</h3>
          <p>Depending on the complexity, a full plexus exploration and transfer can take 4 to 8 hours. It is one of the most detailed procedures in our <?php echo $area; ?> surgical calendar.</p>
        </div>
        <div class="faq-item" style="background: var(--bg-light); padding: 30px; border-radius: 15px; border: 1px solid rgba(0,0,0,0.03);">
          <h3 style="font-size: 1.2rem; color: var(--primary); margin-bottom: 15px;">Does Dr. Saroha treat birth-related injuries?</h3>
          <p>Yes. We have specialized protocols for obstetric brachial plexus palsy (Erb's Palsy) for infants from <?php echo $area; ?> who fail to recover arm function within 3-4 months of birth.</p>
        </div>
        <div class="faq-item" style="background: var(--bg-light); padding: 30px; border-radius: 15px; border: 1px solid rgba(0,0,0,0.03);">
          <h3 style="font-size: 1.2rem; color: var(--primary); margin-bottom: 15px;">Do you provide second opinions for chronic paralysis?</h3>
          <p>Absolutely. Even if your injury happened years ago, we can evaluate your candidacy for muscle or tendon transfers to improve your baseline function in <?php echo $area; ?>.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Contact / Booking Section -->
  <section id="contact" class="contact-section" style="padding: 100px 0; background: var(--bg-light);">
    <div class="container">
      <div class="section-title text-center">
        <span class="badge">Get In Touch</span>
        <h2>Book a Consult for Plexus Injury in <?php echo $area; ?></h2>
        <p>Consult with India's lead nerve reconstruction specialist. Fill out the form below and our team will get back to you within 24 hours.</p>
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
                <label for="condition">Injury Type</label>
                <select id="condition" name="condition">
                  <option value="brachial-plexus" selected>Brachial Plexus Injury</option>
                  <option value="erbs-palsy">Pediatric Erb's Palsy</option>
                  <option value="second-opinion">Second Opinion for <?php echo $area; ?> patients</option>
                  <option value="other">Other Nerve Injury</option>
                </select>
              </div>
            </div>
            <div class="form-group">
              <label for="message">Message</label>
              <textarea id="message" name="message" rows="4" placeholder="Briefly describe the arm paralysis or symptoms in <?php echo $area; ?>"></textarea>
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
          <h2>Brachial Plexus Surgery Across India</h2>
        <?php else: ?>
          <h2>Other Locations in <?php echo $state; ?></h2>
        <?php endif; ?>
      </div>
      
      <div class="location-links-grid" style="display: grid; grid-template-columns: repeat(auto-fill, minmax(200px, 1fr)); gap: 15px;">
        <?php
        $base_url = "/brachial-plexus/";
        
        if($state == "India") {
            $state_dirs = glob(__DIR__ . '/../brachial-plexus/*', GLOB_ONLYDIR);
            foreach($state_dirs as $dir) {
                $slug = basename($dir);
                $name = ucwords(str_replace('-', ' ', $slug));
                echo '<a href="'.$base_url.$slug.'/" style="padding: 10px; background: white; border-radius: 8px; text-align: center; box-shadow: 0 2px 4px rgba(0,0,0,0.02); color: var(--text); border: 1px solid rgba(0,0,0,0.05); font-size: 0.9rem; transition: var(--transition);" onmouseover="this.style.borderColor=\'var(--primary)\'; this.style.color=\'var(--primary)\';" onmouseout="this.style.borderColor=\'rgba(0,0,0,0.05)\'; this.style.color=\'var(--text)\';">Brachial Plexus Surgery in '.$name.'</a>';
            }
        } else {
            $state_slug = strtolower(str_replace(' ', '-', $state));
            $city_dirs = glob(__DIR__ . '/../brachial-plexus/'.$state_slug.'/*', GLOB_ONLYDIR);
            
            echo '<a href="'.$base_url.$state_slug.'/" style="padding: 10px; background: var(--primary); border-radius: 8px; text-align: center; box-shadow: 0 2px 4px rgba(0,0,0,0.02); color: white; font-weight: 600; font-size: 0.9rem;">Brachial Plexus Surgery in '.$state.'</a>';
            
            foreach($city_dirs as $dir) {
                $slug = basename($dir);
                $name = ucwords(str_replace('-', ' ', $slug));
                if($name != $area) {
                    echo '<a href="'.$base_url.$state_slug.'/'.$slug.'/" style="padding: 10px; background: white; border-radius: 8px; text-align: center; box-shadow: 0 2px 4px rgba(0,0,0,0.02); color: var(--text); border: 1px solid rgba(0,0,0,0.05); font-size: 0.9rem; transition: var(--transition);" onmouseover="this.style.borderColor=\'var(--primary)\'; this.style.color=\'var(--primary)\';" onmouseout="this.style.borderColor=\'rgba(0,0,0,0.05)\'; this.style.color=\'var(--text)\';">Brachial Plexus Surgery in '.$name.'</a>';
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
