<section class="location-links-section">
  <div class="container">
    <div class="location-header" id="toggleLocations">
      <div class="location-title">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="location-icon"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path><circle cx="12" cy="10" r="3"></circle></svg>
        <h2>Serving Patients Across India</h2>
      </div>
      <button class="toggle-btn">
        <span id="toggleText">Show Locations</span>
        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="chevron-icon"><polyline points="6 9 12 15 18 9"></polyline></svg>
      </button>
    </div>

    <div class="location-grid" id="locationGrid">
      <a href="<?php echo $root; ?>index.php" class="location-item">
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="pin-icon"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path><circle cx="12" cy="10" r="3"></circle></svg>
        Best Neurosurgeon in India
      </a>
      <?php
      $states = [
        "andhra-pradesh" => "Andhra Pradesh",
        "arunachal-pradesh" => "Arunachal Pradesh",
        "assam" => "Assam",
        "bihar" => "Bihar",
        "chhattisgarh" => "Chhattisgarh",
        "goa" => "Goa",
        "gujarat" => "Gujarat",
        "haryana" => "Haryana",
        "himachal-pradesh" => "Himachal Pradesh",
        "jharkhand" => "Jharkhand",
        "karnataka" => "Karnataka",
        "kerala" => "Kerala",
        "madhya-pradesh" => "Madhya Pradesh",
        "maharashtra" => "Maharashtra",
        "manipur" => "Manipur",
        "meghalaya" => "Meghalaya",
        "mizoram" => "Mizoram",
        "nagaland" => "Nagaland",
        "odisha" => "Odisha",
        "punjab" => "Punjab",
        "rajasthan" => "Rajasthan",
        "sikkim" => "Sikkim",
        "tamil-nadu" => "Tamil Nadu",
        "telangana" => "Telangana",
        "tripura" => "Tripura",
        "uttar-pradesh" => "Uttar Pradesh",
        "uttarakhand" => "Uttarakhand",
        "west-bengal" => "West Bengal",
        "delhi" => "Delhi",
        "jammu-kashmir" => "Jammu & Kashmir",
        "ladakh" => "Ladakh",
        "chandigarh" => "Chandigarh"
      ];

      foreach ($states as $slug => $name) {
        echo '<a href="' . $root . 'neurosurgeon/' . $slug . '/" class="location-item">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="pin-icon"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path><circle cx="12" cy="10" r="3"></circle></svg>
                Best Neurosurgeon in ' . $name . '
              </a>';
      }
      ?>
    </div>
  </div>
</section>

<style>
.location-links-section {
  background: #0f172a;
  padding: 40px 0;
  border-top: 1px solid rgba(255, 255, 255, 0.1);
  color: #fff;
}

.location-header {
  display: flex;
  justify-content: space-between;
  align-items: center;
  cursor: pointer;
  margin-bottom: 0;
  padding-bottom: 10px;
  border-bottom: 1px solid rgba(255, 255, 255, 0.05);
}

.location-title {
  display: flex;
  align-items: center;
  gap: 12px;
}

.location-title h2 {
  font-size: 1.5rem;
  font-weight: 700;
  margin: 0;
  color: #f8fafc;
}

.location-icon {
  color: #3b82f6;
}

.toggle-btn {
  background: rgba(255, 255, 255, 0.05);
  border: 1px solid rgba(255, 255, 255, 0.2);
  color: #cbd5e1;
  padding: 8px 20px;
  border-radius: 50px;
  display: flex;
  align-items: center;
  gap: 8px;
  cursor: pointer;
  transition: all 0.3s ease;
  font-family: inherit;
  font-size: 0.9rem;
}

.toggle-btn:hover {
  background: rgba(255, 255, 255, 0.1);
  border-color: #3b82f6;
}

.chevron-icon {
  transition: transform 0.3s ease;
}

.toggle-active .chevron-icon {
  transform: rotate(180deg);
}

.location-grid {
  display: grid;
  grid-template-columns: repeat(auto-fill, minmax(280px, 1fr));
  gap: 15px;
  margin-top: 30px;
  max-height: 0;
  overflow: hidden;
  transition: max-height 0.5s cubic-bezier(0, 1, 0, 1);
}

.location-grid.show {
  max-height: 2000px;
  transition: max-height 0.5s cubic-bezier(1, 0, 1, 0);
}

.location-item {
  color: #94a3b8;
  text-decoration: none;
  font-size: 0.95rem;
  display: flex;
  align-items: center;
  gap: 10px;
  padding: 8px 12px;
  border-radius: 8px;
  transition: all 0.2s ease;
}

.location-item:hover {
  color: #3b82f6;
  background: rgba(59, 130, 246, 0.05);
  transform: translateX(5px);
}

.pin-icon {
  color: #3b82f6;
  opacity: 0.7;
}

@media (max-width: 768px) {
  .location-grid {
    grid-template-columns: 1fr;
  }
  .location-title h2 {
    font-size: 1.2rem;
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
