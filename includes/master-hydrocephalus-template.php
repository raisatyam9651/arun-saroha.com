<?php
// Master Template for Hydrocephalus Treatment Location Pages
// Usage: Define $state and $area before including this file

$page_title = "Best Hydrocephalus Treatment in " . $area . " | Dr. Arun Saroha";
$page_description = "Expert hydrocephalus (water on the brain) treatment in " . $area . " by Dr. Arun Saroha. World-class neurosurgical care for pediatric and adult hydrocephalus in " . $area . ".";
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
    <link rel="canonical" href="https://www.drarunsaroha.com/hydrocephalus/<?php echo strtolower(str_replace(' ', '-', $state)); ?>/<?php echo ($area != $state) ? strtolower(str_replace(' ', '-', $area)) . '/' : ''; ?>">
</head>
<body>
  <?php include __DIR__ . '/header.php'; ?>

  <section class="hero" style="background: linear-gradient(90deg, #134085 45%, rgba(19, 64, 133, 0) 100%), url('/assets/images/spine_hero.png') no-repeat right center / contain, radial-gradient(circle at top right, #2a64c5 0%, #0f3d81 80%);">
    <div class="container">
      <div class="hero-content">
        <h1 class="fade-in-up">Best Hydrocephalus Treatment in <br><span class="text-gradient"><?php echo $area; ?></span></h1>
        <p class="hero-tagline fade-in-up">Advanced Care for Fluid Buildup in the Brain</p>
        <p class="hero-subtext fade-in-up delay-1">Expert treatment for hydrocephalus (water on the brain) by Dr. Arun Saroha. World-class care for both pediatric and adult patients in <?php echo $area; ?>.</p>
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
        <h2 style="font-size: 2.5rem; margin-bottom: 25px;">Understanding Hydrocephalus in <?php echo $area; ?></h2>
        <p style="font-size: 1.15rem; margin-bottom: 20px;">Hydrocephalus is a condition where excess cerebrospinal fluid (CSF) accumulates in the brain's ventricles, causing pressure that can damage brain tissue. For residents of <?php echo $area; ?>, Dr. Arun Saroha provides comprehensive diagnosis and surgical treatment for both congenital and acquired hydrocephalus in patients of all ages.</p>
        <p style="font-size: 1.15rem; margin-bottom: 20px;">With 25+ years of neurosurgical experience, Dr. Saroha has successfully treated hundreds of hydrocephalus patients, from newborns with congenital conditions to elderly patients with normal pressure hydrocephalus. Advanced treatment options at Max Hospital ensure optimal outcomes for <?php echo $area; ?> patients.</p>
      </div>

      <div class="content-grid" style="display: grid; grid-template-columns: 1fr 1fr; gap: 60px; margin-bottom: 60px;">
        <div class="clinical-list">
          <h3 style="margin-bottom: 20px; color: var(--primary);">Types of Hydrocephalus</h3>
          <ul style="list-style: disk; padding-left: 20px; color: var(--text);">
            <li style="margin-bottom: 12px;"><strong>Communicating Hydrocephalus:</strong> CSF flows normally but is not absorbed properly.</li>
            <li style="margin-bottom: 12px;"><strong>Non-Communicating (Obstructive):</strong> CSF flow is blocked within the ventricles.</li>
            <li style="margin-bottom: 12px;"><strong>Normal Pressure Hydrocephalus (NPH):</strong> Common in elderly, causes gait disturbance, dementia, and urinary incontinence.</li>
            <li style="margin-bottom: 12px;"><strong>Congenital Hydrocephalus:</strong> Present at birth, often due to spinal cord defects.</li>
            <li style="margin-bottom: 12px;"><strong>Acquired Hydrocephalus:</strong> Develops after birth due to injury, disease, or hemorrhage.</li>
          </ul>
        </div>
        <div class="clinical-list">
          <h3 style="margin-bottom: 20px; color: var(--primary);">Warning Signs for <?php echo $area; ?> Residents</h3>
          <ul style="list-style: disk; padding-left: 20px; color: var(--text);">
            <li style="margin-bottom: 12px;"><strong>In Infants:</strong> Enlarged head, vomiting, poor feeding, sunsetting eyes.</li>
            <li style="margin-bottom: 12px;"><strong>In Adults:</strong> Headaches, vision problems, gait instability, memory issues.</li>
            <li style="margin-bottom: 12px;"><strong>In Elderly (NPH):</strong> Frequent falls, "magnetic gait," confusion, dementia symptoms.</li>
          </ul>
        </div>
      </div>

      <div class="detailed-section" style="background: var(--bg-light); padding: 50px; border-radius: 20px;">
        <h3 style="font-size: 2rem; margin-bottom: 25px; color: var(--primary);">Surgical Treatments for <?php echo $area; ?> Patients</h3>
        <div style="display: grid; grid-template-columns: repeat(2, 1fr); gap: 30px;">
          <div style="background: white; padding: 30px; border-radius: 12px; box-shadow: var(--shadow-sm);">
            <h4 style="color: var(--secondary); margin-bottom: 15px;">Ventriculoperitoneal (VP) Shunt</h4>
            <p style="font-size: 0.9rem;">A flexible tube placed in the brain ventricles, draining fluid to the abdominal cavity. The most common treatment for hydrocephalus with excellent outcomes for <?php echo $area; ?> patients.</p>
          </div>
          <div style="background: white; padding: 30px; border-radius: 12px; box-shadow: var(--shadow-sm);">
            <h4 style="color: var(--secondary); margin-bottom: 15px;">Endoscopic Third Ventriculostomy (ETV)</h4>
            <p style="font-size: 0.9rem;">A minimally invasive procedure creating a new pathway for CSF to escape the blocked ventricle. Ideal for obstructive hydrocephalus in selected <?php echo $area; ?> patients.</p>
          </div>
          <div style="background: white; padding: 30px; border-radius: 12px; box-shadow: var(--shadow-sm);">
            <h4 style="color: var(--secondary); margin-bottom: 15px;">ETV with Choroid Plexus Cauterization</h4>
            <p style="font-size: 0.9rem;">Combined procedure for pediatric patients, reducing CSF production while creating drainage pathway. High success rates for <?php echo $area; ?> children.</p>
          </div>
          <div style="background: white; padding: 30px; border-radius: 12px; box-shadow: var(--shadow-sm);">
            <h4 style="color: var(--secondary); margin-bottom: 15px;">Shunt Revision Surgery</h4>
            <p style="font-size: 0.9rem;">Expert management of shunt complications including obstruction, infection, or overdrainage for <?php echo $area; ?> patients.</p>
          </div>
        </div>
      </div>

      <div class="content-block" style="margin-top: 60px;">
        <h3 style="font-size: 2rem; margin-bottom: 25px; color: var(--primary);">Normal Pressure Hydrocephalus (NPH) in <?php echo $area; ?></h3>
        <p style="font-size: 1.15rem; margin-bottom: 20px;">NPH is a form of communicating hydrocephalus that primarily affects elderly patients, causing the classic triad of gait disturbance ("magnetic gait"), dementia, and urinary incontinence. The condition is often misdiagnosed as Parkinson's or Alzheimer's disease, but unlike these conditions, NPH is potentially reversible with shunt surgery.</p>
        <p style="font-size: 1.15rem; margin-bottom: 20px;">Dr. Saroha has helped numerous <?php echo $area; ?> patients regain their independence through VP shunt placement for NPH, with many experiencing remarkable improvement in mobility and cognitive function within weeks of surgery.</p>
      </div>
    </div>
  </section>

  <section id="treatments" class="services-section bg-light" style="padding: 100px 0;">
    <div class="container">
      <div class="section-title text-center">
        <span class="badge">Surgical Portfolio</span>
        <h2>Hydrocephalus Treatments for <?php echo $area; ?></h2>
      </div>
      <div class="services-grid mt-4">
        <div class="service-card rich-card">
          <div class="service-icon"><svg width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><path d="M12 6v6l4 2"/></svg></div>
          <h3>VP Shunt Placement</h3>
          <p>Ventriculoperitoneal shunt surgery for permanent CSF drainage. Most common and effective treatment for <?php echo $area; ?> hydrocephalus patients.</p>
        </div>
        <div class="service-card rich-card">
          <div class="service-icon"><svg width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 2a10 10 0 1 0 10 10H12V2Z"/></svg></div>
          <h3>Endoscopic ETV</h3>
          <p>Minimally invasive ventriculostomy avoiding shunt hardware. Ideal for obstructive hydrocephalus with faster recovery for <?php echo $area; ?> patients.</p>
        </div>
        <div class="service-card rich-card">
          <div class="service-icon"><svg width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 12h-4l-3 9L9 3l-3 9H2"/></svg></div>
          <h3>NPH Shunt Surgery</h3>
          <p>Specialized treatment for normal pressure hydrocephalus. Dramatic improvement in gait and cognitive function for <?php echo $area; ?> elderly patients.</p>
        </div>
        <div class="service-card rich-card">
          <div class="service-icon"><svg width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M19 14c1.49-1.46 3-3.21 3-5.5A5.5 5.5 0 0 0 16.5 3c-1.76 0-3 .5-4.5 2-1.5-1.5-2.74-2-4.5-2A5.5 5.5 0 0 0 2 8.5c0 2.3 1.5 4.05 3 5.5l7 7Z"/></svg></div>
          <h3>Pediatric Hydrocephalus</h3>
          <p>Specialized care for infants and children with congenital or acquired hydrocephalus at Max Hospital for <?php echo $area; ?> families.</p>
        </div>
        <div class="service-card rich-card">
          <div class="service-icon"><svg width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="3" y="3" width="18" height="18" rx="2"/><path d="M3 9h18"/></svg></div>
          <h3>Shunt Revision</h3>
          <p>Expert management of failed or malfunctioning shunts including infection treatment and hardware replacement for <?php echo $area; ?> patients.</p>
        </div>
        <div class="service-card rich-card">
          <div class="service-icon"><svg width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/></svg></div>
          <h3>Long-Term Follow-up</h3>
          <p>Comprehensive ongoing care including shunt programming, monitoring, and complication management for <?php echo $area; ?> patients.</p>
        </div>
      </div>
    </div>
  </section>

  <section class="international-section bg-light">
    <div class="container international-container">
      <div class="international-text">
        <span class="badge">Global Reach</span>
        <h2>Hydrocephalus Care for <?php echo $area; ?></h2>
        <p>Dr. Saroha has treated pediatric patients from across India and internationally for complex hydrocephalus. Our team provides comprehensive support including pre-surgical evaluation and long-term follow-up for <?php echo $area; ?> families.</p>
        <a href="../../../international-patients.php" class="btn btn-outline">Learn More</a>
      </div>
      <div class="international-stats">
        <div class="intl-stat-card"><div class="stat-number">1000+</div><p>Hydrocephalus Cases</p></div>
        <div class="intl-stat-card"><div class="stat-number">95%</div><p>Success Rate</p></div>
      </div>
    </div>
  </section>

  <section id="faq" class="faq-section" style="padding: 100px 0; background: var(--white);">
    <div class="container">
      <div class="section-title text-center">
        <span class="badge">Patient Education</span>
        <h2>FAQs about Hydrocephalus in <?php echo $area; ?></h2>
      </div>
      <div class="faq-grid mt-4" style="display: grid; grid-template-columns: 1fr 1fr; gap: 30px;">
        <div class="faq-item" style="background: var(--bg-light); padding: 30px; border-radius: 15px;">
          <h3 style="font-size: 1.2rem; color: var(--primary); margin-bottom: 15px;">What is hydrocephalus?</h3>
          <p>Hydrocephalus is a buildup of fluid in the cavities (ventricles) deep within the brain. The excess fluid increases the size of the ventricles and puts pressure on the brain.</p>
        </div>
        <div class="faq-item" style="background: var(--bg-light); padding: 30px; border-radius: 15px;">
          <h3 style="font-size: 1.2rem; color: var(--primary); margin-bottom: 15px;">How is hydrocephalus treated?</h3>
          <p>Surgery is the primary treatment. Options include VP shunt placement (draining fluid to abdomen) or endoscopic third ventriculostomy (creating a new drainage pathway).</p>
        </div>
        <div class="faq-item" style="background: var(--bg-light); padding: 30px; border-radius: 15px;">
          <h3 style="font-size: 1.2rem; color: var(--primary); margin-bottom: 15px;">What is normal pressure hydrocephalus (NPH)?</h3>
          <p>NPH is a form of communicating hydrocephalus common in elderly patients, causing gait problems, dementia, and incontinence. It's potentially reversible with shunt surgery.</p>
        </div>
        <div class="faq-item" style="background: var(--bg-light); padding: 30px; border-radius: 15px;">
          <h3 style="font-size: 1.2rem; color: var(--primary); margin-bottom: 15px;">How long is recovery after shunt surgery?</h3>
          <p>Hospital stay is typically 3-5 days. Most patients return to normal activities within 4-6 weeks. Shunt programming and adjustment may continue over several months for <?php echo $area; ?> patients.</p>
        </div>
      </div>
    </div>
  </section>

  <section id="contact" class="contact-section" style="padding: 100px 0; background: var(--bg-light);">
    <div class="container">
      <div class="section-title text-center">
        <span class="badge">Get In Touch</span>
        <h2>Hydrocephalus Consultation in <?php echo $area; ?></h2>
      </div>
      <div class="contact-wrapper">
        <div class="contact-maps">
          <div class="map-card">
            <h4><svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"/><circle cx="12" cy="10" r="3"/></svg>Max Hospital, Dwarka</h4>
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3503.5748145304105!2d77.0509589!3d28.582527799999998!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390d196186e5d2cf%3A0xdac8e40fda95b616!2sDr.%20Arun%20Saroha%3A%20Best%20Neurosurgeon%20in%20Dwarka%2C%20Delhi%20%7C%20Spine%20Surgeon%2C%20Brain%20Tumor%2C%20Neurologist%20in%20Delhi%2C%20Max%20Hospital!5e0!3m2!1sen!2sus!4v1776149298554!5m2!1sen!2sus" width="600" height="450" style="border:0;" allowfullscreen loading="lazy"></iframe>
          </div>
          <div class="map-card">
            <h4><svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"/><circle cx="12" cy="10" r="3"/></svg>Max Hospital, Gurugram</h4>
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3507.603000018817!2d77.0747987!3d28.461381599999996!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390d1922738640a3%3A0x717aeb7ba25e979c!2sDr.%20Arun%20Saroha%3A%20Best%20Neurosurgeon%20in%20Gurgaon%2C%20India%20%7C%20Brain%20Tumor%2C%20Stroke%20treatment%2C%20Spine%20Surgeon%20in%20Gurgaon%20-%20Max%20Hospital!5e0!3m2!1sen!2sus!4v1776149342529!5m2!1sen!2sus" width="600" height="450" style="border:0;" allowfullscreen loading="lazy"></iframe>
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
                  <option value="hydrocephalus" selected>Hydrocephalus</option>
                  <option value="nph">Normal Pressure Hydrocephalus</option>
                  <option value="pediatric">Pediatric Hydrocephalus</option>
                  <option value="shunt-revision">Shunt Revision</option>
                </select>
              </div>
            </div>
            <div class="form-group"><label>Message</label><textarea name="message" rows="4" placeholder="Describe the condition and symptoms"></textarea></div>
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
        <h2>Frequently Asked Questions about Hydrocephalus Treatment in <?php echo $area; ?></h2>
      </div>
      <div class="faq-grid mt-4" style="display: grid; grid-template-columns: 1fr 1fr; gap: 30px;">
        <div class="faq-item" style="background: var(--bg-light); padding: 30px; border-radius: 15px; border: 1px solid rgba(0,0,0,0.03);">
          <h3 style="font-size: 1.1rem; color: var(--primary); margin-bottom: 12px;">What is hydrocephalus?</h3>
          <p style="font-size: 0.95rem;">Hydrocephalus is a condition where excess cerebrospinal fluid (CSF) builds up in the brain's ventricles, causing increased pressure. It can affect both children and adults and requires specialist neurosurgical management.</p>
        </div>
        <div class="faq-item" style="background: var(--bg-light); padding: 30px; border-radius: 15px; border: 1px solid rgba(0,0,0,0.03);">
          <h3 style="font-size: 1.1rem; color: var(--primary); margin-bottom: 12px;">What is the difference between communicating and non-communicating hydrocephalus?</h3>
          <p style="font-size: 0.95rem;">Communicating hydrocephalus occurs when CSF flow is blocked after leaving the ventricles. Non-communicating (obstructive) hydrocephalus is caused by a blockage within the ventricular system. Treatment approach differs for each type.</p>
        </div>
        <div class="faq-item" style="background: var(--bg-light); padding: 30px; border-radius: 15px; border: 1px solid rgba(0,0,0,0.03);">
          <h3 style="font-size: 1.1rem; color: var(--primary); margin-bottom: 12px;">What is VP shunt surgery?</h3>
          <p style="font-size: 0.95rem;">Ventriculoperitoneal (VP) shunt surgery involves placing a flexible tube into the brain ventricle to drain excess fluid into the abdominal cavity, where it is safely absorbed. It is the most common treatment for hydrocephalus.</p>
        </div>
        <div class="faq-item" style="background: var(--bg-light); padding: 30px; border-radius: 15px; border: 1px solid rgba(0,0,0,0.03);">
          <h3 style="font-size: 1.1rem; color: var(--primary); margin-bottom: 12px;">What is ETV (Endoscopic Third Ventriculostomy)?</h3>
          <p style="font-size: 0.95rem;">ETV is a minimally invasive procedure where Dr. Saroha creates a new pathway for CSF to bypass the obstruction and circulate around the brain. It avoids the need for a permanent shunt in suitable patients.</p>
        </div>
        <div class="faq-item" style="background: var(--bg-light); padding: 30px; border-radius: 15px; border: 1px solid rgba(0,0,0,0.03);">
          <h3 style="font-size: 1.1rem; color: var(--primary); margin-bottom: 12px;">What is normal pressure hydrocephalus (NPH)?</h3>
          <p style="font-size: 0.95rem;">NPH is a type of communicating hydrocephalus common in older adults, causing gait disturbance, cognitive decline, and urinary incontinence. It is often reversible with VP shunt surgery — sometimes called "treatable dementia."</p>
        </div>
        <div class="faq-item" style="background: var(--bg-light); padding: 30px; border-radius: 15px; border: 1px solid rgba(0,0,0,0.03);">
          <h3 style="font-size: 1.1rem; color: var(--primary); margin-bottom: 12px;">How long do VP shunts last?</h3>
          <p style="font-size: 0.95rem;">VP shunts are designed to be permanent, but revision surgery may be needed due to blockage, infection, or mechanical failure over time. Dr. Saroha's team provides long-term monitoring for all <?php echo $area; ?> shunt patients.</p>
        </div>
        <div class="faq-item" style="background: var(--bg-light); padding: 30px; border-radius: 15px; border: 1px solid rgba(0,0,0,0.03);">
          <h3 style="font-size: 1.1rem; color: var(--primary); margin-bottom: 12px;">Can hydrocephalus be treated in adults?</h3>
          <p style="font-size: 0.95rem;">Absolutely. Adult hydrocephalus, including NPH, is a specialized area of Dr. Saroha's practice. Many adults experience dramatic improvement in gait and cognition after surgical treatment.</p>
        </div>
        <div class="faq-item" style="background: var(--bg-light); padding: 30px; border-radius: 15px; border: 1px solid rgba(0,0,0,0.03);">
          <h3 style="font-size: 1.1rem; color: var(--primary); margin-bottom: 12px;">Does Dr. Saroha treat pediatric hydrocephalus?</h3>
          <p style="font-size: 0.95rem;">Yes. Dr. Saroha treats pediatric hydrocephalus using the latest shunt technology and ETV techniques. He works closely with pediatric teams to ensure comprehensive care for children from <?php echo $area; ?>.</p>
        </div>
      </div>
    </div>
  </section>

  <section class="locations-linking bg-light" style="padding: 60px 0;">
    <div class="container">
      <div class="section-title text-center">
        <?php if($state == "India"): ?><h2>Hydrocephalus Treatment Across India</h2>
        <?php else: ?><h2>Other Locations in <?php echo $state; ?></h2><?php endif; ?>
      </div>
      <div class="location-links-grid" style="display: grid; grid-template-columns: repeat(auto-fill, minmax(200px, 1fr)); gap: 15px;">
        <?php
        $base_url = "/hydrocephalus/";
        if($state == "India") {
            $state_dirs = glob(__DIR__ . '/../hydrocephalus/*', GLOB_ONLYDIR);
            foreach($state_dirs as $dir) {
                $slug = basename($dir);
                $name = ucwords(str_replace('-', ' ', $slug));
                echo '<a href="'.$base_url.$slug.'/" style="padding: 10px; background: white; border-radius: 8px; text-align: center; color: var(--text); border: 1px solid rgba(0,0,0,0.05); font-size: 0.9rem;">Hydrocephalus Treatment in '.$name.'</a>';
            }
        } else {
            $state_slug = strtolower(str_replace(' ', '-', $state));
            $city_dirs = glob(__DIR__ . '/../hydrocephalus/'.$state_slug.'/*', GLOB_ONLYDIR);
            echo '<a href="'.$base_url.$state_slug.'/" style="padding: 10px; background: var(--primary); border-radius: 8px; text-align: center; color: white; font-weight: 600; font-size: 0.9rem;">Hydrocephalus Treatment in '.$state.'</a>';
            foreach($city_dirs as $dir) {
                $slug = basename($dir);
                $name = ucwords(str_replace('-', ' ', $slug));
                if($name != $area) echo '<a href="'.$base_url.$state_slug.'/'.$slug.'/" style="padding: 10px; background: white; border-radius: 8px; text-align: center; color: var(--text); border: 1px solid rgba(0,0,0,0.05); font-size: 0.9rem;">Hydrocephalus Treatment in '.$name.'</a>';
            }
        }
        ?>
      </div>
    </div>
  </section>

  <?php include __DIR__ . '/footer.php'; ?>
</body>
</html>