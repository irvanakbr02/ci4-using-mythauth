      const scriptURL = 'https://script.google.com/macros/s/AKfycbyObVLDM9ZDuEvxS44axTvKSDNJOF5-cmJSvo4Tgvj8rDrgdnMxG45h9lBeVrsa784/exec';
      const form = document.forms['wpu-contact-form'];
      const btnKirim = document.querySelector('.btn-kirim');
      const btnLoading = document.querySelector('.btn-loading');

      form.addEventListener('submit', (e) => {
        e.preventDefault();
        // ketika tombol submit diklik
        // tampilkan tombol loading, hilangkan tombol kirim
        btnLoading.classList.toggle('d-none');
        btnKirim.classList.toggle('d-none');
        fetch(scriptURL, { method: 'POST', body: new FormData(form) })
          .then((response) => {
            // tampilkan tombol kirim, hilangkan tombol loading
            btnLoading.classList.toggle('d-none');
            btnKirim.classList.toggle('d-none');
            // tampilkan alert
            // reset formnya
            form.reset();
            console.log('Success!', response);
          })
          .catch((error) => console.error('Error!', error.message));
      });