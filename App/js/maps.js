function initMap() {
    // The location of Yncréa Maroc
    const yncrea = { lat:33.99728965143808, lng: -6.844357952656807};
    // The map, centered at Yncréa Maroc
    const map = new google.maps.Map(document.getElementById("map"), {
      zoom: 4,
      center: yncrea,
    });
    // The marker, positioned at Yncréa Maroc
    const marker = new google.maps.Marker({
      position: yncrea,
      map: map,
    });
  }
  