const municipalityOptions = {
    'bataan': ['Abucay', 'Bagac', 'Balanga City', 'Dinalupihan', 'Hermosa', 'Limay', 'Mariveles', 'Morong', 'Orani', 'Orion', 'Pilar', 'Samal'],
    'pampanga': ['Angeles City', 'Apalit', 'Arayat', 'Bacolor', 'Candaba', 'Floridablanca', 'Guagua', 'Lubao', 'Mabalacat City', 'Macabebe', 'Magalang', 'Masantol', 'Mexico', 'Minalin', 'Porac', 'San Fernando City', 'San Luis', 'San Simon', 'Santa Ana', 'Santa Rita', 'Santo Tomas', 'Sasmuan'],
      };

      var provinceSelect = document.querySelector('select[name="province"]');
      var citySelect = document.querySelector('select[name="city"]');
      
      function populateCities() {
        var selectedProvince = provinceSelect.value;
        var cities = municipalityOptions[selectedProvince];
        citySelect.innerHTML = '<option value="" disabled selected>Select City</option>';
        if (cities) {
          cities.forEach(function (city) {
            var option = document.createElement('option');
            option.value = city;
            option.textContent = city;
            citySelect.appendChild(option);
          });
        }
      }
      
      provinceSelect.addEventListener('change', populateCities);
  