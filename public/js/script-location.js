$("#get-location").click(() => {
    if (!navigator.geolocation)
      return alert("Geolocation is not supported.");

    navigator.geolocation.getCurrentPosition((position) => {
      $("#latitude").val(`${position.coords.latitude}`);
      $("#longitude").val(`${position.coords.longitude}`);
    });
  });
