<?php
// Define the treatment mapping
$treatmentMap = [
    "atlanto-axial-dislocations" => "AAD Surgery",
    "back-pain-treatment" => "Back Pain Treatment",
    "blood-clot" => "Blood Clot Surgery",
    "brachial-plexus" => "Brachial Plexus Surgery",
    "brain-aneurysm" => "Brain Aneurysm Surgery",
    "brain-surgery" => "Brain Surgery",
    "brain-tumor" => "Brain Tumor Surgery",
    "cervical-spine-surgery" => "Cervical Spine Surgery",
    "cervical-spondylosis" => "Cervical Spondylosis Treatment",
    "degenerative-disc" => "Degenerative Disc Treatment",
    "disc-replacement" => "Disc Replacement Surgery",
    "endoscopic-spine-tumor" => "Endoscopic Spine Tumor Surgery",
    "headache" => "Headache & Migraine Treatment",
    "herniated-disc" => "Herniated Disc Treatment",
    "hydrocephalus" => "Hydrocephalus Treatment",
    "microvascular-decompression" => "MVD Surgery",
    "nerve-graft" => "Nerve Graft Surgery",
    "neurosurgeon" => "Neurosurgeon",
    "scoliosis" => "Scoliosis Surgery",
    "spinal-stenosis" => "Spinal Stenosis Treatment",
    "spinal-tuberculosis" => "Spinal Tuberculosis Treatment"
];

// Detect current treatment from URL more robustly
$currentUri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$uriParts = explode('/', trim($currentUri, '/'));
$activeSlug = "neurosurgeon"; // Default
$activeName = "Neurosurgeon";

if (isset($uriParts[0]) && array_key_exists($uriParts[0], $treatmentMap)) {
    $activeSlug = $uriParts[0];
    $activeName = $treatmentMap[$activeSlug];
}

// Current State and Area detection
$pageState = isset($state) ? $state : 'India';
$pageArea = isset($area) ? $area : 'India';

// States list
$allStates = [
    "andhra-pradesh" => "Andhra Pradesh", "arunachal-pradesh" => "Arunachal Pradesh", "assam" => "Assam", "bihar" => "Bihar",
    "chhattisgarh" => "Chhattisgarh", "goa" => "Goa", "gujarat" => "Gujarat", "haryana" => "Haryana",
    "himachal-pradesh" => "Himachal Pradesh", "jharkhand" => "Jharkhand", "karnataka" => "Karnataka", "kerala" => "Kerala",
    "madhya-pradesh" => "Madhya Pradesh", "maharashtra" => "Maharashtra", "manipur" => "Manipur", "meghalaya" => "Meghalaya",
    "mizoram" => "Mizoram", "nagaland" => "Nagaland", "odisha" => "Odisha", "punjab" => "Punjab",
    "rajasthan" => "Rajasthan", "sikkim" => "Sikkim", "tamil-nadu" => "Tamil Nadu", "telangana" => "Telangana",
    "tripura" => "Tripura", "uttar-pradesh" => "Uttar Pradesh", "uttarakhand" => "Uttarakhand", "west-bengal" => "West Bengal",
    "delhi" => "Delhi", "jammu-kashmir" => "Jammu & Kashmir", "ladakh" => "Ladakh", "chandigarh" => "Chandigarh"
];

// Determine if we should show districts or states
$showDistricts = ($pageState != 'India' && $pageArea == $pageState);
$displayList = [];
$heading = "Serving Patients Across India";

if ($showDistricts) {
    $heading = "Serving Patients in " . $pageState;
    $stateSlug = strtolower(str_replace([' ', '&'], ['-', ''], $pageState));
    $path = __DIR__ . '/../' . $activeSlug . '/' . $stateSlug . '/';
    
    if (is_dir($path)) {
        $dirs = array_filter(glob($path . '*'), 'is_dir');
        foreach ($dirs as $dir) {
            if (file_exists($dir . '/index.php')) {
                $citySlug = basename($dir);
                $cityName = ucwords(str_replace('-', ' ', $citySlug));
                $displayList[$activeSlug . '/' . $stateSlug . '/' . $citySlug . '/'] = $cityName;
            }
        }
    }
}

// If no districts found or not on a state page, show states
if (empty($displayList)) {
    $heading = "Serving Patients Across India";
    foreach ($allStates as $slug => $name) {
        $displayList[$activeSlug . '/' . $slug . '/'] = $name;
    }
}
?>

<section class="location-links-section">
  <div class="container">
    <div class="location-header" id="toggleLocations">
      <div class="location-title">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="location-icon"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path><circle cx="12" cy="10" r="3"></circle></svg>
        <h2><?php echo $heading; ?></h2>
      </div>
      <button class="toggle-btn">
        <span id="toggleText">Show Locations</span>
        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="chevron-icon"><polyline points="6 9 12 15 18 9"></polyline></svg>
      </button>
    </div>

    <div class="location-grid" id="locationGrid">
      <!-- India link as the Primary Highlighted Card -->
      <a href="<?php echo $root; ?><?php echo ($activeSlug == 'neurosurgeon') ? 'index.php' : $activeSlug . '/'; ?>" class="location-item highlight-card">
        Best <?php echo $activeName; ?> in India
      </a>
      
      <?php if ($showDistricts): ?>
        <!-- State link as a secondary highlight if on state/city page -->
        <a href="<?php echo $root . $activeSlug . '/' . strtolower(str_replace([' ', '&'], ['-', ''], $pageState)) . '/'; ?>" class="location-item highlight-card">
          Best <?php echo $activeName; ?> in <?php echo $pageState; ?>
        </a>
      <?php endif; ?>

      <?php
      foreach ($displayList as $urlPath => $name) {
        echo '<a href="' . $root . $urlPath . '" class="location-item">
                <span class="bullet">•</span>
                Best ' . $activeName . ' in ' . $name . '
              </a>';
      }
      ?>
    </div>
  </div>
</section>

<style>
.location-links-section {
  background: #f8fafc;
  padding: 60px 0;
  border-top: 1px solid #e2e8f0;
  color: #1e293b;
}

.location-header {
  display: flex;
  justify-content: space-between;
  align-items: center;
  cursor: pointer;
  margin-bottom: 20px;
  padding-bottom: 15px;
  border-bottom: 2px solid #e2e8f0;
}

.location-title {
  display: flex;
  align-items: center;
  gap: 12px;
}

.location-title h2 {
  font-size: 1.6rem;
  font-weight: 800;
  margin: 0;
  color: #0f172a;
  letter-spacing: -0.02em;
}

.location-icon {
  color: #1e3a8a;
}

.toggle-btn {
  background: #fff;
  border: 1px solid #cbd5e1;
  color: #475569;
  padding: 10px 24px;
  border-radius: 8px;
  display: flex;
  align-items: center;
  gap: 8px;
  cursor: pointer;
  transition: all 0.3s ease;
  font-family: inherit;
  font-weight: 600;
  box-shadow: 0 1px 2px rgba(0,0,0,0.05);
}

.toggle-btn:hover {
  background: #f1f5f9;
  border-color: #1e3a8a;
  color: #1e3a8a;
}

.chevron-icon {
  transition: transform 0.3s ease;
}

.toggle-active .chevron-icon {
  transform: rotate(180deg);
}

.location-grid {
  display: grid;
  grid-template-columns: repeat(3, 1fr);
  gap: 12px;
  margin-top: 25px;
  max-height: 0;
  overflow: hidden;
  transition: max-height 0.6s cubic-bezier(0.4, 0, 0.2, 1);
}

.location-grid.show {
  max-height: 4000px;
  transition: max-height 0.8s ease-in-out;
}

.location-item {
  color: #475569;
  text-decoration: none;
  font-size: 0.85rem;
  font-weight: 500;
  display: flex;
  align-items: center;
  padding: 6px 0;
  transition: all 0.2s ease;
  line-height: 1.4;
}

.location-item:hover {
  color: #1e3a8a;
  transform: translateX(3px);
}

.location-item.highlight-card {
  color: #1e3a8a;
  font-weight: 700;
  text-transform: uppercase;
  letter-spacing: 0.05em;
  padding-bottom: 4px;
  margin-bottom: 5px;
}

.location-item.highlight-card:hover {
  color: #1e40af;
  border-color: #1e40af;
}

.bullet {
  color: #1e3a8a;
  margin-right: 12px;
  font-weight: 900;
  font-size: 1.2rem;
}

@media (max-width: 1024px) {
  .location-grid {
    grid-template-columns: repeat(2, 1fr);
  }
}

@media (max-width: 640px) {
  .location-grid {
    grid-template-columns: 1fr;
  }
  .location-title h2 {
    font-size: 1.3rem;
  }
}
</style>

<script>
document.addEventListener('DOMContentLoaded', () => {
  const toggleBtn = document.getElementById('toggleLocations');
  const locationGrid = document.getElementById('locationGrid');
  const toggleText = document.getElementById('toggleText');
  const toggleIconContainer = document.querySelector('.toggle-btn');

  if (toggleBtn && locationGrid) {
    toggleBtn.addEventListener('click', () => {
      const isShowing = locationGrid.classList.toggle('show');
      toggleIconContainer.classList.toggle('toggle-active');
      toggleText.textContent = isShowing ? 'Hide Locations' : 'Show Locations';
    });
  }
});
</script>
